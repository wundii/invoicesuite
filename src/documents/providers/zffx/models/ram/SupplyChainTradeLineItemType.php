<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\zffx\models\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use JMS\Serializer\Annotation as JMS;

class SupplyChainTradeLineItemType
{
    use HandlesObjectFlags;

    /**
     * @var null|DocumentLineDocumentType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\ram\DocumentLineDocumentType")
     * @JMS\Expose
     * @JMS\SerializedName("AssociatedDocumentLineDocument")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getAssociatedDocumentLineDocument", setter="setAssociatedDocumentLineDocument")
     */
    private $associatedDocumentLineDocument;

    /**
     * @var null|TradeProductType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\ram\TradeProductType")
     * @JMS\Expose
     * @JMS\SerializedName("SpecifiedTradeProduct")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getSpecifiedTradeProduct", setter="setSpecifiedTradeProduct")
     */
    private $specifiedTradeProduct;

    /**
     * @var null|LineTradeAgreementType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\ram\LineTradeAgreementType")
     * @JMS\Expose
     * @JMS\SerializedName("SpecifiedLineTradeAgreement")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getSpecifiedLineTradeAgreement", setter="setSpecifiedLineTradeAgreement")
     */
    private $specifiedLineTradeAgreement;

    /**
     * @var null|LineTradeDeliveryType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\ram\LineTradeDeliveryType")
     * @JMS\Expose
     * @JMS\SerializedName("SpecifiedLineTradeDelivery")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getSpecifiedLineTradeDelivery", setter="setSpecifiedLineTradeDelivery")
     */
    private $specifiedLineTradeDelivery;

    /**
     * @var null|LineTradeSettlementType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\ram\LineTradeSettlementType")
     * @JMS\Expose
     * @JMS\SerializedName("SpecifiedLineTradeSettlement")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getSpecifiedLineTradeSettlement", setter="setSpecifiedLineTradeSettlement")
     */
    private $specifiedLineTradeSettlement;

    /**
     * @return null|DocumentLineDocumentType
     */
    public function getAssociatedDocumentLineDocument(): ?DocumentLineDocumentType
    {
        return $this->associatedDocumentLineDocument;
    }

    /**
     * @return DocumentLineDocumentType
     */
    public function getAssociatedDocumentLineDocumentWithCreate(): DocumentLineDocumentType
    {
        $this->associatedDocumentLineDocument = is_null($this->associatedDocumentLineDocument) ? new DocumentLineDocumentType() : $this->associatedDocumentLineDocument;

        return $this->associatedDocumentLineDocument;
    }

    /**
     * @param  null|DocumentLineDocumentType $associatedDocumentLineDocument
     * @return static
     */
    public function setAssociatedDocumentLineDocument(
        ?DocumentLineDocumentType $associatedDocumentLineDocument = null,
    ): static {
        $this->associatedDocumentLineDocument = $associatedDocumentLineDocument;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAssociatedDocumentLineDocument(): static
    {
        $this->associatedDocumentLineDocument = null;

        return $this;
    }

    /**
     * @return null|TradeProductType
     */
    public function getSpecifiedTradeProduct(): ?TradeProductType
    {
        return $this->specifiedTradeProduct;
    }

    /**
     * @return TradeProductType
     */
    public function getSpecifiedTradeProductWithCreate(): TradeProductType
    {
        $this->specifiedTradeProduct = is_null($this->specifiedTradeProduct) ? new TradeProductType() : $this->specifiedTradeProduct;

        return $this->specifiedTradeProduct;
    }

    /**
     * @param  null|TradeProductType $specifiedTradeProduct
     * @return static
     */
    public function setSpecifiedTradeProduct(?TradeProductType $specifiedTradeProduct = null): static
    {
        $this->specifiedTradeProduct = $specifiedTradeProduct;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSpecifiedTradeProduct(): static
    {
        $this->specifiedTradeProduct = null;

        return $this;
    }

    /**
     * @return null|LineTradeAgreementType
     */
    public function getSpecifiedLineTradeAgreement(): ?LineTradeAgreementType
    {
        return $this->specifiedLineTradeAgreement;
    }

    /**
     * @return LineTradeAgreementType
     */
    public function getSpecifiedLineTradeAgreementWithCreate(): LineTradeAgreementType
    {
        $this->specifiedLineTradeAgreement = is_null($this->specifiedLineTradeAgreement) ? new LineTradeAgreementType() : $this->specifiedLineTradeAgreement;

        return $this->specifiedLineTradeAgreement;
    }

    /**
     * @param  null|LineTradeAgreementType $specifiedLineTradeAgreement
     * @return static
     */
    public function setSpecifiedLineTradeAgreement(?LineTradeAgreementType $specifiedLineTradeAgreement = null): static
    {
        $this->specifiedLineTradeAgreement = $specifiedLineTradeAgreement;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSpecifiedLineTradeAgreement(): static
    {
        $this->specifiedLineTradeAgreement = null;

        return $this;
    }

    /**
     * @return null|LineTradeDeliveryType
     */
    public function getSpecifiedLineTradeDelivery(): ?LineTradeDeliveryType
    {
        return $this->specifiedLineTradeDelivery;
    }

    /**
     * @return LineTradeDeliveryType
     */
    public function getSpecifiedLineTradeDeliveryWithCreate(): LineTradeDeliveryType
    {
        $this->specifiedLineTradeDelivery = is_null($this->specifiedLineTradeDelivery) ? new LineTradeDeliveryType() : $this->specifiedLineTradeDelivery;

        return $this->specifiedLineTradeDelivery;
    }

    /**
     * @param  null|LineTradeDeliveryType $specifiedLineTradeDelivery
     * @return static
     */
    public function setSpecifiedLineTradeDelivery(?LineTradeDeliveryType $specifiedLineTradeDelivery = null): static
    {
        $this->specifiedLineTradeDelivery = $specifiedLineTradeDelivery;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSpecifiedLineTradeDelivery(): static
    {
        $this->specifiedLineTradeDelivery = null;

        return $this;
    }

    /**
     * @return null|LineTradeSettlementType
     */
    public function getSpecifiedLineTradeSettlement(): ?LineTradeSettlementType
    {
        return $this->specifiedLineTradeSettlement;
    }

    /**
     * @return LineTradeSettlementType
     */
    public function getSpecifiedLineTradeSettlementWithCreate(): LineTradeSettlementType
    {
        $this->specifiedLineTradeSettlement = is_null($this->specifiedLineTradeSettlement) ? new LineTradeSettlementType() : $this->specifiedLineTradeSettlement;

        return $this->specifiedLineTradeSettlement;
    }

    /**
     * @param  null|LineTradeSettlementType $specifiedLineTradeSettlement
     * @return static
     */
    public function setSpecifiedLineTradeSettlement(
        ?LineTradeSettlementType $specifiedLineTradeSettlement = null,
    ): static {
        $this->specifiedLineTradeSettlement = $specifiedLineTradeSettlement;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSpecifiedLineTradeSettlement(): static
    {
        $this->specifiedLineTradeSettlement = null;

        return $this;
    }
}
