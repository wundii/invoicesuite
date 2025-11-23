<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;

class OrderedShipmentType
{
    use HandlesObjectFlags;

    /**
     * @var Shipment|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Shipment")
     * @JMS\Expose
     * @JMS\SerializedName("Shipment")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getShipment", setter="setShipment")
     */
    private $shipment;

    /**
     * @var array<Package>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\Package>")
     * @JMS\Expose
     * @JMS\SerializedName("Package")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Package", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getPackage", setter="setPackage")
     */
    private $package;

    /**
     * @return Shipment|null
     */
    public function getShipment(): ?Shipment
    {
        return $this->shipment;
    }

    /**
     * @return Shipment
     */
    public function getShipmentWithCreate(): Shipment
    {
        $this->shipment = is_null($this->shipment) ? new Shipment() : $this->shipment;

        return $this->shipment;
    }

    /**
     * @param Shipment|null $shipment
     * @return self
     */
    public function setShipment(?Shipment $shipment = null): self
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
     * @return array<Package>|null
     */
    public function getPackage(): ?array
    {
        return $this->package;
    }

    /**
     * @param array<Package>|null $package
     * @return self
     */
    public function setPackage(?array $package = null): self
    {
        $this->package = $package;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPackage(): self
    {
        $this->package = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearPackage(): self
    {
        $this->package = [];

        return $this;
    }

    /**
     * @return Package|null
     */
    public function firstPackage(): ?Package
    {
        $package = $this->package ?? [];
        $package = reset($package);

        if ($package === false) {
            return null;
        }

        return $package;
    }

    /**
     * @return Package|null
     */
    public function lastPackage(): ?Package
    {
        $package = $this->package ?? [];
        $package = end($package);

        if ($package === false) {
            return null;
        }

        return $package;
    }

    /**
     * @param Package $package
     * @return self
     */
    public function addToPackage(Package $package): self
    {
        $this->package[] = $package;

        return $this;
    }

    /**
     * @return Package
     */
    public function addToPackageWithCreate(): Package
    {
        $this->addTopackage($package = new Package());

        return $package;
    }

    /**
     * @param Package $package
     * @return self
     */
    public function addOnceToPackage(Package $package): self
    {
        if (!is_array($this->package)) {
            $this->package = [];
        }

        $this->package[0] = $package;

        return $this;
    }

    /**
     * @return Package
     */
    public function addOnceToPackageWithCreate(): Package
    {
        if (!is_array($this->package)) {
            $this->package = [];
        }

        if ($this->package === []) {
            $this->addOnceTopackage(new Package());
        }

        return $this->package[0];
    }
}
