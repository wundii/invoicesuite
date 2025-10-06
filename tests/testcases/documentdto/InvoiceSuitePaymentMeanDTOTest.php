<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use horstoeko\invoicesuite\documentdto\InvoiceSuitePaymentMeanDTO;
use horstoeko\invoicesuite\tests\TestCase;

class InvoiceSuitePaymentMeanDTOTest extends TestCase
{
    public function testConstructorAndDefaults(): void
    {
        $invoiceSuitePaymentMeanDTO = new InvoiceSuitePaymentMeanDTO();
        $this->assertNull($invoiceSuitePaymentMeanDTO->getTypeCode());
        $this->assertNull($invoiceSuitePaymentMeanDTO->getName());
        $this->assertNull($invoiceSuitePaymentMeanDTO->getFinancialCardId());
        $this->assertNull($invoiceSuitePaymentMeanDTO->getFinancialCardHolder());
        $this->assertNull($invoiceSuitePaymentMeanDTO->getBuyerIban());
        $this->assertNull($invoiceSuitePaymentMeanDTO->getPayeeIban());
        $this->assertNull($invoiceSuitePaymentMeanDTO->getPayeeAccountName());
        $this->assertNull($invoiceSuitePaymentMeanDTO->getPayeeProprietaryId());
        $this->assertNull($invoiceSuitePaymentMeanDTO->getPayeeBic());
        $this->assertNull($invoiceSuitePaymentMeanDTO->getPaymentReference());
        $this->assertNull($invoiceSuitePaymentMeanDTO->getMandate());
    }

    public function testTypeCodeGetterAndSetter(): void
    {
        $invoiceSuitePaymentMeanDTO = new InvoiceSuitePaymentMeanDTO();
        $typeCodeValue = "Example Value";
        $invoiceSuitePaymentMeanDTO->setTypeCode($typeCodeValue);
        $this->assertSame($typeCodeValue, $invoiceSuitePaymentMeanDTO->getTypeCode());
    }

    public function testNameGetterAndSetter(): void
    {
        $invoiceSuitePaymentMeanDTO = new InvoiceSuitePaymentMeanDTO();
        $nameValue = "Example Value";
        $invoiceSuitePaymentMeanDTO->setName($nameValue);
        $this->assertSame($nameValue, $invoiceSuitePaymentMeanDTO->getName());
    }

    public function testFinancialCardIdGetterAndSetter(): void
    {
        $invoiceSuitePaymentMeanDTO = new InvoiceSuitePaymentMeanDTO();
        $financialCardIdValue = "Example Value";
        $invoiceSuitePaymentMeanDTO->setFinancialCardId($financialCardIdValue);
        $this->assertSame($financialCardIdValue, $invoiceSuitePaymentMeanDTO->getFinancialCardId());
    }

    public function testFinancialCardHolderGetterAndSetter(): void
    {
        $invoiceSuitePaymentMeanDTO = new InvoiceSuitePaymentMeanDTO();
        $financialCardHolderValue = "Example Value";
        $invoiceSuitePaymentMeanDTO->setFinancialCardHolder($financialCardHolderValue);
        $this->assertSame($financialCardHolderValue, $invoiceSuitePaymentMeanDTO->getFinancialCardHolder());
    }

    public function testBuyerIbanGetterAndSetter(): void
    {
        $invoiceSuitePaymentMeanDTO = new InvoiceSuitePaymentMeanDTO();
        $buyerIbanValue = "Example Value";
        $invoiceSuitePaymentMeanDTO->setBuyerIban($buyerIbanValue);
        $this->assertSame($buyerIbanValue, $invoiceSuitePaymentMeanDTO->getBuyerIban());
    }

    public function testPayeeIbanGetterAndSetter(): void
    {
        $invoiceSuitePaymentMeanDTO = new InvoiceSuitePaymentMeanDTO();
        $payeeIbanValue = "Example Value";
        $invoiceSuitePaymentMeanDTO->setPayeeIban($payeeIbanValue);
        $this->assertSame($payeeIbanValue, $invoiceSuitePaymentMeanDTO->getPayeeIban());
    }

    public function testPayeeAccountNameGetterAndSetter(): void
    {
        $invoiceSuitePaymentMeanDTO = new InvoiceSuitePaymentMeanDTO();
        $payeeAccountNameValue = "Example Value";
        $invoiceSuitePaymentMeanDTO->setPayeeAccountName($payeeAccountNameValue);
        $this->assertSame($payeeAccountNameValue, $invoiceSuitePaymentMeanDTO->getPayeeAccountName());
    }

    public function testPayeeProprietaryIdGetterAndSetter(): void
    {
        $invoiceSuitePaymentMeanDTO = new InvoiceSuitePaymentMeanDTO();
        $payeeProprietaryIdValue = "Example Value";
        $invoiceSuitePaymentMeanDTO->setPayeeProprietaryId($payeeProprietaryIdValue);
        $this->assertSame($payeeProprietaryIdValue, $invoiceSuitePaymentMeanDTO->getPayeeProprietaryId());
    }

    public function testPayeeBicGetterAndSetter(): void
    {
        $invoiceSuitePaymentMeanDTO = new InvoiceSuitePaymentMeanDTO();
        $payeeBicValue = "Example Value";
        $invoiceSuitePaymentMeanDTO->setPayeeBic($payeeBicValue);
        $this->assertSame($payeeBicValue, $invoiceSuitePaymentMeanDTO->getPayeeBic());
    }

    public function testPaymentReferenceGetterAndSetter(): void
    {
        $invoiceSuitePaymentMeanDTO = new InvoiceSuitePaymentMeanDTO();
        $paymentReferenceValue = "Example Value";
        $invoiceSuitePaymentMeanDTO->setPaymentReference($paymentReferenceValue);
        $this->assertSame($paymentReferenceValue, $invoiceSuitePaymentMeanDTO->getPaymentReference());
    }

    public function testMandateGetterAndSetter(): void
    {
        $invoiceSuitePaymentMeanDTO = new InvoiceSuitePaymentMeanDTO();
        $mandateValue = "Example Value";
        $invoiceSuitePaymentMeanDTO->setMandate($mandateValue);
        $this->assertSame($mandateValue, $invoiceSuitePaymentMeanDTO->getMandate());
    }
}
