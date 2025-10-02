<?php

/**
 * This file is a part of horstoeko/invoicesuite
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\pdf;

use horstoeko\invoicesuite\concerns\HandlesCurrentDocumentFormatProvider;
use horstoeko\invoicesuite\abstracts\InvoiceSuiteAbstractDocumentFormatProvider;

/**
 * Class representing the PDF document build
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
class InvoiceSuiteAbstractPdfConstructor
{
    use HandlesCurrentDocumentFormatProvider;

    /**
     * Internal buffer which holds the content of the invoice document
     *
     * @var string
     */
    private $rawDocumentContent;

    /**
     * Internal buffer which holds the content of the PDF document
     *
     * @var string
     */
    private $rawPdfContent;

    /**
     * Constructor
     *
     * @param InvoiceSuiteAbstractDocumentFormatProvider $newProvider
     * @param string $rawDocumentContent
     * @param string $rawPdfContent
     * @return self
     */
    public function __construct(
        InvoiceSuiteAbstractDocumentFormatProvider $newProvider,
        string $rawDocumentContent,
        string $rawPdfContent
    ) {
        $this->setCurrentDocumentFormatProvider($newProvider);
        $this->setRawDocumentContent($rawDocumentContent);
        $this->setRawPdfContent($rawPdfContent);
    }

    /**
     * Internal method to get the invoice document content
     *
     * @return string
     */
    protected function getRawDocumentContent(): string
    {
        return $this->rawDocumentContent;
    }

    /**
     * Internal method to set the invoice document content
     *
     * @param string $rawDocumentContent
     * @return InvoiceSuiteAbstractPdfConstructor
     */
    protected function setRawDocumentContent(string $rawDocumentContent): self
    {
        $this->rawDocumentContent = $rawDocumentContent;

        return $this;
    }

    /**
     * Internal method to get the PDF content
     *
     * @return string
     */
    protected function getRawPdfContent(): string
    {
        return $this->rawPdfContent;
    }

    /**
     * Internal method to set the PDF content
     *
     * @param string $rawPdfContent
     * @return self
     */
    protected function setRawPdfContent(string $rawPdfContent): self
    {
        $this->rawPdfContent = $rawPdfContent;

        return $this;
    }
}
