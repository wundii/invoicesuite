<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use horstoeko\invoicesuite\documents\dto\InvoiceSuiteCommunicationDTO;
use horstoeko\invoicesuite\tests\TestCase;

final class InvoiceSuiteCommunicationDTOTest extends TestCase
{
    public function testConstructorAndDefaults(): void
    {
        $invoiceSuiteCommunicationDTO = new InvoiceSuiteCommunicationDTO();

        $this->assertNull($invoiceSuiteCommunicationDTO->getId());
        $this->assertNull($invoiceSuiteCommunicationDTO->getIdType());
    }

    public function testIdGetterAndSetter(): void
    {
        $invoiceSuiteCommunicationDTO = new InvoiceSuiteCommunicationDTO();
        $idValue = 'Example Value';
        $invoiceSuiteCommunicationDTO->setId($idValue);

        $this->assertSame($idValue, $invoiceSuiteCommunicationDTO->getId());
    }

    public function testIdTypeGetterAndSetter(): void
    {
        $invoiceSuiteCommunicationDTO = new InvoiceSuiteCommunicationDTO();
        $idTypeValue = 'Example Value';
        $invoiceSuiteCommunicationDTO->setIdType($idTypeValue);

        $this->assertSame($idTypeValue, $invoiceSuiteCommunicationDTO->getIdType());
    }
}
