<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxcomfort\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxcomfort\qdt\DocumentCodeType;
use horstoeko\invoicesuite\documents\models\zffxcomfort\qdt\FormattedDateTimeType;
use horstoeko\invoicesuite\documents\models\zffxcomfort\qdt\ReferenceCodeType;
use horstoeko\invoicesuite\documents\models\zffxcomfort\udt\BinaryObjectType;
use horstoeko\invoicesuite\documents\models\zffxcomfort\udt\IDType;
use horstoeko\invoicesuite\documents\models\zffxcomfort\udt\TextType;

class ReferencedDocumentType
{
    use HandlesObjectFlags;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("IssuerAssignedID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getIssuerAssignedID", setter="setIssuerAssignedID")
     */
    private $issuerAssignedID;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("URIID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getURIID", setter="setURIID")
     */
    private $uRIID;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("LineID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getLineID", setter="setLineID")
     */
    private $lineID;

    /**
     * @var DocumentCodeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\qdt\DocumentCodeType")
     * @JMS\Expose
     * @JMS\SerializedName("TypeCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getTypeCode", setter="setTypeCode")
     */
    private $typeCode;

    /**
     * @var TextType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("Name")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getName", setter="setName")
     */
    private $name;

    /**
     * @var BinaryObjectType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\udt\BinaryObjectType")
     * @JMS\Expose
     * @JMS\SerializedName("AttachmentBinaryObject")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getAttachmentBinaryObject", setter="setAttachmentBinaryObject")
     */
    private $attachmentBinaryObject;

    /**
     * @var ReferenceCodeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\qdt\ReferenceCodeType")
     * @JMS\Expose
     * @JMS\SerializedName("ReferenceTypeCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getReferenceTypeCode", setter="setReferenceTypeCode")
     */
    private $referenceTypeCode;

    /**
     * @var FormattedDateTimeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\qdt\FormattedDateTimeType")
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
     * @return IDType|null
     */
    public function getURIID(): ?IDType
    {
        return $this->uRIID;
    }

    /**
     * @return IDType
     */
    public function getURIIDWithCreate(): IDType
    {
        $this->uRIID = is_null($this->uRIID) ? new IDType() : $this->uRIID;

        return $this->uRIID;
    }

    /**
     * @param IDType|null $uRIID
     * @return self
     */
    public function setURIID(?IDType $uRIID = null): self
    {
        $this->uRIID = $uRIID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetURIID(): self
    {
        $this->uRIID = null;

        return $this;
    }

    /**
     * @return IDType|null
     */
    public function getLineID(): ?IDType
    {
        return $this->lineID;
    }

    /**
     * @return IDType
     */
    public function getLineIDWithCreate(): IDType
    {
        $this->lineID = is_null($this->lineID) ? new IDType() : $this->lineID;

        return $this->lineID;
    }

    /**
     * @param IDType|null $lineID
     * @return self
     */
    public function setLineID(?IDType $lineID = null): self
    {
        $this->lineID = $lineID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLineID(): self
    {
        $this->lineID = null;

        return $this;
    }

    /**
     * @return DocumentCodeType|null
     */
    public function getTypeCode(): ?DocumentCodeType
    {
        return $this->typeCode;
    }

    /**
     * @return DocumentCodeType
     */
    public function getTypeCodeWithCreate(): DocumentCodeType
    {
        $this->typeCode = is_null($this->typeCode) ? new DocumentCodeType() : $this->typeCode;

        return $this->typeCode;
    }

    /**
     * @param DocumentCodeType|null $typeCode
     * @return self
     */
    public function setTypeCode(?DocumentCodeType $typeCode = null): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTypeCode(): self
    {
        $this->typeCode = null;

        return $this;
    }

    /**
     * @return TextType|null
     */
    public function getName(): ?TextType
    {
        return $this->name;
    }

    /**
     * @return TextType
     */
    public function getNameWithCreate(): TextType
    {
        $this->name = is_null($this->name) ? new TextType() : $this->name;

        return $this->name;
    }

    /**
     * @param TextType|null $name
     * @return self
     */
    public function setName(?TextType $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetName(): self
    {
        $this->name = null;

        return $this;
    }

    /**
     * @return BinaryObjectType|null
     */
    public function getAttachmentBinaryObject(): ?BinaryObjectType
    {
        return $this->attachmentBinaryObject;
    }

    /**
     * @return BinaryObjectType
     */
    public function getAttachmentBinaryObjectWithCreate(): BinaryObjectType
    {
        $this->attachmentBinaryObject = is_null($this->attachmentBinaryObject) ? new BinaryObjectType() : $this->attachmentBinaryObject;

        return $this->attachmentBinaryObject;
    }

    /**
     * @param BinaryObjectType|null $attachmentBinaryObject
     * @return self
     */
    public function setAttachmentBinaryObject(?BinaryObjectType $attachmentBinaryObject = null): self
    {
        $this->attachmentBinaryObject = $attachmentBinaryObject;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAttachmentBinaryObject(): self
    {
        $this->attachmentBinaryObject = null;

        return $this;
    }

    /**
     * @return ReferenceCodeType|null
     */
    public function getReferenceTypeCode(): ?ReferenceCodeType
    {
        return $this->referenceTypeCode;
    }

    /**
     * @return ReferenceCodeType
     */
    public function getReferenceTypeCodeWithCreate(): ReferenceCodeType
    {
        $this->referenceTypeCode = is_null($this->referenceTypeCode) ? new ReferenceCodeType() : $this->referenceTypeCode;

        return $this->referenceTypeCode;
    }

    /**
     * @param ReferenceCodeType|null $referenceTypeCode
     * @return self
     */
    public function setReferenceTypeCode(?ReferenceCodeType $referenceTypeCode = null): self
    {
        $this->referenceTypeCode = $referenceTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetReferenceTypeCode(): self
    {
        $this->referenceTypeCode = null;

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
