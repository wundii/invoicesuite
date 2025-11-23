<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxbasicwl\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\PaymentMeansCodeType;

class TradeSettlementPaymentMeansType
{
    use HandlesObjectFlags;

    /**
     * @var PaymentMeansCodeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\PaymentMeansCodeType")
     * @JMS\Expose
     * @JMS\SerializedName("TypeCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getTypeCode", setter="setTypeCode")
     */
    private $typeCode;

    /**
     * @var DebtorFinancialAccountType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\DebtorFinancialAccountType")
     * @JMS\Expose
     * @JMS\SerializedName("PayerPartyDebtorFinancialAccount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getPayerPartyDebtorFinancialAccount", setter="setPayerPartyDebtorFinancialAccount")
     */
    private $payerPartyDebtorFinancialAccount;

    /**
     * @var CreditorFinancialAccountType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\CreditorFinancialAccountType")
     * @JMS\Expose
     * @JMS\SerializedName("PayeePartyCreditorFinancialAccount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getPayeePartyCreditorFinancialAccount", setter="setPayeePartyCreditorFinancialAccount")
     */
    private $payeePartyCreditorFinancialAccount;

    /**
     * @return PaymentMeansCodeType|null
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
     * @param PaymentMeansCodeType|null $typeCode
     * @return self
     */
    public function setTypeCode(?PaymentMeansCodeType $typeCode = null): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTypeCode(): self
    {
        $this->typeCode = null;

        return $this;
    }

    /**
     * @return DebtorFinancialAccountType|null
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
     * @param DebtorFinancialAccountType|null $payerPartyDebtorFinancialAccount
     * @return self
     */
    public function setPayerPartyDebtorFinancialAccount(
        ?DebtorFinancialAccountType $payerPartyDebtorFinancialAccount = null,
    ): self {
        $this->payerPartyDebtorFinancialAccount = $payerPartyDebtorFinancialAccount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPayerPartyDebtorFinancialAccount(): self
    {
        $this->payerPartyDebtorFinancialAccount = null;

        return $this;
    }

    /**
     * @return CreditorFinancialAccountType|null
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
     * @param CreditorFinancialAccountType|null $payeePartyCreditorFinancialAccount
     * @return self
     */
    public function setPayeePartyCreditorFinancialAccount(
        ?CreditorFinancialAccountType $payeePartyCreditorFinancialAccount = null,
    ): self {
        $this->payeePartyCreditorFinancialAccount = $payeePartyCreditorFinancialAccount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPayeePartyCreditorFinancialAccount(): self
    {
        $this->payeePartyCreditorFinancialAccount = null;

        return $this;
    }
}
