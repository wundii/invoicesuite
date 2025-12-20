<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentmodels;

use horstoeko\invoicesuite\documents\models\zffxminimum\qdt\CountryIDType;
use horstoeko\invoicesuite\documents\models\zffxminimum\qdt\CurrencyCodeType;
use horstoeko\invoicesuite\documents\models\zffxminimum\qdt\DocumentCodeType;
use horstoeko\invoicesuite\documents\models\zffxminimum\ram\DocumentContextParameterType;
use horstoeko\invoicesuite\documents\models\zffxminimum\ram\ExchangedDocumentContextType;
use horstoeko\invoicesuite\documents\models\zffxminimum\ram\ExchangedDocumentType;
use horstoeko\invoicesuite\documents\models\zffxminimum\ram\HeaderTradeAgreementType;
use horstoeko\invoicesuite\documents\models\zffxminimum\ram\HeaderTradeDeliveryType;
use horstoeko\invoicesuite\documents\models\zffxminimum\ram\HeaderTradeSettlementType;
use horstoeko\invoicesuite\documents\models\zffxminimum\ram\LegalOrganizationType;
use horstoeko\invoicesuite\documents\models\zffxminimum\ram\ReferencedDocumentType;
use horstoeko\invoicesuite\documents\models\zffxminimum\ram\SupplyChainTradeTransactionType;
use horstoeko\invoicesuite\documents\models\zffxminimum\ram\TaxRegistrationType;
use horstoeko\invoicesuite\documents\models\zffxminimum\ram\TradeAddressType;
use horstoeko\invoicesuite\documents\models\zffxminimum\ram\TradePartyType;
use horstoeko\invoicesuite\documents\models\zffxminimum\ram\TradeSettlementHeaderMonetarySummationType;
use horstoeko\invoicesuite\documents\models\zffxminimum\rsm\CrossIndustryInvoice;
use horstoeko\invoicesuite\documents\models\zffxminimum\rsm\CrossIndustryInvoiceType;
use horstoeko\invoicesuite\documents\models\zffxminimum\udt\AmountType;
use horstoeko\invoicesuite\documents\models\zffxminimum\udt\DateTimeType;
use horstoeko\invoicesuite\documents\models\zffxminimum\udt\DateTimeType\DateTimeStringAType;
use horstoeko\invoicesuite\documents\models\zffxminimum\udt\IDType;
use horstoeko\invoicesuite\documents\models\zffxminimum\udt\TextType;
use horstoeko\invoicesuite\tests\TestCase;

final class ZffxMinimumModelTest extends TestCase
{
    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxminimum\qdt\CountryIDType.
     */
    public function testModelsZffxminimumQdtCountryIDType(): void
    {
        $model = new CountryIDType();

        $this->assertInstanceOf(CountryIDType::class, $model);

        // Property Value

        $testValue = 'dummy-ValueValue';
        $model->setValue($testValue);

        $this->assertSame($testValue, $model->getValue());

        $model->unsetValue();

        $this->assertNull($model->getValue());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxminimum\qdt\CurrencyCodeType.
     */
    public function testModelsZffxminimumQdtCurrencyCodeType(): void
    {
        $model = new CurrencyCodeType();

        $this->assertInstanceOf(CurrencyCodeType::class, $model);

        // Property Value

        $testValue = 'dummy-ValueValue';
        $model->setValue($testValue);

        $this->assertSame($testValue, $model->getValue());

        $model->unsetValue();

        $this->assertNull($model->getValue());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxminimum\qdt\DocumentCodeType.
     */
    public function testModelsZffxminimumQdtDocumentCodeType(): void
    {
        $model = new DocumentCodeType();

        $this->assertInstanceOf(DocumentCodeType::class, $model);

        // Property Value

        $testValue = 'dummy-ValueValue';
        $model->setValue($testValue);

        $this->assertSame($testValue, $model->getValue());

        $model->unsetValue();

        $this->assertNull($model->getValue());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxminimum\ram\DocumentContextParameterType.
     */
    public function testModelsZffxminimumRamDocumentContextParameterType(): void
    {
        $model = new DocumentContextParameterType();

        $this->assertInstanceOf(DocumentContextParameterType::class, $model);

        // Property ID

        $testValue = new IDType();
        $model->setID($testValue);

        $this->assertEquals($testValue, $model->getID());

        $model->unsetID();

        $this->assertNotInstanceOf(IDType::class, $model->getID());

        $testValueForID = $model->getIDWithCreate();

        $this->assertInstanceOf(IDType::class, $testValueForID);
        $this->assertSame($testValueForID, $model->getID());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxminimum\ram\ExchangedDocumentContextType.
     */
    public function testModelsZffxminimumRamExchangedDocumentContextType(): void
    {
        $model = new ExchangedDocumentContextType();

        $this->assertInstanceOf(ExchangedDocumentContextType::class, $model);

        // Property BusinessProcessSpecifiedDocumentContextParameter

        $testValue = new DocumentContextParameterType();
        $model->setBusinessProcessSpecifiedDocumentContextParameter($testValue);

        $this->assertEquals($testValue, $model->getBusinessProcessSpecifiedDocumentContextParameter());

        $model->unsetBusinessProcessSpecifiedDocumentContextParameter();

        $this->assertNotInstanceOf(DocumentContextParameterType::class, $model->getBusinessProcessSpecifiedDocumentContextParameter());

        $testValueForBusinessProcessSpecifiedDocumentContextParameter = $model->getBusinessProcessSpecifiedDocumentContextParameterWithCreate();

        $this->assertInstanceOf(DocumentContextParameterType::class, $testValueForBusinessProcessSpecifiedDocumentContextParameter);
        $this->assertSame($testValueForBusinessProcessSpecifiedDocumentContextParameter, $model->getBusinessProcessSpecifiedDocumentContextParameter());

        // Property GuidelineSpecifiedDocumentContextParameter

        $testValue = new DocumentContextParameterType();
        $model->setGuidelineSpecifiedDocumentContextParameter($testValue);

        $this->assertEquals($testValue, $model->getGuidelineSpecifiedDocumentContextParameter());

        $model->unsetGuidelineSpecifiedDocumentContextParameter();

        $this->assertNotInstanceOf(DocumentContextParameterType::class, $model->getGuidelineSpecifiedDocumentContextParameter());

        $testValueForGuidelineSpecifiedDocumentContextParameter = $model->getGuidelineSpecifiedDocumentContextParameterWithCreate();

        $this->assertInstanceOf(DocumentContextParameterType::class, $testValueForGuidelineSpecifiedDocumentContextParameter);
        $this->assertSame($testValueForGuidelineSpecifiedDocumentContextParameter, $model->getGuidelineSpecifiedDocumentContextParameter());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxminimum\ram\ExchangedDocumentType.
     */
    public function testModelsZffxminimumRamExchangedDocumentType(): void
    {
        $model = new ExchangedDocumentType();

        $this->assertInstanceOf(ExchangedDocumentType::class, $model);

        // Property ID

        $testValue = new IDType();
        $model->setID($testValue);

        $this->assertEquals($testValue, $model->getID());

        $model->unsetID();

        $this->assertNotInstanceOf(IDType::class, $model->getID());

        $testValueForID = $model->getIDWithCreate();

        $this->assertInstanceOf(IDType::class, $testValueForID);
        $this->assertSame($testValueForID, $model->getID());

        // Property TypeCode

        $testValue = new DocumentCodeType();
        $model->setTypeCode($testValue);

        $this->assertEquals($testValue, $model->getTypeCode());

        $model->unsetTypeCode();

        $this->assertNotInstanceOf(DocumentCodeType::class, $model->getTypeCode());

        $testValueForTypeCode = $model->getTypeCodeWithCreate();

        $this->assertInstanceOf(DocumentCodeType::class, $testValueForTypeCode);
        $this->assertSame($testValueForTypeCode, $model->getTypeCode());

        // Property IssueDateTime

        $testValue = new DateTimeType();
        $model->setIssueDateTime($testValue);

        $this->assertEquals($testValue, $model->getIssueDateTime());

        $model->unsetIssueDateTime();

        $this->assertNotInstanceOf(DateTimeType::class, $model->getIssueDateTime());

        $testValueForIssueDateTime = $model->getIssueDateTimeWithCreate();

        $this->assertInstanceOf(DateTimeType::class, $testValueForIssueDateTime);
        $this->assertSame($testValueForIssueDateTime, $model->getIssueDateTime());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxminimum\ram\HeaderTradeAgreementType.
     */
    public function testModelsZffxminimumRamHeaderTradeAgreementType(): void
    {
        $model = new HeaderTradeAgreementType();

        $this->assertInstanceOf(HeaderTradeAgreementType::class, $model);

        // Property BuyerReference

        $testValue = new TextType();
        $model->setBuyerReference($testValue);

        $this->assertEquals($testValue, $model->getBuyerReference());

        $model->unsetBuyerReference();

        $this->assertNotInstanceOf(TextType::class, $model->getBuyerReference());

        $testValueForBuyerReference = $model->getBuyerReferenceWithCreate();

        $this->assertInstanceOf(TextType::class, $testValueForBuyerReference);
        $this->assertSame($testValueForBuyerReference, $model->getBuyerReference());

        // Property SellerTradeParty

        $testValue = new TradePartyType();
        $model->setSellerTradeParty($testValue);

        $this->assertEquals($testValue, $model->getSellerTradeParty());

        $model->unsetSellerTradeParty();

        $this->assertNotInstanceOf(TradePartyType::class, $model->getSellerTradeParty());

        $testValueForSellerTradeParty = $model->getSellerTradePartyWithCreate();

        $this->assertInstanceOf(TradePartyType::class, $testValueForSellerTradeParty);
        $this->assertSame($testValueForSellerTradeParty, $model->getSellerTradeParty());

        // Property BuyerTradeParty

        $testValue = new TradePartyType();
        $model->setBuyerTradeParty($testValue);

        $this->assertEquals($testValue, $model->getBuyerTradeParty());

        $model->unsetBuyerTradeParty();

        $this->assertNotInstanceOf(TradePartyType::class, $model->getBuyerTradeParty());

        $testValueForBuyerTradeParty = $model->getBuyerTradePartyWithCreate();

        $this->assertInstanceOf(TradePartyType::class, $testValueForBuyerTradeParty);
        $this->assertSame($testValueForBuyerTradeParty, $model->getBuyerTradeParty());

        // Property BuyerOrderReferencedDocument

        $testValue = new ReferencedDocumentType();
        $model->setBuyerOrderReferencedDocument($testValue);

        $this->assertEquals($testValue, $model->getBuyerOrderReferencedDocument());

        $model->unsetBuyerOrderReferencedDocument();

        $this->assertNotInstanceOf(ReferencedDocumentType::class, $model->getBuyerOrderReferencedDocument());

        $testValueForBuyerOrderReferencedDocument = $model->getBuyerOrderReferencedDocumentWithCreate();

        $this->assertInstanceOf(ReferencedDocumentType::class, $testValueForBuyerOrderReferencedDocument);
        $this->assertSame($testValueForBuyerOrderReferencedDocument, $model->getBuyerOrderReferencedDocument());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxminimum\ram\HeaderTradeDeliveryType.
     */
    public function testModelsZffxminimumRamHeaderTradeDeliveryType(): void
    {
        $model = new HeaderTradeDeliveryType();

        $this->assertInstanceOf(HeaderTradeDeliveryType::class, $model);
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxminimum\ram\HeaderTradeSettlementType.
     */
    public function testModelsZffxminimumRamHeaderTradeSettlementType(): void
    {
        $model = new HeaderTradeSettlementType();

        $this->assertInstanceOf(HeaderTradeSettlementType::class, $model);

        // Property InvoiceCurrencyCode

        $testValue = new CurrencyCodeType();
        $model->setInvoiceCurrencyCode($testValue);

        $this->assertEquals($testValue, $model->getInvoiceCurrencyCode());

        $model->unsetInvoiceCurrencyCode();

        $this->assertNotInstanceOf(CurrencyCodeType::class, $model->getInvoiceCurrencyCode());

        $testValueForInvoiceCurrencyCode = $model->getInvoiceCurrencyCodeWithCreate();

        $this->assertInstanceOf(CurrencyCodeType::class, $testValueForInvoiceCurrencyCode);
        $this->assertSame($testValueForInvoiceCurrencyCode, $model->getInvoiceCurrencyCode());

        // Property SpecifiedTradeSettlementHeaderMonetarySummation

        $testValue = new TradeSettlementHeaderMonetarySummationType();
        $model->setSpecifiedTradeSettlementHeaderMonetarySummation($testValue);

        $this->assertEquals($testValue, $model->getSpecifiedTradeSettlementHeaderMonetarySummation());

        $model->unsetSpecifiedTradeSettlementHeaderMonetarySummation();

        $this->assertNotInstanceOf(TradeSettlementHeaderMonetarySummationType::class, $model->getSpecifiedTradeSettlementHeaderMonetarySummation());

        $testValueForSpecifiedTradeSettlementHeaderMonetarySummation = $model->getSpecifiedTradeSettlementHeaderMonetarySummationWithCreate();

        $this->assertInstanceOf(TradeSettlementHeaderMonetarySummationType::class, $testValueForSpecifiedTradeSettlementHeaderMonetarySummation);
        $this->assertSame($testValueForSpecifiedTradeSettlementHeaderMonetarySummation, $model->getSpecifiedTradeSettlementHeaderMonetarySummation());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxminimum\ram\LegalOrganizationType.
     */
    public function testModelsZffxminimumRamLegalOrganizationType(): void
    {
        $model = new LegalOrganizationType();

        $this->assertInstanceOf(LegalOrganizationType::class, $model);

        // Property ID

        $testValue = new IDType();
        $model->setID($testValue);

        $this->assertEquals($testValue, $model->getID());

        $model->unsetID();

        $this->assertNotInstanceOf(IDType::class, $model->getID());

        $testValueForID = $model->getIDWithCreate();

        $this->assertInstanceOf(IDType::class, $testValueForID);
        $this->assertSame($testValueForID, $model->getID());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxminimum\ram\ReferencedDocumentType.
     */
    public function testModelsZffxminimumRamReferencedDocumentType(): void
    {
        $model = new ReferencedDocumentType();

        $this->assertInstanceOf(ReferencedDocumentType::class, $model);

        // Property IssuerAssignedID

        $testValue = new IDType();
        $model->setIssuerAssignedID($testValue);

        $this->assertEquals($testValue, $model->getIssuerAssignedID());

        $model->unsetIssuerAssignedID();

        $this->assertNotInstanceOf(IDType::class, $model->getIssuerAssignedID());

        $testValueForIssuerAssignedID = $model->getIssuerAssignedIDWithCreate();

        $this->assertInstanceOf(IDType::class, $testValueForIssuerAssignedID);
        $this->assertSame($testValueForIssuerAssignedID, $model->getIssuerAssignedID());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxminimum\ram\SupplyChainTradeTransactionType.
     */
    public function testModelsZffxminimumRamSupplyChainTradeTransactionType(): void
    {
        $model = new SupplyChainTradeTransactionType();

        $this->assertInstanceOf(SupplyChainTradeTransactionType::class, $model);

        // Property ApplicableHeaderTradeAgreement

        $testValue = new HeaderTradeAgreementType();
        $model->setApplicableHeaderTradeAgreement($testValue);

        $this->assertEquals($testValue, $model->getApplicableHeaderTradeAgreement());

        $model->unsetApplicableHeaderTradeAgreement();

        $this->assertNotInstanceOf(HeaderTradeAgreementType::class, $model->getApplicableHeaderTradeAgreement());

        $testValueForApplicableHeaderTradeAgreement = $model->getApplicableHeaderTradeAgreementWithCreate();

        $this->assertInstanceOf(HeaderTradeAgreementType::class, $testValueForApplicableHeaderTradeAgreement);
        $this->assertSame($testValueForApplicableHeaderTradeAgreement, $model->getApplicableHeaderTradeAgreement());

        // Property ApplicableHeaderTradeDelivery

        $testValue = new HeaderTradeDeliveryType();
        $model->setApplicableHeaderTradeDelivery($testValue);

        $this->assertEquals($testValue, $model->getApplicableHeaderTradeDelivery());

        $model->unsetApplicableHeaderTradeDelivery();

        $this->assertNotInstanceOf(HeaderTradeDeliveryType::class, $model->getApplicableHeaderTradeDelivery());

        $testValueForApplicableHeaderTradeDelivery = $model->getApplicableHeaderTradeDeliveryWithCreate();

        $this->assertInstanceOf(HeaderTradeDeliveryType::class, $testValueForApplicableHeaderTradeDelivery);
        $this->assertSame($testValueForApplicableHeaderTradeDelivery, $model->getApplicableHeaderTradeDelivery());

        // Property ApplicableHeaderTradeSettlement

        $testValue = new HeaderTradeSettlementType();
        $model->setApplicableHeaderTradeSettlement($testValue);

        $this->assertEquals($testValue, $model->getApplicableHeaderTradeSettlement());

        $model->unsetApplicableHeaderTradeSettlement();

        $this->assertNotInstanceOf(HeaderTradeSettlementType::class, $model->getApplicableHeaderTradeSettlement());

        $testValueForApplicableHeaderTradeSettlement = $model->getApplicableHeaderTradeSettlementWithCreate();

        $this->assertInstanceOf(HeaderTradeSettlementType::class, $testValueForApplicableHeaderTradeSettlement);
        $this->assertSame($testValueForApplicableHeaderTradeSettlement, $model->getApplicableHeaderTradeSettlement());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxminimum\ram\TaxRegistrationType.
     */
    public function testModelsZffxminimumRamTaxRegistrationType(): void
    {
        $model = new TaxRegistrationType();

        $this->assertInstanceOf(TaxRegistrationType::class, $model);

        // Property ID

        $testValue = new IDType();
        $model->setID($testValue);

        $this->assertEquals($testValue, $model->getID());

        $model->unsetID();

        $this->assertNotInstanceOf(IDType::class, $model->getID());

        $testValueForID = $model->getIDWithCreate();

        $this->assertInstanceOf(IDType::class, $testValueForID);
        $this->assertSame($testValueForID, $model->getID());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxminimum\ram\TradeAddressType.
     */
    public function testModelsZffxminimumRamTradeAddressType(): void
    {
        $model = new TradeAddressType();

        $this->assertInstanceOf(TradeAddressType::class, $model);

        // Property CountryID

        $testValue = new CountryIDType();
        $model->setCountryID($testValue);

        $this->assertEquals($testValue, $model->getCountryID());

        $model->unsetCountryID();

        $this->assertNotInstanceOf(CountryIDType::class, $model->getCountryID());

        $testValueForCountryID = $model->getCountryIDWithCreate();

        $this->assertInstanceOf(CountryIDType::class, $testValueForCountryID);
        $this->assertSame($testValueForCountryID, $model->getCountryID());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxminimum\ram\TradePartyType.
     */
    public function testModelsZffxminimumRamTradePartyType(): void
    {
        $model = new TradePartyType();

        $this->assertInstanceOf(TradePartyType::class, $model);

        // Property Name

        $testValue = new TextType();
        $model->setName($testValue);

        $this->assertEquals($testValue, $model->getName());

        $model->unsetName();

        $this->assertNotInstanceOf(TextType::class, $model->getName());

        $testValueForName = $model->getNameWithCreate();

        $this->assertInstanceOf(TextType::class, $testValueForName);
        $this->assertSame($testValueForName, $model->getName());

        // Property SpecifiedLegalOrganization

        $testValue = new LegalOrganizationType();
        $model->setSpecifiedLegalOrganization($testValue);

        $this->assertEquals($testValue, $model->getSpecifiedLegalOrganization());

        $model->unsetSpecifiedLegalOrganization();

        $this->assertNotInstanceOf(LegalOrganizationType::class, $model->getSpecifiedLegalOrganization());

        $testValueForSpecifiedLegalOrganization = $model->getSpecifiedLegalOrganizationWithCreate();

        $this->assertInstanceOf(LegalOrganizationType::class, $testValueForSpecifiedLegalOrganization);
        $this->assertSame($testValueForSpecifiedLegalOrganization, $model->getSpecifiedLegalOrganization());

        // Property PostalTradeAddress

        $testValue = new TradeAddressType();
        $model->setPostalTradeAddress($testValue);

        $this->assertEquals($testValue, $model->getPostalTradeAddress());

        $model->unsetPostalTradeAddress();

        $this->assertNotInstanceOf(TradeAddressType::class, $model->getPostalTradeAddress());

        $testValueForPostalTradeAddress = $model->getPostalTradeAddressWithCreate();

        $this->assertInstanceOf(TradeAddressType::class, $testValueForPostalTradeAddress);
        $this->assertSame($testValueForPostalTradeAddress, $model->getPostalTradeAddress());

        // (1) Property SpecifiedTaxRegistration - Test set empty array

        $specifiedTaxRegistrationItems = [];
        $model->setSpecifiedTaxRegistration($specifiedTaxRegistrationItems);

        $this->assertIsArray($model->getSpecifiedTaxRegistration());
        $this->assertCount(0, $model->getSpecifiedTaxRegistration());

        // (2) Property SpecifiedTaxRegistration - Add instance

        $specifiedTaxRegistrationItem = new TaxRegistrationType();
        $model->addToSpecifiedTaxRegistration($specifiedTaxRegistrationItem);

        $this->assertIsArray($model->getSpecifiedTaxRegistration());
        $this->assertCount(1, $model->getSpecifiedTaxRegistration());

        // (3) Property SpecifiedTaxRegistration - Add and create instancc

        $testValueForSpecifiedTaxRegistrationItem = $model->addToSpecifiedTaxRegistrationWithCreate();

        $this->assertInstanceOf(TaxRegistrationType::class, $testValueForSpecifiedTaxRegistrationItem);
        $this->assertIsArray($model->getSpecifiedTaxRegistration());
        $this->assertCount(2, $model->getSpecifiedTaxRegistration());

        // (4) Property SpecifiedTaxRegistration - Add once an instance

        $specifiedTaxRegistrationOnceItem = new TaxRegistrationType();

        $model->addOnceToSpecifiedTaxRegistration($specifiedTaxRegistrationOnceItem);
        $model->addOnceToSpecifiedTaxRegistration($specifiedTaxRegistrationOnceItem);

        $itemsAfterOnce = $model->getSpecifiedTaxRegistration();

        $this->assertIsArray($itemsAfterOnce);
        $this->assertCount(2, $itemsAfterOnce);

        // (5) Property SpecifiedTaxRegistration - Add once an instance with implicit creation

        $firstSpecifiedTaxRegistrationOnceItem = $model->addOnceToSpecifiedTaxRegistrationWithCreate();

        $this->assertInstanceOf(TaxRegistrationType::class, $firstSpecifiedTaxRegistrationOnceItem);

        $itemsAfterFirstOnceWithCreate = $model->getSpecifiedTaxRegistration();

        $this->assertIsArray($itemsAfterFirstOnceWithCreate);
        $this->assertCount(2, $itemsAfterFirstOnceWithCreate);

        // (5) Property SpecifiedTaxRegistration - Add once an instance with implicit creation (2)

        $secondSpecifiedTaxRegistrationOnceItem = $model->addOnceToSpecifiedTaxRegistrationWithCreate();

        $this->assertIsArray($itemsAfterFirstOnceWithCreate);
        $this->assertCount(2, $itemsAfterFirstOnceWithCreate);
        $this->assertSame($firstSpecifiedTaxRegistrationOnceItem, $secondSpecifiedTaxRegistrationOnceItem);

        // (7) Property SpecifiedTaxRegistration - Clesr

        $model->clearSpecifiedTaxRegistration();

        $itemsAfterClear = $model->getSpecifiedTaxRegistration();

        $this->assertIsArray($itemsAfterClear);
        $this->assertCount(0, $itemsAfterClear);
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxminimum\ram\TradeSettlementHeaderMonetarySummationType.
     */
    public function testModelsZffxminimumRamTradeSettlementHeaderMonetarySummationType(): void
    {
        $model = new TradeSettlementHeaderMonetarySummationType();

        $this->assertInstanceOf(TradeSettlementHeaderMonetarySummationType::class, $model);

        // Property TaxBasisTotalAmount

        $testValue = new AmountType();
        $model->setTaxBasisTotalAmount($testValue);

        $this->assertEquals($testValue, $model->getTaxBasisTotalAmount());

        $model->unsetTaxBasisTotalAmount();

        $this->assertNotInstanceOf(AmountType::class, $model->getTaxBasisTotalAmount());

        $testValueForTaxBasisTotalAmount = $model->getTaxBasisTotalAmountWithCreate();

        $this->assertInstanceOf(AmountType::class, $testValueForTaxBasisTotalAmount);
        $this->assertSame($testValueForTaxBasisTotalAmount, $model->getTaxBasisTotalAmount());

        // (1) Property TaxTotalAmount - Test set empty array

        $taxTotalAmountItems = [];
        $model->setTaxTotalAmount($taxTotalAmountItems);

        $this->assertIsArray($model->getTaxTotalAmount());
        $this->assertCount(0, $model->getTaxTotalAmount());

        // (2) Property TaxTotalAmount - Add instance

        $taxTotalAmountItem = new AmountType();
        $model->addToTaxTotalAmount($taxTotalAmountItem);

        $this->assertIsArray($model->getTaxTotalAmount());
        $this->assertCount(1, $model->getTaxTotalAmount());

        // (3) Property TaxTotalAmount - Add and create instancc

        $testValueForTaxTotalAmountItem = $model->addToTaxTotalAmountWithCreate();

        $this->assertInstanceOf(AmountType::class, $testValueForTaxTotalAmountItem);
        $this->assertIsArray($model->getTaxTotalAmount());
        $this->assertCount(2, $model->getTaxTotalAmount());

        // (4) Property TaxTotalAmount - Add once an instance

        $taxTotalAmountOnceItem = new AmountType();

        $model->addOnceToTaxTotalAmount($taxTotalAmountOnceItem);
        $model->addOnceToTaxTotalAmount($taxTotalAmountOnceItem);

        $itemsAfterOnce = $model->getTaxTotalAmount();

        $this->assertIsArray($itemsAfterOnce);
        $this->assertCount(2, $itemsAfterOnce);

        // (5) Property TaxTotalAmount - Add once an instance with implicit creation

        $firstTaxTotalAmountOnceItem = $model->addOnceToTaxTotalAmountWithCreate();

        $this->assertInstanceOf(AmountType::class, $firstTaxTotalAmountOnceItem);

        $itemsAfterFirstOnceWithCreate = $model->getTaxTotalAmount();

        $this->assertIsArray($itemsAfterFirstOnceWithCreate);
        $this->assertCount(2, $itemsAfterFirstOnceWithCreate);

        // (5) Property TaxTotalAmount - Add once an instance with implicit creation (2)

        $secondTaxTotalAmountOnceItem = $model->addOnceToTaxTotalAmountWithCreate();

        $this->assertIsArray($itemsAfterFirstOnceWithCreate);
        $this->assertCount(2, $itemsAfterFirstOnceWithCreate);
        $this->assertSame($firstTaxTotalAmountOnceItem, $secondTaxTotalAmountOnceItem);

        // (7) Property TaxTotalAmount - Clesr

        $model->clearTaxTotalAmount();

        $itemsAfterClear = $model->getTaxTotalAmount();

        $this->assertIsArray($itemsAfterClear);
        $this->assertCount(0, $itemsAfterClear);

        // Property GrandTotalAmount

        $testValue = new AmountType();
        $model->setGrandTotalAmount($testValue);

        $this->assertEquals($testValue, $model->getGrandTotalAmount());

        $model->unsetGrandTotalAmount();

        $this->assertNotInstanceOf(AmountType::class, $model->getGrandTotalAmount());

        $testValueForGrandTotalAmount = $model->getGrandTotalAmountWithCreate();

        $this->assertInstanceOf(AmountType::class, $testValueForGrandTotalAmount);
        $this->assertSame($testValueForGrandTotalAmount, $model->getGrandTotalAmount());

        // Property DuePayableAmount

        $testValue = new AmountType();
        $model->setDuePayableAmount($testValue);

        $this->assertEquals($testValue, $model->getDuePayableAmount());

        $model->unsetDuePayableAmount();

        $this->assertNotInstanceOf(AmountType::class, $model->getDuePayableAmount());

        $testValueForDuePayableAmount = $model->getDuePayableAmountWithCreate();

        $this->assertInstanceOf(AmountType::class, $testValueForDuePayableAmount);
        $this->assertSame($testValueForDuePayableAmount, $model->getDuePayableAmount());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxminimum\rsm\CrossIndustryInvoice.
     */
    public function testModelsZffxminimumRsmCrossIndustryInvoice(): void
    {
        $model = new CrossIndustryInvoice();

        $this->assertInstanceOf(CrossIndustryInvoice::class, $model);
        $this->assertInstanceOf(CrossIndustryInvoiceType::class, $model);
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxminimum\rsm\CrossIndustryInvoiceType.
     */
    public function testModelsZffxminimumRsmCrossIndustryInvoiceType(): void
    {
        $model = new CrossIndustryInvoiceType();

        $this->assertInstanceOf(CrossIndustryInvoiceType::class, $model);

        // Property ExchangedDocumentContext

        $testValue = new ExchangedDocumentContextType();
        $model->setExchangedDocumentContext($testValue);

        $this->assertEquals($testValue, $model->getExchangedDocumentContext());

        $model->unsetExchangedDocumentContext();

        $this->assertNotInstanceOf(ExchangedDocumentContextType::class, $model->getExchangedDocumentContext());

        $testValueForExchangedDocumentContext = $model->getExchangedDocumentContextWithCreate();

        $this->assertInstanceOf(ExchangedDocumentContextType::class, $testValueForExchangedDocumentContext);
        $this->assertSame($testValueForExchangedDocumentContext, $model->getExchangedDocumentContext());

        // Property ExchangedDocument

        $testValue = new ExchangedDocumentType();
        $model->setExchangedDocument($testValue);

        $this->assertEquals($testValue, $model->getExchangedDocument());

        $model->unsetExchangedDocument();

        $this->assertNotInstanceOf(ExchangedDocumentType::class, $model->getExchangedDocument());

        $testValueForExchangedDocument = $model->getExchangedDocumentWithCreate();

        $this->assertInstanceOf(ExchangedDocumentType::class, $testValueForExchangedDocument);
        $this->assertSame($testValueForExchangedDocument, $model->getExchangedDocument());

        // Property SupplyChainTradeTransaction

        $testValue = new SupplyChainTradeTransactionType();
        $model->setSupplyChainTradeTransaction($testValue);

        $this->assertEquals($testValue, $model->getSupplyChainTradeTransaction());

        $model->unsetSupplyChainTradeTransaction();

        $this->assertNotInstanceOf(SupplyChainTradeTransactionType::class, $model->getSupplyChainTradeTransaction());

        $testValueForSupplyChainTradeTransaction = $model->getSupplyChainTradeTransactionWithCreate();

        $this->assertInstanceOf(SupplyChainTradeTransactionType::class, $testValueForSupplyChainTradeTransaction);
        $this->assertSame($testValueForSupplyChainTradeTransaction, $model->getSupplyChainTradeTransaction());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxminimum\udt\AmountType.
     */
    public function testModelsZffxminimumUdtAmountType(): void
    {
        $model = new AmountType();

        $this->assertInstanceOf(AmountType::class, $model);

        // Property Value

        $testValue = 1.23;
        $model->setValue($testValue);

        $this->assertSame($testValue, $model->getValue());

        $model->unsetValue();

        $this->assertNull($model->getValue());

        // Property CurrencyID

        $testValue = 'dummy-CurrencyIDValue';
        $model->setCurrencyID($testValue);

        $this->assertSame($testValue, $model->getCurrencyID());

        $model->unsetCurrencyID();

        $this->assertNull($model->getCurrencyID());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxminimum\udt\DateTimeType\DateTimeStringAType.
     */
    public function testModelsZffxminimumUdtDatetimetypeDateTimeStringAType(): void
    {
        $model = new DateTimeStringAType();

        $this->assertInstanceOf(DateTimeStringAType::class, $model);

        // Property Value

        $testValue = 'dummy-ValueValue';
        $model->setValue($testValue);

        $this->assertSame($testValue, $model->getValue());

        $model->unsetValue();

        $this->assertNull($model->getValue());

        // Property Format

        $testValue = 'dummy-FormatValue';
        $model->setFormat($testValue);

        $this->assertSame($testValue, $model->getFormat());

        $model->unsetFormat();

        $this->assertNull($model->getFormat());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxminimum\udt\DateTimeType.
     */
    public function testModelsZffxminimumUdtDateTimeType(): void
    {
        $model = new DateTimeType();

        $this->assertInstanceOf(DateTimeType::class, $model);

        // Property DateTimeString

        $testValue = new DateTimeStringAType();
        $model->setDateTimeString($testValue);

        $this->assertEquals($testValue, $model->getDateTimeString());

        $model->unsetDateTimeString();

        $this->assertNotInstanceOf(DateTimeStringAType::class, $model->getDateTimeString());

        $testValueForDateTimeString = $model->getDateTimeStringWithCreate();

        $this->assertInstanceOf(DateTimeStringAType::class, $testValueForDateTimeString);
        $this->assertSame($testValueForDateTimeString, $model->getDateTimeString());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxminimum\udt\IDType.
     */
    public function testModelsZffxminimumUdtIDType(): void
    {
        $model = new IDType();

        $this->assertInstanceOf(IDType::class, $model);

        // Property Value

        $testValue = 'dummy-ValueValue';
        $model->setValue($testValue);

        $this->assertSame($testValue, $model->getValue());

        $model->unsetValue();

        $this->assertNull($model->getValue());

        // Property SchemeID

        $testValue = 'dummy-SchemeIDValue';
        $model->setSchemeID($testValue);

        $this->assertSame($testValue, $model->getSchemeID());

        $model->unsetSchemeID();

        $this->assertNull($model->getSchemeID());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxminimum\udt\TextType.
     */
    public function testModelsZffxminimumUdtTextType(): void
    {
        $model = new TextType();

        $this->assertInstanceOf(TextType::class, $model);

        // Property Value

        $testValue = 'dummy-ValueValue';
        $model->setValue($testValue);

        $this->assertSame($testValue, $model->getValue());

        $model->unsetValue();

        $this->assertNull($model->getValue());
    }
}
