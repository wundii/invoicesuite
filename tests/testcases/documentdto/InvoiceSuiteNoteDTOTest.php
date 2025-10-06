<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use horstoeko\invoicesuite\documentdto\InvoiceSuiteNoteDTO;
use horstoeko\invoicesuite\tests\TestCase;

final class InvoiceSuiteNoteDTOTest extends TestCase
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
        $dto = new InvoiceSuiteNoteDTO();

        $this->assertNull($dto->getContent());
        $this->assertNull($dto->getContentCode());
        $this->assertNull($dto->getSubjectCode());

        $this->assertInstanceOf(
            InvoiceSuiteNoteDTO::class,
            $dto
        );
    }

    public function testFluentSettersReturnSelf(): void
    {
        $dto = new InvoiceSuiteNoteDTO();

        $this->assertSame($dto, $dto->setContent('Hinweis'));
        $this->assertSame($dto, $dto->setContentCode('GEN'));
        $this->assertSame($dto, $dto->setSubjectCode('SUB'));
    }

    /**
     * @dataProvider stringValues
     */
    public function testStringSetters(?string $value): void
    {
        $dto = new InvoiceSuiteNoteDTO();

        $dto->setContent($value);
        $this->assertSame($value, $dto->getContent());

        $dto->setContentCode($value);
        $this->assertSame($value, $dto->getContentCode());

        $dto->setSubjectCode($value);
        $this->assertSame($value, $dto->getSubjectCode());
    }

    public function testConstructorWithValuesUsesSetterChain(): void
    {
        $dto = new InvoiceSuiteNoteDTO('Text', 'GEN', 'SUB');

        $this->assertSame('Text', $dto->getContent());
        $this->assertSame('GEN', $dto->getContentCode());
        $this->assertSame('SUB', $dto->getSubjectCode());
    }

    #endregion
}
