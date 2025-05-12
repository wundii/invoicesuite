<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\models\ubl\cbc\AvailabilityStatusCode;
use horstoeko\invoicesuite\models\ubl\cbc\ID;
use horstoeko\invoicesuite\models\ubl\cbc\InventoryValueAmount;
use horstoeko\invoicesuite\models\ubl\cbc\Note;
use horstoeko\invoicesuite\models\ubl\cbc\Quantity;

class InventoryReportLineType
{
    use HandlesObjectFlags;

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
     * @var \horstoeko\invoicesuite\models\ubl\cbc\InventoryValueAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\InventoryValueAmount")
     * @JMS\Expose
     * @JMS\SerializedName("InventoryValueAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getInventoryValueAmount", setter="setInventoryValueAmount")
     */
    private $inventoryValueAmount;

    /**
     * @var \DateTimeInterface
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("AvailabilityDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAvailabilityDate", setter="setAvailabilityDate")
     */
    private $availabilityDate;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\AvailabilityStatusCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\AvailabilityStatusCode")
     * @JMS\Expose
     * @JMS\SerializedName("AvailabilityStatusCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAvailabilityStatusCode", setter="setAvailabilityStatusCode")
     */
    private $availabilityStatusCode;

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
     * @var \horstoeko\invoicesuite\models\ubl\cac\InventoryLocation
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\InventoryLocation")
     * @JMS\Expose
     * @JMS\SerializedName("InventoryLocation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getInventoryLocation", setter="setInventoryLocation")
     */
    private $inventoryLocation;

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
        if (!is_array($this->note)) {
            $this->note = [];
        }

        $this->note[0] = $note;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Note
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
     * @return \horstoeko\invoicesuite\models\ubl\cbc\InventoryValueAmount|null
     */
    public function getInventoryValueAmount(): ?InventoryValueAmount
    {
        return $this->inventoryValueAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\InventoryValueAmount
     */
    public function getInventoryValueAmountWithCreate(): InventoryValueAmount
    {
        $this->inventoryValueAmount = is_null($this->inventoryValueAmount) ? new InventoryValueAmount() : $this->inventoryValueAmount;

        return $this->inventoryValueAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\InventoryValueAmount $inventoryValueAmount
     * @return self
     */
    public function setInventoryValueAmount(InventoryValueAmount $inventoryValueAmount): self
    {
        $this->inventoryValueAmount = $inventoryValueAmount;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getAvailabilityDate(): ?\DateTimeInterface
    {
        return $this->availabilityDate;
    }

    /**
     * @param \DateTimeInterface $availabilityDate
     * @return self
     */
    public function setAvailabilityDate(\DateTimeInterface $availabilityDate): self
    {
        $this->availabilityDate = $availabilityDate;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\AvailabilityStatusCode|null
     */
    public function getAvailabilityStatusCode(): ?AvailabilityStatusCode
    {
        return $this->availabilityStatusCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\AvailabilityStatusCode
     */
    public function getAvailabilityStatusCodeWithCreate(): AvailabilityStatusCode
    {
        $this->availabilityStatusCode = is_null($this->availabilityStatusCode) ? new AvailabilityStatusCode() : $this->availabilityStatusCode;

        return $this->availabilityStatusCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\AvailabilityStatusCode $availabilityStatusCode
     * @return self
     */
    public function setAvailabilityStatusCode(AvailabilityStatusCode $availabilityStatusCode): self
    {
        $this->availabilityStatusCode = $availabilityStatusCode;

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
     * @return \horstoeko\invoicesuite\models\ubl\cac\InventoryLocation|null
     */
    public function getInventoryLocation(): ?InventoryLocation
    {
        return $this->inventoryLocation;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\InventoryLocation
     */
    public function getInventoryLocationWithCreate(): InventoryLocation
    {
        $this->inventoryLocation = is_null($this->inventoryLocation) ? new InventoryLocation() : $this->inventoryLocation;

        return $this->inventoryLocation;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\InventoryLocation $inventoryLocation
     * @return self
     */
    public function setInventoryLocation(InventoryLocation $inventoryLocation): self
    {
        $this->inventoryLocation = $inventoryLocation;

        return $this;
    }
}
