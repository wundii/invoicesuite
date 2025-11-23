<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CargoTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CommodityCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ItemClassificationCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\NatureCode;

class CommodityClassificationType
{
    use HandlesObjectFlags;

    /**
     * @var NatureCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\NatureCode")
     * @JMS\Expose
     * @JMS\SerializedName("NatureCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getNatureCode", setter="setNatureCode")
     */
    private $natureCode;

    /**
     * @var CargoTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CargoTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("CargoTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCargoTypeCode", setter="setCargoTypeCode")
     */
    private $cargoTypeCode;

    /**
     * @var CommodityCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CommodityCode")
     * @JMS\Expose
     * @JMS\SerializedName("CommodityCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCommodityCode", setter="setCommodityCode")
     */
    private $commodityCode;

    /**
     * @var ItemClassificationCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ItemClassificationCode")
     * @JMS\Expose
     * @JMS\SerializedName("ItemClassificationCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getItemClassificationCode", setter="setItemClassificationCode")
     */
    private $itemClassificationCode;

    /**
     * @return NatureCode|null
     */
    public function getNatureCode(): ?NatureCode
    {
        return $this->natureCode;
    }

    /**
     * @return NatureCode
     */
    public function getNatureCodeWithCreate(): NatureCode
    {
        $this->natureCode = is_null($this->natureCode) ? new NatureCode() : $this->natureCode;

        return $this->natureCode;
    }

    /**
     * @param NatureCode|null $natureCode
     * @return self
     */
    public function setNatureCode(?NatureCode $natureCode = null): self
    {
        $this->natureCode = $natureCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetNatureCode(): self
    {
        $this->natureCode = null;

        return $this;
    }

    /**
     * @return CargoTypeCode|null
     */
    public function getCargoTypeCode(): ?CargoTypeCode
    {
        return $this->cargoTypeCode;
    }

    /**
     * @return CargoTypeCode
     */
    public function getCargoTypeCodeWithCreate(): CargoTypeCode
    {
        $this->cargoTypeCode = is_null($this->cargoTypeCode) ? new CargoTypeCode() : $this->cargoTypeCode;

        return $this->cargoTypeCode;
    }

    /**
     * @param CargoTypeCode|null $cargoTypeCode
     * @return self
     */
    public function setCargoTypeCode(?CargoTypeCode $cargoTypeCode = null): self
    {
        $this->cargoTypeCode = $cargoTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCargoTypeCode(): self
    {
        $this->cargoTypeCode = null;

        return $this;
    }

    /**
     * @return CommodityCode|null
     */
    public function getCommodityCode(): ?CommodityCode
    {
        return $this->commodityCode;
    }

    /**
     * @return CommodityCode
     */
    public function getCommodityCodeWithCreate(): CommodityCode
    {
        $this->commodityCode = is_null($this->commodityCode) ? new CommodityCode() : $this->commodityCode;

        return $this->commodityCode;
    }

    /**
     * @param CommodityCode|null $commodityCode
     * @return self
     */
    public function setCommodityCode(?CommodityCode $commodityCode = null): self
    {
        $this->commodityCode = $commodityCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCommodityCode(): self
    {
        $this->commodityCode = null;

        return $this;
    }

    /**
     * @return ItemClassificationCode|null
     */
    public function getItemClassificationCode(): ?ItemClassificationCode
    {
        return $this->itemClassificationCode;
    }

    /**
     * @return ItemClassificationCode
     */
    public function getItemClassificationCodeWithCreate(): ItemClassificationCode
    {
        $this->itemClassificationCode = is_null($this->itemClassificationCode) ? new ItemClassificationCode() : $this->itemClassificationCode;

        return $this->itemClassificationCode;
    }

    /**
     * @param ItemClassificationCode|null $itemClassificationCode
     * @return self
     */
    public function setItemClassificationCode(?ItemClassificationCode $itemClassificationCode = null): self
    {
        $this->itemClassificationCode = $itemClassificationCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetItemClassificationCode(): self
    {
        $this->itemClassificationCode = null;

        return $this;
    }
}
