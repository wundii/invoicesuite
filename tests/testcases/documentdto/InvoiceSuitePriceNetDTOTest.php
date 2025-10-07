<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use horstoeko\invoicesuite\documentdto\InvoiceSuitePriceNetDTO;
use horstoeko\invoicesuite\documentdto\InvoiceSuiteTaxDTO;
use horstoeko\invoicesuite\tests\TestCase;

class InvoiceSuitePriceNetDTOTest extends TestCase
{
    public function testConstructorAndDefaults(): void
    {
        $invoiceSuitePriceNetDTO = new InvoiceSuitePriceNetDTO();

        $this->assertSame([], $invoiceSuitePriceNetDTO->getTaxes());
    }

    public function testTaxesGetterAndSetter(): void
    {
        $invoiceSuitePriceNetDTO = new InvoiceSuitePriceNetDTO();
        $taxesValue = [];
        $invoiceSuitePriceNetDTO->setTaxes($taxesValue);

        $this->assertSame($taxesValue, $invoiceSuitePriceNetDTO->getTaxes());
    }

    public function testCollectionTaxIteratorsWithCallbacks(): void
    {
        $invoiceSuitePriceNetDTO = new InvoiceSuitePriceNetDTO();
        $invoiceSuitePriceNetDTO->addTax(new InvoiceSuiteTaxDTO());
        $invoiceSuitePriceNetDTO->addTax(new InvoiceSuiteTaxDTO());

        $hitCount = 0;
        $elseCount = 0;

        $cb = function ($item) use (&$hitCount) {
            $hitCount++;
        };

        $cbElse = function () use (&$elseCount) {
            $elseCount++;
        };

        $invoiceSuitePriceNetDTO->firstTax($cb, $cbElse);
        $invoiceSuitePriceNetDTO->nextTax($cb, $cbElse);
        $invoiceSuitePriceNetDTO->nextTax($cb, $cbElse);

        $invoiceSuitePriceNetDTO->firstTax($cb, $cbElse);
        $invoiceSuitePriceNetDTO->nextTax($cb, $cbElse);
        $invoiceSuitePriceNetDTO->previousTax($cb, $cbElse);
        $invoiceSuitePriceNetDTO->previousTax($cb, $cbElse);

        $invoiceSuitePriceNetDTO->lastTax($cb, $cbElse);

        $invoiceSuitePriceNetDTO->forEachTax($cb, $cbElse);
        $invoiceSuitePriceNetDTO->forEachTax($cb, $cbElse, 1);

        $this->assertSame(9, $hitCount);
        $this->assertSame(2, $elseCount);

        $invoiceSuitePriceNetDTO = new InvoiceSuitePriceNetDTO();

        $hitCount = 0;
        $elseCount = 0;

        $cb = function ($item) use (&$hitCount) {
            $hitCount++;
        };

        $cbElse = function () use (&$elseCount) {
            $elseCount++;
        };

        $invoiceSuitePriceNetDTO->firstTax($cb, $cbElse);
        $invoiceSuitePriceNetDTO->nextTax($cb, $cbElse);
        $invoiceSuitePriceNetDTO->nextTax($cb, $cbElse);
        $invoiceSuitePriceNetDTO->previousTax($cb, $cbElse);
        $invoiceSuitePriceNetDTO->previousTax($cb, $cbElse);
        $invoiceSuitePriceNetDTO->lastTax($cb, $cbElse);
        $invoiceSuitePriceNetDTO->forEachTax($cb, $cbElse);

        $this->assertSame(0, $hitCount);
        $this->assertSame(7, $elseCount);
    }
}
