<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxcomfort\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxcomfort\udt\DateTimeType;
use horstoeko\invoicesuite\documents\models\zffxcomfort\udt\IDType;
use horstoeko\invoicesuite\documents\models\zffxcomfort\udt\TextType;

class TradePaymentTermsType
{
    use HandlesObjectFlags;

    /**
     * @var TextType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("Description")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getDescription", setter="setDescription")
     */
    private $description;

    /**
     * @var DateTimeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\udt\DateTimeType")
     * @JMS\Expose
     * @JMS\SerializedName("DueDateDateTime")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getDueDateDateTime", setter="setDueDateDateTime")
     */
    private $dueDateDateTime;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("DirectDebitMandateID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getDirectDebitMandateID", setter="setDirectDebitMandateID")
     */
    private $directDebitMandateID;

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
    public function getDueDateDateTime(): ?DateTimeType
    {
        return $this->dueDateDateTime;
    }

    /**
     * @return DateTimeType
     */
    public function getDueDateDateTimeWithCreate(): DateTimeType
    {
        $this->dueDateDateTime = is_null($this->dueDateDateTime) ? new DateTimeType() : $this->dueDateDateTime;

        return $this->dueDateDateTime;
    }

    /**
     * @param DateTimeType|null $dueDateDateTime
     * @return self
     */
    public function setDueDateDateTime(?DateTimeType $dueDateDateTime = null): self
    {
        $this->dueDateDateTime = $dueDateDateTime;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDueDateDateTime(): self
    {
        $this->dueDateDateTime = null;

        return $this;
    }

    /**
     * @return IDType|null
     */
    public function getDirectDebitMandateID(): ?IDType
    {
        return $this->directDebitMandateID;
    }

    /**
     * @return IDType
     */
    public function getDirectDebitMandateIDWithCreate(): IDType
    {
        $this->directDebitMandateID = is_null($this->directDebitMandateID) ? new IDType() : $this->directDebitMandateID;

        return $this->directDebitMandateID;
    }

    /**
     * @param IDType|null $directDebitMandateID
     * @return self
     */
    public function setDirectDebitMandateID(?IDType $directDebitMandateID = null): self
    {
        $this->directDebitMandateID = $directDebitMandateID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDirectDebitMandateID(): self
    {
        $this->directDebitMandateID = null;

        return $this;
    }
}
