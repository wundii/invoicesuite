<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PriceAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Quantity;

class ItemComparisonType
{
    use HandlesObjectFlags;

    /**
     * @var PriceAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PriceAmount")
     * @JMS\Expose
     * @JMS\SerializedName("PriceAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPriceAmount", setter="setPriceAmount")
     */
    private $priceAmount;

    /**
     * @var Quantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Quantity")
     * @JMS\Expose
     * @JMS\SerializedName("Quantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getQuantity", setter="setQuantity")
     */
    private $quantity;

    /**
     * @return PriceAmount|null
     */
    public function getPriceAmount(): ?PriceAmount
    {
        return $this->priceAmount;
    }

    /**
     * @return PriceAmount
     */
    public function getPriceAmountWithCreate(): PriceAmount
    {
        $this->priceAmount = is_null($this->priceAmount) ? new PriceAmount() : $this->priceAmount;

        return $this->priceAmount;
    }

    /**
     * @param PriceAmount|null $priceAmount
     * @return self
     */
    public function setPriceAmount(?PriceAmount $priceAmount = null): self
    {
        $this->priceAmount = $priceAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPriceAmount(): self
    {
        $this->priceAmount = null;

        return $this;
    }

    /**
     * @return Quantity|null
     */
    public function getQuantity(): ?Quantity
    {
        return $this->quantity;
    }

    /**
     * @return Quantity
     */
    public function getQuantityWithCreate(): Quantity
    {
        $this->quantity = is_null($this->quantity) ? new Quantity() : $this->quantity;

        return $this->quantity;
    }

    /**
     * @param Quantity|null $quantity
     * @return self
     */
    public function setQuantity(?Quantity $quantity = null): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetQuantity(): self
    {
        $this->quantity = null;

        return $this;
    }
}
