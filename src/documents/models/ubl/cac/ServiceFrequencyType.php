<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\WeekDayCode;

class ServiceFrequencyType
{
    use HandlesObjectFlags;

    /**
     * @var WeekDayCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\WeekDayCode")
     * @JMS\Expose
     * @JMS\SerializedName("WeekDayCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getWeekDayCode", setter="setWeekDayCode")
     */
    private $weekDayCode;

    /**
     * @return WeekDayCode|null
     */
    public function getWeekDayCode(): ?WeekDayCode
    {
        return $this->weekDayCode;
    }

    /**
     * @return WeekDayCode
     */
    public function getWeekDayCodeWithCreate(): WeekDayCode
    {
        $this->weekDayCode = is_null($this->weekDayCode) ? new WeekDayCode() : $this->weekDayCode;

        return $this->weekDayCode;
    }

    /**
     * @param WeekDayCode|null $weekDayCode
     * @return self
     */
    public function setWeekDayCode(?WeekDayCode $weekDayCode = null): self
    {
        $this->weekDayCode = $weekDayCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetWeekDayCode(): self
    {
        $this->weekDayCode = null;

        return $this;
    }
}
