<?php

/**
 * This file is a part of horstoeko/invoicesuite.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\dto;

use DateTimeInterface;
use horstoeko\invoicesuite\utils\InvoiceSuiteAttachment;

/**
 * Class representing a DTO for...
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
class InvoiceSuiteReferenceDocumentLineExtDTO extends InvoiceSuiteReferenceDocumentLineDTO
{
    /**
     * The additional document type code
     *
     * @var string|null
     */
    protected ?string $typeCode = null;

    /**
     * The additional document reference-type code
     *
     * @var string|null
     */
    protected ?string $referenceTypeCode = null;

    /**
     * The additional document description
     *
     * @var string|null
     */
    protected ?string $description = null;

    /**
     * The additional document description
     *
     * @var InvoiceSuiteAttachment|null
     */
    protected ?InvoiceSuiteAttachment $attachment = null;

    /**
     * Constructor
     *
     * @param string|null $referenceNumber Reference number
     * @param string|null $referenceLineNumber Reference line number
     * @param DateTimeInterface|null $referenceDate Issue date of the reference
     * @param string|null $typeCode The additional document type code
     * @param string|null $referenceTypeCode The additional document reference-type code
     * @param string|null $description The additional document description
     * @param InvoiceSuiteAttachment|null $attachment The additional document description
     */
    public function __construct(
        ?string $referenceNumber = null,
        ?string $referenceLineNumber = null,
        ?DateTimeInterface $referenceDate = null,
        ?string $typeCode = null,
        ?string $referenceTypeCode = null,
        ?string $description = null,
        ?InvoiceSuiteAttachment $attachment = null,
    ) {
        parent::__construct($referenceNumber, $referenceLineNumber, $referenceDate);

        $this->setTypeCode($typeCode);
        $this->setReferenceTypeCode($referenceTypeCode);
        $this->setDescription($description);
        $this->setAttachment($attachment);
    }

    /**
     * Returns the additional document type code
     *
     * @return string|null
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Sets the additional document type code
     *
     * @param string|null $typeCode The additional document type code
     * @return self
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * Returns the additional document reference-type code
     *
     * @return string|null
     */
    public function getReferenceTypeCode(): ?string
    {
        return $this->referenceTypeCode;
    }

    /**
     * Sets the additional document reference-type code
     *
     * @param string|null $referenceTypeCode The additional document reference-type code
     * @return self
     */
    public function setReferenceTypeCode(?string $referenceTypeCode): self
    {
        $this->referenceTypeCode = $referenceTypeCode;

        return $this;
    }

    /**
     * Returns the additional document description
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets the additional document description
     *
     * @param string|null $description The additional document description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Returns the additional document description
     *
     * @return InvoiceSuiteAttachment|null
     */
    public function getAttachment(): ?InvoiceSuiteAttachment
    {
        return $this->attachment;
    }

    /**
     * Sets the additional document description
     *
     * @param InvoiceSuiteAttachment|null $attachment The additional document description
     * @return self
     */
    public function setAttachment(?InvoiceSuiteAttachment $attachment): self
    {
        $this->attachment = $attachment;

        return $this;
    }
}
