<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\models\ubl\cbc\ID;
use horstoeko\invoicesuite\models\ubl\cbc\MandateTypeCode;
use horstoeko\invoicesuite\models\ubl\cbc\MaximumPaidAmount;
use horstoeko\invoicesuite\models\ubl\cbc\MaximumPaymentInstructionsNumeric;
use horstoeko\invoicesuite\models\ubl\cbc\SignatureID;

class PaymentMandateType
{
    use HandlesObjectFlags;

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
     * @var \horstoeko\invoicesuite\models\ubl\cbc\MandateTypeCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\MandateTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("MandateTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMandateTypeCode", setter="setMandateTypeCode")
     */
    private $mandateTypeCode;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\MaximumPaymentInstructionsNumeric
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\MaximumPaymentInstructionsNumeric")
     * @JMS\Expose
     * @JMS\SerializedName("MaximumPaymentInstructionsNumeric")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMaximumPaymentInstructionsNumeric", setter="setMaximumPaymentInstructionsNumeric")
     */
    private $maximumPaymentInstructionsNumeric;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\MaximumPaidAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\MaximumPaidAmount")
     * @JMS\Expose
     * @JMS\SerializedName("MaximumPaidAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMaximumPaidAmount", setter="setMaximumPaidAmount")
     */
    private $maximumPaidAmount;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\SignatureID
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\SignatureID")
     * @JMS\Expose
     * @JMS\SerializedName("SignatureID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSignatureID", setter="setSignatureID")
     */
    private $signatureID;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\PayerParty
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\PayerParty")
     * @JMS\Expose
     * @JMS\SerializedName("PayerParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPayerParty", setter="setPayerParty")
     */
    private $payerParty;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\PayerFinancialAccount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\PayerFinancialAccount")
     * @JMS\Expose
     * @JMS\SerializedName("PayerFinancialAccount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPayerFinancialAccount", setter="setPayerFinancialAccount")
     */
    private $payerFinancialAccount;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\ValidityPeriod
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\ValidityPeriod")
     * @JMS\Expose
     * @JMS\SerializedName("ValidityPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getValidityPeriod", setter="setValidityPeriod")
     */
    private $validityPeriod;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\PaymentReversalPeriod
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\PaymentReversalPeriod")
     * @JMS\Expose
     * @JMS\SerializedName("PaymentReversalPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPaymentReversalPeriod", setter="setPaymentReversalPeriod")
     */
    private $paymentReversalPeriod;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\Clause>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\Clause>")
     * @JMS\Expose
     * @JMS\SerializedName("Clause")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Clause", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getClause", setter="setClause")
     */
    private $clause;

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
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MandateTypeCode|null
     */
    public function getMandateTypeCode(): ?MandateTypeCode
    {
        return $this->mandateTypeCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MandateTypeCode
     */
    public function getMandateTypeCodeWithCreate(): MandateTypeCode
    {
        $this->mandateTypeCode = is_null($this->mandateTypeCode) ? new MandateTypeCode() : $this->mandateTypeCode;

        return $this->mandateTypeCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\MandateTypeCode $mandateTypeCode
     * @return self
     */
    public function setMandateTypeCode(MandateTypeCode $mandateTypeCode): self
    {
        $this->mandateTypeCode = $mandateTypeCode;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MaximumPaymentInstructionsNumeric|null
     */
    public function getMaximumPaymentInstructionsNumeric(): ?MaximumPaymentInstructionsNumeric
    {
        return $this->maximumPaymentInstructionsNumeric;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MaximumPaymentInstructionsNumeric
     */
    public function getMaximumPaymentInstructionsNumericWithCreate(): MaximumPaymentInstructionsNumeric
    {
        $this->maximumPaymentInstructionsNumeric = is_null($this->maximumPaymentInstructionsNumeric) ? new MaximumPaymentInstructionsNumeric() : $this->maximumPaymentInstructionsNumeric;

        return $this->maximumPaymentInstructionsNumeric;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\MaximumPaymentInstructionsNumeric $maximumPaymentInstructionsNumeric
     * @return self
     */
    public function setMaximumPaymentInstructionsNumeric(
        MaximumPaymentInstructionsNumeric $maximumPaymentInstructionsNumeric,
    ): self {
        $this->maximumPaymentInstructionsNumeric = $maximumPaymentInstructionsNumeric;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MaximumPaidAmount|null
     */
    public function getMaximumPaidAmount(): ?MaximumPaidAmount
    {
        return $this->maximumPaidAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MaximumPaidAmount
     */
    public function getMaximumPaidAmountWithCreate(): MaximumPaidAmount
    {
        $this->maximumPaidAmount = is_null($this->maximumPaidAmount) ? new MaximumPaidAmount() : $this->maximumPaidAmount;

        return $this->maximumPaidAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\MaximumPaidAmount $maximumPaidAmount
     * @return self
     */
    public function setMaximumPaidAmount(MaximumPaidAmount $maximumPaidAmount): self
    {
        $this->maximumPaidAmount = $maximumPaidAmount;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\SignatureID|null
     */
    public function getSignatureID(): ?SignatureID
    {
        return $this->signatureID;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\SignatureID
     */
    public function getSignatureIDWithCreate(): SignatureID
    {
        $this->signatureID = is_null($this->signatureID) ? new SignatureID() : $this->signatureID;

        return $this->signatureID;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\SignatureID $signatureID
     * @return self
     */
    public function setSignatureID(SignatureID $signatureID): self
    {
        $this->signatureID = $signatureID;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\PayerParty|null
     */
    public function getPayerParty(): ?PayerParty
    {
        return $this->payerParty;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\PayerParty
     */
    public function getPayerPartyWithCreate(): PayerParty
    {
        $this->payerParty = is_null($this->payerParty) ? new PayerParty() : $this->payerParty;

        return $this->payerParty;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\PayerParty $payerParty
     * @return self
     */
    public function setPayerParty(PayerParty $payerParty): self
    {
        $this->payerParty = $payerParty;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\PayerFinancialAccount|null
     */
    public function getPayerFinancialAccount(): ?PayerFinancialAccount
    {
        return $this->payerFinancialAccount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\PayerFinancialAccount
     */
    public function getPayerFinancialAccountWithCreate(): PayerFinancialAccount
    {
        $this->payerFinancialAccount = is_null($this->payerFinancialAccount) ? new PayerFinancialAccount() : $this->payerFinancialAccount;

        return $this->payerFinancialAccount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\PayerFinancialAccount $payerFinancialAccount
     * @return self
     */
    public function setPayerFinancialAccount(PayerFinancialAccount $payerFinancialAccount): self
    {
        $this->payerFinancialAccount = $payerFinancialAccount;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ValidityPeriod|null
     */
    public function getValidityPeriod(): ?ValidityPeriod
    {
        return $this->validityPeriod;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ValidityPeriod
     */
    public function getValidityPeriodWithCreate(): ValidityPeriod
    {
        $this->validityPeriod = is_null($this->validityPeriod) ? new ValidityPeriod() : $this->validityPeriod;

        return $this->validityPeriod;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\ValidityPeriod $validityPeriod
     * @return self
     */
    public function setValidityPeriod(ValidityPeriod $validityPeriod): self
    {
        $this->validityPeriod = $validityPeriod;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\PaymentReversalPeriod|null
     */
    public function getPaymentReversalPeriod(): ?PaymentReversalPeriod
    {
        return $this->paymentReversalPeriod;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\PaymentReversalPeriod
     */
    public function getPaymentReversalPeriodWithCreate(): PaymentReversalPeriod
    {
        $this->paymentReversalPeriod = is_null($this->paymentReversalPeriod) ? new PaymentReversalPeriod() : $this->paymentReversalPeriod;

        return $this->paymentReversalPeriod;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\PaymentReversalPeriod $paymentReversalPeriod
     * @return self
     */
    public function setPaymentReversalPeriod(PaymentReversalPeriod $paymentReversalPeriod): self
    {
        $this->paymentReversalPeriod = $paymentReversalPeriod;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\Clause>|null
     */
    public function getClause(): ?array
    {
        return $this->clause;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\Clause> $clause
     * @return self
     */
    public function setClause(array $clause): self
    {
        $this->clause = $clause;

        return $this;
    }

    /**
     * @return self
     */
    public function clearClause(): self
    {
        $this->clause = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\Clause $clause
     * @return self
     */
    public function addToClause(Clause $clause): self
    {
        $this->clause[] = $clause;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Clause
     */
    public function addToClauseWithCreate(): Clause
    {
        $this->addToclause($clause = new Clause());

        return $clause;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\Clause $clause
     * @return self
     */
    public function addOnceToClause(Clause $clause): self
    {
        if (!is_array($this->clause)) {
            $this->clause = [];
        }

        $this->clause[0] = $clause;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Clause
     */
    public function addOnceToClauseWithCreate(): Clause
    {
        if (!is_array($this->clause)) {
            $this->clause = [];
        }

        if ($this->clause === []) {
            $this->addOnceToclause(new Clause());
        }

        return $this->clause[0];
    }
}
