<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxextended\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\IDType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\QuantityType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\TextType;

class ReferencedProductType
{
    use HandlesObjectFlags;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("ID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getID", setter="setID")
     */
    private $iD;

    /**
     * @var array<IDType>|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\zffxextended\udt\IDType>")
     * @JMS\Expose
     * @JMS\SerializedName("GlobalID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\XmlList(inline=true, entry="GlobalID", namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\Accessor(getter="getGlobalID", setter="setGlobalID")
     */
    private $globalID;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("SellerAssignedID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getSellerAssignedID", setter="setSellerAssignedID")
     */
    private $sellerAssignedID;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("BuyerAssignedID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBuyerAssignedID", setter="setBuyerAssignedID")
     */
    private $buyerAssignedID;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("IndustryAssignedID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getIndustryAssignedID", setter="setIndustryAssignedID")
     */
    private $industryAssignedID;

    /**
     * @var TextType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("Name")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getName", setter="setName")
     */
    private $name;

    /**
     * @var TextType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("Description")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getDescription", setter="setDescription")
     */
    private $description;

    /**
     * @var QuantityType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\QuantityType")
     * @JMS\Expose
     * @JMS\SerializedName("UnitQuantity")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getUnitQuantity", setter="setUnitQuantity")
     */
    private $unitQuantity;

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
     * @return array<IDType>|null
     */
    public function getGlobalID(): ?array
    {
        return $this->globalID;
    }

    /**
     * @param array<IDType>|null $globalID
     * @return self
     */
    public function setGlobalID(?array $globalID = null): self
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
     * @return self
     */
    public function clearGlobalID(): self
    {
        $this->globalID = [];

        return $this;
    }

    /**
     * @param IDType $globalID
     * @return self
     */
    public function addToGlobalID(IDType $globalID): self
    {
        $this->globalID[] = $globalID;

        return $this;
    }

    /**
     * @return IDType
     */
    public function addToGlobalIDWithCreate(): IDType
    {
        $this->addToglobalID($globalID = new IDType());

        return $globalID;
    }

    /**
     * @param IDType $globalID
     * @return self
     */
    public function addOnceToGlobalID(IDType $globalID): self
    {
        if (!is_array($this->globalID)) {
            $this->globalID = [];
        }

        $this->globalID[0] = $globalID;

        return $this;
    }

    /**
     * @return IDType
     */
    public function addOnceToGlobalIDWithCreate(): IDType
    {
        if (!is_array($this->globalID)) {
            $this->globalID = [];
        }

        if ($this->globalID === []) {
            $this->addOnceToglobalID(new IDType());
        }

        return $this->globalID[0];
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
     * @return IDType|null
     */
    public function getIndustryAssignedID(): ?IDType
    {
        return $this->industryAssignedID;
    }

    /**
     * @return IDType
     */
    public function getIndustryAssignedIDWithCreate(): IDType
    {
        $this->industryAssignedID = is_null($this->industryAssignedID) ? new IDType() : $this->industryAssignedID;

        return $this->industryAssignedID;
    }

    /**
     * @param IDType|null $industryAssignedID
     * @return self
     */
    public function setIndustryAssignedID(?IDType $industryAssignedID = null): self
    {
        $this->industryAssignedID = $industryAssignedID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetIndustryAssignedID(): self
    {
        $this->industryAssignedID = null;

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
     * @return QuantityType|null
     */
    public function getUnitQuantity(): ?QuantityType
    {
        return $this->unitQuantity;
    }

    /**
     * @return QuantityType
     */
    public function getUnitQuantityWithCreate(): QuantityType
    {
        $this->unitQuantity = is_null($this->unitQuantity) ? new QuantityType() : $this->unitQuantity;

        return $this->unitQuantity;
    }

    /**
     * @param QuantityType|null $unitQuantity
     * @return self
     */
    public function setUnitQuantity(?QuantityType $unitQuantity = null): self
    {
        $this->unitQuantity = $unitQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetUnitQuantity(): self
    {
        $this->unitQuantity = null;

        return $this;
    }
}
