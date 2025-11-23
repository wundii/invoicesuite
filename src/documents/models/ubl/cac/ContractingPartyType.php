<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cac\ContractingPartyType as ContractingPartyType1;
use horstoeko\invoicesuite\documents\models\ubl\cbc\BuyerProfileURI;

class ContractingPartyType extends ContractingPartyTypeType
{
    use HandlesObjectFlags;

    /**
     * @var BuyerProfileURI|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\BuyerProfileURI")
     * @JMS\Expose
     * @JMS\SerializedName("BuyerProfileURI")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getBuyerProfileURI", setter="setBuyerProfileURI")
     */
    private $buyerProfileURI;

    /**
     * @var array<\horstoeko\invoicesuite\documents\models\ubl\cac\ContractingPartyType>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ContractingPartyType>")
     * @JMS\Expose
     * @JMS\SerializedName("ContractingPartyType")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ContractingPartyType", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getContractingPartyType", setter="setContractingPartyType")
     */
    private $contractingPartyType;

    /**
     * @var array<ContractingActivity>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ContractingActivity>")
     * @JMS\Expose
     * @JMS\SerializedName("ContractingActivity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ContractingActivity", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getContractingActivity", setter="setContractingActivity")
     */
    private $contractingActivity;

    /**
     * @var Party|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Party")
     * @JMS\Expose
     * @JMS\SerializedName("Party")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getParty", setter="setParty")
     */
    private $party;

    /**
     * @return BuyerProfileURI|null
     */
    public function getBuyerProfileURI(): ?BuyerProfileURI
    {
        return $this->buyerProfileURI;
    }

    /**
     * @return BuyerProfileURI
     */
    public function getBuyerProfileURIWithCreate(): BuyerProfileURI
    {
        $this->buyerProfileURI = is_null($this->buyerProfileURI) ? new BuyerProfileURI() : $this->buyerProfileURI;

        return $this->buyerProfileURI;
    }

    /**
     * @param BuyerProfileURI|null $buyerProfileURI
     * @return self
     */
    public function setBuyerProfileURI(?BuyerProfileURI $buyerProfileURI = null): self
    {
        $this->buyerProfileURI = $buyerProfileURI;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetBuyerProfileURI(): self
    {
        $this->buyerProfileURI = null;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\documents\models\ubl\cac\ContractingPartyType>|null
     */
    public function getContractingPartyType(): ?array
    {
        return $this->contractingPartyType;
    }

    /**
     * @param array<\horstoeko\invoicesuite\documents\models\ubl\cac\ContractingPartyType>|null $contractingPartyType
     * @return self
     */
    public function setContractingPartyType(?array $contractingPartyType = null): self
    {
        $this->contractingPartyType = $contractingPartyType;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetContractingPartyType(): self
    {
        $this->contractingPartyType = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearContractingPartyType(): self
    {
        $this->contractingPartyType = [];

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\documents\models\ubl\cac\ContractingPartyType|null
     */
    public function firstContractingPartyType(): ?ContractingPartyType1
    {
        $contractingPartyType = $this->contractingPartyType ?? [];
        $contractingPartyType = reset($contractingPartyType);

        if ($contractingPartyType === false) {
            return null;
        }

        return $contractingPartyType;
    }

    /**
     * @return \horstoeko\invoicesuite\documents\models\ubl\cac\ContractingPartyType|null
     */
    public function lastContractingPartyType(): ?ContractingPartyType1
    {
        $contractingPartyType = $this->contractingPartyType ?? [];
        $contractingPartyType = end($contractingPartyType);

        if ($contractingPartyType === false) {
            return null;
        }

        return $contractingPartyType;
    }

    /**
     * @param \horstoeko\invoicesuite\documents\models\ubl\cac\ContractingPartyType $contractingPartyType
     * @return self
     */
    public function addToContractingPartyType(ContractingPartyType1 $contractingPartyType): self
    {
        $this->contractingPartyType[] = $contractingPartyType;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\documents\models\ubl\cac\ContractingPartyType
     */
    public function addToContractingPartyTypeWithCreate(): ContractingPartyType1
    {
        $this->addTocontractingPartyType($contractingPartyType = new ContractingPartyType1());

        return $contractingPartyType;
    }

    /**
     * @param \horstoeko\invoicesuite\documents\models\ubl\cac\ContractingPartyType $contractingPartyType
     * @return self
     */
    public function addOnceToContractingPartyType(ContractingPartyType1 $contractingPartyType): self
    {
        if (!is_array($this->contractingPartyType)) {
            $this->contractingPartyType = [];
        }

        $this->contractingPartyType[0] = $contractingPartyType;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\documents\models\ubl\cac\ContractingPartyType
     */
    public function addOnceToContractingPartyTypeWithCreate(): ContractingPartyType1
    {
        if (!is_array($this->contractingPartyType)) {
            $this->contractingPartyType = [];
        }

        if ($this->contractingPartyType === []) {
            $this->addOnceTocontractingPartyType(new ContractingPartyType1());
        }

        return $this->contractingPartyType[0];
    }

    /**
     * @return array<ContractingActivity>|null
     */
    public function getContractingActivity(): ?array
    {
        return $this->contractingActivity;
    }

    /**
     * @param array<ContractingActivity>|null $contractingActivity
     * @return self
     */
    public function setContractingActivity(?array $contractingActivity = null): self
    {
        $this->contractingActivity = $contractingActivity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetContractingActivity(): self
    {
        $this->contractingActivity = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearContractingActivity(): self
    {
        $this->contractingActivity = [];

        return $this;
    }

    /**
     * @return ContractingActivity|null
     */
    public function firstContractingActivity(): ?ContractingActivity
    {
        $contractingActivity = $this->contractingActivity ?? [];
        $contractingActivity = reset($contractingActivity);

        if ($contractingActivity === false) {
            return null;
        }

        return $contractingActivity;
    }

    /**
     * @return ContractingActivity|null
     */
    public function lastContractingActivity(): ?ContractingActivity
    {
        $contractingActivity = $this->contractingActivity ?? [];
        $contractingActivity = end($contractingActivity);

        if ($contractingActivity === false) {
            return null;
        }

        return $contractingActivity;
    }

    /**
     * @param ContractingActivity $contractingActivity
     * @return self
     */
    public function addToContractingActivity(ContractingActivity $contractingActivity): self
    {
        $this->contractingActivity[] = $contractingActivity;

        return $this;
    }

    /**
     * @return ContractingActivity
     */
    public function addToContractingActivityWithCreate(): ContractingActivity
    {
        $this->addTocontractingActivity($contractingActivity = new ContractingActivity());

        return $contractingActivity;
    }

    /**
     * @param ContractingActivity $contractingActivity
     * @return self
     */
    public function addOnceToContractingActivity(ContractingActivity $contractingActivity): self
    {
        if (!is_array($this->contractingActivity)) {
            $this->contractingActivity = [];
        }

        $this->contractingActivity[0] = $contractingActivity;

        return $this;
    }

    /**
     * @return ContractingActivity
     */
    public function addOnceToContractingActivityWithCreate(): ContractingActivity
    {
        if (!is_array($this->contractingActivity)) {
            $this->contractingActivity = [];
        }

        if ($this->contractingActivity === []) {
            $this->addOnceTocontractingActivity(new ContractingActivity());
        }

        return $this->contractingActivity[0];
    }

    /**
     * @return Party|null
     */
    public function getParty(): ?Party
    {
        return $this->party;
    }

    /**
     * @return Party
     */
    public function getPartyWithCreate(): Party
    {
        $this->party = is_null($this->party) ? new Party() : $this->party;

        return $this->party;
    }

    /**
     * @param Party|null $party
     * @return self
     */
    public function setParty(?Party $party = null): self
    {
        $this->party = $party;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetParty(): self
    {
        $this->party = null;

        return $this;
    }
}
