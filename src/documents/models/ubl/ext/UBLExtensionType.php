<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\ext;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Name;

class UBLExtensionType
{
    use HandlesObjectFlags;

    /**
     * @var ID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ID")
     * @JMS\Expose
     * @JMS\SerializedName("ID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getID", setter="setID")
     */
    private $iD;

    /**
     * @var Name|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Name")
     * @JMS\Expose
     * @JMS\SerializedName("Name")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getName", setter="setName")
     */
    private $name;

    /**
     * @var ExtensionAgencyID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\ext\ExtensionAgencyID")
     * @JMS\Expose
     * @JMS\SerializedName("ExtensionAgencyID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2", cdata=false)
     * @JMS\Accessor(getter="getExtensionAgencyID", setter="setExtensionAgencyID")
     */
    private $extensionAgencyID;

    /**
     * @var ExtensionAgencyName|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\ext\ExtensionAgencyName")
     * @JMS\Expose
     * @JMS\SerializedName("ExtensionAgencyName")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2", cdata=false)
     * @JMS\Accessor(getter="getExtensionAgencyName", setter="setExtensionAgencyName")
     */
    private $extensionAgencyName;

    /**
     * @var ExtensionVersionID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\ext\ExtensionVersionID")
     * @JMS\Expose
     * @JMS\SerializedName("ExtensionVersionID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2", cdata=false)
     * @JMS\Accessor(getter="getExtensionVersionID", setter="setExtensionVersionID")
     */
    private $extensionVersionID;

    /**
     * @var ExtensionAgencyURI|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\ext\ExtensionAgencyURI")
     * @JMS\Expose
     * @JMS\SerializedName("ExtensionAgencyURI")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2", cdata=false)
     * @JMS\Accessor(getter="getExtensionAgencyURI", setter="setExtensionAgencyURI")
     */
    private $extensionAgencyURI;

    /**
     * @var ExtensionURI|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\ext\ExtensionURI")
     * @JMS\Expose
     * @JMS\SerializedName("ExtensionURI")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2", cdata=false)
     * @JMS\Accessor(getter="getExtensionURI", setter="setExtensionURI")
     */
    private $extensionURI;

    /**
     * @var ExtensionReasonCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\ext\ExtensionReasonCode")
     * @JMS\Expose
     * @JMS\SerializedName("ExtensionReasonCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2", cdata=false)
     * @JMS\Accessor(getter="getExtensionReasonCode", setter="setExtensionReasonCode")
     */
    private $extensionReasonCode;

    /**
     * @var ExtensionReason|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\ext\ExtensionReason")
     * @JMS\Expose
     * @JMS\SerializedName("ExtensionReason")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2", cdata=false)
     * @JMS\Accessor(getter="getExtensionReason", setter="setExtensionReason")
     */
    private $extensionReason;

    /**
     * @var ExtensionContent|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\ext\ExtensionContent")
     * @JMS\Expose
     * @JMS\SerializedName("ExtensionContent")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2", cdata=false)
     * @JMS\Accessor(getter="getExtensionContent", setter="setExtensionContent")
     */
    private $extensionContent;

    /**
     * @return ID|null
     */
    public function getID(): ?ID
    {
        return $this->iD;
    }

    /**
     * @return ID
     */
    public function getIDWithCreate(): ID
    {
        $this->iD = is_null($this->iD) ? new ID() : $this->iD;

        return $this->iD;
    }

    /**
     * @param ID|null $iD
     * @return self
     */
    public function setID(?ID $iD = null): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetID(): self
    {
        $this->iD = null;

        return $this;
    }

    /**
     * @return Name|null
     */
    public function getName(): ?Name
    {
        return $this->name;
    }

    /**
     * @return Name
     */
    public function getNameWithCreate(): Name
    {
        $this->name = is_null($this->name) ? new Name() : $this->name;

        return $this->name;
    }

    /**
     * @param Name|null $name
     * @return self
     */
    public function setName(?Name $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetName(): self
    {
        $this->name = null;

        return $this;
    }

    /**
     * @return ExtensionAgencyID|null
     */
    public function getExtensionAgencyID(): ?ExtensionAgencyID
    {
        return $this->extensionAgencyID;
    }

    /**
     * @return ExtensionAgencyID
     */
    public function getExtensionAgencyIDWithCreate(): ExtensionAgencyID
    {
        $this->extensionAgencyID = is_null($this->extensionAgencyID) ? new ExtensionAgencyID() : $this->extensionAgencyID;

        return $this->extensionAgencyID;
    }

    /**
     * @param ExtensionAgencyID|null $extensionAgencyID
     * @return self
     */
    public function setExtensionAgencyID(?ExtensionAgencyID $extensionAgencyID = null): self
    {
        $this->extensionAgencyID = $extensionAgencyID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetExtensionAgencyID(): self
    {
        $this->extensionAgencyID = null;

        return $this;
    }

    /**
     * @return ExtensionAgencyName|null
     */
    public function getExtensionAgencyName(): ?ExtensionAgencyName
    {
        return $this->extensionAgencyName;
    }

    /**
     * @return ExtensionAgencyName
     */
    public function getExtensionAgencyNameWithCreate(): ExtensionAgencyName
    {
        $this->extensionAgencyName = is_null($this->extensionAgencyName) ? new ExtensionAgencyName() : $this->extensionAgencyName;

        return $this->extensionAgencyName;
    }

    /**
     * @param ExtensionAgencyName|null $extensionAgencyName
     * @return self
     */
    public function setExtensionAgencyName(?ExtensionAgencyName $extensionAgencyName = null): self
    {
        $this->extensionAgencyName = $extensionAgencyName;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetExtensionAgencyName(): self
    {
        $this->extensionAgencyName = null;

        return $this;
    }

    /**
     * @return ExtensionVersionID|null
     */
    public function getExtensionVersionID(): ?ExtensionVersionID
    {
        return $this->extensionVersionID;
    }

    /**
     * @return ExtensionVersionID
     */
    public function getExtensionVersionIDWithCreate(): ExtensionVersionID
    {
        $this->extensionVersionID = is_null($this->extensionVersionID) ? new ExtensionVersionID() : $this->extensionVersionID;

        return $this->extensionVersionID;
    }

    /**
     * @param ExtensionVersionID|null $extensionVersionID
     * @return self
     */
    public function setExtensionVersionID(?ExtensionVersionID $extensionVersionID = null): self
    {
        $this->extensionVersionID = $extensionVersionID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetExtensionVersionID(): self
    {
        $this->extensionVersionID = null;

        return $this;
    }

    /**
     * @return ExtensionAgencyURI|null
     */
    public function getExtensionAgencyURI(): ?ExtensionAgencyURI
    {
        return $this->extensionAgencyURI;
    }

    /**
     * @return ExtensionAgencyURI
     */
    public function getExtensionAgencyURIWithCreate(): ExtensionAgencyURI
    {
        $this->extensionAgencyURI = is_null($this->extensionAgencyURI) ? new ExtensionAgencyURI() : $this->extensionAgencyURI;

        return $this->extensionAgencyURI;
    }

    /**
     * @param ExtensionAgencyURI|null $extensionAgencyURI
     * @return self
     */
    public function setExtensionAgencyURI(?ExtensionAgencyURI $extensionAgencyURI = null): self
    {
        $this->extensionAgencyURI = $extensionAgencyURI;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetExtensionAgencyURI(): self
    {
        $this->extensionAgencyURI = null;

        return $this;
    }

    /**
     * @return ExtensionURI|null
     */
    public function getExtensionURI(): ?ExtensionURI
    {
        return $this->extensionURI;
    }

    /**
     * @return ExtensionURI
     */
    public function getExtensionURIWithCreate(): ExtensionURI
    {
        $this->extensionURI = is_null($this->extensionURI) ? new ExtensionURI() : $this->extensionURI;

        return $this->extensionURI;
    }

    /**
     * @param ExtensionURI|null $extensionURI
     * @return self
     */
    public function setExtensionURI(?ExtensionURI $extensionURI = null): self
    {
        $this->extensionURI = $extensionURI;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetExtensionURI(): self
    {
        $this->extensionURI = null;

        return $this;
    }

    /**
     * @return ExtensionReasonCode|null
     */
    public function getExtensionReasonCode(): ?ExtensionReasonCode
    {
        return $this->extensionReasonCode;
    }

    /**
     * @return ExtensionReasonCode
     */
    public function getExtensionReasonCodeWithCreate(): ExtensionReasonCode
    {
        $this->extensionReasonCode = is_null($this->extensionReasonCode) ? new ExtensionReasonCode() : $this->extensionReasonCode;

        return $this->extensionReasonCode;
    }

    /**
     * @param ExtensionReasonCode|null $extensionReasonCode
     * @return self
     */
    public function setExtensionReasonCode(?ExtensionReasonCode $extensionReasonCode = null): self
    {
        $this->extensionReasonCode = $extensionReasonCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetExtensionReasonCode(): self
    {
        $this->extensionReasonCode = null;

        return $this;
    }

    /**
     * @return ExtensionReason|null
     */
    public function getExtensionReason(): ?ExtensionReason
    {
        return $this->extensionReason;
    }

    /**
     * @return ExtensionReason
     */
    public function getExtensionReasonWithCreate(): ExtensionReason
    {
        $this->extensionReason = is_null($this->extensionReason) ? new ExtensionReason() : $this->extensionReason;

        return $this->extensionReason;
    }

    /**
     * @param ExtensionReason|null $extensionReason
     * @return self
     */
    public function setExtensionReason(?ExtensionReason $extensionReason = null): self
    {
        $this->extensionReason = $extensionReason;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetExtensionReason(): self
    {
        $this->extensionReason = null;

        return $this;
    }

    /**
     * @return ExtensionContent|null
     */
    public function getExtensionContent(): ?ExtensionContent
    {
        return $this->extensionContent;
    }

    /**
     * @return ExtensionContent
     */
    public function getExtensionContentWithCreate(): ExtensionContent
    {
        $this->extensionContent = is_null($this->extensionContent) ? new ExtensionContent() : $this->extensionContent;

        return $this->extensionContent;
    }

    /**
     * @param ExtensionContent|null $extensionContent
     * @return self
     */
    public function setExtensionContent(?ExtensionContent $extensionContent = null): self
    {
        $this->extensionContent = $extensionContent;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetExtensionContent(): self
    {
        $this->extensionContent = null;

        return $this;
    }
}
