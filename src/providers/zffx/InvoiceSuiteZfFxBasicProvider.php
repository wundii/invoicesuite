<?php

namespace horstoeko\invoicesuite\providers\zffx;

use horstoeko\invoicesuite\models\zffx\rsm\CrossIndustryInvoice;
use horstoeko\invoicesuite\abstracts\InvoiceSuiteAbstractFormatProvider;

class InvoiceSuiteZfFxBasicProvider extends InvoiceSuiteAbstractFormatProvider
{
    /**
     * @inheritDoc
     */
    public function getUniqueId(): string
    {
        return 'zffxbasic';
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'The BASIC profile is a subset of EN 16931-1 and can be used for simple VAT-compliant invoices.';
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
        return ["zffxbasic"];
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
        return InvoiceSuiteZfFxBasicProviderReader::class;
    }

    /**
     * @inheritDoc
     */
    public function getBuilderClassName(): string
    {
        return InvoiceSuiteZfFxBasicProviderBuilder::class;
    }
}
