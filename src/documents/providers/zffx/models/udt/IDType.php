<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\zffx\models\udt;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\utils\InvoiceSuiteStringUtils;
use JMS\Serializer\Annotation as JMS;

class IDType
{
    use HandlesObjectFlags;

    /**
     * @var null|string
     * @JMS\Groups({"zffx"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlValue(cdata=false)
     * @JMS\Accessor(getter="getValue", setter="setValue")
     */
    private $value;

    /**
     * @var null|string
     * @JMS\Groups({"zffx"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("schemeID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getSchemeID", setter="setSchemeID")
     */
    private $schemeID;

    /**
     * @return null|string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param  null|string $value
     * @return static
     */
    public function setValue(?string $value = null): static
    {
        $this->value = InvoiceSuiteStringUtils::asNullWhenEmpty($value);

        return $this;
    }

    /**
     * @return static
     */
    public function unsetValue(): static
    {
        $this->value = null;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getSchemeID(): ?string
    {
        return $this->schemeID;
    }

    /**
     * @param  null|string $schemeID
     * @return static
     */
    public function setSchemeID(?string $schemeID = null): static
    {
        $this->schemeID = InvoiceSuiteStringUtils::asNullWhenEmpty($schemeID);

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSchemeID(): static
    {
        $this->schemeID = null;

        return $this;
    }
}
