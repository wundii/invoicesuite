<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use DateTimeImmutable;
use DateTimeInterface;
use horstoeko\invoicesuite\documentdto\InvoiceSuiteDateRangeDTO;
use horstoeko\invoicesuite\tests\TestCase;

final class InvoiceSuiteDateRangeDTOTest extends TestCase
{
    #region DataProviders

    /**
     * Data Provider
     *
     * @return array<int,array<int,DateTimeImmutable|null>>
     */
    public function dateValues(): array
    {
        return [[null], [new DateTimeImmutable('2020-01-01')], [new DateTimeImmutable('2030-12-31')]];
    }

    /**
     * Data Provider
     *
     * @return array<int,array<int,string|null>>
     */
    public function stringValues(): array
    {
        return [[null], [''], ['Desc']];
    }

    #endregion

    #region Tests

    public function testConstructorDefaults(): void
    {
        $dto = new InvoiceSuiteDateRangeDTO();

        $this->assertNull($dto->getStartDate());
        $this->assertNull($dto->getEndDate());
        $this->assertNull($dto->getDescription());

        $this->assertInstanceOf(
            InvoiceSuiteDateRangeDTO::class,
            $dto
        );
    }

    public function testFluentSettersReturnSelf(): void
    {
        $dto = new InvoiceSuiteDateRangeDTO();

        $this->assertSame($dto, $dto->setStartDate(new DateTimeImmutable('2025-01-01')));
        $this->assertSame($dto, $dto->setEndDate(new DateTimeImmutable('2025-12-31')));
        $this->assertSame($dto, $dto->setDescription('Period'));
    }

    /**
     * @dataProvider dateValues
     */
    public function testDateSetters(?DateTimeInterface $value): void
    {
        $dto = new InvoiceSuiteDateRangeDTO();

        $dto->setStartDate($value);
        $this->assertSame($value, $dto->getStartDate());

        $dto->setEndDate($value);
        $this->assertSame($value, $dto->getEndDate());
    }

    /**
     * @dataProvider stringValues
     */
    public function testStringSetters(?string $value): void
    {
        $dto = new InvoiceSuiteDateRangeDTO();

        $dto->setDescription($value);
        $this->assertSame($value, $dto->getDescription());
    }

    public function testConstructorWithValuesUsesSetterChain(): void
    {
        $start = new DateTimeImmutable('2024-01-01');
        $end   = new DateTimeImmutable('2024-12-31');
        $dto = new InvoiceSuiteDateRangeDTO($start, $end, 'FY 2024');

        $this->assertSame($start, $dto->getStartDate());
        $this->assertSame($end, $dto->getEndDate());
        $this->assertSame('FY 2024', $dto->getDescription());
    }

    #endregion
}
