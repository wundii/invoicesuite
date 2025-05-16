<?php

namespace horstoeko\invoicesuite\models\ubl\cct;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\concerns\HandlesOptional;

class IdentifierType
{
    use HandlesOptional;
    use HandlesObjectFlags;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
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
     * @JMS\SerializedName("schemeID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getSchemeID", setter="setSchemeID")
     */
    private $schemeID;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("schemeName")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getSchemeName", setter="setSchemeName")
     */
    private $schemeName;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("schemeAgencyID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getSchemeAgencyID", setter="setSchemeAgencyID")
     */
    private $schemeAgencyID;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("schemeAgencyName")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getSchemeAgencyName", setter="setSchemeAgencyName")
     */
    private $schemeAgencyName;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("schemeVersionID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getSchemeVersionID", setter="setSchemeVersionID")
     */
    private $schemeVersionID;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("schemeDataURI")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getSchemeDataURI", setter="setSchemeDataURI")
     */
    private $schemeDataURI;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("schemeURI")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getSchemeURI", setter="setSchemeURI")
     */
    private $schemeURI;

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
    public function getSchemeID(): ?string
    {
        return $this->schemeID;
    }

    /**
     * @param string $schemeID
     * @return self
     */
    public function setSchemeID(string $schemeID): self
    {
        $this->schemeID = $schemeID;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSchemeName(): ?string
    {
        return $this->schemeName;
    }

    /**
     * @param string $schemeName
     * @return self
     */
    public function setSchemeName(string $schemeName): self
    {
        $this->schemeName = $schemeName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSchemeAgencyID(): ?string
    {
        return $this->schemeAgencyID;
    }

    /**
     * @param string $schemeAgencyID
     * @return self
     */
    public function setSchemeAgencyID(string $schemeAgencyID): self
    {
        $this->schemeAgencyID = $schemeAgencyID;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSchemeAgencyName(): ?string
    {
        return $this->schemeAgencyName;
    }

    /**
     * @param string $schemeAgencyName
     * @return self
     */
    public function setSchemeAgencyName(string $schemeAgencyName): self
    {
        $this->schemeAgencyName = $schemeAgencyName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSchemeVersionID(): ?string
    {
        return $this->schemeVersionID;
    }

    /**
     * @param string $schemeVersionID
     * @return self
     */
    public function setSchemeVersionID(string $schemeVersionID): self
    {
        $this->schemeVersionID = $schemeVersionID;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSchemeDataURI(): ?string
    {
        return $this->schemeDataURI;
    }

    /**
     * @param string $schemeDataURI
     * @return self
     */
    public function setSchemeDataURI(string $schemeDataURI): self
    {
        $this->schemeDataURI = $schemeDataURI;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSchemeURI(): ?string
    {
        return $this->schemeURI;
    }

    /**
     * @param string $schemeURI
     * @return self
     */
    public function setSchemeURI(string $schemeURI): self
    {
        $this->schemeURI = $schemeURI;

        return $this;
    }
}
