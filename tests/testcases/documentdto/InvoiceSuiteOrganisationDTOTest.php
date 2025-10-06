<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use horstoeko\invoicesuite\documentdto\InvoiceSuiteOrganisationDTO;
use horstoeko\invoicesuite\tests\TestCase;

final class InvoiceSuiteOrganisationDTOTest extends TestCase
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
        $dto = new InvoiceSuiteOrganisationDTO();

        $this->assertNull($dto->getId());
        $this->assertNull($dto->getIdType());
        $this->assertNull($dto->getName());

        $this->assertInstanceOf(
            InvoiceSuiteOrganisationDTO::class,
            $dto
        );
    }

    public function testFluentSettersReturnSelf(): void
    {
        $dto = new InvoiceSuiteOrganisationDTO();

        $this->assertSame($dto, $dto->setId('ID-1'));
        $this->assertSame($dto, $dto->setIdType('GLN'));
        $this->assertSame($dto, $dto->setName('ACME GmbH'));
    }

    /**
     * @dataProvider stringValues
     */
    public function testStringSetters(?string $value): void
    {
        $dto = new InvoiceSuiteOrganisationDTO();

        $dto->setId($value);
        $this->assertSame($value, $dto->getId());

        $dto->setIdType($value);
        $this->assertSame($value, $dto->getIdType());

        $dto->setName($value);
        $this->assertSame($value, $dto->getName());
    }

    /**
     * @dataProvider stringValues
     */
    public function testHasMethods(?string $value): void
    {
        $dto = new InvoiceSuiteOrganisationDTO($value, $value, $value);
        $expect = $value !== null && $value !== '';

        $this->assertSame($expect, $dto->hasId());
        $this->assertSame($expect, $dto->hasIdType());
        $this->assertSame($expect, $dto->hasName());
    }

    public function testConstructorWithValuesUsesSetterChain(): void
    {
        $dto = new InvoiceSuiteOrganisationDTO('4711', 'VAT', 'ACME');

        $this->assertSame('4711', $dto->getId());
        $this->assertSame('VAT', $dto->getIdType());
        $this->assertSame('ACME', $dto->getName());
    }

    #endregion
}
