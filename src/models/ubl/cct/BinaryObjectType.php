<?php

namespace horstoeko\invoicesuite\models\ubl\cct;

use GoetasWebservices\Xsd\XsdToPhp\Jms\Base64Encoded;
use JMS\Serializer\Annotation as JMS;

class BinaryObjectType
{
    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\Jms\Base64Encoded")
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
     * @JMS\SerializedName("format")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getFormat", setter="setFormat")
     */
    private $format;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("mimeCode")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getMimeCode", setter="setMimeCode")
     */
    private $mimeCode;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("encodingCode")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getEncodingCode", setter="setEncodingCode")
     */
    private $encodingCode;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("characterSetCode")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getCharacterSetCode", setter="setCharacterSetCode")
     */
    private $characterSetCode;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("uri")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getUri", setter="setUri")
     */
    private $uri;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
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
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * @param string $format
     * @return self
     */
    public function setFormat(string $format): self
    {
        $this->format = $format;

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
     * @param string $mimeCode
     * @return self
     */
    public function setMimeCode(string $mimeCode): self
    {
        $this->mimeCode = $mimeCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEncodingCode(): ?string
    {
        return $this->encodingCode;
    }

    /**
     * @param string $encodingCode
     * @return self
     */
    public function setEncodingCode(string $encodingCode): self
    {
        $this->encodingCode = $encodingCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCharacterSetCode(): ?string
    {
        return $this->characterSetCode;
    }

    /**
     * @param string $characterSetCode
     * @return self
     */
    public function setCharacterSetCode(string $characterSetCode): self
    {
        $this->characterSetCode = $characterSetCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUri(): ?string
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     * @return self
     */
    public function setUri(string $uri): self
    {
        $this->uri = $uri;

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
     * @param string $filename
     * @return self
     */
    public function setFilename(string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }
}
