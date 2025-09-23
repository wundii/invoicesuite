<?php

/**
 * This file is a part of horstoeko/invoicesuite.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\pdf;

use InvalidArgumentException;
use JMS\Serializer\Exception\RuntimeException;
use horstoeko\invoicesuite\InvoiceSuiteDocumentBuilder;
use horstoeko\invoicesuite\utils\InvoiceSuiteStringUtils;
use horstoeko\invoicesuite\concerns\HandlesFormatProviders;
use horstoeko\invoicesuite\concerns\HandlesCurrentFormatProvider;
use horstoeko\invoicesuite\exceptions\InvoiceSuiteFileNotFoundException;
use horstoeko\invoicesuite\exceptions\InvoiceSuiteFileNotReadableException;
use horstoeko\invoicesuite\exceptions\InvoiceSuiteFormatProviderNotFoundException;

class InvoiceSuitePdfDocumentBuilder
{
    use HandlesCurrentFormatProvider;
    use HandlesFormatProviders;

    /**
     * Internal buffer for PDF data
     *
     * @var string
     */
    protected string $currentPdfContent = "";

    /**
     * Internal buffer for XML data
     *
     * @var string
     */
    protected string $currentXmlContent = "";

    /**
     * Internal PDF helper instance
     *
     * @var InvoiceSuitePdfWriter
     */
    protected InvoiceSuitePdfWriter $pdfWriter;

    /**
     * Additional creator tool (e.g. the ERP software that called the PHP library)
     *
     * @var string
     */
    private $additionalCreatorTool = "";

    /**
     * The relationship type to use for the XML attachment. Detault is Data
     *
     * @var string
     */

    private $attachmentRelationshipType = 'Data';

    /**
     * List of files which should be additionally attached to PDF
     *
     * @var array
     */
    private $additionalFilesToAttach = [];

    /**
     * User-defined template for the author-metainformation
     *
     * @var string
     */
    private $authorTemplate = "";

    /**
     * User-defined template for the keyword-metainformation
     *
     * @var string
     */
    private $keywordTemplate = "";

    /**
     * User-defined template for the title-metainformation
     *
     * @var string
     */
    private $titleTemplate = "";

    /**
     * User-defined template for the subject-metainformation
     *
     * @var string
     */
    private $subjectTemplate = "";

    /**
     * User-defined callback function for all metainformation
     *
     * @var callable|null
     */
    private $metaInformationCallback;

    /**
     * Internal flag which indicate, that attachment pane should be opened
     *
     * @var boolean
     */
    private $attachmentPaneVisibility = true;

    /**
     * Constants for Relationship types
     * 'Data', 'Alternative', 'Source', 'Supplement', 'Unspecified'
     */
    public const AF_RELATIONSHIP_DATA = "Data";

    public const AF_RELATIONSHIP_ALTERNATIVE = "Alternative";

    public const AF_RELATIONSHIP_SOURCE = "Source";

    public const AF_RELATIONSHIP_SUPPLEMENT = "Supplement";

    public const AF_RELATIONSHIP_UNSPECIFIED = "Unspecified";

    /**
     * Create a new instance of InvoiceSuitePdfDocumentBuilder by given PDF content and XML content
     *
     * @param string $newPdfContent
     * @param string $newXmlContent
     * @return InvoiceSuitePdfDocumentBuilder
     * @throws InvalidArgumentException
     * @throws InvoiceSuiteFormatProviderNotFoundException
     */
    public static function createFromPdfContentAndXmlContent(string $newPdfContent, string $newXmlContent): self
    {
        return (new static())->setCurrentPdfContent($newPdfContent)->setCurrentXmlContent($newXmlContent);
    }

    /**
     * Create a new instance of InvoiceSuitePdfDocumentBuilder by given PDF filename and XML content
     *
     * @param string $newPdfFile
     * @param string $newXmlContent
     * @return InvoiceSuitePdfDocumentBuilder
     * @throws InvoiceSuiteFileNotFoundException
     * @throws InvoiceSuiteFileNotReadableException
     * @throws InvalidArgumentException
     * @throws InvoiceSuiteFormatProviderNotFoundException
     */
    public static function createFromPdfFileAndXmlContent(string $newPdfFile, string $newXmlContent): self
    {
        if (!file_exists($newPdfFile)) {
            throw new InvoiceSuiteFileNotFoundException($newPdfFile);
        }

        $newPdfContent = file_get_contents($newPdfFile);

        if ($newPdfContent === false) {
            throw new InvoiceSuiteFileNotReadableException($newPdfFile);
        }

        return static::createFromPdfContentAndXmlContent($newPdfContent, $newXmlContent);
    }

    /**
     * Create a new instance of InvoiceSuitePdfDocumentBuilder by given PDF content and XML filename
     *
     * @param string $newPdfContent
     * @param string $newXmlFile
     * @return InvoiceSuitePdfDocumentBuilder
     * @throws InvoiceSuiteFileNotFoundException
     * @throws InvoiceSuiteFileNotReadableException
     * @throws InvalidArgumentException
     * @throws InvoiceSuiteFormatProviderNotFoundException
     */
    public static function createFromPdfContentAndXmlFile(string $newPdfContent, string $newXmlFile): self
    {
        if (!file_exists($newXmlFile)) {
            throw new InvoiceSuiteFileNotFoundException($newXmlFile);
        }

        $newXmlContent = file_get_contents($newXmlFile);

        if ($newXmlContent === false) {
            throw new InvoiceSuiteFileNotReadableException($newXmlFile);
        }

        return static::createFromPdfContentAndXmlContent($newPdfContent, $newXmlContent);
    }

    /**
     * Create a new instance of InvoiceSuitePdfDocumentBuilder by given PDF filename and XML filename
     *
     * @param string $newPdfFile
     * @param string $newXmlFile
     * @return InvoiceSuitePdfDocumentBuilder
     * @throws InvoiceSuiteFileNotFoundException
     * @throws InvoiceSuiteFileNotReadableException
     * @throws InvalidArgumentException
     * @throws InvoiceSuiteFormatProviderNotFoundException
     */
    public static function createFromPdfFileAndXmlFile(string $newPdfFile, string $newXmlFile): self
    {
        if (!file_exists($newPdfFile)) {
            throw new InvoiceSuiteFileNotFoundException($newPdfFile);
        }

        $newPdfContent = file_get_contents($newPdfFile);

        if ($newPdfContent === false) {
            throw new InvoiceSuiteFileNotReadableException($newPdfFile);
        }

        if (!file_exists($newXmlFile)) {
            throw new InvoiceSuiteFileNotFoundException($newXmlFile);
        }

        $newXmlContent = file_get_contents($newXmlFile);

        if ($newXmlContent === false) {
            throw new InvoiceSuiteFileNotReadableException($newXmlFile);
        }

        return static::createFromPdfContentAndXmlContent($newPdfContent, $newXmlContent);
    }

    /**
     * Create a new instance of InvoiceSuitePdfDocumentBuilder by given PDF content and an InvoiceSuiteDocumentBuilder
     *
     * @param string $newPdfContent
     * @param InvoiceSuiteDocumentBuilder $newDocumentBuilder
     * @return InvoiceSuitePdfDocumentBuilder
     * @throws InvalidArgumentException
     * @throws RuntimeException
     */
    public static function createFromPdfContentAndDocumentBuilder(string $newPdfContent, InvoiceSuiteDocumentBuilder $newDocumentBuilder): self
    {
        return (new static())->setCurrentPdfContent($newPdfContent)->setCurrentDocumentBuilder($newDocumentBuilder);
    }

    /**
     * Create a new instance of InvoiceSuitePdfDocumentBuilder by given PDF filename and an InvoiceSuiteDocumentBuilder
     *
     * @param string $newPdfFile
     * @param InvoiceSuiteDocumentBuilder $newDocumentBuilder
     * @return InvoiceSuitePdfDocumentBuilder
     * @throws InvoiceSuiteFileNotFoundException
     * @throws InvoiceSuiteFileNotReadableException
     * @throws InvalidArgumentException
     * @throws RuntimeException
     */
    public static function createFromPdfFileAndDocumentBuilder(string $newPdfFile, InvoiceSuiteDocumentBuilder $newDocumentBuilder): self
    {
        if (!file_exists($newPdfFile)) {
            throw new InvoiceSuiteFileNotFoundException($newPdfFile);
        }

        $newPdfContent = file_get_contents($newPdfFile);

        if ($newPdfContent === false) {
            throw new InvoiceSuiteFileNotReadableException($newPdfFile);
        }

        return static::createFromPdfContentAndDocumentBuilder($newPdfContent, $newDocumentBuilder);
    }

    /**
     * Constructor (hidden)
     *
     * @param string $pdfContent
     * @param string $xmlContent
     */
    final protected function __construct()
    {
        $this->pdfWriter = new InvoiceSuitePdfWriter();
    }

    /**
     * Returns the currently given PDF content
     *
     * @return string
     */
    public function getCurrentPdfContent(): string
    {
        return $this->currentPdfContent;
    }

    /**
     * Internal method for setting up the PDF content to use
     *
     * @param string $newPdfContent
     * @return InvoiceSuitePdfDocumentBuilder
     * @throws InvalidArgumentException
     */
    protected function setCurrentPdfContent(string $newPdfContent): self
    {
        if (InvoiceSuiteStringUtils::stringIsNullOrEmpty($newPdfContent)) {
            throw new InvalidArgumentException('Invalid PDF content given');
        }

        $this->currentPdfContent = $newPdfContent;

        return $this;
    }

    /**
     * Returns the currently given XML content
     *
     * @return string
     */
    public function getCurrentXmlContent(): string
    {
        return $this->currentXmlContent;
    }

    /**
     * Internal method for setting up the XML content to use
     *
     * @param string $newXmlContent
     * @return InvoiceSuitePdfDocumentBuilder
     * @throws InvalidArgumentException
     * @throws InvoiceSuiteFormatProviderNotFoundException
     */
    protected function setCurrentXmlContent(string $newXmlContent): self
    {
        if (InvoiceSuiteStringUtils::stringIsNullOrEmpty($newXmlContent)) {
            throw new InvalidArgumentException('Invalid XML content given');
        }

        $this->resolveAvailableFormatProviders();

        $formatProviders = array_filter(
            $this->getRegisteredFormatProviders(),
            fn ($formatProvider) =>
                ($formatProvider->isSatisfiableBy($newXmlContent)) &&
                ($formatProvider->getFormatProviderParameterValue('PDFEmbeddable', false) === true)
        );

        if ($formatProviders === []) {
            throw new InvoiceSuiteFormatProviderNotFoundException("unknown");
        }

        $formatProvider = reset($formatProviders);

        $this->setCurrentFormatProvider($formatProvider);
        $this->currentXmlContent = $newXmlContent;

        return $this;
    }

    /**
     * Internal method for setting up the InvoiceSuiteDocumentBuilder to use
     * This will setup the currrent format provider and the XML content to use
     *
     * @param InvoiceSuiteDocumentBuilder $newDocumentBuilder
     * @return self
     */
    protected function setCurrentDocumentBuilder(InvoiceSuiteDocumentBuilder $newDocumentBuilder): self
    {
        $this->setCurrentFormatProvider($newDocumentBuilder->getCurrentFormatProvider());
        $this->currentXmlContent = $newDocumentBuilder->getContentAsXml();

        return $this;
    }

    /**
     * Gets an additional creator tool (e.g. the ERP software that called the PHP library)
     *
     * @return string
     */
    public function getAdditionalCreatorTool(): string
    {
        return $this->additionalCreatorTool;
    }

    /**
     * Sets an additional creator tool (e.g. the ERP software that called the PHP library)
     *
     * @param  string $additionalCreatorTool The name of the creator
     * @return static
     */
    public function setAdditionalCreatorTool(string $additionalCreatorTool)
    {
        $this->additionalCreatorTool = $additionalCreatorTool;

        return $this;
    }

    /**
     * Returns the creator tool name (the PHP library, and if given also the additional creator tool)
     *
     * @return string
     */
    private function getCreatorToolName(): string
    {
        $toolName = sprintf('Factur-X PHP library v%s by HorstOeko', '1.0');

        if (!InvoiceSuiteStringUtils::stringIsNullOrEmpty($this->getAdditionalCreatorTool())) {
            return $this->getAdditionalCreatorTool() . ' / ' . $toolName;
        }

        return $toolName;
    }

    /**
     * Returns the relationship type for the XML attachment. This
     * can return 'Data', 'Alternative'
     *
     * @return string
     */
    public function getAttachmentRelationshipType(): string
    {
        return $this->attachmentRelationshipType;
    }

    /**
     * Set the type of relationship for the XML attachment. Allowed
     * types are 'Data', 'Alternative' and 'Source'
     *
     * @param  string $relationshipType Type of relationship
     * @return static
     */
    public function setAttachmentRelationshipType(string $relationshipType)
    {
        if (!in_array($relationshipType, [static::AF_RELATIONSHIP_DATA, static::AF_RELATIONSHIP_ALTERNATIVE, static::AF_RELATIONSHIP_SOURCE])) {
            $relationshipType = static::AF_RELATIONSHIP_DATA;
        }

        $this->attachmentRelationshipType = $relationshipType;

        return $this;
    }

    /**
     * Set the type of relationship for the XML attachment to "Alternative"
     *
     * @return static
     */
    public function setAttachmentRelationshipTypeToAlternative()
    {
        return $this->setAttachmentRelationshipType(static::AF_RELATIONSHIP_ALTERNATIVE);
    }

    /**
     * Set the type of relationship for the XML attachment to "Source"
     *
     * @return static
     */
    public function setAttachmentRelationshipTypeToSource()
    {
        return $this->setAttachmentRelationshipType(static::AF_RELATIONSHIP_SOURCE);
    }
}
