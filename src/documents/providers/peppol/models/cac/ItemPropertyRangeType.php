<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\peppol\models\cac;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\providers\peppol\models\cbc\MaximumValue;
use horstoeko\invoicesuite\documents\providers\peppol\models\cbc\MinimumValue;
use JMS\Serializer\Annotation as JMS;

class ItemPropertyRangeType
{
    use HandlesObjectFlags;

    /**
     * @var null|MinimumValue
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\peppol\models\cbc\MinimumValue")
     * @JMS\Expose
     * @JMS\SerializedName("MinimumValue")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMinimumValue", setter="setMinimumValue")
     */
    private $minimumValue;

    /**
     * @var null|MaximumValue
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\peppol\models\cbc\MaximumValue")
     * @JMS\Expose
     * @JMS\SerializedName("MaximumValue")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMaximumValue", setter="setMaximumValue")
     */
    private $maximumValue;

    /**
     * @return null|MinimumValue
     */
    public function getMinimumValue(): ?MinimumValue
    {
        return $this->minimumValue;
    }

    /**
     * @return MinimumValue
     */
    public function getMinimumValueWithCreate(): MinimumValue
    {
        $this->minimumValue ??= new MinimumValue();

        return $this->minimumValue;
    }

    /**
     * @param  null|MinimumValue $minimumValue
     * @return static
     */
    public function setMinimumValue(
        ?MinimumValue $minimumValue = null
    ): static {
        $this->minimumValue = $minimumValue;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetMinimumValue(): static
    {
        $this->minimumValue = null;

        return $this;
    }

    /**
     * @return null|MaximumValue
     */
    public function getMaximumValue(): ?MaximumValue
    {
        return $this->maximumValue;
    }

    /**
     * @return MaximumValue
     */
    public function getMaximumValueWithCreate(): MaximumValue
    {
        $this->maximumValue ??= new MaximumValue();

        return $this->maximumValue;
    }

    /**
     * @param  null|MaximumValue $maximumValue
     * @return static
     */
    public function setMaximumValue(
        ?MaximumValue $maximumValue = null
    ): static {
        $this->maximumValue = $maximumValue;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetMaximumValue(): static
    {
        $this->maximumValue = null;

        return $this;
    }
}
