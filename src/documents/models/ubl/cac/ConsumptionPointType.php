<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SubscriberID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SubscriberType;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SubscriberTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TotalDeliveredQuantity;

class ConsumptionPointType
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
     * @var SubscriberID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\SubscriberID")
     * @JMS\Expose
     * @JMS\SerializedName("SubscriberID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSubscriberID", setter="setSubscriberID")
     */
    private $subscriberID;

    /**
     * @var SubscriberType|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\SubscriberType")
     * @JMS\Expose
     * @JMS\SerializedName("SubscriberType")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSubscriberType", setter="setSubscriberType")
     */
    private $subscriberType;

    /**
     * @var SubscriberTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\SubscriberTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("SubscriberTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSubscriberTypeCode", setter="setSubscriberTypeCode")
     */
    private $subscriberTypeCode;

    /**
     * @var TotalDeliveredQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TotalDeliveredQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("TotalDeliveredQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTotalDeliveredQuantity", setter="setTotalDeliveredQuantity")
     */
    private $totalDeliveredQuantity;

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
     * @var WebSiteAccess|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\WebSiteAccess")
     * @JMS\Expose
     * @JMS\SerializedName("WebSiteAccess")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getWebSiteAccess", setter="setWebSiteAccess")
     */
    private $webSiteAccess;

    /**
     * @var array<UtilityMeter>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\UtilityMeter>")
     * @JMS\Expose
     * @JMS\SerializedName("UtilityMeter")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="UtilityMeter", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getUtilityMeter", setter="setUtilityMeter")
     */
    private $utilityMeter;

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
     * @return SubscriberID|null
     */
    public function getSubscriberID(): ?SubscriberID
    {
        return $this->subscriberID;
    }

    /**
     * @return SubscriberID
     */
    public function getSubscriberIDWithCreate(): SubscriberID
    {
        $this->subscriberID = is_null($this->subscriberID) ? new SubscriberID() : $this->subscriberID;

        return $this->subscriberID;
    }

    /**
     * @param SubscriberID|null $subscriberID
     * @return self
     */
    public function setSubscriberID(?SubscriberID $subscriberID = null): self
    {
        $this->subscriberID = $subscriberID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSubscriberID(): self
    {
        $this->subscriberID = null;

        return $this;
    }

    /**
     * @return SubscriberType|null
     */
    public function getSubscriberType(): ?SubscriberType
    {
        return $this->subscriberType;
    }

    /**
     * @return SubscriberType
     */
    public function getSubscriberTypeWithCreate(): SubscriberType
    {
        $this->subscriberType = is_null($this->subscriberType) ? new SubscriberType() : $this->subscriberType;

        return $this->subscriberType;
    }

    /**
     * @param SubscriberType|null $subscriberType
     * @return self
     */
    public function setSubscriberType(?SubscriberType $subscriberType = null): self
    {
        $this->subscriberType = $subscriberType;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSubscriberType(): self
    {
        $this->subscriberType = null;

        return $this;
    }

    /**
     * @return SubscriberTypeCode|null
     */
    public function getSubscriberTypeCode(): ?SubscriberTypeCode
    {
        return $this->subscriberTypeCode;
    }

    /**
     * @return SubscriberTypeCode
     */
    public function getSubscriberTypeCodeWithCreate(): SubscriberTypeCode
    {
        $this->subscriberTypeCode = is_null($this->subscriberTypeCode) ? new SubscriberTypeCode() : $this->subscriberTypeCode;

        return $this->subscriberTypeCode;
    }

    /**
     * @param SubscriberTypeCode|null $subscriberTypeCode
     * @return self
     */
    public function setSubscriberTypeCode(?SubscriberTypeCode $subscriberTypeCode = null): self
    {
        $this->subscriberTypeCode = $subscriberTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSubscriberTypeCode(): self
    {
        $this->subscriberTypeCode = null;

        return $this;
    }

    /**
     * @return TotalDeliveredQuantity|null
     */
    public function getTotalDeliveredQuantity(): ?TotalDeliveredQuantity
    {
        return $this->totalDeliveredQuantity;
    }

    /**
     * @return TotalDeliveredQuantity
     */
    public function getTotalDeliveredQuantityWithCreate(): TotalDeliveredQuantity
    {
        $this->totalDeliveredQuantity = is_null($this->totalDeliveredQuantity) ? new TotalDeliveredQuantity() : $this->totalDeliveredQuantity;

        return $this->totalDeliveredQuantity;
    }

    /**
     * @param TotalDeliveredQuantity|null $totalDeliveredQuantity
     * @return self
     */
    public function setTotalDeliveredQuantity(?TotalDeliveredQuantity $totalDeliveredQuantity = null): self
    {
        $this->totalDeliveredQuantity = $totalDeliveredQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTotalDeliveredQuantity(): self
    {
        $this->totalDeliveredQuantity = null;

        return $this;
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
     * @return WebSiteAccess|null
     */
    public function getWebSiteAccess(): ?WebSiteAccess
    {
        return $this->webSiteAccess;
    }

    /**
     * @return WebSiteAccess
     */
    public function getWebSiteAccessWithCreate(): WebSiteAccess
    {
        $this->webSiteAccess = is_null($this->webSiteAccess) ? new WebSiteAccess() : $this->webSiteAccess;

        return $this->webSiteAccess;
    }

    /**
     * @param WebSiteAccess|null $webSiteAccess
     * @return self
     */
    public function setWebSiteAccess(?WebSiteAccess $webSiteAccess = null): self
    {
        $this->webSiteAccess = $webSiteAccess;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetWebSiteAccess(): self
    {
        $this->webSiteAccess = null;

        return $this;
    }

    /**
     * @return array<UtilityMeter>|null
     */
    public function getUtilityMeter(): ?array
    {
        return $this->utilityMeter;
    }

    /**
     * @param array<UtilityMeter>|null $utilityMeter
     * @return self
     */
    public function setUtilityMeter(?array $utilityMeter = null): self
    {
        $this->utilityMeter = $utilityMeter;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetUtilityMeter(): self
    {
        $this->utilityMeter = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearUtilityMeter(): self
    {
        $this->utilityMeter = [];

        return $this;
    }

    /**
     * @return UtilityMeter|null
     */
    public function firstUtilityMeter(): ?UtilityMeter
    {
        $utilityMeter = $this->utilityMeter ?? [];
        $utilityMeter = reset($utilityMeter);

        if ($utilityMeter === false) {
            return null;
        }

        return $utilityMeter;
    }

    /**
     * @return UtilityMeter|null
     */
    public function lastUtilityMeter(): ?UtilityMeter
    {
        $utilityMeter = $this->utilityMeter ?? [];
        $utilityMeter = end($utilityMeter);

        if ($utilityMeter === false) {
            return null;
        }

        return $utilityMeter;
    }

    /**
     * @param UtilityMeter $utilityMeter
     * @return self
     */
    public function addToUtilityMeter(UtilityMeter $utilityMeter): self
    {
        $this->utilityMeter[] = $utilityMeter;

        return $this;
    }

    /**
     * @return UtilityMeter
     */
    public function addToUtilityMeterWithCreate(): UtilityMeter
    {
        $this->addToutilityMeter($utilityMeter = new UtilityMeter());

        return $utilityMeter;
    }

    /**
     * @param UtilityMeter $utilityMeter
     * @return self
     */
    public function addOnceToUtilityMeter(UtilityMeter $utilityMeter): self
    {
        if (!is_array($this->utilityMeter)) {
            $this->utilityMeter = [];
        }

        $this->utilityMeter[0] = $utilityMeter;

        return $this;
    }

    /**
     * @return UtilityMeter
     */
    public function addOnceToUtilityMeterWithCreate(): UtilityMeter
    {
        if (!is_array($this->utilityMeter)) {
            $this->utilityMeter = [];
        }

        if ($this->utilityMeter === []) {
            $this->addOnceToutilityMeter(new UtilityMeter());
        }

        return $this->utilityMeter[0];
    }
}
