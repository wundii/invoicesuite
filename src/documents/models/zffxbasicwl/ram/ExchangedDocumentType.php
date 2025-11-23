<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxbasicwl\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\DocumentCodeType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\DateTimeType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\IDType;

class ExchangedDocumentType
{
    use HandlesObjectFlags;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("ID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getID", setter="setID")
     */
    private $iD;

    /**
     * @var DocumentCodeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\DocumentCodeType")
     * @JMS\Expose
     * @JMS\SerializedName("TypeCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getTypeCode", setter="setTypeCode")
     */
    private $typeCode;

    /**
     * @var DateTimeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\DateTimeType")
     * @JMS\Expose
     * @JMS\SerializedName("IssueDateTime")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getIssueDateTime", setter="setIssueDateTime")
     */
    private $issueDateTime;

    /**
     * @var array<NoteType>|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\NoteType>")
     * @JMS\Expose
     * @JMS\SerializedName("IncludedNote")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\XmlList(inline=true, entry="IncludedNote", namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\Accessor(getter="getIncludedNote", setter="setIncludedNote")
     */
    private $includedNote;

    /**
     * @return IDType|null
     */
    public function getID(): ?IDType
    {
        return $this->iD;
    }

    /**
     * @return IDType
     */
    public function getIDWithCreate(): IDType
    {
        $this->iD = is_null($this->iD) ? new IDType() : $this->iD;

        return $this->iD;
    }

    /**
     * @param IDType|null $iD
     * @return self
     */
    public function setID(?IDType $iD = null): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetID(): self
    {
        $this->iD = null;

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
     * @return DateTimeType|null
     */
    public function getIssueDateTime(): ?DateTimeType
    {
        return $this->issueDateTime;
    }

    /**
     * @return DateTimeType
     */
    public function getIssueDateTimeWithCreate(): DateTimeType
    {
        $this->issueDateTime = is_null($this->issueDateTime) ? new DateTimeType() : $this->issueDateTime;

        return $this->issueDateTime;
    }

    /**
     * @param DateTimeType|null $issueDateTime
     * @return self
     */
    public function setIssueDateTime(?DateTimeType $issueDateTime = null): self
    {
        $this->issueDateTime = $issueDateTime;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetIssueDateTime(): self
    {
        $this->issueDateTime = null;

        return $this;
    }

    /**
     * @return array<NoteType>|null
     */
    public function getIncludedNote(): ?array
    {
        return $this->includedNote;
    }

    /**
     * @param array<NoteType>|null $includedNote
     * @return self
     */
    public function setIncludedNote(?array $includedNote = null): self
    {
        $this->includedNote = $includedNote;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetIncludedNote(): self
    {
        $this->includedNote = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearIncludedNote(): self
    {
        $this->includedNote = [];

        return $this;
    }

    /**
     * @param NoteType $includedNote
     * @return self
     */
    public function addToIncludedNote(NoteType $includedNote): self
    {
        $this->includedNote[] = $includedNote;

        return $this;
    }

    /**
     * @return NoteType
     */
    public function addToIncludedNoteWithCreate(): NoteType
    {
        $this->addToincludedNote($includedNote = new NoteType());

        return $includedNote;
    }

    /**
     * @param NoteType $includedNote
     * @return self
     */
    public function addOnceToIncludedNote(NoteType $includedNote): self
    {
        if (!is_array($this->includedNote)) {
            $this->includedNote = [];
        }

        $this->includedNote[0] = $includedNote;

        return $this;
    }

    /**
     * @return NoteType
     */
    public function addOnceToIncludedNoteWithCreate(): NoteType
    {
        if (!is_array($this->includedNote)) {
            $this->includedNote = [];
        }

        if ($this->includedNote === []) {
            $this->addOnceToincludedNote(new NoteType());
        }

        return $this->includedNote[0];
    }
}
