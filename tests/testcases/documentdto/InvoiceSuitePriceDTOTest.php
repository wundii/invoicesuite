<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use horstoeko\invoicesuite\documentdto\InvoiceSuitePriceDTO;
use horstoeko\invoicesuite\documentdto\InvoiceSuiteQuantityDTO;
use horstoeko\invoicesuite\tests\TestCase;

class InvoiceSuitePriceDTOTest extends TestCase
{
    public function testConstructorAndDefaults(): void
    {
        $invoiceSuitePriceDTO = new InvoiceSuitePriceDTO();
        $this->assertNull($invoiceSuitePriceDTO->getAmount());
        $this->assertNull($invoiceSuitePriceDTO->getPriceQuantity());
    }

    public function testAmountGetterAndSetter(): void
    {
        $invoiceSuitePriceDTO = new InvoiceSuitePriceDTO();
        $amountValue = 123.45;
        $invoiceSuitePriceDTO->setAmount($amountValue);
        $this->assertSame($amountValue, $invoiceSuitePriceDTO->getAmount());
    }

    public function testPriceQuantityGetterAndSetter(): void
    {
        $invoiceSuitePriceDTO = new InvoiceSuitePriceDTO();
        $priceQuantityValue = new InvoiceSuiteQuantityDTO();
        $invoiceSuitePriceDTO->setPriceQuantity($priceQuantityValue);
        $this->assertSame($priceQuantityValue, $invoiceSuitePriceDTO->getPriceQuantity());
    }
}
