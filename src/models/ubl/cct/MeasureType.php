<?php

namespace horstoeko\invoicesuite\models\ubl\cct;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;

class MeasureType
{
    use HandlesObjectFlags;

    /**
     * @var float
     * @JMS\Groups({"ubl"})
     * @JMS\Type("float")
     * @JMS\Expose
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlValue(cdata=false)
     * @JMS\Accessor(getter="getValue", setter="setValue")
     */
    private $value;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("unitCode")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getUnitCode", setter="setUnitCode")
     */
    private $unitCode;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("unitCodeListVersionID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getUnitCodeListVersionID", setter="setUnitCodeListVersionID")
     */
    private $unitCodeListVersionID;

    /**
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * @param float $value
     * @return self
     */
    public function setValue(float $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUnitCode(): ?string
    {
        return $this->unitCode;
    }

    /**
     * @param string $unitCode
     * @return self
     */
    public function setUnitCode(string $unitCode): self
    {
        $this->unitCode = $unitCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUnitCodeListVersionID(): ?string
    {
        return $this->unitCodeListVersionID;
    }

    /**
     * @param string $unitCodeListVersionID
     * @return self
     */
    public function setUnitCodeListVersionID(string $unitCodeListVersionID): self
    {
        $this->unitCodeListVersionID = $unitCodeListVersionID;

        return $this;
    }
}
