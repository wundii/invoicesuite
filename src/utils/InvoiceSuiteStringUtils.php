<?php

namespace horstoeko\invoicesuite\utils;

use horstoeko\stringmanagement\StringUtils;

/**
 * class representing string utilities
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
class InvoiceSuiteStringUtils
{
    /**
     * Its like the almost known C#-Methods
     * Tests if string is not null and has a value != ""
     *
     * @param string|null $str
     * @return boolean
     */
    public static function stringIsNullOrEmpty(?string $str = null): bool
    {
        return StringUtils::stringIsNullOrEmpty($str);
    }

    /**
     * Check if all elements are null or empty
     * Tests if any string in $values is not null and has a value != ""
     *
     * @param array<string|null> $values
     * @return boolean
     */
    public static function allIsNullOrEmpty(array $values): bool
    {
        foreach ($values as $value) {
            if (!static::stringIsNullOrEmpty($value)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Returns true if at least on element in values is null or empty
     *
     * @param array<string|null> $values
     * @return boolean
     */
    public static function oneIsNullOrEmpty(array $values): bool
    {
        foreach ($values as $value) {
            if (static::stringIsNullOrEmpty($value)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Returns null if the given string is empty
     *
     * @param null|string $str
     * @return null|string
     */
    public static function asNullWhenEmpty(?string $str): ?string
    {
        return static::stringIsNullOrEmpty($str) ? null : $str;
    }

    /**
     * Create a new GUID
     *
     * @return string
     */
    public static function createGuid(): string
    {
        $randomBytes = function_exists('openssl_random_pseudo_bytes') ? openssl_random_pseudo_bytes(16) : random_bytes(16);

        $randomBytes[6] = chr(ord($randomBytes[6]) & 0x0f | 0x40);
        $randomBytes[8] = chr(ord($randomBytes[8]) & 0x3f | 0x80);

        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($randomBytes), 4));
    }
}
