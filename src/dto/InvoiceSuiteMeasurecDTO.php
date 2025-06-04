<?php

namespace horstoeko\invoicesuite\dto;

/**
 * Class representing a DTO for...
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
class InvoiceSuiteMeasurecDTO
{
    /**
     * THe value
     *
     * @var float|null
     */
    protected ?float $value = null;

    /**
     * THe value's unit
     *
     * @var string|null
     */
    protected ?string $unit = null;

    /**
     * Constructor
     *
     * @param float|null $value THe value
     * @param string|null $unit THe value's unit
     */
    public function __construct(?float $value = null, ?string $unit = null)
    {
        $this->setValue($value);
        $this->setUnit($unit);
    }

    /**
     * Returns tHe value
     *
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * Sets tHe value
     *
     * @param float|null $value THe value
     * @return self
     */
    public function setValue(?float $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Returns tHe value's unit
     *
     * @return string|null
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
     * Sets tHe value's unit
     *
     * @param string|null $unit THe value's unit
     * @return self
     */
    public function setUnit(?string $unit): self
    {
        $this->unit = $unit;

        return $this;
    }
}
