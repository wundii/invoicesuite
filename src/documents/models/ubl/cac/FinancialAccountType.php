<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\AccountFormatCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\AccountTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\AliasName;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CurrencyCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Name;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PaymentNote;

class FinancialAccountType
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
     * @var AliasName|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\AliasName")
     * @JMS\Expose
     * @JMS\SerializedName("AliasName")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAliasName", setter="setAliasName")
     */
    private $aliasName;

    /**
     * @var AccountTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\AccountTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("AccountTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAccountTypeCode", setter="setAccountTypeCode")
     */
    private $accountTypeCode;

    /**
     * @var AccountFormatCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\AccountFormatCode")
     * @JMS\Expose
     * @JMS\SerializedName("AccountFormatCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAccountFormatCode", setter="setAccountFormatCode")
     */
    private $accountFormatCode;

    /**
     * @var CurrencyCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CurrencyCode")
     * @JMS\Expose
     * @JMS\SerializedName("CurrencyCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCurrencyCode", setter="setCurrencyCode")
     */
    private $currencyCode;

    /**
     * @var array<PaymentNote>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\PaymentNote>")
     * @JMS\Expose
     * @JMS\SerializedName("PaymentNote")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="PaymentNote", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getPaymentNote", setter="setPaymentNote")
     */
    private $paymentNote;

    /**
     * @var FinancialInstitutionBranch|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\FinancialInstitutionBranch")
     * @JMS\Expose
     * @JMS\SerializedName("FinancialInstitutionBranch")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFinancialInstitutionBranch", setter="setFinancialInstitutionBranch")
     */
    private $financialInstitutionBranch;

    /**
     * @var Country|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Country")
     * @JMS\Expose
     * @JMS\SerializedName("Country")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCountry", setter="setCountry")
     */
    private $country;

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
     * @return AliasName|null
     */
    public function getAliasName(): ?AliasName
    {
        return $this->aliasName;
    }

    /**
     * @return AliasName
     */
    public function getAliasNameWithCreate(): AliasName
    {
        $this->aliasName = is_null($this->aliasName) ? new AliasName() : $this->aliasName;

        return $this->aliasName;
    }

    /**
     * @param AliasName|null $aliasName
     * @return self
     */
    public function setAliasName(?AliasName $aliasName = null): self
    {
        $this->aliasName = $aliasName;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAliasName(): self
    {
        $this->aliasName = null;

        return $this;
    }

    /**
     * @return AccountTypeCode|null
     */
    public function getAccountTypeCode(): ?AccountTypeCode
    {
        return $this->accountTypeCode;
    }

    /**
     * @return AccountTypeCode
     */
    public function getAccountTypeCodeWithCreate(): AccountTypeCode
    {
        $this->accountTypeCode = is_null($this->accountTypeCode) ? new AccountTypeCode() : $this->accountTypeCode;

        return $this->accountTypeCode;
    }

    /**
     * @param AccountTypeCode|null $accountTypeCode
     * @return self
     */
    public function setAccountTypeCode(?AccountTypeCode $accountTypeCode = null): self
    {
        $this->accountTypeCode = $accountTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAccountTypeCode(): self
    {
        $this->accountTypeCode = null;

        return $this;
    }

    /**
     * @return AccountFormatCode|null
     */
    public function getAccountFormatCode(): ?AccountFormatCode
    {
        return $this->accountFormatCode;
    }

    /**
     * @return AccountFormatCode
     */
    public function getAccountFormatCodeWithCreate(): AccountFormatCode
    {
        $this->accountFormatCode = is_null($this->accountFormatCode) ? new AccountFormatCode() : $this->accountFormatCode;

        return $this->accountFormatCode;
    }

    /**
     * @param AccountFormatCode|null $accountFormatCode
     * @return self
     */
    public function setAccountFormatCode(?AccountFormatCode $accountFormatCode = null): self
    {
        $this->accountFormatCode = $accountFormatCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAccountFormatCode(): self
    {
        $this->accountFormatCode = null;

        return $this;
    }

    /**
     * @return CurrencyCode|null
     */
    public function getCurrencyCode(): ?CurrencyCode
    {
        return $this->currencyCode;
    }

    /**
     * @return CurrencyCode
     */
    public function getCurrencyCodeWithCreate(): CurrencyCode
    {
        $this->currencyCode = is_null($this->currencyCode) ? new CurrencyCode() : $this->currencyCode;

        return $this->currencyCode;
    }

    /**
     * @param CurrencyCode|null $currencyCode
     * @return self
     */
    public function setCurrencyCode(?CurrencyCode $currencyCode = null): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCurrencyCode(): self
    {
        $this->currencyCode = null;

        return $this;
    }

    /**
     * @return array<PaymentNote>|null
     */
    public function getPaymentNote(): ?array
    {
        return $this->paymentNote;
    }

    /**
     * @param array<PaymentNote>|null $paymentNote
     * @return self
     */
    public function setPaymentNote(?array $paymentNote = null): self
    {
        $this->paymentNote = $paymentNote;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPaymentNote(): self
    {
        $this->paymentNote = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearPaymentNote(): self
    {
        $this->paymentNote = [];

        return $this;
    }

    /**
     * @return PaymentNote|null
     */
    public function firstPaymentNote(): ?PaymentNote
    {
        $paymentNote = $this->paymentNote ?? [];
        $paymentNote = reset($paymentNote);

        if ($paymentNote === false) {
            return null;
        }

        return $paymentNote;
    }

    /**
     * @return PaymentNote|null
     */
    public function lastPaymentNote(): ?PaymentNote
    {
        $paymentNote = $this->paymentNote ?? [];
        $paymentNote = end($paymentNote);

        if ($paymentNote === false) {
            return null;
        }

        return $paymentNote;
    }

    /**
     * @param PaymentNote $paymentNote
     * @return self
     */
    public function addToPaymentNote(PaymentNote $paymentNote): self
    {
        $this->paymentNote[] = $paymentNote;

        return $this;
    }

    /**
     * @return PaymentNote
     */
    public function addToPaymentNoteWithCreate(): PaymentNote
    {
        $this->addTopaymentNote($paymentNote = new PaymentNote());

        return $paymentNote;
    }

    /**
     * @param PaymentNote $paymentNote
     * @return self
     */
    public function addOnceToPaymentNote(PaymentNote $paymentNote): self
    {
        if (!is_array($this->paymentNote)) {
            $this->paymentNote = [];
        }

        $this->paymentNote[0] = $paymentNote;

        return $this;
    }

    /**
     * @return PaymentNote
     */
    public function addOnceToPaymentNoteWithCreate(): PaymentNote
    {
        if (!is_array($this->paymentNote)) {
            $this->paymentNote = [];
        }

        if ($this->paymentNote === []) {
            $this->addOnceTopaymentNote(new PaymentNote());
        }

        return $this->paymentNote[0];
    }

    /**
     * @return FinancialInstitutionBranch|null
     */
    public function getFinancialInstitutionBranch(): ?FinancialInstitutionBranch
    {
        return $this->financialInstitutionBranch;
    }

    /**
     * @return FinancialInstitutionBranch
     */
    public function getFinancialInstitutionBranchWithCreate(): FinancialInstitutionBranch
    {
        $this->financialInstitutionBranch = is_null($this->financialInstitutionBranch) ? new FinancialInstitutionBranch() : $this->financialInstitutionBranch;

        return $this->financialInstitutionBranch;
    }

    /**
     * @param FinancialInstitutionBranch|null $financialInstitutionBranch
     * @return self
     */
    public function setFinancialInstitutionBranch(
        ?FinancialInstitutionBranch $financialInstitutionBranch = null,
    ): self {
        $this->financialInstitutionBranch = $financialInstitutionBranch;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetFinancialInstitutionBranch(): self
    {
        $this->financialInstitutionBranch = null;

        return $this;
    }

    /**
     * @return Country|null
     */
    public function getCountry(): ?Country
    {
        return $this->country;
    }

    /**
     * @return Country
     */
    public function getCountryWithCreate(): Country
    {
        $this->country = is_null($this->country) ? new Country() : $this->country;

        return $this->country;
    }

    /**
     * @param Country|null $country
     * @return self
     */
    public function setCountry(?Country $country = null): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCountry(): self
    {
        $this->country = null;

        return $this;
    }
}
