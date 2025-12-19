<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use horstoeko\invoicesuite\documents\dto\InvoiceSuiteOrganisationDTO;
use horstoeko\invoicesuite\tests\TestCase;

final class InvoiceSuiteOrganisationDTOTest extends TestCase
{
    public function testConstructorAndDefaults(): void
    {
        $invoiceSuiteOrganisationDTO = new InvoiceSuiteOrganisationDTO();

        $this->assertNull($invoiceSuiteOrganisationDTO->getName());
    }

    public function testNameGetterAndSetter(): void
    {
        $invoiceSuiteOrganisationDTO = new InvoiceSuiteOrganisationDTO();
        $nameValue = 'Example Value';
        $invoiceSuiteOrganisationDTO->setName($nameValue);

        $this->assertSame($nameValue, $invoiceSuiteOrganisationDTO->getName());
    }
}
