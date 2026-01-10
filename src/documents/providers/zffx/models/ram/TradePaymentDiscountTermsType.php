<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\zffx\models\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\providers\zffx\models\udt\AmountType;
use horstoeko\invoicesuite\documents\providers\zffx\models\udt\DateTimeType;
use horstoeko\invoicesuite\documents\providers\zffx\models\udt\MeasureType;
use horstoeko\invoicesuite\documents\providers\zffx\models\udt\PercentType;
use JMS\Serializer\Annotation as JMS;

class TradePaymentDiscountTermsType
{
    use HandlesObjectFlags;

    /**
     * @var null|DateTimeType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\udt\DateTimeType")
     * @JMS\Expose
     * @JMS\SerializedName("BasisDateTime")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBasisDateTime", setter="setBasisDateTime")
     */
    private $basisDateTime;

    /**
     * @var null|MeasureType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\udt\MeasureType")
     * @JMS\Expose
     * @JMS\SerializedName("BasisPeriodMeasure")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBasisPeriodMeasure", setter="setBasisPeriodMeasure")
     */
    private $basisPeriodMeasure;

    /**
     * @var null|AmountType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\udt\AmountType")
     * @JMS\Expose
     * @JMS\SerializedName("BasisAmount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBasisAmount", setter="setBasisAmount")
     */
    private $basisAmount;

    /**
     * @var null|PercentType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\udt\PercentType")
     * @JMS\Expose
     * @JMS\SerializedName("CalculationPercent")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getCalculationPercent", setter="setCalculationPercent")
     */
    private $calculationPercent;

    /**
     * @var null|AmountType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\udt\AmountType")
     * @JMS\Expose
     * @JMS\SerializedName("ActualDiscountAmount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getActualDiscountAmount", setter="setActualDiscountAmount")
     */
    private $actualDiscountAmount;

    /**
     * @return null|DateTimeType
     */
    public function getBasisDateTime(): ?DateTimeType
    {
        return $this->basisDateTime;
    }

    /**
     * @return DateTimeType
     */
    public function getBasisDateTimeWithCreate(): DateTimeType
    {
        $this->basisDateTime = is_null($this->basisDateTime) ? new DateTimeType() : $this->basisDateTime;

        return $this->basisDateTime;
    }

    /**
     * @param  null|DateTimeType $basisDateTime
     * @return static
     */
    public function setBasisDateTime(?DateTimeType $basisDateTime = null): static
    {
        $this->basisDateTime = $basisDateTime;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBasisDateTime(): static
    {
        $this->basisDateTime = null;

        return $this;
    }

    /**
     * @return null|MeasureType
     */
    public function getBasisPeriodMeasure(): ?MeasureType
    {
        return $this->basisPeriodMeasure;
    }

    /**
     * @return MeasureType
     */
    public function getBasisPeriodMeasureWithCreate(): MeasureType
    {
        $this->basisPeriodMeasure = is_null($this->basisPeriodMeasure) ? new MeasureType() : $this->basisPeriodMeasure;

        return $this->basisPeriodMeasure;
    }

    /**
     * @param  null|MeasureType $basisPeriodMeasure
     * @return static
     */
    public function setBasisPeriodMeasure(?MeasureType $basisPeriodMeasure = null): static
    {
        $this->basisPeriodMeasure = $basisPeriodMeasure;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBasisPeriodMeasure(): static
    {
        $this->basisPeriodMeasure = null;

        return $this;
    }

    /**
     * @return null|AmountType
     */
    public function getBasisAmount(): ?AmountType
    {
        return $this->basisAmount;
    }

    /**
     * @return AmountType
     */
    public function getBasisAmountWithCreate(): AmountType
    {
        $this->basisAmount = is_null($this->basisAmount) ? new AmountType() : $this->basisAmount;

        return $this->basisAmount;
    }

    /**
     * @param  null|AmountType $basisAmount
     * @return static
     */
    public function setBasisAmount(?AmountType $basisAmount = null): static
    {
        $this->basisAmount = $basisAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBasisAmount(): static
    {
        $this->basisAmount = null;

        return $this;
    }

    /**
     * @return null|PercentType
     */
    public function getCalculationPercent(): ?PercentType
    {
        return $this->calculationPercent;
    }

    /**
     * @return PercentType
     */
    public function getCalculationPercentWithCreate(): PercentType
    {
        $this->calculationPercent = is_null($this->calculationPercent) ? new PercentType() : $this->calculationPercent;

        return $this->calculationPercent;
    }

    /**
     * @param  null|PercentType $calculationPercent
     * @return static
     */
    public function setCalculationPercent(?PercentType $calculationPercent = null): static
    {
        $this->calculationPercent = $calculationPercent;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCalculationPercent(): static
    {
        $this->calculationPercent = null;

        return $this;
    }

    /**
     * @return null|AmountType
     */
    public function getActualDiscountAmount(): ?AmountType
    {
        return $this->actualDiscountAmount;
    }

    /**
     * @return AmountType
     */
    public function getActualDiscountAmountWithCreate(): AmountType
    {
        $this->actualDiscountAmount = is_null($this->actualDiscountAmount) ? new AmountType() : $this->actualDiscountAmount;

        return $this->actualDiscountAmount;
    }

    /**
     * @param  null|AmountType $actualDiscountAmount
     * @return static
     */
    public function setActualDiscountAmount(?AmountType $actualDiscountAmount = null): static
    {
        $this->actualDiscountAmount = $actualDiscountAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetActualDiscountAmount(): static
    {
        $this->actualDiscountAmount = null;

        return $this;
    }
}
