<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffx\udt;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use JMS\Serializer\Annotation as JMS;

class IndicatorType
{
    use HandlesObjectFlags;

    /**
     * @var null|bool
     * @JMS\Groups({"zffx"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("Indicator")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:UnqualifiedDataType:100", cdata=false)
     * @JMS\Accessor(getter="getIndicator", setter="setIndicator")
     */
    private $indicator;

    /**
     * @return null|bool
     */
    public function getIndicator(): ?bool
    {
        return $this->indicator;
    }

    /**
     * @param  null|bool $indicator
     * @return static
     */
    public function setIndicator(?bool $indicator = null): static
    {
        $this->indicator = $indicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetIndicator(): static
    {
        $this->indicator = null;

        return $this;
    }
}
