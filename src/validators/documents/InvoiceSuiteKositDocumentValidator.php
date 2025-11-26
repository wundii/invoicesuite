<?php

declare(strict_types=1);

/**
 * This file is a part of horstoeko/invoicesuite
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\validators\documents;

/**
 * Class representing the implementation for a KosIT Validator
 *
 * @category InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @see      https://github.com/horstoeko/invoicesuite
 */
class InvoiceSuiteKositDocumentValidator extends InvoiceSuiteAbstractDocumentValidator
{
    /**
     * The validation entry point
     *
     * @return self
     */
    public function validate(): self
    {
        return $this;
    }
}
