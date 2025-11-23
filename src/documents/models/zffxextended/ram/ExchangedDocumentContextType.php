<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxextended\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\IndicatorType;

class ExchangedDocumentContextType
{
    use HandlesObjectFlags;

    /**
     * @var IndicatorType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\IndicatorType")
     * @JMS\Expose
     * @JMS\SerializedName("TestIndicator")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getTestIndicator", setter="setTestIndicator")
     */
    private $testIndicator;

    /**
     * @var DocumentContextParameterType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\DocumentContextParameterType")
     * @JMS\Expose
     * @JMS\SerializedName("BusinessProcessSpecifiedDocumentContextParameter")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBusinessProcessSpecifiedDocumentContextParameter", setter="setBusinessProcessSpecifiedDocumentContextParameter")
     */
    private $businessProcessSpecifiedDocumentContextParameter;

    /**
     * @var DocumentContextParameterType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\DocumentContextParameterType")
     * @JMS\Expose
     * @JMS\SerializedName("GuidelineSpecifiedDocumentContextParameter")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getGuidelineSpecifiedDocumentContextParameter", setter="setGuidelineSpecifiedDocumentContextParameter")
     */
    private $guidelineSpecifiedDocumentContextParameter;

    /**
     * @return IndicatorType|null
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
     * @param IndicatorType|null $testIndicator
     * @return self
     */
    public function setTestIndicator(?IndicatorType $testIndicator = null): self
    {
        $this->testIndicator = $testIndicator;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTestIndicator(): self
    {
        $this->testIndicator = null;

        return $this;
    }

    /**
     * @return DocumentContextParameterType|null
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
     * @param DocumentContextParameterType|null $businessProcessSpecifiedDocumentContextParameter
     * @return self
     */
    public function setBusinessProcessSpecifiedDocumentContextParameter(
        ?DocumentContextParameterType $businessProcessSpecifiedDocumentContextParameter = null,
    ): self {
        $this->businessProcessSpecifiedDocumentContextParameter = $businessProcessSpecifiedDocumentContextParameter;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetBusinessProcessSpecifiedDocumentContextParameter(): self
    {
        $this->businessProcessSpecifiedDocumentContextParameter = null;

        return $this;
    }

    /**
     * @return DocumentContextParameterType|null
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
     * @param DocumentContextParameterType|null $guidelineSpecifiedDocumentContextParameter
     * @return self
     */
    public function setGuidelineSpecifiedDocumentContextParameter(
        ?DocumentContextParameterType $guidelineSpecifiedDocumentContextParameter = null,
    ): self {
        $this->guidelineSpecifiedDocumentContextParameter = $guidelineSpecifiedDocumentContextParameter;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetGuidelineSpecifiedDocumentContextParameter(): self
    {
        $this->guidelineSpecifiedDocumentContextParameter = null;

        return $this;
    }
}
