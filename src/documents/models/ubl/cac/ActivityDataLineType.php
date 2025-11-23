<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SupplyChainActivityTypeCode;

class ActivityDataLineType
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
     * @var SupplyChainActivityTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\SupplyChainActivityTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("SupplyChainActivityTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSupplyChainActivityTypeCode", setter="setSupplyChainActivityTypeCode")
     */
    private $supplyChainActivityTypeCode;

    /**
     * @var BuyerCustomerParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\BuyerCustomerParty")
     * @JMS\Expose
     * @JMS\SerializedName("BuyerCustomerParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getBuyerCustomerParty", setter="setBuyerCustomerParty")
     */
    private $buyerCustomerParty;

    /**
     * @var SellerSupplierParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\SellerSupplierParty")
     * @JMS\Expose
     * @JMS\SerializedName("SellerSupplierParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSellerSupplierParty", setter="setSellerSupplierParty")
     */
    private $sellerSupplierParty;

    /**
     * @var ActivityPeriod|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ActivityPeriod")
     * @JMS\Expose
     * @JMS\SerializedName("ActivityPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getActivityPeriod", setter="setActivityPeriod")
     */
    private $activityPeriod;

    /**
     * @var ActivityOriginLocation|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ActivityOriginLocation")
     * @JMS\Expose
     * @JMS\SerializedName("ActivityOriginLocation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getActivityOriginLocation", setter="setActivityOriginLocation")
     */
    private $activityOriginLocation;

    /**
     * @var ActivityFinalLocation|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ActivityFinalLocation")
     * @JMS\Expose
     * @JMS\SerializedName("ActivityFinalLocation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getActivityFinalLocation", setter="setActivityFinalLocation")
     */
    private $activityFinalLocation;

    /**
     * @var array<SalesItem>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\SalesItem>")
     * @JMS\Expose
     * @JMS\SerializedName("SalesItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SalesItem", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSalesItem", setter="setSalesItem")
     */
    private $salesItem;

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
     * @return SupplyChainActivityTypeCode|null
     */
    public function getSupplyChainActivityTypeCode(): ?SupplyChainActivityTypeCode
    {
        return $this->supplyChainActivityTypeCode;
    }

    /**
     * @return SupplyChainActivityTypeCode
     */
    public function getSupplyChainActivityTypeCodeWithCreate(): SupplyChainActivityTypeCode
    {
        $this->supplyChainActivityTypeCode = is_null($this->supplyChainActivityTypeCode) ? new SupplyChainActivityTypeCode() : $this->supplyChainActivityTypeCode;

        return $this->supplyChainActivityTypeCode;
    }

    /**
     * @param SupplyChainActivityTypeCode|null $supplyChainActivityTypeCode
     * @return self
     */
    public function setSupplyChainActivityTypeCode(
        ?SupplyChainActivityTypeCode $supplyChainActivityTypeCode = null,
    ): self {
        $this->supplyChainActivityTypeCode = $supplyChainActivityTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSupplyChainActivityTypeCode(): self
    {
        $this->supplyChainActivityTypeCode = null;

        return $this;
    }

    /**
     * @return BuyerCustomerParty|null
     */
    public function getBuyerCustomerParty(): ?BuyerCustomerParty
    {
        return $this->buyerCustomerParty;
    }

    /**
     * @return BuyerCustomerParty
     */
    public function getBuyerCustomerPartyWithCreate(): BuyerCustomerParty
    {
        $this->buyerCustomerParty = is_null($this->buyerCustomerParty) ? new BuyerCustomerParty() : $this->buyerCustomerParty;

        return $this->buyerCustomerParty;
    }

    /**
     * @param BuyerCustomerParty|null $buyerCustomerParty
     * @return self
     */
    public function setBuyerCustomerParty(?BuyerCustomerParty $buyerCustomerParty = null): self
    {
        $this->buyerCustomerParty = $buyerCustomerParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetBuyerCustomerParty(): self
    {
        $this->buyerCustomerParty = null;

        return $this;
    }

    /**
     * @return SellerSupplierParty|null
     */
    public function getSellerSupplierParty(): ?SellerSupplierParty
    {
        return $this->sellerSupplierParty;
    }

    /**
     * @return SellerSupplierParty
     */
    public function getSellerSupplierPartyWithCreate(): SellerSupplierParty
    {
        $this->sellerSupplierParty = is_null($this->sellerSupplierParty) ? new SellerSupplierParty() : $this->sellerSupplierParty;

        return $this->sellerSupplierParty;
    }

    /**
     * @param SellerSupplierParty|null $sellerSupplierParty
     * @return self
     */
    public function setSellerSupplierParty(?SellerSupplierParty $sellerSupplierParty = null): self
    {
        $this->sellerSupplierParty = $sellerSupplierParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSellerSupplierParty(): self
    {
        $this->sellerSupplierParty = null;

        return $this;
    }

    /**
     * @return ActivityPeriod|null
     */
    public function getActivityPeriod(): ?ActivityPeriod
    {
        return $this->activityPeriod;
    }

    /**
     * @return ActivityPeriod
     */
    public function getActivityPeriodWithCreate(): ActivityPeriod
    {
        $this->activityPeriod = is_null($this->activityPeriod) ? new ActivityPeriod() : $this->activityPeriod;

        return $this->activityPeriod;
    }

    /**
     * @param ActivityPeriod|null $activityPeriod
     * @return self
     */
    public function setActivityPeriod(?ActivityPeriod $activityPeriod = null): self
    {
        $this->activityPeriod = $activityPeriod;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetActivityPeriod(): self
    {
        $this->activityPeriod = null;

        return $this;
    }

    /**
     * @return ActivityOriginLocation|null
     */
    public function getActivityOriginLocation(): ?ActivityOriginLocation
    {
        return $this->activityOriginLocation;
    }

    /**
     * @return ActivityOriginLocation
     */
    public function getActivityOriginLocationWithCreate(): ActivityOriginLocation
    {
        $this->activityOriginLocation = is_null($this->activityOriginLocation) ? new ActivityOriginLocation() : $this->activityOriginLocation;

        return $this->activityOriginLocation;
    }

    /**
     * @param ActivityOriginLocation|null $activityOriginLocation
     * @return self
     */
    public function setActivityOriginLocation(?ActivityOriginLocation $activityOriginLocation = null): self
    {
        $this->activityOriginLocation = $activityOriginLocation;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetActivityOriginLocation(): self
    {
        $this->activityOriginLocation = null;

        return $this;
    }

    /**
     * @return ActivityFinalLocation|null
     */
    public function getActivityFinalLocation(): ?ActivityFinalLocation
    {
        return $this->activityFinalLocation;
    }

    /**
     * @return ActivityFinalLocation
     */
    public function getActivityFinalLocationWithCreate(): ActivityFinalLocation
    {
        $this->activityFinalLocation = is_null($this->activityFinalLocation) ? new ActivityFinalLocation() : $this->activityFinalLocation;

        return $this->activityFinalLocation;
    }

    /**
     * @param ActivityFinalLocation|null $activityFinalLocation
     * @return self
     */
    public function setActivityFinalLocation(?ActivityFinalLocation $activityFinalLocation = null): self
    {
        $this->activityFinalLocation = $activityFinalLocation;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetActivityFinalLocation(): self
    {
        $this->activityFinalLocation = null;

        return $this;
    }

    /**
     * @return array<SalesItem>|null
     */
    public function getSalesItem(): ?array
    {
        return $this->salesItem;
    }

    /**
     * @param array<SalesItem>|null $salesItem
     * @return self
     */
    public function setSalesItem(?array $salesItem = null): self
    {
        $this->salesItem = $salesItem;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSalesItem(): self
    {
        $this->salesItem = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearSalesItem(): self
    {
        $this->salesItem = [];

        return $this;
    }

    /**
     * @return SalesItem|null
     */
    public function firstSalesItem(): ?SalesItem
    {
        $salesItem = $this->salesItem ?? [];
        $salesItem = reset($salesItem);

        if ($salesItem === false) {
            return null;
        }

        return $salesItem;
    }

    /**
     * @return SalesItem|null
     */
    public function lastSalesItem(): ?SalesItem
    {
        $salesItem = $this->salesItem ?? [];
        $salesItem = end($salesItem);

        if ($salesItem === false) {
            return null;
        }

        return $salesItem;
    }

    /**
     * @param SalesItem $salesItem
     * @return self
     */
    public function addToSalesItem(SalesItem $salesItem): self
    {
        $this->salesItem[] = $salesItem;

        return $this;
    }

    /**
     * @return SalesItem
     */
    public function addToSalesItemWithCreate(): SalesItem
    {
        $this->addTosalesItem($salesItem = new SalesItem());

        return $salesItem;
    }

    /**
     * @param SalesItem $salesItem
     * @return self
     */
    public function addOnceToSalesItem(SalesItem $salesItem): self
    {
        if (!is_array($this->salesItem)) {
            $this->salesItem = [];
        }

        $this->salesItem[0] = $salesItem;

        return $this;
    }

    /**
     * @return SalesItem
     */
    public function addOnceToSalesItemWithCreate(): SalesItem
    {
        if (!is_array($this->salesItem)) {
            $this->salesItem = [];
        }

        if ($this->salesItem === []) {
            $this->addOnceTosalesItem(new SalesItem());
        }

        return $this->salesItem[0];
    }
}
