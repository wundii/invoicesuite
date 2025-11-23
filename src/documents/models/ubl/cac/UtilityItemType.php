<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ConsumptionType;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ConsumptionTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CurrentChargeType;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CurrentChargeTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\OneTimeChargeType;
use horstoeko\invoicesuite\documents\models\ubl\cbc\OneTimeChargeTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PackQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PackSizeNumeric;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SubscriberID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SubscriberType;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SubscriberTypeCode;

class UtilityItemType
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
     * @var PackQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PackQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("PackQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPackQuantity", setter="setPackQuantity")
     */
    private $packQuantity;

    /**
     * @var PackSizeNumeric|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PackSizeNumeric")
     * @JMS\Expose
     * @JMS\SerializedName("PackSizeNumeric")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPackSizeNumeric", setter="setPackSizeNumeric")
     */
    private $packSizeNumeric;

    /**
     * @var ConsumptionType|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ConsumptionType")
     * @JMS\Expose
     * @JMS\SerializedName("ConsumptionType")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getConsumptionType", setter="setConsumptionType")
     */
    private $consumptionType;

    /**
     * @var ConsumptionTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ConsumptionTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("ConsumptionTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getConsumptionTypeCode", setter="setConsumptionTypeCode")
     */
    private $consumptionTypeCode;

    /**
     * @var CurrentChargeType|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CurrentChargeType")
     * @JMS\Expose
     * @JMS\SerializedName("CurrentChargeType")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCurrentChargeType", setter="setCurrentChargeType")
     */
    private $currentChargeType;

    /**
     * @var CurrentChargeTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CurrentChargeTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("CurrentChargeTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCurrentChargeTypeCode", setter="setCurrentChargeTypeCode")
     */
    private $currentChargeTypeCode;

    /**
     * @var OneTimeChargeType|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\OneTimeChargeType")
     * @JMS\Expose
     * @JMS\SerializedName("OneTimeChargeType")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOneTimeChargeType", setter="setOneTimeChargeType")
     */
    private $oneTimeChargeType;

    /**
     * @var OneTimeChargeTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\OneTimeChargeTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("OneTimeChargeTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOneTimeChargeTypeCode", setter="setOneTimeChargeTypeCode")
     */
    private $oneTimeChargeTypeCode;

    /**
     * @var TaxCategory|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\TaxCategory")
     * @JMS\Expose
     * @JMS\SerializedName("TaxCategory")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTaxCategory", setter="setTaxCategory")
     */
    private $taxCategory;

    /**
     * @var Contract|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Contract")
     * @JMS\Expose
     * @JMS\SerializedName("Contract")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getContract", setter="setContract")
     */
    private $contract;

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
     * @return PackQuantity|null
     */
    public function getPackQuantity(): ?PackQuantity
    {
        return $this->packQuantity;
    }

    /**
     * @return PackQuantity
     */
    public function getPackQuantityWithCreate(): PackQuantity
    {
        $this->packQuantity = is_null($this->packQuantity) ? new PackQuantity() : $this->packQuantity;

        return $this->packQuantity;
    }

    /**
     * @param PackQuantity|null $packQuantity
     * @return self
     */
    public function setPackQuantity(?PackQuantity $packQuantity = null): self
    {
        $this->packQuantity = $packQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPackQuantity(): self
    {
        $this->packQuantity = null;

        return $this;
    }

    /**
     * @return PackSizeNumeric|null
     */
    public function getPackSizeNumeric(): ?PackSizeNumeric
    {
        return $this->packSizeNumeric;
    }

    /**
     * @return PackSizeNumeric
     */
    public function getPackSizeNumericWithCreate(): PackSizeNumeric
    {
        $this->packSizeNumeric = is_null($this->packSizeNumeric) ? new PackSizeNumeric() : $this->packSizeNumeric;

        return $this->packSizeNumeric;
    }

    /**
     * @param PackSizeNumeric|null $packSizeNumeric
     * @return self
     */
    public function setPackSizeNumeric(?PackSizeNumeric $packSizeNumeric = null): self
    {
        $this->packSizeNumeric = $packSizeNumeric;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPackSizeNumeric(): self
    {
        $this->packSizeNumeric = null;

        return $this;
    }

    /**
     * @return ConsumptionType|null
     */
    public function getConsumptionType(): ?ConsumptionType
    {
        return $this->consumptionType;
    }

    /**
     * @return ConsumptionType
     */
    public function getConsumptionTypeWithCreate(): ConsumptionType
    {
        $this->consumptionType = is_null($this->consumptionType) ? new ConsumptionType() : $this->consumptionType;

        return $this->consumptionType;
    }

    /**
     * @param ConsumptionType|null $consumptionType
     * @return self
     */
    public function setConsumptionType(?ConsumptionType $consumptionType = null): self
    {
        $this->consumptionType = $consumptionType;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetConsumptionType(): self
    {
        $this->consumptionType = null;

        return $this;
    }

    /**
     * @return ConsumptionTypeCode|null
     */
    public function getConsumptionTypeCode(): ?ConsumptionTypeCode
    {
        return $this->consumptionTypeCode;
    }

    /**
     * @return ConsumptionTypeCode
     */
    public function getConsumptionTypeCodeWithCreate(): ConsumptionTypeCode
    {
        $this->consumptionTypeCode = is_null($this->consumptionTypeCode) ? new ConsumptionTypeCode() : $this->consumptionTypeCode;

        return $this->consumptionTypeCode;
    }

    /**
     * @param ConsumptionTypeCode|null $consumptionTypeCode
     * @return self
     */
    public function setConsumptionTypeCode(?ConsumptionTypeCode $consumptionTypeCode = null): self
    {
        $this->consumptionTypeCode = $consumptionTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetConsumptionTypeCode(): self
    {
        $this->consumptionTypeCode = null;

        return $this;
    }

    /**
     * @return CurrentChargeType|null
     */
    public function getCurrentChargeType(): ?CurrentChargeType
    {
        return $this->currentChargeType;
    }

    /**
     * @return CurrentChargeType
     */
    public function getCurrentChargeTypeWithCreate(): CurrentChargeType
    {
        $this->currentChargeType = is_null($this->currentChargeType) ? new CurrentChargeType() : $this->currentChargeType;

        return $this->currentChargeType;
    }

    /**
     * @param CurrentChargeType|null $currentChargeType
     * @return self
     */
    public function setCurrentChargeType(?CurrentChargeType $currentChargeType = null): self
    {
        $this->currentChargeType = $currentChargeType;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCurrentChargeType(): self
    {
        $this->currentChargeType = null;

        return $this;
    }

    /**
     * @return CurrentChargeTypeCode|null
     */
    public function getCurrentChargeTypeCode(): ?CurrentChargeTypeCode
    {
        return $this->currentChargeTypeCode;
    }

    /**
     * @return CurrentChargeTypeCode
     */
    public function getCurrentChargeTypeCodeWithCreate(): CurrentChargeTypeCode
    {
        $this->currentChargeTypeCode = is_null($this->currentChargeTypeCode) ? new CurrentChargeTypeCode() : $this->currentChargeTypeCode;

        return $this->currentChargeTypeCode;
    }

    /**
     * @param CurrentChargeTypeCode|null $currentChargeTypeCode
     * @return self
     */
    public function setCurrentChargeTypeCode(?CurrentChargeTypeCode $currentChargeTypeCode = null): self
    {
        $this->currentChargeTypeCode = $currentChargeTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCurrentChargeTypeCode(): self
    {
        $this->currentChargeTypeCode = null;

        return $this;
    }

    /**
     * @return OneTimeChargeType|null
     */
    public function getOneTimeChargeType(): ?OneTimeChargeType
    {
        return $this->oneTimeChargeType;
    }

    /**
     * @return OneTimeChargeType
     */
    public function getOneTimeChargeTypeWithCreate(): OneTimeChargeType
    {
        $this->oneTimeChargeType = is_null($this->oneTimeChargeType) ? new OneTimeChargeType() : $this->oneTimeChargeType;

        return $this->oneTimeChargeType;
    }

    /**
     * @param OneTimeChargeType|null $oneTimeChargeType
     * @return self
     */
    public function setOneTimeChargeType(?OneTimeChargeType $oneTimeChargeType = null): self
    {
        $this->oneTimeChargeType = $oneTimeChargeType;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetOneTimeChargeType(): self
    {
        $this->oneTimeChargeType = null;

        return $this;
    }

    /**
     * @return OneTimeChargeTypeCode|null
     */
    public function getOneTimeChargeTypeCode(): ?OneTimeChargeTypeCode
    {
        return $this->oneTimeChargeTypeCode;
    }

    /**
     * @return OneTimeChargeTypeCode
     */
    public function getOneTimeChargeTypeCodeWithCreate(): OneTimeChargeTypeCode
    {
        $this->oneTimeChargeTypeCode = is_null($this->oneTimeChargeTypeCode) ? new OneTimeChargeTypeCode() : $this->oneTimeChargeTypeCode;

        return $this->oneTimeChargeTypeCode;
    }

    /**
     * @param OneTimeChargeTypeCode|null $oneTimeChargeTypeCode
     * @return self
     */
    public function setOneTimeChargeTypeCode(?OneTimeChargeTypeCode $oneTimeChargeTypeCode = null): self
    {
        $this->oneTimeChargeTypeCode = $oneTimeChargeTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetOneTimeChargeTypeCode(): self
    {
        $this->oneTimeChargeTypeCode = null;

        return $this;
    }

    /**
     * @return TaxCategory|null
     */
    public function getTaxCategory(): ?TaxCategory
    {
        return $this->taxCategory;
    }

    /**
     * @return TaxCategory
     */
    public function getTaxCategoryWithCreate(): TaxCategory
    {
        $this->taxCategory = is_null($this->taxCategory) ? new TaxCategory() : $this->taxCategory;

        return $this->taxCategory;
    }

    /**
     * @param TaxCategory|null $taxCategory
     * @return self
     */
    public function setTaxCategory(?TaxCategory $taxCategory = null): self
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTaxCategory(): self
    {
        $this->taxCategory = null;

        return $this;
    }

    /**
     * @return Contract|null
     */
    public function getContract(): ?Contract
    {
        return $this->contract;
    }

    /**
     * @return Contract
     */
    public function getContractWithCreate(): Contract
    {
        $this->contract = is_null($this->contract) ? new Contract() : $this->contract;

        return $this->contract;
    }

    /**
     * @param Contract|null $contract
     * @return self
     */
    public function setContract(?Contract $contract = null): self
    {
        $this->contract = $contract;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetContract(): self
    {
        $this->contract = null;

        return $this;
    }
}
