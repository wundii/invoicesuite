<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\ubl\cbc\ID;
use horstoeko\invoicesuite\models\ubl\cbc\InstructionID;
use horstoeko\invoicesuite\models\ubl\cbc\InstructionNote;
use horstoeko\invoicesuite\models\ubl\cbc\PaymentChannelCode;
use horstoeko\invoicesuite\models\ubl\cbc\PaymentID;
use horstoeko\invoicesuite\models\ubl\cbc\PaymentMeansCode;

class PaymentMeansType
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
     * @var \horstoeko\invoicesuite\models\ubl\cbc\PaymentMeansCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\PaymentMeansCode")
     * @JMS\Expose
     * @JMS\SerializedName("PaymentMeansCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPaymentMeansCode", setter="setPaymentMeansCode")
     */
    private $paymentMeansCode;

    /**
     * @var \DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("PaymentDueDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPaymentDueDate", setter="setPaymentDueDate")
     */
    private $paymentDueDate;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\PaymentChannelCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\PaymentChannelCode")
     * @JMS\Expose
     * @JMS\SerializedName("PaymentChannelCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPaymentChannelCode", setter="setPaymentChannelCode")
     */
    private $paymentChannelCode;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\InstructionID
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\InstructionID")
     * @JMS\Expose
     * @JMS\SerializedName("InstructionID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getInstructionID", setter="setInstructionID")
     */
    private $instructionID;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\InstructionNote>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\InstructionNote>")
     * @JMS\Expose
     * @JMS\SerializedName("InstructionNote")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="InstructionNote", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getInstructionNote", setter="setInstructionNote")
     */
    private $instructionNote;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\PaymentID>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\PaymentID>")
     * @JMS\Expose
     * @JMS\SerializedName("PaymentID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="PaymentID", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getPaymentID", setter="setPaymentID")
     */
    private $paymentID;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\CardAccount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\CardAccount")
     * @JMS\Expose
     * @JMS\SerializedName("CardAccount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCardAccount", setter="setCardAccount")
     */
    private $cardAccount;

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
     * @var \horstoeko\invoicesuite\models\ubl\cac\PayeeFinancialAccount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\PayeeFinancialAccount")
     * @JMS\Expose
     * @JMS\SerializedName("PayeeFinancialAccount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPayeeFinancialAccount", setter="setPayeeFinancialAccount")
     */
    private $payeeFinancialAccount;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\CreditAccount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\CreditAccount")
     * @JMS\Expose
     * @JMS\SerializedName("CreditAccount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCreditAccount", setter="setCreditAccount")
     */
    private $creditAccount;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\PaymentMandate
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\PaymentMandate")
     * @JMS\Expose
     * @JMS\SerializedName("PaymentMandate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPaymentMandate", setter="setPaymentMandate")
     */
    private $paymentMandate;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\TradeFinancing
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\TradeFinancing")
     * @JMS\Expose
     * @JMS\SerializedName("TradeFinancing")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTradeFinancing", setter="setTradeFinancing")
     */
    private $tradeFinancing;

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
     * @return \horstoeko\invoicesuite\models\ubl\cbc\PaymentMeansCode|null
     */
    public function getPaymentMeansCode(): ?PaymentMeansCode
    {
        return $this->paymentMeansCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\PaymentMeansCode
     */
    public function getPaymentMeansCodeWithCreate(): PaymentMeansCode
    {
        $this->paymentMeansCode = is_null($this->paymentMeansCode) ? new PaymentMeansCode() : $this->paymentMeansCode;

        return $this->paymentMeansCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\PaymentMeansCode $paymentMeansCode
     * @return self
     */
    public function setPaymentMeansCode(PaymentMeansCode $paymentMeansCode): self
    {
        $this->paymentMeansCode = $paymentMeansCode;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getPaymentDueDate(): ?\DateTime
    {
        return $this->paymentDueDate;
    }

    /**
     * @param \DateTime $paymentDueDate
     * @return self
     */
    public function setPaymentDueDate(\DateTime $paymentDueDate): self
    {
        $this->paymentDueDate = $paymentDueDate;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\PaymentChannelCode|null
     */
    public function getPaymentChannelCode(): ?PaymentChannelCode
    {
        return $this->paymentChannelCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\PaymentChannelCode
     */
    public function getPaymentChannelCodeWithCreate(): PaymentChannelCode
    {
        $this->paymentChannelCode = is_null($this->paymentChannelCode) ? new PaymentChannelCode() : $this->paymentChannelCode;

        return $this->paymentChannelCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\PaymentChannelCode $paymentChannelCode
     * @return self
     */
    public function setPaymentChannelCode(PaymentChannelCode $paymentChannelCode): self
    {
        $this->paymentChannelCode = $paymentChannelCode;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\InstructionID|null
     */
    public function getInstructionID(): ?InstructionID
    {
        return $this->instructionID;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\InstructionID
     */
    public function getInstructionIDWithCreate(): InstructionID
    {
        $this->instructionID = is_null($this->instructionID) ? new InstructionID() : $this->instructionID;

        return $this->instructionID;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\InstructionID $instructionID
     * @return self
     */
    public function setInstructionID(InstructionID $instructionID): self
    {
        $this->instructionID = $instructionID;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\InstructionNote>|null
     */
    public function getInstructionNote(): ?array
    {
        return $this->instructionNote;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\InstructionNote> $instructionNote
     * @return self
     */
    public function setInstructionNote(array $instructionNote): self
    {
        $this->instructionNote = $instructionNote;

        return $this;
    }

    /**
     * @return self
     */
    public function clearInstructionNote(): self
    {
        $this->instructionNote = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\InstructionNote $instructionNote
     * @return self
     */
    public function addToInstructionNote(InstructionNote $instructionNote): self
    {
        $this->instructionNote[] = $instructionNote;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\InstructionNote
     */
    public function addToInstructionNoteWithCreate(): InstructionNote
    {
        $this->addToinstructionNote($instructionNote = new InstructionNote());

        return $instructionNote;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\InstructionNote $instructionNote
     * @return self
     */
    public function addOnceToInstructionNote(InstructionNote $instructionNote): self
    {
        $this->instructionNote[0] = $instructionNote;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\InstructionNote
     */
    public function addOnceToInstructionNoteWithCreate(): InstructionNote
    {
        if ($this->instructionNote === []) {
            $this->addOnceToinstructionNote(new InstructionNote());
        }

        return $this->instructionNote[0];
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\PaymentID>|null
     */
    public function getPaymentID(): ?array
    {
        return $this->paymentID;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\PaymentID> $paymentID
     * @return self
     */
    public function setPaymentID(array $paymentID): self
    {
        $this->paymentID = $paymentID;

        return $this;
    }

    /**
     * @return self
     */
    public function clearPaymentID(): self
    {
        $this->paymentID = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\PaymentID $paymentID
     * @return self
     */
    public function addToPaymentID(PaymentID $paymentID): self
    {
        $this->paymentID[] = $paymentID;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\PaymentID
     */
    public function addToPaymentIDWithCreate(): PaymentID
    {
        $this->addTopaymentID($paymentID = new PaymentID());

        return $paymentID;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\PaymentID $paymentID
     * @return self
     */
    public function addOnceToPaymentID(PaymentID $paymentID): self
    {
        $this->paymentID[0] = $paymentID;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\PaymentID
     */
    public function addOnceToPaymentIDWithCreate(): PaymentID
    {
        if ($this->paymentID === []) {
            $this->addOnceTopaymentID(new PaymentID());
        }

        return $this->paymentID[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\CardAccount|null
     */
    public function getCardAccount(): ?CardAccount
    {
        return $this->cardAccount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\CardAccount
     */
    public function getCardAccountWithCreate(): CardAccount
    {
        $this->cardAccount = is_null($this->cardAccount) ? new CardAccount() : $this->cardAccount;

        return $this->cardAccount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\CardAccount $cardAccount
     * @return self
     */
    public function setCardAccount(CardAccount $cardAccount): self
    {
        $this->cardAccount = $cardAccount;

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
     * @return \horstoeko\invoicesuite\models\ubl\cac\PayeeFinancialAccount|null
     */
    public function getPayeeFinancialAccount(): ?PayeeFinancialAccount
    {
        return $this->payeeFinancialAccount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\PayeeFinancialAccount
     */
    public function getPayeeFinancialAccountWithCreate(): PayeeFinancialAccount
    {
        $this->payeeFinancialAccount = is_null($this->payeeFinancialAccount) ? new PayeeFinancialAccount() : $this->payeeFinancialAccount;

        return $this->payeeFinancialAccount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\PayeeFinancialAccount $payeeFinancialAccount
     * @return self
     */
    public function setPayeeFinancialAccount(PayeeFinancialAccount $payeeFinancialAccount): self
    {
        $this->payeeFinancialAccount = $payeeFinancialAccount;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\CreditAccount|null
     */
    public function getCreditAccount(): ?CreditAccount
    {
        return $this->creditAccount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\CreditAccount
     */
    public function getCreditAccountWithCreate(): CreditAccount
    {
        $this->creditAccount = is_null($this->creditAccount) ? new CreditAccount() : $this->creditAccount;

        return $this->creditAccount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\CreditAccount $creditAccount
     * @return self
     */
    public function setCreditAccount(CreditAccount $creditAccount): self
    {
        $this->creditAccount = $creditAccount;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\PaymentMandate|null
     */
    public function getPaymentMandate(): ?PaymentMandate
    {
        return $this->paymentMandate;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\PaymentMandate
     */
    public function getPaymentMandateWithCreate(): PaymentMandate
    {
        $this->paymentMandate = is_null($this->paymentMandate) ? new PaymentMandate() : $this->paymentMandate;

        return $this->paymentMandate;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\PaymentMandate $paymentMandate
     * @return self
     */
    public function setPaymentMandate(PaymentMandate $paymentMandate): self
    {
        $this->paymentMandate = $paymentMandate;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\TradeFinancing|null
     */
    public function getTradeFinancing(): ?TradeFinancing
    {
        return $this->tradeFinancing;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\TradeFinancing
     */
    public function getTradeFinancingWithCreate(): TradeFinancing
    {
        $this->tradeFinancing = is_null($this->tradeFinancing) ? new TradeFinancing() : $this->tradeFinancing;

        return $this->tradeFinancing;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\TradeFinancing $tradeFinancing
     * @return self
     */
    public function setTradeFinancing(TradeFinancing $tradeFinancing): self
    {
        $this->tradeFinancing = $tradeFinancing;

        return $this;
    }
}
