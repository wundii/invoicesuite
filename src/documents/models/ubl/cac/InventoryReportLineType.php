<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\AvailabilityStatusCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\InventoryValueAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Note;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Quantity;

class InventoryReportLineType
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
     * @var InventoryValueAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\InventoryValueAmount")
     * @JMS\Expose
     * @JMS\SerializedName("InventoryValueAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getInventoryValueAmount", setter="setInventoryValueAmount")
     */
    private $inventoryValueAmount;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("AvailabilityDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAvailabilityDate", setter="setAvailabilityDate")
     */
    private $availabilityDate;

    /**
     * @var AvailabilityStatusCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\AvailabilityStatusCode")
     * @JMS\Expose
     * @JMS\SerializedName("AvailabilityStatusCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAvailabilityStatusCode", setter="setAvailabilityStatusCode")
     */
    private $availabilityStatusCode;

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
     * @var InventoryLocation|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\InventoryLocation")
     * @JMS\Expose
     * @JMS\SerializedName("InventoryLocation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getInventoryLocation", setter="setInventoryLocation")
     */
    private $inventoryLocation;

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
     * @return InventoryValueAmount|null
     */
    public function getInventoryValueAmount(): ?InventoryValueAmount
    {
        return $this->inventoryValueAmount;
    }

    /**
     * @return InventoryValueAmount
     */
    public function getInventoryValueAmountWithCreate(): InventoryValueAmount
    {
        $this->inventoryValueAmount = is_null($this->inventoryValueAmount) ? new InventoryValueAmount() : $this->inventoryValueAmount;

        return $this->inventoryValueAmount;
    }

    /**
     * @param InventoryValueAmount|null $inventoryValueAmount
     * @return self
     */
    public function setInventoryValueAmount(?InventoryValueAmount $inventoryValueAmount = null): self
    {
        $this->inventoryValueAmount = $inventoryValueAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetInventoryValueAmount(): self
    {
        $this->inventoryValueAmount = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getAvailabilityDate(): ?DateTimeInterface
    {
        return $this->availabilityDate;
    }

    /**
     * @param DateTimeInterface|null $availabilityDate
     * @return self
     */
    public function setAvailabilityDate(?DateTimeInterface $availabilityDate = null): self
    {
        $this->availabilityDate = $availabilityDate;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAvailabilityDate(): self
    {
        $this->availabilityDate = null;

        return $this;
    }

    /**
     * @return AvailabilityStatusCode|null
     */
    public function getAvailabilityStatusCode(): ?AvailabilityStatusCode
    {
        return $this->availabilityStatusCode;
    }

    /**
     * @return AvailabilityStatusCode
     */
    public function getAvailabilityStatusCodeWithCreate(): AvailabilityStatusCode
    {
        $this->availabilityStatusCode = is_null($this->availabilityStatusCode) ? new AvailabilityStatusCode() : $this->availabilityStatusCode;

        return $this->availabilityStatusCode;
    }

    /**
     * @param AvailabilityStatusCode|null $availabilityStatusCode
     * @return self
     */
    public function setAvailabilityStatusCode(?AvailabilityStatusCode $availabilityStatusCode = null): self
    {
        $this->availabilityStatusCode = $availabilityStatusCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAvailabilityStatusCode(): self
    {
        $this->availabilityStatusCode = null;

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
     * @return InventoryLocation|null
     */
    public function getInventoryLocation(): ?InventoryLocation
    {
        return $this->inventoryLocation;
    }

    /**
     * @return InventoryLocation
     */
    public function getInventoryLocationWithCreate(): InventoryLocation
    {
        $this->inventoryLocation = is_null($this->inventoryLocation) ? new InventoryLocation() : $this->inventoryLocation;

        return $this->inventoryLocation;
    }

    /**
     * @param InventoryLocation|null $inventoryLocation
     * @return self
     */
    public function setInventoryLocation(?InventoryLocation $inventoryLocation = null): self
    {
        $this->inventoryLocation = $inventoryLocation;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetInventoryLocation(): self
    {
        $this->inventoryLocation = null;

        return $this;
    }
}
