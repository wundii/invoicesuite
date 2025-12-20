<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentmodels;

use horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\AllowanceChargeReasonCodeType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\CountryIDType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\CurrencyCodeType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\DocumentCodeType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\FormattedDateTimeType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\FormattedDateTimeType\DateTimeStringAType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\PaymentMeansCodeType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\TaxCategoryCodeType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\TaxTypeCodeType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\TimeReferenceCodeType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\CreditorFinancialAccountType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\DebtorFinancialAccountType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\DocumentContextParameterType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\ExchangedDocumentContextType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\ExchangedDocumentType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\HeaderTradeAgreementType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\HeaderTradeDeliveryType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\HeaderTradeSettlementType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\LegalOrganizationType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\NoteType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\ReferencedDocumentType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\SpecifiedPeriodType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\SupplyChainEventType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\SupplyChainTradeTransactionType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\TaxRegistrationType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\TradeAccountingAccountType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\TradeAddressType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\TradeAllowanceChargeType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\TradePartyType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\TradePaymentTermsType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\TradeSettlementHeaderMonetarySummationType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\TradeSettlementPaymentMeansType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\TradeTaxType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\UniversalCommunicationType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\rsm\CrossIndustryInvoice;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\rsm\CrossIndustryInvoiceType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\AmountType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\CodeType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\DateTimeType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\DateTimeType\DateTimeStringAType as DateTimeStringAType1;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\IDType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\IndicatorType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\PercentType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\TextType;
use horstoeko\invoicesuite\tests\TestCase;

final class ZffxBasicWlModelTest extends TestCase
{
    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\AllowanceChargeReasonCodeType.
     */
    public function testModelsZffxbasicwlQdtAllowanceChargeReasonCodeType(): void
    {
        $model = new AllowanceChargeReasonCodeType();

        $this->assertInstanceOf(AllowanceChargeReasonCodeType::class, $model);

        // Property Value

        $testValue = 'dummy-ValueValue';
        $model->setValue($testValue);

        $this->assertSame($testValue, $model->getValue());

        $model->unsetValue();

        $this->assertNull($model->getValue());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\CountryIDType.
     */
    public function testModelsZffxbasicwlQdtCountryIDType(): void
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
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\CurrencyCodeType.
     */
    public function testModelsZffxbasicwlQdtCurrencyCodeType(): void
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
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\DocumentCodeType.
     */
    public function testModelsZffxbasicwlQdtDocumentCodeType(): void
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
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\FormattedDateTimeType\DateTimeStringAType.
     */
    public function testModelsZffxbasicwlQdtFormatteddatetimetypeDateTimeStringAType(): void
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
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\FormattedDateTimeType.
     */
    public function testModelsZffxbasicwlQdtFormattedDateTimeType(): void
    {
        $model = new FormattedDateTimeType();

        $this->assertInstanceOf(FormattedDateTimeType::class, $model);

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
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\PaymentMeansCodeType.
     */
    public function testModelsZffxbasicwlQdtPaymentMeansCodeType(): void
    {
        $model = new PaymentMeansCodeType();

        $this->assertInstanceOf(PaymentMeansCodeType::class, $model);

        // Property Value

        $testValue = 'dummy-ValueValue';
        $model->setValue($testValue);

        $this->assertSame($testValue, $model->getValue());

        $model->unsetValue();

        $this->assertNull($model->getValue());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\TaxCategoryCodeType.
     */
    public function testModelsZffxbasicwlQdtTaxCategoryCodeType(): void
    {
        $model = new TaxCategoryCodeType();

        $this->assertInstanceOf(TaxCategoryCodeType::class, $model);

        // Property Value

        $testValue = 'dummy-ValueValue';
        $model->setValue($testValue);

        $this->assertSame($testValue, $model->getValue());

        $model->unsetValue();

        $this->assertNull($model->getValue());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\TaxTypeCodeType.
     */
    public function testModelsZffxbasicwlQdtTaxTypeCodeType(): void
    {
        $model = new TaxTypeCodeType();

        $this->assertInstanceOf(TaxTypeCodeType::class, $model);

        // Property Value

        $testValue = 'dummy-ValueValue';
        $model->setValue($testValue);

        $this->assertSame($testValue, $model->getValue());

        $model->unsetValue();

        $this->assertNull($model->getValue());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\TimeReferenceCodeType.
     */
    public function testModelsZffxbasicwlQdtTimeReferenceCodeType(): void
    {
        $model = new TimeReferenceCodeType();

        $this->assertInstanceOf(TimeReferenceCodeType::class, $model);

        // Property Value

        $testValue = 'dummy-ValueValue';
        $model->setValue($testValue);

        $this->assertSame($testValue, $model->getValue());

        $model->unsetValue();

        $this->assertNull($model->getValue());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\CreditorFinancialAccountType.
     */
    public function testModelsZffxbasicwlRamCreditorFinancialAccountType(): void
    {
        $model = new CreditorFinancialAccountType();

        $this->assertInstanceOf(CreditorFinancialAccountType::class, $model);

        // Property IBANID

        $testValue = new IDType();
        $model->setIBANID($testValue);

        $this->assertEquals($testValue, $model->getIBANID());

        $model->unsetIBANID();

        $this->assertNotInstanceOf(IDType::class, $model->getIBANID());

        $testValueForIBANID = $model->getIBANIDWithCreate();

        $this->assertInstanceOf(IDType::class, $testValueForIBANID);
        $this->assertSame($testValueForIBANID, $model->getIBANID());

        // Property ProprietaryID

        $testValue = new IDType();
        $model->setProprietaryID($testValue);

        $this->assertEquals($testValue, $model->getProprietaryID());

        $model->unsetProprietaryID();

        $this->assertNotInstanceOf(IDType::class, $model->getProprietaryID());

        $testValueForProprietaryID = $model->getProprietaryIDWithCreate();

        $this->assertInstanceOf(IDType::class, $testValueForProprietaryID);
        $this->assertSame($testValueForProprietaryID, $model->getProprietaryID());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\DebtorFinancialAccountType.
     */
    public function testModelsZffxbasicwlRamDebtorFinancialAccountType(): void
    {
        $model = new DebtorFinancialAccountType();

        $this->assertInstanceOf(DebtorFinancialAccountType::class, $model);

        // Property IBANID

        $testValue = new IDType();
        $model->setIBANID($testValue);

        $this->assertEquals($testValue, $model->getIBANID());

        $model->unsetIBANID();

        $this->assertNotInstanceOf(IDType::class, $model->getIBANID());

        $testValueForIBANID = $model->getIBANIDWithCreate();

        $this->assertInstanceOf(IDType::class, $testValueForIBANID);
        $this->assertSame($testValueForIBANID, $model->getIBANID());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\DocumentContextParameterType.
     */
    public function testModelsZffxbasicwlRamDocumentContextParameterType(): void
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
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\ExchangedDocumentContextType.
     */
    public function testModelsZffxbasicwlRamExchangedDocumentContextType(): void
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
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\ExchangedDocumentType.
     */
    public function testModelsZffxbasicwlRamExchangedDocumentType(): void
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

        // (1) Property IncludedNote - Test set empty array

        $includedNoteItems = [];
        $model->setIncludedNote($includedNoteItems);

        $this->assertIsArray($model->getIncludedNote());
        $this->assertCount(0, $model->getIncludedNote());

        // (2) Property IncludedNote - Add instance

        $includedNoteItem = new NoteType();
        $model->addToIncludedNote($includedNoteItem);

        $this->assertIsArray($model->getIncludedNote());
        $this->assertCount(1, $model->getIncludedNote());

        // (3) Property IncludedNote - Add and create instancc

        $testValueForIncludedNoteItem = $model->addToIncludedNoteWithCreate();

        $this->assertInstanceOf(NoteType::class, $testValueForIncludedNoteItem);
        $this->assertIsArray($model->getIncludedNote());
        $this->assertCount(2, $model->getIncludedNote());

        // (4) Property IncludedNote - Add once an instance

        $includedNoteOnceItem = new NoteType();

        $model->addOnceToIncludedNote($includedNoteOnceItem);
        $model->addOnceToIncludedNote($includedNoteOnceItem);

        $itemsAfterOnce = $model->getIncludedNote();

        $this->assertIsArray($itemsAfterOnce);
        $this->assertCount(2, $itemsAfterOnce);

        // (5) Property IncludedNote - Add once an instance with implicit creation

        $firstIncludedNoteOnceItem = $model->addOnceToIncludedNoteWithCreate();

        $this->assertInstanceOf(NoteType::class, $firstIncludedNoteOnceItem);

        $itemsAfterFirstOnceWithCreate = $model->getIncludedNote();

        $this->assertIsArray($itemsAfterFirstOnceWithCreate);
        $this->assertCount(2, $itemsAfterFirstOnceWithCreate);

        // (5) Property IncludedNote - Add once an instance with implicit creation (2)

        $secondIncludedNoteOnceItem = $model->addOnceToIncludedNoteWithCreate();

        $this->assertIsArray($itemsAfterFirstOnceWithCreate);
        $this->assertCount(2, $itemsAfterFirstOnceWithCreate);
        $this->assertSame($firstIncludedNoteOnceItem, $secondIncludedNoteOnceItem);

        // (7) Property IncludedNote - Clesr

        $model->clearIncludedNote();

        $itemsAfterClear = $model->getIncludedNote();

        $this->assertIsArray($itemsAfterClear);
        $this->assertCount(0, $itemsAfterClear);
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\HeaderTradeAgreementType.
     */
    public function testModelsZffxbasicwlRamHeaderTradeAgreementType(): void
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

        // Property SellerTaxRepresentativeTradeParty

        $testValue = new TradePartyType();
        $model->setSellerTaxRepresentativeTradeParty($testValue);

        $this->assertEquals($testValue, $model->getSellerTaxRepresentativeTradeParty());

        $model->unsetSellerTaxRepresentativeTradeParty();

        $this->assertNotInstanceOf(TradePartyType::class, $model->getSellerTaxRepresentativeTradeParty());

        $testValueForSellerTaxRepresentativeTradeParty = $model->getSellerTaxRepresentativeTradePartyWithCreate();

        $this->assertInstanceOf(TradePartyType::class, $testValueForSellerTaxRepresentativeTradeParty);
        $this->assertSame($testValueForSellerTaxRepresentativeTradeParty, $model->getSellerTaxRepresentativeTradeParty());

        // Property BuyerOrderReferencedDocument

        $testValue = new ReferencedDocumentType();
        $model->setBuyerOrderReferencedDocument($testValue);

        $this->assertEquals($testValue, $model->getBuyerOrderReferencedDocument());

        $model->unsetBuyerOrderReferencedDocument();

        $this->assertNotInstanceOf(ReferencedDocumentType::class, $model->getBuyerOrderReferencedDocument());

        $testValueForBuyerOrderReferencedDocument = $model->getBuyerOrderReferencedDocumentWithCreate();

        $this->assertInstanceOf(ReferencedDocumentType::class, $testValueForBuyerOrderReferencedDocument);
        $this->assertSame($testValueForBuyerOrderReferencedDocument, $model->getBuyerOrderReferencedDocument());

        // Property ContractReferencedDocument

        $testValue = new ReferencedDocumentType();
        $model->setContractReferencedDocument($testValue);

        $this->assertEquals($testValue, $model->getContractReferencedDocument());

        $model->unsetContractReferencedDocument();

        $this->assertNotInstanceOf(ReferencedDocumentType::class, $model->getContractReferencedDocument());

        $testValueForContractReferencedDocument = $model->getContractReferencedDocumentWithCreate();

        $this->assertInstanceOf(ReferencedDocumentType::class, $testValueForContractReferencedDocument);
        $this->assertSame($testValueForContractReferencedDocument, $model->getContractReferencedDocument());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\HeaderTradeDeliveryType.
     */
    public function testModelsZffxbasicwlRamHeaderTradeDeliveryType(): void
    {
        $model = new HeaderTradeDeliveryType();

        $this->assertInstanceOf(HeaderTradeDeliveryType::class, $model);

        // Property ShipToTradeParty

        $testValue = new TradePartyType();
        $model->setShipToTradeParty($testValue);

        $this->assertEquals($testValue, $model->getShipToTradeParty());

        $model->unsetShipToTradeParty();

        $this->assertNotInstanceOf(TradePartyType::class, $model->getShipToTradeParty());

        $testValueForShipToTradeParty = $model->getShipToTradePartyWithCreate();

        $this->assertInstanceOf(TradePartyType::class, $testValueForShipToTradeParty);
        $this->assertSame($testValueForShipToTradeParty, $model->getShipToTradeParty());

        // Property ActualDeliverySupplyChainEvent

        $testValue = new SupplyChainEventType();
        $model->setActualDeliverySupplyChainEvent($testValue);

        $this->assertEquals($testValue, $model->getActualDeliverySupplyChainEvent());

        $model->unsetActualDeliverySupplyChainEvent();

        $this->assertNotInstanceOf(SupplyChainEventType::class, $model->getActualDeliverySupplyChainEvent());

        $testValueForActualDeliverySupplyChainEvent = $model->getActualDeliverySupplyChainEventWithCreate();

        $this->assertInstanceOf(SupplyChainEventType::class, $testValueForActualDeliverySupplyChainEvent);
        $this->assertSame($testValueForActualDeliverySupplyChainEvent, $model->getActualDeliverySupplyChainEvent());

        // Property DespatchAdviceReferencedDocument

        $testValue = new ReferencedDocumentType();
        $model->setDespatchAdviceReferencedDocument($testValue);

        $this->assertEquals($testValue, $model->getDespatchAdviceReferencedDocument());

        $model->unsetDespatchAdviceReferencedDocument();

        $this->assertNotInstanceOf(ReferencedDocumentType::class, $model->getDespatchAdviceReferencedDocument());

        $testValueForDespatchAdviceReferencedDocument = $model->getDespatchAdviceReferencedDocumentWithCreate();

        $this->assertInstanceOf(ReferencedDocumentType::class, $testValueForDespatchAdviceReferencedDocument);
        $this->assertSame($testValueForDespatchAdviceReferencedDocument, $model->getDespatchAdviceReferencedDocument());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\HeaderTradeSettlementType.
     */
    public function testModelsZffxbasicwlRamHeaderTradeSettlementType(): void
    {
        $model = new HeaderTradeSettlementType();

        $this->assertInstanceOf(HeaderTradeSettlementType::class, $model);

        // Property CreditorReferenceID

        $testValue = new IDType();
        $model->setCreditorReferenceID($testValue);

        $this->assertEquals($testValue, $model->getCreditorReferenceID());

        $model->unsetCreditorReferenceID();

        $this->assertNotInstanceOf(IDType::class, $model->getCreditorReferenceID());

        $testValueForCreditorReferenceID = $model->getCreditorReferenceIDWithCreate();

        $this->assertInstanceOf(IDType::class, $testValueForCreditorReferenceID);
        $this->assertSame($testValueForCreditorReferenceID, $model->getCreditorReferenceID());

        // Property PaymentReference

        $testValue = new TextType();
        $model->setPaymentReference($testValue);

        $this->assertEquals($testValue, $model->getPaymentReference());

        $model->unsetPaymentReference();

        $this->assertNotInstanceOf(TextType::class, $model->getPaymentReference());

        $testValueForPaymentReference = $model->getPaymentReferenceWithCreate();

        $this->assertInstanceOf(TextType::class, $testValueForPaymentReference);
        $this->assertSame($testValueForPaymentReference, $model->getPaymentReference());

        // Property TaxCurrencyCode

        $testValue = new CodeType();
        $model->setTaxCurrencyCode($testValue);

        $this->assertEquals($testValue, $model->getTaxCurrencyCode());

        $model->unsetTaxCurrencyCode();

        $this->assertNotInstanceOf(CodeType::class, $model->getTaxCurrencyCode());

        $testValueForTaxCurrencyCode = $model->getTaxCurrencyCodeWithCreate();

        $this->assertInstanceOf(CodeType::class, $testValueForTaxCurrencyCode);
        $this->assertSame($testValueForTaxCurrencyCode, $model->getTaxCurrencyCode());

        // Property InvoiceCurrencyCode

        $testValue = new CurrencyCodeType();
        $model->setInvoiceCurrencyCode($testValue);

        $this->assertEquals($testValue, $model->getInvoiceCurrencyCode());

        $model->unsetInvoiceCurrencyCode();

        $this->assertNotInstanceOf(CurrencyCodeType::class, $model->getInvoiceCurrencyCode());

        $testValueForInvoiceCurrencyCode = $model->getInvoiceCurrencyCodeWithCreate();

        $this->assertInstanceOf(CurrencyCodeType::class, $testValueForInvoiceCurrencyCode);
        $this->assertSame($testValueForInvoiceCurrencyCode, $model->getInvoiceCurrencyCode());

        // Property PayeeTradeParty

        $testValue = new TradePartyType();
        $model->setPayeeTradeParty($testValue);

        $this->assertEquals($testValue, $model->getPayeeTradeParty());

        $model->unsetPayeeTradeParty();

        $this->assertNotInstanceOf(TradePartyType::class, $model->getPayeeTradeParty());

        $testValueForPayeeTradeParty = $model->getPayeeTradePartyWithCreate();

        $this->assertInstanceOf(TradePartyType::class, $testValueForPayeeTradeParty);
        $this->assertSame($testValueForPayeeTradeParty, $model->getPayeeTradeParty());

        // (1) Property SpecifiedTradeSettlementPaymentMeans - Test set empty array

        $specifiedTradeSettlementPaymentMeansItems = [];
        $model->setSpecifiedTradeSettlementPaymentMeans($specifiedTradeSettlementPaymentMeansItems);

        $this->assertIsArray($model->getSpecifiedTradeSettlementPaymentMeans());
        $this->assertCount(0, $model->getSpecifiedTradeSettlementPaymentMeans());

        // (2) Property SpecifiedTradeSettlementPaymentMeans - Add instance

        $specifiedTradeSettlementPaymentMeansItem = new TradeSettlementPaymentMeansType();
        $model->addToSpecifiedTradeSettlementPaymentMeans($specifiedTradeSettlementPaymentMeansItem);

        $this->assertIsArray($model->getSpecifiedTradeSettlementPaymentMeans());
        $this->assertCount(1, $model->getSpecifiedTradeSettlementPaymentMeans());

        // (3) Property SpecifiedTradeSettlementPaymentMeans - Add and create instancc

        $testValueForSpecifiedTradeSettlementPaymentMeansItem = $model->addToSpecifiedTradeSettlementPaymentMeansWithCreate();

        $this->assertInstanceOf(TradeSettlementPaymentMeansType::class, $testValueForSpecifiedTradeSettlementPaymentMeansItem);
        $this->assertIsArray($model->getSpecifiedTradeSettlementPaymentMeans());
        $this->assertCount(2, $model->getSpecifiedTradeSettlementPaymentMeans());

        // (4) Property SpecifiedTradeSettlementPaymentMeans - Add once an instance

        $specifiedTradeSettlementPaymentMeansOnceItem = new TradeSettlementPaymentMeansType();

        $model->addOnceToSpecifiedTradeSettlementPaymentMeans($specifiedTradeSettlementPaymentMeansOnceItem);
        $model->addOnceToSpecifiedTradeSettlementPaymentMeans($specifiedTradeSettlementPaymentMeansOnceItem);

        $itemsAfterOnce = $model->getSpecifiedTradeSettlementPaymentMeans();

        $this->assertIsArray($itemsAfterOnce);
        $this->assertCount(2, $itemsAfterOnce);

        // (5) Property SpecifiedTradeSettlementPaymentMeans - Add once an instance with implicit creation

        $firstSpecifiedTradeSettlementPaymentMeansOnceItem = $model->addOnceToSpecifiedTradeSettlementPaymentMeansWithCreate();

        $this->assertInstanceOf(TradeSettlementPaymentMeansType::class, $firstSpecifiedTradeSettlementPaymentMeansOnceItem);

        $itemsAfterFirstOnceWithCreate = $model->getSpecifiedTradeSettlementPaymentMeans();

        $this->assertIsArray($itemsAfterFirstOnceWithCreate);
        $this->assertCount(2, $itemsAfterFirstOnceWithCreate);

        // (5) Property SpecifiedTradeSettlementPaymentMeans - Add once an instance with implicit creation (2)

        $secondSpecifiedTradeSettlementPaymentMeansOnceItem = $model->addOnceToSpecifiedTradeSettlementPaymentMeansWithCreate();

        $this->assertIsArray($itemsAfterFirstOnceWithCreate);
        $this->assertCount(2, $itemsAfterFirstOnceWithCreate);
        $this->assertSame($firstSpecifiedTradeSettlementPaymentMeansOnceItem, $secondSpecifiedTradeSettlementPaymentMeansOnceItem);

        // (7) Property SpecifiedTradeSettlementPaymentMeans - Clesr

        $model->clearSpecifiedTradeSettlementPaymentMeans();

        $itemsAfterClear = $model->getSpecifiedTradeSettlementPaymentMeans();

        $this->assertIsArray($itemsAfterClear);
        $this->assertCount(0, $itemsAfterClear);

        // (1) Property ApplicableTradeTax - Test set empty array

        $applicableTradeTaxItems = [];
        $model->setApplicableTradeTax($applicableTradeTaxItems);

        $this->assertIsArray($model->getApplicableTradeTax());
        $this->assertCount(0, $model->getApplicableTradeTax());

        // (2) Property ApplicableTradeTax - Add instance

        $applicableTradeTaxItem = new TradeTaxType();
        $model->addToApplicableTradeTax($applicableTradeTaxItem);

        $this->assertIsArray($model->getApplicableTradeTax());
        $this->assertCount(1, $model->getApplicableTradeTax());

        // (3) Property ApplicableTradeTax - Add and create instancc

        $testValueForApplicableTradeTaxItem = $model->addToApplicableTradeTaxWithCreate();

        $this->assertInstanceOf(TradeTaxType::class, $testValueForApplicableTradeTaxItem);
        $this->assertIsArray($model->getApplicableTradeTax());
        $this->assertCount(2, $model->getApplicableTradeTax());

        // (4) Property ApplicableTradeTax - Add once an instance

        $applicableTradeTaxOnceItem = new TradeTaxType();

        $model->addOnceToApplicableTradeTax($applicableTradeTaxOnceItem);
        $model->addOnceToApplicableTradeTax($applicableTradeTaxOnceItem);

        $itemsAfterOnce = $model->getApplicableTradeTax();

        $this->assertIsArray($itemsAfterOnce);
        $this->assertCount(2, $itemsAfterOnce);

        // (5) Property ApplicableTradeTax - Add once an instance with implicit creation

        $firstApplicableTradeTaxOnceItem = $model->addOnceToApplicableTradeTaxWithCreate();

        $this->assertInstanceOf(TradeTaxType::class, $firstApplicableTradeTaxOnceItem);

        $itemsAfterFirstOnceWithCreate = $model->getApplicableTradeTax();

        $this->assertIsArray($itemsAfterFirstOnceWithCreate);
        $this->assertCount(2, $itemsAfterFirstOnceWithCreate);

        // (5) Property ApplicableTradeTax - Add once an instance with implicit creation (2)

        $secondApplicableTradeTaxOnceItem = $model->addOnceToApplicableTradeTaxWithCreate();

        $this->assertIsArray($itemsAfterFirstOnceWithCreate);
        $this->assertCount(2, $itemsAfterFirstOnceWithCreate);
        $this->assertSame($firstApplicableTradeTaxOnceItem, $secondApplicableTradeTaxOnceItem);

        // (7) Property ApplicableTradeTax - Clesr

        $model->clearApplicableTradeTax();

        $itemsAfterClear = $model->getApplicableTradeTax();

        $this->assertIsArray($itemsAfterClear);
        $this->assertCount(0, $itemsAfterClear);

        // Property BillingSpecifiedPeriod

        $testValue = new SpecifiedPeriodType();
        $model->setBillingSpecifiedPeriod($testValue);

        $this->assertEquals($testValue, $model->getBillingSpecifiedPeriod());

        $model->unsetBillingSpecifiedPeriod();

        $this->assertNotInstanceOf(SpecifiedPeriodType::class, $model->getBillingSpecifiedPeriod());

        $testValueForBillingSpecifiedPeriod = $model->getBillingSpecifiedPeriodWithCreate();

        $this->assertInstanceOf(SpecifiedPeriodType::class, $testValueForBillingSpecifiedPeriod);
        $this->assertSame($testValueForBillingSpecifiedPeriod, $model->getBillingSpecifiedPeriod());

        // (1) Property SpecifiedTradeAllowanceCharge - Test set empty array

        $specifiedTradeAllowanceChargeItems = [];
        $model->setSpecifiedTradeAllowanceCharge($specifiedTradeAllowanceChargeItems);

        $this->assertIsArray($model->getSpecifiedTradeAllowanceCharge());
        $this->assertCount(0, $model->getSpecifiedTradeAllowanceCharge());

        // (2) Property SpecifiedTradeAllowanceCharge - Add instance

        $specifiedTradeAllowanceChargeItem = new TradeAllowanceChargeType();
        $model->addToSpecifiedTradeAllowanceCharge($specifiedTradeAllowanceChargeItem);

        $this->assertIsArray($model->getSpecifiedTradeAllowanceCharge());
        $this->assertCount(1, $model->getSpecifiedTradeAllowanceCharge());

        // (3) Property SpecifiedTradeAllowanceCharge - Add and create instancc

        $testValueForSpecifiedTradeAllowanceChargeItem = $model->addToSpecifiedTradeAllowanceChargeWithCreate();

        $this->assertInstanceOf(TradeAllowanceChargeType::class, $testValueForSpecifiedTradeAllowanceChargeItem);
        $this->assertIsArray($model->getSpecifiedTradeAllowanceCharge());
        $this->assertCount(2, $model->getSpecifiedTradeAllowanceCharge());

        // (4) Property SpecifiedTradeAllowanceCharge - Add once an instance

        $specifiedTradeAllowanceChargeOnceItem = new TradeAllowanceChargeType();

        $model->addOnceToSpecifiedTradeAllowanceCharge($specifiedTradeAllowanceChargeOnceItem);
        $model->addOnceToSpecifiedTradeAllowanceCharge($specifiedTradeAllowanceChargeOnceItem);

        $itemsAfterOnce = $model->getSpecifiedTradeAllowanceCharge();

        $this->assertIsArray($itemsAfterOnce);
        $this->assertCount(2, $itemsAfterOnce);

        // (5) Property SpecifiedTradeAllowanceCharge - Add once an instance with implicit creation

        $firstSpecifiedTradeAllowanceChargeOnceItem = $model->addOnceToSpecifiedTradeAllowanceChargeWithCreate();

        $this->assertInstanceOf(TradeAllowanceChargeType::class, $firstSpecifiedTradeAllowanceChargeOnceItem);

        $itemsAfterFirstOnceWithCreate = $model->getSpecifiedTradeAllowanceCharge();

        $this->assertIsArray($itemsAfterFirstOnceWithCreate);
        $this->assertCount(2, $itemsAfterFirstOnceWithCreate);

        // (5) Property SpecifiedTradeAllowanceCharge - Add once an instance with implicit creation (2)

        $secondSpecifiedTradeAllowanceChargeOnceItem = $model->addOnceToSpecifiedTradeAllowanceChargeWithCreate();

        $this->assertIsArray($itemsAfterFirstOnceWithCreate);
        $this->assertCount(2, $itemsAfterFirstOnceWithCreate);
        $this->assertSame($firstSpecifiedTradeAllowanceChargeOnceItem, $secondSpecifiedTradeAllowanceChargeOnceItem);

        // (7) Property SpecifiedTradeAllowanceCharge - Clesr

        $model->clearSpecifiedTradeAllowanceCharge();

        $itemsAfterClear = $model->getSpecifiedTradeAllowanceCharge();

        $this->assertIsArray($itemsAfterClear);
        $this->assertCount(0, $itemsAfterClear);

        // Property SpecifiedTradePaymentTerms

        $testValue = new TradePaymentTermsType();
        $model->setSpecifiedTradePaymentTerms($testValue);

        $this->assertEquals($testValue, $model->getSpecifiedTradePaymentTerms());

        $model->unsetSpecifiedTradePaymentTerms();

        $this->assertNotInstanceOf(TradePaymentTermsType::class, $model->getSpecifiedTradePaymentTerms());

        $testValueForSpecifiedTradePaymentTerms = $model->getSpecifiedTradePaymentTermsWithCreate();

        $this->assertInstanceOf(TradePaymentTermsType::class, $testValueForSpecifiedTradePaymentTerms);
        $this->assertSame($testValueForSpecifiedTradePaymentTerms, $model->getSpecifiedTradePaymentTerms());

        // Property SpecifiedTradeSettlementHeaderMonetarySummation

        $testValue = new TradeSettlementHeaderMonetarySummationType();
        $model->setSpecifiedTradeSettlementHeaderMonetarySummation($testValue);

        $this->assertEquals($testValue, $model->getSpecifiedTradeSettlementHeaderMonetarySummation());

        $model->unsetSpecifiedTradeSettlementHeaderMonetarySummation();

        $this->assertNotInstanceOf(TradeSettlementHeaderMonetarySummationType::class, $model->getSpecifiedTradeSettlementHeaderMonetarySummation());

        $testValueForSpecifiedTradeSettlementHeaderMonetarySummation = $model->getSpecifiedTradeSettlementHeaderMonetarySummationWithCreate();

        $this->assertInstanceOf(TradeSettlementHeaderMonetarySummationType::class, $testValueForSpecifiedTradeSettlementHeaderMonetarySummation);
        $this->assertSame($testValueForSpecifiedTradeSettlementHeaderMonetarySummation, $model->getSpecifiedTradeSettlementHeaderMonetarySummation());

        // (1) Property InvoiceReferencedDocument - Test set empty array

        $invoiceReferencedDocumentItems = [];
        $model->setInvoiceReferencedDocument($invoiceReferencedDocumentItems);

        $this->assertIsArray($model->getInvoiceReferencedDocument());
        $this->assertCount(0, $model->getInvoiceReferencedDocument());

        // (2) Property InvoiceReferencedDocument - Add instance

        $invoiceReferencedDocumentItem = new ReferencedDocumentType();
        $model->addToInvoiceReferencedDocument($invoiceReferencedDocumentItem);

        $this->assertIsArray($model->getInvoiceReferencedDocument());
        $this->assertCount(1, $model->getInvoiceReferencedDocument());

        // (3) Property InvoiceReferencedDocument - Add and create instancc

        $testValueForInvoiceReferencedDocumentItem = $model->addToInvoiceReferencedDocumentWithCreate();

        $this->assertInstanceOf(ReferencedDocumentType::class, $testValueForInvoiceReferencedDocumentItem);
        $this->assertIsArray($model->getInvoiceReferencedDocument());
        $this->assertCount(2, $model->getInvoiceReferencedDocument());

        // (4) Property InvoiceReferencedDocument - Add once an instance

        $invoiceReferencedDocumentOnceItem = new ReferencedDocumentType();

        $model->addOnceToInvoiceReferencedDocument($invoiceReferencedDocumentOnceItem);
        $model->addOnceToInvoiceReferencedDocument($invoiceReferencedDocumentOnceItem);

        $itemsAfterOnce = $model->getInvoiceReferencedDocument();

        $this->assertIsArray($itemsAfterOnce);
        $this->assertCount(2, $itemsAfterOnce);

        // (5) Property InvoiceReferencedDocument - Add once an instance with implicit creation

        $firstInvoiceReferencedDocumentOnceItem = $model->addOnceToInvoiceReferencedDocumentWithCreate();

        $this->assertInstanceOf(ReferencedDocumentType::class, $firstInvoiceReferencedDocumentOnceItem);

        $itemsAfterFirstOnceWithCreate = $model->getInvoiceReferencedDocument();

        $this->assertIsArray($itemsAfterFirstOnceWithCreate);
        $this->assertCount(2, $itemsAfterFirstOnceWithCreate);

        // (5) Property InvoiceReferencedDocument - Add once an instance with implicit creation (2)

        $secondInvoiceReferencedDocumentOnceItem = $model->addOnceToInvoiceReferencedDocumentWithCreate();

        $this->assertIsArray($itemsAfterFirstOnceWithCreate);
        $this->assertCount(2, $itemsAfterFirstOnceWithCreate);
        $this->assertSame($firstInvoiceReferencedDocumentOnceItem, $secondInvoiceReferencedDocumentOnceItem);

        // (7) Property InvoiceReferencedDocument - Clesr

        $model->clearInvoiceReferencedDocument();

        $itemsAfterClear = $model->getInvoiceReferencedDocument();

        $this->assertIsArray($itemsAfterClear);
        $this->assertCount(0, $itemsAfterClear);

        // Property ReceivableSpecifiedTradeAccountingAccount

        $testValue = new TradeAccountingAccountType();
        $model->setReceivableSpecifiedTradeAccountingAccount($testValue);

        $this->assertEquals($testValue, $model->getReceivableSpecifiedTradeAccountingAccount());

        $model->unsetReceivableSpecifiedTradeAccountingAccount();

        $this->assertNotInstanceOf(TradeAccountingAccountType::class, $model->getReceivableSpecifiedTradeAccountingAccount());

        $testValueForReceivableSpecifiedTradeAccountingAccount = $model->getReceivableSpecifiedTradeAccountingAccountWithCreate();

        $this->assertInstanceOf(TradeAccountingAccountType::class, $testValueForReceivableSpecifiedTradeAccountingAccount);
        $this->assertSame($testValueForReceivableSpecifiedTradeAccountingAccount, $model->getReceivableSpecifiedTradeAccountingAccount());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\LegalOrganizationType.
     */
    public function testModelsZffxbasicwlRamLegalOrganizationType(): void
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

        // Property TradingBusinessName

        $testValue = new TextType();
        $model->setTradingBusinessName($testValue);

        $this->assertEquals($testValue, $model->getTradingBusinessName());

        $model->unsetTradingBusinessName();

        $this->assertNotInstanceOf(TextType::class, $model->getTradingBusinessName());

        $testValueForTradingBusinessName = $model->getTradingBusinessNameWithCreate();

        $this->assertInstanceOf(TextType::class, $testValueForTradingBusinessName);
        $this->assertSame($testValueForTradingBusinessName, $model->getTradingBusinessName());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\NoteType.
     */
    public function testModelsZffxbasicwlRamNoteType(): void
    {
        $model = new NoteType();

        $this->assertInstanceOf(NoteType::class, $model);

        // Property Content

        $testValue = new TextType();
        $model->setContent($testValue);

        $this->assertEquals($testValue, $model->getContent());

        $model->unsetContent();

        $this->assertNotInstanceOf(TextType::class, $model->getContent());

        $testValueForContent = $model->getContentWithCreate();

        $this->assertInstanceOf(TextType::class, $testValueForContent);
        $this->assertSame($testValueForContent, $model->getContent());

        // Property SubjectCode

        $testValue = new CodeType();
        $model->setSubjectCode($testValue);

        $this->assertEquals($testValue, $model->getSubjectCode());

        $model->unsetSubjectCode();

        $this->assertNotInstanceOf(CodeType::class, $model->getSubjectCode());

        $testValueForSubjectCode = $model->getSubjectCodeWithCreate();

        $this->assertInstanceOf(CodeType::class, $testValueForSubjectCode);
        $this->assertSame($testValueForSubjectCode, $model->getSubjectCode());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\ReferencedDocumentType.
     */
    public function testModelsZffxbasicwlRamReferencedDocumentType(): void
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

        // Property FormattedIssueDateTime

        $testValue = new FormattedDateTimeType();
        $model->setFormattedIssueDateTime($testValue);

        $this->assertEquals($testValue, $model->getFormattedIssueDateTime());

        $model->unsetFormattedIssueDateTime();

        $this->assertNotInstanceOf(FormattedDateTimeType::class, $model->getFormattedIssueDateTime());

        $testValueForFormattedIssueDateTime = $model->getFormattedIssueDateTimeWithCreate();

        $this->assertInstanceOf(FormattedDateTimeType::class, $testValueForFormattedIssueDateTime);
        $this->assertSame($testValueForFormattedIssueDateTime, $model->getFormattedIssueDateTime());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\SpecifiedPeriodType.
     */
    public function testModelsZffxbasicwlRamSpecifiedPeriodType(): void
    {
        $model = new SpecifiedPeriodType();

        $this->assertInstanceOf(SpecifiedPeriodType::class, $model);

        // Property StartDateTime

        $testValue = new DateTimeType();
        $model->setStartDateTime($testValue);

        $this->assertEquals($testValue, $model->getStartDateTime());

        $model->unsetStartDateTime();

        $this->assertNotInstanceOf(DateTimeType::class, $model->getStartDateTime());

        $testValueForStartDateTime = $model->getStartDateTimeWithCreate();

        $this->assertInstanceOf(DateTimeType::class, $testValueForStartDateTime);
        $this->assertSame($testValueForStartDateTime, $model->getStartDateTime());

        // Property EndDateTime

        $testValue = new DateTimeType();
        $model->setEndDateTime($testValue);

        $this->assertEquals($testValue, $model->getEndDateTime());

        $model->unsetEndDateTime();

        $this->assertNotInstanceOf(DateTimeType::class, $model->getEndDateTime());

        $testValueForEndDateTime = $model->getEndDateTimeWithCreate();

        $this->assertInstanceOf(DateTimeType::class, $testValueForEndDateTime);
        $this->assertSame($testValueForEndDateTime, $model->getEndDateTime());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\SupplyChainEventType.
     */
    public function testModelsZffxbasicwlRamSupplyChainEventType(): void
    {
        $model = new SupplyChainEventType();

        $this->assertInstanceOf(SupplyChainEventType::class, $model);

        // Property OccurrenceDateTime

        $testValue = new DateTimeType();
        $model->setOccurrenceDateTime($testValue);

        $this->assertEquals($testValue, $model->getOccurrenceDateTime());

        $model->unsetOccurrenceDateTime();

        $this->assertNotInstanceOf(DateTimeType::class, $model->getOccurrenceDateTime());

        $testValueForOccurrenceDateTime = $model->getOccurrenceDateTimeWithCreate();

        $this->assertInstanceOf(DateTimeType::class, $testValueForOccurrenceDateTime);
        $this->assertSame($testValueForOccurrenceDateTime, $model->getOccurrenceDateTime());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\SupplyChainTradeTransactionType.
     */
    public function testModelsZffxbasicwlRamSupplyChainTradeTransactionType(): void
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
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\TaxRegistrationType.
     */
    public function testModelsZffxbasicwlRamTaxRegistrationType(): void
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
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\TradeAccountingAccountType.
     */
    public function testModelsZffxbasicwlRamTradeAccountingAccountType(): void
    {
        $model = new TradeAccountingAccountType();

        $this->assertInstanceOf(TradeAccountingAccountType::class, $model);

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
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\TradeAddressType.
     */
    public function testModelsZffxbasicwlRamTradeAddressType(): void
    {
        $model = new TradeAddressType();

        $this->assertInstanceOf(TradeAddressType::class, $model);

        // Property PostcodeCode

        $testValue = new CodeType();
        $model->setPostcodeCode($testValue);

        $this->assertEquals($testValue, $model->getPostcodeCode());

        $model->unsetPostcodeCode();

        $this->assertNotInstanceOf(CodeType::class, $model->getPostcodeCode());

        $testValueForPostcodeCode = $model->getPostcodeCodeWithCreate();

        $this->assertInstanceOf(CodeType::class, $testValueForPostcodeCode);
        $this->assertSame($testValueForPostcodeCode, $model->getPostcodeCode());

        // Property LineOne

        $testValue = new TextType();
        $model->setLineOne($testValue);

        $this->assertEquals($testValue, $model->getLineOne());

        $model->unsetLineOne();

        $this->assertNotInstanceOf(TextType::class, $model->getLineOne());

        $testValueForLineOne = $model->getLineOneWithCreate();

        $this->assertInstanceOf(TextType::class, $testValueForLineOne);
        $this->assertSame($testValueForLineOne, $model->getLineOne());

        // Property LineTwo

        $testValue = new TextType();
        $model->setLineTwo($testValue);

        $this->assertEquals($testValue, $model->getLineTwo());

        $model->unsetLineTwo();

        $this->assertNotInstanceOf(TextType::class, $model->getLineTwo());

        $testValueForLineTwo = $model->getLineTwoWithCreate();

        $this->assertInstanceOf(TextType::class, $testValueForLineTwo);
        $this->assertSame($testValueForLineTwo, $model->getLineTwo());

        // Property LineThree

        $testValue = new TextType();
        $model->setLineThree($testValue);

        $this->assertEquals($testValue, $model->getLineThree());

        $model->unsetLineThree();

        $this->assertNotInstanceOf(TextType::class, $model->getLineThree());

        $testValueForLineThree = $model->getLineThreeWithCreate();

        $this->assertInstanceOf(TextType::class, $testValueForLineThree);
        $this->assertSame($testValueForLineThree, $model->getLineThree());

        // Property CityName

        $testValue = new TextType();
        $model->setCityName($testValue);

        $this->assertEquals($testValue, $model->getCityName());

        $model->unsetCityName();

        $this->assertNotInstanceOf(TextType::class, $model->getCityName());

        $testValueForCityName = $model->getCityNameWithCreate();

        $this->assertInstanceOf(TextType::class, $testValueForCityName);
        $this->assertSame($testValueForCityName, $model->getCityName());

        // Property CountryID

        $testValue = new CountryIDType();
        $model->setCountryID($testValue);

        $this->assertEquals($testValue, $model->getCountryID());

        $model->unsetCountryID();

        $this->assertNotInstanceOf(CountryIDType::class, $model->getCountryID());

        $testValueForCountryID = $model->getCountryIDWithCreate();

        $this->assertInstanceOf(CountryIDType::class, $testValueForCountryID);
        $this->assertSame($testValueForCountryID, $model->getCountryID());

        // Property CountrySubDivisionName

        $testValue = new TextType();
        $model->setCountrySubDivisionName($testValue);

        $this->assertEquals($testValue, $model->getCountrySubDivisionName());

        $model->unsetCountrySubDivisionName();

        $this->assertNotInstanceOf(TextType::class, $model->getCountrySubDivisionName());

        $testValueForCountrySubDivisionName = $model->getCountrySubDivisionNameWithCreate();

        $this->assertInstanceOf(TextType::class, $testValueForCountrySubDivisionName);
        $this->assertSame($testValueForCountrySubDivisionName, $model->getCountrySubDivisionName());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\TradeAllowanceChargeType.
     */
    public function testModelsZffxbasicwlRamTradeAllowanceChargeType(): void
    {
        $model = new TradeAllowanceChargeType();

        $this->assertInstanceOf(TradeAllowanceChargeType::class, $model);

        // Property ChargeIndicator

        $testValue = new IndicatorType();
        $model->setChargeIndicator($testValue);

        $this->assertEquals($testValue, $model->getChargeIndicator());

        $model->unsetChargeIndicator();

        $this->assertNotInstanceOf(IndicatorType::class, $model->getChargeIndicator());

        $testValueForChargeIndicator = $model->getChargeIndicatorWithCreate();

        $this->assertInstanceOf(IndicatorType::class, $testValueForChargeIndicator);
        $this->assertSame($testValueForChargeIndicator, $model->getChargeIndicator());

        // Property CalculationPercent

        $testValue = new PercentType();
        $model->setCalculationPercent($testValue);

        $this->assertEquals($testValue, $model->getCalculationPercent());

        $model->unsetCalculationPercent();

        $this->assertNotInstanceOf(PercentType::class, $model->getCalculationPercent());

        $testValueForCalculationPercent = $model->getCalculationPercentWithCreate();

        $this->assertInstanceOf(PercentType::class, $testValueForCalculationPercent);
        $this->assertSame($testValueForCalculationPercent, $model->getCalculationPercent());

        // Property BasisAmount

        $testValue = new AmountType();
        $model->setBasisAmount($testValue);

        $this->assertEquals($testValue, $model->getBasisAmount());

        $model->unsetBasisAmount();

        $this->assertNotInstanceOf(AmountType::class, $model->getBasisAmount());

        $testValueForBasisAmount = $model->getBasisAmountWithCreate();

        $this->assertInstanceOf(AmountType::class, $testValueForBasisAmount);
        $this->assertSame($testValueForBasisAmount, $model->getBasisAmount());

        // Property ActualAmount

        $testValue = new AmountType();
        $model->setActualAmount($testValue);

        $this->assertEquals($testValue, $model->getActualAmount());

        $model->unsetActualAmount();

        $this->assertNotInstanceOf(AmountType::class, $model->getActualAmount());

        $testValueForActualAmount = $model->getActualAmountWithCreate();

        $this->assertInstanceOf(AmountType::class, $testValueForActualAmount);
        $this->assertSame($testValueForActualAmount, $model->getActualAmount());

        // Property ReasonCode

        $testValue = new AllowanceChargeReasonCodeType();
        $model->setReasonCode($testValue);

        $this->assertEquals($testValue, $model->getReasonCode());

        $model->unsetReasonCode();

        $this->assertNotInstanceOf(AllowanceChargeReasonCodeType::class, $model->getReasonCode());

        $testValueForReasonCode = $model->getReasonCodeWithCreate();

        $this->assertInstanceOf(AllowanceChargeReasonCodeType::class, $testValueForReasonCode);
        $this->assertSame($testValueForReasonCode, $model->getReasonCode());

        // Property Reason

        $testValue = new TextType();
        $model->setReason($testValue);

        $this->assertEquals($testValue, $model->getReason());

        $model->unsetReason();

        $this->assertNotInstanceOf(TextType::class, $model->getReason());

        $testValueForReason = $model->getReasonWithCreate();

        $this->assertInstanceOf(TextType::class, $testValueForReason);
        $this->assertSame($testValueForReason, $model->getReason());

        // Property CategoryTradeTax

        $testValue = new TradeTaxType();
        $model->setCategoryTradeTax($testValue);

        $this->assertEquals($testValue, $model->getCategoryTradeTax());

        $model->unsetCategoryTradeTax();

        $this->assertNotInstanceOf(TradeTaxType::class, $model->getCategoryTradeTax());

        $testValueForCategoryTradeTax = $model->getCategoryTradeTaxWithCreate();

        $this->assertInstanceOf(TradeTaxType::class, $testValueForCategoryTradeTax);
        $this->assertSame($testValueForCategoryTradeTax, $model->getCategoryTradeTax());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\TradePartyType.
     */
    public function testModelsZffxbasicwlRamTradePartyType(): void
    {
        $model = new TradePartyType();

        $this->assertInstanceOf(TradePartyType::class, $model);

        // (1) Property ID - Test set empty array

        $iDItems = [];
        $model->setID($iDItems);

        $this->assertIsArray($model->getID());
        $this->assertCount(0, $model->getID());

        // (2) Property ID - Add instance

        $iDItem = new IDType();
        $model->addToID($iDItem);

        $this->assertIsArray($model->getID());
        $this->assertCount(1, $model->getID());

        // (3) Property ID - Add and create instancc

        $testValueForIDItem = $model->addToIDWithCreate();

        $this->assertInstanceOf(IDType::class, $testValueForIDItem);
        $this->assertIsArray($model->getID());
        $this->assertCount(2, $model->getID());

        // (4) Property ID - Add once an instance

        $iDOnceItem = new IDType();

        $model->addOnceToID($iDOnceItem);
        $model->addOnceToID($iDOnceItem);

        $itemsAfterOnce = $model->getID();

        $this->assertIsArray($itemsAfterOnce);
        $this->assertCount(2, $itemsAfterOnce);

        // (5) Property ID - Add once an instance with implicit creation

        $firstIDOnceItem = $model->addOnceToIDWithCreate();

        $this->assertInstanceOf(IDType::class, $firstIDOnceItem);

        $itemsAfterFirstOnceWithCreate = $model->getID();

        $this->assertIsArray($itemsAfterFirstOnceWithCreate);
        $this->assertCount(2, $itemsAfterFirstOnceWithCreate);

        // (5) Property ID - Add once an instance with implicit creation (2)

        $secondIDOnceItem = $model->addOnceToIDWithCreate();

        $this->assertIsArray($itemsAfterFirstOnceWithCreate);
        $this->assertCount(2, $itemsAfterFirstOnceWithCreate);
        $this->assertSame($firstIDOnceItem, $secondIDOnceItem);

        // (7) Property ID - Clesr

        $model->clearID();

        $itemsAfterClear = $model->getID();

        $this->assertIsArray($itemsAfterClear);
        $this->assertCount(0, $itemsAfterClear);

        // (1) Property GlobalID - Test set empty array

        $globalIDItems = [];
        $model->setGlobalID($globalIDItems);

        $this->assertIsArray($model->getGlobalID());
        $this->assertCount(0, $model->getGlobalID());

        // (2) Property GlobalID - Add instance

        $globalIDItem = new IDType();
        $model->addToGlobalID($globalIDItem);

        $this->assertIsArray($model->getGlobalID());
        $this->assertCount(1, $model->getGlobalID());

        // (3) Property GlobalID - Add and create instancc

        $testValueForGlobalIDItem = $model->addToGlobalIDWithCreate();

        $this->assertInstanceOf(IDType::class, $testValueForGlobalIDItem);
        $this->assertIsArray($model->getGlobalID());
        $this->assertCount(2, $model->getGlobalID());

        // (4) Property GlobalID - Add once an instance

        $globalIDOnceItem = new IDType();

        $model->addOnceToGlobalID($globalIDOnceItem);
        $model->addOnceToGlobalID($globalIDOnceItem);

        $itemsAfterOnce = $model->getGlobalID();

        $this->assertIsArray($itemsAfterOnce);
        $this->assertCount(2, $itemsAfterOnce);

        // (5) Property GlobalID - Add once an instance with implicit creation

        $firstGlobalIDOnceItem = $model->addOnceToGlobalIDWithCreate();

        $this->assertInstanceOf(IDType::class, $firstGlobalIDOnceItem);

        $itemsAfterFirstOnceWithCreate = $model->getGlobalID();

        $this->assertIsArray($itemsAfterFirstOnceWithCreate);
        $this->assertCount(2, $itemsAfterFirstOnceWithCreate);

        // (5) Property GlobalID - Add once an instance with implicit creation (2)

        $secondGlobalIDOnceItem = $model->addOnceToGlobalIDWithCreate();

        $this->assertIsArray($itemsAfterFirstOnceWithCreate);
        $this->assertCount(2, $itemsAfterFirstOnceWithCreate);
        $this->assertSame($firstGlobalIDOnceItem, $secondGlobalIDOnceItem);

        // (7) Property GlobalID - Clesr

        $model->clearGlobalID();

        $itemsAfterClear = $model->getGlobalID();

        $this->assertIsArray($itemsAfterClear);
        $this->assertCount(0, $itemsAfterClear);

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

        // Property URIUniversalCommunication

        $testValue = new UniversalCommunicationType();
        $model->setURIUniversalCommunication($testValue);

        $this->assertEquals($testValue, $model->getURIUniversalCommunication());

        $model->unsetURIUniversalCommunication();

        $this->assertNotInstanceOf(UniversalCommunicationType::class, $model->getURIUniversalCommunication());

        $testValueForURIUniversalCommunication = $model->getURIUniversalCommunicationWithCreate();

        $this->assertInstanceOf(UniversalCommunicationType::class, $testValueForURIUniversalCommunication);
        $this->assertSame($testValueForURIUniversalCommunication, $model->getURIUniversalCommunication());

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
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\TradePaymentTermsType.
     */
    public function testModelsZffxbasicwlRamTradePaymentTermsType(): void
    {
        $model = new TradePaymentTermsType();

        $this->assertInstanceOf(TradePaymentTermsType::class, $model);

        // Property Description

        $testValue = new TextType();
        $model->setDescription($testValue);

        $this->assertEquals($testValue, $model->getDescription());

        $model->unsetDescription();

        $this->assertNotInstanceOf(TextType::class, $model->getDescription());

        $testValueForDescription = $model->getDescriptionWithCreate();

        $this->assertInstanceOf(TextType::class, $testValueForDescription);
        $this->assertSame($testValueForDescription, $model->getDescription());

        // Property DueDateDateTime

        $testValue = new DateTimeType();
        $model->setDueDateDateTime($testValue);

        $this->assertEquals($testValue, $model->getDueDateDateTime());

        $model->unsetDueDateDateTime();

        $this->assertNotInstanceOf(DateTimeType::class, $model->getDueDateDateTime());

        $testValueForDueDateDateTime = $model->getDueDateDateTimeWithCreate();

        $this->assertInstanceOf(DateTimeType::class, $testValueForDueDateDateTime);
        $this->assertSame($testValueForDueDateDateTime, $model->getDueDateDateTime());

        // Property DirectDebitMandateID

        $testValue = new IDType();
        $model->setDirectDebitMandateID($testValue);

        $this->assertEquals($testValue, $model->getDirectDebitMandateID());

        $model->unsetDirectDebitMandateID();

        $this->assertNotInstanceOf(IDType::class, $model->getDirectDebitMandateID());

        $testValueForDirectDebitMandateID = $model->getDirectDebitMandateIDWithCreate();

        $this->assertInstanceOf(IDType::class, $testValueForDirectDebitMandateID);
        $this->assertSame($testValueForDirectDebitMandateID, $model->getDirectDebitMandateID());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\TradeSettlementHeaderMonetarySummationType.
     */
    public function testModelsZffxbasicwlRamTradeSettlementHeaderMonetarySummationType(): void
    {
        $model = new TradeSettlementHeaderMonetarySummationType();

        $this->assertInstanceOf(TradeSettlementHeaderMonetarySummationType::class, $model);

        // Property LineTotalAmount

        $testValue = new AmountType();
        $model->setLineTotalAmount($testValue);

        $this->assertEquals($testValue, $model->getLineTotalAmount());

        $model->unsetLineTotalAmount();

        $this->assertNotInstanceOf(AmountType::class, $model->getLineTotalAmount());

        $testValueForLineTotalAmount = $model->getLineTotalAmountWithCreate();

        $this->assertInstanceOf(AmountType::class, $testValueForLineTotalAmount);
        $this->assertSame($testValueForLineTotalAmount, $model->getLineTotalAmount());

        // Property ChargeTotalAmount

        $testValue = new AmountType();
        $model->setChargeTotalAmount($testValue);

        $this->assertEquals($testValue, $model->getChargeTotalAmount());

        $model->unsetChargeTotalAmount();

        $this->assertNotInstanceOf(AmountType::class, $model->getChargeTotalAmount());

        $testValueForChargeTotalAmount = $model->getChargeTotalAmountWithCreate();

        $this->assertInstanceOf(AmountType::class, $testValueForChargeTotalAmount);
        $this->assertSame($testValueForChargeTotalAmount, $model->getChargeTotalAmount());

        // Property AllowanceTotalAmount

        $testValue = new AmountType();
        $model->setAllowanceTotalAmount($testValue);

        $this->assertEquals($testValue, $model->getAllowanceTotalAmount());

        $model->unsetAllowanceTotalAmount();

        $this->assertNotInstanceOf(AmountType::class, $model->getAllowanceTotalAmount());

        $testValueForAllowanceTotalAmount = $model->getAllowanceTotalAmountWithCreate();

        $this->assertInstanceOf(AmountType::class, $testValueForAllowanceTotalAmount);
        $this->assertSame($testValueForAllowanceTotalAmount, $model->getAllowanceTotalAmount());

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

        // Property TotalPrepaidAmount

        $testValue = new AmountType();
        $model->setTotalPrepaidAmount($testValue);

        $this->assertEquals($testValue, $model->getTotalPrepaidAmount());

        $model->unsetTotalPrepaidAmount();

        $this->assertNotInstanceOf(AmountType::class, $model->getTotalPrepaidAmount());

        $testValueForTotalPrepaidAmount = $model->getTotalPrepaidAmountWithCreate();

        $this->assertInstanceOf(AmountType::class, $testValueForTotalPrepaidAmount);
        $this->assertSame($testValueForTotalPrepaidAmount, $model->getTotalPrepaidAmount());

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
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\TradeSettlementPaymentMeansType.
     */
    public function testModelsZffxbasicwlRamTradeSettlementPaymentMeansType(): void
    {
        $model = new TradeSettlementPaymentMeansType();

        $this->assertInstanceOf(TradeSettlementPaymentMeansType::class, $model);

        // Property TypeCode

        $testValue = new PaymentMeansCodeType();
        $model->setTypeCode($testValue);

        $this->assertEquals($testValue, $model->getTypeCode());

        $model->unsetTypeCode();

        $this->assertNotInstanceOf(PaymentMeansCodeType::class, $model->getTypeCode());

        $testValueForTypeCode = $model->getTypeCodeWithCreate();

        $this->assertInstanceOf(PaymentMeansCodeType::class, $testValueForTypeCode);
        $this->assertSame($testValueForTypeCode, $model->getTypeCode());

        // Property PayerPartyDebtorFinancialAccount

        $testValue = new DebtorFinancialAccountType();
        $model->setPayerPartyDebtorFinancialAccount($testValue);

        $this->assertEquals($testValue, $model->getPayerPartyDebtorFinancialAccount());

        $model->unsetPayerPartyDebtorFinancialAccount();

        $this->assertNotInstanceOf(DebtorFinancialAccountType::class, $model->getPayerPartyDebtorFinancialAccount());

        $testValueForPayerPartyDebtorFinancialAccount = $model->getPayerPartyDebtorFinancialAccountWithCreate();

        $this->assertInstanceOf(DebtorFinancialAccountType::class, $testValueForPayerPartyDebtorFinancialAccount);
        $this->assertSame($testValueForPayerPartyDebtorFinancialAccount, $model->getPayerPartyDebtorFinancialAccount());

        // Property PayeePartyCreditorFinancialAccount

        $testValue = new CreditorFinancialAccountType();
        $model->setPayeePartyCreditorFinancialAccount($testValue);

        $this->assertEquals($testValue, $model->getPayeePartyCreditorFinancialAccount());

        $model->unsetPayeePartyCreditorFinancialAccount();

        $this->assertNotInstanceOf(CreditorFinancialAccountType::class, $model->getPayeePartyCreditorFinancialAccount());

        $testValueForPayeePartyCreditorFinancialAccount = $model->getPayeePartyCreditorFinancialAccountWithCreate();

        $this->assertInstanceOf(CreditorFinancialAccountType::class, $testValueForPayeePartyCreditorFinancialAccount);
        $this->assertSame($testValueForPayeePartyCreditorFinancialAccount, $model->getPayeePartyCreditorFinancialAccount());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\TradeTaxType.
     */
    public function testModelsZffxbasicwlRamTradeTaxType(): void
    {
        $model = new TradeTaxType();

        $this->assertInstanceOf(TradeTaxType::class, $model);

        // Property CalculatedAmount

        $testValue = new AmountType();
        $model->setCalculatedAmount($testValue);

        $this->assertEquals($testValue, $model->getCalculatedAmount());

        $model->unsetCalculatedAmount();

        $this->assertNotInstanceOf(AmountType::class, $model->getCalculatedAmount());

        $testValueForCalculatedAmount = $model->getCalculatedAmountWithCreate();

        $this->assertInstanceOf(AmountType::class, $testValueForCalculatedAmount);
        $this->assertSame($testValueForCalculatedAmount, $model->getCalculatedAmount());

        // Property TypeCode

        $testValue = new TaxTypeCodeType();
        $model->setTypeCode($testValue);

        $this->assertEquals($testValue, $model->getTypeCode());

        $model->unsetTypeCode();

        $this->assertNotInstanceOf(TaxTypeCodeType::class, $model->getTypeCode());

        $testValueForTypeCode = $model->getTypeCodeWithCreate();

        $this->assertInstanceOf(TaxTypeCodeType::class, $testValueForTypeCode);
        $this->assertSame($testValueForTypeCode, $model->getTypeCode());

        // Property ExemptionReason

        $testValue = new TextType();
        $model->setExemptionReason($testValue);

        $this->assertEquals($testValue, $model->getExemptionReason());

        $model->unsetExemptionReason();

        $this->assertNotInstanceOf(TextType::class, $model->getExemptionReason());

        $testValueForExemptionReason = $model->getExemptionReasonWithCreate();

        $this->assertInstanceOf(TextType::class, $testValueForExemptionReason);
        $this->assertSame($testValueForExemptionReason, $model->getExemptionReason());

        // Property BasisAmount

        $testValue = new AmountType();
        $model->setBasisAmount($testValue);

        $this->assertEquals($testValue, $model->getBasisAmount());

        $model->unsetBasisAmount();

        $this->assertNotInstanceOf(AmountType::class, $model->getBasisAmount());

        $testValueForBasisAmount = $model->getBasisAmountWithCreate();

        $this->assertInstanceOf(AmountType::class, $testValueForBasisAmount);
        $this->assertSame($testValueForBasisAmount, $model->getBasisAmount());

        // Property CategoryCode

        $testValue = new TaxCategoryCodeType();
        $model->setCategoryCode($testValue);

        $this->assertEquals($testValue, $model->getCategoryCode());

        $model->unsetCategoryCode();

        $this->assertNotInstanceOf(TaxCategoryCodeType::class, $model->getCategoryCode());

        $testValueForCategoryCode = $model->getCategoryCodeWithCreate();

        $this->assertInstanceOf(TaxCategoryCodeType::class, $testValueForCategoryCode);
        $this->assertSame($testValueForCategoryCode, $model->getCategoryCode());

        // Property ExemptionReasonCode

        $testValue = new CodeType();
        $model->setExemptionReasonCode($testValue);

        $this->assertEquals($testValue, $model->getExemptionReasonCode());

        $model->unsetExemptionReasonCode();

        $this->assertNotInstanceOf(CodeType::class, $model->getExemptionReasonCode());

        $testValueForExemptionReasonCode = $model->getExemptionReasonCodeWithCreate();

        $this->assertInstanceOf(CodeType::class, $testValueForExemptionReasonCode);
        $this->assertSame($testValueForExemptionReasonCode, $model->getExemptionReasonCode());

        // Property DueDateTypeCode

        $testValue = new TimeReferenceCodeType();
        $model->setDueDateTypeCode($testValue);

        $this->assertEquals($testValue, $model->getDueDateTypeCode());

        $model->unsetDueDateTypeCode();

        $this->assertNotInstanceOf(TimeReferenceCodeType::class, $model->getDueDateTypeCode());

        $testValueForDueDateTypeCode = $model->getDueDateTypeCodeWithCreate();

        $this->assertInstanceOf(TimeReferenceCodeType::class, $testValueForDueDateTypeCode);
        $this->assertSame($testValueForDueDateTypeCode, $model->getDueDateTypeCode());

        // Property RateApplicablePercent

        $testValue = new PercentType();
        $model->setRateApplicablePercent($testValue);

        $this->assertEquals($testValue, $model->getRateApplicablePercent());

        $model->unsetRateApplicablePercent();

        $this->assertNotInstanceOf(PercentType::class, $model->getRateApplicablePercent());

        $testValueForRateApplicablePercent = $model->getRateApplicablePercentWithCreate();

        $this->assertInstanceOf(PercentType::class, $testValueForRateApplicablePercent);
        $this->assertSame($testValueForRateApplicablePercent, $model->getRateApplicablePercent());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\UniversalCommunicationType.
     */
    public function testModelsZffxbasicwlRamUniversalCommunicationType(): void
    {
        $model = new UniversalCommunicationType();

        $this->assertInstanceOf(UniversalCommunicationType::class, $model);

        // Property URIID

        $testValue = new IDType();
        $model->setURIID($testValue);

        $this->assertEquals($testValue, $model->getURIID());

        $model->unsetURIID();

        $this->assertNotInstanceOf(IDType::class, $model->getURIID());

        $testValueForURIID = $model->getURIIDWithCreate();

        $this->assertInstanceOf(IDType::class, $testValueForURIID);
        $this->assertSame($testValueForURIID, $model->getURIID());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\rsm\CrossIndustryInvoice.
     */
    public function testModelsZffxbasicwlRsmCrossIndustryInvoice(): void
    {
        $model = new CrossIndustryInvoice();

        $this->assertInstanceOf(CrossIndustryInvoice::class, $model);
        $this->assertInstanceOf(CrossIndustryInvoiceType::class, $model);
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\rsm\CrossIndustryInvoiceType.
     */
    public function testModelsZffxbasicwlRsmCrossIndustryInvoiceType(): void
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
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\AmountType.
     */
    public function testModelsZffxbasicwlUdtAmountType(): void
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
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\CodeType.
     */
    public function testModelsZffxbasicwlUdtCodeType(): void
    {
        $model = new CodeType();

        $this->assertInstanceOf(CodeType::class, $model);

        // Property Value

        $testValue = 'dummy-ValueValue';
        $model->setValue($testValue);

        $this->assertSame($testValue, $model->getValue());

        $model->unsetValue();

        $this->assertNull($model->getValue());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\DateTimeType\DateTimeStringAType.
     */
    public function testModelsZffxbasicwlUdtDatetimetypeDateTimeStringAType(): void
    {
        $model = new DateTimeStringAType1();

        $this->assertInstanceOf(DateTimeStringAType1::class, $model);

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
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\DateTimeType.
     */
    public function testModelsZffxbasicwlUdtDateTimeType(): void
    {
        $model = new DateTimeType();

        $this->assertInstanceOf(DateTimeType::class, $model);

        // Property DateTimeString

        $testValue = new DateTimeStringAType1();
        $model->setDateTimeString($testValue);

        $this->assertEquals($testValue, $model->getDateTimeString());

        $model->unsetDateTimeString();

        $this->assertNotInstanceOf(DateTimeStringAType1::class, $model->getDateTimeString());

        $testValueForDateTimeString = $model->getDateTimeStringWithCreate();

        $this->assertInstanceOf(DateTimeStringAType1::class, $testValueForDateTimeString);
        $this->assertSame($testValueForDateTimeString, $model->getDateTimeString());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\IDType.
     */
    public function testModelsZffxbasicwlUdtIDType(): void
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
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\IndicatorType.
     */
    public function testModelsZffxbasicwlUdtIndicatorType(): void
    {
        $model = new IndicatorType();

        $this->assertInstanceOf(IndicatorType::class, $model);

        // Property Indicator

        $testValue = true;
        $model->setIndicator($testValue);

        $this->assertEquals($testValue, $model->getIndicator());

        $model->unsetIndicator();

        $this->assertNull($model->getIndicator());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\PercentType.
     */
    public function testModelsZffxbasicwlUdtPercentType(): void
    {
        $model = new PercentType();

        $this->assertInstanceOf(PercentType::class, $model);

        // Property Value

        $testValue = 1.23;
        $model->setValue($testValue);

        $this->assertSame($testValue, $model->getValue());

        $model->unsetValue();

        $this->assertNull($model->getValue());
    }

    /**
     * Tests methods of \horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\TextType.
     */
    public function testModelsZffxbasicwlUdtTextType(): void
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
