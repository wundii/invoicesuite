<?php

namespace horstoeko\invoicesuite\providers\zffx;

use horstoeko\invoicesuite\abstracts\InvoiceSuiteAbstractFormatProvider;
use horstoeko\invoicesuite\models\zffx\rsm\CrossIndustryInvoice;

class InvoiceSuiteZfFxBasicWlProvider extends InvoiceSuiteAbstractFormatProvider
{
    /**
     * @inheritDoc
     */
    public function getUniqueId(): string
    {
        return 'zffxbasicwl';
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'The BASIC WL profile does not contain any invoice items and therefore cannot display any VAT-compliant ' .
            'invoices. However, it contains all the information at document level that is required to post the invoice. ' .
            'It is therefore a booking aid.';
    }

    /**
     * @inheritDoc
     */
    public function getSerializerMetadataDirectories(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getSerializerHandlers(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getSerializerListeners(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getSerializerSubscribers(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getSerializerGroups(): array
    {
        return ["zffxbasicwl"];
    }

    /**
     * @inheritDoc
     */
    public function isSatisfiableBy(string $content): bool
    {
        return true;
    }

    /**
     * @inheritDoc
     */
    public function getRootClassName(): string
    {
        return CrossIndustryInvoice::class;
    }

    /**
     * @inheritDoc
     */
    public function getReaderClassName(): string
    {
        return InvoiceSuiteZfFxBasicWlProviderReader::class;
    }

    /**
     * @inheritDoc
     */
    public function getBuilderClassName(): string
    {
        return InvoiceSuiteZfFxBasicWlProviderBuilder::class;
    }
}
