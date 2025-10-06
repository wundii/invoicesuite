<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use horstoeko\invoicesuite\documentdto\InvoiceSuitesummationLineDTO;
use horstoeko\invoicesuite\tests\TestCase;

class InvoiceSuitesummationLineDTOTest extends TestCase
{
    public function testConstructorAndDefaults(): void
    {
        $invoiceSuitesummationLineDTO = new InvoiceSuitesummationLineDTO();
        $this->assertNull($invoiceSuitesummationLineDTO->getNetAmount());
        $this->assertNull($invoiceSuitesummationLineDTO->getChargeTotalAmount());
        $this->assertNull($invoiceSuitesummationLineDTO->getDiscountTotalAmount());
        $this->assertNull($invoiceSuitesummationLineDTO->getTaxTotalAmount());
        $this->assertNull($invoiceSuitesummationLineDTO->getGrossAmount());
    }

    public function testNetAmountGetterAndSetter(): void
    {
        $invoiceSuitesummationLineDTO = new InvoiceSuitesummationLineDTO();
        $netAmountValue = 123.45;
        $invoiceSuitesummationLineDTO->setNetAmount($netAmountValue);
        $this->assertSame($netAmountValue, $invoiceSuitesummationLineDTO->getNetAmount());
    }

    public function testChargeTotalAmountGetterAndSetter(): void
    {
        $invoiceSuitesummationLineDTO = new InvoiceSuitesummationLineDTO();
        $chargeTotalAmountValue = 123.45;
        $invoiceSuitesummationLineDTO->setChargeTotalAmount($chargeTotalAmountValue);
        $this->assertSame($chargeTotalAmountValue, $invoiceSuitesummationLineDTO->getChargeTotalAmount());
    }

    public function testDiscountTotalAmountGetterAndSetter(): void
    {
        $invoiceSuitesummationLineDTO = new InvoiceSuitesummationLineDTO();
        $discountTotalAmountValue = 123.45;
        $invoiceSuitesummationLineDTO->setDiscountTotalAmount($discountTotalAmountValue);
        $this->assertSame($discountTotalAmountValue, $invoiceSuitesummationLineDTO->getDiscountTotalAmount());
    }

    public function testTaxTotalAmountGetterAndSetter(): void
    {
        $invoiceSuitesummationLineDTO = new InvoiceSuitesummationLineDTO();
        $taxTotalAmountValue = 123.45;
        $invoiceSuitesummationLineDTO->setTaxTotalAmount($taxTotalAmountValue);
        $this->assertSame($taxTotalAmountValue, $invoiceSuitesummationLineDTO->getTaxTotalAmount());
    }

    public function testGrossAmountGetterAndSetter(): void
    {
        $invoiceSuitesummationLineDTO = new InvoiceSuitesummationLineDTO();
        $grossAmountValue = 123.45;
        $invoiceSuitesummationLineDTO->setGrossAmount($grossAmountValue);
        $this->assertSame($grossAmountValue, $invoiceSuitesummationLineDTO->getGrossAmount());
    }
}
