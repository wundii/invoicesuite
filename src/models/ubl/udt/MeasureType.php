<?php

namespace horstoeko\invoicesuite\models\ubl\udt;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\concerns\HandlesOptional;
use horstoeko\invoicesuite\models\ubl\cct\MeasureType as MeasureTypeBase;

class MeasureType extends MeasureTypeBase
{
    use HandlesOptional;
    use HandlesObjectFlags;

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
}
