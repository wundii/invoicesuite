<?php

namespace horstoeko\invoicesuite\dto;

use DateTimeInterface;

/**
 * Class representing a DTO for...
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
class InvoiceSuiteReferenceDocumentDTO
{
    /**
     * Reference number
     *
     * @var string|null
     */
    protected ?string $referenceNumber = null;

    /**
     * Issue date of the reference
     *
     * @var DateTimeInterface|null
     */
    protected ?DateTimeInterface $referenceDate = null;

    /**
     * Constructor
     *
     * @param string|null $referenceNumber Reference number
     * @param DateTimeInterface|null $referenceDate Issue date of the reference
     */
    public function __construct(?string $referenceNumber = null, ?DateTimeInterface $referenceDate = null)
    {
        $this->setReferenceNumber($referenceNumber);
        $this->setReferenceDate($referenceDate);
    }

    /**
     * Returns reference number
     *
     * @return string|null
     */
    public function getReferenceNumber(): ?string
    {
        return $this->referenceNumber;
    }

    /**
     * Sets reference number
     *
     * @param string|null $referenceNumber Reference number
     * @return self
     */
    public function setReferenceNumber(?string $referenceNumber): self
    {
        $this->referenceNumber = $referenceNumber;

        return $this;
    }

    /**
     * Returns issue date of the reference
     *
     * @return DateTimeInterface|null
     */
    public function getReferenceDate(): ?DateTimeInterface
    {
        return $this->referenceDate;
    }

    /**
     * Sets issue date of the reference
     *
     * @param DateTimeInterface|null $referenceDate Issue date of the reference
     * @return self
     */
    public function setReferenceDate(?DateTimeInterface $referenceDate): self
    {
        $this->referenceDate = $referenceDate;

        return $this;
    }
}
