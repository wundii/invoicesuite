<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxbasicwl\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\IDType;

class UniversalCommunicationType
{
    use HandlesObjectFlags;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("URIID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getURIID", setter="setURIID")
     */
    private $uRIID;

    /**
     * @return IDType|null
     */
    public function getURIID(): ?IDType
    {
        return $this->uRIID;
    }

    /**
     * @return IDType
     */
    public function getURIIDWithCreate(): IDType
    {
        $this->uRIID = is_null($this->uRIID) ? new IDType() : $this->uRIID;

        return $this->uRIID;
    }

    /**
     * @param IDType|null $uRIID
     * @return self
     */
    public function setURIID(?IDType $uRIID = null): self
    {
        $this->uRIID = $uRIID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetURIID(): self
    {
        $this->uRIID = null;

        return $this;
    }
}
