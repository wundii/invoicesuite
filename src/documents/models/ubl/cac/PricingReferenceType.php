<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;

class PricingReferenceType
{
    use HandlesObjectFlags;

    /**
     * @var OriginalItemLocationQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\OriginalItemLocationQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("OriginalItemLocationQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOriginalItemLocationQuantity", setter="setOriginalItemLocationQuantity")
     */
    private $originalItemLocationQuantity;

    /**
     * @var array<AlternativeConditionPrice>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\AlternativeConditionPrice>")
     * @JMS\Expose
     * @JMS\SerializedName("AlternativeConditionPrice")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="AlternativeConditionPrice", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getAlternativeConditionPrice", setter="setAlternativeConditionPrice")
     */
    private $alternativeConditionPrice;

    /**
     * @return OriginalItemLocationQuantity|null
     */
    public function getOriginalItemLocationQuantity(): ?OriginalItemLocationQuantity
    {
        return $this->originalItemLocationQuantity;
    }

    /**
     * @return OriginalItemLocationQuantity
     */
    public function getOriginalItemLocationQuantityWithCreate(): OriginalItemLocationQuantity
    {
        $this->originalItemLocationQuantity = is_null($this->originalItemLocationQuantity) ? new OriginalItemLocationQuantity() : $this->originalItemLocationQuantity;

        return $this->originalItemLocationQuantity;
    }

    /**
     * @param OriginalItemLocationQuantity|null $originalItemLocationQuantity
     * @return self
     */
    public function setOriginalItemLocationQuantity(
        ?OriginalItemLocationQuantity $originalItemLocationQuantity = null,
    ): self {
        $this->originalItemLocationQuantity = $originalItemLocationQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetOriginalItemLocationQuantity(): self
    {
        $this->originalItemLocationQuantity = null;

        return $this;
    }

    /**
     * @return array<AlternativeConditionPrice>|null
     */
    public function getAlternativeConditionPrice(): ?array
    {
        return $this->alternativeConditionPrice;
    }

    /**
     * @param array<AlternativeConditionPrice>|null $alternativeConditionPrice
     * @return self
     */
    public function setAlternativeConditionPrice(?array $alternativeConditionPrice = null): self
    {
        $this->alternativeConditionPrice = $alternativeConditionPrice;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAlternativeConditionPrice(): self
    {
        $this->alternativeConditionPrice = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearAlternativeConditionPrice(): self
    {
        $this->alternativeConditionPrice = [];

        return $this;
    }

    /**
     * @return AlternativeConditionPrice|null
     */
    public function firstAlternativeConditionPrice(): ?AlternativeConditionPrice
    {
        $alternativeConditionPrice = $this->alternativeConditionPrice ?? [];
        $alternativeConditionPrice = reset($alternativeConditionPrice);

        if ($alternativeConditionPrice === false) {
            return null;
        }

        return $alternativeConditionPrice;
    }

    /**
     * @return AlternativeConditionPrice|null
     */
    public function lastAlternativeConditionPrice(): ?AlternativeConditionPrice
    {
        $alternativeConditionPrice = $this->alternativeConditionPrice ?? [];
        $alternativeConditionPrice = end($alternativeConditionPrice);

        if ($alternativeConditionPrice === false) {
            return null;
        }

        return $alternativeConditionPrice;
    }

    /**
     * @param AlternativeConditionPrice $alternativeConditionPrice
     * @return self
     */
    public function addToAlternativeConditionPrice(AlternativeConditionPrice $alternativeConditionPrice): self
    {
        $this->alternativeConditionPrice[] = $alternativeConditionPrice;

        return $this;
    }

    /**
     * @return AlternativeConditionPrice
     */
    public function addToAlternativeConditionPriceWithCreate(): AlternativeConditionPrice
    {
        $this->addToalternativeConditionPrice($alternativeConditionPrice = new AlternativeConditionPrice());

        return $alternativeConditionPrice;
    }

    /**
     * @param AlternativeConditionPrice $alternativeConditionPrice
     * @return self
     */
    public function addOnceToAlternativeConditionPrice(AlternativeConditionPrice $alternativeConditionPrice): self
    {
        if (!is_array($this->alternativeConditionPrice)) {
            $this->alternativeConditionPrice = [];
        }

        $this->alternativeConditionPrice[0] = $alternativeConditionPrice;

        return $this;
    }

    /**
     * @return AlternativeConditionPrice
     */
    public function addOnceToAlternativeConditionPriceWithCreate(): AlternativeConditionPrice
    {
        if (!is_array($this->alternativeConditionPrice)) {
            $this->alternativeConditionPrice = [];
        }

        if ($this->alternativeConditionPrice === []) {
            $this->addOnceToalternativeConditionPrice(new AlternativeConditionPrice());
        }

        return $this->alternativeConditionPrice[0];
    }
}
