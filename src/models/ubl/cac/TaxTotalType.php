<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\ubl\cbc\RoundingAmount;
use horstoeko\invoicesuite\models\ubl\cbc\TaxAmount;

class TaxTotalType
{
    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\TaxAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\TaxAmount")
     * @JMS\Expose
     * @JMS\SerializedName("TaxAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTaxAmount", setter="setTaxAmount")
     */
    private $taxAmount;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\RoundingAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\RoundingAmount")
     * @JMS\Expose
     * @JMS\SerializedName("RoundingAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRoundingAmount", setter="setRoundingAmount")
     */
    private $roundingAmount;

    /**
     * @var bool
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("TaxEvidenceIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTaxEvidenceIndicator", setter="setTaxEvidenceIndicator")
     */
    private $taxEvidenceIndicator;

    /**
     * @var bool
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("TaxIncludedIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTaxIncludedIndicator", setter="setTaxIncludedIndicator")
     */
    private $taxIncludedIndicator;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\TaxSubtotal>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\TaxSubtotal>")
     * @JMS\Expose
     * @JMS\SerializedName("TaxSubtotal")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="TaxSubtotal", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getTaxSubtotal", setter="setTaxSubtotal")
     */
    private $taxSubtotal;

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\TaxAmount|null
     */
    public function getTaxAmount(): ?TaxAmount
    {
        return $this->taxAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\TaxAmount
     */
    public function getTaxAmountWithCreate(): TaxAmount
    {
        $this->taxAmount = is_null($this->taxAmount) ? new TaxAmount() : $this->taxAmount;

        return $this->taxAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\TaxAmount $taxAmount
     * @return self
     */
    public function setTaxAmount(TaxAmount $taxAmount): self
    {
        $this->taxAmount = $taxAmount;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\RoundingAmount|null
     */
    public function getRoundingAmount(): ?RoundingAmount
    {
        return $this->roundingAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\RoundingAmount
     */
    public function getRoundingAmountWithCreate(): RoundingAmount
    {
        $this->roundingAmount = is_null($this->roundingAmount) ? new RoundingAmount() : $this->roundingAmount;

        return $this->roundingAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\RoundingAmount $roundingAmount
     * @return self
     */
    public function setRoundingAmount(RoundingAmount $roundingAmount): self
    {
        $this->roundingAmount = $roundingAmount;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getTaxEvidenceIndicator(): ?bool
    {
        return $this->taxEvidenceIndicator;
    }

    /**
     * @param bool $taxEvidenceIndicator
     * @return self
     */
    public function setTaxEvidenceIndicator(bool $taxEvidenceIndicator): self
    {
        $this->taxEvidenceIndicator = $taxEvidenceIndicator;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getTaxIncludedIndicator(): ?bool
    {
        return $this->taxIncludedIndicator;
    }

    /**
     * @param bool $taxIncludedIndicator
     * @return self
     */
    public function setTaxIncludedIndicator(bool $taxIncludedIndicator): self
    {
        $this->taxIncludedIndicator = $taxIncludedIndicator;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\TaxSubtotal>|null
     */
    public function getTaxSubtotal(): ?array
    {
        return $this->taxSubtotal;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\TaxSubtotal> $taxSubtotal
     * @return self
     */
    public function setTaxSubtotal(array $taxSubtotal): self
    {
        $this->taxSubtotal = $taxSubtotal;

        return $this;
    }

    /**
     * @return self
     */
    public function clearTaxSubtotal(): self
    {
        $this->taxSubtotal = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\TaxSubtotal $taxSubtotal
     * @return self
     */
    public function addToTaxSubtotal(TaxSubtotal $taxSubtotal): self
    {
        $this->taxSubtotal[] = $taxSubtotal;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\TaxSubtotal
     */
    public function addToTaxSubtotalWithCreate(): TaxSubtotal
    {
        $this->addTotaxSubtotal($taxSubtotal = new TaxSubtotal());

        return $taxSubtotal;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\TaxSubtotal $taxSubtotal
     * @return self
     */
    public function addOnceToTaxSubtotal(TaxSubtotal $taxSubtotal): self
    {
        $this->taxSubtotal[0] = $taxSubtotal;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\TaxSubtotal
     */
    public function addOnceToTaxSubtotalWithCreate(): TaxSubtotal
    {
        if ($this->taxSubtotal === []) {
            $this->addOnceTotaxSubtotal(new TaxSubtotal());
        }

        return $this->taxSubtotal[0];
    }
}
