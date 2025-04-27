<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\ubl\cbc\ID;
use horstoeko\invoicesuite\models\ubl\cbc\Instructions;
use horstoeko\invoicesuite\models\ubl\cbc\ReleaseID;

class DespatchType
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
     * @JMS\SerializedName("RequestedDespatchDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRequestedDespatchDate", setter="setRequestedDespatchDate")
     */
    private $requestedDespatchDate;

    /**
     * @var \DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("RequestedDespatchTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRequestedDespatchTime", setter="setRequestedDespatchTime")
     */
    private $requestedDespatchTime;

    /**
     * @var \DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("EstimatedDespatchDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEstimatedDespatchDate", setter="setEstimatedDespatchDate")
     */
    private $estimatedDespatchDate;

    /**
     * @var \DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("EstimatedDespatchTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEstimatedDespatchTime", setter="setEstimatedDespatchTime")
     */
    private $estimatedDespatchTime;

    /**
     * @var \DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("ActualDespatchDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getActualDespatchDate", setter="setActualDespatchDate")
     */
    private $actualDespatchDate;

    /**
     * @var \DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("ActualDespatchTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getActualDespatchTime", setter="setActualDespatchTime")
     */
    private $actualDespatchTime;

    /**
     * @var \DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("GuaranteedDespatchDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getGuaranteedDespatchDate", setter="setGuaranteedDespatchDate")
     */
    private $guaranteedDespatchDate;

    /**
     * @var \DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("GuaranteedDespatchTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getGuaranteedDespatchTime", setter="setGuaranteedDespatchTime")
     */
    private $guaranteedDespatchTime;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ReleaseID
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ReleaseID")
     * @JMS\Expose
     * @JMS\SerializedName("ReleaseID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getReleaseID", setter="setReleaseID")
     */
    private $releaseID;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\Instructions>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\Instructions>")
     * @JMS\Expose
     * @JMS\SerializedName("Instructions")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Instructions", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getInstructions", setter="setInstructions")
     */
    private $instructions;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\DespatchAddress
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\DespatchAddress")
     * @JMS\Expose
     * @JMS\SerializedName("DespatchAddress")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDespatchAddress", setter="setDespatchAddress")
     */
    private $despatchAddress;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\DespatchLocation
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\DespatchLocation")
     * @JMS\Expose
     * @JMS\SerializedName("DespatchLocation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDespatchLocation", setter="setDespatchLocation")
     */
    private $despatchLocation;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\DespatchParty
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\DespatchParty")
     * @JMS\Expose
     * @JMS\SerializedName("DespatchParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDespatchParty", setter="setDespatchParty")
     */
    private $despatchParty;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\CarrierParty
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\CarrierParty")
     * @JMS\Expose
     * @JMS\SerializedName("CarrierParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCarrierParty", setter="setCarrierParty")
     */
    private $carrierParty;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\NotifyParty>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\NotifyParty>")
     * @JMS\Expose
     * @JMS\SerializedName("NotifyParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="NotifyParty", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getNotifyParty", setter="setNotifyParty")
     */
    private $notifyParty;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\Contact
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\Contact")
     * @JMS\Expose
     * @JMS\SerializedName("Contact")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getContact", setter="setContact")
     */
    private $contact;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\EstimatedDespatchPeriod
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\EstimatedDespatchPeriod")
     * @JMS\Expose
     * @JMS\SerializedName("EstimatedDespatchPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEstimatedDespatchPeriod", setter="setEstimatedDespatchPeriod")
     */
    private $estimatedDespatchPeriod;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\RequestedDespatchPeriod
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\RequestedDespatchPeriod")
     * @JMS\Expose
     * @JMS\SerializedName("RequestedDespatchPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRequestedDespatchPeriod", setter="setRequestedDespatchPeriod")
     */
    private $requestedDespatchPeriod;

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
    public function getRequestedDespatchDate(): ?\DateTime
    {
        return $this->requestedDespatchDate;
    }

    /**
     * @param \DateTime $requestedDespatchDate
     * @return self
     */
    public function setRequestedDespatchDate(\DateTime $requestedDespatchDate): self
    {
        $this->requestedDespatchDate = $requestedDespatchDate;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getRequestedDespatchTime(): ?\DateTime
    {
        return $this->requestedDespatchTime;
    }

    /**
     * @param \DateTime $requestedDespatchTime
     * @return self
     */
    public function setRequestedDespatchTime(\DateTime $requestedDespatchTime): self
    {
        $this->requestedDespatchTime = $requestedDespatchTime;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getEstimatedDespatchDate(): ?\DateTime
    {
        return $this->estimatedDespatchDate;
    }

    /**
     * @param \DateTime $estimatedDespatchDate
     * @return self
     */
    public function setEstimatedDespatchDate(\DateTime $estimatedDespatchDate): self
    {
        $this->estimatedDespatchDate = $estimatedDespatchDate;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getEstimatedDespatchTime(): ?\DateTime
    {
        return $this->estimatedDespatchTime;
    }

    /**
     * @param \DateTime $estimatedDespatchTime
     * @return self
     */
    public function setEstimatedDespatchTime(\DateTime $estimatedDespatchTime): self
    {
        $this->estimatedDespatchTime = $estimatedDespatchTime;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getActualDespatchDate(): ?\DateTime
    {
        return $this->actualDespatchDate;
    }

    /**
     * @param \DateTime $actualDespatchDate
     * @return self
     */
    public function setActualDespatchDate(\DateTime $actualDespatchDate): self
    {
        $this->actualDespatchDate = $actualDespatchDate;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getActualDespatchTime(): ?\DateTime
    {
        return $this->actualDespatchTime;
    }

    /**
     * @param \DateTime $actualDespatchTime
     * @return self
     */
    public function setActualDespatchTime(\DateTime $actualDespatchTime): self
    {
        $this->actualDespatchTime = $actualDespatchTime;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getGuaranteedDespatchDate(): ?\DateTime
    {
        return $this->guaranteedDespatchDate;
    }

    /**
     * @param \DateTime $guaranteedDespatchDate
     * @return self
     */
    public function setGuaranteedDespatchDate(\DateTime $guaranteedDespatchDate): self
    {
        $this->guaranteedDespatchDate = $guaranteedDespatchDate;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getGuaranteedDespatchTime(): ?\DateTime
    {
        return $this->guaranteedDespatchTime;
    }

    /**
     * @param \DateTime $guaranteedDespatchTime
     * @return self
     */
    public function setGuaranteedDespatchTime(\DateTime $guaranteedDespatchTime): self
    {
        $this->guaranteedDespatchTime = $guaranteedDespatchTime;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ReleaseID|null
     */
    public function getReleaseID(): ?ReleaseID
    {
        return $this->releaseID;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ReleaseID
     */
    public function getReleaseIDWithCreate(): ReleaseID
    {
        $this->releaseID = is_null($this->releaseID) ? new ReleaseID() : $this->releaseID;

        return $this->releaseID;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ReleaseID $releaseID
     * @return self
     */
    public function setReleaseID(ReleaseID $releaseID): self
    {
        $this->releaseID = $releaseID;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\Instructions>|null
     */
    public function getInstructions(): ?array
    {
        return $this->instructions;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\Instructions> $instructions
     * @return self
     */
    public function setInstructions(array $instructions): self
    {
        $this->instructions = $instructions;

        return $this;
    }

    /**
     * @return self
     */
    public function clearInstructions(): self
    {
        $this->instructions = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Instructions $instructions
     * @return self
     */
    public function addToInstructions(Instructions $instructions): self
    {
        $this->instructions[] = $instructions;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Instructions
     */
    public function addToInstructionsWithCreate(): Instructions
    {
        $this->addToinstructions($instructions = new Instructions());

        return $instructions;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Instructions $instructions
     * @return self
     */
    public function addOnceToInstructions(Instructions $instructions): self
    {
        $this->instructions[0] = $instructions;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Instructions
     */
    public function addOnceToInstructionsWithCreate(): Instructions
    {
        if ($this->instructions === []) {
            $this->addOnceToinstructions(new Instructions());
        }

        return $this->instructions[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\DespatchAddress|null
     */
    public function getDespatchAddress(): ?DespatchAddress
    {
        return $this->despatchAddress;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\DespatchAddress
     */
    public function getDespatchAddressWithCreate(): DespatchAddress
    {
        $this->despatchAddress = is_null($this->despatchAddress) ? new DespatchAddress() : $this->despatchAddress;

        return $this->despatchAddress;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\DespatchAddress $despatchAddress
     * @return self
     */
    public function setDespatchAddress(DespatchAddress $despatchAddress): self
    {
        $this->despatchAddress = $despatchAddress;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\DespatchLocation|null
     */
    public function getDespatchLocation(): ?DespatchLocation
    {
        return $this->despatchLocation;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\DespatchLocation
     */
    public function getDespatchLocationWithCreate(): DespatchLocation
    {
        $this->despatchLocation = is_null($this->despatchLocation) ? new DespatchLocation() : $this->despatchLocation;

        return $this->despatchLocation;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\DespatchLocation $despatchLocation
     * @return self
     */
    public function setDespatchLocation(DespatchLocation $despatchLocation): self
    {
        $this->despatchLocation = $despatchLocation;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\DespatchParty|null
     */
    public function getDespatchParty(): ?DespatchParty
    {
        return $this->despatchParty;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\DespatchParty
     */
    public function getDespatchPartyWithCreate(): DespatchParty
    {
        $this->despatchParty = is_null($this->despatchParty) ? new DespatchParty() : $this->despatchParty;

        return $this->despatchParty;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\DespatchParty $despatchParty
     * @return self
     */
    public function setDespatchParty(DespatchParty $despatchParty): self
    {
        $this->despatchParty = $despatchParty;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\CarrierParty|null
     */
    public function getCarrierParty(): ?CarrierParty
    {
        return $this->carrierParty;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\CarrierParty
     */
    public function getCarrierPartyWithCreate(): CarrierParty
    {
        $this->carrierParty = is_null($this->carrierParty) ? new CarrierParty() : $this->carrierParty;

        return $this->carrierParty;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\CarrierParty $carrierParty
     * @return self
     */
    public function setCarrierParty(CarrierParty $carrierParty): self
    {
        $this->carrierParty = $carrierParty;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\NotifyParty>|null
     */
    public function getNotifyParty(): ?array
    {
        return $this->notifyParty;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\NotifyParty> $notifyParty
     * @return self
     */
    public function setNotifyParty(array $notifyParty): self
    {
        $this->notifyParty = $notifyParty;

        return $this;
    }

    /**
     * @return self
     */
    public function clearNotifyParty(): self
    {
        $this->notifyParty = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\NotifyParty $notifyParty
     * @return self
     */
    public function addToNotifyParty(NotifyParty $notifyParty): self
    {
        $this->notifyParty[] = $notifyParty;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\NotifyParty
     */
    public function addToNotifyPartyWithCreate(): NotifyParty
    {
        $this->addTonotifyParty($notifyParty = new NotifyParty());

        return $notifyParty;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\NotifyParty $notifyParty
     * @return self
     */
    public function addOnceToNotifyParty(NotifyParty $notifyParty): self
    {
        $this->notifyParty[0] = $notifyParty;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\NotifyParty
     */
    public function addOnceToNotifyPartyWithCreate(): NotifyParty
    {
        if ($this->notifyParty === []) {
            $this->addOnceTonotifyParty(new NotifyParty());
        }

        return $this->notifyParty[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Contact|null
     */
    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Contact
     */
    public function getContactWithCreate(): Contact
    {
        $this->contact = is_null($this->contact) ? new Contact() : $this->contact;

        return $this->contact;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\Contact $contact
     * @return self
     */
    public function setContact(Contact $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\EstimatedDespatchPeriod|null
     */
    public function getEstimatedDespatchPeriod(): ?EstimatedDespatchPeriod
    {
        return $this->estimatedDespatchPeriod;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\EstimatedDespatchPeriod
     */
    public function getEstimatedDespatchPeriodWithCreate(): EstimatedDespatchPeriod
    {
        $this->estimatedDespatchPeriod = is_null($this->estimatedDespatchPeriod) ? new EstimatedDespatchPeriod() : $this->estimatedDespatchPeriod;

        return $this->estimatedDespatchPeriod;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\EstimatedDespatchPeriod $estimatedDespatchPeriod
     * @return self
     */
    public function setEstimatedDespatchPeriod(EstimatedDespatchPeriod $estimatedDespatchPeriod): self
    {
        $this->estimatedDespatchPeriod = $estimatedDespatchPeriod;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\RequestedDespatchPeriod|null
     */
    public function getRequestedDespatchPeriod(): ?RequestedDespatchPeriod
    {
        return $this->requestedDespatchPeriod;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\RequestedDespatchPeriod
     */
    public function getRequestedDespatchPeriodWithCreate(): RequestedDespatchPeriod
    {
        $this->requestedDespatchPeriod = is_null($this->requestedDespatchPeriod) ? new RequestedDespatchPeriod() : $this->requestedDespatchPeriod;

        return $this->requestedDespatchPeriod;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\RequestedDespatchPeriod $requestedDespatchPeriod
     * @return self
     */
    public function setRequestedDespatchPeriod(RequestedDespatchPeriod $requestedDespatchPeriod): self
    {
        $this->requestedDespatchPeriod = $requestedDespatchPeriod;

        return $this;
    }
}
