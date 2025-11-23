<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxextended\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\IDType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\TextType;

class UniversalCommunicationType
{
    use HandlesObjectFlags;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("URIID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getURIID", setter="setURIID")
     */
    private $uRIID;

    /**
     * @var TextType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("CompleteNumber")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getCompleteNumber", setter="setCompleteNumber")
     */
    private $completeNumber;

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

    /**
     * @return TextType|null
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
     * @param TextType|null $completeNumber
     * @return self
     */
    public function setCompleteNumber(?TextType $completeNumber = null): self
    {
        $this->completeNumber = $completeNumber;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCompleteNumber(): self
    {
        $this->completeNumber = null;

        return $this;
    }
}
