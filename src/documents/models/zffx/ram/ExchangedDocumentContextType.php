<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffx\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffx\udt\IndicatorType;
use JMS\Serializer\Annotation as JMS;

class ExchangedDocumentContextType
{
    use HandlesObjectFlags;

    /**
     * @var null|IndicatorType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\udt\IndicatorType")
     * @JMS\Expose
     * @JMS\SerializedName("TestIndicator")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getTestIndicator", setter="setTestIndicator")
     */
    private $testIndicator;

    /**
     * @var null|DocumentContextParameterType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\ram\DocumentContextParameterType")
     * @JMS\Expose
     * @JMS\SerializedName("BusinessProcessSpecifiedDocumentContextParameter")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBusinessProcessSpecifiedDocumentContextParameter", setter="setBusinessProcessSpecifiedDocumentContextParameter")
     */
    private $businessProcessSpecifiedDocumentContextParameter;

    /**
     * @var null|DocumentContextParameterType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\ram\DocumentContextParameterType")
     * @JMS\Expose
     * @JMS\SerializedName("GuidelineSpecifiedDocumentContextParameter")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getGuidelineSpecifiedDocumentContextParameter", setter="setGuidelineSpecifiedDocumentContextParameter")
     */
    private $guidelineSpecifiedDocumentContextParameter;

    /**
     * @return null|IndicatorType
     */
    public function getTestIndicator(): ?IndicatorType
    {
        return $this->testIndicator;
    }

    /**
     * @return IndicatorType
     */
    public function getTestIndicatorWithCreate(): IndicatorType
    {
        $this->testIndicator = is_null($this->testIndicator) ? new IndicatorType() : $this->testIndicator;

        return $this->testIndicator;
    }

    /**
     * @param  null|IndicatorType $testIndicator
     * @return static
     */
    public function setTestIndicator(?IndicatorType $testIndicator = null): static
    {
        $this->testIndicator = $testIndicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTestIndicator(): static
    {
        $this->testIndicator = null;

        return $this;
    }

    /**
     * @return null|DocumentContextParameterType
     */
    public function getBusinessProcessSpecifiedDocumentContextParameter(): ?DocumentContextParameterType
    {
        return $this->businessProcessSpecifiedDocumentContextParameter;
    }

    /**
     * @return DocumentContextParameterType
     */
    public function getBusinessProcessSpecifiedDocumentContextParameterWithCreate(): DocumentContextParameterType
    {
        $this->businessProcessSpecifiedDocumentContextParameter = is_null($this->businessProcessSpecifiedDocumentContextParameter) ? new DocumentContextParameterType() : $this->businessProcessSpecifiedDocumentContextParameter;

        return $this->businessProcessSpecifiedDocumentContextParameter;
    }

    /**
     * @param  null|DocumentContextParameterType $businessProcessSpecifiedDocumentContextParameter
     * @return static
     */
    public function setBusinessProcessSpecifiedDocumentContextParameter(
        ?DocumentContextParameterType $businessProcessSpecifiedDocumentContextParameter = null,
    ): static {
        $this->businessProcessSpecifiedDocumentContextParameter = $businessProcessSpecifiedDocumentContextParameter;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBusinessProcessSpecifiedDocumentContextParameter(): static
    {
        $this->businessProcessSpecifiedDocumentContextParameter = null;

        return $this;
    }

    /**
     * @return null|DocumentContextParameterType
     */
    public function getGuidelineSpecifiedDocumentContextParameter(): ?DocumentContextParameterType
    {
        return $this->guidelineSpecifiedDocumentContextParameter;
    }

    /**
     * @return DocumentContextParameterType
     */
    public function getGuidelineSpecifiedDocumentContextParameterWithCreate(): DocumentContextParameterType
    {
        $this->guidelineSpecifiedDocumentContextParameter = is_null($this->guidelineSpecifiedDocumentContextParameter) ? new DocumentContextParameterType() : $this->guidelineSpecifiedDocumentContextParameter;

        return $this->guidelineSpecifiedDocumentContextParameter;
    }

    /**
     * @param  null|DocumentContextParameterType $guidelineSpecifiedDocumentContextParameter
     * @return static
     */
    public function setGuidelineSpecifiedDocumentContextParameter(
        ?DocumentContextParameterType $guidelineSpecifiedDocumentContextParameter = null,
    ): static {
        $this->guidelineSpecifiedDocumentContextParameter = $guidelineSpecifiedDocumentContextParameter;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetGuidelineSpecifiedDocumentContextParameter(): static
    {
        $this->guidelineSpecifiedDocumentContextParameter = null;

        return $this;
    }
}
