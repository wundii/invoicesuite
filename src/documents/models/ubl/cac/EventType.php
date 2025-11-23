<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\IdentificationID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TypeCode;

class EventType
{
    use HandlesObjectFlags;

    /**
     * @var IdentificationID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\IdentificationID")
     * @JMS\Expose
     * @JMS\SerializedName("IdentificationID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getIdentificationID", setter="setIdentificationID")
     */
    private $identificationID;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("OccurrenceDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOccurrenceDate", setter="setOccurrenceDate")
     */
    private $occurrenceDate;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("OccurrenceTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOccurrenceTime", setter="setOccurrenceTime")
     */
    private $occurrenceTime;

    /**
     * @var TypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("TypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTypeCode", setter="setTypeCode")
     */
    private $typeCode;

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
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("CompletionIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCompletionIndicator", setter="setCompletionIndicator")
     */
    private $completionIndicator;

    /**
     * @var array<CurrentStatus>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\CurrentStatus>")
     * @JMS\Expose
     * @JMS\SerializedName("CurrentStatus")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="CurrentStatus", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getCurrentStatus", setter="setCurrentStatus")
     */
    private $currentStatus;

    /**
     * @var array<Contact>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\Contact>")
     * @JMS\Expose
     * @JMS\SerializedName("Contact")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Contact", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getContact", setter="setContact")
     */
    private $contact;

    /**
     * @var OccurenceLocation|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\OccurenceLocation")
     * @JMS\Expose
     * @JMS\SerializedName("OccurenceLocation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOccurenceLocation", setter="setOccurenceLocation")
     */
    private $occurenceLocation;

    /**
     * @return IdentificationID|null
     */
    public function getIdentificationID(): ?IdentificationID
    {
        return $this->identificationID;
    }

    /**
     * @return IdentificationID
     */
    public function getIdentificationIDWithCreate(): IdentificationID
    {
        $this->identificationID = is_null($this->identificationID) ? new IdentificationID() : $this->identificationID;

        return $this->identificationID;
    }

    /**
     * @param IdentificationID|null $identificationID
     * @return self
     */
    public function setIdentificationID(?IdentificationID $identificationID = null): self
    {
        $this->identificationID = $identificationID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetIdentificationID(): self
    {
        $this->identificationID = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getOccurrenceDate(): ?DateTimeInterface
    {
        return $this->occurrenceDate;
    }

    /**
     * @param DateTimeInterface|null $occurrenceDate
     * @return self
     */
    public function setOccurrenceDate(?DateTimeInterface $occurrenceDate = null): self
    {
        $this->occurrenceDate = $occurrenceDate;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetOccurrenceDate(): self
    {
        $this->occurrenceDate = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getOccurrenceTime(): ?DateTimeInterface
    {
        return $this->occurrenceTime;
    }

    /**
     * @param DateTimeInterface|null $occurrenceTime
     * @return self
     */
    public function setOccurrenceTime(?DateTimeInterface $occurrenceTime = null): self
    {
        $this->occurrenceTime = $occurrenceTime;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetOccurrenceTime(): self
    {
        $this->occurrenceTime = null;

        return $this;
    }

    /**
     * @return TypeCode|null
     */
    public function getTypeCode(): ?TypeCode
    {
        return $this->typeCode;
    }

    /**
     * @return TypeCode
     */
    public function getTypeCodeWithCreate(): TypeCode
    {
        $this->typeCode = is_null($this->typeCode) ? new TypeCode() : $this->typeCode;

        return $this->typeCode;
    }

    /**
     * @param TypeCode|null $typeCode
     * @return self
     */
    public function setTypeCode(?TypeCode $typeCode = null): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTypeCode(): self
    {
        $this->typeCode = null;

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
     * @return bool|null
     */
    public function getCompletionIndicator(): ?bool
    {
        return $this->completionIndicator;
    }

    /**
     * @param bool|null $completionIndicator
     * @return self
     */
    public function setCompletionIndicator(?bool $completionIndicator = null): self
    {
        $this->completionIndicator = $completionIndicator;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCompletionIndicator(): self
    {
        $this->completionIndicator = null;

        return $this;
    }

    /**
     * @return array<CurrentStatus>|null
     */
    public function getCurrentStatus(): ?array
    {
        return $this->currentStatus;
    }

    /**
     * @param array<CurrentStatus>|null $currentStatus
     * @return self
     */
    public function setCurrentStatus(?array $currentStatus = null): self
    {
        $this->currentStatus = $currentStatus;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCurrentStatus(): self
    {
        $this->currentStatus = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearCurrentStatus(): self
    {
        $this->currentStatus = [];

        return $this;
    }

    /**
     * @return CurrentStatus|null
     */
    public function firstCurrentStatus(): ?CurrentStatus
    {
        $currentStatus = $this->currentStatus ?? [];
        $currentStatus = reset($currentStatus);

        if ($currentStatus === false) {
            return null;
        }

        return $currentStatus;
    }

    /**
     * @return CurrentStatus|null
     */
    public function lastCurrentStatus(): ?CurrentStatus
    {
        $currentStatus = $this->currentStatus ?? [];
        $currentStatus = end($currentStatus);

        if ($currentStatus === false) {
            return null;
        }

        return $currentStatus;
    }

    /**
     * @param CurrentStatus $currentStatus
     * @return self
     */
    public function addToCurrentStatus(CurrentStatus $currentStatus): self
    {
        $this->currentStatus[] = $currentStatus;

        return $this;
    }

    /**
     * @return CurrentStatus
     */
    public function addToCurrentStatusWithCreate(): CurrentStatus
    {
        $this->addTocurrentStatus($currentStatus = new CurrentStatus());

        return $currentStatus;
    }

    /**
     * @param CurrentStatus $currentStatus
     * @return self
     */
    public function addOnceToCurrentStatus(CurrentStatus $currentStatus): self
    {
        if (!is_array($this->currentStatus)) {
            $this->currentStatus = [];
        }

        $this->currentStatus[0] = $currentStatus;

        return $this;
    }

    /**
     * @return CurrentStatus
     */
    public function addOnceToCurrentStatusWithCreate(): CurrentStatus
    {
        if (!is_array($this->currentStatus)) {
            $this->currentStatus = [];
        }

        if ($this->currentStatus === []) {
            $this->addOnceTocurrentStatus(new CurrentStatus());
        }

        return $this->currentStatus[0];
    }

    /**
     * @return array<Contact>|null
     */
    public function getContact(): ?array
    {
        return $this->contact;
    }

    /**
     * @param array<Contact>|null $contact
     * @return self
     */
    public function setContact(?array $contact = null): self
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetContact(): self
    {
        $this->contact = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearContact(): self
    {
        $this->contact = [];

        return $this;
    }

    /**
     * @return Contact|null
     */
    public function firstContact(): ?Contact
    {
        $contact = $this->contact ?? [];
        $contact = reset($contact);

        if ($contact === false) {
            return null;
        }

        return $contact;
    }

    /**
     * @return Contact|null
     */
    public function lastContact(): ?Contact
    {
        $contact = $this->contact ?? [];
        $contact = end($contact);

        if ($contact === false) {
            return null;
        }

        return $contact;
    }

    /**
     * @param Contact $contact
     * @return self
     */
    public function addToContact(Contact $contact): self
    {
        $this->contact[] = $contact;

        return $this;
    }

    /**
     * @return Contact
     */
    public function addToContactWithCreate(): Contact
    {
        $this->addTocontact($contact = new Contact());

        return $contact;
    }

    /**
     * @param Contact $contact
     * @return self
     */
    public function addOnceToContact(Contact $contact): self
    {
        if (!is_array($this->contact)) {
            $this->contact = [];
        }

        $this->contact[0] = $contact;

        return $this;
    }

    /**
     * @return Contact
     */
    public function addOnceToContactWithCreate(): Contact
    {
        if (!is_array($this->contact)) {
            $this->contact = [];
        }

        if ($this->contact === []) {
            $this->addOnceTocontact(new Contact());
        }

        return $this->contact[0];
    }

    /**
     * @return OccurenceLocation|null
     */
    public function getOccurenceLocation(): ?OccurenceLocation
    {
        return $this->occurenceLocation;
    }

    /**
     * @return OccurenceLocation
     */
    public function getOccurenceLocationWithCreate(): OccurenceLocation
    {
        $this->occurenceLocation = is_null($this->occurenceLocation) ? new OccurenceLocation() : $this->occurenceLocation;

        return $this->occurenceLocation;
    }

    /**
     * @param OccurenceLocation|null $occurenceLocation
     * @return self
     */
    public function setOccurenceLocation(?OccurenceLocation $occurenceLocation = null): self
    {
        $this->occurenceLocation = $occurenceLocation;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetOccurenceLocation(): self
    {
        $this->occurenceLocation = null;

        return $this;
    }
}
