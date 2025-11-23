<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\AverageSubsequentContractAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\EstimatedOverallContractAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MonetaryScope;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TotalAmount;

class RequestedTenderTotalType
{
    use HandlesObjectFlags;

    /**
     * @var EstimatedOverallContractAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\EstimatedOverallContractAmount")
     * @JMS\Expose
     * @JMS\SerializedName("EstimatedOverallContractAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEstimatedOverallContractAmount", setter="setEstimatedOverallContractAmount")
     */
    private $estimatedOverallContractAmount;

    /**
     * @var TotalAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TotalAmount")
     * @JMS\Expose
     * @JMS\SerializedName("TotalAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTotalAmount", setter="setTotalAmount")
     */
    private $totalAmount;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("TaxIncludedIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTaxIncludedIndicator", setter="setTaxIncludedIndicator")
     */
    private $taxIncludedIndicator;

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
     * @var array<MonetaryScope>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\MonetaryScope>")
     * @JMS\Expose
     * @JMS\SerializedName("MonetaryScope")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="MonetaryScope", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getMonetaryScope", setter="setMonetaryScope")
     */
    private $monetaryScope;

    /**
     * @var AverageSubsequentContractAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\AverageSubsequentContractAmount")
     * @JMS\Expose
     * @JMS\SerializedName("AverageSubsequentContractAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAverageSubsequentContractAmount", setter="setAverageSubsequentContractAmount")
     */
    private $averageSubsequentContractAmount;

    /**
     * @var array<ApplicableTaxCategory>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ApplicableTaxCategory>")
     * @JMS\Expose
     * @JMS\SerializedName("ApplicableTaxCategory")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ApplicableTaxCategory", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getApplicableTaxCategory", setter="setApplicableTaxCategory")
     */
    private $applicableTaxCategory;

    /**
     * @return EstimatedOverallContractAmount|null
     */
    public function getEstimatedOverallContractAmount(): ?EstimatedOverallContractAmount
    {
        return $this->estimatedOverallContractAmount;
    }

    /**
     * @return EstimatedOverallContractAmount
     */
    public function getEstimatedOverallContractAmountWithCreate(): EstimatedOverallContractAmount
    {
        $this->estimatedOverallContractAmount = is_null($this->estimatedOverallContractAmount) ? new EstimatedOverallContractAmount() : $this->estimatedOverallContractAmount;

        return $this->estimatedOverallContractAmount;
    }

    /**
     * @param EstimatedOverallContractAmount|null $estimatedOverallContractAmount
     * @return self
     */
    public function setEstimatedOverallContractAmount(
        ?EstimatedOverallContractAmount $estimatedOverallContractAmount = null,
    ): self {
        $this->estimatedOverallContractAmount = $estimatedOverallContractAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetEstimatedOverallContractAmount(): self
    {
        $this->estimatedOverallContractAmount = null;

        return $this;
    }

    /**
     * @return TotalAmount|null
     */
    public function getTotalAmount(): ?TotalAmount
    {
        return $this->totalAmount;
    }

    /**
     * @return TotalAmount
     */
    public function getTotalAmountWithCreate(): TotalAmount
    {
        $this->totalAmount = is_null($this->totalAmount) ? new TotalAmount() : $this->totalAmount;

        return $this->totalAmount;
    }

    /**
     * @param TotalAmount|null $totalAmount
     * @return self
     */
    public function setTotalAmount(?TotalAmount $totalAmount = null): self
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTotalAmount(): self
    {
        $this->totalAmount = null;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getTaxIncludedIndicator(): ?bool
    {
        return $this->taxIncludedIndicator;
    }

    /**
     * @param bool|null $taxIncludedIndicator
     * @return self
     */
    public function setTaxIncludedIndicator(?bool $taxIncludedIndicator = null): self
    {
        $this->taxIncludedIndicator = $taxIncludedIndicator;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTaxIncludedIndicator(): self
    {
        $this->taxIncludedIndicator = null;

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
     * @return array<MonetaryScope>|null
     */
    public function getMonetaryScope(): ?array
    {
        return $this->monetaryScope;
    }

    /**
     * @param array<MonetaryScope>|null $monetaryScope
     * @return self
     */
    public function setMonetaryScope(?array $monetaryScope = null): self
    {
        $this->monetaryScope = $monetaryScope;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMonetaryScope(): self
    {
        $this->monetaryScope = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearMonetaryScope(): self
    {
        $this->monetaryScope = [];

        return $this;
    }

    /**
     * @return MonetaryScope|null
     */
    public function firstMonetaryScope(): ?MonetaryScope
    {
        $monetaryScope = $this->monetaryScope ?? [];
        $monetaryScope = reset($monetaryScope);

        if ($monetaryScope === false) {
            return null;
        }

        return $monetaryScope;
    }

    /**
     * @return MonetaryScope|null
     */
    public function lastMonetaryScope(): ?MonetaryScope
    {
        $monetaryScope = $this->monetaryScope ?? [];
        $monetaryScope = end($monetaryScope);

        if ($monetaryScope === false) {
            return null;
        }

        return $monetaryScope;
    }

    /**
     * @param MonetaryScope $monetaryScope
     * @return self
     */
    public function addToMonetaryScope(MonetaryScope $monetaryScope): self
    {
        $this->monetaryScope[] = $monetaryScope;

        return $this;
    }

    /**
     * @return MonetaryScope
     */
    public function addToMonetaryScopeWithCreate(): MonetaryScope
    {
        $this->addTomonetaryScope($monetaryScope = new MonetaryScope());

        return $monetaryScope;
    }

    /**
     * @param MonetaryScope $monetaryScope
     * @return self
     */
    public function addOnceToMonetaryScope(MonetaryScope $monetaryScope): self
    {
        if (!is_array($this->monetaryScope)) {
            $this->monetaryScope = [];
        }

        $this->monetaryScope[0] = $monetaryScope;

        return $this;
    }

    /**
     * @return MonetaryScope
     */
    public function addOnceToMonetaryScopeWithCreate(): MonetaryScope
    {
        if (!is_array($this->monetaryScope)) {
            $this->monetaryScope = [];
        }

        if ($this->monetaryScope === []) {
            $this->addOnceTomonetaryScope(new MonetaryScope());
        }

        return $this->monetaryScope[0];
    }

    /**
     * @return AverageSubsequentContractAmount|null
     */
    public function getAverageSubsequentContractAmount(): ?AverageSubsequentContractAmount
    {
        return $this->averageSubsequentContractAmount;
    }

    /**
     * @return AverageSubsequentContractAmount
     */
    public function getAverageSubsequentContractAmountWithCreate(): AverageSubsequentContractAmount
    {
        $this->averageSubsequentContractAmount = is_null($this->averageSubsequentContractAmount) ? new AverageSubsequentContractAmount() : $this->averageSubsequentContractAmount;

        return $this->averageSubsequentContractAmount;
    }

    /**
     * @param AverageSubsequentContractAmount|null $averageSubsequentContractAmount
     * @return self
     */
    public function setAverageSubsequentContractAmount(
        ?AverageSubsequentContractAmount $averageSubsequentContractAmount = null,
    ): self {
        $this->averageSubsequentContractAmount = $averageSubsequentContractAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAverageSubsequentContractAmount(): self
    {
        $this->averageSubsequentContractAmount = null;

        return $this;
    }

    /**
     * @return array<ApplicableTaxCategory>|null
     */
    public function getApplicableTaxCategory(): ?array
    {
        return $this->applicableTaxCategory;
    }

    /**
     * @param array<ApplicableTaxCategory>|null $applicableTaxCategory
     * @return self
     */
    public function setApplicableTaxCategory(?array $applicableTaxCategory = null): self
    {
        $this->applicableTaxCategory = $applicableTaxCategory;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetApplicableTaxCategory(): self
    {
        $this->applicableTaxCategory = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearApplicableTaxCategory(): self
    {
        $this->applicableTaxCategory = [];

        return $this;
    }

    /**
     * @return ApplicableTaxCategory|null
     */
    public function firstApplicableTaxCategory(): ?ApplicableTaxCategory
    {
        $applicableTaxCategory = $this->applicableTaxCategory ?? [];
        $applicableTaxCategory = reset($applicableTaxCategory);

        if ($applicableTaxCategory === false) {
            return null;
        }

        return $applicableTaxCategory;
    }

    /**
     * @return ApplicableTaxCategory|null
     */
    public function lastApplicableTaxCategory(): ?ApplicableTaxCategory
    {
        $applicableTaxCategory = $this->applicableTaxCategory ?? [];
        $applicableTaxCategory = end($applicableTaxCategory);

        if ($applicableTaxCategory === false) {
            return null;
        }

        return $applicableTaxCategory;
    }

    /**
     * @param ApplicableTaxCategory $applicableTaxCategory
     * @return self
     */
    public function addToApplicableTaxCategory(ApplicableTaxCategory $applicableTaxCategory): self
    {
        $this->applicableTaxCategory[] = $applicableTaxCategory;

        return $this;
    }

    /**
     * @return ApplicableTaxCategory
     */
    public function addToApplicableTaxCategoryWithCreate(): ApplicableTaxCategory
    {
        $this->addToapplicableTaxCategory($applicableTaxCategory = new ApplicableTaxCategory());

        return $applicableTaxCategory;
    }

    /**
     * @param ApplicableTaxCategory $applicableTaxCategory
     * @return self
     */
    public function addOnceToApplicableTaxCategory(ApplicableTaxCategory $applicableTaxCategory): self
    {
        if (!is_array($this->applicableTaxCategory)) {
            $this->applicableTaxCategory = [];
        }

        $this->applicableTaxCategory[0] = $applicableTaxCategory;

        return $this;
    }

    /**
     * @return ApplicableTaxCategory
     */
    public function addOnceToApplicableTaxCategoryWithCreate(): ApplicableTaxCategory
    {
        if (!is_array($this->applicableTaxCategory)) {
            $this->applicableTaxCategory = [];
        }

        if ($this->applicableTaxCategory === []) {
            $this->addOnceToapplicableTaxCategory(new ApplicableTaxCategory());
        }

        return $this->applicableTaxCategory[0];
    }
}
