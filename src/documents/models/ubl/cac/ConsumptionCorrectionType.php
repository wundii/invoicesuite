<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ActualTemperatureReductionQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ConsumptionEnergyQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ConsumptionWaterQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CorrectionAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CorrectionType;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CorrectionTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CorrectionUnitAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\DifferenceTemperatureReductionQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\GasPressureQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MeterNumber;
use horstoeko\invoicesuite\documents\models\ubl\cbc\NormalTemperatureReductionQuantity;

class ConsumptionCorrectionType
{
    use HandlesObjectFlags;

    /**
     * @var CorrectionType|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CorrectionType")
     * @JMS\Expose
     * @JMS\SerializedName("CorrectionType")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCorrectionType", setter="setCorrectionType")
     */
    private $correctionType;

    /**
     * @var CorrectionTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CorrectionTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("CorrectionTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCorrectionTypeCode", setter="setCorrectionTypeCode")
     */
    private $correctionTypeCode;

    /**
     * @var MeterNumber|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MeterNumber")
     * @JMS\Expose
     * @JMS\SerializedName("MeterNumber")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMeterNumber", setter="setMeterNumber")
     */
    private $meterNumber;

    /**
     * @var GasPressureQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\GasPressureQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("GasPressureQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getGasPressureQuantity", setter="setGasPressureQuantity")
     */
    private $gasPressureQuantity;

    /**
     * @var ActualTemperatureReductionQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ActualTemperatureReductionQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("ActualTemperatureReductionQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getActualTemperatureReductionQuantity", setter="setActualTemperatureReductionQuantity")
     */
    private $actualTemperatureReductionQuantity;

    /**
     * @var NormalTemperatureReductionQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\NormalTemperatureReductionQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("NormalTemperatureReductionQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getNormalTemperatureReductionQuantity", setter="setNormalTemperatureReductionQuantity")
     */
    private $normalTemperatureReductionQuantity;

    /**
     * @var DifferenceTemperatureReductionQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\DifferenceTemperatureReductionQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("DifferenceTemperatureReductionQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDifferenceTemperatureReductionQuantity", setter="setDifferenceTemperatureReductionQuantity")
     */
    private $differenceTemperatureReductionQuantity;

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
     * @var CorrectionUnitAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CorrectionUnitAmount")
     * @JMS\Expose
     * @JMS\SerializedName("CorrectionUnitAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCorrectionUnitAmount", setter="setCorrectionUnitAmount")
     */
    private $correctionUnitAmount;

    /**
     * @var ConsumptionEnergyQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ConsumptionEnergyQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("ConsumptionEnergyQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getConsumptionEnergyQuantity", setter="setConsumptionEnergyQuantity")
     */
    private $consumptionEnergyQuantity;

    /**
     * @var ConsumptionWaterQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ConsumptionWaterQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("ConsumptionWaterQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getConsumptionWaterQuantity", setter="setConsumptionWaterQuantity")
     */
    private $consumptionWaterQuantity;

    /**
     * @var CorrectionAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CorrectionAmount")
     * @JMS\Expose
     * @JMS\SerializedName("CorrectionAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCorrectionAmount", setter="setCorrectionAmount")
     */
    private $correctionAmount;

    /**
     * @return CorrectionType|null
     */
    public function getCorrectionType(): ?CorrectionType
    {
        return $this->correctionType;
    }

    /**
     * @return CorrectionType
     */
    public function getCorrectionTypeWithCreate(): CorrectionType
    {
        $this->correctionType = is_null($this->correctionType) ? new CorrectionType() : $this->correctionType;

        return $this->correctionType;
    }

    /**
     * @param CorrectionType|null $correctionType
     * @return self
     */
    public function setCorrectionType(?CorrectionType $correctionType = null): self
    {
        $this->correctionType = $correctionType;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCorrectionType(): self
    {
        $this->correctionType = null;

        return $this;
    }

    /**
     * @return CorrectionTypeCode|null
     */
    public function getCorrectionTypeCode(): ?CorrectionTypeCode
    {
        return $this->correctionTypeCode;
    }

    /**
     * @return CorrectionTypeCode
     */
    public function getCorrectionTypeCodeWithCreate(): CorrectionTypeCode
    {
        $this->correctionTypeCode = is_null($this->correctionTypeCode) ? new CorrectionTypeCode() : $this->correctionTypeCode;

        return $this->correctionTypeCode;
    }

    /**
     * @param CorrectionTypeCode|null $correctionTypeCode
     * @return self
     */
    public function setCorrectionTypeCode(?CorrectionTypeCode $correctionTypeCode = null): self
    {
        $this->correctionTypeCode = $correctionTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCorrectionTypeCode(): self
    {
        $this->correctionTypeCode = null;

        return $this;
    }

    /**
     * @return MeterNumber|null
     */
    public function getMeterNumber(): ?MeterNumber
    {
        return $this->meterNumber;
    }

    /**
     * @return MeterNumber
     */
    public function getMeterNumberWithCreate(): MeterNumber
    {
        $this->meterNumber = is_null($this->meterNumber) ? new MeterNumber() : $this->meterNumber;

        return $this->meterNumber;
    }

    /**
     * @param MeterNumber|null $meterNumber
     * @return self
     */
    public function setMeterNumber(?MeterNumber $meterNumber = null): self
    {
        $this->meterNumber = $meterNumber;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMeterNumber(): self
    {
        $this->meterNumber = null;

        return $this;
    }

    /**
     * @return GasPressureQuantity|null
     */
    public function getGasPressureQuantity(): ?GasPressureQuantity
    {
        return $this->gasPressureQuantity;
    }

    /**
     * @return GasPressureQuantity
     */
    public function getGasPressureQuantityWithCreate(): GasPressureQuantity
    {
        $this->gasPressureQuantity = is_null($this->gasPressureQuantity) ? new GasPressureQuantity() : $this->gasPressureQuantity;

        return $this->gasPressureQuantity;
    }

    /**
     * @param GasPressureQuantity|null $gasPressureQuantity
     * @return self
     */
    public function setGasPressureQuantity(?GasPressureQuantity $gasPressureQuantity = null): self
    {
        $this->gasPressureQuantity = $gasPressureQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetGasPressureQuantity(): self
    {
        $this->gasPressureQuantity = null;

        return $this;
    }

    /**
     * @return ActualTemperatureReductionQuantity|null
     */
    public function getActualTemperatureReductionQuantity(): ?ActualTemperatureReductionQuantity
    {
        return $this->actualTemperatureReductionQuantity;
    }

    /**
     * @return ActualTemperatureReductionQuantity
     */
    public function getActualTemperatureReductionQuantityWithCreate(): ActualTemperatureReductionQuantity
    {
        $this->actualTemperatureReductionQuantity = is_null($this->actualTemperatureReductionQuantity) ? new ActualTemperatureReductionQuantity() : $this->actualTemperatureReductionQuantity;

        return $this->actualTemperatureReductionQuantity;
    }

    /**
     * @param ActualTemperatureReductionQuantity|null $actualTemperatureReductionQuantity
     * @return self
     */
    public function setActualTemperatureReductionQuantity(
        ?ActualTemperatureReductionQuantity $actualTemperatureReductionQuantity = null,
    ): self {
        $this->actualTemperatureReductionQuantity = $actualTemperatureReductionQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetActualTemperatureReductionQuantity(): self
    {
        $this->actualTemperatureReductionQuantity = null;

        return $this;
    }

    /**
     * @return NormalTemperatureReductionQuantity|null
     */
    public function getNormalTemperatureReductionQuantity(): ?NormalTemperatureReductionQuantity
    {
        return $this->normalTemperatureReductionQuantity;
    }

    /**
     * @return NormalTemperatureReductionQuantity
     */
    public function getNormalTemperatureReductionQuantityWithCreate(): NormalTemperatureReductionQuantity
    {
        $this->normalTemperatureReductionQuantity = is_null($this->normalTemperatureReductionQuantity) ? new NormalTemperatureReductionQuantity() : $this->normalTemperatureReductionQuantity;

        return $this->normalTemperatureReductionQuantity;
    }

    /**
     * @param NormalTemperatureReductionQuantity|null $normalTemperatureReductionQuantity
     * @return self
     */
    public function setNormalTemperatureReductionQuantity(
        ?NormalTemperatureReductionQuantity $normalTemperatureReductionQuantity = null,
    ): self {
        $this->normalTemperatureReductionQuantity = $normalTemperatureReductionQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetNormalTemperatureReductionQuantity(): self
    {
        $this->normalTemperatureReductionQuantity = null;

        return $this;
    }

    /**
     * @return DifferenceTemperatureReductionQuantity|null
     */
    public function getDifferenceTemperatureReductionQuantity(): ?DifferenceTemperatureReductionQuantity
    {
        return $this->differenceTemperatureReductionQuantity;
    }

    /**
     * @return DifferenceTemperatureReductionQuantity
     */
    public function getDifferenceTemperatureReductionQuantityWithCreate(): DifferenceTemperatureReductionQuantity
    {
        $this->differenceTemperatureReductionQuantity = is_null($this->differenceTemperatureReductionQuantity) ? new DifferenceTemperatureReductionQuantity() : $this->differenceTemperatureReductionQuantity;

        return $this->differenceTemperatureReductionQuantity;
    }

    /**
     * @param DifferenceTemperatureReductionQuantity|null $differenceTemperatureReductionQuantity
     * @return self
     */
    public function setDifferenceTemperatureReductionQuantity(
        ?DifferenceTemperatureReductionQuantity $differenceTemperatureReductionQuantity = null,
    ): self {
        $this->differenceTemperatureReductionQuantity = $differenceTemperatureReductionQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDifferenceTemperatureReductionQuantity(): self
    {
        $this->differenceTemperatureReductionQuantity = null;

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
     * @return CorrectionUnitAmount|null
     */
    public function getCorrectionUnitAmount(): ?CorrectionUnitAmount
    {
        return $this->correctionUnitAmount;
    }

    /**
     * @return CorrectionUnitAmount
     */
    public function getCorrectionUnitAmountWithCreate(): CorrectionUnitAmount
    {
        $this->correctionUnitAmount = is_null($this->correctionUnitAmount) ? new CorrectionUnitAmount() : $this->correctionUnitAmount;

        return $this->correctionUnitAmount;
    }

    /**
     * @param CorrectionUnitAmount|null $correctionUnitAmount
     * @return self
     */
    public function setCorrectionUnitAmount(?CorrectionUnitAmount $correctionUnitAmount = null): self
    {
        $this->correctionUnitAmount = $correctionUnitAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCorrectionUnitAmount(): self
    {
        $this->correctionUnitAmount = null;

        return $this;
    }

    /**
     * @return ConsumptionEnergyQuantity|null
     */
    public function getConsumptionEnergyQuantity(): ?ConsumptionEnergyQuantity
    {
        return $this->consumptionEnergyQuantity;
    }

    /**
     * @return ConsumptionEnergyQuantity
     */
    public function getConsumptionEnergyQuantityWithCreate(): ConsumptionEnergyQuantity
    {
        $this->consumptionEnergyQuantity = is_null($this->consumptionEnergyQuantity) ? new ConsumptionEnergyQuantity() : $this->consumptionEnergyQuantity;

        return $this->consumptionEnergyQuantity;
    }

    /**
     * @param ConsumptionEnergyQuantity|null $consumptionEnergyQuantity
     * @return self
     */
    public function setConsumptionEnergyQuantity(?ConsumptionEnergyQuantity $consumptionEnergyQuantity = null): self
    {
        $this->consumptionEnergyQuantity = $consumptionEnergyQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetConsumptionEnergyQuantity(): self
    {
        $this->consumptionEnergyQuantity = null;

        return $this;
    }

    /**
     * @return ConsumptionWaterQuantity|null
     */
    public function getConsumptionWaterQuantity(): ?ConsumptionWaterQuantity
    {
        return $this->consumptionWaterQuantity;
    }

    /**
     * @return ConsumptionWaterQuantity
     */
    public function getConsumptionWaterQuantityWithCreate(): ConsumptionWaterQuantity
    {
        $this->consumptionWaterQuantity = is_null($this->consumptionWaterQuantity) ? new ConsumptionWaterQuantity() : $this->consumptionWaterQuantity;

        return $this->consumptionWaterQuantity;
    }

    /**
     * @param ConsumptionWaterQuantity|null $consumptionWaterQuantity
     * @return self
     */
    public function setConsumptionWaterQuantity(?ConsumptionWaterQuantity $consumptionWaterQuantity = null): self
    {
        $this->consumptionWaterQuantity = $consumptionWaterQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetConsumptionWaterQuantity(): self
    {
        $this->consumptionWaterQuantity = null;

        return $this;
    }

    /**
     * @return CorrectionAmount|null
     */
    public function getCorrectionAmount(): ?CorrectionAmount
    {
        return $this->correctionAmount;
    }

    /**
     * @return CorrectionAmount
     */
    public function getCorrectionAmountWithCreate(): CorrectionAmount
    {
        $this->correctionAmount = is_null($this->correctionAmount) ? new CorrectionAmount() : $this->correctionAmount;

        return $this->correctionAmount;
    }

    /**
     * @param CorrectionAmount|null $correctionAmount
     * @return self
     */
    public function setCorrectionAmount(?CorrectionAmount $correctionAmount = null): self
    {
        $this->correctionAmount = $correctionAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCorrectionAmount(): self
    {
        $this->correctionAmount = null;

        return $this;
    }
}
