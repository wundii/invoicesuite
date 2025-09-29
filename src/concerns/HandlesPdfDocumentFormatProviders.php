<?php

namespace horstoeko\invoicesuite\concerns;

use horstoeko\invoicesuite\utils\InvoiceSuiteClassFinder;
use horstoeko\invoicesuite\exceptions\InvoiceSuiteFormatProviderNotFoundException;
use horstoeko\invoicesuite\abstracts\InvoiceSuiteAbstractPdfDocumentFormatProvider;

/**
 * Trait representing methods for handling format providers
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
trait HandlesPdfDocumentFormatProviders
{
    /**
     * List of registered PDF format providers
     *
     * @var array<InvoiceSuiteAbstractPdfDocumentFormatProvider>
     */
    protected $registeredPdfDocumentFormatProviders = [];

    /**
     * Get the list of registered PDF format providers
     *
     * @return array<InvoiceSuiteAbstractPdfDocumentFormatProvider>
     */
    public function getRegisteredPdfDocumentFormatProviders(): array
    {
        return $this->registeredPdfDocumentFormatProviders;
    }

    /**
     * Register another PDF format provider
     *
     * @param InvoiceSuiteAbstractPdfDocumentFormatProvider $invoiceSuiteAbstractPdfDocumentFormatProvider
     * @return static
     */
    public function registerPdfDocumentFormatProvider(InvoiceSuiteAbstractPdfDocumentFormatProvider $invoiceSuiteAbstractPdfDocumentFormatProvider): self
    {
        if (in_array($invoiceSuiteAbstractPdfDocumentFormatProvider, $this->registeredPdfDocumentFormatProviders)) {
            return $this;
        }

        $this->registeredPdfDocumentFormatProviders[] = $invoiceSuiteAbstractPdfDocumentFormatProvider;

        return $this;
    }

    /**
     * Remove an already defined PDF format provider
     *
     * @param InvoiceSuiteAbstractPdfDocumentFormatProvider $existingProvider
     * @return static
     */
    public function unregisterPdfDocumentFormatProvider(InvoiceSuiteAbstractPdfDocumentFormatProvider $existingProvider): self
    {
        if (($key = array_search($existingProvider, $this->registeredPdfDocumentFormatProviders, true)) === false) {
            return $this;
        }

        unset($this->registeredPdfDocumentFormatProviders[$key]);

        return $this;
    }

    /**
     * Find a PDF format provider by it's id
     *
     * @param string $formatProviderUniqueId
     * @return null|InvoiceSuiteAbstractPdfDocumentFormatProvider
     */
    public function findPdfDocumentFormatProviderByUniqueId(string $formatProviderUniqueId)
    {
        $formatProvider = array_filter($this->registeredPdfDocumentFormatProviders, fn($formatProvider) => strcasecmp($formatProvider->getUniqueId(), $formatProviderUniqueId) === 0);

        if ($formatProvider === []) {
            return null;
        }

        return reset($formatProvider);
    }

    /**
     * Find a PDF format provider by it's id. When no provider for the given unique id was found an exception is raised
     *
     * @param string $formatProviderUniqueId
     * @return null|InvoiceSuiteAbstractPdfDocumentFormatProvider
     * @throws InvoiceSuiteFormatProviderNotFoundException
     */
    public function findPdfDocumentFormatProviderByUniqueIdOrFail(string $formatProviderUniqueId)
    {
        $formatProvider = $this->findPdfDocumentFormatProviderByUniqueId($formatProviderUniqueId);

        if (is_null($formatProvider)) {
            throw new InvoiceSuiteFormatProviderNotFoundException($formatProviderUniqueId);
        }

        return $formatProvider;
    }

    /**
     * Initialize additionall PDF format providers
     *
     * @return static
     */
    public function resolveAvailablePdfDocumentFormatProviders(): self
    {
        $classFinder = InvoiceSuiteClassFinder::factory();
        $classesWhichAreFormatProviders = $classFinder->getClassesWhenItsSubClassOf(InvoiceSuiteAbstractPdfDocumentFormatProvider::class);

        foreach ($classesWhichAreFormatProviders as $classWhichIsFormatProvider) {
            $this->registerPdfDocumentFormatProvider(new $classWhichIsFormatProvider());
        }

        return $this;
    }
}
