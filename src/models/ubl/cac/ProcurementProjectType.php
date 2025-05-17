<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\models\ubl\cbc\Description;
use horstoeko\invoicesuite\models\ubl\cbc\EstimatedOverallContractQuantity;
use horstoeko\invoicesuite\models\ubl\cbc\FeeDescription;
use horstoeko\invoicesuite\models\ubl\cbc\ID;
use horstoeko\invoicesuite\models\ubl\cbc\Name;
use horstoeko\invoicesuite\models\ubl\cbc\Note;
use horstoeko\invoicesuite\models\ubl\cbc\ProcurementSubTypeCode;
use horstoeko\invoicesuite\models\ubl\cbc\ProcurementTypeCode;
use horstoeko\invoicesuite\models\ubl\cbc\QualityControlCode;
use horstoeko\invoicesuite\models\ubl\cbc\RequiredFeeAmount;

class ProcurementProjectType
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
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\Name>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\Name>")
     * @JMS\Expose
     * @JMS\SerializedName("Name")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Name", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getName", setter="setName")
     */
    private $name;

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
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ProcurementTypeCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ProcurementTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("ProcurementTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getProcurementTypeCode", setter="setProcurementTypeCode")
     */
    private $procurementTypeCode;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ProcurementSubTypeCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ProcurementSubTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("ProcurementSubTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getProcurementSubTypeCode", setter="setProcurementSubTypeCode")
     */
    private $procurementSubTypeCode;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\QualityControlCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\QualityControlCode")
     * @JMS\Expose
     * @JMS\SerializedName("QualityControlCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getQualityControlCode", setter="setQualityControlCode")
     */
    private $qualityControlCode;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\RequiredFeeAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\RequiredFeeAmount")
     * @JMS\Expose
     * @JMS\SerializedName("RequiredFeeAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRequiredFeeAmount", setter="setRequiredFeeAmount")
     */
    private $requiredFeeAmount;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\FeeDescription>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\FeeDescription>")
     * @JMS\Expose
     * @JMS\SerializedName("FeeDescription")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="FeeDescription", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getFeeDescription", setter="setFeeDescription")
     */
    private $feeDescription;

    /**
     * @var \DateTimeInterface
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("RequestedDeliveryDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRequestedDeliveryDate", setter="setRequestedDeliveryDate")
     */
    private $requestedDeliveryDate;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\EstimatedOverallContractQuantity
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\EstimatedOverallContractQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("EstimatedOverallContractQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEstimatedOverallContractQuantity", setter="setEstimatedOverallContractQuantity")
     */
    private $estimatedOverallContractQuantity;

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
     * @var \horstoeko\invoicesuite\models\ubl\cac\RequestedTenderTotal
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\RequestedTenderTotal")
     * @JMS\Expose
     * @JMS\SerializedName("RequestedTenderTotal")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRequestedTenderTotal", setter="setRequestedTenderTotal")
     */
    private $requestedTenderTotal;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\MainCommodityClassification
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\MainCommodityClassification")
     * @JMS\Expose
     * @JMS\SerializedName("MainCommodityClassification")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMainCommodityClassification", setter="setMainCommodityClassification")
     */
    private $mainCommodityClassification;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\AdditionalCommodityClassification>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\AdditionalCommodityClassification>")
     * @JMS\Expose
     * @JMS\SerializedName("AdditionalCommodityClassification")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="AdditionalCommodityClassification", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getAdditionalCommodityClassification", setter="setAdditionalCommodityClassification")
     */
    private $additionalCommodityClassification;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\RealizedLocation>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\RealizedLocation>")
     * @JMS\Expose
     * @JMS\SerializedName("RealizedLocation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="RealizedLocation", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getRealizedLocation", setter="setRealizedLocation")
     */
    private $realizedLocation;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\PlannedPeriod
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\PlannedPeriod")
     * @JMS\Expose
     * @JMS\SerializedName("PlannedPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPlannedPeriod", setter="setPlannedPeriod")
     */
    private $plannedPeriod;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\ContractExtension
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\ContractExtension")
     * @JMS\Expose
     * @JMS\SerializedName("ContractExtension")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getContractExtension", setter="setContractExtension")
     */
    private $contractExtension;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\RequestForTenderLine>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\RequestForTenderLine>")
     * @JMS\Expose
     * @JMS\SerializedName("RequestForTenderLine")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="RequestForTenderLine", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getRequestForTenderLine", setter="setRequestForTenderLine")
     */
    private $requestForTenderLine;

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
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\Name>|null
     */
    public function getName(): ?array
    {
        return $this->name;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\Name> $name
     * @return self
     */
    public function setName(array $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return self
     */
    public function clearName(): self
    {
        $this->name = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Name $name
     * @return self
     */
    public function addToName(Name $name): self
    {
        $this->name[] = $name;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Name
     */
    public function addToNameWithCreate(): Name
    {
        $this->addToname($name = new Name());

        return $name;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Name $name
     * @return self
     */
    public function addOnceToName(Name $name): self
    {
        if (!is_array($this->name)) {
            $this->name = [];
        }

        $this->name[0] = $name;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Name
     */
    public function addOnceToNameWithCreate(): Name
    {
        if (!is_array($this->name)) {
            $this->name = [];
        }

        if ($this->name === []) {
            $this->addOnceToname(new Name());
        }

        return $this->name[0];
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
        if (!is_array($this->description)) {
            $this->description = [];
        }

        $this->description[0] = $description;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Description
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
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ProcurementTypeCode|null
     */
    public function getProcurementTypeCode(): ?ProcurementTypeCode
    {
        return $this->procurementTypeCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ProcurementTypeCode
     */
    public function getProcurementTypeCodeWithCreate(): ProcurementTypeCode
    {
        $this->procurementTypeCode = is_null($this->procurementTypeCode) ? new ProcurementTypeCode() : $this->procurementTypeCode;

        return $this->procurementTypeCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ProcurementTypeCode $procurementTypeCode
     * @return self
     */
    public function setProcurementTypeCode(ProcurementTypeCode $procurementTypeCode): self
    {
        $this->procurementTypeCode = $procurementTypeCode;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ProcurementSubTypeCode|null
     */
    public function getProcurementSubTypeCode(): ?ProcurementSubTypeCode
    {
        return $this->procurementSubTypeCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ProcurementSubTypeCode
     */
    public function getProcurementSubTypeCodeWithCreate(): ProcurementSubTypeCode
    {
        $this->procurementSubTypeCode = is_null($this->procurementSubTypeCode) ? new ProcurementSubTypeCode() : $this->procurementSubTypeCode;

        return $this->procurementSubTypeCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ProcurementSubTypeCode $procurementSubTypeCode
     * @return self
     */
    public function setProcurementSubTypeCode(ProcurementSubTypeCode $procurementSubTypeCode): self
    {
        $this->procurementSubTypeCode = $procurementSubTypeCode;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\QualityControlCode|null
     */
    public function getQualityControlCode(): ?QualityControlCode
    {
        return $this->qualityControlCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\QualityControlCode
     */
    public function getQualityControlCodeWithCreate(): QualityControlCode
    {
        $this->qualityControlCode = is_null($this->qualityControlCode) ? new QualityControlCode() : $this->qualityControlCode;

        return $this->qualityControlCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\QualityControlCode $qualityControlCode
     * @return self
     */
    public function setQualityControlCode(QualityControlCode $qualityControlCode): self
    {
        $this->qualityControlCode = $qualityControlCode;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\RequiredFeeAmount|null
     */
    public function getRequiredFeeAmount(): ?RequiredFeeAmount
    {
        return $this->requiredFeeAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\RequiredFeeAmount
     */
    public function getRequiredFeeAmountWithCreate(): RequiredFeeAmount
    {
        $this->requiredFeeAmount = is_null($this->requiredFeeAmount) ? new RequiredFeeAmount() : $this->requiredFeeAmount;

        return $this->requiredFeeAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\RequiredFeeAmount $requiredFeeAmount
     * @return self
     */
    public function setRequiredFeeAmount(RequiredFeeAmount $requiredFeeAmount): self
    {
        $this->requiredFeeAmount = $requiredFeeAmount;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\FeeDescription>|null
     */
    public function getFeeDescription(): ?array
    {
        return $this->feeDescription;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\FeeDescription> $feeDescription
     * @return self
     */
    public function setFeeDescription(array $feeDescription): self
    {
        $this->feeDescription = $feeDescription;

        return $this;
    }

    /**
     * @return self
     */
    public function clearFeeDescription(): self
    {
        $this->feeDescription = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\FeeDescription $feeDescription
     * @return self
     */
    public function addToFeeDescription(FeeDescription $feeDescription): self
    {
        $this->feeDescription[] = $feeDescription;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\FeeDescription
     */
    public function addToFeeDescriptionWithCreate(): FeeDescription
    {
        $this->addTofeeDescription($feeDescription = new FeeDescription());

        return $feeDescription;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\FeeDescription $feeDescription
     * @return self
     */
    public function addOnceToFeeDescription(FeeDescription $feeDescription): self
    {
        if (!is_array($this->feeDescription)) {
            $this->feeDescription = [];
        }

        $this->feeDescription[0] = $feeDescription;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\FeeDescription
     */
    public function addOnceToFeeDescriptionWithCreate(): FeeDescription
    {
        if (!is_array($this->feeDescription)) {
            $this->feeDescription = [];
        }

        if ($this->feeDescription === []) {
            $this->addOnceTofeeDescription(new FeeDescription());
        }

        return $this->feeDescription[0];
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getRequestedDeliveryDate(): ?\DateTimeInterface
    {
        return $this->requestedDeliveryDate;
    }

    /**
     * @param \DateTimeInterface $requestedDeliveryDate
     * @return self
     */
    public function setRequestedDeliveryDate(\DateTimeInterface $requestedDeliveryDate): self
    {
        $this->requestedDeliveryDate = $requestedDeliveryDate;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\EstimatedOverallContractQuantity|null
     */
    public function getEstimatedOverallContractQuantity(): ?EstimatedOverallContractQuantity
    {
        return $this->estimatedOverallContractQuantity;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\EstimatedOverallContractQuantity
     */
    public function getEstimatedOverallContractQuantityWithCreate(): EstimatedOverallContractQuantity
    {
        $this->estimatedOverallContractQuantity = is_null($this->estimatedOverallContractQuantity) ? new EstimatedOverallContractQuantity() : $this->estimatedOverallContractQuantity;

        return $this->estimatedOverallContractQuantity;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\EstimatedOverallContractQuantity $estimatedOverallContractQuantity
     * @return self
     */
    public function setEstimatedOverallContractQuantity(
        EstimatedOverallContractQuantity $estimatedOverallContractQuantity,
    ): self {
        $this->estimatedOverallContractQuantity = $estimatedOverallContractQuantity;

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
     * @return \horstoeko\invoicesuite\models\ubl\cac\RequestedTenderTotal|null
     */
    public function getRequestedTenderTotal(): ?RequestedTenderTotal
    {
        return $this->requestedTenderTotal;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\RequestedTenderTotal
     */
    public function getRequestedTenderTotalWithCreate(): RequestedTenderTotal
    {
        $this->requestedTenderTotal = is_null($this->requestedTenderTotal) ? new RequestedTenderTotal() : $this->requestedTenderTotal;

        return $this->requestedTenderTotal;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\RequestedTenderTotal $requestedTenderTotal
     * @return self
     */
    public function setRequestedTenderTotal(RequestedTenderTotal $requestedTenderTotal): self
    {
        $this->requestedTenderTotal = $requestedTenderTotal;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\MainCommodityClassification|null
     */
    public function getMainCommodityClassification(): ?MainCommodityClassification
    {
        return $this->mainCommodityClassification;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\MainCommodityClassification
     */
    public function getMainCommodityClassificationWithCreate(): MainCommodityClassification
    {
        $this->mainCommodityClassification = is_null($this->mainCommodityClassification) ? new MainCommodityClassification() : $this->mainCommodityClassification;

        return $this->mainCommodityClassification;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\MainCommodityClassification $mainCommodityClassification
     * @return self
     */
    public function setMainCommodityClassification(MainCommodityClassification $mainCommodityClassification): self
    {
        $this->mainCommodityClassification = $mainCommodityClassification;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\AdditionalCommodityClassification>|null
     */
    public function getAdditionalCommodityClassification(): ?array
    {
        return $this->additionalCommodityClassification;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\AdditionalCommodityClassification> $additionalCommodityClassification
     * @return self
     */
    public function setAdditionalCommodityClassification(array $additionalCommodityClassification): self
    {
        $this->additionalCommodityClassification = $additionalCommodityClassification;

        return $this;
    }

    /**
     * @return self
     */
    public function clearAdditionalCommodityClassification(): self
    {
        $this->additionalCommodityClassification = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\AdditionalCommodityClassification $additionalCommodityClassification
     * @return self
     */
    public function addToAdditionalCommodityClassification(
        AdditionalCommodityClassification $additionalCommodityClassification,
    ): self {
        $this->additionalCommodityClassification[] = $additionalCommodityClassification;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\AdditionalCommodityClassification
     */
    public function addToAdditionalCommodityClassificationWithCreate(): AdditionalCommodityClassification
    {
        $this->addToadditionalCommodityClassification($additionalCommodityClassification = new AdditionalCommodityClassification());

        return $additionalCommodityClassification;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\AdditionalCommodityClassification $additionalCommodityClassification
     * @return self
     */
    public function addOnceToAdditionalCommodityClassification(
        AdditionalCommodityClassification $additionalCommodityClassification,
    ): self {
        if (!is_array($this->additionalCommodityClassification)) {
            $this->additionalCommodityClassification = [];
        }

        $this->additionalCommodityClassification[0] = $additionalCommodityClassification;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\AdditionalCommodityClassification
     */
    public function addOnceToAdditionalCommodityClassificationWithCreate(): AdditionalCommodityClassification
    {
        if (!is_array($this->additionalCommodityClassification)) {
            $this->additionalCommodityClassification = [];
        }

        if ($this->additionalCommodityClassification === []) {
            $this->addOnceToadditionalCommodityClassification(new AdditionalCommodityClassification());
        }

        return $this->additionalCommodityClassification[0];
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\RealizedLocation>|null
     */
    public function getRealizedLocation(): ?array
    {
        return $this->realizedLocation;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\RealizedLocation> $realizedLocation
     * @return self
     */
    public function setRealizedLocation(array $realizedLocation): self
    {
        $this->realizedLocation = $realizedLocation;

        return $this;
    }

    /**
     * @return self
     */
    public function clearRealizedLocation(): self
    {
        $this->realizedLocation = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\RealizedLocation $realizedLocation
     * @return self
     */
    public function addToRealizedLocation(RealizedLocation $realizedLocation): self
    {
        $this->realizedLocation[] = $realizedLocation;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\RealizedLocation
     */
    public function addToRealizedLocationWithCreate(): RealizedLocation
    {
        $this->addTorealizedLocation($realizedLocation = new RealizedLocation());

        return $realizedLocation;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\RealizedLocation $realizedLocation
     * @return self
     */
    public function addOnceToRealizedLocation(RealizedLocation $realizedLocation): self
    {
        if (!is_array($this->realizedLocation)) {
            $this->realizedLocation = [];
        }

        $this->realizedLocation[0] = $realizedLocation;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\RealizedLocation
     */
    public function addOnceToRealizedLocationWithCreate(): RealizedLocation
    {
        if (!is_array($this->realizedLocation)) {
            $this->realizedLocation = [];
        }

        if ($this->realizedLocation === []) {
            $this->addOnceTorealizedLocation(new RealizedLocation());
        }

        return $this->realizedLocation[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\PlannedPeriod|null
     */
    public function getPlannedPeriod(): ?PlannedPeriod
    {
        return $this->plannedPeriod;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\PlannedPeriod
     */
    public function getPlannedPeriodWithCreate(): PlannedPeriod
    {
        $this->plannedPeriod = is_null($this->plannedPeriod) ? new PlannedPeriod() : $this->plannedPeriod;

        return $this->plannedPeriod;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\PlannedPeriod $plannedPeriod
     * @return self
     */
    public function setPlannedPeriod(PlannedPeriod $plannedPeriod): self
    {
        $this->plannedPeriod = $plannedPeriod;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ContractExtension|null
     */
    public function getContractExtension(): ?ContractExtension
    {
        return $this->contractExtension;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ContractExtension
     */
    public function getContractExtensionWithCreate(): ContractExtension
    {
        $this->contractExtension = is_null($this->contractExtension) ? new ContractExtension() : $this->contractExtension;

        return $this->contractExtension;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\ContractExtension $contractExtension
     * @return self
     */
    public function setContractExtension(ContractExtension $contractExtension): self
    {
        $this->contractExtension = $contractExtension;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\RequestForTenderLine>|null
     */
    public function getRequestForTenderLine(): ?array
    {
        return $this->requestForTenderLine;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\RequestForTenderLine> $requestForTenderLine
     * @return self
     */
    public function setRequestForTenderLine(array $requestForTenderLine): self
    {
        $this->requestForTenderLine = $requestForTenderLine;

        return $this;
    }

    /**
     * @return self
     */
    public function clearRequestForTenderLine(): self
    {
        $this->requestForTenderLine = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\RequestForTenderLine $requestForTenderLine
     * @return self
     */
    public function addToRequestForTenderLine(RequestForTenderLine $requestForTenderLine): self
    {
        $this->requestForTenderLine[] = $requestForTenderLine;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\RequestForTenderLine
     */
    public function addToRequestForTenderLineWithCreate(): RequestForTenderLine
    {
        $this->addTorequestForTenderLine($requestForTenderLine = new RequestForTenderLine());

        return $requestForTenderLine;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\RequestForTenderLine $requestForTenderLine
     * @return self
     */
    public function addOnceToRequestForTenderLine(RequestForTenderLine $requestForTenderLine): self
    {
        if (!is_array($this->requestForTenderLine)) {
            $this->requestForTenderLine = [];
        }

        $this->requestForTenderLine[0] = $requestForTenderLine;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\RequestForTenderLine
     */
    public function addOnceToRequestForTenderLineWithCreate(): RequestForTenderLine
    {
        if (!is_array($this->requestForTenderLine)) {
            $this->requestForTenderLine = [];
        }

        if ($this->requestForTenderLine === []) {
            $this->addOnceTorequestForTenderLine(new RequestForTenderLine());
        }

        return $this->requestForTenderLine[0];
    }
}
