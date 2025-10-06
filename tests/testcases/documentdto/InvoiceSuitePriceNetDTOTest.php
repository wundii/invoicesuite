<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use horstoeko\invoicesuite\documentdto\InvoiceSuitePriceNetDTO;
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
}
