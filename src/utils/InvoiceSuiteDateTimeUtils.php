<?php

namespace horstoeko\invoicesuite\utils;

use DateTimeInterface;

/**
 * class representing date/time utilities
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
class InvoiceSuiteDateTimeUtils
{
    /**
     * Returns true if the given value is null otherwise false
     *
     * @param DateTimeInterface|null $value
     * @return boolean
     */
    public static function datetimeIsNullOrEmpty(?DateTimeInterface $value = null): bool
    {
        return is_null($value);
    }

    /**
     * Check if all elements are null or empty
     * Tests if any datetime in $values is not null and has a value != ""
     *
     * @param array<DateTimeInterface|null> $values
     * @return boolean
     */
    public static function allIsNullOrEmpty(array $values): bool
    {
        foreach ($values as $value) {
            if (!static::datetimeIsNullOrEmpty($value)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Returns true if at least on element in values is null or empty
     *
     * @param array<DateTimeInterface|null> $values
     * @return boolean
     */
    public static function oneIsNullOrEmpty(array $values): bool
    {
        foreach ($values as $value) {
            if (static::dateTimeIsNullOrEmpty($value)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Returns null if the given date/time is empty
     *
     * @param null|DateTimeInterface $str
     * @return null|DateTimeInterface
     */
    public static function asNullWhenEmpty(?DateTimeInterface $str): ?DateTimeInterface
    {
        return static::datetimeIsNullOrEmpty($str) ? null : $str;
    }
}
