<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffx\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffx\qdt\CountryIDType;
use horstoeko\invoicesuite\documents\models\zffx\udt\CodeType;
use horstoeko\invoicesuite\documents\models\zffx\udt\TextType;
use JMS\Serializer\Annotation as JMS;

class TradeAddressType
{
    use HandlesObjectFlags;

    /**
     * @var null|CodeType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\udt\CodeType")
     * @JMS\Expose
     * @JMS\SerializedName("PostcodeCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getPostcodeCode", setter="setPostcodeCode")
     */
    private $postcodeCode;

    /**
     * @var null|TextType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("LineOne")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getLineOne", setter="setLineOne")
     */
    private $lineOne;

    /**
     * @var null|TextType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("LineTwo")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getLineTwo", setter="setLineTwo")
     */
    private $lineTwo;

    /**
     * @var null|TextType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("LineThree")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getLineThree", setter="setLineThree")
     */
    private $lineThree;

    /**
     * @var null|TextType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("CityName")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getCityName", setter="setCityName")
     */
    private $cityName;

    /**
     * @var null|CountryIDType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\qdt\CountryIDType")
     * @JMS\Expose
     * @JMS\SerializedName("CountryID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getCountryID", setter="setCountryID")
     */
    private $countryID;

    /**
     * @var null|TextType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("CountrySubDivisionName")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getCountrySubDivisionName", setter="setCountrySubDivisionName")
     */
    private $countrySubDivisionName;

    /**
     * @return null|CodeType
     */
    public function getPostcodeCode(): ?CodeType
    {
        return $this->postcodeCode;
    }

    /**
     * @return CodeType
     */
    public function getPostcodeCodeWithCreate(): CodeType
    {
        $this->postcodeCode = is_null($this->postcodeCode) ? new CodeType() : $this->postcodeCode;

        return $this->postcodeCode;
    }

    /**
     * @param  null|CodeType $postcodeCode
     * @return static
     */
    public function setPostcodeCode(?CodeType $postcodeCode = null): static
    {
        $this->postcodeCode = $postcodeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPostcodeCode(): static
    {
        $this->postcodeCode = null;

        return $this;
    }

    /**
     * @return null|TextType
     */
    public function getLineOne(): ?TextType
    {
        return $this->lineOne;
    }

    /**
     * @return TextType
     */
    public function getLineOneWithCreate(): TextType
    {
        $this->lineOne = is_null($this->lineOne) ? new TextType() : $this->lineOne;

        return $this->lineOne;
    }

    /**
     * @param  null|TextType $lineOne
     * @return static
     */
    public function setLineOne(?TextType $lineOne = null): static
    {
        $this->lineOne = $lineOne;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLineOne(): static
    {
        $this->lineOne = null;

        return $this;
    }

    /**
     * @return null|TextType
     */
    public function getLineTwo(): ?TextType
    {
        return $this->lineTwo;
    }

    /**
     * @return TextType
     */
    public function getLineTwoWithCreate(): TextType
    {
        $this->lineTwo = is_null($this->lineTwo) ? new TextType() : $this->lineTwo;

        return $this->lineTwo;
    }

    /**
     * @param  null|TextType $lineTwo
     * @return static
     */
    public function setLineTwo(?TextType $lineTwo = null): static
    {
        $this->lineTwo = $lineTwo;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLineTwo(): static
    {
        $this->lineTwo = null;

        return $this;
    }

    /**
     * @return null|TextType
     */
    public function getLineThree(): ?TextType
    {
        return $this->lineThree;
    }

    /**
     * @return TextType
     */
    public function getLineThreeWithCreate(): TextType
    {
        $this->lineThree = is_null($this->lineThree) ? new TextType() : $this->lineThree;

        return $this->lineThree;
    }

    /**
     * @param  null|TextType $lineThree
     * @return static
     */
    public function setLineThree(?TextType $lineThree = null): static
    {
        $this->lineThree = $lineThree;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLineThree(): static
    {
        $this->lineThree = null;

        return $this;
    }

    /**
     * @return null|TextType
     */
    public function getCityName(): ?TextType
    {
        return $this->cityName;
    }

    /**
     * @return TextType
     */
    public function getCityNameWithCreate(): TextType
    {
        $this->cityName = is_null($this->cityName) ? new TextType() : $this->cityName;

        return $this->cityName;
    }

    /**
     * @param  null|TextType $cityName
     * @return static
     */
    public function setCityName(?TextType $cityName = null): static
    {
        $this->cityName = $cityName;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCityName(): static
    {
        $this->cityName = null;

        return $this;
    }

    /**
     * @return null|CountryIDType
     */
    public function getCountryID(): ?CountryIDType
    {
        return $this->countryID;
    }

    /**
     * @return CountryIDType
     */
    public function getCountryIDWithCreate(): CountryIDType
    {
        $this->countryID = is_null($this->countryID) ? new CountryIDType() : $this->countryID;

        return $this->countryID;
    }

    /**
     * @param  null|CountryIDType $countryID
     * @return static
     */
    public function setCountryID(?CountryIDType $countryID = null): static
    {
        $this->countryID = $countryID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCountryID(): static
    {
        $this->countryID = null;

        return $this;
    }

    /**
     * @return null|TextType
     */
    public function getCountrySubDivisionName(): ?TextType
    {
        return $this->countrySubDivisionName;
    }

    /**
     * @return TextType
     */
    public function getCountrySubDivisionNameWithCreate(): TextType
    {
        $this->countrySubDivisionName = is_null($this->countrySubDivisionName) ? new TextType() : $this->countrySubDivisionName;

        return $this->countrySubDivisionName;
    }

    /**
     * @param  null|TextType $countrySubDivisionName
     * @return static
     */
    public function setCountrySubDivisionName(?TextType $countrySubDivisionName = null): static
    {
        $this->countrySubDivisionName = $countrySubDivisionName;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCountrySubDivisionName(): static
    {
        $this->countrySubDivisionName = null;

        return $this;
    }
}
