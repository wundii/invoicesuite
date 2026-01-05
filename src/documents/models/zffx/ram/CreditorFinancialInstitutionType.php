<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffx\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffx\udt\IDType;
use JMS\Serializer\Annotation as JMS;

class CreditorFinancialInstitutionType
{
    use HandlesObjectFlags;

    /**
     * @var null|IDType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("BICID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBICID", setter="setBICID")
     */
    private $bICID;

    /**
     * @return null|IDType
     */
    public function getBICID(): ?IDType
    {
        return $this->bICID;
    }

    /**
     * @return IDType
     */
    public function getBICIDWithCreate(): IDType
    {
        $this->bICID = is_null($this->bICID) ? new IDType() : $this->bICID;

        return $this->bICID;
    }

    /**
     * @param  null|IDType $bICID
     * @return static
     */
    public function setBICID(?IDType $bICID = null): static
    {
        $this->bICID = $bICID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBICID(): static
    {
        $this->bICID = null;

        return $this;
    }
}
