<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\ubl\cbc\CallBaseAmount;
use horstoeko\invoicesuite\models\ubl\cbc\CallExtensionAmount;
use horstoeko\invoicesuite\models\ubl\cbc\ID;
use horstoeko\invoicesuite\models\ubl\cbc\MovieTitle;
use horstoeko\invoicesuite\models\ubl\cbc\PayPerView;
use horstoeko\invoicesuite\models\ubl\cbc\Quantity;
use horstoeko\invoicesuite\models\ubl\cbc\RoamingPartnerName;
use horstoeko\invoicesuite\models\ubl\cbc\ServiceNumberCalled;
use horstoeko\invoicesuite\models\ubl\cbc\TelecommunicationsServiceCall;
use horstoeko\invoicesuite\models\ubl\cbc\TelecommunicationsServiceCallCode;
use horstoeko\invoicesuite\models\ubl\cbc\TelecommunicationsServiceCategory;
use horstoeko\invoicesuite\models\ubl\cbc\TelecommunicationsServiceCategoryCode;

class TelecommunicationsServiceType
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
     * @var \DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("CallDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCallDate", setter="setCallDate")
     */
    private $callDate;

    /**
     * @var \DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("CallTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCallTime", setter="setCallTime")
     */
    private $callTime;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ServiceNumberCalled
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ServiceNumberCalled")
     * @JMS\Expose
     * @JMS\SerializedName("ServiceNumberCalled")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getServiceNumberCalled", setter="setServiceNumberCalled")
     */
    private $serviceNumberCalled;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\TelecommunicationsServiceCategory
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\TelecommunicationsServiceCategory")
     * @JMS\Expose
     * @JMS\SerializedName("TelecommunicationsServiceCategory")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTelecommunicationsServiceCategory", setter="setTelecommunicationsServiceCategory")
     */
    private $telecommunicationsServiceCategory;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\TelecommunicationsServiceCategoryCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\TelecommunicationsServiceCategoryCode")
     * @JMS\Expose
     * @JMS\SerializedName("TelecommunicationsServiceCategoryCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTelecommunicationsServiceCategoryCode", setter="setTelecommunicationsServiceCategoryCode")
     */
    private $telecommunicationsServiceCategoryCode;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\MovieTitle
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\MovieTitle")
     * @JMS\Expose
     * @JMS\SerializedName("MovieTitle")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMovieTitle", setter="setMovieTitle")
     */
    private $movieTitle;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\RoamingPartnerName
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\RoamingPartnerName")
     * @JMS\Expose
     * @JMS\SerializedName("RoamingPartnerName")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRoamingPartnerName", setter="setRoamingPartnerName")
     */
    private $roamingPartnerName;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\PayPerView
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\PayPerView")
     * @JMS\Expose
     * @JMS\SerializedName("PayPerView")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPayPerView", setter="setPayPerView")
     */
    private $payPerView;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\Quantity
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\Quantity")
     * @JMS\Expose
     * @JMS\SerializedName("Quantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getQuantity", setter="setQuantity")
     */
    private $quantity;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\TelecommunicationsServiceCall
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\TelecommunicationsServiceCall")
     * @JMS\Expose
     * @JMS\SerializedName("TelecommunicationsServiceCall")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTelecommunicationsServiceCall", setter="setTelecommunicationsServiceCall")
     */
    private $telecommunicationsServiceCall;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\TelecommunicationsServiceCallCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\TelecommunicationsServiceCallCode")
     * @JMS\Expose
     * @JMS\SerializedName("TelecommunicationsServiceCallCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTelecommunicationsServiceCallCode", setter="setTelecommunicationsServiceCallCode")
     */
    private $telecommunicationsServiceCallCode;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\CallBaseAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\CallBaseAmount")
     * @JMS\Expose
     * @JMS\SerializedName("CallBaseAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCallBaseAmount", setter="setCallBaseAmount")
     */
    private $callBaseAmount;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\CallExtensionAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\CallExtensionAmount")
     * @JMS\Expose
     * @JMS\SerializedName("CallExtensionAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCallExtensionAmount", setter="setCallExtensionAmount")
     */
    private $callExtensionAmount;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\Price
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\Price")
     * @JMS\Expose
     * @JMS\SerializedName("Price")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPrice", setter="setPrice")
     */
    private $price;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\Country
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\Country")
     * @JMS\Expose
     * @JMS\SerializedName("Country")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCountry", setter="setCountry")
     */
    private $country;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\ExchangeRate>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\ExchangeRate>")
     * @JMS\Expose
     * @JMS\SerializedName("ExchangeRate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ExchangeRate", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getExchangeRate", setter="setExchangeRate")
     */
    private $exchangeRate;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\AllowanceCharge>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\AllowanceCharge>")
     * @JMS\Expose
     * @JMS\SerializedName("AllowanceCharge")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="AllowanceCharge", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getAllowanceCharge", setter="setAllowanceCharge")
     */
    private $allowanceCharge;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\TaxTotal>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\TaxTotal>")
     * @JMS\Expose
     * @JMS\SerializedName("TaxTotal")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="TaxTotal", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getTaxTotal", setter="setTaxTotal")
     */
    private $taxTotal;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\CallDuty>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\CallDuty>")
     * @JMS\Expose
     * @JMS\SerializedName("CallDuty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="CallDuty", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getCallDuty", setter="setCallDuty")
     */
    private $callDuty;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\TimeDuty>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\TimeDuty>")
     * @JMS\Expose
     * @JMS\SerializedName("TimeDuty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="TimeDuty", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getTimeDuty", setter="setTimeDuty")
     */
    private $timeDuty;

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
     * @return \DateTime|null
     */
    public function getCallDate(): ?\DateTime
    {
        return $this->callDate;
    }

    /**
     * @param \DateTime $callDate
     * @return self
     */
    public function setCallDate(\DateTime $callDate): self
    {
        $this->callDate = $callDate;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCallTime(): ?\DateTime
    {
        return $this->callTime;
    }

    /**
     * @param \DateTime $callTime
     * @return self
     */
    public function setCallTime(\DateTime $callTime): self
    {
        $this->callTime = $callTime;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ServiceNumberCalled|null
     */
    public function getServiceNumberCalled(): ?ServiceNumberCalled
    {
        return $this->serviceNumberCalled;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ServiceNumberCalled
     */
    public function getServiceNumberCalledWithCreate(): ServiceNumberCalled
    {
        $this->serviceNumberCalled = is_null($this->serviceNumberCalled) ? new ServiceNumberCalled() : $this->serviceNumberCalled;

        return $this->serviceNumberCalled;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ServiceNumberCalled $serviceNumberCalled
     * @return self
     */
    public function setServiceNumberCalled(ServiceNumberCalled $serviceNumberCalled): self
    {
        $this->serviceNumberCalled = $serviceNumberCalled;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\TelecommunicationsServiceCategory|null
     */
    public function getTelecommunicationsServiceCategory(): ?TelecommunicationsServiceCategory
    {
        return $this->telecommunicationsServiceCategory;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\TelecommunicationsServiceCategory
     */
    public function getTelecommunicationsServiceCategoryWithCreate(): TelecommunicationsServiceCategory
    {
        $this->telecommunicationsServiceCategory = is_null($this->telecommunicationsServiceCategory) ? new TelecommunicationsServiceCategory() : $this->telecommunicationsServiceCategory;

        return $this->telecommunicationsServiceCategory;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\TelecommunicationsServiceCategory $telecommunicationsServiceCategory
     * @return self
     */
    public function setTelecommunicationsServiceCategory(
        TelecommunicationsServiceCategory $telecommunicationsServiceCategory,
    ): self {
        $this->telecommunicationsServiceCategory = $telecommunicationsServiceCategory;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\TelecommunicationsServiceCategoryCode|null
     */
    public function getTelecommunicationsServiceCategoryCode(): ?TelecommunicationsServiceCategoryCode
    {
        return $this->telecommunicationsServiceCategoryCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\TelecommunicationsServiceCategoryCode
     */
    public function getTelecommunicationsServiceCategoryCodeWithCreate(): TelecommunicationsServiceCategoryCode
    {
        $this->telecommunicationsServiceCategoryCode = is_null($this->telecommunicationsServiceCategoryCode) ? new TelecommunicationsServiceCategoryCode() : $this->telecommunicationsServiceCategoryCode;

        return $this->telecommunicationsServiceCategoryCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\TelecommunicationsServiceCategoryCode $telecommunicationsServiceCategoryCode
     * @return self
     */
    public function setTelecommunicationsServiceCategoryCode(
        TelecommunicationsServiceCategoryCode $telecommunicationsServiceCategoryCode,
    ): self {
        $this->telecommunicationsServiceCategoryCode = $telecommunicationsServiceCategoryCode;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MovieTitle|null
     */
    public function getMovieTitle(): ?MovieTitle
    {
        return $this->movieTitle;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MovieTitle
     */
    public function getMovieTitleWithCreate(): MovieTitle
    {
        $this->movieTitle = is_null($this->movieTitle) ? new MovieTitle() : $this->movieTitle;

        return $this->movieTitle;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\MovieTitle $movieTitle
     * @return self
     */
    public function setMovieTitle(MovieTitle $movieTitle): self
    {
        $this->movieTitle = $movieTitle;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\RoamingPartnerName|null
     */
    public function getRoamingPartnerName(): ?RoamingPartnerName
    {
        return $this->roamingPartnerName;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\RoamingPartnerName
     */
    public function getRoamingPartnerNameWithCreate(): RoamingPartnerName
    {
        $this->roamingPartnerName = is_null($this->roamingPartnerName) ? new RoamingPartnerName() : $this->roamingPartnerName;

        return $this->roamingPartnerName;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\RoamingPartnerName $roamingPartnerName
     * @return self
     */
    public function setRoamingPartnerName(RoamingPartnerName $roamingPartnerName): self
    {
        $this->roamingPartnerName = $roamingPartnerName;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\PayPerView|null
     */
    public function getPayPerView(): ?PayPerView
    {
        return $this->payPerView;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\PayPerView
     */
    public function getPayPerViewWithCreate(): PayPerView
    {
        $this->payPerView = is_null($this->payPerView) ? new PayPerView() : $this->payPerView;

        return $this->payPerView;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\PayPerView $payPerView
     * @return self
     */
    public function setPayPerView(PayPerView $payPerView): self
    {
        $this->payPerView = $payPerView;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Quantity|null
     */
    public function getQuantity(): ?Quantity
    {
        return $this->quantity;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Quantity
     */
    public function getQuantityWithCreate(): Quantity
    {
        $this->quantity = is_null($this->quantity) ? new Quantity() : $this->quantity;

        return $this->quantity;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Quantity $quantity
     * @return self
     */
    public function setQuantity(Quantity $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\TelecommunicationsServiceCall|null
     */
    public function getTelecommunicationsServiceCall(): ?TelecommunicationsServiceCall
    {
        return $this->telecommunicationsServiceCall;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\TelecommunicationsServiceCall
     */
    public function getTelecommunicationsServiceCallWithCreate(): TelecommunicationsServiceCall
    {
        $this->telecommunicationsServiceCall = is_null($this->telecommunicationsServiceCall) ? new TelecommunicationsServiceCall() : $this->telecommunicationsServiceCall;

        return $this->telecommunicationsServiceCall;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\TelecommunicationsServiceCall $telecommunicationsServiceCall
     * @return self
     */
    public function setTelecommunicationsServiceCall(
        TelecommunicationsServiceCall $telecommunicationsServiceCall,
    ): self {
        $this->telecommunicationsServiceCall = $telecommunicationsServiceCall;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\TelecommunicationsServiceCallCode|null
     */
    public function getTelecommunicationsServiceCallCode(): ?TelecommunicationsServiceCallCode
    {
        return $this->telecommunicationsServiceCallCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\TelecommunicationsServiceCallCode
     */
    public function getTelecommunicationsServiceCallCodeWithCreate(): TelecommunicationsServiceCallCode
    {
        $this->telecommunicationsServiceCallCode = is_null($this->telecommunicationsServiceCallCode) ? new TelecommunicationsServiceCallCode() : $this->telecommunicationsServiceCallCode;

        return $this->telecommunicationsServiceCallCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\TelecommunicationsServiceCallCode $telecommunicationsServiceCallCode
     * @return self
     */
    public function setTelecommunicationsServiceCallCode(
        TelecommunicationsServiceCallCode $telecommunicationsServiceCallCode,
    ): self {
        $this->telecommunicationsServiceCallCode = $telecommunicationsServiceCallCode;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\CallBaseAmount|null
     */
    public function getCallBaseAmount(): ?CallBaseAmount
    {
        return $this->callBaseAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\CallBaseAmount
     */
    public function getCallBaseAmountWithCreate(): CallBaseAmount
    {
        $this->callBaseAmount = is_null($this->callBaseAmount) ? new CallBaseAmount() : $this->callBaseAmount;

        return $this->callBaseAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\CallBaseAmount $callBaseAmount
     * @return self
     */
    public function setCallBaseAmount(CallBaseAmount $callBaseAmount): self
    {
        $this->callBaseAmount = $callBaseAmount;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\CallExtensionAmount|null
     */
    public function getCallExtensionAmount(): ?CallExtensionAmount
    {
        return $this->callExtensionAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\CallExtensionAmount
     */
    public function getCallExtensionAmountWithCreate(): CallExtensionAmount
    {
        $this->callExtensionAmount = is_null($this->callExtensionAmount) ? new CallExtensionAmount() : $this->callExtensionAmount;

        return $this->callExtensionAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\CallExtensionAmount $callExtensionAmount
     * @return self
     */
    public function setCallExtensionAmount(CallExtensionAmount $callExtensionAmount): self
    {
        $this->callExtensionAmount = $callExtensionAmount;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Price|null
     */
    public function getPrice(): ?Price
    {
        return $this->price;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Price
     */
    public function getPriceWithCreate(): Price
    {
        $this->price = is_null($this->price) ? new Price() : $this->price;

        return $this->price;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\Price $price
     * @return self
     */
    public function setPrice(Price $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Country|null
     */
    public function getCountry(): ?Country
    {
        return $this->country;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Country
     */
    public function getCountryWithCreate(): Country
    {
        $this->country = is_null($this->country) ? new Country() : $this->country;

        return $this->country;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\Country $country
     * @return self
     */
    public function setCountry(Country $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\ExchangeRate>|null
     */
    public function getExchangeRate(): ?array
    {
        return $this->exchangeRate;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\ExchangeRate> $exchangeRate
     * @return self
     */
    public function setExchangeRate(array $exchangeRate): self
    {
        $this->exchangeRate = $exchangeRate;

        return $this;
    }

    /**
     * @return self
     */
    public function clearExchangeRate(): self
    {
        $this->exchangeRate = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\ExchangeRate $exchangeRate
     * @return self
     */
    public function addToExchangeRate(ExchangeRate $exchangeRate): self
    {
        $this->exchangeRate[] = $exchangeRate;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ExchangeRate
     */
    public function addToExchangeRateWithCreate(): ExchangeRate
    {
        $this->addToexchangeRate($exchangeRate = new ExchangeRate());

        return $exchangeRate;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\ExchangeRate $exchangeRate
     * @return self
     */
    public function addOnceToExchangeRate(ExchangeRate $exchangeRate): self
    {
        $this->exchangeRate[0] = $exchangeRate;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ExchangeRate
     */
    public function addOnceToExchangeRateWithCreate(): ExchangeRate
    {
        if ($this->exchangeRate === []) {
            $this->addOnceToexchangeRate(new ExchangeRate());
        }

        return $this->exchangeRate[0];
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\AllowanceCharge>|null
     */
    public function getAllowanceCharge(): ?array
    {
        return $this->allowanceCharge;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\AllowanceCharge> $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(array $allowanceCharge): self
    {
        $this->allowanceCharge = $allowanceCharge;

        return $this;
    }

    /**
     * @return self
     */
    public function clearAllowanceCharge(): self
    {
        $this->allowanceCharge = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\AllowanceCharge $allowanceCharge
     * @return self
     */
    public function addToAllowanceCharge(AllowanceCharge $allowanceCharge): self
    {
        $this->allowanceCharge[] = $allowanceCharge;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\AllowanceCharge
     */
    public function addToAllowanceChargeWithCreate(): AllowanceCharge
    {
        $this->addToallowanceCharge($allowanceCharge = new AllowanceCharge());

        return $allowanceCharge;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\AllowanceCharge $allowanceCharge
     * @return self
     */
    public function addOnceToAllowanceCharge(AllowanceCharge $allowanceCharge): self
    {
        $this->allowanceCharge[0] = $allowanceCharge;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\AllowanceCharge
     */
    public function addOnceToAllowanceChargeWithCreate(): AllowanceCharge
    {
        if ($this->allowanceCharge === []) {
            $this->addOnceToallowanceCharge(new AllowanceCharge());
        }

        return $this->allowanceCharge[0];
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\TaxTotal>|null
     */
    public function getTaxTotal(): ?array
    {
        return $this->taxTotal;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\TaxTotal> $taxTotal
     * @return self
     */
    public function setTaxTotal(array $taxTotal): self
    {
        $this->taxTotal = $taxTotal;

        return $this;
    }

    /**
     * @return self
     */
    public function clearTaxTotal(): self
    {
        $this->taxTotal = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\TaxTotal $taxTotal
     * @return self
     */
    public function addToTaxTotal(TaxTotal $taxTotal): self
    {
        $this->taxTotal[] = $taxTotal;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\TaxTotal
     */
    public function addToTaxTotalWithCreate(): TaxTotal
    {
        $this->addTotaxTotal($taxTotal = new TaxTotal());

        return $taxTotal;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\TaxTotal $taxTotal
     * @return self
     */
    public function addOnceToTaxTotal(TaxTotal $taxTotal): self
    {
        $this->taxTotal[0] = $taxTotal;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\TaxTotal
     */
    public function addOnceToTaxTotalWithCreate(): TaxTotal
    {
        if ($this->taxTotal === []) {
            $this->addOnceTotaxTotal(new TaxTotal());
        }

        return $this->taxTotal[0];
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\CallDuty>|null
     */
    public function getCallDuty(): ?array
    {
        return $this->callDuty;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\CallDuty> $callDuty
     * @return self
     */
    public function setCallDuty(array $callDuty): self
    {
        $this->callDuty = $callDuty;

        return $this;
    }

    /**
     * @return self
     */
    public function clearCallDuty(): self
    {
        $this->callDuty = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\CallDuty $callDuty
     * @return self
     */
    public function addToCallDuty(CallDuty $callDuty): self
    {
        $this->callDuty[] = $callDuty;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\CallDuty
     */
    public function addToCallDutyWithCreate(): CallDuty
    {
        $this->addTocallDuty($callDuty = new CallDuty());

        return $callDuty;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\CallDuty $callDuty
     * @return self
     */
    public function addOnceToCallDuty(CallDuty $callDuty): self
    {
        $this->callDuty[0] = $callDuty;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\CallDuty
     */
    public function addOnceToCallDutyWithCreate(): CallDuty
    {
        if ($this->callDuty === []) {
            $this->addOnceTocallDuty(new CallDuty());
        }

        return $this->callDuty[0];
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\TimeDuty>|null
     */
    public function getTimeDuty(): ?array
    {
        return $this->timeDuty;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\TimeDuty> $timeDuty
     * @return self
     */
    public function setTimeDuty(array $timeDuty): self
    {
        $this->timeDuty = $timeDuty;

        return $this;
    }

    /**
     * @return self
     */
    public function clearTimeDuty(): self
    {
        $this->timeDuty = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\TimeDuty $timeDuty
     * @return self
     */
    public function addToTimeDuty(TimeDuty $timeDuty): self
    {
        $this->timeDuty[] = $timeDuty;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\TimeDuty
     */
    public function addToTimeDutyWithCreate(): TimeDuty
    {
        $this->addTotimeDuty($timeDuty = new TimeDuty());

        return $timeDuty;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\TimeDuty $timeDuty
     * @return self
     */
    public function addOnceToTimeDuty(TimeDuty $timeDuty): self
    {
        $this->timeDuty[0] = $timeDuty;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\TimeDuty
     */
    public function addOnceToTimeDutyWithCreate(): TimeDuty
    {
        if ($this->timeDuty === []) {
            $this->addOnceTotimeDuty(new TimeDuty());
        }

        return $this->timeDuty[0];
    }
}
