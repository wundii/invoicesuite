<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\ubl\cbc\DeclarationTypeCode;
use horstoeko\invoicesuite\models\ubl\cbc\Description;
use horstoeko\invoicesuite\models\ubl\cbc\Name;

class DeclarationType
{
    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\Name>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\Name>")
     * @JMS\Expose
     * @JMS\SerializedName("Name")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Name", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getName", setter="setName")
     */
    private $name;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\DeclarationTypeCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\DeclarationTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("DeclarationTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDeclarationTypeCode", setter="setDeclarationTypeCode")
     */
    private $declarationTypeCode;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\Description>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\Description>")
     * @JMS\Expose
     * @JMS\SerializedName("Description")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Description", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getDescription", setter="setDescription")
     */
    private $description;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\EvidenceSupplied>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\EvidenceSupplied>")
     * @JMS\Expose
     * @JMS\SerializedName("EvidenceSupplied")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="EvidenceSupplied", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getEvidenceSupplied", setter="setEvidenceSupplied")
     */
    private $evidenceSupplied;

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\Name>|null
     */
    public function getName(): ?array
    {
        return $this->name;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\Name> $name
     * @return self
     */
    public function setName(array $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return self
     */
    public function clearName(): self
    {
        $this->name = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Name $name
     * @return self
     */
    public function addToName(Name $name): self
    {
        $this->name[] = $name;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Name
     */
    public function addToNameWithCreate(): Name
    {
        $this->addToname($name = new Name());

        return $name;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Name $name
     * @return self
     */
    public function addOnceToName(Name $name): self
    {
        $this->name[0] = $name;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Name
     */
    public function addOnceToNameWithCreate(): Name
    {
        if ($this->name === []) {
            $this->addOnceToname(new Name());
        }

        return $this->name[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\DeclarationTypeCode|null
     */
    public function getDeclarationTypeCode(): ?DeclarationTypeCode
    {
        return $this->declarationTypeCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\DeclarationTypeCode
     */
    public function getDeclarationTypeCodeWithCreate(): DeclarationTypeCode
    {
        $this->declarationTypeCode = is_null($this->declarationTypeCode) ? new DeclarationTypeCode() : $this->declarationTypeCode;

        return $this->declarationTypeCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\DeclarationTypeCode $declarationTypeCode
     * @return self
     */
    public function setDeclarationTypeCode(DeclarationTypeCode $declarationTypeCode): self
    {
        $this->declarationTypeCode = $declarationTypeCode;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\Description>|null
     */
    public function getDescription(): ?array
    {
        return $this->description;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\Description> $description
     * @return self
     */
    public function setDescription(array $description): self
    {
        $this->description = $description;

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
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Description $description
     * @return self
     */
    public function addToDescription(Description $description): self
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Description
     */
    public function addToDescriptionWithCreate(): Description
    {
        $this->addTodescription($description = new Description());

        return $description;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Description $description
     * @return self
     */
    public function addOnceToDescription(Description $description): self
    {
        $this->description[0] = $description;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Description
     */
    public function addOnceToDescriptionWithCreate(): Description
    {
        if ($this->description === []) {
            $this->addOnceTodescription(new Description());
        }

        return $this->description[0];
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\EvidenceSupplied>|null
     */
    public function getEvidenceSupplied(): ?array
    {
        return $this->evidenceSupplied;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\EvidenceSupplied> $evidenceSupplied
     * @return self
     */
    public function setEvidenceSupplied(array $evidenceSupplied): self
    {
        $this->evidenceSupplied = $evidenceSupplied;

        return $this;
    }

    /**
     * @return self
     */
    public function clearEvidenceSupplied(): self
    {
        $this->evidenceSupplied = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\EvidenceSupplied $evidenceSupplied
     * @return self
     */
    public function addToEvidenceSupplied(EvidenceSupplied $evidenceSupplied): self
    {
        $this->evidenceSupplied[] = $evidenceSupplied;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\EvidenceSupplied
     */
    public function addToEvidenceSuppliedWithCreate(): EvidenceSupplied
    {
        $this->addToevidenceSupplied($evidenceSupplied = new EvidenceSupplied());

        return $evidenceSupplied;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\EvidenceSupplied $evidenceSupplied
     * @return self
     */
    public function addOnceToEvidenceSupplied(EvidenceSupplied $evidenceSupplied): self
    {
        $this->evidenceSupplied[0] = $evidenceSupplied;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\EvidenceSupplied
     */
    public function addOnceToEvidenceSuppliedWithCreate(): EvidenceSupplied
    {
        if ($this->evidenceSupplied === []) {
            $this->addOnceToevidenceSupplied(new EvidenceSupplied());
        }

        return $this->evidenceSupplied[0];
    }
}
