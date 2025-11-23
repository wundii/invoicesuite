<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxextended\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxextended\qdt\FormattedDateTimeType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\AmountType;

class AdvancePaymentType
{
    use HandlesObjectFlags;

    /**
     * @var AmountType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\AmountType")
     * @JMS\Expose
     * @JMS\SerializedName("PaidAmount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getPaidAmount", setter="setPaidAmount")
     */
    private $paidAmount;

    /**
     * @var FormattedDateTimeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\qdt\FormattedDateTimeType")
     * @JMS\Expose
     * @JMS\SerializedName("FormattedReceivedDateTime")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getFormattedReceivedDateTime", setter="setFormattedReceivedDateTime")
     */
    private $formattedReceivedDateTime;

    /**
     * @var array<TradeTaxType>|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\zffxextended\ram\TradeTaxType>")
     * @JMS\Expose
     * @JMS\SerializedName("IncludedTradeTax")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\XmlList(inline=true, entry="IncludedTradeTax", namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\Accessor(getter="getIncludedTradeTax", setter="setIncludedTradeTax")
     */
    private $includedTradeTax;

    /**
     * @var ReferencedDocumentType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\ReferencedDocumentType")
     * @JMS\Expose
     * @JMS\SerializedName("InvoiceSpecifiedReferencedDocument")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getInvoiceSpecifiedReferencedDocument", setter="setInvoiceSpecifiedReferencedDocument")
     */
    private $invoiceSpecifiedReferencedDocument;

    /**
     * @return AmountType|null
     */
    public function getPaidAmount(): ?AmountType
    {
        return $this->paidAmount;
    }

    /**
     * @return AmountType
     */
    public function getPaidAmountWithCreate(): AmountType
    {
        $this->paidAmount = is_null($this->paidAmount) ? new AmountType() : $this->paidAmount;

        return $this->paidAmount;
    }

    /**
     * @param AmountType|null $paidAmount
     * @return self
     */
    public function setPaidAmount(?AmountType $paidAmount = null): self
    {
        $this->paidAmount = $paidAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPaidAmount(): self
    {
        $this->paidAmount = null;

        return $this;
    }

    /**
     * @return FormattedDateTimeType|null
     */
    public function getFormattedReceivedDateTime(): ?FormattedDateTimeType
    {
        return $this->formattedReceivedDateTime;
    }

    /**
     * @return FormattedDateTimeType
     */
    public function getFormattedReceivedDateTimeWithCreate(): FormattedDateTimeType
    {
        $this->formattedReceivedDateTime = is_null($this->formattedReceivedDateTime) ? new FormattedDateTimeType() : $this->formattedReceivedDateTime;

        return $this->formattedReceivedDateTime;
    }

    /**
     * @param FormattedDateTimeType|null $formattedReceivedDateTime
     * @return self
     */
    public function setFormattedReceivedDateTime(?FormattedDateTimeType $formattedReceivedDateTime = null): self
    {
        $this->formattedReceivedDateTime = $formattedReceivedDateTime;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetFormattedReceivedDateTime(): self
    {
        $this->formattedReceivedDateTime = null;

        return $this;
    }

    /**
     * @return array<TradeTaxType>|null
     */
    public function getIncludedTradeTax(): ?array
    {
        return $this->includedTradeTax;
    }

    /**
     * @param array<TradeTaxType>|null $includedTradeTax
     * @return self
     */
    public function setIncludedTradeTax(?array $includedTradeTax = null): self
    {
        $this->includedTradeTax = $includedTradeTax;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetIncludedTradeTax(): self
    {
        $this->includedTradeTax = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearIncludedTradeTax(): self
    {
        $this->includedTradeTax = [];

        return $this;
    }

    /**
     * @param TradeTaxType $includedTradeTax
     * @return self
     */
    public function addToIncludedTradeTax(TradeTaxType $includedTradeTax): self
    {
        $this->includedTradeTax[] = $includedTradeTax;

        return $this;
    }

    /**
     * @return TradeTaxType
     */
    public function addToIncludedTradeTaxWithCreate(): TradeTaxType
    {
        $this->addToincludedTradeTax($includedTradeTax = new TradeTaxType());

        return $includedTradeTax;
    }

    /**
     * @param TradeTaxType $includedTradeTax
     * @return self
     */
    public function addOnceToIncludedTradeTax(TradeTaxType $includedTradeTax): self
    {
        if (!is_array($this->includedTradeTax)) {
            $this->includedTradeTax = [];
        }

        $this->includedTradeTax[0] = $includedTradeTax;

        return $this;
    }

    /**
     * @return TradeTaxType
     */
    public function addOnceToIncludedTradeTaxWithCreate(): TradeTaxType
    {
        if (!is_array($this->includedTradeTax)) {
            $this->includedTradeTax = [];
        }

        if ($this->includedTradeTax === []) {
            $this->addOnceToincludedTradeTax(new TradeTaxType());
        }

        return $this->includedTradeTax[0];
    }

    /**
     * @return ReferencedDocumentType|null
     */
    public function getInvoiceSpecifiedReferencedDocument(): ?ReferencedDocumentType
    {
        return $this->invoiceSpecifiedReferencedDocument;
    }

    /**
     * @return ReferencedDocumentType
     */
    public function getInvoiceSpecifiedReferencedDocumentWithCreate(): ReferencedDocumentType
    {
        $this->invoiceSpecifiedReferencedDocument = is_null($this->invoiceSpecifiedReferencedDocument) ? new ReferencedDocumentType() : $this->invoiceSpecifiedReferencedDocument;

        return $this->invoiceSpecifiedReferencedDocument;
    }

    /**
     * @param ReferencedDocumentType|null $invoiceSpecifiedReferencedDocument
     * @return self
     */
    public function setInvoiceSpecifiedReferencedDocument(
        ?ReferencedDocumentType $invoiceSpecifiedReferencedDocument = null,
    ): self {
        $this->invoiceSpecifiedReferencedDocument = $invoiceSpecifiedReferencedDocument;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetInvoiceSpecifiedReferencedDocument(): self
    {
        $this->invoiceSpecifiedReferencedDocument = null;

        return $this;
    }
}
