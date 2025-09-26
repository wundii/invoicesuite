<?php

/**
 * This file is a part of horstoeko/invoicesuite
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\pdfutils;

use Exception;
use horstoeko\invoicesuite\exceptions\InvoiceSuiteFileNotFoundException;
use horstoeko\invoicesuite\exceptions\InvoiceSuiteFileNotReadableException;
use horstoeko\invoicesuite\exceptions\InvoiceSuiteInvalidArgumentException;
use Smalot\PdfParser\Parser as PdfParser;

/**
 * Class representing an extractor for PDF attachments
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
class InvoiceSuitePdfExtractor
{
    /**
     * Array containing all the attached files found in PDF
     *
     * @var array<int, array{type: int, content: string, filename: string, mimetype: string}>
     */
    private $attachmentContentList = [];

    /**
     * Key of the type element in the internal attachment list
     */
    public const ATTACHMENT_KEY_TYPE = 'type';

    /**
     * Key of the content element in the internal attachment list
     */
    public const ATTACHMENT_KEY_CONTENT = 'content';

    /**
     * Key of the filename element in the internal attachment list
     */
    public const ATTACHMENT_KEY_FILENAME = 'filename';

    /**
     * Key of the filename element in the internal attachment list
     */
    public const ATTACHMENT_KEY_MIMETYPE = 'mimetype';

    /**
     * (Hidden) Constructor
     */
    final protected function __construct() {}

    /**
     * Start getting attached files from a PDF file
     *
     * @param string $pdfFilename
     * @return InvoiceSuitePdfExtractor
     * @throws InvoiceSuiteFileNotFoundException
     * @throws InvoiceSuiteFileNotReadableException
     * @throws Exception
     */
    public static function fromFile(string $pdfFilename): self
    {
        if (!file_exists($pdfFilename)) {
            throw new InvoiceSuiteFileNotFoundException($pdfFilename);
        }

        $pdfContent = file_get_contents($pdfFilename);

        if ($pdfContent === false) {
            throw new InvoiceSuiteFileNotReadableException($pdfFilename);
        }

        return static::fromContent($pdfContent);
    }

    /**
     * Start getting attached files from a PDF content
     *
     * @param string $pdfContent
     * @return InvoiceSuitePdfExtractor
     * @throws Exception
     */
    public static function fromContent(string $pdfContent): self
    {
        return (new InvoiceSuitePdfExtractor())->collectAttachmentsFromPdfContent($pdfContent);
    }

    /**
     * Get the number of attachments
     *
     * @return integer
     */
    public function getNoOfAttachments(): int
    {
        return count($this->attachmentContentList);
    }

    /**
     * Get an attachment by it's index. Use the getNoOfAttachments to see how much attachments are available. $index is zero-based. If index is not available null is returned
     *
     * @param int $index Zero-based index
     * @return null|string
     * @throws InvoiceSuiteInvalidArgumentException
     */
    public function getAttachmentByIndex(int $index): ?string
    {
        if (!array_key_exists($index, $this->attachmentContentList)) {
            return null;
        }

        return $this->attachmentContentList[$index][static::ATTACHMENT_KEY_CONTENT];
    }

    /**
     * Get an attachment by it's filename. If no matching attachment is not available null is returned
     *
     * @param string $filename
     * @return null|string
     */
    public function getAttachmentByFilename(string $filename): ?string
    {
        $filteredAttachments = array_filter(
            $this->attachmentContentList,
            fn($attachment) => strcasecmp($attachment[static::ATTACHMENT_KEY_FILENAME], $filename) === 0
        );

        if ($filteredAttachments === []) {
            return null;
        }

        $firstAttachment = reset($filteredAttachments);

        return $firstAttachment[static::ATTACHMENT_KEY_CONTENT];
    }

    /**
     * Iterate over available attachments
     *
     * @param callable $callback Callback called when attachment is available. The callback gets the current attachment and it's internal undex
     * @param null|callable $callbackElse Callback called when no attachment is available
     * @param null|int $limit Maximum iterations. When null through all attachments is iterated
     * @return InvoiceSuitePdfExtractor
     */
    public function foreachAttachment(callable $callback, ?callable $callbackElse = null, ?int $limit = null): self
    {
        $attachmentIndex = 0;

        foreach ($this->attachmentContentList as $attachment) {
            if ($limit !== null && $attachmentIndex >= $limit) {
                break;
            }

            $attachmentIndex++;

            $callback($attachment, $attachmentIndex);
        }

        if ($attachmentIndex === 0 && !is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get a list of all the attachments.
     *
     * @param string $pdfContent
     * @return InvoiceSuitePdfExtractor
     * @throws Exception
     */
    protected function collectAttachmentsFromPdfContent(string $pdfContent): self
    {
        $this->attachmentContentList = [];

        $pdfParser = new PdfParser();
        $pdfParsed = $pdfParser->parseContent($pdfContent);
        $fileSpecs = $pdfParsed->getObjectsByType('Filespec');

        $fileSpecs = array_filter(
            $fileSpecs,
            function ($fileSpec) {
                return $fileSpec->has('F') && $fileSpec->has('EF');
            }
        );

        $fileSpecs = array_filter(
            $fileSpecs,
            function ($fileSpec) {
                return $fileSpec->get('EF')->has('F');
            }
        );

        foreach ($fileSpecs as $fileSpec) {
            $this->attachmentContentList[] = [
                static::ATTACHMENT_KEY_CONTENT => $fileSpec->get('EF')->get('F')->getContent(),
                static::ATTACHMENT_KEY_FILENAME => $fileSpec->get('F')->getContent(),
                static::ATTACHMENT_KEY_MIMETYPE => $fileSpec->get('EF')->get('F')->has('Subtype') ? (string)($fileSpec->get('EF')->get('F')->get('Subtype')->getContent()) : "",
            ];
        }

        return $this;
    }
}
