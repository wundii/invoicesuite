<?php

namespace horstoeko\invoicesuite\models\zugferd\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\zugferd\qdt\DeliveryTermsCodeType;

class TradeDeliveryTermsType
{
    /**
     * @var \horstoeko\invoicesuite\models\zugferd\qdt\DeliveryTermsCodeType
     * @JMS\Groups({"zffxextended"})
     * @JMS\Type("horstoeko\invoicesuite\models\zugferd\qdt\DeliveryTermsCodeType")
     * @JMS\Expose
     * @JMS\SerializedName("DeliveryTypeCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getDeliveryTypeCode", setter="setDeliveryTypeCode")
     */
    private $deliveryTermsCodeType;

    /**
     * @return \horstoeko\invoicesuite\models\zugferd\qdt\DeliveryTermsCodeType|null
     */
    public function getDeliveryTypeCode(): ?DeliveryTermsCodeType
    {
        return $this->deliveryTermsCodeType;
    }

    /**
     * @return \horstoeko\invoicesuite\models\zugferd\qdt\DeliveryTermsCodeType
     */
    public function getDeliveryTypeCodeWithCreate(): DeliveryTermsCodeType
    {
        $this->deliveryTermsCodeType = is_null($this->deliveryTermsCodeType) ? new DeliveryTermsCodeType() : $this->deliveryTermsCodeType;

        return $this->deliveryTermsCodeType;
    }

    /**
     * @param \horstoeko\invoicesuite\models\zugferd\qdt\DeliveryTermsCodeType $deliveryTermsCodeType
     * @return self
     */
    public function setDeliveryTypeCode(DeliveryTermsCodeType $deliveryTermsCodeType): self
    {
        $this->deliveryTermsCodeType = $deliveryTermsCodeType;

        return $this;
    }
}
