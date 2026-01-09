<?php

declare(strict_types=1);

/**
 * This file is a part of horstoeko/invoicesuite
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\visualizers\renderers;

use horstoeko\invoicesuite\documents\abstracts\InvoiceSuiteAbstractDocumentFormatReader;
use horstoeko\invoicesuite\visualizers\abstracts\InvoiceSuiteVisualizerAbstractRenderer;

/**
 * Class representing the markup renderer for Laravel environments (Blade engine)
 *
 * @category InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @see      https://github.com/horstoeko/invoicesuite
 */
class InvoiceSuiteVisualizerLaravelRenderer extends InvoiceSuiteVisualizerAbstractRenderer
{
    /**
     * {@inheritDoc}
     */
    public function templateExists(string $template): bool
    {
        if (!function_exists('view')) {
            return false;
        }

        // @phpstan-ignore argument.type
        $view = call_user_func_array('view', []);

        return $view->exists($template);
    }

    /**
     * {@inheritDoc}
     */
    public function render(InvoiceSuiteAbstractDocumentFormatReader $document, string $template): string
    {
        if (!function_exists('view')) {
            return '';
        }

        // @phpstan-ignore argument.type
        $view = call_user_func_array('view', [$template, ['document' => $document]]);

        return $view->render();
    }
}
