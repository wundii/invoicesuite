<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Amount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ConsumptionLevel;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ConsumptionLevelCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MeterNumber;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Quantity;

class ConsumptionHistoryType
{
    use HandlesObjectFlags;

    /**
     * @var MeterNumber|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MeterNumber")
     * @JMS\Expose
     * @JMS\SerializedName("MeterNumber")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMeterNumber", setter="setMeterNumber")
     */
    private $meterNumber;

    /**
     * @var Quantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Quantity")
     * @JMS\Expose
     * @JMS\SerializedName("Quantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getQuantity", setter="setQuantity")
     */
    private $quantity;

    /**
     * @var Amount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Amount")
     * @JMS\Expose
     * @JMS\SerializedName("Amount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAmount", setter="setAmount")
     */
    private $amount;

    /**
     * @var ConsumptionLevelCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ConsumptionLevelCode")
     * @JMS\Expose
     * @JMS\SerializedName("ConsumptionLevelCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getConsumptionLevelCode", setter="setConsumptionLevelCode")
     */
    private $consumptionLevelCode;

    /**
     * @var ConsumptionLevel|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ConsumptionLevel")
     * @JMS\Expose
     * @JMS\SerializedName("ConsumptionLevel")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getConsumptionLevel", setter="setConsumptionLevel")
     */
    private $consumptionLevel;

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
     * @var Period|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Period")
     * @JMS\Expose
     * @JMS\SerializedName("Period")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPeriod", setter="setPeriod")
     */
    private $period;

    /**
     * @return MeterNumber|null
     */
    public function getMeterNumber(): ?MeterNumber
    {
        return $this->meterNumber;
    }

    /**
     * @return MeterNumber
     */
    public function getMeterNumberWithCreate(): MeterNumber
    {
        $this->meterNumber = is_null($this->meterNumber) ? new MeterNumber() : $this->meterNumber;

        return $this->meterNumber;
    }

    /**
     * @param MeterNumber|null $meterNumber
     * @return self
     */
    public function setMeterNumber(?MeterNumber $meterNumber = null): self
    {
        $this->meterNumber = $meterNumber;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMeterNumber(): self
    {
        $this->meterNumber = null;

        return $this;
    }

    /**
     * @return Quantity|null
     */
    public function getQuantity(): ?Quantity
    {
        return $this->quantity;
    }

    /**
     * @return Quantity
     */
    public function getQuantityWithCreate(): Quantity
    {
        $this->quantity = is_null($this->quantity) ? new Quantity() : $this->quantity;

        return $this->quantity;
    }

    /**
     * @param Quantity|null $quantity
     * @return self
     */
    public function setQuantity(?Quantity $quantity = null): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetQuantity(): self
    {
        $this->quantity = null;

        return $this;
    }

    /**
     * @return Amount|null
     */
    public function getAmount(): ?Amount
    {
        return $this->amount;
    }

    /**
     * @return Amount
     */
    public function getAmountWithCreate(): Amount
    {
        $this->amount = is_null($this->amount) ? new Amount() : $this->amount;

        return $this->amount;
    }

    /**
     * @param Amount|null $amount
     * @return self
     */
    public function setAmount(?Amount $amount = null): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAmount(): self
    {
        $this->amount = null;

        return $this;
    }

    /**
     * @return ConsumptionLevelCode|null
     */
    public function getConsumptionLevelCode(): ?ConsumptionLevelCode
    {
        return $this->consumptionLevelCode;
    }

    /**
     * @return ConsumptionLevelCode
     */
    public function getConsumptionLevelCodeWithCreate(): ConsumptionLevelCode
    {
        $this->consumptionLevelCode = is_null($this->consumptionLevelCode) ? new ConsumptionLevelCode() : $this->consumptionLevelCode;

        return $this->consumptionLevelCode;
    }

    /**
     * @param ConsumptionLevelCode|null $consumptionLevelCode
     * @return self
     */
    public function setConsumptionLevelCode(?ConsumptionLevelCode $consumptionLevelCode = null): self
    {
        $this->consumptionLevelCode = $consumptionLevelCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetConsumptionLevelCode(): self
    {
        $this->consumptionLevelCode = null;

        return $this;
    }

    /**
     * @return ConsumptionLevel|null
     */
    public function getConsumptionLevel(): ?ConsumptionLevel
    {
        return $this->consumptionLevel;
    }

    /**
     * @return ConsumptionLevel
     */
    public function getConsumptionLevelWithCreate(): ConsumptionLevel
    {
        $this->consumptionLevel = is_null($this->consumptionLevel) ? new ConsumptionLevel() : $this->consumptionLevel;

        return $this->consumptionLevel;
    }

    /**
     * @param ConsumptionLevel|null $consumptionLevel
     * @return self
     */
    public function setConsumptionLevel(?ConsumptionLevel $consumptionLevel = null): self
    {
        $this->consumptionLevel = $consumptionLevel;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetConsumptionLevel(): self
    {
        $this->consumptionLevel = null;

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
     * @return Period|null
     */
    public function getPeriod(): ?Period
    {
        return $this->period;
    }

    /**
     * @return Period
     */
    public function getPeriodWithCreate(): Period
    {
        $this->period = is_null($this->period) ? new Period() : $this->period;

        return $this->period;
    }

    /**
     * @param Period|null $period
     * @return self
     */
    public function setPeriod(?Period $period = null): self
    {
        $this->period = $period;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPeriod(): self
    {
        $this->period = null;

        return $this;
    }
}
