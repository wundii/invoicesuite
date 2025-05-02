<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\ubl\cbc\ID;

class PickupType
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
     * @var \DateTimeInterface
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("ActualPickupDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getActualPickupDate", setter="setActualPickupDate")
     */
    private $actualPickupDate;

    /**
     * @var \DateTimeInterface
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("ActualPickupTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getActualPickupTime", setter="setActualPickupTime")
     */
    private $actualPickupTime;

    /**
     * @var \DateTimeInterface
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("EarliestPickupDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEarliestPickupDate", setter="setEarliestPickupDate")
     */
    private $earliestPickupDate;

    /**
     * @var \DateTimeInterface
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("EarliestPickupTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEarliestPickupTime", setter="setEarliestPickupTime")
     */
    private $earliestPickupTime;

    /**
     * @var \DateTimeInterface
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("LatestPickupDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLatestPickupDate", setter="setLatestPickupDate")
     */
    private $latestPickupDate;

    /**
     * @var \DateTimeInterface
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("LatestPickupTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLatestPickupTime", setter="setLatestPickupTime")
     */
    private $latestPickupTime;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\PickupLocation
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\PickupLocation")
     * @JMS\Expose
     * @JMS\SerializedName("PickupLocation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPickupLocation", setter="setPickupLocation")
     */
    private $pickupLocation;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\PickupParty
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\PickupParty")
     * @JMS\Expose
     * @JMS\SerializedName("PickupParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPickupParty", setter="setPickupParty")
     */
    private $pickupParty;

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
     * @return \DateTimeInterface|null
     */
    public function getActualPickupDate(): ?\DateTimeInterface
    {
        return $this->actualPickupDate;
    }

    /**
     * @param \DateTimeInterface $actualPickupDate
     * @return self
     */
    public function setActualPickupDate(\DateTimeInterface $actualPickupDate): self
    {
        $this->actualPickupDate = $actualPickupDate;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getActualPickupTime(): ?\DateTimeInterface
    {
        return $this->actualPickupTime;
    }

    /**
     * @param \DateTimeInterface $actualPickupTime
     * @return self
     */
    public function setActualPickupTime(\DateTimeInterface $actualPickupTime): self
    {
        $this->actualPickupTime = $actualPickupTime;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getEarliestPickupDate(): ?\DateTimeInterface
    {
        return $this->earliestPickupDate;
    }

    /**
     * @param \DateTimeInterface $earliestPickupDate
     * @return self
     */
    public function setEarliestPickupDate(\DateTimeInterface $earliestPickupDate): self
    {
        $this->earliestPickupDate = $earliestPickupDate;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getEarliestPickupTime(): ?\DateTimeInterface
    {
        return $this->earliestPickupTime;
    }

    /**
     * @param \DateTimeInterface $earliestPickupTime
     * @return self
     */
    public function setEarliestPickupTime(\DateTimeInterface $earliestPickupTime): self
    {
        $this->earliestPickupTime = $earliestPickupTime;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getLatestPickupDate(): ?\DateTimeInterface
    {
        return $this->latestPickupDate;
    }

    /**
     * @param \DateTimeInterface $latestPickupDate
     * @return self
     */
    public function setLatestPickupDate(\DateTimeInterface $latestPickupDate): self
    {
        $this->latestPickupDate = $latestPickupDate;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getLatestPickupTime(): ?\DateTimeInterface
    {
        return $this->latestPickupTime;
    }

    /**
     * @param \DateTimeInterface $latestPickupTime
     * @return self
     */
    public function setLatestPickupTime(\DateTimeInterface $latestPickupTime): self
    {
        $this->latestPickupTime = $latestPickupTime;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\PickupLocation|null
     */
    public function getPickupLocation(): ?PickupLocation
    {
        return $this->pickupLocation;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\PickupLocation
     */
    public function getPickupLocationWithCreate(): PickupLocation
    {
        $this->pickupLocation = is_null($this->pickupLocation) ? new PickupLocation() : $this->pickupLocation;

        return $this->pickupLocation;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\PickupLocation $pickupLocation
     * @return self
     */
    public function setPickupLocation(PickupLocation $pickupLocation): self
    {
        $this->pickupLocation = $pickupLocation;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\PickupParty|null
     */
    public function getPickupParty(): ?PickupParty
    {
        return $this->pickupParty;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\PickupParty
     */
    public function getPickupPartyWithCreate(): PickupParty
    {
        $this->pickupParty = is_null($this->pickupParty) ? new PickupParty() : $this->pickupParty;

        return $this->pickupParty;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\PickupParty $pickupParty
     * @return self
     */
    public function setPickupParty(PickupParty $pickupParty): self
    {
        $this->pickupParty = $pickupParty;

        return $this;
    }
}
