<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CollaborationPriorityCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ComparedValueMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ExceptionStatusCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Note;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PerformanceMetricTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ResolutionCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SourceValueMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SupplyChainActivityTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\VarianceQuantity;

class ExceptionNotificationLineType
{
    use HandlesObjectFlags;

    /**
     * @var ID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ID")
     * @JMS\Expose
     * @JMS\SerializedName("ID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getID", setter="setID")
     */
    private $iD;

    /**
     * @var array<Note>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Note>")
     * @JMS\Expose
     * @JMS\SerializedName("Note")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Note", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getNote", setter="setNote")
     */
    private $note;

    /**
     * @var array<Description>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Description>")
     * @JMS\Expose
     * @JMS\SerializedName("Description")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Description", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getDescription", setter="setDescription")
     */
    private $description;

    /**
     * @var ExceptionStatusCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ExceptionStatusCode")
     * @JMS\Expose
     * @JMS\SerializedName("ExceptionStatusCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getExceptionStatusCode", setter="setExceptionStatusCode")
     */
    private $exceptionStatusCode;

    /**
     * @var CollaborationPriorityCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CollaborationPriorityCode")
     * @JMS\Expose
     * @JMS\SerializedName("CollaborationPriorityCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCollaborationPriorityCode", setter="setCollaborationPriorityCode")
     */
    private $collaborationPriorityCode;

    /**
     * @var ResolutionCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ResolutionCode")
     * @JMS\Expose
     * @JMS\SerializedName("ResolutionCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getResolutionCode", setter="setResolutionCode")
     */
    private $resolutionCode;

    /**
     * @var ComparedValueMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ComparedValueMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("ComparedValueMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getComparedValueMeasure", setter="setComparedValueMeasure")
     */
    private $comparedValueMeasure;

    /**
     * @var SourceValueMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\SourceValueMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("SourceValueMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSourceValueMeasure", setter="setSourceValueMeasure")
     */
    private $sourceValueMeasure;

    /**
     * @var VarianceQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\VarianceQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("VarianceQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getVarianceQuantity", setter="setVarianceQuantity")
     */
    private $varianceQuantity;

    /**
     * @var SupplyChainActivityTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\SupplyChainActivityTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("SupplyChainActivityTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSupplyChainActivityTypeCode", setter="setSupplyChainActivityTypeCode")
     */
    private $supplyChainActivityTypeCode;

    /**
     * @var PerformanceMetricTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PerformanceMetricTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("PerformanceMetricTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPerformanceMetricTypeCode", setter="setPerformanceMetricTypeCode")
     */
    private $performanceMetricTypeCode;

    /**
     * @var ExceptionObservationPeriod|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ExceptionObservationPeriod")
     * @JMS\Expose
     * @JMS\SerializedName("ExceptionObservationPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getExceptionObservationPeriod", setter="setExceptionObservationPeriod")
     */
    private $exceptionObservationPeriod;

    /**
     * @var array<DocumentReference>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\DocumentReference>")
     * @JMS\Expose
     * @JMS\SerializedName("DocumentReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="DocumentReference", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getDocumentReference", setter="setDocumentReference")
     */
    private $documentReference;

    /**
     * @var ForecastException|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ForecastException")
     * @JMS\Expose
     * @JMS\SerializedName("ForecastException")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getForecastException", setter="setForecastException")
     */
    private $forecastException;

    /**
     * @var SupplyItem|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\SupplyItem")
     * @JMS\Expose
     * @JMS\SerializedName("SupplyItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSupplyItem", setter="setSupplyItem")
     */
    private $supplyItem;

    /**
     * @return ID|null
     */
    public function getID(): ?ID
    {
        return $this->iD;
    }

    /**
     * @return ID
     */
    public function getIDWithCreate(): ID
    {
        $this->iD = is_null($this->iD) ? new ID() : $this->iD;

        return $this->iD;
    }

    /**
     * @param ID|null $iD
     * @return self
     */
    public function setID(?ID $iD = null): self
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
     * @return array<Note>|null
     */
    public function getNote(): ?array
    {
        return $this->note;
    }

    /**
     * @param array<Note>|null $note
     * @return self
     */
    public function setNote(?array $note = null): self
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetNote(): self
    {
        $this->note = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearNote(): self
    {
        $this->note = [];

        return $this;
    }

    /**
     * @return Note|null
     */
    public function firstNote(): ?Note
    {
        $note = $this->note ?? [];
        $note = reset($note);

        if ($note === false) {
            return null;
        }

        return $note;
    }

    /**
     * @return Note|null
     */
    public function lastNote(): ?Note
    {
        $note = $this->note ?? [];
        $note = end($note);

        if ($note === false) {
            return null;
        }

        return $note;
    }

    /**
     * @param Note $note
     * @return self
     */
    public function addToNote(Note $note): self
    {
        $this->note[] = $note;

        return $this;
    }

    /**
     * @return Note
     */
    public function addToNoteWithCreate(): Note
    {
        $this->addTonote($note = new Note());

        return $note;
    }

    /**
     * @param Note $note
     * @return self
     */
    public function addOnceToNote(Note $note): self
    {
        if (!is_array($this->note)) {
            $this->note = [];
        }

        $this->note[0] = $note;

        return $this;
    }

    /**
     * @return Note
     */
    public function addOnceToNoteWithCreate(): Note
    {
        if (!is_array($this->note)) {
            $this->note = [];
        }

        if ($this->note === []) {
            $this->addOnceTonote(new Note());
        }

        return $this->note[0];
    }

    /**
     * @return array<Description>|null
     */
    public function getDescription(): ?array
    {
        return $this->description;
    }

    /**
     * @param array<Description>|null $description
     * @return self
     */
    public function setDescription(?array $description = null): self
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
     * @return self
     */
    public function clearDescription(): self
    {
        $this->description = [];

        return $this;
    }

    /**
     * @return Description|null
     */
    public function firstDescription(): ?Description
    {
        $description = $this->description ?? [];
        $description = reset($description);

        if ($description === false) {
            return null;
        }

        return $description;
    }

    /**
     * @return Description|null
     */
    public function lastDescription(): ?Description
    {
        $description = $this->description ?? [];
        $description = end($description);

        if ($description === false) {
            return null;
        }

        return $description;
    }

    /**
     * @param Description $description
     * @return self
     */
    public function addToDescription(Description $description): self
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * @return Description
     */
    public function addToDescriptionWithCreate(): Description
    {
        $this->addTodescription($description = new Description());

        return $description;
    }

    /**
     * @param Description $description
     * @return self
     */
    public function addOnceToDescription(Description $description): self
    {
        if (!is_array($this->description)) {
            $this->description = [];
        }

        $this->description[0] = $description;

        return $this;
    }

    /**
     * @return Description
     */
    public function addOnceToDescriptionWithCreate(): Description
    {
        if (!is_array($this->description)) {
            $this->description = [];
        }

        if ($this->description === []) {
            $this->addOnceTodescription(new Description());
        }

        return $this->description[0];
    }

    /**
     * @return ExceptionStatusCode|null
     */
    public function getExceptionStatusCode(): ?ExceptionStatusCode
    {
        return $this->exceptionStatusCode;
    }

    /**
     * @return ExceptionStatusCode
     */
    public function getExceptionStatusCodeWithCreate(): ExceptionStatusCode
    {
        $this->exceptionStatusCode = is_null($this->exceptionStatusCode) ? new ExceptionStatusCode() : $this->exceptionStatusCode;

        return $this->exceptionStatusCode;
    }

    /**
     * @param ExceptionStatusCode|null $exceptionStatusCode
     * @return self
     */
    public function setExceptionStatusCode(?ExceptionStatusCode $exceptionStatusCode = null): self
    {
        $this->exceptionStatusCode = $exceptionStatusCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetExceptionStatusCode(): self
    {
        $this->exceptionStatusCode = null;

        return $this;
    }

    /**
     * @return CollaborationPriorityCode|null
     */
    public function getCollaborationPriorityCode(): ?CollaborationPriorityCode
    {
        return $this->collaborationPriorityCode;
    }

    /**
     * @return CollaborationPriorityCode
     */
    public function getCollaborationPriorityCodeWithCreate(): CollaborationPriorityCode
    {
        $this->collaborationPriorityCode = is_null($this->collaborationPriorityCode) ? new CollaborationPriorityCode() : $this->collaborationPriorityCode;

        return $this->collaborationPriorityCode;
    }

    /**
     * @param CollaborationPriorityCode|null $collaborationPriorityCode
     * @return self
     */
    public function setCollaborationPriorityCode(?CollaborationPriorityCode $collaborationPriorityCode = null): self
    {
        $this->collaborationPriorityCode = $collaborationPriorityCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCollaborationPriorityCode(): self
    {
        $this->collaborationPriorityCode = null;

        return $this;
    }

    /**
     * @return ResolutionCode|null
     */
    public function getResolutionCode(): ?ResolutionCode
    {
        return $this->resolutionCode;
    }

    /**
     * @return ResolutionCode
     */
    public function getResolutionCodeWithCreate(): ResolutionCode
    {
        $this->resolutionCode = is_null($this->resolutionCode) ? new ResolutionCode() : $this->resolutionCode;

        return $this->resolutionCode;
    }

    /**
     * @param ResolutionCode|null $resolutionCode
     * @return self
     */
    public function setResolutionCode(?ResolutionCode $resolutionCode = null): self
    {
        $this->resolutionCode = $resolutionCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetResolutionCode(): self
    {
        $this->resolutionCode = null;

        return $this;
    }

    /**
     * @return ComparedValueMeasure|null
     */
    public function getComparedValueMeasure(): ?ComparedValueMeasure
    {
        return $this->comparedValueMeasure;
    }

    /**
     * @return ComparedValueMeasure
     */
    public function getComparedValueMeasureWithCreate(): ComparedValueMeasure
    {
        $this->comparedValueMeasure = is_null($this->comparedValueMeasure) ? new ComparedValueMeasure() : $this->comparedValueMeasure;

        return $this->comparedValueMeasure;
    }

    /**
     * @param ComparedValueMeasure|null $comparedValueMeasure
     * @return self
     */
    public function setComparedValueMeasure(?ComparedValueMeasure $comparedValueMeasure = null): self
    {
        $this->comparedValueMeasure = $comparedValueMeasure;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetComparedValueMeasure(): self
    {
        $this->comparedValueMeasure = null;

        return $this;
    }

    /**
     * @return SourceValueMeasure|null
     */
    public function getSourceValueMeasure(): ?SourceValueMeasure
    {
        return $this->sourceValueMeasure;
    }

    /**
     * @return SourceValueMeasure
     */
    public function getSourceValueMeasureWithCreate(): SourceValueMeasure
    {
        $this->sourceValueMeasure = is_null($this->sourceValueMeasure) ? new SourceValueMeasure() : $this->sourceValueMeasure;

        return $this->sourceValueMeasure;
    }

    /**
     * @param SourceValueMeasure|null $sourceValueMeasure
     * @return self
     */
    public function setSourceValueMeasure(?SourceValueMeasure $sourceValueMeasure = null): self
    {
        $this->sourceValueMeasure = $sourceValueMeasure;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSourceValueMeasure(): self
    {
        $this->sourceValueMeasure = null;

        return $this;
    }

    /**
     * @return VarianceQuantity|null
     */
    public function getVarianceQuantity(): ?VarianceQuantity
    {
        return $this->varianceQuantity;
    }

    /**
     * @return VarianceQuantity
     */
    public function getVarianceQuantityWithCreate(): VarianceQuantity
    {
        $this->varianceQuantity = is_null($this->varianceQuantity) ? new VarianceQuantity() : $this->varianceQuantity;

        return $this->varianceQuantity;
    }

    /**
     * @param VarianceQuantity|null $varianceQuantity
     * @return self
     */
    public function setVarianceQuantity(?VarianceQuantity $varianceQuantity = null): self
    {
        $this->varianceQuantity = $varianceQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetVarianceQuantity(): self
    {
        $this->varianceQuantity = null;

        return $this;
    }

    /**
     * @return SupplyChainActivityTypeCode|null
     */
    public function getSupplyChainActivityTypeCode(): ?SupplyChainActivityTypeCode
    {
        return $this->supplyChainActivityTypeCode;
    }

    /**
     * @return SupplyChainActivityTypeCode
     */
    public function getSupplyChainActivityTypeCodeWithCreate(): SupplyChainActivityTypeCode
    {
        $this->supplyChainActivityTypeCode = is_null($this->supplyChainActivityTypeCode) ? new SupplyChainActivityTypeCode() : $this->supplyChainActivityTypeCode;

        return $this->supplyChainActivityTypeCode;
    }

    /**
     * @param SupplyChainActivityTypeCode|null $supplyChainActivityTypeCode
     * @return self
     */
    public function setSupplyChainActivityTypeCode(
        ?SupplyChainActivityTypeCode $supplyChainActivityTypeCode = null,
    ): self {
        $this->supplyChainActivityTypeCode = $supplyChainActivityTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSupplyChainActivityTypeCode(): self
    {
        $this->supplyChainActivityTypeCode = null;

        return $this;
    }

    /**
     * @return PerformanceMetricTypeCode|null
     */
    public function getPerformanceMetricTypeCode(): ?PerformanceMetricTypeCode
    {
        return $this->performanceMetricTypeCode;
    }

    /**
     * @return PerformanceMetricTypeCode
     */
    public function getPerformanceMetricTypeCodeWithCreate(): PerformanceMetricTypeCode
    {
        $this->performanceMetricTypeCode = is_null($this->performanceMetricTypeCode) ? new PerformanceMetricTypeCode() : $this->performanceMetricTypeCode;

        return $this->performanceMetricTypeCode;
    }

    /**
     * @param PerformanceMetricTypeCode|null $performanceMetricTypeCode
     * @return self
     */
    public function setPerformanceMetricTypeCode(?PerformanceMetricTypeCode $performanceMetricTypeCode = null): self
    {
        $this->performanceMetricTypeCode = $performanceMetricTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPerformanceMetricTypeCode(): self
    {
        $this->performanceMetricTypeCode = null;

        return $this;
    }

    /**
     * @return ExceptionObservationPeriod|null
     */
    public function getExceptionObservationPeriod(): ?ExceptionObservationPeriod
    {
        return $this->exceptionObservationPeriod;
    }

    /**
     * @return ExceptionObservationPeriod
     */
    public function getExceptionObservationPeriodWithCreate(): ExceptionObservationPeriod
    {
        $this->exceptionObservationPeriod = is_null($this->exceptionObservationPeriod) ? new ExceptionObservationPeriod() : $this->exceptionObservationPeriod;

        return $this->exceptionObservationPeriod;
    }

    /**
     * @param ExceptionObservationPeriod|null $exceptionObservationPeriod
     * @return self
     */
    public function setExceptionObservationPeriod(
        ?ExceptionObservationPeriod $exceptionObservationPeriod = null,
    ): self {
        $this->exceptionObservationPeriod = $exceptionObservationPeriod;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetExceptionObservationPeriod(): self
    {
        $this->exceptionObservationPeriod = null;

        return $this;
    }

    /**
     * @return array<DocumentReference>|null
     */
    public function getDocumentReference(): ?array
    {
        return $this->documentReference;
    }

    /**
     * @param array<DocumentReference>|null $documentReference
     * @return self
     */
    public function setDocumentReference(?array $documentReference = null): self
    {
        $this->documentReference = $documentReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDocumentReference(): self
    {
        $this->documentReference = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearDocumentReference(): self
    {
        $this->documentReference = [];

        return $this;
    }

    /**
     * @return DocumentReference|null
     */
    public function firstDocumentReference(): ?DocumentReference
    {
        $documentReference = $this->documentReference ?? [];
        $documentReference = reset($documentReference);

        if ($documentReference === false) {
            return null;
        }

        return $documentReference;
    }

    /**
     * @return DocumentReference|null
     */
    public function lastDocumentReference(): ?DocumentReference
    {
        $documentReference = $this->documentReference ?? [];
        $documentReference = end($documentReference);

        if ($documentReference === false) {
            return null;
        }

        return $documentReference;
    }

    /**
     * @param DocumentReference $documentReference
     * @return self
     */
    public function addToDocumentReference(DocumentReference $documentReference): self
    {
        $this->documentReference[] = $documentReference;

        return $this;
    }

    /**
     * @return DocumentReference
     */
    public function addToDocumentReferenceWithCreate(): DocumentReference
    {
        $this->addTodocumentReference($documentReference = new DocumentReference());

        return $documentReference;
    }

    /**
     * @param DocumentReference $documentReference
     * @return self
     */
    public function addOnceToDocumentReference(DocumentReference $documentReference): self
    {
        if (!is_array($this->documentReference)) {
            $this->documentReference = [];
        }

        $this->documentReference[0] = $documentReference;

        return $this;
    }

    /**
     * @return DocumentReference
     */
    public function addOnceToDocumentReferenceWithCreate(): DocumentReference
    {
        if (!is_array($this->documentReference)) {
            $this->documentReference = [];
        }

        if ($this->documentReference === []) {
            $this->addOnceTodocumentReference(new DocumentReference());
        }

        return $this->documentReference[0];
    }

    /**
     * @return ForecastException|null
     */
    public function getForecastException(): ?ForecastException
    {
        return $this->forecastException;
    }

    /**
     * @return ForecastException
     */
    public function getForecastExceptionWithCreate(): ForecastException
    {
        $this->forecastException = is_null($this->forecastException) ? new ForecastException() : $this->forecastException;

        return $this->forecastException;
    }

    /**
     * @param ForecastException|null $forecastException
     * @return self
     */
    public function setForecastException(?ForecastException $forecastException = null): self
    {
        $this->forecastException = $forecastException;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetForecastException(): self
    {
        $this->forecastException = null;

        return $this;
    }

    /**
     * @return SupplyItem|null
     */
    public function getSupplyItem(): ?SupplyItem
    {
        return $this->supplyItem;
    }

    /**
     * @return SupplyItem
     */
    public function getSupplyItemWithCreate(): SupplyItem
    {
        $this->supplyItem = is_null($this->supplyItem) ? new SupplyItem() : $this->supplyItem;

        return $this->supplyItem;
    }

    /**
     * @param SupplyItem|null $supplyItem
     * @return self
     */
    public function setSupplyItem(?SupplyItem $supplyItem = null): self
    {
        $this->supplyItem = $supplyItem;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSupplyItem(): self
    {
        $this->supplyItem = null;

        return $this;
    }
}
