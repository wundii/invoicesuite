<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\UtilityStatementTypeCode;

class ConsumptionType
{
    use HandlesObjectFlags;

    /**
     * @var UtilityStatementTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\UtilityStatementTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("UtilityStatementTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getUtilityStatementTypeCode", setter="setUtilityStatementTypeCode")
     */
    private $utilityStatementTypeCode;

    /**
     * @var MainPeriod|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\MainPeriod")
     * @JMS\Expose
     * @JMS\SerializedName("MainPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMainPeriod", setter="setMainPeriod")
     */
    private $mainPeriod;

    /**
     * @var array<AllowanceCharge>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\AllowanceCharge>")
     * @JMS\Expose
     * @JMS\SerializedName("AllowanceCharge")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="AllowanceCharge", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getAllowanceCharge", setter="setAllowanceCharge")
     */
    private $allowanceCharge;

    /**
     * @var array<TaxTotal>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\TaxTotal>")
     * @JMS\Expose
     * @JMS\SerializedName("TaxTotal")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="TaxTotal", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getTaxTotal", setter="setTaxTotal")
     */
    private $taxTotal;

    /**
     * @var EnergyWaterSupply|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\EnergyWaterSupply")
     * @JMS\Expose
     * @JMS\SerializedName("EnergyWaterSupply")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEnergyWaterSupply", setter="setEnergyWaterSupply")
     */
    private $energyWaterSupply;

    /**
     * @var TelecommunicationsSupply|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\TelecommunicationsSupply")
     * @JMS\Expose
     * @JMS\SerializedName("TelecommunicationsSupply")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTelecommunicationsSupply", setter="setTelecommunicationsSupply")
     */
    private $telecommunicationsSupply;

    /**
     * @var LegalMonetaryTotal|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\LegalMonetaryTotal")
     * @JMS\Expose
     * @JMS\SerializedName("LegalMonetaryTotal")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLegalMonetaryTotal", setter="setLegalMonetaryTotal")
     */
    private $legalMonetaryTotal;

    /**
     * @return UtilityStatementTypeCode|null
     */
    public function getUtilityStatementTypeCode(): ?UtilityStatementTypeCode
    {
        return $this->utilityStatementTypeCode;
    }

    /**
     * @return UtilityStatementTypeCode
     */
    public function getUtilityStatementTypeCodeWithCreate(): UtilityStatementTypeCode
    {
        $this->utilityStatementTypeCode = is_null($this->utilityStatementTypeCode) ? new UtilityStatementTypeCode() : $this->utilityStatementTypeCode;

        return $this->utilityStatementTypeCode;
    }

    /**
     * @param UtilityStatementTypeCode|null $utilityStatementTypeCode
     * @return self
     */
    public function setUtilityStatementTypeCode(?UtilityStatementTypeCode $utilityStatementTypeCode = null): self
    {
        $this->utilityStatementTypeCode = $utilityStatementTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetUtilityStatementTypeCode(): self
    {
        $this->utilityStatementTypeCode = null;

        return $this;
    }

    /**
     * @return MainPeriod|null
     */
    public function getMainPeriod(): ?MainPeriod
    {
        return $this->mainPeriod;
    }

    /**
     * @return MainPeriod
     */
    public function getMainPeriodWithCreate(): MainPeriod
    {
        $this->mainPeriod = is_null($this->mainPeriod) ? new MainPeriod() : $this->mainPeriod;

        return $this->mainPeriod;
    }

    /**
     * @param MainPeriod|null $mainPeriod
     * @return self
     */
    public function setMainPeriod(?MainPeriod $mainPeriod = null): self
    {
        $this->mainPeriod = $mainPeriod;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMainPeriod(): self
    {
        $this->mainPeriod = null;

        return $this;
    }

    /**
     * @return array<AllowanceCharge>|null
     */
    public function getAllowanceCharge(): ?array
    {
        return $this->allowanceCharge;
    }

    /**
     * @param array<AllowanceCharge>|null $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(?array $allowanceCharge = null): self
    {
        $this->allowanceCharge = $allowanceCharge;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAllowanceCharge(): self
    {
        $this->allowanceCharge = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearAllowanceCharge(): self
    {
        $this->allowanceCharge = [];

        return $this;
    }

    /**
     * @return AllowanceCharge|null
     */
    public function firstAllowanceCharge(): ?AllowanceCharge
    {
        $allowanceCharge = $this->allowanceCharge ?? [];
        $allowanceCharge = reset($allowanceCharge);

        if ($allowanceCharge === false) {
            return null;
        }

        return $allowanceCharge;
    }

    /**
     * @return AllowanceCharge|null
     */
    public function lastAllowanceCharge(): ?AllowanceCharge
    {
        $allowanceCharge = $this->allowanceCharge ?? [];
        $allowanceCharge = end($allowanceCharge);

        if ($allowanceCharge === false) {
            return null;
        }

        return $allowanceCharge;
    }

    /**
     * @param AllowanceCharge $allowanceCharge
     * @return self
     */
    public function addToAllowanceCharge(AllowanceCharge $allowanceCharge): self
    {
        $this->allowanceCharge[] = $allowanceCharge;

        return $this;
    }

    /**
     * @return AllowanceCharge
     */
    public function addToAllowanceChargeWithCreate(): AllowanceCharge
    {
        $this->addToallowanceCharge($allowanceCharge = new AllowanceCharge());

        return $allowanceCharge;
    }

    /**
     * @param AllowanceCharge $allowanceCharge
     * @return self
     */
    public function addOnceToAllowanceCharge(AllowanceCharge $allowanceCharge): self
    {
        if (!is_array($this->allowanceCharge)) {
            $this->allowanceCharge = [];
        }

        $this->allowanceCharge[0] = $allowanceCharge;

        return $this;
    }

    /**
     * @return AllowanceCharge
     */
    public function addOnceToAllowanceChargeWithCreate(): AllowanceCharge
    {
        if (!is_array($this->allowanceCharge)) {
            $this->allowanceCharge = [];
        }

        if ($this->allowanceCharge === []) {
            $this->addOnceToallowanceCharge(new AllowanceCharge());
        }

        return $this->allowanceCharge[0];
    }

    /**
     * @return array<TaxTotal>|null
     */
    public function getTaxTotal(): ?array
    {
        return $this->taxTotal;
    }

    /**
     * @param array<TaxTotal>|null $taxTotal
     * @return self
     */
    public function setTaxTotal(?array $taxTotal = null): self
    {
        $this->taxTotal = $taxTotal;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTaxTotal(): self
    {
        $this->taxTotal = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearTaxTotal(): self
    {
        $this->taxTotal = [];

        return $this;
    }

    /**
     * @return TaxTotal|null
     */
    public function firstTaxTotal(): ?TaxTotal
    {
        $taxTotal = $this->taxTotal ?? [];
        $taxTotal = reset($taxTotal);

        if ($taxTotal === false) {
            return null;
        }

        return $taxTotal;
    }

    /**
     * @return TaxTotal|null
     */
    public function lastTaxTotal(): ?TaxTotal
    {
        $taxTotal = $this->taxTotal ?? [];
        $taxTotal = end($taxTotal);

        if ($taxTotal === false) {
            return null;
        }

        return $taxTotal;
    }

    /**
     * @param TaxTotal $taxTotal
     * @return self
     */
    public function addToTaxTotal(TaxTotal $taxTotal): self
    {
        $this->taxTotal[] = $taxTotal;

        return $this;
    }

    /**
     * @return TaxTotal
     */
    public function addToTaxTotalWithCreate(): TaxTotal
    {
        $this->addTotaxTotal($taxTotal = new TaxTotal());

        return $taxTotal;
    }

    /**
     * @param TaxTotal $taxTotal
     * @return self
     */
    public function addOnceToTaxTotal(TaxTotal $taxTotal): self
    {
        if (!is_array($this->taxTotal)) {
            $this->taxTotal = [];
        }

        $this->taxTotal[0] = $taxTotal;

        return $this;
    }

    /**
     * @return TaxTotal
     */
    public function addOnceToTaxTotalWithCreate(): TaxTotal
    {
        if (!is_array($this->taxTotal)) {
            $this->taxTotal = [];
        }

        if ($this->taxTotal === []) {
            $this->addOnceTotaxTotal(new TaxTotal());
        }

        return $this->taxTotal[0];
    }

    /**
     * @return EnergyWaterSupply|null
     */
    public function getEnergyWaterSupply(): ?EnergyWaterSupply
    {
        return $this->energyWaterSupply;
    }

    /**
     * @return EnergyWaterSupply
     */
    public function getEnergyWaterSupplyWithCreate(): EnergyWaterSupply
    {
        $this->energyWaterSupply = is_null($this->energyWaterSupply) ? new EnergyWaterSupply() : $this->energyWaterSupply;

        return $this->energyWaterSupply;
    }

    /**
     * @param EnergyWaterSupply|null $energyWaterSupply
     * @return self
     */
    public function setEnergyWaterSupply(?EnergyWaterSupply $energyWaterSupply = null): self
    {
        $this->energyWaterSupply = $energyWaterSupply;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetEnergyWaterSupply(): self
    {
        $this->energyWaterSupply = null;

        return $this;
    }

    /**
     * @return TelecommunicationsSupply|null
     */
    public function getTelecommunicationsSupply(): ?TelecommunicationsSupply
    {
        return $this->telecommunicationsSupply;
    }

    /**
     * @return TelecommunicationsSupply
     */
    public function getTelecommunicationsSupplyWithCreate(): TelecommunicationsSupply
    {
        $this->telecommunicationsSupply = is_null($this->telecommunicationsSupply) ? new TelecommunicationsSupply() : $this->telecommunicationsSupply;

        return $this->telecommunicationsSupply;
    }

    /**
     * @param TelecommunicationsSupply|null $telecommunicationsSupply
     * @return self
     */
    public function setTelecommunicationsSupply(?TelecommunicationsSupply $telecommunicationsSupply = null): self
    {
        $this->telecommunicationsSupply = $telecommunicationsSupply;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTelecommunicationsSupply(): self
    {
        $this->telecommunicationsSupply = null;

        return $this;
    }

    /**
     * @return LegalMonetaryTotal|null
     */
    public function getLegalMonetaryTotal(): ?LegalMonetaryTotal
    {
        return $this->legalMonetaryTotal;
    }

    /**
     * @return LegalMonetaryTotal
     */
    public function getLegalMonetaryTotalWithCreate(): LegalMonetaryTotal
    {
        $this->legalMonetaryTotal = is_null($this->legalMonetaryTotal) ? new LegalMonetaryTotal() : $this->legalMonetaryTotal;

        return $this->legalMonetaryTotal;
    }

    /**
     * @param LegalMonetaryTotal|null $legalMonetaryTotal
     * @return self
     */
    public function setLegalMonetaryTotal(?LegalMonetaryTotal $legalMonetaryTotal = null): self
    {
        $this->legalMonetaryTotal = $legalMonetaryTotal;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLegalMonetaryTotal(): self
    {
        $this->legalMonetaryTotal = null;

        return $this;
    }
}
