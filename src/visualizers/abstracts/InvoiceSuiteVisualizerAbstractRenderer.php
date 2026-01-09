<?php

declare(strict_types=1);

/**
 * This file is a part of horstoeko/invoicesuite
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\visualizers\abstracts;

use horstoeko\invoicesuite\documents\abstracts\InvoiceSuiteAbstractDocumentFormatReader;

/**
 * Class representing the basics for a renderer
 *
 * @category InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @see      https://github.com/horstoeko/invoicesuite
 */
abstract class InvoiceSuiteVisualizerAbstractRenderer
{
    /**
     * Returns true if the given template exists, otherwise false
     *
     * @param  string $template
     * @return bool
     */
    abstract public function templateExists(string $template): bool;

    /**
     * Render the HTML markup for the document
     *
     * @param  InvoiceSuiteAbstractDocumentFormatReader $documentReader
     * @param  string                                   $template
     * @return string
     */
    abstract public function render(InvoiceSuiteAbstractDocumentFormatReader $documentReader, string $template): string;
}
