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

    #region Document Generals

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

    #endregion

    #region Document Seller/Supplier

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

    /**
     * @inheritDoc
     */
    public function setSellerAddress(string $newAddressLine1, string $newAddressLine2, string $newAddressLine3, string $newPostcode, string $newCity, string $newCountryId, string $newSubDivision): self
    {
        if (
            InvoiceSuiteStringUtils::allIsNullOrEmpty([
                $newAddressLine1,
                $newAddressLine2,
                $newAddressLine3,
                $newPostcode,
                $newCity,
                $newCountryId,
                $newSubDivision
            ])
        ) {
            return $this;
        }

        $postalAddress = $this
            ->getUblInvoiceRootObject()
            ->getAccountingSupplierPartyWithCreate()
            ->getPartyWithCreate()
            ->getPostalAddressWithCreate();

        if (!InvoiceSuiteStringUtils::allIsNullOrEmpty([$newAddressLine1])) {
            $postalAddress->getStreetNameWithCreate()->setValue($newAddressLine1);
        }

        if (!InvoiceSuiteStringUtils::allIsNullOrEmpty([$newAddressLine2])) {
            $postalAddress->getAdditionalStreetNameWithCreate()->setValue($newAddressLine2);
        }

        if (!InvoiceSuiteStringUtils::allIsNullOrEmpty([$newPostcode])) {
            $postalAddress->getPostalZoneWithCreate()->setValue($newPostcode);
        }

        if (!InvoiceSuiteStringUtils::allIsNullOrEmpty([$newCity])) {
            $postalAddress->getCityNameWithCreate()->setValue($newCity);
        }

        if (!InvoiceSuiteStringUtils::allIsNullOrEmpty([$newCountryId])) {
            $postalAddress->getCountryWithCreate()->getIdentificationCodeWithCreate()->setValue($newCountryId);
        }

        if (!InvoiceSuiteStringUtils::allIsNullOrEmpty([$newSubDivision])) {
            $postalAddress->getCountrySubentityWithCreate()->setValue($newSubDivision);
        }

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setSellerLegalOrganisation(string $newType, string $newId, string $newName): self
    {
        if (InvoiceSuiteStringUtils::allIsNullOrEmpty([$newType, $newId, $newName])) {
            return $this;
        }

        if (!InvoiceSuiteStringUtils::stringIsNullOrEmpty($newId)) {
            $this
                ->getUblInvoiceRootObject()
                ->getAccountingSupplierPartyWithCreate()
                ->getPartyWithCreate()
                ->addOnceToPartyLegalEntityWithCreate()
                ->getCompanyIDWithCreate()
                ->setValue($newId);
        }

        if (!InvoiceSuiteStringUtils::stringIsNullOrEmpty($newName)) {
            $this
                ->getUblInvoiceRootObject()
                ->getAccountingSupplierPartyWithCreate()
                ->getPartyWithCreate()
                ->addOnceToPartyNameWithCreate()
                ->getNameWithCreate()
                ->setValue($newName);
        }

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setSellerContact(string $newPersonName, string $newDepartmentName, string $newPhoneNumber, string $newFaxNumber, string $newEmailAddress): self
    {
        if (
            InvoiceSuiteStringUtils::allIsNullOrEmpty([
                $newPersonName,
                $newDepartmentName,
                $newPhoneNumber,
                $newFaxNumber,
                $newEmailAddress
            ])
        ) {
            return $this;
        }

        $contact = $this
            ->getUblInvoiceRootObject()
            ->getAccountingSupplierPartyWithCreate()
            ->getPartyWithCreate()
            ->getContactWithCreate();

        if (!InvoiceSuiteStringUtils::stringIsNullOrEmpty($newPersonName)) {
            $contact->getNameWithCreate()->setValue($newPersonName);
        }

        if (!InvoiceSuiteStringUtils::stringIsNullOrEmpty($newDepartmentName)) {
            // Nothing here
        }

        if (!InvoiceSuiteStringUtils::stringIsNullOrEmpty($newPhoneNumber)) {
            $contact->getTelephoneWithCreate()->setValue($newPhoneNumber);
        }

        if (!InvoiceSuiteStringUtils::stringIsNullOrEmpty($newFaxNumber)) {
            $contact->getTelefaxWithCreate()->setValue($newFaxNumber);
        }

        if (!InvoiceSuiteStringUtils::stringIsNullOrEmpty($newEmailAddress)) {
            $contact->getElectronicMailWithCreate()->setValue($newEmailAddress);
        }

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function addSellerContact(string $newPersonName, string $newDepartmentName, string $newPhoneNumber, string $newFaxNumber, string $newEmailAddress): self
    {
        return $this->setSellerContact($newPersonName, $newDepartmentName, $newPhoneNumber, $newFaxNumber, $newEmailAddress);
    }

    /**
     * @inheritDoc
     */
    public function setSellerCommunication(string $newType, string $newUri): self
    {
        if (InvoiceSuiteStringUtils::allIsNullOrEmpty([$newType, $newUri])) {
            return $this;
        }

        $endpointId = $this
            ->getUblInvoiceRootObject()
            ->getAccountingSupplierPartyWithCreate()
            ->getPartyWithCreate()
            ->getEndpointIDWithCreate();

        if (!InvoiceSuiteStringUtils::allIsNullOrEmpty([$newType])) {
            $endpointId->setSchemeID($newType);
        }

        if (!InvoiceSuiteStringUtils::allIsNullOrEmpty([$newUri])) {
            $endpointId->setValue($newUri);
        }

        return $this;
    }

    #endregion

    #region Document Buyer/Customer

    /**
     * @inheritDoc
     */
    public function setBuyerName(string $newName): self
    {
        if (InvoiceSuiteStringUtils::allIsNullOrEmpty([$newName])) {
            return $this;
        }

        $this
            ->getUblInvoiceRootObject()
            ->getAccountingCustomerPartyWithCreate()
            ->getPartyWithCreate()
            ->addOnceToPartyLegalEntityWithCreate()
            ->getRegistrationNameWithCreate()
            ->setValue($newName);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setBuyerId(string $newId): self
    {
        if (InvoiceSuiteStringUtils::allIsNullOrEmpty([$newId])) {
            return $this;
        }

        $this
            ->getUblInvoiceRootObject()
            ->getAccountingCustomerPartyWithCreate()
            ->getPartyWithCreate()
            ->setPartyIdentification(
                array_filter(
                    $this
                        ->getUblInvoiceRootObject()
                        ->getAccountingCustomerPartyWithCreate()
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
            ->getAccountingCustomerPartyWithCreate()
            ->getPartyWithCreate();

        $this->addBuyerId($newId);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function addBuyerId(string $newId): self
    {
        if (InvoiceSuiteStringUtils::allIsNullOrEmpty([$newId])) {
            return $this;
        }

        $this
            ->getUblInvoiceRootObject()
            ->getAccountingCustomerPartyWithCreate()
            ->getPartyWithCreate()
            ->addToPartyIdentificationWithCreate()
            ->getIDWithCreate()
            ->setValue($newId);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setBuyerGlobalId(string $newGlobalId, string $newGlobalIdType): self
    {
        if (InvoiceSuiteStringUtils::allIsNullOrEmpty([$newGlobalId, $newGlobalIdType])) {
            return $this;
        }

        $this
            ->getUblInvoiceRootObject()
            ->getAccountingCustomerPartyWithCreate()
            ->getPartyWithCreate()
            ->setPartyIdentification(
                array_filter(
                    $this
                        ->getUblInvoiceRootObject()
                        ->getAccountingCustomerPartyWithCreate()
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
            ->getAccountingCustomerPartyWithCreate()
            ->getPartyWithCreate();

        $this->addBuyerGlobalId($newGlobalId, $newGlobalIdType);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function addBuyerGlobalId(string $newGlobalId, string $newGlobalIdType): self
    {
        if (InvoiceSuiteStringUtils::allIsNullOrEmpty([$newGlobalId, $newGlobalIdType])) {
            return $this;
        }

        $this
            ->getUblInvoiceRootObject()
            ->getAccountingCustomerPartyWithCreate()
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
    public function setBuyerTaxRegistration(string $newTaxRegistrationType, string $newTaxRegistrationId): self
    {
        if (InvoiceSuiteStringUtils::allIsNullOrEmpty([$newTaxRegistrationType, $newTaxRegistrationId])) {
            return $this;
        }

        $this
            ->getUblInvoiceRootObject()
            ->getAccountingCustomerPartyWithCreate()
            ->getPartyWithCreate()
            ->clearPartyTaxScheme();

        $this->addBuyerTaxRegistration($newTaxRegistrationType, $newTaxRegistrationId);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function addBuyerTaxRegistration(string $newTaxRegistrationType, string $newTaxRegistrationId): self
    {
        if (InvoiceSuiteStringUtils::allIsNullOrEmpty([$newTaxRegistrationType, $newTaxRegistrationId])) {
            return $this;
        }

        $partyTaxScheme = $this
            ->getUblInvoiceRootObject()
            ->getAccountingCustomerPartyWithCreate()
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

    /**
     * @inheritDoc
     */
    public function setBuyerAddress(string $newAddressLine1, string $newAddressLine2, string $newAddressLine3, string $newPostcode, string $newCity, string $newCountryId, string $newSubDivision): self
    {
        if (
            InvoiceSuiteStringUtils::allIsNullOrEmpty([
                $newAddressLine1,
                $newAddressLine2,
                $newAddressLine3,
                $newPostcode,
                $newCity,
                $newCountryId,
                $newSubDivision
            ])
        ) {
            return $this;
        }

        $postalAddress = $this
            ->getUblInvoiceRootObject()
            ->getAccountingCustomerPartyWithCreate()
            ->getPartyWithCreate()
            ->getPostalAddressWithCreate();

        if (!InvoiceSuiteStringUtils::allIsNullOrEmpty([$newAddressLine1])) {
            $postalAddress->getStreetNameWithCreate()->setValue($newAddressLine1);
        }

        if (!InvoiceSuiteStringUtils::allIsNullOrEmpty([$newAddressLine2])) {
            $postalAddress->getAdditionalStreetNameWithCreate()->setValue($newAddressLine2);
        }

        if (!InvoiceSuiteStringUtils::allIsNullOrEmpty([$newPostcode])) {
            $postalAddress->getPostalZoneWithCreate()->setValue($newPostcode);
        }

        if (!InvoiceSuiteStringUtils::allIsNullOrEmpty([$newCity])) {
            $postalAddress->getCityNameWithCreate()->setValue($newCity);
        }

        if (!InvoiceSuiteStringUtils::allIsNullOrEmpty([$newCountryId])) {
            $postalAddress->getCountryWithCreate()->getIdentificationCodeWithCreate()->setValue($newCountryId);
        }

        if (!InvoiceSuiteStringUtils::allIsNullOrEmpty([$newSubDivision])) {
            $postalAddress->getCountrySubentityWithCreate()->setValue($newSubDivision);
        }

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setBuyerLegalOrganisation(string $newType, string $newId, string $newName): self
    {
        if (InvoiceSuiteStringUtils::allIsNullOrEmpty([$newType, $newId, $newName])) {
            return $this;
        }

        if (!InvoiceSuiteStringUtils::stringIsNullOrEmpty($newId)) {
            $this
                ->getUblInvoiceRootObject()
                ->getAccountingCustomerPartyWithCreate()
                ->getPartyWithCreate()
                ->addOnceToPartyLegalEntityWithCreate()
                ->getCompanyIDWithCreate()
                ->setValue($newId);
        }

        if (!InvoiceSuiteStringUtils::stringIsNullOrEmpty($newName)) {
            $this
                ->getUblInvoiceRootObject()
                ->getAccountingCustomerPartyWithCreate()
                ->getPartyWithCreate()
                ->addOnceToPartyNameWithCreate()
                ->getNameWithCreate()
                ->setValue($newName);
        }

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setBuyerContact(string $newPersonName, string $newDepartmentName, string $newPhoneNumber, string $newFaxNumber, string $newEmailAddress): self
    {
        if (
            InvoiceSuiteStringUtils::allIsNullOrEmpty([
                $newPersonName,
                $newDepartmentName,
                $newPhoneNumber,
                $newFaxNumber,
                $newEmailAddress
            ])
        ) {
            return $this;
        }

        $contact = $this
            ->getUblInvoiceRootObject()
            ->getAccountingCustomerPartyWithCreate()
            ->getPartyWithCreate()
            ->getContactWithCreate();

        if (!InvoiceSuiteStringUtils::stringIsNullOrEmpty($newPersonName)) {
            $contact->getNameWithCreate()->setValue($newPersonName);
        }

        if (!InvoiceSuiteStringUtils::stringIsNullOrEmpty($newDepartmentName)) {
            // Nothing here
        }

        if (!InvoiceSuiteStringUtils::stringIsNullOrEmpty($newPhoneNumber)) {
            $contact->getTelephoneWithCreate()->setValue($newPhoneNumber);
        }

        if (!InvoiceSuiteStringUtils::stringIsNullOrEmpty($newFaxNumber)) {
            $contact->getTelefaxWithCreate()->setValue($newFaxNumber);
        }

        if (!InvoiceSuiteStringUtils::stringIsNullOrEmpty($newEmailAddress)) {
            $contact->getElectronicMailWithCreate()->setValue($newEmailAddress);
        }

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function addBuyerContact(string $newPersonName, string $newDepartmentName, string $newPhoneNumber, string $newFaxNumber, string $newEmailAddress): self
    {
        return $this->setBuyerContact($newPersonName, $newDepartmentName, $newPhoneNumber, $newFaxNumber, $newEmailAddress);
    }

    /**
     * @inheritDoc
     */
    public function setBuyerCommunication(string $newType, string $newUri): self
    {
        if (InvoiceSuiteStringUtils::allIsNullOrEmpty([$newType, $newUri])) {
            return $this;
        }

        $endpointId = $this
            ->getUblInvoiceRootObject()
            ->getAccountingCustomerPartyWithCreate()
            ->getPartyWithCreate()
            ->getEndpointIDWithCreate();

        if (!InvoiceSuiteStringUtils::allIsNullOrEmpty([$newType])) {
            $endpointId->setSchemeID($newType);
        }

        if (!InvoiceSuiteStringUtils::allIsNullOrEmpty([$newUri])) {
            $endpointId->setValue($newUri);
        }

        return $this;
    }

    #endregion
}
