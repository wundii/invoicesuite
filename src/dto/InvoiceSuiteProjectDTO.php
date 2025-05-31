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
class InvoiceSuiteProjectDTO
{
    /**
     * The project number
     *
     * @var string|null
     */
    protected ?string $referenceNumber = null;

    /**
     * The project name
     *
     * @var string|null
     */
    protected ?string $referenceName = null;

    /**
     * Constructor
     *
     * @param string|null $referenceNumber The project number
     * @param string|null $referenceName The project name
     */
    public function __construct(?string $referenceNumber = null, ?string $referenceName = null)
    {
        $this->setReferenceNumber($referenceNumber);
        $this->setReferenceName($referenceName);
    }

    /**
     * Returns the project number
     *
     * @return string|null
     */
    public function getReferenceNumber(): ?string
    {
        return $this->referenceNumber;
    }

    /**
     * Sets the project number
     *
     * @param string|null $referenceNumber The project number
     * @return self
     */
    public function setReferenceNumber(?string $referenceNumber): self
    {
        $this->referenceNumber = $referenceNumber;

        return $this;
    }

    /**
     * Returns the project name
     *
     * @return string|null
     */
    public function getReferenceName(): ?string
    {
        return $this->referenceName;
    }

    /**
     * Sets the project name
     *
     * @param string|null $referenceName The project name
     * @return self
     */
    public function setReferenceName(?string $referenceName): self
    {
        $this->referenceName = $referenceName;

        return $this;
    }
}
