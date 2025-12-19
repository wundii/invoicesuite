<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use horstoeko\invoicesuite\documents\dto\InvoiceSuiteContactDTO;
use horstoeko\invoicesuite\tests\TestCase;

final class InvoiceSuiteContactDTOTest extends TestCase
{
    public function testConstructorAndDefaults(): void
    {
        $invoiceSuiteContactDTO = new InvoiceSuiteContactDTO();

        $this->assertNull($invoiceSuiteContactDTO->getPersonName());
        $this->assertNull($invoiceSuiteContactDTO->getDepartmentName());
        $this->assertNull($invoiceSuiteContactDTO->getPhoneNumber());
        $this->assertNull($invoiceSuiteContactDTO->getFaxNumber());
        $this->assertNull($invoiceSuiteContactDTO->getEmailAddress());
    }

    public function testPersonNameGetterAndSetter(): void
    {
        $invoiceSuiteContactDTO = new InvoiceSuiteContactDTO();
        $personNameValue = 'Example Value';
        $invoiceSuiteContactDTO->setPersonName($personNameValue);

        $this->assertSame($personNameValue, $invoiceSuiteContactDTO->getPersonName());
    }

    public function testDepartmentNameGetterAndSetter(): void
    {
        $invoiceSuiteContactDTO = new InvoiceSuiteContactDTO();
        $departmentNameValue = 'Example Value';
        $invoiceSuiteContactDTO->setDepartmentName($departmentNameValue);

        $this->assertSame($departmentNameValue, $invoiceSuiteContactDTO->getDepartmentName());
    }

    public function testPhoneNumberGetterAndSetter(): void
    {
        $invoiceSuiteContactDTO = new InvoiceSuiteContactDTO();
        $phoneNumberValue = 'Example Value';
        $invoiceSuiteContactDTO->setPhoneNumber($phoneNumberValue);

        $this->assertSame($phoneNumberValue, $invoiceSuiteContactDTO->getPhoneNumber());
    }

    public function testFaxNumberGetterAndSetter(): void
    {
        $invoiceSuiteContactDTO = new InvoiceSuiteContactDTO();
        $faxNumberValue = 'Example Value';
        $invoiceSuiteContactDTO->setFaxNumber($faxNumberValue);

        $this->assertSame($faxNumberValue, $invoiceSuiteContactDTO->getFaxNumber());
    }

    public function testEmailAddressGetterAndSetter(): void
    {
        $invoiceSuiteContactDTO = new InvoiceSuiteContactDTO();
        $emailAddressValue = 'Example Value';
        $invoiceSuiteContactDTO->setEmailAddress($emailAddressValue);

        $this->assertSame($emailAddressValue, $invoiceSuiteContactDTO->getEmailAddress());
    }
}
