<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use horstoeko\invoicesuite\documentdto\InvoiceSuiteIdDTO;
use horstoeko\invoicesuite\tests\TestCase;

final class InvoiceSuiteIdDTOTest extends TestCase
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
        $dto = new InvoiceSuiteIdDTO();

        $this->assertNull($dto->getId());
        $this->assertNull($dto->getIdType());

        $this->assertInstanceOf(
            InvoiceSuiteIdDTO::class,
            $dto
        );
    }

    public function testFluentSettersReturnSelf(): void
    {
        $dto = new InvoiceSuiteIdDTO();

        $this->assertSame($dto, $dto->setId('ID-1'));
        $this->assertSame($dto, $dto->setIdType('GLN'));
    }

    /**
     * @dataProvider stringValues
     */
    public function testStringSetters(?string $value): void
    {
        $dto = new InvoiceSuiteIdDTO();

        $dto->setId($value);
        $this->assertSame($value, $dto->getId());

        $dto->setIdType($value);
        $this->assertSame($value, $dto->getIdType());
    }

    /**
     * @dataProvider stringValues
     */
    public function testHasMethods(?string $value): void
    {
        $dto = new InvoiceSuiteIdDTO($value, $value);
        $expect = $value !== null && $value !== '';

        $this->assertSame($expect, $dto->hasId());
        $this->assertSame($expect, $dto->hasIdType());
    }

    public function testConstructorWithValuesUsesSetterChain(): void
    {
        $dto = new InvoiceSuiteIdDTO('4711', 'VAT');

        $this->assertSame('4711', $dto->getId());
        $this->assertSame('VAT', $dto->getIdType());
    }

    #endregion
}
