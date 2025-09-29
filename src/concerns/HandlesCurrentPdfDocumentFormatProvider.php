<?php

namespace horstoeko\invoicesuite\concerns;

use horstoeko\invoicesuite\abstracts\InvoiceSuiteAbstractPdfDocumentFormatProvider;

/**
 * Trait representing methods for handling the current format provider
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
trait HandlesCurrentPdfDocumentFormatProvider
{
    /**
     * The PDF format provider for which the serializer was created
     *
     * @var InvoiceSuiteAbstractPdfDocumentFormatProvider
     */
    protected $currentPdfDocumentFormatProvider;

    /**
     * Returns the requested PDF format provider
     *
     * @return InvoiceSuiteAbstractPdfDocumentFormatProvider|null
     */
    public function getCurrentPdfDocumentFormatProvider(): ?InvoiceSuiteAbstractPdfDocumentFormatProvider
    {
        return $this->currentPdfDocumentFormatProvider;
    }

    /**
     * Set the requested PDF format provider
     *
     * @param InvoiceSuiteAbstractPdfDocumentFormatProvider $newPdfDocumentFormatProvider
     * @return void
     */
    public function setCurrentPdfDocumentFormatProvider(InvoiceSuiteAbstractPdfDocumentFormatProvider $newPdfDocumentFormatProvider): void
    {
        $this->currentPdfDocumentFormatProvider = $newPdfDocumentFormatProvider;
    }

    /**
     * Resolve parameters from the requested PDF format provider
     *
     * @return array<string,mixed>
     */
    public function resolveCurrentPdfDocumentFormatProviderParameters(): array
    {
        return $this->currentPdfDocumentFormatProvider->getParameters();
    }

    /**
     * Returns true if a parameter exists for the requested PDF format provider
     *
     * @param string $parameterName
     * @return boolean
     */
    public function hasCurrentPdfDocumentFormatProviderParameter(string $parameterName): bool
    {
        return $this->currentPdfDocumentFormatProvider->hasFormatProviderParameter($parameterName);
    }

    /**
     * Returns the parameter value for the request parameter for the requested PDF format provider
     *
     * @param string $parameterName
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getCurrentPdfDocumentFormatProviderParameterValue(string $parameterName, $defaultValue)
    {
        return $this->currentPdfDocumentFormatProvider->getFormatProviderParameterValue($parameterName, $defaultValue);
    }
}
