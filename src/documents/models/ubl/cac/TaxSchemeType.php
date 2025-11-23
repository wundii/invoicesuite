<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CurrencyCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Name;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TaxTypeCode;

class TaxSchemeType
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
     * @var TaxTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TaxTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("TaxTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTaxTypeCode", setter="setTaxTypeCode")
     */
    private $taxTypeCode;

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
     * @var array<JurisdictionRegionAddress>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\JurisdictionRegionAddress>")
     * @JMS\Expose
     * @JMS\SerializedName("JurisdictionRegionAddress")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="JurisdictionRegionAddress", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getJurisdictionRegionAddress", setter="setJurisdictionRegionAddress")
     */
    private $jurisdictionRegionAddress;

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
     * @return TaxTypeCode|null
     */
    public function getTaxTypeCode(): ?TaxTypeCode
    {
        return $this->taxTypeCode;
    }

    /**
     * @return TaxTypeCode
     */
    public function getTaxTypeCodeWithCreate(): TaxTypeCode
    {
        $this->taxTypeCode = is_null($this->taxTypeCode) ? new TaxTypeCode() : $this->taxTypeCode;

        return $this->taxTypeCode;
    }

    /**
     * @param TaxTypeCode|null $taxTypeCode
     * @return self
     */
    public function setTaxTypeCode(?TaxTypeCode $taxTypeCode = null): self
    {
        $this->taxTypeCode = $taxTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTaxTypeCode(): self
    {
        $this->taxTypeCode = null;

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
     * @return array<JurisdictionRegionAddress>|null
     */
    public function getJurisdictionRegionAddress(): ?array
    {
        return $this->jurisdictionRegionAddress;
    }

    /**
     * @param array<JurisdictionRegionAddress>|null $jurisdictionRegionAddress
     * @return self
     */
    public function setJurisdictionRegionAddress(?array $jurisdictionRegionAddress = null): self
    {
        $this->jurisdictionRegionAddress = $jurisdictionRegionAddress;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetJurisdictionRegionAddress(): self
    {
        $this->jurisdictionRegionAddress = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearJurisdictionRegionAddress(): self
    {
        $this->jurisdictionRegionAddress = [];

        return $this;
    }

    /**
     * @return JurisdictionRegionAddress|null
     */
    public function firstJurisdictionRegionAddress(): ?JurisdictionRegionAddress
    {
        $jurisdictionRegionAddress = $this->jurisdictionRegionAddress ?? [];
        $jurisdictionRegionAddress = reset($jurisdictionRegionAddress);

        if ($jurisdictionRegionAddress === false) {
            return null;
        }

        return $jurisdictionRegionAddress;
    }

    /**
     * @return JurisdictionRegionAddress|null
     */
    public function lastJurisdictionRegionAddress(): ?JurisdictionRegionAddress
    {
        $jurisdictionRegionAddress = $this->jurisdictionRegionAddress ?? [];
        $jurisdictionRegionAddress = end($jurisdictionRegionAddress);

        if ($jurisdictionRegionAddress === false) {
            return null;
        }

        return $jurisdictionRegionAddress;
    }

    /**
     * @param JurisdictionRegionAddress $jurisdictionRegionAddress
     * @return self
     */
    public function addToJurisdictionRegionAddress(JurisdictionRegionAddress $jurisdictionRegionAddress): self
    {
        $this->jurisdictionRegionAddress[] = $jurisdictionRegionAddress;

        return $this;
    }

    /**
     * @return JurisdictionRegionAddress
     */
    public function addToJurisdictionRegionAddressWithCreate(): JurisdictionRegionAddress
    {
        $this->addTojurisdictionRegionAddress($jurisdictionRegionAddress = new JurisdictionRegionAddress());

        return $jurisdictionRegionAddress;
    }

    /**
     * @param JurisdictionRegionAddress $jurisdictionRegionAddress
     * @return self
     */
    public function addOnceToJurisdictionRegionAddress(JurisdictionRegionAddress $jurisdictionRegionAddress): self
    {
        if (!is_array($this->jurisdictionRegionAddress)) {
            $this->jurisdictionRegionAddress = [];
        }

        $this->jurisdictionRegionAddress[0] = $jurisdictionRegionAddress;

        return $this;
    }

    /**
     * @return JurisdictionRegionAddress
     */
    public function addOnceToJurisdictionRegionAddressWithCreate(): JurisdictionRegionAddress
    {
        if (!is_array($this->jurisdictionRegionAddress)) {
            $this->jurisdictionRegionAddress = [];
        }

        if ($this->jurisdictionRegionAddress === []) {
            $this->addOnceTojurisdictionRegionAddress(new JurisdictionRegionAddress());
        }

        return $this->jurisdictionRegionAddress[0];
    }
}
