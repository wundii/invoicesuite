<?php

/**
 * This file is a part of horstoeko/invoicesuite
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\abstracts;

use horstoeko\invoicesuite\InvoiceSuiteDocumentBuilder;
use horstoeko\invoicesuite\pdfutils\InvoiceSuitePdfExtractorAttachment;
use horstoeko\invoicesuite\abstracts\InvoiceSuiteAbstractPdfDocumentFormatReader;

/**
 * Class representing methods for a PDF document format provider definition
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
abstract class InvoiceSuiteAbstractPdfDocumentFormatProvider
{
    /**
     * The instance of the internal reader class
     *
     * @var InvoiceSuiteAbstractPdfDocumentFormatReader
     */
    public $readerInstance;

    /**
     * The intance of the internal builder class
     *
     * @var InvoiceSuiteAbstractPdfDocumentFormatBuilder
     */
    public $builderInstance;

    /**
     * Get the unique identificator for this PDF provider
     *
     * @return string
     */
    abstract public function getUniqueId(): string;

    /**
     * Get a short description for the PDF provider
     *
     * @return string
     */
    abstract public function getDescription(): string;

    /**
     * Get PDF provider parameters
     *
     * @return array<string,mixed>
     */
    abstract public function getParameters(): array;

    /**
     * Returns true when the format provider can handle (read) the specified PDF attachment
     *
     * @param InvoiceSuitePdfExtractorAttachment $attachment
     * @return boolean
     */
    abstract public function isReadableByPdfAttachment(InvoiceSuitePdfExtractorAttachment $attachment): bool;

    /**
     * Returns true when the PDF format provider can attach (write) the specified document content to a PDF
     *
     * @param string $documentContent
     * @return boolean
     */
    abstract public function isWriteableByDocumentContent(string $documentContent): bool;

    /**
     * Returns the reader classname for this PDF format provider
     *
     * @return string
     */
    abstract public function getPdfReaderClassName(): string;

    /**
     * Returns the builder classname for this PDF format provider
     *
     * @return string
     */
    abstract public function getPdfBuilderClassName(): string;

    /**
     * Create a new PDF reader instance
     *
     * @return InvoiceSuiteAbstractPdfDocumentFormatProvider
     */
    public function initPdfReader(): InvoiceSuiteAbstractPdfDocumentFormatProvider
    {
        $this->readerInstance = new ($this->getPdfReaderClassName())($this);

        return $this;
    }

    /**
     * Returns the PDF reader for this format provider
     *
     * @return InvoiceSuiteAbstractPdfDocumentFormatReader
     */
    public function getPdfReader(): InvoiceSuiteAbstractPdfDocumentFormatReader
    {
        return $this->readerInstance;
    }

    /**
     * Create a new PDF builder instance
     *
     * @return InvoiceSuiteAbstractPdfDocumentFormatProvider
     */
    public function initPdfBuilder(): InvoiceSuiteAbstractPdfDocumentFormatProvider
    {
        $this->builderInstance = new ($this->getPdfBuilderClassName())($this);

        return $this;
    }

    /**
     * Returns the PDF builder for this format provider
     *
     * @return InvoiceSuiteAbstractPdfDocumentFormatBuilder
     */
    public function getPdfBuilder(): InvoiceSuiteAbstractPdfDocumentFormatBuilder
    {
        return $this->builderInstance;
    }

    /**
     * Returns true if a parameter exists for the requested PDF format provider
     *
     * @param string $parameterName
     * @return boolean
     */
    public function hasFormatProviderParameter(string $parameterName): bool
    {
        return array_key_exists($parameterName, $this->getParameters());
    }

    /**
     * Returns the parameter value for the request parameter for the requested PDF format provider
     *
     * @param string $parameterName
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getFormatProviderParameterValue(string $parameterName, $defaultValue)
    {
        if (!$this->hasFormatProviderParameter($parameterName)) {
            return $defaultValue;
        }

        return $this->getParameters()[$parameterName];
    }
}