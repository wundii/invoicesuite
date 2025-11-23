<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ChargeableQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ChargeableWeightMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CustomsStatusCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CustomsTariffQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\DeclaredCustomsValueAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\DeclaredForCarriageValueAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\DeclaredStatisticsValueAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\FreeOnBoardValueAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\GrossVolumeMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\GrossWeightMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\InsuranceValueAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\NetNetWeightMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\NetVolumeMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\NetWeightMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PreferenceCriterionCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Quantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\RequiredCustomsID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ReturnableQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SequenceNumberID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TraceID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ValueAmount;

class GoodsItemType
{
    use HandlesObjectFlags;

    /**
     * @var ID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ID")
     * @JMS\Expose
     * @JMS\SerializedName("ID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getID", setter="setID")
     */
    private $iD;

    /**
     * @var SequenceNumberID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\SequenceNumberID")
     * @JMS\Expose
     * @JMS\SerializedName("SequenceNumberID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSequenceNumberID", setter="setSequenceNumberID")
     */
    private $sequenceNumberID;

    /**
     * @var array<Description>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Description>")
     * @JMS\Expose
     * @JMS\SerializedName("Description")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Description", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getDescription", setter="setDescription")
     */
    private $description;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("HazardousRiskIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getHazardousRiskIndicator", setter="setHazardousRiskIndicator")
     */
    private $hazardousRiskIndicator;

    /**
     * @var DeclaredCustomsValueAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\DeclaredCustomsValueAmount")
     * @JMS\Expose
     * @JMS\SerializedName("DeclaredCustomsValueAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDeclaredCustomsValueAmount", setter="setDeclaredCustomsValueAmount")
     */
    private $declaredCustomsValueAmount;

    /**
     * @var DeclaredForCarriageValueAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\DeclaredForCarriageValueAmount")
     * @JMS\Expose
     * @JMS\SerializedName("DeclaredForCarriageValueAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDeclaredForCarriageValueAmount", setter="setDeclaredForCarriageValueAmount")
     */
    private $declaredForCarriageValueAmount;

    /**
     * @var DeclaredStatisticsValueAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\DeclaredStatisticsValueAmount")
     * @JMS\Expose
     * @JMS\SerializedName("DeclaredStatisticsValueAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDeclaredStatisticsValueAmount", setter="setDeclaredStatisticsValueAmount")
     */
    private $declaredStatisticsValueAmount;

    /**
     * @var FreeOnBoardValueAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\FreeOnBoardValueAmount")
     * @JMS\Expose
     * @JMS\SerializedName("FreeOnBoardValueAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFreeOnBoardValueAmount", setter="setFreeOnBoardValueAmount")
     */
    private $freeOnBoardValueAmount;

    /**
     * @var InsuranceValueAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\InsuranceValueAmount")
     * @JMS\Expose
     * @JMS\SerializedName("InsuranceValueAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getInsuranceValueAmount", setter="setInsuranceValueAmount")
     */
    private $insuranceValueAmount;

    /**
     * @var ValueAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ValueAmount")
     * @JMS\Expose
     * @JMS\SerializedName("ValueAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getValueAmount", setter="setValueAmount")
     */
    private $valueAmount;

    /**
     * @var GrossWeightMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\GrossWeightMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("GrossWeightMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getGrossWeightMeasure", setter="setGrossWeightMeasure")
     */
    private $grossWeightMeasure;

    /**
     * @var NetWeightMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\NetWeightMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("NetWeightMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getNetWeightMeasure", setter="setNetWeightMeasure")
     */
    private $netWeightMeasure;

    /**
     * @var NetNetWeightMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\NetNetWeightMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("NetNetWeightMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getNetNetWeightMeasure", setter="setNetNetWeightMeasure")
     */
    private $netNetWeightMeasure;

    /**
     * @var ChargeableWeightMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ChargeableWeightMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("ChargeableWeightMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getChargeableWeightMeasure", setter="setChargeableWeightMeasure")
     */
    private $chargeableWeightMeasure;

    /**
     * @var GrossVolumeMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\GrossVolumeMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("GrossVolumeMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getGrossVolumeMeasure", setter="setGrossVolumeMeasure")
     */
    private $grossVolumeMeasure;

    /**
     * @var NetVolumeMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\NetVolumeMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("NetVolumeMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getNetVolumeMeasure", setter="setNetVolumeMeasure")
     */
    private $netVolumeMeasure;

    /**
     * @var Quantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Quantity")
     * @JMS\Expose
     * @JMS\SerializedName("Quantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getQuantity", setter="setQuantity")
     */
    private $quantity;

    /**
     * @var PreferenceCriterionCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PreferenceCriterionCode")
     * @JMS\Expose
     * @JMS\SerializedName("PreferenceCriterionCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPreferenceCriterionCode", setter="setPreferenceCriterionCode")
     */
    private $preferenceCriterionCode;

    /**
     * @var RequiredCustomsID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\RequiredCustomsID")
     * @JMS\Expose
     * @JMS\SerializedName("RequiredCustomsID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRequiredCustomsID", setter="setRequiredCustomsID")
     */
    private $requiredCustomsID;

    /**
     * @var CustomsStatusCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CustomsStatusCode")
     * @JMS\Expose
     * @JMS\SerializedName("CustomsStatusCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCustomsStatusCode", setter="setCustomsStatusCode")
     */
    private $customsStatusCode;

    /**
     * @var CustomsTariffQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CustomsTariffQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("CustomsTariffQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCustomsTariffQuantity", setter="setCustomsTariffQuantity")
     */
    private $customsTariffQuantity;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("CustomsImportClassifiedIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCustomsImportClassifiedIndicator", setter="setCustomsImportClassifiedIndicator")
     */
    private $customsImportClassifiedIndicator;

    /**
     * @var ChargeableQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ChargeableQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("ChargeableQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getChargeableQuantity", setter="setChargeableQuantity")
     */
    private $chargeableQuantity;

    /**
     * @var ReturnableQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ReturnableQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("ReturnableQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getReturnableQuantity", setter="setReturnableQuantity")
     */
    private $returnableQuantity;

    /**
     * @var TraceID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TraceID")
     * @JMS\Expose
     * @JMS\SerializedName("TraceID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTraceID", setter="setTraceID")
     */
    private $traceID;

    /**
     * @var array<Item>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\Item>")
     * @JMS\Expose
     * @JMS\SerializedName("Item")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Item", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getItem", setter="setItem")
     */
    private $item;

    /**
     * @var array<GoodsItemContainer>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\GoodsItemContainer>")
     * @JMS\Expose
     * @JMS\SerializedName("GoodsItemContainer")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="GoodsItemContainer", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getGoodsItemContainer", setter="setGoodsItemContainer")
     */
    private $goodsItemContainer;

    /**
     * @var array<FreightAllowanceCharge>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\FreightAllowanceCharge>")
     * @JMS\Expose
     * @JMS\SerializedName("FreightAllowanceCharge")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="FreightAllowanceCharge", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getFreightAllowanceCharge", setter="setFreightAllowanceCharge")
     */
    private $freightAllowanceCharge;

    /**
     * @var array<InvoiceLine>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\InvoiceLine>")
     * @JMS\Expose
     * @JMS\SerializedName("InvoiceLine")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="InvoiceLine", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getInvoiceLine", setter="setInvoiceLine")
     */
    private $invoiceLine;

    /**
     * @var array<Temperature>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\Temperature>")
     * @JMS\Expose
     * @JMS\SerializedName("Temperature")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Temperature", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getTemperature", setter="setTemperature")
     */
    private $temperature;

    /**
     * @var array<ContainedGoodsItem>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ContainedGoodsItem>")
     * @JMS\Expose
     * @JMS\SerializedName("ContainedGoodsItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ContainedGoodsItem", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getContainedGoodsItem", setter="setContainedGoodsItem")
     */
    private $containedGoodsItem;

    /**
     * @var OriginAddress|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\OriginAddress")
     * @JMS\Expose
     * @JMS\SerializedName("OriginAddress")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOriginAddress", setter="setOriginAddress")
     */
    private $originAddress;

    /**
     * @var Delivery|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Delivery")
     * @JMS\Expose
     * @JMS\SerializedName("Delivery")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDelivery", setter="setDelivery")
     */
    private $delivery;

    /**
     * @var Pickup|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Pickup")
     * @JMS\Expose
     * @JMS\SerializedName("Pickup")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPickup", setter="setPickup")
     */
    private $pickup;

    /**
     * @var Despatch|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Despatch")
     * @JMS\Expose
     * @JMS\SerializedName("Despatch")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDespatch", setter="setDespatch")
     */
    private $despatch;

    /**
     * @var array<MeasurementDimension>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\MeasurementDimension>")
     * @JMS\Expose
     * @JMS\SerializedName("MeasurementDimension")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="MeasurementDimension", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getMeasurementDimension", setter="setMeasurementDimension")
     */
    private $measurementDimension;

    /**
     * @var array<ContainingPackage>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ContainingPackage>")
     * @JMS\Expose
     * @JMS\SerializedName("ContainingPackage")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ContainingPackage", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getContainingPackage", setter="setContainingPackage")
     */
    private $containingPackage;

    /**
     * @var ShipmentDocumentReference|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ShipmentDocumentReference")
     * @JMS\Expose
     * @JMS\SerializedName("ShipmentDocumentReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getShipmentDocumentReference", setter="setShipmentDocumentReference")
     */
    private $shipmentDocumentReference;

    /**
     * @var MinimumTemperature|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\MinimumTemperature")
     * @JMS\Expose
     * @JMS\SerializedName("MinimumTemperature")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMinimumTemperature", setter="setMinimumTemperature")
     */
    private $minimumTemperature;

    /**
     * @var MaximumTemperature|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\MaximumTemperature")
     * @JMS\Expose
     * @JMS\SerializedName("MaximumTemperature")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMaximumTemperature", setter="setMaximumTemperature")
     */
    private $maximumTemperature;

    /**
     * @return ID|null
     */
    public function getID(): ?ID
    {
        return $this->iD;
    }

    /**
     * @return ID
     */
    public function getIDWithCreate(): ID
    {
        $this->iD = is_null($this->iD) ? new ID() : $this->iD;

        return $this->iD;
    }

    /**
     * @param ID|null $iD
     * @return self
     */
    public function setID(?ID $iD = null): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetID(): self
    {
        $this->iD = null;

        return $this;
    }

    /**
     * @return SequenceNumberID|null
     */
    public function getSequenceNumberID(): ?SequenceNumberID
    {
        return $this->sequenceNumberID;
    }

    /**
     * @return SequenceNumberID
     */
    public function getSequenceNumberIDWithCreate(): SequenceNumberID
    {
        $this->sequenceNumberID = is_null($this->sequenceNumberID) ? new SequenceNumberID() : $this->sequenceNumberID;

        return $this->sequenceNumberID;
    }

    /**
     * @param SequenceNumberID|null $sequenceNumberID
     * @return self
     */
    public function setSequenceNumberID(?SequenceNumberID $sequenceNumberID = null): self
    {
        $this->sequenceNumberID = $sequenceNumberID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSequenceNumberID(): self
    {
        $this->sequenceNumberID = null;

        return $this;
    }

    /**
     * @return array<Description>|null
     */
    public function getDescription(): ?array
    {
        return $this->description;
    }

    /**
     * @param array<Description>|null $description
     * @return self
     */
    public function setDescription(?array $description = null): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDescription(): self
    {
        $this->description = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearDescription(): self
    {
        $this->description = [];

        return $this;
    }

    /**
     * @return Description|null
     */
    public function firstDescription(): ?Description
    {
        $description = $this->description ?? [];
        $description = reset($description);

        if ($description === false) {
            return null;
        }

        return $description;
    }

    /**
     * @return Description|null
     */
    public function lastDescription(): ?Description
    {
        $description = $this->description ?? [];
        $description = end($description);

        if ($description === false) {
            return null;
        }

        return $description;
    }

    /**
     * @param Description $description
     * @return self
     */
    public function addToDescription(Description $description): self
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * @return Description
     */
    public function addToDescriptionWithCreate(): Description
    {
        $this->addTodescription($description = new Description());

        return $description;
    }

    /**
     * @param Description $description
     * @return self
     */
    public function addOnceToDescription(Description $description): self
    {
        if (!is_array($this->description)) {
            $this->description = [];
        }

        $this->description[0] = $description;

        return $this;
    }

    /**
     * @return Description
     */
    public function addOnceToDescriptionWithCreate(): Description
    {
        if (!is_array($this->description)) {
            $this->description = [];
        }

        if ($this->description === []) {
            $this->addOnceTodescription(new Description());
        }

        return $this->description[0];
    }

    /**
     * @return bool|null
     */
    public function getHazardousRiskIndicator(): ?bool
    {
        return $this->hazardousRiskIndicator;
    }

    /**
     * @param bool|null $hazardousRiskIndicator
     * @return self
     */
    public function setHazardousRiskIndicator(?bool $hazardousRiskIndicator = null): self
    {
        $this->hazardousRiskIndicator = $hazardousRiskIndicator;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetHazardousRiskIndicator(): self
    {
        $this->hazardousRiskIndicator = null;

        return $this;
    }

    /**
     * @return DeclaredCustomsValueAmount|null
     */
    public function getDeclaredCustomsValueAmount(): ?DeclaredCustomsValueAmount
    {
        return $this->declaredCustomsValueAmount;
    }

    /**
     * @return DeclaredCustomsValueAmount
     */
    public function getDeclaredCustomsValueAmountWithCreate(): DeclaredCustomsValueAmount
    {
        $this->declaredCustomsValueAmount = is_null($this->declaredCustomsValueAmount) ? new DeclaredCustomsValueAmount() : $this->declaredCustomsValueAmount;

        return $this->declaredCustomsValueAmount;
    }

    /**
     * @param DeclaredCustomsValueAmount|null $declaredCustomsValueAmount
     * @return self
     */
    public function setDeclaredCustomsValueAmount(
        ?DeclaredCustomsValueAmount $declaredCustomsValueAmount = null,
    ): self {
        $this->declaredCustomsValueAmount = $declaredCustomsValueAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDeclaredCustomsValueAmount(): self
    {
        $this->declaredCustomsValueAmount = null;

        return $this;
    }

    /**
     * @return DeclaredForCarriageValueAmount|null
     */
    public function getDeclaredForCarriageValueAmount(): ?DeclaredForCarriageValueAmount
    {
        return $this->declaredForCarriageValueAmount;
    }

    /**
     * @return DeclaredForCarriageValueAmount
     */
    public function getDeclaredForCarriageValueAmountWithCreate(): DeclaredForCarriageValueAmount
    {
        $this->declaredForCarriageValueAmount = is_null($this->declaredForCarriageValueAmount) ? new DeclaredForCarriageValueAmount() : $this->declaredForCarriageValueAmount;

        return $this->declaredForCarriageValueAmount;
    }

    /**
     * @param DeclaredForCarriageValueAmount|null $declaredForCarriageValueAmount
     * @return self
     */
    public function setDeclaredForCarriageValueAmount(
        ?DeclaredForCarriageValueAmount $declaredForCarriageValueAmount = null,
    ): self {
        $this->declaredForCarriageValueAmount = $declaredForCarriageValueAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDeclaredForCarriageValueAmount(): self
    {
        $this->declaredForCarriageValueAmount = null;

        return $this;
    }

    /**
     * @return DeclaredStatisticsValueAmount|null
     */
    public function getDeclaredStatisticsValueAmount(): ?DeclaredStatisticsValueAmount
    {
        return $this->declaredStatisticsValueAmount;
    }

    /**
     * @return DeclaredStatisticsValueAmount
     */
    public function getDeclaredStatisticsValueAmountWithCreate(): DeclaredStatisticsValueAmount
    {
        $this->declaredStatisticsValueAmount = is_null($this->declaredStatisticsValueAmount) ? new DeclaredStatisticsValueAmount() : $this->declaredStatisticsValueAmount;

        return $this->declaredStatisticsValueAmount;
    }

    /**
     * @param DeclaredStatisticsValueAmount|null $declaredStatisticsValueAmount
     * @return self
     */
    public function setDeclaredStatisticsValueAmount(
        ?DeclaredStatisticsValueAmount $declaredStatisticsValueAmount = null,
    ): self {
        $this->declaredStatisticsValueAmount = $declaredStatisticsValueAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDeclaredStatisticsValueAmount(): self
    {
        $this->declaredStatisticsValueAmount = null;

        return $this;
    }

    /**
     * @return FreeOnBoardValueAmount|null
     */
    public function getFreeOnBoardValueAmount(): ?FreeOnBoardValueAmount
    {
        return $this->freeOnBoardValueAmount;
    }

    /**
     * @return FreeOnBoardValueAmount
     */
    public function getFreeOnBoardValueAmountWithCreate(): FreeOnBoardValueAmount
    {
        $this->freeOnBoardValueAmount = is_null($this->freeOnBoardValueAmount) ? new FreeOnBoardValueAmount() : $this->freeOnBoardValueAmount;

        return $this->freeOnBoardValueAmount;
    }

    /**
     * @param FreeOnBoardValueAmount|null $freeOnBoardValueAmount
     * @return self
     */
    public function setFreeOnBoardValueAmount(?FreeOnBoardValueAmount $freeOnBoardValueAmount = null): self
    {
        $this->freeOnBoardValueAmount = $freeOnBoardValueAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetFreeOnBoardValueAmount(): self
    {
        $this->freeOnBoardValueAmount = null;

        return $this;
    }

    /**
     * @return InsuranceValueAmount|null
     */
    public function getInsuranceValueAmount(): ?InsuranceValueAmount
    {
        return $this->insuranceValueAmount;
    }

    /**
     * @return InsuranceValueAmount
     */
    public function getInsuranceValueAmountWithCreate(): InsuranceValueAmount
    {
        $this->insuranceValueAmount = is_null($this->insuranceValueAmount) ? new InsuranceValueAmount() : $this->insuranceValueAmount;

        return $this->insuranceValueAmount;
    }

    /**
     * @param InsuranceValueAmount|null $insuranceValueAmount
     * @return self
     */
    public function setInsuranceValueAmount(?InsuranceValueAmount $insuranceValueAmount = null): self
    {
        $this->insuranceValueAmount = $insuranceValueAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetInsuranceValueAmount(): self
    {
        $this->insuranceValueAmount = null;

        return $this;
    }

    /**
     * @return ValueAmount|null
     */
    public function getValueAmount(): ?ValueAmount
    {
        return $this->valueAmount;
    }

    /**
     * @return ValueAmount
     */
    public function getValueAmountWithCreate(): ValueAmount
    {
        $this->valueAmount = is_null($this->valueAmount) ? new ValueAmount() : $this->valueAmount;

        return $this->valueAmount;
    }

    /**
     * @param ValueAmount|null $valueAmount
     * @return self
     */
    public function setValueAmount(?ValueAmount $valueAmount = null): self
    {
        $this->valueAmount = $valueAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetValueAmount(): self
    {
        $this->valueAmount = null;

        return $this;
    }

    /**
     * @return GrossWeightMeasure|null
     */
    public function getGrossWeightMeasure(): ?GrossWeightMeasure
    {
        return $this->grossWeightMeasure;
    }

    /**
     * @return GrossWeightMeasure
     */
    public function getGrossWeightMeasureWithCreate(): GrossWeightMeasure
    {
        $this->grossWeightMeasure = is_null($this->grossWeightMeasure) ? new GrossWeightMeasure() : $this->grossWeightMeasure;

        return $this->grossWeightMeasure;
    }

    /**
     * @param GrossWeightMeasure|null $grossWeightMeasure
     * @return self
     */
    public function setGrossWeightMeasure(?GrossWeightMeasure $grossWeightMeasure = null): self
    {
        $this->grossWeightMeasure = $grossWeightMeasure;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetGrossWeightMeasure(): self
    {
        $this->grossWeightMeasure = null;

        return $this;
    }

    /**
     * @return NetWeightMeasure|null
     */
    public function getNetWeightMeasure(): ?NetWeightMeasure
    {
        return $this->netWeightMeasure;
    }

    /**
     * @return NetWeightMeasure
     */
    public function getNetWeightMeasureWithCreate(): NetWeightMeasure
    {
        $this->netWeightMeasure = is_null($this->netWeightMeasure) ? new NetWeightMeasure() : $this->netWeightMeasure;

        return $this->netWeightMeasure;
    }

    /**
     * @param NetWeightMeasure|null $netWeightMeasure
     * @return self
     */
    public function setNetWeightMeasure(?NetWeightMeasure $netWeightMeasure = null): self
    {
        $this->netWeightMeasure = $netWeightMeasure;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetNetWeightMeasure(): self
    {
        $this->netWeightMeasure = null;

        return $this;
    }

    /**
     * @return NetNetWeightMeasure|null
     */
    public function getNetNetWeightMeasure(): ?NetNetWeightMeasure
    {
        return $this->netNetWeightMeasure;
    }

    /**
     * @return NetNetWeightMeasure
     */
    public function getNetNetWeightMeasureWithCreate(): NetNetWeightMeasure
    {
        $this->netNetWeightMeasure = is_null($this->netNetWeightMeasure) ? new NetNetWeightMeasure() : $this->netNetWeightMeasure;

        return $this->netNetWeightMeasure;
    }

    /**
     * @param NetNetWeightMeasure|null $netNetWeightMeasure
     * @return self
     */
    public function setNetNetWeightMeasure(?NetNetWeightMeasure $netNetWeightMeasure = null): self
    {
        $this->netNetWeightMeasure = $netNetWeightMeasure;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetNetNetWeightMeasure(): self
    {
        $this->netNetWeightMeasure = null;

        return $this;
    }

    /**
     * @return ChargeableWeightMeasure|null
     */
    public function getChargeableWeightMeasure(): ?ChargeableWeightMeasure
    {
        return $this->chargeableWeightMeasure;
    }

    /**
     * @return ChargeableWeightMeasure
     */
    public function getChargeableWeightMeasureWithCreate(): ChargeableWeightMeasure
    {
        $this->chargeableWeightMeasure = is_null($this->chargeableWeightMeasure) ? new ChargeableWeightMeasure() : $this->chargeableWeightMeasure;

        return $this->chargeableWeightMeasure;
    }

    /**
     * @param ChargeableWeightMeasure|null $chargeableWeightMeasure
     * @return self
     */
    public function setChargeableWeightMeasure(?ChargeableWeightMeasure $chargeableWeightMeasure = null): self
    {
        $this->chargeableWeightMeasure = $chargeableWeightMeasure;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetChargeableWeightMeasure(): self
    {
        $this->chargeableWeightMeasure = null;

        return $this;
    }

    /**
     * @return GrossVolumeMeasure|null
     */
    public function getGrossVolumeMeasure(): ?GrossVolumeMeasure
    {
        return $this->grossVolumeMeasure;
    }

    /**
     * @return GrossVolumeMeasure
     */
    public function getGrossVolumeMeasureWithCreate(): GrossVolumeMeasure
    {
        $this->grossVolumeMeasure = is_null($this->grossVolumeMeasure) ? new GrossVolumeMeasure() : $this->grossVolumeMeasure;

        return $this->grossVolumeMeasure;
    }

    /**
     * @param GrossVolumeMeasure|null $grossVolumeMeasure
     * @return self
     */
    public function setGrossVolumeMeasure(?GrossVolumeMeasure $grossVolumeMeasure = null): self
    {
        $this->grossVolumeMeasure = $grossVolumeMeasure;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetGrossVolumeMeasure(): self
    {
        $this->grossVolumeMeasure = null;

        return $this;
    }

    /**
     * @return NetVolumeMeasure|null
     */
    public function getNetVolumeMeasure(): ?NetVolumeMeasure
    {
        return $this->netVolumeMeasure;
    }

    /**
     * @return NetVolumeMeasure
     */
    public function getNetVolumeMeasureWithCreate(): NetVolumeMeasure
    {
        $this->netVolumeMeasure = is_null($this->netVolumeMeasure) ? new NetVolumeMeasure() : $this->netVolumeMeasure;

        return $this->netVolumeMeasure;
    }

    /**
     * @param NetVolumeMeasure|null $netVolumeMeasure
     * @return self
     */
    public function setNetVolumeMeasure(?NetVolumeMeasure $netVolumeMeasure = null): self
    {
        $this->netVolumeMeasure = $netVolumeMeasure;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetNetVolumeMeasure(): self
    {
        $this->netVolumeMeasure = null;

        return $this;
    }

    /**
     * @return Quantity|null
     */
    public function getQuantity(): ?Quantity
    {
        return $this->quantity;
    }

    /**
     * @return Quantity
     */
    public function getQuantityWithCreate(): Quantity
    {
        $this->quantity = is_null($this->quantity) ? new Quantity() : $this->quantity;

        return $this->quantity;
    }

    /**
     * @param Quantity|null $quantity
     * @return self
     */
    public function setQuantity(?Quantity $quantity = null): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetQuantity(): self
    {
        $this->quantity = null;

        return $this;
    }

    /**
     * @return PreferenceCriterionCode|null
     */
    public function getPreferenceCriterionCode(): ?PreferenceCriterionCode
    {
        return $this->preferenceCriterionCode;
    }

    /**
     * @return PreferenceCriterionCode
     */
    public function getPreferenceCriterionCodeWithCreate(): PreferenceCriterionCode
    {
        $this->preferenceCriterionCode = is_null($this->preferenceCriterionCode) ? new PreferenceCriterionCode() : $this->preferenceCriterionCode;

        return $this->preferenceCriterionCode;
    }

    /**
     * @param PreferenceCriterionCode|null $preferenceCriterionCode
     * @return self
     */
    public function setPreferenceCriterionCode(?PreferenceCriterionCode $preferenceCriterionCode = null): self
    {
        $this->preferenceCriterionCode = $preferenceCriterionCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPreferenceCriterionCode(): self
    {
        $this->preferenceCriterionCode = null;

        return $this;
    }

    /**
     * @return RequiredCustomsID|null
     */
    public function getRequiredCustomsID(): ?RequiredCustomsID
    {
        return $this->requiredCustomsID;
    }

    /**
     * @return RequiredCustomsID
     */
    public function getRequiredCustomsIDWithCreate(): RequiredCustomsID
    {
        $this->requiredCustomsID = is_null($this->requiredCustomsID) ? new RequiredCustomsID() : $this->requiredCustomsID;

        return $this->requiredCustomsID;
    }

    /**
     * @param RequiredCustomsID|null $requiredCustomsID
     * @return self
     */
    public function setRequiredCustomsID(?RequiredCustomsID $requiredCustomsID = null): self
    {
        $this->requiredCustomsID = $requiredCustomsID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetRequiredCustomsID(): self
    {
        $this->requiredCustomsID = null;

        return $this;
    }

    /**
     * @return CustomsStatusCode|null
     */
    public function getCustomsStatusCode(): ?CustomsStatusCode
    {
        return $this->customsStatusCode;
    }

    /**
     * @return CustomsStatusCode
     */
    public function getCustomsStatusCodeWithCreate(): CustomsStatusCode
    {
        $this->customsStatusCode = is_null($this->customsStatusCode) ? new CustomsStatusCode() : $this->customsStatusCode;

        return $this->customsStatusCode;
    }

    /**
     * @param CustomsStatusCode|null $customsStatusCode
     * @return self
     */
    public function setCustomsStatusCode(?CustomsStatusCode $customsStatusCode = null): self
    {
        $this->customsStatusCode = $customsStatusCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCustomsStatusCode(): self
    {
        $this->customsStatusCode = null;

        return $this;
    }

    /**
     * @return CustomsTariffQuantity|null
     */
    public function getCustomsTariffQuantity(): ?CustomsTariffQuantity
    {
        return $this->customsTariffQuantity;
    }

    /**
     * @return CustomsTariffQuantity
     */
    public function getCustomsTariffQuantityWithCreate(): CustomsTariffQuantity
    {
        $this->customsTariffQuantity = is_null($this->customsTariffQuantity) ? new CustomsTariffQuantity() : $this->customsTariffQuantity;

        return $this->customsTariffQuantity;
    }

    /**
     * @param CustomsTariffQuantity|null $customsTariffQuantity
     * @return self
     */
    public function setCustomsTariffQuantity(?CustomsTariffQuantity $customsTariffQuantity = null): self
    {
        $this->customsTariffQuantity = $customsTariffQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCustomsTariffQuantity(): self
    {
        $this->customsTariffQuantity = null;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCustomsImportClassifiedIndicator(): ?bool
    {
        return $this->customsImportClassifiedIndicator;
    }

    /**
     * @param bool|null $customsImportClassifiedIndicator
     * @return self
     */
    public function setCustomsImportClassifiedIndicator(?bool $customsImportClassifiedIndicator = null): self
    {
        $this->customsImportClassifiedIndicator = $customsImportClassifiedIndicator;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCustomsImportClassifiedIndicator(): self
    {
        $this->customsImportClassifiedIndicator = null;

        return $this;
    }

    /**
     * @return ChargeableQuantity|null
     */
    public function getChargeableQuantity(): ?ChargeableQuantity
    {
        return $this->chargeableQuantity;
    }

    /**
     * @return ChargeableQuantity
     */
    public function getChargeableQuantityWithCreate(): ChargeableQuantity
    {
        $this->chargeableQuantity = is_null($this->chargeableQuantity) ? new ChargeableQuantity() : $this->chargeableQuantity;

        return $this->chargeableQuantity;
    }

    /**
     * @param ChargeableQuantity|null $chargeableQuantity
     * @return self
     */
    public function setChargeableQuantity(?ChargeableQuantity $chargeableQuantity = null): self
    {
        $this->chargeableQuantity = $chargeableQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetChargeableQuantity(): self
    {
        $this->chargeableQuantity = null;

        return $this;
    }

    /**
     * @return ReturnableQuantity|null
     */
    public function getReturnableQuantity(): ?ReturnableQuantity
    {
        return $this->returnableQuantity;
    }

    /**
     * @return ReturnableQuantity
     */
    public function getReturnableQuantityWithCreate(): ReturnableQuantity
    {
        $this->returnableQuantity = is_null($this->returnableQuantity) ? new ReturnableQuantity() : $this->returnableQuantity;

        return $this->returnableQuantity;
    }

    /**
     * @param ReturnableQuantity|null $returnableQuantity
     * @return self
     */
    public function setReturnableQuantity(?ReturnableQuantity $returnableQuantity = null): self
    {
        $this->returnableQuantity = $returnableQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetReturnableQuantity(): self
    {
        $this->returnableQuantity = null;

        return $this;
    }

    /**
     * @return TraceID|null
     */
    public function getTraceID(): ?TraceID
    {
        return $this->traceID;
    }

    /**
     * @return TraceID
     */
    public function getTraceIDWithCreate(): TraceID
    {
        $this->traceID = is_null($this->traceID) ? new TraceID() : $this->traceID;

        return $this->traceID;
    }

    /**
     * @param TraceID|null $traceID
     * @return self
     */
    public function setTraceID(?TraceID $traceID = null): self
    {
        $this->traceID = $traceID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTraceID(): self
    {
        $this->traceID = null;

        return $this;
    }

    /**
     * @return array<Item>|null
     */
    public function getItem(): ?array
    {
        return $this->item;
    }

    /**
     * @param array<Item>|null $item
     * @return self
     */
    public function setItem(?array $item = null): self
    {
        $this->item = $item;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetItem(): self
    {
        $this->item = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearItem(): self
    {
        $this->item = [];

        return $this;
    }

    /**
     * @return Item|null
     */
    public function firstItem(): ?Item
    {
        $item = $this->item ?? [];
        $item = reset($item);

        if ($item === false) {
            return null;
        }

        return $item;
    }

    /**
     * @return Item|null
     */
    public function lastItem(): ?Item
    {
        $item = $this->item ?? [];
        $item = end($item);

        if ($item === false) {
            return null;
        }

        return $item;
    }

    /**
     * @param Item $item
     * @return self
     */
    public function addToItem(Item $item): self
    {
        $this->item[] = $item;

        return $this;
    }

    /**
     * @return Item
     */
    public function addToItemWithCreate(): Item
    {
        $this->addToitem($item = new Item());

        return $item;
    }

    /**
     * @param Item $item
     * @return self
     */
    public function addOnceToItem(Item $item): self
    {
        if (!is_array($this->item)) {
            $this->item = [];
        }

        $this->item[0] = $item;

        return $this;
    }

    /**
     * @return Item
     */
    public function addOnceToItemWithCreate(): Item
    {
        if (!is_array($this->item)) {
            $this->item = [];
        }

        if ($this->item === []) {
            $this->addOnceToitem(new Item());
        }

        return $this->item[0];
    }

    /**
     * @return array<GoodsItemContainer>|null
     */
    public function getGoodsItemContainer(): ?array
    {
        return $this->goodsItemContainer;
    }

    /**
     * @param array<GoodsItemContainer>|null $goodsItemContainer
     * @return self
     */
    public function setGoodsItemContainer(?array $goodsItemContainer = null): self
    {
        $this->goodsItemContainer = $goodsItemContainer;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetGoodsItemContainer(): self
    {
        $this->goodsItemContainer = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearGoodsItemContainer(): self
    {
        $this->goodsItemContainer = [];

        return $this;
    }

    /**
     * @return GoodsItemContainer|null
     */
    public function firstGoodsItemContainer(): ?GoodsItemContainer
    {
        $goodsItemContainer = $this->goodsItemContainer ?? [];
        $goodsItemContainer = reset($goodsItemContainer);

        if ($goodsItemContainer === false) {
            return null;
        }

        return $goodsItemContainer;
    }

    /**
     * @return GoodsItemContainer|null
     */
    public function lastGoodsItemContainer(): ?GoodsItemContainer
    {
        $goodsItemContainer = $this->goodsItemContainer ?? [];
        $goodsItemContainer = end($goodsItemContainer);

        if ($goodsItemContainer === false) {
            return null;
        }

        return $goodsItemContainer;
    }

    /**
     * @param GoodsItemContainer $goodsItemContainer
     * @return self
     */
    public function addToGoodsItemContainer(GoodsItemContainer $goodsItemContainer): self
    {
        $this->goodsItemContainer[] = $goodsItemContainer;

        return $this;
    }

    /**
     * @return GoodsItemContainer
     */
    public function addToGoodsItemContainerWithCreate(): GoodsItemContainer
    {
        $this->addTogoodsItemContainer($goodsItemContainer = new GoodsItemContainer());

        return $goodsItemContainer;
    }

    /**
     * @param GoodsItemContainer $goodsItemContainer
     * @return self
     */
    public function addOnceToGoodsItemContainer(GoodsItemContainer $goodsItemContainer): self
    {
        if (!is_array($this->goodsItemContainer)) {
            $this->goodsItemContainer = [];
        }

        $this->goodsItemContainer[0] = $goodsItemContainer;

        return $this;
    }

    /**
     * @return GoodsItemContainer
     */
    public function addOnceToGoodsItemContainerWithCreate(): GoodsItemContainer
    {
        if (!is_array($this->goodsItemContainer)) {
            $this->goodsItemContainer = [];
        }

        if ($this->goodsItemContainer === []) {
            $this->addOnceTogoodsItemContainer(new GoodsItemContainer());
        }

        return $this->goodsItemContainer[0];
    }

    /**
     * @return array<FreightAllowanceCharge>|null
     */
    public function getFreightAllowanceCharge(): ?array
    {
        return $this->freightAllowanceCharge;
    }

    /**
     * @param array<FreightAllowanceCharge>|null $freightAllowanceCharge
     * @return self
     */
    public function setFreightAllowanceCharge(?array $freightAllowanceCharge = null): self
    {
        $this->freightAllowanceCharge = $freightAllowanceCharge;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetFreightAllowanceCharge(): self
    {
        $this->freightAllowanceCharge = null;

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
     * @return FreightAllowanceCharge|null
     */
    public function firstFreightAllowanceCharge(): ?FreightAllowanceCharge
    {
        $freightAllowanceCharge = $this->freightAllowanceCharge ?? [];
        $freightAllowanceCharge = reset($freightAllowanceCharge);

        if ($freightAllowanceCharge === false) {
            return null;
        }

        return $freightAllowanceCharge;
    }

    /**
     * @return FreightAllowanceCharge|null
     */
    public function lastFreightAllowanceCharge(): ?FreightAllowanceCharge
    {
        $freightAllowanceCharge = $this->freightAllowanceCharge ?? [];
        $freightAllowanceCharge = end($freightAllowanceCharge);

        if ($freightAllowanceCharge === false) {
            return null;
        }

        return $freightAllowanceCharge;
    }

    /**
     * @param FreightAllowanceCharge $freightAllowanceCharge
     * @return self
     */
    public function addToFreightAllowanceCharge(FreightAllowanceCharge $freightAllowanceCharge): self
    {
        $this->freightAllowanceCharge[] = $freightAllowanceCharge;

        return $this;
    }

    /**
     * @return FreightAllowanceCharge
     */
    public function addToFreightAllowanceChargeWithCreate(): FreightAllowanceCharge
    {
        $this->addTofreightAllowanceCharge($freightAllowanceCharge = new FreightAllowanceCharge());

        return $freightAllowanceCharge;
    }

    /**
     * @param FreightAllowanceCharge $freightAllowanceCharge
     * @return self
     */
    public function addOnceToFreightAllowanceCharge(FreightAllowanceCharge $freightAllowanceCharge): self
    {
        if (!is_array($this->freightAllowanceCharge)) {
            $this->freightAllowanceCharge = [];
        }

        $this->freightAllowanceCharge[0] = $freightAllowanceCharge;

        return $this;
    }

    /**
     * @return FreightAllowanceCharge
     */
    public function addOnceToFreightAllowanceChargeWithCreate(): FreightAllowanceCharge
    {
        if (!is_array($this->freightAllowanceCharge)) {
            $this->freightAllowanceCharge = [];
        }

        if ($this->freightAllowanceCharge === []) {
            $this->addOnceTofreightAllowanceCharge(new FreightAllowanceCharge());
        }

        return $this->freightAllowanceCharge[0];
    }

    /**
     * @return array<InvoiceLine>|null
     */
    public function getInvoiceLine(): ?array
    {
        return $this->invoiceLine;
    }

    /**
     * @param array<InvoiceLine>|null $invoiceLine
     * @return self
     */
    public function setInvoiceLine(?array $invoiceLine = null): self
    {
        $this->invoiceLine = $invoiceLine;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetInvoiceLine(): self
    {
        $this->invoiceLine = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearInvoiceLine(): self
    {
        $this->invoiceLine = [];

        return $this;
    }

    /**
     * @return InvoiceLine|null
     */
    public function firstInvoiceLine(): ?InvoiceLine
    {
        $invoiceLine = $this->invoiceLine ?? [];
        $invoiceLine = reset($invoiceLine);

        if ($invoiceLine === false) {
            return null;
        }

        return $invoiceLine;
    }

    /**
     * @return InvoiceLine|null
     */
    public function lastInvoiceLine(): ?InvoiceLine
    {
        $invoiceLine = $this->invoiceLine ?? [];
        $invoiceLine = end($invoiceLine);

        if ($invoiceLine === false) {
            return null;
        }

        return $invoiceLine;
    }

    /**
     * @param InvoiceLine $invoiceLine
     * @return self
     */
    public function addToInvoiceLine(InvoiceLine $invoiceLine): self
    {
        $this->invoiceLine[] = $invoiceLine;

        return $this;
    }

    /**
     * @return InvoiceLine
     */
    public function addToInvoiceLineWithCreate(): InvoiceLine
    {
        $this->addToinvoiceLine($invoiceLine = new InvoiceLine());

        return $invoiceLine;
    }

    /**
     * @param InvoiceLine $invoiceLine
     * @return self
     */
    public function addOnceToInvoiceLine(InvoiceLine $invoiceLine): self
    {
        if (!is_array($this->invoiceLine)) {
            $this->invoiceLine = [];
        }

        $this->invoiceLine[0] = $invoiceLine;

        return $this;
    }

    /**
     * @return InvoiceLine
     */
    public function addOnceToInvoiceLineWithCreate(): InvoiceLine
    {
        if (!is_array($this->invoiceLine)) {
            $this->invoiceLine = [];
        }

        if ($this->invoiceLine === []) {
            $this->addOnceToinvoiceLine(new InvoiceLine());
        }

        return $this->invoiceLine[0];
    }

    /**
     * @return array<Temperature>|null
     */
    public function getTemperature(): ?array
    {
        return $this->temperature;
    }

    /**
     * @param array<Temperature>|null $temperature
     * @return self
     */
    public function setTemperature(?array $temperature = null): self
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTemperature(): self
    {
        $this->temperature = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearTemperature(): self
    {
        $this->temperature = [];

        return $this;
    }

    /**
     * @return Temperature|null
     */
    public function firstTemperature(): ?Temperature
    {
        $temperature = $this->temperature ?? [];
        $temperature = reset($temperature);

        if ($temperature === false) {
            return null;
        }

        return $temperature;
    }

    /**
     * @return Temperature|null
     */
    public function lastTemperature(): ?Temperature
    {
        $temperature = $this->temperature ?? [];
        $temperature = end($temperature);

        if ($temperature === false) {
            return null;
        }

        return $temperature;
    }

    /**
     * @param Temperature $temperature
     * @return self
     */
    public function addToTemperature(Temperature $temperature): self
    {
        $this->temperature[] = $temperature;

        return $this;
    }

    /**
     * @return Temperature
     */
    public function addToTemperatureWithCreate(): Temperature
    {
        $this->addTotemperature($temperature = new Temperature());

        return $temperature;
    }

    /**
     * @param Temperature $temperature
     * @return self
     */
    public function addOnceToTemperature(Temperature $temperature): self
    {
        if (!is_array($this->temperature)) {
            $this->temperature = [];
        }

        $this->temperature[0] = $temperature;

        return $this;
    }

    /**
     * @return Temperature
     */
    public function addOnceToTemperatureWithCreate(): Temperature
    {
        if (!is_array($this->temperature)) {
            $this->temperature = [];
        }

        if ($this->temperature === []) {
            $this->addOnceTotemperature(new Temperature());
        }

        return $this->temperature[0];
    }

    /**
     * @return array<ContainedGoodsItem>|null
     */
    public function getContainedGoodsItem(): ?array
    {
        return $this->containedGoodsItem;
    }

    /**
     * @param array<ContainedGoodsItem>|null $containedGoodsItem
     * @return self
     */
    public function setContainedGoodsItem(?array $containedGoodsItem = null): self
    {
        $this->containedGoodsItem = $containedGoodsItem;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetContainedGoodsItem(): self
    {
        $this->containedGoodsItem = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearContainedGoodsItem(): self
    {
        $this->containedGoodsItem = [];

        return $this;
    }

    /**
     * @return ContainedGoodsItem|null
     */
    public function firstContainedGoodsItem(): ?ContainedGoodsItem
    {
        $containedGoodsItem = $this->containedGoodsItem ?? [];
        $containedGoodsItem = reset($containedGoodsItem);

        if ($containedGoodsItem === false) {
            return null;
        }

        return $containedGoodsItem;
    }

    /**
     * @return ContainedGoodsItem|null
     */
    public function lastContainedGoodsItem(): ?ContainedGoodsItem
    {
        $containedGoodsItem = $this->containedGoodsItem ?? [];
        $containedGoodsItem = end($containedGoodsItem);

        if ($containedGoodsItem === false) {
            return null;
        }

        return $containedGoodsItem;
    }

    /**
     * @param ContainedGoodsItem $containedGoodsItem
     * @return self
     */
    public function addToContainedGoodsItem(ContainedGoodsItem $containedGoodsItem): self
    {
        $this->containedGoodsItem[] = $containedGoodsItem;

        return $this;
    }

    /**
     * @return ContainedGoodsItem
     */
    public function addToContainedGoodsItemWithCreate(): ContainedGoodsItem
    {
        $this->addTocontainedGoodsItem($containedGoodsItem = new ContainedGoodsItem());

        return $containedGoodsItem;
    }

    /**
     * @param ContainedGoodsItem $containedGoodsItem
     * @return self
     */
    public function addOnceToContainedGoodsItem(ContainedGoodsItem $containedGoodsItem): self
    {
        if (!is_array($this->containedGoodsItem)) {
            $this->containedGoodsItem = [];
        }

        $this->containedGoodsItem[0] = $containedGoodsItem;

        return $this;
    }

    /**
     * @return ContainedGoodsItem
     */
    public function addOnceToContainedGoodsItemWithCreate(): ContainedGoodsItem
    {
        if (!is_array($this->containedGoodsItem)) {
            $this->containedGoodsItem = [];
        }

        if ($this->containedGoodsItem === []) {
            $this->addOnceTocontainedGoodsItem(new ContainedGoodsItem());
        }

        return $this->containedGoodsItem[0];
    }

    /**
     * @return OriginAddress|null
     */
    public function getOriginAddress(): ?OriginAddress
    {
        return $this->originAddress;
    }

    /**
     * @return OriginAddress
     */
    public function getOriginAddressWithCreate(): OriginAddress
    {
        $this->originAddress = is_null($this->originAddress) ? new OriginAddress() : $this->originAddress;

        return $this->originAddress;
    }

    /**
     * @param OriginAddress|null $originAddress
     * @return self
     */
    public function setOriginAddress(?OriginAddress $originAddress = null): self
    {
        $this->originAddress = $originAddress;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetOriginAddress(): self
    {
        $this->originAddress = null;

        return $this;
    }

    /**
     * @return Delivery|null
     */
    public function getDelivery(): ?Delivery
    {
        return $this->delivery;
    }

    /**
     * @return Delivery
     */
    public function getDeliveryWithCreate(): Delivery
    {
        $this->delivery = is_null($this->delivery) ? new Delivery() : $this->delivery;

        return $this->delivery;
    }

    /**
     * @param Delivery|null $delivery
     * @return self
     */
    public function setDelivery(?Delivery $delivery = null): self
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDelivery(): self
    {
        $this->delivery = null;

        return $this;
    }

    /**
     * @return Pickup|null
     */
    public function getPickup(): ?Pickup
    {
        return $this->pickup;
    }

    /**
     * @return Pickup
     */
    public function getPickupWithCreate(): Pickup
    {
        $this->pickup = is_null($this->pickup) ? new Pickup() : $this->pickup;

        return $this->pickup;
    }

    /**
     * @param Pickup|null $pickup
     * @return self
     */
    public function setPickup(?Pickup $pickup = null): self
    {
        $this->pickup = $pickup;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPickup(): self
    {
        $this->pickup = null;

        return $this;
    }

    /**
     * @return Despatch|null
     */
    public function getDespatch(): ?Despatch
    {
        return $this->despatch;
    }

    /**
     * @return Despatch
     */
    public function getDespatchWithCreate(): Despatch
    {
        $this->despatch = is_null($this->despatch) ? new Despatch() : $this->despatch;

        return $this->despatch;
    }

    /**
     * @param Despatch|null $despatch
     * @return self
     */
    public function setDespatch(?Despatch $despatch = null): self
    {
        $this->despatch = $despatch;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDespatch(): self
    {
        $this->despatch = null;

        return $this;
    }

    /**
     * @return array<MeasurementDimension>|null
     */
    public function getMeasurementDimension(): ?array
    {
        return $this->measurementDimension;
    }

    /**
     * @param array<MeasurementDimension>|null $measurementDimension
     * @return self
     */
    public function setMeasurementDimension(?array $measurementDimension = null): self
    {
        $this->measurementDimension = $measurementDimension;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMeasurementDimension(): self
    {
        $this->measurementDimension = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearMeasurementDimension(): self
    {
        $this->measurementDimension = [];

        return $this;
    }

    /**
     * @return MeasurementDimension|null
     */
    public function firstMeasurementDimension(): ?MeasurementDimension
    {
        $measurementDimension = $this->measurementDimension ?? [];
        $measurementDimension = reset($measurementDimension);

        if ($measurementDimension === false) {
            return null;
        }

        return $measurementDimension;
    }

    /**
     * @return MeasurementDimension|null
     */
    public function lastMeasurementDimension(): ?MeasurementDimension
    {
        $measurementDimension = $this->measurementDimension ?? [];
        $measurementDimension = end($measurementDimension);

        if ($measurementDimension === false) {
            return null;
        }

        return $measurementDimension;
    }

    /**
     * @param MeasurementDimension $measurementDimension
     * @return self
     */
    public function addToMeasurementDimension(MeasurementDimension $measurementDimension): self
    {
        $this->measurementDimension[] = $measurementDimension;

        return $this;
    }

    /**
     * @return MeasurementDimension
     */
    public function addToMeasurementDimensionWithCreate(): MeasurementDimension
    {
        $this->addTomeasurementDimension($measurementDimension = new MeasurementDimension());

        return $measurementDimension;
    }

    /**
     * @param MeasurementDimension $measurementDimension
     * @return self
     */
    public function addOnceToMeasurementDimension(MeasurementDimension $measurementDimension): self
    {
        if (!is_array($this->measurementDimension)) {
            $this->measurementDimension = [];
        }

        $this->measurementDimension[0] = $measurementDimension;

        return $this;
    }

    /**
     * @return MeasurementDimension
     */
    public function addOnceToMeasurementDimensionWithCreate(): MeasurementDimension
    {
        if (!is_array($this->measurementDimension)) {
            $this->measurementDimension = [];
        }

        if ($this->measurementDimension === []) {
            $this->addOnceTomeasurementDimension(new MeasurementDimension());
        }

        return $this->measurementDimension[0];
    }

    /**
     * @return array<ContainingPackage>|null
     */
    public function getContainingPackage(): ?array
    {
        return $this->containingPackage;
    }

    /**
     * @param array<ContainingPackage>|null $containingPackage
     * @return self
     */
    public function setContainingPackage(?array $containingPackage = null): self
    {
        $this->containingPackage = $containingPackage;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetContainingPackage(): self
    {
        $this->containingPackage = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearContainingPackage(): self
    {
        $this->containingPackage = [];

        return $this;
    }

    /**
     * @return ContainingPackage|null
     */
    public function firstContainingPackage(): ?ContainingPackage
    {
        $containingPackage = $this->containingPackage ?? [];
        $containingPackage = reset($containingPackage);

        if ($containingPackage === false) {
            return null;
        }

        return $containingPackage;
    }

    /**
     * @return ContainingPackage|null
     */
    public function lastContainingPackage(): ?ContainingPackage
    {
        $containingPackage = $this->containingPackage ?? [];
        $containingPackage = end($containingPackage);

        if ($containingPackage === false) {
            return null;
        }

        return $containingPackage;
    }

    /**
     * @param ContainingPackage $containingPackage
     * @return self
     */
    public function addToContainingPackage(ContainingPackage $containingPackage): self
    {
        $this->containingPackage[] = $containingPackage;

        return $this;
    }

    /**
     * @return ContainingPackage
     */
    public function addToContainingPackageWithCreate(): ContainingPackage
    {
        $this->addTocontainingPackage($containingPackage = new ContainingPackage());

        return $containingPackage;
    }

    /**
     * @param ContainingPackage $containingPackage
     * @return self
     */
    public function addOnceToContainingPackage(ContainingPackage $containingPackage): self
    {
        if (!is_array($this->containingPackage)) {
            $this->containingPackage = [];
        }

        $this->containingPackage[0] = $containingPackage;

        return $this;
    }

    /**
     * @return ContainingPackage
     */
    public function addOnceToContainingPackageWithCreate(): ContainingPackage
    {
        if (!is_array($this->containingPackage)) {
            $this->containingPackage = [];
        }

        if ($this->containingPackage === []) {
            $this->addOnceTocontainingPackage(new ContainingPackage());
        }

        return $this->containingPackage[0];
    }

    /**
     * @return ShipmentDocumentReference|null
     */
    public function getShipmentDocumentReference(): ?ShipmentDocumentReference
    {
        return $this->shipmentDocumentReference;
    }

    /**
     * @return ShipmentDocumentReference
     */
    public function getShipmentDocumentReferenceWithCreate(): ShipmentDocumentReference
    {
        $this->shipmentDocumentReference = is_null($this->shipmentDocumentReference) ? new ShipmentDocumentReference() : $this->shipmentDocumentReference;

        return $this->shipmentDocumentReference;
    }

    /**
     * @param ShipmentDocumentReference|null $shipmentDocumentReference
     * @return self
     */
    public function setShipmentDocumentReference(?ShipmentDocumentReference $shipmentDocumentReference = null): self
    {
        $this->shipmentDocumentReference = $shipmentDocumentReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetShipmentDocumentReference(): self
    {
        $this->shipmentDocumentReference = null;

        return $this;
    }

    /**
     * @return MinimumTemperature|null
     */
    public function getMinimumTemperature(): ?MinimumTemperature
    {
        return $this->minimumTemperature;
    }

    /**
     * @return MinimumTemperature
     */
    public function getMinimumTemperatureWithCreate(): MinimumTemperature
    {
        $this->minimumTemperature = is_null($this->minimumTemperature) ? new MinimumTemperature() : $this->minimumTemperature;

        return $this->minimumTemperature;
    }

    /**
     * @param MinimumTemperature|null $minimumTemperature
     * @return self
     */
    public function setMinimumTemperature(?MinimumTemperature $minimumTemperature = null): self
    {
        $this->minimumTemperature = $minimumTemperature;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMinimumTemperature(): self
    {
        $this->minimumTemperature = null;

        return $this;
    }

    /**
     * @return MaximumTemperature|null
     */
    public function getMaximumTemperature(): ?MaximumTemperature
    {
        return $this->maximumTemperature;
    }

    /**
     * @return MaximumTemperature
     */
    public function getMaximumTemperatureWithCreate(): MaximumTemperature
    {
        $this->maximumTemperature = is_null($this->maximumTemperature) ? new MaximumTemperature() : $this->maximumTemperature;

        return $this->maximumTemperature;
    }

    /**
     * @param MaximumTemperature|null $maximumTemperature
     * @return self
     */
    public function setMaximumTemperature(?MaximumTemperature $maximumTemperature = null): self
    {
        $this->maximumTemperature = $maximumTemperature;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMaximumTemperature(): self
    {
        $this->maximumTemperature = null;

        return $this;
    }
}
