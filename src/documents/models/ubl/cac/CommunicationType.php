<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Channel;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ChannelCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Value;

class CommunicationType
{
    use HandlesObjectFlags;

    /**
     * @var ChannelCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ChannelCode")
     * @JMS\Expose
     * @JMS\SerializedName("ChannelCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getChannelCode", setter="setChannelCode")
     */
    private $channelCode;

    /**
     * @var Channel|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Channel")
     * @JMS\Expose
     * @JMS\SerializedName("Channel")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getChannel", setter="setChannel")
     */
    private $channel;

    /**
     * @var Value|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Value")
     * @JMS\Expose
     * @JMS\SerializedName("Value")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getValue", setter="setValue")
     */
    private $value;

    /**
     * @return ChannelCode|null
     */
    public function getChannelCode(): ?ChannelCode
    {
        return $this->channelCode;
    }

    /**
     * @return ChannelCode
     */
    public function getChannelCodeWithCreate(): ChannelCode
    {
        $this->channelCode = is_null($this->channelCode) ? new ChannelCode() : $this->channelCode;

        return $this->channelCode;
    }

    /**
     * @param ChannelCode|null $channelCode
     * @return self
     */
    public function setChannelCode(?ChannelCode $channelCode = null): self
    {
        $this->channelCode = $channelCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetChannelCode(): self
    {
        $this->channelCode = null;

        return $this;
    }

    /**
     * @return Channel|null
     */
    public function getChannel(): ?Channel
    {
        return $this->channel;
    }

    /**
     * @return Channel
     */
    public function getChannelWithCreate(): Channel
    {
        $this->channel = is_null($this->channel) ? new Channel() : $this->channel;

        return $this->channel;
    }

    /**
     * @param Channel|null $channel
     * @return self
     */
    public function setChannel(?Channel $channel = null): self
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetChannel(): self
    {
        $this->channel = null;

        return $this;
    }

    /**
     * @return Value|null
     */
    public function getValue(): ?Value
    {
        return $this->value;
    }

    /**
     * @return Value
     */
    public function getValueWithCreate(): Value
    {
        $this->value = is_null($this->value) ? new Value() : $this->value;

        return $this->value;
    }

    /**
     * @param Value|null $value
     * @return self
     */
    public function setValue(?Value $value = null): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetValue(): self
    {
        $this->value = null;

        return $this;
    }
}
