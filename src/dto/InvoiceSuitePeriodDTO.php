<?php

/**
 * This file is a part of horstoeko/invoicesuite.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
class InvoiceSuitePeriodDTO
{
    /**
     * The period value
     *
     * @var float|null
     */
    protected ?float $period = null;

    /**
     * The periods's unit
     *
     * @var string|null
     */
    protected ?string $periodUnit = null;

    /**
     * Constructor
     *
     * @param float|null $period The period value
     * @param string|null $periodUnit The periods's unit
     */
    public function __construct(?float $period = null, ?string $periodUnit = null)
    {
        $this->setPeriod($period);
        $this->setPeriodUnit($periodUnit);
    }

    /**
     * Returns the period value
     *
     * @return float|null
     */
    public function getPeriod(): ?float
    {
        return $this->period;
    }

    /**
     * Sets the period value
     *
     * @param float|null $period The period value
     * @return self
     */
    public function setPeriod(?float $period): self
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Returns the periods's unit
     *
     * @return string|null
     */
    public function getPeriodUnit(): ?string
    {
        return $this->periodUnit;
    }

    /**
     * Sets the periods's unit
     *
     * @param string|null $periodUnit The periods's unit
     * @return self
     */
    public function setPeriodUnit(?string $periodUnit): self
    {
        $this->periodUnit = $periodUnit;

        return $this;
    }
}
