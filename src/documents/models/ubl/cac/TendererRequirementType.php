<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LegalReference;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Name;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TendererRequirementTypeCode;

class TendererRequirementType
{
    use HandlesObjectFlags;

    /**
     * @var array<Name>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Name>")
     * @JMS\Expose
     * @JMS\SerializedName("Name")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Name", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getName", setter="setName")
     */
    private $name;

    /**
     * @var TendererRequirementTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TendererRequirementTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("TendererRequirementTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTendererRequirementTypeCode", setter="setTendererRequirementTypeCode")
     */
    private $tendererRequirementTypeCode;

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
     * @var LegalReference|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LegalReference")
     * @JMS\Expose
     * @JMS\SerializedName("LegalReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLegalReference", setter="setLegalReference")
     */
    private $legalReference;

    /**
     * @var array<SuggestedEvidence>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\SuggestedEvidence>")
     * @JMS\Expose
     * @JMS\SerializedName("SuggestedEvidence")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SuggestedEvidence", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSuggestedEvidence", setter="setSuggestedEvidence")
     */
    private $suggestedEvidence;

    /**
     * @return array<Name>|null
     */
    public function getName(): ?array
    {
        return $this->name;
    }

    /**
     * @param array<Name>|null $name
     * @return self
     */
    public function setName(?array $name = null): self
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
     * @return self
     */
    public function clearName(): self
    {
        $this->name = [];

        return $this;
    }

    /**
     * @return Name|null
     */
    public function firstName(): ?Name
    {
        $name = $this->name ?? [];
        $name = reset($name);

        if ($name === false) {
            return null;
        }

        return $name;
    }

    /**
     * @return Name|null
     */
    public function lastName(): ?Name
    {
        $name = $this->name ?? [];
        $name = end($name);

        if ($name === false) {
            return null;
        }

        return $name;
    }

    /**
     * @param Name $name
     * @return self
     */
    public function addToName(Name $name): self
    {
        $this->name[] = $name;

        return $this;
    }

    /**
     * @return Name
     */
    public function addToNameWithCreate(): Name
    {
        $this->addToname($name = new Name());

        return $name;
    }

    /**
     * @param Name $name
     * @return self
     */
    public function addOnceToName(Name $name): self
    {
        if (!is_array($this->name)) {
            $this->name = [];
        }

        $this->name[0] = $name;

        return $this;
    }

    /**
     * @return Name
     */
    public function addOnceToNameWithCreate(): Name
    {
        if (!is_array($this->name)) {
            $this->name = [];
        }

        if ($this->name === []) {
            $this->addOnceToname(new Name());
        }

        return $this->name[0];
    }

    /**
     * @return TendererRequirementTypeCode|null
     */
    public function getTendererRequirementTypeCode(): ?TendererRequirementTypeCode
    {
        return $this->tendererRequirementTypeCode;
    }

    /**
     * @return TendererRequirementTypeCode
     */
    public function getTendererRequirementTypeCodeWithCreate(): TendererRequirementTypeCode
    {
        $this->tendererRequirementTypeCode = is_null($this->tendererRequirementTypeCode) ? new TendererRequirementTypeCode() : $this->tendererRequirementTypeCode;

        return $this->tendererRequirementTypeCode;
    }

    /**
     * @param TendererRequirementTypeCode|null $tendererRequirementTypeCode
     * @return self
     */
    public function setTendererRequirementTypeCode(
        ?TendererRequirementTypeCode $tendererRequirementTypeCode = null,
    ): self {
        $this->tendererRequirementTypeCode = $tendererRequirementTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTendererRequirementTypeCode(): self
    {
        $this->tendererRequirementTypeCode = null;

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
     * @return LegalReference|null
     */
    public function getLegalReference(): ?LegalReference
    {
        return $this->legalReference;
    }

    /**
     * @return LegalReference
     */
    public function getLegalReferenceWithCreate(): LegalReference
    {
        $this->legalReference = is_null($this->legalReference) ? new LegalReference() : $this->legalReference;

        return $this->legalReference;
    }

    /**
     * @param LegalReference|null $legalReference
     * @return self
     */
    public function setLegalReference(?LegalReference $legalReference = null): self
    {
        $this->legalReference = $legalReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLegalReference(): self
    {
        $this->legalReference = null;

        return $this;
    }

    /**
     * @return array<SuggestedEvidence>|null
     */
    public function getSuggestedEvidence(): ?array
    {
        return $this->suggestedEvidence;
    }

    /**
     * @param array<SuggestedEvidence>|null $suggestedEvidence
     * @return self
     */
    public function setSuggestedEvidence(?array $suggestedEvidence = null): self
    {
        $this->suggestedEvidence = $suggestedEvidence;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSuggestedEvidence(): self
    {
        $this->suggestedEvidence = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearSuggestedEvidence(): self
    {
        $this->suggestedEvidence = [];

        return $this;
    }

    /**
     * @return SuggestedEvidence|null
     */
    public function firstSuggestedEvidence(): ?SuggestedEvidence
    {
        $suggestedEvidence = $this->suggestedEvidence ?? [];
        $suggestedEvidence = reset($suggestedEvidence);

        if ($suggestedEvidence === false) {
            return null;
        }

        return $suggestedEvidence;
    }

    /**
     * @return SuggestedEvidence|null
     */
    public function lastSuggestedEvidence(): ?SuggestedEvidence
    {
        $suggestedEvidence = $this->suggestedEvidence ?? [];
        $suggestedEvidence = end($suggestedEvidence);

        if ($suggestedEvidence === false) {
            return null;
        }

        return $suggestedEvidence;
    }

    /**
     * @param SuggestedEvidence $suggestedEvidence
     * @return self
     */
    public function addToSuggestedEvidence(SuggestedEvidence $suggestedEvidence): self
    {
        $this->suggestedEvidence[] = $suggestedEvidence;

        return $this;
    }

    /**
     * @return SuggestedEvidence
     */
    public function addToSuggestedEvidenceWithCreate(): SuggestedEvidence
    {
        $this->addTosuggestedEvidence($suggestedEvidence = new SuggestedEvidence());

        return $suggestedEvidence;
    }

    /**
     * @param SuggestedEvidence $suggestedEvidence
     * @return self
     */
    public function addOnceToSuggestedEvidence(SuggestedEvidence $suggestedEvidence): self
    {
        if (!is_array($this->suggestedEvidence)) {
            $this->suggestedEvidence = [];
        }

        $this->suggestedEvidence[0] = $suggestedEvidence;

        return $this;
    }

    /**
     * @return SuggestedEvidence
     */
    public function addOnceToSuggestedEvidenceWithCreate(): SuggestedEvidence
    {
        if (!is_array($this->suggestedEvidence)) {
            $this->suggestedEvidence = [];
        }

        if ($this->suggestedEvidence === []) {
            $this->addOnceTosuggestedEvidence(new SuggestedEvidence());
        }

        return $this->suggestedEvidence[0];
    }
}
