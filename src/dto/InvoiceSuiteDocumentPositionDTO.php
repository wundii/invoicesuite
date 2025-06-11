<?php

namespace horstoeko\invoicesuite\dto;

/**
 * Class representing a DTO for...
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
class InvoiceSuiteDocumentPositionDTO
{
    /**
     * The identification of the position
     *
     * @var string|null
     */
    protected ?string $lineId = null;

    /**
     * The identification of the parent position
     *
     * @var string|null
     */
    protected ?string $parentLineId = null;

    /**
     * The indication whether the invoice item contains prices that must be taken into account when calculating the invoice amount or whether only information is included
     *
     * @var string|null
     */
    protected ?string $lineStatus = null;

    /**
     * The type to specify whether the invoice line is
     *
     * @var string|null
     */
    protected ?string $lineStatusReason = null;

    /**
     * The notes for this position
     *
     * @var array<InvoiceSuiteNoteDTO>
     */
    protected array $note = [];

    /**
     * The product for this position
     *
     * @var InvoiceSuiteProductDTO|null
     */
    protected ?InvoiceSuiteProductDTO $product = null;

    /**
     * The associated seller's order confirmation (line reference)
     *
     * @var array<InvoiceSuiteReferenceLineDTO>
     */
    protected array $sellerOrderReferences = [];

    /**
     * The associated buyer's order (line reference)
     *
     * @var array<InvoiceSuiteReferenceLineDTO>
     */
    protected array $buyerOrderReferences = [];

    /**
     * The associated quotation (line reference)
     *
     * @var array<InvoiceSuiteReferenceLineDTO>
     */
    protected array $quotationReferences = [];

    /**
     * The associated contract (line reference)
     *
     * @var array<InvoiceSuiteReferenceLineDTO>
     */
    protected array $contractReferences = [];

    /**
     * The additional associated document (line reference)
     *
     * @var array<InvoiceSuiteReferenceLineExtDTO>
     */
    protected array $additionalReferences = [];

    /**
     * The ultimate customer order reference (line reference)
     *
     * @var array<InvoiceSuiteReferenceLineDTO>
     */
    protected array $ultimateCustomerOrderReferences = [];

    /**
     * The despatch advice reference (line reference)
     *
     * @var array<InvoiceSuiteReferenceLineDTO>
     */
    protected array $despatchAdviceReferences = [];

    /**
     * The receiving advice reference (line reference)
     *
     * @var array<InvoiceSuiteReferenceLineDTO>
     */
    protected array $receivingAdviceReferences = [];

    /**
     * The delivery note reference (line reference)
     *
     * @var array<InvoiceSuiteReferenceLineDTO>
     */
    protected array $deliveryNoteReferences = [];

    /**
     * The additional invoice document (line reference)
     *
     * @var array<InvoiceSuiteReferenceLineExtDTO>
     */
    protected array $invoiceReferences = [];

    /**
     * The gross price
     *
     * @var InvoiceSuitePriceGrossDTO|null
     */
    protected ?InvoiceSuitePriceGrossDTO $grossPrice = null;

    /**
     * The net price
     *
     * @var InvoiceSuitePriceNetDTO|null
     */
    protected ?InvoiceSuitePriceNetDTO $netPrice = null;

    /**
     * The billed quantity
     *
     * @var InvoiceSuiteQuantityDTO|null
     */
    protected ?InvoiceSuiteQuantityDTO $quantityBilled = null;

    /**
     * The charge-free quantity
     *
     * @var InvoiceSuiteQuantityDTO|null
     */
    protected ?InvoiceSuiteQuantityDTO $quantityChargeFree = null;

    /**
     * The package quantity
     *
     * @var InvoiceSuiteQuantityDTO|null
     */
    protected ?InvoiceSuiteQuantityDTO $quantityPackage = null;

    /**
     * The Ship-To Party
     *
     * @var InvoiceSuitePartyDTO|null
     */
    protected ?InvoiceSuitePartyDTO $shipToParty = null;

    /**
     * The Ultimate Ship-To Party
     *
     * @var InvoiceSuitePartyDTO|null
     */
    protected ?InvoiceSuitePartyDTO $ultimateShipToParty = null;

    /**
     * Constructor
     *
     * @param string|null $lineId The identification of the position
     * @param string|null $parentLineId The identification of the parent position
     * @param string|null $lineStatus The indication whether the invoice item contains prices that must be taken into account when calculating the invoice amount or whether only information is included
     * @param string|null $lineStatusReason The type to specify whether the invoice line is
     * @param array<InvoiceSuiteNoteDTO> $note The notes for this position
     * @param InvoiceSuiteProductDTO|null $product The product for this position
     * @param array<InvoiceSuiteReferenceLineDTO> $sellerOrderReferences The associated seller's order confirmation (line reference)
     * @param array<InvoiceSuiteReferenceLineDTO> $buyerOrderReferences The associated buyer's order (line reference)
     * @param array<InvoiceSuiteReferenceLineDTO> $quotationReferences The associated quotation (line reference)
     * @param array<InvoiceSuiteReferenceLineDTO> $contractReferences The associated contract (line reference)
     * @param array<InvoiceSuiteReferenceLineExtDTO> $additionalReferences The additional associated document (line reference)
     * @param array<InvoiceSuiteReferenceLineDTO> $ultimateCustomerOrderReferences The ultimate customer order reference (line reference)
     * @param array<InvoiceSuiteReferenceLineDTO> $despatchAdviceReferences The despatch advice reference (line reference)
     * @param array<InvoiceSuiteReferenceLineDTO> $receivingAdviceReferences The receiving advice reference (line reference)
     * @param array<InvoiceSuiteReferenceLineDTO> $deliveryNoteReferences The delivery note reference (line reference)
     * @param array<InvoiceSuiteReferenceLineExtDTO> $invoiceReferences The additional invoice document (line reference)
     * @param InvoiceSuitePriceGrossDTO|null $grossPrice The gross price
     * @param InvoiceSuitePriceNetDTO|null $netPrice The net price
     * @param InvoiceSuiteQuantityDTO|null $quantityBilled The billed quantity
     * @param InvoiceSuiteQuantityDTO|null $quantityChargeFree The charge-free quantity
     * @param InvoiceSuiteQuantityDTO|null $quantityPackage The package quantity
     * @param InvoiceSuitePartyDTO|null $shipToParty The Ship-To Party
     * @param InvoiceSuitePartyDTO|null $ultimateShipToParty The Ultimate Ship-To Party
     */
    public function __construct(
        ?string $lineId = null,
        ?string $parentLineId = null,
        ?string $lineStatus = null,
        ?string $lineStatusReason = null,
        array $note = [],
        ?InvoiceSuiteProductDTO $product = null,
        array $sellerOrderReferences = [],
        array $buyerOrderReferences = [],
        array $quotationReferences = [],
        array $contractReferences = [],
        array $additionalReferences = [],
        array $ultimateCustomerOrderReferences = [],
        array $despatchAdviceReferences = [],
        array $receivingAdviceReferences = [],
        array $deliveryNoteReferences = [],
        array $invoiceReferences = [],
        ?InvoiceSuitePriceGrossDTO $grossPrice = null,
        ?InvoiceSuitePriceNetDTO $netPrice = null,
        ?InvoiceSuiteQuantityDTO $quantityBilled = null,
        ?InvoiceSuiteQuantityDTO $quantityChargeFree = null,
        ?InvoiceSuiteQuantityDTO $quantityPackage = null,
        ?InvoiceSuitePartyDTO $shipToParty = null,
        ?InvoiceSuitePartyDTO $ultimateShipToParty = null,
    ) {
        $this->setLineId($lineId);
        $this->setParentLineId($parentLineId);
        $this->setLineStatus($lineStatus);
        $this->setLineStatusReason($lineStatusReason);
        $this->setNote($note);
        $this->setProduct($product);
        $this->setSellerOrderReferences($sellerOrderReferences);
        $this->setBuyerOrderReferences($buyerOrderReferences);
        $this->setQuotationReferences($quotationReferences);
        $this->setContractReferences($contractReferences);
        $this->setAdditionalReferences($additionalReferences);
        $this->setUltimateCustomerOrderReferences($ultimateCustomerOrderReferences);
        $this->setDespatchAdviceReferences($despatchAdviceReferences);
        $this->setReceivingAdviceReferences($receivingAdviceReferences);
        $this->setDeliveryNoteReferences($deliveryNoteReferences);
        $this->setInvoiceReferences($invoiceReferences);
        $this->setGrossPrice($grossPrice);
        $this->setNetPrice($netPrice);
        $this->setQuantityBilled($quantityBilled);
        $this->setQuantityChargeFree($quantityChargeFree);
        $this->setQuantityPackage($quantityPackage);
        $this->setShipToParty($shipToParty);
        $this->setUltimateShipToParty($ultimateShipToParty);
    }

    /**
     * Returns the identification of the position
     *
     * @return string|null
     */
    public function getLineId(): ?string
    {
        return $this->lineId;
    }

    /**
     * Sets the identification of the position
     *
     * @param string|null $lineId The identification of the position
     * @return self
     */
    public function setLineId(?string $lineId): self
    {
        $this->lineId = $lineId;

        return $this;
    }

    /**
     * Returns the identification of the parent position
     *
     * @return string|null
     */
    public function getParentLineId(): ?string
    {
        return $this->parentLineId;
    }

    /**
     * Sets the identification of the parent position
     *
     * @param string|null $parentLineId The identification of the parent position
     * @return self
     */
    public function setParentLineId(?string $parentLineId): self
    {
        $this->parentLineId = $parentLineId;

        return $this;
    }

    /**
     * Returns the indication whether the invoice item contains prices that must be taken into account when calculating the invoice amount or whether only information is included
     *
     * @return string|null
     */
    public function getLineStatus(): ?string
    {
        return $this->lineStatus;
    }

    /**
     * Sets the indication whether the invoice item contains prices that must be taken into account when calculating the invoice amount or whether only information is included
     *
     * @param string|null $lineStatus The indication whether the invoice item contains prices that must be taken into account when calculating the invoice amount or whether only information is included
     * @return self
     */
    public function setLineStatus(?string $lineStatus): self
    {
        $this->lineStatus = $lineStatus;

        return $this;
    }

    /**
     * Returns the type to specify whether the invoice line is
     *
     * @return string|null
     */
    public function getLineStatusReason(): ?string
    {
        return $this->lineStatusReason;
    }

    /**
     * Sets the type to specify whether the invoice line is
     *
     * @param string|null $lineStatusReason The type to specify whether the invoice line is
     * @return self
     */
    public function setLineStatusReason(?string $lineStatusReason): self
    {
        $this->lineStatusReason = $lineStatusReason;

        return $this;
    }

    /**
     * Returns the notes for this position
     *
     * @return array<InvoiceSuiteNoteDTO>
     */
    public function getNote(): array
    {
        return $this->note;
    }

    /**
     * Sets the notes for this position
     *
     * @param array<InvoiceSuiteNoteDTO> $note The notes for this position
     * @return self
     */
    public function setNote(array $note): self
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Add single The notes for this position
     *
     * @param InvoiceSuiteNoteDTO $note The notes for this position
     * @return self
     */
    public function addNote(InvoiceSuiteNoteDTO $note): self
    {
        $this->note[] = $note;

        return $this;
    }

    /**
     * Get first The notes for this position
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function firstNote(callable $callback, ?callable $callbackElse = null): self
    {
        if (($note = reset($this->note)) !== false) {
            $callback($note);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get next The notes for this position
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function nextNote(callable $callback, ?callable $callbackElse = null): self
    {
        if (($note = next($this->note)) !== false) {
            $callback($note);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get previous The notes for this position
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function previousNote(callable $callback, ?callable $callbackElse = null): self
    {
        if (($note = prev($this->note)) !== false) {
            $callback($note);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get last The notes for this position
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function lastNote(callable $callback, ?callable $callbackElse = null): self
    {
        if (($note = end($this->note)) !== false) {
            $callback($note);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Loop over The notes for this position and execute callback
     *
     * @param callable $callback Callback to execute for each item
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @param int|null $limit Maximum number of loops
     * @return self
     */
    public function forEachNote(callable $callback, ?callable $callbackElse = null, ?int $limit = null): self
    {
        $count = 0;

        foreach ($this->note as $note) {
            if ($limit !== null && $count >= $limit) {
                break;
            }

            $count++;

            $callback($note);
        }

        if ($count === 0 && !is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Returns the product for this position
     *
     * @return InvoiceSuiteProductDTO|null
     */
    public function getProduct(): ?InvoiceSuiteProductDTO
    {
        return $this->product;
    }

    /**
     * Sets the product for this position
     *
     * @param InvoiceSuiteProductDTO|null $product The product for this position
     * @return self
     */
    public function setProduct(?InvoiceSuiteProductDTO $product): self
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Returns the associated seller's order confirmation (line reference)
     *
     * @return array<InvoiceSuiteReferenceLineDTO>
     */
    public function getSellerOrderReferences(): array
    {
        return $this->sellerOrderReferences;
    }

    /**
     * Sets the associated seller's order confirmation (line reference)
     *
     * @param array<InvoiceSuiteReferenceLineDTO> $sellerOrderReferences The associated seller's order confirmation (line reference)
     * @return self
     */
    public function setSellerOrderReferences(array $sellerOrderReferences): self
    {
        $this->sellerOrderReferences = $sellerOrderReferences;

        return $this;
    }

    /**
     * Add single The associated seller's order confirmation (line reference)
     *
     * @param InvoiceSuiteReferenceLineDTO $sellerOrderReference The associated seller's order confirmation (line reference)
     * @return self
     */
    public function addSellerOrderReference(InvoiceSuiteReferenceLineDTO $sellerOrderReference): self
    {
        $this->sellerOrderReferences[] = $sellerOrderReference;

        return $this;
    }

    /**
     * Get first The associated seller's order confirmation (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function firstSellerOrderReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($sellerOrderReference = reset($this->sellerOrderReferences)) !== false) {
            $callback($sellerOrderReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get next The associated seller's order confirmation (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function nextSellerOrderReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($sellerOrderReference = next($this->sellerOrderReferences)) !== false) {
            $callback($sellerOrderReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get previous The associated seller's order confirmation (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function previousSellerOrderReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($sellerOrderReference = prev($this->sellerOrderReferences)) !== false) {
            $callback($sellerOrderReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get last The associated seller's order confirmation (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function lastSellerOrderReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($sellerOrderReference = end($this->sellerOrderReferences)) !== false) {
            $callback($sellerOrderReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Loop over The associated seller's order confirmation (line reference) and execute callback
     *
     * @param callable $callback Callback to execute for each item
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @param int|null $limit Maximum number of loops
     * @return self
     */
    public function forEachSellerOrderReference(
        callable $callback,
        ?callable $callbackElse = null,
        ?int $limit = null,
    ): self {
        $count = 0;

        foreach ($this->sellerOrderReferences as $sellerOrderReference) {
            if ($limit !== null && $count >= $limit) {
                break;
            }

            $count++;

            $callback($sellerOrderReference);
        }

        if ($count === 0 && !is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Returns the associated buyer's order (line reference)
     *
     * @return array<InvoiceSuiteReferenceLineDTO>
     */
    public function getBuyerOrderReferences(): array
    {
        return $this->buyerOrderReferences;
    }

    /**
     * Sets the associated buyer's order (line reference)
     *
     * @param array<InvoiceSuiteReferenceLineDTO> $buyerOrderReferences The associated buyer's order (line reference)
     * @return self
     */
    public function setBuyerOrderReferences(array $buyerOrderReferences): self
    {
        $this->buyerOrderReferences = $buyerOrderReferences;

        return $this;
    }

    /**
     * Add single The associated buyer's order (line reference)
     *
     * @param InvoiceSuiteReferenceLineDTO $buyerOrderReference The associated buyer's order (line reference)
     * @return self
     */
    public function addBuyerOrderReference(InvoiceSuiteReferenceLineDTO $buyerOrderReference): self
    {
        $this->buyerOrderReferences[] = $buyerOrderReference;

        return $this;
    }

    /**
     * Get first The associated buyer's order (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function firstBuyerOrderReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($buyerOrderReference = reset($this->buyerOrderReferences)) !== false) {
            $callback($buyerOrderReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get next The associated buyer's order (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function nextBuyerOrderReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($buyerOrderReference = next($this->buyerOrderReferences)) !== false) {
            $callback($buyerOrderReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get previous The associated buyer's order (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function previousBuyerOrderReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($buyerOrderReference = prev($this->buyerOrderReferences)) !== false) {
            $callback($buyerOrderReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get last The associated buyer's order (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function lastBuyerOrderReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($buyerOrderReference = end($this->buyerOrderReferences)) !== false) {
            $callback($buyerOrderReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Loop over The associated buyer's order (line reference) and execute callback
     *
     * @param callable $callback Callback to execute for each item
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @param int|null $limit Maximum number of loops
     * @return self
     */
    public function forEachBuyerOrderReference(
        callable $callback,
        ?callable $callbackElse = null,
        ?int $limit = null,
    ): self {
        $count = 0;

        foreach ($this->buyerOrderReferences as $buyerOrderReference) {
            if ($limit !== null && $count >= $limit) {
                break;
            }

            $count++;

            $callback($buyerOrderReference);
        }

        if ($count === 0 && !is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Returns the associated quotation (line reference)
     *
     * @return array<InvoiceSuiteReferenceLineDTO>
     */
    public function getQuotationReferences(): array
    {
        return $this->quotationReferences;
    }

    /**
     * Sets the associated quotation (line reference)
     *
     * @param array<InvoiceSuiteReferenceLineDTO> $quotationReferences The associated quotation (line reference)
     * @return self
     */
    public function setQuotationReferences(array $quotationReferences): self
    {
        $this->quotationReferences = $quotationReferences;

        return $this;
    }

    /**
     * Add single The associated quotation (line reference)
     *
     * @param InvoiceSuiteReferenceLineDTO $quotationReference The associated quotation (line reference)
     * @return self
     */
    public function addQuotationReference(InvoiceSuiteReferenceLineDTO $quotationReference): self
    {
        $this->quotationReferences[] = $quotationReference;

        return $this;
    }

    /**
     * Get first The associated quotation (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function firstQuotationReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($quotationReference = reset($this->quotationReferences)) !== false) {
            $callback($quotationReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get next The associated quotation (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function nextQuotationReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($quotationReference = next($this->quotationReferences)) !== false) {
            $callback($quotationReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get previous The associated quotation (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function previousQuotationReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($quotationReference = prev($this->quotationReferences)) !== false) {
            $callback($quotationReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get last The associated quotation (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function lastQuotationReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($quotationReference = end($this->quotationReferences)) !== false) {
            $callback($quotationReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Loop over The associated quotation (line reference) and execute callback
     *
     * @param callable $callback Callback to execute for each item
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @param int|null $limit Maximum number of loops
     * @return self
     */
    public function forEachQuotationReference(
        callable $callback,
        ?callable $callbackElse = null,
        ?int $limit = null,
    ): self {
        $count = 0;

        foreach ($this->quotationReferences as $quotationReference) {
            if ($limit !== null && $count >= $limit) {
                break;
            }

            $count++;

            $callback($quotationReference);
        }

        if ($count === 0 && !is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Returns the associated contract (line reference)
     *
     * @return array<InvoiceSuiteReferenceLineDTO>
     */
    public function getContractReferences(): array
    {
        return $this->contractReferences;
    }

    /**
     * Sets the associated contract (line reference)
     *
     * @param array<InvoiceSuiteReferenceLineDTO> $contractReferences The associated contract (line reference)
     * @return self
     */
    public function setContractReferences(array $contractReferences): self
    {
        $this->contractReferences = $contractReferences;

        return $this;
    }

    /**
     * Add single The associated contract (line reference)
     *
     * @param InvoiceSuiteReferenceLineDTO $contractReference The associated contract (line reference)
     * @return self
     */
    public function addContractReference(InvoiceSuiteReferenceLineDTO $contractReference): self
    {
        $this->contractReferences[] = $contractReference;

        return $this;
    }

    /**
     * Get first The associated contract (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function firstContractReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($contractReference = reset($this->contractReferences)) !== false) {
            $callback($contractReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get next The associated contract (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function nextContractReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($contractReference = next($this->contractReferences)) !== false) {
            $callback($contractReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get previous The associated contract (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function previousContractReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($contractReference = prev($this->contractReferences)) !== false) {
            $callback($contractReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get last The associated contract (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function lastContractReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($contractReference = end($this->contractReferences)) !== false) {
            $callback($contractReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Loop over The associated contract (line reference) and execute callback
     *
     * @param callable $callback Callback to execute for each item
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @param int|null $limit Maximum number of loops
     * @return self
     */
    public function forEachContractReference(
        callable $callback,
        ?callable $callbackElse = null,
        ?int $limit = null,
    ): self {
        $count = 0;

        foreach ($this->contractReferences as $contractReference) {
            if ($limit !== null && $count >= $limit) {
                break;
            }

            $count++;

            $callback($contractReference);
        }

        if ($count === 0 && !is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Returns the additional associated document (line reference)
     *
     * @return array<InvoiceSuiteReferenceLineExtDTO>
     */
    public function getAdditionalReferences(): array
    {
        return $this->additionalReferences;
    }

    /**
     * Sets the additional associated document (line reference)
     *
     * @param array<InvoiceSuiteReferenceLineExtDTO> $additionalReferences The additional associated document (line reference)
     * @return self
     */
    public function setAdditionalReferences(array $additionalReferences): self
    {
        $this->additionalReferences = $additionalReferences;

        return $this;
    }

    /**
     * Add single The additional associated document (line reference)
     *
     * @param InvoiceSuiteReferenceLineExtDTO $additionalReference The additional associated document (line reference)
     * @return self
     */
    public function addAdditionalReference(InvoiceSuiteReferenceLineExtDTO $additionalReference): self
    {
        $this->additionalReferences[] = $additionalReference;

        return $this;
    }

    /**
     * Get first The additional associated document (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function firstAdditionalReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($additionalReference = reset($this->additionalReferences)) !== false) {
            $callback($additionalReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get next The additional associated document (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function nextAdditionalReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($additionalReference = next($this->additionalReferences)) !== false) {
            $callback($additionalReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get previous The additional associated document (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function previousAdditionalReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($additionalReference = prev($this->additionalReferences)) !== false) {
            $callback($additionalReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get last The additional associated document (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function lastAdditionalReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($additionalReference = end($this->additionalReferences)) !== false) {
            $callback($additionalReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Loop over The additional associated document (line reference) and execute callback
     *
     * @param callable $callback Callback to execute for each item
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @param int|null $limit Maximum number of loops
     * @return self
     */
    public function forEachAdditionalReference(
        callable $callback,
        ?callable $callbackElse = null,
        ?int $limit = null,
    ): self {
        $count = 0;

        foreach ($this->additionalReferences as $additionalReference) {
            if ($limit !== null && $count >= $limit) {
                break;
            }

            $count++;

            $callback($additionalReference);
        }

        if ($count === 0 && !is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Returns the ultimate customer order reference (line reference)
     *
     * @return array<InvoiceSuiteReferenceLineDTO>
     */
    public function getUltimateCustomerOrderReferences(): array
    {
        return $this->ultimateCustomerOrderReferences;
    }

    /**
     * Sets the ultimate customer order reference (line reference)
     *
     * @param array<InvoiceSuiteReferenceLineDTO> $ultimateCustomerOrderReferences The ultimate customer order reference (line reference)
     * @return self
     */
    public function setUltimateCustomerOrderReferences(array $ultimateCustomerOrderReferences): self
    {
        $this->ultimateCustomerOrderReferences = $ultimateCustomerOrderReferences;

        return $this;
    }

    /**
     * Add single The ultimate customer order reference (line reference)
     *
     * @param InvoiceSuiteReferenceLineDTO $ultimateCustomerOrderReference The ultimate customer order reference (line reference)
     * @return self
     */
    public function addUltimateCustomerOrderReference(
        InvoiceSuiteReferenceLineDTO $ultimateCustomerOrderReference,
    ): self {
        $this->ultimateCustomerOrderReferences[] = $ultimateCustomerOrderReference;

        return $this;
    }

    /**
     * Get first The ultimate customer order reference (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function firstUltimateCustomerOrderReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($ultimateCustomerOrderReference = reset($this->ultimateCustomerOrderReferences)) !== false) {
            $callback($ultimateCustomerOrderReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get next The ultimate customer order reference (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function nextUltimateCustomerOrderReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($ultimateCustomerOrderReference = next($this->ultimateCustomerOrderReferences)) !== false) {
            $callback($ultimateCustomerOrderReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get previous The ultimate customer order reference (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function previousUltimateCustomerOrderReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($ultimateCustomerOrderReference = prev($this->ultimateCustomerOrderReferences)) !== false) {
            $callback($ultimateCustomerOrderReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get last The ultimate customer order reference (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function lastUltimateCustomerOrderReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($ultimateCustomerOrderReference = end($this->ultimateCustomerOrderReferences)) !== false) {
            $callback($ultimateCustomerOrderReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Loop over The ultimate customer order reference (line reference) and execute callback
     *
     * @param callable $callback Callback to execute for each item
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @param int|null $limit Maximum number of loops
     * @return self
     */
    public function forEachUltimateCustomerOrderReference(
        callable $callback,
        ?callable $callbackElse = null,
        ?int $limit = null,
    ): self {
        $count = 0;

        foreach ($this->ultimateCustomerOrderReferences as $ultimateCustomerOrderReference) {
            if ($limit !== null && $count >= $limit) {
                break;
            }

            $count++;

            $callback($ultimateCustomerOrderReference);
        }

        if ($count === 0 && !is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Returns the despatch advice reference (line reference)
     *
     * @return array<InvoiceSuiteReferenceLineDTO>
     */
    public function getDespatchAdviceReferences(): array
    {
        return $this->despatchAdviceReferences;
    }

    /**
     * Sets the despatch advice reference (line reference)
     *
     * @param array<InvoiceSuiteReferenceLineDTO> $despatchAdviceReferences The despatch advice reference (line reference)
     * @return self
     */
    public function setDespatchAdviceReferences(array $despatchAdviceReferences): self
    {
        $this->despatchAdviceReferences = $despatchAdviceReferences;

        return $this;
    }

    /**
     * Add single The despatch advice reference (line reference)
     *
     * @param InvoiceSuiteReferenceLineDTO $despatchAdviceReference The despatch advice reference (line reference)
     * @return self
     */
    public function addDespatchAdviceReference(InvoiceSuiteReferenceLineDTO $despatchAdviceReference): self
    {
        $this->despatchAdviceReferences[] = $despatchAdviceReference;

        return $this;
    }

    /**
     * Get first The despatch advice reference (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function firstDespatchAdviceReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($despatchAdviceReference = reset($this->despatchAdviceReferences)) !== false) {
            $callback($despatchAdviceReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get next The despatch advice reference (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function nextDespatchAdviceReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($despatchAdviceReference = next($this->despatchAdviceReferences)) !== false) {
            $callback($despatchAdviceReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get previous The despatch advice reference (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function previousDespatchAdviceReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($despatchAdviceReference = prev($this->despatchAdviceReferences)) !== false) {
            $callback($despatchAdviceReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get last The despatch advice reference (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function lastDespatchAdviceReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($despatchAdviceReference = end($this->despatchAdviceReferences)) !== false) {
            $callback($despatchAdviceReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Loop over The despatch advice reference (line reference) and execute callback
     *
     * @param callable $callback Callback to execute for each item
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @param int|null $limit Maximum number of loops
     * @return self
     */
    public function forEachDespatchAdviceReference(
        callable $callback,
        ?callable $callbackElse = null,
        ?int $limit = null,
    ): self {
        $count = 0;

        foreach ($this->despatchAdviceReferences as $despatchAdviceReference) {
            if ($limit !== null && $count >= $limit) {
                break;
            }

            $count++;

            $callback($despatchAdviceReference);
        }

        if ($count === 0 && !is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Returns the receiving advice reference (line reference)
     *
     * @return array<InvoiceSuiteReferenceLineDTO>
     */
    public function getReceivingAdviceReferences(): array
    {
        return $this->receivingAdviceReferences;
    }

    /**
     * Sets the receiving advice reference (line reference)
     *
     * @param array<InvoiceSuiteReferenceLineDTO> $receivingAdviceReferences The receiving advice reference (line reference)
     * @return self
     */
    public function setReceivingAdviceReferences(array $receivingAdviceReferences): self
    {
        $this->receivingAdviceReferences = $receivingAdviceReferences;

        return $this;
    }

    /**
     * Add single The receiving advice reference (line reference)
     *
     * @param InvoiceSuiteReferenceLineDTO $receivingAdviceReference The receiving advice reference (line reference)
     * @return self
     */
    public function addReceivingAdviceReference(InvoiceSuiteReferenceLineDTO $receivingAdviceReference): self
    {
        $this->receivingAdviceReferences[] = $receivingAdviceReference;

        return $this;
    }

    /**
     * Get first The receiving advice reference (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function firstReceivingAdviceReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($receivingAdviceReference = reset($this->receivingAdviceReferences)) !== false) {
            $callback($receivingAdviceReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get next The receiving advice reference (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function nextReceivingAdviceReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($receivingAdviceReference = next($this->receivingAdviceReferences)) !== false) {
            $callback($receivingAdviceReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get previous The receiving advice reference (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function previousReceivingAdviceReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($receivingAdviceReference = prev($this->receivingAdviceReferences)) !== false) {
            $callback($receivingAdviceReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get last The receiving advice reference (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function lastReceivingAdviceReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($receivingAdviceReference = end($this->receivingAdviceReferences)) !== false) {
            $callback($receivingAdviceReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Loop over The receiving advice reference (line reference) and execute callback
     *
     * @param callable $callback Callback to execute for each item
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @param int|null $limit Maximum number of loops
     * @return self
     */
    public function forEachReceivingAdviceReference(
        callable $callback,
        ?callable $callbackElse = null,
        ?int $limit = null,
    ): self {
        $count = 0;

        foreach ($this->receivingAdviceReferences as $receivingAdviceReference) {
            if ($limit !== null && $count >= $limit) {
                break;
            }

            $count++;

            $callback($receivingAdviceReference);
        }

        if ($count === 0 && !is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Returns the delivery note reference (line reference)
     *
     * @return array<InvoiceSuiteReferenceLineDTO>
     */
    public function getDeliveryNoteReferences(): array
    {
        return $this->deliveryNoteReferences;
    }

    /**
     * Sets the delivery note reference (line reference)
     *
     * @param array<InvoiceSuiteReferenceLineDTO> $deliveryNoteReferences The delivery note reference (line reference)
     * @return self
     */
    public function setDeliveryNoteReferences(array $deliveryNoteReferences): self
    {
        $this->deliveryNoteReferences = $deliveryNoteReferences;

        return $this;
    }

    /**
     * Add single The delivery note reference (line reference)
     *
     * @param InvoiceSuiteReferenceLineDTO $deliveryNoteReference The delivery note reference (line reference)
     * @return self
     */
    public function addDeliveryNoteReference(InvoiceSuiteReferenceLineDTO $deliveryNoteReference): self
    {
        $this->deliveryNoteReferences[] = $deliveryNoteReference;

        return $this;
    }

    /**
     * Get first The delivery note reference (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function firstDeliveryNoteReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($deliveryNoteReference = reset($this->deliveryNoteReferences)) !== false) {
            $callback($deliveryNoteReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get next The delivery note reference (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function nextDeliveryNoteReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($deliveryNoteReference = next($this->deliveryNoteReferences)) !== false) {
            $callback($deliveryNoteReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get previous The delivery note reference (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function previousDeliveryNoteReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($deliveryNoteReference = prev($this->deliveryNoteReferences)) !== false) {
            $callback($deliveryNoteReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get last The delivery note reference (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function lastDeliveryNoteReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($deliveryNoteReference = end($this->deliveryNoteReferences)) !== false) {
            $callback($deliveryNoteReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Loop over The delivery note reference (line reference) and execute callback
     *
     * @param callable $callback Callback to execute for each item
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @param int|null $limit Maximum number of loops
     * @return self
     */
    public function forEachDeliveryNoteReference(
        callable $callback,
        ?callable $callbackElse = null,
        ?int $limit = null,
    ): self {
        $count = 0;

        foreach ($this->deliveryNoteReferences as $deliveryNoteReference) {
            if ($limit !== null && $count >= $limit) {
                break;
            }

            $count++;

            $callback($deliveryNoteReference);
        }

        if ($count === 0 && !is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Returns the additional invoice document (line reference)
     *
     * @return array<InvoiceSuiteReferenceLineExtDTO>
     */
    public function getInvoiceReferences(): array
    {
        return $this->invoiceReferences;
    }

    /**
     * Sets the additional invoice document (line reference)
     *
     * @param array<InvoiceSuiteReferenceLineExtDTO> $invoiceReferences The additional invoice document (line reference)
     * @return self
     */
    public function setInvoiceReferences(array $invoiceReferences): self
    {
        $this->invoiceReferences = $invoiceReferences;

        return $this;
    }

    /**
     * Add single The additional invoice document (line reference)
     *
     * @param InvoiceSuiteReferenceLineExtDTO $invoiceReference The additional invoice document (line reference)
     * @return self
     */
    public function addInvoiceReference(InvoiceSuiteReferenceLineExtDTO $invoiceReference): self
    {
        $this->invoiceReferences[] = $invoiceReference;

        return $this;
    }

    /**
     * Get first The additional invoice document (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function firstInvoiceReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($invoiceReference = reset($this->invoiceReferences)) !== false) {
            $callback($invoiceReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get next The additional invoice document (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function nextInvoiceReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($invoiceReference = next($this->invoiceReferences)) !== false) {
            $callback($invoiceReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get previous The additional invoice document (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function previousInvoiceReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($invoiceReference = prev($this->invoiceReferences)) !== false) {
            $callback($invoiceReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get last The additional invoice document (line reference)
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function lastInvoiceReference(callable $callback, ?callable $callbackElse = null): self
    {
        if (($invoiceReference = end($this->invoiceReferences)) !== false) {
            $callback($invoiceReference);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Loop over The additional invoice document (line reference) and execute callback
     *
     * @param callable $callback Callback to execute for each item
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @param int|null $limit Maximum number of loops
     * @return self
     */
    public function forEachInvoiceReference(
        callable $callback,
        ?callable $callbackElse = null,
        ?int $limit = null,
    ): self {
        $count = 0;

        foreach ($this->invoiceReferences as $invoiceReference) {
            if ($limit !== null && $count >= $limit) {
                break;
            }

            $count++;

            $callback($invoiceReference);
        }

        if ($count === 0 && !is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Returns the gross price
     *
     * @return InvoiceSuitePriceGrossDTO|null
     */
    public function getGrossPrice(): ?InvoiceSuitePriceGrossDTO
    {
        return $this->grossPrice;
    }

    /**
     * Sets the gross price
     *
     * @param InvoiceSuitePriceGrossDTO|null $grossPrice The gross price
     * @return self
     */
    public function setGrossPrice(?InvoiceSuitePriceGrossDTO $grossPrice): self
    {
        $this->grossPrice = $grossPrice;

        return $this;
    }

    /**
     * Returns the net price
     *
     * @return InvoiceSuitePriceNetDTO|null
     */
    public function getNetPrice(): ?InvoiceSuitePriceNetDTO
    {
        return $this->netPrice;
    }

    /**
     * Sets the net price
     *
     * @param InvoiceSuitePriceNetDTO|null $netPrice The net price
     * @return self
     */
    public function setNetPrice(?InvoiceSuitePriceNetDTO $netPrice): self
    {
        $this->netPrice = $netPrice;

        return $this;
    }

    /**
     * Returns the billed quantity
     *
     * @return InvoiceSuiteQuantityDTO|null
     */
    public function getQuantityBilled(): ?InvoiceSuiteQuantityDTO
    {
        return $this->quantityBilled;
    }

    /**
     * Sets the billed quantity
     *
     * @param InvoiceSuiteQuantityDTO|null $quantityBilled The billed quantity
     * @return self
     */
    public function setQuantityBilled(?InvoiceSuiteQuantityDTO $quantityBilled): self
    {
        $this->quantityBilled = $quantityBilled;

        return $this;
    }

    /**
     * Returns the charge-free quantity
     *
     * @return InvoiceSuiteQuantityDTO|null
     */
    public function getQuantityChargeFree(): ?InvoiceSuiteQuantityDTO
    {
        return $this->quantityChargeFree;
    }

    /**
     * Sets the charge-free quantity
     *
     * @param InvoiceSuiteQuantityDTO|null $quantityChargeFree The charge-free quantity
     * @return self
     */
    public function setQuantityChargeFree(?InvoiceSuiteQuantityDTO $quantityChargeFree): self
    {
        $this->quantityChargeFree = $quantityChargeFree;

        return $this;
    }

    /**
     * Returns the package quantity
     *
     * @return InvoiceSuiteQuantityDTO|null
     */
    public function getQuantityPackage(): ?InvoiceSuiteQuantityDTO
    {
        return $this->quantityPackage;
    }

    /**
     * Sets the package quantity
     *
     * @param InvoiceSuiteQuantityDTO|null $quantityPackage The package quantity
     * @return self
     */
    public function setQuantityPackage(?InvoiceSuiteQuantityDTO $quantityPackage): self
    {
        $this->quantityPackage = $quantityPackage;

        return $this;
    }

    /**
     * Returns the Ship-To Party
     *
     * @return InvoiceSuitePartyDTO|null
     */
    public function getShipToParty(): ?InvoiceSuitePartyDTO
    {
        return $this->shipToParty;
    }

    /**
     * Sets the Ship-To Party
     *
     * @param InvoiceSuitePartyDTO|null $shipToParty The Ship-To Party
     * @return self
     */
    public function setShipToParty(?InvoiceSuitePartyDTO $shipToParty): self
    {
        $this->shipToParty = $shipToParty;

        return $this;
    }

    /**
     * Returns the Ultimate Ship-To Party
     *
     * @return InvoiceSuitePartyDTO|null
     */
    public function getUltimateShipToParty(): ?InvoiceSuitePartyDTO
    {
        return $this->ultimateShipToParty;
    }

    /**
     * Sets the Ultimate Ship-To Party
     *
     * @param InvoiceSuitePartyDTO|null $ultimateShipToParty The Ultimate Ship-To Party
     * @return self
     */
    public function setUltimateShipToParty(?InvoiceSuitePartyDTO $ultimateShipToParty): self
    {
        $this->ultimateShipToParty = $ultimateShipToParty;

        return $this;
    }
}
