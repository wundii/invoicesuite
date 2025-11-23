<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\AnnualAverageAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PartyCapacityAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TotalTaskAmount;

class CompletedTaskType
{
    use HandlesObjectFlags;

    /**
     * @var AnnualAverageAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\AnnualAverageAmount")
     * @JMS\Expose
     * @JMS\SerializedName("AnnualAverageAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAnnualAverageAmount", setter="setAnnualAverageAmount")
     */
    private $annualAverageAmount;

    /**
     * @var TotalTaskAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TotalTaskAmount")
     * @JMS\Expose
     * @JMS\SerializedName("TotalTaskAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTotalTaskAmount", setter="setTotalTaskAmount")
     */
    private $totalTaskAmount;

    /**
     * @var PartyCapacityAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PartyCapacityAmount")
     * @JMS\Expose
     * @JMS\SerializedName("PartyCapacityAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPartyCapacityAmount", setter="setPartyCapacityAmount")
     */
    private $partyCapacityAmount;

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
     * @var array<EvidenceSupplied>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\EvidenceSupplied>")
     * @JMS\Expose
     * @JMS\SerializedName("EvidenceSupplied")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="EvidenceSupplied", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getEvidenceSupplied", setter="setEvidenceSupplied")
     */
    private $evidenceSupplied;

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
     * @var RecipientCustomerParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\RecipientCustomerParty")
     * @JMS\Expose
     * @JMS\SerializedName("RecipientCustomerParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRecipientCustomerParty", setter="setRecipientCustomerParty")
     */
    private $recipientCustomerParty;

    /**
     * @return AnnualAverageAmount|null
     */
    public function getAnnualAverageAmount(): ?AnnualAverageAmount
    {
        return $this->annualAverageAmount;
    }

    /**
     * @return AnnualAverageAmount
     */
    public function getAnnualAverageAmountWithCreate(): AnnualAverageAmount
    {
        $this->annualAverageAmount = is_null($this->annualAverageAmount) ? new AnnualAverageAmount() : $this->annualAverageAmount;

        return $this->annualAverageAmount;
    }

    /**
     * @param AnnualAverageAmount|null $annualAverageAmount
     * @return self
     */
    public function setAnnualAverageAmount(?AnnualAverageAmount $annualAverageAmount = null): self
    {
        $this->annualAverageAmount = $annualAverageAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAnnualAverageAmount(): self
    {
        $this->annualAverageAmount = null;

        return $this;
    }

    /**
     * @return TotalTaskAmount|null
     */
    public function getTotalTaskAmount(): ?TotalTaskAmount
    {
        return $this->totalTaskAmount;
    }

    /**
     * @return TotalTaskAmount
     */
    public function getTotalTaskAmountWithCreate(): TotalTaskAmount
    {
        $this->totalTaskAmount = is_null($this->totalTaskAmount) ? new TotalTaskAmount() : $this->totalTaskAmount;

        return $this->totalTaskAmount;
    }

    /**
     * @param TotalTaskAmount|null $totalTaskAmount
     * @return self
     */
    public function setTotalTaskAmount(?TotalTaskAmount $totalTaskAmount = null): self
    {
        $this->totalTaskAmount = $totalTaskAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTotalTaskAmount(): self
    {
        $this->totalTaskAmount = null;

        return $this;
    }

    /**
     * @return PartyCapacityAmount|null
     */
    public function getPartyCapacityAmount(): ?PartyCapacityAmount
    {
        return $this->partyCapacityAmount;
    }

    /**
     * @return PartyCapacityAmount
     */
    public function getPartyCapacityAmountWithCreate(): PartyCapacityAmount
    {
        $this->partyCapacityAmount = is_null($this->partyCapacityAmount) ? new PartyCapacityAmount() : $this->partyCapacityAmount;

        return $this->partyCapacityAmount;
    }

    /**
     * @param PartyCapacityAmount|null $partyCapacityAmount
     * @return self
     */
    public function setPartyCapacityAmount(?PartyCapacityAmount $partyCapacityAmount = null): self
    {
        $this->partyCapacityAmount = $partyCapacityAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPartyCapacityAmount(): self
    {
        $this->partyCapacityAmount = null;

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
     * @return array<EvidenceSupplied>|null
     */
    public function getEvidenceSupplied(): ?array
    {
        return $this->evidenceSupplied;
    }

    /**
     * @param array<EvidenceSupplied>|null $evidenceSupplied
     * @return self
     */
    public function setEvidenceSupplied(?array $evidenceSupplied = null): self
    {
        $this->evidenceSupplied = $evidenceSupplied;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetEvidenceSupplied(): self
    {
        $this->evidenceSupplied = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearEvidenceSupplied(): self
    {
        $this->evidenceSupplied = [];

        return $this;
    }

    /**
     * @return EvidenceSupplied|null
     */
    public function firstEvidenceSupplied(): ?EvidenceSupplied
    {
        $evidenceSupplied = $this->evidenceSupplied ?? [];
        $evidenceSupplied = reset($evidenceSupplied);

        if ($evidenceSupplied === false) {
            return null;
        }

        return $evidenceSupplied;
    }

    /**
     * @return EvidenceSupplied|null
     */
    public function lastEvidenceSupplied(): ?EvidenceSupplied
    {
        $evidenceSupplied = $this->evidenceSupplied ?? [];
        $evidenceSupplied = end($evidenceSupplied);

        if ($evidenceSupplied === false) {
            return null;
        }

        return $evidenceSupplied;
    }

    /**
     * @param EvidenceSupplied $evidenceSupplied
     * @return self
     */
    public function addToEvidenceSupplied(EvidenceSupplied $evidenceSupplied): self
    {
        $this->evidenceSupplied[] = $evidenceSupplied;

        return $this;
    }

    /**
     * @return EvidenceSupplied
     */
    public function addToEvidenceSuppliedWithCreate(): EvidenceSupplied
    {
        $this->addToevidenceSupplied($evidenceSupplied = new EvidenceSupplied());

        return $evidenceSupplied;
    }

    /**
     * @param EvidenceSupplied $evidenceSupplied
     * @return self
     */
    public function addOnceToEvidenceSupplied(EvidenceSupplied $evidenceSupplied): self
    {
        if (!is_array($this->evidenceSupplied)) {
            $this->evidenceSupplied = [];
        }

        $this->evidenceSupplied[0] = $evidenceSupplied;

        return $this;
    }

    /**
     * @return EvidenceSupplied
     */
    public function addOnceToEvidenceSuppliedWithCreate(): EvidenceSupplied
    {
        if (!is_array($this->evidenceSupplied)) {
            $this->evidenceSupplied = [];
        }

        if ($this->evidenceSupplied === []) {
            $this->addOnceToevidenceSupplied(new EvidenceSupplied());
        }

        return $this->evidenceSupplied[0];
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
     * @return RecipientCustomerParty|null
     */
    public function getRecipientCustomerParty(): ?RecipientCustomerParty
    {
        return $this->recipientCustomerParty;
    }

    /**
     * @return RecipientCustomerParty
     */
    public function getRecipientCustomerPartyWithCreate(): RecipientCustomerParty
    {
        $this->recipientCustomerParty = is_null($this->recipientCustomerParty) ? new RecipientCustomerParty() : $this->recipientCustomerParty;

        return $this->recipientCustomerParty;
    }

    /**
     * @param RecipientCustomerParty|null $recipientCustomerParty
     * @return self
     */
    public function setRecipientCustomerParty(?RecipientCustomerParty $recipientCustomerParty = null): self
    {
        $this->recipientCustomerParty = $recipientCustomerParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetRecipientCustomerParty(): self
    {
        $this->recipientCustomerParty = null;

        return $this;
    }
}
