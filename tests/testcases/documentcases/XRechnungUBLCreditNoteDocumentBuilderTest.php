<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentcases;

use DateTime;
use horstoeko\invoicesuite\codelists\InvoiceSuiteCodelistCountryCodes;
use horstoeko\invoicesuite\codelists\InvoiceSuiteCodelistCurrencyCodes;
use horstoeko\invoicesuite\codelists\InvoiceSuiteCodelistDocumentTypes;
use horstoeko\invoicesuite\InvoiceSuiteDocumentBuilder;
use horstoeko\invoicesuite\InvoiceSuiteSettings;
use horstoeko\invoicesuite\tests\TestCase;
use horstoeko\invoicesuite\tests\traits\HandlesXmlTests;
use horstoeko\invoicesuite\utils\InvoiceSuitePathUtils;

final class XRechnungUBLCreditNoteDocumentBuilderTest extends TestCase
{
    use HandlesXmlTests;

    public static function setUpBeforeClass(): void
    {
        InvoiceSuiteSettings::setQuantityDecimals(2);
        InvoiceSuiteSettings::setUnitAmountDecimals(2);

        static::$document = InvoiceSuiteDocumentBuilder::createByProviderUniqueId('xrechnungublcreditnote');
        static::$document->setDocumentNo('Snippet1');
        static::$document->setDocumentDate(DateTime::createFromFormat('Ymd', '20171113'));
        static::$document->setDocumentType(InvoiceSuiteCodelistDocumentTypes::CREDIT_NOTE->value);
        static::$document->setDocumentNote('Please note we have a new phone number: 22 22 22 22');
        static::$document->setDocumentCurrency(InvoiceSuiteCodelistCurrencyCodes::EURO->value);
        static::$document->setDocumentPostingReference(newAccountId: '4025:123:4343');
        static::$document->setDocumentBuyerReference('0150abc');
        static::$document->setDocumentInvoiceReference('Snippet1');

        static::$document->setDocumentSellerCommunication('0088', '9482348239847239874');
        static::$document->setDocumentSellerId('99887766');
        static::$document->setDocumentSellerName('SupplierOfficialName Ltd');
        static::$document->setDocumentSellerLegalOrganisation(newName: 'SupplierTradingName Ltd.', newId: 'GB983294');
        static::$document->setDocumentSellerAddress(
            newAddressLine1: 'Main street 1',
            newAddressLine2: 'Postbox 123',
            newCity: 'London',
            newPostcode: 'GB 123 EW',
            newCountryId: InvoiceSuiteCodelistCountryCodes::VERE_KOEN->value
        );
        static::$document->setDocumentSellerTaxRegistration('VAT', 'GB1232434');

        static::$document->setDocumentBuyerCommunication('0002', 'FR23342');
        static::$document->setDocumentBuyerGlobalId('FR23342', '0002');
        static::$document->setDocumentBuyerName('Buyer Official Name');
        static::$document->setDocumentBuyerLegalOrganisation('0183', '39937423947', 'BuyerTradingName AS');
        static::$document->setDocumentBuyerAddress(
            newAddressLine1: 'Hovedgatan 32',
            newAddressLine2: 'Po box 878',
            newCity: 'Stockholm',
            newPostcode: '456 34',
            newCountryId: InvoiceSuiteCodelistCountryCodes::SCHWEDEN->value
        );
        static::$document->setDocumentBuyerTaxRegistration('VAT', 'SE4598375937');
        static::$document->setDocumentBuyerContact(
            newPersonName: 'Lisa Johnson',
            newPhoneNumber: '23434234',
            newEmailAddress: 'lj@buyer.se'
        );

        static::$document->setDocumentSupplyChainEvent(DateTime::createFromFormat('Ymd', '20171101'));

        static::$document->setDocumentShipToGlobalId('9483759475923478', '0088');
        static::$document->setDocumentShipToAddress(
            newAddressLine1: 'Delivery street 2',
            newAddressLine2: 'Building 56',
            newCity: 'Stockholm',
            newPostcode: '21234',
            newCountryId: InvoiceSuiteCodelistCountryCodes::SCHWEDEN->value
        );
        static::$document->setDocumentShipToName('Delivery party Name');
    }

    public static function tearDownAfterClass(): void
    {
        InvoiceSuiteSettings::setQuantityDecimals(2);
        InvoiceSuiteSettings::setUnitAmountDecimals(2);
    }

    public function testWriteFile(): void
    {
        static::$document->saveContentToFile($this->getStoreFilename());

        $this->assertFileExists($this->getStoreFilename());
    }

    private function getStoreFilename(): string
    {
        return InvoiceSuitePathUtils::combinePathWithFile(
            InvoiceSuitePathUtils::combineAllPaths(__DIR__, '..', '..', 'assets'),
            '00_case_xrechnung_ublcreditnote_simple.xml'
        );
    }
}
