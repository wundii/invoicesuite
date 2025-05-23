<?php

namespace horstoeko\invoicesuite\models\zffxextended\udt;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;

class CodeType
{
    use HandlesObjectFlags;

    /**
     * @var string|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("string")
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
     * @JMS\SerializedName("listID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getListID", setter="setListID")
     */
    private $listID;

    /**
     * @var string|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("listVersionID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getListVersionID", setter="setListVersionID")
     */
    private $listVersionID;

    /**
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string|null $value
     * @return self
     */
    public function setValue(?string $value = null): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getListID(): ?string
    {
        return $this->listID;
    }

    /**
     * @param string|null $listID
     * @return self
     */
    public function setListID(?string $listID = null): self
    {
        $this->listID = $listID;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getListVersionID(): ?string
    {
        return $this->listVersionID;
    }

    /**
     * @param string|null $listVersionID
     * @return self
     */
    public function setListVersionID(?string $listVersionID = null): self
    {
        $this->listVersionID = $listVersionID;

        return $this;
    }
}
