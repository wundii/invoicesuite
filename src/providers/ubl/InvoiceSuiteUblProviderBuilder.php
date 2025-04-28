<?php

namespace horstoeko\invoicesuite\providers\ubl;

use DateTimeInterface;
use horstoeko\invoicesuite\abstracts\InvoiceSuiteAbstractFormatProviderBuilder;
use horstoeko\invoicesuite\models\ubl\main\CreditNote;
use horstoeko\invoicesuite\models\ubl\main\Invoice;
use horstoeko\invoicesuite\utils\InvoiceSuiteStringUtils;

class InvoiceSuiteUblProviderBuilder extends InvoiceSuiteAbstractFormatProviderBuilder
{
    /**
     * Returns the root object as a Invoice
     *
     * @return Invoice
     */
    protected function getUblInvoiceRootObject(): Invoice
    {
        return $this->getRootObject();
    }

    /**
     * Returns the root object as a CreditNote
     *
     * @return Invoice
     */
    protected function getUblCreditNoteRootObject(): CreditNote
    {
        return $this->getRootObject();
    }

    /**
     * Init context parameter for profile definition
     *
     * @param string $newCustomizationId
     * @param string $newProfileId
     * @return static
     */
    public function setContextParameter(string $newCustomizationId, string $newProfileId = ""): self
    {
        $this->getUblInvoiceRootObject()->getCustomizationIDWithCreate()->setValue($newCustomizationId);

        if ($newProfileId !== "") {
            $this->getUblInvoiceRootObject()->getProfileIDWithCreate()->setValue($newProfileId);
        } else {
            $this->getUblInvoiceRootObject()->getProfileIDWithCreate()->setValue('urn:fdc:peppol.eu:2017:poacc:billing:01:1.0');
        }

        return $this;
    }

    #region Document Generals

    /**
     * @inheritDoc
     *
     * @param string $newDocumentNo
     */
    public function setDocumentNo(string $newDocumentNo): self
    {
        if (InvoiceSuiteStringUtils::allIsNullOrEmpty([$newDocumentNo])) {
            return $this;
        }

        $this->getUblInvoiceRootObject()->getIDWithCreate()->setValue($newDocumentNo);

        return $this;
    }

    /**
     * @inheritDoc
     *
     * @param string $newDocumentType
     */
    public function setDocumentType(string $newDocumentType): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     *
     * @param string $newDocumentDescription Document Type. The documenttype (free text)
     */
    public function setDocumentDescription(string $newDocumentDescription): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     *
     * @param string $newDocumentLanguage Language indicator. The language code in which the document was written
     */
    public function setDocumentLanguage(string $newDocumentLanguage): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     *
     * @param DateTimeInterface $newDocumentDate Date of invoice. The date when the document was issued by the seller
     */
    public function setDocumentDate(DateTimeInterface $newDocumentDate): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     *
     * @param DateTimeInterface $newCompleteDate The contractual due date of the invoice
     */
    public function setDocumentCompleteDate(DateTimeInterface $newCompleteDate): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     *
     * @param string $newDocumentCurrency Code for the invoice currency
     */
    public function setDocumentCurrency(string $newDocumentCurrency): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     *
     * Note: Shall be used in combination with the Total VAT amount in accounting currency (BT-111)
     * when the VAT accounting currency code differs from the Invoice currency code.
     *
     * @param string $newDocumentTaxCurrency Code for the tax currency
     */
    public function setDocumentTaxCurrency(string $newDocumentTaxCurrency): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     *
     * @param bool $newDocumentIsCopy
     */
    public function setDocumentIsCopy(bool $newDocumentIsCopy): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     *
     * @param bool $newDocumentIsTest
     */
    public function setDocumentIsTest(bool $newDocumentIsTest): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     *
     * @param string $newContent     A free text containing unstructured information that is relevant to the invoice as a whole
     * @param string $newContentCode A code to classify the content of the free text of the invoice
     * @param string $newSubjectCode The qualification of the free text for the invoice from BT-22
     */
    public function addDocumentNote(string $newContent, string $newContentCode, string $newSubjectCode): self
    {
        return $this;
    }

    #endregion

    #region Document Seller/Supplier

    /**
     * @inheritDoc
     *
     * @param string $newName The full formal name under which the seller is registered in the National Register of Legal Entities, Taxable Person or otherwise acting as person(s)
     * @return self
     */
    public function setSellerName(string $newName): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     *
     * @param string $newId An identifier of the seller. In many systems, seller identification is key information. Multiple seller IDs can be assigned or specified. They can be differentiated by using different identification schemes. If no scheme is given, it should be known to the buyer and seller, e.g. a previously exchanged, buyer-assigned identifier of the seller
     * @return self
     */
    public function setSellerId(string $newId): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     *
     * @param string $newId An identifier of the seller. In many systems, seller identification is key information. Multiple seller IDs can be assigned or specified. They can be differentiated by using different identification schemes. If no scheme is given, it should be known to the buyer and seller, e.g. a previously exchanged, buyer-assigned identifier of the seller
     * @return self
     */
    public function addSellerId(string $newId): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     *
     * @param string $newGlobalId     An identifier of the seller. In many systems, seller identification is key information. Multiple seller IDs can be assigned or specified. They can be differentiated by using different identification schemes. If no scheme is given, it should be known to the buyer and seller, e.g. a previously exchanged, buyer-assigned identifier of the seller
     * @param string $newGlobalIdType If the identifier is used for the identification scheme, it must be selected from the entries in the list published by the ISO / IEC 6523 Maintenance Agency.
     * @return self
     */
    public function setSellerGlobalId(string $newGlobalId, string $newGlobalIdType): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     *
     * @param string $newGlobalId     An identifier of the seller. In many systems, seller identification is key information. Multiple seller IDs can be assigned or specified. They can be differentiated by using different identification schemes. If no scheme is given, it should be known to the buyer and seller, e.g. a previously exchanged, buyer-assigned identifier of the seller
     * @param string $newGlobalIdType If the identifier is used for the identification scheme, it must be selected from the entries in the list published by the ISO / IEC 6523 Maintenance Agency.
     * @return self
     */
    public function addSellerGlobalId(string $newGlobalId, string $newGlobalIdType): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     *
     * @param string $newTaxRegistrationType Type of tax number of the seller (FC = Tax number, VA = Sales tax identification number)
     * @param string $newTaxRegistrationId   Tax number of the seller or sales tax identification number of the seller
     * @return self
     */
    public function setSellerTaxRegistration(string $newTaxRegistrationType, string $newTaxRegistrationId): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     *
     * @param string $newTaxRegistrationType Type of tax number of the seller (FC = Tax number, VA = Sales tax identification number)
     * @param string $newTaxRegistrationId   Tax number of the seller or sales tax identification number of the seller
     * @return self
     */
    public function addSellerTaxRegistration(string $newTaxRegistrationType, string $newTaxRegistrationId): self
    {
        return $this;
    }

    /**
     * @param string $newAddressLine1 The main line in the sellers address. This is usually the street name and house number or the post office box
     * @param string $newAddressLine2 Line 2 of the seller's address. This is an additional address line in an address that can be used to provide additional details in addition to the main line used to provide additional details in addition to the main line
     * @param string $newAddressLine3 Line 3 of the seller's address. This is an additional address line in an address that can be used to provide additional details in addition to the main line
     * @param string $newPostcode     Identifier for a group of properties, such as a zip code
     * @param string $newCity         Usual name of the city or municipality in which the seller's address is located
     * @param string $newCountryId    Code used to identify the country. If no tax agent is specified, this is the country in which the sales tax is due. The lists of approved countries are maintained by the EN ISO 3166-1 Maintenance Agency “Codes for the representation of names of countries and their subdivisions”
     * @param string $newSubDivision  The sellers state
     * @return self
     */
    public function setSellerAddress(string $newAddressLine1, string $newAddressLine2, string $newAddressLine3, string $newPostcode, string $newCity, string $newCountryId, string $newSubDivision): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     *
     * @param string $newType The identifier for the identification scheme of the legal registration of the seller. If the identification scheme is used, it must be selected from ISO/IEC 6523 list
     * @param string $newId   An identifier issued by an official registrar that identifies the seller as a legal entity or legal person. If no identification scheme ($legalorgtype) is provided, it should be known to the buyer and seller
     * @param string $newName A name by which the seller is known, if different from the seller's name (also known as the company name). Note: This may be used if different from the seller's name.
     * @return self
     */
    public function setSellerLegalOrganisation(string $newType, string $newId, string $newName): self
    {
        return $this;
    }

    /**
     * @param string $newPersonName     Such as personal name, name of contact person or department or office
     * @param string $newDepartmentName If a contact person is specified, either the name or the department must be transmitted.
     * @param string $newPhoneNumber    A telephone number for the contact point
     * @param string $newFaxNumber      A fax number of the contact point
     * @param string $newEmailAddress   An e-mail address of the contact point
     * @return self
     */
    public function setSellerContact(string $newPersonName, string $newDepartmentName, string $newPhoneNumber, string $newFaxNumber, string $newEmailAddress): self
    {
        return $this;
    }

    /**
     * @param string $newPersonName     Such as personal name, name of contact person or department or office
     * @param string $newDepartmentName If a contact person is specified, either the name or the department must be transmitted.
     * @param string $newPhoneNumber    A telephone number for the contact point
     * @param string $newFaxNumber      A fax number of the contact point
     * @param string $newEmailAddress   An e-mail address of the contact point
     * @return self
     */
    public function addSellerContact(string $newPersonName, string $newDepartmentName, string $newPhoneNumber, string $newFaxNumber, string $newEmailAddress): self
    {
        return $this;
    }

    /**
     * @param string $newType The identifier for the identification scheme of the seller's electronic address
     * @param string $newUri  Specifies the electronic address of the seller to which the response to the invoice can be sent at application level
     * @return self
     */
    public function setSellerCommunication(string $newType, string $newUri): self
    {
        return $this;
    }

    #endregion

    #region Document Buyer/Customer

    /**
     * @inheritDoc
     *
     * @param string $newName __BT-44, From MINIMUM__ The full name of the buyer
     * @return self
     */
    public function setBuyerName(string $newName): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     *
     * @param string $newId __BT-46, From BASIC WL__ An identifier of the buyer. In many systems, buyer identification is key information. Multiple buyer IDs can be assigned or specified. They can be differentiated by using different identification schemes. If no scheme is given, it should be known to the buyer and buyer, e.g. a previously exchanged, seller-assigned identifier of the buyer
     * @return self
     */
    public function setBuyerId(string $newId): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     *
     * @param string $newId __BT-46, From BASIC WL__ An identifier of the buyer. In many systems, buyer identification is key information. Multiple buyer IDs can be assigned or specified. They can be differentiated by using different identification schemes. If no scheme is given, it should be known to the buyer and buyer, e.g. a previously exchanged, seller-assigned identifier of the buyer
     * @return self
     */
    public function addBuyerId(string $newId): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     *
     * @param string $newGlobalId     __BT-46-0, From BASIC WL__ The buyers's identifier identification scheme is an identifier uniquely assigned to a buyer by a global registration organization.
     * @param string $newGlobalIdType __BT-46-1, From BASIC WL__ If the identifier is used for the identification scheme, it must be selected from the entries in the list published by the ISO / IEC 6523 Maintenance Agency.
     * @return self
     */
    public function setBuyerGlobalId(string $newGlobalId, string $newGlobalIdType): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     *
     * @param string $newGlobalId     __BT-46-0, From BASIC WL__ The buyers's identifier identification scheme is an identifier uniquely assigned to a buyer by a global registration organization.
     * @param string $newGlobalIdType __BT-46-1, From BASIC WL__ If the identifier is used for the identification scheme, it must be selected from the entries in the list published by the ISO / IEC 6523 Maintenance Agency.
     * @return self
     */
    public function addBuyerGlobalId(string $newGlobalId, string $newGlobalIdType): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     *
     * @param string $newTaxRegistrationTyüe __BT-48-0, From MINIMUM__ Type of tax number (FC = Tax number, VA = Sales tax identification number)
     * @param string $newTaxRegistrationId   __BT-48, From MINIMUM__ Tax number or sales tax identification number
     * @return self
     */
    public function setBuyerTaxRegistration(string $newTaxRegistrationTyüe, string $newTaxRegistrationId): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     *
     * @param string $newTaxRegistrationTyüe __BT-48-0, From MINIMUM__ Type of tax number (FC = Tax number, VA = Sales tax identification number)
     * @param string $newTaxRegistrationId   __BT-48, From MINIMUM__ Tax number or sales tax identification number
     * @return self
     */
    public function addBuyerTaxRegistration(string $newTaxRegistrationTyüe, string $newTaxRegistrationId): self
    {
        return $this;
    }

    /**
     * @param string $newAddressLine1 The main line in the buyers address. This is usually the street name and house number or the post office box
     * @param string $newAddressLine2 Line 2 of the buyers address. This is an additional address line in an address that can be used to provide additional details in addition to the main line
     * @param string $newAddressLine3 Line 3 of the buyers address. This is an additional address line in an address that can be used to provide additional details in addition to the main line
     * @param string $newPostcode     Identifier for a group of properties, such as a zip code
     * @param string $newCity         Usual name of the city or municipality in which the buyers address is located
     * @param string $newCountryId    Code used to identify the country. If no tax agent is specified, this is the country in which the sales tax is due. The lists of approved countries are maintained by the EN ISO 3166-1 Maintenance Agency “Codes for the representation of names of countries and their subdivisions”
     * @param string $newSubDivision  The buyers state
     * @return self
     */
    public function setBuyerAddress(string $newAddressLine1, string $newAddressLine2, string $newAddressLine3, string $newPostcode, string $newCity, string $newCountryId, string $newSubDivision): self
    {
        return $this;
    }

    /**
     * @inheritDoc
     *
     * @param string $newType The identifier for the identification scheme of the legal registration of the buyer. If the identification scheme is used, it must be selected from ISO/IEC 6523 list
     * @param string $newId   An identifier issued by an official registrar that identifies the buyer as a legal entity or legal person. If no identification scheme ($legalorgtype) is provided, it should be known to the buyer and buyer
     * @param string $newName A name by which the buyer is known, if different from the buyers name (also known as the company name)
     * @return self
     */
    public function setBuyerLegalOrganisation(string $newType, string $newId, string $newName): self
    {
        return $this;
    }

    /**
     * @param string $newPersonName     __BT-56, From EN 16931__ Contact point for a legal entity, such as a personal name of the contact person
     * @param string $newDepartmentName __BT-56-0, From EN 16931__ Contact point for a legal entity, such as a name of the department or office
     * @param string $newPhoneNumber    __BT-57, From EN 16931__ A telephone number for the contact point
     * @param string $newFaxNumber      __BT-X-115, From EXTENDED__ A fax number of the contact point
     * @param string $newEmailAddress   __BT-58, From EN 16931__ An e-mail address of the contact point
     * @return self
     */
    public function setBuyerContact(string $newPersonName, string $newDepartmentName, string $newPhoneNumber, string $newFaxNumber, string $newEmailAddress): self
    {
        return $this;
    }

    /**
     * @param string $newPersonName     __BT-56, From EN 16931__ Contact point for a legal entity, such as a personal name of the contact person
     * @param string $newDepartmentName __BT-56-0, From EN 16931__ Contact point for a legal entity, such as a name of the department or office
     * @param string $newPhoneNumber    __BT-57, From EN 16931__ A telephone number for the contact point
     * @param string $newFaxNumber      __BT-X-115, From EXTENDED__ A fax number of the contact point
     * @param string $newEmailAddress   __BT-58, From EN 16931__ An e-mail address of the contact point
     * @return self
     */
    public function addBuyerContact(string $newPersonName, string $newDepartmentName, string $newPhoneNumber, string $newFaxNumber, string $newEmailAddress): self
    {
        return $this;
    }

    /**
     * @param string $newType __BT-49-1, From BASIC WL__ The identifier for the identification scheme of the buyer's electronic address
     * @param string $newUri  __BT-49, From BASIC WL__ Specifies the buyer's electronic address to which the invoice is sent
     * @return self
     */
    public function setBuyerCommunication(string $newType, string $newUri): self
    {
        return $this;
    }

    #endregion
}
