<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxextended\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\TextType;

class HeaderTradeAgreementType
{
    use HandlesObjectFlags;

    /**
     * @var TextType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("BuyerReference")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBuyerReference", setter="setBuyerReference")
     */
    private $buyerReference;

    /**
     * @var TradePartyType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\TradePartyType")
     * @JMS\Expose
     * @JMS\SerializedName("SellerTradeParty")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getSellerTradeParty", setter="setSellerTradeParty")
     */
    private $sellerTradeParty;

    /**
     * @var TradePartyType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\TradePartyType")
     * @JMS\Expose
     * @JMS\SerializedName("BuyerTradeParty")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBuyerTradeParty", setter="setBuyerTradeParty")
     */
    private $buyerTradeParty;

    /**
     * @var TradePartyType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\TradePartyType")
     * @JMS\Expose
     * @JMS\SerializedName("SalesAgentTradeParty")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getSalesAgentTradeParty", setter="setSalesAgentTradeParty")
     */
    private $salesAgentTradeParty;

    /**
     * @var TradePartyType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\TradePartyType")
     * @JMS\Expose
     * @JMS\SerializedName("BuyerTaxRepresentativeTradeParty")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBuyerTaxRepresentativeTradeParty", setter="setBuyerTaxRepresentativeTradeParty")
     */
    private $buyerTaxRepresentativeTradeParty;

    /**
     * @var TradePartyType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\TradePartyType")
     * @JMS\Expose
     * @JMS\SerializedName("SellerTaxRepresentativeTradeParty")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getSellerTaxRepresentativeTradeParty", setter="setSellerTaxRepresentativeTradeParty")
     */
    private $sellerTaxRepresentativeTradeParty;

    /**
     * @var TradePartyType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\TradePartyType")
     * @JMS\Expose
     * @JMS\SerializedName("ProductEndUserTradeParty")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getProductEndUserTradeParty", setter="setProductEndUserTradeParty")
     */
    private $productEndUserTradeParty;

    /**
     * @var TradeDeliveryTermsType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\TradeDeliveryTermsType")
     * @JMS\Expose
     * @JMS\SerializedName("ApplicableTradeDeliveryTerms")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getApplicableTradeDeliveryTerms", setter="setApplicableTradeDeliveryTerms")
     */
    private $applicableTradeDeliveryTerms;

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
     * @var TradePartyType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\TradePartyType")
     * @JMS\Expose
     * @JMS\SerializedName("BuyerAgentTradeParty")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBuyerAgentTradeParty", setter="setBuyerAgentTradeParty")
     */
    private $buyerAgentTradeParty;

    /**
     * @var ProcuringProjectType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\ProcuringProjectType")
     * @JMS\Expose
     * @JMS\SerializedName("SpecifiedProcuringProject")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getSpecifiedProcuringProject", setter="setSpecifiedProcuringProject")
     */
    private $specifiedProcuringProject;

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
     * @return TextType|null
     */
    public function getBuyerReference(): ?TextType
    {
        return $this->buyerReference;
    }

    /**
     * @return TextType
     */
    public function getBuyerReferenceWithCreate(): TextType
    {
        $this->buyerReference = is_null($this->buyerReference) ? new TextType() : $this->buyerReference;

        return $this->buyerReference;
    }

    /**
     * @param TextType|null $buyerReference
     * @return self
     */
    public function setBuyerReference(?TextType $buyerReference = null): self
    {
        $this->buyerReference = $buyerReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetBuyerReference(): self
    {
        $this->buyerReference = null;

        return $this;
    }

    /**
     * @return TradePartyType|null
     */
    public function getSellerTradeParty(): ?TradePartyType
    {
        return $this->sellerTradeParty;
    }

    /**
     * @return TradePartyType
     */
    public function getSellerTradePartyWithCreate(): TradePartyType
    {
        $this->sellerTradeParty = is_null($this->sellerTradeParty) ? new TradePartyType() : $this->sellerTradeParty;

        return $this->sellerTradeParty;
    }

    /**
     * @param TradePartyType|null $sellerTradeParty
     * @return self
     */
    public function setSellerTradeParty(?TradePartyType $sellerTradeParty = null): self
    {
        $this->sellerTradeParty = $sellerTradeParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSellerTradeParty(): self
    {
        $this->sellerTradeParty = null;

        return $this;
    }

    /**
     * @return TradePartyType|null
     */
    public function getBuyerTradeParty(): ?TradePartyType
    {
        return $this->buyerTradeParty;
    }

    /**
     * @return TradePartyType
     */
    public function getBuyerTradePartyWithCreate(): TradePartyType
    {
        $this->buyerTradeParty = is_null($this->buyerTradeParty) ? new TradePartyType() : $this->buyerTradeParty;

        return $this->buyerTradeParty;
    }

    /**
     * @param TradePartyType|null $buyerTradeParty
     * @return self
     */
    public function setBuyerTradeParty(?TradePartyType $buyerTradeParty = null): self
    {
        $this->buyerTradeParty = $buyerTradeParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetBuyerTradeParty(): self
    {
        $this->buyerTradeParty = null;

        return $this;
    }

    /**
     * @return TradePartyType|null
     */
    public function getSalesAgentTradeParty(): ?TradePartyType
    {
        return $this->salesAgentTradeParty;
    }

    /**
     * @return TradePartyType
     */
    public function getSalesAgentTradePartyWithCreate(): TradePartyType
    {
        $this->salesAgentTradeParty = is_null($this->salesAgentTradeParty) ? new TradePartyType() : $this->salesAgentTradeParty;

        return $this->salesAgentTradeParty;
    }

    /**
     * @param TradePartyType|null $salesAgentTradeParty
     * @return self
     */
    public function setSalesAgentTradeParty(?TradePartyType $salesAgentTradeParty = null): self
    {
        $this->salesAgentTradeParty = $salesAgentTradeParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSalesAgentTradeParty(): self
    {
        $this->salesAgentTradeParty = null;

        return $this;
    }

    /**
     * @return TradePartyType|null
     */
    public function getBuyerTaxRepresentativeTradeParty(): ?TradePartyType
    {
        return $this->buyerTaxRepresentativeTradeParty;
    }

    /**
     * @return TradePartyType
     */
    public function getBuyerTaxRepresentativeTradePartyWithCreate(): TradePartyType
    {
        $this->buyerTaxRepresentativeTradeParty = is_null($this->buyerTaxRepresentativeTradeParty) ? new TradePartyType() : $this->buyerTaxRepresentativeTradeParty;

        return $this->buyerTaxRepresentativeTradeParty;
    }

    /**
     * @param TradePartyType|null $buyerTaxRepresentativeTradeParty
     * @return self
     */
    public function setBuyerTaxRepresentativeTradeParty(
        ?TradePartyType $buyerTaxRepresentativeTradeParty = null,
    ): self {
        $this->buyerTaxRepresentativeTradeParty = $buyerTaxRepresentativeTradeParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetBuyerTaxRepresentativeTradeParty(): self
    {
        $this->buyerTaxRepresentativeTradeParty = null;

        return $this;
    }

    /**
     * @return TradePartyType|null
     */
    public function getSellerTaxRepresentativeTradeParty(): ?TradePartyType
    {
        return $this->sellerTaxRepresentativeTradeParty;
    }

    /**
     * @return TradePartyType
     */
    public function getSellerTaxRepresentativeTradePartyWithCreate(): TradePartyType
    {
        $this->sellerTaxRepresentativeTradeParty = is_null($this->sellerTaxRepresentativeTradeParty) ? new TradePartyType() : $this->sellerTaxRepresentativeTradeParty;

        return $this->sellerTaxRepresentativeTradeParty;
    }

    /**
     * @param TradePartyType|null $sellerTaxRepresentativeTradeParty
     * @return self
     */
    public function setSellerTaxRepresentativeTradeParty(
        ?TradePartyType $sellerTaxRepresentativeTradeParty = null,
    ): self {
        $this->sellerTaxRepresentativeTradeParty = $sellerTaxRepresentativeTradeParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSellerTaxRepresentativeTradeParty(): self
    {
        $this->sellerTaxRepresentativeTradeParty = null;

        return $this;
    }

    /**
     * @return TradePartyType|null
     */
    public function getProductEndUserTradeParty(): ?TradePartyType
    {
        return $this->productEndUserTradeParty;
    }

    /**
     * @return TradePartyType
     */
    public function getProductEndUserTradePartyWithCreate(): TradePartyType
    {
        $this->productEndUserTradeParty = is_null($this->productEndUserTradeParty) ? new TradePartyType() : $this->productEndUserTradeParty;

        return $this->productEndUserTradeParty;
    }

    /**
     * @param TradePartyType|null $productEndUserTradeParty
     * @return self
     */
    public function setProductEndUserTradeParty(?TradePartyType $productEndUserTradeParty = null): self
    {
        $this->productEndUserTradeParty = $productEndUserTradeParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetProductEndUserTradeParty(): self
    {
        $this->productEndUserTradeParty = null;

        return $this;
    }

    /**
     * @return TradeDeliveryTermsType|null
     */
    public function getApplicableTradeDeliveryTerms(): ?TradeDeliveryTermsType
    {
        return $this->applicableTradeDeliveryTerms;
    }

    /**
     * @return TradeDeliveryTermsType
     */
    public function getApplicableTradeDeliveryTermsWithCreate(): TradeDeliveryTermsType
    {
        $this->applicableTradeDeliveryTerms = is_null($this->applicableTradeDeliveryTerms) ? new TradeDeliveryTermsType() : $this->applicableTradeDeliveryTerms;

        return $this->applicableTradeDeliveryTerms;
    }

    /**
     * @param TradeDeliveryTermsType|null $applicableTradeDeliveryTerms
     * @return self
     */
    public function setApplicableTradeDeliveryTerms(
        ?TradeDeliveryTermsType $applicableTradeDeliveryTerms = null,
    ): self {
        $this->applicableTradeDeliveryTerms = $applicableTradeDeliveryTerms;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetApplicableTradeDeliveryTerms(): self
    {
        $this->applicableTradeDeliveryTerms = null;

        return $this;
    }

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
     * @return TradePartyType|null
     */
    public function getBuyerAgentTradeParty(): ?TradePartyType
    {
        return $this->buyerAgentTradeParty;
    }

    /**
     * @return TradePartyType
     */
    public function getBuyerAgentTradePartyWithCreate(): TradePartyType
    {
        $this->buyerAgentTradeParty = is_null($this->buyerAgentTradeParty) ? new TradePartyType() : $this->buyerAgentTradeParty;

        return $this->buyerAgentTradeParty;
    }

    /**
     * @param TradePartyType|null $buyerAgentTradeParty
     * @return self
     */
    public function setBuyerAgentTradeParty(?TradePartyType $buyerAgentTradeParty = null): self
    {
        $this->buyerAgentTradeParty = $buyerAgentTradeParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetBuyerAgentTradeParty(): self
    {
        $this->buyerAgentTradeParty = null;

        return $this;
    }

    /**
     * @return ProcuringProjectType|null
     */
    public function getSpecifiedProcuringProject(): ?ProcuringProjectType
    {
        return $this->specifiedProcuringProject;
    }

    /**
     * @return ProcuringProjectType
     */
    public function getSpecifiedProcuringProjectWithCreate(): ProcuringProjectType
    {
        $this->specifiedProcuringProject = is_null($this->specifiedProcuringProject) ? new ProcuringProjectType() : $this->specifiedProcuringProject;

        return $this->specifiedProcuringProject;
    }

    /**
     * @param ProcuringProjectType|null $specifiedProcuringProject
     * @return self
     */
    public function setSpecifiedProcuringProject(?ProcuringProjectType $specifiedProcuringProject = null): self
    {
        $this->specifiedProcuringProject = $specifiedProcuringProject;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSpecifiedProcuringProject(): self
    {
        $this->specifiedProcuringProject = null;

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
