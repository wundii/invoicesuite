<?php

/**
 * This file is a part of horstoeko/invoicesuite.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
class InvoiceSuiteNoteDTO
{
    /**
     * Free text containing unstructured information that is relevant to the invoice as a whole
     *
     * @var string|null
     */
    protected ?string $content = null;

    /**
     * Code to classify the content of the free text of the invoice
     *
     * @var string|null
     */
    protected ?string $contentCode = null;

    /**
     * Qualification of the free text for the invoice
     *
     * @var string|null
     */
    protected ?string $subjectCode = null;

    /**
     * Constructor
     *
     * @param string|null $content Free text containing unstructured information that is relevant to the invoice as a whole
     * @param string|null $contentCode Code to classify the content of the free text of the invoice
     * @param string|null $subjectCode Qualification of the free text for the invoice
     */
    public function __construct(?string $content = null, ?string $contentCode = null, ?string $subjectCode = null)
    {
        $this->setContent($content);
        $this->setContentCode($contentCode);
        $this->setSubjectCode($subjectCode);
    }

    /**
     * Returns free text containing unstructured information that is relevant to the invoice as a whole
     *
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * Sets free text containing unstructured information that is relevant to the invoice as a whole
     *
     * @param string|null $content Free text containing unstructured information that is relevant to the invoice as a whole
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Returns code to classify the content of the free text of the invoice
     *
     * @return string|null
     */
    public function getContentCode(): ?string
    {
        return $this->contentCode;
    }

    /**
     * Sets code to classify the content of the free text of the invoice
     *
     * @param string|null $contentCode Code to classify the content of the free text of the invoice
     * @return self
     */
    public function setContentCode(?string $contentCode): self
    {
        $this->contentCode = $contentCode;

        return $this;
    }

    /**
     * Returns qualification of the free text for the invoice
     *
     * @return string|null
     */
    public function getSubjectCode(): ?string
    {
        return $this->subjectCode;
    }

    /**
     * Sets qualification of the free text for the invoice
     *
     * @param string|null $subjectCode Qualification of the free text for the invoice
     * @return self
     */
    public function setSubjectCode(?string $subjectCode): self
    {
        $this->subjectCode = $subjectCode;

        return $this;
    }
}
