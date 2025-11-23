<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Quantity;

class GoodsItemContainerType
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
     * @var array<TransportEquipment>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\TransportEquipment>")
     * @JMS\Expose
     * @JMS\SerializedName("TransportEquipment")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="TransportEquipment", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getTransportEquipment", setter="setTransportEquipment")
     */
    private $transportEquipment;

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
     * @return array<TransportEquipment>|null
     */
    public function getTransportEquipment(): ?array
    {
        return $this->transportEquipment;
    }

    /**
     * @param array<TransportEquipment>|null $transportEquipment
     * @return self
     */
    public function setTransportEquipment(?array $transportEquipment = null): self
    {
        $this->transportEquipment = $transportEquipment;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTransportEquipment(): self
    {
        $this->transportEquipment = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearTransportEquipment(): self
    {
        $this->transportEquipment = [];

        return $this;
    }

    /**
     * @return TransportEquipment|null
     */
    public function firstTransportEquipment(): ?TransportEquipment
    {
        $transportEquipment = $this->transportEquipment ?? [];
        $transportEquipment = reset($transportEquipment);

        if ($transportEquipment === false) {
            return null;
        }

        return $transportEquipment;
    }

    /**
     * @return TransportEquipment|null
     */
    public function lastTransportEquipment(): ?TransportEquipment
    {
        $transportEquipment = $this->transportEquipment ?? [];
        $transportEquipment = end($transportEquipment);

        if ($transportEquipment === false) {
            return null;
        }

        return $transportEquipment;
    }

    /**
     * @param TransportEquipment $transportEquipment
     * @return self
     */
    public function addToTransportEquipment(TransportEquipment $transportEquipment): self
    {
        $this->transportEquipment[] = $transportEquipment;

        return $this;
    }

    /**
     * @return TransportEquipment
     */
    public function addToTransportEquipmentWithCreate(): TransportEquipment
    {
        $this->addTotransportEquipment($transportEquipment = new TransportEquipment());

        return $transportEquipment;
    }

    /**
     * @param TransportEquipment $transportEquipment
     * @return self
     */
    public function addOnceToTransportEquipment(TransportEquipment $transportEquipment): self
    {
        if (!is_array($this->transportEquipment)) {
            $this->transportEquipment = [];
        }

        $this->transportEquipment[0] = $transportEquipment;

        return $this;
    }

    /**
     * @return TransportEquipment
     */
    public function addOnceToTransportEquipmentWithCreate(): TransportEquipment
    {
        if (!is_array($this->transportEquipment)) {
            $this->transportEquipment = [];
        }

        if ($this->transportEquipment === []) {
            $this->addOnceTotransportEquipment(new TransportEquipment());
        }

        return $this->transportEquipment[0];
    }
}
