<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CallBaseAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CallExtensionAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MovieTitle;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PayPerView;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Quantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\RoamingPartnerName;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ServiceNumberCalled;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TelecommunicationsServiceCall;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TelecommunicationsServiceCallCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TelecommunicationsServiceCategory;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TelecommunicationsServiceCategoryCode;

class TelecommunicationsServiceType
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
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("CallDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCallDate", setter="setCallDate")
     */
    private $callDate;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("CallTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCallTime", setter="setCallTime")
     */
    private $callTime;

    /**
     * @var ServiceNumberCalled|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ServiceNumberCalled")
     * @JMS\Expose
     * @JMS\SerializedName("ServiceNumberCalled")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getServiceNumberCalled", setter="setServiceNumberCalled")
     */
    private $serviceNumberCalled;

    /**
     * @var TelecommunicationsServiceCategory|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TelecommunicationsServiceCategory")
     * @JMS\Expose
     * @JMS\SerializedName("TelecommunicationsServiceCategory")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTelecommunicationsServiceCategory", setter="setTelecommunicationsServiceCategory")
     */
    private $telecommunicationsServiceCategory;

    /**
     * @var TelecommunicationsServiceCategoryCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TelecommunicationsServiceCategoryCode")
     * @JMS\Expose
     * @JMS\SerializedName("TelecommunicationsServiceCategoryCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTelecommunicationsServiceCategoryCode", setter="setTelecommunicationsServiceCategoryCode")
     */
    private $telecommunicationsServiceCategoryCode;

    /**
     * @var MovieTitle|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MovieTitle")
     * @JMS\Expose
     * @JMS\SerializedName("MovieTitle")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMovieTitle", setter="setMovieTitle")
     */
    private $movieTitle;

    /**
     * @var RoamingPartnerName|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\RoamingPartnerName")
     * @JMS\Expose
     * @JMS\SerializedName("RoamingPartnerName")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRoamingPartnerName", setter="setRoamingPartnerName")
     */
    private $roamingPartnerName;

    /**
     * @var PayPerView|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PayPerView")
     * @JMS\Expose
     * @JMS\SerializedName("PayPerView")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPayPerView", setter="setPayPerView")
     */
    private $payPerView;

    /**
     * @var Quantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Quantity")
     * @JMS\Expose
     * @JMS\SerializedName("Quantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getQuantity", setter="setQuantity")
     */
    private $quantity;

    /**
     * @var TelecommunicationsServiceCall|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TelecommunicationsServiceCall")
     * @JMS\Expose
     * @JMS\SerializedName("TelecommunicationsServiceCall")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTelecommunicationsServiceCall", setter="setTelecommunicationsServiceCall")
     */
    private $telecommunicationsServiceCall;

    /**
     * @var TelecommunicationsServiceCallCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TelecommunicationsServiceCallCode")
     * @JMS\Expose
     * @JMS\SerializedName("TelecommunicationsServiceCallCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTelecommunicationsServiceCallCode", setter="setTelecommunicationsServiceCallCode")
     */
    private $telecommunicationsServiceCallCode;

    /**
     * @var CallBaseAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CallBaseAmount")
     * @JMS\Expose
     * @JMS\SerializedName("CallBaseAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCallBaseAmount", setter="setCallBaseAmount")
     */
    private $callBaseAmount;

    /**
     * @var CallExtensionAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CallExtensionAmount")
     * @JMS\Expose
     * @JMS\SerializedName("CallExtensionAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCallExtensionAmount", setter="setCallExtensionAmount")
     */
    private $callExtensionAmount;

    /**
     * @var Price|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Price")
     * @JMS\Expose
     * @JMS\SerializedName("Price")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPrice", setter="setPrice")
     */
    private $price;

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
     * @var array<ExchangeRate>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ExchangeRate>")
     * @JMS\Expose
     * @JMS\SerializedName("ExchangeRate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ExchangeRate", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getExchangeRate", setter="setExchangeRate")
     */
    private $exchangeRate;

    /**
     * @var array<AllowanceCharge>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\AllowanceCharge>")
     * @JMS\Expose
     * @JMS\SerializedName("AllowanceCharge")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="AllowanceCharge", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getAllowanceCharge", setter="setAllowanceCharge")
     */
    private $allowanceCharge;

    /**
     * @var array<TaxTotal>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\TaxTotal>")
     * @JMS\Expose
     * @JMS\SerializedName("TaxTotal")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="TaxTotal", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getTaxTotal", setter="setTaxTotal")
     */
    private $taxTotal;

    /**
     * @var array<CallDuty>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\CallDuty>")
     * @JMS\Expose
     * @JMS\SerializedName("CallDuty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="CallDuty", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getCallDuty", setter="setCallDuty")
     */
    private $callDuty;

    /**
     * @var array<TimeDuty>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\TimeDuty>")
     * @JMS\Expose
     * @JMS\SerializedName("TimeDuty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="TimeDuty", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getTimeDuty", setter="setTimeDuty")
     */
    private $timeDuty;

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
     * @return DateTimeInterface|null
     */
    public function getCallDate(): ?DateTimeInterface
    {
        return $this->callDate;
    }

    /**
     * @param DateTimeInterface|null $callDate
     * @return self
     */
    public function setCallDate(?DateTimeInterface $callDate = null): self
    {
        $this->callDate = $callDate;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCallDate(): self
    {
        $this->callDate = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getCallTime(): ?DateTimeInterface
    {
        return $this->callTime;
    }

    /**
     * @param DateTimeInterface|null $callTime
     * @return self
     */
    public function setCallTime(?DateTimeInterface $callTime = null): self
    {
        $this->callTime = $callTime;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCallTime(): self
    {
        $this->callTime = null;

        return $this;
    }

    /**
     * @return ServiceNumberCalled|null
     */
    public function getServiceNumberCalled(): ?ServiceNumberCalled
    {
        return $this->serviceNumberCalled;
    }

    /**
     * @return ServiceNumberCalled
     */
    public function getServiceNumberCalledWithCreate(): ServiceNumberCalled
    {
        $this->serviceNumberCalled = is_null($this->serviceNumberCalled) ? new ServiceNumberCalled() : $this->serviceNumberCalled;

        return $this->serviceNumberCalled;
    }

    /**
     * @param ServiceNumberCalled|null $serviceNumberCalled
     * @return self
     */
    public function setServiceNumberCalled(?ServiceNumberCalled $serviceNumberCalled = null): self
    {
        $this->serviceNumberCalled = $serviceNumberCalled;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetServiceNumberCalled(): self
    {
        $this->serviceNumberCalled = null;

        return $this;
    }

    /**
     * @return TelecommunicationsServiceCategory|null
     */
    public function getTelecommunicationsServiceCategory(): ?TelecommunicationsServiceCategory
    {
        return $this->telecommunicationsServiceCategory;
    }

    /**
     * @return TelecommunicationsServiceCategory
     */
    public function getTelecommunicationsServiceCategoryWithCreate(): TelecommunicationsServiceCategory
    {
        $this->telecommunicationsServiceCategory = is_null($this->telecommunicationsServiceCategory) ? new TelecommunicationsServiceCategory() : $this->telecommunicationsServiceCategory;

        return $this->telecommunicationsServiceCategory;
    }

    /**
     * @param TelecommunicationsServiceCategory|null $telecommunicationsServiceCategory
     * @return self
     */
    public function setTelecommunicationsServiceCategory(
        ?TelecommunicationsServiceCategory $telecommunicationsServiceCategory = null,
    ): self {
        $this->telecommunicationsServiceCategory = $telecommunicationsServiceCategory;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTelecommunicationsServiceCategory(): self
    {
        $this->telecommunicationsServiceCategory = null;

        return $this;
    }

    /**
     * @return TelecommunicationsServiceCategoryCode|null
     */
    public function getTelecommunicationsServiceCategoryCode(): ?TelecommunicationsServiceCategoryCode
    {
        return $this->telecommunicationsServiceCategoryCode;
    }

    /**
     * @return TelecommunicationsServiceCategoryCode
     */
    public function getTelecommunicationsServiceCategoryCodeWithCreate(): TelecommunicationsServiceCategoryCode
    {
        $this->telecommunicationsServiceCategoryCode = is_null($this->telecommunicationsServiceCategoryCode) ? new TelecommunicationsServiceCategoryCode() : $this->telecommunicationsServiceCategoryCode;

        return $this->telecommunicationsServiceCategoryCode;
    }

    /**
     * @param TelecommunicationsServiceCategoryCode|null $telecommunicationsServiceCategoryCode
     * @return self
     */
    public function setTelecommunicationsServiceCategoryCode(
        ?TelecommunicationsServiceCategoryCode $telecommunicationsServiceCategoryCode = null,
    ): self {
        $this->telecommunicationsServiceCategoryCode = $telecommunicationsServiceCategoryCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTelecommunicationsServiceCategoryCode(): self
    {
        $this->telecommunicationsServiceCategoryCode = null;

        return $this;
    }

    /**
     * @return MovieTitle|null
     */
    public function getMovieTitle(): ?MovieTitle
    {
        return $this->movieTitle;
    }

    /**
     * @return MovieTitle
     */
    public function getMovieTitleWithCreate(): MovieTitle
    {
        $this->movieTitle = is_null($this->movieTitle) ? new MovieTitle() : $this->movieTitle;

        return $this->movieTitle;
    }

    /**
     * @param MovieTitle|null $movieTitle
     * @return self
     */
    public function setMovieTitle(?MovieTitle $movieTitle = null): self
    {
        $this->movieTitle = $movieTitle;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMovieTitle(): self
    {
        $this->movieTitle = null;

        return $this;
    }

    /**
     * @return RoamingPartnerName|null
     */
    public function getRoamingPartnerName(): ?RoamingPartnerName
    {
        return $this->roamingPartnerName;
    }

    /**
     * @return RoamingPartnerName
     */
    public function getRoamingPartnerNameWithCreate(): RoamingPartnerName
    {
        $this->roamingPartnerName = is_null($this->roamingPartnerName) ? new RoamingPartnerName() : $this->roamingPartnerName;

        return $this->roamingPartnerName;
    }

    /**
     * @param RoamingPartnerName|null $roamingPartnerName
     * @return self
     */
    public function setRoamingPartnerName(?RoamingPartnerName $roamingPartnerName = null): self
    {
        $this->roamingPartnerName = $roamingPartnerName;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetRoamingPartnerName(): self
    {
        $this->roamingPartnerName = null;

        return $this;
    }

    /**
     * @return PayPerView|null
     */
    public function getPayPerView(): ?PayPerView
    {
        return $this->payPerView;
    }

    /**
     * @return PayPerView
     */
    public function getPayPerViewWithCreate(): PayPerView
    {
        $this->payPerView = is_null($this->payPerView) ? new PayPerView() : $this->payPerView;

        return $this->payPerView;
    }

    /**
     * @param PayPerView|null $payPerView
     * @return self
     */
    public function setPayPerView(?PayPerView $payPerView = null): self
    {
        $this->payPerView = $payPerView;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPayPerView(): self
    {
        $this->payPerView = null;

        return $this;
    }

    /**
     * @return Quantity|null
     */
    public function getQuantity(): ?Quantity
    {
        return $this->quantity;
    }

    /**
     * @return Quantity
     */
    public function getQuantityWithCreate(): Quantity
    {
        $this->quantity = is_null($this->quantity) ? new Quantity() : $this->quantity;

        return $this->quantity;
    }

    /**
     * @param Quantity|null $quantity
     * @return self
     */
    public function setQuantity(?Quantity $quantity = null): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetQuantity(): self
    {
        $this->quantity = null;

        return $this;
    }

    /**
     * @return TelecommunicationsServiceCall|null
     */
    public function getTelecommunicationsServiceCall(): ?TelecommunicationsServiceCall
    {
        return $this->telecommunicationsServiceCall;
    }

    /**
     * @return TelecommunicationsServiceCall
     */
    public function getTelecommunicationsServiceCallWithCreate(): TelecommunicationsServiceCall
    {
        $this->telecommunicationsServiceCall = is_null($this->telecommunicationsServiceCall) ? new TelecommunicationsServiceCall() : $this->telecommunicationsServiceCall;

        return $this->telecommunicationsServiceCall;
    }

    /**
     * @param TelecommunicationsServiceCall|null $telecommunicationsServiceCall
     * @return self
     */
    public function setTelecommunicationsServiceCall(
        ?TelecommunicationsServiceCall $telecommunicationsServiceCall = null,
    ): self {
        $this->telecommunicationsServiceCall = $telecommunicationsServiceCall;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTelecommunicationsServiceCall(): self
    {
        $this->telecommunicationsServiceCall = null;

        return $this;
    }

    /**
     * @return TelecommunicationsServiceCallCode|null
     */
    public function getTelecommunicationsServiceCallCode(): ?TelecommunicationsServiceCallCode
    {
        return $this->telecommunicationsServiceCallCode;
    }

    /**
     * @return TelecommunicationsServiceCallCode
     */
    public function getTelecommunicationsServiceCallCodeWithCreate(): TelecommunicationsServiceCallCode
    {
        $this->telecommunicationsServiceCallCode = is_null($this->telecommunicationsServiceCallCode) ? new TelecommunicationsServiceCallCode() : $this->telecommunicationsServiceCallCode;

        return $this->telecommunicationsServiceCallCode;
    }

    /**
     * @param TelecommunicationsServiceCallCode|null $telecommunicationsServiceCallCode
     * @return self
     */
    public function setTelecommunicationsServiceCallCode(
        ?TelecommunicationsServiceCallCode $telecommunicationsServiceCallCode = null,
    ): self {
        $this->telecommunicationsServiceCallCode = $telecommunicationsServiceCallCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTelecommunicationsServiceCallCode(): self
    {
        $this->telecommunicationsServiceCallCode = null;

        return $this;
    }

    /**
     * @return CallBaseAmount|null
     */
    public function getCallBaseAmount(): ?CallBaseAmount
    {
        return $this->callBaseAmount;
    }

    /**
     * @return CallBaseAmount
     */
    public function getCallBaseAmountWithCreate(): CallBaseAmount
    {
        $this->callBaseAmount = is_null($this->callBaseAmount) ? new CallBaseAmount() : $this->callBaseAmount;

        return $this->callBaseAmount;
    }

    /**
     * @param CallBaseAmount|null $callBaseAmount
     * @return self
     */
    public function setCallBaseAmount(?CallBaseAmount $callBaseAmount = null): self
    {
        $this->callBaseAmount = $callBaseAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCallBaseAmount(): self
    {
        $this->callBaseAmount = null;

        return $this;
    }

    /**
     * @return CallExtensionAmount|null
     */
    public function getCallExtensionAmount(): ?CallExtensionAmount
    {
        return $this->callExtensionAmount;
    }

    /**
     * @return CallExtensionAmount
     */
    public function getCallExtensionAmountWithCreate(): CallExtensionAmount
    {
        $this->callExtensionAmount = is_null($this->callExtensionAmount) ? new CallExtensionAmount() : $this->callExtensionAmount;

        return $this->callExtensionAmount;
    }

    /**
     * @param CallExtensionAmount|null $callExtensionAmount
     * @return self
     */
    public function setCallExtensionAmount(?CallExtensionAmount $callExtensionAmount = null): self
    {
        $this->callExtensionAmount = $callExtensionAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCallExtensionAmount(): self
    {
        $this->callExtensionAmount = null;

        return $this;
    }

    /**
     * @return Price|null
     */
    public function getPrice(): ?Price
    {
        return $this->price;
    }

    /**
     * @return Price
     */
    public function getPriceWithCreate(): Price
    {
        $this->price = is_null($this->price) ? new Price() : $this->price;

        return $this->price;
    }

    /**
     * @param Price|null $price
     * @return self
     */
    public function setPrice(?Price $price = null): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPrice(): self
    {
        $this->price = null;

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

    /**
     * @return array<ExchangeRate>|null
     */
    public function getExchangeRate(): ?array
    {
        return $this->exchangeRate;
    }

    /**
     * @param array<ExchangeRate>|null $exchangeRate
     * @return self
     */
    public function setExchangeRate(?array $exchangeRate = null): self
    {
        $this->exchangeRate = $exchangeRate;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetExchangeRate(): self
    {
        $this->exchangeRate = null;

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
     * @return ExchangeRate|null
     */
    public function firstExchangeRate(): ?ExchangeRate
    {
        $exchangeRate = $this->exchangeRate ?? [];
        $exchangeRate = reset($exchangeRate);

        if ($exchangeRate === false) {
            return null;
        }

        return $exchangeRate;
    }

    /**
     * @return ExchangeRate|null
     */
    public function lastExchangeRate(): ?ExchangeRate
    {
        $exchangeRate = $this->exchangeRate ?? [];
        $exchangeRate = end($exchangeRate);

        if ($exchangeRate === false) {
            return null;
        }

        return $exchangeRate;
    }

    /**
     * @param ExchangeRate $exchangeRate
     * @return self
     */
    public function addToExchangeRate(ExchangeRate $exchangeRate): self
    {
        $this->exchangeRate[] = $exchangeRate;

        return $this;
    }

    /**
     * @return ExchangeRate
     */
    public function addToExchangeRateWithCreate(): ExchangeRate
    {
        $this->addToexchangeRate($exchangeRate = new ExchangeRate());

        return $exchangeRate;
    }

    /**
     * @param ExchangeRate $exchangeRate
     * @return self
     */
    public function addOnceToExchangeRate(ExchangeRate $exchangeRate): self
    {
        if (!is_array($this->exchangeRate)) {
            $this->exchangeRate = [];
        }

        $this->exchangeRate[0] = $exchangeRate;

        return $this;
    }

    /**
     * @return ExchangeRate
     */
    public function addOnceToExchangeRateWithCreate(): ExchangeRate
    {
        if (!is_array($this->exchangeRate)) {
            $this->exchangeRate = [];
        }

        if ($this->exchangeRate === []) {
            $this->addOnceToexchangeRate(new ExchangeRate());
        }

        return $this->exchangeRate[0];
    }

    /**
     * @return array<AllowanceCharge>|null
     */
    public function getAllowanceCharge(): ?array
    {
        return $this->allowanceCharge;
    }

    /**
     * @param array<AllowanceCharge>|null $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(?array $allowanceCharge = null): self
    {
        $this->allowanceCharge = $allowanceCharge;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAllowanceCharge(): self
    {
        $this->allowanceCharge = null;

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
     * @return AllowanceCharge|null
     */
    public function firstAllowanceCharge(): ?AllowanceCharge
    {
        $allowanceCharge = $this->allowanceCharge ?? [];
        $allowanceCharge = reset($allowanceCharge);

        if ($allowanceCharge === false) {
            return null;
        }

        return $allowanceCharge;
    }

    /**
     * @return AllowanceCharge|null
     */
    public function lastAllowanceCharge(): ?AllowanceCharge
    {
        $allowanceCharge = $this->allowanceCharge ?? [];
        $allowanceCharge = end($allowanceCharge);

        if ($allowanceCharge === false) {
            return null;
        }

        return $allowanceCharge;
    }

    /**
     * @param AllowanceCharge $allowanceCharge
     * @return self
     */
    public function addToAllowanceCharge(AllowanceCharge $allowanceCharge): self
    {
        $this->allowanceCharge[] = $allowanceCharge;

        return $this;
    }

    /**
     * @return AllowanceCharge
     */
    public function addToAllowanceChargeWithCreate(): AllowanceCharge
    {
        $this->addToallowanceCharge($allowanceCharge = new AllowanceCharge());

        return $allowanceCharge;
    }

    /**
     * @param AllowanceCharge $allowanceCharge
     * @return self
     */
    public function addOnceToAllowanceCharge(AllowanceCharge $allowanceCharge): self
    {
        if (!is_array($this->allowanceCharge)) {
            $this->allowanceCharge = [];
        }

        $this->allowanceCharge[0] = $allowanceCharge;

        return $this;
    }

    /**
     * @return AllowanceCharge
     */
    public function addOnceToAllowanceChargeWithCreate(): AllowanceCharge
    {
        if (!is_array($this->allowanceCharge)) {
            $this->allowanceCharge = [];
        }

        if ($this->allowanceCharge === []) {
            $this->addOnceToallowanceCharge(new AllowanceCharge());
        }

        return $this->allowanceCharge[0];
    }

    /**
     * @return array<TaxTotal>|null
     */
    public function getTaxTotal(): ?array
    {
        return $this->taxTotal;
    }

    /**
     * @param array<TaxTotal>|null $taxTotal
     * @return self
     */
    public function setTaxTotal(?array $taxTotal = null): self
    {
        $this->taxTotal = $taxTotal;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTaxTotal(): self
    {
        $this->taxTotal = null;

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
     * @return TaxTotal|null
     */
    public function firstTaxTotal(): ?TaxTotal
    {
        $taxTotal = $this->taxTotal ?? [];
        $taxTotal = reset($taxTotal);

        if ($taxTotal === false) {
            return null;
        }

        return $taxTotal;
    }

    /**
     * @return TaxTotal|null
     */
    public function lastTaxTotal(): ?TaxTotal
    {
        $taxTotal = $this->taxTotal ?? [];
        $taxTotal = end($taxTotal);

        if ($taxTotal === false) {
            return null;
        }

        return $taxTotal;
    }

    /**
     * @param TaxTotal $taxTotal
     * @return self
     */
    public function addToTaxTotal(TaxTotal $taxTotal): self
    {
        $this->taxTotal[] = $taxTotal;

        return $this;
    }

    /**
     * @return TaxTotal
     */
    public function addToTaxTotalWithCreate(): TaxTotal
    {
        $this->addTotaxTotal($taxTotal = new TaxTotal());

        return $taxTotal;
    }

    /**
     * @param TaxTotal $taxTotal
     * @return self
     */
    public function addOnceToTaxTotal(TaxTotal $taxTotal): self
    {
        if (!is_array($this->taxTotal)) {
            $this->taxTotal = [];
        }

        $this->taxTotal[0] = $taxTotal;

        return $this;
    }

    /**
     * @return TaxTotal
     */
    public function addOnceToTaxTotalWithCreate(): TaxTotal
    {
        if (!is_array($this->taxTotal)) {
            $this->taxTotal = [];
        }

        if ($this->taxTotal === []) {
            $this->addOnceTotaxTotal(new TaxTotal());
        }

        return $this->taxTotal[0];
    }

    /**
     * @return array<CallDuty>|null
     */
    public function getCallDuty(): ?array
    {
        return $this->callDuty;
    }

    /**
     * @param array<CallDuty>|null $callDuty
     * @return self
     */
    public function setCallDuty(?array $callDuty = null): self
    {
        $this->callDuty = $callDuty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCallDuty(): self
    {
        $this->callDuty = null;

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
     * @return CallDuty|null
     */
    public function firstCallDuty(): ?CallDuty
    {
        $callDuty = $this->callDuty ?? [];
        $callDuty = reset($callDuty);

        if ($callDuty === false) {
            return null;
        }

        return $callDuty;
    }

    /**
     * @return CallDuty|null
     */
    public function lastCallDuty(): ?CallDuty
    {
        $callDuty = $this->callDuty ?? [];
        $callDuty = end($callDuty);

        if ($callDuty === false) {
            return null;
        }

        return $callDuty;
    }

    /**
     * @param CallDuty $callDuty
     * @return self
     */
    public function addToCallDuty(CallDuty $callDuty): self
    {
        $this->callDuty[] = $callDuty;

        return $this;
    }

    /**
     * @return CallDuty
     */
    public function addToCallDutyWithCreate(): CallDuty
    {
        $this->addTocallDuty($callDuty = new CallDuty());

        return $callDuty;
    }

    /**
     * @param CallDuty $callDuty
     * @return self
     */
    public function addOnceToCallDuty(CallDuty $callDuty): self
    {
        if (!is_array($this->callDuty)) {
            $this->callDuty = [];
        }

        $this->callDuty[0] = $callDuty;

        return $this;
    }

    /**
     * @return CallDuty
     */
    public function addOnceToCallDutyWithCreate(): CallDuty
    {
        if (!is_array($this->callDuty)) {
            $this->callDuty = [];
        }

        if ($this->callDuty === []) {
            $this->addOnceTocallDuty(new CallDuty());
        }

        return $this->callDuty[0];
    }

    /**
     * @return array<TimeDuty>|null
     */
    public function getTimeDuty(): ?array
    {
        return $this->timeDuty;
    }

    /**
     * @param array<TimeDuty>|null $timeDuty
     * @return self
     */
    public function setTimeDuty(?array $timeDuty = null): self
    {
        $this->timeDuty = $timeDuty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTimeDuty(): self
    {
        $this->timeDuty = null;

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
     * @return TimeDuty|null
     */
    public function firstTimeDuty(): ?TimeDuty
    {
        $timeDuty = $this->timeDuty ?? [];
        $timeDuty = reset($timeDuty);

        if ($timeDuty === false) {
            return null;
        }

        return $timeDuty;
    }

    /**
     * @return TimeDuty|null
     */
    public function lastTimeDuty(): ?TimeDuty
    {
        $timeDuty = $this->timeDuty ?? [];
        $timeDuty = end($timeDuty);

        if ($timeDuty === false) {
            return null;
        }

        return $timeDuty;
    }

    /**
     * @param TimeDuty $timeDuty
     * @return self
     */
    public function addToTimeDuty(TimeDuty $timeDuty): self
    {
        $this->timeDuty[] = $timeDuty;

        return $this;
    }

    /**
     * @return TimeDuty
     */
    public function addToTimeDutyWithCreate(): TimeDuty
    {
        $this->addTotimeDuty($timeDuty = new TimeDuty());

        return $timeDuty;
    }

    /**
     * @param TimeDuty $timeDuty
     * @return self
     */
    public function addOnceToTimeDuty(TimeDuty $timeDuty): self
    {
        if (!is_array($this->timeDuty)) {
            $this->timeDuty = [];
        }

        $this->timeDuty[0] = $timeDuty;

        return $this;
    }

    /**
     * @return TimeDuty
     */
    public function addOnceToTimeDutyWithCreate(): TimeDuty
    {
        if (!is_array($this->timeDuty)) {
            $this->timeDuty = [];
        }

        if ($this->timeDuty === []) {
            $this->addOnceTotimeDuty(new TimeDuty());
        }

        return $this->timeDuty[0];
    }
}
