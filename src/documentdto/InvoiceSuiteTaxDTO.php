<?php

/**
 * This file is a part of horstoeko/invoicesuite.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\documentdto;

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
class InvoiceSuiteTaxDTO
{
    /**
     * The coded description of the tax category
     *
     * @var string|null
     */
    protected ?string $category = null;

    /**
     * The coded description of the tax type
     *
     * @var string|null
     */
    protected ?string $type = null;

    /**
     * The tax base amount
     *
     * @var float|null
     */
    protected ?float $basisAmount = null;

    /**
     * The tax total amount
     *
     * @var float|null
     */
    protected ?float $amount = null;

    /**
     * The tax Rate (Percentage)
     *
     * @var float|null
     */
    protected ?float $percent = null;

    /**
     * The reason for tax exemption (free text)
     *
     * @var string|null
     */
    protected ?string $exemptionReason = null;

    /**
     * The reason for tax exemption (Code)
     *
     * @var string|null
     */
    protected ?string $exemptionReasonCode = null;

    /**
     * The date on which tax is due
     *
     * @var DateTimeInterface|null
     */
    protected ?DateTimeInterface $dueDate = null;

    /**
     * The code for the date on which tax is due
     *
     * @var string|null
     */
    protected ?string $dueCode = null;

    /**
     * Constructor
     *
     * @param string|null $category The coded description of the tax category
     * @param string|null $type The coded description of the tax type
     * @param float|null $basisAmount The tax base amount
     * @param float|null $amount The tax total amount
     * @param float|null $percent The tax Rate (Percentage)
     * @param string|null $exemptionReason The reason for tax exemption (free text)
     * @param string|null $exemptionReasonCode The reason for tax exemption (Code)
     * @param DateTimeInterface|null $dueDate The date on which tax is due
     * @param string|null $dueCode The code for the date on which tax is due
     */
    public function __construct(
        ?string $category = null,
        ?string $type = null,
        ?float $basisAmount = null,
        ?float $amount = null,
        ?float $percent = null,
        ?string $exemptionReason = null,
        ?string $exemptionReasonCode = null,
        ?DateTimeInterface $dueDate = null,
        ?string $dueCode = null,
    ) {
        $this->setCategory($category);
        $this->setType($type);
        $this->setBasisAmount($basisAmount);
        $this->setAmount($amount);
        $this->setPercent($percent);
        $this->setExemptionReason($exemptionReason);
        $this->setExemptionReasonCode($exemptionReasonCode);
        $this->setDueDate($dueDate);
        $this->setDueCode($dueCode);
    }

    /**
     * Returns the coded description of the tax category
     *
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * Sets the coded description of the tax category
     *
     * @param string|null $category The coded description of the tax category
     * @return self
     */
    public function setCategory(?string $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Returns the coded description of the tax type
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets the coded description of the tax type
     *
     * @param string|null $type The coded description of the tax type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Returns the tax base amount
     *
     * @return float|null
     */
    public function getBasisAmount(): ?float
    {
        return $this->basisAmount;
    }

    /**
     * Sets the tax base amount
     *
     * @param float|null $basisAmount The tax base amount
     * @return self
     */
    public function setBasisAmount(?float $basisAmount): self
    {
        $this->basisAmount = $basisAmount;

        return $this;
    }

    /**
     * Returns the tax total amount
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * Sets the tax total amount
     *
     * @param float|null $amount The tax total amount
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Returns the tax Rate (Percentage)
     *
     * @return float|null
     */
    public function getPercent(): ?float
    {
        return $this->percent;
    }

    /**
     * Sets the tax Rate (Percentage)
     *
     * @param float|null $percent The tax Rate (Percentage)
     * @return self
     */
    public function setPercent(?float $percent): self
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * Returns the reason for tax exemption (free text)
     *
     * @return string|null
     */
    public function getExemptionReason(): ?string
    {
        return $this->exemptionReason;
    }

    /**
     * Sets the reason for tax exemption (free text)
     *
     * @param string|null $exemptionReason The reason for tax exemption (free text)
     * @return self
     */
    public function setExemptionReason(?string $exemptionReason): self
    {
        $this->exemptionReason = $exemptionReason;

        return $this;
    }

    /**
     * Returns the reason for tax exemption (Code)
     *
     * @return string|null
     */
    public function getExemptionReasonCode(): ?string
    {
        return $this->exemptionReasonCode;
    }

    /**
     * Sets the reason for tax exemption (Code)
     *
     * @param string|null $exemptionReasonCode The reason for tax exemption (Code)
     * @return self
     */
    public function setExemptionReasonCode(?string $exemptionReasonCode): self
    {
        $this->exemptionReasonCode = $exemptionReasonCode;

        return $this;
    }

    /**
     * Returns the date on which tax is due
     *
     * @return DateTimeInterface|null
     */
    public function getDueDate(): ?DateTimeInterface
    {
        return $this->dueDate;
    }

    /**
     * Sets the date on which tax is due
     *
     * @param DateTimeInterface|null $dueDate The date on which tax is due
     * @return self
     */
    public function setDueDate(?DateTimeInterface $dueDate): self
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Returns the code for the date on which tax is due
     *
     * @return string|null
     */
    public function getDueCode(): ?string
    {
        return $this->dueCode;
    }

    /**
     * Sets the code for the date on which tax is due
     *
     * @param string|null $dueCode The code for the date on which tax is due
     * @return self
     */
    public function setDueCode(?string $dueCode): self
    {
        $this->dueCode = $dueCode;

        return $this;
    }
}
