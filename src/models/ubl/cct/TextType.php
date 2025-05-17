<?php

namespace horstoeko\invoicesuite\models\ubl\cct;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;

class TextType
{
    use HandlesObjectFlags;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
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
     * @JMS\SerializedName("languageID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getLanguageID", setter="setLanguageID")
     */
    private $languageID;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("languageLocaleID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getLanguageLocaleID", setter="setLanguageLocaleID")
     */
    private $languageLocaleID;

    /**
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLanguageID(): ?string
    {
        return $this->languageID;
    }

    /**
     * @param string $languageID
     * @return self
     */
    public function setLanguageID(string $languageID): self
    {
        $this->languageID = $languageID;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLanguageLocaleID(): ?string
    {
        return $this->languageLocaleID;
    }

    /**
     * @param string $languageLocaleID
     * @return self
     */
    public function setLanguageLocaleID(string $languageLocaleID): self
    {
        $this->languageLocaleID = $languageLocaleID;

        return $this;
    }
}
