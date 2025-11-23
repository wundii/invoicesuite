<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxextended\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;

class SupplyChainConsignmentType
{
    use HandlesObjectFlags;

    /**
     * @var array<LogisticsTransportMovementType>|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\zffxextended\ram\LogisticsTransportMovementType>")
     * @JMS\Expose
     * @JMS\SerializedName("SpecifiedLogisticsTransportMovement")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\XmlList(inline=true, entry="SpecifiedLogisticsTransportMovement", namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\Accessor(getter="getSpecifiedLogisticsTransportMovement", setter="setSpecifiedLogisticsTransportMovement")
     */
    private $specifiedLogisticsTransportMovement;

    /**
     * @return array<LogisticsTransportMovementType>|null
     */
    public function getSpecifiedLogisticsTransportMovement(): ?array
    {
        return $this->specifiedLogisticsTransportMovement;
    }

    /**
     * @param array<LogisticsTransportMovementType>|null $specifiedLogisticsTransportMovement
     * @return self
     */
    public function setSpecifiedLogisticsTransportMovement(?array $specifiedLogisticsTransportMovement = null): self
    {
        $this->specifiedLogisticsTransportMovement = $specifiedLogisticsTransportMovement;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSpecifiedLogisticsTransportMovement(): self
    {
        $this->specifiedLogisticsTransportMovement = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearSpecifiedLogisticsTransportMovement(): self
    {
        $this->specifiedLogisticsTransportMovement = [];

        return $this;
    }

    /**
     * @param LogisticsTransportMovementType $specifiedLogisticsTransportMovement
     * @return self
     */
    public function addToSpecifiedLogisticsTransportMovement(
        LogisticsTransportMovementType $specifiedLogisticsTransportMovement,
    ): self {
        $this->specifiedLogisticsTransportMovement[] = $specifiedLogisticsTransportMovement;

        return $this;
    }

    /**
     * @return LogisticsTransportMovementType
     */
    public function addToSpecifiedLogisticsTransportMovementWithCreate(): LogisticsTransportMovementType
    {
        $this->addTospecifiedLogisticsTransportMovement($specifiedLogisticsTransportMovement = new LogisticsTransportMovementType());

        return $specifiedLogisticsTransportMovement;
    }

    /**
     * @param LogisticsTransportMovementType $specifiedLogisticsTransportMovement
     * @return self
     */
    public function addOnceToSpecifiedLogisticsTransportMovement(
        LogisticsTransportMovementType $specifiedLogisticsTransportMovement,
    ): self {
        if (!is_array($this->specifiedLogisticsTransportMovement)) {
            $this->specifiedLogisticsTransportMovement = [];
        }

        $this->specifiedLogisticsTransportMovement[0] = $specifiedLogisticsTransportMovement;

        return $this;
    }

    /**
     * @return LogisticsTransportMovementType
     */
    public function addOnceToSpecifiedLogisticsTransportMovementWithCreate(): LogisticsTransportMovementType
    {
        if (!is_array($this->specifiedLogisticsTransportMovement)) {
            $this->specifiedLogisticsTransportMovement = [];
        }

        if ($this->specifiedLogisticsTransportMovement === []) {
            $this->addOnceTospecifiedLogisticsTransportMovement(new LogisticsTransportMovementType());
        }

        return $this->specifiedLogisticsTransportMovement[0];
    }
}
