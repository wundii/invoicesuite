<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\ubl\cbc\BusinessClassificationEvidenceID;
use horstoeko\invoicesuite\models\ubl\cbc\BusinessIdentityEvidenceID;
use horstoeko\invoicesuite\models\ubl\cbc\EmployeeQuantity;
use horstoeko\invoicesuite\models\ubl\cbc\OperatingYearsQuantity;
use horstoeko\invoicesuite\models\ubl\cbc\ParticipationPercent;
use horstoeko\invoicesuite\models\ubl\cbc\PersonalSituation;
use horstoeko\invoicesuite\models\ubl\cbc\TendererRoleCode;

class QualifyingPartyType
{
    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ParticipationPercent
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ParticipationPercent")
     * @JMS\Expose
     * @JMS\SerializedName("ParticipationPercent")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getParticipationPercent", setter="setParticipationPercent")
     */
    private $participationPercent;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\PersonalSituation>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\PersonalSituation>")
     * @JMS\Expose
     * @JMS\SerializedName("PersonalSituation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="PersonalSituation", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getPersonalSituation", setter="setPersonalSituation")
     */
    private $personalSituation;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\OperatingYearsQuantity
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\OperatingYearsQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("OperatingYearsQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOperatingYearsQuantity", setter="setOperatingYearsQuantity")
     */
    private $operatingYearsQuantity;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\EmployeeQuantity
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\EmployeeQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("EmployeeQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEmployeeQuantity", setter="setEmployeeQuantity")
     */
    private $employeeQuantity;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\BusinessClassificationEvidenceID
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\BusinessClassificationEvidenceID")
     * @JMS\Expose
     * @JMS\SerializedName("BusinessClassificationEvidenceID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getBusinessClassificationEvidenceID", setter="setBusinessClassificationEvidenceID")
     */
    private $businessClassificationEvidenceID;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\BusinessIdentityEvidenceID
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\BusinessIdentityEvidenceID")
     * @JMS\Expose
     * @JMS\SerializedName("BusinessIdentityEvidenceID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getBusinessIdentityEvidenceID", setter="setBusinessIdentityEvidenceID")
     */
    private $businessIdentityEvidenceID;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\TendererRoleCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\TendererRoleCode")
     * @JMS\Expose
     * @JMS\SerializedName("TendererRoleCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTendererRoleCode", setter="setTendererRoleCode")
     */
    private $tendererRoleCode;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\BusinessClassificationScheme
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\BusinessClassificationScheme")
     * @JMS\Expose
     * @JMS\SerializedName("BusinessClassificationScheme")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getBusinessClassificationScheme", setter="setBusinessClassificationScheme")
     */
    private $businessClassificationScheme;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\TechnicalCapability>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\TechnicalCapability>")
     * @JMS\Expose
     * @JMS\SerializedName("TechnicalCapability")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="TechnicalCapability", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getTechnicalCapability", setter="setTechnicalCapability")
     */
    private $technicalCapability;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\FinancialCapability>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\FinancialCapability>")
     * @JMS\Expose
     * @JMS\SerializedName("FinancialCapability")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="FinancialCapability", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getFinancialCapability", setter="setFinancialCapability")
     */
    private $financialCapability;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\CompletedTask>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\CompletedTask>")
     * @JMS\Expose
     * @JMS\SerializedName("CompletedTask")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="CompletedTask", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getCompletedTask", setter="setCompletedTask")
     */
    private $completedTask;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\Declaration>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\Declaration>")
     * @JMS\Expose
     * @JMS\SerializedName("Declaration")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Declaration", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getDeclaration", setter="setDeclaration")
     */
    private $declaration;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\Party
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\Party")
     * @JMS\Expose
     * @JMS\SerializedName("Party")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getParty", setter="setParty")
     */
    private $party;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\EconomicOperatorRole
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\EconomicOperatorRole")
     * @JMS\Expose
     * @JMS\SerializedName("EconomicOperatorRole")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEconomicOperatorRole", setter="setEconomicOperatorRole")
     */
    private $economicOperatorRole;

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ParticipationPercent|null
     */
    public function getParticipationPercent(): ?ParticipationPercent
    {
        return $this->participationPercent;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ParticipationPercent
     */
    public function getParticipationPercentWithCreate(): ParticipationPercent
    {
        $this->participationPercent = is_null($this->participationPercent) ? new ParticipationPercent() : $this->participationPercent;

        return $this->participationPercent;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ParticipationPercent $participationPercent
     * @return self
     */
    public function setParticipationPercent(ParticipationPercent $participationPercent): self
    {
        $this->participationPercent = $participationPercent;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\PersonalSituation>|null
     */
    public function getPersonalSituation(): ?array
    {
        return $this->personalSituation;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\PersonalSituation> $personalSituation
     * @return self
     */
    public function setPersonalSituation(array $personalSituation): self
    {
        $this->personalSituation = $personalSituation;

        return $this;
    }

    /**
     * @return self
     */
    public function clearPersonalSituation(): self
    {
        $this->personalSituation = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\PersonalSituation $personalSituation
     * @return self
     */
    public function addToPersonalSituation(PersonalSituation $personalSituation): self
    {
        $this->personalSituation[] = $personalSituation;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\PersonalSituation
     */
    public function addToPersonalSituationWithCreate(): PersonalSituation
    {
        $this->addTopersonalSituation($personalSituation = new PersonalSituation());

        return $personalSituation;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\PersonalSituation $personalSituation
     * @return self
     */
    public function addOnceToPersonalSituation(PersonalSituation $personalSituation): self
    {
        $this->personalSituation[0] = $personalSituation;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\PersonalSituation
     */
    public function addOnceToPersonalSituationWithCreate(): PersonalSituation
    {
        if ($this->personalSituation === []) {
            $this->addOnceTopersonalSituation(new PersonalSituation());
        }

        return $this->personalSituation[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\OperatingYearsQuantity|null
     */
    public function getOperatingYearsQuantity(): ?OperatingYearsQuantity
    {
        return $this->operatingYearsQuantity;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\OperatingYearsQuantity
     */
    public function getOperatingYearsQuantityWithCreate(): OperatingYearsQuantity
    {
        $this->operatingYearsQuantity = is_null($this->operatingYearsQuantity) ? new OperatingYearsQuantity() : $this->operatingYearsQuantity;

        return $this->operatingYearsQuantity;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\OperatingYearsQuantity $operatingYearsQuantity
     * @return self
     */
    public function setOperatingYearsQuantity(OperatingYearsQuantity $operatingYearsQuantity): self
    {
        $this->operatingYearsQuantity = $operatingYearsQuantity;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\EmployeeQuantity|null
     */
    public function getEmployeeQuantity(): ?EmployeeQuantity
    {
        return $this->employeeQuantity;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\EmployeeQuantity
     */
    public function getEmployeeQuantityWithCreate(): EmployeeQuantity
    {
        $this->employeeQuantity = is_null($this->employeeQuantity) ? new EmployeeQuantity() : $this->employeeQuantity;

        return $this->employeeQuantity;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\EmployeeQuantity $employeeQuantity
     * @return self
     */
    public function setEmployeeQuantity(EmployeeQuantity $employeeQuantity): self
    {
        $this->employeeQuantity = $employeeQuantity;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\BusinessClassificationEvidenceID|null
     */
    public function getBusinessClassificationEvidenceID(): ?BusinessClassificationEvidenceID
    {
        return $this->businessClassificationEvidenceID;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\BusinessClassificationEvidenceID
     */
    public function getBusinessClassificationEvidenceIDWithCreate(): BusinessClassificationEvidenceID
    {
        $this->businessClassificationEvidenceID = is_null($this->businessClassificationEvidenceID) ? new BusinessClassificationEvidenceID() : $this->businessClassificationEvidenceID;

        return $this->businessClassificationEvidenceID;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\BusinessClassificationEvidenceID $businessClassificationEvidenceID
     * @return self
     */
    public function setBusinessClassificationEvidenceID(
        BusinessClassificationEvidenceID $businessClassificationEvidenceID,
    ): self {
        $this->businessClassificationEvidenceID = $businessClassificationEvidenceID;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\BusinessIdentityEvidenceID|null
     */
    public function getBusinessIdentityEvidenceID(): ?BusinessIdentityEvidenceID
    {
        return $this->businessIdentityEvidenceID;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\BusinessIdentityEvidenceID
     */
    public function getBusinessIdentityEvidenceIDWithCreate(): BusinessIdentityEvidenceID
    {
        $this->businessIdentityEvidenceID = is_null($this->businessIdentityEvidenceID) ? new BusinessIdentityEvidenceID() : $this->businessIdentityEvidenceID;

        return $this->businessIdentityEvidenceID;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\BusinessIdentityEvidenceID $businessIdentityEvidenceID
     * @return self
     */
    public function setBusinessIdentityEvidenceID(BusinessIdentityEvidenceID $businessIdentityEvidenceID): self
    {
        $this->businessIdentityEvidenceID = $businessIdentityEvidenceID;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\TendererRoleCode|null
     */
    public function getTendererRoleCode(): ?TendererRoleCode
    {
        return $this->tendererRoleCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\TendererRoleCode
     */
    public function getTendererRoleCodeWithCreate(): TendererRoleCode
    {
        $this->tendererRoleCode = is_null($this->tendererRoleCode) ? new TendererRoleCode() : $this->tendererRoleCode;

        return $this->tendererRoleCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\TendererRoleCode $tendererRoleCode
     * @return self
     */
    public function setTendererRoleCode(TendererRoleCode $tendererRoleCode): self
    {
        $this->tendererRoleCode = $tendererRoleCode;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\BusinessClassificationScheme|null
     */
    public function getBusinessClassificationScheme(): ?BusinessClassificationScheme
    {
        return $this->businessClassificationScheme;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\BusinessClassificationScheme
     */
    public function getBusinessClassificationSchemeWithCreate(): BusinessClassificationScheme
    {
        $this->businessClassificationScheme = is_null($this->businessClassificationScheme) ? new BusinessClassificationScheme() : $this->businessClassificationScheme;

        return $this->businessClassificationScheme;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\BusinessClassificationScheme $businessClassificationScheme
     * @return self
     */
    public function setBusinessClassificationScheme(BusinessClassificationScheme $businessClassificationScheme): self
    {
        $this->businessClassificationScheme = $businessClassificationScheme;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\TechnicalCapability>|null
     */
    public function getTechnicalCapability(): ?array
    {
        return $this->technicalCapability;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\TechnicalCapability> $technicalCapability
     * @return self
     */
    public function setTechnicalCapability(array $technicalCapability): self
    {
        $this->technicalCapability = $technicalCapability;

        return $this;
    }

    /**
     * @return self
     */
    public function clearTechnicalCapability(): self
    {
        $this->technicalCapability = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\TechnicalCapability $technicalCapability
     * @return self
     */
    public function addToTechnicalCapability(TechnicalCapability $technicalCapability): self
    {
        $this->technicalCapability[] = $technicalCapability;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\TechnicalCapability
     */
    public function addToTechnicalCapabilityWithCreate(): TechnicalCapability
    {
        $this->addTotechnicalCapability($technicalCapability = new TechnicalCapability());

        return $technicalCapability;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\TechnicalCapability $technicalCapability
     * @return self
     */
    public function addOnceToTechnicalCapability(TechnicalCapability $technicalCapability): self
    {
        $this->technicalCapability[0] = $technicalCapability;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\TechnicalCapability
     */
    public function addOnceToTechnicalCapabilityWithCreate(): TechnicalCapability
    {
        if ($this->technicalCapability === []) {
            $this->addOnceTotechnicalCapability(new TechnicalCapability());
        }

        return $this->technicalCapability[0];
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\FinancialCapability>|null
     */
    public function getFinancialCapability(): ?array
    {
        return $this->financialCapability;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\FinancialCapability> $financialCapability
     * @return self
     */
    public function setFinancialCapability(array $financialCapability): self
    {
        $this->financialCapability = $financialCapability;

        return $this;
    }

    /**
     * @return self
     */
    public function clearFinancialCapability(): self
    {
        $this->financialCapability = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\FinancialCapability $financialCapability
     * @return self
     */
    public function addToFinancialCapability(FinancialCapability $financialCapability): self
    {
        $this->financialCapability[] = $financialCapability;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\FinancialCapability
     */
    public function addToFinancialCapabilityWithCreate(): FinancialCapability
    {
        $this->addTofinancialCapability($financialCapability = new FinancialCapability());

        return $financialCapability;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\FinancialCapability $financialCapability
     * @return self
     */
    public function addOnceToFinancialCapability(FinancialCapability $financialCapability): self
    {
        $this->financialCapability[0] = $financialCapability;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\FinancialCapability
     */
    public function addOnceToFinancialCapabilityWithCreate(): FinancialCapability
    {
        if ($this->financialCapability === []) {
            $this->addOnceTofinancialCapability(new FinancialCapability());
        }

        return $this->financialCapability[0];
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\CompletedTask>|null
     */
    public function getCompletedTask(): ?array
    {
        return $this->completedTask;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\CompletedTask> $completedTask
     * @return self
     */
    public function setCompletedTask(array $completedTask): self
    {
        $this->completedTask = $completedTask;

        return $this;
    }

    /**
     * @return self
     */
    public function clearCompletedTask(): self
    {
        $this->completedTask = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\CompletedTask $completedTask
     * @return self
     */
    public function addToCompletedTask(CompletedTask $completedTask): self
    {
        $this->completedTask[] = $completedTask;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\CompletedTask
     */
    public function addToCompletedTaskWithCreate(): CompletedTask
    {
        $this->addTocompletedTask($completedTask = new CompletedTask());

        return $completedTask;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\CompletedTask $completedTask
     * @return self
     */
    public function addOnceToCompletedTask(CompletedTask $completedTask): self
    {
        $this->completedTask[0] = $completedTask;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\CompletedTask
     */
    public function addOnceToCompletedTaskWithCreate(): CompletedTask
    {
        if ($this->completedTask === []) {
            $this->addOnceTocompletedTask(new CompletedTask());
        }

        return $this->completedTask[0];
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\Declaration>|null
     */
    public function getDeclaration(): ?array
    {
        return $this->declaration;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\Declaration> $declaration
     * @return self
     */
    public function setDeclaration(array $declaration): self
    {
        $this->declaration = $declaration;

        return $this;
    }

    /**
     * @return self
     */
    public function clearDeclaration(): self
    {
        $this->declaration = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\Declaration $declaration
     * @return self
     */
    public function addToDeclaration(Declaration $declaration): self
    {
        $this->declaration[] = $declaration;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Declaration
     */
    public function addToDeclarationWithCreate(): Declaration
    {
        $this->addTodeclaration($declaration = new Declaration());

        return $declaration;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\Declaration $declaration
     * @return self
     */
    public function addOnceToDeclaration(Declaration $declaration): self
    {
        $this->declaration[0] = $declaration;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Declaration
     */
    public function addOnceToDeclarationWithCreate(): Declaration
    {
        if ($this->declaration === []) {
            $this->addOnceTodeclaration(new Declaration());
        }

        return $this->declaration[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Party|null
     */
    public function getParty(): ?Party
    {
        return $this->party;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Party
     */
    public function getPartyWithCreate(): Party
    {
        $this->party = is_null($this->party) ? new Party() : $this->party;

        return $this->party;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\Party $party
     * @return self
     */
    public function setParty(Party $party): self
    {
        $this->party = $party;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\EconomicOperatorRole|null
     */
    public function getEconomicOperatorRole(): ?EconomicOperatorRole
    {
        return $this->economicOperatorRole;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\EconomicOperatorRole
     */
    public function getEconomicOperatorRoleWithCreate(): EconomicOperatorRole
    {
        $this->economicOperatorRole = is_null($this->economicOperatorRole) ? new EconomicOperatorRole() : $this->economicOperatorRole;

        return $this->economicOperatorRole;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\EconomicOperatorRole $economicOperatorRole
     * @return self
     */
    public function setEconomicOperatorRole(EconomicOperatorRole $economicOperatorRole): self
    {
        $this->economicOperatorRole = $economicOperatorRole;

        return $this;
    }
}
