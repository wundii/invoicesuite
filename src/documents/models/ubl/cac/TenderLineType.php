<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ContentUnitQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LineExtensionAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumOrderQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumOrderQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Note;
use horstoeko\invoicesuite\documents\models\ubl\cbc\OrderQuantityIncrementNumeric;
use horstoeko\invoicesuite\documents\models\ubl\cbc\OrderableUnit;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PackLevelCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Quantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TotalTaxAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\WarrantyInformation;

class TenderLineType
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
     * @var OrderableUnit|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\OrderableUnit")
     * @JMS\Expose
     * @JMS\SerializedName("OrderableUnit")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOrderableUnit", setter="setOrderableUnit")
     */
    private $orderableUnit;

    /**
     * @var ContentUnitQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ContentUnitQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("ContentUnitQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getContentUnitQuantity", setter="setContentUnitQuantity")
     */
    private $contentUnitQuantity;

    /**
     * @var OrderQuantityIncrementNumeric|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\OrderQuantityIncrementNumeric")
     * @JMS\Expose
     * @JMS\SerializedName("OrderQuantityIncrementNumeric")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOrderQuantityIncrementNumeric", setter="setOrderQuantityIncrementNumeric")
     */
    private $orderQuantityIncrementNumeric;

    /**
     * @var MinimumOrderQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumOrderQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("MinimumOrderQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMinimumOrderQuantity", setter="setMinimumOrderQuantity")
     */
    private $minimumOrderQuantity;

    /**
     * @var MaximumOrderQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumOrderQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("MaximumOrderQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMaximumOrderQuantity", setter="setMaximumOrderQuantity")
     */
    private $maximumOrderQuantity;

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
     * @var PackLevelCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PackLevelCode")
     * @JMS\Expose
     * @JMS\SerializedName("PackLevelCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPackLevelCode", setter="setPackLevelCode")
     */
    private $packLevelCode;

    /**
     * @var array<DocumentReference>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\DocumentReference>")
     * @JMS\Expose
     * @JMS\SerializedName("DocumentReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="DocumentReference", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getDocumentReference", setter="setDocumentReference")
     */
    private $documentReference;

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
     * @var array<OfferedItemLocationQuantity>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\OfferedItemLocationQuantity>")
     * @JMS\Expose
     * @JMS\SerializedName("OfferedItemLocationQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="OfferedItemLocationQuantity", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getOfferedItemLocationQuantity", setter="setOfferedItemLocationQuantity")
     */
    private $offeredItemLocationQuantity;

    /**
     * @var array<ReplacementRelatedItem>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ReplacementRelatedItem>")
     * @JMS\Expose
     * @JMS\SerializedName("ReplacementRelatedItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ReplacementRelatedItem", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getReplacementRelatedItem", setter="setReplacementRelatedItem")
     */
    private $replacementRelatedItem;

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
     * @var array<SubTenderLine>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\SubTenderLine>")
     * @JMS\Expose
     * @JMS\SerializedName("SubTenderLine")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SubTenderLine", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSubTenderLine", setter="setSubTenderLine")
     */
    private $subTenderLine;

    /**
     * @var CallForTendersLineReference|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\CallForTendersLineReference")
     * @JMS\Expose
     * @JMS\SerializedName("CallForTendersLineReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCallForTendersLineReference", setter="setCallForTendersLineReference")
     */
    private $callForTendersLineReference;

    /**
     * @var CallForTendersDocumentReference|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\CallForTendersDocumentReference")
     * @JMS\Expose
     * @JMS\SerializedName("CallForTendersDocumentReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCallForTendersDocumentReference", setter="setCallForTendersDocumentReference")
     */
    private $callForTendersDocumentReference;

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
     * @return OrderableUnit|null
     */
    public function getOrderableUnit(): ?OrderableUnit
    {
        return $this->orderableUnit;
    }

    /**
     * @return OrderableUnit
     */
    public function getOrderableUnitWithCreate(): OrderableUnit
    {
        $this->orderableUnit = is_null($this->orderableUnit) ? new OrderableUnit() : $this->orderableUnit;

        return $this->orderableUnit;
    }

    /**
     * @param OrderableUnit|null $orderableUnit
     * @return self
     */
    public function setOrderableUnit(?OrderableUnit $orderableUnit = null): self
    {
        $this->orderableUnit = $orderableUnit;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetOrderableUnit(): self
    {
        $this->orderableUnit = null;

        return $this;
    }

    /**
     * @return ContentUnitQuantity|null
     */
    public function getContentUnitQuantity(): ?ContentUnitQuantity
    {
        return $this->contentUnitQuantity;
    }

    /**
     * @return ContentUnitQuantity
     */
    public function getContentUnitQuantityWithCreate(): ContentUnitQuantity
    {
        $this->contentUnitQuantity = is_null($this->contentUnitQuantity) ? new ContentUnitQuantity() : $this->contentUnitQuantity;

        return $this->contentUnitQuantity;
    }

    /**
     * @param ContentUnitQuantity|null $contentUnitQuantity
     * @return self
     */
    public function setContentUnitQuantity(?ContentUnitQuantity $contentUnitQuantity = null): self
    {
        $this->contentUnitQuantity = $contentUnitQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetContentUnitQuantity(): self
    {
        $this->contentUnitQuantity = null;

        return $this;
    }

    /**
     * @return OrderQuantityIncrementNumeric|null
     */
    public function getOrderQuantityIncrementNumeric(): ?OrderQuantityIncrementNumeric
    {
        return $this->orderQuantityIncrementNumeric;
    }

    /**
     * @return OrderQuantityIncrementNumeric
     */
    public function getOrderQuantityIncrementNumericWithCreate(): OrderQuantityIncrementNumeric
    {
        $this->orderQuantityIncrementNumeric = is_null($this->orderQuantityIncrementNumeric) ? new OrderQuantityIncrementNumeric() : $this->orderQuantityIncrementNumeric;

        return $this->orderQuantityIncrementNumeric;
    }

    /**
     * @param OrderQuantityIncrementNumeric|null $orderQuantityIncrementNumeric
     * @return self
     */
    public function setOrderQuantityIncrementNumeric(
        ?OrderQuantityIncrementNumeric $orderQuantityIncrementNumeric = null,
    ): self {
        $this->orderQuantityIncrementNumeric = $orderQuantityIncrementNumeric;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetOrderQuantityIncrementNumeric(): self
    {
        $this->orderQuantityIncrementNumeric = null;

        return $this;
    }

    /**
     * @return MinimumOrderQuantity|null
     */
    public function getMinimumOrderQuantity(): ?MinimumOrderQuantity
    {
        return $this->minimumOrderQuantity;
    }

    /**
     * @return MinimumOrderQuantity
     */
    public function getMinimumOrderQuantityWithCreate(): MinimumOrderQuantity
    {
        $this->minimumOrderQuantity = is_null($this->minimumOrderQuantity) ? new MinimumOrderQuantity() : $this->minimumOrderQuantity;

        return $this->minimumOrderQuantity;
    }

    /**
     * @param MinimumOrderQuantity|null $minimumOrderQuantity
     * @return self
     */
    public function setMinimumOrderQuantity(?MinimumOrderQuantity $minimumOrderQuantity = null): self
    {
        $this->minimumOrderQuantity = $minimumOrderQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMinimumOrderQuantity(): self
    {
        $this->minimumOrderQuantity = null;

        return $this;
    }

    /**
     * @return MaximumOrderQuantity|null
     */
    public function getMaximumOrderQuantity(): ?MaximumOrderQuantity
    {
        return $this->maximumOrderQuantity;
    }

    /**
     * @return MaximumOrderQuantity
     */
    public function getMaximumOrderQuantityWithCreate(): MaximumOrderQuantity
    {
        $this->maximumOrderQuantity = is_null($this->maximumOrderQuantity) ? new MaximumOrderQuantity() : $this->maximumOrderQuantity;

        return $this->maximumOrderQuantity;
    }

    /**
     * @param MaximumOrderQuantity|null $maximumOrderQuantity
     * @return self
     */
    public function setMaximumOrderQuantity(?MaximumOrderQuantity $maximumOrderQuantity = null): self
    {
        $this->maximumOrderQuantity = $maximumOrderQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMaximumOrderQuantity(): self
    {
        $this->maximumOrderQuantity = null;

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
     * @return PackLevelCode|null
     */
    public function getPackLevelCode(): ?PackLevelCode
    {
        return $this->packLevelCode;
    }

    /**
     * @return PackLevelCode
     */
    public function getPackLevelCodeWithCreate(): PackLevelCode
    {
        $this->packLevelCode = is_null($this->packLevelCode) ? new PackLevelCode() : $this->packLevelCode;

        return $this->packLevelCode;
    }

    /**
     * @param PackLevelCode|null $packLevelCode
     * @return self
     */
    public function setPackLevelCode(?PackLevelCode $packLevelCode = null): self
    {
        $this->packLevelCode = $packLevelCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPackLevelCode(): self
    {
        $this->packLevelCode = null;

        return $this;
    }

    /**
     * @return array<DocumentReference>|null
     */
    public function getDocumentReference(): ?array
    {
        return $this->documentReference;
    }

    /**
     * @param array<DocumentReference>|null $documentReference
     * @return self
     */
    public function setDocumentReference(?array $documentReference = null): self
    {
        $this->documentReference = $documentReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDocumentReference(): self
    {
        $this->documentReference = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearDocumentReference(): self
    {
        $this->documentReference = [];

        return $this;
    }

    /**
     * @return DocumentReference|null
     */
    public function firstDocumentReference(): ?DocumentReference
    {
        $documentReference = $this->documentReference ?? [];
        $documentReference = reset($documentReference);

        if ($documentReference === false) {
            return null;
        }

        return $documentReference;
    }

    /**
     * @return DocumentReference|null
     */
    public function lastDocumentReference(): ?DocumentReference
    {
        $documentReference = $this->documentReference ?? [];
        $documentReference = end($documentReference);

        if ($documentReference === false) {
            return null;
        }

        return $documentReference;
    }

    /**
     * @param DocumentReference $documentReference
     * @return self
     */
    public function addToDocumentReference(DocumentReference $documentReference): self
    {
        $this->documentReference[] = $documentReference;

        return $this;
    }

    /**
     * @return DocumentReference
     */
    public function addToDocumentReferenceWithCreate(): DocumentReference
    {
        $this->addTodocumentReference($documentReference = new DocumentReference());

        return $documentReference;
    }

    /**
     * @param DocumentReference $documentReference
     * @return self
     */
    public function addOnceToDocumentReference(DocumentReference $documentReference): self
    {
        if (!is_array($this->documentReference)) {
            $this->documentReference = [];
        }

        $this->documentReference[0] = $documentReference;

        return $this;
    }

    /**
     * @return DocumentReference
     */
    public function addOnceToDocumentReferenceWithCreate(): DocumentReference
    {
        if (!is_array($this->documentReference)) {
            $this->documentReference = [];
        }

        if ($this->documentReference === []) {
            $this->addOnceTodocumentReference(new DocumentReference());
        }

        return $this->documentReference[0];
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
     * @return array<OfferedItemLocationQuantity>|null
     */
    public function getOfferedItemLocationQuantity(): ?array
    {
        return $this->offeredItemLocationQuantity;
    }

    /**
     * @param array<OfferedItemLocationQuantity>|null $offeredItemLocationQuantity
     * @return self
     */
    public function setOfferedItemLocationQuantity(?array $offeredItemLocationQuantity = null): self
    {
        $this->offeredItemLocationQuantity = $offeredItemLocationQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetOfferedItemLocationQuantity(): self
    {
        $this->offeredItemLocationQuantity = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearOfferedItemLocationQuantity(): self
    {
        $this->offeredItemLocationQuantity = [];

        return $this;
    }

    /**
     * @return OfferedItemLocationQuantity|null
     */
    public function firstOfferedItemLocationQuantity(): ?OfferedItemLocationQuantity
    {
        $offeredItemLocationQuantity = $this->offeredItemLocationQuantity ?? [];
        $offeredItemLocationQuantity = reset($offeredItemLocationQuantity);

        if ($offeredItemLocationQuantity === false) {
            return null;
        }

        return $offeredItemLocationQuantity;
    }

    /**
     * @return OfferedItemLocationQuantity|null
     */
    public function lastOfferedItemLocationQuantity(): ?OfferedItemLocationQuantity
    {
        $offeredItemLocationQuantity = $this->offeredItemLocationQuantity ?? [];
        $offeredItemLocationQuantity = end($offeredItemLocationQuantity);

        if ($offeredItemLocationQuantity === false) {
            return null;
        }

        return $offeredItemLocationQuantity;
    }

    /**
     * @param OfferedItemLocationQuantity $offeredItemLocationQuantity
     * @return self
     */
    public function addToOfferedItemLocationQuantity(OfferedItemLocationQuantity $offeredItemLocationQuantity): self
    {
        $this->offeredItemLocationQuantity[] = $offeredItemLocationQuantity;

        return $this;
    }

    /**
     * @return OfferedItemLocationQuantity
     */
    public function addToOfferedItemLocationQuantityWithCreate(): OfferedItemLocationQuantity
    {
        $this->addToofferedItemLocationQuantity($offeredItemLocationQuantity = new OfferedItemLocationQuantity());

        return $offeredItemLocationQuantity;
    }

    /**
     * @param OfferedItemLocationQuantity $offeredItemLocationQuantity
     * @return self
     */
    public function addOnceToOfferedItemLocationQuantity(
        OfferedItemLocationQuantity $offeredItemLocationQuantity,
    ): self {
        if (!is_array($this->offeredItemLocationQuantity)) {
            $this->offeredItemLocationQuantity = [];
        }

        $this->offeredItemLocationQuantity[0] = $offeredItemLocationQuantity;

        return $this;
    }

    /**
     * @return OfferedItemLocationQuantity
     */
    public function addOnceToOfferedItemLocationQuantityWithCreate(): OfferedItemLocationQuantity
    {
        if (!is_array($this->offeredItemLocationQuantity)) {
            $this->offeredItemLocationQuantity = [];
        }

        if ($this->offeredItemLocationQuantity === []) {
            $this->addOnceToofferedItemLocationQuantity(new OfferedItemLocationQuantity());
        }

        return $this->offeredItemLocationQuantity[0];
    }

    /**
     * @return array<ReplacementRelatedItem>|null
     */
    public function getReplacementRelatedItem(): ?array
    {
        return $this->replacementRelatedItem;
    }

    /**
     * @param array<ReplacementRelatedItem>|null $replacementRelatedItem
     * @return self
     */
    public function setReplacementRelatedItem(?array $replacementRelatedItem = null): self
    {
        $this->replacementRelatedItem = $replacementRelatedItem;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetReplacementRelatedItem(): self
    {
        $this->replacementRelatedItem = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearReplacementRelatedItem(): self
    {
        $this->replacementRelatedItem = [];

        return $this;
    }

    /**
     * @return ReplacementRelatedItem|null
     */
    public function firstReplacementRelatedItem(): ?ReplacementRelatedItem
    {
        $replacementRelatedItem = $this->replacementRelatedItem ?? [];
        $replacementRelatedItem = reset($replacementRelatedItem);

        if ($replacementRelatedItem === false) {
            return null;
        }

        return $replacementRelatedItem;
    }

    /**
     * @return ReplacementRelatedItem|null
     */
    public function lastReplacementRelatedItem(): ?ReplacementRelatedItem
    {
        $replacementRelatedItem = $this->replacementRelatedItem ?? [];
        $replacementRelatedItem = end($replacementRelatedItem);

        if ($replacementRelatedItem === false) {
            return null;
        }

        return $replacementRelatedItem;
    }

    /**
     * @param ReplacementRelatedItem $replacementRelatedItem
     * @return self
     */
    public function addToReplacementRelatedItem(ReplacementRelatedItem $replacementRelatedItem): self
    {
        $this->replacementRelatedItem[] = $replacementRelatedItem;

        return $this;
    }

    /**
     * @return ReplacementRelatedItem
     */
    public function addToReplacementRelatedItemWithCreate(): ReplacementRelatedItem
    {
        $this->addToreplacementRelatedItem($replacementRelatedItem = new ReplacementRelatedItem());

        return $replacementRelatedItem;
    }

    /**
     * @param ReplacementRelatedItem $replacementRelatedItem
     * @return self
     */
    public function addOnceToReplacementRelatedItem(ReplacementRelatedItem $replacementRelatedItem): self
    {
        if (!is_array($this->replacementRelatedItem)) {
            $this->replacementRelatedItem = [];
        }

        $this->replacementRelatedItem[0] = $replacementRelatedItem;

        return $this;
    }

    /**
     * @return ReplacementRelatedItem
     */
    public function addOnceToReplacementRelatedItemWithCreate(): ReplacementRelatedItem
    {
        if (!is_array($this->replacementRelatedItem)) {
            $this->replacementRelatedItem = [];
        }

        if ($this->replacementRelatedItem === []) {
            $this->addOnceToreplacementRelatedItem(new ReplacementRelatedItem());
        }

        return $this->replacementRelatedItem[0];
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
     * @return array<SubTenderLine>|null
     */
    public function getSubTenderLine(): ?array
    {
        return $this->subTenderLine;
    }

    /**
     * @param array<SubTenderLine>|null $subTenderLine
     * @return self
     */
    public function setSubTenderLine(?array $subTenderLine = null): self
    {
        $this->subTenderLine = $subTenderLine;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSubTenderLine(): self
    {
        $this->subTenderLine = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearSubTenderLine(): self
    {
        $this->subTenderLine = [];

        return $this;
    }

    /**
     * @return SubTenderLine|null
     */
    public function firstSubTenderLine(): ?SubTenderLine
    {
        $subTenderLine = $this->subTenderLine ?? [];
        $subTenderLine = reset($subTenderLine);

        if ($subTenderLine === false) {
            return null;
        }

        return $subTenderLine;
    }

    /**
     * @return SubTenderLine|null
     */
    public function lastSubTenderLine(): ?SubTenderLine
    {
        $subTenderLine = $this->subTenderLine ?? [];
        $subTenderLine = end($subTenderLine);

        if ($subTenderLine === false) {
            return null;
        }

        return $subTenderLine;
    }

    /**
     * @param SubTenderLine $subTenderLine
     * @return self
     */
    public function addToSubTenderLine(SubTenderLine $subTenderLine): self
    {
        $this->subTenderLine[] = $subTenderLine;

        return $this;
    }

    /**
     * @return SubTenderLine
     */
    public function addToSubTenderLineWithCreate(): SubTenderLine
    {
        $this->addTosubTenderLine($subTenderLine = new SubTenderLine());

        return $subTenderLine;
    }

    /**
     * @param SubTenderLine $subTenderLine
     * @return self
     */
    public function addOnceToSubTenderLine(SubTenderLine $subTenderLine): self
    {
        if (!is_array($this->subTenderLine)) {
            $this->subTenderLine = [];
        }

        $this->subTenderLine[0] = $subTenderLine;

        return $this;
    }

    /**
     * @return SubTenderLine
     */
    public function addOnceToSubTenderLineWithCreate(): SubTenderLine
    {
        if (!is_array($this->subTenderLine)) {
            $this->subTenderLine = [];
        }

        if ($this->subTenderLine === []) {
            $this->addOnceTosubTenderLine(new SubTenderLine());
        }

        return $this->subTenderLine[0];
    }

    /**
     * @return CallForTendersLineReference|null
     */
    public function getCallForTendersLineReference(): ?CallForTendersLineReference
    {
        return $this->callForTendersLineReference;
    }

    /**
     * @return CallForTendersLineReference
     */
    public function getCallForTendersLineReferenceWithCreate(): CallForTendersLineReference
    {
        $this->callForTendersLineReference = is_null($this->callForTendersLineReference) ? new CallForTendersLineReference() : $this->callForTendersLineReference;

        return $this->callForTendersLineReference;
    }

    /**
     * @param CallForTendersLineReference|null $callForTendersLineReference
     * @return self
     */
    public function setCallForTendersLineReference(
        ?CallForTendersLineReference $callForTendersLineReference = null,
    ): self {
        $this->callForTendersLineReference = $callForTendersLineReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCallForTendersLineReference(): self
    {
        $this->callForTendersLineReference = null;

        return $this;
    }

    /**
     * @return CallForTendersDocumentReference|null
     */
    public function getCallForTendersDocumentReference(): ?CallForTendersDocumentReference
    {
        return $this->callForTendersDocumentReference;
    }

    /**
     * @return CallForTendersDocumentReference
     */
    public function getCallForTendersDocumentReferenceWithCreate(): CallForTendersDocumentReference
    {
        $this->callForTendersDocumentReference = is_null($this->callForTendersDocumentReference) ? new CallForTendersDocumentReference() : $this->callForTendersDocumentReference;

        return $this->callForTendersDocumentReference;
    }

    /**
     * @param CallForTendersDocumentReference|null $callForTendersDocumentReference
     * @return self
     */
    public function setCallForTendersDocumentReference(
        ?CallForTendersDocumentReference $callForTendersDocumentReference = null,
    ): self {
        $this->callForTendersDocumentReference = $callForTendersDocumentReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCallForTendersDocumentReference(): self
    {
        $this->callForTendersDocumentReference = null;

        return $this;
    }
}
