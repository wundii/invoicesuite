<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\AccountingCost;
use horstoeko\invoicesuite\documents\models\ubl\cbc\AccountingCostCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\InspectionMethodCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LineExtensionAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LineStatusCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumBackorderQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumBackorderQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Note;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Quantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SalesOrderID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TotalTaxAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\UUID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\WarrantyInformation;

class LineItemType
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
     * @var SalesOrderID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\SalesOrderID")
     * @JMS\Expose
     * @JMS\SerializedName("SalesOrderID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSalesOrderID", setter="setSalesOrderID")
     */
    private $salesOrderID;

    /**
     * @var UUID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\UUID")
     * @JMS\Expose
     * @JMS\SerializedName("UUID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getUUID", setter="setUUID")
     */
    private $uUID;

    /**
     * @var array<Note>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Note>")
     * @JMS\Expose
     * @JMS\SerializedName("Note")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Note", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getNote", setter="setNote")
     */
    private $note;

    /**
     * @var LineStatusCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LineStatusCode")
     * @JMS\Expose
     * @JMS\SerializedName("LineStatusCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLineStatusCode", setter="setLineStatusCode")
     */
    private $lineStatusCode;

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
     * @var LineExtensionAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LineExtensionAmount")
     * @JMS\Expose
     * @JMS\SerializedName("LineExtensionAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLineExtensionAmount", setter="setLineExtensionAmount")
     */
    private $lineExtensionAmount;

    /**
     * @var TotalTaxAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TotalTaxAmount")
     * @JMS\Expose
     * @JMS\SerializedName("TotalTaxAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTotalTaxAmount", setter="setTotalTaxAmount")
     */
    private $totalTaxAmount;

    /**
     * @var MinimumQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("MinimumQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMinimumQuantity", setter="setMinimumQuantity")
     */
    private $minimumQuantity;

    /**
     * @var MaximumQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("MaximumQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMaximumQuantity", setter="setMaximumQuantity")
     */
    private $maximumQuantity;

    /**
     * @var MinimumBackorderQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumBackorderQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("MinimumBackorderQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMinimumBackorderQuantity", setter="setMinimumBackorderQuantity")
     */
    private $minimumBackorderQuantity;

    /**
     * @var MaximumBackorderQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumBackorderQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("MaximumBackorderQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMaximumBackorderQuantity", setter="setMaximumBackorderQuantity")
     */
    private $maximumBackorderQuantity;

    /**
     * @var InspectionMethodCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\InspectionMethodCode")
     * @JMS\Expose
     * @JMS\SerializedName("InspectionMethodCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getInspectionMethodCode", setter="setInspectionMethodCode")
     */
    private $inspectionMethodCode;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("PartialDeliveryIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPartialDeliveryIndicator", setter="setPartialDeliveryIndicator")
     */
    private $partialDeliveryIndicator;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("BackOrderAllowedIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getBackOrderAllowedIndicator", setter="setBackOrderAllowedIndicator")
     */
    private $backOrderAllowedIndicator;

    /**
     * @var AccountingCostCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\AccountingCostCode")
     * @JMS\Expose
     * @JMS\SerializedName("AccountingCostCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAccountingCostCode", setter="setAccountingCostCode")
     */
    private $accountingCostCode;

    /**
     * @var AccountingCost|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\AccountingCost")
     * @JMS\Expose
     * @JMS\SerializedName("AccountingCost")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAccountingCost", setter="setAccountingCost")
     */
    private $accountingCost;

    /**
     * @var array<WarrantyInformation>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\WarrantyInformation>")
     * @JMS\Expose
     * @JMS\SerializedName("WarrantyInformation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="WarrantyInformation", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getWarrantyInformation", setter="setWarrantyInformation")
     */
    private $warrantyInformation;

    /**
     * @var array<Delivery>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\Delivery>")
     * @JMS\Expose
     * @JMS\SerializedName("Delivery")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Delivery", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getDelivery", setter="setDelivery")
     */
    private $delivery;

    /**
     * @var DeliveryTerms|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\DeliveryTerms")
     * @JMS\Expose
     * @JMS\SerializedName("DeliveryTerms")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDeliveryTerms", setter="setDeliveryTerms")
     */
    private $deliveryTerms;

    /**
     * @var OriginatorParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\OriginatorParty")
     * @JMS\Expose
     * @JMS\SerializedName("OriginatorParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOriginatorParty", setter="setOriginatorParty")
     */
    private $originatorParty;

    /**
     * @var array<OrderedShipment>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\OrderedShipment>")
     * @JMS\Expose
     * @JMS\SerializedName("OrderedShipment")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="OrderedShipment", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getOrderedShipment", setter="setOrderedShipment")
     */
    private $orderedShipment;

    /**
     * @var PricingReference|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\PricingReference")
     * @JMS\Expose
     * @JMS\SerializedName("PricingReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPricingReference", setter="setPricingReference")
     */
    private $pricingReference;

    /**
     * @var array<AllowanceCharge>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\AllowanceCharge>")
     * @JMS\Expose
     * @JMS\SerializedName("AllowanceCharge")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="AllowanceCharge", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getAllowanceCharge", setter="setAllowanceCharge")
     */
    private $allowanceCharge;

    /**
     * @var Price|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Price")
     * @JMS\Expose
     * @JMS\SerializedName("Price")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPrice", setter="setPrice")
     */
    private $price;

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
     * @var array<SubLineItem>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\SubLineItem>")
     * @JMS\Expose
     * @JMS\SerializedName("SubLineItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SubLineItem", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSubLineItem", setter="setSubLineItem")
     */
    private $subLineItem;

    /**
     * @var WarrantyValidityPeriod|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\WarrantyValidityPeriod")
     * @JMS\Expose
     * @JMS\SerializedName("WarrantyValidityPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getWarrantyValidityPeriod", setter="setWarrantyValidityPeriod")
     */
    private $warrantyValidityPeriod;

    /**
     * @var WarrantyParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\WarrantyParty")
     * @JMS\Expose
     * @JMS\SerializedName("WarrantyParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getWarrantyParty", setter="setWarrantyParty")
     */
    private $warrantyParty;

    /**
     * @var array<TaxTotal>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\TaxTotal>")
     * @JMS\Expose
     * @JMS\SerializedName("TaxTotal")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="TaxTotal", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getTaxTotal", setter="setTaxTotal")
     */
    private $taxTotal;

    /**
     * @var ItemPriceExtension|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ItemPriceExtension")
     * @JMS\Expose
     * @JMS\SerializedName("ItemPriceExtension")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getItemPriceExtension", setter="setItemPriceExtension")
     */
    private $itemPriceExtension;

    /**
     * @var array<LineReference>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\LineReference>")
     * @JMS\Expose
     * @JMS\SerializedName("LineReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="LineReference", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getLineReference", setter="setLineReference")
     */
    private $lineReference;

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
     * @return SalesOrderID|null
     */
    public function getSalesOrderID(): ?SalesOrderID
    {
        return $this->salesOrderID;
    }

    /**
     * @return SalesOrderID
     */
    public function getSalesOrderIDWithCreate(): SalesOrderID
    {
        $this->salesOrderID = is_null($this->salesOrderID) ? new SalesOrderID() : $this->salesOrderID;

        return $this->salesOrderID;
    }

    /**
     * @param SalesOrderID|null $salesOrderID
     * @return self
     */
    public function setSalesOrderID(?SalesOrderID $salesOrderID = null): self
    {
        $this->salesOrderID = $salesOrderID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSalesOrderID(): self
    {
        $this->salesOrderID = null;

        return $this;
    }

    /**
     * @return UUID|null
     */
    public function getUUID(): ?UUID
    {
        return $this->uUID;
    }

    /**
     * @return UUID
     */
    public function getUUIDWithCreate(): UUID
    {
        $this->uUID = is_null($this->uUID) ? new UUID() : $this->uUID;

        return $this->uUID;
    }

    /**
     * @param UUID|null $uUID
     * @return self
     */
    public function setUUID(?UUID $uUID = null): self
    {
        $this->uUID = $uUID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetUUID(): self
    {
        $this->uUID = null;

        return $this;
    }

    /**
     * @return array<Note>|null
     */
    public function getNote(): ?array
    {
        return $this->note;
    }

    /**
     * @param array<Note>|null $note
     * @return self
     */
    public function setNote(?array $note = null): self
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetNote(): self
    {
        $this->note = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearNote(): self
    {
        $this->note = [];

        return $this;
    }

    /**
     * @return Note|null
     */
    public function firstNote(): ?Note
    {
        $note = $this->note ?? [];
        $note = reset($note);

        if ($note === false) {
            return null;
        }

        return $note;
    }

    /**
     * @return Note|null
     */
    public function lastNote(): ?Note
    {
        $note = $this->note ?? [];
        $note = end($note);

        if ($note === false) {
            return null;
        }

        return $note;
    }

    /**
     * @param Note $note
     * @return self
     */
    public function addToNote(Note $note): self
    {
        $this->note[] = $note;

        return $this;
    }

    /**
     * @return Note
     */
    public function addToNoteWithCreate(): Note
    {
        $this->addTonote($note = new Note());

        return $note;
    }

    /**
     * @param Note $note
     * @return self
     */
    public function addOnceToNote(Note $note): self
    {
        if (!is_array($this->note)) {
            $this->note = [];
        }

        $this->note[0] = $note;

        return $this;
    }

    /**
     * @return Note
     */
    public function addOnceToNoteWithCreate(): Note
    {
        if (!is_array($this->note)) {
            $this->note = [];
        }

        if ($this->note === []) {
            $this->addOnceTonote(new Note());
        }

        return $this->note[0];
    }

    /**
     * @return LineStatusCode|null
     */
    public function getLineStatusCode(): ?LineStatusCode
    {
        return $this->lineStatusCode;
    }

    /**
     * @return LineStatusCode
     */
    public function getLineStatusCodeWithCreate(): LineStatusCode
    {
        $this->lineStatusCode = is_null($this->lineStatusCode) ? new LineStatusCode() : $this->lineStatusCode;

        return $this->lineStatusCode;
    }

    /**
     * @param LineStatusCode|null $lineStatusCode
     * @return self
     */
    public function setLineStatusCode(?LineStatusCode $lineStatusCode = null): self
    {
        $this->lineStatusCode = $lineStatusCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLineStatusCode(): self
    {
        $this->lineStatusCode = null;

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
     * @return LineExtensionAmount|null
     */
    public function getLineExtensionAmount(): ?LineExtensionAmount
    {
        return $this->lineExtensionAmount;
    }

    /**
     * @return LineExtensionAmount
     */
    public function getLineExtensionAmountWithCreate(): LineExtensionAmount
    {
        $this->lineExtensionAmount = is_null($this->lineExtensionAmount) ? new LineExtensionAmount() : $this->lineExtensionAmount;

        return $this->lineExtensionAmount;
    }

    /**
     * @param LineExtensionAmount|null $lineExtensionAmount
     * @return self
     */
    public function setLineExtensionAmount(?LineExtensionAmount $lineExtensionAmount = null): self
    {
        $this->lineExtensionAmount = $lineExtensionAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLineExtensionAmount(): self
    {
        $this->lineExtensionAmount = null;

        return $this;
    }

    /**
     * @return TotalTaxAmount|null
     */
    public function getTotalTaxAmount(): ?TotalTaxAmount
    {
        return $this->totalTaxAmount;
    }

    /**
     * @return TotalTaxAmount
     */
    public function getTotalTaxAmountWithCreate(): TotalTaxAmount
    {
        $this->totalTaxAmount = is_null($this->totalTaxAmount) ? new TotalTaxAmount() : $this->totalTaxAmount;

        return $this->totalTaxAmount;
    }

    /**
     * @param TotalTaxAmount|null $totalTaxAmount
     * @return self
     */
    public function setTotalTaxAmount(?TotalTaxAmount $totalTaxAmount = null): self
    {
        $this->totalTaxAmount = $totalTaxAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTotalTaxAmount(): self
    {
        $this->totalTaxAmount = null;

        return $this;
    }

    /**
     * @return MinimumQuantity|null
     */
    public function getMinimumQuantity(): ?MinimumQuantity
    {
        return $this->minimumQuantity;
    }

    /**
     * @return MinimumQuantity
     */
    public function getMinimumQuantityWithCreate(): MinimumQuantity
    {
        $this->minimumQuantity = is_null($this->minimumQuantity) ? new MinimumQuantity() : $this->minimumQuantity;

        return $this->minimumQuantity;
    }

    /**
     * @param MinimumQuantity|null $minimumQuantity
     * @return self
     */
    public function setMinimumQuantity(?MinimumQuantity $minimumQuantity = null): self
    {
        $this->minimumQuantity = $minimumQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMinimumQuantity(): self
    {
        $this->minimumQuantity = null;

        return $this;
    }

    /**
     * @return MaximumQuantity|null
     */
    public function getMaximumQuantity(): ?MaximumQuantity
    {
        return $this->maximumQuantity;
    }

    /**
     * @return MaximumQuantity
     */
    public function getMaximumQuantityWithCreate(): MaximumQuantity
    {
        $this->maximumQuantity = is_null($this->maximumQuantity) ? new MaximumQuantity() : $this->maximumQuantity;

        return $this->maximumQuantity;
    }

    /**
     * @param MaximumQuantity|null $maximumQuantity
     * @return self
     */
    public function setMaximumQuantity(?MaximumQuantity $maximumQuantity = null): self
    {
        $this->maximumQuantity = $maximumQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMaximumQuantity(): self
    {
        $this->maximumQuantity = null;

        return $this;
    }

    /**
     * @return MinimumBackorderQuantity|null
     */
    public function getMinimumBackorderQuantity(): ?MinimumBackorderQuantity
    {
        return $this->minimumBackorderQuantity;
    }

    /**
     * @return MinimumBackorderQuantity
     */
    public function getMinimumBackorderQuantityWithCreate(): MinimumBackorderQuantity
    {
        $this->minimumBackorderQuantity = is_null($this->minimumBackorderQuantity) ? new MinimumBackorderQuantity() : $this->minimumBackorderQuantity;

        return $this->minimumBackorderQuantity;
    }

    /**
     * @param MinimumBackorderQuantity|null $minimumBackorderQuantity
     * @return self
     */
    public function setMinimumBackorderQuantity(?MinimumBackorderQuantity $minimumBackorderQuantity = null): self
    {
        $this->minimumBackorderQuantity = $minimumBackorderQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMinimumBackorderQuantity(): self
    {
        $this->minimumBackorderQuantity = null;

        return $this;
    }

    /**
     * @return MaximumBackorderQuantity|null
     */
    public function getMaximumBackorderQuantity(): ?MaximumBackorderQuantity
    {
        return $this->maximumBackorderQuantity;
    }

    /**
     * @return MaximumBackorderQuantity
     */
    public function getMaximumBackorderQuantityWithCreate(): MaximumBackorderQuantity
    {
        $this->maximumBackorderQuantity = is_null($this->maximumBackorderQuantity) ? new MaximumBackorderQuantity() : $this->maximumBackorderQuantity;

        return $this->maximumBackorderQuantity;
    }

    /**
     * @param MaximumBackorderQuantity|null $maximumBackorderQuantity
     * @return self
     */
    public function setMaximumBackorderQuantity(?MaximumBackorderQuantity $maximumBackorderQuantity = null): self
    {
        $this->maximumBackorderQuantity = $maximumBackorderQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMaximumBackorderQuantity(): self
    {
        $this->maximumBackorderQuantity = null;

        return $this;
    }

    /**
     * @return InspectionMethodCode|null
     */
    public function getInspectionMethodCode(): ?InspectionMethodCode
    {
        return $this->inspectionMethodCode;
    }

    /**
     * @return InspectionMethodCode
     */
    public function getInspectionMethodCodeWithCreate(): InspectionMethodCode
    {
        $this->inspectionMethodCode = is_null($this->inspectionMethodCode) ? new InspectionMethodCode() : $this->inspectionMethodCode;

        return $this->inspectionMethodCode;
    }

    /**
     * @param InspectionMethodCode|null $inspectionMethodCode
     * @return self
     */
    public function setInspectionMethodCode(?InspectionMethodCode $inspectionMethodCode = null): self
    {
        $this->inspectionMethodCode = $inspectionMethodCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetInspectionMethodCode(): self
    {
        $this->inspectionMethodCode = null;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getPartialDeliveryIndicator(): ?bool
    {
        return $this->partialDeliveryIndicator;
    }

    /**
     * @param bool|null $partialDeliveryIndicator
     * @return self
     */
    public function setPartialDeliveryIndicator(?bool $partialDeliveryIndicator = null): self
    {
        $this->partialDeliveryIndicator = $partialDeliveryIndicator;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPartialDeliveryIndicator(): self
    {
        $this->partialDeliveryIndicator = null;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getBackOrderAllowedIndicator(): ?bool
    {
        return $this->backOrderAllowedIndicator;
    }

    /**
     * @param bool|null $backOrderAllowedIndicator
     * @return self
     */
    public function setBackOrderAllowedIndicator(?bool $backOrderAllowedIndicator = null): self
    {
        $this->backOrderAllowedIndicator = $backOrderAllowedIndicator;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetBackOrderAllowedIndicator(): self
    {
        $this->backOrderAllowedIndicator = null;

        return $this;
    }

    /**
     * @return AccountingCostCode|null
     */
    public function getAccountingCostCode(): ?AccountingCostCode
    {
        return $this->accountingCostCode;
    }

    /**
     * @return AccountingCostCode
     */
    public function getAccountingCostCodeWithCreate(): AccountingCostCode
    {
        $this->accountingCostCode = is_null($this->accountingCostCode) ? new AccountingCostCode() : $this->accountingCostCode;

        return $this->accountingCostCode;
    }

    /**
     * @param AccountingCostCode|null $accountingCostCode
     * @return self
     */
    public function setAccountingCostCode(?AccountingCostCode $accountingCostCode = null): self
    {
        $this->accountingCostCode = $accountingCostCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAccountingCostCode(): self
    {
        $this->accountingCostCode = null;

        return $this;
    }

    /**
     * @return AccountingCost|null
     */
    public function getAccountingCost(): ?AccountingCost
    {
        return $this->accountingCost;
    }

    /**
     * @return AccountingCost
     */
    public function getAccountingCostWithCreate(): AccountingCost
    {
        $this->accountingCost = is_null($this->accountingCost) ? new AccountingCost() : $this->accountingCost;

        return $this->accountingCost;
    }

    /**
     * @param AccountingCost|null $accountingCost
     * @return self
     */
    public function setAccountingCost(?AccountingCost $accountingCost = null): self
    {
        $this->accountingCost = $accountingCost;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAccountingCost(): self
    {
        $this->accountingCost = null;

        return $this;
    }

    /**
     * @return array<WarrantyInformation>|null
     */
    public function getWarrantyInformation(): ?array
    {
        return $this->warrantyInformation;
    }

    /**
     * @param array<WarrantyInformation>|null $warrantyInformation
     * @return self
     */
    public function setWarrantyInformation(?array $warrantyInformation = null): self
    {
        $this->warrantyInformation = $warrantyInformation;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetWarrantyInformation(): self
    {
        $this->warrantyInformation = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearWarrantyInformation(): self
    {
        $this->warrantyInformation = [];

        return $this;
    }

    /**
     * @return WarrantyInformation|null
     */
    public function firstWarrantyInformation(): ?WarrantyInformation
    {
        $warrantyInformation = $this->warrantyInformation ?? [];
        $warrantyInformation = reset($warrantyInformation);

        if ($warrantyInformation === false) {
            return null;
        }

        return $warrantyInformation;
    }

    /**
     * @return WarrantyInformation|null
     */
    public function lastWarrantyInformation(): ?WarrantyInformation
    {
        $warrantyInformation = $this->warrantyInformation ?? [];
        $warrantyInformation = end($warrantyInformation);

        if ($warrantyInformation === false) {
            return null;
        }

        return $warrantyInformation;
    }

    /**
     * @param WarrantyInformation $warrantyInformation
     * @return self
     */
    public function addToWarrantyInformation(WarrantyInformation $warrantyInformation): self
    {
        $this->warrantyInformation[] = $warrantyInformation;

        return $this;
    }

    /**
     * @return WarrantyInformation
     */
    public function addToWarrantyInformationWithCreate(): WarrantyInformation
    {
        $this->addTowarrantyInformation($warrantyInformation = new WarrantyInformation());

        return $warrantyInformation;
    }

    /**
     * @param WarrantyInformation $warrantyInformation
     * @return self
     */
    public function addOnceToWarrantyInformation(WarrantyInformation $warrantyInformation): self
    {
        if (!is_array($this->warrantyInformation)) {
            $this->warrantyInformation = [];
        }

        $this->warrantyInformation[0] = $warrantyInformation;

        return $this;
    }

    /**
     * @return WarrantyInformation
     */
    public function addOnceToWarrantyInformationWithCreate(): WarrantyInformation
    {
        if (!is_array($this->warrantyInformation)) {
            $this->warrantyInformation = [];
        }

        if ($this->warrantyInformation === []) {
            $this->addOnceTowarrantyInformation(new WarrantyInformation());
        }

        return $this->warrantyInformation[0];
    }

    /**
     * @return array<Delivery>|null
     */
    public function getDelivery(): ?array
    {
        return $this->delivery;
    }

    /**
     * @param array<Delivery>|null $delivery
     * @return self
     */
    public function setDelivery(?array $delivery = null): self
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
     * @return self
     */
    public function clearDelivery(): self
    {
        $this->delivery = [];

        return $this;
    }

    /**
     * @return Delivery|null
     */
    public function firstDelivery(): ?Delivery
    {
        $delivery = $this->delivery ?? [];
        $delivery = reset($delivery);

        if ($delivery === false) {
            return null;
        }

        return $delivery;
    }

    /**
     * @return Delivery|null
     */
    public function lastDelivery(): ?Delivery
    {
        $delivery = $this->delivery ?? [];
        $delivery = end($delivery);

        if ($delivery === false) {
            return null;
        }

        return $delivery;
    }

    /**
     * @param Delivery $delivery
     * @return self
     */
    public function addToDelivery(Delivery $delivery): self
    {
        $this->delivery[] = $delivery;

        return $this;
    }

    /**
     * @return Delivery
     */
    public function addToDeliveryWithCreate(): Delivery
    {
        $this->addTodelivery($delivery = new Delivery());

        return $delivery;
    }

    /**
     * @param Delivery $delivery
     * @return self
     */
    public function addOnceToDelivery(Delivery $delivery): self
    {
        if (!is_array($this->delivery)) {
            $this->delivery = [];
        }

        $this->delivery[0] = $delivery;

        return $this;
    }

    /**
     * @return Delivery
     */
    public function addOnceToDeliveryWithCreate(): Delivery
    {
        if (!is_array($this->delivery)) {
            $this->delivery = [];
        }

        if ($this->delivery === []) {
            $this->addOnceTodelivery(new Delivery());
        }

        return $this->delivery[0];
    }

    /**
     * @return DeliveryTerms|null
     */
    public function getDeliveryTerms(): ?DeliveryTerms
    {
        return $this->deliveryTerms;
    }

    /**
     * @return DeliveryTerms
     */
    public function getDeliveryTermsWithCreate(): DeliveryTerms
    {
        $this->deliveryTerms = is_null($this->deliveryTerms) ? new DeliveryTerms() : $this->deliveryTerms;

        return $this->deliveryTerms;
    }

    /**
     * @param DeliveryTerms|null $deliveryTerms
     * @return self
     */
    public function setDeliveryTerms(?DeliveryTerms $deliveryTerms = null): self
    {
        $this->deliveryTerms = $deliveryTerms;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDeliveryTerms(): self
    {
        $this->deliveryTerms = null;

        return $this;
    }

    /**
     * @return OriginatorParty|null
     */
    public function getOriginatorParty(): ?OriginatorParty
    {
        return $this->originatorParty;
    }

    /**
     * @return OriginatorParty
     */
    public function getOriginatorPartyWithCreate(): OriginatorParty
    {
        $this->originatorParty = is_null($this->originatorParty) ? new OriginatorParty() : $this->originatorParty;

        return $this->originatorParty;
    }

    /**
     * @param OriginatorParty|null $originatorParty
     * @return self
     */
    public function setOriginatorParty(?OriginatorParty $originatorParty = null): self
    {
        $this->originatorParty = $originatorParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetOriginatorParty(): self
    {
        $this->originatorParty = null;

        return $this;
    }

    /**
     * @return array<OrderedShipment>|null
     */
    public function getOrderedShipment(): ?array
    {
        return $this->orderedShipment;
    }

    /**
     * @param array<OrderedShipment>|null $orderedShipment
     * @return self
     */
    public function setOrderedShipment(?array $orderedShipment = null): self
    {
        $this->orderedShipment = $orderedShipment;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetOrderedShipment(): self
    {
        $this->orderedShipment = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearOrderedShipment(): self
    {
        $this->orderedShipment = [];

        return $this;
    }

    /**
     * @return OrderedShipment|null
     */
    public function firstOrderedShipment(): ?OrderedShipment
    {
        $orderedShipment = $this->orderedShipment ?? [];
        $orderedShipment = reset($orderedShipment);

        if ($orderedShipment === false) {
            return null;
        }

        return $orderedShipment;
    }

    /**
     * @return OrderedShipment|null
     */
    public function lastOrderedShipment(): ?OrderedShipment
    {
        $orderedShipment = $this->orderedShipment ?? [];
        $orderedShipment = end($orderedShipment);

        if ($orderedShipment === false) {
            return null;
        }

        return $orderedShipment;
    }

    /**
     * @param OrderedShipment $orderedShipment
     * @return self
     */
    public function addToOrderedShipment(OrderedShipment $orderedShipment): self
    {
        $this->orderedShipment[] = $orderedShipment;

        return $this;
    }

    /**
     * @return OrderedShipment
     */
    public function addToOrderedShipmentWithCreate(): OrderedShipment
    {
        $this->addToorderedShipment($orderedShipment = new OrderedShipment());

        return $orderedShipment;
    }

    /**
     * @param OrderedShipment $orderedShipment
     * @return self
     */
    public function addOnceToOrderedShipment(OrderedShipment $orderedShipment): self
    {
        if (!is_array($this->orderedShipment)) {
            $this->orderedShipment = [];
        }

        $this->orderedShipment[0] = $orderedShipment;

        return $this;
    }

    /**
     * @return OrderedShipment
     */
    public function addOnceToOrderedShipmentWithCreate(): OrderedShipment
    {
        if (!is_array($this->orderedShipment)) {
            $this->orderedShipment = [];
        }

        if ($this->orderedShipment === []) {
            $this->addOnceToorderedShipment(new OrderedShipment());
        }

        return $this->orderedShipment[0];
    }

    /**
     * @return PricingReference|null
     */
    public function getPricingReference(): ?PricingReference
    {
        return $this->pricingReference;
    }

    /**
     * @return PricingReference
     */
    public function getPricingReferenceWithCreate(): PricingReference
    {
        $this->pricingReference = is_null($this->pricingReference) ? new PricingReference() : $this->pricingReference;

        return $this->pricingReference;
    }

    /**
     * @param PricingReference|null $pricingReference
     * @return self
     */
    public function setPricingReference(?PricingReference $pricingReference = null): self
    {
        $this->pricingReference = $pricingReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPricingReference(): self
    {
        $this->pricingReference = null;

        return $this;
    }

    /**
     * @return array<AllowanceCharge>|null
     */
    public function getAllowanceCharge(): ?array
    {
        return $this->allowanceCharge;
    }

    /**
     * @param array<AllowanceCharge>|null $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(?array $allowanceCharge = null): self
    {
        $this->allowanceCharge = $allowanceCharge;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAllowanceCharge(): self
    {
        $this->allowanceCharge = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearAllowanceCharge(): self
    {
        $this->allowanceCharge = [];

        return $this;
    }

    /**
     * @return AllowanceCharge|null
     */
    public function firstAllowanceCharge(): ?AllowanceCharge
    {
        $allowanceCharge = $this->allowanceCharge ?? [];
        $allowanceCharge = reset($allowanceCharge);

        if ($allowanceCharge === false) {
            return null;
        }

        return $allowanceCharge;
    }

    /**
     * @return AllowanceCharge|null
     */
    public function lastAllowanceCharge(): ?AllowanceCharge
    {
        $allowanceCharge = $this->allowanceCharge ?? [];
        $allowanceCharge = end($allowanceCharge);

        if ($allowanceCharge === false) {
            return null;
        }

        return $allowanceCharge;
    }

    /**
     * @param AllowanceCharge $allowanceCharge
     * @return self
     */
    public function addToAllowanceCharge(AllowanceCharge $allowanceCharge): self
    {
        $this->allowanceCharge[] = $allowanceCharge;

        return $this;
    }

    /**
     * @return AllowanceCharge
     */
    public function addToAllowanceChargeWithCreate(): AllowanceCharge
    {
        $this->addToallowanceCharge($allowanceCharge = new AllowanceCharge());

        return $allowanceCharge;
    }

    /**
     * @param AllowanceCharge $allowanceCharge
     * @return self
     */
    public function addOnceToAllowanceCharge(AllowanceCharge $allowanceCharge): self
    {
        if (!is_array($this->allowanceCharge)) {
            $this->allowanceCharge = [];
        }

        $this->allowanceCharge[0] = $allowanceCharge;

        return $this;
    }

    /**
     * @return AllowanceCharge
     */
    public function addOnceToAllowanceChargeWithCreate(): AllowanceCharge
    {
        if (!is_array($this->allowanceCharge)) {
            $this->allowanceCharge = [];
        }

        if ($this->allowanceCharge === []) {
            $this->addOnceToallowanceCharge(new AllowanceCharge());
        }

        return $this->allowanceCharge[0];
    }

    /**
     * @return Price|null
     */
    public function getPrice(): ?Price
    {
        return $this->price;
    }

    /**
     * @return Price
     */
    public function getPriceWithCreate(): Price
    {
        $this->price = is_null($this->price) ? new Price() : $this->price;

        return $this->price;
    }

    /**
     * @param Price|null $price
     * @return self
     */
    public function setPrice(?Price $price = null): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPrice(): self
    {
        $this->price = null;

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
     * @return array<SubLineItem>|null
     */
    public function getSubLineItem(): ?array
    {
        return $this->subLineItem;
    }

    /**
     * @param array<SubLineItem>|null $subLineItem
     * @return self
     */
    public function setSubLineItem(?array $subLineItem = null): self
    {
        $this->subLineItem = $subLineItem;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSubLineItem(): self
    {
        $this->subLineItem = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearSubLineItem(): self
    {
        $this->subLineItem = [];

        return $this;
    }

    /**
     * @return SubLineItem|null
     */
    public function firstSubLineItem(): ?SubLineItem
    {
        $subLineItem = $this->subLineItem ?? [];
        $subLineItem = reset($subLineItem);

        if ($subLineItem === false) {
            return null;
        }

        return $subLineItem;
    }

    /**
     * @return SubLineItem|null
     */
    public function lastSubLineItem(): ?SubLineItem
    {
        $subLineItem = $this->subLineItem ?? [];
        $subLineItem = end($subLineItem);

        if ($subLineItem === false) {
            return null;
        }

        return $subLineItem;
    }

    /**
     * @param SubLineItem $subLineItem
     * @return self
     */
    public function addToSubLineItem(SubLineItem $subLineItem): self
    {
        $this->subLineItem[] = $subLineItem;

        return $this;
    }

    /**
     * @return SubLineItem
     */
    public function addToSubLineItemWithCreate(): SubLineItem
    {
        $this->addTosubLineItem($subLineItem = new SubLineItem());

        return $subLineItem;
    }

    /**
     * @param SubLineItem $subLineItem
     * @return self
     */
    public function addOnceToSubLineItem(SubLineItem $subLineItem): self
    {
        if (!is_array($this->subLineItem)) {
            $this->subLineItem = [];
        }

        $this->subLineItem[0] = $subLineItem;

        return $this;
    }

    /**
     * @return SubLineItem
     */
    public function addOnceToSubLineItemWithCreate(): SubLineItem
    {
        if (!is_array($this->subLineItem)) {
            $this->subLineItem = [];
        }

        if ($this->subLineItem === []) {
            $this->addOnceTosubLineItem(new SubLineItem());
        }

        return $this->subLineItem[0];
    }

    /**
     * @return WarrantyValidityPeriod|null
     */
    public function getWarrantyValidityPeriod(): ?WarrantyValidityPeriod
    {
        return $this->warrantyValidityPeriod;
    }

    /**
     * @return WarrantyValidityPeriod
     */
    public function getWarrantyValidityPeriodWithCreate(): WarrantyValidityPeriod
    {
        $this->warrantyValidityPeriod = is_null($this->warrantyValidityPeriod) ? new WarrantyValidityPeriod() : $this->warrantyValidityPeriod;

        return $this->warrantyValidityPeriod;
    }

    /**
     * @param WarrantyValidityPeriod|null $warrantyValidityPeriod
     * @return self
     */
    public function setWarrantyValidityPeriod(?WarrantyValidityPeriod $warrantyValidityPeriod = null): self
    {
        $this->warrantyValidityPeriod = $warrantyValidityPeriod;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetWarrantyValidityPeriod(): self
    {
        $this->warrantyValidityPeriod = null;

        return $this;
    }

    /**
     * @return WarrantyParty|null
     */
    public function getWarrantyParty(): ?WarrantyParty
    {
        return $this->warrantyParty;
    }

    /**
     * @return WarrantyParty
     */
    public function getWarrantyPartyWithCreate(): WarrantyParty
    {
        $this->warrantyParty = is_null($this->warrantyParty) ? new WarrantyParty() : $this->warrantyParty;

        return $this->warrantyParty;
    }

    /**
     * @param WarrantyParty|null $warrantyParty
     * @return self
     */
    public function setWarrantyParty(?WarrantyParty $warrantyParty = null): self
    {
        $this->warrantyParty = $warrantyParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetWarrantyParty(): self
    {
        $this->warrantyParty = null;

        return $this;
    }

    /**
     * @return array<TaxTotal>|null
     */
    public function getTaxTotal(): ?array
    {
        return $this->taxTotal;
    }

    /**
     * @param array<TaxTotal>|null $taxTotal
     * @return self
     */
    public function setTaxTotal(?array $taxTotal = null): self
    {
        $this->taxTotal = $taxTotal;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTaxTotal(): self
    {
        $this->taxTotal = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearTaxTotal(): self
    {
        $this->taxTotal = [];

        return $this;
    }

    /**
     * @return TaxTotal|null
     */
    public function firstTaxTotal(): ?TaxTotal
    {
        $taxTotal = $this->taxTotal ?? [];
        $taxTotal = reset($taxTotal);

        if ($taxTotal === false) {
            return null;
        }

        return $taxTotal;
    }

    /**
     * @return TaxTotal|null
     */
    public function lastTaxTotal(): ?TaxTotal
    {
        $taxTotal = $this->taxTotal ?? [];
        $taxTotal = end($taxTotal);

        if ($taxTotal === false) {
            return null;
        }

        return $taxTotal;
    }

    /**
     * @param TaxTotal $taxTotal
     * @return self
     */
    public function addToTaxTotal(TaxTotal $taxTotal): self
    {
        $this->taxTotal[] = $taxTotal;

        return $this;
    }

    /**
     * @return TaxTotal
     */
    public function addToTaxTotalWithCreate(): TaxTotal
    {
        $this->addTotaxTotal($taxTotal = new TaxTotal());

        return $taxTotal;
    }

    /**
     * @param TaxTotal $taxTotal
     * @return self
     */
    public function addOnceToTaxTotal(TaxTotal $taxTotal): self
    {
        if (!is_array($this->taxTotal)) {
            $this->taxTotal = [];
        }

        $this->taxTotal[0] = $taxTotal;

        return $this;
    }

    /**
     * @return TaxTotal
     */
    public function addOnceToTaxTotalWithCreate(): TaxTotal
    {
        if (!is_array($this->taxTotal)) {
            $this->taxTotal = [];
        }

        if ($this->taxTotal === []) {
            $this->addOnceTotaxTotal(new TaxTotal());
        }

        return $this->taxTotal[0];
    }

    /**
     * @return ItemPriceExtension|null
     */
    public function getItemPriceExtension(): ?ItemPriceExtension
    {
        return $this->itemPriceExtension;
    }

    /**
     * @return ItemPriceExtension
     */
    public function getItemPriceExtensionWithCreate(): ItemPriceExtension
    {
        $this->itemPriceExtension = is_null($this->itemPriceExtension) ? new ItemPriceExtension() : $this->itemPriceExtension;

        return $this->itemPriceExtension;
    }

    /**
     * @param ItemPriceExtension|null $itemPriceExtension
     * @return self
     */
    public function setItemPriceExtension(?ItemPriceExtension $itemPriceExtension = null): self
    {
        $this->itemPriceExtension = $itemPriceExtension;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetItemPriceExtension(): self
    {
        $this->itemPriceExtension = null;

        return $this;
    }

    /**
     * @return array<LineReference>|null
     */
    public function getLineReference(): ?array
    {
        return $this->lineReference;
    }

    /**
     * @param array<LineReference>|null $lineReference
     * @return self
     */
    public function setLineReference(?array $lineReference = null): self
    {
        $this->lineReference = $lineReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLineReference(): self
    {
        $this->lineReference = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearLineReference(): self
    {
        $this->lineReference = [];

        return $this;
    }

    /**
     * @return LineReference|null
     */
    public function firstLineReference(): ?LineReference
    {
        $lineReference = $this->lineReference ?? [];
        $lineReference = reset($lineReference);

        if ($lineReference === false) {
            return null;
        }

        return $lineReference;
    }

    /**
     * @return LineReference|null
     */
    public function lastLineReference(): ?LineReference
    {
        $lineReference = $this->lineReference ?? [];
        $lineReference = end($lineReference);

        if ($lineReference === false) {
            return null;
        }

        return $lineReference;
    }

    /**
     * @param LineReference $lineReference
     * @return self
     */
    public function addToLineReference(LineReference $lineReference): self
    {
        $this->lineReference[] = $lineReference;

        return $this;
    }

    /**
     * @return LineReference
     */
    public function addToLineReferenceWithCreate(): LineReference
    {
        $this->addTolineReference($lineReference = new LineReference());

        return $lineReference;
    }

    /**
     * @param LineReference $lineReference
     * @return self
     */
    public function addOnceToLineReference(LineReference $lineReference): self
    {
        if (!is_array($this->lineReference)) {
            $this->lineReference = [];
        }

        $this->lineReference[0] = $lineReference;

        return $this;
    }

    /**
     * @return LineReference
     */
    public function addOnceToLineReferenceWithCreate(): LineReference
    {
        if (!is_array($this->lineReference)) {
            $this->lineReference = [];
        }

        if ($this->lineReference === []) {
            $this->addOnceTolineReference(new LineReference());
        }

        return $this->lineReference[0];
    }
}
