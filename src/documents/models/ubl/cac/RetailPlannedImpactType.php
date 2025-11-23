<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Amount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ForecastPurposeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ForecastTypeCode;

class RetailPlannedImpactType
{
    use HandlesObjectFlags;

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
     * @var ForecastPurposeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ForecastPurposeCode")
     * @JMS\Expose
     * @JMS\SerializedName("ForecastPurposeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getForecastPurposeCode", setter="setForecastPurposeCode")
     */
    private $forecastPurposeCode;

    /**
     * @var ForecastTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ForecastTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("ForecastTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getForecastTypeCode", setter="setForecastTypeCode")
     */
    private $forecastTypeCode;

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
     * @return ForecastPurposeCode|null
     */
    public function getForecastPurposeCode(): ?ForecastPurposeCode
    {
        return $this->forecastPurposeCode;
    }

    /**
     * @return ForecastPurposeCode
     */
    public function getForecastPurposeCodeWithCreate(): ForecastPurposeCode
    {
        $this->forecastPurposeCode = is_null($this->forecastPurposeCode) ? new ForecastPurposeCode() : $this->forecastPurposeCode;

        return $this->forecastPurposeCode;
    }

    /**
     * @param ForecastPurposeCode|null $forecastPurposeCode
     * @return self
     */
    public function setForecastPurposeCode(?ForecastPurposeCode $forecastPurposeCode = null): self
    {
        $this->forecastPurposeCode = $forecastPurposeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetForecastPurposeCode(): self
    {
        $this->forecastPurposeCode = null;

        return $this;
    }

    /**
     * @return ForecastTypeCode|null
     */
    public function getForecastTypeCode(): ?ForecastTypeCode
    {
        return $this->forecastTypeCode;
    }

    /**
     * @return ForecastTypeCode
     */
    public function getForecastTypeCodeWithCreate(): ForecastTypeCode
    {
        $this->forecastTypeCode = is_null($this->forecastTypeCode) ? new ForecastTypeCode() : $this->forecastTypeCode;

        return $this->forecastTypeCode;
    }

    /**
     * @param ForecastTypeCode|null $forecastTypeCode
     * @return self
     */
    public function setForecastTypeCode(?ForecastTypeCode $forecastTypeCode = null): self
    {
        $this->forecastTypeCode = $forecastTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetForecastTypeCode(): self
    {
        $this->forecastTypeCode = null;

        return $this;
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
