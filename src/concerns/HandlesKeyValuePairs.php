<?php

declare(strict_types=1);

/**
 * This file is a part of horstoeko/invoicesuite.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\concerns;

/**
 * Trait representing key-value-pair handling.
 *
 * @category InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @see      https://github.com/horstoeko/invoicesuite
 */
trait HandlesKeyValuePairs
{
    /**
     * Internal Key-value-pair container
     *
     * @var array<string,mixed>
     */
    protected $keyValuePairContainer = [];

    /**
     * Returns true if the key exists in the internal key-value-pair container
     *
     * @param  string $newKey
     * @return bool
     */
    protected function hasKeyValuePair(string $newKey): bool
    {
        return array_key_exists($newKey, $this->keyValuePairContainer);
    }

    /**
     * Add a key-value-pair to internal key-value-pair container
     *
     * @param  string $newKey
     * @param  mixed  $newValue
     * @param  bool   $newOverwrite
     * @return static
     */
    protected function addKeyValuePair(string $newKey, mixed $newValue, bool $newOverwrite = false): static
    {
        if ($this->hasKeyValuePair($newKey) && !$newOverwrite) {
            return $this;
        }

        $this->keyValuePairContainer[$newKey] = $newValue;

        return $this;
    }

    /**
     * Returns the value for the given key from the internal key-value-pair container. If key does not
     * exists, a default value will be returned
     *
     * @param  string $newKey
     * @param  mixed  $newDefaultValue
     * @return mixed
     */
    protected function getKeyValuePair(string $newKey, mixed $newDefaultValue): mixed
    {
        if (!$this->hasKeyValuePair($newKey)) {
            return $newDefaultValue;
        }

        return $this->keyValuePairContainer[$newKey];
    }

    /**
     * Remove a key-value-pair from the internal key-value-pair container
     *
     * @param  string $newKey
     * @return static
     */
    protected function removeKeyValuePair(string $newKey): static
    {
        if (!$this->hasKeyValuePair($newKey)) {
            return $this;
        }

        unset($this->keyValuePairContainer[$newKey]);

        return $this;
    }
}
