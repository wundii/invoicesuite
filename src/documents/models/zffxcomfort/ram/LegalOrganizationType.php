<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxcomfort\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxcomfort\udt\IDType;
use horstoeko\invoicesuite\documents\models\zffxcomfort\udt\TextType;

class LegalOrganizationType
{
    use HandlesObjectFlags;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("ID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getID", setter="setID")
     */
    private $iD;

    /**
     * @var TextType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("TradingBusinessName")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getTradingBusinessName", setter="setTradingBusinessName")
     */
    private $tradingBusinessName;

    /**
     * @return IDType|null
     */
    public function getID(): ?IDType
    {
        return $this->iD;
    }

    /**
     * @return IDType
     */
    public function getIDWithCreate(): IDType
    {
        $this->iD = is_null($this->iD) ? new IDType() : $this->iD;

        return $this->iD;
    }

    /**
     * @param IDType|null $iD
     * @return self
     */
    public function setID(?IDType $iD = null): self
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

    /**
     * @return TextType|null
     */
    public function getTradingBusinessName(): ?TextType
    {
        return $this->tradingBusinessName;
    }

    /**
     * @return TextType
     */
    public function getTradingBusinessNameWithCreate(): TextType
    {
        $this->tradingBusinessName = is_null($this->tradingBusinessName) ? new TextType() : $this->tradingBusinessName;

        return $this->tradingBusinessName;
    }

    /**
     * @param TextType|null $tradingBusinessName
     * @return self
     */
    public function setTradingBusinessName(?TextType $tradingBusinessName = null): self
    {
        $this->tradingBusinessName = $tradingBusinessName;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTradingBusinessName(): self
    {
        $this->tradingBusinessName = null;

        return $this;
    }
}
