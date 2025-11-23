<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxextended\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\IDType;

class CreditorFinancialInstitutionType
{
    use HandlesObjectFlags;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("BICID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBICID", setter="setBICID")
     */
    private $bICID;

    /**
     * @return IDType|null
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
     * @param IDType|null $bICID
     * @return self
     */
    public function setBICID(?IDType $bICID = null): self
    {
        $this->bICID = $bICID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetBICID(): self
    {
        $this->bICID = null;

        return $this;
    }
}
