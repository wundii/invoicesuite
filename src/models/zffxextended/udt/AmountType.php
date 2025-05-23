<?php

namespace horstoeko\invoicesuite\models\zffxextended\udt;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;

class AmountType
{
    use HandlesObjectFlags;

    /**
     * @var float|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("float")
     * @JMS\Expose
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlValue(cdata=false)
     * @JMS\Accessor(getter="getValue", setter="setValue")
     */
    private $value;

    /**
     * @var string|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("currencyID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getCurrencyID", setter="setCurrencyID")
     */
    private $currencyID;

    /**
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * @param float|null $value
     * @return self
     */
    public function setValue(?float $value = null): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrencyID(): ?string
    {
        return $this->currencyID;
    }

    /**
     * @param string|null $currencyID
     * @return self
     */
    public function setCurrencyID(?string $currencyID = null): self
    {
        $this->currencyID = $currencyID;

        return $this;
    }
}
