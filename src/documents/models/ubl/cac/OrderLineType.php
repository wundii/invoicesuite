<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Note;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SubstitutionStatusCode;

class OrderLineType
{
    use HandlesObjectFlags;

    /**
     * @var SubstitutionStatusCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\SubstitutionStatusCode")
     * @JMS\Expose
     * @JMS\SerializedName("SubstitutionStatusCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSubstitutionStatusCode", setter="setSubstitutionStatusCode")
     */
    private $substitutionStatusCode;

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
     * @var array<SellerSubstitutedLineItem>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\SellerSubstitutedLineItem>")
     * @JMS\Expose
     * @JMS\SerializedName("SellerSubstitutedLineItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SellerSubstitutedLineItem", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSellerSubstitutedLineItem", setter="setSellerSubstitutedLineItem")
     */
    private $sellerSubstitutedLineItem;

    /**
     * @var array<BuyerProposedSubstituteLineItem>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\BuyerProposedSubstituteLineItem>")
     * @JMS\Expose
     * @JMS\SerializedName("BuyerProposedSubstituteLineItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="BuyerProposedSubstituteLineItem", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getBuyerProposedSubstituteLineItem", setter="setBuyerProposedSubstituteLineItem")
     */
    private $buyerProposedSubstituteLineItem;

    /**
     * @var CatalogueLineReference|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\CatalogueLineReference")
     * @JMS\Expose
     * @JMS\SerializedName("CatalogueLineReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCatalogueLineReference", setter="setCatalogueLineReference")
     */
    private $catalogueLineReference;

    /**
     * @var QuotationLineReference|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\QuotationLineReference")
     * @JMS\Expose
     * @JMS\SerializedName("QuotationLineReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getQuotationLineReference", setter="setQuotationLineReference")
     */
    private $quotationLineReference;

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
     * @return SubstitutionStatusCode|null
     */
    public function getSubstitutionStatusCode(): ?SubstitutionStatusCode
    {
        return $this->substitutionStatusCode;
    }

    /**
     * @return SubstitutionStatusCode
     */
    public function getSubstitutionStatusCodeWithCreate(): SubstitutionStatusCode
    {
        $this->substitutionStatusCode = is_null($this->substitutionStatusCode) ? new SubstitutionStatusCode() : $this->substitutionStatusCode;

        return $this->substitutionStatusCode;
    }

    /**
     * @param SubstitutionStatusCode|null $substitutionStatusCode
     * @return self
     */
    public function setSubstitutionStatusCode(?SubstitutionStatusCode $substitutionStatusCode = null): self
    {
        $this->substitutionStatusCode = $substitutionStatusCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSubstitutionStatusCode(): self
    {
        $this->substitutionStatusCode = null;

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
     * @return array<SellerSubstitutedLineItem>|null
     */
    public function getSellerSubstitutedLineItem(): ?array
    {
        return $this->sellerSubstitutedLineItem;
    }

    /**
     * @param array<SellerSubstitutedLineItem>|null $sellerSubstitutedLineItem
     * @return self
     */
    public function setSellerSubstitutedLineItem(?array $sellerSubstitutedLineItem = null): self
    {
        $this->sellerSubstitutedLineItem = $sellerSubstitutedLineItem;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSellerSubstitutedLineItem(): self
    {
        $this->sellerSubstitutedLineItem = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearSellerSubstitutedLineItem(): self
    {
        $this->sellerSubstitutedLineItem = [];

        return $this;
    }

    /**
     * @return SellerSubstitutedLineItem|null
     */
    public function firstSellerSubstitutedLineItem(): ?SellerSubstitutedLineItem
    {
        $sellerSubstitutedLineItem = $this->sellerSubstitutedLineItem ?? [];
        $sellerSubstitutedLineItem = reset($sellerSubstitutedLineItem);

        if ($sellerSubstitutedLineItem === false) {
            return null;
        }

        return $sellerSubstitutedLineItem;
    }

    /**
     * @return SellerSubstitutedLineItem|null
     */
    public function lastSellerSubstitutedLineItem(): ?SellerSubstitutedLineItem
    {
        $sellerSubstitutedLineItem = $this->sellerSubstitutedLineItem ?? [];
        $sellerSubstitutedLineItem = end($sellerSubstitutedLineItem);

        if ($sellerSubstitutedLineItem === false) {
            return null;
        }

        return $sellerSubstitutedLineItem;
    }

    /**
     * @param SellerSubstitutedLineItem $sellerSubstitutedLineItem
     * @return self
     */
    public function addToSellerSubstitutedLineItem(SellerSubstitutedLineItem $sellerSubstitutedLineItem): self
    {
        $this->sellerSubstitutedLineItem[] = $sellerSubstitutedLineItem;

        return $this;
    }

    /**
     * @return SellerSubstitutedLineItem
     */
    public function addToSellerSubstitutedLineItemWithCreate(): SellerSubstitutedLineItem
    {
        $this->addTosellerSubstitutedLineItem($sellerSubstitutedLineItem = new SellerSubstitutedLineItem());

        return $sellerSubstitutedLineItem;
    }

    /**
     * @param SellerSubstitutedLineItem $sellerSubstitutedLineItem
     * @return self
     */
    public function addOnceToSellerSubstitutedLineItem(SellerSubstitutedLineItem $sellerSubstitutedLineItem): self
    {
        if (!is_array($this->sellerSubstitutedLineItem)) {
            $this->sellerSubstitutedLineItem = [];
        }

        $this->sellerSubstitutedLineItem[0] = $sellerSubstitutedLineItem;

        return $this;
    }

    /**
     * @return SellerSubstitutedLineItem
     */
    public function addOnceToSellerSubstitutedLineItemWithCreate(): SellerSubstitutedLineItem
    {
        if (!is_array($this->sellerSubstitutedLineItem)) {
            $this->sellerSubstitutedLineItem = [];
        }

        if ($this->sellerSubstitutedLineItem === []) {
            $this->addOnceTosellerSubstitutedLineItem(new SellerSubstitutedLineItem());
        }

        return $this->sellerSubstitutedLineItem[0];
    }

    /**
     * @return array<BuyerProposedSubstituteLineItem>|null
     */
    public function getBuyerProposedSubstituteLineItem(): ?array
    {
        return $this->buyerProposedSubstituteLineItem;
    }

    /**
     * @param array<BuyerProposedSubstituteLineItem>|null $buyerProposedSubstituteLineItem
     * @return self
     */
    public function setBuyerProposedSubstituteLineItem(?array $buyerProposedSubstituteLineItem = null): self
    {
        $this->buyerProposedSubstituteLineItem = $buyerProposedSubstituteLineItem;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetBuyerProposedSubstituteLineItem(): self
    {
        $this->buyerProposedSubstituteLineItem = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearBuyerProposedSubstituteLineItem(): self
    {
        $this->buyerProposedSubstituteLineItem = [];

        return $this;
    }

    /**
     * @return BuyerProposedSubstituteLineItem|null
     */
    public function firstBuyerProposedSubstituteLineItem(): ?BuyerProposedSubstituteLineItem
    {
        $buyerProposedSubstituteLineItem = $this->buyerProposedSubstituteLineItem ?? [];
        $buyerProposedSubstituteLineItem = reset($buyerProposedSubstituteLineItem);

        if ($buyerProposedSubstituteLineItem === false) {
            return null;
        }

        return $buyerProposedSubstituteLineItem;
    }

    /**
     * @return BuyerProposedSubstituteLineItem|null
     */
    public function lastBuyerProposedSubstituteLineItem(): ?BuyerProposedSubstituteLineItem
    {
        $buyerProposedSubstituteLineItem = $this->buyerProposedSubstituteLineItem ?? [];
        $buyerProposedSubstituteLineItem = end($buyerProposedSubstituteLineItem);

        if ($buyerProposedSubstituteLineItem === false) {
            return null;
        }

        return $buyerProposedSubstituteLineItem;
    }

    /**
     * @param BuyerProposedSubstituteLineItem $buyerProposedSubstituteLineItem
     * @return self
     */
    public function addToBuyerProposedSubstituteLineItem(
        BuyerProposedSubstituteLineItem $buyerProposedSubstituteLineItem,
    ): self {
        $this->buyerProposedSubstituteLineItem[] = $buyerProposedSubstituteLineItem;

        return $this;
    }

    /**
     * @return BuyerProposedSubstituteLineItem
     */
    public function addToBuyerProposedSubstituteLineItemWithCreate(): BuyerProposedSubstituteLineItem
    {
        $this->addTobuyerProposedSubstituteLineItem($buyerProposedSubstituteLineItem = new BuyerProposedSubstituteLineItem());

        return $buyerProposedSubstituteLineItem;
    }

    /**
     * @param BuyerProposedSubstituteLineItem $buyerProposedSubstituteLineItem
     * @return self
     */
    public function addOnceToBuyerProposedSubstituteLineItem(
        BuyerProposedSubstituteLineItem $buyerProposedSubstituteLineItem,
    ): self {
        if (!is_array($this->buyerProposedSubstituteLineItem)) {
            $this->buyerProposedSubstituteLineItem = [];
        }

        $this->buyerProposedSubstituteLineItem[0] = $buyerProposedSubstituteLineItem;

        return $this;
    }

    /**
     * @return BuyerProposedSubstituteLineItem
     */
    public function addOnceToBuyerProposedSubstituteLineItemWithCreate(): BuyerProposedSubstituteLineItem
    {
        if (!is_array($this->buyerProposedSubstituteLineItem)) {
            $this->buyerProposedSubstituteLineItem = [];
        }

        if ($this->buyerProposedSubstituteLineItem === []) {
            $this->addOnceTobuyerProposedSubstituteLineItem(new BuyerProposedSubstituteLineItem());
        }

        return $this->buyerProposedSubstituteLineItem[0];
    }

    /**
     * @return CatalogueLineReference|null
     */
    public function getCatalogueLineReference(): ?CatalogueLineReference
    {
        return $this->catalogueLineReference;
    }

    /**
     * @return CatalogueLineReference
     */
    public function getCatalogueLineReferenceWithCreate(): CatalogueLineReference
    {
        $this->catalogueLineReference = is_null($this->catalogueLineReference) ? new CatalogueLineReference() : $this->catalogueLineReference;

        return $this->catalogueLineReference;
    }

    /**
     * @param CatalogueLineReference|null $catalogueLineReference
     * @return self
     */
    public function setCatalogueLineReference(?CatalogueLineReference $catalogueLineReference = null): self
    {
        $this->catalogueLineReference = $catalogueLineReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCatalogueLineReference(): self
    {
        $this->catalogueLineReference = null;

        return $this;
    }

    /**
     * @return QuotationLineReference|null
     */
    public function getQuotationLineReference(): ?QuotationLineReference
    {
        return $this->quotationLineReference;
    }

    /**
     * @return QuotationLineReference
     */
    public function getQuotationLineReferenceWithCreate(): QuotationLineReference
    {
        $this->quotationLineReference = is_null($this->quotationLineReference) ? new QuotationLineReference() : $this->quotationLineReference;

        return $this->quotationLineReference;
    }

    /**
     * @param QuotationLineReference|null $quotationLineReference
     * @return self
     */
    public function setQuotationLineReference(?QuotationLineReference $quotationLineReference = null): self
    {
        $this->quotationLineReference = $quotationLineReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetQuotationLineReference(): self
    {
        $this->quotationLineReference = null;

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
}
