<?php

declare(strict_types=1);

/**
 * This file is a part of horstoeko/invoicesuite.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\console\commands;

use horstoeko\invoicesuite\exceptions\InvoiceSuiteFileNotFoundException;
use horstoeko\invoicesuite\exceptions\InvoiceSuiteFileNotReadableException;
use horstoeko\invoicesuite\exceptions\InvoiceSuiteFormatProviderNotFoundException;
use horstoeko\invoicesuite\exceptions\InvoiceSuiteInvalidArgumentException;
use horstoeko\invoicesuite\exceptions\InvoiceSuiteUnknownContentException;
use horstoeko\invoicesuite\InvoiceSuiteDocumentReader;
use horstoeko\invoicesuite\InvoiceSuitePdfDocumentReader;
use horstoeko\invoicesuite\utils\InvoiceSuiteArrayUtils;
use PrinsFrank\PdfParser\Exception\PdfParserException;
use RuntimeException;
use Symfony\Component\Console\Exception\InvalidArgumentException as ConsoleInvalidArgumentException;
use Symfony\Component\Console\Helper\TableSeparator;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

/**
 * Class representing a console command that detects the format of a given file
 *
 * @category InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @see      https://github.com/horstoeko/invoicesuite
 */
class InvoiceSuiteDetectCommand extends InvoiceSuiteAbstractCommand
{
    /**
     * Configure command.
     *
     * @return void
     *
     * @throws ConsoleInvalidArgumentException
     */
    protected function configure(): void
    {
        $this->setName('invoicesuite:detect');
        $this->setDescription('Detect the format of the given file');
        $this->addArgument('input-file', InputArgument::REQUIRED, 'The file to detect the format of');
        $this->addOption('outputtype', 'ot', InputOption::VALUE_REQUIRED, 'Output format (screen, json)');
    }

    /**
     * Execute command.
     *
     * @return int
     *
     * @throws ConsoleInvalidArgumentException
     * @throws InvoiceSuiteFileNotFoundException
     * @throws InvoiceSuiteFileNotReadableException
     * @throws InvoiceSuiteFormatProviderNotFoundException
     * @throws InvoiceSuiteInvalidArgumentException
     * @throws InvoiceSuiteUnknownContentException
     * @throws PdfParserException
     * @throws RuntimeException
     */
    protected function handle(): int
    {
        $inpArgFilename = $this->getFileArgument('input-file');
        $inpOptionFormat = $this->getStringOption('outputtype', 'screen');

        if (!InvoiceSuiteArrayUtils::inArrayNoCase(['screen', 'json'], $inpOptionFormat)) {
            throw new InvoiceSuiteInvalidArgumentException(sprintf('Invalid option value for output type "%s"', $inpOptionFormat));
        }

        if ($this->isPdfFilename($inpArgFilename)) {
            $pdfReader = InvoiceSuitePdfDocumentReader::createFromFile($inpArgFilename);

            return $this->handlePdf($pdfReader)->returnSuccess();
        }

        if ($this->isXmlFilename($inpArgFilename) || $this->isJsonFilename($inpArgFilename)) {
            $xmlOrJsonReader = InvoiceSuiteDocumentReader::createFromFile($inpArgFilename);

            return $this->handleXml($xmlOrJsonReader)->returnSuccess();
        }

        return self::SUCCESS;
    }

    /**
     * Handle output for PDF documents
     *
     * @param  InvoiceSuitePdfDocumentReader $pdfReader
     * @return static
     */
    protected function handlePdf(InvoiceSuitePdfDocumentReader $pdfReader): static
    {
        $tableRows[] = ['ID', $pdfReader->getCurrentDocumentFormatProvider()->getUniqueId()];
        $tableRows[] = ['Description', mb_strimwidth($pdfReader->getCurrentDocumentFormatProvider()->getDescription(), 0, 60, '...')];
        $tableRows[] = ['Attachment name', $pdfReader->getInvoiceDocumentAttachment()->getAttachmentFilename()];
        $tableRows[] = ['Attachment type', $pdfReader->getInvoiceDocumentAttachment()->getAttachmentMimeType()];
        $tableRows[] = ['Additional attachments', count($pdfReader->getAdditionalDocumentAttachments())];

        if (count($pdfReader->getAdditionalDocumentAttachments()) > 0) {
            foreach ($pdfReader->getAdditionalDocumentAttachments() as $attachment) {
                $tableRows[] = [new TableSeparator(), new TableSeparator()];
                $tableRows[] = ['Attachment name', $attachment->getAttachmentFilename()];
                $tableRows[] = ['Attachment type', $attachment->getAttachmentMimeType()];
            }
        }

        return $this->outputTable(['Info', 'Value'], $tableRows);
    }

    /**
     * Handle output for XML documents
     *
     * @param  InvoiceSuiteDocumentReader $xmlOrJsonReader
     * @return static
     *
     * @throws ConsoleInvalidArgumentException
     * @throws RuntimeException
     */
    protected function handleXml(InvoiceSuiteDocumentReader $xmlOrJsonReader): static
    {
        if (0 === strcasecmp($this->getStringOption('outputtype', 'screen'), 'json')) {
            $json['id'] = $xmlOrJsonReader->getCurrentDocumentFormatProvider()->getUniqueId();
            $json['description'] = $xmlOrJsonReader->getCurrentDocumentFormatProvider()->getDescription();

            return $this->outputLineLF(json_encode($json));
        }

        $tableRows[] = ['ID', $xmlOrJsonReader->getCurrentDocumentFormatProvider()->getUniqueId()];
        $tableRows[] = ['Description', mb_strimwidth($xmlOrJsonReader->getCurrentDocumentFormatProvider()->getDescription(), 0, 60, '...')];

        return $this->outputTable(['Info', 'Value'], $tableRows);
    }
}
