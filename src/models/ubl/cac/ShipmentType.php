<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\ubl\cbc\ConsignmentQuantity;
use horstoeko\invoicesuite\models\ubl\cbc\DeclaredCustomsValueAmount;
use horstoeko\invoicesuite\models\ubl\cbc\DeclaredForCarriageValueAmount;
use horstoeko\invoicesuite\models\ubl\cbc\DeclaredStatisticsValueAmount;
use horstoeko\invoicesuite\models\ubl\cbc\DeliveryInstructions;
use horstoeko\invoicesuite\models\ubl\cbc\FreeOnBoardValueAmount;
use horstoeko\invoicesuite\models\ubl\cbc\GrossVolumeMeasure;
use horstoeko\invoicesuite\models\ubl\cbc\GrossWeightMeasure;
use horstoeko\invoicesuite\models\ubl\cbc\HandlingCode;
use horstoeko\invoicesuite\models\ubl\cbc\HandlingInstructions;
use horstoeko\invoicesuite\models\ubl\cbc\ID;
use horstoeko\invoicesuite\models\ubl\cbc\Information;
use horstoeko\invoicesuite\models\ubl\cbc\InsuranceValueAmount;
use horstoeko\invoicesuite\models\ubl\cbc\NetNetWeightMeasure;
use horstoeko\invoicesuite\models\ubl\cbc\NetVolumeMeasure;
use horstoeko\invoicesuite\models\ubl\cbc\NetWeightMeasure;
use horstoeko\invoicesuite\models\ubl\cbc\ShippingPriorityLevelCode;
use horstoeko\invoicesuite\models\ubl\cbc\SpecialInstructions;
use horstoeko\invoicesuite\models\ubl\cbc\TotalGoodsItemQuantity;
use horstoeko\invoicesuite\models\ubl\cbc\TotalTransportHandlingUnitQuantity;

class ShipmentType
{
    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ID
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ID")
     * @JMS\Expose
     * @JMS\SerializedName("ID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getID", setter="setID")
     */
    private $iD;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ShippingPriorityLevelCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ShippingPriorityLevelCode")
     * @JMS\Expose
     * @JMS\SerializedName("ShippingPriorityLevelCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getShippingPriorityLevelCode", setter="setShippingPriorityLevelCode")
     */
    private $shippingPriorityLevelCode;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\HandlingCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\HandlingCode")
     * @JMS\Expose
     * @JMS\SerializedName("HandlingCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getHandlingCode", setter="setHandlingCode")
     */
    private $handlingCode;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\HandlingInstructions>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\HandlingInstructions>")
     * @JMS\Expose
     * @JMS\SerializedName("HandlingInstructions")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="HandlingInstructions", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getHandlingInstructions", setter="setHandlingInstructions")
     */
    private $handlingInstructions;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\Information>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\Information>")
     * @JMS\Expose
     * @JMS\SerializedName("Information")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Information", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getInformation", setter="setInformation")
     */
    private $information;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\GrossWeightMeasure
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\GrossWeightMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("GrossWeightMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getGrossWeightMeasure", setter="setGrossWeightMeasure")
     */
    private $grossWeightMeasure;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\NetWeightMeasure
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\NetWeightMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("NetWeightMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getNetWeightMeasure", setter="setNetWeightMeasure")
     */
    private $netWeightMeasure;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\NetNetWeightMeasure
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\NetNetWeightMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("NetNetWeightMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getNetNetWeightMeasure", setter="setNetNetWeightMeasure")
     */
    private $netNetWeightMeasure;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\GrossVolumeMeasure
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\GrossVolumeMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("GrossVolumeMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getGrossVolumeMeasure", setter="setGrossVolumeMeasure")
     */
    private $grossVolumeMeasure;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\NetVolumeMeasure
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\NetVolumeMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("NetVolumeMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getNetVolumeMeasure", setter="setNetVolumeMeasure")
     */
    private $netVolumeMeasure;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\TotalGoodsItemQuantity
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\TotalGoodsItemQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("TotalGoodsItemQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTotalGoodsItemQuantity", setter="setTotalGoodsItemQuantity")
     */
    private $totalGoodsItemQuantity;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\TotalTransportHandlingUnitQuantity
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\TotalTransportHandlingUnitQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("TotalTransportHandlingUnitQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTotalTransportHandlingUnitQuantity", setter="setTotalTransportHandlingUnitQuantity")
     */
    private $totalTransportHandlingUnitQuantity;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\InsuranceValueAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\InsuranceValueAmount")
     * @JMS\Expose
     * @JMS\SerializedName("InsuranceValueAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getInsuranceValueAmount", setter="setInsuranceValueAmount")
     */
    private $insuranceValueAmount;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\DeclaredCustomsValueAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\DeclaredCustomsValueAmount")
     * @JMS\Expose
     * @JMS\SerializedName("DeclaredCustomsValueAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDeclaredCustomsValueAmount", setter="setDeclaredCustomsValueAmount")
     */
    private $declaredCustomsValueAmount;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\DeclaredForCarriageValueAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\DeclaredForCarriageValueAmount")
     * @JMS\Expose
     * @JMS\SerializedName("DeclaredForCarriageValueAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDeclaredForCarriageValueAmount", setter="setDeclaredForCarriageValueAmount")
     */
    private $declaredForCarriageValueAmount;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\DeclaredStatisticsValueAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\DeclaredStatisticsValueAmount")
     * @JMS\Expose
     * @JMS\SerializedName("DeclaredStatisticsValueAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDeclaredStatisticsValueAmount", setter="setDeclaredStatisticsValueAmount")
     */
    private $declaredStatisticsValueAmount;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\FreeOnBoardValueAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\FreeOnBoardValueAmount")
     * @JMS\Expose
     * @JMS\SerializedName("FreeOnBoardValueAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFreeOnBoardValueAmount", setter="setFreeOnBoardValueAmount")
     */
    private $freeOnBoardValueAmount;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\SpecialInstructions>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\SpecialInstructions>")
     * @JMS\Expose
     * @JMS\SerializedName("SpecialInstructions")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SpecialInstructions", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getSpecialInstructions", setter="setSpecialInstructions")
     */
    private $specialInstructions;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\DeliveryInstructions>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\DeliveryInstructions>")
     * @JMS\Expose
     * @JMS\SerializedName("DeliveryInstructions")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="DeliveryInstructions", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getDeliveryInstructions", setter="setDeliveryInstructions")
     */
    private $deliveryInstructions;

    /**
     * @var bool
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("SplitConsignmentIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSplitConsignmentIndicator", setter="setSplitConsignmentIndicator")
     */
    private $splitConsignmentIndicator;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ConsignmentQuantity
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ConsignmentQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("ConsignmentQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getConsignmentQuantity", setter="setConsignmentQuantity")
     */
    private $consignmentQuantity;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\Consignment>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\Consignment>")
     * @JMS\Expose
     * @JMS\SerializedName("Consignment")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Consignment", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getConsignment", setter="setConsignment")
     */
    private $consignment;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\GoodsItem>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\GoodsItem>")
     * @JMS\Expose
     * @JMS\SerializedName("GoodsItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="GoodsItem", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getGoodsItem", setter="setGoodsItem")
     */
    private $goodsItem;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\ShipmentStage>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\ShipmentStage>")
     * @JMS\Expose
     * @JMS\SerializedName("ShipmentStage")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ShipmentStage", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getShipmentStage", setter="setShipmentStage")
     */
    private $shipmentStage;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\Delivery
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\Delivery")
     * @JMS\Expose
     * @JMS\SerializedName("Delivery")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDelivery", setter="setDelivery")
     */
    private $delivery;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\TransportHandlingUnit>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\TransportHandlingUnit>")
     * @JMS\Expose
     * @JMS\SerializedName("TransportHandlingUnit")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="TransportHandlingUnit", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getTransportHandlingUnit", setter="setTransportHandlingUnit")
     */
    private $transportHandlingUnit;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\ReturnAddress
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\ReturnAddress")
     * @JMS\Expose
     * @JMS\SerializedName("ReturnAddress")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getReturnAddress", setter="setReturnAddress")
     */
    private $returnAddress;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\OriginAddress
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\OriginAddress")
     * @JMS\Expose
     * @JMS\SerializedName("OriginAddress")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOriginAddress", setter="setOriginAddress")
     */
    private $originAddress;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\FirstArrivalPortLocation
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\FirstArrivalPortLocation")
     * @JMS\Expose
     * @JMS\SerializedName("FirstArrivalPortLocation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFirstArrivalPortLocation", setter="setFirstArrivalPortLocation")
     */
    private $firstArrivalPortLocation;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\LastExitPortLocation
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\LastExitPortLocation")
     * @JMS\Expose
     * @JMS\SerializedName("LastExitPortLocation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLastExitPortLocation", setter="setLastExitPortLocation")
     */
    private $lastExitPortLocation;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\ExportCountry
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\ExportCountry")
     * @JMS\Expose
     * @JMS\SerializedName("ExportCountry")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getExportCountry", setter="setExportCountry")
     */
    private $exportCountry;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\FreightAllowanceCharge>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\FreightAllowanceCharge>")
     * @JMS\Expose
     * @JMS\SerializedName("FreightAllowanceCharge")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="FreightAllowanceCharge", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getFreightAllowanceCharge", setter="setFreightAllowanceCharge")
     */
    private $freightAllowanceCharge;

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ID|null
     */
    public function getID(): ?ID
    {
        return $this->iD;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ID
     */
    public function getIDWithCreate(): ID
    {
        $this->iD = is_null($this->iD) ? new ID() : $this->iD;

        return $this->iD;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ID $iD
     * @return self
     */
    public function setID(ID $iD): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ShippingPriorityLevelCode|null
     */
    public function getShippingPriorityLevelCode(): ?ShippingPriorityLevelCode
    {
        return $this->shippingPriorityLevelCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ShippingPriorityLevelCode
     */
    public function getShippingPriorityLevelCodeWithCreate(): ShippingPriorityLevelCode
    {
        $this->shippingPriorityLevelCode = is_null($this->shippingPriorityLevelCode) ? new ShippingPriorityLevelCode() : $this->shippingPriorityLevelCode;

        return $this->shippingPriorityLevelCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ShippingPriorityLevelCode $shippingPriorityLevelCode
     * @return self
     */
    public function setShippingPriorityLevelCode(ShippingPriorityLevelCode $shippingPriorityLevelCode): self
    {
        $this->shippingPriorityLevelCode = $shippingPriorityLevelCode;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\HandlingCode|null
     */
    public function getHandlingCode(): ?HandlingCode
    {
        return $this->handlingCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\HandlingCode
     */
    public function getHandlingCodeWithCreate(): HandlingCode
    {
        $this->handlingCode = is_null($this->handlingCode) ? new HandlingCode() : $this->handlingCode;

        return $this->handlingCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\HandlingCode $handlingCode
     * @return self
     */
    public function setHandlingCode(HandlingCode $handlingCode): self
    {
        $this->handlingCode = $handlingCode;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\HandlingInstructions>|null
     */
    public function getHandlingInstructions(): ?array
    {
        return $this->handlingInstructions;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\HandlingInstructions> $handlingInstructions
     * @return self
     */
    public function setHandlingInstructions(array $handlingInstructions): self
    {
        $this->handlingInstructions = $handlingInstructions;

        return $this;
    }

    /**
     * @return self
     */
    public function clearHandlingInstructions(): self
    {
        $this->handlingInstructions = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\HandlingInstructions $handlingInstructions
     * @return self
     */
    public function addToHandlingInstructions(HandlingInstructions $handlingInstructions): self
    {
        $this->handlingInstructions[] = $handlingInstructions;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\HandlingInstructions
     */
    public function addToHandlingInstructionsWithCreate(): HandlingInstructions
    {
        $this->addTohandlingInstructions($handlingInstructions = new HandlingInstructions());

        return $handlingInstructions;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\HandlingInstructions $handlingInstructions
     * @return self
     */
    public function addOnceToHandlingInstructions(HandlingInstructions $handlingInstructions): self
    {
        $this->handlingInstructions[0] = $handlingInstructions;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\HandlingInstructions
     */
    public function addOnceToHandlingInstructionsWithCreate(): HandlingInstructions
    {
        if ($this->handlingInstructions === []) {
            $this->addOnceTohandlingInstructions(new HandlingInstructions());
        }

        return $this->handlingInstructions[0];
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\Information>|null
     */
    public function getInformation(): ?array
    {
        return $this->information;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\Information> $information
     * @return self
     */
    public function setInformation(array $information): self
    {
        $this->information = $information;

        return $this;
    }

    /**
     * @return self
     */
    public function clearInformation(): self
    {
        $this->information = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Information $information
     * @return self
     */
    public function addToInformation(Information $information): self
    {
        $this->information[] = $information;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Information
     */
    public function addToInformationWithCreate(): Information
    {
        $this->addToinformation($information = new Information());

        return $information;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Information $information
     * @return self
     */
    public function addOnceToInformation(Information $information): self
    {
        $this->information[0] = $information;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Information
     */
    public function addOnceToInformationWithCreate(): Information
    {
        if ($this->information === []) {
            $this->addOnceToinformation(new Information());
        }

        return $this->information[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\GrossWeightMeasure|null
     */
    public function getGrossWeightMeasure(): ?GrossWeightMeasure
    {
        return $this->grossWeightMeasure;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\GrossWeightMeasure
     */
    public function getGrossWeightMeasureWithCreate(): GrossWeightMeasure
    {
        $this->grossWeightMeasure = is_null($this->grossWeightMeasure) ? new GrossWeightMeasure() : $this->grossWeightMeasure;

        return $this->grossWeightMeasure;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\GrossWeightMeasure $grossWeightMeasure
     * @return self
     */
    public function setGrossWeightMeasure(GrossWeightMeasure $grossWeightMeasure): self
    {
        $this->grossWeightMeasure = $grossWeightMeasure;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\NetWeightMeasure|null
     */
    public function getNetWeightMeasure(): ?NetWeightMeasure
    {
        return $this->netWeightMeasure;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\NetWeightMeasure
     */
    public function getNetWeightMeasureWithCreate(): NetWeightMeasure
    {
        $this->netWeightMeasure = is_null($this->netWeightMeasure) ? new NetWeightMeasure() : $this->netWeightMeasure;

        return $this->netWeightMeasure;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\NetWeightMeasure $netWeightMeasure
     * @return self
     */
    public function setNetWeightMeasure(NetWeightMeasure $netWeightMeasure): self
    {
        $this->netWeightMeasure = $netWeightMeasure;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\NetNetWeightMeasure|null
     */
    public function getNetNetWeightMeasure(): ?NetNetWeightMeasure
    {
        return $this->netNetWeightMeasure;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\NetNetWeightMeasure
     */
    public function getNetNetWeightMeasureWithCreate(): NetNetWeightMeasure
    {
        $this->netNetWeightMeasure = is_null($this->netNetWeightMeasure) ? new NetNetWeightMeasure() : $this->netNetWeightMeasure;

        return $this->netNetWeightMeasure;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\NetNetWeightMeasure $netNetWeightMeasure
     * @return self
     */
    public function setNetNetWeightMeasure(NetNetWeightMeasure $netNetWeightMeasure): self
    {
        $this->netNetWeightMeasure = $netNetWeightMeasure;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\GrossVolumeMeasure|null
     */
    public function getGrossVolumeMeasure(): ?GrossVolumeMeasure
    {
        return $this->grossVolumeMeasure;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\GrossVolumeMeasure
     */
    public function getGrossVolumeMeasureWithCreate(): GrossVolumeMeasure
    {
        $this->grossVolumeMeasure = is_null($this->grossVolumeMeasure) ? new GrossVolumeMeasure() : $this->grossVolumeMeasure;

        return $this->grossVolumeMeasure;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\GrossVolumeMeasure $grossVolumeMeasure
     * @return self
     */
    public function setGrossVolumeMeasure(GrossVolumeMeasure $grossVolumeMeasure): self
    {
        $this->grossVolumeMeasure = $grossVolumeMeasure;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\NetVolumeMeasure|null
     */
    public function getNetVolumeMeasure(): ?NetVolumeMeasure
    {
        return $this->netVolumeMeasure;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\NetVolumeMeasure
     */
    public function getNetVolumeMeasureWithCreate(): NetVolumeMeasure
    {
        $this->netVolumeMeasure = is_null($this->netVolumeMeasure) ? new NetVolumeMeasure() : $this->netVolumeMeasure;

        return $this->netVolumeMeasure;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\NetVolumeMeasure $netVolumeMeasure
     * @return self
     */
    public function setNetVolumeMeasure(NetVolumeMeasure $netVolumeMeasure): self
    {
        $this->netVolumeMeasure = $netVolumeMeasure;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\TotalGoodsItemQuantity|null
     */
    public function getTotalGoodsItemQuantity(): ?TotalGoodsItemQuantity
    {
        return $this->totalGoodsItemQuantity;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\TotalGoodsItemQuantity
     */
    public function getTotalGoodsItemQuantityWithCreate(): TotalGoodsItemQuantity
    {
        $this->totalGoodsItemQuantity = is_null($this->totalGoodsItemQuantity) ? new TotalGoodsItemQuantity() : $this->totalGoodsItemQuantity;

        return $this->totalGoodsItemQuantity;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\TotalGoodsItemQuantity $totalGoodsItemQuantity
     * @return self
     */
    public function setTotalGoodsItemQuantity(TotalGoodsItemQuantity $totalGoodsItemQuantity): self
    {
        $this->totalGoodsItemQuantity = $totalGoodsItemQuantity;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\TotalTransportHandlingUnitQuantity|null
     */
    public function getTotalTransportHandlingUnitQuantity(): ?TotalTransportHandlingUnitQuantity
    {
        return $this->totalTransportHandlingUnitQuantity;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\TotalTransportHandlingUnitQuantity
     */
    public function getTotalTransportHandlingUnitQuantityWithCreate(): TotalTransportHandlingUnitQuantity
    {
        $this->totalTransportHandlingUnitQuantity = is_null($this->totalTransportHandlingUnitQuantity) ? new TotalTransportHandlingUnitQuantity() : $this->totalTransportHandlingUnitQuantity;

        return $this->totalTransportHandlingUnitQuantity;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\TotalTransportHandlingUnitQuantity $totalTransportHandlingUnitQuantity
     * @return self
     */
    public function setTotalTransportHandlingUnitQuantity(
        TotalTransportHandlingUnitQuantity $totalTransportHandlingUnitQuantity,
    ): self {
        $this->totalTransportHandlingUnitQuantity = $totalTransportHandlingUnitQuantity;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\InsuranceValueAmount|null
     */
    public function getInsuranceValueAmount(): ?InsuranceValueAmount
    {
        return $this->insuranceValueAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\InsuranceValueAmount
     */
    public function getInsuranceValueAmountWithCreate(): InsuranceValueAmount
    {
        $this->insuranceValueAmount = is_null($this->insuranceValueAmount) ? new InsuranceValueAmount() : $this->insuranceValueAmount;

        return $this->insuranceValueAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\InsuranceValueAmount $insuranceValueAmount
     * @return self
     */
    public function setInsuranceValueAmount(InsuranceValueAmount $insuranceValueAmount): self
    {
        $this->insuranceValueAmount = $insuranceValueAmount;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\DeclaredCustomsValueAmount|null
     */
    public function getDeclaredCustomsValueAmount(): ?DeclaredCustomsValueAmount
    {
        return $this->declaredCustomsValueAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\DeclaredCustomsValueAmount
     */
    public function getDeclaredCustomsValueAmountWithCreate(): DeclaredCustomsValueAmount
    {
        $this->declaredCustomsValueAmount = is_null($this->declaredCustomsValueAmount) ? new DeclaredCustomsValueAmount() : $this->declaredCustomsValueAmount;

        return $this->declaredCustomsValueAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\DeclaredCustomsValueAmount $declaredCustomsValueAmount
     * @return self
     */
    public function setDeclaredCustomsValueAmount(DeclaredCustomsValueAmount $declaredCustomsValueAmount): self
    {
        $this->declaredCustomsValueAmount = $declaredCustomsValueAmount;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\DeclaredForCarriageValueAmount|null
     */
    public function getDeclaredForCarriageValueAmount(): ?DeclaredForCarriageValueAmount
    {
        return $this->declaredForCarriageValueAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\DeclaredForCarriageValueAmount
     */
    public function getDeclaredForCarriageValueAmountWithCreate(): DeclaredForCarriageValueAmount
    {
        $this->declaredForCarriageValueAmount = is_null($this->declaredForCarriageValueAmount) ? new DeclaredForCarriageValueAmount() : $this->declaredForCarriageValueAmount;

        return $this->declaredForCarriageValueAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\DeclaredForCarriageValueAmount $declaredForCarriageValueAmount
     * @return self
     */
    public function setDeclaredForCarriageValueAmount(
        DeclaredForCarriageValueAmount $declaredForCarriageValueAmount,
    ): self {
        $this->declaredForCarriageValueAmount = $declaredForCarriageValueAmount;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\DeclaredStatisticsValueAmount|null
     */
    public function getDeclaredStatisticsValueAmount(): ?DeclaredStatisticsValueAmount
    {
        return $this->declaredStatisticsValueAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\DeclaredStatisticsValueAmount
     */
    public function getDeclaredStatisticsValueAmountWithCreate(): DeclaredStatisticsValueAmount
    {
        $this->declaredStatisticsValueAmount = is_null($this->declaredStatisticsValueAmount) ? new DeclaredStatisticsValueAmount() : $this->declaredStatisticsValueAmount;

        return $this->declaredStatisticsValueAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\DeclaredStatisticsValueAmount $declaredStatisticsValueAmount
     * @return self
     */
    public function setDeclaredStatisticsValueAmount(
        DeclaredStatisticsValueAmount $declaredStatisticsValueAmount,
    ): self {
        $this->declaredStatisticsValueAmount = $declaredStatisticsValueAmount;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\FreeOnBoardValueAmount|null
     */
    public function getFreeOnBoardValueAmount(): ?FreeOnBoardValueAmount
    {
        return $this->freeOnBoardValueAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\FreeOnBoardValueAmount
     */
    public function getFreeOnBoardValueAmountWithCreate(): FreeOnBoardValueAmount
    {
        $this->freeOnBoardValueAmount = is_null($this->freeOnBoardValueAmount) ? new FreeOnBoardValueAmount() : $this->freeOnBoardValueAmount;

        return $this->freeOnBoardValueAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\FreeOnBoardValueAmount $freeOnBoardValueAmount
     * @return self
     */
    public function setFreeOnBoardValueAmount(FreeOnBoardValueAmount $freeOnBoardValueAmount): self
    {
        $this->freeOnBoardValueAmount = $freeOnBoardValueAmount;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\SpecialInstructions>|null
     */
    public function getSpecialInstructions(): ?array
    {
        return $this->specialInstructions;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\SpecialInstructions> $specialInstructions
     * @return self
     */
    public function setSpecialInstructions(array $specialInstructions): self
    {
        $this->specialInstructions = $specialInstructions;

        return $this;
    }

    /**
     * @return self
     */
    public function clearSpecialInstructions(): self
    {
        $this->specialInstructions = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\SpecialInstructions $specialInstructions
     * @return self
     */
    public function addToSpecialInstructions(SpecialInstructions $specialInstructions): self
    {
        $this->specialInstructions[] = $specialInstructions;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\SpecialInstructions
     */
    public function addToSpecialInstructionsWithCreate(): SpecialInstructions
    {
        $this->addTospecialInstructions($specialInstructions = new SpecialInstructions());

        return $specialInstructions;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\SpecialInstructions $specialInstructions
     * @return self
     */
    public function addOnceToSpecialInstructions(SpecialInstructions $specialInstructions): self
    {
        $this->specialInstructions[0] = $specialInstructions;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\SpecialInstructions
     */
    public function addOnceToSpecialInstructionsWithCreate(): SpecialInstructions
    {
        if ($this->specialInstructions === []) {
            $this->addOnceTospecialInstructions(new SpecialInstructions());
        }

        return $this->specialInstructions[0];
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\DeliveryInstructions>|null
     */
    public function getDeliveryInstructions(): ?array
    {
        return $this->deliveryInstructions;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\DeliveryInstructions> $deliveryInstructions
     * @return self
     */
    public function setDeliveryInstructions(array $deliveryInstructions): self
    {
        $this->deliveryInstructions = $deliveryInstructions;

        return $this;
    }

    /**
     * @return self
     */
    public function clearDeliveryInstructions(): self
    {
        $this->deliveryInstructions = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\DeliveryInstructions $deliveryInstructions
     * @return self
     */
    public function addToDeliveryInstructions(DeliveryInstructions $deliveryInstructions): self
    {
        $this->deliveryInstructions[] = $deliveryInstructions;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\DeliveryInstructions
     */
    public function addToDeliveryInstructionsWithCreate(): DeliveryInstructions
    {
        $this->addTodeliveryInstructions($deliveryInstructions = new DeliveryInstructions());

        return $deliveryInstructions;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\DeliveryInstructions $deliveryInstructions
     * @return self
     */
    public function addOnceToDeliveryInstructions(DeliveryInstructions $deliveryInstructions): self
    {
        $this->deliveryInstructions[0] = $deliveryInstructions;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\DeliveryInstructions
     */
    public function addOnceToDeliveryInstructionsWithCreate(): DeliveryInstructions
    {
        if ($this->deliveryInstructions === []) {
            $this->addOnceTodeliveryInstructions(new DeliveryInstructions());
        }

        return $this->deliveryInstructions[0];
    }

    /**
     * @return bool|null
     */
    public function getSplitConsignmentIndicator(): ?bool
    {
        return $this->splitConsignmentIndicator;
    }

    /**
     * @param bool $splitConsignmentIndicator
     * @return self
     */
    public function setSplitConsignmentIndicator(bool $splitConsignmentIndicator): self
    {
        $this->splitConsignmentIndicator = $splitConsignmentIndicator;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ConsignmentQuantity|null
     */
    public function getConsignmentQuantity(): ?ConsignmentQuantity
    {
        return $this->consignmentQuantity;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ConsignmentQuantity
     */
    public function getConsignmentQuantityWithCreate(): ConsignmentQuantity
    {
        $this->consignmentQuantity = is_null($this->consignmentQuantity) ? new ConsignmentQuantity() : $this->consignmentQuantity;

        return $this->consignmentQuantity;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ConsignmentQuantity $consignmentQuantity
     * @return self
     */
    public function setConsignmentQuantity(ConsignmentQuantity $consignmentQuantity): self
    {
        $this->consignmentQuantity = $consignmentQuantity;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\Consignment>|null
     */
    public function getConsignment(): ?array
    {
        return $this->consignment;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\Consignment> $consignment
     * @return self
     */
    public function setConsignment(array $consignment): self
    {
        $this->consignment = $consignment;

        return $this;
    }

    /**
     * @return self
     */
    public function clearConsignment(): self
    {
        $this->consignment = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\Consignment $consignment
     * @return self
     */
    public function addToConsignment(Consignment $consignment): self
    {
        $this->consignment[] = $consignment;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Consignment
     */
    public function addToConsignmentWithCreate(): Consignment
    {
        $this->addToconsignment($consignment = new Consignment());

        return $consignment;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\Consignment $consignment
     * @return self
     */
    public function addOnceToConsignment(Consignment $consignment): self
    {
        $this->consignment[0] = $consignment;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Consignment
     */
    public function addOnceToConsignmentWithCreate(): Consignment
    {
        if ($this->consignment === []) {
            $this->addOnceToconsignment(new Consignment());
        }

        return $this->consignment[0];
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\GoodsItem>|null
     */
    public function getGoodsItem(): ?array
    {
        return $this->goodsItem;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\GoodsItem> $goodsItem
     * @return self
     */
    public function setGoodsItem(array $goodsItem): self
    {
        $this->goodsItem = $goodsItem;

        return $this;
    }

    /**
     * @return self
     */
    public function clearGoodsItem(): self
    {
        $this->goodsItem = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\GoodsItem $goodsItem
     * @return self
     */
    public function addToGoodsItem(GoodsItem $goodsItem): self
    {
        $this->goodsItem[] = $goodsItem;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\GoodsItem
     */
    public function addToGoodsItemWithCreate(): GoodsItem
    {
        $this->addTogoodsItem($goodsItem = new GoodsItem());

        return $goodsItem;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\GoodsItem $goodsItem
     * @return self
     */
    public function addOnceToGoodsItem(GoodsItem $goodsItem): self
    {
        $this->goodsItem[0] = $goodsItem;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\GoodsItem
     */
    public function addOnceToGoodsItemWithCreate(): GoodsItem
    {
        if ($this->goodsItem === []) {
            $this->addOnceTogoodsItem(new GoodsItem());
        }

        return $this->goodsItem[0];
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\ShipmentStage>|null
     */
    public function getShipmentStage(): ?array
    {
        return $this->shipmentStage;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\ShipmentStage> $shipmentStage
     * @return self
     */
    public function setShipmentStage(array $shipmentStage): self
    {
        $this->shipmentStage = $shipmentStage;

        return $this;
    }

    /**
     * @return self
     */
    public function clearShipmentStage(): self
    {
        $this->shipmentStage = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\ShipmentStage $shipmentStage
     * @return self
     */
    public function addToShipmentStage(ShipmentStage $shipmentStage): self
    {
        $this->shipmentStage[] = $shipmentStage;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ShipmentStage
     */
    public function addToShipmentStageWithCreate(): ShipmentStage
    {
        $this->addToshipmentStage($shipmentStage = new ShipmentStage());

        return $shipmentStage;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\ShipmentStage $shipmentStage
     * @return self
     */
    public function addOnceToShipmentStage(ShipmentStage $shipmentStage): self
    {
        $this->shipmentStage[0] = $shipmentStage;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ShipmentStage
     */
    public function addOnceToShipmentStageWithCreate(): ShipmentStage
    {
        if ($this->shipmentStage === []) {
            $this->addOnceToshipmentStage(new ShipmentStage());
        }

        return $this->shipmentStage[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Delivery|null
     */
    public function getDelivery(): ?Delivery
    {
        return $this->delivery;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Delivery
     */
    public function getDeliveryWithCreate(): Delivery
    {
        $this->delivery = is_null($this->delivery) ? new Delivery() : $this->delivery;

        return $this->delivery;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\Delivery $delivery
     * @return self
     */
    public function setDelivery(Delivery $delivery): self
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\TransportHandlingUnit>|null
     */
    public function getTransportHandlingUnit(): ?array
    {
        return $this->transportHandlingUnit;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\TransportHandlingUnit> $transportHandlingUnit
     * @return self
     */
    public function setTransportHandlingUnit(array $transportHandlingUnit): self
    {
        $this->transportHandlingUnit = $transportHandlingUnit;

        return $this;
    }

    /**
     * @return self
     */
    public function clearTransportHandlingUnit(): self
    {
        $this->transportHandlingUnit = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\TransportHandlingUnit $transportHandlingUnit
     * @return self
     */
    public function addToTransportHandlingUnit(TransportHandlingUnit $transportHandlingUnit): self
    {
        $this->transportHandlingUnit[] = $transportHandlingUnit;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\TransportHandlingUnit
     */
    public function addToTransportHandlingUnitWithCreate(): TransportHandlingUnit
    {
        $this->addTotransportHandlingUnit($transportHandlingUnit = new TransportHandlingUnit());

        return $transportHandlingUnit;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\TransportHandlingUnit $transportHandlingUnit
     * @return self
     */
    public function addOnceToTransportHandlingUnit(TransportHandlingUnit $transportHandlingUnit): self
    {
        $this->transportHandlingUnit[0] = $transportHandlingUnit;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\TransportHandlingUnit
     */
    public function addOnceToTransportHandlingUnitWithCreate(): TransportHandlingUnit
    {
        if ($this->transportHandlingUnit === []) {
            $this->addOnceTotransportHandlingUnit(new TransportHandlingUnit());
        }

        return $this->transportHandlingUnit[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ReturnAddress|null
     */
    public function getReturnAddress(): ?ReturnAddress
    {
        return $this->returnAddress;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ReturnAddress
     */
    public function getReturnAddressWithCreate(): ReturnAddress
    {
        $this->returnAddress = is_null($this->returnAddress) ? new ReturnAddress() : $this->returnAddress;

        return $this->returnAddress;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\ReturnAddress $returnAddress
     * @return self
     */
    public function setReturnAddress(ReturnAddress $returnAddress): self
    {
        $this->returnAddress = $returnAddress;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\OriginAddress|null
     */
    public function getOriginAddress(): ?OriginAddress
    {
        return $this->originAddress;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\OriginAddress
     */
    public function getOriginAddressWithCreate(): OriginAddress
    {
        $this->originAddress = is_null($this->originAddress) ? new OriginAddress() : $this->originAddress;

        return $this->originAddress;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\OriginAddress $originAddress
     * @return self
     */
    public function setOriginAddress(OriginAddress $originAddress): self
    {
        $this->originAddress = $originAddress;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\FirstArrivalPortLocation|null
     */
    public function getFirstArrivalPortLocation(): ?FirstArrivalPortLocation
    {
        return $this->firstArrivalPortLocation;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\FirstArrivalPortLocation
     */
    public function getFirstArrivalPortLocationWithCreate(): FirstArrivalPortLocation
    {
        $this->firstArrivalPortLocation = is_null($this->firstArrivalPortLocation) ? new FirstArrivalPortLocation() : $this->firstArrivalPortLocation;

        return $this->firstArrivalPortLocation;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\FirstArrivalPortLocation $firstArrivalPortLocation
     * @return self
     */
    public function setFirstArrivalPortLocation(FirstArrivalPortLocation $firstArrivalPortLocation): self
    {
        $this->firstArrivalPortLocation = $firstArrivalPortLocation;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\LastExitPortLocation|null
     */
    public function getLastExitPortLocation(): ?LastExitPortLocation
    {
        return $this->lastExitPortLocation;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\LastExitPortLocation
     */
    public function getLastExitPortLocationWithCreate(): LastExitPortLocation
    {
        $this->lastExitPortLocation = is_null($this->lastExitPortLocation) ? new LastExitPortLocation() : $this->lastExitPortLocation;

        return $this->lastExitPortLocation;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\LastExitPortLocation $lastExitPortLocation
     * @return self
     */
    public function setLastExitPortLocation(LastExitPortLocation $lastExitPortLocation): self
    {
        $this->lastExitPortLocation = $lastExitPortLocation;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ExportCountry|null
     */
    public function getExportCountry(): ?ExportCountry
    {
        return $this->exportCountry;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ExportCountry
     */
    public function getExportCountryWithCreate(): ExportCountry
    {
        $this->exportCountry = is_null($this->exportCountry) ? new ExportCountry() : $this->exportCountry;

        return $this->exportCountry;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\ExportCountry $exportCountry
     * @return self
     */
    public function setExportCountry(ExportCountry $exportCountry): self
    {
        $this->exportCountry = $exportCountry;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\FreightAllowanceCharge>|null
     */
    public function getFreightAllowanceCharge(): ?array
    {
        return $this->freightAllowanceCharge;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\FreightAllowanceCharge> $freightAllowanceCharge
     * @return self
     */
    public function setFreightAllowanceCharge(array $freightAllowanceCharge): self
    {
        $this->freightAllowanceCharge = $freightAllowanceCharge;

        return $this;
    }

    /**
     * @return self
     */
    public function clearFreightAllowanceCharge(): self
    {
        $this->freightAllowanceCharge = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\FreightAllowanceCharge $freightAllowanceCharge
     * @return self
     */
    public function addToFreightAllowanceCharge(FreightAllowanceCharge $freightAllowanceCharge): self
    {
        $this->freightAllowanceCharge[] = $freightAllowanceCharge;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\FreightAllowanceCharge
     */
    public function addToFreightAllowanceChargeWithCreate(): FreightAllowanceCharge
    {
        $this->addTofreightAllowanceCharge($freightAllowanceCharge = new FreightAllowanceCharge());

        return $freightAllowanceCharge;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\FreightAllowanceCharge $freightAllowanceCharge
     * @return self
     */
    public function addOnceToFreightAllowanceCharge(FreightAllowanceCharge $freightAllowanceCharge): self
    {
        $this->freightAllowanceCharge[0] = $freightAllowanceCharge;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\FreightAllowanceCharge
     */
    public function addOnceToFreightAllowanceChargeWithCreate(): FreightAllowanceCharge
    {
        if ($this->freightAllowanceCharge === []) {
            $this->addOnceTofreightAllowanceCharge(new FreightAllowanceCharge());
        }

        return $this->freightAllowanceCharge[0];
    }
}
