<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxextended\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxextended\qdt\DocumentCodeType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\DateTimeType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\IDType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\IndicatorType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\TextType;

class ExchangedDocumentType
{
    use HandlesObjectFlags;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("ID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getID", setter="setID")
     */
    private $iD;

    /**
     * @var TextType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("Name")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getName", setter="setName")
     */
    private $name;

    /**
     * @var DocumentCodeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\qdt\DocumentCodeType")
     * @JMS\Expose
     * @JMS\SerializedName("TypeCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getTypeCode", setter="setTypeCode")
     */
    private $typeCode;

    /**
     * @var DateTimeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\DateTimeType")
     * @JMS\Expose
     * @JMS\SerializedName("IssueDateTime")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getIssueDateTime", setter="setIssueDateTime")
     */
    private $issueDateTime;

    /**
     * @var IndicatorType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\IndicatorType")
     * @JMS\Expose
     * @JMS\SerializedName("CopyIndicator")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getCopyIndicator", setter="setCopyIndicator")
     */
    private $copyIndicator;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("LanguageID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getLanguageID", setter="setLanguageID")
     */
    private $languageID;

    /**
     * @var array<NoteType>|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\zffxextended\ram\NoteType>")
     * @JMS\Expose
     * @JMS\SerializedName("IncludedNote")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\XmlList(inline=true, entry="IncludedNote", namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\Accessor(getter="getIncludedNote", setter="setIncludedNote")
     */
    private $includedNote;

    /**
     * @var SpecifiedPeriodType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\SpecifiedPeriodType")
     * @JMS\Expose
     * @JMS\SerializedName("EffectiveSpecifiedPeriod")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getEffectiveSpecifiedPeriod", setter="setEffectiveSpecifiedPeriod")
     */
    private $effectiveSpecifiedPeriod;

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
     * @return IndicatorType|null
     */
    public function getCopyIndicator(): ?IndicatorType
    {
        return $this->copyIndicator;
    }

    /**
     * @return IndicatorType
     */
    public function getCopyIndicatorWithCreate(): IndicatorType
    {
        $this->copyIndicator = is_null($this->copyIndicator) ? new IndicatorType() : $this->copyIndicator;

        return $this->copyIndicator;
    }

    /**
     * @param IndicatorType|null $copyIndicator
     * @return self
     */
    public function setCopyIndicator(?IndicatorType $copyIndicator = null): self
    {
        $this->copyIndicator = $copyIndicator;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCopyIndicator(): self
    {
        $this->copyIndicator = null;

        return $this;
    }

    /**
     * @return IDType|null
     */
    public function getLanguageID(): ?IDType
    {
        return $this->languageID;
    }

    /**
     * @return IDType
     */
    public function getLanguageIDWithCreate(): IDType
    {
        $this->languageID = is_null($this->languageID) ? new IDType() : $this->languageID;

        return $this->languageID;
    }

    /**
     * @param IDType|null $languageID
     * @return self
     */
    public function setLanguageID(?IDType $languageID = null): self
    {
        $this->languageID = $languageID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLanguageID(): self
    {
        $this->languageID = null;

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

    /**
     * @return SpecifiedPeriodType|null
     */
    public function getEffectiveSpecifiedPeriod(): ?SpecifiedPeriodType
    {
        return $this->effectiveSpecifiedPeriod;
    }

    /**
     * @return SpecifiedPeriodType
     */
    public function getEffectiveSpecifiedPeriodWithCreate(): SpecifiedPeriodType
    {
        $this->effectiveSpecifiedPeriod = is_null($this->effectiveSpecifiedPeriod) ? new SpecifiedPeriodType() : $this->effectiveSpecifiedPeriod;

        return $this->effectiveSpecifiedPeriod;
    }

    /**
     * @param SpecifiedPeriodType|null $effectiveSpecifiedPeriod
     * @return self
     */
    public function setEffectiveSpecifiedPeriod(?SpecifiedPeriodType $effectiveSpecifiedPeriod = null): self
    {
        $this->effectiveSpecifiedPeriod = $effectiveSpecifiedPeriod;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetEffectiveSpecifiedPeriod(): self
    {
        $this->effectiveSpecifiedPeriod = null;

        return $this;
    }
}
