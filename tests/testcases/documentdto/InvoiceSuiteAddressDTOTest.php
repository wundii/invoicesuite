<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use horstoeko\invoicesuite\documents\dto\InvoiceSuiteAddressDTO;
use horstoeko\invoicesuite\tests\TestCase;

final class InvoiceSuiteAddressDTOTest extends TestCase
{
    public function testConstructorAndDefaults(): void
    {
        $invoiceSuiteAddressDTO = new InvoiceSuiteAddressDTO();

        $this->assertNull($invoiceSuiteAddressDTO->getAddressLine1());
        $this->assertNull($invoiceSuiteAddressDTO->getAddressLine2());
        $this->assertNull($invoiceSuiteAddressDTO->getAddressLine3());
        $this->assertNull($invoiceSuiteAddressDTO->getPostcode());
        $this->assertNull($invoiceSuiteAddressDTO->getCity());
        $this->assertNull($invoiceSuiteAddressDTO->getCountry());
        $this->assertNull($invoiceSuiteAddressDTO->getSubDivision());
    }

    public function testAddressLine1GetterAndSetter(): void
    {
        $invoiceSuiteAddressDTO = new InvoiceSuiteAddressDTO();
        $addressLine1Value = 'Example Value';
        $invoiceSuiteAddressDTO->setAddressLine1($addressLine1Value);

        $this->assertSame($addressLine1Value, $invoiceSuiteAddressDTO->getAddressLine1());
    }

    public function testAddressLine2GetterAndSetter(): void
    {
        $invoiceSuiteAddressDTO = new InvoiceSuiteAddressDTO();
        $addressLine2Value = 'Example Value';
        $invoiceSuiteAddressDTO->setAddressLine2($addressLine2Value);

        $this->assertSame($addressLine2Value, $invoiceSuiteAddressDTO->getAddressLine2());
    }

    public function testAddressLine3GetterAndSetter(): void
    {
        $invoiceSuiteAddressDTO = new InvoiceSuiteAddressDTO();
        $addressLine3Value = 'Example Value';
        $invoiceSuiteAddressDTO->setAddressLine3($addressLine3Value);

        $this->assertSame($addressLine3Value, $invoiceSuiteAddressDTO->getAddressLine3());
    }

    public function testPostcodeGetterAndSetter(): void
    {
        $invoiceSuiteAddressDTO = new InvoiceSuiteAddressDTO();
        $postcodeValue = 'Example Value';
        $invoiceSuiteAddressDTO->setPostcode($postcodeValue);

        $this->assertSame($postcodeValue, $invoiceSuiteAddressDTO->getPostcode());
    }

    public function testCityGetterAndSetter(): void
    {
        $invoiceSuiteAddressDTO = new InvoiceSuiteAddressDTO();
        $cityValue = 'Example Value';
        $invoiceSuiteAddressDTO->setCity($cityValue);

        $this->assertSame($cityValue, $invoiceSuiteAddressDTO->getCity());
    }

    public function testCountryGetterAndSetter(): void
    {
        $invoiceSuiteAddressDTO = new InvoiceSuiteAddressDTO();
        $countryValue = 'Example Value';
        $invoiceSuiteAddressDTO->setCountry($countryValue);

        $this->assertSame($countryValue, $invoiceSuiteAddressDTO->getCountry());
    }

    public function testSubDivisionGetterAndSetter(): void
    {
        $invoiceSuiteAddressDTO = new InvoiceSuiteAddressDTO();
        $subDivisionValue = 'Example Value';
        $invoiceSuiteAddressDTO->setSubDivision($subDivisionValue);

        $this->assertSame($subDivisionValue, $invoiceSuiteAddressDTO->getSubDivision());
    }
}
