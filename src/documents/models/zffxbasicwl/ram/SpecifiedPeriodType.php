<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxbasicwl\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\DateTimeType;

class SpecifiedPeriodType
{
    use HandlesObjectFlags;

    /**
     * @var DateTimeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\DateTimeType")
     * @JMS\Expose
     * @JMS\SerializedName("StartDateTime")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getStartDateTime", setter="setStartDateTime")
     */
    private $startDateTime;

    /**
     * @var DateTimeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\DateTimeType")
     * @JMS\Expose
     * @JMS\SerializedName("EndDateTime")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getEndDateTime", setter="setEndDateTime")
     */
    private $endDateTime;

    /**
     * @return DateTimeType|null
     */
    public function getStartDateTime(): ?DateTimeType
    {
        return $this->startDateTime;
    }

    /**
     * @return DateTimeType
     */
    public function getStartDateTimeWithCreate(): DateTimeType
    {
        $this->startDateTime = is_null($this->startDateTime) ? new DateTimeType() : $this->startDateTime;

        return $this->startDateTime;
    }

    /**
     * @param DateTimeType|null $startDateTime
     * @return self
     */
    public function setStartDateTime(?DateTimeType $startDateTime = null): self
    {
        $this->startDateTime = $startDateTime;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetStartDateTime(): self
    {
        $this->startDateTime = null;

        return $this;
    }

    /**
     * @return DateTimeType|null
     */
    public function getEndDateTime(): ?DateTimeType
    {
        return $this->endDateTime;
    }

    /**
     * @return DateTimeType
     */
    public function getEndDateTimeWithCreate(): DateTimeType
    {
        $this->endDateTime = is_null($this->endDateTime) ? new DateTimeType() : $this->endDateTime;

        return $this->endDateTime;
    }

    /**
     * @param DateTimeType|null $endDateTime
     * @return self
     */
    public function setEndDateTime(?DateTimeType $endDateTime = null): self
    {
        $this->endDateTime = $endDateTime;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetEndDateTime(): self
    {
        $this->endDateTime = null;

        return $this;
    }
}
