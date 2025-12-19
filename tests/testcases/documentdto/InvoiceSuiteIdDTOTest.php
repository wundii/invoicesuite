<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use horstoeko\invoicesuite\documents\dto\InvoiceSuiteIdDTO;
use horstoeko\invoicesuite\tests\TestCase;

final class InvoiceSuiteIdDTOTest extends TestCase
{
    public function testConstructorAndDefaults(): void
    {
        $invoiceSuiteIdDTO = new InvoiceSuiteIdDTO();

        $this->assertNull($invoiceSuiteIdDTO->getId());
        $this->assertNull($invoiceSuiteIdDTO->getIdType());
    }

    public function testIdGetterAndSetter(): void
    {
        $invoiceSuiteIdDTO = new InvoiceSuiteIdDTO();
        $idValue = 'Example Value';
        $invoiceSuiteIdDTO->setId($idValue);

        $this->assertSame($idValue, $invoiceSuiteIdDTO->getId());
    }

    public function testIdTypeGetterAndSetter(): void
    {
        $invoiceSuiteIdDTO = new InvoiceSuiteIdDTO();
        $idTypeValue = 'Example Value';
        $invoiceSuiteIdDTO->setIdType($idTypeValue);

        $this->assertSame($idTypeValue, $invoiceSuiteIdDTO->getIdType());
    }
}
