<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffx\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffx\udt\IDType;
use horstoeko\invoicesuite\documents\models\zffx\udt\TextType;
use JMS\Serializer\Annotation as JMS;

class UniversalCommunicationType
{
    use HandlesObjectFlags;

    /**
     * @var null|IDType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("URIID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getURIID", setter="setURIID")
     */
    private $uRIID;

    /**
     * @var null|TextType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("CompleteNumber")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getCompleteNumber", setter="setCompleteNumber")
     */
    private $completeNumber;

    /**
     * @return null|IDType
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
     * @param  null|IDType $uRIID
     * @return static
     */
    public function setURIID(?IDType $uRIID = null): static
    {
        $this->uRIID = $uRIID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetURIID(): static
    {
        $this->uRIID = null;

        return $this;
    }

    /**
     * @return null|TextType
     */
    public function getCompleteNumber(): ?TextType
    {
        return $this->completeNumber;
    }

    /**
     * @return TextType
     */
    public function getCompleteNumberWithCreate(): TextType
    {
        $this->completeNumber = is_null($this->completeNumber) ? new TextType() : $this->completeNumber;

        return $this->completeNumber;
    }

    /**
     * @param  null|TextType $completeNumber
     * @return static
     */
    public function setCompleteNumber(?TextType $completeNumber = null): static
    {
        $this->completeNumber = $completeNumber;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCompleteNumber(): static
    {
        $this->completeNumber = null;

        return $this;
    }
}
