<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxextended\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\DateTimeType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\TextType;

class SpecifiedPeriodType
{
    use HandlesObjectFlags;

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
     * @var DateTimeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\DateTimeType")
     * @JMS\Expose
     * @JMS\SerializedName("StartDateTime")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getStartDateTime", setter="setStartDateTime")
     */
    private $startDateTime;

    /**
     * @var DateTimeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\DateTimeType")
     * @JMS\Expose
     * @JMS\SerializedName("EndDateTime")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getEndDateTime", setter="setEndDateTime")
     */
    private $endDateTime;

    /**
     * @var DateTimeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\DateTimeType")
     * @JMS\Expose
     * @JMS\SerializedName("CompleteDateTime")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getCompleteDateTime", setter="setCompleteDateTime")
     */
    private $completeDateTime;

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

    /**
     * @return DateTimeType|null
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
     * @param DateTimeType|null $completeDateTime
     * @return self
     */
    public function setCompleteDateTime(?DateTimeType $completeDateTime = null): self
    {
        $this->completeDateTime = $completeDateTime;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCompleteDateTime(): self
    {
        $this->completeDateTime = null;

        return $this;
    }
}
