<?php

/**
 * This file is a part of horstoeko/invoicesuite
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\pdfdocumentproviders\zffxextended;

use horstoeko\invoicesuite\abstracts\InvoiceSuiteAbstractPdfDocumentFormatProvider;
use horstoeko\invoicesuite\documentproviders\zffxextended\InvoiceSuiteZfFxExtendedProvider as InvoiceSuiteDocumentZfFxExtendedProvider;
use horstoeko\invoicesuite\documentproviders\zffxextended\InvoiceSuiteZfFxExtendedProviderBuilder;
use horstoeko\invoicesuite\InvoiceSuiteDocumentBuilder;
use horstoeko\invoicesuite\pdfdocumentproviders\zffxextended\InvoiceSuiteZfFxExtendedProviderReader;
use horstoeko\invoicesuite\pdfutils\InvoiceSuitePdfExtractorAttachment;

class InvoiceSuiteZfFxExtendedProvider extends InvoiceSuiteAbstractPdfDocumentFormatProvider
{
    /**
     * @inheritDoc
     */
    public function getUniqueId(): string
    {
        return 'zffxextended';
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'The EXTENDED profile is an extension of EN 16931-1 to support more complex business processes (invoices ' .
            'in which several deliveries / delivery locations are billed, structured payment conditions, further information at ' .
            'item level to support warehousing, etc.)';
    }

    /**
     * @inheritDoc
     */
    public function getParameters(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function isReadableByPdfAttachment(InvoiceSuitePdfExtractorAttachment $attachment): bool
    {
        if (strcasecmp($attachment->getAttachmentFilename(), 'factur-x.xml') !== 0) {
            return false;
        }

        return (new InvoiceSuiteDocumentZfFxExtendedProvider())->isSatisfiableBySerializedContent($attachment->getAttachmentContent());
    }

    /**
     * @inheritDoc
     */
    public function isWriteableByDocumentContent(string $documentContent): bool
    {
        return (new InvoiceSuiteDocumentZfFxExtendedProvider())->isSatisfiableBySerializedContent($documentContent);
    }

    /**
     * @inheritDoc
     */
    public function getPdfReaderClassName(): string
    {
        return InvoiceSuiteZfFxExtendedProviderReader::class;
    }

    /**
     * @inheritDoc
     */
    public function getPdfBuilderClassName(): string
    {
        return "";
    }
}
