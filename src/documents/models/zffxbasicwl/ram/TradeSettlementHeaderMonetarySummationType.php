<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxbasicwl\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\AmountType;

class TradeSettlementHeaderMonetarySummationType
{
    use HandlesObjectFlags;

    /**
     * @var AmountType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\AmountType")
     * @JMS\Expose
     * @JMS\SerializedName("LineTotalAmount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getLineTotalAmount", setter="setLineTotalAmount")
     */
    private $lineTotalAmount;

    /**
     * @var AmountType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\AmountType")
     * @JMS\Expose
     * @JMS\SerializedName("ChargeTotalAmount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getChargeTotalAmount", setter="setChargeTotalAmount")
     */
    private $chargeTotalAmount;

    /**
     * @var AmountType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\AmountType")
     * @JMS\Expose
     * @JMS\SerializedName("AllowanceTotalAmount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getAllowanceTotalAmount", setter="setAllowanceTotalAmount")
     */
    private $allowanceTotalAmount;

    /**
     * @var AmountType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\AmountType")
     * @JMS\Expose
     * @JMS\SerializedName("TaxBasisTotalAmount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getTaxBasisTotalAmount", setter="setTaxBasisTotalAmount")
     */
    private $taxBasisTotalAmount;

    /**
     * @var array<AmountType>|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\AmountType>")
     * @JMS\Expose
     * @JMS\SerializedName("TaxTotalAmount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\XmlList(inline=true, entry="TaxTotalAmount", namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\Accessor(getter="getTaxTotalAmount", setter="setTaxTotalAmount")
     */
    private $taxTotalAmount;

    /**
     * @var AmountType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\AmountType")
     * @JMS\Expose
     * @JMS\SerializedName("GrandTotalAmount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getGrandTotalAmount", setter="setGrandTotalAmount")
     */
    private $grandTotalAmount;

    /**
     * @var AmountType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\AmountType")
     * @JMS\Expose
     * @JMS\SerializedName("TotalPrepaidAmount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getTotalPrepaidAmount", setter="setTotalPrepaidAmount")
     */
    private $totalPrepaidAmount;

    /**
     * @var AmountType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\AmountType")
     * @JMS\Expose
     * @JMS\SerializedName("DuePayableAmount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getDuePayableAmount", setter="setDuePayableAmount")
     */
    private $duePayableAmount;

    /**
     * @return AmountType|null
     */
    public function getLineTotalAmount(): ?AmountType
    {
        return $this->lineTotalAmount;
    }

    /**
     * @return AmountType
     */
    public function getLineTotalAmountWithCreate(): AmountType
    {
        $this->lineTotalAmount = is_null($this->lineTotalAmount) ? new AmountType() : $this->lineTotalAmount;

        return $this->lineTotalAmount;
    }

    /**
     * @param AmountType|null $lineTotalAmount
     * @return self
     */
    public function setLineTotalAmount(?AmountType $lineTotalAmount = null): self
    {
        $this->lineTotalAmount = $lineTotalAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLineTotalAmount(): self
    {
        $this->lineTotalAmount = null;

        return $this;
    }

    /**
     * @return AmountType|null
     */
    public function getChargeTotalAmount(): ?AmountType
    {
        return $this->chargeTotalAmount;
    }

    /**
     * @return AmountType
     */
    public function getChargeTotalAmountWithCreate(): AmountType
    {
        $this->chargeTotalAmount = is_null($this->chargeTotalAmount) ? new AmountType() : $this->chargeTotalAmount;

        return $this->chargeTotalAmount;
    }

    /**
     * @param AmountType|null $chargeTotalAmount
     * @return self
     */
    public function setChargeTotalAmount(?AmountType $chargeTotalAmount = null): self
    {
        $this->chargeTotalAmount = $chargeTotalAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetChargeTotalAmount(): self
    {
        $this->chargeTotalAmount = null;

        return $this;
    }

    /**
     * @return AmountType|null
     */
    public function getAllowanceTotalAmount(): ?AmountType
    {
        return $this->allowanceTotalAmount;
    }

    /**
     * @return AmountType
     */
    public function getAllowanceTotalAmountWithCreate(): AmountType
    {
        $this->allowanceTotalAmount = is_null($this->allowanceTotalAmount) ? new AmountType() : $this->allowanceTotalAmount;

        return $this->allowanceTotalAmount;
    }

    /**
     * @param AmountType|null $allowanceTotalAmount
     * @return self
     */
    public function setAllowanceTotalAmount(?AmountType $allowanceTotalAmount = null): self
    {
        $this->allowanceTotalAmount = $allowanceTotalAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAllowanceTotalAmount(): self
    {
        $this->allowanceTotalAmount = null;

        return $this;
    }

    /**
     * @return AmountType|null
     */
    public function getTaxBasisTotalAmount(): ?AmountType
    {
        return $this->taxBasisTotalAmount;
    }

    /**
     * @return AmountType
     */
    public function getTaxBasisTotalAmountWithCreate(): AmountType
    {
        $this->taxBasisTotalAmount = is_null($this->taxBasisTotalAmount) ? new AmountType() : $this->taxBasisTotalAmount;

        return $this->taxBasisTotalAmount;
    }

    /**
     * @param AmountType|null $taxBasisTotalAmount
     * @return self
     */
    public function setTaxBasisTotalAmount(?AmountType $taxBasisTotalAmount = null): self
    {
        $this->taxBasisTotalAmount = $taxBasisTotalAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTaxBasisTotalAmount(): self
    {
        $this->taxBasisTotalAmount = null;

        return $this;
    }

    /**
     * @return array<AmountType>|null
     */
    public function getTaxTotalAmount(): ?array
    {
        return $this->taxTotalAmount;
    }

    /**
     * @param array<AmountType>|null $taxTotalAmount
     * @return self
     */
    public function setTaxTotalAmount(?array $taxTotalAmount = null): self
    {
        $this->taxTotalAmount = $taxTotalAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTaxTotalAmount(): self
    {
        $this->taxTotalAmount = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearTaxTotalAmount(): self
    {
        $this->taxTotalAmount = [];

        return $this;
    }

    /**
     * @param AmountType $taxTotalAmount
     * @return self
     */
    public function addToTaxTotalAmount(AmountType $taxTotalAmount): self
    {
        $this->taxTotalAmount[] = $taxTotalAmount;

        return $this;
    }

    /**
     * @return AmountType
     */
    public function addToTaxTotalAmountWithCreate(): AmountType
    {
        $this->addTotaxTotalAmount($taxTotalAmount = new AmountType());

        return $taxTotalAmount;
    }

    /**
     * @param AmountType $taxTotalAmount
     * @return self
     */
    public function addOnceToTaxTotalAmount(AmountType $taxTotalAmount): self
    {
        if (!is_array($this->taxTotalAmount)) {
            $this->taxTotalAmount = [];
        }

        $this->taxTotalAmount[0] = $taxTotalAmount;

        return $this;
    }

    /**
     * @return AmountType
     */
    public function addOnceToTaxTotalAmountWithCreate(): AmountType
    {
        if (!is_array($this->taxTotalAmount)) {
            $this->taxTotalAmount = [];
        }

        if ($this->taxTotalAmount === []) {
            $this->addOnceTotaxTotalAmount(new AmountType());
        }

        return $this->taxTotalAmount[0];
    }

    /**
     * @return AmountType|null
     */
    public function getGrandTotalAmount(): ?AmountType
    {
        return $this->grandTotalAmount;
    }

    /**
     * @return AmountType
     */
    public function getGrandTotalAmountWithCreate(): AmountType
    {
        $this->grandTotalAmount = is_null($this->grandTotalAmount) ? new AmountType() : $this->grandTotalAmount;

        return $this->grandTotalAmount;
    }

    /**
     * @param AmountType|null $grandTotalAmount
     * @return self
     */
    public function setGrandTotalAmount(?AmountType $grandTotalAmount = null): self
    {
        $this->grandTotalAmount = $grandTotalAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetGrandTotalAmount(): self
    {
        $this->grandTotalAmount = null;

        return $this;
    }

    /**
     * @return AmountType|null
     */
    public function getTotalPrepaidAmount(): ?AmountType
    {
        return $this->totalPrepaidAmount;
    }

    /**
     * @return AmountType
     */
    public function getTotalPrepaidAmountWithCreate(): AmountType
    {
        $this->totalPrepaidAmount = is_null($this->totalPrepaidAmount) ? new AmountType() : $this->totalPrepaidAmount;

        return $this->totalPrepaidAmount;
    }

    /**
     * @param AmountType|null $totalPrepaidAmount
     * @return self
     */
    public function setTotalPrepaidAmount(?AmountType $totalPrepaidAmount = null): self
    {
        $this->totalPrepaidAmount = $totalPrepaidAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTotalPrepaidAmount(): self
    {
        $this->totalPrepaidAmount = null;

        return $this;
    }

    /**
     * @return AmountType|null
     */
    public function getDuePayableAmount(): ?AmountType
    {
        return $this->duePayableAmount;
    }

    /**
     * @return AmountType
     */
    public function getDuePayableAmountWithCreate(): AmountType
    {
        $this->duePayableAmount = is_null($this->duePayableAmount) ? new AmountType() : $this->duePayableAmount;

        return $this->duePayableAmount;
    }

    /**
     * @param AmountType|null $duePayableAmount
     * @return self
     */
    public function setDuePayableAmount(?AmountType $duePayableAmount = null): self
    {
        $this->duePayableAmount = $duePayableAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDuePayableAmount(): self
    {
        $this->duePayableAmount = null;

        return $this;
    }
}
