<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\BasicConsumedQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ConsumersEnergyLevel;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ConsumersEnergyLevelCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ConsumptionType;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ConsumptionTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\HeatingType;
use horstoeko\invoicesuite\documents\models\ubl\cbc\HeatingTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ResidenceType;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ResidenceTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ResidentOccupantsNumeric;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TotalConsumedQuantity;

class ConsumptionReportType
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
     * @var ConsumptionType|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ConsumptionType")
     * @JMS\Expose
     * @JMS\SerializedName("ConsumptionType")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getConsumptionType", setter="setConsumptionType")
     */
    private $consumptionType;

    /**
     * @var ConsumptionTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ConsumptionTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("ConsumptionTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getConsumptionTypeCode", setter="setConsumptionTypeCode")
     */
    private $consumptionTypeCode;

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
     * @var TotalConsumedQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TotalConsumedQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("TotalConsumedQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTotalConsumedQuantity", setter="setTotalConsumedQuantity")
     */
    private $totalConsumedQuantity;

    /**
     * @var BasicConsumedQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\BasicConsumedQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("BasicConsumedQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getBasicConsumedQuantity", setter="setBasicConsumedQuantity")
     */
    private $basicConsumedQuantity;

    /**
     * @var ResidentOccupantsNumeric|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ResidentOccupantsNumeric")
     * @JMS\Expose
     * @JMS\SerializedName("ResidentOccupantsNumeric")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getResidentOccupantsNumeric", setter="setResidentOccupantsNumeric")
     */
    private $residentOccupantsNumeric;

    /**
     * @var ConsumersEnergyLevelCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ConsumersEnergyLevelCode")
     * @JMS\Expose
     * @JMS\SerializedName("ConsumersEnergyLevelCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getConsumersEnergyLevelCode", setter="setConsumersEnergyLevelCode")
     */
    private $consumersEnergyLevelCode;

    /**
     * @var ConsumersEnergyLevel|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ConsumersEnergyLevel")
     * @JMS\Expose
     * @JMS\SerializedName("ConsumersEnergyLevel")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getConsumersEnergyLevel", setter="setConsumersEnergyLevel")
     */
    private $consumersEnergyLevel;

    /**
     * @var ResidenceType|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ResidenceType")
     * @JMS\Expose
     * @JMS\SerializedName("ResidenceType")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getResidenceType", setter="setResidenceType")
     */
    private $residenceType;

    /**
     * @var ResidenceTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ResidenceTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("ResidenceTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getResidenceTypeCode", setter="setResidenceTypeCode")
     */
    private $residenceTypeCode;

    /**
     * @var HeatingType|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\HeatingType")
     * @JMS\Expose
     * @JMS\SerializedName("HeatingType")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getHeatingType", setter="setHeatingType")
     */
    private $heatingType;

    /**
     * @var HeatingTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\HeatingTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("HeatingTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getHeatingTypeCode", setter="setHeatingTypeCode")
     */
    private $heatingTypeCode;

    /**
     * @var Period|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Period")
     * @JMS\Expose
     * @JMS\SerializedName("Period")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPeriod", setter="setPeriod")
     */
    private $period;

    /**
     * @var GuidanceDocumentReference|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\GuidanceDocumentReference")
     * @JMS\Expose
     * @JMS\SerializedName("GuidanceDocumentReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getGuidanceDocumentReference", setter="setGuidanceDocumentReference")
     */
    private $guidanceDocumentReference;

    /**
     * @var DocumentReference|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\DocumentReference")
     * @JMS\Expose
     * @JMS\SerializedName("DocumentReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDocumentReference", setter="setDocumentReference")
     */
    private $documentReference;

    /**
     * @var array<ConsumptionReportReference>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ConsumptionReportReference>")
     * @JMS\Expose
     * @JMS\SerializedName("ConsumptionReportReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ConsumptionReportReference", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getConsumptionReportReference", setter="setConsumptionReportReference")
     */
    private $consumptionReportReference;

    /**
     * @var array<ConsumptionHistory>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ConsumptionHistory>")
     * @JMS\Expose
     * @JMS\SerializedName("ConsumptionHistory")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ConsumptionHistory", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getConsumptionHistory", setter="setConsumptionHistory")
     */
    private $consumptionHistory;

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
     * @return ConsumptionType|null
     */
    public function getConsumptionType(): ?ConsumptionType
    {
        return $this->consumptionType;
    }

    /**
     * @return ConsumptionType
     */
    public function getConsumptionTypeWithCreate(): ConsumptionType
    {
        $this->consumptionType = is_null($this->consumptionType) ? new ConsumptionType() : $this->consumptionType;

        return $this->consumptionType;
    }

    /**
     * @param ConsumptionType|null $consumptionType
     * @return self
     */
    public function setConsumptionType(?ConsumptionType $consumptionType = null): self
    {
        $this->consumptionType = $consumptionType;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetConsumptionType(): self
    {
        $this->consumptionType = null;

        return $this;
    }

    /**
     * @return ConsumptionTypeCode|null
     */
    public function getConsumptionTypeCode(): ?ConsumptionTypeCode
    {
        return $this->consumptionTypeCode;
    }

    /**
     * @return ConsumptionTypeCode
     */
    public function getConsumptionTypeCodeWithCreate(): ConsumptionTypeCode
    {
        $this->consumptionTypeCode = is_null($this->consumptionTypeCode) ? new ConsumptionTypeCode() : $this->consumptionTypeCode;

        return $this->consumptionTypeCode;
    }

    /**
     * @param ConsumptionTypeCode|null $consumptionTypeCode
     * @return self
     */
    public function setConsumptionTypeCode(?ConsumptionTypeCode $consumptionTypeCode = null): self
    {
        $this->consumptionTypeCode = $consumptionTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetConsumptionTypeCode(): self
    {
        $this->consumptionTypeCode = null;

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
     * @return TotalConsumedQuantity|null
     */
    public function getTotalConsumedQuantity(): ?TotalConsumedQuantity
    {
        return $this->totalConsumedQuantity;
    }

    /**
     * @return TotalConsumedQuantity
     */
    public function getTotalConsumedQuantityWithCreate(): TotalConsumedQuantity
    {
        $this->totalConsumedQuantity = is_null($this->totalConsumedQuantity) ? new TotalConsumedQuantity() : $this->totalConsumedQuantity;

        return $this->totalConsumedQuantity;
    }

    /**
     * @param TotalConsumedQuantity|null $totalConsumedQuantity
     * @return self
     */
    public function setTotalConsumedQuantity(?TotalConsumedQuantity $totalConsumedQuantity = null): self
    {
        $this->totalConsumedQuantity = $totalConsumedQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTotalConsumedQuantity(): self
    {
        $this->totalConsumedQuantity = null;

        return $this;
    }

    /**
     * @return BasicConsumedQuantity|null
     */
    public function getBasicConsumedQuantity(): ?BasicConsumedQuantity
    {
        return $this->basicConsumedQuantity;
    }

    /**
     * @return BasicConsumedQuantity
     */
    public function getBasicConsumedQuantityWithCreate(): BasicConsumedQuantity
    {
        $this->basicConsumedQuantity = is_null($this->basicConsumedQuantity) ? new BasicConsumedQuantity() : $this->basicConsumedQuantity;

        return $this->basicConsumedQuantity;
    }

    /**
     * @param BasicConsumedQuantity|null $basicConsumedQuantity
     * @return self
     */
    public function setBasicConsumedQuantity(?BasicConsumedQuantity $basicConsumedQuantity = null): self
    {
        $this->basicConsumedQuantity = $basicConsumedQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetBasicConsumedQuantity(): self
    {
        $this->basicConsumedQuantity = null;

        return $this;
    }

    /**
     * @return ResidentOccupantsNumeric|null
     */
    public function getResidentOccupantsNumeric(): ?ResidentOccupantsNumeric
    {
        return $this->residentOccupantsNumeric;
    }

    /**
     * @return ResidentOccupantsNumeric
     */
    public function getResidentOccupantsNumericWithCreate(): ResidentOccupantsNumeric
    {
        $this->residentOccupantsNumeric = is_null($this->residentOccupantsNumeric) ? new ResidentOccupantsNumeric() : $this->residentOccupantsNumeric;

        return $this->residentOccupantsNumeric;
    }

    /**
     * @param ResidentOccupantsNumeric|null $residentOccupantsNumeric
     * @return self
     */
    public function setResidentOccupantsNumeric(?ResidentOccupantsNumeric $residentOccupantsNumeric = null): self
    {
        $this->residentOccupantsNumeric = $residentOccupantsNumeric;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetResidentOccupantsNumeric(): self
    {
        $this->residentOccupantsNumeric = null;

        return $this;
    }

    /**
     * @return ConsumersEnergyLevelCode|null
     */
    public function getConsumersEnergyLevelCode(): ?ConsumersEnergyLevelCode
    {
        return $this->consumersEnergyLevelCode;
    }

    /**
     * @return ConsumersEnergyLevelCode
     */
    public function getConsumersEnergyLevelCodeWithCreate(): ConsumersEnergyLevelCode
    {
        $this->consumersEnergyLevelCode = is_null($this->consumersEnergyLevelCode) ? new ConsumersEnergyLevelCode() : $this->consumersEnergyLevelCode;

        return $this->consumersEnergyLevelCode;
    }

    /**
     * @param ConsumersEnergyLevelCode|null $consumersEnergyLevelCode
     * @return self
     */
    public function setConsumersEnergyLevelCode(?ConsumersEnergyLevelCode $consumersEnergyLevelCode = null): self
    {
        $this->consumersEnergyLevelCode = $consumersEnergyLevelCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetConsumersEnergyLevelCode(): self
    {
        $this->consumersEnergyLevelCode = null;

        return $this;
    }

    /**
     * @return ConsumersEnergyLevel|null
     */
    public function getConsumersEnergyLevel(): ?ConsumersEnergyLevel
    {
        return $this->consumersEnergyLevel;
    }

    /**
     * @return ConsumersEnergyLevel
     */
    public function getConsumersEnergyLevelWithCreate(): ConsumersEnergyLevel
    {
        $this->consumersEnergyLevel = is_null($this->consumersEnergyLevel) ? new ConsumersEnergyLevel() : $this->consumersEnergyLevel;

        return $this->consumersEnergyLevel;
    }

    /**
     * @param ConsumersEnergyLevel|null $consumersEnergyLevel
     * @return self
     */
    public function setConsumersEnergyLevel(?ConsumersEnergyLevel $consumersEnergyLevel = null): self
    {
        $this->consumersEnergyLevel = $consumersEnergyLevel;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetConsumersEnergyLevel(): self
    {
        $this->consumersEnergyLevel = null;

        return $this;
    }

    /**
     * @return ResidenceType|null
     */
    public function getResidenceType(): ?ResidenceType
    {
        return $this->residenceType;
    }

    /**
     * @return ResidenceType
     */
    public function getResidenceTypeWithCreate(): ResidenceType
    {
        $this->residenceType = is_null($this->residenceType) ? new ResidenceType() : $this->residenceType;

        return $this->residenceType;
    }

    /**
     * @param ResidenceType|null $residenceType
     * @return self
     */
    public function setResidenceType(?ResidenceType $residenceType = null): self
    {
        $this->residenceType = $residenceType;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetResidenceType(): self
    {
        $this->residenceType = null;

        return $this;
    }

    /**
     * @return ResidenceTypeCode|null
     */
    public function getResidenceTypeCode(): ?ResidenceTypeCode
    {
        return $this->residenceTypeCode;
    }

    /**
     * @return ResidenceTypeCode
     */
    public function getResidenceTypeCodeWithCreate(): ResidenceTypeCode
    {
        $this->residenceTypeCode = is_null($this->residenceTypeCode) ? new ResidenceTypeCode() : $this->residenceTypeCode;

        return $this->residenceTypeCode;
    }

    /**
     * @param ResidenceTypeCode|null $residenceTypeCode
     * @return self
     */
    public function setResidenceTypeCode(?ResidenceTypeCode $residenceTypeCode = null): self
    {
        $this->residenceTypeCode = $residenceTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetResidenceTypeCode(): self
    {
        $this->residenceTypeCode = null;

        return $this;
    }

    /**
     * @return HeatingType|null
     */
    public function getHeatingType(): ?HeatingType
    {
        return $this->heatingType;
    }

    /**
     * @return HeatingType
     */
    public function getHeatingTypeWithCreate(): HeatingType
    {
        $this->heatingType = is_null($this->heatingType) ? new HeatingType() : $this->heatingType;

        return $this->heatingType;
    }

    /**
     * @param HeatingType|null $heatingType
     * @return self
     */
    public function setHeatingType(?HeatingType $heatingType = null): self
    {
        $this->heatingType = $heatingType;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetHeatingType(): self
    {
        $this->heatingType = null;

        return $this;
    }

    /**
     * @return HeatingTypeCode|null
     */
    public function getHeatingTypeCode(): ?HeatingTypeCode
    {
        return $this->heatingTypeCode;
    }

    /**
     * @return HeatingTypeCode
     */
    public function getHeatingTypeCodeWithCreate(): HeatingTypeCode
    {
        $this->heatingTypeCode = is_null($this->heatingTypeCode) ? new HeatingTypeCode() : $this->heatingTypeCode;

        return $this->heatingTypeCode;
    }

    /**
     * @param HeatingTypeCode|null $heatingTypeCode
     * @return self
     */
    public function setHeatingTypeCode(?HeatingTypeCode $heatingTypeCode = null): self
    {
        $this->heatingTypeCode = $heatingTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetHeatingTypeCode(): self
    {
        $this->heatingTypeCode = null;

        return $this;
    }

    /**
     * @return Period|null
     */
    public function getPeriod(): ?Period
    {
        return $this->period;
    }

    /**
     * @return Period
     */
    public function getPeriodWithCreate(): Period
    {
        $this->period = is_null($this->period) ? new Period() : $this->period;

        return $this->period;
    }

    /**
     * @param Period|null $period
     * @return self
     */
    public function setPeriod(?Period $period = null): self
    {
        $this->period = $period;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPeriod(): self
    {
        $this->period = null;

        return $this;
    }

    /**
     * @return GuidanceDocumentReference|null
     */
    public function getGuidanceDocumentReference(): ?GuidanceDocumentReference
    {
        return $this->guidanceDocumentReference;
    }

    /**
     * @return GuidanceDocumentReference
     */
    public function getGuidanceDocumentReferenceWithCreate(): GuidanceDocumentReference
    {
        $this->guidanceDocumentReference = is_null($this->guidanceDocumentReference) ? new GuidanceDocumentReference() : $this->guidanceDocumentReference;

        return $this->guidanceDocumentReference;
    }

    /**
     * @param GuidanceDocumentReference|null $guidanceDocumentReference
     * @return self
     */
    public function setGuidanceDocumentReference(?GuidanceDocumentReference $guidanceDocumentReference = null): self
    {
        $this->guidanceDocumentReference = $guidanceDocumentReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetGuidanceDocumentReference(): self
    {
        $this->guidanceDocumentReference = null;

        return $this;
    }

    /**
     * @return DocumentReference|null
     */
    public function getDocumentReference(): ?DocumentReference
    {
        return $this->documentReference;
    }

    /**
     * @return DocumentReference
     */
    public function getDocumentReferenceWithCreate(): DocumentReference
    {
        $this->documentReference = is_null($this->documentReference) ? new DocumentReference() : $this->documentReference;

        return $this->documentReference;
    }

    /**
     * @param DocumentReference|null $documentReference
     * @return self
     */
    public function setDocumentReference(?DocumentReference $documentReference = null): self
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
     * @return array<ConsumptionReportReference>|null
     */
    public function getConsumptionReportReference(): ?array
    {
        return $this->consumptionReportReference;
    }

    /**
     * @param array<ConsumptionReportReference>|null $consumptionReportReference
     * @return self
     */
    public function setConsumptionReportReference(?array $consumptionReportReference = null): self
    {
        $this->consumptionReportReference = $consumptionReportReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetConsumptionReportReference(): self
    {
        $this->consumptionReportReference = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearConsumptionReportReference(): self
    {
        $this->consumptionReportReference = [];

        return $this;
    }

    /**
     * @return ConsumptionReportReference|null
     */
    public function firstConsumptionReportReference(): ?ConsumptionReportReference
    {
        $consumptionReportReference = $this->consumptionReportReference ?? [];
        $consumptionReportReference = reset($consumptionReportReference);

        if ($consumptionReportReference === false) {
            return null;
        }

        return $consumptionReportReference;
    }

    /**
     * @return ConsumptionReportReference|null
     */
    public function lastConsumptionReportReference(): ?ConsumptionReportReference
    {
        $consumptionReportReference = $this->consumptionReportReference ?? [];
        $consumptionReportReference = end($consumptionReportReference);

        if ($consumptionReportReference === false) {
            return null;
        }

        return $consumptionReportReference;
    }

    /**
     * @param ConsumptionReportReference $consumptionReportReference
     * @return self
     */
    public function addToConsumptionReportReference(ConsumptionReportReference $consumptionReportReference): self
    {
        $this->consumptionReportReference[] = $consumptionReportReference;

        return $this;
    }

    /**
     * @return ConsumptionReportReference
     */
    public function addToConsumptionReportReferenceWithCreate(): ConsumptionReportReference
    {
        $this->addToconsumptionReportReference($consumptionReportReference = new ConsumptionReportReference());

        return $consumptionReportReference;
    }

    /**
     * @param ConsumptionReportReference $consumptionReportReference
     * @return self
     */
    public function addOnceToConsumptionReportReference(ConsumptionReportReference $consumptionReportReference): self
    {
        if (!is_array($this->consumptionReportReference)) {
            $this->consumptionReportReference = [];
        }

        $this->consumptionReportReference[0] = $consumptionReportReference;

        return $this;
    }

    /**
     * @return ConsumptionReportReference
     */
    public function addOnceToConsumptionReportReferenceWithCreate(): ConsumptionReportReference
    {
        if (!is_array($this->consumptionReportReference)) {
            $this->consumptionReportReference = [];
        }

        if ($this->consumptionReportReference === []) {
            $this->addOnceToconsumptionReportReference(new ConsumptionReportReference());
        }

        return $this->consumptionReportReference[0];
    }

    /**
     * @return array<ConsumptionHistory>|null
     */
    public function getConsumptionHistory(): ?array
    {
        return $this->consumptionHistory;
    }

    /**
     * @param array<ConsumptionHistory>|null $consumptionHistory
     * @return self
     */
    public function setConsumptionHistory(?array $consumptionHistory = null): self
    {
        $this->consumptionHistory = $consumptionHistory;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetConsumptionHistory(): self
    {
        $this->consumptionHistory = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearConsumptionHistory(): self
    {
        $this->consumptionHistory = [];

        return $this;
    }

    /**
     * @return ConsumptionHistory|null
     */
    public function firstConsumptionHistory(): ?ConsumptionHistory
    {
        $consumptionHistory = $this->consumptionHistory ?? [];
        $consumptionHistory = reset($consumptionHistory);

        if ($consumptionHistory === false) {
            return null;
        }

        return $consumptionHistory;
    }

    /**
     * @return ConsumptionHistory|null
     */
    public function lastConsumptionHistory(): ?ConsumptionHistory
    {
        $consumptionHistory = $this->consumptionHistory ?? [];
        $consumptionHistory = end($consumptionHistory);

        if ($consumptionHistory === false) {
            return null;
        }

        return $consumptionHistory;
    }

    /**
     * @param ConsumptionHistory $consumptionHistory
     * @return self
     */
    public function addToConsumptionHistory(ConsumptionHistory $consumptionHistory): self
    {
        $this->consumptionHistory[] = $consumptionHistory;

        return $this;
    }

    /**
     * @return ConsumptionHistory
     */
    public function addToConsumptionHistoryWithCreate(): ConsumptionHistory
    {
        $this->addToconsumptionHistory($consumptionHistory = new ConsumptionHistory());

        return $consumptionHistory;
    }

    /**
     * @param ConsumptionHistory $consumptionHistory
     * @return self
     */
    public function addOnceToConsumptionHistory(ConsumptionHistory $consumptionHistory): self
    {
        if (!is_array($this->consumptionHistory)) {
            $this->consumptionHistory = [];
        }

        $this->consumptionHistory[0] = $consumptionHistory;

        return $this;
    }

    /**
     * @return ConsumptionHistory
     */
    public function addOnceToConsumptionHistoryWithCreate(): ConsumptionHistory
    {
        if (!is_array($this->consumptionHistory)) {
            $this->consumptionHistory = [];
        }

        if ($this->consumptionHistory === []) {
            $this->addOnceToconsumptionHistory(new ConsumptionHistory());
        }

        return $this->consumptionHistory[0];
    }
}
