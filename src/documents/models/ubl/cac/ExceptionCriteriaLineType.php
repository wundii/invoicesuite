<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CollaborationPriorityCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ExceptionResolutionCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ExceptionStatusCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Note;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PerformanceMetricTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SupplyChainActivityTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ThresholdQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ThresholdValueComparisonCode;

class ExceptionCriteriaLineType
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
     * @var ThresholdValueComparisonCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ThresholdValueComparisonCode")
     * @JMS\Expose
     * @JMS\SerializedName("ThresholdValueComparisonCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getThresholdValueComparisonCode", setter="setThresholdValueComparisonCode")
     */
    private $thresholdValueComparisonCode;

    /**
     * @var ThresholdQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ThresholdQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("ThresholdQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getThresholdQuantity", setter="setThresholdQuantity")
     */
    private $thresholdQuantity;

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
     * @var ExceptionResolutionCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ExceptionResolutionCode")
     * @JMS\Expose
     * @JMS\SerializedName("ExceptionResolutionCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getExceptionResolutionCode", setter="setExceptionResolutionCode")
     */
    private $exceptionResolutionCode;

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
     * @var EffectivePeriod|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\EffectivePeriod")
     * @JMS\Expose
     * @JMS\SerializedName("EffectivePeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEffectivePeriod", setter="setEffectivePeriod")
     */
    private $effectivePeriod;

    /**
     * @var array<SupplyItem>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\SupplyItem>")
     * @JMS\Expose
     * @JMS\SerializedName("SupplyItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SupplyItem", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSupplyItem", setter="setSupplyItem")
     */
    private $supplyItem;

    /**
     * @var ForecastExceptionCriterionLine|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ForecastExceptionCriterionLine")
     * @JMS\Expose
     * @JMS\SerializedName("ForecastExceptionCriterionLine")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getForecastExceptionCriterionLine", setter="setForecastExceptionCriterionLine")
     */
    private $forecastExceptionCriterionLine;

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
     * @return ThresholdValueComparisonCode|null
     */
    public function getThresholdValueComparisonCode(): ?ThresholdValueComparisonCode
    {
        return $this->thresholdValueComparisonCode;
    }

    /**
     * @return ThresholdValueComparisonCode
     */
    public function getThresholdValueComparisonCodeWithCreate(): ThresholdValueComparisonCode
    {
        $this->thresholdValueComparisonCode = is_null($this->thresholdValueComparisonCode) ? new ThresholdValueComparisonCode() : $this->thresholdValueComparisonCode;

        return $this->thresholdValueComparisonCode;
    }

    /**
     * @param ThresholdValueComparisonCode|null $thresholdValueComparisonCode
     * @return self
     */
    public function setThresholdValueComparisonCode(
        ?ThresholdValueComparisonCode $thresholdValueComparisonCode = null,
    ): self {
        $this->thresholdValueComparisonCode = $thresholdValueComparisonCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetThresholdValueComparisonCode(): self
    {
        $this->thresholdValueComparisonCode = null;

        return $this;
    }

    /**
     * @return ThresholdQuantity|null
     */
    public function getThresholdQuantity(): ?ThresholdQuantity
    {
        return $this->thresholdQuantity;
    }

    /**
     * @return ThresholdQuantity
     */
    public function getThresholdQuantityWithCreate(): ThresholdQuantity
    {
        $this->thresholdQuantity = is_null($this->thresholdQuantity) ? new ThresholdQuantity() : $this->thresholdQuantity;

        return $this->thresholdQuantity;
    }

    /**
     * @param ThresholdQuantity|null $thresholdQuantity
     * @return self
     */
    public function setThresholdQuantity(?ThresholdQuantity $thresholdQuantity = null): self
    {
        $this->thresholdQuantity = $thresholdQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetThresholdQuantity(): self
    {
        $this->thresholdQuantity = null;

        return $this;
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
     * @return ExceptionResolutionCode|null
     */
    public function getExceptionResolutionCode(): ?ExceptionResolutionCode
    {
        return $this->exceptionResolutionCode;
    }

    /**
     * @return ExceptionResolutionCode
     */
    public function getExceptionResolutionCodeWithCreate(): ExceptionResolutionCode
    {
        $this->exceptionResolutionCode = is_null($this->exceptionResolutionCode) ? new ExceptionResolutionCode() : $this->exceptionResolutionCode;

        return $this->exceptionResolutionCode;
    }

    /**
     * @param ExceptionResolutionCode|null $exceptionResolutionCode
     * @return self
     */
    public function setExceptionResolutionCode(?ExceptionResolutionCode $exceptionResolutionCode = null): self
    {
        $this->exceptionResolutionCode = $exceptionResolutionCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetExceptionResolutionCode(): self
    {
        $this->exceptionResolutionCode = null;

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
     * @return EffectivePeriod|null
     */
    public function getEffectivePeriod(): ?EffectivePeriod
    {
        return $this->effectivePeriod;
    }

    /**
     * @return EffectivePeriod
     */
    public function getEffectivePeriodWithCreate(): EffectivePeriod
    {
        $this->effectivePeriod = is_null($this->effectivePeriod) ? new EffectivePeriod() : $this->effectivePeriod;

        return $this->effectivePeriod;
    }

    /**
     * @param EffectivePeriod|null $effectivePeriod
     * @return self
     */
    public function setEffectivePeriod(?EffectivePeriod $effectivePeriod = null): self
    {
        $this->effectivePeriod = $effectivePeriod;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetEffectivePeriod(): self
    {
        $this->effectivePeriod = null;

        return $this;
    }

    /**
     * @return array<SupplyItem>|null
     */
    public function getSupplyItem(): ?array
    {
        return $this->supplyItem;
    }

    /**
     * @param array<SupplyItem>|null $supplyItem
     * @return self
     */
    public function setSupplyItem(?array $supplyItem = null): self
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

    /**
     * @return self
     */
    public function clearSupplyItem(): self
    {
        $this->supplyItem = [];

        return $this;
    }

    /**
     * @return SupplyItem|null
     */
    public function firstSupplyItem(): ?SupplyItem
    {
        $supplyItem = $this->supplyItem ?? [];
        $supplyItem = reset($supplyItem);

        if ($supplyItem === false) {
            return null;
        }

        return $supplyItem;
    }

    /**
     * @return SupplyItem|null
     */
    public function lastSupplyItem(): ?SupplyItem
    {
        $supplyItem = $this->supplyItem ?? [];
        $supplyItem = end($supplyItem);

        if ($supplyItem === false) {
            return null;
        }

        return $supplyItem;
    }

    /**
     * @param SupplyItem $supplyItem
     * @return self
     */
    public function addToSupplyItem(SupplyItem $supplyItem): self
    {
        $this->supplyItem[] = $supplyItem;

        return $this;
    }

    /**
     * @return SupplyItem
     */
    public function addToSupplyItemWithCreate(): SupplyItem
    {
        $this->addTosupplyItem($supplyItem = new SupplyItem());

        return $supplyItem;
    }

    /**
     * @param SupplyItem $supplyItem
     * @return self
     */
    public function addOnceToSupplyItem(SupplyItem $supplyItem): self
    {
        if (!is_array($this->supplyItem)) {
            $this->supplyItem = [];
        }

        $this->supplyItem[0] = $supplyItem;

        return $this;
    }

    /**
     * @return SupplyItem
     */
    public function addOnceToSupplyItemWithCreate(): SupplyItem
    {
        if (!is_array($this->supplyItem)) {
            $this->supplyItem = [];
        }

        if ($this->supplyItem === []) {
            $this->addOnceTosupplyItem(new SupplyItem());
        }

        return $this->supplyItem[0];
    }

    /**
     * @return ForecastExceptionCriterionLine|null
     */
    public function getForecastExceptionCriterionLine(): ?ForecastExceptionCriterionLine
    {
        return $this->forecastExceptionCriterionLine;
    }

    /**
     * @return ForecastExceptionCriterionLine
     */
    public function getForecastExceptionCriterionLineWithCreate(): ForecastExceptionCriterionLine
    {
        $this->forecastExceptionCriterionLine = is_null($this->forecastExceptionCriterionLine) ? new ForecastExceptionCriterionLine() : $this->forecastExceptionCriterionLine;

        return $this->forecastExceptionCriterionLine;
    }

    /**
     * @param ForecastExceptionCriterionLine|null $forecastExceptionCriterionLine
     * @return self
     */
    public function setForecastExceptionCriterionLine(
        ?ForecastExceptionCriterionLine $forecastExceptionCriterionLine = null,
    ): self {
        $this->forecastExceptionCriterionLine = $forecastExceptionCriterionLine;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetForecastExceptionCriterionLine(): self
    {
        $this->forecastExceptionCriterionLine = null;

        return $this;
    }
}
