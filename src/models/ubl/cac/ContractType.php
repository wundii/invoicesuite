<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\ubl\cbc\ContractType as ContractType1;
use horstoeko\invoicesuite\models\ubl\cbc\ContractTypeCode;
use horstoeko\invoicesuite\models\ubl\cbc\Description;
use horstoeko\invoicesuite\models\ubl\cbc\ID;
use horstoeko\invoicesuite\models\ubl\cbc\Note;
use horstoeko\invoicesuite\models\ubl\cbc\VersionID;

class ContractType
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
     * @var \DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("IssueDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getIssueDate", setter="setIssueDate")
     */
    private $issueDate;

    /**
     * @var \DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("IssueTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getIssueTime", setter="setIssueTime")
     */
    private $issueTime;

    /**
     * @var \DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("NominationDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getNominationDate", setter="setNominationDate")
     */
    private $nominationDate;

    /**
     * @var \DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("NominationTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getNominationTime", setter="setNominationTime")
     */
    private $nominationTime;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ContractTypeCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ContractTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("ContractTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getContractTypeCode", setter="setContractTypeCode")
     */
    private $contractTypeCode;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ContractType
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ContractType")
     * @JMS\Expose
     * @JMS\SerializedName("ContractType")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getContractType", setter="setContractType")
     */
    private $contractType;

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
     * @var \horstoeko\invoicesuite\models\ubl\cbc\VersionID
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\VersionID")
     * @JMS\Expose
     * @JMS\SerializedName("VersionID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getVersionID", setter="setVersionID")
     */
    private $versionID;

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
     * @var \horstoeko\invoicesuite\models\ubl\cac\ValidityPeriod
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\ValidityPeriod")
     * @JMS\Expose
     * @JMS\SerializedName("ValidityPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getValidityPeriod", setter="setValidityPeriod")
     */
    private $validityPeriod;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\ContractDocumentReference>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\ContractDocumentReference>")
     * @JMS\Expose
     * @JMS\SerializedName("ContractDocumentReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ContractDocumentReference", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getContractDocumentReference", setter="setContractDocumentReference")
     */
    private $contractDocumentReference;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\NominationPeriod
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\NominationPeriod")
     * @JMS\Expose
     * @JMS\SerializedName("NominationPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getNominationPeriod", setter="setNominationPeriod")
     */
    private $nominationPeriod;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\ContractualDelivery
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\ContractualDelivery")
     * @JMS\Expose
     * @JMS\SerializedName("ContractualDelivery")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getContractualDelivery", setter="setContractualDelivery")
     */
    private $contractualDelivery;

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
     * @return \DateTime|null
     */
    public function getIssueDate(): ?\DateTime
    {
        return $this->issueDate;
    }

    /**
     * @param \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(\DateTime $issueDate): self
    {
        $this->issueDate = $issueDate;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getIssueTime(): ?\DateTime
    {
        return $this->issueTime;
    }

    /**
     * @param \DateTime $issueTime
     * @return self
     */
    public function setIssueTime(\DateTime $issueTime): self
    {
        $this->issueTime = $issueTime;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getNominationDate(): ?\DateTime
    {
        return $this->nominationDate;
    }

    /**
     * @param \DateTime $nominationDate
     * @return self
     */
    public function setNominationDate(\DateTime $nominationDate): self
    {
        $this->nominationDate = $nominationDate;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getNominationTime(): ?\DateTime
    {
        return $this->nominationTime;
    }

    /**
     * @param \DateTime $nominationTime
     * @return self
     */
    public function setNominationTime(\DateTime $nominationTime): self
    {
        $this->nominationTime = $nominationTime;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ContractTypeCode|null
     */
    public function getContractTypeCode(): ?ContractTypeCode
    {
        return $this->contractTypeCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ContractTypeCode
     */
    public function getContractTypeCodeWithCreate(): ContractTypeCode
    {
        $this->contractTypeCode = is_null($this->contractTypeCode) ? new ContractTypeCode() : $this->contractTypeCode;

        return $this->contractTypeCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ContractTypeCode $contractTypeCode
     * @return self
     */
    public function setContractTypeCode(ContractTypeCode $contractTypeCode): self
    {
        $this->contractTypeCode = $contractTypeCode;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ContractType|null
     */
    public function getContractType(): ?ContractType1
    {
        return $this->contractType;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ContractType
     */
    public function getContractTypeWithCreate(): ContractType1
    {
        $this->contractType = is_null($this->contractType) ? new ContractType() : $this->contractType;

        return $this->contractType;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ContractType $contractType
     * @return self
     */
    public function setContractType(ContractType1 $contractType): self
    {
        $this->contractType = $contractType;

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
     * @return \horstoeko\invoicesuite\models\ubl\cbc\VersionID|null
     */
    public function getVersionID(): ?VersionID
    {
        return $this->versionID;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\VersionID
     */
    public function getVersionIDWithCreate(): VersionID
    {
        $this->versionID = is_null($this->versionID) ? new VersionID() : $this->versionID;

        return $this->versionID;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\VersionID $versionID
     * @return self
     */
    public function setVersionID(VersionID $versionID): self
    {
        $this->versionID = $versionID;

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
     * @return \horstoeko\invoicesuite\models\ubl\cac\ValidityPeriod|null
     */
    public function getValidityPeriod(): ?ValidityPeriod
    {
        return $this->validityPeriod;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ValidityPeriod
     */
    public function getValidityPeriodWithCreate(): ValidityPeriod
    {
        $this->validityPeriod = is_null($this->validityPeriod) ? new ValidityPeriod() : $this->validityPeriod;

        return $this->validityPeriod;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\ValidityPeriod $validityPeriod
     * @return self
     */
    public function setValidityPeriod(ValidityPeriod $validityPeriod): self
    {
        $this->validityPeriod = $validityPeriod;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\ContractDocumentReference>|null
     */
    public function getContractDocumentReference(): ?array
    {
        return $this->contractDocumentReference;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\ContractDocumentReference> $contractDocumentReference
     * @return self
     */
    public function setContractDocumentReference(array $contractDocumentReference): self
    {
        $this->contractDocumentReference = $contractDocumentReference;

        return $this;
    }

    /**
     * @return self
     */
    public function clearContractDocumentReference(): self
    {
        $this->contractDocumentReference = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\ContractDocumentReference $contractDocumentReference
     * @return self
     */
    public function addToContractDocumentReference(ContractDocumentReference $contractDocumentReference): self
    {
        $this->contractDocumentReference[] = $contractDocumentReference;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ContractDocumentReference
     */
    public function addToContractDocumentReferenceWithCreate(): ContractDocumentReference
    {
        $this->addTocontractDocumentReference($contractDocumentReference = new ContractDocumentReference());

        return $contractDocumentReference;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\ContractDocumentReference $contractDocumentReference
     * @return self
     */
    public function addOnceToContractDocumentReference(ContractDocumentReference $contractDocumentReference): self
    {
        if (!is_array($this->contractDocumentReference)) {
            $this->contractDocumentReference = [];
        }

        $this->contractDocumentReference[0] = $contractDocumentReference;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ContractDocumentReference
     */
    public function addOnceToContractDocumentReferenceWithCreate(): ContractDocumentReference
    {
        if (!is_array($this->contractDocumentReference)) {
            $this->contractDocumentReference = [];
        }

        if ($this->contractDocumentReference === []) {
            $this->addOnceTocontractDocumentReference(new ContractDocumentReference());
        }

        return $this->contractDocumentReference[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\NominationPeriod|null
     */
    public function getNominationPeriod(): ?NominationPeriod
    {
        return $this->nominationPeriod;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\NominationPeriod
     */
    public function getNominationPeriodWithCreate(): NominationPeriod
    {
        $this->nominationPeriod = is_null($this->nominationPeriod) ? new NominationPeriod() : $this->nominationPeriod;

        return $this->nominationPeriod;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\NominationPeriod $nominationPeriod
     * @return self
     */
    public function setNominationPeriod(NominationPeriod $nominationPeriod): self
    {
        $this->nominationPeriod = $nominationPeriod;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ContractualDelivery|null
     */
    public function getContractualDelivery(): ?ContractualDelivery
    {
        return $this->contractualDelivery;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ContractualDelivery
     */
    public function getContractualDeliveryWithCreate(): ContractualDelivery
    {
        $this->contractualDelivery = is_null($this->contractualDelivery) ? new ContractualDelivery() : $this->contractualDelivery;

        return $this->contractualDelivery;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\ContractualDelivery $contractualDelivery
     * @return self
     */
    public function setContractualDelivery(ContractualDelivery $contractualDelivery): self
    {
        $this->contractualDelivery = $contractualDelivery;

        return $this;
    }
}
