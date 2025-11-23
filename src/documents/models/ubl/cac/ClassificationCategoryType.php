<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CodeValue;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Name;

class ClassificationCategoryType
{
    use HandlesObjectFlags;

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
     * @var CodeValue|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CodeValue")
     * @JMS\Expose
     * @JMS\SerializedName("CodeValue")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCodeValue", setter="setCodeValue")
     */
    private $codeValue;

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
     * @var array<CategorizesClassificationCategory>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\CategorizesClassificationCategory>")
     * @JMS\Expose
     * @JMS\SerializedName("CategorizesClassificationCategory")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="CategorizesClassificationCategory", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getCategorizesClassificationCategory", setter="setCategorizesClassificationCategory")
     */
    private $categorizesClassificationCategory;

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
     * @return CodeValue|null
     */
    public function getCodeValue(): ?CodeValue
    {
        return $this->codeValue;
    }

    /**
     * @return CodeValue
     */
    public function getCodeValueWithCreate(): CodeValue
    {
        $this->codeValue = is_null($this->codeValue) ? new CodeValue() : $this->codeValue;

        return $this->codeValue;
    }

    /**
     * @param CodeValue|null $codeValue
     * @return self
     */
    public function setCodeValue(?CodeValue $codeValue = null): self
    {
        $this->codeValue = $codeValue;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCodeValue(): self
    {
        $this->codeValue = null;

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
     * @return array<CategorizesClassificationCategory>|null
     */
    public function getCategorizesClassificationCategory(): ?array
    {
        return $this->categorizesClassificationCategory;
    }

    /**
     * @param array<CategorizesClassificationCategory>|null $categorizesClassificationCategory
     * @return self
     */
    public function setCategorizesClassificationCategory(?array $categorizesClassificationCategory = null): self
    {
        $this->categorizesClassificationCategory = $categorizesClassificationCategory;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCategorizesClassificationCategory(): self
    {
        $this->categorizesClassificationCategory = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearCategorizesClassificationCategory(): self
    {
        $this->categorizesClassificationCategory = [];

        return $this;
    }

    /**
     * @return CategorizesClassificationCategory|null
     */
    public function firstCategorizesClassificationCategory(): ?CategorizesClassificationCategory
    {
        $categorizesClassificationCategory = $this->categorizesClassificationCategory ?? [];
        $categorizesClassificationCategory = reset($categorizesClassificationCategory);

        if ($categorizesClassificationCategory === false) {
            return null;
        }

        return $categorizesClassificationCategory;
    }

    /**
     * @return CategorizesClassificationCategory|null
     */
    public function lastCategorizesClassificationCategory(): ?CategorizesClassificationCategory
    {
        $categorizesClassificationCategory = $this->categorizesClassificationCategory ?? [];
        $categorizesClassificationCategory = end($categorizesClassificationCategory);

        if ($categorizesClassificationCategory === false) {
            return null;
        }

        return $categorizesClassificationCategory;
    }

    /**
     * @param CategorizesClassificationCategory $categorizesClassificationCategory
     * @return self
     */
    public function addToCategorizesClassificationCategory(
        CategorizesClassificationCategory $categorizesClassificationCategory,
    ): self {
        $this->categorizesClassificationCategory[] = $categorizesClassificationCategory;

        return $this;
    }

    /**
     * @return CategorizesClassificationCategory
     */
    public function addToCategorizesClassificationCategoryWithCreate(): CategorizesClassificationCategory
    {
        $this->addTocategorizesClassificationCategory($categorizesClassificationCategory = new CategorizesClassificationCategory());

        return $categorizesClassificationCategory;
    }

    /**
     * @param CategorizesClassificationCategory $categorizesClassificationCategory
     * @return self
     */
    public function addOnceToCategorizesClassificationCategory(
        CategorizesClassificationCategory $categorizesClassificationCategory,
    ): self {
        if (!is_array($this->categorizesClassificationCategory)) {
            $this->categorizesClassificationCategory = [];
        }

        $this->categorizesClassificationCategory[0] = $categorizesClassificationCategory;

        return $this;
    }

    /**
     * @return CategorizesClassificationCategory
     */
    public function addOnceToCategorizesClassificationCategoryWithCreate(): CategorizesClassificationCategory
    {
        if (!is_array($this->categorizesClassificationCategory)) {
            $this->categorizesClassificationCategory = [];
        }

        if ($this->categorizesClassificationCategory === []) {
            $this->addOnceTocategorizesClassificationCategory(new CategorizesClassificationCategory());
        }

        return $this->categorizesClassificationCategory[0];
    }
}
