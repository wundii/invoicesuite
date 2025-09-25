<?php

/**
 * This file is a part of horstoeko/invoicesuite.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\documentdto;

/**
 * Class representing a DTO for...
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
class InvoiceSuiteAllowanceChargeDTO
{
    /**
     * The switch that indicates whether the following data refer to an surcharge or a discount, true means that this an charge
     *
     * @var bool|null
     */
    protected ?bool $chargeIndicator = null;

    /**
     * The amount of the surcharge or discount
     *
     * @var float|null
     */
    protected ?float $amount = null;

    /**
     * The base amount that may be used in conjunction with the percentage of the surcharge or discount
     *
     * @var float|null
     */
    protected ?float $baseAmount = null;

    /**
     * The Percentage that may be used, in conjunction with the document level allowance base amount, to calculate the document level allowance or charge amount. To state 20%, use value 20
     *
     * @var float|null
     */
    protected ?float $percent = null;

    /**
     * The coded description of the tax category
     *
     * @var string|null
     */
    protected ?string $taxCategory = null;

    /**
     * The coded description of the tax type
     *
     * @var string|null
     */
    protected ?string $taxType = null;

    /**
     * The tax Rate (Percentage)
     *
     * @var float|null
     */
    protected ?float $taxPercent = null;

    /**
     * The reason given in text form for the surcharge or discount
     *
     * @var string|null
     */
    protected ?string $reason = null;

    /**
     * The Reason given as a code for the surcharge or discount
     *
     * @var string|null
     */
    protected ?string $reasonCode = null;

    /**
     * Constructor
     *
     * @param bool|null $chargeIndicator The switch that indicates whether the following data refer to an surcharge or a discount, true means that this an charge
     * @param float|null $amount The amount of the surcharge or discount
     * @param float|null $baseAmount The base amount that may be used in conjunction with the percentage of the surcharge or discount
     * @param float|null $percent The Percentage that may be used, in conjunction with the document level allowance base amount, to calculate the document level allowance or charge amount. To state 20%, use value 20
     * @param string|null $taxCategory The coded description of the tax category
     * @param string|null $taxType The coded description of the tax type
     * @param float|null $taxPercent The tax Rate (Percentage)
     * @param string|null $reason The reason given in text form for the surcharge or discount
     * @param string|null $reasonCode The Reason given as a code for the surcharge or discount
     */
    public function __construct(
        ?bool $chargeIndicator = null,
        ?float $amount = null,
        ?float $baseAmount = null,
        ?float $percent = null,
        ?string $taxCategory = null,
        ?string $taxType = null,
        ?float $taxPercent = null,
        ?string $reason = null,
        ?string $reasonCode = null,
    ) {
        $this->setChargeIndicator($chargeIndicator);
        $this->setAmount($amount);
        $this->setBaseAmount($baseAmount);
        $this->setPercent($percent);
        $this->setTaxCategory($taxCategory);
        $this->setTaxType($taxType);
        $this->setTaxPercent($taxPercent);
        $this->setReason($reason);
        $this->setReasonCode($reasonCode);
    }

    /**
     * Returns the switch that indicates whether the following data refer to an surcharge or a discount, true means that this an charge
     *
     * @return bool|null
     */
    public function getChargeIndicator(): ?bool
    {
        return $this->chargeIndicator;
    }

    /**
     * Sets the switch that indicates whether the following data refer to an surcharge or a discount, true means that this an charge
     *
     * @param bool|null $chargeIndicator The switch that indicates whether the following data refer to an surcharge or a discount, true means that this an charge
     * @return self
     */
    public function setChargeIndicator(?bool $chargeIndicator): self
    {
        $this->chargeIndicator = $chargeIndicator;

        return $this;
    }

    /**
     * Returns the amount of the surcharge or discount
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * Sets the amount of the surcharge or discount
     *
     * @param float|null $amount The amount of the surcharge or discount
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Returns the base amount that may be used in conjunction with the percentage of the surcharge or discount
     *
     * @return float|null
     */
    public function getBaseAmount(): ?float
    {
        return $this->baseAmount;
    }

    /**
     * Sets the base amount that may be used in conjunction with the percentage of the surcharge or discount
     *
     * @param float|null $baseAmount The base amount that may be used in conjunction with the percentage of the surcharge or discount
     * @return self
     */
    public function setBaseAmount(?float $baseAmount): self
    {
        $this->baseAmount = $baseAmount;

        return $this;
    }

    /**
     * Returns the Percentage that may be used, in conjunction with the document level allowance base amount, to calculate the document level allowance or charge amount. To state 20%, use value 20
     *
     * @return float|null
     */
    public function getPercent(): ?float
    {
        return $this->percent;
    }

    /**
     * Sets the Percentage that may be used, in conjunction with the document level allowance base amount, to calculate the document level allowance or charge amount. To state 20%, use value 20
     *
     * @param float|null $percent The Percentage that may be used, in conjunction with the document level allowance base amount, to calculate the document level allowance or charge amount. To state 20%, use value 20
     * @return self
     */
    public function setPercent(?float $percent): self
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * Returns the coded description of the tax category
     *
     * @return string|null
     */
    public function getTaxCategory(): ?string
    {
        return $this->taxCategory;
    }

    /**
     * Sets the coded description of the tax category
     *
     * @param string|null $taxCategory The coded description of the tax category
     * @return self
     */
    public function setTaxCategory(?string $taxCategory): self
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * Returns the coded description of the tax type
     *
     * @return string|null
     */
    public function getTaxType(): ?string
    {
        return $this->taxType;
    }

    /**
     * Sets the coded description of the tax type
     *
     * @param string|null $taxType The coded description of the tax type
     * @return self
     */
    public function setTaxType(?string $taxType): self
    {
        $this->taxType = $taxType;

        return $this;
    }

    /**
     * Returns the tax Rate (Percentage)
     *
     * @return float|null
     */
    public function getTaxPercent(): ?float
    {
        return $this->taxPercent;
    }

    /**
     * Sets the tax Rate (Percentage)
     *
     * @param float|null $taxPercent The tax Rate (Percentage)
     * @return self
     */
    public function setTaxPercent(?float $taxPercent): self
    {
        $this->taxPercent = $taxPercent;

        return $this;
    }

    /**
     * Returns the reason given in text form for the surcharge or discount
     *
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * Sets the reason given in text form for the surcharge or discount
     *
     * @param string|null $reason The reason given in text form for the surcharge or discount
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Returns the Reason given as a code for the surcharge or discount
     *
     * @return string|null
     */
    public function getReasonCode(): ?string
    {
        return $this->reasonCode;
    }

    /**
     * Sets the Reason given as a code for the surcharge or discount
     *
     * @param string|null $reasonCode The Reason given as a code for the surcharge or discount
     * @return self
     */
    public function setReasonCode(?string $reasonCode): self
    {
        $this->reasonCode = $reasonCode;

        return $this;
    }
}
