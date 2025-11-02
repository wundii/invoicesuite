<?php

namespace horstoeko\invoicesuite\tests\testcases\documentproviders;

use DateTime;
use horstoeko\invoicesuite\documents\models\ubl\main\Invoice;
use horstoeko\invoicesuite\documents\providers\ubl\InvoiceSuiteUblInvoiceProvider;
use horstoeko\invoicesuite\documents\providers\ubl\InvoiceSuiteUblInvoiceProviderBuilder;
use horstoeko\invoicesuite\tests\TestCase;
use horstoeko\invoicesuite\tests\traits\HandlesXmlTests;

class UblInvoiceProviderBuilderTest extends TestCase
{
    use HandlesXmlTests;

    public static function setUpBeforeClass(): void
    {
        self::$document = new InvoiceSuiteUblInvoiceProviderBuilder(new InvoiceSuiteUblInvoiceProvider());
    }

    public function testHasCurrentDocumentProvider(): void
    {
        $this->assertTrue(self::$document->hasCurrentDocumentFormatProvider());
        $this->assertFalse(self::$document->hasNotCurrentDocumentFormatProvider());
        $this->assertInstanceOf(InvoiceSuiteUblInvoiceProvider::class, self::$document->getCurrentDocumentFormatProvider());
    }

    public function testInitDocumentRootObject(): void
    {
        self::$document->initDocumentRootObject();

        $this->assertInstanceOf(Invoice::class, self::$document->getDocumentRootObject());
    }

    public function testDocumentProfile(): void
    {
        $this->debugWriteFile();
        $this->assertXPathValueWithIndex('/ns:Invoice/cbc:ProfileID', 0, 'urn:fdc:peppol.eu:2017:poacc:billing:01:1.0');
        $this->assertXPathNotExistsWithIndex('/ns:Invoice/cbc:ProfileID', 1);
        $this->assertXPathValueWithIndex('/ns:Invoice/cbc:CustomizationID', 0, 'urn:cen.eu:en16931:2017');
        $this->assertXPathNotExistsWithIndex('/ns:Invoice/cbc:CustomizationID', 1);
    }
}
