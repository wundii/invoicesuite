<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\AwardingCriterionTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CalculationExpression;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CalculationExpressionCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumImprovementBid;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Weight;
use horstoeko\invoicesuite\documents\models\ubl\cbc\WeightNumeric;

class AwardingCriterionType
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
     * @var AwardingCriterionTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\AwardingCriterionTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("AwardingCriterionTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAwardingCriterionTypeCode", setter="setAwardingCriterionTypeCode")
     */
    private $awardingCriterionTypeCode;

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
     * @var WeightNumeric|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\WeightNumeric")
     * @JMS\Expose
     * @JMS\SerializedName("WeightNumeric")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getWeightNumeric", setter="setWeightNumeric")
     */
    private $weightNumeric;

    /**
     * @var array<Weight>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Weight>")
     * @JMS\Expose
     * @JMS\SerializedName("Weight")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Weight", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getWeight", setter="setWeight")
     */
    private $weight;

    /**
     * @var array<CalculationExpression>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\CalculationExpression>")
     * @JMS\Expose
     * @JMS\SerializedName("CalculationExpression")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="CalculationExpression", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getCalculationExpression", setter="setCalculationExpression")
     */
    private $calculationExpression;

    /**
     * @var CalculationExpressionCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CalculationExpressionCode")
     * @JMS\Expose
     * @JMS\SerializedName("CalculationExpressionCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCalculationExpressionCode", setter="setCalculationExpressionCode")
     */
    private $calculationExpressionCode;

    /**
     * @var MinimumQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("MinimumQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMinimumQuantity", setter="setMinimumQuantity")
     */
    private $minimumQuantity;

    /**
     * @var MaximumQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("MaximumQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMaximumQuantity", setter="setMaximumQuantity")
     */
    private $maximumQuantity;

    /**
     * @var MinimumAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumAmount")
     * @JMS\Expose
     * @JMS\SerializedName("MinimumAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMinimumAmount", setter="setMinimumAmount")
     */
    private $minimumAmount;

    /**
     * @var MaximumAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumAmount")
     * @JMS\Expose
     * @JMS\SerializedName("MaximumAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMaximumAmount", setter="setMaximumAmount")
     */
    private $maximumAmount;

    /**
     * @var array<MinimumImprovementBid>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumImprovementBid>")
     * @JMS\Expose
     * @JMS\SerializedName("MinimumImprovementBid")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="MinimumImprovementBid", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getMinimumImprovementBid", setter="setMinimumImprovementBid")
     */
    private $minimumImprovementBid;

    /**
     * @var array<SubordinateAwardingCriterion>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\SubordinateAwardingCriterion>")
     * @JMS\Expose
     * @JMS\SerializedName("SubordinateAwardingCriterion")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SubordinateAwardingCriterion", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSubordinateAwardingCriterion", setter="setSubordinateAwardingCriterion")
     */
    private $subordinateAwardingCriterion;

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
     * @return AwardingCriterionTypeCode|null
     */
    public function getAwardingCriterionTypeCode(): ?AwardingCriterionTypeCode
    {
        return $this->awardingCriterionTypeCode;
    }

    /**
     * @return AwardingCriterionTypeCode
     */
    public function getAwardingCriterionTypeCodeWithCreate(): AwardingCriterionTypeCode
    {
        $this->awardingCriterionTypeCode = is_null($this->awardingCriterionTypeCode) ? new AwardingCriterionTypeCode() : $this->awardingCriterionTypeCode;

        return $this->awardingCriterionTypeCode;
    }

    /**
     * @param AwardingCriterionTypeCode|null $awardingCriterionTypeCode
     * @return self
     */
    public function setAwardingCriterionTypeCode(?AwardingCriterionTypeCode $awardingCriterionTypeCode = null): self
    {
        $this->awardingCriterionTypeCode = $awardingCriterionTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAwardingCriterionTypeCode(): self
    {
        $this->awardingCriterionTypeCode = null;

        return $this;
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
     * @return WeightNumeric|null
     */
    public function getWeightNumeric(): ?WeightNumeric
    {
        return $this->weightNumeric;
    }

    /**
     * @return WeightNumeric
     */
    public function getWeightNumericWithCreate(): WeightNumeric
    {
        $this->weightNumeric = is_null($this->weightNumeric) ? new WeightNumeric() : $this->weightNumeric;

        return $this->weightNumeric;
    }

    /**
     * @param WeightNumeric|null $weightNumeric
     * @return self
     */
    public function setWeightNumeric(?WeightNumeric $weightNumeric = null): self
    {
        $this->weightNumeric = $weightNumeric;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetWeightNumeric(): self
    {
        $this->weightNumeric = null;

        return $this;
    }

    /**
     * @return array<Weight>|null
     */
    public function getWeight(): ?array
    {
        return $this->weight;
    }

    /**
     * @param array<Weight>|null $weight
     * @return self
     */
    public function setWeight(?array $weight = null): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetWeight(): self
    {
        $this->weight = null;

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
     * @return Weight|null
     */
    public function firstWeight(): ?Weight
    {
        $weight = $this->weight ?? [];
        $weight = reset($weight);

        if ($weight === false) {
            return null;
        }

        return $weight;
    }

    /**
     * @return Weight|null
     */
    public function lastWeight(): ?Weight
    {
        $weight = $this->weight ?? [];
        $weight = end($weight);

        if ($weight === false) {
            return null;
        }

        return $weight;
    }

    /**
     * @param Weight $weight
     * @return self
     */
    public function addToWeight(Weight $weight): self
    {
        $this->weight[] = $weight;

        return $this;
    }

    /**
     * @return Weight
     */
    public function addToWeightWithCreate(): Weight
    {
        $this->addToweight($weight = new Weight());

        return $weight;
    }

    /**
     * @param Weight $weight
     * @return self
     */
    public function addOnceToWeight(Weight $weight): self
    {
        if (!is_array($this->weight)) {
            $this->weight = [];
        }

        $this->weight[0] = $weight;

        return $this;
    }

    /**
     * @return Weight
     */
    public function addOnceToWeightWithCreate(): Weight
    {
        if (!is_array($this->weight)) {
            $this->weight = [];
        }

        if ($this->weight === []) {
            $this->addOnceToweight(new Weight());
        }

        return $this->weight[0];
    }

    /**
     * @return array<CalculationExpression>|null
     */
    public function getCalculationExpression(): ?array
    {
        return $this->calculationExpression;
    }

    /**
     * @param array<CalculationExpression>|null $calculationExpression
     * @return self
     */
    public function setCalculationExpression(?array $calculationExpression = null): self
    {
        $this->calculationExpression = $calculationExpression;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCalculationExpression(): self
    {
        $this->calculationExpression = null;

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
     * @return CalculationExpression|null
     */
    public function firstCalculationExpression(): ?CalculationExpression
    {
        $calculationExpression = $this->calculationExpression ?? [];
        $calculationExpression = reset($calculationExpression);

        if ($calculationExpression === false) {
            return null;
        }

        return $calculationExpression;
    }

    /**
     * @return CalculationExpression|null
     */
    public function lastCalculationExpression(): ?CalculationExpression
    {
        $calculationExpression = $this->calculationExpression ?? [];
        $calculationExpression = end($calculationExpression);

        if ($calculationExpression === false) {
            return null;
        }

        return $calculationExpression;
    }

    /**
     * @param CalculationExpression $calculationExpression
     * @return self
     */
    public function addToCalculationExpression(CalculationExpression $calculationExpression): self
    {
        $this->calculationExpression[] = $calculationExpression;

        return $this;
    }

    /**
     * @return CalculationExpression
     */
    public function addToCalculationExpressionWithCreate(): CalculationExpression
    {
        $this->addTocalculationExpression($calculationExpression = new CalculationExpression());

        return $calculationExpression;
    }

    /**
     * @param CalculationExpression $calculationExpression
     * @return self
     */
    public function addOnceToCalculationExpression(CalculationExpression $calculationExpression): self
    {
        if (!is_array($this->calculationExpression)) {
            $this->calculationExpression = [];
        }

        $this->calculationExpression[0] = $calculationExpression;

        return $this;
    }

    /**
     * @return CalculationExpression
     */
    public function addOnceToCalculationExpressionWithCreate(): CalculationExpression
    {
        if (!is_array($this->calculationExpression)) {
            $this->calculationExpression = [];
        }

        if ($this->calculationExpression === []) {
            $this->addOnceTocalculationExpression(new CalculationExpression());
        }

        return $this->calculationExpression[0];
    }

    /**
     * @return CalculationExpressionCode|null
     */
    public function getCalculationExpressionCode(): ?CalculationExpressionCode
    {
        return $this->calculationExpressionCode;
    }

    /**
     * @return CalculationExpressionCode
     */
    public function getCalculationExpressionCodeWithCreate(): CalculationExpressionCode
    {
        $this->calculationExpressionCode = is_null($this->calculationExpressionCode) ? new CalculationExpressionCode() : $this->calculationExpressionCode;

        return $this->calculationExpressionCode;
    }

    /**
     * @param CalculationExpressionCode|null $calculationExpressionCode
     * @return self
     */
    public function setCalculationExpressionCode(?CalculationExpressionCode $calculationExpressionCode = null): self
    {
        $this->calculationExpressionCode = $calculationExpressionCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCalculationExpressionCode(): self
    {
        $this->calculationExpressionCode = null;

        return $this;
    }

    /**
     * @return MinimumQuantity|null
     */
    public function getMinimumQuantity(): ?MinimumQuantity
    {
        return $this->minimumQuantity;
    }

    /**
     * @return MinimumQuantity
     */
    public function getMinimumQuantityWithCreate(): MinimumQuantity
    {
        $this->minimumQuantity = is_null($this->minimumQuantity) ? new MinimumQuantity() : $this->minimumQuantity;

        return $this->minimumQuantity;
    }

    /**
     * @param MinimumQuantity|null $minimumQuantity
     * @return self
     */
    public function setMinimumQuantity(?MinimumQuantity $minimumQuantity = null): self
    {
        $this->minimumQuantity = $minimumQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMinimumQuantity(): self
    {
        $this->minimumQuantity = null;

        return $this;
    }

    /**
     * @return MaximumQuantity|null
     */
    public function getMaximumQuantity(): ?MaximumQuantity
    {
        return $this->maximumQuantity;
    }

    /**
     * @return MaximumQuantity
     */
    public function getMaximumQuantityWithCreate(): MaximumQuantity
    {
        $this->maximumQuantity = is_null($this->maximumQuantity) ? new MaximumQuantity() : $this->maximumQuantity;

        return $this->maximumQuantity;
    }

    /**
     * @param MaximumQuantity|null $maximumQuantity
     * @return self
     */
    public function setMaximumQuantity(?MaximumQuantity $maximumQuantity = null): self
    {
        $this->maximumQuantity = $maximumQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMaximumQuantity(): self
    {
        $this->maximumQuantity = null;

        return $this;
    }

    /**
     * @return MinimumAmount|null
     */
    public function getMinimumAmount(): ?MinimumAmount
    {
        return $this->minimumAmount;
    }

    /**
     * @return MinimumAmount
     */
    public function getMinimumAmountWithCreate(): MinimumAmount
    {
        $this->minimumAmount = is_null($this->minimumAmount) ? new MinimumAmount() : $this->minimumAmount;

        return $this->minimumAmount;
    }

    /**
     * @param MinimumAmount|null $minimumAmount
     * @return self
     */
    public function setMinimumAmount(?MinimumAmount $minimumAmount = null): self
    {
        $this->minimumAmount = $minimumAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMinimumAmount(): self
    {
        $this->minimumAmount = null;

        return $this;
    }

    /**
     * @return MaximumAmount|null
     */
    public function getMaximumAmount(): ?MaximumAmount
    {
        return $this->maximumAmount;
    }

    /**
     * @return MaximumAmount
     */
    public function getMaximumAmountWithCreate(): MaximumAmount
    {
        $this->maximumAmount = is_null($this->maximumAmount) ? new MaximumAmount() : $this->maximumAmount;

        return $this->maximumAmount;
    }

    /**
     * @param MaximumAmount|null $maximumAmount
     * @return self
     */
    public function setMaximumAmount(?MaximumAmount $maximumAmount = null): self
    {
        $this->maximumAmount = $maximumAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMaximumAmount(): self
    {
        $this->maximumAmount = null;

        return $this;
    }

    /**
     * @return array<MinimumImprovementBid>|null
     */
    public function getMinimumImprovementBid(): ?array
    {
        return $this->minimumImprovementBid;
    }

    /**
     * @param array<MinimumImprovementBid>|null $minimumImprovementBid
     * @return self
     */
    public function setMinimumImprovementBid(?array $minimumImprovementBid = null): self
    {
        $this->minimumImprovementBid = $minimumImprovementBid;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMinimumImprovementBid(): self
    {
        $this->minimumImprovementBid = null;

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
     * @return MinimumImprovementBid|null
     */
    public function firstMinimumImprovementBid(): ?MinimumImprovementBid
    {
        $minimumImprovementBid = $this->minimumImprovementBid ?? [];
        $minimumImprovementBid = reset($minimumImprovementBid);

        if ($minimumImprovementBid === false) {
            return null;
        }

        return $minimumImprovementBid;
    }

    /**
     * @return MinimumImprovementBid|null
     */
    public function lastMinimumImprovementBid(): ?MinimumImprovementBid
    {
        $minimumImprovementBid = $this->minimumImprovementBid ?? [];
        $minimumImprovementBid = end($minimumImprovementBid);

        if ($minimumImprovementBid === false) {
            return null;
        }

        return $minimumImprovementBid;
    }

    /**
     * @param MinimumImprovementBid $minimumImprovementBid
     * @return self
     */
    public function addToMinimumImprovementBid(MinimumImprovementBid $minimumImprovementBid): self
    {
        $this->minimumImprovementBid[] = $minimumImprovementBid;

        return $this;
    }

    /**
     * @return MinimumImprovementBid
     */
    public function addToMinimumImprovementBidWithCreate(): MinimumImprovementBid
    {
        $this->addTominimumImprovementBid($minimumImprovementBid = new MinimumImprovementBid());

        return $minimumImprovementBid;
    }

    /**
     * @param MinimumImprovementBid $minimumImprovementBid
     * @return self
     */
    public function addOnceToMinimumImprovementBid(MinimumImprovementBid $minimumImprovementBid): self
    {
        if (!is_array($this->minimumImprovementBid)) {
            $this->minimumImprovementBid = [];
        }

        $this->minimumImprovementBid[0] = $minimumImprovementBid;

        return $this;
    }

    /**
     * @return MinimumImprovementBid
     */
    public function addOnceToMinimumImprovementBidWithCreate(): MinimumImprovementBid
    {
        if (!is_array($this->minimumImprovementBid)) {
            $this->minimumImprovementBid = [];
        }

        if ($this->minimumImprovementBid === []) {
            $this->addOnceTominimumImprovementBid(new MinimumImprovementBid());
        }

        return $this->minimumImprovementBid[0];
    }

    /**
     * @return array<SubordinateAwardingCriterion>|null
     */
    public function getSubordinateAwardingCriterion(): ?array
    {
        return $this->subordinateAwardingCriterion;
    }

    /**
     * @param array<SubordinateAwardingCriterion>|null $subordinateAwardingCriterion
     * @return self
     */
    public function setSubordinateAwardingCriterion(?array $subordinateAwardingCriterion = null): self
    {
        $this->subordinateAwardingCriterion = $subordinateAwardingCriterion;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSubordinateAwardingCriterion(): self
    {
        $this->subordinateAwardingCriterion = null;

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
     * @return SubordinateAwardingCriterion|null
     */
    public function firstSubordinateAwardingCriterion(): ?SubordinateAwardingCriterion
    {
        $subordinateAwardingCriterion = $this->subordinateAwardingCriterion ?? [];
        $subordinateAwardingCriterion = reset($subordinateAwardingCriterion);

        if ($subordinateAwardingCriterion === false) {
            return null;
        }

        return $subordinateAwardingCriterion;
    }

    /**
     * @return SubordinateAwardingCriterion|null
     */
    public function lastSubordinateAwardingCriterion(): ?SubordinateAwardingCriterion
    {
        $subordinateAwardingCriterion = $this->subordinateAwardingCriterion ?? [];
        $subordinateAwardingCriterion = end($subordinateAwardingCriterion);

        if ($subordinateAwardingCriterion === false) {
            return null;
        }

        return $subordinateAwardingCriterion;
    }

    /**
     * @param SubordinateAwardingCriterion $subordinateAwardingCriterion
     * @return self
     */
    public function addToSubordinateAwardingCriterion(
        SubordinateAwardingCriterion $subordinateAwardingCriterion,
    ): self {
        $this->subordinateAwardingCriterion[] = $subordinateAwardingCriterion;

        return $this;
    }

    /**
     * @return SubordinateAwardingCriterion
     */
    public function addToSubordinateAwardingCriterionWithCreate(): SubordinateAwardingCriterion
    {
        $this->addTosubordinateAwardingCriterion($subordinateAwardingCriterion = new SubordinateAwardingCriterion());

        return $subordinateAwardingCriterion;
    }

    /**
     * @param SubordinateAwardingCriterion $subordinateAwardingCriterion
     * @return self
     */
    public function addOnceToSubordinateAwardingCriterion(
        SubordinateAwardingCriterion $subordinateAwardingCriterion,
    ): self {
        if (!is_array($this->subordinateAwardingCriterion)) {
            $this->subordinateAwardingCriterion = [];
        }

        $this->subordinateAwardingCriterion[0] = $subordinateAwardingCriterion;

        return $this;
    }

    /**
     * @return SubordinateAwardingCriterion
     */
    public function addOnceToSubordinateAwardingCriterionWithCreate(): SubordinateAwardingCriterion
    {
        if (!is_array($this->subordinateAwardingCriterion)) {
            $this->subordinateAwardingCriterion = [];
        }

        if ($this->subordinateAwardingCriterion === []) {
            $this->addOnceTosubordinateAwardingCriterion(new SubordinateAwardingCriterion());
        }

        return $this->subordinateAwardingCriterion[0];
    }
}
