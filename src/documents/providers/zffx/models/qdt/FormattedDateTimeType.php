<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\zffx\models\qdt;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\providers\zffx\models\qdt\FormattedDateTimeType\DateTimeStringAType;
use JMS\Serializer\Annotation as JMS;

class FormattedDateTimeType
{
    use HandlesObjectFlags;

    /**
     * @var null|DateTimeStringAType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\qdt\FormattedDateTimeType\DateTimeStringAType")
     * @JMS\Expose
     * @JMS\SerializedName("DateTimeString")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:QualifiedDataType:100", cdata=false)
     * @JMS\Accessor(getter="getDateTimeString", setter="setDateTimeString")
     */
    private $dateTimeString;

    /**
     * @return null|DateTimeStringAType
     */
    public function getDateTimeString(): ?DateTimeStringAType
    {
        return $this->dateTimeString;
    }

    /**
     * @return DateTimeStringAType
     */
    public function getDateTimeStringWithCreate(): DateTimeStringAType
    {
        $this->dateTimeString ??= new DateTimeStringAType();

        return $this->dateTimeString;
    }

    /**
     * @param  null|DateTimeStringAType $dateTimeString
     * @return static
     */
    public function setDateTimeString(
        ?DateTimeStringAType $dateTimeString = null
    ): static {
        $this->dateTimeString = $dateTimeString;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDateTimeString(): static
    {
        $this->dateTimeString = null;

        return $this;
    }
}
