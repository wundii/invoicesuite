<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\ubl\cbc\ConsumptionID;
use horstoeko\invoicesuite\models\ubl\cbc\Note;
use horstoeko\invoicesuite\models\ubl\cbc\SpecificationTypeCode;
use horstoeko\invoicesuite\models\ubl\cbc\TotalMeteredQuantity;

class SubscriberConsumptionType
{
    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ConsumptionID
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ConsumptionID")
     * @JMS\Expose
     * @JMS\SerializedName("ConsumptionID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getConsumptionID", setter="setConsumptionID")
     */
    private $consumptionID;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\SpecificationTypeCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\SpecificationTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("SpecificationTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSpecificationTypeCode", setter="setSpecificationTypeCode")
     */
    private $specificationTypeCode;

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
     * @var \horstoeko\invoicesuite\models\ubl\cbc\TotalMeteredQuantity
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\TotalMeteredQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("TotalMeteredQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTotalMeteredQuantity", setter="setTotalMeteredQuantity")
     */
    private $totalMeteredQuantity;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\SubscriberParty
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\SubscriberParty")
     * @JMS\Expose
     * @JMS\SerializedName("SubscriberParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSubscriberParty", setter="setSubscriberParty")
     */
    private $subscriberParty;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\UtilityConsumptionPoint
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\UtilityConsumptionPoint")
     * @JMS\Expose
     * @JMS\SerializedName("UtilityConsumptionPoint")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getUtilityConsumptionPoint", setter="setUtilityConsumptionPoint")
     */
    private $utilityConsumptionPoint;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\OnAccountPayment>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\OnAccountPayment>")
     * @JMS\Expose
     * @JMS\SerializedName("OnAccountPayment")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="OnAccountPayment", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getOnAccountPayment", setter="setOnAccountPayment")
     */
    private $onAccountPayment;

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
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\SupplierConsumption>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\SupplierConsumption>")
     * @JMS\Expose
     * @JMS\SerializedName("SupplierConsumption")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SupplierConsumption", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSupplierConsumption", setter="setSupplierConsumption")
     */
    private $supplierConsumption;

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ConsumptionID|null
     */
    public function getConsumptionID(): ?ConsumptionID
    {
        return $this->consumptionID;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ConsumptionID
     */
    public function getConsumptionIDWithCreate(): ConsumptionID
    {
        $this->consumptionID = is_null($this->consumptionID) ? new ConsumptionID() : $this->consumptionID;

        return $this->consumptionID;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ConsumptionID $consumptionID
     * @return self
     */
    public function setConsumptionID(ConsumptionID $consumptionID): self
    {
        $this->consumptionID = $consumptionID;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\SpecificationTypeCode|null
     */
    public function getSpecificationTypeCode(): ?SpecificationTypeCode
    {
        return $this->specificationTypeCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\SpecificationTypeCode
     */
    public function getSpecificationTypeCodeWithCreate(): SpecificationTypeCode
    {
        $this->specificationTypeCode = is_null($this->specificationTypeCode) ? new SpecificationTypeCode() : $this->specificationTypeCode;

        return $this->specificationTypeCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\SpecificationTypeCode $specificationTypeCode
     * @return self
     */
    public function setSpecificationTypeCode(SpecificationTypeCode $specificationTypeCode): self
    {
        $this->specificationTypeCode = $specificationTypeCode;

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
        $this->note[0] = $note;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Note
     */
    public function addOnceToNoteWithCreate(): Note
    {
        if ($this->note === []) {
            $this->addOnceTonote(new Note());
        }

        return $this->note[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\TotalMeteredQuantity|null
     */
    public function getTotalMeteredQuantity(): ?TotalMeteredQuantity
    {
        return $this->totalMeteredQuantity;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\TotalMeteredQuantity
     */
    public function getTotalMeteredQuantityWithCreate(): TotalMeteredQuantity
    {
        $this->totalMeteredQuantity = is_null($this->totalMeteredQuantity) ? new TotalMeteredQuantity() : $this->totalMeteredQuantity;

        return $this->totalMeteredQuantity;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\TotalMeteredQuantity $totalMeteredQuantity
     * @return self
     */
    public function setTotalMeteredQuantity(TotalMeteredQuantity $totalMeteredQuantity): self
    {
        $this->totalMeteredQuantity = $totalMeteredQuantity;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\SubscriberParty|null
     */
    public function getSubscriberParty(): ?SubscriberParty
    {
        return $this->subscriberParty;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\SubscriberParty
     */
    public function getSubscriberPartyWithCreate(): SubscriberParty
    {
        $this->subscriberParty = is_null($this->subscriberParty) ? new SubscriberParty() : $this->subscriberParty;

        return $this->subscriberParty;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\SubscriberParty $subscriberParty
     * @return self
     */
    public function setSubscriberParty(SubscriberParty $subscriberParty): self
    {
        $this->subscriberParty = $subscriberParty;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\UtilityConsumptionPoint|null
     */
    public function getUtilityConsumptionPoint(): ?UtilityConsumptionPoint
    {
        return $this->utilityConsumptionPoint;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\UtilityConsumptionPoint
     */
    public function getUtilityConsumptionPointWithCreate(): UtilityConsumptionPoint
    {
        $this->utilityConsumptionPoint = is_null($this->utilityConsumptionPoint) ? new UtilityConsumptionPoint() : $this->utilityConsumptionPoint;

        return $this->utilityConsumptionPoint;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\UtilityConsumptionPoint $utilityConsumptionPoint
     * @return self
     */
    public function setUtilityConsumptionPoint(UtilityConsumptionPoint $utilityConsumptionPoint): self
    {
        $this->utilityConsumptionPoint = $utilityConsumptionPoint;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\OnAccountPayment>|null
     */
    public function getOnAccountPayment(): ?array
    {
        return $this->onAccountPayment;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\OnAccountPayment> $onAccountPayment
     * @return self
     */
    public function setOnAccountPayment(array $onAccountPayment): self
    {
        $this->onAccountPayment = $onAccountPayment;

        return $this;
    }

    /**
     * @return self
     */
    public function clearOnAccountPayment(): self
    {
        $this->onAccountPayment = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\OnAccountPayment $onAccountPayment
     * @return self
     */
    public function addToOnAccountPayment(OnAccountPayment $onAccountPayment): self
    {
        $this->onAccountPayment[] = $onAccountPayment;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\OnAccountPayment
     */
    public function addToOnAccountPaymentWithCreate(): OnAccountPayment
    {
        $this->addToonAccountPayment($onAccountPayment = new OnAccountPayment());

        return $onAccountPayment;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\OnAccountPayment $onAccountPayment
     * @return self
     */
    public function addOnceToOnAccountPayment(OnAccountPayment $onAccountPayment): self
    {
        $this->onAccountPayment[0] = $onAccountPayment;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\OnAccountPayment
     */
    public function addOnceToOnAccountPaymentWithCreate(): OnAccountPayment
    {
        if ($this->onAccountPayment === []) {
            $this->addOnceToonAccountPayment(new OnAccountPayment());
        }

        return $this->onAccountPayment[0];
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
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\SupplierConsumption>|null
     */
    public function getSupplierConsumption(): ?array
    {
        return $this->supplierConsumption;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\SupplierConsumption> $supplierConsumption
     * @return self
     */
    public function setSupplierConsumption(array $supplierConsumption): self
    {
        $this->supplierConsumption = $supplierConsumption;

        return $this;
    }

    /**
     * @return self
     */
    public function clearSupplierConsumption(): self
    {
        $this->supplierConsumption = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\SupplierConsumption $supplierConsumption
     * @return self
     */
    public function addToSupplierConsumption(SupplierConsumption $supplierConsumption): self
    {
        $this->supplierConsumption[] = $supplierConsumption;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\SupplierConsumption
     */
    public function addToSupplierConsumptionWithCreate(): SupplierConsumption
    {
        $this->addTosupplierConsumption($supplierConsumption = new SupplierConsumption());

        return $supplierConsumption;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\SupplierConsumption $supplierConsumption
     * @return self
     */
    public function addOnceToSupplierConsumption(SupplierConsumption $supplierConsumption): self
    {
        $this->supplierConsumption[0] = $supplierConsumption;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\SupplierConsumption
     */
    public function addOnceToSupplierConsumptionWithCreate(): SupplierConsumption
    {
        if ($this->supplierConsumption === []) {
            $this->addOnceTosupplierConsumption(new SupplierConsumption());
        }

        return $this->supplierConsumption[0];
    }
}
