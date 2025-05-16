<?php

namespace horstoeko\invoicesuite\concerns;

use horstoeko\invoicesuite\utils\InvoiceSuiteOptionalWrapper;

/**
 * Trait representing optional handling
 * Always returns an empty, harmless wrapper instance if access is missing. Prevents exceptions in the event of
 * dynamic access to non-existent properties/methods.
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
trait HandlesOptional
{
    /**
     * Magic getter
     *
     * @param mixed $name
     * @return mixed
     */
    public function __get($name)
    {
        return new InvoiceSuiteOptionalWrapper();
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
        return new InvoiceSuiteOptionalWrapper();
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
        return new InvoiceSuiteOptionalWrapper();
    }

    /**
     * Magic static caller
     *
     * @param mixed $method
     * @param mixed $arguments
     * @return mixed
     */
    public static function __callStatic($method, $arguments)
    {
        return new InvoiceSuiteOptionalWrapper();
    }

    /**
     * Magic invoker
     *
     * @param mixed ...$args
     * @return mixed
     */
    public function __invoke(...$args)
    {
        return new InvoiceSuiteOptionalWrapper();
    }

    /**
     * Magic isset
     *
     * @param mixed $name
     * @return boolean
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
        // Nothing here
    }
}
