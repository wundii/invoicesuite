<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\EmergencyProceduresCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Extension;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PlacardEndorsement;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PlacardNotation;

class SecondaryHazardType
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
     * @var PlacardNotation|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PlacardNotation")
     * @JMS\Expose
     * @JMS\SerializedName("PlacardNotation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPlacardNotation", setter="setPlacardNotation")
     */
    private $placardNotation;

    /**
     * @var PlacardEndorsement|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PlacardEndorsement")
     * @JMS\Expose
     * @JMS\SerializedName("PlacardEndorsement")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPlacardEndorsement", setter="setPlacardEndorsement")
     */
    private $placardEndorsement;

    /**
     * @var EmergencyProceduresCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\EmergencyProceduresCode")
     * @JMS\Expose
     * @JMS\SerializedName("EmergencyProceduresCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEmergencyProceduresCode", setter="setEmergencyProceduresCode")
     */
    private $emergencyProceduresCode;

    /**
     * @var array<Extension>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Extension>")
     * @JMS\Expose
     * @JMS\SerializedName("Extension")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Extension", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getExtension", setter="setExtension")
     */
    private $extension;

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
     * @return PlacardNotation|null
     */
    public function getPlacardNotation(): ?PlacardNotation
    {
        return $this->placardNotation;
    }

    /**
     * @return PlacardNotation
     */
    public function getPlacardNotationWithCreate(): PlacardNotation
    {
        $this->placardNotation = is_null($this->placardNotation) ? new PlacardNotation() : $this->placardNotation;

        return $this->placardNotation;
    }

    /**
     * @param PlacardNotation|null $placardNotation
     * @return self
     */
    public function setPlacardNotation(?PlacardNotation $placardNotation = null): self
    {
        $this->placardNotation = $placardNotation;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPlacardNotation(): self
    {
        $this->placardNotation = null;

        return $this;
    }

    /**
     * @return PlacardEndorsement|null
     */
    public function getPlacardEndorsement(): ?PlacardEndorsement
    {
        return $this->placardEndorsement;
    }

    /**
     * @return PlacardEndorsement
     */
    public function getPlacardEndorsementWithCreate(): PlacardEndorsement
    {
        $this->placardEndorsement = is_null($this->placardEndorsement) ? new PlacardEndorsement() : $this->placardEndorsement;

        return $this->placardEndorsement;
    }

    /**
     * @param PlacardEndorsement|null $placardEndorsement
     * @return self
     */
    public function setPlacardEndorsement(?PlacardEndorsement $placardEndorsement = null): self
    {
        $this->placardEndorsement = $placardEndorsement;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPlacardEndorsement(): self
    {
        $this->placardEndorsement = null;

        return $this;
    }

    /**
     * @return EmergencyProceduresCode|null
     */
    public function getEmergencyProceduresCode(): ?EmergencyProceduresCode
    {
        return $this->emergencyProceduresCode;
    }

    /**
     * @return EmergencyProceduresCode
     */
    public function getEmergencyProceduresCodeWithCreate(): EmergencyProceduresCode
    {
        $this->emergencyProceduresCode = is_null($this->emergencyProceduresCode) ? new EmergencyProceduresCode() : $this->emergencyProceduresCode;

        return $this->emergencyProceduresCode;
    }

    /**
     * @param EmergencyProceduresCode|null $emergencyProceduresCode
     * @return self
     */
    public function setEmergencyProceduresCode(?EmergencyProceduresCode $emergencyProceduresCode = null): self
    {
        $this->emergencyProceduresCode = $emergencyProceduresCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetEmergencyProceduresCode(): self
    {
        $this->emergencyProceduresCode = null;

        return $this;
    }

    /**
     * @return array<Extension>|null
     */
    public function getExtension(): ?array
    {
        return $this->extension;
    }

    /**
     * @param array<Extension>|null $extension
     * @return self
     */
    public function setExtension(?array $extension = null): self
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetExtension(): self
    {
        $this->extension = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearExtension(): self
    {
        $this->extension = [];

        return $this;
    }

    /**
     * @return Extension|null
     */
    public function firstExtension(): ?Extension
    {
        $extension = $this->extension ?? [];
        $extension = reset($extension);

        if ($extension === false) {
            return null;
        }

        return $extension;
    }

    /**
     * @return Extension|null
     */
    public function lastExtension(): ?Extension
    {
        $extension = $this->extension ?? [];
        $extension = end($extension);

        if ($extension === false) {
            return null;
        }

        return $extension;
    }

    /**
     * @param Extension $extension
     * @return self
     */
    public function addToExtension(Extension $extension): self
    {
        $this->extension[] = $extension;

        return $this;
    }

    /**
     * @return Extension
     */
    public function addToExtensionWithCreate(): Extension
    {
        $this->addToextension($extension = new Extension());

        return $extension;
    }

    /**
     * @param Extension $extension
     * @return self
     */
    public function addOnceToExtension(Extension $extension): self
    {
        if (!is_array($this->extension)) {
            $this->extension = [];
        }

        $this->extension[0] = $extension;

        return $this;
    }

    /**
     * @return Extension
     */
    public function addOnceToExtensionWithCreate(): Extension
    {
        if (!is_array($this->extension)) {
            $this->extension = [];
        }

        if ($this->extension === []) {
            $this->addOnceToextension(new Extension());
        }

        return $this->extension[0];
    }
}
