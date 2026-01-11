<?php

declare(strict_types=1);

/**
 * This file is a part of horstoeko/invoicesuite
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\visualizers\renderers;

use horstoeko\invoicesuite\InvoiceSuiteDocumentReader;
use horstoeko\invoicesuite\utils\InvoiceSuiteStringUtils;
use horstoeko\invoicesuite\visualizers\abstracts\InvoiceSuiteVisualizerAbstractRenderer;

/**
 * Class representing a renderer which hold the content as a non-empty string
 *
 * @category InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @see      https://github.com/horstoeko/invoicesuite
 */
class InvoiceSuiteVisualizerStringTemplateRenderer extends InvoiceSuiteVisualizerAbstractRenderer
{
    /**
     * {@inheritDoc}
     */
    public function templateExists(string $template): bool
    {
        return !InvoiceSuiteStringUtils::stringIsNullOrEmpty($template);
    }

    /**
     * {@inheritDoc}
     */
    public function render(InvoiceSuiteDocumentReader $document, string $template): string
    {
        return $template;
    }
}
