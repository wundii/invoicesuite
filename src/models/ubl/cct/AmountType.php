<?php

namespace horstoeko\invoicesuite\models\ubl\cct;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\concerns\HandlesOptional;

class AmountType
{
    use HandlesOptional;
    use HandlesObjectFlags;

    /**
     * @var float
     * @JMS\Groups({"ubl"})
     * @JMS\Type("float")
     * @JMS\Expose
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlValue(cdata=false)
     * @JMS\Accessor(getter="getValue", setter="setValue")
     */
    private $value;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("currencyID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getCurrencyID", setter="setCurrencyID")
     */
    private $currencyID;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("currencyCodeListVersionID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getCurrencyCodeListVersionID", setter="setCurrencyCodeListVersionID")
     */
    private $currencyCodeListVersionID;

    /**
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * @param float $value
     * @return self
     */
    public function setValue(float $value): self
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
     * @param string $currencyID
     * @return self
     */
    public function setCurrencyID(string $currencyID): self
    {
        $this->currencyID = $currencyID;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrencyCodeListVersionID(): ?string
    {
        return $this->currencyCodeListVersionID;
    }

    /**
     * @param string $currencyCodeListVersionID
     * @return self
     */
    public function setCurrencyCodeListVersionID(string $currencyCodeListVersionID): self
    {
        $this->currencyCodeListVersionID = $currencyCodeListVersionID;

        return $this;
    }
}
