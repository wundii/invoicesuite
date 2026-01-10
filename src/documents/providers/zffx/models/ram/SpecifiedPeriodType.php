<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\zffx\models\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\providers\zffx\models\udt\DateTimeType;
use horstoeko\invoicesuite\documents\providers\zffx\models\udt\TextType;
use JMS\Serializer\Annotation as JMS;

class SpecifiedPeriodType
{
    use HandlesObjectFlags;

    /**
     * @var null|TextType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("Description")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getDescription", setter="setDescription")
     */
    private $description;

    /**
     * @var null|DateTimeType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\udt\DateTimeType")
     * @JMS\Expose
     * @JMS\SerializedName("StartDateTime")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getStartDateTime", setter="setStartDateTime")
     */
    private $startDateTime;

    /**
     * @var null|DateTimeType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\udt\DateTimeType")
     * @JMS\Expose
     * @JMS\SerializedName("EndDateTime")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getEndDateTime", setter="setEndDateTime")
     */
    private $endDateTime;

    /**
     * @var null|DateTimeType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\udt\DateTimeType")
     * @JMS\Expose
     * @JMS\SerializedName("CompleteDateTime")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getCompleteDateTime", setter="setCompleteDateTime")
     */
    private $completeDateTime;

    /**
     * @return null|TextType
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
     * @param  null|TextType $description
     * @return static
     */
    public function setDescription(?TextType $description = null): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDescription(): static
    {
        $this->description = null;

        return $this;
    }

    /**
     * @return null|DateTimeType
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
     * @param  null|DateTimeType $startDateTime
     * @return static
     */
    public function setStartDateTime(?DateTimeType $startDateTime = null): static
    {
        $this->startDateTime = $startDateTime;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetStartDateTime(): static
    {
        $this->startDateTime = null;

        return $this;
    }

    /**
     * @return null|DateTimeType
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
     * @param  null|DateTimeType $endDateTime
     * @return static
     */
    public function setEndDateTime(?DateTimeType $endDateTime = null): static
    {
        $this->endDateTime = $endDateTime;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetEndDateTime(): static
    {
        $this->endDateTime = null;

        return $this;
    }

    /**
     * @return null|DateTimeType
     */
    public function getCompleteDateTime(): ?DateTimeType
    {
        return $this->completeDateTime;
    }

    /**
     * @return DateTimeType
     */
    public function getCompleteDateTimeWithCreate(): DateTimeType
    {
        $this->completeDateTime = is_null($this->completeDateTime) ? new DateTimeType() : $this->completeDateTime;

        return $this->completeDateTime;
    }

    /**
     * @param  null|DateTimeType $completeDateTime
     * @return static
     */
    public function setCompleteDateTime(?DateTimeType $completeDateTime = null): static
    {
        $this->completeDateTime = $completeDateTime;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCompleteDateTime(): static
    {
        $this->completeDateTime = null;

        return $this;
    }
}
