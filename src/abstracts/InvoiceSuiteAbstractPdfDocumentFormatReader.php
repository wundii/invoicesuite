<?php

/**
 * This file is a part of horstoeko/invoicesuite
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\abstracts;

use horstoeko\invoicesuite\concerns\HandlesPdfDocumentReaderObject;
use horstoeko\invoicesuite\concerns\HandlesCurrentPdfDocumentFormatProvider;

/**
 * Class representing methods for a PDF reader
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
abstract class InvoiceSuiteAbstractPdfDocumentFormatReader
{
    use HandlesCurrentPdfDocumentFormatProvider;
    use HandlesPdfDocumentReaderObject;

    /**
     * Constructor
     *
     * @param InvoiceSuiteAbstractPdfDocumentFormatProvider $newProvider
     */
    public function __construct(InvoiceSuiteAbstractPdfDocumentFormatProvider $newProvider)
    {
        $this->setCurrentPdfDocumentFormatProvider($newProvider);
    }

    /**
     * Initialize, Set contents to read
     *
     * @param string $fromDocumentContent
     * @return self
     */
    abstract public function setContents(string $fromDocumentContent): self;
}
