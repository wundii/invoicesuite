<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use horstoeko\invoicesuite\documentdto\InvoiceSuiteSummationDTO;
use horstoeko\invoicesuite\tests\TestCase;

class InvoiceSuiteSummationDTOTest extends TestCase
{
    public function testConstructorAndDefaults(): void
    {
        $invoiceSuiteSummationDTO = new InvoiceSuiteSummationDTO();
        $this->assertNull($invoiceSuiteSummationDTO->getNetAmount());
        $this->assertNull($invoiceSuiteSummationDTO->getChargeTotalAmount());
        $this->assertNull($invoiceSuiteSummationDTO->getDiscountTotalAmount());
        $this->assertNull($invoiceSuiteSummationDTO->getTaxBasisAmount());
        $this->assertNull($invoiceSuiteSummationDTO->getTaxTotalAmount());
        $this->assertNull($invoiceSuiteSummationDTO->getTaxTotalAmount2());
        $this->assertNull($invoiceSuiteSummationDTO->getGrossAmount());
        $this->assertNull($invoiceSuiteSummationDTO->getDueAmount());
        $this->assertNull($invoiceSuiteSummationDTO->getPrepaidAmount());
        $this->assertNull($invoiceSuiteSummationDTO->getRoungingAmount());
    }

    public function testNetAmountGetterAndSetter(): void
    {
        $invoiceSuiteSummationDTO = new InvoiceSuiteSummationDTO();
        $netAmountValue = 123.45;
        $invoiceSuiteSummationDTO->setNetAmount($netAmountValue);
        $this->assertSame($netAmountValue, $invoiceSuiteSummationDTO->getNetAmount());
    }

    public function testChargeTotalAmountGetterAndSetter(): void
    {
        $invoiceSuiteSummationDTO = new InvoiceSuiteSummationDTO();
        $chargeTotalAmountValue = 123.45;
        $invoiceSuiteSummationDTO->setChargeTotalAmount($chargeTotalAmountValue);
        $this->assertSame($chargeTotalAmountValue, $invoiceSuiteSummationDTO->getChargeTotalAmount());
    }

    public function testDiscountTotalAmountGetterAndSetter(): void
    {
        $invoiceSuiteSummationDTO = new InvoiceSuiteSummationDTO();
        $discountTotalAmountValue = 123.45;
        $invoiceSuiteSummationDTO->setDiscountTotalAmount($discountTotalAmountValue);
        $this->assertSame($discountTotalAmountValue, $invoiceSuiteSummationDTO->getDiscountTotalAmount());
    }

    public function testTaxBasisAmountGetterAndSetter(): void
    {
        $invoiceSuiteSummationDTO = new InvoiceSuiteSummationDTO();
        $taxBasisAmountValue = 123.45;
        $invoiceSuiteSummationDTO->setTaxBasisAmount($taxBasisAmountValue);
        $this->assertSame($taxBasisAmountValue, $invoiceSuiteSummationDTO->getTaxBasisAmount());
    }

    public function testTaxTotalAmountGetterAndSetter(): void
    {
        $invoiceSuiteSummationDTO = new InvoiceSuiteSummationDTO();
        $taxTotalAmountValue = 123.45;
        $invoiceSuiteSummationDTO->setTaxTotalAmount($taxTotalAmountValue);
        $this->assertSame($taxTotalAmountValue, $invoiceSuiteSummationDTO->getTaxTotalAmount());
    }

    public function testTaxTotalAmount2GetterAndSetter(): void
    {
        $invoiceSuiteSummationDTO = new InvoiceSuiteSummationDTO();
        $taxTotalAmount2Value = 123.45;
        $invoiceSuiteSummationDTO->setTaxTotalAmount2($taxTotalAmount2Value);
        $this->assertSame($taxTotalAmount2Value, $invoiceSuiteSummationDTO->getTaxTotalAmount2());
    }

    public function testGrossAmountGetterAndSetter(): void
    {
        $invoiceSuiteSummationDTO = new InvoiceSuiteSummationDTO();
        $grossAmountValue = 123.45;
        $invoiceSuiteSummationDTO->setGrossAmount($grossAmountValue);
        $this->assertSame($grossAmountValue, $invoiceSuiteSummationDTO->getGrossAmount());
    }

    public function testDueAmountGetterAndSetter(): void
    {
        $invoiceSuiteSummationDTO = new InvoiceSuiteSummationDTO();
        $dueAmountValue = 123.45;
        $invoiceSuiteSummationDTO->setDueAmount($dueAmountValue);
        $this->assertSame($dueAmountValue, $invoiceSuiteSummationDTO->getDueAmount());
    }

    public function testPrepaidAmountGetterAndSetter(): void
    {
        $invoiceSuiteSummationDTO = new InvoiceSuiteSummationDTO();
        $prepaidAmountValue = 123.45;
        $invoiceSuiteSummationDTO->setPrepaidAmount($prepaidAmountValue);
        $this->assertSame($prepaidAmountValue, $invoiceSuiteSummationDTO->getPrepaidAmount());
    }

    public function testRoungingAmountGetterAndSetter(): void
    {
        $invoiceSuiteSummationDTO = new InvoiceSuiteSummationDTO();
        $roungingAmountValue = 123.45;
        $invoiceSuiteSummationDTO->setRoungingAmount($roungingAmountValue);
        $this->assertSame($roungingAmountValue, $invoiceSuiteSummationDTO->getRoungingAmount());
    }
}
