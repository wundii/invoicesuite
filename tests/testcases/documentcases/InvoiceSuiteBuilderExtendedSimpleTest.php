<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentcases;

use DateTime;
use horstoeko\invoicesuite\codelists\InvoiceSuiteCodelistCurrencyCodes;
use horstoeko\invoicesuite\codelists\InvoiceSuiteCodelistDocumentTypes;
use horstoeko\invoicesuite\InvoiceSuiteDocumentBuilder;
use horstoeko\invoicesuite\InvoiceSuiteSettings;
use horstoeko\invoicesuite\tests\TestCase;
use horstoeko\invoicesuite\tests\traits\HandlesXmlTests;
use horstoeko\invoicesuite\utils\InvoiceSuiteContentTypeResolver;
use horstoeko\invoicesuite\utils\InvoiceSuitePathUtils;

final class InvoiceSuiteBuilderExtendedSimpleTest extends TestCase
{
    use HandlesXmlTests;

    public static function setUpBeforeClass(): void
    {
        InvoiceSuiteSettings::setQuantityDecimals(4);
        InvoiceSuiteSettings::setUnitAmountDecimals(4);
        InvoiceSuiteSettings::setMeasureDecimals(0);

        static::$document = InvoiceSuiteDocumentBuilder::createByProviderUniqueId('zffxextended');
        static::$document->setDocumentNo('R87654321012345');
        static::$document->setDocumentDescription('WARENRECHNUNG');
        static::$document->setDocumentType(InvoiceSuiteCodelistDocumentTypes::COMMERCIAL_INVOICE->value);
        static::$document->setDocumentDate(DateTime::createFromFormat('Ymd', '20241115'));
        static::$document->addDocumentNote('Es bestehen Rabatt- oder Bonusvereinbarungen.', 'ST3', 'AAK');
        static::$document->addDocumentNote('Der Verkäufer bleibt Eigentümer der Waren bis zu vollständigen Erfüllung der Kaufpreisforderung.', 'EEV', 'AAJ');
        static::$document->addDocumentNote("MUSTERLIEFERANT GMBH\nBAHNHOFSTRASSE 99\n99199 MUSTERHAUSEN\nGeschäftsführung:\nMax Mustermann\nUSt-IdNr: DE123456789\nTelefon: +49 932 431 0\nwww.musterlieferant.de\nHRB Nr. 372876\nAmtsgericht Musterstadt\nGLN 4304171000002\nWEEE-Reg-Nr.: DE87654321\n", newSubjectCode: 'REG');
        static::$document->addDocumentNote('Leergutwert: 46,50');
        static::$document->addDocumentNote('Wichtige Information: Bei Bestellungen bis zum 19.12. ist die Auslieferung bis spätestens 23.12. garantiert.');
        static::$document->setDocumentCurrency(InvoiceSuiteCodelistCurrencyCodes::EURO->value);
        static::$document->setDocumentIsTest(true);

        static::$document->addDocumentPosition('1');
        static::$document->setDocumentPositionProductDetails(
            newProductGlobalId: '4123456000014',
            newProductGlobalIdType: '0160',
            newProductSellerId: 'ZS997',
            newProductName: 'Zitronensäure 100ml'
        );
        static::$document->setDocumentPositionProductCharacteristic(
            newProductCharacteristicDescription: 'Verpackungsart',
            newProductCharacteristicValue: 'BO'
        );
        static::$document->setDocumentPositionGrossPrice(1.0000);
        static::$document->setDocumentPositionNetPrice(1.0000);
        static::$document->setDocumentPositionQuantities(
            newQuantity: 100.0000,
            newQuantityUnit: 'H87',
            newPackageQuantity: 4.0000,
            newPackageQuantityUnit: 'XCT'
        );
        static::$document->setDocumentPositionTax(
            newTaxCategory: 'S',
            newTaxType: 'VAT',
            newTaxPercent: 19.0
        );
        static::$document->setDocumentPositionSummation(100.00);

        static::$document->addDocumentPosition('2');
        static::$document->setDocumentPositionProductDetails(
            newProductGlobalId: '4123456000021',
            newProductGlobalIdType: '0160',
            newProductSellerId: 'GZ250',
            newProductName: 'Gelierzucker Extra 250g'
        );
        static::$document->setDocumentPositionGrossPrice(1.5000);
        static::$document->setDocumentPositionGrossPriceAllowanceCharge(
            newGrossPriceAllowanceChargeAmount: 0.03,
            newIsCharge: false,
            newGrossPriceAllowanceChargeReason: 'Artikelrabatt 1'
        );
        static::$document->addDocumentPositionGrossPriceAllowanceCharge(
            newGrossPriceAllowanceChargeAmount: 0.02,
            newIsCharge: false,
            newGrossPriceAllowanceChargeReason: 'Artikelrabatt 2'
        );
        static::$document->setDocumentPositionNetPrice(1.4500);
        static::$document->setDocumentPositionQuantities(
            newQuantity: 50.0000,
            newQuantityUnit: 'H87',
            newPackageQuantity: 1.0000,
            newPackageQuantityUnit: 'XCT'
        );
        static::$document->setDocumentPositionTax(
            newTaxCategory: 'S',
            newTaxType: 'VAT',
            newTaxPercent: 7.0
        );
        static::$document->setDocumentPositionSummation(72.50);

        static::$document->addDocumentPosition('3');
        static::$document->setDocumentPositionProductDetails(
            newProductGlobalId: '4123456000021',
            newProductGlobalIdType: '0160',
            newProductSellerId: 'GZ250',
            newProductName: 'Gelierzucker Extra 250g',
            newProductDescription: 'Artikel wie vereinbart ohne Berechnung'
        );
        static::$document->setDocumentPositionGrossPrice(0.0000);
        static::$document->setDocumentPositionNetPrice(0.0000);
        static::$document->setDocumentPositionQuantities(
            newQuantity: 10.0000,
            newQuantityUnit: 'H87',
            newPackageQuantity: 1.0000,
            newPackageQuantityUnit: 'XCT'
        );
        static::$document->setDocumentPositionTax(
            newTaxCategory: 'S',
            newTaxType: 'VAT',
            newTaxPercent: 7.0
        );
        static::$document->setDocumentPositionSummation(0.00);

        static::$document->addDocumentPosition('4');
        static::$document->setDocumentPositionProductDetails(
            newProductGlobalId: '4100130013294',
            newProductGlobalIdType: '0160',
            newProductSellerId: '2031',
            newProductName: 'Bierbrau Pils 20/0500',
            newProductDescription: 'EAN-VKE: 4100130913297'
        );
        static::$document->setDocumentPositionProductCharacteristic(
            newProductCharacteristicDescription: 'Verpackung',
            newProductCharacteristicValue: 'Kiste'
        );
        static::$document->setDocumentPositionGrossPrice(12.0000);
        static::$document->setDocumentPositionNetPrice(12.0000);
        static::$document->setDocumentPositionQuantities(
            newQuantity: 15.0000,
            newQuantityUnit: 'XBC',
            newPackageQuantity: 20.0000,
            newPackageQuantityUnit: 'XBO'
        );
        static::$document->setDocumentPositionTax(
            newTaxCategory: 'S',
            newTaxType: 'VAT',
            newTaxPercent: 19.0
        );
        static::$document->setDocumentPositionSummation(180.00);

        static::$document->addDocumentPosition('5');
        static::$document->setDocumentPositionProductDetails(
            newProductGlobalId: '2001015001325',
            newProductGlobalIdType: '0160',
            newProductSellerId: '1805',
            newProductName: 'Leergutpfand 20 x 0,5l'
        );
        static::$document->setDocumentPositionProductCharacteristic(
            newProductCharacteristicDescription: 'Verpackung',
            newProductCharacteristicValue: 'unverpackt'
        );
        static::$document->setDocumentPositionGrossPrice(3.1000);
        static::$document->setDocumentPositionNetPrice(3.1000);
        static::$document->setDocumentPositionQuantities(
            newQuantity: 15.0000,
            newQuantityUnit: 'C62',
            newPackageQuantity: 1.0000,
            newPackageQuantityUnit: 'XBC'
        );
        static::$document->setDocumentPositionTax(
            newTaxCategory: 'S',
            newTaxType: 'VAT',
            newTaxPercent: 19.0
        );
        static::$document->setDocumentPositionSummation(46.50);

        static::$document->addDocumentPosition('6');
        static::$document->setDocumentPositionProductDetails(
            newProductGlobalId: '4123456000038',
            newProductGlobalIdType: '0160',
            newProductSellerId: 'MP107',
            newProductName: 'Mischpalette Joghurt Karton 3 x 20'
        );
        static::$document->setDocumentPositionProductCharacteristic(
            newProductCharacteristicDescription: 'Verpackung',
            newProductCharacteristicValue: 'Karton'
        );
        static::$document->setDocumentPositionReferencedProduct(
            newProductGlobalId: '4123456001035',
            newProductGlobalIdType: '0160',
            newProductSellerId: 'JOG103',
            newProductName: 'Erdbeer 20 x 150g Becher',
            newProductUnitQuantity: 20.00000,
            newProductUnitQuantityUnit: 'C62'
        );
        static::$document->addDocumentPositionReferencedProduct(
            newProductGlobalId: '4123456002032',
            newProductGlobalIdType: '0160',
            newProductSellerId: 'JOG203',
            newProductName: 'Banane 20 x 150g Becher',
            newProductUnitQuantity: 20.00000,
            newProductUnitQuantityUnit: 'C62'
        );
        static::$document->addDocumentPositionReferencedProduct(
            newProductGlobalId: '4123456003039',
            newProductGlobalIdType: '0160',
            newProductSellerId: 'JOG303',
            newProductName: 'Schoko 20 x 150g Becher',
            newProductUnitQuantity: 20.00000,
            newProductUnitQuantityUnit: 'C62'
        );
        static::$document->setDocumentPositionGrossPrice(30.0000);
        static::$document->setDocumentPositionGrossPriceAllowanceCharge(
            newGrossPriceAllowanceChargeAmount: 0.90,
            newIsCharge: false,
            newGrossPriceAllowanceChargeReason: 'Artikelrabatt 1'
        );
        static::$document->setDocumentPositionNetPrice(29.10000);
        static::$document->setDocumentPositionQuantities(
            newQuantity: 2.0000,
            newQuantityUnit: 'C62',
            newPackageQuantity: 1.0000,
            newPackageQuantityUnit: 'XPX'
        );
        static::$document->setDocumentPositionTax(
            newTaxCategory: 'S',
            newTaxType: 'VAT',
            newTaxPercent: 7.0
        );
        static::$document->setDocumentPositionSummation(58.20000);

        static::$document->setDocumentSellerId('549910');
        static::$document->setDocumentSellerGlobalId('4333741000005', '0088');
        static::$document->setDocumentSellerName('MUSTERLIEFERANT GMBH');
        static::$document->setDocumentSellerContact(
            newPhoneNumber: '+49 932 431 500',
            newEmailAddress: 'max.mustermann@musterlieferant.de'
        );
        static::$document->setDocumentSellerAddress(
            newPostcode: '99199',
            newAddressLine1: 'BAHNHOFSTRASSE 99',
            newCity: 'MUSTERHAUSEN',
            newCountryId: 'DE'
        );
        static::$document->addDocumentSellerTaxRegistration('VA', 'DE123456789');

        static::$document->setDocumentBuyerId('009420');
        static::$document->setDocumentBuyerGlobalId('4304171000002', '0088');
        static::$document->setDocumentBuyerName('MUSTER-KUNDE GMBH');
        static::$document->setDocumentBuyerAddress(
            newPostcode: '40235',
            newAddressLine1: 'KUNDENWEG 88',
            newCity: 'DUESSELDORF',
            newCountryId: 'DE'
        );

        static::$document->setDocumentBuyerOrderReference('B123456789');
        static::$document->setDocumentAdditionalReference('A456123', newTypeCode: '130');

        static::$document->setDocumentShipToGlobalId('4304171088093', '0088');
        static::$document->setDocumentShipToName('MUSTER-MARKT');
        static::$document->setDocumentShipToContact(newDepartmentName: '8211');
        static::$document->setDocumentShipToAddress(
            newPostcode: '31157',
            newAddressLine1: 'HAUPTSTRASSE 44',
            newCity: 'SARSTEDT',
            newCountryId: 'DE'
        );

        static::$document->setDocumentSupplyChainEvent(DateTime::createFromFormat('Ymd', '20180805'));

        static::$document->setDocumentDeliveryNoteReference('L87654321012345');

        static::$document->setDocumentInvoiceeId('009420');
        static::$document->setDocumentInvoiceeGlobalId('4304171000002', '0088');
        static::$document->setDocumentInvoiceeName('MUSTER-KUNDE GMBH');
        static::$document->setDocumentInvoiceeAddress(
            newPostcode: '40235',
            newAddressLine1: 'KUNDENWEG 88',
            newCity: 'DUESSELDORF',
            newCountryId: 'DE'
        );

        static::$document->addDocumentTax(
            newTaxAmount: 61.07,
            newTaxType: 'VAT',
            newBasisAmount: 321.40,
            newTaxCategory: 'S',
            newTaxPercent: 19.00
        );
        static::$document->addDocumentTax(
            newTaxAmount: 8.93,
            newTaxType: 'VAT',
            newBasisAmount: 127.59,
            newTaxCategory: 'S',
            newTaxPercent: 7.00
        );

        static::$document->addDocumentAllowanceCharge(
            newChargeIndicator: false,
            newAllowanceChargePercent: 2.0000,
            newAllowanceChargeBaseAmount: 280.00,
            newAllowanceChargeAmount: 5.60,
            newAllowanceChargeReason: 'Rechnungsrabatt 1',
            newTaxType: 'VAT',
            newTaxCategory: 'S',
            newTaxPercent: 19.00
        );
        static::$document->addDocumentAllowanceCharge(
            newChargeIndicator: false,
            newAllowanceChargePercent: 2.0000,
            newAllowanceChargeBaseAmount: 130.70,
            newAllowanceChargeAmount: 2.61,
            newAllowanceChargeReason: 'Rechnungsrabatt 1',
            newTaxType: 'VAT',
            newTaxCategory: 'S',
            newTaxPercent: 7.00
        );
        static::$document->addDocumentAllowanceCharge(
            newChargeIndicator: false,
            newAllowanceChargeBaseAmount: 280.00,
            newAllowanceChargeAmount: 2.50,
            newAllowanceChargeReason: 'Rechnungsrabatt 2',
            newTaxType: 'VAT',
            newTaxCategory: 'S',
            newTaxPercent: 19.00
        );
        static::$document->addDocumentAllowanceCharge(
            newChargeIndicator: false,
            newAllowanceChargeBaseAmount: 130.70,
            newAllowanceChargeAmount: 0.50,
            newAllowanceChargeReason: 'Rechnungsrabatt 2',
            newTaxType: 'VAT',
            newTaxCategory: 'S',
            newTaxPercent: 7.00
        );

        static::$document->setDocumentLogisticServiceCharge(
            newDescription: 'Transportkosten',
            newChargeAmount: 3.00,
            newTaxType: 'VAT',
            newTaxCategory: 'S',
            newTaxPercent: 19.00
        );

        static::$document->addDocumentPaymentTerm('Bei Zahlung innerhalb 14 Tagen gewähren wir 2,0% Skonto.');

        static::$document->addDocumentPaymentDiscountTermsInLastPaymentTerm(
            newBasePeriod: 14.00,
            newBasePeriodUnit: 'DAY',
            newDiscountPercent: 2.00,
        );
        static::$document->setDocumentSummation(
            newNetAmount: 457.20,
            newChargeTotalAmount: 3.00,
            newDiscountTotalAmount: 11.21,
            newTaxBasisAmount: 448.99,
            newTaxTotalAmount: 70.00,
            newGrossAmount: 518.99,
            newPrepaidAmount: 0.00,
            newDueAmount: 518.99
        );
    }

    public static function tearDownAfterClass(): void
    {
        InvoiceSuiteSettings::setQuantityDecimals(2);
        InvoiceSuiteSettings::setUnitAmountDecimals(2);
        InvoiceSuiteSettings::setMeasureDecimals(2);
    }

    public function testContentType(): void
    {
        $contentType = InvoiceSuiteContentTypeResolver::resolveContentType(static::$document->getContentAsXml());

        $this->assertSame(InvoiceSuiteContentTypeResolver::XML, $contentType);
    }

    public function testWriteFile(): void
    {
        static::$document->saveAsXmlFile($this->getStoreFilename());

        $this->assertFileExists($this->getStoreFilename());
    }

    private function getStoreFilename(): string
    {
        return InvoiceSuitePathUtils::combinePathWithFile(
            InvoiceSuitePathUtils::combineAllPaths(__DIR__, '..', '..', 'assets'),
            '00_case_extended_simple.xml'
        );
    }
}
