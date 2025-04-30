<?php

namespace horstoeko\invoicesuite\providers\zffx;

use horstoeko\invoicesuite\models\zffx\rsm\CrossIndustryInvoice;
use horstoeko\invoicesuite\abstracts\InvoiceSuiteAbstractFormatProvider;

class InvoiceSuiteZfFxXRechnungProvider extends InvoiceSuiteAbstractFormatProvider
{
    /**
     * @inheritDoc
     */
    public function getUniqueId(): string
    {
        return 'zffxxrechnung';
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'The reference profile is based on the CIUS XRechnung, which is maintained by KoSIT. It represents an ' .
            'extension of EN 16931-1 with its own business rules, the national German laws and regulations. It is therefore more ' .
            'specific than the EN 16931 (COMFORT) profile.';
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
        return ["zffxen16931"];
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
        return InvoiceSuiteZfFxXRechnungProviderReader::class;
    }

    /**
     * @inheritDoc
     */
    public function getBuilderClassName(): string
    {
        return InvoiceSuiteZfFxXRechnungProviderBuilder::class;
    }
}
