<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\ubl\cbc\EstimatedAmount;
use horstoeko\invoicesuite\models\ubl\cbc\ID;
use horstoeko\invoicesuite\models\ubl\cbc\MaximumAmount;
use horstoeko\invoicesuite\models\ubl\cbc\MaximumQuantity;
use horstoeko\invoicesuite\models\ubl\cbc\MinimumAmount;
use horstoeko\invoicesuite\models\ubl\cbc\MinimumQuantity;
use horstoeko\invoicesuite\models\ubl\cbc\Note;
use horstoeko\invoicesuite\models\ubl\cbc\Quantity;
use horstoeko\invoicesuite\models\ubl\cbc\UUID;

class RequestForTenderLineType
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
     * @var bool
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("TaxIncludedIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTaxIncludedIndicator", setter="setTaxIncludedIndicator")
     */
    private $taxIncludedIndicator;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\MinimumAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\MinimumAmount")
     * @JMS\Expose
     * @JMS\SerializedName("MinimumAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMinimumAmount", setter="setMinimumAmount")
     */
    private $minimumAmount;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\MaximumAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\MaximumAmount")
     * @JMS\Expose
     * @JMS\SerializedName("MaximumAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMaximumAmount", setter="setMaximumAmount")
     */
    private $maximumAmount;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\EstimatedAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\EstimatedAmount")
     * @JMS\Expose
     * @JMS\SerializedName("EstimatedAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEstimatedAmount", setter="setEstimatedAmount")
     */
    private $estimatedAmount;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\DocumentReference>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\DocumentReference>")
     * @JMS\Expose
     * @JMS\SerializedName("DocumentReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="DocumentReference", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getDocumentReference", setter="setDocumentReference")
     */
    private $documentReference;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\DeliveryPeriod>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\DeliveryPeriod>")
     * @JMS\Expose
     * @JMS\SerializedName("DeliveryPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="DeliveryPeriod", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getDeliveryPeriod", setter="setDeliveryPeriod")
     */
    private $deliveryPeriod;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\RequiredItemLocationQuantity>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\RequiredItemLocationQuantity>")
     * @JMS\Expose
     * @JMS\SerializedName("RequiredItemLocationQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="RequiredItemLocationQuantity", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getRequiredItemLocationQuantity", setter="setRequiredItemLocationQuantity")
     */
    private $requiredItemLocationQuantity;

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
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\SubRequestForTenderLine>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\SubRequestForTenderLine>")
     * @JMS\Expose
     * @JMS\SerializedName("SubRequestForTenderLine")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SubRequestForTenderLine", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSubRequestForTenderLine", setter="setSubRequestForTenderLine")
     */
    private $subRequestForTenderLine;

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
     * @return bool|null
     */
    public function getTaxIncludedIndicator(): ?bool
    {
        return $this->taxIncludedIndicator;
    }

    /**
     * @param bool $taxIncludedIndicator
     * @return self
     */
    public function setTaxIncludedIndicator(bool $taxIncludedIndicator): self
    {
        $this->taxIncludedIndicator = $taxIncludedIndicator;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MinimumAmount|null
     */
    public function getMinimumAmount(): ?MinimumAmount
    {
        return $this->minimumAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MinimumAmount
     */
    public function getMinimumAmountWithCreate(): MinimumAmount
    {
        $this->minimumAmount = is_null($this->minimumAmount) ? new MinimumAmount() : $this->minimumAmount;

        return $this->minimumAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\MinimumAmount $minimumAmount
     * @return self
     */
    public function setMinimumAmount(MinimumAmount $minimumAmount): self
    {
        $this->minimumAmount = $minimumAmount;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MaximumAmount|null
     */
    public function getMaximumAmount(): ?MaximumAmount
    {
        return $this->maximumAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MaximumAmount
     */
    public function getMaximumAmountWithCreate(): MaximumAmount
    {
        $this->maximumAmount = is_null($this->maximumAmount) ? new MaximumAmount() : $this->maximumAmount;

        return $this->maximumAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\MaximumAmount $maximumAmount
     * @return self
     */
    public function setMaximumAmount(MaximumAmount $maximumAmount): self
    {
        $this->maximumAmount = $maximumAmount;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\EstimatedAmount|null
     */
    public function getEstimatedAmount(): ?EstimatedAmount
    {
        return $this->estimatedAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\EstimatedAmount
     */
    public function getEstimatedAmountWithCreate(): EstimatedAmount
    {
        $this->estimatedAmount = is_null($this->estimatedAmount) ? new EstimatedAmount() : $this->estimatedAmount;

        return $this->estimatedAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\EstimatedAmount $estimatedAmount
     * @return self
     */
    public function setEstimatedAmount(EstimatedAmount $estimatedAmount): self
    {
        $this->estimatedAmount = $estimatedAmount;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\DocumentReference>|null
     */
    public function getDocumentReference(): ?array
    {
        return $this->documentReference;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\DocumentReference> $documentReference
     * @return self
     */
    public function setDocumentReference(array $documentReference): self
    {
        $this->documentReference = $documentReference;

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
     * @param \horstoeko\invoicesuite\models\ubl\cac\DocumentReference $documentReference
     * @return self
     */
    public function addToDocumentReference(DocumentReference $documentReference): self
    {
        $this->documentReference[] = $documentReference;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\DocumentReference
     */
    public function addToDocumentReferenceWithCreate(): DocumentReference
    {
        $this->addTodocumentReference($documentReference = new DocumentReference());

        return $documentReference;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\DocumentReference $documentReference
     * @return self
     */
    public function addOnceToDocumentReference(DocumentReference $documentReference): self
    {
        $this->documentReference[0] = $documentReference;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\DocumentReference
     */
    public function addOnceToDocumentReferenceWithCreate(): DocumentReference
    {
        if ($this->documentReference === []) {
            $this->addOnceTodocumentReference(new DocumentReference());
        }

        return $this->documentReference[0];
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\DeliveryPeriod>|null
     */
    public function getDeliveryPeriod(): ?array
    {
        return $this->deliveryPeriod;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\DeliveryPeriod> $deliveryPeriod
     * @return self
     */
    public function setDeliveryPeriod(array $deliveryPeriod): self
    {
        $this->deliveryPeriod = $deliveryPeriod;

        return $this;
    }

    /**
     * @return self
     */
    public function clearDeliveryPeriod(): self
    {
        $this->deliveryPeriod = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\DeliveryPeriod $deliveryPeriod
     * @return self
     */
    public function addToDeliveryPeriod(DeliveryPeriod $deliveryPeriod): self
    {
        $this->deliveryPeriod[] = $deliveryPeriod;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\DeliveryPeriod
     */
    public function addToDeliveryPeriodWithCreate(): DeliveryPeriod
    {
        $this->addTodeliveryPeriod($deliveryPeriod = new DeliveryPeriod());

        return $deliveryPeriod;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\DeliveryPeriod $deliveryPeriod
     * @return self
     */
    public function addOnceToDeliveryPeriod(DeliveryPeriod $deliveryPeriod): self
    {
        $this->deliveryPeriod[0] = $deliveryPeriod;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\DeliveryPeriod
     */
    public function addOnceToDeliveryPeriodWithCreate(): DeliveryPeriod
    {
        if ($this->deliveryPeriod === []) {
            $this->addOnceTodeliveryPeriod(new DeliveryPeriod());
        }

        return $this->deliveryPeriod[0];
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\RequiredItemLocationQuantity>|null
     */
    public function getRequiredItemLocationQuantity(): ?array
    {
        return $this->requiredItemLocationQuantity;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\RequiredItemLocationQuantity> $requiredItemLocationQuantity
     * @return self
     */
    public function setRequiredItemLocationQuantity(array $requiredItemLocationQuantity): self
    {
        $this->requiredItemLocationQuantity = $requiredItemLocationQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function clearRequiredItemLocationQuantity(): self
    {
        $this->requiredItemLocationQuantity = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\RequiredItemLocationQuantity $requiredItemLocationQuantity
     * @return self
     */
    public function addToRequiredItemLocationQuantity(
        RequiredItemLocationQuantity $requiredItemLocationQuantity,
    ): self {
        $this->requiredItemLocationQuantity[] = $requiredItemLocationQuantity;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\RequiredItemLocationQuantity
     */
    public function addToRequiredItemLocationQuantityWithCreate(): RequiredItemLocationQuantity
    {
        $this->addTorequiredItemLocationQuantity($requiredItemLocationQuantity = new RequiredItemLocationQuantity());

        return $requiredItemLocationQuantity;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\RequiredItemLocationQuantity $requiredItemLocationQuantity
     * @return self
     */
    public function addOnceToRequiredItemLocationQuantity(
        RequiredItemLocationQuantity $requiredItemLocationQuantity,
    ): self {
        $this->requiredItemLocationQuantity[0] = $requiredItemLocationQuantity;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\RequiredItemLocationQuantity
     */
    public function addOnceToRequiredItemLocationQuantityWithCreate(): RequiredItemLocationQuantity
    {
        if ($this->requiredItemLocationQuantity === []) {
            $this->addOnceTorequiredItemLocationQuantity(new RequiredItemLocationQuantity());
        }

        return $this->requiredItemLocationQuantity[0];
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
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\SubRequestForTenderLine>|null
     */
    public function getSubRequestForTenderLine(): ?array
    {
        return $this->subRequestForTenderLine;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\SubRequestForTenderLine> $subRequestForTenderLine
     * @return self
     */
    public function setSubRequestForTenderLine(array $subRequestForTenderLine): self
    {
        $this->subRequestForTenderLine = $subRequestForTenderLine;

        return $this;
    }

    /**
     * @return self
     */
    public function clearSubRequestForTenderLine(): self
    {
        $this->subRequestForTenderLine = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\SubRequestForTenderLine $subRequestForTenderLine
     * @return self
     */
    public function addToSubRequestForTenderLine(SubRequestForTenderLine $subRequestForTenderLine): self
    {
        $this->subRequestForTenderLine[] = $subRequestForTenderLine;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\SubRequestForTenderLine
     */
    public function addToSubRequestForTenderLineWithCreate(): SubRequestForTenderLine
    {
        $this->addTosubRequestForTenderLine($subRequestForTenderLine = new SubRequestForTenderLine());

        return $subRequestForTenderLine;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\SubRequestForTenderLine $subRequestForTenderLine
     * @return self
     */
    public function addOnceToSubRequestForTenderLine(SubRequestForTenderLine $subRequestForTenderLine): self
    {
        $this->subRequestForTenderLine[0] = $subRequestForTenderLine;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\SubRequestForTenderLine
     */
    public function addOnceToSubRequestForTenderLineWithCreate(): SubRequestForTenderLine
    {
        if ($this->subRequestForTenderLine === []) {
            $this->addOnceTosubRequestForTenderLine(new SubRequestForTenderLine());
        }

        return $this->subRequestForTenderLine[0];
    }
}
