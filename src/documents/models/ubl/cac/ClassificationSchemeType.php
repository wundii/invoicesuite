<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\AgencyID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\AgencyName;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LanguageID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Name;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Note;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SchemeURI;
use horstoeko\invoicesuite\documents\models\ubl\cbc\URI;
use horstoeko\invoicesuite\documents\models\ubl\cbc\UUID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\VersionID;

class ClassificationSchemeType
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
     * @var UUID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\UUID")
     * @JMS\Expose
     * @JMS\SerializedName("UUID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getUUID", setter="setUUID")
     */
    private $uUID;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("LastRevisionDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLastRevisionDate", setter="setLastRevisionDate")
     */
    private $lastRevisionDate;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("LastRevisionTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLastRevisionTime", setter="setLastRevisionTime")
     */
    private $lastRevisionTime;

    /**
     * @var array<Note>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Note>")
     * @JMS\Expose
     * @JMS\SerializedName("Note")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Note", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getNote", setter="setNote")
     */
    private $note;

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
     * @var array<Description>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Description>")
     * @JMS\Expose
     * @JMS\SerializedName("Description")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Description", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getDescription", setter="setDescription")
     */
    private $description;

    /**
     * @var AgencyID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\AgencyID")
     * @JMS\Expose
     * @JMS\SerializedName("AgencyID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAgencyID", setter="setAgencyID")
     */
    private $agencyID;

    /**
     * @var AgencyName|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\AgencyName")
     * @JMS\Expose
     * @JMS\SerializedName("AgencyName")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAgencyName", setter="setAgencyName")
     */
    private $agencyName;

    /**
     * @var VersionID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\VersionID")
     * @JMS\Expose
     * @JMS\SerializedName("VersionID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getVersionID", setter="setVersionID")
     */
    private $versionID;

    /**
     * @var URI|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\URI")
     * @JMS\Expose
     * @JMS\SerializedName("URI")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getURI", setter="setURI")
     */
    private $uRI;

    /**
     * @var SchemeURI|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\SchemeURI")
     * @JMS\Expose
     * @JMS\SerializedName("SchemeURI")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSchemeURI", setter="setSchemeURI")
     */
    private $schemeURI;

    /**
     * @var LanguageID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LanguageID")
     * @JMS\Expose
     * @JMS\SerializedName("LanguageID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLanguageID", setter="setLanguageID")
     */
    private $languageID;

    /**
     * @var array<ClassificationCategory>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ClassificationCategory>")
     * @JMS\Expose
     * @JMS\SerializedName("ClassificationCategory")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ClassificationCategory", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getClassificationCategory", setter="setClassificationCategory")
     */
    private $classificationCategory;

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
     * @return UUID|null
     */
    public function getUUID(): ?UUID
    {
        return $this->uUID;
    }

    /**
     * @return UUID
     */
    public function getUUIDWithCreate(): UUID
    {
        $this->uUID = is_null($this->uUID) ? new UUID() : $this->uUID;

        return $this->uUID;
    }

    /**
     * @param UUID|null $uUID
     * @return self
     */
    public function setUUID(?UUID $uUID = null): self
    {
        $this->uUID = $uUID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetUUID(): self
    {
        $this->uUID = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getLastRevisionDate(): ?DateTimeInterface
    {
        return $this->lastRevisionDate;
    }

    /**
     * @param DateTimeInterface|null $lastRevisionDate
     * @return self
     */
    public function setLastRevisionDate(?DateTimeInterface $lastRevisionDate = null): self
    {
        $this->lastRevisionDate = $lastRevisionDate;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLastRevisionDate(): self
    {
        $this->lastRevisionDate = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getLastRevisionTime(): ?DateTimeInterface
    {
        return $this->lastRevisionTime;
    }

    /**
     * @param DateTimeInterface|null $lastRevisionTime
     * @return self
     */
    public function setLastRevisionTime(?DateTimeInterface $lastRevisionTime = null): self
    {
        $this->lastRevisionTime = $lastRevisionTime;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLastRevisionTime(): self
    {
        $this->lastRevisionTime = null;

        return $this;
    }

    /**
     * @return array<Note>|null
     */
    public function getNote(): ?array
    {
        return $this->note;
    }

    /**
     * @param array<Note>|null $note
     * @return self
     */
    public function setNote(?array $note = null): self
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetNote(): self
    {
        $this->note = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearNote(): self
    {
        $this->note = [];

        return $this;
    }

    /**
     * @return Note|null
     */
    public function firstNote(): ?Note
    {
        $note = $this->note ?? [];
        $note = reset($note);

        if ($note === false) {
            return null;
        }

        return $note;
    }

    /**
     * @return Note|null
     */
    public function lastNote(): ?Note
    {
        $note = $this->note ?? [];
        $note = end($note);

        if ($note === false) {
            return null;
        }

        return $note;
    }

    /**
     * @param Note $note
     * @return self
     */
    public function addToNote(Note $note): self
    {
        $this->note[] = $note;

        return $this;
    }

    /**
     * @return Note
     */
    public function addToNoteWithCreate(): Note
    {
        $this->addTonote($note = new Note());

        return $note;
    }

    /**
     * @param Note $note
     * @return self
     */
    public function addOnceToNote(Note $note): self
    {
        if (!is_array($this->note)) {
            $this->note = [];
        }

        $this->note[0] = $note;

        return $this;
    }

    /**
     * @return Note
     */
    public function addOnceToNoteWithCreate(): Note
    {
        if (!is_array($this->note)) {
            $this->note = [];
        }

        if ($this->note === []) {
            $this->addOnceTonote(new Note());
        }

        return $this->note[0];
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
     * @return array<Description>|null
     */
    public function getDescription(): ?array
    {
        return $this->description;
    }

    /**
     * @param array<Description>|null $description
     * @return self
     */
    public function setDescription(?array $description = null): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDescription(): self
    {
        $this->description = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearDescription(): self
    {
        $this->description = [];

        return $this;
    }

    /**
     * @return Description|null
     */
    public function firstDescription(): ?Description
    {
        $description = $this->description ?? [];
        $description = reset($description);

        if ($description === false) {
            return null;
        }

        return $description;
    }

    /**
     * @return Description|null
     */
    public function lastDescription(): ?Description
    {
        $description = $this->description ?? [];
        $description = end($description);

        if ($description === false) {
            return null;
        }

        return $description;
    }

    /**
     * @param Description $description
     * @return self
     */
    public function addToDescription(Description $description): self
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * @return Description
     */
    public function addToDescriptionWithCreate(): Description
    {
        $this->addTodescription($description = new Description());

        return $description;
    }

    /**
     * @param Description $description
     * @return self
     */
    public function addOnceToDescription(Description $description): self
    {
        if (!is_array($this->description)) {
            $this->description = [];
        }

        $this->description[0] = $description;

        return $this;
    }

    /**
     * @return Description
     */
    public function addOnceToDescriptionWithCreate(): Description
    {
        if (!is_array($this->description)) {
            $this->description = [];
        }

        if ($this->description === []) {
            $this->addOnceTodescription(new Description());
        }

        return $this->description[0];
    }

    /**
     * @return AgencyID|null
     */
    public function getAgencyID(): ?AgencyID
    {
        return $this->agencyID;
    }

    /**
     * @return AgencyID
     */
    public function getAgencyIDWithCreate(): AgencyID
    {
        $this->agencyID = is_null($this->agencyID) ? new AgencyID() : $this->agencyID;

        return $this->agencyID;
    }

    /**
     * @param AgencyID|null $agencyID
     * @return self
     */
    public function setAgencyID(?AgencyID $agencyID = null): self
    {
        $this->agencyID = $agencyID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAgencyID(): self
    {
        $this->agencyID = null;

        return $this;
    }

    /**
     * @return AgencyName|null
     */
    public function getAgencyName(): ?AgencyName
    {
        return $this->agencyName;
    }

    /**
     * @return AgencyName
     */
    public function getAgencyNameWithCreate(): AgencyName
    {
        $this->agencyName = is_null($this->agencyName) ? new AgencyName() : $this->agencyName;

        return $this->agencyName;
    }

    /**
     * @param AgencyName|null $agencyName
     * @return self
     */
    public function setAgencyName(?AgencyName $agencyName = null): self
    {
        $this->agencyName = $agencyName;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAgencyName(): self
    {
        $this->agencyName = null;

        return $this;
    }

    /**
     * @return VersionID|null
     */
    public function getVersionID(): ?VersionID
    {
        return $this->versionID;
    }

    /**
     * @return VersionID
     */
    public function getVersionIDWithCreate(): VersionID
    {
        $this->versionID = is_null($this->versionID) ? new VersionID() : $this->versionID;

        return $this->versionID;
    }

    /**
     * @param VersionID|null $versionID
     * @return self
     */
    public function setVersionID(?VersionID $versionID = null): self
    {
        $this->versionID = $versionID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetVersionID(): self
    {
        $this->versionID = null;

        return $this;
    }

    /**
     * @return URI|null
     */
    public function getURI(): ?URI
    {
        return $this->uRI;
    }

    /**
     * @return URI
     */
    public function getURIWithCreate(): URI
    {
        $this->uRI = is_null($this->uRI) ? new URI() : $this->uRI;

        return $this->uRI;
    }

    /**
     * @param URI|null $uRI
     * @return self
     */
    public function setURI(?URI $uRI = null): self
    {
        $this->uRI = $uRI;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetURI(): self
    {
        $this->uRI = null;

        return $this;
    }

    /**
     * @return SchemeURI|null
     */
    public function getSchemeURI(): ?SchemeURI
    {
        return $this->schemeURI;
    }

    /**
     * @return SchemeURI
     */
    public function getSchemeURIWithCreate(): SchemeURI
    {
        $this->schemeURI = is_null($this->schemeURI) ? new SchemeURI() : $this->schemeURI;

        return $this->schemeURI;
    }

    /**
     * @param SchemeURI|null $schemeURI
     * @return self
     */
    public function setSchemeURI(?SchemeURI $schemeURI = null): self
    {
        $this->schemeURI = $schemeURI;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSchemeURI(): self
    {
        $this->schemeURI = null;

        return $this;
    }

    /**
     * @return LanguageID|null
     */
    public function getLanguageID(): ?LanguageID
    {
        return $this->languageID;
    }

    /**
     * @return LanguageID
     */
    public function getLanguageIDWithCreate(): LanguageID
    {
        $this->languageID = is_null($this->languageID) ? new LanguageID() : $this->languageID;

        return $this->languageID;
    }

    /**
     * @param LanguageID|null $languageID
     * @return self
     */
    public function setLanguageID(?LanguageID $languageID = null): self
    {
        $this->languageID = $languageID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLanguageID(): self
    {
        $this->languageID = null;

        return $this;
    }

    /**
     * @return array<ClassificationCategory>|null
     */
    public function getClassificationCategory(): ?array
    {
        return $this->classificationCategory;
    }

    /**
     * @param array<ClassificationCategory>|null $classificationCategory
     * @return self
     */
    public function setClassificationCategory(?array $classificationCategory = null): self
    {
        $this->classificationCategory = $classificationCategory;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetClassificationCategory(): self
    {
        $this->classificationCategory = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearClassificationCategory(): self
    {
        $this->classificationCategory = [];

        return $this;
    }

    /**
     * @return ClassificationCategory|null
     */
    public function firstClassificationCategory(): ?ClassificationCategory
    {
        $classificationCategory = $this->classificationCategory ?? [];
        $classificationCategory = reset($classificationCategory);

        if ($classificationCategory === false) {
            return null;
        }

        return $classificationCategory;
    }

    /**
     * @return ClassificationCategory|null
     */
    public function lastClassificationCategory(): ?ClassificationCategory
    {
        $classificationCategory = $this->classificationCategory ?? [];
        $classificationCategory = end($classificationCategory);

        if ($classificationCategory === false) {
            return null;
        }

        return $classificationCategory;
    }

    /**
     * @param ClassificationCategory $classificationCategory
     * @return self
     */
    public function addToClassificationCategory(ClassificationCategory $classificationCategory): self
    {
        $this->classificationCategory[] = $classificationCategory;

        return $this;
    }

    /**
     * @return ClassificationCategory
     */
    public function addToClassificationCategoryWithCreate(): ClassificationCategory
    {
        $this->addToclassificationCategory($classificationCategory = new ClassificationCategory());

        return $classificationCategory;
    }

    /**
     * @param ClassificationCategory $classificationCategory
     * @return self
     */
    public function addOnceToClassificationCategory(ClassificationCategory $classificationCategory): self
    {
        if (!is_array($this->classificationCategory)) {
            $this->classificationCategory = [];
        }

        $this->classificationCategory[0] = $classificationCategory;

        return $this;
    }

    /**
     * @return ClassificationCategory
     */
    public function addOnceToClassificationCategoryWithCreate(): ClassificationCategory
    {
        if (!is_array($this->classificationCategory)) {
            $this->classificationCategory = [];
        }

        if ($this->classificationCategory === []) {
            $this->addOnceToclassificationCategory(new ClassificationCategory());
        }

        return $this->classificationCategory[0];
    }
}
