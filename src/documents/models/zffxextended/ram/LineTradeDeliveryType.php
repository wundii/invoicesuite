<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxextended\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\QuantityType;

class LineTradeDeliveryType
{
    use HandlesObjectFlags;

    /**
     * @var QuantityType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\QuantityType")
     * @JMS\Expose
     * @JMS\SerializedName("BilledQuantity")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBilledQuantity", setter="setBilledQuantity")
     */
    private $billedQuantity;

    /**
     * @var QuantityType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\QuantityType")
     * @JMS\Expose
     * @JMS\SerializedName("ChargeFreeQuantity")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getChargeFreeQuantity", setter="setChargeFreeQuantity")
     */
    private $chargeFreeQuantity;

    /**
     * @var QuantityType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\QuantityType")
     * @JMS\Expose
     * @JMS\SerializedName("PackageQuantity")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getPackageQuantity", setter="setPackageQuantity")
     */
    private $packageQuantity;

    /**
     * @var TradePartyType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\TradePartyType")
     * @JMS\Expose
     * @JMS\SerializedName("ShipToTradeParty")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getShipToTradeParty", setter="setShipToTradeParty")
     */
    private $shipToTradeParty;

    /**
     * @var TradePartyType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\TradePartyType")
     * @JMS\Expose
     * @JMS\SerializedName("UltimateShipToTradeParty")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getUltimateShipToTradeParty", setter="setUltimateShipToTradeParty")
     */
    private $ultimateShipToTradeParty;

    /**
     * @var SupplyChainEventType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\SupplyChainEventType")
     * @JMS\Expose
     * @JMS\SerializedName("ActualDeliverySupplyChainEvent")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getActualDeliverySupplyChainEvent", setter="setActualDeliverySupplyChainEvent")
     */
    private $actualDeliverySupplyChainEvent;

    /**
     * @var ReferencedDocumentType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\ReferencedDocumentType")
     * @JMS\Expose
     * @JMS\SerializedName("DespatchAdviceReferencedDocument")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getDespatchAdviceReferencedDocument", setter="setDespatchAdviceReferencedDocument")
     */
    private $despatchAdviceReferencedDocument;

    /**
     * @var ReferencedDocumentType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\ReferencedDocumentType")
     * @JMS\Expose
     * @JMS\SerializedName("ReceivingAdviceReferencedDocument")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getReceivingAdviceReferencedDocument", setter="setReceivingAdviceReferencedDocument")
     */
    private $receivingAdviceReferencedDocument;

    /**
     * @var ReferencedDocumentType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\ReferencedDocumentType")
     * @JMS\Expose
     * @JMS\SerializedName("DeliveryNoteReferencedDocument")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getDeliveryNoteReferencedDocument", setter="setDeliveryNoteReferencedDocument")
     */
    private $deliveryNoteReferencedDocument;

    /**
     * @return QuantityType|null
     */
    public function getBilledQuantity(): ?QuantityType
    {
        return $this->billedQuantity;
    }

    /**
     * @return QuantityType
     */
    public function getBilledQuantityWithCreate(): QuantityType
    {
        $this->billedQuantity = is_null($this->billedQuantity) ? new QuantityType() : $this->billedQuantity;

        return $this->billedQuantity;
    }

    /**
     * @param QuantityType|null $billedQuantity
     * @return self
     */
    public function setBilledQuantity(?QuantityType $billedQuantity = null): self
    {
        $this->billedQuantity = $billedQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetBilledQuantity(): self
    {
        $this->billedQuantity = null;

        return $this;
    }

    /**
     * @return QuantityType|null
     */
    public function getChargeFreeQuantity(): ?QuantityType
    {
        return $this->chargeFreeQuantity;
    }

    /**
     * @return QuantityType
     */
    public function getChargeFreeQuantityWithCreate(): QuantityType
    {
        $this->chargeFreeQuantity = is_null($this->chargeFreeQuantity) ? new QuantityType() : $this->chargeFreeQuantity;

        return $this->chargeFreeQuantity;
    }

    /**
     * @param QuantityType|null $chargeFreeQuantity
     * @return self
     */
    public function setChargeFreeQuantity(?QuantityType $chargeFreeQuantity = null): self
    {
        $this->chargeFreeQuantity = $chargeFreeQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetChargeFreeQuantity(): self
    {
        $this->chargeFreeQuantity = null;

        return $this;
    }

    /**
     * @return QuantityType|null
     */
    public function getPackageQuantity(): ?QuantityType
    {
        return $this->packageQuantity;
    }

    /**
     * @return QuantityType
     */
    public function getPackageQuantityWithCreate(): QuantityType
    {
        $this->packageQuantity = is_null($this->packageQuantity) ? new QuantityType() : $this->packageQuantity;

        return $this->packageQuantity;
    }

    /**
     * @param QuantityType|null $packageQuantity
     * @return self
     */
    public function setPackageQuantity(?QuantityType $packageQuantity = null): self
    {
        $this->packageQuantity = $packageQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPackageQuantity(): self
    {
        $this->packageQuantity = null;

        return $this;
    }

    /**
     * @return TradePartyType|null
     */
    public function getShipToTradeParty(): ?TradePartyType
    {
        return $this->shipToTradeParty;
    }

    /**
     * @return TradePartyType
     */
    public function getShipToTradePartyWithCreate(): TradePartyType
    {
        $this->shipToTradeParty = is_null($this->shipToTradeParty) ? new TradePartyType() : $this->shipToTradeParty;

        return $this->shipToTradeParty;
    }

    /**
     * @param TradePartyType|null $shipToTradeParty
     * @return self
     */
    public function setShipToTradeParty(?TradePartyType $shipToTradeParty = null): self
    {
        $this->shipToTradeParty = $shipToTradeParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetShipToTradeParty(): self
    {
        $this->shipToTradeParty = null;

        return $this;
    }

    /**
     * @return TradePartyType|null
     */
    public function getUltimateShipToTradeParty(): ?TradePartyType
    {
        return $this->ultimateShipToTradeParty;
    }

    /**
     * @return TradePartyType
     */
    public function getUltimateShipToTradePartyWithCreate(): TradePartyType
    {
        $this->ultimateShipToTradeParty = is_null($this->ultimateShipToTradeParty) ? new TradePartyType() : $this->ultimateShipToTradeParty;

        return $this->ultimateShipToTradeParty;
    }

    /**
     * @param TradePartyType|null $ultimateShipToTradeParty
     * @return self
     */
    public function setUltimateShipToTradeParty(?TradePartyType $ultimateShipToTradeParty = null): self
    {
        $this->ultimateShipToTradeParty = $ultimateShipToTradeParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetUltimateShipToTradeParty(): self
    {
        $this->ultimateShipToTradeParty = null;

        return $this;
    }

    /**
     * @return SupplyChainEventType|null
     */
    public function getActualDeliverySupplyChainEvent(): ?SupplyChainEventType
    {
        return $this->actualDeliverySupplyChainEvent;
    }

    /**
     * @return SupplyChainEventType
     */
    public function getActualDeliverySupplyChainEventWithCreate(): SupplyChainEventType
    {
        $this->actualDeliverySupplyChainEvent = is_null($this->actualDeliverySupplyChainEvent) ? new SupplyChainEventType() : $this->actualDeliverySupplyChainEvent;

        return $this->actualDeliverySupplyChainEvent;
    }

    /**
     * @param SupplyChainEventType|null $actualDeliverySupplyChainEvent
     * @return self
     */
    public function setActualDeliverySupplyChainEvent(
        ?SupplyChainEventType $actualDeliverySupplyChainEvent = null,
    ): self {
        $this->actualDeliverySupplyChainEvent = $actualDeliverySupplyChainEvent;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetActualDeliverySupplyChainEvent(): self
    {
        $this->actualDeliverySupplyChainEvent = null;

        return $this;
    }

    /**
     * @return ReferencedDocumentType|null
     */
    public function getDespatchAdviceReferencedDocument(): ?ReferencedDocumentType
    {
        return $this->despatchAdviceReferencedDocument;
    }

    /**
     * @return ReferencedDocumentType
     */
    public function getDespatchAdviceReferencedDocumentWithCreate(): ReferencedDocumentType
    {
        $this->despatchAdviceReferencedDocument = is_null($this->despatchAdviceReferencedDocument) ? new ReferencedDocumentType() : $this->despatchAdviceReferencedDocument;

        return $this->despatchAdviceReferencedDocument;
    }

    /**
     * @param ReferencedDocumentType|null $despatchAdviceReferencedDocument
     * @return self
     */
    public function setDespatchAdviceReferencedDocument(
        ?ReferencedDocumentType $despatchAdviceReferencedDocument = null,
    ): self {
        $this->despatchAdviceReferencedDocument = $despatchAdviceReferencedDocument;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDespatchAdviceReferencedDocument(): self
    {
        $this->despatchAdviceReferencedDocument = null;

        return $this;
    }

    /**
     * @return ReferencedDocumentType|null
     */
    public function getReceivingAdviceReferencedDocument(): ?ReferencedDocumentType
    {
        return $this->receivingAdviceReferencedDocument;
    }

    /**
     * @return ReferencedDocumentType
     */
    public function getReceivingAdviceReferencedDocumentWithCreate(): ReferencedDocumentType
    {
        $this->receivingAdviceReferencedDocument = is_null($this->receivingAdviceReferencedDocument) ? new ReferencedDocumentType() : $this->receivingAdviceReferencedDocument;

        return $this->receivingAdviceReferencedDocument;
    }

    /**
     * @param ReferencedDocumentType|null $receivingAdviceReferencedDocument
     * @return self
     */
    public function setReceivingAdviceReferencedDocument(
        ?ReferencedDocumentType $receivingAdviceReferencedDocument = null,
    ): self {
        $this->receivingAdviceReferencedDocument = $receivingAdviceReferencedDocument;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetReceivingAdviceReferencedDocument(): self
    {
        $this->receivingAdviceReferencedDocument = null;

        return $this;
    }

    /**
     * @return ReferencedDocumentType|null
     */
    public function getDeliveryNoteReferencedDocument(): ?ReferencedDocumentType
    {
        return $this->deliveryNoteReferencedDocument;
    }

    /**
     * @return ReferencedDocumentType
     */
    public function getDeliveryNoteReferencedDocumentWithCreate(): ReferencedDocumentType
    {
        $this->deliveryNoteReferencedDocument = is_null($this->deliveryNoteReferencedDocument) ? new ReferencedDocumentType() : $this->deliveryNoteReferencedDocument;

        return $this->deliveryNoteReferencedDocument;
    }

    /**
     * @param ReferencedDocumentType|null $deliveryNoteReferencedDocument
     * @return self
     */
    public function setDeliveryNoteReferencedDocument(
        ?ReferencedDocumentType $deliveryNoteReferencedDocument = null,
    ): self {
        $this->deliveryNoteReferencedDocument = $deliveryNoteReferencedDocument;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDeliveryNoteReferencedDocument(): self
    {
        $this->deliveryNoteReferencedDocument = null;

        return $this;
    }
}
