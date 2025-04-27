<?php

namespace horstoeko\invoicesuite\providers\ubl;

use DateTimeInterface;
use horstoeko\invoicesuite\utils\InvoiceSuiteStringUtils;
use horstoeko\invoicesuite\models\ubl\cac\PartyIdentificationType;

class InvoiceSuiteUblInvoiceProviderBuilder extends InvoiceSuiteUblProviderBuilder
{
    /**
     * @inheritDoc
     */
    public function initRootObject(): InvoiceSuiteUblInvoiceProviderBuilder
    {
        $this->setContextParameter('urn:cen.eu:en16931:2017');

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setDocumentType(string $newDocumentType): self
    {
        if (InvoiceSuiteStringUtils::allIsNullOrEmpty([$newDocumentType])) {
            return $this;
        }

        $this->getUblInvoiceRootObject()->getInvoiceTypeCodeWithCreate()->setValue($newDocumentType);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setDocumentDescription(string $newDocumentDescription): self
    {
        if (InvoiceSuiteStringUtils::allIsNullOrEmpty([$newDocumentDescription])) {
            return $this;
        }

        $this->getUblInvoiceRootObject()->getInvoiceTypeCodeWithCreate()->setName($newDocumentDescription);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setDocumentLanguage(string $newDocumentLanguage): self
    {
        if (InvoiceSuiteStringUtils::allIsNullOrEmpty([$newDocumentLanguage])) {
            return $this;
        }

        $this->getUblInvoiceRootObject()->getInvoiceTypeCodeWithCreate()->setLanguageID($newDocumentLanguage);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setDocumentDate(DateTimeInterface $newDocumentDate): self
    {
        $this->getUblInvoiceRootObject()->setIssueDate($newDocumentDate);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setDocumentCompleteDate(DateTimeInterface $newCompleteDate): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setDocumentCurrency(string $newDocumentCurrency): self
    {
        $this->getUblInvoiceRootObject()->getDocumentCurrencyCodeWithCreate()->setValue($newDocumentCurrency);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setDocumentTaxCurrency(string $newDocumentTaxCurrency): self
    {
        $this->getUblInvoiceRootObject()->getTaxCurrencyCodeWithCreate()->setValue($newDocumentTaxCurrency);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setDocumentIsCopy(bool $newDocumentIsCopy): self
    {
        $this->getUblInvoiceRootObject()->setCopyIndicator($newDocumentIsCopy);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setDocumentIsTest(bool $newDocumentIsTest): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function addDocumentNote(string $newContent, string $newContentCode, string $newSubjectCode): self
    {
        $this->getUblInvoiceRootObject()->addToNoteWithCreate()->setValue($newContent);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setSellerName(string $newName): self
    {
        if (InvoiceSuiteStringUtils::allIsNullOrEmpty([$newName])) {
            return $this;
        }

        $this
            ->getUblInvoiceRootObject()
            ->getAccountingSupplierPartyWithCreate()
            ->getPartyWithCreate()
            ->addOnceToPartyLegalEntityWithCreate()
            ->getRegistrationNameWithCreate()
            ->setValue($newName);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setSellerId(string $newId): self
    {
        if (InvoiceSuiteStringUtils::allIsNullOrEmpty([$newId])) {
            return $this;
        }

        $this
            ->getUblInvoiceRootObject()
            ->getAccountingSupplierPartyWithCreate()
            ->getPartyWithCreate()
            ->setPartyIdentification(
                array_filter(
                    $this
                        ->getUblInvoiceRootObject()
                        ->getAccountingSupplierPartyWithCreate()
                        ->getPartyWithCreate()
                        ->getPartyIdentification() ?? [],
                    function (
                        PartyIdentificationType $partyIdentification
                    ) {
                        return !InvoiceSuiteStringUtils::stringIsNullOrEmpty($partyIdentification->getID()->getSchemeID());
                    }
                )
            );

        $this
            ->getUblInvoiceRootObject()
            ->getAccountingSupplierPartyWithCreate()
            ->getPartyWithCreate();

        $this->addSellerId($newId);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function addSellerId(string $newId): self
    {
        if (InvoiceSuiteStringUtils::allIsNullOrEmpty([$newId])) {
            return $this;
        }

        $this
            ->getUblInvoiceRootObject()
            ->getAccountingSupplierPartyWithCreate()
            ->getPartyWithCreate()
            ->addToPartyIdentificationWithCreate()
            ->getIDWithCreate()
            ->setValue($newId);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setSellerGlobalId(string $newGlobalId, string $newGlobalIdType): self
    {
        if (InvoiceSuiteStringUtils::allIsNullOrEmpty([$newGlobalId, $newGlobalIdType])) {
            return $this;
        }

        $this
            ->getUblInvoiceRootObject()
            ->getAccountingSupplierPartyWithCreate()
            ->getPartyWithCreate()
            ->setPartyIdentification(
                array_filter(
                    $this
                        ->getUblInvoiceRootObject()
                        ->getAccountingSupplierPartyWithCreate()
                        ->getPartyWithCreate()
                        ->getPartyIdentification() ?? [],
                    function (
                        PartyIdentificationType $partyIdentification
                    ) {
                        return InvoiceSuiteStringUtils::stringIsNullOrEmpty($partyIdentification->getID()->getSchemeID());
                    }
                )
            );

        $this
            ->getUblInvoiceRootObject()
            ->getAccountingSupplierPartyWithCreate()
            ->getPartyWithCreate();

        $this->addSellerGlobalId($newGlobalId, $newGlobalIdType);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function addSellerGlobalId(string $newGlobalId, string $newGlobalIdType): self
    {
        if (InvoiceSuiteStringUtils::allIsNullOrEmpty([$newGlobalId, $newGlobalIdType])) {
            return $this;
        }

        $this
            ->getUblInvoiceRootObject()
            ->getAccountingSupplierPartyWithCreate()
            ->getPartyWithCreate()
            ->addToPartyIdentificationWithCreate()
            ->getIDWithCreate()
            ->setValue($newGlobalId)
            ->setSchemeID($newGlobalIdType);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setSellerTaxRegistration(string $newTaxRegistrationType, string $newTaxRegistrationId): self
    {
        if (InvoiceSuiteStringUtils::allIsNullOrEmpty([$newTaxRegistrationType, $newTaxRegistrationId])) {
            return $this;
        }

        $this
            ->getUblInvoiceRootObject()
            ->getAccountingSupplierPartyWithCreate()
            ->getPartyWithCreate()
            ->clearPartyTaxScheme();

        $this->addSellerTaxRegistration($newTaxRegistrationType, $newTaxRegistrationId);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function addSellerTaxRegistration(string $newTaxRegistrationType, string $newTaxRegistrationId): self
    {
        if (InvoiceSuiteStringUtils::allIsNullOrEmpty([$newTaxRegistrationType, $newTaxRegistrationId])) {
            return $this;
        }

        $partyTaxScheme = $this
            ->getUblInvoiceRootObject()
            ->getAccountingSupplierPartyWithCreate()
            ->getPartyWithCreate()
            ->addToPartyTaxSchemeWithCreate();

        $partyTaxScheme
            ->getCompanyIDWithCreate()
            ->setValue($newTaxRegistrationId);

        $partyTaxScheme
            ->getTaxSchemeWithCreate()
            ->getIDWithCreate()
            ->setValue($newTaxRegistrationType);


        return $this;
    }
}
