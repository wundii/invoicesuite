<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Percent;

class DependentPriceReferenceType
{
    use HandlesObjectFlags;

    /**
     * @var Percent|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Percent")
     * @JMS\Expose
     * @JMS\SerializedName("Percent")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPercent", setter="setPercent")
     */
    private $percent;

    /**
     * @var LocationAddress|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\LocationAddress")
     * @JMS\Expose
     * @JMS\SerializedName("LocationAddress")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLocationAddress", setter="setLocationAddress")
     */
    private $locationAddress;

    /**
     * @var DependentLineReference|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\DependentLineReference")
     * @JMS\Expose
     * @JMS\SerializedName("DependentLineReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDependentLineReference", setter="setDependentLineReference")
     */
    private $dependentLineReference;

    /**
     * @return Percent|null
     */
    public function getPercent(): ?Percent
    {
        return $this->percent;
    }

    /**
     * @return Percent
     */
    public function getPercentWithCreate(): Percent
    {
        $this->percent = is_null($this->percent) ? new Percent() : $this->percent;

        return $this->percent;
    }

    /**
     * @param Percent|null $percent
     * @return self
     */
    public function setPercent(?Percent $percent = null): self
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPercent(): self
    {
        $this->percent = null;

        return $this;
    }

    /**
     * @return LocationAddress|null
     */
    public function getLocationAddress(): ?LocationAddress
    {
        return $this->locationAddress;
    }

    /**
     * @return LocationAddress
     */
    public function getLocationAddressWithCreate(): LocationAddress
    {
        $this->locationAddress = is_null($this->locationAddress) ? new LocationAddress() : $this->locationAddress;

        return $this->locationAddress;
    }

    /**
     * @param LocationAddress|null $locationAddress
     * @return self
     */
    public function setLocationAddress(?LocationAddress $locationAddress = null): self
    {
        $this->locationAddress = $locationAddress;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLocationAddress(): self
    {
        $this->locationAddress = null;

        return $this;
    }

    /**
     * @return DependentLineReference|null
     */
    public function getDependentLineReference(): ?DependentLineReference
    {
        return $this->dependentLineReference;
    }

    /**
     * @return DependentLineReference
     */
    public function getDependentLineReferenceWithCreate(): DependentLineReference
    {
        $this->dependentLineReference = is_null($this->dependentLineReference) ? new DependentLineReference() : $this->dependentLineReference;

        return $this->dependentLineReference;
    }

    /**
     * @param DependentLineReference|null $dependentLineReference
     * @return self
     */
    public function setDependentLineReference(?DependentLineReference $dependentLineReference = null): self
    {
        $this->dependentLineReference = $dependentLineReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDependentLineReference(): self
    {
        $this->dependentLineReference = null;

        return $this;
    }
}
