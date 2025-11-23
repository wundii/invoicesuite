<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\AmountRate;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\GuaranteeTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LiabilityAmount;

class FinancialGuaranteeType
{
    use HandlesObjectFlags;

    /**
     * @var GuaranteeTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\GuaranteeTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("GuaranteeTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getGuaranteeTypeCode", setter="setGuaranteeTypeCode")
     */
    private $guaranteeTypeCode;

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
     * @var LiabilityAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LiabilityAmount")
     * @JMS\Expose
     * @JMS\SerializedName("LiabilityAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLiabilityAmount", setter="setLiabilityAmount")
     */
    private $liabilityAmount;

    /**
     * @var AmountRate|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\AmountRate")
     * @JMS\Expose
     * @JMS\SerializedName("AmountRate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAmountRate", setter="setAmountRate")
     */
    private $amountRate;

    /**
     * @var ConstitutionPeriod|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ConstitutionPeriod")
     * @JMS\Expose
     * @JMS\SerializedName("ConstitutionPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getConstitutionPeriod", setter="setConstitutionPeriod")
     */
    private $constitutionPeriod;

    /**
     * @return GuaranteeTypeCode|null
     */
    public function getGuaranteeTypeCode(): ?GuaranteeTypeCode
    {
        return $this->guaranteeTypeCode;
    }

    /**
     * @return GuaranteeTypeCode
     */
    public function getGuaranteeTypeCodeWithCreate(): GuaranteeTypeCode
    {
        $this->guaranteeTypeCode = is_null($this->guaranteeTypeCode) ? new GuaranteeTypeCode() : $this->guaranteeTypeCode;

        return $this->guaranteeTypeCode;
    }

    /**
     * @param GuaranteeTypeCode|null $guaranteeTypeCode
     * @return self
     */
    public function setGuaranteeTypeCode(?GuaranteeTypeCode $guaranteeTypeCode = null): self
    {
        $this->guaranteeTypeCode = $guaranteeTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetGuaranteeTypeCode(): self
    {
        $this->guaranteeTypeCode = null;

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
     * @return LiabilityAmount|null
     */
    public function getLiabilityAmount(): ?LiabilityAmount
    {
        return $this->liabilityAmount;
    }

    /**
     * @return LiabilityAmount
     */
    public function getLiabilityAmountWithCreate(): LiabilityAmount
    {
        $this->liabilityAmount = is_null($this->liabilityAmount) ? new LiabilityAmount() : $this->liabilityAmount;

        return $this->liabilityAmount;
    }

    /**
     * @param LiabilityAmount|null $liabilityAmount
     * @return self
     */
    public function setLiabilityAmount(?LiabilityAmount $liabilityAmount = null): self
    {
        $this->liabilityAmount = $liabilityAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLiabilityAmount(): self
    {
        $this->liabilityAmount = null;

        return $this;
    }

    /**
     * @return AmountRate|null
     */
    public function getAmountRate(): ?AmountRate
    {
        return $this->amountRate;
    }

    /**
     * @return AmountRate
     */
    public function getAmountRateWithCreate(): AmountRate
    {
        $this->amountRate = is_null($this->amountRate) ? new AmountRate() : $this->amountRate;

        return $this->amountRate;
    }

    /**
     * @param AmountRate|null $amountRate
     * @return self
     */
    public function setAmountRate(?AmountRate $amountRate = null): self
    {
        $this->amountRate = $amountRate;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAmountRate(): self
    {
        $this->amountRate = null;

        return $this;
    }

    /**
     * @return ConstitutionPeriod|null
     */
    public function getConstitutionPeriod(): ?ConstitutionPeriod
    {
        return $this->constitutionPeriod;
    }

    /**
     * @return ConstitutionPeriod
     */
    public function getConstitutionPeriodWithCreate(): ConstitutionPeriod
    {
        $this->constitutionPeriod = is_null($this->constitutionPeriod) ? new ConstitutionPeriod() : $this->constitutionPeriod;

        return $this->constitutionPeriod;
    }

    /**
     * @param ConstitutionPeriod|null $constitutionPeriod
     * @return self
     */
    public function setConstitutionPeriod(?ConstitutionPeriod $constitutionPeriod = null): self
    {
        $this->constitutionPeriod = $constitutionPeriod;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetConstitutionPeriod(): self
    {
        $this->constitutionPeriod = null;

        return $this;
    }
}
