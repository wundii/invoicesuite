<?php

namespace horstoeko\invoicesuite\providers\zffx;

use horstoeko\invoicesuite\abstracts\InvoiceSuiteAbstractFormatProviderBuilder;
use horstoeko\invoicesuite\models\zffx\rsm\CrossIndustryInvoiceType;

class InvoiceSuiteZugferdFacturXProviderBuilder extends InvoiceSuiteAbstractFormatProviderBuilder
{
    /**
     * Returns the root object as a CrossIndustryInvoiceType
     *
     * @return CrossIndustryInvoiceType
     */
    protected function getCrossIndustryRootObject(): CrossIndustryInvoiceType
    {
        return $this->getRootObject();
    }

    /**
     * @inheritDoc
     */
    public function setDocumentNo(string $newDocumentNo): self
    {
        $this->getCrossIndustryRootObject()->getExchangedDocument()->getIDWithCreate()->setValue($newDocumentNo);

        return $this;
    }

}
