<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxcomfort\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxcomfort\qdt\CountryIDType;

class TradeCountryType
{
    use HandlesObjectFlags;

    /**
     * @var CountryIDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\qdt\CountryIDType")
     * @JMS\Expose
     * @JMS\SerializedName("ID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getID", setter="setID")
     */
    private $iD;

    /**
     * @return CountryIDType|null
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
     * @param CountryIDType|null $iD
     * @return self
     */
    public function setID(?CountryIDType $iD = null): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetID(): self
    {
        $this->iD = null;

        return $this;
    }
}
