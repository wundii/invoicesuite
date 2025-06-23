<?php

namespace horstoeko\invoicesuite\concerns;

/**
 * Trait representing reader pointer handling
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
trait HandlesReaderPointers
{
    /**
     * Internal pointer state storage
     *
     * @var array<string, int>
     */
    protected $pointerState = [];

    /**
     * First value of named pointer (init)
     *
     * @param string $name
     * @return self
     */
    protected function initNamedPointer(string $name): self
    {
        $this->pointerState[$name] = 0;

        return $this;
    }

    /**
     * Next value oi named pointer
     *
     * @param string $name
     * @return self
     */
    protected function nextNamedPointer(string $name): self
    {
        $this->pointerState[$name] = ($this->pointerState[$name] ?? 0) + 1;

        return $this;
    }

    /**
     * Get the value of a named pointer
     *
     * @param string $name
     * @return integer
     */
    protected function getNamedPointer(string $name): int
    {
        return $this->pointerState[$name] ?? 0;
    }

    /**
     * Check that an array has key. The array key is identified by a pointer state
     *
     * @param array $array
     * @param string $name
     * @return boolean
     */
    protected function getArrayHasNamedPointer(array $array, string $name): bool
    {
        return array_key_exists($this->pointerState[$name] ?? 0, $array);
    }
}
