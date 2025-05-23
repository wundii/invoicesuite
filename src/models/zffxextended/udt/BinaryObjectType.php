<?php

namespace horstoeko\invoicesuite\models\zffxextended\udt;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;

class BinaryObjectType
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
     * @JMS\SerializedName("mimeCode")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getMimeCode", setter="setMimeCode")
     */
    private $mimeCode;

    /**
     * @var string|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("filename")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getFilename", setter="setFilename")
     */
    private $filename;

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
    public function getMimeCode(): ?string
    {
        return $this->mimeCode;
    }

    /**
     * @param string|null $mimeCode
     * @return self
     */
    public function setMimeCode(?string $mimeCode = null): self
    {
        $this->mimeCode = $mimeCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * @param string|null $filename
     * @return self
     */
    public function setFilename(?string $filename = null): self
    {
        $this->filename = $filename;

        return $this;
    }
}
