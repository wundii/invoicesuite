<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\AccountingCost;
use horstoeko\invoicesuite\documents\models\ubl\cbc\AccountingCostCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\InvoicedQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LineExtensionAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Note;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PaymentPurposeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\UUID;

class InvoiceLineType
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
     * @var UUID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\UUID")
     * @JMS\Expose
     * @JMS\SerializedName("UUID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getUUID", setter="setUUID")
     */
    private $uUID;

    /**
     * @var array<Note>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Note>")
     * @JMS\Expose
     * @JMS\SerializedName("Note")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Note", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getNote", setter="setNote")
     */
    private $note;

    /**
     * @var InvoicedQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\InvoicedQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("InvoicedQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getInvoicedQuantity", setter="setInvoicedQuantity")
     */
    private $invoicedQuantity;

    /**
     * @var LineExtensionAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LineExtensionAmount")
     * @JMS\Expose
     * @JMS\SerializedName("LineExtensionAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLineExtensionAmount", setter="setLineExtensionAmount")
     */
    private $lineExtensionAmount;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("TaxPointDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTaxPointDate", setter="setTaxPointDate")
     */
    private $taxPointDate;

    /**
     * @var AccountingCostCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\AccountingCostCode")
     * @JMS\Expose
     * @JMS\SerializedName("AccountingCostCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAccountingCostCode", setter="setAccountingCostCode")
     */
    private $accountingCostCode;

    /**
     * @var AccountingCost|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\AccountingCost")
     * @JMS\Expose
     * @JMS\SerializedName("AccountingCost")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAccountingCost", setter="setAccountingCost")
     */
    private $accountingCost;

    /**
     * @var PaymentPurposeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PaymentPurposeCode")
     * @JMS\Expose
     * @JMS\SerializedName("PaymentPurposeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPaymentPurposeCode", setter="setPaymentPurposeCode")
     */
    private $paymentPurposeCode;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("FreeOfChargeIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFreeOfChargeIndicator", setter="setFreeOfChargeIndicator")
     */
    private $freeOfChargeIndicator;

    /**
     * @var array<InvoicePeriod>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\InvoicePeriod>")
     * @JMS\Expose
     * @JMS\SerializedName("InvoicePeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="InvoicePeriod", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getInvoicePeriod", setter="setInvoicePeriod")
     */
    private $invoicePeriod;

    /**
     * @var array<OrderLineReference>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\OrderLineReference>")
     * @JMS\Expose
     * @JMS\SerializedName("OrderLineReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="OrderLineReference", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getOrderLineReference", setter="setOrderLineReference")
     */
    private $orderLineReference;

    /**
     * @var array<DespatchLineReference>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\DespatchLineReference>")
     * @JMS\Expose
     * @JMS\SerializedName("DespatchLineReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="DespatchLineReference", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getDespatchLineReference", setter="setDespatchLineReference")
     */
    private $despatchLineReference;

    /**
     * @var array<ReceiptLineReference>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ReceiptLineReference>")
     * @JMS\Expose
     * @JMS\SerializedName("ReceiptLineReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ReceiptLineReference", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getReceiptLineReference", setter="setReceiptLineReference")
     */
    private $receiptLineReference;

    /**
     * @var array<BillingReference>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\BillingReference>")
     * @JMS\Expose
     * @JMS\SerializedName("BillingReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="BillingReference", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getBillingReference", setter="setBillingReference")
     */
    private $billingReference;

    /**
     * @var array<DocumentReference>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\DocumentReference>")
     * @JMS\Expose
     * @JMS\SerializedName("DocumentReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="DocumentReference", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getDocumentReference", setter="setDocumentReference")
     */
    private $documentReference;

    /**
     * @var PricingReference|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\PricingReference")
     * @JMS\Expose
     * @JMS\SerializedName("PricingReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPricingReference", setter="setPricingReference")
     */
    private $pricingReference;

    /**
     * @var OriginatorParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\OriginatorParty")
     * @JMS\Expose
     * @JMS\SerializedName("OriginatorParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOriginatorParty", setter="setOriginatorParty")
     */
    private $originatorParty;

    /**
     * @var array<Delivery>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\Delivery>")
     * @JMS\Expose
     * @JMS\SerializedName("Delivery")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Delivery", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getDelivery", setter="setDelivery")
     */
    private $delivery;

    /**
     * @var array<PaymentTerms>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\PaymentTerms>")
     * @JMS\Expose
     * @JMS\SerializedName("PaymentTerms")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="PaymentTerms", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getPaymentTerms", setter="setPaymentTerms")
     */
    private $paymentTerms;

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
     * @var array<WithholdingTaxTotal>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\WithholdingTaxTotal>")
     * @JMS\Expose
     * @JMS\SerializedName("WithholdingTaxTotal")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="WithholdingTaxTotal", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getWithholdingTaxTotal", setter="setWithholdingTaxTotal")
     */
    private $withholdingTaxTotal;

    /**
     * @var Item|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Item")
     * @JMS\Expose
     * @JMS\SerializedName("Item")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getItem", setter="setItem")
     */
    private $item;

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
     * @var DeliveryTerms|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\DeliveryTerms")
     * @JMS\Expose
     * @JMS\SerializedName("DeliveryTerms")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDeliveryTerms", setter="setDeliveryTerms")
     */
    private $deliveryTerms;

    /**
     * @var array<SubInvoiceLine>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\SubInvoiceLine>")
     * @JMS\Expose
     * @JMS\SerializedName("SubInvoiceLine")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SubInvoiceLine", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSubInvoiceLine", setter="setSubInvoiceLine")
     */
    private $subInvoiceLine;

    /**
     * @var ItemPriceExtension|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ItemPriceExtension")
     * @JMS\Expose
     * @JMS\SerializedName("ItemPriceExtension")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getItemPriceExtension", setter="setItemPriceExtension")
     */
    private $itemPriceExtension;

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
     * @return UUID|null
     */
    public function getUUID(): ?UUID
    {
        return $this->uUID;
    }

    /**
     * @return UUID
     */
    public function getUUIDWithCreate(): UUID
    {
        $this->uUID = is_null($this->uUID) ? new UUID() : $this->uUID;

        return $this->uUID;
    }

    /**
     * @param UUID|null $uUID
     * @return self
     */
    public function setUUID(?UUID $uUID = null): self
    {
        $this->uUID = $uUID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetUUID(): self
    {
        $this->uUID = null;

        return $this;
    }

    /**
     * @return array<Note>|null
     */
    public function getNote(): ?array
    {
        return $this->note;
    }

    /**
     * @param array<Note>|null $note
     * @return self
     */
    public function setNote(?array $note = null): self
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetNote(): self
    {
        $this->note = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearNote(): self
    {
        $this->note = [];

        return $this;
    }

    /**
     * @return Note|null
     */
    public function firstNote(): ?Note
    {
        $note = $this->note ?? [];
        $note = reset($note);

        if ($note === false) {
            return null;
        }

        return $note;
    }

    /**
     * @return Note|null
     */
    public function lastNote(): ?Note
    {
        $note = $this->note ?? [];
        $note = end($note);

        if ($note === false) {
            return null;
        }

        return $note;
    }

    /**
     * @param Note $note
     * @return self
     */
    public function addToNote(Note $note): self
    {
        $this->note[] = $note;

        return $this;
    }

    /**
     * @return Note
     */
    public function addToNoteWithCreate(): Note
    {
        $this->addTonote($note = new Note());

        return $note;
    }

    /**
     * @param Note $note
     * @return self
     */
    public function addOnceToNote(Note $note): self
    {
        if (!is_array($this->note)) {
            $this->note = [];
        }

        $this->note[0] = $note;

        return $this;
    }

    /**
     * @return Note
     */
    public function addOnceToNoteWithCreate(): Note
    {
        if (!is_array($this->note)) {
            $this->note = [];
        }

        if ($this->note === []) {
            $this->addOnceTonote(new Note());
        }

        return $this->note[0];
    }

    /**
     * @return InvoicedQuantity|null
     */
    public function getInvoicedQuantity(): ?InvoicedQuantity
    {
        return $this->invoicedQuantity;
    }

    /**
     * @return InvoicedQuantity
     */
    public function getInvoicedQuantityWithCreate(): InvoicedQuantity
    {
        $this->invoicedQuantity = is_null($this->invoicedQuantity) ? new InvoicedQuantity() : $this->invoicedQuantity;

        return $this->invoicedQuantity;
    }

    /**
     * @param InvoicedQuantity|null $invoicedQuantity
     * @return self
     */
    public function setInvoicedQuantity(?InvoicedQuantity $invoicedQuantity = null): self
    {
        $this->invoicedQuantity = $invoicedQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetInvoicedQuantity(): self
    {
        $this->invoicedQuantity = null;

        return $this;
    }

    /**
     * @return LineExtensionAmount|null
     */
    public function getLineExtensionAmount(): ?LineExtensionAmount
    {
        return $this->lineExtensionAmount;
    }

    /**
     * @return LineExtensionAmount
     */
    public function getLineExtensionAmountWithCreate(): LineExtensionAmount
    {
        $this->lineExtensionAmount = is_null($this->lineExtensionAmount) ? new LineExtensionAmount() : $this->lineExtensionAmount;

        return $this->lineExtensionAmount;
    }

    /**
     * @param LineExtensionAmount|null $lineExtensionAmount
     * @return self
     */
    public function setLineExtensionAmount(?LineExtensionAmount $lineExtensionAmount = null): self
    {
        $this->lineExtensionAmount = $lineExtensionAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLineExtensionAmount(): self
    {
        $this->lineExtensionAmount = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getTaxPointDate(): ?DateTimeInterface
    {
        return $this->taxPointDate;
    }

    /**
     * @param DateTimeInterface|null $taxPointDate
     * @return self
     */
    public function setTaxPointDate(?DateTimeInterface $taxPointDate = null): self
    {
        $this->taxPointDate = $taxPointDate;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTaxPointDate(): self
    {
        $this->taxPointDate = null;

        return $this;
    }

    /**
     * @return AccountingCostCode|null
     */
    public function getAccountingCostCode(): ?AccountingCostCode
    {
        return $this->accountingCostCode;
    }

    /**
     * @return AccountingCostCode
     */
    public function getAccountingCostCodeWithCreate(): AccountingCostCode
    {
        $this->accountingCostCode = is_null($this->accountingCostCode) ? new AccountingCostCode() : $this->accountingCostCode;

        return $this->accountingCostCode;
    }

    /**
     * @param AccountingCostCode|null $accountingCostCode
     * @return self
     */
    public function setAccountingCostCode(?AccountingCostCode $accountingCostCode = null): self
    {
        $this->accountingCostCode = $accountingCostCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAccountingCostCode(): self
    {
        $this->accountingCostCode = null;

        return $this;
    }

    /**
     * @return AccountingCost|null
     */
    public function getAccountingCost(): ?AccountingCost
    {
        return $this->accountingCost;
    }

    /**
     * @return AccountingCost
     */
    public function getAccountingCostWithCreate(): AccountingCost
    {
        $this->accountingCost = is_null($this->accountingCost) ? new AccountingCost() : $this->accountingCost;

        return $this->accountingCost;
    }

    /**
     * @param AccountingCost|null $accountingCost
     * @return self
     */
    public function setAccountingCost(?AccountingCost $accountingCost = null): self
    {
        $this->accountingCost = $accountingCost;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAccountingCost(): self
    {
        $this->accountingCost = null;

        return $this;
    }

    /**
     * @return PaymentPurposeCode|null
     */
    public function getPaymentPurposeCode(): ?PaymentPurposeCode
    {
        return $this->paymentPurposeCode;
    }

    /**
     * @return PaymentPurposeCode
     */
    public function getPaymentPurposeCodeWithCreate(): PaymentPurposeCode
    {
        $this->paymentPurposeCode = is_null($this->paymentPurposeCode) ? new PaymentPurposeCode() : $this->paymentPurposeCode;

        return $this->paymentPurposeCode;
    }

    /**
     * @param PaymentPurposeCode|null $paymentPurposeCode
     * @return self
     */
    public function setPaymentPurposeCode(?PaymentPurposeCode $paymentPurposeCode = null): self
    {
        $this->paymentPurposeCode = $paymentPurposeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPaymentPurposeCode(): self
    {
        $this->paymentPurposeCode = null;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getFreeOfChargeIndicator(): ?bool
    {
        return $this->freeOfChargeIndicator;
    }

    /**
     * @param bool|null $freeOfChargeIndicator
     * @return self
     */
    public function setFreeOfChargeIndicator(?bool $freeOfChargeIndicator = null): self
    {
        $this->freeOfChargeIndicator = $freeOfChargeIndicator;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetFreeOfChargeIndicator(): self
    {
        $this->freeOfChargeIndicator = null;

        return $this;
    }

    /**
     * @return array<InvoicePeriod>|null
     */
    public function getInvoicePeriod(): ?array
    {
        return $this->invoicePeriod;
    }

    /**
     * @param array<InvoicePeriod>|null $invoicePeriod
     * @return self
     */
    public function setInvoicePeriod(?array $invoicePeriod = null): self
    {
        $this->invoicePeriod = $invoicePeriod;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetInvoicePeriod(): self
    {
        $this->invoicePeriod = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearInvoicePeriod(): self
    {
        $this->invoicePeriod = [];

        return $this;
    }

    /**
     * @return InvoicePeriod|null
     */
    public function firstInvoicePeriod(): ?InvoicePeriod
    {
        $invoicePeriod = $this->invoicePeriod ?? [];
        $invoicePeriod = reset($invoicePeriod);

        if ($invoicePeriod === false) {
            return null;
        }

        return $invoicePeriod;
    }

    /**
     * @return InvoicePeriod|null
     */
    public function lastInvoicePeriod(): ?InvoicePeriod
    {
        $invoicePeriod = $this->invoicePeriod ?? [];
        $invoicePeriod = end($invoicePeriod);

        if ($invoicePeriod === false) {
            return null;
        }

        return $invoicePeriod;
    }

    /**
     * @param InvoicePeriod $invoicePeriod
     * @return self
     */
    public function addToInvoicePeriod(InvoicePeriod $invoicePeriod): self
    {
        $this->invoicePeriod[] = $invoicePeriod;

        return $this;
    }

    /**
     * @return InvoicePeriod
     */
    public function addToInvoicePeriodWithCreate(): InvoicePeriod
    {
        $this->addToinvoicePeriod($invoicePeriod = new InvoicePeriod());

        return $invoicePeriod;
    }

    /**
     * @param InvoicePeriod $invoicePeriod
     * @return self
     */
    public function addOnceToInvoicePeriod(InvoicePeriod $invoicePeriod): self
    {
        if (!is_array($this->invoicePeriod)) {
            $this->invoicePeriod = [];
        }

        $this->invoicePeriod[0] = $invoicePeriod;

        return $this;
    }

    /**
     * @return InvoicePeriod
     */
    public function addOnceToInvoicePeriodWithCreate(): InvoicePeriod
    {
        if (!is_array($this->invoicePeriod)) {
            $this->invoicePeriod = [];
        }

        if ($this->invoicePeriod === []) {
            $this->addOnceToinvoicePeriod(new InvoicePeriod());
        }

        return $this->invoicePeriod[0];
    }

    /**
     * @return array<OrderLineReference>|null
     */
    public function getOrderLineReference(): ?array
    {
        return $this->orderLineReference;
    }

    /**
     * @param array<OrderLineReference>|null $orderLineReference
     * @return self
     */
    public function setOrderLineReference(?array $orderLineReference = null): self
    {
        $this->orderLineReference = $orderLineReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetOrderLineReference(): self
    {
        $this->orderLineReference = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearOrderLineReference(): self
    {
        $this->orderLineReference = [];

        return $this;
    }

    /**
     * @return OrderLineReference|null
     */
    public function firstOrderLineReference(): ?OrderLineReference
    {
        $orderLineReference = $this->orderLineReference ?? [];
        $orderLineReference = reset($orderLineReference);

        if ($orderLineReference === false) {
            return null;
        }

        return $orderLineReference;
    }

    /**
     * @return OrderLineReference|null
     */
    public function lastOrderLineReference(): ?OrderLineReference
    {
        $orderLineReference = $this->orderLineReference ?? [];
        $orderLineReference = end($orderLineReference);

        if ($orderLineReference === false) {
            return null;
        }

        return $orderLineReference;
    }

    /**
     * @param OrderLineReference $orderLineReference
     * @return self
     */
    public function addToOrderLineReference(OrderLineReference $orderLineReference): self
    {
        $this->orderLineReference[] = $orderLineReference;

        return $this;
    }

    /**
     * @return OrderLineReference
     */
    public function addToOrderLineReferenceWithCreate(): OrderLineReference
    {
        $this->addToorderLineReference($orderLineReference = new OrderLineReference());

        return $orderLineReference;
    }

    /**
     * @param OrderLineReference $orderLineReference
     * @return self
     */
    public function addOnceToOrderLineReference(OrderLineReference $orderLineReference): self
    {
        if (!is_array($this->orderLineReference)) {
            $this->orderLineReference = [];
        }

        $this->orderLineReference[0] = $orderLineReference;

        return $this;
    }

    /**
     * @return OrderLineReference
     */
    public function addOnceToOrderLineReferenceWithCreate(): OrderLineReference
    {
        if (!is_array($this->orderLineReference)) {
            $this->orderLineReference = [];
        }

        if ($this->orderLineReference === []) {
            $this->addOnceToorderLineReference(new OrderLineReference());
        }

        return $this->orderLineReference[0];
    }

    /**
     * @return array<DespatchLineReference>|null
     */
    public function getDespatchLineReference(): ?array
    {
        return $this->despatchLineReference;
    }

    /**
     * @param array<DespatchLineReference>|null $despatchLineReference
     * @return self
     */
    public function setDespatchLineReference(?array $despatchLineReference = null): self
    {
        $this->despatchLineReference = $despatchLineReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDespatchLineReference(): self
    {
        $this->despatchLineReference = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearDespatchLineReference(): self
    {
        $this->despatchLineReference = [];

        return $this;
    }

    /**
     * @return DespatchLineReference|null
     */
    public function firstDespatchLineReference(): ?DespatchLineReference
    {
        $despatchLineReference = $this->despatchLineReference ?? [];
        $despatchLineReference = reset($despatchLineReference);

        if ($despatchLineReference === false) {
            return null;
        }

        return $despatchLineReference;
    }

    /**
     * @return DespatchLineReference|null
     */
    public function lastDespatchLineReference(): ?DespatchLineReference
    {
        $despatchLineReference = $this->despatchLineReference ?? [];
        $despatchLineReference = end($despatchLineReference);

        if ($despatchLineReference === false) {
            return null;
        }

        return $despatchLineReference;
    }

    /**
     * @param DespatchLineReference $despatchLineReference
     * @return self
     */
    public function addToDespatchLineReference(DespatchLineReference $despatchLineReference): self
    {
        $this->despatchLineReference[] = $despatchLineReference;

        return $this;
    }

    /**
     * @return DespatchLineReference
     */
    public function addToDespatchLineReferenceWithCreate(): DespatchLineReference
    {
        $this->addTodespatchLineReference($despatchLineReference = new DespatchLineReference());

        return $despatchLineReference;
    }

    /**
     * @param DespatchLineReference $despatchLineReference
     * @return self
     */
    public function addOnceToDespatchLineReference(DespatchLineReference $despatchLineReference): self
    {
        if (!is_array($this->despatchLineReference)) {
            $this->despatchLineReference = [];
        }

        $this->despatchLineReference[0] = $despatchLineReference;

        return $this;
    }

    /**
     * @return DespatchLineReference
     */
    public function addOnceToDespatchLineReferenceWithCreate(): DespatchLineReference
    {
        if (!is_array($this->despatchLineReference)) {
            $this->despatchLineReference = [];
        }

        if ($this->despatchLineReference === []) {
            $this->addOnceTodespatchLineReference(new DespatchLineReference());
        }

        return $this->despatchLineReference[0];
    }

    /**
     * @return array<ReceiptLineReference>|null
     */
    public function getReceiptLineReference(): ?array
    {
        return $this->receiptLineReference;
    }

    /**
     * @param array<ReceiptLineReference>|null $receiptLineReference
     * @return self
     */
    public function setReceiptLineReference(?array $receiptLineReference = null): self
    {
        $this->receiptLineReference = $receiptLineReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetReceiptLineReference(): self
    {
        $this->receiptLineReference = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearReceiptLineReference(): self
    {
        $this->receiptLineReference = [];

        return $this;
    }

    /**
     * @return ReceiptLineReference|null
     */
    public function firstReceiptLineReference(): ?ReceiptLineReference
    {
        $receiptLineReference = $this->receiptLineReference ?? [];
        $receiptLineReference = reset($receiptLineReference);

        if ($receiptLineReference === false) {
            return null;
        }

        return $receiptLineReference;
    }

    /**
     * @return ReceiptLineReference|null
     */
    public function lastReceiptLineReference(): ?ReceiptLineReference
    {
        $receiptLineReference = $this->receiptLineReference ?? [];
        $receiptLineReference = end($receiptLineReference);

        if ($receiptLineReference === false) {
            return null;
        }

        return $receiptLineReference;
    }

    /**
     * @param ReceiptLineReference $receiptLineReference
     * @return self
     */
    public function addToReceiptLineReference(ReceiptLineReference $receiptLineReference): self
    {
        $this->receiptLineReference[] = $receiptLineReference;

        return $this;
    }

    /**
     * @return ReceiptLineReference
     */
    public function addToReceiptLineReferenceWithCreate(): ReceiptLineReference
    {
        $this->addToreceiptLineReference($receiptLineReference = new ReceiptLineReference());

        return $receiptLineReference;
    }

    /**
     * @param ReceiptLineReference $receiptLineReference
     * @return self
     */
    public function addOnceToReceiptLineReference(ReceiptLineReference $receiptLineReference): self
    {
        if (!is_array($this->receiptLineReference)) {
            $this->receiptLineReference = [];
        }

        $this->receiptLineReference[0] = $receiptLineReference;

        return $this;
    }

    /**
     * @return ReceiptLineReference
     */
    public function addOnceToReceiptLineReferenceWithCreate(): ReceiptLineReference
    {
        if (!is_array($this->receiptLineReference)) {
            $this->receiptLineReference = [];
        }

        if ($this->receiptLineReference === []) {
            $this->addOnceToreceiptLineReference(new ReceiptLineReference());
        }

        return $this->receiptLineReference[0];
    }

    /**
     * @return array<BillingReference>|null
     */
    public function getBillingReference(): ?array
    {
        return $this->billingReference;
    }

    /**
     * @param array<BillingReference>|null $billingReference
     * @return self
     */
    public function setBillingReference(?array $billingReference = null): self
    {
        $this->billingReference = $billingReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetBillingReference(): self
    {
        $this->billingReference = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearBillingReference(): self
    {
        $this->billingReference = [];

        return $this;
    }

    /**
     * @return BillingReference|null
     */
    public function firstBillingReference(): ?BillingReference
    {
        $billingReference = $this->billingReference ?? [];
        $billingReference = reset($billingReference);

        if ($billingReference === false) {
            return null;
        }

        return $billingReference;
    }

    /**
     * @return BillingReference|null
     */
    public function lastBillingReference(): ?BillingReference
    {
        $billingReference = $this->billingReference ?? [];
        $billingReference = end($billingReference);

        if ($billingReference === false) {
            return null;
        }

        return $billingReference;
    }

    /**
     * @param BillingReference $billingReference
     * @return self
     */
    public function addToBillingReference(BillingReference $billingReference): self
    {
        $this->billingReference[] = $billingReference;

        return $this;
    }

    /**
     * @return BillingReference
     */
    public function addToBillingReferenceWithCreate(): BillingReference
    {
        $this->addTobillingReference($billingReference = new BillingReference());

        return $billingReference;
    }

    /**
     * @param BillingReference $billingReference
     * @return self
     */
    public function addOnceToBillingReference(BillingReference $billingReference): self
    {
        if (!is_array($this->billingReference)) {
            $this->billingReference = [];
        }

        $this->billingReference[0] = $billingReference;

        return $this;
    }

    /**
     * @return BillingReference
     */
    public function addOnceToBillingReferenceWithCreate(): BillingReference
    {
        if (!is_array($this->billingReference)) {
            $this->billingReference = [];
        }

        if ($this->billingReference === []) {
            $this->addOnceTobillingReference(new BillingReference());
        }

        return $this->billingReference[0];
    }

    /**
     * @return array<DocumentReference>|null
     */
    public function getDocumentReference(): ?array
    {
        return $this->documentReference;
    }

    /**
     * @param array<DocumentReference>|null $documentReference
     * @return self
     */
    public function setDocumentReference(?array $documentReference = null): self
    {
        $this->documentReference = $documentReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDocumentReference(): self
    {
        $this->documentReference = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearDocumentReference(): self
    {
        $this->documentReference = [];

        return $this;
    }

    /**
     * @return DocumentReference|null
     */
    public function firstDocumentReference(): ?DocumentReference
    {
        $documentReference = $this->documentReference ?? [];
        $documentReference = reset($documentReference);

        if ($documentReference === false) {
            return null;
        }

        return $documentReference;
    }

    /**
     * @return DocumentReference|null
     */
    public function lastDocumentReference(): ?DocumentReference
    {
        $documentReference = $this->documentReference ?? [];
        $documentReference = end($documentReference);

        if ($documentReference === false) {
            return null;
        }

        return $documentReference;
    }

    /**
     * @param DocumentReference $documentReference
     * @return self
     */
    public function addToDocumentReference(DocumentReference $documentReference): self
    {
        $this->documentReference[] = $documentReference;

        return $this;
    }

    /**
     * @return DocumentReference
     */
    public function addToDocumentReferenceWithCreate(): DocumentReference
    {
        $this->addTodocumentReference($documentReference = new DocumentReference());

        return $documentReference;
    }

    /**
     * @param DocumentReference $documentReference
     * @return self
     */
    public function addOnceToDocumentReference(DocumentReference $documentReference): self
    {
        if (!is_array($this->documentReference)) {
            $this->documentReference = [];
        }

        $this->documentReference[0] = $documentReference;

        return $this;
    }

    /**
     * @return DocumentReference
     */
    public function addOnceToDocumentReferenceWithCreate(): DocumentReference
    {
        if (!is_array($this->documentReference)) {
            $this->documentReference = [];
        }

        if ($this->documentReference === []) {
            $this->addOnceTodocumentReference(new DocumentReference());
        }

        return $this->documentReference[0];
    }

    /**
     * @return PricingReference|null
     */
    public function getPricingReference(): ?PricingReference
    {
        return $this->pricingReference;
    }

    /**
     * @return PricingReference
     */
    public function getPricingReferenceWithCreate(): PricingReference
    {
        $this->pricingReference = is_null($this->pricingReference) ? new PricingReference() : $this->pricingReference;

        return $this->pricingReference;
    }

    /**
     * @param PricingReference|null $pricingReference
     * @return self
     */
    public function setPricingReference(?PricingReference $pricingReference = null): self
    {
        $this->pricingReference = $pricingReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPricingReference(): self
    {
        $this->pricingReference = null;

        return $this;
    }

    /**
     * @return OriginatorParty|null
     */
    public function getOriginatorParty(): ?OriginatorParty
    {
        return $this->originatorParty;
    }

    /**
     * @return OriginatorParty
     */
    public function getOriginatorPartyWithCreate(): OriginatorParty
    {
        $this->originatorParty = is_null($this->originatorParty) ? new OriginatorParty() : $this->originatorParty;

        return $this->originatorParty;
    }

    /**
     * @param OriginatorParty|null $originatorParty
     * @return self
     */
    public function setOriginatorParty(?OriginatorParty $originatorParty = null): self
    {
        $this->originatorParty = $originatorParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetOriginatorParty(): self
    {
        $this->originatorParty = null;

        return $this;
    }

    /**
     * @return array<Delivery>|null
     */
    public function getDelivery(): ?array
    {
        return $this->delivery;
    }

    /**
     * @param array<Delivery>|null $delivery
     * @return self
     */
    public function setDelivery(?array $delivery = null): self
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDelivery(): self
    {
        $this->delivery = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearDelivery(): self
    {
        $this->delivery = [];

        return $this;
    }

    /**
     * @return Delivery|null
     */
    public function firstDelivery(): ?Delivery
    {
        $delivery = $this->delivery ?? [];
        $delivery = reset($delivery);

        if ($delivery === false) {
            return null;
        }

        return $delivery;
    }

    /**
     * @return Delivery|null
     */
    public function lastDelivery(): ?Delivery
    {
        $delivery = $this->delivery ?? [];
        $delivery = end($delivery);

        if ($delivery === false) {
            return null;
        }

        return $delivery;
    }

    /**
     * @param Delivery $delivery
     * @return self
     */
    public function addToDelivery(Delivery $delivery): self
    {
        $this->delivery[] = $delivery;

        return $this;
    }

    /**
     * @return Delivery
     */
    public function addToDeliveryWithCreate(): Delivery
    {
        $this->addTodelivery($delivery = new Delivery());

        return $delivery;
    }

    /**
     * @param Delivery $delivery
     * @return self
     */
    public function addOnceToDelivery(Delivery $delivery): self
    {
        if (!is_array($this->delivery)) {
            $this->delivery = [];
        }

        $this->delivery[0] = $delivery;

        return $this;
    }

    /**
     * @return Delivery
     */
    public function addOnceToDeliveryWithCreate(): Delivery
    {
        if (!is_array($this->delivery)) {
            $this->delivery = [];
        }

        if ($this->delivery === []) {
            $this->addOnceTodelivery(new Delivery());
        }

        return $this->delivery[0];
    }

    /**
     * @return array<PaymentTerms>|null
     */
    public function getPaymentTerms(): ?array
    {
        return $this->paymentTerms;
    }

    /**
     * @param array<PaymentTerms>|null $paymentTerms
     * @return self
     */
    public function setPaymentTerms(?array $paymentTerms = null): self
    {
        $this->paymentTerms = $paymentTerms;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPaymentTerms(): self
    {
        $this->paymentTerms = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearPaymentTerms(): self
    {
        $this->paymentTerms = [];

        return $this;
    }

    /**
     * @return PaymentTerms|null
     */
    public function firstPaymentTerms(): ?PaymentTerms
    {
        $paymentTerms = $this->paymentTerms ?? [];
        $paymentTerms = reset($paymentTerms);

        if ($paymentTerms === false) {
            return null;
        }

        return $paymentTerms;
    }

    /**
     * @return PaymentTerms|null
     */
    public function lastPaymentTerms(): ?PaymentTerms
    {
        $paymentTerms = $this->paymentTerms ?? [];
        $paymentTerms = end($paymentTerms);

        if ($paymentTerms === false) {
            return null;
        }

        return $paymentTerms;
    }

    /**
     * @param PaymentTerms $paymentTerms
     * @return self
     */
    public function addToPaymentTerms(PaymentTerms $paymentTerms): self
    {
        $this->paymentTerms[] = $paymentTerms;

        return $this;
    }

    /**
     * @return PaymentTerms
     */
    public function addToPaymentTermsWithCreate(): PaymentTerms
    {
        $this->addTopaymentTerms($paymentTerms = new PaymentTerms());

        return $paymentTerms;
    }

    /**
     * @param PaymentTerms $paymentTerms
     * @return self
     */
    public function addOnceToPaymentTerms(PaymentTerms $paymentTerms): self
    {
        if (!is_array($this->paymentTerms)) {
            $this->paymentTerms = [];
        }

        $this->paymentTerms[0] = $paymentTerms;

        return $this;
    }

    /**
     * @return PaymentTerms
     */
    public function addOnceToPaymentTermsWithCreate(): PaymentTerms
    {
        if (!is_array($this->paymentTerms)) {
            $this->paymentTerms = [];
        }

        if ($this->paymentTerms === []) {
            $this->addOnceTopaymentTerms(new PaymentTerms());
        }

        return $this->paymentTerms[0];
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
     * @return array<WithholdingTaxTotal>|null
     */
    public function getWithholdingTaxTotal(): ?array
    {
        return $this->withholdingTaxTotal;
    }

    /**
     * @param array<WithholdingTaxTotal>|null $withholdingTaxTotal
     * @return self
     */
    public function setWithholdingTaxTotal(?array $withholdingTaxTotal = null): self
    {
        $this->withholdingTaxTotal = $withholdingTaxTotal;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetWithholdingTaxTotal(): self
    {
        $this->withholdingTaxTotal = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearWithholdingTaxTotal(): self
    {
        $this->withholdingTaxTotal = [];

        return $this;
    }

    /**
     * @return WithholdingTaxTotal|null
     */
    public function firstWithholdingTaxTotal(): ?WithholdingTaxTotal
    {
        $withholdingTaxTotal = $this->withholdingTaxTotal ?? [];
        $withholdingTaxTotal = reset($withholdingTaxTotal);

        if ($withholdingTaxTotal === false) {
            return null;
        }

        return $withholdingTaxTotal;
    }

    /**
     * @return WithholdingTaxTotal|null
     */
    public function lastWithholdingTaxTotal(): ?WithholdingTaxTotal
    {
        $withholdingTaxTotal = $this->withholdingTaxTotal ?? [];
        $withholdingTaxTotal = end($withholdingTaxTotal);

        if ($withholdingTaxTotal === false) {
            return null;
        }

        return $withholdingTaxTotal;
    }

    /**
     * @param WithholdingTaxTotal $withholdingTaxTotal
     * @return self
     */
    public function addToWithholdingTaxTotal(WithholdingTaxTotal $withholdingTaxTotal): self
    {
        $this->withholdingTaxTotal[] = $withholdingTaxTotal;

        return $this;
    }

    /**
     * @return WithholdingTaxTotal
     */
    public function addToWithholdingTaxTotalWithCreate(): WithholdingTaxTotal
    {
        $this->addTowithholdingTaxTotal($withholdingTaxTotal = new WithholdingTaxTotal());

        return $withholdingTaxTotal;
    }

    /**
     * @param WithholdingTaxTotal $withholdingTaxTotal
     * @return self
     */
    public function addOnceToWithholdingTaxTotal(WithholdingTaxTotal $withholdingTaxTotal): self
    {
        if (!is_array($this->withholdingTaxTotal)) {
            $this->withholdingTaxTotal = [];
        }

        $this->withholdingTaxTotal[0] = $withholdingTaxTotal;

        return $this;
    }

    /**
     * @return WithholdingTaxTotal
     */
    public function addOnceToWithholdingTaxTotalWithCreate(): WithholdingTaxTotal
    {
        if (!is_array($this->withholdingTaxTotal)) {
            $this->withholdingTaxTotal = [];
        }

        if ($this->withholdingTaxTotal === []) {
            $this->addOnceTowithholdingTaxTotal(new WithholdingTaxTotal());
        }

        return $this->withholdingTaxTotal[0];
    }

    /**
     * @return Item|null
     */
    public function getItem(): ?Item
    {
        return $this->item;
    }

    /**
     * @return Item
     */
    public function getItemWithCreate(): Item
    {
        $this->item = is_null($this->item) ? new Item() : $this->item;

        return $this->item;
    }

    /**
     * @param Item|null $item
     * @return self
     */
    public function setItem(?Item $item = null): self
    {
        $this->item = $item;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetItem(): self
    {
        $this->item = null;

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
     * @return DeliveryTerms|null
     */
    public function getDeliveryTerms(): ?DeliveryTerms
    {
        return $this->deliveryTerms;
    }

    /**
     * @return DeliveryTerms
     */
    public function getDeliveryTermsWithCreate(): DeliveryTerms
    {
        $this->deliveryTerms = is_null($this->deliveryTerms) ? new DeliveryTerms() : $this->deliveryTerms;

        return $this->deliveryTerms;
    }

    /**
     * @param DeliveryTerms|null $deliveryTerms
     * @return self
     */
    public function setDeliveryTerms(?DeliveryTerms $deliveryTerms = null): self
    {
        $this->deliveryTerms = $deliveryTerms;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDeliveryTerms(): self
    {
        $this->deliveryTerms = null;

        return $this;
    }

    /**
     * @return array<SubInvoiceLine>|null
     */
    public function getSubInvoiceLine(): ?array
    {
        return $this->subInvoiceLine;
    }

    /**
     * @param array<SubInvoiceLine>|null $subInvoiceLine
     * @return self
     */
    public function setSubInvoiceLine(?array $subInvoiceLine = null): self
    {
        $this->subInvoiceLine = $subInvoiceLine;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSubInvoiceLine(): self
    {
        $this->subInvoiceLine = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearSubInvoiceLine(): self
    {
        $this->subInvoiceLine = [];

        return $this;
    }

    /**
     * @return SubInvoiceLine|null
     */
    public function firstSubInvoiceLine(): ?SubInvoiceLine
    {
        $subInvoiceLine = $this->subInvoiceLine ?? [];
        $subInvoiceLine = reset($subInvoiceLine);

        if ($subInvoiceLine === false) {
            return null;
        }

        return $subInvoiceLine;
    }

    /**
     * @return SubInvoiceLine|null
     */
    public function lastSubInvoiceLine(): ?SubInvoiceLine
    {
        $subInvoiceLine = $this->subInvoiceLine ?? [];
        $subInvoiceLine = end($subInvoiceLine);

        if ($subInvoiceLine === false) {
            return null;
        }

        return $subInvoiceLine;
    }

    /**
     * @param SubInvoiceLine $subInvoiceLine
     * @return self
     */
    public function addToSubInvoiceLine(SubInvoiceLine $subInvoiceLine): self
    {
        $this->subInvoiceLine[] = $subInvoiceLine;

        return $this;
    }

    /**
     * @return SubInvoiceLine
     */
    public function addToSubInvoiceLineWithCreate(): SubInvoiceLine
    {
        $this->addTosubInvoiceLine($subInvoiceLine = new SubInvoiceLine());

        return $subInvoiceLine;
    }

    /**
     * @param SubInvoiceLine $subInvoiceLine
     * @return self
     */
    public function addOnceToSubInvoiceLine(SubInvoiceLine $subInvoiceLine): self
    {
        if (!is_array($this->subInvoiceLine)) {
            $this->subInvoiceLine = [];
        }

        $this->subInvoiceLine[0] = $subInvoiceLine;

        return $this;
    }

    /**
     * @return SubInvoiceLine
     */
    public function addOnceToSubInvoiceLineWithCreate(): SubInvoiceLine
    {
        if (!is_array($this->subInvoiceLine)) {
            $this->subInvoiceLine = [];
        }

        if ($this->subInvoiceLine === []) {
            $this->addOnceTosubInvoiceLine(new SubInvoiceLine());
        }

        return $this->subInvoiceLine[0];
    }

    /**
     * @return ItemPriceExtension|null
     */
    public function getItemPriceExtension(): ?ItemPriceExtension
    {
        return $this->itemPriceExtension;
    }

    /**
     * @return ItemPriceExtension
     */
    public function getItemPriceExtensionWithCreate(): ItemPriceExtension
    {
        $this->itemPriceExtension = is_null($this->itemPriceExtension) ? new ItemPriceExtension() : $this->itemPriceExtension;

        return $this->itemPriceExtension;
    }

    /**
     * @param ItemPriceExtension|null $itemPriceExtension
     * @return self
     */
    public function setItemPriceExtension(?ItemPriceExtension $itemPriceExtension = null): self
    {
        $this->itemPriceExtension = $itemPriceExtension;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetItemPriceExtension(): self
    {
        $this->itemPriceExtension = null;

        return $this;
    }
}
