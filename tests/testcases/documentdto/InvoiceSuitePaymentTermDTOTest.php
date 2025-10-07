<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use DateTimeImmutable;
use horstoeko\invoicesuite\tests\TestCase;
use horstoeko\invoicesuite\documentdto\InvoiceSuitePaymentTermDTO;
use horstoeko\invoicesuite\documentdto\InvoiceSuitePaymentTermPenaltyDTO;
use horstoeko\invoicesuite\documentdto\InvoiceSuitePaymentTermDiscountDTO;

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

    public function testCollectionPaymentTermDiscountIteratorsWithCallbacks(): void
    {
        $invoiceSuitePaymentTermDTO = new InvoiceSuitePaymentTermDTO();
        $invoiceSuitePaymentTermDTO->addDiscountTerms(new InvoiceSuitePaymentTermDiscountDTO());
        $invoiceSuitePaymentTermDTO->addDiscountTerms(new InvoiceSuitePaymentTermDiscountDTO());

        $hitCount = 0;
        $elseCount = 0;

        $cb = function ($item) use (&$hitCount) {
            $hitCount++;
        };

        $cbElse = function () use (&$elseCount) {
            $elseCount++;
        };

        $invoiceSuitePaymentTermDTO->firstDiscountTerms($cb, $cbElse);
        $invoiceSuitePaymentTermDTO->nextDiscountTerms($cb, $cbElse);
        $invoiceSuitePaymentTermDTO->nextDiscountTerms($cb, $cbElse);

        $invoiceSuitePaymentTermDTO->firstDiscountTerms($cb, $cbElse);
        $invoiceSuitePaymentTermDTO->nextDiscountTerms($cb, $cbElse);
        $invoiceSuitePaymentTermDTO->previousDiscountTerms($cb, $cbElse);
        $invoiceSuitePaymentTermDTO->previousDiscountTerms($cb, $cbElse);

        $invoiceSuitePaymentTermDTO->lastDiscountTerms($cb, $cbElse);

        $invoiceSuitePaymentTermDTO->forEachDiscountTerms($cb, $cbElse);
        $invoiceSuitePaymentTermDTO->forEachDiscountTerms($cb, $cbElse, 1);

        $this->assertSame(9, $hitCount);
        $this->assertSame(2, $elseCount);

        $invoiceSuitePaymentTermDTO = new InvoiceSuitePaymentTermDTO();

        $hitCount = 0;
        $elseCount = 0;

        $cb = function ($item) use (&$hitCount) {
            $hitCount++;
        };

        $cbElse = function () use (&$elseCount) {
            $elseCount++;
        };

        $invoiceSuitePaymentTermDTO->firstDiscountTerms($cb, $cbElse);
        $invoiceSuitePaymentTermDTO->nextDiscountTerms($cb, $cbElse);
        $invoiceSuitePaymentTermDTO->nextDiscountTerms($cb, $cbElse);
        $invoiceSuitePaymentTermDTO->previousDiscountTerms($cb, $cbElse);
        $invoiceSuitePaymentTermDTO->previousDiscountTerms($cb, $cbElse);
        $invoiceSuitePaymentTermDTO->lastDiscountTerms($cb, $cbElse);
        $invoiceSuitePaymentTermDTO->forEachDiscountTerms($cb, $cbElse);

        $this->assertSame(0, $hitCount);
        $this->assertSame(7, $elseCount);
    }

    public function testCollectionPaymentTermPenaltyIteratorsWithCallbacks(): void
    {
        $invoiceSuitePaymentTermDTO = new InvoiceSuitePaymentTermDTO();
        $invoiceSuitePaymentTermDTO->addPenaltyTerms(new InvoiceSuitePaymentTermPenaltyDTO());
        $invoiceSuitePaymentTermDTO->addPenaltyTerms(new InvoiceSuitePaymentTermPenaltyDTO());

        $hitCount = 0;
        $elseCount = 0;

        $cb = function ($item) use (&$hitCount) {
            $hitCount++;
        };

        $cbElse = function () use (&$elseCount) {
            $elseCount++;
        };

        $invoiceSuitePaymentTermDTO->firstPenaltyTerms($cb, $cbElse);
        $invoiceSuitePaymentTermDTO->nextPenaltyTerms($cb, $cbElse);
        $invoiceSuitePaymentTermDTO->nextPenaltyTerms($cb, $cbElse);

        $invoiceSuitePaymentTermDTO->firstPenaltyTerms($cb, $cbElse);
        $invoiceSuitePaymentTermDTO->nextPenaltyTerms($cb, $cbElse);
        $invoiceSuitePaymentTermDTO->previousPenaltyTerms($cb, $cbElse);
        $invoiceSuitePaymentTermDTO->previousPenaltyTerms($cb, $cbElse);

        $invoiceSuitePaymentTermDTO->lastPenaltyTerms($cb, $cbElse);

        $invoiceSuitePaymentTermDTO->forEachPenaltyTerms($cb, $cbElse);
        $invoiceSuitePaymentTermDTO->forEachPenaltyTerms($cb, $cbElse, 1);

        $this->assertSame(9, $hitCount);
        $this->assertSame(2, $elseCount);

        $invoiceSuitePaymentTermDTO = new InvoiceSuitePaymentTermDTO();

        $hitCount = 0;
        $elseCount = 0;

        $cb = function ($item) use (&$hitCount) {
            $hitCount++;
        };

        $cbElse = function () use (&$elseCount) {
            $elseCount++;
        };

        $invoiceSuitePaymentTermDTO->firstPenaltyTerms($cb, $cbElse);
        $invoiceSuitePaymentTermDTO->nextPenaltyTerms($cb, $cbElse);
        $invoiceSuitePaymentTermDTO->nextPenaltyTerms($cb, $cbElse);
        $invoiceSuitePaymentTermDTO->previousPenaltyTerms($cb, $cbElse);
        $invoiceSuitePaymentTermDTO->previousPenaltyTerms($cb, $cbElse);
        $invoiceSuitePaymentTermDTO->lastPenaltyTerms($cb, $cbElse);
        $invoiceSuitePaymentTermDTO->forEachPenaltyTerms($cb, $cbElse);

        $this->assertSame(0, $hitCount);
        $this->assertSame(7, $elseCount);
    }
}
