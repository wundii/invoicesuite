<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use horstoeko\invoicesuite\documentdto\InvoiceSuiteAddressDTO;
use horstoeko\invoicesuite\tests\TestCase;

final class InvoiceSuiteAddressDTOTest extends TestCase
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
        $dto = new InvoiceSuiteAddressDTO();

        $this->assertNull($dto->getAddressLine1());
        $this->assertNull($dto->getAddressLine2());
        $this->assertNull($dto->getAddressLine3());
        $this->assertNull($dto->getPostcode());
        $this->assertNull($dto->getCity());
        $this->assertNull($dto->getCountry());
        $this->assertNull($dto->getSubDivision());

        $this->assertInstanceOf(
            InvoiceSuiteAddressDTO::class,
            $dto
        );
    }

    public function testFluentSettersReturnSelf(): void
    {
        $dto = new InvoiceSuiteAddressDTO();

        $this->assertSame($dto, $dto->setAddressLine1('L1'));
        $this->assertSame($dto, $dto->setAddressLine2('L2'));
        $this->assertSame($dto, $dto->setAddressLine3('L3'));
        $this->assertSame($dto, $dto->setPostcode('12345'));
        $this->assertSame($dto, $dto->setCity('CITY'));
        $this->assertSame($dto, $dto->setCountry('DE'));
        $this->assertSame($dto, $dto->setSubDivision('BY'));
    }

    /**
     * @dataProvider stringValues
     */
    public function testStringSetters(?string $value): void
    {
        $dto = new InvoiceSuiteAddressDTO();

        $dto->setAddressLine1($value);
        $this->assertSame($value, $dto->getAddressLine1());

        $dto->setAddressLine2($value);
        $this->assertSame($value, $dto->getAddressLine2());

        $dto->setAddressLine3($value);
        $this->assertSame($value, $dto->getAddressLine3());

        $dto->setPostcode($value);
        $this->assertSame($value, $dto->getPostcode());

        $dto->setCity($value);
        $this->assertSame($value, $dto->getCity());

        $dto->setCountry($value);
        $this->assertSame($value, $dto->getCountry());

        $dto->setSubDivision($value);
        $this->assertSame($value, $dto->getSubDivision());
    }

    /**
     * @dataProvider stringValues
     */
    public function testHasMethods(?string $value): void
    {
        $dto = new InvoiceSuiteAddressDTO($value, $value, $value, $value, $value, $value, $value);
        $expect = $value !== null && $value !== '';

        $this->assertSame($expect, $dto->hasAddressLine1());
        $this->assertSame($expect, $dto->hasAddressLine2());
        $this->assertSame($expect, $dto->hasAddressLine3());
        $this->assertSame($expect, $dto->hasPostcode());
        $this->assertSame($expect, $dto->hasCity());
        $this->assertSame($expect, $dto->hasCountry());
        $this->assertSame($expect, $dto->hasSubDivision());
    }

    public function testConstructorWithValuesUsesSetterChain(): void
    {
        $dto = new InvoiceSuiteAddressDTO('L1', 'L2', 'L3', '12345', 'CITY', 'DE', 'BY');

        $this->assertSame('L1', $dto->getAddressLine1());
        $this->assertSame('L2', $dto->getAddressLine2());
        $this->assertSame('L3', $dto->getAddressLine3());
        $this->assertSame('12345', $dto->getPostcode());
        $this->assertSame('CITY', $dto->getCity());
        $this->assertSame('DE', $dto->getCountry());
        $this->assertSame('BY', $dto->getSubDivision());
    }

    #endregion
}
