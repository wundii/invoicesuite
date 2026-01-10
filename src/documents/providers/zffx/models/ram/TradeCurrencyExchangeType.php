<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\zffx\models\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\providers\zffx\models\qdt\CurrencyCodeType;
use horstoeko\invoicesuite\documents\providers\zffx\models\udt\DateTimeType;
use horstoeko\invoicesuite\documents\providers\zffx\models\udt\RateType;
use JMS\Serializer\Annotation as JMS;

class TradeCurrencyExchangeType
{
    use HandlesObjectFlags;

    /**
     * @var null|CurrencyCodeType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\qdt\CurrencyCodeType")
     * @JMS\Expose
     * @JMS\SerializedName("SourceCurrencyCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getSourceCurrencyCode", setter="setSourceCurrencyCode")
     */
    private $sourceCurrencyCode;

    /**
     * @var null|CurrencyCodeType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\qdt\CurrencyCodeType")
     * @JMS\Expose
     * @JMS\SerializedName("TargetCurrencyCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getTargetCurrencyCode", setter="setTargetCurrencyCode")
     */
    private $targetCurrencyCode;

    /**
     * @var null|RateType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\udt\RateType")
     * @JMS\Expose
     * @JMS\SerializedName("ConversionRate")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getConversionRate", setter="setConversionRate")
     */
    private $conversionRate;

    /**
     * @var null|DateTimeType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\udt\DateTimeType")
     * @JMS\Expose
     * @JMS\SerializedName("ConversionRateDateTime")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getConversionRateDateTime", setter="setConversionRateDateTime")
     */
    private $conversionRateDateTime;

    /**
     * @return null|CurrencyCodeType
     */
    public function getSourceCurrencyCode(): ?CurrencyCodeType
    {
        return $this->sourceCurrencyCode;
    }

    /**
     * @return CurrencyCodeType
     */
    public function getSourceCurrencyCodeWithCreate(): CurrencyCodeType
    {
        $this->sourceCurrencyCode = is_null($this->sourceCurrencyCode) ? new CurrencyCodeType() : $this->sourceCurrencyCode;

        return $this->sourceCurrencyCode;
    }

    /**
     * @param  null|CurrencyCodeType $sourceCurrencyCode
     * @return static
     */
    public function setSourceCurrencyCode(?CurrencyCodeType $sourceCurrencyCode = null): static
    {
        $this->sourceCurrencyCode = $sourceCurrencyCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSourceCurrencyCode(): static
    {
        $this->sourceCurrencyCode = null;

        return $this;
    }

    /**
     * @return null|CurrencyCodeType
     */
    public function getTargetCurrencyCode(): ?CurrencyCodeType
    {
        return $this->targetCurrencyCode;
    }

    /**
     * @return CurrencyCodeType
     */
    public function getTargetCurrencyCodeWithCreate(): CurrencyCodeType
    {
        $this->targetCurrencyCode = is_null($this->targetCurrencyCode) ? new CurrencyCodeType() : $this->targetCurrencyCode;

        return $this->targetCurrencyCode;
    }

    /**
     * @param  null|CurrencyCodeType $targetCurrencyCode
     * @return static
     */
    public function setTargetCurrencyCode(?CurrencyCodeType $targetCurrencyCode = null): static
    {
        $this->targetCurrencyCode = $targetCurrencyCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTargetCurrencyCode(): static
    {
        $this->targetCurrencyCode = null;

        return $this;
    }

    /**
     * @return null|RateType
     */
    public function getConversionRate(): ?RateType
    {
        return $this->conversionRate;
    }

    /**
     * @return RateType
     */
    public function getConversionRateWithCreate(): RateType
    {
        $this->conversionRate = is_null($this->conversionRate) ? new RateType() : $this->conversionRate;

        return $this->conversionRate;
    }

    /**
     * @param  null|RateType $conversionRate
     * @return static
     */
    public function setConversionRate(?RateType $conversionRate = null): static
    {
        $this->conversionRate = $conversionRate;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetConversionRate(): static
    {
        $this->conversionRate = null;

        return $this;
    }

    /**
     * @return null|DateTimeType
     */
    public function getConversionRateDateTime(): ?DateTimeType
    {
        return $this->conversionRateDateTime;
    }

    /**
     * @return DateTimeType
     */
    public function getConversionRateDateTimeWithCreate(): DateTimeType
    {
        $this->conversionRateDateTime = is_null($this->conversionRateDateTime) ? new DateTimeType() : $this->conversionRateDateTime;

        return $this->conversionRateDateTime;
    }

    /**
     * @param  null|DateTimeType $conversionRateDateTime
     * @return static
     */
    public function setConversionRateDateTime(?DateTimeType $conversionRateDateTime = null): static
    {
        $this->conversionRateDateTime = $conversionRateDateTime;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetConversionRateDateTime(): static
    {
        $this->conversionRateDateTime = null;

        return $this;
    }
}
