<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\ubl\cbc\Description;

class SupplierConsumptionType
{
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
     * @var \horstoeko\invoicesuite\models\ubl\cac\UtilitySupplierParty
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\UtilitySupplierParty")
     * @JMS\Expose
     * @JMS\SerializedName("UtilitySupplierParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getUtilitySupplierParty", setter="setUtilitySupplierParty")
     */
    private $utilitySupplierParty;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\UtilityCustomerParty
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\UtilityCustomerParty")
     * @JMS\Expose
     * @JMS\SerializedName("UtilityCustomerParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getUtilityCustomerParty", setter="setUtilityCustomerParty")
     */
    private $utilityCustomerParty;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\Consumption
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\Consumption")
     * @JMS\Expose
     * @JMS\SerializedName("Consumption")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getConsumption", setter="setConsumption")
     */
    private $consumption;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\Contract
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\Contract")
     * @JMS\Expose
     * @JMS\SerializedName("Contract")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getContract", setter="setContract")
     */
    private $contract;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\ConsumptionLine>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\ConsumptionLine>")
     * @JMS\Expose
     * @JMS\SerializedName("ConsumptionLine")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ConsumptionLine", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getConsumptionLine", setter="setConsumptionLine")
     */
    private $consumptionLine;

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
        $this->description[0] = $description;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Description
     */
    public function addOnceToDescriptionWithCreate(): Description
    {
        if ($this->description === []) {
            $this->addOnceTodescription(new Description());
        }

        return $this->description[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\UtilitySupplierParty|null
     */
    public function getUtilitySupplierParty(): ?UtilitySupplierParty
    {
        return $this->utilitySupplierParty;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\UtilitySupplierParty
     */
    public function getUtilitySupplierPartyWithCreate(): UtilitySupplierParty
    {
        $this->utilitySupplierParty = is_null($this->utilitySupplierParty) ? new UtilitySupplierParty() : $this->utilitySupplierParty;

        return $this->utilitySupplierParty;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\UtilitySupplierParty $utilitySupplierParty
     * @return self
     */
    public function setUtilitySupplierParty(UtilitySupplierParty $utilitySupplierParty): self
    {
        $this->utilitySupplierParty = $utilitySupplierParty;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\UtilityCustomerParty|null
     */
    public function getUtilityCustomerParty(): ?UtilityCustomerParty
    {
        return $this->utilityCustomerParty;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\UtilityCustomerParty
     */
    public function getUtilityCustomerPartyWithCreate(): UtilityCustomerParty
    {
        $this->utilityCustomerParty = is_null($this->utilityCustomerParty) ? new UtilityCustomerParty() : $this->utilityCustomerParty;

        return $this->utilityCustomerParty;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\UtilityCustomerParty $utilityCustomerParty
     * @return self
     */
    public function setUtilityCustomerParty(UtilityCustomerParty $utilityCustomerParty): self
    {
        $this->utilityCustomerParty = $utilityCustomerParty;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Consumption|null
     */
    public function getConsumption(): ?Consumption
    {
        return $this->consumption;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Consumption
     */
    public function getConsumptionWithCreate(): Consumption
    {
        $this->consumption = is_null($this->consumption) ? new Consumption() : $this->consumption;

        return $this->consumption;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\Consumption $consumption
     * @return self
     */
    public function setConsumption(Consumption $consumption): self
    {
        $this->consumption = $consumption;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Contract|null
     */
    public function getContract(): ?Contract
    {
        return $this->contract;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Contract
     */
    public function getContractWithCreate(): Contract
    {
        $this->contract = is_null($this->contract) ? new Contract() : $this->contract;

        return $this->contract;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\Contract $contract
     * @return self
     */
    public function setContract(Contract $contract): self
    {
        $this->contract = $contract;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\ConsumptionLine>|null
     */
    public function getConsumptionLine(): ?array
    {
        return $this->consumptionLine;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\ConsumptionLine> $consumptionLine
     * @return self
     */
    public function setConsumptionLine(array $consumptionLine): self
    {
        $this->consumptionLine = $consumptionLine;

        return $this;
    }

    /**
     * @return self
     */
    public function clearConsumptionLine(): self
    {
        $this->consumptionLine = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\ConsumptionLine $consumptionLine
     * @return self
     */
    public function addToConsumptionLine(ConsumptionLine $consumptionLine): self
    {
        $this->consumptionLine[] = $consumptionLine;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ConsumptionLine
     */
    public function addToConsumptionLineWithCreate(): ConsumptionLine
    {
        $this->addToconsumptionLine($consumptionLine = new ConsumptionLine());

        return $consumptionLine;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\ConsumptionLine $consumptionLine
     * @return self
     */
    public function addOnceToConsumptionLine(ConsumptionLine $consumptionLine): self
    {
        $this->consumptionLine[0] = $consumptionLine;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ConsumptionLine
     */
    public function addOnceToConsumptionLineWithCreate(): ConsumptionLine
    {
        if ($this->consumptionLine === []) {
            $this->addOnceToconsumptionLine(new ConsumptionLine());
        }

        return $this->consumptionLine[0];
    }
}
