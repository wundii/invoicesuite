<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use horstoeko\invoicesuite\documentdto\InvoiceSuiteReferenceDocumentExtDTO;
use horstoeko\invoicesuite\tests\TestCase;

class InvoiceSuiteReferenceDocumentExtDTOTest extends TestCase
{
    public function testConstructorAndDefaults(): void
    {
        $invoiceSuiteReferenceDocumentExtDTO = new InvoiceSuiteReferenceDocumentExtDTO();
        $this->assertNull($invoiceSuiteReferenceDocumentExtDTO->getTypeCode());
        $this->assertNull($invoiceSuiteReferenceDocumentExtDTO->getReferenceTypeCode());
        $this->assertNull($invoiceSuiteReferenceDocumentExtDTO->getDescription());
        $this->assertNull($invoiceSuiteReferenceDocumentExtDTO->getAttachment());
    }

    public function testTypeCodeGetterAndSetter(): void
    {
        $invoiceSuiteReferenceDocumentExtDTO = new InvoiceSuiteReferenceDocumentExtDTO();
        $typeCodeValue = "Example Value";
        $invoiceSuiteReferenceDocumentExtDTO->setTypeCode($typeCodeValue);
        $this->assertSame($typeCodeValue, $invoiceSuiteReferenceDocumentExtDTO->getTypeCode());
    }

    public function testReferenceTypeCodeGetterAndSetter(): void
    {
        $invoiceSuiteReferenceDocumentExtDTO = new InvoiceSuiteReferenceDocumentExtDTO();
        $referenceTypeCodeValue = "Example Value";
        $invoiceSuiteReferenceDocumentExtDTO->setReferenceTypeCode($referenceTypeCodeValue);
        $this->assertSame($referenceTypeCodeValue, $invoiceSuiteReferenceDocumentExtDTO->getReferenceTypeCode());
    }

    public function testDescriptionGetterAndSetter(): void
    {
        $invoiceSuiteReferenceDocumentExtDTO = new InvoiceSuiteReferenceDocumentExtDTO();
        $descriptionValue = "Example Value";
        $invoiceSuiteReferenceDocumentExtDTO->setDescription($descriptionValue);
        $this->assertSame($descriptionValue, $invoiceSuiteReferenceDocumentExtDTO->getDescription());
    }
}
