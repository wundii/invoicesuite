<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxminimum\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxminimum\udt\IDType;

class ReferencedDocumentType
{
    use HandlesObjectFlags;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxminimum\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("IssuerAssignedID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getIssuerAssignedID", setter="setIssuerAssignedID")
     */
    private $issuerAssignedID;

    /**
     * @return IDType|null
     */
    public function getIssuerAssignedID(): ?IDType
    {
        return $this->issuerAssignedID;
    }

    /**
     * @return IDType
     */
    public function getIssuerAssignedIDWithCreate(): IDType
    {
        $this->issuerAssignedID = is_null($this->issuerAssignedID) ? new IDType() : $this->issuerAssignedID;

        return $this->issuerAssignedID;
    }

    /**
     * @param IDType|null $issuerAssignedID
     * @return self
     */
    public function setIssuerAssignedID(?IDType $issuerAssignedID = null): self
    {
        $this->issuerAssignedID = $issuerAssignedID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetIssuerAssignedID(): self
    {
        $this->issuerAssignedID = null;

        return $this;
    }
}
