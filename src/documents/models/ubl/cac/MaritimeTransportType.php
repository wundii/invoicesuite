<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\GrossTonnageMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\NetTonnageMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\RadioCallSignID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ShipsRequirements;
use horstoeko\invoicesuite\documents\models\ubl\cbc\VesselID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\VesselName;

class MaritimeTransportType
{
    use HandlesObjectFlags;

    /**
     * @var VesselID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\VesselID")
     * @JMS\Expose
     * @JMS\SerializedName("VesselID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getVesselID", setter="setVesselID")
     */
    private $vesselID;

    /**
     * @var VesselName|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\VesselName")
     * @JMS\Expose
     * @JMS\SerializedName("VesselName")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getVesselName", setter="setVesselName")
     */
    private $vesselName;

    /**
     * @var RadioCallSignID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\RadioCallSignID")
     * @JMS\Expose
     * @JMS\SerializedName("RadioCallSignID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRadioCallSignID", setter="setRadioCallSignID")
     */
    private $radioCallSignID;

    /**
     * @var array<ShipsRequirements>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\ShipsRequirements>")
     * @JMS\Expose
     * @JMS\SerializedName("ShipsRequirements")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ShipsRequirements", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getShipsRequirements", setter="setShipsRequirements")
     */
    private $shipsRequirements;

    /**
     * @var GrossTonnageMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\GrossTonnageMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("GrossTonnageMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getGrossTonnageMeasure", setter="setGrossTonnageMeasure")
     */
    private $grossTonnageMeasure;

    /**
     * @var NetTonnageMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\NetTonnageMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("NetTonnageMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getNetTonnageMeasure", setter="setNetTonnageMeasure")
     */
    private $netTonnageMeasure;

    /**
     * @var RegistryCertificateDocumentReference|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\RegistryCertificateDocumentReference")
     * @JMS\Expose
     * @JMS\SerializedName("RegistryCertificateDocumentReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRegistryCertificateDocumentReference", setter="setRegistryCertificateDocumentReference")
     */
    private $registryCertificateDocumentReference;

    /**
     * @var RegistryPortLocation|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\RegistryPortLocation")
     * @JMS\Expose
     * @JMS\SerializedName("RegistryPortLocation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRegistryPortLocation", setter="setRegistryPortLocation")
     */
    private $registryPortLocation;

    /**
     * @return VesselID|null
     */
    public function getVesselID(): ?VesselID
    {
        return $this->vesselID;
    }

    /**
     * @return VesselID
     */
    public function getVesselIDWithCreate(): VesselID
    {
        $this->vesselID = is_null($this->vesselID) ? new VesselID() : $this->vesselID;

        return $this->vesselID;
    }

    /**
     * @param VesselID|null $vesselID
     * @return self
     */
    public function setVesselID(?VesselID $vesselID = null): self
    {
        $this->vesselID = $vesselID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetVesselID(): self
    {
        $this->vesselID = null;

        return $this;
    }

    /**
     * @return VesselName|null
     */
    public function getVesselName(): ?VesselName
    {
        return $this->vesselName;
    }

    /**
     * @return VesselName
     */
    public function getVesselNameWithCreate(): VesselName
    {
        $this->vesselName = is_null($this->vesselName) ? new VesselName() : $this->vesselName;

        return $this->vesselName;
    }

    /**
     * @param VesselName|null $vesselName
     * @return self
     */
    public function setVesselName(?VesselName $vesselName = null): self
    {
        $this->vesselName = $vesselName;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetVesselName(): self
    {
        $this->vesselName = null;

        return $this;
    }

    /**
     * @return RadioCallSignID|null
     */
    public function getRadioCallSignID(): ?RadioCallSignID
    {
        return $this->radioCallSignID;
    }

    /**
     * @return RadioCallSignID
     */
    public function getRadioCallSignIDWithCreate(): RadioCallSignID
    {
        $this->radioCallSignID = is_null($this->radioCallSignID) ? new RadioCallSignID() : $this->radioCallSignID;

        return $this->radioCallSignID;
    }

    /**
     * @param RadioCallSignID|null $radioCallSignID
     * @return self
     */
    public function setRadioCallSignID(?RadioCallSignID $radioCallSignID = null): self
    {
        $this->radioCallSignID = $radioCallSignID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetRadioCallSignID(): self
    {
        $this->radioCallSignID = null;

        return $this;
    }

    /**
     * @return array<ShipsRequirements>|null
     */
    public function getShipsRequirements(): ?array
    {
        return $this->shipsRequirements;
    }

    /**
     * @param array<ShipsRequirements>|null $shipsRequirements
     * @return self
     */
    public function setShipsRequirements(?array $shipsRequirements = null): self
    {
        $this->shipsRequirements = $shipsRequirements;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetShipsRequirements(): self
    {
        $this->shipsRequirements = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearShipsRequirements(): self
    {
        $this->shipsRequirements = [];

        return $this;
    }

    /**
     * @return ShipsRequirements|null
     */
    public function firstShipsRequirements(): ?ShipsRequirements
    {
        $shipsRequirements = $this->shipsRequirements ?? [];
        $shipsRequirements = reset($shipsRequirements);

        if ($shipsRequirements === false) {
            return null;
        }

        return $shipsRequirements;
    }

    /**
     * @return ShipsRequirements|null
     */
    public function lastShipsRequirements(): ?ShipsRequirements
    {
        $shipsRequirements = $this->shipsRequirements ?? [];
        $shipsRequirements = end($shipsRequirements);

        if ($shipsRequirements === false) {
            return null;
        }

        return $shipsRequirements;
    }

    /**
     * @param ShipsRequirements $shipsRequirements
     * @return self
     */
    public function addToShipsRequirements(ShipsRequirements $shipsRequirements): self
    {
        $this->shipsRequirements[] = $shipsRequirements;

        return $this;
    }

    /**
     * @return ShipsRequirements
     */
    public function addToShipsRequirementsWithCreate(): ShipsRequirements
    {
        $this->addToshipsRequirements($shipsRequirements = new ShipsRequirements());

        return $shipsRequirements;
    }

    /**
     * @param ShipsRequirements $shipsRequirements
     * @return self
     */
    public function addOnceToShipsRequirements(ShipsRequirements $shipsRequirements): self
    {
        if (!is_array($this->shipsRequirements)) {
            $this->shipsRequirements = [];
        }

        $this->shipsRequirements[0] = $shipsRequirements;

        return $this;
    }

    /**
     * @return ShipsRequirements
     */
    public function addOnceToShipsRequirementsWithCreate(): ShipsRequirements
    {
        if (!is_array($this->shipsRequirements)) {
            $this->shipsRequirements = [];
        }

        if ($this->shipsRequirements === []) {
            $this->addOnceToshipsRequirements(new ShipsRequirements());
        }

        return $this->shipsRequirements[0];
    }

    /**
     * @return GrossTonnageMeasure|null
     */
    public function getGrossTonnageMeasure(): ?GrossTonnageMeasure
    {
        return $this->grossTonnageMeasure;
    }

    /**
     * @return GrossTonnageMeasure
     */
    public function getGrossTonnageMeasureWithCreate(): GrossTonnageMeasure
    {
        $this->grossTonnageMeasure = is_null($this->grossTonnageMeasure) ? new GrossTonnageMeasure() : $this->grossTonnageMeasure;

        return $this->grossTonnageMeasure;
    }

    /**
     * @param GrossTonnageMeasure|null $grossTonnageMeasure
     * @return self
     */
    public function setGrossTonnageMeasure(?GrossTonnageMeasure $grossTonnageMeasure = null): self
    {
        $this->grossTonnageMeasure = $grossTonnageMeasure;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetGrossTonnageMeasure(): self
    {
        $this->grossTonnageMeasure = null;

        return $this;
    }

    /**
     * @return NetTonnageMeasure|null
     */
    public function getNetTonnageMeasure(): ?NetTonnageMeasure
    {
        return $this->netTonnageMeasure;
    }

    /**
     * @return NetTonnageMeasure
     */
    public function getNetTonnageMeasureWithCreate(): NetTonnageMeasure
    {
        $this->netTonnageMeasure = is_null($this->netTonnageMeasure) ? new NetTonnageMeasure() : $this->netTonnageMeasure;

        return $this->netTonnageMeasure;
    }

    /**
     * @param NetTonnageMeasure|null $netTonnageMeasure
     * @return self
     */
    public function setNetTonnageMeasure(?NetTonnageMeasure $netTonnageMeasure = null): self
    {
        $this->netTonnageMeasure = $netTonnageMeasure;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetNetTonnageMeasure(): self
    {
        $this->netTonnageMeasure = null;

        return $this;
    }

    /**
     * @return RegistryCertificateDocumentReference|null
     */
    public function getRegistryCertificateDocumentReference(): ?RegistryCertificateDocumentReference
    {
        return $this->registryCertificateDocumentReference;
    }

    /**
     * @return RegistryCertificateDocumentReference
     */
    public function getRegistryCertificateDocumentReferenceWithCreate(): RegistryCertificateDocumentReference
    {
        $this->registryCertificateDocumentReference = is_null($this->registryCertificateDocumentReference) ? new RegistryCertificateDocumentReference() : $this->registryCertificateDocumentReference;

        return $this->registryCertificateDocumentReference;
    }

    /**
     * @param RegistryCertificateDocumentReference|null $registryCertificateDocumentReference
     * @return self
     */
    public function setRegistryCertificateDocumentReference(
        ?RegistryCertificateDocumentReference $registryCertificateDocumentReference = null,
    ): self {
        $this->registryCertificateDocumentReference = $registryCertificateDocumentReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetRegistryCertificateDocumentReference(): self
    {
        $this->registryCertificateDocumentReference = null;

        return $this;
    }

    /**
     * @return RegistryPortLocation|null
     */
    public function getRegistryPortLocation(): ?RegistryPortLocation
    {
        return $this->registryPortLocation;
    }

    /**
     * @return RegistryPortLocation
     */
    public function getRegistryPortLocationWithCreate(): RegistryPortLocation
    {
        $this->registryPortLocation = is_null($this->registryPortLocation) ? new RegistryPortLocation() : $this->registryPortLocation;

        return $this->registryPortLocation;
    }

    /**
     * @param RegistryPortLocation|null $registryPortLocation
     * @return self
     */
    public function setRegistryPortLocation(?RegistryPortLocation $registryPortLocation = null): self
    {
        $this->registryPortLocation = $registryPortLocation;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetRegistryPortLocation(): self
    {
        $this->registryPortLocation = null;

        return $this;
    }
}
