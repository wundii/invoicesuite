<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffx\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffx\qdt\PaymentMeansCodeType;
use horstoeko\invoicesuite\documents\models\zffx\udt\TextType;
use JMS\Serializer\Annotation as JMS;

class TradeSettlementPaymentMeansType
{
    use HandlesObjectFlags;

    /**
     * @var null|PaymentMeansCodeType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\qdt\PaymentMeansCodeType")
     * @JMS\Expose
     * @JMS\SerializedName("TypeCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getTypeCode", setter="setTypeCode")
     */
    private $typeCode;

    /**
     * @var null|TextType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("Information")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getInformation", setter="setInformation")
     */
    private $information;

    /**
     * @var null|TradeSettlementFinancialCardType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\ram\TradeSettlementFinancialCardType")
     * @JMS\Expose
     * @JMS\SerializedName("ApplicableTradeSettlementFinancialCard")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getApplicableTradeSettlementFinancialCard", setter="setApplicableTradeSettlementFinancialCard")
     */
    private $applicableTradeSettlementFinancialCard;

    /**
     * @var null|DebtorFinancialAccountType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\ram\DebtorFinancialAccountType")
     * @JMS\Expose
     * @JMS\SerializedName("PayerPartyDebtorFinancialAccount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getPayerPartyDebtorFinancialAccount", setter="setPayerPartyDebtorFinancialAccount")
     */
    private $payerPartyDebtorFinancialAccount;

    /**
     * @var null|CreditorFinancialAccountType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\ram\CreditorFinancialAccountType")
     * @JMS\Expose
     * @JMS\SerializedName("PayeePartyCreditorFinancialAccount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getPayeePartyCreditorFinancialAccount", setter="setPayeePartyCreditorFinancialAccount")
     */
    private $payeePartyCreditorFinancialAccount;

    /**
     * @var null|CreditorFinancialInstitutionType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\ram\CreditorFinancialInstitutionType")
     * @JMS\Expose
     * @JMS\SerializedName("PayeeSpecifiedCreditorFinancialInstitution")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getPayeeSpecifiedCreditorFinancialInstitution", setter="setPayeeSpecifiedCreditorFinancialInstitution")
     */
    private $payeeSpecifiedCreditorFinancialInstitution;

    /**
     * @return null|PaymentMeansCodeType
     */
    public function getTypeCode(): ?PaymentMeansCodeType
    {
        return $this->typeCode;
    }

    /**
     * @return PaymentMeansCodeType
     */
    public function getTypeCodeWithCreate(): PaymentMeansCodeType
    {
        $this->typeCode = is_null($this->typeCode) ? new PaymentMeansCodeType() : $this->typeCode;

        return $this->typeCode;
    }

    /**
     * @param  null|PaymentMeansCodeType $typeCode
     * @return static
     */
    public function setTypeCode(?PaymentMeansCodeType $typeCode = null): static
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTypeCode(): static
    {
        $this->typeCode = null;

        return $this;
    }

    /**
     * @return null|TextType
     */
    public function getInformation(): ?TextType
    {
        return $this->information;
    }

    /**
     * @return TextType
     */
    public function getInformationWithCreate(): TextType
    {
        $this->information = is_null($this->information) ? new TextType() : $this->information;

        return $this->information;
    }

    /**
     * @param  null|TextType $information
     * @return static
     */
    public function setInformation(?TextType $information = null): static
    {
        $this->information = $information;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetInformation(): static
    {
        $this->information = null;

        return $this;
    }

    /**
     * @return null|TradeSettlementFinancialCardType
     */
    public function getApplicableTradeSettlementFinancialCard(): ?TradeSettlementFinancialCardType
    {
        return $this->applicableTradeSettlementFinancialCard;
    }

    /**
     * @return TradeSettlementFinancialCardType
     */
    public function getApplicableTradeSettlementFinancialCardWithCreate(): TradeSettlementFinancialCardType
    {
        $this->applicableTradeSettlementFinancialCard = is_null($this->applicableTradeSettlementFinancialCard) ? new TradeSettlementFinancialCardType() : $this->applicableTradeSettlementFinancialCard;

        return $this->applicableTradeSettlementFinancialCard;
    }

    /**
     * @param  null|TradeSettlementFinancialCardType $applicableTradeSettlementFinancialCard
     * @return static
     */
    public function setApplicableTradeSettlementFinancialCard(
        ?TradeSettlementFinancialCardType $applicableTradeSettlementFinancialCard = null,
    ): static {
        $this->applicableTradeSettlementFinancialCard = $applicableTradeSettlementFinancialCard;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetApplicableTradeSettlementFinancialCard(): static
    {
        $this->applicableTradeSettlementFinancialCard = null;

        return $this;
    }

    /**
     * @return null|DebtorFinancialAccountType
     */
    public function getPayerPartyDebtorFinancialAccount(): ?DebtorFinancialAccountType
    {
        return $this->payerPartyDebtorFinancialAccount;
    }

    /**
     * @return DebtorFinancialAccountType
     */
    public function getPayerPartyDebtorFinancialAccountWithCreate(): DebtorFinancialAccountType
    {
        $this->payerPartyDebtorFinancialAccount = is_null($this->payerPartyDebtorFinancialAccount) ? new DebtorFinancialAccountType() : $this->payerPartyDebtorFinancialAccount;

        return $this->payerPartyDebtorFinancialAccount;
    }

    /**
     * @param  null|DebtorFinancialAccountType $payerPartyDebtorFinancialAccount
     * @return static
     */
    public function setPayerPartyDebtorFinancialAccount(
        ?DebtorFinancialAccountType $payerPartyDebtorFinancialAccount = null,
    ): static {
        $this->payerPartyDebtorFinancialAccount = $payerPartyDebtorFinancialAccount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPayerPartyDebtorFinancialAccount(): static
    {
        $this->payerPartyDebtorFinancialAccount = null;

        return $this;
    }

    /**
     * @return null|CreditorFinancialAccountType
     */
    public function getPayeePartyCreditorFinancialAccount(): ?CreditorFinancialAccountType
    {
        return $this->payeePartyCreditorFinancialAccount;
    }

    /**
     * @return CreditorFinancialAccountType
     */
    public function getPayeePartyCreditorFinancialAccountWithCreate(): CreditorFinancialAccountType
    {
        $this->payeePartyCreditorFinancialAccount = is_null($this->payeePartyCreditorFinancialAccount) ? new CreditorFinancialAccountType() : $this->payeePartyCreditorFinancialAccount;

        return $this->payeePartyCreditorFinancialAccount;
    }

    /**
     * @param  null|CreditorFinancialAccountType $payeePartyCreditorFinancialAccount
     * @return static
     */
    public function setPayeePartyCreditorFinancialAccount(
        ?CreditorFinancialAccountType $payeePartyCreditorFinancialAccount = null,
    ): static {
        $this->payeePartyCreditorFinancialAccount = $payeePartyCreditorFinancialAccount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPayeePartyCreditorFinancialAccount(): static
    {
        $this->payeePartyCreditorFinancialAccount = null;

        return $this;
    }

    /**
     * @return null|CreditorFinancialInstitutionType
     */
    public function getPayeeSpecifiedCreditorFinancialInstitution(): ?CreditorFinancialInstitutionType
    {
        return $this->payeeSpecifiedCreditorFinancialInstitution;
    }

    /**
     * @return CreditorFinancialInstitutionType
     */
    public function getPayeeSpecifiedCreditorFinancialInstitutionWithCreate(): CreditorFinancialInstitutionType
    {
        $this->payeeSpecifiedCreditorFinancialInstitution = is_null($this->payeeSpecifiedCreditorFinancialInstitution) ? new CreditorFinancialInstitutionType() : $this->payeeSpecifiedCreditorFinancialInstitution;

        return $this->payeeSpecifiedCreditorFinancialInstitution;
    }

    /**
     * @param  null|CreditorFinancialInstitutionType $payeeSpecifiedCreditorFinancialInstitution
     * @return static
     */
    public function setPayeeSpecifiedCreditorFinancialInstitution(
        ?CreditorFinancialInstitutionType $payeeSpecifiedCreditorFinancialInstitution = null,
    ): static {
        $this->payeeSpecifiedCreditorFinancialInstitution = $payeeSpecifiedCreditorFinancialInstitution;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPayeeSpecifiedCreditorFinancialInstitution(): static
    {
        $this->payeeSpecifiedCreditorFinancialInstitution = null;

        return $this;
    }
}
