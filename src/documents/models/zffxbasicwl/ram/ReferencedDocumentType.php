<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxbasicwl\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\FormattedDateTimeType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\IDType;

class ReferencedDocumentType
{
    use HandlesObjectFlags;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("IssuerAssignedID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getIssuerAssignedID", setter="setIssuerAssignedID")
     */
    private $issuerAssignedID;

    /**
     * @var FormattedDateTimeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\FormattedDateTimeType")
     * @JMS\Expose
     * @JMS\SerializedName("FormattedIssueDateTime")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getFormattedIssueDateTime", setter="setFormattedIssueDateTime")
     */
    private $formattedIssueDateTime;

    /**
     * @return IDType|null
     */
    public function getIssuerAssignedID(): ?IDType
    {
        return $this->issuerAssignedID;
    }

    /**
     * @return IDType
     */
    public function getIssuerAssignedIDWithCreate(): IDType
    {
        $this->issuerAssignedID = is_null($this->issuerAssignedID) ? new IDType() : $this->issuerAssignedID;

        return $this->issuerAssignedID;
    }

    /**
     * @param IDType|null $issuerAssignedID
     * @return self
     */
    public function setIssuerAssignedID(?IDType $issuerAssignedID = null): self
    {
        $this->issuerAssignedID = $issuerAssignedID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetIssuerAssignedID(): self
    {
        $this->issuerAssignedID = null;

        return $this;
    }

    /**
     * @return FormattedDateTimeType|null
     */
    public function getFormattedIssueDateTime(): ?FormattedDateTimeType
    {
        return $this->formattedIssueDateTime;
    }

    /**
     * @return FormattedDateTimeType
     */
    public function getFormattedIssueDateTimeWithCreate(): FormattedDateTimeType
    {
        $this->formattedIssueDateTime = is_null($this->formattedIssueDateTime) ? new FormattedDateTimeType() : $this->formattedIssueDateTime;

        return $this->formattedIssueDateTime;
    }

    /**
     * @param FormattedDateTimeType|null $formattedIssueDateTime
     * @return self
     */
    public function setFormattedIssueDateTime(?FormattedDateTimeType $formattedIssueDateTime = null): self
    {
        $this->formattedIssueDateTime = $formattedIssueDateTime;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetFormattedIssueDateTime(): self
    {
        $this->formattedIssueDateTime = null;

        return $this;
    }
}
