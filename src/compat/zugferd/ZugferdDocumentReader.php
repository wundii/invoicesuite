<?php

declare(strict_types=1);

/**
 * This file is a part of horstoeko/invoicesuite
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\zugferd;

use DateTime;
use horstoeko\invoicesuite\InvoiceSuiteDocumentReader;

/**
 * Legacy-class representing the ZUGFeRD document reader for incoming documents
 *
 * @category InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @see      https://github.com/horstoeko/invoicesuite
 */
class ZugferdDocumentReader
{
    /**
     * Internal document reader
     *
     * @var InvoiceSuiteDocumentReader
     */
    protected InvoiceSuiteDocumentReader $documentReader;

    /**
     * Constructor (hidden)
     *
     * @param  InvoiceSuiteDocumentReader $documentReader
     * @return void
     */
    final protected function __construct(
        InvoiceSuiteDocumentReader $documentReader
    ) {
        $this->documentReader = $documentReader;
    }

    /**
     * Guess the profile type of a xml file.
     *
     * @param  string $xmlFilename
     * @return static
     */
    public static function readAndGuessFromFile(string $xmlFilename): static
    {
        return new static(InvoiceSuiteDocumentReader::createFromFile($xmlFilename));
    }

    /**
     * Guess the profile type of the readden xml document.
     *
     * @param  string $xmlContent
     * @return static
     */
    public static function readAndGuessFromContent(string $xmlContent): static
    {
        return new static(InvoiceSuiteDocumentReader::createFromContent($xmlContent));
    }

    /**
     * Read general information about the document.
     *
     * @param  null|string   $documentNo               __BT-1, From MINIMUM__ The document no issued by the seller
     * @param  null|string   $documentTypeCode         __BT-3, From MINIMUM__ The type of the document, See \horstoeko\codelists\ZugferdInvoiceType for details
     * @param  null|DateTime $documentDate             __BT-2, From MINIMUM__ Date of invoice. The date when the document was issued by the seller
     * @param  null|string   $invoiceCurrency          __BT-5, From MINIMUM__ Code for the invoice currency
     * @param  null|string   $taxCurrency              __BT-6, From BASIC WL__ Code for the currency of the VAT entry
     * @param  null|string   $documentName             __BT-X-2, From EXTENDED__ Document Type. The documenttype (free text)
     * @param  null|string   $documentLanguage         __BT-X-4, From EXTENDED__ Language indicator. The language code in which the document was written
     * @param  null|DateTime $effectiveSpecifiedPeriod __BT-X-6-000, From EXTENDED__ The contractual due date of the invoice
     * @return static
     *
     * @param-out DateTime|null $effectiveSpecifiedPeriod
     * @phpstan-param-out DateTime|null $effectiveSpecifiedPeriod
     */
    public function getDocumentInformation(
        ?string &$documentNo,
        ?string &$documentTypeCode,
        ?DateTime &$documentDate,
        ?string &$invoiceCurrency,
        ?string &$taxCurrency,
        ?string &$documentName,
        ?string &$documentLanguage,
        ?DateTime &$effectiveSpecifiedPeriod
    ): static {
        $this->documentReader->getDocumentNo($documentNo);
        $this->documentReader->getDocumentType($documentTypeCode);
        $this->documentReader->getDocumentDate($documentDate);
        $this->documentReader->getDocumentCurrency($invoiceCurrency);
        $this->documentReader->getDocumentTaxCurrency($taxCurrency);
        $this->documentReader->getDocumentDescription($documentName);
        $this->documentReader->getDocumentLanguage($documentLanguage);
        $this->documentReader->getDocumentCompleteDate($effectiveSpecifiedPeriod);

        return $this;
    }

    /**
     * Read general payment information.
     *
     * @param  null|string $creditorReferenceID __BT-90, From BASIC WL__ Identifier of the creditor
     * @param  null|string $paymentReference    __BT-83, From BASIC WL__ Intended use for payment
     * @return static
     */
    public function getDocumentGeneralPaymentInformation(
        ?string &$creditorReferenceID,
        ?string &$paymentReference
    ): static {
        $this->documentReader->getDocumentPaymentCreditorReferenceID($creditorReferenceID);
        $this->documentReader->getDocumentPaymentReference($paymentReference);

        return $this;
    }

    /**
     * Get the identifier assigned by the buyer and used for internal routing.
     *
     * @param  null|string $buyerReference __BT-10, From MINIMUM__ An identifier assigned by the buyer and used for internal routing
     * @return static
     */
    public function getDocumentBuyerReference(
        ?string &$buyerReference
    ): static {
        $this->documentReader->getDocumentBuyerReference($buyerReference);

        return $this;
    }

    /**
     * Get the routing-id (needed for German XRechnung).
     *
     * This is an alias-method for getDocumentBuyerReference.
     *
     * @param  string $routingId __BT-10, From MINIMUM__ An identifier assigned by the buyer and used for internal routing
     * @return static
     */
    public function getDocumentRoutingId(
        string $routingId
    ): static {
        return $this->getDocumentBuyerReference($routingId);
    }

    /**
     * Get the copy-identifier.
     *
     * @param  null|bool $copyIndicator __BT-X-3-00, BT-X-3, From EXTENDED__ Returns true if this document is a copy from the original document
     * @return static
     */
    public function getIsDocumentCopy(
        ?bool &$copyIndicator
    ): static {
        $this->documentReader->getDocumentIsCopy($copyIndicator);

        return $this;
    }

    /**
     * Get the test-docukent-identifier.
     *
     * @param  null|bool $testDocumentIndicator Returns true if this document is only for test purposes
     * @return static
     */
    public function getIsTestDocument(
        ?bool &$testDocumentIndicator
    ): static {
        $this->documentReader->getDocumentIsTest($testDocumentIndicator);

        return $this;
    }

    /**
     * Retrieve document notes.
     *
     * @param  null|array<int, array{contentcode: string, subjectcode: string, content: string}> $notes __BT-22, From BASIC WL__, __BT-X-5, From EXTENDED__, __BT-21, From BASIC WL__ Returns an array with all document notes. Each array element contains an assiociative array containing the following keys: _contentcode_, _subjectcode_ and _content_
     * @return static
     */
    public function getDocumentNotes(
        ?array &$notes
    ): static {
        $notes = [];

        if ($this->documentReader->firstDocumentNote()) {
            do {
                $this->documentReader->getDocumentNote($newContent, $newContentCode, $newSubjectCode);
                $notes[] = ['contentcode' => $newContentCode, 'subjectcode' => $newSubjectCode, 'content' => $newContent];
            } while ($this->documentReader->nextDocumentNote());
        }

        return $this;
    }

    /**
     * Get detailed information about the seller (=service provider).
     *
     * @param  null|string            $name        __BT-27, From MINIMUM__ The full formal name under which the seller is registered in the National Register of Legal Entities, Taxable Person or otherwise acting as person(s)
     * @param  null|array<int,string> $id          __BT-29, From BASIC WL__ An array of identifiers of the seller. In many systems, seller identification is key information. Multiple seller IDs can be assigned or specified. They can be differentiated by using different identification schemes. If no scheme is given, it should be known to the buyer and seller, e.g. a previously exchanged, buyer-assigned identifier of the seller
     * @param  null|string            $description __BT-33, From EN 16931__ Further legal information that is relevant for the seller
     * @return static
     */
    public function getDocumentSeller(
        ?string &$name,
        ?array &$id,
        ?string &$description
    ): static {
        $id = [];
        $description = '';

        $this->documentReader->getDocumentSellerName($name);

        if ($this->documentReader->firstDocumentSellerId()) {
            do {
                $this->documentReader->getDocumentSellerId($newId);
                $id[] = $newId;
            } while ($this->documentReader->nextDocumentSellerId());
        }

        return $this;
    }

    /**
     * Get global identifiers of the seller.
     *
     * @param  null|array<string,string> $globalID __BT-29/BT-29-0/BT-29-1, From BASIC WL__ Array of the sellers global ids indexed by the identification scheme
     * @return static
     */
    public function getDocumentSellerGlobalId(
        ?array &$globalID
    ): static {
        $globalID = [];

        if ($this->documentReader->firstDocumentSellerGlobalId()) {
            do {
                $this->documentReader->getDocumentSellerGlobalId($newGlobalId, $newGlobalIdType);
                $globalID[$newGlobalIdType] = $newGlobalId;
            } while ($this->documentReader->nextDocumentSellerGlobalId());
        }

        return $this;
    }

    /**
     * Get detailed information on the seller's tax information.
     *
     * @param  null|array<string,string> $taxReg _BT-31/32, From MINIMUM/EN 16931__ Array of tax numbers indexed by the schemeid (VA, FC, etc.)
     * @return static
     */
    public function getDocumentSellerTaxRegistration(
        ?array &$taxReg
    ): static {
        $taxReg = [];

        if ($this->documentReader->firstDocumentSellerTaxRegistration()) {
            do {
                $this->documentReader->getDocumentSellerTaxRegistration($newTaxRegistrationType, $newTaxRegistrationId);
                $taxReg[$newTaxRegistrationType] = $newTaxRegistrationId;
            } while ($this->documentReader->nextDocumentSellerTaxRegistration());
        }

        return $this;
    }

    /**
     * Get the address of seller trade party.
     *
     * @param  null|string            $lineOne     __BT-35, From BASIC WL__ The main line in the sellers address. This is usually the street name and house number or the post office box
     * @param  null|string            $lineTwo     __BT-36, From BASIC WL__ Line 2 of the seller's address. This is an additional address line in an address that can be used to provide additional details in addition to the main line used to provide additional details in addition to the main line
     * @param  null|string            $lineThree   __BT-162, From BASIC WL__ Line 3 of the seller's address. This is an additional address line in an address that can be used to provide additional details in addition to the main line
     * @param  null|string            $postCode    __BT-38, From BASIC WL__ Identifier for a group of properties, such as a zip code
     * @param  null|string            $city        __BT-37, From BASIC WL__ Usual name of the city or municipality in which the seller's address is located
     * @param  null|string            $country     __BT-40, From MINIMUM__ Code used to identify the country. If no tax agent is specified, this is the country in which the sales tax is due. The lists of approved countries are maintained by the EN ISO 3166-1 Maintenance Agency “Codes for the representation of names of countries and their subdivisions”
     * @param  null|array<int,string> $subDivision __BT-39, From BASIC WL__ The sellers state
     * @return static
     *
     * @phpstan-param-out string $lineOne
     * @phpstan-param-out string $lineTwo
     * @phpstan-param-out string $lineThree
     * @phpstan-param-out string $postCode
     * @phpstan-param-out string $city
     * @phpstan-param-out string $country
     * @phpstan-param-out array<int,string> $subDivision
     */
    public function getDocumentSellerAddress(
        ?string &$lineOne,
        ?string &$lineTwo,
        ?string &$lineThree,
        ?string &$postCode,
        ?string &$city,
        ?string &$country,
        ?array &$subDivision
    ): static {
        $lineOne = '';
        $lineTwo = '';
        $lineThree = '';
        $postCode = '';
        $city = '';
        $country = '';
        $subDivision = [];

        if ($this->documentReader->firstDocumentSellerTaxRegistration()) {
            $this->documentReader->getDocumentSellerAddress(
                $lineOne,
                $lineTwo,
                $lineThree,
                $postCode,
                $city,
                $country,
                $newSubDivision
            );
            $subDivision[] = $newSubDivision;
        }

        return $this;
    }

    /**
     * Get the legal organisation of seller trade party.
     *
     * @param  null|string           $legalOrgId   __BT-30, From MINIMUM__ An identifier issued by an official registrar that identifies the seller as a legal entity or legal person. If no identification scheme ($legalorgtype) is provided, it should be known to the buyer and seller
     * @param  null|string           $legalOrgType __BT-30-1, From MINIMUM__ The identifier for the identification scheme of the legal registration of the seller. If the identification scheme is used, it must be selected from ISO/IEC 6523 list
     * @param  null|string           $legalOrgName __BT-28, From BASIC WL__ A name by which the seller is known, if different from the seller's name (also known as the company name). Note: This may be used if different from the seller's name.
     * @return ZugferdDocumentReader
     */
    public function getDocumentSellerLegalOrganisation(
        ?string &$legalOrgId,
        ?string &$legalOrgType,
        ?string &$legalOrgName
    ): self {
        $legalOrgId = '';
        $legalOrgType = '';
        $legalOrgName = '';

        if ($this->documentReader->firstDocumentSellerLegalOrganisation()) {
            $this->documentReader->getDocumentSellerLegalOrganisation(
                $legalOrgType,
                $legalOrgId,
                $legalOrgName
            );
        }

        return $this;
    }
}
