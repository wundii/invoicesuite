<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use horstoeko\invoicesuite\documentdto\InvoiceSuiteContactDTO;
use horstoeko\invoicesuite\tests\TestCase;

final class InvoiceSuiteContactDTOTest extends TestCase
{
    #region DataProviders

    /**
     * Data Provider
     *
     * @return array<int,array<int,string|null>>
     */
    public function stringValues(): array
    {
        return [[null], [''], ['X']];
    }

    #endregion

    #region Tests

    public function testConstructorDefaults(): void
    {
        $dto = new InvoiceSuiteContactDTO();

        $this->assertNull($dto->getPersonName());
        $this->assertNull($dto->getDepartmentName());
        $this->assertNull($dto->getPhoneNumber());
        $this->assertNull($dto->getFaxNumber());
        $this->assertNull($dto->getEmailAddress());

        $this->assertInstanceOf(
            InvoiceSuiteContactDTO::class,
            $dto
        );
    }

    public function testFluentSettersReturnSelf(): void
    {
        $dto = new InvoiceSuiteContactDTO();

        $this->assertSame($dto, $dto->setPersonName('Max'));
        $this->assertSame($dto, $dto->setDepartmentName('Sales'));
        $this->assertSame($dto, $dto->setPhoneNumber('123'));
        $this->assertSame($dto, $dto->setFaxNumber('124'));
        $this->assertSame($dto, $dto->setEmailAddress('max@example.com'));
    }

    /**
     * @dataProvider stringValues
     */
    public function testStringSetters(?string $value): void
    {
        $dto = new InvoiceSuiteContactDTO();

        $dto->setPersonName($value);
        $this->assertSame($value, $dto->getPersonName());

        $dto->setDepartmentName($value);
        $this->assertSame($value, $dto->getDepartmentName());

        $dto->setPhoneNumber($value);
        $this->assertSame($value, $dto->getPhoneNumber());

        $dto->setFaxNumber($value);
        $this->assertSame($value, $dto->getFaxNumber());

        $dto->setEmailAddress($value);
        $this->assertSame($value, $dto->getEmailAddress());
    }

    /**
     * @dataProvider stringValues
     */
    public function testHasMethods(?string $value): void
    {
        $dto = new InvoiceSuiteContactDTO($value, $value, $value, $value, $value);
        $expect = $value !== null && $value !== '';

        $this->assertSame($expect, $dto->hasPersonName());
        $this->assertSame($expect, $dto->hasDepartmentName());
        $this->assertSame($expect, $dto->hasPhoneNumber());
        $this->assertSame($expect, $dto->hasFaxNumber());
        $this->assertSame($expect, $dto->hasEmailAddress());
    }

    public function testConstructorWithValuesUsesSetterChain(): void
    {
        $dto = new InvoiceSuiteContactDTO('Max', 'Support', '123', '124', 'max@example.com');

        $this->assertSame('Max', $dto->getPersonName());
        $this->assertSame('Support', $dto->getDepartmentName());
        $this->assertSame('123', $dto->getPhoneNumber());
        $this->assertSame('124', $dto->getFaxNumber());
        $this->assertSame('max@example.com', $dto->getEmailAddress());
    }

    #endregion
}
