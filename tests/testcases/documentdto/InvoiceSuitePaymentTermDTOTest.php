<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use DateTimeImmutable;
use horstoeko\invoicesuite\documentdto\InvoiceSuitePaymentTermDTO;
use horstoeko\invoicesuite\tests\TestCase;

class InvoiceSuitePaymentTermDTOTest extends TestCase
{
    public function testConstructorAndDefaults(): void
    {
        $invoiceSuitePaymentTermDTO = new InvoiceSuitePaymentTermDTO();
        $this->assertNull($invoiceSuitePaymentTermDTO->getDescription());
        $this->assertNull($invoiceSuitePaymentTermDTO->getDueDate());
        $this->assertSame([], $invoiceSuitePaymentTermDTO->getDiscountTerms());
        $this->assertSame([], $invoiceSuitePaymentTermDTO->getPenaltyTerms());
    }

    public function testDescriptionGetterAndSetter(): void
    {
        $invoiceSuitePaymentTermDTO = new InvoiceSuitePaymentTermDTO();
        $descriptionValue = "Example Value";
        $invoiceSuitePaymentTermDTO->setDescription($descriptionValue);
        $this->assertSame($descriptionValue, $invoiceSuitePaymentTermDTO->getDescription());
    }

    public function testDueDateGetterAndSetter(): void
    {
        $invoiceSuitePaymentTermDTO = new InvoiceSuitePaymentTermDTO();
        $dueDateValue = new DateTimeImmutable("2025-01-02");
        $invoiceSuitePaymentTermDTO->setDueDate($dueDateValue);
        $this->assertSame($dueDateValue, $invoiceSuitePaymentTermDTO->getDueDate());
    }

    public function testDiscountTermsGetterAndSetter(): void
    {
        $invoiceSuitePaymentTermDTO = new InvoiceSuitePaymentTermDTO();
        $discountTermsValue = [];
        $invoiceSuitePaymentTermDTO->setDiscountTerms($discountTermsValue);
        $this->assertSame($discountTermsValue, $invoiceSuitePaymentTermDTO->getDiscountTerms());
    }

    public function testPenaltyTermsGetterAndSetter(): void
    {
        $invoiceSuitePaymentTermDTO = new InvoiceSuitePaymentTermDTO();
        $penaltyTermsValue = [];
        $invoiceSuitePaymentTermDTO->setPenaltyTerms($penaltyTermsValue);
        $this->assertSame($penaltyTermsValue, $invoiceSuitePaymentTermDTO->getPenaltyTerms());
    }
}
