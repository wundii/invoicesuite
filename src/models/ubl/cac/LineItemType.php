<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\ubl\cbc\AccountingCost;
use horstoeko\invoicesuite\models\ubl\cbc\AccountingCostCode;
use horstoeko\invoicesuite\models\ubl\cbc\ID;
use horstoeko\invoicesuite\models\ubl\cbc\InspectionMethodCode;
use horstoeko\invoicesuite\models\ubl\cbc\LineExtensionAmount;
use horstoeko\invoicesuite\models\ubl\cbc\LineStatusCode;
use horstoeko\invoicesuite\models\ubl\cbc\MaximumBackorderQuantity;
use horstoeko\invoicesuite\models\ubl\cbc\MaximumQuantity;
use horstoeko\invoicesuite\models\ubl\cbc\MinimumBackorderQuantity;
use horstoeko\invoicesuite\models\ubl\cbc\MinimumQuantity;
use horstoeko\invoicesuite\models\ubl\cbc\Note;
use horstoeko\invoicesuite\models\ubl\cbc\Quantity;
use horstoeko\invoicesuite\models\ubl\cbc\SalesOrderID;
use horstoeko\invoicesuite\models\ubl\cbc\TotalTaxAmount;
use horstoeko\invoicesuite\models\ubl\cbc\UUID;
use horstoeko\invoicesuite\models\ubl\cbc\WarrantyInformation;

class LineItemType
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
     * @var \horstoeko\invoicesuite\models\ubl\cbc\SalesOrderID
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\SalesOrderID")
     * @JMS\Expose
     * @JMS\SerializedName("SalesOrderID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSalesOrderID", setter="setSalesOrderID")
     */
    private $salesOrderID;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\UUID
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\UUID")
     * @JMS\Expose
     * @JMS\SerializedName("UUID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getUUID", setter="setUUID")
     */
    private $uUID;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\Note>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\Note>")
     * @JMS\Expose
     * @JMS\SerializedName("Note")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Note", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getNote", setter="setNote")
     */
    private $note;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\LineStatusCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\LineStatusCode")
     * @JMS\Expose
     * @JMS\SerializedName("LineStatusCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLineStatusCode", setter="setLineStatusCode")
     */
    private $lineStatusCode;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\Quantity
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\Quantity")
     * @JMS\Expose
     * @JMS\SerializedName("Quantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getQuantity", setter="setQuantity")
     */
    private $quantity;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\LineExtensionAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\LineExtensionAmount")
     * @JMS\Expose
     * @JMS\SerializedName("LineExtensionAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLineExtensionAmount", setter="setLineExtensionAmount")
     */
    private $lineExtensionAmount;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\TotalTaxAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\TotalTaxAmount")
     * @JMS\Expose
     * @JMS\SerializedName("TotalTaxAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTotalTaxAmount", setter="setTotalTaxAmount")
     */
    private $totalTaxAmount;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\MinimumQuantity
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\MinimumQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("MinimumQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMinimumQuantity", setter="setMinimumQuantity")
     */
    private $minimumQuantity;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\MaximumQuantity
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\MaximumQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("MaximumQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMaximumQuantity", setter="setMaximumQuantity")
     */
    private $maximumQuantity;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\MinimumBackorderQuantity
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\MinimumBackorderQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("MinimumBackorderQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMinimumBackorderQuantity", setter="setMinimumBackorderQuantity")
     */
    private $minimumBackorderQuantity;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\MaximumBackorderQuantity
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\MaximumBackorderQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("MaximumBackorderQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMaximumBackorderQuantity", setter="setMaximumBackorderQuantity")
     */
    private $maximumBackorderQuantity;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\InspectionMethodCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\InspectionMethodCode")
     * @JMS\Expose
     * @JMS\SerializedName("InspectionMethodCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getInspectionMethodCode", setter="setInspectionMethodCode")
     */
    private $inspectionMethodCode;

    /**
     * @var bool
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("PartialDeliveryIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPartialDeliveryIndicator", setter="setPartialDeliveryIndicator")
     */
    private $partialDeliveryIndicator;

    /**
     * @var bool
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("BackOrderAllowedIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getBackOrderAllowedIndicator", setter="setBackOrderAllowedIndicator")
     */
    private $backOrderAllowedIndicator;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\AccountingCostCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\AccountingCostCode")
     * @JMS\Expose
     * @JMS\SerializedName("AccountingCostCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAccountingCostCode", setter="setAccountingCostCode")
     */
    private $accountingCostCode;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\AccountingCost
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\AccountingCost")
     * @JMS\Expose
     * @JMS\SerializedName("AccountingCost")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAccountingCost", setter="setAccountingCost")
     */
    private $accountingCost;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\WarrantyInformation>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\WarrantyInformation>")
     * @JMS\Expose
     * @JMS\SerializedName("WarrantyInformation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="WarrantyInformation", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getWarrantyInformation", setter="setWarrantyInformation")
     */
    private $warrantyInformation;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\Delivery>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\Delivery>")
     * @JMS\Expose
     * @JMS\SerializedName("Delivery")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Delivery", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getDelivery", setter="setDelivery")
     */
    private $delivery;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\DeliveryTerms
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\DeliveryTerms")
     * @JMS\Expose
     * @JMS\SerializedName("DeliveryTerms")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDeliveryTerms", setter="setDeliveryTerms")
     */
    private $deliveryTerms;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\OriginatorParty
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\OriginatorParty")
     * @JMS\Expose
     * @JMS\SerializedName("OriginatorParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOriginatorParty", setter="setOriginatorParty")
     */
    private $originatorParty;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\OrderedShipment>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\OrderedShipment>")
     * @JMS\Expose
     * @JMS\SerializedName("OrderedShipment")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="OrderedShipment", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getOrderedShipment", setter="setOrderedShipment")
     */
    private $orderedShipment;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\PricingReference
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\PricingReference")
     * @JMS\Expose
     * @JMS\SerializedName("PricingReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPricingReference", setter="setPricingReference")
     */
    private $pricingReference;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\AllowanceCharge>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\AllowanceCharge>")
     * @JMS\Expose
     * @JMS\SerializedName("AllowanceCharge")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="AllowanceCharge", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getAllowanceCharge", setter="setAllowanceCharge")
     */
    private $allowanceCharge;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\Price
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\Price")
     * @JMS\Expose
     * @JMS\SerializedName("Price")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPrice", setter="setPrice")
     */
    private $price;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\Item
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\Item")
     * @JMS\Expose
     * @JMS\SerializedName("Item")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getItem", setter="setItem")
     */
    private $item;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\SubLineItem>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\SubLineItem>")
     * @JMS\Expose
     * @JMS\SerializedName("SubLineItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SubLineItem", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSubLineItem", setter="setSubLineItem")
     */
    private $subLineItem;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\WarrantyValidityPeriod
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\WarrantyValidityPeriod")
     * @JMS\Expose
     * @JMS\SerializedName("WarrantyValidityPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getWarrantyValidityPeriod", setter="setWarrantyValidityPeriod")
     */
    private $warrantyValidityPeriod;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\WarrantyParty
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\WarrantyParty")
     * @JMS\Expose
     * @JMS\SerializedName("WarrantyParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getWarrantyParty", setter="setWarrantyParty")
     */
    private $warrantyParty;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\TaxTotal>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\TaxTotal>")
     * @JMS\Expose
     * @JMS\SerializedName("TaxTotal")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="TaxTotal", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getTaxTotal", setter="setTaxTotal")
     */
    private $taxTotal;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\ItemPriceExtension
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\ItemPriceExtension")
     * @JMS\Expose
     * @JMS\SerializedName("ItemPriceExtension")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getItemPriceExtension", setter="setItemPriceExtension")
     */
    private $itemPriceExtension;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\LineReference>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\LineReference>")
     * @JMS\Expose
     * @JMS\SerializedName("LineReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="LineReference", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getLineReference", setter="setLineReference")
     */
    private $lineReference;

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
     * @return \horstoeko\invoicesuite\models\ubl\cbc\SalesOrderID|null
     */
    public function getSalesOrderID(): ?SalesOrderID
    {
        return $this->salesOrderID;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\SalesOrderID
     */
    public function getSalesOrderIDWithCreate(): SalesOrderID
    {
        $this->salesOrderID = is_null($this->salesOrderID) ? new SalesOrderID() : $this->salesOrderID;

        return $this->salesOrderID;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\SalesOrderID $salesOrderID
     * @return self
     */
    public function setSalesOrderID(SalesOrderID $salesOrderID): self
    {
        $this->salesOrderID = $salesOrderID;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\UUID|null
     */
    public function getUUID(): ?UUID
    {
        return $this->uUID;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\UUID
     */
    public function getUUIDWithCreate(): UUID
    {
        $this->uUID = is_null($this->uUID) ? new UUID() : $this->uUID;

        return $this->uUID;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\UUID $uUID
     * @return self
     */
    public function setUUID(UUID $uUID): self
    {
        $this->uUID = $uUID;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\Note>|null
     */
    public function getNote(): ?array
    {
        return $this->note;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\Note> $note
     * @return self
     */
    public function setNote(array $note): self
    {
        $this->note = $note;

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
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Note $note
     * @return self
     */
    public function addToNote(Note $note): self
    {
        $this->note[] = $note;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Note
     */
    public function addToNoteWithCreate(): Note
    {
        $this->addTonote($note = new Note());

        return $note;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Note $note
     * @return self
     */
    public function addOnceToNote(Note $note): self
    {
        $this->note[0] = $note;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Note
     */
    public function addOnceToNoteWithCreate(): Note
    {
        if ($this->note === []) {
            $this->addOnceTonote(new Note());
        }

        return $this->note[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\LineStatusCode|null
     */
    public function getLineStatusCode(): ?LineStatusCode
    {
        return $this->lineStatusCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\LineStatusCode
     */
    public function getLineStatusCodeWithCreate(): LineStatusCode
    {
        $this->lineStatusCode = is_null($this->lineStatusCode) ? new LineStatusCode() : $this->lineStatusCode;

        return $this->lineStatusCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\LineStatusCode $lineStatusCode
     * @return self
     */
    public function setLineStatusCode(LineStatusCode $lineStatusCode): self
    {
        $this->lineStatusCode = $lineStatusCode;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Quantity|null
     */
    public function getQuantity(): ?Quantity
    {
        return $this->quantity;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Quantity
     */
    public function getQuantityWithCreate(): Quantity
    {
        $this->quantity = is_null($this->quantity) ? new Quantity() : $this->quantity;

        return $this->quantity;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Quantity $quantity
     * @return self
     */
    public function setQuantity(Quantity $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\LineExtensionAmount|null
     */
    public function getLineExtensionAmount(): ?LineExtensionAmount
    {
        return $this->lineExtensionAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\LineExtensionAmount
     */
    public function getLineExtensionAmountWithCreate(): LineExtensionAmount
    {
        $this->lineExtensionAmount = is_null($this->lineExtensionAmount) ? new LineExtensionAmount() : $this->lineExtensionAmount;

        return $this->lineExtensionAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\LineExtensionAmount $lineExtensionAmount
     * @return self
     */
    public function setLineExtensionAmount(LineExtensionAmount $lineExtensionAmount): self
    {
        $this->lineExtensionAmount = $lineExtensionAmount;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\TotalTaxAmount|null
     */
    public function getTotalTaxAmount(): ?TotalTaxAmount
    {
        return $this->totalTaxAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\TotalTaxAmount
     */
    public function getTotalTaxAmountWithCreate(): TotalTaxAmount
    {
        $this->totalTaxAmount = is_null($this->totalTaxAmount) ? new TotalTaxAmount() : $this->totalTaxAmount;

        return $this->totalTaxAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\TotalTaxAmount $totalTaxAmount
     * @return self
     */
    public function setTotalTaxAmount(TotalTaxAmount $totalTaxAmount): self
    {
        $this->totalTaxAmount = $totalTaxAmount;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MinimumQuantity|null
     */
    public function getMinimumQuantity(): ?MinimumQuantity
    {
        return $this->minimumQuantity;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MinimumQuantity
     */
    public function getMinimumQuantityWithCreate(): MinimumQuantity
    {
        $this->minimumQuantity = is_null($this->minimumQuantity) ? new MinimumQuantity() : $this->minimumQuantity;

        return $this->minimumQuantity;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\MinimumQuantity $minimumQuantity
     * @return self
     */
    public function setMinimumQuantity(MinimumQuantity $minimumQuantity): self
    {
        $this->minimumQuantity = $minimumQuantity;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MaximumQuantity|null
     */
    public function getMaximumQuantity(): ?MaximumQuantity
    {
        return $this->maximumQuantity;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MaximumQuantity
     */
    public function getMaximumQuantityWithCreate(): MaximumQuantity
    {
        $this->maximumQuantity = is_null($this->maximumQuantity) ? new MaximumQuantity() : $this->maximumQuantity;

        return $this->maximumQuantity;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\MaximumQuantity $maximumQuantity
     * @return self
     */
    public function setMaximumQuantity(MaximumQuantity $maximumQuantity): self
    {
        $this->maximumQuantity = $maximumQuantity;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MinimumBackorderQuantity|null
     */
    public function getMinimumBackorderQuantity(): ?MinimumBackorderQuantity
    {
        return $this->minimumBackorderQuantity;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MinimumBackorderQuantity
     */
    public function getMinimumBackorderQuantityWithCreate(): MinimumBackorderQuantity
    {
        $this->minimumBackorderQuantity = is_null($this->minimumBackorderQuantity) ? new MinimumBackorderQuantity() : $this->minimumBackorderQuantity;

        return $this->minimumBackorderQuantity;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\MinimumBackorderQuantity $minimumBackorderQuantity
     * @return self
     */
    public function setMinimumBackorderQuantity(MinimumBackorderQuantity $minimumBackorderQuantity): self
    {
        $this->minimumBackorderQuantity = $minimumBackorderQuantity;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MaximumBackorderQuantity|null
     */
    public function getMaximumBackorderQuantity(): ?MaximumBackorderQuantity
    {
        return $this->maximumBackorderQuantity;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MaximumBackorderQuantity
     */
    public function getMaximumBackorderQuantityWithCreate(): MaximumBackorderQuantity
    {
        $this->maximumBackorderQuantity = is_null($this->maximumBackorderQuantity) ? new MaximumBackorderQuantity() : $this->maximumBackorderQuantity;

        return $this->maximumBackorderQuantity;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\MaximumBackorderQuantity $maximumBackorderQuantity
     * @return self
     */
    public function setMaximumBackorderQuantity(MaximumBackorderQuantity $maximumBackorderQuantity): self
    {
        $this->maximumBackorderQuantity = $maximumBackorderQuantity;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\InspectionMethodCode|null
     */
    public function getInspectionMethodCode(): ?InspectionMethodCode
    {
        return $this->inspectionMethodCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\InspectionMethodCode
     */
    public function getInspectionMethodCodeWithCreate(): InspectionMethodCode
    {
        $this->inspectionMethodCode = is_null($this->inspectionMethodCode) ? new InspectionMethodCode() : $this->inspectionMethodCode;

        return $this->inspectionMethodCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\InspectionMethodCode $inspectionMethodCode
     * @return self
     */
    public function setInspectionMethodCode(InspectionMethodCode $inspectionMethodCode): self
    {
        $this->inspectionMethodCode = $inspectionMethodCode;

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
     * @param bool $partialDeliveryIndicator
     * @return self
     */
    public function setPartialDeliveryIndicator(bool $partialDeliveryIndicator): self
    {
        $this->partialDeliveryIndicator = $partialDeliveryIndicator;

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
     * @param bool $backOrderAllowedIndicator
     * @return self
     */
    public function setBackOrderAllowedIndicator(bool $backOrderAllowedIndicator): self
    {
        $this->backOrderAllowedIndicator = $backOrderAllowedIndicator;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\AccountingCostCode|null
     */
    public function getAccountingCostCode(): ?AccountingCostCode
    {
        return $this->accountingCostCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\AccountingCostCode
     */
    public function getAccountingCostCodeWithCreate(): AccountingCostCode
    {
        $this->accountingCostCode = is_null($this->accountingCostCode) ? new AccountingCostCode() : $this->accountingCostCode;

        return $this->accountingCostCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\AccountingCostCode $accountingCostCode
     * @return self
     */
    public function setAccountingCostCode(AccountingCostCode $accountingCostCode): self
    {
        $this->accountingCostCode = $accountingCostCode;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\AccountingCost|null
     */
    public function getAccountingCost(): ?AccountingCost
    {
        return $this->accountingCost;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\AccountingCost
     */
    public function getAccountingCostWithCreate(): AccountingCost
    {
        $this->accountingCost = is_null($this->accountingCost) ? new AccountingCost() : $this->accountingCost;

        return $this->accountingCost;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\AccountingCost $accountingCost
     * @return self
     */
    public function setAccountingCost(AccountingCost $accountingCost): self
    {
        $this->accountingCost = $accountingCost;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\WarrantyInformation>|null
     */
    public function getWarrantyInformation(): ?array
    {
        return $this->warrantyInformation;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\WarrantyInformation> $warrantyInformation
     * @return self
     */
    public function setWarrantyInformation(array $warrantyInformation): self
    {
        $this->warrantyInformation = $warrantyInformation;

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
     * @param \horstoeko\invoicesuite\models\ubl\cbc\WarrantyInformation $warrantyInformation
     * @return self
     */
    public function addToWarrantyInformation(WarrantyInformation $warrantyInformation): self
    {
        $this->warrantyInformation[] = $warrantyInformation;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\WarrantyInformation
     */
    public function addToWarrantyInformationWithCreate(): WarrantyInformation
    {
        $this->addTowarrantyInformation($warrantyInformation = new WarrantyInformation());

        return $warrantyInformation;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\WarrantyInformation $warrantyInformation
     * @return self
     */
    public function addOnceToWarrantyInformation(WarrantyInformation $warrantyInformation): self
    {
        $this->warrantyInformation[0] = $warrantyInformation;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\WarrantyInformation
     */
    public function addOnceToWarrantyInformationWithCreate(): WarrantyInformation
    {
        if ($this->warrantyInformation === []) {
            $this->addOnceTowarrantyInformation(new WarrantyInformation());
        }

        return $this->warrantyInformation[0];
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\Delivery>|null
     */
    public function getDelivery(): ?array
    {
        return $this->delivery;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\Delivery> $delivery
     * @return self
     */
    public function setDelivery(array $delivery): self
    {
        $this->delivery = $delivery;

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
     * @param \horstoeko\invoicesuite\models\ubl\cac\Delivery $delivery
     * @return self
     */
    public function addToDelivery(Delivery $delivery): self
    {
        $this->delivery[] = $delivery;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Delivery
     */
    public function addToDeliveryWithCreate(): Delivery
    {
        $this->addTodelivery($delivery = new Delivery());

        return $delivery;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\Delivery $delivery
     * @return self
     */
    public function addOnceToDelivery(Delivery $delivery): self
    {
        $this->delivery[0] = $delivery;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Delivery
     */
    public function addOnceToDeliveryWithCreate(): Delivery
    {
        if ($this->delivery === []) {
            $this->addOnceTodelivery(new Delivery());
        }

        return $this->delivery[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\DeliveryTerms|null
     */
    public function getDeliveryTerms(): ?DeliveryTerms
    {
        return $this->deliveryTerms;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\DeliveryTerms
     */
    public function getDeliveryTermsWithCreate(): DeliveryTerms
    {
        $this->deliveryTerms = is_null($this->deliveryTerms) ? new DeliveryTerms() : $this->deliveryTerms;

        return $this->deliveryTerms;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\DeliveryTerms $deliveryTerms
     * @return self
     */
    public function setDeliveryTerms(DeliveryTerms $deliveryTerms): self
    {
        $this->deliveryTerms = $deliveryTerms;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\OriginatorParty|null
     */
    public function getOriginatorParty(): ?OriginatorParty
    {
        return $this->originatorParty;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\OriginatorParty
     */
    public function getOriginatorPartyWithCreate(): OriginatorParty
    {
        $this->originatorParty = is_null($this->originatorParty) ? new OriginatorParty() : $this->originatorParty;

        return $this->originatorParty;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\OriginatorParty $originatorParty
     * @return self
     */
    public function setOriginatorParty(OriginatorParty $originatorParty): self
    {
        $this->originatorParty = $originatorParty;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\OrderedShipment>|null
     */
    public function getOrderedShipment(): ?array
    {
        return $this->orderedShipment;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\OrderedShipment> $orderedShipment
     * @return self
     */
    public function setOrderedShipment(array $orderedShipment): self
    {
        $this->orderedShipment = $orderedShipment;

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
     * @param \horstoeko\invoicesuite\models\ubl\cac\OrderedShipment $orderedShipment
     * @return self
     */
    public function addToOrderedShipment(OrderedShipment $orderedShipment): self
    {
        $this->orderedShipment[] = $orderedShipment;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\OrderedShipment
     */
    public function addToOrderedShipmentWithCreate(): OrderedShipment
    {
        $this->addToorderedShipment($orderedShipment = new OrderedShipment());

        return $orderedShipment;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\OrderedShipment $orderedShipment
     * @return self
     */
    public function addOnceToOrderedShipment(OrderedShipment $orderedShipment): self
    {
        $this->orderedShipment[0] = $orderedShipment;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\OrderedShipment
     */
    public function addOnceToOrderedShipmentWithCreate(): OrderedShipment
    {
        if ($this->orderedShipment === []) {
            $this->addOnceToorderedShipment(new OrderedShipment());
        }

        return $this->orderedShipment[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\PricingReference|null
     */
    public function getPricingReference(): ?PricingReference
    {
        return $this->pricingReference;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\PricingReference
     */
    public function getPricingReferenceWithCreate(): PricingReference
    {
        $this->pricingReference = is_null($this->pricingReference) ? new PricingReference() : $this->pricingReference;

        return $this->pricingReference;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\PricingReference $pricingReference
     * @return self
     */
    public function setPricingReference(PricingReference $pricingReference): self
    {
        $this->pricingReference = $pricingReference;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\AllowanceCharge>|null
     */
    public function getAllowanceCharge(): ?array
    {
        return $this->allowanceCharge;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\AllowanceCharge> $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(array $allowanceCharge): self
    {
        $this->allowanceCharge = $allowanceCharge;

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
     * @param \horstoeko\invoicesuite\models\ubl\cac\AllowanceCharge $allowanceCharge
     * @return self
     */
    public function addToAllowanceCharge(AllowanceCharge $allowanceCharge): self
    {
        $this->allowanceCharge[] = $allowanceCharge;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\AllowanceCharge
     */
    public function addToAllowanceChargeWithCreate(): AllowanceCharge
    {
        $this->addToallowanceCharge($allowanceCharge = new AllowanceCharge());

        return $allowanceCharge;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\AllowanceCharge $allowanceCharge
     * @return self
     */
    public function addOnceToAllowanceCharge(AllowanceCharge $allowanceCharge): self
    {
        $this->allowanceCharge[0] = $allowanceCharge;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\AllowanceCharge
     */
    public function addOnceToAllowanceChargeWithCreate(): AllowanceCharge
    {
        if ($this->allowanceCharge === []) {
            $this->addOnceToallowanceCharge(new AllowanceCharge());
        }

        return $this->allowanceCharge[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Price|null
     */
    public function getPrice(): ?Price
    {
        return $this->price;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Price
     */
    public function getPriceWithCreate(): Price
    {
        $this->price = is_null($this->price) ? new Price() : $this->price;

        return $this->price;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\Price $price
     * @return self
     */
    public function setPrice(Price $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Item|null
     */
    public function getItem(): ?Item
    {
        return $this->item;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Item
     */
    public function getItemWithCreate(): Item
    {
        $this->item = is_null($this->item) ? new Item() : $this->item;

        return $this->item;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\Item $item
     * @return self
     */
    public function setItem(Item $item): self
    {
        $this->item = $item;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\SubLineItem>|null
     */
    public function getSubLineItem(): ?array
    {
        return $this->subLineItem;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\SubLineItem> $subLineItem
     * @return self
     */
    public function setSubLineItem(array $subLineItem): self
    {
        $this->subLineItem = $subLineItem;

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
     * @param \horstoeko\invoicesuite\models\ubl\cac\SubLineItem $subLineItem
     * @return self
     */
    public function addToSubLineItem(SubLineItem $subLineItem): self
    {
        $this->subLineItem[] = $subLineItem;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\SubLineItem
     */
    public function addToSubLineItemWithCreate(): SubLineItem
    {
        $this->addTosubLineItem($subLineItem = new SubLineItem());

        return $subLineItem;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\SubLineItem $subLineItem
     * @return self
     */
    public function addOnceToSubLineItem(SubLineItem $subLineItem): self
    {
        $this->subLineItem[0] = $subLineItem;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\SubLineItem
     */
    public function addOnceToSubLineItemWithCreate(): SubLineItem
    {
        if ($this->subLineItem === []) {
            $this->addOnceTosubLineItem(new SubLineItem());
        }

        return $this->subLineItem[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\WarrantyValidityPeriod|null
     */
    public function getWarrantyValidityPeriod(): ?WarrantyValidityPeriod
    {
        return $this->warrantyValidityPeriod;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\WarrantyValidityPeriod
     */
    public function getWarrantyValidityPeriodWithCreate(): WarrantyValidityPeriod
    {
        $this->warrantyValidityPeriod = is_null($this->warrantyValidityPeriod) ? new WarrantyValidityPeriod() : $this->warrantyValidityPeriod;

        return $this->warrantyValidityPeriod;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\WarrantyValidityPeriod $warrantyValidityPeriod
     * @return self
     */
    public function setWarrantyValidityPeriod(WarrantyValidityPeriod $warrantyValidityPeriod): self
    {
        $this->warrantyValidityPeriod = $warrantyValidityPeriod;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\WarrantyParty|null
     */
    public function getWarrantyParty(): ?WarrantyParty
    {
        return $this->warrantyParty;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\WarrantyParty
     */
    public function getWarrantyPartyWithCreate(): WarrantyParty
    {
        $this->warrantyParty = is_null($this->warrantyParty) ? new WarrantyParty() : $this->warrantyParty;

        return $this->warrantyParty;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\WarrantyParty $warrantyParty
     * @return self
     */
    public function setWarrantyParty(WarrantyParty $warrantyParty): self
    {
        $this->warrantyParty = $warrantyParty;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\TaxTotal>|null
     */
    public function getTaxTotal(): ?array
    {
        return $this->taxTotal;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\TaxTotal> $taxTotal
     * @return self
     */
    public function setTaxTotal(array $taxTotal): self
    {
        $this->taxTotal = $taxTotal;

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
     * @param \horstoeko\invoicesuite\models\ubl\cac\TaxTotal $taxTotal
     * @return self
     */
    public function addToTaxTotal(TaxTotal $taxTotal): self
    {
        $this->taxTotal[] = $taxTotal;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\TaxTotal
     */
    public function addToTaxTotalWithCreate(): TaxTotal
    {
        $this->addTotaxTotal($taxTotal = new TaxTotal());

        return $taxTotal;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\TaxTotal $taxTotal
     * @return self
     */
    public function addOnceToTaxTotal(TaxTotal $taxTotal): self
    {
        $this->taxTotal[0] = $taxTotal;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\TaxTotal
     */
    public function addOnceToTaxTotalWithCreate(): TaxTotal
    {
        if ($this->taxTotal === []) {
            $this->addOnceTotaxTotal(new TaxTotal());
        }

        return $this->taxTotal[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ItemPriceExtension|null
     */
    public function getItemPriceExtension(): ?ItemPriceExtension
    {
        return $this->itemPriceExtension;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ItemPriceExtension
     */
    public function getItemPriceExtensionWithCreate(): ItemPriceExtension
    {
        $this->itemPriceExtension = is_null($this->itemPriceExtension) ? new ItemPriceExtension() : $this->itemPriceExtension;

        return $this->itemPriceExtension;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\ItemPriceExtension $itemPriceExtension
     * @return self
     */
    public function setItemPriceExtension(ItemPriceExtension $itemPriceExtension): self
    {
        $this->itemPriceExtension = $itemPriceExtension;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\LineReference>|null
     */
    public function getLineReference(): ?array
    {
        return $this->lineReference;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\LineReference> $lineReference
     * @return self
     */
    public function setLineReference(array $lineReference): self
    {
        $this->lineReference = $lineReference;

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
     * @param \horstoeko\invoicesuite\models\ubl\cac\LineReference $lineReference
     * @return self
     */
    public function addToLineReference(LineReference $lineReference): self
    {
        $this->lineReference[] = $lineReference;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\LineReference
     */
    public function addToLineReferenceWithCreate(): LineReference
    {
        $this->addTolineReference($lineReference = new LineReference());

        return $lineReference;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\LineReference $lineReference
     * @return self
     */
    public function addOnceToLineReference(LineReference $lineReference): self
    {
        $this->lineReference[0] = $lineReference;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\LineReference
     */
    public function addOnceToLineReferenceWithCreate(): LineReference
    {
        if ($this->lineReference === []) {
            $this->addOnceTolineReference(new LineReference());
        }

        return $this->lineReference[0];
    }
}
