<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxbasicwl\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\TextType;

class HeaderTradeAgreementType
{
    use HandlesObjectFlags;

    /**
     * @var TextType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("BuyerReference")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBuyerReference", setter="setBuyerReference")
     */
    private $buyerReference;

    /**
     * @var TradePartyType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\TradePartyType")
     * @JMS\Expose
     * @JMS\SerializedName("SellerTradeParty")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getSellerTradeParty", setter="setSellerTradeParty")
     */
    private $sellerTradeParty;

    /**
     * @var TradePartyType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\TradePartyType")
     * @JMS\Expose
     * @JMS\SerializedName("BuyerTradeParty")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBuyerTradeParty", setter="setBuyerTradeParty")
     */
    private $buyerTradeParty;

    /**
     * @var TradePartyType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\TradePartyType")
     * @JMS\Expose
     * @JMS\SerializedName("SellerTaxRepresentativeTradeParty")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getSellerTaxRepresentativeTradeParty", setter="setSellerTaxRepresentativeTradeParty")
     */
    private $sellerTaxRepresentativeTradeParty;

    /**
     * @var ReferencedDocumentType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\ReferencedDocumentType")
     * @JMS\Expose
     * @JMS\SerializedName("BuyerOrderReferencedDocument")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBuyerOrderReferencedDocument", setter="setBuyerOrderReferencedDocument")
     */
    private $buyerOrderReferencedDocument;

    /**
     * @var ReferencedDocumentType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\ReferencedDocumentType")
     * @JMS\Expose
     * @JMS\SerializedName("ContractReferencedDocument")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getContractReferencedDocument", setter="setContractReferencedDocument")
     */
    private $contractReferencedDocument;

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
}
