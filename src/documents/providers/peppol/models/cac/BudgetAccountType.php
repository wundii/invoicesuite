<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\peppol\models\cac;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\providers\peppol\models\cbc\BudgetYearNumeric;
use horstoeko\invoicesuite\documents\providers\peppol\models\cbc\ID;
use JMS\Serializer\Annotation as JMS;

class BudgetAccountType
{
    use HandlesObjectFlags;

    /**
     * @var null|ID
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\peppol\models\cbc\ID")
     * @JMS\Expose
     * @JMS\SerializedName("ID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getID", setter="setID")
     */
    private $iD;

    /**
     * @var null|BudgetYearNumeric
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\peppol\models\cbc\BudgetYearNumeric")
     * @JMS\Expose
     * @JMS\SerializedName("BudgetYearNumeric")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getBudgetYearNumeric", setter="setBudgetYearNumeric")
     */
    private $budgetYearNumeric;

    /**
     * @var null|RequiredClassificationScheme
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\peppol\models\cac\RequiredClassificationScheme")
     * @JMS\Expose
     * @JMS\SerializedName("RequiredClassificationScheme")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRequiredClassificationScheme", setter="setRequiredClassificationScheme")
     */
    private $requiredClassificationScheme;

    /**
     * @return null|ID
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
        $this->iD ??= new ID();

        return $this->iD;
    }

    /**
     * @param  null|ID $iD
     * @return static
     */
    public function setID(
        ?ID $iD = null
    ): static {
        $this->iD = $iD;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetID(): static
    {
        $this->iD = null;

        return $this;
    }

    /**
     * @return null|BudgetYearNumeric
     */
    public function getBudgetYearNumeric(): ?BudgetYearNumeric
    {
        return $this->budgetYearNumeric;
    }

    /**
     * @return BudgetYearNumeric
     */
    public function getBudgetYearNumericWithCreate(): BudgetYearNumeric
    {
        $this->budgetYearNumeric ??= new BudgetYearNumeric();

        return $this->budgetYearNumeric;
    }

    /**
     * @param  null|BudgetYearNumeric $budgetYearNumeric
     * @return static
     */
    public function setBudgetYearNumeric(
        ?BudgetYearNumeric $budgetYearNumeric = null
    ): static {
        $this->budgetYearNumeric = $budgetYearNumeric;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBudgetYearNumeric(): static
    {
        $this->budgetYearNumeric = null;

        return $this;
    }

    /**
     * @return null|RequiredClassificationScheme
     */
    public function getRequiredClassificationScheme(): ?RequiredClassificationScheme
    {
        return $this->requiredClassificationScheme;
    }

    /**
     * @return RequiredClassificationScheme
     */
    public function getRequiredClassificationSchemeWithCreate(): RequiredClassificationScheme
    {
        $this->requiredClassificationScheme ??= new RequiredClassificationScheme();

        return $this->requiredClassificationScheme;
    }

    /**
     * @param  null|RequiredClassificationScheme $requiredClassificationScheme
     * @return static
     */
    public function setRequiredClassificationScheme(
        ?RequiredClassificationScheme $requiredClassificationScheme = null,
    ): static {
        $this->requiredClassificationScheme = $requiredClassificationScheme;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetRequiredClassificationScheme(): static
    {
        $this->requiredClassificationScheme = null;

        return $this;
    }
}
