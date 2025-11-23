<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Conditions;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CountrySubentity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CountrySubentityCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\InformationURI;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LocationTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Name;

class LocationType
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
     * @var array<Conditions>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Conditions>")
     * @JMS\Expose
     * @JMS\SerializedName("Conditions")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Conditions", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getConditions", setter="setConditions")
     */
    private $conditions;

    /**
     * @var CountrySubentity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CountrySubentity")
     * @JMS\Expose
     * @JMS\SerializedName("CountrySubentity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCountrySubentity", setter="setCountrySubentity")
     */
    private $countrySubentity;

    /**
     * @var CountrySubentityCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CountrySubentityCode")
     * @JMS\Expose
     * @JMS\SerializedName("CountrySubentityCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCountrySubentityCode", setter="setCountrySubentityCode")
     */
    private $countrySubentityCode;

    /**
     * @var LocationTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LocationTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("LocationTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLocationTypeCode", setter="setLocationTypeCode")
     */
    private $locationTypeCode;

    /**
     * @var InformationURI|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\InformationURI")
     * @JMS\Expose
     * @JMS\SerializedName("InformationURI")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getInformationURI", setter="setInformationURI")
     */
    private $informationURI;

    /**
     * @var Name|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Name")
     * @JMS\Expose
     * @JMS\SerializedName("Name")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getName", setter="setName")
     */
    private $name;

    /**
     * @var array<ValidityPeriod>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ValidityPeriod>")
     * @JMS\Expose
     * @JMS\SerializedName("ValidityPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ValidityPeriod", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getValidityPeriod", setter="setValidityPeriod")
     */
    private $validityPeriod;

    /**
     * @var Address|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Address")
     * @JMS\Expose
     * @JMS\SerializedName("Address")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAddress", setter="setAddress")
     */
    private $address;

    /**
     * @var array<SubsidiaryLocation>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\SubsidiaryLocation>")
     * @JMS\Expose
     * @JMS\SerializedName("SubsidiaryLocation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SubsidiaryLocation", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSubsidiaryLocation", setter="setSubsidiaryLocation")
     */
    private $subsidiaryLocation;

    /**
     * @var array<LocationCoordinate>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\LocationCoordinate>")
     * @JMS\Expose
     * @JMS\SerializedName("LocationCoordinate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="LocationCoordinate", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getLocationCoordinate", setter="setLocationCoordinate")
     */
    private $locationCoordinate;

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
     * @return array<Conditions>|null
     */
    public function getConditions(): ?array
    {
        return $this->conditions;
    }

    /**
     * @param array<Conditions>|null $conditions
     * @return self
     */
    public function setConditions(?array $conditions = null): self
    {
        $this->conditions = $conditions;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetConditions(): self
    {
        $this->conditions = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearConditions(): self
    {
        $this->conditions = [];

        return $this;
    }

    /**
     * @return Conditions|null
     */
    public function firstConditions(): ?Conditions
    {
        $conditions = $this->conditions ?? [];
        $conditions = reset($conditions);

        if ($conditions === false) {
            return null;
        }

        return $conditions;
    }

    /**
     * @return Conditions|null
     */
    public function lastConditions(): ?Conditions
    {
        $conditions = $this->conditions ?? [];
        $conditions = end($conditions);

        if ($conditions === false) {
            return null;
        }

        return $conditions;
    }

    /**
     * @param Conditions $conditions
     * @return self
     */
    public function addToConditions(Conditions $conditions): self
    {
        $this->conditions[] = $conditions;

        return $this;
    }

    /**
     * @return Conditions
     */
    public function addToConditionsWithCreate(): Conditions
    {
        $this->addToconditions($conditions = new Conditions());

        return $conditions;
    }

    /**
     * @param Conditions $conditions
     * @return self
     */
    public function addOnceToConditions(Conditions $conditions): self
    {
        if (!is_array($this->conditions)) {
            $this->conditions = [];
        }

        $this->conditions[0] = $conditions;

        return $this;
    }

    /**
     * @return Conditions
     */
    public function addOnceToConditionsWithCreate(): Conditions
    {
        if (!is_array($this->conditions)) {
            $this->conditions = [];
        }

        if ($this->conditions === []) {
            $this->addOnceToconditions(new Conditions());
        }

        return $this->conditions[0];
    }

    /**
     * @return CountrySubentity|null
     */
    public function getCountrySubentity(): ?CountrySubentity
    {
        return $this->countrySubentity;
    }

    /**
     * @return CountrySubentity
     */
    public function getCountrySubentityWithCreate(): CountrySubentity
    {
        $this->countrySubentity = is_null($this->countrySubentity) ? new CountrySubentity() : $this->countrySubentity;

        return $this->countrySubentity;
    }

    /**
     * @param CountrySubentity|null $countrySubentity
     * @return self
     */
    public function setCountrySubentity(?CountrySubentity $countrySubentity = null): self
    {
        $this->countrySubentity = $countrySubentity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCountrySubentity(): self
    {
        $this->countrySubentity = null;

        return $this;
    }

    /**
     * @return CountrySubentityCode|null
     */
    public function getCountrySubentityCode(): ?CountrySubentityCode
    {
        return $this->countrySubentityCode;
    }

    /**
     * @return CountrySubentityCode
     */
    public function getCountrySubentityCodeWithCreate(): CountrySubentityCode
    {
        $this->countrySubentityCode = is_null($this->countrySubentityCode) ? new CountrySubentityCode() : $this->countrySubentityCode;

        return $this->countrySubentityCode;
    }

    /**
     * @param CountrySubentityCode|null $countrySubentityCode
     * @return self
     */
    public function setCountrySubentityCode(?CountrySubentityCode $countrySubentityCode = null): self
    {
        $this->countrySubentityCode = $countrySubentityCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCountrySubentityCode(): self
    {
        $this->countrySubentityCode = null;

        return $this;
    }

    /**
     * @return LocationTypeCode|null
     */
    public function getLocationTypeCode(): ?LocationTypeCode
    {
        return $this->locationTypeCode;
    }

    /**
     * @return LocationTypeCode
     */
    public function getLocationTypeCodeWithCreate(): LocationTypeCode
    {
        $this->locationTypeCode = is_null($this->locationTypeCode) ? new LocationTypeCode() : $this->locationTypeCode;

        return $this->locationTypeCode;
    }

    /**
     * @param LocationTypeCode|null $locationTypeCode
     * @return self
     */
    public function setLocationTypeCode(?LocationTypeCode $locationTypeCode = null): self
    {
        $this->locationTypeCode = $locationTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLocationTypeCode(): self
    {
        $this->locationTypeCode = null;

        return $this;
    }

    /**
     * @return InformationURI|null
     */
    public function getInformationURI(): ?InformationURI
    {
        return $this->informationURI;
    }

    /**
     * @return InformationURI
     */
    public function getInformationURIWithCreate(): InformationURI
    {
        $this->informationURI = is_null($this->informationURI) ? new InformationURI() : $this->informationURI;

        return $this->informationURI;
    }

    /**
     * @param InformationURI|null $informationURI
     * @return self
     */
    public function setInformationURI(?InformationURI $informationURI = null): self
    {
        $this->informationURI = $informationURI;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetInformationURI(): self
    {
        $this->informationURI = null;

        return $this;
    }

    /**
     * @return Name|null
     */
    public function getName(): ?Name
    {
        return $this->name;
    }

    /**
     * @return Name
     */
    public function getNameWithCreate(): Name
    {
        $this->name = is_null($this->name) ? new Name() : $this->name;

        return $this->name;
    }

    /**
     * @param Name|null $name
     * @return self
     */
    public function setName(?Name $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetName(): self
    {
        $this->name = null;

        return $this;
    }

    /**
     * @return array<ValidityPeriod>|null
     */
    public function getValidityPeriod(): ?array
    {
        return $this->validityPeriod;
    }

    /**
     * @param array<ValidityPeriod>|null $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?array $validityPeriod = null): self
    {
        $this->validityPeriod = $validityPeriod;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetValidityPeriod(): self
    {
        $this->validityPeriod = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearValidityPeriod(): self
    {
        $this->validityPeriod = [];

        return $this;
    }

    /**
     * @return ValidityPeriod|null
     */
    public function firstValidityPeriod(): ?ValidityPeriod
    {
        $validityPeriod = $this->validityPeriod ?? [];
        $validityPeriod = reset($validityPeriod);

        if ($validityPeriod === false) {
            return null;
        }

        return $validityPeriod;
    }

    /**
     * @return ValidityPeriod|null
     */
    public function lastValidityPeriod(): ?ValidityPeriod
    {
        $validityPeriod = $this->validityPeriod ?? [];
        $validityPeriod = end($validityPeriod);

        if ($validityPeriod === false) {
            return null;
        }

        return $validityPeriod;
    }

    /**
     * @param ValidityPeriod $validityPeriod
     * @return self
     */
    public function addToValidityPeriod(ValidityPeriod $validityPeriod): self
    {
        $this->validityPeriod[] = $validityPeriod;

        return $this;
    }

    /**
     * @return ValidityPeriod
     */
    public function addToValidityPeriodWithCreate(): ValidityPeriod
    {
        $this->addTovalidityPeriod($validityPeriod = new ValidityPeriod());

        return $validityPeriod;
    }

    /**
     * @param ValidityPeriod $validityPeriod
     * @return self
     */
    public function addOnceToValidityPeriod(ValidityPeriod $validityPeriod): self
    {
        if (!is_array($this->validityPeriod)) {
            $this->validityPeriod = [];
        }

        $this->validityPeriod[0] = $validityPeriod;

        return $this;
    }

    /**
     * @return ValidityPeriod
     */
    public function addOnceToValidityPeriodWithCreate(): ValidityPeriod
    {
        if (!is_array($this->validityPeriod)) {
            $this->validityPeriod = [];
        }

        if ($this->validityPeriod === []) {
            $this->addOnceTovalidityPeriod(new ValidityPeriod());
        }

        return $this->validityPeriod[0];
    }

    /**
     * @return Address|null
     */
    public function getAddress(): ?Address
    {
        return $this->address;
    }

    /**
     * @return Address
     */
    public function getAddressWithCreate(): Address
    {
        $this->address = is_null($this->address) ? new Address() : $this->address;

        return $this->address;
    }

    /**
     * @param Address|null $address
     * @return self
     */
    public function setAddress(?Address $address = null): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAddress(): self
    {
        $this->address = null;

        return $this;
    }

    /**
     * @return array<SubsidiaryLocation>|null
     */
    public function getSubsidiaryLocation(): ?array
    {
        return $this->subsidiaryLocation;
    }

    /**
     * @param array<SubsidiaryLocation>|null $subsidiaryLocation
     * @return self
     */
    public function setSubsidiaryLocation(?array $subsidiaryLocation = null): self
    {
        $this->subsidiaryLocation = $subsidiaryLocation;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSubsidiaryLocation(): self
    {
        $this->subsidiaryLocation = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearSubsidiaryLocation(): self
    {
        $this->subsidiaryLocation = [];

        return $this;
    }

    /**
     * @return SubsidiaryLocation|null
     */
    public function firstSubsidiaryLocation(): ?SubsidiaryLocation
    {
        $subsidiaryLocation = $this->subsidiaryLocation ?? [];
        $subsidiaryLocation = reset($subsidiaryLocation);

        if ($subsidiaryLocation === false) {
            return null;
        }

        return $subsidiaryLocation;
    }

    /**
     * @return SubsidiaryLocation|null
     */
    public function lastSubsidiaryLocation(): ?SubsidiaryLocation
    {
        $subsidiaryLocation = $this->subsidiaryLocation ?? [];
        $subsidiaryLocation = end($subsidiaryLocation);

        if ($subsidiaryLocation === false) {
            return null;
        }

        return $subsidiaryLocation;
    }

    /**
     * @param SubsidiaryLocation $subsidiaryLocation
     * @return self
     */
    public function addToSubsidiaryLocation(SubsidiaryLocation $subsidiaryLocation): self
    {
        $this->subsidiaryLocation[] = $subsidiaryLocation;

        return $this;
    }

    /**
     * @return SubsidiaryLocation
     */
    public function addToSubsidiaryLocationWithCreate(): SubsidiaryLocation
    {
        $this->addTosubsidiaryLocation($subsidiaryLocation = new SubsidiaryLocation());

        return $subsidiaryLocation;
    }

    /**
     * @param SubsidiaryLocation $subsidiaryLocation
     * @return self
     */
    public function addOnceToSubsidiaryLocation(SubsidiaryLocation $subsidiaryLocation): self
    {
        if (!is_array($this->subsidiaryLocation)) {
            $this->subsidiaryLocation = [];
        }

        $this->subsidiaryLocation[0] = $subsidiaryLocation;

        return $this;
    }

    /**
     * @return SubsidiaryLocation
     */
    public function addOnceToSubsidiaryLocationWithCreate(): SubsidiaryLocation
    {
        if (!is_array($this->subsidiaryLocation)) {
            $this->subsidiaryLocation = [];
        }

        if ($this->subsidiaryLocation === []) {
            $this->addOnceTosubsidiaryLocation(new SubsidiaryLocation());
        }

        return $this->subsidiaryLocation[0];
    }

    /**
     * @return array<LocationCoordinate>|null
     */
    public function getLocationCoordinate(): ?array
    {
        return $this->locationCoordinate;
    }

    /**
     * @param array<LocationCoordinate>|null $locationCoordinate
     * @return self
     */
    public function setLocationCoordinate(?array $locationCoordinate = null): self
    {
        $this->locationCoordinate = $locationCoordinate;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLocationCoordinate(): self
    {
        $this->locationCoordinate = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearLocationCoordinate(): self
    {
        $this->locationCoordinate = [];

        return $this;
    }

    /**
     * @return LocationCoordinate|null
     */
    public function firstLocationCoordinate(): ?LocationCoordinate
    {
        $locationCoordinate = $this->locationCoordinate ?? [];
        $locationCoordinate = reset($locationCoordinate);

        if ($locationCoordinate === false) {
            return null;
        }

        return $locationCoordinate;
    }

    /**
     * @return LocationCoordinate|null
     */
    public function lastLocationCoordinate(): ?LocationCoordinate
    {
        $locationCoordinate = $this->locationCoordinate ?? [];
        $locationCoordinate = end($locationCoordinate);

        if ($locationCoordinate === false) {
            return null;
        }

        return $locationCoordinate;
    }

    /**
     * @param LocationCoordinate $locationCoordinate
     * @return self
     */
    public function addToLocationCoordinate(LocationCoordinate $locationCoordinate): self
    {
        $this->locationCoordinate[] = $locationCoordinate;

        return $this;
    }

    /**
     * @return LocationCoordinate
     */
    public function addToLocationCoordinateWithCreate(): LocationCoordinate
    {
        $this->addTolocationCoordinate($locationCoordinate = new LocationCoordinate());

        return $locationCoordinate;
    }

    /**
     * @param LocationCoordinate $locationCoordinate
     * @return self
     */
    public function addOnceToLocationCoordinate(LocationCoordinate $locationCoordinate): self
    {
        if (!is_array($this->locationCoordinate)) {
            $this->locationCoordinate = [];
        }

        $this->locationCoordinate[0] = $locationCoordinate;

        return $this;
    }

    /**
     * @return LocationCoordinate
     */
    public function addOnceToLocationCoordinateWithCreate(): LocationCoordinate
    {
        if (!is_array($this->locationCoordinate)) {
            $this->locationCoordinate = [];
        }

        if ($this->locationCoordinate === []) {
            $this->addOnceTolocationCoordinate(new LocationCoordinate());
        }

        return $this->locationCoordinate[0];
    }
}
