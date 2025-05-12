<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\models\ubl\cbc\CargoTypeCode;
use horstoeko\invoicesuite\models\ubl\cbc\CommodityCode;
use horstoeko\invoicesuite\models\ubl\cbc\ItemClassificationCode;
use horstoeko\invoicesuite\models\ubl\cbc\NatureCode;

class CommodityClassificationType
{
    use HandlesObjectFlags;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\NatureCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\NatureCode")
     * @JMS\Expose
     * @JMS\SerializedName("NatureCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getNatureCode", setter="setNatureCode")
     */
    private $natureCode;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\CargoTypeCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\CargoTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("CargoTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCargoTypeCode", setter="setCargoTypeCode")
     */
    private $cargoTypeCode;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\CommodityCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\CommodityCode")
     * @JMS\Expose
     * @JMS\SerializedName("CommodityCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCommodityCode", setter="setCommodityCode")
     */
    private $commodityCode;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ItemClassificationCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ItemClassificationCode")
     * @JMS\Expose
     * @JMS\SerializedName("ItemClassificationCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getItemClassificationCode", setter="setItemClassificationCode")
     */
    private $itemClassificationCode;

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\NatureCode|null
     */
    public function getNatureCode(): ?NatureCode
    {
        return $this->natureCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\NatureCode
     */
    public function getNatureCodeWithCreate(): NatureCode
    {
        $this->natureCode = is_null($this->natureCode) ? new NatureCode() : $this->natureCode;

        return $this->natureCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\NatureCode $natureCode
     * @return self
     */
    public function setNatureCode(NatureCode $natureCode): self
    {
        $this->natureCode = $natureCode;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\CargoTypeCode|null
     */
    public function getCargoTypeCode(): ?CargoTypeCode
    {
        return $this->cargoTypeCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\CargoTypeCode
     */
    public function getCargoTypeCodeWithCreate(): CargoTypeCode
    {
        $this->cargoTypeCode = is_null($this->cargoTypeCode) ? new CargoTypeCode() : $this->cargoTypeCode;

        return $this->cargoTypeCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\CargoTypeCode $cargoTypeCode
     * @return self
     */
    public function setCargoTypeCode(CargoTypeCode $cargoTypeCode): self
    {
        $this->cargoTypeCode = $cargoTypeCode;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\CommodityCode|null
     */
    public function getCommodityCode(): ?CommodityCode
    {
        return $this->commodityCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\CommodityCode
     */
    public function getCommodityCodeWithCreate(): CommodityCode
    {
        $this->commodityCode = is_null($this->commodityCode) ? new CommodityCode() : $this->commodityCode;

        return $this->commodityCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\CommodityCode $commodityCode
     * @return self
     */
    public function setCommodityCode(CommodityCode $commodityCode): self
    {
        $this->commodityCode = $commodityCode;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ItemClassificationCode|null
     */
    public function getItemClassificationCode(): ?ItemClassificationCode
    {
        return $this->itemClassificationCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ItemClassificationCode
     */
    public function getItemClassificationCodeWithCreate(): ItemClassificationCode
    {
        $this->itemClassificationCode = is_null($this->itemClassificationCode) ? new ItemClassificationCode() : $this->itemClassificationCode;

        return $this->itemClassificationCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ItemClassificationCode $itemClassificationCode
     * @return self
     */
    public function setItemClassificationCode(ItemClassificationCode $itemClassificationCode): self
    {
        $this->itemClassificationCode = $itemClassificationCode;

        return $this;
    }
}
