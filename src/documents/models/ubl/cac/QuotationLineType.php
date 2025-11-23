<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LineExtensionAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Note;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Quantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\RequestForQuotationLineID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TotalTaxAmount;

class QuotationLineType
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
     * @var RequestForQuotationLineID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\RequestForQuotationLineID")
     * @JMS\Expose
     * @JMS\SerializedName("RequestForQuotationLineID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRequestForQuotationLineID", setter="setRequestForQuotationLineID")
     */
    private $requestForQuotationLineID;

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
     * @var LineItem|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\LineItem")
     * @JMS\Expose
     * @JMS\SerializedName("LineItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLineItem", setter="setLineItem")
     */
    private $lineItem;

    /**
     * @var array<SellerProposedSubstituteLineItem>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\SellerProposedSubstituteLineItem>")
     * @JMS\Expose
     * @JMS\SerializedName("SellerProposedSubstituteLineItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SellerProposedSubstituteLineItem", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSellerProposedSubstituteLineItem", setter="setSellerProposedSubstituteLineItem")
     */
    private $sellerProposedSubstituteLineItem;

    /**
     * @var array<AlternativeLineItem>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\AlternativeLineItem>")
     * @JMS\Expose
     * @JMS\SerializedName("AlternativeLineItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="AlternativeLineItem", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getAlternativeLineItem", setter="setAlternativeLineItem")
     */
    private $alternativeLineItem;

    /**
     * @var RequestLineReference|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\RequestLineReference")
     * @JMS\Expose
     * @JMS\SerializedName("RequestLineReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRequestLineReference", setter="setRequestLineReference")
     */
    private $requestLineReference;

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
     * @return RequestForQuotationLineID|null
     */
    public function getRequestForQuotationLineID(): ?RequestForQuotationLineID
    {
        return $this->requestForQuotationLineID;
    }

    /**
     * @return RequestForQuotationLineID
     */
    public function getRequestForQuotationLineIDWithCreate(): RequestForQuotationLineID
    {
        $this->requestForQuotationLineID = is_null($this->requestForQuotationLineID) ? new RequestForQuotationLineID() : $this->requestForQuotationLineID;

        return $this->requestForQuotationLineID;
    }

    /**
     * @param RequestForQuotationLineID|null $requestForQuotationLineID
     * @return self
     */
    public function setRequestForQuotationLineID(?RequestForQuotationLineID $requestForQuotationLineID = null): self
    {
        $this->requestForQuotationLineID = $requestForQuotationLineID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetRequestForQuotationLineID(): self
    {
        $this->requestForQuotationLineID = null;

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
     * @return LineItem|null
     */
    public function getLineItem(): ?LineItem
    {
        return $this->lineItem;
    }

    /**
     * @return LineItem
     */
    public function getLineItemWithCreate(): LineItem
    {
        $this->lineItem = is_null($this->lineItem) ? new LineItem() : $this->lineItem;

        return $this->lineItem;
    }

    /**
     * @param LineItem|null $lineItem
     * @return self
     */
    public function setLineItem(?LineItem $lineItem = null): self
    {
        $this->lineItem = $lineItem;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLineItem(): self
    {
        $this->lineItem = null;

        return $this;
    }

    /**
     * @return array<SellerProposedSubstituteLineItem>|null
     */
    public function getSellerProposedSubstituteLineItem(): ?array
    {
        return $this->sellerProposedSubstituteLineItem;
    }

    /**
     * @param array<SellerProposedSubstituteLineItem>|null $sellerProposedSubstituteLineItem
     * @return self
     */
    public function setSellerProposedSubstituteLineItem(?array $sellerProposedSubstituteLineItem = null): self
    {
        $this->sellerProposedSubstituteLineItem = $sellerProposedSubstituteLineItem;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSellerProposedSubstituteLineItem(): self
    {
        $this->sellerProposedSubstituteLineItem = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearSellerProposedSubstituteLineItem(): self
    {
        $this->sellerProposedSubstituteLineItem = [];

        return $this;
    }

    /**
     * @return SellerProposedSubstituteLineItem|null
     */
    public function firstSellerProposedSubstituteLineItem(): ?SellerProposedSubstituteLineItem
    {
        $sellerProposedSubstituteLineItem = $this->sellerProposedSubstituteLineItem ?? [];
        $sellerProposedSubstituteLineItem = reset($sellerProposedSubstituteLineItem);

        if ($sellerProposedSubstituteLineItem === false) {
            return null;
        }

        return $sellerProposedSubstituteLineItem;
    }

    /**
     * @return SellerProposedSubstituteLineItem|null
     */
    public function lastSellerProposedSubstituteLineItem(): ?SellerProposedSubstituteLineItem
    {
        $sellerProposedSubstituteLineItem = $this->sellerProposedSubstituteLineItem ?? [];
        $sellerProposedSubstituteLineItem = end($sellerProposedSubstituteLineItem);

        if ($sellerProposedSubstituteLineItem === false) {
            return null;
        }

        return $sellerProposedSubstituteLineItem;
    }

    /**
     * @param SellerProposedSubstituteLineItem $sellerProposedSubstituteLineItem
     * @return self
     */
    public function addToSellerProposedSubstituteLineItem(
        SellerProposedSubstituteLineItem $sellerProposedSubstituteLineItem,
    ): self {
        $this->sellerProposedSubstituteLineItem[] = $sellerProposedSubstituteLineItem;

        return $this;
    }

    /**
     * @return SellerProposedSubstituteLineItem
     */
    public function addToSellerProposedSubstituteLineItemWithCreate(): SellerProposedSubstituteLineItem
    {
        $this->addTosellerProposedSubstituteLineItem($sellerProposedSubstituteLineItem = new SellerProposedSubstituteLineItem());

        return $sellerProposedSubstituteLineItem;
    }

    /**
     * @param SellerProposedSubstituteLineItem $sellerProposedSubstituteLineItem
     * @return self
     */
    public function addOnceToSellerProposedSubstituteLineItem(
        SellerProposedSubstituteLineItem $sellerProposedSubstituteLineItem,
    ): self {
        if (!is_array($this->sellerProposedSubstituteLineItem)) {
            $this->sellerProposedSubstituteLineItem = [];
        }

        $this->sellerProposedSubstituteLineItem[0] = $sellerProposedSubstituteLineItem;

        return $this;
    }

    /**
     * @return SellerProposedSubstituteLineItem
     */
    public function addOnceToSellerProposedSubstituteLineItemWithCreate(): SellerProposedSubstituteLineItem
    {
        if (!is_array($this->sellerProposedSubstituteLineItem)) {
            $this->sellerProposedSubstituteLineItem = [];
        }

        if ($this->sellerProposedSubstituteLineItem === []) {
            $this->addOnceTosellerProposedSubstituteLineItem(new SellerProposedSubstituteLineItem());
        }

        return $this->sellerProposedSubstituteLineItem[0];
    }

    /**
     * @return array<AlternativeLineItem>|null
     */
    public function getAlternativeLineItem(): ?array
    {
        return $this->alternativeLineItem;
    }

    /**
     * @param array<AlternativeLineItem>|null $alternativeLineItem
     * @return self
     */
    public function setAlternativeLineItem(?array $alternativeLineItem = null): self
    {
        $this->alternativeLineItem = $alternativeLineItem;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAlternativeLineItem(): self
    {
        $this->alternativeLineItem = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearAlternativeLineItem(): self
    {
        $this->alternativeLineItem = [];

        return $this;
    }

    /**
     * @return AlternativeLineItem|null
     */
    public function firstAlternativeLineItem(): ?AlternativeLineItem
    {
        $alternativeLineItem = $this->alternativeLineItem ?? [];
        $alternativeLineItem = reset($alternativeLineItem);

        if ($alternativeLineItem === false) {
            return null;
        }

        return $alternativeLineItem;
    }

    /**
     * @return AlternativeLineItem|null
     */
    public function lastAlternativeLineItem(): ?AlternativeLineItem
    {
        $alternativeLineItem = $this->alternativeLineItem ?? [];
        $alternativeLineItem = end($alternativeLineItem);

        if ($alternativeLineItem === false) {
            return null;
        }

        return $alternativeLineItem;
    }

    /**
     * @param AlternativeLineItem $alternativeLineItem
     * @return self
     */
    public function addToAlternativeLineItem(AlternativeLineItem $alternativeLineItem): self
    {
        $this->alternativeLineItem[] = $alternativeLineItem;

        return $this;
    }

    /**
     * @return AlternativeLineItem
     */
    public function addToAlternativeLineItemWithCreate(): AlternativeLineItem
    {
        $this->addToalternativeLineItem($alternativeLineItem = new AlternativeLineItem());

        return $alternativeLineItem;
    }

    /**
     * @param AlternativeLineItem $alternativeLineItem
     * @return self
     */
    public function addOnceToAlternativeLineItem(AlternativeLineItem $alternativeLineItem): self
    {
        if (!is_array($this->alternativeLineItem)) {
            $this->alternativeLineItem = [];
        }

        $this->alternativeLineItem[0] = $alternativeLineItem;

        return $this;
    }

    /**
     * @return AlternativeLineItem
     */
    public function addOnceToAlternativeLineItemWithCreate(): AlternativeLineItem
    {
        if (!is_array($this->alternativeLineItem)) {
            $this->alternativeLineItem = [];
        }

        if ($this->alternativeLineItem === []) {
            $this->addOnceToalternativeLineItem(new AlternativeLineItem());
        }

        return $this->alternativeLineItem[0];
    }

    /**
     * @return RequestLineReference|null
     */
    public function getRequestLineReference(): ?RequestLineReference
    {
        return $this->requestLineReference;
    }

    /**
     * @return RequestLineReference
     */
    public function getRequestLineReferenceWithCreate(): RequestLineReference
    {
        $this->requestLineReference = is_null($this->requestLineReference) ? new RequestLineReference() : $this->requestLineReference;

        return $this->requestLineReference;
    }

    /**
     * @param RequestLineReference|null $requestLineReference
     * @return self
     */
    public function setRequestLineReference(?RequestLineReference $requestLineReference = null): self
    {
        $this->requestLineReference = $requestLineReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetRequestLineReference(): self
    {
        $this->requestLineReference = null;

        return $this;
    }
}
