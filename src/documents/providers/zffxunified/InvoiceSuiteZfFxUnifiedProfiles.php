<?php

declare(strict_types=1);

/**
 * This file is a part of horstoeko/invoicesuite
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\documents\providers\zffxunified;

enum InvoiceSuiteZfFxUnifiedProfiles: int
{
    /**
     * MINIMUM Profile
     */
    case MINIMUM = 0;

    /**
     * BASICWL Profile
     */
    case BASICWL = 1;

    /**
     * BASIC Profile
     */
    case BASIC = 2;

    /**
     * EN16931 (COMFORT) Profile
     */
    case EN16931 = 3;

    /**
     * EXTENDED Profile
     */
    case EXTENDED = 4;

    /**
     * Get caption for the specified profile
     *
     * @return string
     */
    final public function getCaption(): string
    {
        return match ($this) {
            InvoiceSuiteZfFxUnifiedProfiles::MINIMUM => 'MINIMUM',
            InvoiceSuiteZfFxUnifiedProfiles::BASICWL => 'BASIC WL',
            InvoiceSuiteZfFxUnifiedProfiles::BASIC => 'BASIC',
            InvoiceSuiteZfFxUnifiedProfiles::EN16931 => 'EN16931 (COMFORT)',
            InvoiceSuiteZfFxUnifiedProfiles::EXTENDED => 'EXTENDED',
        };
    }

    /**
     * Get a logging message
     *
     * @return string
     */
    final public function getOnlyValidFromProfileMessage(): string
    {
        return sprintf('Only valid from profile %s', $this->getCaption());
    }
}
