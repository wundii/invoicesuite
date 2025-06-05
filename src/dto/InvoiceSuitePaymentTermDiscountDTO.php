<?php

namespace horstoeko\invoicesuite\dto;

use DateTimeInterface;

/**
 * Class representing a DTO for...
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
class InvoiceSuitePaymentTermDiscountDTO
{
    /**
     * The base amount of the payment discount
     *
     * @var float|null
     */
    protected ?float $baseAmount = null;

    /**
     * The amount of the payment discount
     *
     * @var float|null
     */
    protected ?float $discountAmount = null;

    /**
     * The percentage of the payment discount
     *
     * @var float|null
     */
    protected ?float $discountPercent = null;

    /**
     * The due date reference date
     *
     * @var DateTimeInterface|null
     */
    protected ?DateTimeInterface $baseDate = null;

    /**
     * The maturity period (basis)
     *
     * @var horstoeko\invoicesuite\dto\InvoiceSuitePeriodDTO|null
     */
    protected ?InvoiceSuitePeriodDTO $period = null;

    /**
     * Constructor
     *
     * @param float|null $baseAmount The base amount of the payment discount
     * @param float|null $discountAmount The amount of the payment discount
     * @param float|null $discountPercent The percentage of the payment discount
     * @param DateTimeInterface|null $baseDate The due date reference date
     * @param InvoiceSuitePeriodDTO|null $period The maturity period (basis)
     */
    public function __construct(
        ?float $baseAmount = null,
        ?float $discountAmount = null,
        ?float $discountPercent = null,
        ?DateTimeInterface $baseDate = null,
        ?InvoiceSuitePeriodDTO $period = null,
    ) {
        $this->setBaseAmount($baseAmount);
        $this->setDiscountAmount($discountAmount);
        $this->setDiscountPercent($discountPercent);
        $this->setBaseDate($baseDate);
        $this->setPeriod($period);
    }

    /**
     * Returns the base amount of the payment discount
     *
     * @return float|null
     */
    public function getBaseAmount(): ?float
    {
        return $this->baseAmount;
    }

    /**
     * Sets the base amount of the payment discount
     *
     * @param float|null $baseAmount The base amount of the payment discount
     * @return self
     */
    public function setBaseAmount(?float $baseAmount): self
    {
        $this->baseAmount = $baseAmount;

        return $this;
    }

    /**
     * Returns the amount of the payment discount
     *
     * @return float|null
     */
    public function getDiscountAmount(): ?float
    {
        return $this->discountAmount;
    }

    /**
     * Sets the amount of the payment discount
     *
     * @param float|null $discountAmount The amount of the payment discount
     * @return self
     */
    public function setDiscountAmount(?float $discountAmount): self
    {
        $this->discountAmount = $discountAmount;

        return $this;
    }

    /**
     * Returns the percentage of the payment discount
     *
     * @return float|null
     */
    public function getDiscountPercent(): ?float
    {
        return $this->discountPercent;
    }

    /**
     * Sets the percentage of the payment discount
     *
     * @param float|null $discountPercent The percentage of the payment discount
     * @return self
     */
    public function setDiscountPercent(?float $discountPercent): self
    {
        $this->discountPercent = $discountPercent;

        return $this;
    }

    /**
     * Returns the due date reference date
     *
     * @return DateTimeInterface|null
     */
    public function getBaseDate(): ?DateTimeInterface
    {
        return $this->baseDate;
    }

    /**
     * Sets the due date reference date
     *
     * @param DateTimeInterface|null $baseDate The due date reference date
     * @return self
     */
    public function setBaseDate(?DateTimeInterface $baseDate): self
    {
        $this->baseDate = $baseDate;

        return $this;
    }

    /**
     * Returns the maturity period (basis)
     *
     * @return horstoeko\invoicesuite\dto\InvoiceSuitePeriodDTO|null
     */
    public function getPeriod(): ?InvoiceSuitePeriodDTO
    {
        return $this->period;
    }

    /**
     * Sets the maturity period (basis)
     *
     * @param InvoiceSuitePeriodDTO|null $period The maturity period (basis)
     * @return self
     */
    public function setPeriod(?InvoiceSuitePeriodDTO $period): self
    {
        $this->period = $period;

        return $this;
    }
}
