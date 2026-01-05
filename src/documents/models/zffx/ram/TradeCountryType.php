<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffx\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffx\qdt\CountryIDType;
use JMS\Serializer\Annotation as JMS;

class TradeCountryType
{
    use HandlesObjectFlags;

    /**
     * @var null|CountryIDType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\qdt\CountryIDType")
     * @JMS\Expose
     * @JMS\SerializedName("ID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getID", setter="setID")
     */
    private $iD;

    /**
     * @return null|CountryIDType
     */
    public function getID(): ?CountryIDType
    {
        return $this->iD;
    }

    /**
     * @return CountryIDType
     */
    public function getIDWithCreate(): CountryIDType
    {
        $this->iD = is_null($this->iD) ? new CountryIDType() : $this->iD;

        return $this->iD;
    }

    /**
     * @param  null|CountryIDType $iD
     * @return static
     */
    public function setID(?CountryIDType $iD = null): static
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetID(): static
    {
        $this->iD = null;

        return $this;
    }
}
