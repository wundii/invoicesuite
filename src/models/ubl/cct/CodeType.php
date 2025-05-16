<?php

namespace horstoeko\invoicesuite\models\ubl\cct;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\concerns\HandlesOptional;

class CodeType
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
     * @JMS\SerializedName("listID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getListID", setter="setListID")
     */
    private $listID;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("listAgencyID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getListAgencyID", setter="setListAgencyID")
     */
    private $listAgencyID;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("listAgencyName")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getListAgencyName", setter="setListAgencyName")
     */
    private $listAgencyName;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("listName")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getListName", setter="setListName")
     */
    private $listName;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("listVersionID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getListVersionID", setter="setListVersionID")
     */
    private $listVersionID;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("name")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getName", setter="setName")
     */
    private $name;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("languageID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getLanguageID", setter="setLanguageID")
     */
    private $languageID;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("listURI")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getListURI", setter="setListURI")
     */
    private $listURI;

    /**
     * @var string
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("listSchemeURI")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getListSchemeURI", setter="setListSchemeURI")
     */
    private $listSchemeURI;

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
    public function getListID(): ?string
    {
        return $this->listID;
    }

    /**
     * @param string $listID
     * @return self
     */
    public function setListID(string $listID): self
    {
        $this->listID = $listID;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getListAgencyID(): ?string
    {
        return $this->listAgencyID;
    }

    /**
     * @param string $listAgencyID
     * @return self
     */
    public function setListAgencyID(string $listAgencyID): self
    {
        $this->listAgencyID = $listAgencyID;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getListAgencyName(): ?string
    {
        return $this->listAgencyName;
    }

    /**
     * @param string $listAgencyName
     * @return self
     */
    public function setListAgencyName(string $listAgencyName): self
    {
        $this->listAgencyName = $listAgencyName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getListName(): ?string
    {
        return $this->listName;
    }

    /**
     * @param string $listName
     * @return self
     */
    public function setListName(string $listName): self
    {
        $this->listName = $listName;

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
     * @param string $listVersionID
     * @return self
     */
    public function setListVersionID(string $listVersionID): self
    {
        $this->listVersionID = $listVersionID;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLanguageID(): ?string
    {
        return $this->languageID;
    }

    /**
     * @param string $languageID
     * @return self
     */
    public function setLanguageID(string $languageID): self
    {
        $this->languageID = $languageID;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getListURI(): ?string
    {
        return $this->listURI;
    }

    /**
     * @param string $listURI
     * @return self
     */
    public function setListURI(string $listURI): self
    {
        $this->listURI = $listURI;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getListSchemeURI(): ?string
    {
        return $this->listSchemeURI;
    }

    /**
     * @param string $listSchemeURI
     * @return self
     */
    public function setListSchemeURI(string $listSchemeURI): self
    {
        $this->listSchemeURI = $listSchemeURI;

        return $this;
    }
}
