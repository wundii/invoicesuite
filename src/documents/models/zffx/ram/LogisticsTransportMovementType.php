<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffx\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffx\qdt\TransportModeCodeType;
use JMS\Serializer\Annotation as JMS;

class LogisticsTransportMovementType
{
    use HandlesObjectFlags;

    /**
     * @var null|TransportModeCodeType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\qdt\TransportModeCodeType")
     * @JMS\Expose
     * @JMS\SerializedName("ModeCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getModeCode", setter="setModeCode")
     */
    private $modeCode;

    /**
     * @return null|TransportModeCodeType
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
     * @param  null|TransportModeCodeType $modeCode
     * @return static
     */
    public function setModeCode(?TransportModeCodeType $modeCode = null): static
    {
        $this->modeCode = $modeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetModeCode(): static
    {
        $this->modeCode = null;

        return $this;
    }
}
