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
use horstoeko\invoicesuite\concerns\HandlesPdfConstructorRawContents;

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
    use HandlesPdfConstructorRawContents;

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
}
