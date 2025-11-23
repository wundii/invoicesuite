<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Condition;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SealIssuerTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SealStatusCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SealingPartyType;

class TransportEquipmentSealType
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
     * @var SealIssuerTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\SealIssuerTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("SealIssuerTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSealIssuerTypeCode", setter="setSealIssuerTypeCode")
     */
    private $sealIssuerTypeCode;

    /**
     * @var Condition|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Condition")
     * @JMS\Expose
     * @JMS\SerializedName("Condition")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCondition", setter="setCondition")
     */
    private $condition;

    /**
     * @var SealStatusCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\SealStatusCode")
     * @JMS\Expose
     * @JMS\SerializedName("SealStatusCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSealStatusCode", setter="setSealStatusCode")
     */
    private $sealStatusCode;

    /**
     * @var SealingPartyType|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\SealingPartyType")
     * @JMS\Expose
     * @JMS\SerializedName("SealingPartyType")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSealingPartyType", setter="setSealingPartyType")
     */
    private $sealingPartyType;

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
     * @return SealIssuerTypeCode|null
     */
    public function getSealIssuerTypeCode(): ?SealIssuerTypeCode
    {
        return $this->sealIssuerTypeCode;
    }

    /**
     * @return SealIssuerTypeCode
     */
    public function getSealIssuerTypeCodeWithCreate(): SealIssuerTypeCode
    {
        $this->sealIssuerTypeCode = is_null($this->sealIssuerTypeCode) ? new SealIssuerTypeCode() : $this->sealIssuerTypeCode;

        return $this->sealIssuerTypeCode;
    }

    /**
     * @param SealIssuerTypeCode|null $sealIssuerTypeCode
     * @return self
     */
    public function setSealIssuerTypeCode(?SealIssuerTypeCode $sealIssuerTypeCode = null): self
    {
        $this->sealIssuerTypeCode = $sealIssuerTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSealIssuerTypeCode(): self
    {
        $this->sealIssuerTypeCode = null;

        return $this;
    }

    /**
     * @return Condition|null
     */
    public function getCondition(): ?Condition
    {
        return $this->condition;
    }

    /**
     * @return Condition
     */
    public function getConditionWithCreate(): Condition
    {
        $this->condition = is_null($this->condition) ? new Condition() : $this->condition;

        return $this->condition;
    }

    /**
     * @param Condition|null $condition
     * @return self
     */
    public function setCondition(?Condition $condition = null): self
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCondition(): self
    {
        $this->condition = null;

        return $this;
    }

    /**
     * @return SealStatusCode|null
     */
    public function getSealStatusCode(): ?SealStatusCode
    {
        return $this->sealStatusCode;
    }

    /**
     * @return SealStatusCode
     */
    public function getSealStatusCodeWithCreate(): SealStatusCode
    {
        $this->sealStatusCode = is_null($this->sealStatusCode) ? new SealStatusCode() : $this->sealStatusCode;

        return $this->sealStatusCode;
    }

    /**
     * @param SealStatusCode|null $sealStatusCode
     * @return self
     */
    public function setSealStatusCode(?SealStatusCode $sealStatusCode = null): self
    {
        $this->sealStatusCode = $sealStatusCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSealStatusCode(): self
    {
        $this->sealStatusCode = null;

        return $this;
    }

    /**
     * @return SealingPartyType|null
     */
    public function getSealingPartyType(): ?SealingPartyType
    {
        return $this->sealingPartyType;
    }

    /**
     * @return SealingPartyType
     */
    public function getSealingPartyTypeWithCreate(): SealingPartyType
    {
        $this->sealingPartyType = is_null($this->sealingPartyType) ? new SealingPartyType() : $this->sealingPartyType;

        return $this->sealingPartyType;
    }

    /**
     * @param SealingPartyType|null $sealingPartyType
     * @return self
     */
    public function setSealingPartyType(?SealingPartyType $sealingPartyType = null): self
    {
        $this->sealingPartyType = $sealingPartyType;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSealingPartyType(): self
    {
        $this->sealingPartyType = null;

        return $this;
    }
}
