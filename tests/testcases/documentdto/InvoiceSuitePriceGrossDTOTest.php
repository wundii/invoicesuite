<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use horstoeko\invoicesuite\documentdto\InvoiceSuiteAllowanceChargeDTO;
use horstoeko\invoicesuite\documentdto\InvoiceSuitePriceGrossDTO;
use horstoeko\invoicesuite\tests\TestCase;

class InvoiceSuitePriceGrossDTOTest extends TestCase
{
    public function testConstructorAndDefaults(): void
    {
        $invoiceSuitePriceGrossDTO = new InvoiceSuitePriceGrossDTO();
        $this->assertSame([], $invoiceSuitePriceGrossDTO->getAllowanceCharges());
    }

    public function testAllowanceChargesGetterAndSetter(): void
    {
        $invoiceSuitePriceGrossDTO = new InvoiceSuitePriceGrossDTO();
        $allowanceChargesValue = [];
        $invoiceSuitePriceGrossDTO->setAllowanceCharges($allowanceChargesValue);
        $this->assertSame($allowanceChargesValue, $invoiceSuitePriceGrossDTO->getAllowanceCharges());
    }

    public function testCollectionAllowanceChargeIteratorsWithCallbacks(): void
    {
        $invoiceSuitePriceGrossDTO = new InvoiceSuitePriceGrossDTO();
        $invoiceSuitePriceGrossDTO->addAllowanceCharge(new InvoiceSuiteAllowanceChargeDTO());
        $invoiceSuitePriceGrossDTO->addAllowanceCharge(new InvoiceSuiteAllowanceChargeDTO());
        $hitCount = 0;
        $elseCount = 0;
        $cb = function ($item) use (&$hitCount) {
            $hitCount++;
        };
        $cbElse = function () use (&$elseCount) {
            $elseCount++;
        };
        $invoiceSuitePriceGrossDTO->firstAllowanceCharge($cb, $cbElse);
        $invoiceSuitePriceGrossDTO->nextAllowanceCharge($cb, $cbElse);
        $invoiceSuitePriceGrossDTO->nextAllowanceCharge($cb, $cbElse);
        $invoiceSuitePriceGrossDTO->previousAllowanceCharge($cb, $cbElse);
        $invoiceSuitePriceGrossDTO->previousAllowanceCharge($cb, $cbElse);
        $invoiceSuitePriceGrossDTO->lastAllowanceCharge($cb, $cbElse);
        $invoiceSuitePriceGrossDTO->forEachAllowanceCharge($cb, $cbElse);
        $this->assertSame(5, $hitCount);
        $this->assertSame(3, $elseCount);
        $invoiceSuitePriceGrossDTO = new InvoiceSuitePriceGrossDTO();
        $hitCount = 0;
        $elseCount = 0;
        $cb = function ($item) use (&$hitCount) {
            $hitCount++;
        };
        $cbElse = function () use (&$elseCount) {
            $elseCount++;
        };
        $invoiceSuitePriceGrossDTO->firstAllowanceCharge($cb, $cbElse);
        $invoiceSuitePriceGrossDTO->nextAllowanceCharge($cb, $cbElse);
        $invoiceSuitePriceGrossDTO->nextAllowanceCharge($cb, $cbElse);
        $invoiceSuitePriceGrossDTO->previousAllowanceCharge($cb, $cbElse);
        $invoiceSuitePriceGrossDTO->previousAllowanceCharge($cb, $cbElse);
        $invoiceSuitePriceGrossDTO->lastAllowanceCharge($cb, $cbElse);
        $invoiceSuitePriceGrossDTO->forEachAllowanceCharge($cb, $cbElse);
        $this->assertSame(0, $hitCount);
        $this->assertSame(7, $elseCount);
    }
}
