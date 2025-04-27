<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\ubl\cbc\ID;
use horstoeko\invoicesuite\models\ubl\cbc\TotalAmount;

class BudgetAccountLineType
{
    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ID
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ID")
     * @JMS\Expose
     * @JMS\SerializedName("ID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getID", setter="setID")
     */
    private $iD;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\TotalAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\TotalAmount")
     * @JMS\Expose
     * @JMS\SerializedName("TotalAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTotalAmount", setter="setTotalAmount")
     */
    private $totalAmount;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\BudgetAccount>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\BudgetAccount>")
     * @JMS\Expose
     * @JMS\SerializedName("BudgetAccount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="BudgetAccount", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getBudgetAccount", setter="setBudgetAccount")
     */
    private $budgetAccount;

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ID|null
     */
    public function getID(): ?ID
    {
        return $this->iD;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ID
     */
    public function getIDWithCreate(): ID
    {
        $this->iD = is_null($this->iD) ? new ID() : $this->iD;

        return $this->iD;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ID $iD
     * @return self
     */
    public function setID(ID $iD): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\TotalAmount|null
     */
    public function getTotalAmount(): ?TotalAmount
    {
        return $this->totalAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\TotalAmount
     */
    public function getTotalAmountWithCreate(): TotalAmount
    {
        $this->totalAmount = is_null($this->totalAmount) ? new TotalAmount() : $this->totalAmount;

        return $this->totalAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\TotalAmount $totalAmount
     * @return self
     */
    public function setTotalAmount(TotalAmount $totalAmount): self
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\BudgetAccount>|null
     */
    public function getBudgetAccount(): ?array
    {
        return $this->budgetAccount;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\BudgetAccount> $budgetAccount
     * @return self
     */
    public function setBudgetAccount(array $budgetAccount): self
    {
        $this->budgetAccount = $budgetAccount;

        return $this;
    }

    /**
     * @return self
     */
    public function clearBudgetAccount(): self
    {
        $this->budgetAccount = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\BudgetAccount $budgetAccount
     * @return self
     */
    public function addToBudgetAccount(BudgetAccount $budgetAccount): self
    {
        $this->budgetAccount[] = $budgetAccount;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\BudgetAccount
     */
    public function addToBudgetAccountWithCreate(): BudgetAccount
    {
        $this->addTobudgetAccount($budgetAccount = new BudgetAccount());

        return $budgetAccount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\BudgetAccount $budgetAccount
     * @return self
     */
    public function addOnceToBudgetAccount(BudgetAccount $budgetAccount): self
    {
        $this->budgetAccount[0] = $budgetAccount;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\BudgetAccount
     */
    public function addOnceToBudgetAccountWithCreate(): BudgetAccount
    {
        if ($this->budgetAccount === []) {
            $this->addOnceTobudgetAccount(new BudgetAccount());
        }

        return $this->budgetAccount[0];
    }
}
