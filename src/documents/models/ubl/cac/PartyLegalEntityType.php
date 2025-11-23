<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CompanyID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CompanyLegalForm;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CompanyLegalFormCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CompanyLiquidationStatusCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CorporateStockAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\RegistrationName;

class PartyLegalEntityType
{
    use HandlesObjectFlags;

    /**
     * @var RegistrationName|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\RegistrationName")
     * @JMS\Expose
     * @JMS\SerializedName("RegistrationName")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRegistrationName", setter="setRegistrationName")
     */
    private $registrationName;

    /**
     * @var CompanyID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CompanyID")
     * @JMS\Expose
     * @JMS\SerializedName("CompanyID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCompanyID", setter="setCompanyID")
     */
    private $companyID;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("RegistrationDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRegistrationDate", setter="setRegistrationDate")
     */
    private $registrationDate;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("RegistrationExpirationDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRegistrationExpirationDate", setter="setRegistrationExpirationDate")
     */
    private $registrationExpirationDate;

    /**
     * @var CompanyLegalFormCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CompanyLegalFormCode")
     * @JMS\Expose
     * @JMS\SerializedName("CompanyLegalFormCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCompanyLegalFormCode", setter="setCompanyLegalFormCode")
     */
    private $companyLegalFormCode;

    /**
     * @var CompanyLegalForm|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CompanyLegalForm")
     * @JMS\Expose
     * @JMS\SerializedName("CompanyLegalForm")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCompanyLegalForm", setter="setCompanyLegalForm")
     */
    private $companyLegalForm;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("SoleProprietorshipIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSoleProprietorshipIndicator", setter="setSoleProprietorshipIndicator")
     */
    private $soleProprietorshipIndicator;

    /**
     * @var CompanyLiquidationStatusCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CompanyLiquidationStatusCode")
     * @JMS\Expose
     * @JMS\SerializedName("CompanyLiquidationStatusCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCompanyLiquidationStatusCode", setter="setCompanyLiquidationStatusCode")
     */
    private $companyLiquidationStatusCode;

    /**
     * @var CorporateStockAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CorporateStockAmount")
     * @JMS\Expose
     * @JMS\SerializedName("CorporateStockAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCorporateStockAmount", setter="setCorporateStockAmount")
     */
    private $corporateStockAmount;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("FullyPaidSharesIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFullyPaidSharesIndicator", setter="setFullyPaidSharesIndicator")
     */
    private $fullyPaidSharesIndicator;

    /**
     * @var RegistrationAddress|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\RegistrationAddress")
     * @JMS\Expose
     * @JMS\SerializedName("RegistrationAddress")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRegistrationAddress", setter="setRegistrationAddress")
     */
    private $registrationAddress;

    /**
     * @var CorporateRegistrationScheme|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\CorporateRegistrationScheme")
     * @JMS\Expose
     * @JMS\SerializedName("CorporateRegistrationScheme")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCorporateRegistrationScheme", setter="setCorporateRegistrationScheme")
     */
    private $corporateRegistrationScheme;

    /**
     * @var HeadOfficeParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\HeadOfficeParty")
     * @JMS\Expose
     * @JMS\SerializedName("HeadOfficeParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getHeadOfficeParty", setter="setHeadOfficeParty")
     */
    private $headOfficeParty;

    /**
     * @var array<ShareholderParty>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ShareholderParty>")
     * @JMS\Expose
     * @JMS\SerializedName("ShareholderParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ShareholderParty", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getShareholderParty", setter="setShareholderParty")
     */
    private $shareholderParty;

    /**
     * @return RegistrationName|null
     */
    public function getRegistrationName(): ?RegistrationName
    {
        return $this->registrationName;
    }

    /**
     * @return RegistrationName
     */
    public function getRegistrationNameWithCreate(): RegistrationName
    {
        $this->registrationName = is_null($this->registrationName) ? new RegistrationName() : $this->registrationName;

        return $this->registrationName;
    }

    /**
     * @param RegistrationName|null $registrationName
     * @return self
     */
    public function setRegistrationName(?RegistrationName $registrationName = null): self
    {
        $this->registrationName = $registrationName;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetRegistrationName(): self
    {
        $this->registrationName = null;

        return $this;
    }

    /**
     * @return CompanyID|null
     */
    public function getCompanyID(): ?CompanyID
    {
        return $this->companyID;
    }

    /**
     * @return CompanyID
     */
    public function getCompanyIDWithCreate(): CompanyID
    {
        $this->companyID = is_null($this->companyID) ? new CompanyID() : $this->companyID;

        return $this->companyID;
    }

    /**
     * @param CompanyID|null $companyID
     * @return self
     */
    public function setCompanyID(?CompanyID $companyID = null): self
    {
        $this->companyID = $companyID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCompanyID(): self
    {
        $this->companyID = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getRegistrationDate(): ?DateTimeInterface
    {
        return $this->registrationDate;
    }

    /**
     * @param DateTimeInterface|null $registrationDate
     * @return self
     */
    public function setRegistrationDate(?DateTimeInterface $registrationDate = null): self
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetRegistrationDate(): self
    {
        $this->registrationDate = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getRegistrationExpirationDate(): ?DateTimeInterface
    {
        return $this->registrationExpirationDate;
    }

    /**
     * @param DateTimeInterface|null $registrationExpirationDate
     * @return self
     */
    public function setRegistrationExpirationDate(?DateTimeInterface $registrationExpirationDate = null): self
    {
        $this->registrationExpirationDate = $registrationExpirationDate;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetRegistrationExpirationDate(): self
    {
        $this->registrationExpirationDate = null;

        return $this;
    }

    /**
     * @return CompanyLegalFormCode|null
     */
    public function getCompanyLegalFormCode(): ?CompanyLegalFormCode
    {
        return $this->companyLegalFormCode;
    }

    /**
     * @return CompanyLegalFormCode
     */
    public function getCompanyLegalFormCodeWithCreate(): CompanyLegalFormCode
    {
        $this->companyLegalFormCode = is_null($this->companyLegalFormCode) ? new CompanyLegalFormCode() : $this->companyLegalFormCode;

        return $this->companyLegalFormCode;
    }

    /**
     * @param CompanyLegalFormCode|null $companyLegalFormCode
     * @return self
     */
    public function setCompanyLegalFormCode(?CompanyLegalFormCode $companyLegalFormCode = null): self
    {
        $this->companyLegalFormCode = $companyLegalFormCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCompanyLegalFormCode(): self
    {
        $this->companyLegalFormCode = null;

        return $this;
    }

    /**
     * @return CompanyLegalForm|null
     */
    public function getCompanyLegalForm(): ?CompanyLegalForm
    {
        return $this->companyLegalForm;
    }

    /**
     * @return CompanyLegalForm
     */
    public function getCompanyLegalFormWithCreate(): CompanyLegalForm
    {
        $this->companyLegalForm = is_null($this->companyLegalForm) ? new CompanyLegalForm() : $this->companyLegalForm;

        return $this->companyLegalForm;
    }

    /**
     * @param CompanyLegalForm|null $companyLegalForm
     * @return self
     */
    public function setCompanyLegalForm(?CompanyLegalForm $companyLegalForm = null): self
    {
        $this->companyLegalForm = $companyLegalForm;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCompanyLegalForm(): self
    {
        $this->companyLegalForm = null;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSoleProprietorshipIndicator(): ?bool
    {
        return $this->soleProprietorshipIndicator;
    }

    /**
     * @param bool|null $soleProprietorshipIndicator
     * @return self
     */
    public function setSoleProprietorshipIndicator(?bool $soleProprietorshipIndicator = null): self
    {
        $this->soleProprietorshipIndicator = $soleProprietorshipIndicator;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSoleProprietorshipIndicator(): self
    {
        $this->soleProprietorshipIndicator = null;

        return $this;
    }

    /**
     * @return CompanyLiquidationStatusCode|null
     */
    public function getCompanyLiquidationStatusCode(): ?CompanyLiquidationStatusCode
    {
        return $this->companyLiquidationStatusCode;
    }

    /**
     * @return CompanyLiquidationStatusCode
     */
    public function getCompanyLiquidationStatusCodeWithCreate(): CompanyLiquidationStatusCode
    {
        $this->companyLiquidationStatusCode = is_null($this->companyLiquidationStatusCode) ? new CompanyLiquidationStatusCode() : $this->companyLiquidationStatusCode;

        return $this->companyLiquidationStatusCode;
    }

    /**
     * @param CompanyLiquidationStatusCode|null $companyLiquidationStatusCode
     * @return self
     */
    public function setCompanyLiquidationStatusCode(
        ?CompanyLiquidationStatusCode $companyLiquidationStatusCode = null,
    ): self {
        $this->companyLiquidationStatusCode = $companyLiquidationStatusCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCompanyLiquidationStatusCode(): self
    {
        $this->companyLiquidationStatusCode = null;

        return $this;
    }

    /**
     * @return CorporateStockAmount|null
     */
    public function getCorporateStockAmount(): ?CorporateStockAmount
    {
        return $this->corporateStockAmount;
    }

    /**
     * @return CorporateStockAmount
     */
    public function getCorporateStockAmountWithCreate(): CorporateStockAmount
    {
        $this->corporateStockAmount = is_null($this->corporateStockAmount) ? new CorporateStockAmount() : $this->corporateStockAmount;

        return $this->corporateStockAmount;
    }

    /**
     * @param CorporateStockAmount|null $corporateStockAmount
     * @return self
     */
    public function setCorporateStockAmount(?CorporateStockAmount $corporateStockAmount = null): self
    {
        $this->corporateStockAmount = $corporateStockAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCorporateStockAmount(): self
    {
        $this->corporateStockAmount = null;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getFullyPaidSharesIndicator(): ?bool
    {
        return $this->fullyPaidSharesIndicator;
    }

    /**
     * @param bool|null $fullyPaidSharesIndicator
     * @return self
     */
    public function setFullyPaidSharesIndicator(?bool $fullyPaidSharesIndicator = null): self
    {
        $this->fullyPaidSharesIndicator = $fullyPaidSharesIndicator;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetFullyPaidSharesIndicator(): self
    {
        $this->fullyPaidSharesIndicator = null;

        return $this;
    }

    /**
     * @return RegistrationAddress|null
     */
    public function getRegistrationAddress(): ?RegistrationAddress
    {
        return $this->registrationAddress;
    }

    /**
     * @return RegistrationAddress
     */
    public function getRegistrationAddressWithCreate(): RegistrationAddress
    {
        $this->registrationAddress = is_null($this->registrationAddress) ? new RegistrationAddress() : $this->registrationAddress;

        return $this->registrationAddress;
    }

    /**
     * @param RegistrationAddress|null $registrationAddress
     * @return self
     */
    public function setRegistrationAddress(?RegistrationAddress $registrationAddress = null): self
    {
        $this->registrationAddress = $registrationAddress;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetRegistrationAddress(): self
    {
        $this->registrationAddress = null;

        return $this;
    }

    /**
     * @return CorporateRegistrationScheme|null
     */
    public function getCorporateRegistrationScheme(): ?CorporateRegistrationScheme
    {
        return $this->corporateRegistrationScheme;
    }

    /**
     * @return CorporateRegistrationScheme
     */
    public function getCorporateRegistrationSchemeWithCreate(): CorporateRegistrationScheme
    {
        $this->corporateRegistrationScheme = is_null($this->corporateRegistrationScheme) ? new CorporateRegistrationScheme() : $this->corporateRegistrationScheme;

        return $this->corporateRegistrationScheme;
    }

    /**
     * @param CorporateRegistrationScheme|null $corporateRegistrationScheme
     * @return self
     */
    public function setCorporateRegistrationScheme(
        ?CorporateRegistrationScheme $corporateRegistrationScheme = null,
    ): self {
        $this->corporateRegistrationScheme = $corporateRegistrationScheme;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCorporateRegistrationScheme(): self
    {
        $this->corporateRegistrationScheme = null;

        return $this;
    }

    /**
     * @return HeadOfficeParty|null
     */
    public function getHeadOfficeParty(): ?HeadOfficeParty
    {
        return $this->headOfficeParty;
    }

    /**
     * @return HeadOfficeParty
     */
    public function getHeadOfficePartyWithCreate(): HeadOfficeParty
    {
        $this->headOfficeParty = is_null($this->headOfficeParty) ? new HeadOfficeParty() : $this->headOfficeParty;

        return $this->headOfficeParty;
    }

    /**
     * @param HeadOfficeParty|null $headOfficeParty
     * @return self
     */
    public function setHeadOfficeParty(?HeadOfficeParty $headOfficeParty = null): self
    {
        $this->headOfficeParty = $headOfficeParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetHeadOfficeParty(): self
    {
        $this->headOfficeParty = null;

        return $this;
    }

    /**
     * @return array<ShareholderParty>|null
     */
    public function getShareholderParty(): ?array
    {
        return $this->shareholderParty;
    }

    /**
     * @param array<ShareholderParty>|null $shareholderParty
     * @return self
     */
    public function setShareholderParty(?array $shareholderParty = null): self
    {
        $this->shareholderParty = $shareholderParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetShareholderParty(): self
    {
        $this->shareholderParty = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearShareholderParty(): self
    {
        $this->shareholderParty = [];

        return $this;
    }

    /**
     * @return ShareholderParty|null
     */
    public function firstShareholderParty(): ?ShareholderParty
    {
        $shareholderParty = $this->shareholderParty ?? [];
        $shareholderParty = reset($shareholderParty);

        if ($shareholderParty === false) {
            return null;
        }

        return $shareholderParty;
    }

    /**
     * @return ShareholderParty|null
     */
    public function lastShareholderParty(): ?ShareholderParty
    {
        $shareholderParty = $this->shareholderParty ?? [];
        $shareholderParty = end($shareholderParty);

        if ($shareholderParty === false) {
            return null;
        }

        return $shareholderParty;
    }

    /**
     * @param ShareholderParty $shareholderParty
     * @return self
     */
    public function addToShareholderParty(ShareholderParty $shareholderParty): self
    {
        $this->shareholderParty[] = $shareholderParty;

        return $this;
    }

    /**
     * @return ShareholderParty
     */
    public function addToShareholderPartyWithCreate(): ShareholderParty
    {
        $this->addToshareholderParty($shareholderParty = new ShareholderParty());

        return $shareholderParty;
    }

    /**
     * @param ShareholderParty $shareholderParty
     * @return self
     */
    public function addOnceToShareholderParty(ShareholderParty $shareholderParty): self
    {
        if (!is_array($this->shareholderParty)) {
            $this->shareholderParty = [];
        }

        $this->shareholderParty[0] = $shareholderParty;

        return $this;
    }

    /**
     * @return ShareholderParty
     */
    public function addOnceToShareholderPartyWithCreate(): ShareholderParty
    {
        if (!is_array($this->shareholderParty)) {
            $this->shareholderParty = [];
        }

        if ($this->shareholderParty === []) {
            $this->addOnceToshareholderParty(new ShareholderParty());
        }

        return $this->shareholderParty[0];
    }
}
