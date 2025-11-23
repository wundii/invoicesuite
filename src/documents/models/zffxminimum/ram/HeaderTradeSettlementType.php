<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxminimum\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxminimum\qdt\CurrencyCodeType;

class HeaderTradeSettlementType
{
    use HandlesObjectFlags;

    /**
     * @var CurrencyCodeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxminimum\qdt\CurrencyCodeType")
     * @JMS\Expose
     * @JMS\SerializedName("InvoiceCurrencyCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getInvoiceCurrencyCode", setter="setInvoiceCurrencyCode")
     */
    private $invoiceCurrencyCode;

    /**
     * @var TradeSettlementHeaderMonetarySummationType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxminimum\ram\TradeSettlementHeaderMonetarySummationType")
     * @JMS\Expose
     * @JMS\SerializedName("SpecifiedTradeSettlementHeaderMonetarySummation")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getSpecifiedTradeSettlementHeaderMonetarySummation", setter="setSpecifiedTradeSettlementHeaderMonetarySummation")
     */
    private $specifiedTradeSettlementHeaderMonetarySummation;

    /**
     * @return CurrencyCodeType|null
     */
    public function getInvoiceCurrencyCode(): ?CurrencyCodeType
    {
        return $this->invoiceCurrencyCode;
    }

    /**
     * @return CurrencyCodeType
     */
    public function getInvoiceCurrencyCodeWithCreate(): CurrencyCodeType
    {
        $this->invoiceCurrencyCode = is_null($this->invoiceCurrencyCode) ? new CurrencyCodeType() : $this->invoiceCurrencyCode;

        return $this->invoiceCurrencyCode;
    }

    /**
     * @param CurrencyCodeType|null $invoiceCurrencyCode
     * @return self
     */
    public function setInvoiceCurrencyCode(?CurrencyCodeType $invoiceCurrencyCode = null): self
    {
        $this->invoiceCurrencyCode = $invoiceCurrencyCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetInvoiceCurrencyCode(): self
    {
        $this->invoiceCurrencyCode = null;

        return $this;
    }

    /**
     * @return TradeSettlementHeaderMonetarySummationType|null
     */
    public function getSpecifiedTradeSettlementHeaderMonetarySummation(): ?TradeSettlementHeaderMonetarySummationType
    {
        return $this->specifiedTradeSettlementHeaderMonetarySummation;
    }

    /**
     * @return TradeSettlementHeaderMonetarySummationType
     */
    public function getSpecifiedTradeSettlementHeaderMonetarySummationWithCreate(): TradeSettlementHeaderMonetarySummationType
    {
        $this->specifiedTradeSettlementHeaderMonetarySummation = is_null($this->specifiedTradeSettlementHeaderMonetarySummation) ? new TradeSettlementHeaderMonetarySummationType() : $this->specifiedTradeSettlementHeaderMonetarySummation;

        return $this->specifiedTradeSettlementHeaderMonetarySummation;
    }

    /**
     * @param TradeSettlementHeaderMonetarySummationType|null $specifiedTradeSettlementHeaderMonetarySummation
     * @return self
     */
    public function setSpecifiedTradeSettlementHeaderMonetarySummation(
        ?TradeSettlementHeaderMonetarySummationType $specifiedTradeSettlementHeaderMonetarySummation = null,
    ): self {
        $this->specifiedTradeSettlementHeaderMonetarySummation = $specifiedTradeSettlementHeaderMonetarySummation;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSpecifiedTradeSettlementHeaderMonetarySummation(): self
    {
        $this->specifiedTradeSettlementHeaderMonetarySummation = null;

        return $this;
    }
}
