<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\InstructionID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\InstructionNote;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PaymentChannelCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PaymentID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PaymentMeansCode;

class PaymentMeansType
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
     * @var PaymentMeansCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PaymentMeansCode")
     * @JMS\Expose
     * @JMS\SerializedName("PaymentMeansCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPaymentMeansCode", setter="setPaymentMeansCode")
     */
    private $paymentMeansCode;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("PaymentDueDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPaymentDueDate", setter="setPaymentDueDate")
     */
    private $paymentDueDate;

    /**
     * @var PaymentChannelCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PaymentChannelCode")
     * @JMS\Expose
     * @JMS\SerializedName("PaymentChannelCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPaymentChannelCode", setter="setPaymentChannelCode")
     */
    private $paymentChannelCode;

    /**
     * @var InstructionID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\InstructionID")
     * @JMS\Expose
     * @JMS\SerializedName("InstructionID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getInstructionID", setter="setInstructionID")
     */
    private $instructionID;

    /**
     * @var array<InstructionNote>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\InstructionNote>")
     * @JMS\Expose
     * @JMS\SerializedName("InstructionNote")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="InstructionNote", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getInstructionNote", setter="setInstructionNote")
     */
    private $instructionNote;

    /**
     * @var array<PaymentID>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\PaymentID>")
     * @JMS\Expose
     * @JMS\SerializedName("PaymentID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="PaymentID", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getPaymentID", setter="setPaymentID")
     */
    private $paymentID;

    /**
     * @var CardAccount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\CardAccount")
     * @JMS\Expose
     * @JMS\SerializedName("CardAccount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCardAccount", setter="setCardAccount")
     */
    private $cardAccount;

    /**
     * @var PayerFinancialAccount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\PayerFinancialAccount")
     * @JMS\Expose
     * @JMS\SerializedName("PayerFinancialAccount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPayerFinancialAccount", setter="setPayerFinancialAccount")
     */
    private $payerFinancialAccount;

    /**
     * @var PayeeFinancialAccount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\PayeeFinancialAccount")
     * @JMS\Expose
     * @JMS\SerializedName("PayeeFinancialAccount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPayeeFinancialAccount", setter="setPayeeFinancialAccount")
     */
    private $payeeFinancialAccount;

    /**
     * @var CreditAccount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\CreditAccount")
     * @JMS\Expose
     * @JMS\SerializedName("CreditAccount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCreditAccount", setter="setCreditAccount")
     */
    private $creditAccount;

    /**
     * @var PaymentMandate|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\PaymentMandate")
     * @JMS\Expose
     * @JMS\SerializedName("PaymentMandate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPaymentMandate", setter="setPaymentMandate")
     */
    private $paymentMandate;

    /**
     * @var TradeFinancing|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\TradeFinancing")
     * @JMS\Expose
     * @JMS\SerializedName("TradeFinancing")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTradeFinancing", setter="setTradeFinancing")
     */
    private $tradeFinancing;

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
     * @return PaymentMeansCode|null
     */
    public function getPaymentMeansCode(): ?PaymentMeansCode
    {
        return $this->paymentMeansCode;
    }

    /**
     * @return PaymentMeansCode
     */
    public function getPaymentMeansCodeWithCreate(): PaymentMeansCode
    {
        $this->paymentMeansCode = is_null($this->paymentMeansCode) ? new PaymentMeansCode() : $this->paymentMeansCode;

        return $this->paymentMeansCode;
    }

    /**
     * @param PaymentMeansCode|null $paymentMeansCode
     * @return self
     */
    public function setPaymentMeansCode(?PaymentMeansCode $paymentMeansCode = null): self
    {
        $this->paymentMeansCode = $paymentMeansCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPaymentMeansCode(): self
    {
        $this->paymentMeansCode = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getPaymentDueDate(): ?DateTimeInterface
    {
        return $this->paymentDueDate;
    }

    /**
     * @param DateTimeInterface|null $paymentDueDate
     * @return self
     */
    public function setPaymentDueDate(?DateTimeInterface $paymentDueDate = null): self
    {
        $this->paymentDueDate = $paymentDueDate;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPaymentDueDate(): self
    {
        $this->paymentDueDate = null;

        return $this;
    }

    /**
     * @return PaymentChannelCode|null
     */
    public function getPaymentChannelCode(): ?PaymentChannelCode
    {
        return $this->paymentChannelCode;
    }

    /**
     * @return PaymentChannelCode
     */
    public function getPaymentChannelCodeWithCreate(): PaymentChannelCode
    {
        $this->paymentChannelCode = is_null($this->paymentChannelCode) ? new PaymentChannelCode() : $this->paymentChannelCode;

        return $this->paymentChannelCode;
    }

    /**
     * @param PaymentChannelCode|null $paymentChannelCode
     * @return self
     */
    public function setPaymentChannelCode(?PaymentChannelCode $paymentChannelCode = null): self
    {
        $this->paymentChannelCode = $paymentChannelCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPaymentChannelCode(): self
    {
        $this->paymentChannelCode = null;

        return $this;
    }

    /**
     * @return InstructionID|null
     */
    public function getInstructionID(): ?InstructionID
    {
        return $this->instructionID;
    }

    /**
     * @return InstructionID
     */
    public function getInstructionIDWithCreate(): InstructionID
    {
        $this->instructionID = is_null($this->instructionID) ? new InstructionID() : $this->instructionID;

        return $this->instructionID;
    }

    /**
     * @param InstructionID|null $instructionID
     * @return self
     */
    public function setInstructionID(?InstructionID $instructionID = null): self
    {
        $this->instructionID = $instructionID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetInstructionID(): self
    {
        $this->instructionID = null;

        return $this;
    }

    /**
     * @return array<InstructionNote>|null
     */
    public function getInstructionNote(): ?array
    {
        return $this->instructionNote;
    }

    /**
     * @param array<InstructionNote>|null $instructionNote
     * @return self
     */
    public function setInstructionNote(?array $instructionNote = null): self
    {
        $this->instructionNote = $instructionNote;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetInstructionNote(): self
    {
        $this->instructionNote = null;

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
     * @return InstructionNote|null
     */
    public function firstInstructionNote(): ?InstructionNote
    {
        $instructionNote = $this->instructionNote ?? [];
        $instructionNote = reset($instructionNote);

        if ($instructionNote === false) {
            return null;
        }

        return $instructionNote;
    }

    /**
     * @return InstructionNote|null
     */
    public function lastInstructionNote(): ?InstructionNote
    {
        $instructionNote = $this->instructionNote ?? [];
        $instructionNote = end($instructionNote);

        if ($instructionNote === false) {
            return null;
        }

        return $instructionNote;
    }

    /**
     * @param InstructionNote $instructionNote
     * @return self
     */
    public function addToInstructionNote(InstructionNote $instructionNote): self
    {
        $this->instructionNote[] = $instructionNote;

        return $this;
    }

    /**
     * @return InstructionNote
     */
    public function addToInstructionNoteWithCreate(): InstructionNote
    {
        $this->addToinstructionNote($instructionNote = new InstructionNote());

        return $instructionNote;
    }

    /**
     * @param InstructionNote $instructionNote
     * @return self
     */
    public function addOnceToInstructionNote(InstructionNote $instructionNote): self
    {
        if (!is_array($this->instructionNote)) {
            $this->instructionNote = [];
        }

        $this->instructionNote[0] = $instructionNote;

        return $this;
    }

    /**
     * @return InstructionNote
     */
    public function addOnceToInstructionNoteWithCreate(): InstructionNote
    {
        if (!is_array($this->instructionNote)) {
            $this->instructionNote = [];
        }

        if ($this->instructionNote === []) {
            $this->addOnceToinstructionNote(new InstructionNote());
        }

        return $this->instructionNote[0];
    }

    /**
     * @return array<PaymentID>|null
     */
    public function getPaymentID(): ?array
    {
        return $this->paymentID;
    }

    /**
     * @param array<PaymentID>|null $paymentID
     * @return self
     */
    public function setPaymentID(?array $paymentID = null): self
    {
        $this->paymentID = $paymentID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPaymentID(): self
    {
        $this->paymentID = null;

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
     * @return PaymentID|null
     */
    public function firstPaymentID(): ?PaymentID
    {
        $paymentID = $this->paymentID ?? [];
        $paymentID = reset($paymentID);

        if ($paymentID === false) {
            return null;
        }

        return $paymentID;
    }

    /**
     * @return PaymentID|null
     */
    public function lastPaymentID(): ?PaymentID
    {
        $paymentID = $this->paymentID ?? [];
        $paymentID = end($paymentID);

        if ($paymentID === false) {
            return null;
        }

        return $paymentID;
    }

    /**
     * @param PaymentID $paymentID
     * @return self
     */
    public function addToPaymentID(PaymentID $paymentID): self
    {
        $this->paymentID[] = $paymentID;

        return $this;
    }

    /**
     * @return PaymentID
     */
    public function addToPaymentIDWithCreate(): PaymentID
    {
        $this->addTopaymentID($paymentID = new PaymentID());

        return $paymentID;
    }

    /**
     * @param PaymentID $paymentID
     * @return self
     */
    public function addOnceToPaymentID(PaymentID $paymentID): self
    {
        if (!is_array($this->paymentID)) {
            $this->paymentID = [];
        }

        $this->paymentID[0] = $paymentID;

        return $this;
    }

    /**
     * @return PaymentID
     */
    public function addOnceToPaymentIDWithCreate(): PaymentID
    {
        if (!is_array($this->paymentID)) {
            $this->paymentID = [];
        }

        if ($this->paymentID === []) {
            $this->addOnceTopaymentID(new PaymentID());
        }

        return $this->paymentID[0];
    }

    /**
     * @return CardAccount|null
     */
    public function getCardAccount(): ?CardAccount
    {
        return $this->cardAccount;
    }

    /**
     * @return CardAccount
     */
    public function getCardAccountWithCreate(): CardAccount
    {
        $this->cardAccount = is_null($this->cardAccount) ? new CardAccount() : $this->cardAccount;

        return $this->cardAccount;
    }

    /**
     * @param CardAccount|null $cardAccount
     * @return self
     */
    public function setCardAccount(?CardAccount $cardAccount = null): self
    {
        $this->cardAccount = $cardAccount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCardAccount(): self
    {
        $this->cardAccount = null;

        return $this;
    }

    /**
     * @return PayerFinancialAccount|null
     */
    public function getPayerFinancialAccount(): ?PayerFinancialAccount
    {
        return $this->payerFinancialAccount;
    }

    /**
     * @return PayerFinancialAccount
     */
    public function getPayerFinancialAccountWithCreate(): PayerFinancialAccount
    {
        $this->payerFinancialAccount = is_null($this->payerFinancialAccount) ? new PayerFinancialAccount() : $this->payerFinancialAccount;

        return $this->payerFinancialAccount;
    }

    /**
     * @param PayerFinancialAccount|null $payerFinancialAccount
     * @return self
     */
    public function setPayerFinancialAccount(?PayerFinancialAccount $payerFinancialAccount = null): self
    {
        $this->payerFinancialAccount = $payerFinancialAccount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPayerFinancialAccount(): self
    {
        $this->payerFinancialAccount = null;

        return $this;
    }

    /**
     * @return PayeeFinancialAccount|null
     */
    public function getPayeeFinancialAccount(): ?PayeeFinancialAccount
    {
        return $this->payeeFinancialAccount;
    }

    /**
     * @return PayeeFinancialAccount
     */
    public function getPayeeFinancialAccountWithCreate(): PayeeFinancialAccount
    {
        $this->payeeFinancialAccount = is_null($this->payeeFinancialAccount) ? new PayeeFinancialAccount() : $this->payeeFinancialAccount;

        return $this->payeeFinancialAccount;
    }

    /**
     * @param PayeeFinancialAccount|null $payeeFinancialAccount
     * @return self
     */
    public function setPayeeFinancialAccount(?PayeeFinancialAccount $payeeFinancialAccount = null): self
    {
        $this->payeeFinancialAccount = $payeeFinancialAccount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPayeeFinancialAccount(): self
    {
        $this->payeeFinancialAccount = null;

        return $this;
    }

    /**
     * @return CreditAccount|null
     */
    public function getCreditAccount(): ?CreditAccount
    {
        return $this->creditAccount;
    }

    /**
     * @return CreditAccount
     */
    public function getCreditAccountWithCreate(): CreditAccount
    {
        $this->creditAccount = is_null($this->creditAccount) ? new CreditAccount() : $this->creditAccount;

        return $this->creditAccount;
    }

    /**
     * @param CreditAccount|null $creditAccount
     * @return self
     */
    public function setCreditAccount(?CreditAccount $creditAccount = null): self
    {
        $this->creditAccount = $creditAccount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCreditAccount(): self
    {
        $this->creditAccount = null;

        return $this;
    }

    /**
     * @return PaymentMandate|null
     */
    public function getPaymentMandate(): ?PaymentMandate
    {
        return $this->paymentMandate;
    }

    /**
     * @return PaymentMandate
     */
    public function getPaymentMandateWithCreate(): PaymentMandate
    {
        $this->paymentMandate = is_null($this->paymentMandate) ? new PaymentMandate() : $this->paymentMandate;

        return $this->paymentMandate;
    }

    /**
     * @param PaymentMandate|null $paymentMandate
     * @return self
     */
    public function setPaymentMandate(?PaymentMandate $paymentMandate = null): self
    {
        $this->paymentMandate = $paymentMandate;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPaymentMandate(): self
    {
        $this->paymentMandate = null;

        return $this;
    }

    /**
     * @return TradeFinancing|null
     */
    public function getTradeFinancing(): ?TradeFinancing
    {
        return $this->tradeFinancing;
    }

    /**
     * @return TradeFinancing
     */
    public function getTradeFinancingWithCreate(): TradeFinancing
    {
        $this->tradeFinancing = is_null($this->tradeFinancing) ? new TradeFinancing() : $this->tradeFinancing;

        return $this->tradeFinancing;
    }

    /**
     * @param TradeFinancing|null $tradeFinancing
     * @return self
     */
    public function setTradeFinancing(?TradeFinancing $tradeFinancing = null): self
    {
        $this->tradeFinancing = $tradeFinancing;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTradeFinancing(): self
    {
        $this->tradeFinancing = null;

        return $this;
    }
}
