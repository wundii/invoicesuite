<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use horstoeko\invoicesuite\documentdto\InvoiceSuiteAllowanceChargeDTO;
use horstoeko\invoicesuite\tests\TestCase;

final class InvoiceSuiteAllowanceChargeDTOTest extends TestCase
{
    #region DataProviders

    /**
     * Data Provider
     *
     * @return array<int,array<int,bool|null>>
     */
    public function boolValues(): array
    {
        return [[null], [true], [false]];
    }

    /**
     * Data Provider
     *
     * @return array<int,array<int,float|null>>
     */
    public function floatValues(): array
    {
        return [[null], [0.0], [1.0], [19.5]];
    }

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
        $dto = new InvoiceSuiteAllowanceChargeDTO();

        $this->assertNull($dto->getChargeIndicator());
        $this->assertNull($dto->getAmount());
        $this->assertNull($dto->getBaseAmount());
        $this->assertNull($dto->getPercent());
        $this->assertNull($dto->getTaxCategory());
        $this->assertNull($dto->getTaxType());
        $this->assertNull($dto->getTaxPercent());
        $this->assertNull($dto->getReason());
        $this->assertNull($dto->getReasonCode());

        $this->assertInstanceOf(
            InvoiceSuiteAllowanceChargeDTO::class,
            $dto
        );
    }

    public function testFluentSettersReturnSelf(): void
    {
        $dto = new InvoiceSuiteAllowanceChargeDTO();

        $this->assertSame($dto, $dto->setChargeIndicator(true));
        $this->assertSame($dto, $dto->setAmount(10.0));
        $this->assertSame($dto, $dto->setBaseAmount(100.0));
        $this->assertSame($dto, $dto->setPercent(10.0));
        $this->assertSame($dto, $dto->setTaxCategory('S'));
        $this->assertSame($dto, $dto->setTaxType('VAT'));
        $this->assertSame($dto, $dto->setTaxPercent(19.0));
        $this->assertSame($dto, $dto->setReason('Skonto'));
        $this->assertSame($dto, $dto->setReasonCode('95'));
    }

    /**
     * @dataProvider boolValues
     */
    public function testBoolSetters(?bool $value): void
    {
        $dto = new InvoiceSuiteAllowanceChargeDTO();

        $dto->setChargeIndicator($value);
        $this->assertSame($value, $dto->getChargeIndicator());
    }

    /**
     * @dataProvider floatValues
     */
    public function testFloatSetters(?float $value): void
    {
        $dto = new InvoiceSuiteAllowanceChargeDTO();

        $dto->setAmount($value);
        $this->assertSame($value, $dto->getAmount());

        $dto->setBaseAmount($value);
        $this->assertSame($value, $dto->getBaseAmount());

        $dto->setPercent($value);
        $this->assertSame($value, $dto->getPercent());

        $dto->setTaxPercent($value);
        $this->assertSame($value, $dto->getTaxPercent());
    }

    /**
     * @dataProvider stringValues
     */
    public function testStringSetters(?string $value): void
    {
        $dto = new InvoiceSuiteAllowanceChargeDTO();

        $dto->setTaxCategory($value);
        $this->assertSame($value, $dto->getTaxCategory());

        $dto->setTaxType($value);
        $this->assertSame($value, $dto->getTaxType());

        $dto->setReason($value);
        $this->assertSame($value, $dto->getReason());

        $dto->setReasonCode($value);
        $this->assertSame($value, $dto->getReasonCode());
    }

    public function testConstructorWithValuesUsesSetterChain(): void
    {
        $dto = new InvoiceSuiteAllowanceChargeDTO(true, 10.0, 100.0, 10.0, 'S', 'VAT', 19.0, 'Skonto', '95');

        $this->assertSame(true, $dto->getChargeIndicator());
        $this->assertSame(10.0, $dto->getAmount());
        $this->assertSame(100.0, $dto->getBaseAmount());
        $this->assertSame(10.0, $dto->getPercent());
        $this->assertSame('S', $dto->getTaxCategory());
        $this->assertSame('VAT', $dto->getTaxType());
        $this->assertSame(19.0, $dto->getTaxPercent());
        $this->assertSame('Skonto', $dto->getReason());
        $this->assertSame('95', $dto->getReasonCode());
    }

    #endregion
}
