<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxextended\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;

class LineTradeAgreementType
{
    use HandlesObjectFlags;

    /**
     * @var ReferencedDocumentType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\ReferencedDocumentType")
     * @JMS\Expose
     * @JMS\SerializedName("SellerOrderReferencedDocument")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getSellerOrderReferencedDocument", setter="setSellerOrderReferencedDocument")
     */
    private $sellerOrderReferencedDocument;

    /**
     * @var ReferencedDocumentType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\ReferencedDocumentType")
     * @JMS\Expose
     * @JMS\SerializedName("BuyerOrderReferencedDocument")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBuyerOrderReferencedDocument", setter="setBuyerOrderReferencedDocument")
     */
    private $buyerOrderReferencedDocument;

    /**
     * @var ReferencedDocumentType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\ReferencedDocumentType")
     * @JMS\Expose
     * @JMS\SerializedName("QuotationReferencedDocument")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getQuotationReferencedDocument", setter="setQuotationReferencedDocument")
     */
    private $quotationReferencedDocument;

    /**
     * @var ReferencedDocumentType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\ReferencedDocumentType")
     * @JMS\Expose
     * @JMS\SerializedName("ContractReferencedDocument")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getContractReferencedDocument", setter="setContractReferencedDocument")
     */
    private $contractReferencedDocument;

    /**
     * @var array<ReferencedDocumentType>|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\zffxextended\ram\ReferencedDocumentType>")
     * @JMS\Expose
     * @JMS\SerializedName("AdditionalReferencedDocument")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\XmlList(inline=true, entry="AdditionalReferencedDocument", namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\Accessor(getter="getAdditionalReferencedDocument", setter="setAdditionalReferencedDocument")
     */
    private $additionalReferencedDocument;

    /**
     * @var TradePriceType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\TradePriceType")
     * @JMS\Expose
     * @JMS\SerializedName("GrossPriceProductTradePrice")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getGrossPriceProductTradePrice", setter="setGrossPriceProductTradePrice")
     */
    private $grossPriceProductTradePrice;

    /**
     * @var TradePriceType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\TradePriceType")
     * @JMS\Expose
     * @JMS\SerializedName("NetPriceProductTradePrice")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getNetPriceProductTradePrice", setter="setNetPriceProductTradePrice")
     */
    private $netPriceProductTradePrice;

    /**
     * @var array<ReferencedDocumentType>|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\zffxextended\ram\ReferencedDocumentType>")
     * @JMS\Expose
     * @JMS\SerializedName("UltimateCustomerOrderReferencedDocument")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\XmlList(inline=true, entry="UltimateCustomerOrderReferencedDocument", namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\Accessor(getter="getUltimateCustomerOrderReferencedDocument", setter="setUltimateCustomerOrderReferencedDocument")
     */
    private $ultimateCustomerOrderReferencedDocument;

    /**
     * @return ReferencedDocumentType|null
     */
    public function getSellerOrderReferencedDocument(): ?ReferencedDocumentType
    {
        return $this->sellerOrderReferencedDocument;
    }

    /**
     * @return ReferencedDocumentType
     */
    public function getSellerOrderReferencedDocumentWithCreate(): ReferencedDocumentType
    {
        $this->sellerOrderReferencedDocument = is_null($this->sellerOrderReferencedDocument) ? new ReferencedDocumentType() : $this->sellerOrderReferencedDocument;

        return $this->sellerOrderReferencedDocument;
    }

    /**
     * @param ReferencedDocumentType|null $sellerOrderReferencedDocument
     * @return self
     */
    public function setSellerOrderReferencedDocument(
        ?ReferencedDocumentType $sellerOrderReferencedDocument = null,
    ): self {
        $this->sellerOrderReferencedDocument = $sellerOrderReferencedDocument;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSellerOrderReferencedDocument(): self
    {
        $this->sellerOrderReferencedDocument = null;

        return $this;
    }

    /**
     * @return ReferencedDocumentType|null
     */
    public function getBuyerOrderReferencedDocument(): ?ReferencedDocumentType
    {
        return $this->buyerOrderReferencedDocument;
    }

    /**
     * @return ReferencedDocumentType
     */
    public function getBuyerOrderReferencedDocumentWithCreate(): ReferencedDocumentType
    {
        $this->buyerOrderReferencedDocument = is_null($this->buyerOrderReferencedDocument) ? new ReferencedDocumentType() : $this->buyerOrderReferencedDocument;

        return $this->buyerOrderReferencedDocument;
    }

    /**
     * @param ReferencedDocumentType|null $buyerOrderReferencedDocument
     * @return self
     */
    public function setBuyerOrderReferencedDocument(
        ?ReferencedDocumentType $buyerOrderReferencedDocument = null,
    ): self {
        $this->buyerOrderReferencedDocument = $buyerOrderReferencedDocument;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetBuyerOrderReferencedDocument(): self
    {
        $this->buyerOrderReferencedDocument = null;

        return $this;
    }

    /**
     * @return ReferencedDocumentType|null
     */
    public function getQuotationReferencedDocument(): ?ReferencedDocumentType
    {
        return $this->quotationReferencedDocument;
    }

    /**
     * @return ReferencedDocumentType
     */
    public function getQuotationReferencedDocumentWithCreate(): ReferencedDocumentType
    {
        $this->quotationReferencedDocument = is_null($this->quotationReferencedDocument) ? new ReferencedDocumentType() : $this->quotationReferencedDocument;

        return $this->quotationReferencedDocument;
    }

    /**
     * @param ReferencedDocumentType|null $quotationReferencedDocument
     * @return self
     */
    public function setQuotationReferencedDocument(?ReferencedDocumentType $quotationReferencedDocument = null): self
    {
        $this->quotationReferencedDocument = $quotationReferencedDocument;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetQuotationReferencedDocument(): self
    {
        $this->quotationReferencedDocument = null;

        return $this;
    }

    /**
     * @return ReferencedDocumentType|null
     */
    public function getContractReferencedDocument(): ?ReferencedDocumentType
    {
        return $this->contractReferencedDocument;
    }

    /**
     * @return ReferencedDocumentType
     */
    public function getContractReferencedDocumentWithCreate(): ReferencedDocumentType
    {
        $this->contractReferencedDocument = is_null($this->contractReferencedDocument) ? new ReferencedDocumentType() : $this->contractReferencedDocument;

        return $this->contractReferencedDocument;
    }

    /**
     * @param ReferencedDocumentType|null $contractReferencedDocument
     * @return self
     */
    public function setContractReferencedDocument(?ReferencedDocumentType $contractReferencedDocument = null): self
    {
        $this->contractReferencedDocument = $contractReferencedDocument;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetContractReferencedDocument(): self
    {
        $this->contractReferencedDocument = null;

        return $this;
    }

    /**
     * @return array<ReferencedDocumentType>|null
     */
    public function getAdditionalReferencedDocument(): ?array
    {
        return $this->additionalReferencedDocument;
    }

    /**
     * @param array<ReferencedDocumentType>|null $additionalReferencedDocument
     * @return self
     */
    public function setAdditionalReferencedDocument(?array $additionalReferencedDocument = null): self
    {
        $this->additionalReferencedDocument = $additionalReferencedDocument;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAdditionalReferencedDocument(): self
    {
        $this->additionalReferencedDocument = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearAdditionalReferencedDocument(): self
    {
        $this->additionalReferencedDocument = [];

        return $this;
    }

    /**
     * @param ReferencedDocumentType $additionalReferencedDocument
     * @return self
     */
    public function addToAdditionalReferencedDocument(ReferencedDocumentType $additionalReferencedDocument): self
    {
        $this->additionalReferencedDocument[] = $additionalReferencedDocument;

        return $this;
    }

    /**
     * @return ReferencedDocumentType
     */
    public function addToAdditionalReferencedDocumentWithCreate(): ReferencedDocumentType
    {
        $this->addToadditionalReferencedDocument($additionalReferencedDocument = new ReferencedDocumentType());

        return $additionalReferencedDocument;
    }

    /**
     * @param ReferencedDocumentType $additionalReferencedDocument
     * @return self
     */
    public function addOnceToAdditionalReferencedDocument(ReferencedDocumentType $additionalReferencedDocument): self
    {
        if (!is_array($this->additionalReferencedDocument)) {
            $this->additionalReferencedDocument = [];
        }

        $this->additionalReferencedDocument[0] = $additionalReferencedDocument;

        return $this;
    }

    /**
     * @return ReferencedDocumentType
     */
    public function addOnceToAdditionalReferencedDocumentWithCreate(): ReferencedDocumentType
    {
        if (!is_array($this->additionalReferencedDocument)) {
            $this->additionalReferencedDocument = [];
        }

        if ($this->additionalReferencedDocument === []) {
            $this->addOnceToadditionalReferencedDocument(new ReferencedDocumentType());
        }

        return $this->additionalReferencedDocument[0];
    }

    /**
     * @return TradePriceType|null
     */
    public function getGrossPriceProductTradePrice(): ?TradePriceType
    {
        return $this->grossPriceProductTradePrice;
    }

    /**
     * @return TradePriceType
     */
    public function getGrossPriceProductTradePriceWithCreate(): TradePriceType
    {
        $this->grossPriceProductTradePrice = is_null($this->grossPriceProductTradePrice) ? new TradePriceType() : $this->grossPriceProductTradePrice;

        return $this->grossPriceProductTradePrice;
    }

    /**
     * @param TradePriceType|null $grossPriceProductTradePrice
     * @return self
     */
    public function setGrossPriceProductTradePrice(?TradePriceType $grossPriceProductTradePrice = null): self
    {
        $this->grossPriceProductTradePrice = $grossPriceProductTradePrice;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetGrossPriceProductTradePrice(): self
    {
        $this->grossPriceProductTradePrice = null;

        return $this;
    }

    /**
     * @return TradePriceType|null
     */
    public function getNetPriceProductTradePrice(): ?TradePriceType
    {
        return $this->netPriceProductTradePrice;
    }

    /**
     * @return TradePriceType
     */
    public function getNetPriceProductTradePriceWithCreate(): TradePriceType
    {
        $this->netPriceProductTradePrice = is_null($this->netPriceProductTradePrice) ? new TradePriceType() : $this->netPriceProductTradePrice;

        return $this->netPriceProductTradePrice;
    }

    /**
     * @param TradePriceType|null $netPriceProductTradePrice
     * @return self
     */
    public function setNetPriceProductTradePrice(?TradePriceType $netPriceProductTradePrice = null): self
    {
        $this->netPriceProductTradePrice = $netPriceProductTradePrice;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetNetPriceProductTradePrice(): self
    {
        $this->netPriceProductTradePrice = null;

        return $this;
    }

    /**
     * @return array<ReferencedDocumentType>|null
     */
    public function getUltimateCustomerOrderReferencedDocument(): ?array
    {
        return $this->ultimateCustomerOrderReferencedDocument;
    }

    /**
     * @param array<ReferencedDocumentType>|null $ultimateCustomerOrderReferencedDocument
     * @return self
     */
    public function setUltimateCustomerOrderReferencedDocument(
        ?array $ultimateCustomerOrderReferencedDocument = null,
    ): self {
        $this->ultimateCustomerOrderReferencedDocument = $ultimateCustomerOrderReferencedDocument;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetUltimateCustomerOrderReferencedDocument(): self
    {
        $this->ultimateCustomerOrderReferencedDocument = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearUltimateCustomerOrderReferencedDocument(): self
    {
        $this->ultimateCustomerOrderReferencedDocument = [];

        return $this;
    }

    /**
     * @param ReferencedDocumentType $ultimateCustomerOrderReferencedDocument
     * @return self
     */
    public function addToUltimateCustomerOrderReferencedDocument(
        ReferencedDocumentType $ultimateCustomerOrderReferencedDocument,
    ): self {
        $this->ultimateCustomerOrderReferencedDocument[] = $ultimateCustomerOrderReferencedDocument;

        return $this;
    }

    /**
     * @return ReferencedDocumentType
     */
    public function addToUltimateCustomerOrderReferencedDocumentWithCreate(): ReferencedDocumentType
    {
        $this->addToultimateCustomerOrderReferencedDocument($ultimateCustomerOrderReferencedDocument = new ReferencedDocumentType());

        return $ultimateCustomerOrderReferencedDocument;
    }

    /**
     * @param ReferencedDocumentType $ultimateCustomerOrderReferencedDocument
     * @return self
     */
    public function addOnceToUltimateCustomerOrderReferencedDocument(
        ReferencedDocumentType $ultimateCustomerOrderReferencedDocument,
    ): self {
        if (!is_array($this->ultimateCustomerOrderReferencedDocument)) {
            $this->ultimateCustomerOrderReferencedDocument = [];
        }

        $this->ultimateCustomerOrderReferencedDocument[0] = $ultimateCustomerOrderReferencedDocument;

        return $this;
    }

    /**
     * @return ReferencedDocumentType
     */
    public function addOnceToUltimateCustomerOrderReferencedDocumentWithCreate(): ReferencedDocumentType
    {
        if (!is_array($this->ultimateCustomerOrderReferencedDocument)) {
            $this->ultimateCustomerOrderReferencedDocument = [];
        }

        if ($this->ultimateCustomerOrderReferencedDocument === []) {
            $this->addOnceToultimateCustomerOrderReferencedDocument(new ReferencedDocumentType());
        }

        return $this->ultimateCustomerOrderReferencedDocument[0];
    }
}
