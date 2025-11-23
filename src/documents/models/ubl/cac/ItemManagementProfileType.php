<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\FrozenPeriodDaysNumeric;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumInventoryQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MultipleOrderQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\OrderIntervalDaysNumeric;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ReplenishmentOwnerDescription;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TargetInventoryQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TargetServicePercent;

class ItemManagementProfileType
{
    use HandlesObjectFlags;

    /**
     * @var FrozenPeriodDaysNumeric|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\FrozenPeriodDaysNumeric")
     * @JMS\Expose
     * @JMS\SerializedName("FrozenPeriodDaysNumeric")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFrozenPeriodDaysNumeric", setter="setFrozenPeriodDaysNumeric")
     */
    private $frozenPeriodDaysNumeric;

    /**
     * @var MinimumInventoryQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumInventoryQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("MinimumInventoryQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMinimumInventoryQuantity", setter="setMinimumInventoryQuantity")
     */
    private $minimumInventoryQuantity;

    /**
     * @var MultipleOrderQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MultipleOrderQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("MultipleOrderQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMultipleOrderQuantity", setter="setMultipleOrderQuantity")
     */
    private $multipleOrderQuantity;

    /**
     * @var OrderIntervalDaysNumeric|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\OrderIntervalDaysNumeric")
     * @JMS\Expose
     * @JMS\SerializedName("OrderIntervalDaysNumeric")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOrderIntervalDaysNumeric", setter="setOrderIntervalDaysNumeric")
     */
    private $orderIntervalDaysNumeric;

    /**
     * @var array<ReplenishmentOwnerDescription>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\ReplenishmentOwnerDescription>")
     * @JMS\Expose
     * @JMS\SerializedName("ReplenishmentOwnerDescription")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ReplenishmentOwnerDescription", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getReplenishmentOwnerDescription", setter="setReplenishmentOwnerDescription")
     */
    private $replenishmentOwnerDescription;

    /**
     * @var TargetServicePercent|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TargetServicePercent")
     * @JMS\Expose
     * @JMS\SerializedName("TargetServicePercent")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTargetServicePercent", setter="setTargetServicePercent")
     */
    private $targetServicePercent;

    /**
     * @var TargetInventoryQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TargetInventoryQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("TargetInventoryQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTargetInventoryQuantity", setter="setTargetInventoryQuantity")
     */
    private $targetInventoryQuantity;

    /**
     * @var EffectivePeriod|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\EffectivePeriod")
     * @JMS\Expose
     * @JMS\SerializedName("EffectivePeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEffectivePeriod", setter="setEffectivePeriod")
     */
    private $effectivePeriod;

    /**
     * @var Item|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Item")
     * @JMS\Expose
     * @JMS\SerializedName("Item")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getItem", setter="setItem")
     */
    private $item;

    /**
     * @var ItemLocationQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ItemLocationQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("ItemLocationQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getItemLocationQuantity", setter="setItemLocationQuantity")
     */
    private $itemLocationQuantity;

    /**
     * @return FrozenPeriodDaysNumeric|null
     */
    public function getFrozenPeriodDaysNumeric(): ?FrozenPeriodDaysNumeric
    {
        return $this->frozenPeriodDaysNumeric;
    }

    /**
     * @return FrozenPeriodDaysNumeric
     */
    public function getFrozenPeriodDaysNumericWithCreate(): FrozenPeriodDaysNumeric
    {
        $this->frozenPeriodDaysNumeric = is_null($this->frozenPeriodDaysNumeric) ? new FrozenPeriodDaysNumeric() : $this->frozenPeriodDaysNumeric;

        return $this->frozenPeriodDaysNumeric;
    }

    /**
     * @param FrozenPeriodDaysNumeric|null $frozenPeriodDaysNumeric
     * @return self
     */
    public function setFrozenPeriodDaysNumeric(?FrozenPeriodDaysNumeric $frozenPeriodDaysNumeric = null): self
    {
        $this->frozenPeriodDaysNumeric = $frozenPeriodDaysNumeric;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetFrozenPeriodDaysNumeric(): self
    {
        $this->frozenPeriodDaysNumeric = null;

        return $this;
    }

    /**
     * @return MinimumInventoryQuantity|null
     */
    public function getMinimumInventoryQuantity(): ?MinimumInventoryQuantity
    {
        return $this->minimumInventoryQuantity;
    }

    /**
     * @return MinimumInventoryQuantity
     */
    public function getMinimumInventoryQuantityWithCreate(): MinimumInventoryQuantity
    {
        $this->minimumInventoryQuantity = is_null($this->minimumInventoryQuantity) ? new MinimumInventoryQuantity() : $this->minimumInventoryQuantity;

        return $this->minimumInventoryQuantity;
    }

    /**
     * @param MinimumInventoryQuantity|null $minimumInventoryQuantity
     * @return self
     */
    public function setMinimumInventoryQuantity(?MinimumInventoryQuantity $minimumInventoryQuantity = null): self
    {
        $this->minimumInventoryQuantity = $minimumInventoryQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMinimumInventoryQuantity(): self
    {
        $this->minimumInventoryQuantity = null;

        return $this;
    }

    /**
     * @return MultipleOrderQuantity|null
     */
    public function getMultipleOrderQuantity(): ?MultipleOrderQuantity
    {
        return $this->multipleOrderQuantity;
    }

    /**
     * @return MultipleOrderQuantity
     */
    public function getMultipleOrderQuantityWithCreate(): MultipleOrderQuantity
    {
        $this->multipleOrderQuantity = is_null($this->multipleOrderQuantity) ? new MultipleOrderQuantity() : $this->multipleOrderQuantity;

        return $this->multipleOrderQuantity;
    }

    /**
     * @param MultipleOrderQuantity|null $multipleOrderQuantity
     * @return self
     */
    public function setMultipleOrderQuantity(?MultipleOrderQuantity $multipleOrderQuantity = null): self
    {
        $this->multipleOrderQuantity = $multipleOrderQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMultipleOrderQuantity(): self
    {
        $this->multipleOrderQuantity = null;

        return $this;
    }

    /**
     * @return OrderIntervalDaysNumeric|null
     */
    public function getOrderIntervalDaysNumeric(): ?OrderIntervalDaysNumeric
    {
        return $this->orderIntervalDaysNumeric;
    }

    /**
     * @return OrderIntervalDaysNumeric
     */
    public function getOrderIntervalDaysNumericWithCreate(): OrderIntervalDaysNumeric
    {
        $this->orderIntervalDaysNumeric = is_null($this->orderIntervalDaysNumeric) ? new OrderIntervalDaysNumeric() : $this->orderIntervalDaysNumeric;

        return $this->orderIntervalDaysNumeric;
    }

    /**
     * @param OrderIntervalDaysNumeric|null $orderIntervalDaysNumeric
     * @return self
     */
    public function setOrderIntervalDaysNumeric(?OrderIntervalDaysNumeric $orderIntervalDaysNumeric = null): self
    {
        $this->orderIntervalDaysNumeric = $orderIntervalDaysNumeric;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetOrderIntervalDaysNumeric(): self
    {
        $this->orderIntervalDaysNumeric = null;

        return $this;
    }

    /**
     * @return array<ReplenishmentOwnerDescription>|null
     */
    public function getReplenishmentOwnerDescription(): ?array
    {
        return $this->replenishmentOwnerDescription;
    }

    /**
     * @param array<ReplenishmentOwnerDescription>|null $replenishmentOwnerDescription
     * @return self
     */
    public function setReplenishmentOwnerDescription(?array $replenishmentOwnerDescription = null): self
    {
        $this->replenishmentOwnerDescription = $replenishmentOwnerDescription;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetReplenishmentOwnerDescription(): self
    {
        $this->replenishmentOwnerDescription = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearReplenishmentOwnerDescription(): self
    {
        $this->replenishmentOwnerDescription = [];

        return $this;
    }

    /**
     * @return ReplenishmentOwnerDescription|null
     */
    public function firstReplenishmentOwnerDescription(): ?ReplenishmentOwnerDescription
    {
        $replenishmentOwnerDescription = $this->replenishmentOwnerDescription ?? [];
        $replenishmentOwnerDescription = reset($replenishmentOwnerDescription);

        if ($replenishmentOwnerDescription === false) {
            return null;
        }

        return $replenishmentOwnerDescription;
    }

    /**
     * @return ReplenishmentOwnerDescription|null
     */
    public function lastReplenishmentOwnerDescription(): ?ReplenishmentOwnerDescription
    {
        $replenishmentOwnerDescription = $this->replenishmentOwnerDescription ?? [];
        $replenishmentOwnerDescription = end($replenishmentOwnerDescription);

        if ($replenishmentOwnerDescription === false) {
            return null;
        }

        return $replenishmentOwnerDescription;
    }

    /**
     * @param ReplenishmentOwnerDescription $replenishmentOwnerDescription
     * @return self
     */
    public function addToReplenishmentOwnerDescription(
        ReplenishmentOwnerDescription $replenishmentOwnerDescription,
    ): self {
        $this->replenishmentOwnerDescription[] = $replenishmentOwnerDescription;

        return $this;
    }

    /**
     * @return ReplenishmentOwnerDescription
     */
    public function addToReplenishmentOwnerDescriptionWithCreate(): ReplenishmentOwnerDescription
    {
        $this->addToreplenishmentOwnerDescription($replenishmentOwnerDescription = new ReplenishmentOwnerDescription());

        return $replenishmentOwnerDescription;
    }

    /**
     * @param ReplenishmentOwnerDescription $replenishmentOwnerDescription
     * @return self
     */
    public function addOnceToReplenishmentOwnerDescription(
        ReplenishmentOwnerDescription $replenishmentOwnerDescription,
    ): self {
        if (!is_array($this->replenishmentOwnerDescription)) {
            $this->replenishmentOwnerDescription = [];
        }

        $this->replenishmentOwnerDescription[0] = $replenishmentOwnerDescription;

        return $this;
    }

    /**
     * @return ReplenishmentOwnerDescription
     */
    public function addOnceToReplenishmentOwnerDescriptionWithCreate(): ReplenishmentOwnerDescription
    {
        if (!is_array($this->replenishmentOwnerDescription)) {
            $this->replenishmentOwnerDescription = [];
        }

        if ($this->replenishmentOwnerDescription === []) {
            $this->addOnceToreplenishmentOwnerDescription(new ReplenishmentOwnerDescription());
        }

        return $this->replenishmentOwnerDescription[0];
    }

    /**
     * @return TargetServicePercent|null
     */
    public function getTargetServicePercent(): ?TargetServicePercent
    {
        return $this->targetServicePercent;
    }

    /**
     * @return TargetServicePercent
     */
    public function getTargetServicePercentWithCreate(): TargetServicePercent
    {
        $this->targetServicePercent = is_null($this->targetServicePercent) ? new TargetServicePercent() : $this->targetServicePercent;

        return $this->targetServicePercent;
    }

    /**
     * @param TargetServicePercent|null $targetServicePercent
     * @return self
     */
    public function setTargetServicePercent(?TargetServicePercent $targetServicePercent = null): self
    {
        $this->targetServicePercent = $targetServicePercent;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTargetServicePercent(): self
    {
        $this->targetServicePercent = null;

        return $this;
    }

    /**
     * @return TargetInventoryQuantity|null
     */
    public function getTargetInventoryQuantity(): ?TargetInventoryQuantity
    {
        return $this->targetInventoryQuantity;
    }

    /**
     * @return TargetInventoryQuantity
     */
    public function getTargetInventoryQuantityWithCreate(): TargetInventoryQuantity
    {
        $this->targetInventoryQuantity = is_null($this->targetInventoryQuantity) ? new TargetInventoryQuantity() : $this->targetInventoryQuantity;

        return $this->targetInventoryQuantity;
    }

    /**
     * @param TargetInventoryQuantity|null $targetInventoryQuantity
     * @return self
     */
    public function setTargetInventoryQuantity(?TargetInventoryQuantity $targetInventoryQuantity = null): self
    {
        $this->targetInventoryQuantity = $targetInventoryQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTargetInventoryQuantity(): self
    {
        $this->targetInventoryQuantity = null;

        return $this;
    }

    /**
     * @return EffectivePeriod|null
     */
    public function getEffectivePeriod(): ?EffectivePeriod
    {
        return $this->effectivePeriod;
    }

    /**
     * @return EffectivePeriod
     */
    public function getEffectivePeriodWithCreate(): EffectivePeriod
    {
        $this->effectivePeriod = is_null($this->effectivePeriod) ? new EffectivePeriod() : $this->effectivePeriod;

        return $this->effectivePeriod;
    }

    /**
     * @param EffectivePeriod|null $effectivePeriod
     * @return self
     */
    public function setEffectivePeriod(?EffectivePeriod $effectivePeriod = null): self
    {
        $this->effectivePeriod = $effectivePeriod;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetEffectivePeriod(): self
    {
        $this->effectivePeriod = null;

        return $this;
    }

    /**
     * @return Item|null
     */
    public function getItem(): ?Item
    {
        return $this->item;
    }

    /**
     * @return Item
     */
    public function getItemWithCreate(): Item
    {
        $this->item = is_null($this->item) ? new Item() : $this->item;

        return $this->item;
    }

    /**
     * @param Item|null $item
     * @return self
     */
    public function setItem(?Item $item = null): self
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
     * @return ItemLocationQuantity|null
     */
    public function getItemLocationQuantity(): ?ItemLocationQuantity
    {
        return $this->itemLocationQuantity;
    }

    /**
     * @return ItemLocationQuantity
     */
    public function getItemLocationQuantityWithCreate(): ItemLocationQuantity
    {
        $this->itemLocationQuantity = is_null($this->itemLocationQuantity) ? new ItemLocationQuantity() : $this->itemLocationQuantity;

        return $this->itemLocationQuantity;
    }

    /**
     * @param ItemLocationQuantity|null $itemLocationQuantity
     * @return self
     */
    public function setItemLocationQuantity(?ItemLocationQuantity $itemLocationQuantity = null): self
    {
        $this->itemLocationQuantity = $itemLocationQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetItemLocationQuantity(): self
    {
        $this->itemLocationQuantity = null;

        return $this;
    }
}
