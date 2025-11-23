<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PackageLevelCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PackagingTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PackingMaterial;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Quantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TraceID;

class PackageType
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
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("ReturnableMaterialIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getReturnableMaterialIndicator", setter="setReturnableMaterialIndicator")
     */
    private $returnableMaterialIndicator;

    /**
     * @var PackageLevelCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PackageLevelCode")
     * @JMS\Expose
     * @JMS\SerializedName("PackageLevelCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPackageLevelCode", setter="setPackageLevelCode")
     */
    private $packageLevelCode;

    /**
     * @var PackagingTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PackagingTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("PackagingTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPackagingTypeCode", setter="setPackagingTypeCode")
     */
    private $packagingTypeCode;

    /**
     * @var array<PackingMaterial>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\PackingMaterial>")
     * @JMS\Expose
     * @JMS\SerializedName("PackingMaterial")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="PackingMaterial", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getPackingMaterial", setter="setPackingMaterial")
     */
    private $packingMaterial;

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
     * @var array<ContainedPackage>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ContainedPackage>")
     * @JMS\Expose
     * @JMS\SerializedName("ContainedPackage")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ContainedPackage", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getContainedPackage", setter="setContainedPackage")
     */
    private $containedPackage;

    /**
     * @var ContainingTransportEquipment|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ContainingTransportEquipment")
     * @JMS\Expose
     * @JMS\SerializedName("ContainingTransportEquipment")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getContainingTransportEquipment", setter="setContainingTransportEquipment")
     */
    private $containingTransportEquipment;

    /**
     * @var array<GoodsItem>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\GoodsItem>")
     * @JMS\Expose
     * @JMS\SerializedName("GoodsItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="GoodsItem", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getGoodsItem", setter="setGoodsItem")
     */
    private $goodsItem;

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
     * @var array<DeliveryUnit>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\DeliveryUnit>")
     * @JMS\Expose
     * @JMS\SerializedName("DeliveryUnit")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="DeliveryUnit", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getDeliveryUnit", setter="setDeliveryUnit")
     */
    private $deliveryUnit;

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
     * @return bool|null
     */
    public function getReturnableMaterialIndicator(): ?bool
    {
        return $this->returnableMaterialIndicator;
    }

    /**
     * @param bool|null $returnableMaterialIndicator
     * @return self
     */
    public function setReturnableMaterialIndicator(?bool $returnableMaterialIndicator = null): self
    {
        $this->returnableMaterialIndicator = $returnableMaterialIndicator;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetReturnableMaterialIndicator(): self
    {
        $this->returnableMaterialIndicator = null;

        return $this;
    }

    /**
     * @return PackageLevelCode|null
     */
    public function getPackageLevelCode(): ?PackageLevelCode
    {
        return $this->packageLevelCode;
    }

    /**
     * @return PackageLevelCode
     */
    public function getPackageLevelCodeWithCreate(): PackageLevelCode
    {
        $this->packageLevelCode = is_null($this->packageLevelCode) ? new PackageLevelCode() : $this->packageLevelCode;

        return $this->packageLevelCode;
    }

    /**
     * @param PackageLevelCode|null $packageLevelCode
     * @return self
     */
    public function setPackageLevelCode(?PackageLevelCode $packageLevelCode = null): self
    {
        $this->packageLevelCode = $packageLevelCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPackageLevelCode(): self
    {
        $this->packageLevelCode = null;

        return $this;
    }

    /**
     * @return PackagingTypeCode|null
     */
    public function getPackagingTypeCode(): ?PackagingTypeCode
    {
        return $this->packagingTypeCode;
    }

    /**
     * @return PackagingTypeCode
     */
    public function getPackagingTypeCodeWithCreate(): PackagingTypeCode
    {
        $this->packagingTypeCode = is_null($this->packagingTypeCode) ? new PackagingTypeCode() : $this->packagingTypeCode;

        return $this->packagingTypeCode;
    }

    /**
     * @param PackagingTypeCode|null $packagingTypeCode
     * @return self
     */
    public function setPackagingTypeCode(?PackagingTypeCode $packagingTypeCode = null): self
    {
        $this->packagingTypeCode = $packagingTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPackagingTypeCode(): self
    {
        $this->packagingTypeCode = null;

        return $this;
    }

    /**
     * @return array<PackingMaterial>|null
     */
    public function getPackingMaterial(): ?array
    {
        return $this->packingMaterial;
    }

    /**
     * @param array<PackingMaterial>|null $packingMaterial
     * @return self
     */
    public function setPackingMaterial(?array $packingMaterial = null): self
    {
        $this->packingMaterial = $packingMaterial;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPackingMaterial(): self
    {
        $this->packingMaterial = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearPackingMaterial(): self
    {
        $this->packingMaterial = [];

        return $this;
    }

    /**
     * @return PackingMaterial|null
     */
    public function firstPackingMaterial(): ?PackingMaterial
    {
        $packingMaterial = $this->packingMaterial ?? [];
        $packingMaterial = reset($packingMaterial);

        if ($packingMaterial === false) {
            return null;
        }

        return $packingMaterial;
    }

    /**
     * @return PackingMaterial|null
     */
    public function lastPackingMaterial(): ?PackingMaterial
    {
        $packingMaterial = $this->packingMaterial ?? [];
        $packingMaterial = end($packingMaterial);

        if ($packingMaterial === false) {
            return null;
        }

        return $packingMaterial;
    }

    /**
     * @param PackingMaterial $packingMaterial
     * @return self
     */
    public function addToPackingMaterial(PackingMaterial $packingMaterial): self
    {
        $this->packingMaterial[] = $packingMaterial;

        return $this;
    }

    /**
     * @return PackingMaterial
     */
    public function addToPackingMaterialWithCreate(): PackingMaterial
    {
        $this->addTopackingMaterial($packingMaterial = new PackingMaterial());

        return $packingMaterial;
    }

    /**
     * @param PackingMaterial $packingMaterial
     * @return self
     */
    public function addOnceToPackingMaterial(PackingMaterial $packingMaterial): self
    {
        if (!is_array($this->packingMaterial)) {
            $this->packingMaterial = [];
        }

        $this->packingMaterial[0] = $packingMaterial;

        return $this;
    }

    /**
     * @return PackingMaterial
     */
    public function addOnceToPackingMaterialWithCreate(): PackingMaterial
    {
        if (!is_array($this->packingMaterial)) {
            $this->packingMaterial = [];
        }

        if ($this->packingMaterial === []) {
            $this->addOnceTopackingMaterial(new PackingMaterial());
        }

        return $this->packingMaterial[0];
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
     * @return array<ContainedPackage>|null
     */
    public function getContainedPackage(): ?array
    {
        return $this->containedPackage;
    }

    /**
     * @param array<ContainedPackage>|null $containedPackage
     * @return self
     */
    public function setContainedPackage(?array $containedPackage = null): self
    {
        $this->containedPackage = $containedPackage;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetContainedPackage(): self
    {
        $this->containedPackage = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearContainedPackage(): self
    {
        $this->containedPackage = [];

        return $this;
    }

    /**
     * @return ContainedPackage|null
     */
    public function firstContainedPackage(): ?ContainedPackage
    {
        $containedPackage = $this->containedPackage ?? [];
        $containedPackage = reset($containedPackage);

        if ($containedPackage === false) {
            return null;
        }

        return $containedPackage;
    }

    /**
     * @return ContainedPackage|null
     */
    public function lastContainedPackage(): ?ContainedPackage
    {
        $containedPackage = $this->containedPackage ?? [];
        $containedPackage = end($containedPackage);

        if ($containedPackage === false) {
            return null;
        }

        return $containedPackage;
    }

    /**
     * @param ContainedPackage $containedPackage
     * @return self
     */
    public function addToContainedPackage(ContainedPackage $containedPackage): self
    {
        $this->containedPackage[] = $containedPackage;

        return $this;
    }

    /**
     * @return ContainedPackage
     */
    public function addToContainedPackageWithCreate(): ContainedPackage
    {
        $this->addTocontainedPackage($containedPackage = new ContainedPackage());

        return $containedPackage;
    }

    /**
     * @param ContainedPackage $containedPackage
     * @return self
     */
    public function addOnceToContainedPackage(ContainedPackage $containedPackage): self
    {
        if (!is_array($this->containedPackage)) {
            $this->containedPackage = [];
        }

        $this->containedPackage[0] = $containedPackage;

        return $this;
    }

    /**
     * @return ContainedPackage
     */
    public function addOnceToContainedPackageWithCreate(): ContainedPackage
    {
        if (!is_array($this->containedPackage)) {
            $this->containedPackage = [];
        }

        if ($this->containedPackage === []) {
            $this->addOnceTocontainedPackage(new ContainedPackage());
        }

        return $this->containedPackage[0];
    }

    /**
     * @return ContainingTransportEquipment|null
     */
    public function getContainingTransportEquipment(): ?ContainingTransportEquipment
    {
        return $this->containingTransportEquipment;
    }

    /**
     * @return ContainingTransportEquipment
     */
    public function getContainingTransportEquipmentWithCreate(): ContainingTransportEquipment
    {
        $this->containingTransportEquipment = is_null($this->containingTransportEquipment) ? new ContainingTransportEquipment() : $this->containingTransportEquipment;

        return $this->containingTransportEquipment;
    }

    /**
     * @param ContainingTransportEquipment|null $containingTransportEquipment
     * @return self
     */
    public function setContainingTransportEquipment(
        ?ContainingTransportEquipment $containingTransportEquipment = null,
    ): self {
        $this->containingTransportEquipment = $containingTransportEquipment;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetContainingTransportEquipment(): self
    {
        $this->containingTransportEquipment = null;

        return $this;
    }

    /**
     * @return array<GoodsItem>|null
     */
    public function getGoodsItem(): ?array
    {
        return $this->goodsItem;
    }

    /**
     * @param array<GoodsItem>|null $goodsItem
     * @return self
     */
    public function setGoodsItem(?array $goodsItem = null): self
    {
        $this->goodsItem = $goodsItem;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetGoodsItem(): self
    {
        $this->goodsItem = null;

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
     * @return GoodsItem|null
     */
    public function firstGoodsItem(): ?GoodsItem
    {
        $goodsItem = $this->goodsItem ?? [];
        $goodsItem = reset($goodsItem);

        if ($goodsItem === false) {
            return null;
        }

        return $goodsItem;
    }

    /**
     * @return GoodsItem|null
     */
    public function lastGoodsItem(): ?GoodsItem
    {
        $goodsItem = $this->goodsItem ?? [];
        $goodsItem = end($goodsItem);

        if ($goodsItem === false) {
            return null;
        }

        return $goodsItem;
    }

    /**
     * @param GoodsItem $goodsItem
     * @return self
     */
    public function addToGoodsItem(GoodsItem $goodsItem): self
    {
        $this->goodsItem[] = $goodsItem;

        return $this;
    }

    /**
     * @return GoodsItem
     */
    public function addToGoodsItemWithCreate(): GoodsItem
    {
        $this->addTogoodsItem($goodsItem = new GoodsItem());

        return $goodsItem;
    }

    /**
     * @param GoodsItem $goodsItem
     * @return self
     */
    public function addOnceToGoodsItem(GoodsItem $goodsItem): self
    {
        if (!is_array($this->goodsItem)) {
            $this->goodsItem = [];
        }

        $this->goodsItem[0] = $goodsItem;

        return $this;
    }

    /**
     * @return GoodsItem
     */
    public function addOnceToGoodsItemWithCreate(): GoodsItem
    {
        if (!is_array($this->goodsItem)) {
            $this->goodsItem = [];
        }

        if ($this->goodsItem === []) {
            $this->addOnceTogoodsItem(new GoodsItem());
        }

        return $this->goodsItem[0];
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
     * @return array<DeliveryUnit>|null
     */
    public function getDeliveryUnit(): ?array
    {
        return $this->deliveryUnit;
    }

    /**
     * @param array<DeliveryUnit>|null $deliveryUnit
     * @return self
     */
    public function setDeliveryUnit(?array $deliveryUnit = null): self
    {
        $this->deliveryUnit = $deliveryUnit;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDeliveryUnit(): self
    {
        $this->deliveryUnit = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearDeliveryUnit(): self
    {
        $this->deliveryUnit = [];

        return $this;
    }

    /**
     * @return DeliveryUnit|null
     */
    public function firstDeliveryUnit(): ?DeliveryUnit
    {
        $deliveryUnit = $this->deliveryUnit ?? [];
        $deliveryUnit = reset($deliveryUnit);

        if ($deliveryUnit === false) {
            return null;
        }

        return $deliveryUnit;
    }

    /**
     * @return DeliveryUnit|null
     */
    public function lastDeliveryUnit(): ?DeliveryUnit
    {
        $deliveryUnit = $this->deliveryUnit ?? [];
        $deliveryUnit = end($deliveryUnit);

        if ($deliveryUnit === false) {
            return null;
        }

        return $deliveryUnit;
    }

    /**
     * @param DeliveryUnit $deliveryUnit
     * @return self
     */
    public function addToDeliveryUnit(DeliveryUnit $deliveryUnit): self
    {
        $this->deliveryUnit[] = $deliveryUnit;

        return $this;
    }

    /**
     * @return DeliveryUnit
     */
    public function addToDeliveryUnitWithCreate(): DeliveryUnit
    {
        $this->addTodeliveryUnit($deliveryUnit = new DeliveryUnit());

        return $deliveryUnit;
    }

    /**
     * @param DeliveryUnit $deliveryUnit
     * @return self
     */
    public function addOnceToDeliveryUnit(DeliveryUnit $deliveryUnit): self
    {
        if (!is_array($this->deliveryUnit)) {
            $this->deliveryUnit = [];
        }

        $this->deliveryUnit[0] = $deliveryUnit;

        return $this;
    }

    /**
     * @return DeliveryUnit
     */
    public function addOnceToDeliveryUnitWithCreate(): DeliveryUnit
    {
        if (!is_array($this->deliveryUnit)) {
            $this->deliveryUnit = [];
        }

        if ($this->deliveryUnit === []) {
            $this->addOnceTodeliveryUnit(new DeliveryUnit());
        }

        return $this->deliveryUnit[0];
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
}
