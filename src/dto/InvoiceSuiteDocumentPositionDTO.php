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
     * Constructor
     *
     * @param string|null $lineId The identification of the position
     * @param string|null $parentLineId The identification of the parent position
     * @param string|null $lineStatus The indication whether the invoice item contains prices that must be taken into account when calculating the invoice amount or whether only information is included
     * @param string|null $lineStatusReason The type to specify whether the invoice line is
     * @param array<InvoiceSuiteNoteDTO> $note The notes for this position
     * @param InvoiceSuiteProductDTO|null $product The product for this position
     */
    public function __construct(
        ?string $lineId = null,
        ?string $parentLineId = null,
        ?string $lineStatus = null,
        ?string $lineStatusReason = null,
        array $note = [],
        ?InvoiceSuiteProductDTO $product = null,
    ) {
        $this->setLineId($lineId);
        $this->setParentLineId($parentLineId);
        $this->setLineStatus($lineStatus);
        $this->setLineStatusReason($lineStatusReason);
        $this->setNote($note);
        $this->setProduct($product);
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
}
