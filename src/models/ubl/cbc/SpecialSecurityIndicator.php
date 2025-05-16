<?php

namespace horstoeko\invoicesuite\models\ubl\cbc;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\concerns\HandlesOptional;

/**
 * @JMS\XmlRoot(name="SpecialSecurityIndicator", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
 */
class SpecialSecurityIndicator
{
    use HandlesOptional;
    use HandlesObjectFlags;

    /**
     * @var bool
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlValue(cdata=false)
     * @JMS\Accessor(getter="getValue", setter="setValue")
     */
    private $value;

    /**
     * @return bool|null
     */
    public function getValue(): ?bool
    {
        return $this->value;
    }

    /**
     * @param bool $value
     * @return self
     */
    public function setValue(bool $value): self
    {
        $this->value = $value;

        return $this;
    }
}
