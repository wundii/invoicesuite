<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\ubl\cbc\Description;
use horstoeko\invoicesuite\models\ubl\cbc\EvaluationCriterionTypeCode;
use horstoeko\invoicesuite\models\ubl\cbc\Expression;
use horstoeko\invoicesuite\models\ubl\cbc\ExpressionCode;
use horstoeko\invoicesuite\models\ubl\cbc\ThresholdAmount;
use horstoeko\invoicesuite\models\ubl\cbc\ThresholdQuantity;

class EvaluationCriterionType
{
    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\EvaluationCriterionTypeCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\EvaluationCriterionTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("EvaluationCriterionTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEvaluationCriterionTypeCode", setter="setEvaluationCriterionTypeCode")
     */
    private $evaluationCriterionTypeCode;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\Description>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\Description>")
     * @JMS\Expose
     * @JMS\SerializedName("Description")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Description", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getDescription", setter="setDescription")
     */
    private $description;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ThresholdAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ThresholdAmount")
     * @JMS\Expose
     * @JMS\SerializedName("ThresholdAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getThresholdAmount", setter="setThresholdAmount")
     */
    private $thresholdAmount;

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
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ExpressionCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ExpressionCode")
     * @JMS\Expose
     * @JMS\SerializedName("ExpressionCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getExpressionCode", setter="setExpressionCode")
     */
    private $expressionCode;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\Expression>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\Expression>")
     * @JMS\Expose
     * @JMS\SerializedName("Expression")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Expression", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getExpression", setter="setExpression")
     */
    private $expression;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\DurationPeriod
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\DurationPeriod")
     * @JMS\Expose
     * @JMS\SerializedName("DurationPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDurationPeriod", setter="setDurationPeriod")
     */
    private $durationPeriod;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\SuggestedEvidence>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\SuggestedEvidence>")
     * @JMS\Expose
     * @JMS\SerializedName("SuggestedEvidence")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SuggestedEvidence", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSuggestedEvidence", setter="setSuggestedEvidence")
     */
    private $suggestedEvidence;

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\EvaluationCriterionTypeCode|null
     */
    public function getEvaluationCriterionTypeCode(): ?EvaluationCriterionTypeCode
    {
        return $this->evaluationCriterionTypeCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\EvaluationCriterionTypeCode
     */
    public function getEvaluationCriterionTypeCodeWithCreate(): EvaluationCriterionTypeCode
    {
        $this->evaluationCriterionTypeCode = is_null($this->evaluationCriterionTypeCode) ? new EvaluationCriterionTypeCode() : $this->evaluationCriterionTypeCode;

        return $this->evaluationCriterionTypeCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\EvaluationCriterionTypeCode $evaluationCriterionTypeCode
     * @return self
     */
    public function setEvaluationCriterionTypeCode(EvaluationCriterionTypeCode $evaluationCriterionTypeCode): self
    {
        $this->evaluationCriterionTypeCode = $evaluationCriterionTypeCode;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\Description>|null
     */
    public function getDescription(): ?array
    {
        return $this->description;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\Description> $description
     * @return self
     */
    public function setDescription(array $description): self
    {
        $this->description = $description;

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
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Description $description
     * @return self
     */
    public function addToDescription(Description $description): self
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Description
     */
    public function addToDescriptionWithCreate(): Description
    {
        $this->addTodescription($description = new Description());

        return $description;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Description $description
     * @return self
     */
    public function addOnceToDescription(Description $description): self
    {
        $this->description[0] = $description;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Description
     */
    public function addOnceToDescriptionWithCreate(): Description
    {
        if ($this->description === []) {
            $this->addOnceTodescription(new Description());
        }

        return $this->description[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ThresholdAmount|null
     */
    public function getThresholdAmount(): ?ThresholdAmount
    {
        return $this->thresholdAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ThresholdAmount
     */
    public function getThresholdAmountWithCreate(): ThresholdAmount
    {
        $this->thresholdAmount = is_null($this->thresholdAmount) ? new ThresholdAmount() : $this->thresholdAmount;

        return $this->thresholdAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ThresholdAmount $thresholdAmount
     * @return self
     */
    public function setThresholdAmount(ThresholdAmount $thresholdAmount): self
    {
        $this->thresholdAmount = $thresholdAmount;

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
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ExpressionCode|null
     */
    public function getExpressionCode(): ?ExpressionCode
    {
        return $this->expressionCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ExpressionCode
     */
    public function getExpressionCodeWithCreate(): ExpressionCode
    {
        $this->expressionCode = is_null($this->expressionCode) ? new ExpressionCode() : $this->expressionCode;

        return $this->expressionCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ExpressionCode $expressionCode
     * @return self
     */
    public function setExpressionCode(ExpressionCode $expressionCode): self
    {
        $this->expressionCode = $expressionCode;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\Expression>|null
     */
    public function getExpression(): ?array
    {
        return $this->expression;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\Expression> $expression
     * @return self
     */
    public function setExpression(array $expression): self
    {
        $this->expression = $expression;

        return $this;
    }

    /**
     * @return self
     */
    public function clearExpression(): self
    {
        $this->expression = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Expression $expression
     * @return self
     */
    public function addToExpression(Expression $expression): self
    {
        $this->expression[] = $expression;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Expression
     */
    public function addToExpressionWithCreate(): Expression
    {
        $this->addToexpression($expression = new Expression());

        return $expression;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Expression $expression
     * @return self
     */
    public function addOnceToExpression(Expression $expression): self
    {
        $this->expression[0] = $expression;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Expression
     */
    public function addOnceToExpressionWithCreate(): Expression
    {
        if ($this->expression === []) {
            $this->addOnceToexpression(new Expression());
        }

        return $this->expression[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\DurationPeriod|null
     */
    public function getDurationPeriod(): ?DurationPeriod
    {
        return $this->durationPeriod;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\DurationPeriod
     */
    public function getDurationPeriodWithCreate(): DurationPeriod
    {
        $this->durationPeriod = is_null($this->durationPeriod) ? new DurationPeriod() : $this->durationPeriod;

        return $this->durationPeriod;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\DurationPeriod $durationPeriod
     * @return self
     */
    public function setDurationPeriod(DurationPeriod $durationPeriod): self
    {
        $this->durationPeriod = $durationPeriod;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\SuggestedEvidence>|null
     */
    public function getSuggestedEvidence(): ?array
    {
        return $this->suggestedEvidence;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\SuggestedEvidence> $suggestedEvidence
     * @return self
     */
    public function setSuggestedEvidence(array $suggestedEvidence): self
    {
        $this->suggestedEvidence = $suggestedEvidence;

        return $this;
    }

    /**
     * @return self
     */
    public function clearSuggestedEvidence(): self
    {
        $this->suggestedEvidence = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\SuggestedEvidence $suggestedEvidence
     * @return self
     */
    public function addToSuggestedEvidence(SuggestedEvidence $suggestedEvidence): self
    {
        $this->suggestedEvidence[] = $suggestedEvidence;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\SuggestedEvidence
     */
    public function addToSuggestedEvidenceWithCreate(): SuggestedEvidence
    {
        $this->addTosuggestedEvidence($suggestedEvidence = new SuggestedEvidence());

        return $suggestedEvidence;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\SuggestedEvidence $suggestedEvidence
     * @return self
     */
    public function addOnceToSuggestedEvidence(SuggestedEvidence $suggestedEvidence): self
    {
        $this->suggestedEvidence[0] = $suggestedEvidence;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\SuggestedEvidence
     */
    public function addOnceToSuggestedEvidenceWithCreate(): SuggestedEvidence
    {
        if ($this->suggestedEvidence === []) {
            $this->addOnceTosuggestedEvidence(new SuggestedEvidence());
        }

        return $this->suggestedEvidence[0];
    }
}
