<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use horstoeko\invoicesuite\documentdto\InvoiceSuiteMeasureDTO;
use horstoeko\invoicesuite\tests\TestCase;

final class InvoiceSuiteMeasureDTOTest extends TestCase
{
    #region DataProviders

    /**
     * Data Provider
     *
     * @return array<int,array<int,float|null>>
     */
    public function floatValues(): array
    {
        return [[null], [0.0], [1.5], [-3.2]];
    }

    /**
     * Data Provider
     *
     * @return array<int,array<int,string|null>>
     */
    public function stringValues(): array
    {
        return [[null], [''], ['KG']];
    }

    #endregion

    #region Tests

    public function testConstructorDefaults(): void
    {
        $dto = new InvoiceSuiteMeasureDTO();

        $this->assertNull($dto->getValue());
        $this->assertNull($dto->getUnit());

        $this->assertInstanceOf(
            InvoiceSuiteMeasureDTO::class,
            $dto
        );
    }

    public function testFluentSettersReturnSelf(): void
    {
        $dto = new InvoiceSuiteMeasureDTO();

        $this->assertSame($dto, $dto->setValue(1.5));
        $this->assertSame($dto, $dto->setUnit('KG'));
    }

    /**
     * @dataProvider floatValues
     */
    public function testFloatSetters(?float $value): void
    {
        $dto = new InvoiceSuiteMeasureDTO();

        $dto->setValue($value);
        $this->assertSame($value, $dto->getValue());
    }

    /**
     * @dataProvider stringValues
     */
    public function testStringSetters(?string $value): void
    {
        $dto = new InvoiceSuiteMeasureDTO();

        $dto->setUnit($value);
        $this->assertSame($value, $dto->getUnit());
    }

    public function testConstructorWithValuesUsesSetterChain(): void
    {
        $dto = new InvoiceSuiteMeasureDTO(2.5, 'M');

        $this->assertSame(2.5, $dto->getValue());
        $this->assertSame('M', $dto->getUnit());
    }

    #endregion
}
