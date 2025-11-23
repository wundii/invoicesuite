<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxcomfort\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxcomfort\udt\IDType;
use horstoeko\invoicesuite\documents\models\zffxcomfort\udt\TextType;

class TradeProductType
{
    use HandlesObjectFlags;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("GlobalID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getGlobalID", setter="setGlobalID")
     */
    private $globalID;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("SellerAssignedID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getSellerAssignedID", setter="setSellerAssignedID")
     */
    private $sellerAssignedID;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("BuyerAssignedID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBuyerAssignedID", setter="setBuyerAssignedID")
     */
    private $buyerAssignedID;

    /**
     * @var TextType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("Name")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getName", setter="setName")
     */
    private $name;

    /**
     * @var TextType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("Description")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getDescription", setter="setDescription")
     */
    private $description;

    /**
     * @var array<ProductCharacteristicType>|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\zffxcomfort\ram\ProductCharacteristicType>")
     * @JMS\Expose
     * @JMS\SerializedName("ApplicableProductCharacteristic")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\XmlList(inline=true, entry="ApplicableProductCharacteristic", namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\Accessor(getter="getApplicableProductCharacteristic", setter="setApplicableProductCharacteristic")
     */
    private $applicableProductCharacteristic;

    /**
     * @var array<ProductClassificationType>|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\zffxcomfort\ram\ProductClassificationType>")
     * @JMS\Expose
     * @JMS\SerializedName("DesignatedProductClassification")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\XmlList(inline=true, entry="DesignatedProductClassification", namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\Accessor(getter="getDesignatedProductClassification", setter="setDesignatedProductClassification")
     */
    private $designatedProductClassification;

    /**
     * @var TradeCountryType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\ram\TradeCountryType")
     * @JMS\Expose
     * @JMS\SerializedName("OriginTradeCountry")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getOriginTradeCountry", setter="setOriginTradeCountry")
     */
    private $originTradeCountry;

    /**
     * @return IDType|null
     */
    public function getGlobalID(): ?IDType
    {
        return $this->globalID;
    }

    /**
     * @return IDType
     */
    public function getGlobalIDWithCreate(): IDType
    {
        $this->globalID = is_null($this->globalID) ? new IDType() : $this->globalID;

        return $this->globalID;
    }

    /**
     * @param IDType|null $globalID
     * @return self
     */
    public function setGlobalID(?IDType $globalID = null): self
    {
        $this->globalID = $globalID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetGlobalID(): self
    {
        $this->globalID = null;

        return $this;
    }

    /**
     * @return IDType|null
     */
    public function getSellerAssignedID(): ?IDType
    {
        return $this->sellerAssignedID;
    }

    /**
     * @return IDType
     */
    public function getSellerAssignedIDWithCreate(): IDType
    {
        $this->sellerAssignedID = is_null($this->sellerAssignedID) ? new IDType() : $this->sellerAssignedID;

        return $this->sellerAssignedID;
    }

    /**
     * @param IDType|null $sellerAssignedID
     * @return self
     */
    public function setSellerAssignedID(?IDType $sellerAssignedID = null): self
    {
        $this->sellerAssignedID = $sellerAssignedID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSellerAssignedID(): self
    {
        $this->sellerAssignedID = null;

        return $this;
    }

    /**
     * @return IDType|null
     */
    public function getBuyerAssignedID(): ?IDType
    {
        return $this->buyerAssignedID;
    }

    /**
     * @return IDType
     */
    public function getBuyerAssignedIDWithCreate(): IDType
    {
        $this->buyerAssignedID = is_null($this->buyerAssignedID) ? new IDType() : $this->buyerAssignedID;

        return $this->buyerAssignedID;
    }

    /**
     * @param IDType|null $buyerAssignedID
     * @return self
     */
    public function setBuyerAssignedID(?IDType $buyerAssignedID = null): self
    {
        $this->buyerAssignedID = $buyerAssignedID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetBuyerAssignedID(): self
    {
        $this->buyerAssignedID = null;

        return $this;
    }

    /**
     * @return TextType|null
     */
    public function getName(): ?TextType
    {
        return $this->name;
    }

    /**
     * @return TextType
     */
    public function getNameWithCreate(): TextType
    {
        $this->name = is_null($this->name) ? new TextType() : $this->name;

        return $this->name;
    }

    /**
     * @param TextType|null $name
     * @return self
     */
    public function setName(?TextType $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetName(): self
    {
        $this->name = null;

        return $this;
    }

    /**
     * @return TextType|null
     */
    public function getDescription(): ?TextType
    {
        return $this->description;
    }

    /**
     * @return TextType
     */
    public function getDescriptionWithCreate(): TextType
    {
        $this->description = is_null($this->description) ? new TextType() : $this->description;

        return $this->description;
    }

    /**
     * @param TextType|null $description
     * @return self
     */
    public function setDescription(?TextType $description = null): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDescription(): self
    {
        $this->description = null;

        return $this;
    }

    /**
     * @return array<ProductCharacteristicType>|null
     */
    public function getApplicableProductCharacteristic(): ?array
    {
        return $this->applicableProductCharacteristic;
    }

    /**
     * @param array<ProductCharacteristicType>|null $applicableProductCharacteristic
     * @return self
     */
    public function setApplicableProductCharacteristic(?array $applicableProductCharacteristic = null): self
    {
        $this->applicableProductCharacteristic = $applicableProductCharacteristic;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetApplicableProductCharacteristic(): self
    {
        $this->applicableProductCharacteristic = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearApplicableProductCharacteristic(): self
    {
        $this->applicableProductCharacteristic = [];

        return $this;
    }

    /**
     * @param ProductCharacteristicType $applicableProductCharacteristic
     * @return self
     */
    public function addToApplicableProductCharacteristic(
        ProductCharacteristicType $applicableProductCharacteristic,
    ): self {
        $this->applicableProductCharacteristic[] = $applicableProductCharacteristic;

        return $this;
    }

    /**
     * @return ProductCharacteristicType
     */
    public function addToApplicableProductCharacteristicWithCreate(): ProductCharacteristicType
    {
        $this->addToapplicableProductCharacteristic($applicableProductCharacteristic = new ProductCharacteristicType());

        return $applicableProductCharacteristic;
    }

    /**
     * @param ProductCharacteristicType $applicableProductCharacteristic
     * @return self
     */
    public function addOnceToApplicableProductCharacteristic(
        ProductCharacteristicType $applicableProductCharacteristic,
    ): self {
        if (!is_array($this->applicableProductCharacteristic)) {
            $this->applicableProductCharacteristic = [];
        }

        $this->applicableProductCharacteristic[0] = $applicableProductCharacteristic;

        return $this;
    }

    /**
     * @return ProductCharacteristicType
     */
    public function addOnceToApplicableProductCharacteristicWithCreate(): ProductCharacteristicType
    {
        if (!is_array($this->applicableProductCharacteristic)) {
            $this->applicableProductCharacteristic = [];
        }

        if ($this->applicableProductCharacteristic === []) {
            $this->addOnceToapplicableProductCharacteristic(new ProductCharacteristicType());
        }

        return $this->applicableProductCharacteristic[0];
    }

    /**
     * @return array<ProductClassificationType>|null
     */
    public function getDesignatedProductClassification(): ?array
    {
        return $this->designatedProductClassification;
    }

    /**
     * @param array<ProductClassificationType>|null $designatedProductClassification
     * @return self
     */
    public function setDesignatedProductClassification(?array $designatedProductClassification = null): self
    {
        $this->designatedProductClassification = $designatedProductClassification;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDesignatedProductClassification(): self
    {
        $this->designatedProductClassification = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearDesignatedProductClassification(): self
    {
        $this->designatedProductClassification = [];

        return $this;
    }

    /**
     * @param ProductClassificationType $designatedProductClassification
     * @return self
     */
    public function addToDesignatedProductClassification(
        ProductClassificationType $designatedProductClassification,
    ): self {
        $this->designatedProductClassification[] = $designatedProductClassification;

        return $this;
    }

    /**
     * @return ProductClassificationType
     */
    public function addToDesignatedProductClassificationWithCreate(): ProductClassificationType
    {
        $this->addTodesignatedProductClassification($designatedProductClassification = new ProductClassificationType());

        return $designatedProductClassification;
    }

    /**
     * @param ProductClassificationType $designatedProductClassification
     * @return self
     */
    public function addOnceToDesignatedProductClassification(
        ProductClassificationType $designatedProductClassification,
    ): self {
        if (!is_array($this->designatedProductClassification)) {
            $this->designatedProductClassification = [];
        }

        $this->designatedProductClassification[0] = $designatedProductClassification;

        return $this;
    }

    /**
     * @return ProductClassificationType
     */
    public function addOnceToDesignatedProductClassificationWithCreate(): ProductClassificationType
    {
        if (!is_array($this->designatedProductClassification)) {
            $this->designatedProductClassification = [];
        }

        if ($this->designatedProductClassification === []) {
            $this->addOnceTodesignatedProductClassification(new ProductClassificationType());
        }

        return $this->designatedProductClassification[0];
    }

    /**
     * @return TradeCountryType|null
     */
    public function getOriginTradeCountry(): ?TradeCountryType
    {
        return $this->originTradeCountry;
    }

    /**
     * @return TradeCountryType
     */
    public function getOriginTradeCountryWithCreate(): TradeCountryType
    {
        $this->originTradeCountry = is_null($this->originTradeCountry) ? new TradeCountryType() : $this->originTradeCountry;

        return $this->originTradeCountry;
    }

    /**
     * @param TradeCountryType|null $originTradeCountry
     * @return self
     */
    public function setOriginTradeCountry(?TradeCountryType $originTradeCountry = null): self
    {
        $this->originTradeCountry = $originTradeCountry;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetOriginTradeCountry(): self
    {
        $this->originTradeCountry = null;

        return $this;
    }
}
