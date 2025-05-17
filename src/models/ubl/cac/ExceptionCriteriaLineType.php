<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\models\ubl\cbc\CollaborationPriorityCode;
use horstoeko\invoicesuite\models\ubl\cbc\ExceptionResolutionCode;
use horstoeko\invoicesuite\models\ubl\cbc\ExceptionStatusCode;
use horstoeko\invoicesuite\models\ubl\cbc\ID;
use horstoeko\invoicesuite\models\ubl\cbc\Note;
use horstoeko\invoicesuite\models\ubl\cbc\PerformanceMetricTypeCode;
use horstoeko\invoicesuite\models\ubl\cbc\SupplyChainActivityTypeCode;
use horstoeko\invoicesuite\models\ubl\cbc\ThresholdQuantity;
use horstoeko\invoicesuite\models\ubl\cbc\ThresholdValueComparisonCode;

class ExceptionCriteriaLineType
{
    use HandlesObjectFlags;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ID
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ID")
     * @JMS\Expose
     * @JMS\SerializedName("ID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getID", setter="setID")
     */
    private $iD;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\Note>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\Note>")
     * @JMS\Expose
     * @JMS\SerializedName("Note")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Note", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getNote", setter="setNote")
     */
    private $note;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ThresholdValueComparisonCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ThresholdValueComparisonCode")
     * @JMS\Expose
     * @JMS\SerializedName("ThresholdValueComparisonCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getThresholdValueComparisonCode", setter="setThresholdValueComparisonCode")
     */
    private $thresholdValueComparisonCode;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ThresholdQuantity
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ThresholdQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("ThresholdQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getThresholdQuantity", setter="setThresholdQuantity")
     */
    private $thresholdQuantity;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ExceptionStatusCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ExceptionStatusCode")
     * @JMS\Expose
     * @JMS\SerializedName("ExceptionStatusCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getExceptionStatusCode", setter="setExceptionStatusCode")
     */
    private $exceptionStatusCode;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\CollaborationPriorityCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\CollaborationPriorityCode")
     * @JMS\Expose
     * @JMS\SerializedName("CollaborationPriorityCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCollaborationPriorityCode", setter="setCollaborationPriorityCode")
     */
    private $collaborationPriorityCode;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ExceptionResolutionCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ExceptionResolutionCode")
     * @JMS\Expose
     * @JMS\SerializedName("ExceptionResolutionCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getExceptionResolutionCode", setter="setExceptionResolutionCode")
     */
    private $exceptionResolutionCode;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\SupplyChainActivityTypeCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\SupplyChainActivityTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("SupplyChainActivityTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSupplyChainActivityTypeCode", setter="setSupplyChainActivityTypeCode")
     */
    private $supplyChainActivityTypeCode;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\PerformanceMetricTypeCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\PerformanceMetricTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("PerformanceMetricTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPerformanceMetricTypeCode", setter="setPerformanceMetricTypeCode")
     */
    private $performanceMetricTypeCode;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\EffectivePeriod
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\EffectivePeriod")
     * @JMS\Expose
     * @JMS\SerializedName("EffectivePeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEffectivePeriod", setter="setEffectivePeriod")
     */
    private $effectivePeriod;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\SupplyItem>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\SupplyItem>")
     * @JMS\Expose
     * @JMS\SerializedName("SupplyItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SupplyItem", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSupplyItem", setter="setSupplyItem")
     */
    private $supplyItem;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\ForecastExceptionCriterionLine
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\ForecastExceptionCriterionLine")
     * @JMS\Expose
     * @JMS\SerializedName("ForecastExceptionCriterionLine")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getForecastExceptionCriterionLine", setter="setForecastExceptionCriterionLine")
     */
    private $forecastExceptionCriterionLine;

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ID|null
     */
    public function getID(): ?ID
    {
        return $this->iD;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ID
     */
    public function getIDWithCreate(): ID
    {
        $this->iD = is_null($this->iD) ? new ID() : $this->iD;

        return $this->iD;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ID $iD
     * @return self
     */
    public function setID(ID $iD): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\Note>|null
     */
    public function getNote(): ?array
    {
        return $this->note;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\Note> $note
     * @return self
     */
    public function setNote(array $note): self
    {
        $this->note = $note;

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
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Note $note
     * @return self
     */
    public function addToNote(Note $note): self
    {
        $this->note[] = $note;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Note
     */
    public function addToNoteWithCreate(): Note
    {
        $this->addTonote($note = new Note());

        return $note;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Note $note
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
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Note
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
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ThresholdValueComparisonCode|null
     */
    public function getThresholdValueComparisonCode(): ?ThresholdValueComparisonCode
    {
        return $this->thresholdValueComparisonCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ThresholdValueComparisonCode
     */
    public function getThresholdValueComparisonCodeWithCreate(): ThresholdValueComparisonCode
    {
        $this->thresholdValueComparisonCode = is_null($this->thresholdValueComparisonCode) ? new ThresholdValueComparisonCode() : $this->thresholdValueComparisonCode;

        return $this->thresholdValueComparisonCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ThresholdValueComparisonCode $thresholdValueComparisonCode
     * @return self
     */
    public function setThresholdValueComparisonCode(ThresholdValueComparisonCode $thresholdValueComparisonCode): self
    {
        $this->thresholdValueComparisonCode = $thresholdValueComparisonCode;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ThresholdQuantity|null
     */
    public function getThresholdQuantity(): ?ThresholdQuantity
    {
        return $this->thresholdQuantity;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ThresholdQuantity
     */
    public function getThresholdQuantityWithCreate(): ThresholdQuantity
    {
        $this->thresholdQuantity = is_null($this->thresholdQuantity) ? new ThresholdQuantity() : $this->thresholdQuantity;

        return $this->thresholdQuantity;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ThresholdQuantity $thresholdQuantity
     * @return self
     */
    public function setThresholdQuantity(ThresholdQuantity $thresholdQuantity): self
    {
        $this->thresholdQuantity = $thresholdQuantity;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ExceptionStatusCode|null
     */
    public function getExceptionStatusCode(): ?ExceptionStatusCode
    {
        return $this->exceptionStatusCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ExceptionStatusCode
     */
    public function getExceptionStatusCodeWithCreate(): ExceptionStatusCode
    {
        $this->exceptionStatusCode = is_null($this->exceptionStatusCode) ? new ExceptionStatusCode() : $this->exceptionStatusCode;

        return $this->exceptionStatusCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ExceptionStatusCode $exceptionStatusCode
     * @return self
     */
    public function setExceptionStatusCode(ExceptionStatusCode $exceptionStatusCode): self
    {
        $this->exceptionStatusCode = $exceptionStatusCode;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\CollaborationPriorityCode|null
     */
    public function getCollaborationPriorityCode(): ?CollaborationPriorityCode
    {
        return $this->collaborationPriorityCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\CollaborationPriorityCode
     */
    public function getCollaborationPriorityCodeWithCreate(): CollaborationPriorityCode
    {
        $this->collaborationPriorityCode = is_null($this->collaborationPriorityCode) ? new CollaborationPriorityCode() : $this->collaborationPriorityCode;

        return $this->collaborationPriorityCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\CollaborationPriorityCode $collaborationPriorityCode
     * @return self
     */
    public function setCollaborationPriorityCode(CollaborationPriorityCode $collaborationPriorityCode): self
    {
        $this->collaborationPriorityCode = $collaborationPriorityCode;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ExceptionResolutionCode|null
     */
    public function getExceptionResolutionCode(): ?ExceptionResolutionCode
    {
        return $this->exceptionResolutionCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ExceptionResolutionCode
     */
    public function getExceptionResolutionCodeWithCreate(): ExceptionResolutionCode
    {
        $this->exceptionResolutionCode = is_null($this->exceptionResolutionCode) ? new ExceptionResolutionCode() : $this->exceptionResolutionCode;

        return $this->exceptionResolutionCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ExceptionResolutionCode $exceptionResolutionCode
     * @return self
     */
    public function setExceptionResolutionCode(ExceptionResolutionCode $exceptionResolutionCode): self
    {
        $this->exceptionResolutionCode = $exceptionResolutionCode;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\SupplyChainActivityTypeCode|null
     */
    public function getSupplyChainActivityTypeCode(): ?SupplyChainActivityTypeCode
    {
        return $this->supplyChainActivityTypeCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\SupplyChainActivityTypeCode
     */
    public function getSupplyChainActivityTypeCodeWithCreate(): SupplyChainActivityTypeCode
    {
        $this->supplyChainActivityTypeCode = is_null($this->supplyChainActivityTypeCode) ? new SupplyChainActivityTypeCode() : $this->supplyChainActivityTypeCode;

        return $this->supplyChainActivityTypeCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\SupplyChainActivityTypeCode $supplyChainActivityTypeCode
     * @return self
     */
    public function setSupplyChainActivityTypeCode(SupplyChainActivityTypeCode $supplyChainActivityTypeCode): self
    {
        $this->supplyChainActivityTypeCode = $supplyChainActivityTypeCode;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\PerformanceMetricTypeCode|null
     */
    public function getPerformanceMetricTypeCode(): ?PerformanceMetricTypeCode
    {
        return $this->performanceMetricTypeCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\PerformanceMetricTypeCode
     */
    public function getPerformanceMetricTypeCodeWithCreate(): PerformanceMetricTypeCode
    {
        $this->performanceMetricTypeCode = is_null($this->performanceMetricTypeCode) ? new PerformanceMetricTypeCode() : $this->performanceMetricTypeCode;

        return $this->performanceMetricTypeCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\PerformanceMetricTypeCode $performanceMetricTypeCode
     * @return self
     */
    public function setPerformanceMetricTypeCode(PerformanceMetricTypeCode $performanceMetricTypeCode): self
    {
        $this->performanceMetricTypeCode = $performanceMetricTypeCode;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\EffectivePeriod|null
     */
    public function getEffectivePeriod(): ?EffectivePeriod
    {
        return $this->effectivePeriod;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\EffectivePeriod
     */
    public function getEffectivePeriodWithCreate(): EffectivePeriod
    {
        $this->effectivePeriod = is_null($this->effectivePeriod) ? new EffectivePeriod() : $this->effectivePeriod;

        return $this->effectivePeriod;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\EffectivePeriod $effectivePeriod
     * @return self
     */
    public function setEffectivePeriod(EffectivePeriod $effectivePeriod): self
    {
        $this->effectivePeriod = $effectivePeriod;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\SupplyItem>|null
     */
    public function getSupplyItem(): ?array
    {
        return $this->supplyItem;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\SupplyItem> $supplyItem
     * @return self
     */
    public function setSupplyItem(array $supplyItem): self
    {
        $this->supplyItem = $supplyItem;

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
     * @param \horstoeko\invoicesuite\models\ubl\cac\SupplyItem $supplyItem
     * @return self
     */
    public function addToSupplyItem(SupplyItem $supplyItem): self
    {
        $this->supplyItem[] = $supplyItem;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\SupplyItem
     */
    public function addToSupplyItemWithCreate(): SupplyItem
    {
        $this->addTosupplyItem($supplyItem = new SupplyItem());

        return $supplyItem;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\SupplyItem $supplyItem
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
     * @return \horstoeko\invoicesuite\models\ubl\cac\SupplyItem
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
     * @return \horstoeko\invoicesuite\models\ubl\cac\ForecastExceptionCriterionLine|null
     */
    public function getForecastExceptionCriterionLine(): ?ForecastExceptionCriterionLine
    {
        return $this->forecastExceptionCriterionLine;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ForecastExceptionCriterionLine
     */
    public function getForecastExceptionCriterionLineWithCreate(): ForecastExceptionCriterionLine
    {
        $this->forecastExceptionCriterionLine = is_null($this->forecastExceptionCriterionLine) ? new ForecastExceptionCriterionLine() : $this->forecastExceptionCriterionLine;

        return $this->forecastExceptionCriterionLine;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\ForecastExceptionCriterionLine $forecastExceptionCriterionLine
     * @return self
     */
    public function setForecastExceptionCriterionLine(
        ForecastExceptionCriterionLine $forecastExceptionCriterionLine,
    ): self {
        $this->forecastExceptionCriterionLine = $forecastExceptionCriterionLine;

        return $this;
    }
}
