<?php

namespace horstoeko\invoicesuite\concerns;

use horstoeko\invoicesuite\InvoiceSuiteDocumentReader;

/**
 * Trait representing PDF reader document reader instance
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
trait HandlesPdfDocumentReaderObject
{
    /**
     * Reader instance
     *
     * @var InvoiceSuiteDocumentReader
     */
    protected $documentReaderObject;

    /**
     * Get the reader object
     *
     * @return InvoiceSuiteDocumentReader
     */
    public function getDocumentReaderObject(): InvoiceSuiteDocumentReader
    {
        return $this->documentReaderObject;
    }

    /**
     * Set the reader object
     *
     * @param InvoiceSuiteDocumentReader $documentReaderObject
     * @return self
     */
    public function setDocumentReaderObject(InvoiceSuiteDocumentReader $documentReaderObject): self
    {
        $this->documentReaderObject = $documentReaderObject;

        return $this;
    }
}
