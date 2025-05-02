<?php

namespace horstoeko\invoicesuite\models\ubl\cbc;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\XmlRoot(name="PaidTime", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
 */
class PaidTime
{
    /**
     * @var \DateTimeInterface
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlValue(cdata=false)
     * @JMS\Accessor(getter="getValue", setter="setValue")
     */
    private $value;

    /**
     * @return \DateTimeInterface|null
     */
    public function getValue(): ?\DateTimeInterface
    {
        return $this->value;
    }

    /**
     * @param \DateTimeInterface $value
     * @return self
     */
    public function setValue(\DateTimeInterface $value): self
    {
        $this->value = $value;

        return $this;
    }
}
