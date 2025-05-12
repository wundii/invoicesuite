<?php

namespace horstoeko\invoicesuite\models\ubl\cbc;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;

class ReferenceTimeType
{
    use HandlesObjectFlags;

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
