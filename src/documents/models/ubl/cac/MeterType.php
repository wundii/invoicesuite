<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MeterConstant;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MeterConstantCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MeterName;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MeterNumber;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TotalDeliveredQuantity;

class MeterType
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
     * @var MeterName|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MeterName")
     * @JMS\Expose
     * @JMS\SerializedName("MeterName")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMeterName", setter="setMeterName")
     */
    private $meterName;

    /**
     * @var MeterConstant|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MeterConstant")
     * @JMS\Expose
     * @JMS\SerializedName("MeterConstant")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMeterConstant", setter="setMeterConstant")
     */
    private $meterConstant;

    /**
     * @var MeterConstantCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MeterConstantCode")
     * @JMS\Expose
     * @JMS\SerializedName("MeterConstantCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMeterConstantCode", setter="setMeterConstantCode")
     */
    private $meterConstantCode;

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
     * @var array<MeterReading>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\MeterReading>")
     * @JMS\Expose
     * @JMS\SerializedName("MeterReading")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="MeterReading", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getMeterReading", setter="setMeterReading")
     */
    private $meterReading;

    /**
     * @var array<MeterProperty>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\MeterProperty>")
     * @JMS\Expose
     * @JMS\SerializedName("MeterProperty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="MeterProperty", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getMeterProperty", setter="setMeterProperty")
     */
    private $meterProperty;

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
     * @return MeterName|null
     */
    public function getMeterName(): ?MeterName
    {
        return $this->meterName;
    }

    /**
     * @return MeterName
     */
    public function getMeterNameWithCreate(): MeterName
    {
        $this->meterName = is_null($this->meterName) ? new MeterName() : $this->meterName;

        return $this->meterName;
    }

    /**
     * @param MeterName|null $meterName
     * @return self
     */
    public function setMeterName(?MeterName $meterName = null): self
    {
        $this->meterName = $meterName;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMeterName(): self
    {
        $this->meterName = null;

        return $this;
    }

    /**
     * @return MeterConstant|null
     */
    public function getMeterConstant(): ?MeterConstant
    {
        return $this->meterConstant;
    }

    /**
     * @return MeterConstant
     */
    public function getMeterConstantWithCreate(): MeterConstant
    {
        $this->meterConstant = is_null($this->meterConstant) ? new MeterConstant() : $this->meterConstant;

        return $this->meterConstant;
    }

    /**
     * @param MeterConstant|null $meterConstant
     * @return self
     */
    public function setMeterConstant(?MeterConstant $meterConstant = null): self
    {
        $this->meterConstant = $meterConstant;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMeterConstant(): self
    {
        $this->meterConstant = null;

        return $this;
    }

    /**
     * @return MeterConstantCode|null
     */
    public function getMeterConstantCode(): ?MeterConstantCode
    {
        return $this->meterConstantCode;
    }

    /**
     * @return MeterConstantCode
     */
    public function getMeterConstantCodeWithCreate(): MeterConstantCode
    {
        $this->meterConstantCode = is_null($this->meterConstantCode) ? new MeterConstantCode() : $this->meterConstantCode;

        return $this->meterConstantCode;
    }

    /**
     * @param MeterConstantCode|null $meterConstantCode
     * @return self
     */
    public function setMeterConstantCode(?MeterConstantCode $meterConstantCode = null): self
    {
        $this->meterConstantCode = $meterConstantCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMeterConstantCode(): self
    {
        $this->meterConstantCode = null;

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
     * @return array<MeterReading>|null
     */
    public function getMeterReading(): ?array
    {
        return $this->meterReading;
    }

    /**
     * @param array<MeterReading>|null $meterReading
     * @return self
     */
    public function setMeterReading(?array $meterReading = null): self
    {
        $this->meterReading = $meterReading;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMeterReading(): self
    {
        $this->meterReading = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearMeterReading(): self
    {
        $this->meterReading = [];

        return $this;
    }

    /**
     * @return MeterReading|null
     */
    public function firstMeterReading(): ?MeterReading
    {
        $meterReading = $this->meterReading ?? [];
        $meterReading = reset($meterReading);

        if ($meterReading === false) {
            return null;
        }

        return $meterReading;
    }

    /**
     * @return MeterReading|null
     */
    public function lastMeterReading(): ?MeterReading
    {
        $meterReading = $this->meterReading ?? [];
        $meterReading = end($meterReading);

        if ($meterReading === false) {
            return null;
        }

        return $meterReading;
    }

    /**
     * @param MeterReading $meterReading
     * @return self
     */
    public function addToMeterReading(MeterReading $meterReading): self
    {
        $this->meterReading[] = $meterReading;

        return $this;
    }

    /**
     * @return MeterReading
     */
    public function addToMeterReadingWithCreate(): MeterReading
    {
        $this->addTometerReading($meterReading = new MeterReading());

        return $meterReading;
    }

    /**
     * @param MeterReading $meterReading
     * @return self
     */
    public function addOnceToMeterReading(MeterReading $meterReading): self
    {
        if (!is_array($this->meterReading)) {
            $this->meterReading = [];
        }

        $this->meterReading[0] = $meterReading;

        return $this;
    }

    /**
     * @return MeterReading
     */
    public function addOnceToMeterReadingWithCreate(): MeterReading
    {
        if (!is_array($this->meterReading)) {
            $this->meterReading = [];
        }

        if ($this->meterReading === []) {
            $this->addOnceTometerReading(new MeterReading());
        }

        return $this->meterReading[0];
    }

    /**
     * @return array<MeterProperty>|null
     */
    public function getMeterProperty(): ?array
    {
        return $this->meterProperty;
    }

    /**
     * @param array<MeterProperty>|null $meterProperty
     * @return self
     */
    public function setMeterProperty(?array $meterProperty = null): self
    {
        $this->meterProperty = $meterProperty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMeterProperty(): self
    {
        $this->meterProperty = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearMeterProperty(): self
    {
        $this->meterProperty = [];

        return $this;
    }

    /**
     * @return MeterProperty|null
     */
    public function firstMeterProperty(): ?MeterProperty
    {
        $meterProperty = $this->meterProperty ?? [];
        $meterProperty = reset($meterProperty);

        if ($meterProperty === false) {
            return null;
        }

        return $meterProperty;
    }

    /**
     * @return MeterProperty|null
     */
    public function lastMeterProperty(): ?MeterProperty
    {
        $meterProperty = $this->meterProperty ?? [];
        $meterProperty = end($meterProperty);

        if ($meterProperty === false) {
            return null;
        }

        return $meterProperty;
    }

    /**
     * @param MeterProperty $meterProperty
     * @return self
     */
    public function addToMeterProperty(MeterProperty $meterProperty): self
    {
        $this->meterProperty[] = $meterProperty;

        return $this;
    }

    /**
     * @return MeterProperty
     */
    public function addToMeterPropertyWithCreate(): MeterProperty
    {
        $this->addTometerProperty($meterProperty = new MeterProperty());

        return $meterProperty;
    }

    /**
     * @param MeterProperty $meterProperty
     * @return self
     */
    public function addOnceToMeterProperty(MeterProperty $meterProperty): self
    {
        if (!is_array($this->meterProperty)) {
            $this->meterProperty = [];
        }

        $this->meterProperty[0] = $meterProperty;

        return $this;
    }

    /**
     * @return MeterProperty
     */
    public function addOnceToMeterPropertyWithCreate(): MeterProperty
    {
        if (!is_array($this->meterProperty)) {
            $this->meterProperty = [];
        }

        if ($this->meterProperty === []) {
            $this->addOnceTometerProperty(new MeterProperty());
        }

        return $this->meterProperty[0];
    }
}
