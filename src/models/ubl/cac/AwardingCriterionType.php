<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\ubl\cbc\AwardingCriterionTypeCode;
use horstoeko\invoicesuite\models\ubl\cbc\CalculationExpression;
use horstoeko\invoicesuite\models\ubl\cbc\CalculationExpressionCode;
use horstoeko\invoicesuite\models\ubl\cbc\Description;
use horstoeko\invoicesuite\models\ubl\cbc\ID;
use horstoeko\invoicesuite\models\ubl\cbc\MaximumAmount;
use horstoeko\invoicesuite\models\ubl\cbc\MaximumQuantity;
use horstoeko\invoicesuite\models\ubl\cbc\MinimumAmount;
use horstoeko\invoicesuite\models\ubl\cbc\MinimumImprovementBid;
use horstoeko\invoicesuite\models\ubl\cbc\MinimumQuantity;
use horstoeko\invoicesuite\models\ubl\cbc\Weight;
use horstoeko\invoicesuite\models\ubl\cbc\WeightNumeric;

class AwardingCriterionType
{
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
     * @var \horstoeko\invoicesuite\models\ubl\cbc\AwardingCriterionTypeCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\AwardingCriterionTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("AwardingCriterionTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAwardingCriterionTypeCode", setter="setAwardingCriterionTypeCode")
     */
    private $awardingCriterionTypeCode;

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
     * @var \horstoeko\invoicesuite\models\ubl\cbc\WeightNumeric
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\WeightNumeric")
     * @JMS\Expose
     * @JMS\SerializedName("WeightNumeric")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getWeightNumeric", setter="setWeightNumeric")
     */
    private $weightNumeric;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\Weight>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\Weight>")
     * @JMS\Expose
     * @JMS\SerializedName("Weight")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Weight", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getWeight", setter="setWeight")
     */
    private $weight;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\CalculationExpression>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\CalculationExpression>")
     * @JMS\Expose
     * @JMS\SerializedName("CalculationExpression")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="CalculationExpression", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getCalculationExpression", setter="setCalculationExpression")
     */
    private $calculationExpression;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\CalculationExpressionCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\CalculationExpressionCode")
     * @JMS\Expose
     * @JMS\SerializedName("CalculationExpressionCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCalculationExpressionCode", setter="setCalculationExpressionCode")
     */
    private $calculationExpressionCode;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\MinimumQuantity
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\MinimumQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("MinimumQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMinimumQuantity", setter="setMinimumQuantity")
     */
    private $minimumQuantity;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\MaximumQuantity
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\MaximumQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("MaximumQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMaximumQuantity", setter="setMaximumQuantity")
     */
    private $maximumQuantity;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\MinimumAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\MinimumAmount")
     * @JMS\Expose
     * @JMS\SerializedName("MinimumAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMinimumAmount", setter="setMinimumAmount")
     */
    private $minimumAmount;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\MaximumAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\MaximumAmount")
     * @JMS\Expose
     * @JMS\SerializedName("MaximumAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMaximumAmount", setter="setMaximumAmount")
     */
    private $maximumAmount;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\MinimumImprovementBid>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\MinimumImprovementBid>")
     * @JMS\Expose
     * @JMS\SerializedName("MinimumImprovementBid")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="MinimumImprovementBid", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getMinimumImprovementBid", setter="setMinimumImprovementBid")
     */
    private $minimumImprovementBid;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\SubordinateAwardingCriterion>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\SubordinateAwardingCriterion>")
     * @JMS\Expose
     * @JMS\SerializedName("SubordinateAwardingCriterion")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SubordinateAwardingCriterion", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSubordinateAwardingCriterion", setter="setSubordinateAwardingCriterion")
     */
    private $subordinateAwardingCriterion;

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
     * @return \horstoeko\invoicesuite\models\ubl\cbc\AwardingCriterionTypeCode|null
     */
    public function getAwardingCriterionTypeCode(): ?AwardingCriterionTypeCode
    {
        return $this->awardingCriterionTypeCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\AwardingCriterionTypeCode
     */
    public function getAwardingCriterionTypeCodeWithCreate(): AwardingCriterionTypeCode
    {
        $this->awardingCriterionTypeCode = is_null($this->awardingCriterionTypeCode) ? new AwardingCriterionTypeCode() : $this->awardingCriterionTypeCode;

        return $this->awardingCriterionTypeCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\AwardingCriterionTypeCode $awardingCriterionTypeCode
     * @return self
     */
    public function setAwardingCriterionTypeCode(AwardingCriterionTypeCode $awardingCriterionTypeCode): self
    {
        $this->awardingCriterionTypeCode = $awardingCriterionTypeCode;

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
     * @return \horstoeko\invoicesuite\models\ubl\cbc\WeightNumeric|null
     */
    public function getWeightNumeric(): ?WeightNumeric
    {
        return $this->weightNumeric;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\WeightNumeric
     */
    public function getWeightNumericWithCreate(): WeightNumeric
    {
        $this->weightNumeric = is_null($this->weightNumeric) ? new WeightNumeric() : $this->weightNumeric;

        return $this->weightNumeric;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\WeightNumeric $weightNumeric
     * @return self
     */
    public function setWeightNumeric(WeightNumeric $weightNumeric): self
    {
        $this->weightNumeric = $weightNumeric;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\Weight>|null
     */
    public function getWeight(): ?array
    {
        return $this->weight;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\Weight> $weight
     * @return self
     */
    public function setWeight(array $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return self
     */
    public function clearWeight(): self
    {
        $this->weight = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Weight $weight
     * @return self
     */
    public function addToWeight(Weight $weight): self
    {
        $this->weight[] = $weight;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Weight
     */
    public function addToWeightWithCreate(): Weight
    {
        $this->addToweight($weight = new Weight());

        return $weight;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Weight $weight
     * @return self
     */
    public function addOnceToWeight(Weight $weight): self
    {
        $this->weight[0] = $weight;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Weight
     */
    public function addOnceToWeightWithCreate(): Weight
    {
        if ($this->weight === []) {
            $this->addOnceToweight(new Weight());
        }

        return $this->weight[0];
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\CalculationExpression>|null
     */
    public function getCalculationExpression(): ?array
    {
        return $this->calculationExpression;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\CalculationExpression> $calculationExpression
     * @return self
     */
    public function setCalculationExpression(array $calculationExpression): self
    {
        $this->calculationExpression = $calculationExpression;

        return $this;
    }

    /**
     * @return self
     */
    public function clearCalculationExpression(): self
    {
        $this->calculationExpression = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\CalculationExpression $calculationExpression
     * @return self
     */
    public function addToCalculationExpression(CalculationExpression $calculationExpression): self
    {
        $this->calculationExpression[] = $calculationExpression;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\CalculationExpression
     */
    public function addToCalculationExpressionWithCreate(): CalculationExpression
    {
        $this->addTocalculationExpression($calculationExpression = new CalculationExpression());

        return $calculationExpression;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\CalculationExpression $calculationExpression
     * @return self
     */
    public function addOnceToCalculationExpression(CalculationExpression $calculationExpression): self
    {
        $this->calculationExpression[0] = $calculationExpression;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\CalculationExpression
     */
    public function addOnceToCalculationExpressionWithCreate(): CalculationExpression
    {
        if ($this->calculationExpression === []) {
            $this->addOnceTocalculationExpression(new CalculationExpression());
        }

        return $this->calculationExpression[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\CalculationExpressionCode|null
     */
    public function getCalculationExpressionCode(): ?CalculationExpressionCode
    {
        return $this->calculationExpressionCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\CalculationExpressionCode
     */
    public function getCalculationExpressionCodeWithCreate(): CalculationExpressionCode
    {
        $this->calculationExpressionCode = is_null($this->calculationExpressionCode) ? new CalculationExpressionCode() : $this->calculationExpressionCode;

        return $this->calculationExpressionCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\CalculationExpressionCode $calculationExpressionCode
     * @return self
     */
    public function setCalculationExpressionCode(CalculationExpressionCode $calculationExpressionCode): self
    {
        $this->calculationExpressionCode = $calculationExpressionCode;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MinimumQuantity|null
     */
    public function getMinimumQuantity(): ?MinimumQuantity
    {
        return $this->minimumQuantity;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MinimumQuantity
     */
    public function getMinimumQuantityWithCreate(): MinimumQuantity
    {
        $this->minimumQuantity = is_null($this->minimumQuantity) ? new MinimumQuantity() : $this->minimumQuantity;

        return $this->minimumQuantity;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\MinimumQuantity $minimumQuantity
     * @return self
     */
    public function setMinimumQuantity(MinimumQuantity $minimumQuantity): self
    {
        $this->minimumQuantity = $minimumQuantity;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MaximumQuantity|null
     */
    public function getMaximumQuantity(): ?MaximumQuantity
    {
        return $this->maximumQuantity;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MaximumQuantity
     */
    public function getMaximumQuantityWithCreate(): MaximumQuantity
    {
        $this->maximumQuantity = is_null($this->maximumQuantity) ? new MaximumQuantity() : $this->maximumQuantity;

        return $this->maximumQuantity;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\MaximumQuantity $maximumQuantity
     * @return self
     */
    public function setMaximumQuantity(MaximumQuantity $maximumQuantity): self
    {
        $this->maximumQuantity = $maximumQuantity;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MinimumAmount|null
     */
    public function getMinimumAmount(): ?MinimumAmount
    {
        return $this->minimumAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MinimumAmount
     */
    public function getMinimumAmountWithCreate(): MinimumAmount
    {
        $this->minimumAmount = is_null($this->minimumAmount) ? new MinimumAmount() : $this->minimumAmount;

        return $this->minimumAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\MinimumAmount $minimumAmount
     * @return self
     */
    public function setMinimumAmount(MinimumAmount $minimumAmount): self
    {
        $this->minimumAmount = $minimumAmount;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MaximumAmount|null
     */
    public function getMaximumAmount(): ?MaximumAmount
    {
        return $this->maximumAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MaximumAmount
     */
    public function getMaximumAmountWithCreate(): MaximumAmount
    {
        $this->maximumAmount = is_null($this->maximumAmount) ? new MaximumAmount() : $this->maximumAmount;

        return $this->maximumAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\MaximumAmount $maximumAmount
     * @return self
     */
    public function setMaximumAmount(MaximumAmount $maximumAmount): self
    {
        $this->maximumAmount = $maximumAmount;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\MinimumImprovementBid>|null
     */
    public function getMinimumImprovementBid(): ?array
    {
        return $this->minimumImprovementBid;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\MinimumImprovementBid> $minimumImprovementBid
     * @return self
     */
    public function setMinimumImprovementBid(array $minimumImprovementBid): self
    {
        $this->minimumImprovementBid = $minimumImprovementBid;

        return $this;
    }

    /**
     * @return self
     */
    public function clearMinimumImprovementBid(): self
    {
        $this->minimumImprovementBid = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\MinimumImprovementBid $minimumImprovementBid
     * @return self
     */
    public function addToMinimumImprovementBid(MinimumImprovementBid $minimumImprovementBid): self
    {
        $this->minimumImprovementBid[] = $minimumImprovementBid;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MinimumImprovementBid
     */
    public function addToMinimumImprovementBidWithCreate(): MinimumImprovementBid
    {
        $this->addTominimumImprovementBid($minimumImprovementBid = new MinimumImprovementBid());

        return $minimumImprovementBid;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\MinimumImprovementBid $minimumImprovementBid
     * @return self
     */
    public function addOnceToMinimumImprovementBid(MinimumImprovementBid $minimumImprovementBid): self
    {
        $this->minimumImprovementBid[0] = $minimumImprovementBid;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MinimumImprovementBid
     */
    public function addOnceToMinimumImprovementBidWithCreate(): MinimumImprovementBid
    {
        if ($this->minimumImprovementBid === []) {
            $this->addOnceTominimumImprovementBid(new MinimumImprovementBid());
        }

        return $this->minimumImprovementBid[0];
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\SubordinateAwardingCriterion>|null
     */
    public function getSubordinateAwardingCriterion(): ?array
    {
        return $this->subordinateAwardingCriterion;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\SubordinateAwardingCriterion> $subordinateAwardingCriterion
     * @return self
     */
    public function setSubordinateAwardingCriterion(array $subordinateAwardingCriterion): self
    {
        $this->subordinateAwardingCriterion = $subordinateAwardingCriterion;

        return $this;
    }

    /**
     * @return self
     */
    public function clearSubordinateAwardingCriterion(): self
    {
        $this->subordinateAwardingCriterion = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\SubordinateAwardingCriterion $subordinateAwardingCriterion
     * @return self
     */
    public function addToSubordinateAwardingCriterion(
        SubordinateAwardingCriterion $subordinateAwardingCriterion,
    ): self {
        $this->subordinateAwardingCriterion[] = $subordinateAwardingCriterion;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\SubordinateAwardingCriterion
     */
    public function addToSubordinateAwardingCriterionWithCreate(): SubordinateAwardingCriterion
    {
        $this->addTosubordinateAwardingCriterion($subordinateAwardingCriterion = new SubordinateAwardingCriterion());

        return $subordinateAwardingCriterion;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\SubordinateAwardingCriterion $subordinateAwardingCriterion
     * @return self
     */
    public function addOnceToSubordinateAwardingCriterion(
        SubordinateAwardingCriterion $subordinateAwardingCriterion,
    ): self {
        $this->subordinateAwardingCriterion[0] = $subordinateAwardingCriterion;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\SubordinateAwardingCriterion
     */
    public function addOnceToSubordinateAwardingCriterionWithCreate(): SubordinateAwardingCriterion
    {
        if ($this->subordinateAwardingCriterion === []) {
            $this->addOnceTosubordinateAwardingCriterion(new SubordinateAwardingCriterion());
        }

        return $this->subordinateAwardingCriterion[0];
    }
}
