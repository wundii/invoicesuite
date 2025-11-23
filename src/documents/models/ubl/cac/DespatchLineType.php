<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\BackorderQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\BackorderReason;
use horstoeko\invoicesuite\documents\models\ubl\cbc\DeliveredQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LineStatusCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Note;
use horstoeko\invoicesuite\documents\models\ubl\cbc\OutstandingQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\OutstandingReason;
use horstoeko\invoicesuite\documents\models\ubl\cbc\OversupplyQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\UUID;

class DespatchLineType
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
     * @var DeliveredQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\DeliveredQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("DeliveredQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDeliveredQuantity", setter="setDeliveredQuantity")
     */
    private $deliveredQuantity;

    /**
     * @var BackorderQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\BackorderQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("BackorderQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getBackorderQuantity", setter="setBackorderQuantity")
     */
    private $backorderQuantity;

    /**
     * @var array<BackorderReason>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\BackorderReason>")
     * @JMS\Expose
     * @JMS\SerializedName("BackorderReason")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="BackorderReason", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getBackorderReason", setter="setBackorderReason")
     */
    private $backorderReason;

    /**
     * @var OutstandingQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\OutstandingQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("OutstandingQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOutstandingQuantity", setter="setOutstandingQuantity")
     */
    private $outstandingQuantity;

    /**
     * @var array<OutstandingReason>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\OutstandingReason>")
     * @JMS\Expose
     * @JMS\SerializedName("OutstandingReason")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="OutstandingReason", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getOutstandingReason", setter="setOutstandingReason")
     */
    private $outstandingReason;

    /**
     * @var OversupplyQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\OversupplyQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("OversupplyQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOversupplyQuantity", setter="setOversupplyQuantity")
     */
    private $oversupplyQuantity;

    /**
     * @var array<OrderLineReference>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\OrderLineReference>")
     * @JMS\Expose
     * @JMS\SerializedName("OrderLineReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="OrderLineReference", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getOrderLineReference", setter="setOrderLineReference")
     */
    private $orderLineReference;

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
     * @var array<Shipment>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\Shipment>")
     * @JMS\Expose
     * @JMS\SerializedName("Shipment")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Shipment", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getShipment", setter="setShipment")
     */
    private $shipment;

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
     * @return DeliveredQuantity|null
     */
    public function getDeliveredQuantity(): ?DeliveredQuantity
    {
        return $this->deliveredQuantity;
    }

    /**
     * @return DeliveredQuantity
     */
    public function getDeliveredQuantityWithCreate(): DeliveredQuantity
    {
        $this->deliveredQuantity = is_null($this->deliveredQuantity) ? new DeliveredQuantity() : $this->deliveredQuantity;

        return $this->deliveredQuantity;
    }

    /**
     * @param DeliveredQuantity|null $deliveredQuantity
     * @return self
     */
    public function setDeliveredQuantity(?DeliveredQuantity $deliveredQuantity = null): self
    {
        $this->deliveredQuantity = $deliveredQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDeliveredQuantity(): self
    {
        $this->deliveredQuantity = null;

        return $this;
    }

    /**
     * @return BackorderQuantity|null
     */
    public function getBackorderQuantity(): ?BackorderQuantity
    {
        return $this->backorderQuantity;
    }

    /**
     * @return BackorderQuantity
     */
    public function getBackorderQuantityWithCreate(): BackorderQuantity
    {
        $this->backorderQuantity = is_null($this->backorderQuantity) ? new BackorderQuantity() : $this->backorderQuantity;

        return $this->backorderQuantity;
    }

    /**
     * @param BackorderQuantity|null $backorderQuantity
     * @return self
     */
    public function setBackorderQuantity(?BackorderQuantity $backorderQuantity = null): self
    {
        $this->backorderQuantity = $backorderQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetBackorderQuantity(): self
    {
        $this->backorderQuantity = null;

        return $this;
    }

    /**
     * @return array<BackorderReason>|null
     */
    public function getBackorderReason(): ?array
    {
        return $this->backorderReason;
    }

    /**
     * @param array<BackorderReason>|null $backorderReason
     * @return self
     */
    public function setBackorderReason(?array $backorderReason = null): self
    {
        $this->backorderReason = $backorderReason;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetBackorderReason(): self
    {
        $this->backorderReason = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearBackorderReason(): self
    {
        $this->backorderReason = [];

        return $this;
    }

    /**
     * @return BackorderReason|null
     */
    public function firstBackorderReason(): ?BackorderReason
    {
        $backorderReason = $this->backorderReason ?? [];
        $backorderReason = reset($backorderReason);

        if ($backorderReason === false) {
            return null;
        }

        return $backorderReason;
    }

    /**
     * @return BackorderReason|null
     */
    public function lastBackorderReason(): ?BackorderReason
    {
        $backorderReason = $this->backorderReason ?? [];
        $backorderReason = end($backorderReason);

        if ($backorderReason === false) {
            return null;
        }

        return $backorderReason;
    }

    /**
     * @param BackorderReason $backorderReason
     * @return self
     */
    public function addToBackorderReason(BackorderReason $backorderReason): self
    {
        $this->backorderReason[] = $backorderReason;

        return $this;
    }

    /**
     * @return BackorderReason
     */
    public function addToBackorderReasonWithCreate(): BackorderReason
    {
        $this->addTobackorderReason($backorderReason = new BackorderReason());

        return $backorderReason;
    }

    /**
     * @param BackorderReason $backorderReason
     * @return self
     */
    public function addOnceToBackorderReason(BackorderReason $backorderReason): self
    {
        if (!is_array($this->backorderReason)) {
            $this->backorderReason = [];
        }

        $this->backorderReason[0] = $backorderReason;

        return $this;
    }

    /**
     * @return BackorderReason
     */
    public function addOnceToBackorderReasonWithCreate(): BackorderReason
    {
        if (!is_array($this->backorderReason)) {
            $this->backorderReason = [];
        }

        if ($this->backorderReason === []) {
            $this->addOnceTobackorderReason(new BackorderReason());
        }

        return $this->backorderReason[0];
    }

    /**
     * @return OutstandingQuantity|null
     */
    public function getOutstandingQuantity(): ?OutstandingQuantity
    {
        return $this->outstandingQuantity;
    }

    /**
     * @return OutstandingQuantity
     */
    public function getOutstandingQuantityWithCreate(): OutstandingQuantity
    {
        $this->outstandingQuantity = is_null($this->outstandingQuantity) ? new OutstandingQuantity() : $this->outstandingQuantity;

        return $this->outstandingQuantity;
    }

    /**
     * @param OutstandingQuantity|null $outstandingQuantity
     * @return self
     */
    public function setOutstandingQuantity(?OutstandingQuantity $outstandingQuantity = null): self
    {
        $this->outstandingQuantity = $outstandingQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetOutstandingQuantity(): self
    {
        $this->outstandingQuantity = null;

        return $this;
    }

    /**
     * @return array<OutstandingReason>|null
     */
    public function getOutstandingReason(): ?array
    {
        return $this->outstandingReason;
    }

    /**
     * @param array<OutstandingReason>|null $outstandingReason
     * @return self
     */
    public function setOutstandingReason(?array $outstandingReason = null): self
    {
        $this->outstandingReason = $outstandingReason;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetOutstandingReason(): self
    {
        $this->outstandingReason = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearOutstandingReason(): self
    {
        $this->outstandingReason = [];

        return $this;
    }

    /**
     * @return OutstandingReason|null
     */
    public function firstOutstandingReason(): ?OutstandingReason
    {
        $outstandingReason = $this->outstandingReason ?? [];
        $outstandingReason = reset($outstandingReason);

        if ($outstandingReason === false) {
            return null;
        }

        return $outstandingReason;
    }

    /**
     * @return OutstandingReason|null
     */
    public function lastOutstandingReason(): ?OutstandingReason
    {
        $outstandingReason = $this->outstandingReason ?? [];
        $outstandingReason = end($outstandingReason);

        if ($outstandingReason === false) {
            return null;
        }

        return $outstandingReason;
    }

    /**
     * @param OutstandingReason $outstandingReason
     * @return self
     */
    public function addToOutstandingReason(OutstandingReason $outstandingReason): self
    {
        $this->outstandingReason[] = $outstandingReason;

        return $this;
    }

    /**
     * @return OutstandingReason
     */
    public function addToOutstandingReasonWithCreate(): OutstandingReason
    {
        $this->addTooutstandingReason($outstandingReason = new OutstandingReason());

        return $outstandingReason;
    }

    /**
     * @param OutstandingReason $outstandingReason
     * @return self
     */
    public function addOnceToOutstandingReason(OutstandingReason $outstandingReason): self
    {
        if (!is_array($this->outstandingReason)) {
            $this->outstandingReason = [];
        }

        $this->outstandingReason[0] = $outstandingReason;

        return $this;
    }

    /**
     * @return OutstandingReason
     */
    public function addOnceToOutstandingReasonWithCreate(): OutstandingReason
    {
        if (!is_array($this->outstandingReason)) {
            $this->outstandingReason = [];
        }

        if ($this->outstandingReason === []) {
            $this->addOnceTooutstandingReason(new OutstandingReason());
        }

        return $this->outstandingReason[0];
    }

    /**
     * @return OversupplyQuantity|null
     */
    public function getOversupplyQuantity(): ?OversupplyQuantity
    {
        return $this->oversupplyQuantity;
    }

    /**
     * @return OversupplyQuantity
     */
    public function getOversupplyQuantityWithCreate(): OversupplyQuantity
    {
        $this->oversupplyQuantity = is_null($this->oversupplyQuantity) ? new OversupplyQuantity() : $this->oversupplyQuantity;

        return $this->oversupplyQuantity;
    }

    /**
     * @param OversupplyQuantity|null $oversupplyQuantity
     * @return self
     */
    public function setOversupplyQuantity(?OversupplyQuantity $oversupplyQuantity = null): self
    {
        $this->oversupplyQuantity = $oversupplyQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetOversupplyQuantity(): self
    {
        $this->oversupplyQuantity = null;

        return $this;
    }

    /**
     * @return array<OrderLineReference>|null
     */
    public function getOrderLineReference(): ?array
    {
        return $this->orderLineReference;
    }

    /**
     * @param array<OrderLineReference>|null $orderLineReference
     * @return self
     */
    public function setOrderLineReference(?array $orderLineReference = null): self
    {
        $this->orderLineReference = $orderLineReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetOrderLineReference(): self
    {
        $this->orderLineReference = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearOrderLineReference(): self
    {
        $this->orderLineReference = [];

        return $this;
    }

    /**
     * @return OrderLineReference|null
     */
    public function firstOrderLineReference(): ?OrderLineReference
    {
        $orderLineReference = $this->orderLineReference ?? [];
        $orderLineReference = reset($orderLineReference);

        if ($orderLineReference === false) {
            return null;
        }

        return $orderLineReference;
    }

    /**
     * @return OrderLineReference|null
     */
    public function lastOrderLineReference(): ?OrderLineReference
    {
        $orderLineReference = $this->orderLineReference ?? [];
        $orderLineReference = end($orderLineReference);

        if ($orderLineReference === false) {
            return null;
        }

        return $orderLineReference;
    }

    /**
     * @param OrderLineReference $orderLineReference
     * @return self
     */
    public function addToOrderLineReference(OrderLineReference $orderLineReference): self
    {
        $this->orderLineReference[] = $orderLineReference;

        return $this;
    }

    /**
     * @return OrderLineReference
     */
    public function addToOrderLineReferenceWithCreate(): OrderLineReference
    {
        $this->addToorderLineReference($orderLineReference = new OrderLineReference());

        return $orderLineReference;
    }

    /**
     * @param OrderLineReference $orderLineReference
     * @return self
     */
    public function addOnceToOrderLineReference(OrderLineReference $orderLineReference): self
    {
        if (!is_array($this->orderLineReference)) {
            $this->orderLineReference = [];
        }

        $this->orderLineReference[0] = $orderLineReference;

        return $this;
    }

    /**
     * @return OrderLineReference
     */
    public function addOnceToOrderLineReferenceWithCreate(): OrderLineReference
    {
        if (!is_array($this->orderLineReference)) {
            $this->orderLineReference = [];
        }

        if ($this->orderLineReference === []) {
            $this->addOnceToorderLineReference(new OrderLineReference());
        }

        return $this->orderLineReference[0];
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
     * @return array<Shipment>|null
     */
    public function getShipment(): ?array
    {
        return $this->shipment;
    }

    /**
     * @param array<Shipment>|null $shipment
     * @return self
     */
    public function setShipment(?array $shipment = null): self
    {
        $this->shipment = $shipment;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetShipment(): self
    {
        $this->shipment = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearShipment(): self
    {
        $this->shipment = [];

        return $this;
    }

    /**
     * @return Shipment|null
     */
    public function firstShipment(): ?Shipment
    {
        $shipment = $this->shipment ?? [];
        $shipment = reset($shipment);

        if ($shipment === false) {
            return null;
        }

        return $shipment;
    }

    /**
     * @return Shipment|null
     */
    public function lastShipment(): ?Shipment
    {
        $shipment = $this->shipment ?? [];
        $shipment = end($shipment);

        if ($shipment === false) {
            return null;
        }

        return $shipment;
    }

    /**
     * @param Shipment $shipment
     * @return self
     */
    public function addToShipment(Shipment $shipment): self
    {
        $this->shipment[] = $shipment;

        return $this;
    }

    /**
     * @return Shipment
     */
    public function addToShipmentWithCreate(): Shipment
    {
        $this->addToshipment($shipment = new Shipment());

        return $shipment;
    }

    /**
     * @param Shipment $shipment
     * @return self
     */
    public function addOnceToShipment(Shipment $shipment): self
    {
        if (!is_array($this->shipment)) {
            $this->shipment = [];
        }

        $this->shipment[0] = $shipment;

        return $this;
    }

    /**
     * @return Shipment
     */
    public function addOnceToShipmentWithCreate(): Shipment
    {
        if (!is_array($this->shipment)) {
            $this->shipment = [];
        }

        if ($this->shipment === []) {
            $this->addOnceToshipment(new Shipment());
        }

        return $this->shipment[0];
    }
}
