<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;

class PowerOfAttorneyType
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
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("IssueDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getIssueDate", setter="setIssueDate")
     */
    private $issueDate;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("IssueTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getIssueTime", setter="setIssueTime")
     */
    private $issueTime;

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
     * @var NotaryParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\NotaryParty")
     * @JMS\Expose
     * @JMS\SerializedName("NotaryParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getNotaryParty", setter="setNotaryParty")
     */
    private $notaryParty;

    /**
     * @var AgentParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\AgentParty")
     * @JMS\Expose
     * @JMS\SerializedName("AgentParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAgentParty", setter="setAgentParty")
     */
    private $agentParty;

    /**
     * @var array<WitnessParty>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\WitnessParty>")
     * @JMS\Expose
     * @JMS\SerializedName("WitnessParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="WitnessParty", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getWitnessParty", setter="setWitnessParty")
     */
    private $witnessParty;

    /**
     * @var array<MandateDocumentReference>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\MandateDocumentReference>")
     * @JMS\Expose
     * @JMS\SerializedName("MandateDocumentReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="MandateDocumentReference", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getMandateDocumentReference", setter="setMandateDocumentReference")
     */
    private $mandateDocumentReference;

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
     * @return DateTimeInterface|null
     */
    public function getIssueDate(): ?DateTimeInterface
    {
        return $this->issueDate;
    }

    /**
     * @param DateTimeInterface|null $issueDate
     * @return self
     */
    public function setIssueDate(?DateTimeInterface $issueDate = null): self
    {
        $this->issueDate = $issueDate;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetIssueDate(): self
    {
        $this->issueDate = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getIssueTime(): ?DateTimeInterface
    {
        return $this->issueTime;
    }

    /**
     * @param DateTimeInterface|null $issueTime
     * @return self
     */
    public function setIssueTime(?DateTimeInterface $issueTime = null): self
    {
        $this->issueTime = $issueTime;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetIssueTime(): self
    {
        $this->issueTime = null;

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
     * @return NotaryParty|null
     */
    public function getNotaryParty(): ?NotaryParty
    {
        return $this->notaryParty;
    }

    /**
     * @return NotaryParty
     */
    public function getNotaryPartyWithCreate(): NotaryParty
    {
        $this->notaryParty = is_null($this->notaryParty) ? new NotaryParty() : $this->notaryParty;

        return $this->notaryParty;
    }

    /**
     * @param NotaryParty|null $notaryParty
     * @return self
     */
    public function setNotaryParty(?NotaryParty $notaryParty = null): self
    {
        $this->notaryParty = $notaryParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetNotaryParty(): self
    {
        $this->notaryParty = null;

        return $this;
    }

    /**
     * @return AgentParty|null
     */
    public function getAgentParty(): ?AgentParty
    {
        return $this->agentParty;
    }

    /**
     * @return AgentParty
     */
    public function getAgentPartyWithCreate(): AgentParty
    {
        $this->agentParty = is_null($this->agentParty) ? new AgentParty() : $this->agentParty;

        return $this->agentParty;
    }

    /**
     * @param AgentParty|null $agentParty
     * @return self
     */
    public function setAgentParty(?AgentParty $agentParty = null): self
    {
        $this->agentParty = $agentParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAgentParty(): self
    {
        $this->agentParty = null;

        return $this;
    }

    /**
     * @return array<WitnessParty>|null
     */
    public function getWitnessParty(): ?array
    {
        return $this->witnessParty;
    }

    /**
     * @param array<WitnessParty>|null $witnessParty
     * @return self
     */
    public function setWitnessParty(?array $witnessParty = null): self
    {
        $this->witnessParty = $witnessParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetWitnessParty(): self
    {
        $this->witnessParty = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearWitnessParty(): self
    {
        $this->witnessParty = [];

        return $this;
    }

    /**
     * @return WitnessParty|null
     */
    public function firstWitnessParty(): ?WitnessParty
    {
        $witnessParty = $this->witnessParty ?? [];
        $witnessParty = reset($witnessParty);

        if ($witnessParty === false) {
            return null;
        }

        return $witnessParty;
    }

    /**
     * @return WitnessParty|null
     */
    public function lastWitnessParty(): ?WitnessParty
    {
        $witnessParty = $this->witnessParty ?? [];
        $witnessParty = end($witnessParty);

        if ($witnessParty === false) {
            return null;
        }

        return $witnessParty;
    }

    /**
     * @param WitnessParty $witnessParty
     * @return self
     */
    public function addToWitnessParty(WitnessParty $witnessParty): self
    {
        $this->witnessParty[] = $witnessParty;

        return $this;
    }

    /**
     * @return WitnessParty
     */
    public function addToWitnessPartyWithCreate(): WitnessParty
    {
        $this->addTowitnessParty($witnessParty = new WitnessParty());

        return $witnessParty;
    }

    /**
     * @param WitnessParty $witnessParty
     * @return self
     */
    public function addOnceToWitnessParty(WitnessParty $witnessParty): self
    {
        if (!is_array($this->witnessParty)) {
            $this->witnessParty = [];
        }

        $this->witnessParty[0] = $witnessParty;

        return $this;
    }

    /**
     * @return WitnessParty
     */
    public function addOnceToWitnessPartyWithCreate(): WitnessParty
    {
        if (!is_array($this->witnessParty)) {
            $this->witnessParty = [];
        }

        if ($this->witnessParty === []) {
            $this->addOnceTowitnessParty(new WitnessParty());
        }

        return $this->witnessParty[0];
    }

    /**
     * @return array<MandateDocumentReference>|null
     */
    public function getMandateDocumentReference(): ?array
    {
        return $this->mandateDocumentReference;
    }

    /**
     * @param array<MandateDocumentReference>|null $mandateDocumentReference
     * @return self
     */
    public function setMandateDocumentReference(?array $mandateDocumentReference = null): self
    {
        $this->mandateDocumentReference = $mandateDocumentReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMandateDocumentReference(): self
    {
        $this->mandateDocumentReference = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearMandateDocumentReference(): self
    {
        $this->mandateDocumentReference = [];

        return $this;
    }

    /**
     * @return MandateDocumentReference|null
     */
    public function firstMandateDocumentReference(): ?MandateDocumentReference
    {
        $mandateDocumentReference = $this->mandateDocumentReference ?? [];
        $mandateDocumentReference = reset($mandateDocumentReference);

        if ($mandateDocumentReference === false) {
            return null;
        }

        return $mandateDocumentReference;
    }

    /**
     * @return MandateDocumentReference|null
     */
    public function lastMandateDocumentReference(): ?MandateDocumentReference
    {
        $mandateDocumentReference = $this->mandateDocumentReference ?? [];
        $mandateDocumentReference = end($mandateDocumentReference);

        if ($mandateDocumentReference === false) {
            return null;
        }

        return $mandateDocumentReference;
    }

    /**
     * @param MandateDocumentReference $mandateDocumentReference
     * @return self
     */
    public function addToMandateDocumentReference(MandateDocumentReference $mandateDocumentReference): self
    {
        $this->mandateDocumentReference[] = $mandateDocumentReference;

        return $this;
    }

    /**
     * @return MandateDocumentReference
     */
    public function addToMandateDocumentReferenceWithCreate(): MandateDocumentReference
    {
        $this->addTomandateDocumentReference($mandateDocumentReference = new MandateDocumentReference());

        return $mandateDocumentReference;
    }

    /**
     * @param MandateDocumentReference $mandateDocumentReference
     * @return self
     */
    public function addOnceToMandateDocumentReference(MandateDocumentReference $mandateDocumentReference): self
    {
        if (!is_array($this->mandateDocumentReference)) {
            $this->mandateDocumentReference = [];
        }

        $this->mandateDocumentReference[0] = $mandateDocumentReference;

        return $this;
    }

    /**
     * @return MandateDocumentReference
     */
    public function addOnceToMandateDocumentReferenceWithCreate(): MandateDocumentReference
    {
        if (!is_array($this->mandateDocumentReference)) {
            $this->mandateDocumentReference = [];
        }

        if ($this->mandateDocumentReference === []) {
            $this->addOnceTomandateDocumentReference(new MandateDocumentReference());
        }

        return $this->mandateDocumentReference[0];
    }
}
