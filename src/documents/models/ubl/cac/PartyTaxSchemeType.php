<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CompanyID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ExemptionReason;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ExemptionReasonCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\RegistrationName;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TaxLevelCode;

class PartyTaxSchemeType
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
     * @var TaxLevelCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TaxLevelCode")
     * @JMS\Expose
     * @JMS\SerializedName("TaxLevelCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTaxLevelCode", setter="setTaxLevelCode")
     */
    private $taxLevelCode;

    /**
     * @var ExemptionReasonCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ExemptionReasonCode")
     * @JMS\Expose
     * @JMS\SerializedName("ExemptionReasonCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getExemptionReasonCode", setter="setExemptionReasonCode")
     */
    private $exemptionReasonCode;

    /**
     * @var array<ExemptionReason>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\ExemptionReason>")
     * @JMS\Expose
     * @JMS\SerializedName("ExemptionReason")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ExemptionReason", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getExemptionReason", setter="setExemptionReason")
     */
    private $exemptionReason;

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
     * @var TaxScheme|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\TaxScheme")
     * @JMS\Expose
     * @JMS\SerializedName("TaxScheme")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTaxScheme", setter="setTaxScheme")
     */
    private $taxScheme;

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
     * @return TaxLevelCode|null
     */
    public function getTaxLevelCode(): ?TaxLevelCode
    {
        return $this->taxLevelCode;
    }

    /**
     * @return TaxLevelCode
     */
    public function getTaxLevelCodeWithCreate(): TaxLevelCode
    {
        $this->taxLevelCode = is_null($this->taxLevelCode) ? new TaxLevelCode() : $this->taxLevelCode;

        return $this->taxLevelCode;
    }

    /**
     * @param TaxLevelCode|null $taxLevelCode
     * @return self
     */
    public function setTaxLevelCode(?TaxLevelCode $taxLevelCode = null): self
    {
        $this->taxLevelCode = $taxLevelCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTaxLevelCode(): self
    {
        $this->taxLevelCode = null;

        return $this;
    }

    /**
     * @return ExemptionReasonCode|null
     */
    public function getExemptionReasonCode(): ?ExemptionReasonCode
    {
        return $this->exemptionReasonCode;
    }

    /**
     * @return ExemptionReasonCode
     */
    public function getExemptionReasonCodeWithCreate(): ExemptionReasonCode
    {
        $this->exemptionReasonCode = is_null($this->exemptionReasonCode) ? new ExemptionReasonCode() : $this->exemptionReasonCode;

        return $this->exemptionReasonCode;
    }

    /**
     * @param ExemptionReasonCode|null $exemptionReasonCode
     * @return self
     */
    public function setExemptionReasonCode(?ExemptionReasonCode $exemptionReasonCode = null): self
    {
        $this->exemptionReasonCode = $exemptionReasonCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetExemptionReasonCode(): self
    {
        $this->exemptionReasonCode = null;

        return $this;
    }

    /**
     * @return array<ExemptionReason>|null
     */
    public function getExemptionReason(): ?array
    {
        return $this->exemptionReason;
    }

    /**
     * @param array<ExemptionReason>|null $exemptionReason
     * @return self
     */
    public function setExemptionReason(?array $exemptionReason = null): self
    {
        $this->exemptionReason = $exemptionReason;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetExemptionReason(): self
    {
        $this->exemptionReason = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearExemptionReason(): self
    {
        $this->exemptionReason = [];

        return $this;
    }

    /**
     * @return ExemptionReason|null
     */
    public function firstExemptionReason(): ?ExemptionReason
    {
        $exemptionReason = $this->exemptionReason ?? [];
        $exemptionReason = reset($exemptionReason);

        if ($exemptionReason === false) {
            return null;
        }

        return $exemptionReason;
    }

    /**
     * @return ExemptionReason|null
     */
    public function lastExemptionReason(): ?ExemptionReason
    {
        $exemptionReason = $this->exemptionReason ?? [];
        $exemptionReason = end($exemptionReason);

        if ($exemptionReason === false) {
            return null;
        }

        return $exemptionReason;
    }

    /**
     * @param ExemptionReason $exemptionReason
     * @return self
     */
    public function addToExemptionReason(ExemptionReason $exemptionReason): self
    {
        $this->exemptionReason[] = $exemptionReason;

        return $this;
    }

    /**
     * @return ExemptionReason
     */
    public function addToExemptionReasonWithCreate(): ExemptionReason
    {
        $this->addToexemptionReason($exemptionReason = new ExemptionReason());

        return $exemptionReason;
    }

    /**
     * @param ExemptionReason $exemptionReason
     * @return self
     */
    public function addOnceToExemptionReason(ExemptionReason $exemptionReason): self
    {
        if (!is_array($this->exemptionReason)) {
            $this->exemptionReason = [];
        }

        $this->exemptionReason[0] = $exemptionReason;

        return $this;
    }

    /**
     * @return ExemptionReason
     */
    public function addOnceToExemptionReasonWithCreate(): ExemptionReason
    {
        if (!is_array($this->exemptionReason)) {
            $this->exemptionReason = [];
        }

        if ($this->exemptionReason === []) {
            $this->addOnceToexemptionReason(new ExemptionReason());
        }

        return $this->exemptionReason[0];
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
     * @return TaxScheme|null
     */
    public function getTaxScheme(): ?TaxScheme
    {
        return $this->taxScheme;
    }

    /**
     * @return TaxScheme
     */
    public function getTaxSchemeWithCreate(): TaxScheme
    {
        $this->taxScheme = is_null($this->taxScheme) ? new TaxScheme() : $this->taxScheme;

        return $this->taxScheme;
    }

    /**
     * @param TaxScheme|null $taxScheme
     * @return self
     */
    public function setTaxScheme(?TaxScheme $taxScheme = null): self
    {
        $this->taxScheme = $taxScheme;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTaxScheme(): self
    {
        $this->taxScheme = null;

        return $this;
    }
}
