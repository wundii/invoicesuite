<?php

namespace horstoeko\invoicesuite;

use horstoeko\invoicesuite\concerns\HandlesCallForwarding;
use horstoeko\invoicesuite\concerns\HandlesCurrentFormatProvider;
use horstoeko\invoicesuite\concerns\HandlesFormatProviders;
use horstoeko\invoicesuite\contracts\InvoiceSuiteBuilderContract;
use horstoeko\invoicesuite\exceptions\InvoiceSuiteFormatProviderNotFoundException;
use JMS\Serializer\Exception\InvalidArgumentException;
use JMS\Serializer\Exception\RuntimeException;

/**
 * Class representing the document builder
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
class InvoiceSuiteDocumentBuilder implements InvoiceSuiteBuilderContract
{
    use HandlesCallForwarding;
    use HandlesCurrentFormatProvider;
    use HandlesFormatProviders;

    /**
     * Create a new InvoiceDocumentBuilder instance for the given format provider
     *
     * @param string $formatProviderUniqueId
     * @return InvoiceSuiteDocumentBuilder
     */
    public static function createByProviderUniqueId(string $formatProviderUniqueId): self
    {
        return new static($formatProviderUniqueId);
    }

    /**
     * Constructor (hidden)
     *
     * @param string $formatProviderUniqueId
     * @return InvoiceSuiteDocumentBuilder
     * @throws InvoiceSuiteFormatProviderNotFoundException
     * @throws InvalidArgumentException
     * @throws RuntimeException
     */
    final protected function __construct(string $formatProviderUniqueId)
    {
        $this->resolveAvailableFormatProviders();
        $this->setCurrentFormatProvider($this->findFormatProviderByUniqueIdOrFail($formatProviderUniqueId));
        $this->getCurrentFormatProvider()->initBuilder();
    }

    /**
     * Dynamically pass missing methods to the builder provided by format provider
     *
     * @param  string $method
     * @param  array  $parameters
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        return $this->forwardCallWithCheckTo($this->getCurrentFormatProvider()->getBuilder(), $method, $parameters);
    }

    /**
     * Get the content as XML string
     *
     * @return string
     */
    public function getContentAsXml(): string
    {
        return $this->getCurrentFormatProvider()->getBuilder()->getContentAsXml();
    }

    /**
     * Get the content as JSON string
     *
     * @return string
     */
    public function getContentAsJson(): string
    {
        return $this->getCurrentFormatProvider()->getBuilder()->getContentAsJson();
    }

    /**
     * Save the XML content to a file
     *
     * @param string $tofile
     * @return void
     */
    public function saveAsXmlFile(string $tofile): void
    {
        $this->getCurrentFormatProvider()->getBuilder()->saveAsXmlFile($tofile);
    }

    /**
     * Save the JSON content to a file
     *
     * @param string $tofile
     * @return void
     */
    public function saveAsJsonFile(string $tofile): void
    {
        $this->getCurrentFormatProvider()->getBuilder()->saveAsJsonFile($tofile);
    }

    /**
     * @inheritDoc
     */
    public function setDocumentNo(string $newDocumentNo): self
    {
        $this->getCurrentFormatProvider()->getBuilder()->setDocumentNo($newDocumentNo);

        return $this;
    }
}
