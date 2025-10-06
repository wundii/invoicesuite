<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use horstoeko\invoicesuite\documentdto\InvoiceSuitePartyDTO;
use horstoeko\invoicesuite\tests\TestCase;

class InvoiceSuitePartyDTOTest extends TestCase
{
    public function testConstructorAndDefaults(): void
    {
        $invoiceSuitePartyDTO = new InvoiceSuitePartyDTO();
        $this->assertSame([], $invoiceSuitePartyDTO->getName());
        $this->assertSame([], $invoiceSuitePartyDTO->getId());
        $this->assertSame([], $invoiceSuitePartyDTO->getGlobalId());
        $this->assertSame([], $invoiceSuitePartyDTO->getTaxRegistration());
        $this->assertSame([], $invoiceSuitePartyDTO->getAddress());
        $this->assertSame([], $invoiceSuitePartyDTO->getLegalOrganisation());
        $this->assertSame([], $invoiceSuitePartyDTO->getContact());
        $this->assertSame([], $invoiceSuitePartyDTO->getCommunication());
    }

    public function testNameGetterAndSetter(): void
    {
        $invoiceSuitePartyDTO = new InvoiceSuitePartyDTO();
        $nameValue = [];
        $invoiceSuitePartyDTO->setName($nameValue);
        $this->assertSame($nameValue, $invoiceSuitePartyDTO->getName());
    }

    public function testIdGetterAndSetter(): void
    {
        $invoiceSuitePartyDTO = new InvoiceSuitePartyDTO();
        $idValue = [];
        $invoiceSuitePartyDTO->setId($idValue);
        $this->assertSame($idValue, $invoiceSuitePartyDTO->getId());
    }

    public function testGlobalIdGetterAndSetter(): void
    {
        $invoiceSuitePartyDTO = new InvoiceSuitePartyDTO();
        $globalIdValue = [];
        $invoiceSuitePartyDTO->setGlobalId($globalIdValue);
        $this->assertSame($globalIdValue, $invoiceSuitePartyDTO->getGlobalId());
    }

    public function testTaxRegistrationGetterAndSetter(): void
    {
        $invoiceSuitePartyDTO = new InvoiceSuitePartyDTO();
        $taxRegistrationValue = [];
        $invoiceSuitePartyDTO->setTaxRegistration($taxRegistrationValue);
        $this->assertSame($taxRegistrationValue, $invoiceSuitePartyDTO->getTaxRegistration());
    }

    public function testAddressGetterAndSetter(): void
    {
        $invoiceSuitePartyDTO = new InvoiceSuitePartyDTO();
        $addressValue = [];
        $invoiceSuitePartyDTO->setAddress($addressValue);
        $this->assertSame($addressValue, $invoiceSuitePartyDTO->getAddress());
    }

    public function testLegalOrganisationGetterAndSetter(): void
    {
        $invoiceSuitePartyDTO = new InvoiceSuitePartyDTO();
        $legalOrganisationValue = [];
        $invoiceSuitePartyDTO->setLegalOrganisation($legalOrganisationValue);
        $this->assertSame($legalOrganisationValue, $invoiceSuitePartyDTO->getLegalOrganisation());
    }

    public function testContactGetterAndSetter(): void
    {
        $invoiceSuitePartyDTO = new InvoiceSuitePartyDTO();
        $contactValue = [];
        $invoiceSuitePartyDTO->setContact($contactValue);
        $this->assertSame($contactValue, $invoiceSuitePartyDTO->getContact());
    }

    public function testCommunicationGetterAndSetter(): void
    {
        $invoiceSuitePartyDTO = new InvoiceSuitePartyDTO();
        $communicationValue = [];
        $invoiceSuitePartyDTO->setCommunication($communicationValue);
        $this->assertSame($communicationValue, $invoiceSuitePartyDTO->getCommunication());
    }
}
