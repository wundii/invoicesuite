<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TaxEnergyAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TaxEnergyBalanceAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TaxEnergyOnAccountAmount;

class EnergyTaxReportType
{
    use HandlesObjectFlags;

    /**
     * @var TaxEnergyAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TaxEnergyAmount")
     * @JMS\Expose
     * @JMS\SerializedName("TaxEnergyAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTaxEnergyAmount", setter="setTaxEnergyAmount")
     */
    private $taxEnergyAmount;

    /**
     * @var TaxEnergyOnAccountAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TaxEnergyOnAccountAmount")
     * @JMS\Expose
     * @JMS\SerializedName("TaxEnergyOnAccountAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTaxEnergyOnAccountAmount", setter="setTaxEnergyOnAccountAmount")
     */
    private $taxEnergyOnAccountAmount;

    /**
     * @var TaxEnergyBalanceAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TaxEnergyBalanceAmount")
     * @JMS\Expose
     * @JMS\SerializedName("TaxEnergyBalanceAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTaxEnergyBalanceAmount", setter="setTaxEnergyBalanceAmount")
     */
    private $taxEnergyBalanceAmount;

    /**
     * @var TaxScheme|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\TaxScheme")
     * @JMS\Expose
     * @JMS\SerializedName("TaxScheme")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTaxScheme", setter="setTaxScheme")
     */
    private $taxScheme;

    /**
     * @return TaxEnergyAmount|null
     */
    public function getTaxEnergyAmount(): ?TaxEnergyAmount
    {
        return $this->taxEnergyAmount;
    }

    /**
     * @return TaxEnergyAmount
     */
    public function getTaxEnergyAmountWithCreate(): TaxEnergyAmount
    {
        $this->taxEnergyAmount = is_null($this->taxEnergyAmount) ? new TaxEnergyAmount() : $this->taxEnergyAmount;

        return $this->taxEnergyAmount;
    }

    /**
     * @param TaxEnergyAmount|null $taxEnergyAmount
     * @return self
     */
    public function setTaxEnergyAmount(?TaxEnergyAmount $taxEnergyAmount = null): self
    {
        $this->taxEnergyAmount = $taxEnergyAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTaxEnergyAmount(): self
    {
        $this->taxEnergyAmount = null;

        return $this;
    }

    /**
     * @return TaxEnergyOnAccountAmount|null
     */
    public function getTaxEnergyOnAccountAmount(): ?TaxEnergyOnAccountAmount
    {
        return $this->taxEnergyOnAccountAmount;
    }

    /**
     * @return TaxEnergyOnAccountAmount
     */
    public function getTaxEnergyOnAccountAmountWithCreate(): TaxEnergyOnAccountAmount
    {
        $this->taxEnergyOnAccountAmount = is_null($this->taxEnergyOnAccountAmount) ? new TaxEnergyOnAccountAmount() : $this->taxEnergyOnAccountAmount;

        return $this->taxEnergyOnAccountAmount;
    }

    /**
     * @param TaxEnergyOnAccountAmount|null $taxEnergyOnAccountAmount
     * @return self
     */
    public function setTaxEnergyOnAccountAmount(?TaxEnergyOnAccountAmount $taxEnergyOnAccountAmount = null): self
    {
        $this->taxEnergyOnAccountAmount = $taxEnergyOnAccountAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTaxEnergyOnAccountAmount(): self
    {
        $this->taxEnergyOnAccountAmount = null;

        return $this;
    }

    /**
     * @return TaxEnergyBalanceAmount|null
     */
    public function getTaxEnergyBalanceAmount(): ?TaxEnergyBalanceAmount
    {
        return $this->taxEnergyBalanceAmount;
    }

    /**
     * @return TaxEnergyBalanceAmount
     */
    public function getTaxEnergyBalanceAmountWithCreate(): TaxEnergyBalanceAmount
    {
        $this->taxEnergyBalanceAmount = is_null($this->taxEnergyBalanceAmount) ? new TaxEnergyBalanceAmount() : $this->taxEnergyBalanceAmount;

        return $this->taxEnergyBalanceAmount;
    }

    /**
     * @param TaxEnergyBalanceAmount|null $taxEnergyBalanceAmount
     * @return self
     */
    public function setTaxEnergyBalanceAmount(?TaxEnergyBalanceAmount $taxEnergyBalanceAmount = null): self
    {
        $this->taxEnergyBalanceAmount = $taxEnergyBalanceAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTaxEnergyBalanceAmount(): self
    {
        $this->taxEnergyBalanceAmount = null;

        return $this;
    }

    /**
     * @return TaxScheme|null
     */
    public function getTaxScheme(): ?TaxScheme
    {
        return $this->taxScheme;
    }

    /**
     * @return TaxScheme
     */
    public function getTaxSchemeWithCreate(): TaxScheme
    {
        $this->taxScheme = is_null($this->taxScheme) ? new TaxScheme() : $this->taxScheme;

        return $this->taxScheme;
    }

    /**
     * @param TaxScheme|null $taxScheme
     * @return self
     */
    public function setTaxScheme(?TaxScheme $taxScheme = null): self
    {
        $this->taxScheme = $taxScheme;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTaxScheme(): self
    {
        $this->taxScheme = null;

        return $this;
    }
}
