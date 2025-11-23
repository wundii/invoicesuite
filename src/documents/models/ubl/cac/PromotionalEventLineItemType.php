<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Amount;

class PromotionalEventLineItemType
{
    use HandlesObjectFlags;

    /**
     * @var Amount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Amount")
     * @JMS\Expose
     * @JMS\SerializedName("Amount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAmount", setter="setAmount")
     */
    private $amount;

    /**
     * @var EventLineItem|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\EventLineItem")
     * @JMS\Expose
     * @JMS\SerializedName("EventLineItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEventLineItem", setter="setEventLineItem")
     */
    private $eventLineItem;

    /**
     * @return Amount|null
     */
    public function getAmount(): ?Amount
    {
        return $this->amount;
    }

    /**
     * @return Amount
     */
    public function getAmountWithCreate(): Amount
    {
        $this->amount = is_null($this->amount) ? new Amount() : $this->amount;

        return $this->amount;
    }

    /**
     * @param Amount|null $amount
     * @return self
     */
    public function setAmount(?Amount $amount = null): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAmount(): self
    {
        $this->amount = null;

        return $this;
    }

    /**
     * @return EventLineItem|null
     */
    public function getEventLineItem(): ?EventLineItem
    {
        return $this->eventLineItem;
    }

    /**
     * @return EventLineItem
     */
    public function getEventLineItemWithCreate(): EventLineItem
    {
        $this->eventLineItem = is_null($this->eventLineItem) ? new EventLineItem() : $this->eventLineItem;

        return $this->eventLineItem;
    }

    /**
     * @param EventLineItem|null $eventLineItem
     * @return self
     */
    public function setEventLineItem(?EventLineItem $eventLineItem = null): self
    {
        $this->eventLineItem = $eventLineItem;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetEventLineItem(): self
    {
        $this->eventLineItem = null;

        return $this;
    }
}
