<?php

namespace horstoeko\invoicesuite\utils;

/**
 * class representing optional wrapper
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
class InvoiceSuiteOptionalWrapper
{
    /**
     * Magic Getter
     *
     * @param mixed $name
     * @return OptionalWrapper
     */
    public function __get($name)
    {
        return new static();
    }

    /**
     * Magic setter
     *
     * @param mixed $name
     * @param mixed $value
     * @return void
     */
    public function __set($name, $value)
    {
        // Ignore
    }

    /**
     * Magic caller
     *
     * @param mixed $method
     * @param mixed $arguments
     * @return mixed
     */
    public function __call($method, $arguments)
    {
        return new static();
    }

    /**
     * Magic caller (static)
     *
     * @param mixed $method
     * @param mixed $arguments
     * @return mixed
     */
    public static function __callStatic($method, $arguments)
    {
        return new static();
    }

    /**
     * Magic invoker
     *
     * @param mixed ...$args
     * @return mixed
     */
    public function __invoke(...$args)
    {
        return new static();
    }

    /**
     * Magic isset
     *
     * @param mixed $name
     * @return false
     */
    public function __isset($name)
    {
        return false;
    }

    /**
     * Magic unset
     *
     * @param mixed $name
     * @return void
     */
    public function __unset($name)
    {
        // Ignorieren
    }
}
