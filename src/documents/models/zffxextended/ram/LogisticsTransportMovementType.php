<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxextended\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxextended\qdt\TransportModeCodeType;

class LogisticsTransportMovementType
{
    use HandlesObjectFlags;

    /**
     * @var TransportModeCodeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\qdt\TransportModeCodeType")
     * @JMS\Expose
     * @JMS\SerializedName("ModeCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getModeCode", setter="setModeCode")
     */
    private $modeCode;

    /**
     * @return TransportModeCodeType|null
     */
    public function getModeCode(): ?TransportModeCodeType
    {
        return $this->modeCode;
    }

    /**
     * @return TransportModeCodeType
     */
    public function getModeCodeWithCreate(): TransportModeCodeType
    {
        $this->modeCode = is_null($this->modeCode) ? new TransportModeCodeType() : $this->modeCode;

        return $this->modeCode;
    }

    /**
     * @param TransportModeCodeType|null $modeCode
     * @return self
     */
    public function setModeCode(?TransportModeCodeType $modeCode = null): self
    {
        $this->modeCode = $modeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetModeCode(): self
    {
        $this->modeCode = null;

        return $this;
    }
}
