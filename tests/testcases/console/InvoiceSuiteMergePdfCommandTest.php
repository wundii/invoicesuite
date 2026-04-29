<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\console;

use horstoeko\invoicesuite\exceptions\InvoiceSuiteFileNotReadableException;
use RuntimeException;
use Symfony\Component\Console\Command\Command;

class InvoiceSuiteMergePdfCommandTest extends InvoiceSuiteConsoleCommandTestCase
{
    /**
     * Test that the command lists available providers and returns the providers metadata as JSON.
     *
     * @return void
     */
    public function testCommandMergeAndOutputsJson(): void
    {
        $commandTester = $this->createCommandTester('invoicesuite:merge');

        $exitCode = $commandTester->execute([
            'document-file' => $this->getTestAssetFilePath('00_case_comfort_simple.xml'),
            'pdf-file' => $this->getTestAssetFilePath('pdf_plain.pdf'),
            'output-file' => $this->getTempFilePath('output.pdf'),
        ]);

        self::assertSame(Command::SUCCESS, $exitCode);

        $commandOutput = $commandTester->getDisplay();

        $this->assertFileExists($this->getTempFilePath('output.pdf'));
        $this->assertFileIsReadable($this->getTempFilePath('output.pdf'));
        $this->assertStringContainsString($this->getTempFilePath('output.pdf'), $commandOutput);

        $commandTester = $this->createCommandTester('invoicesuite:detect');

        $exitCode = $commandTester->execute([
            'input-file' => $this->getTempFilePath('output.pdf'),
            '--output-json' => true,
        ]);

        self::assertSame(Command::SUCCESS, $exitCode);

        $decodedOutput = $this->decodeJsonOutput($commandTester->getDisplay());

        self::assertArrayHasKey('id', $decodedOutput);
        self::assertIsString($decodedOutput['id']);
        self::assertSame('zffxcomfort', $decodedOutput['id']);

        self::assertArrayHasKey('description', $decodedOutput);
        self::assertIsString($decodedOutput['description']);
        self::assertStringContainsString('EN 16931', $decodedOutput['description']);

        self::assertArrayHasKey('error', $decodedOutput);
        self::assertIsBool($decodedOutput['error']);
        self::assertFalse($decodedOutput['error']);
    }

    /**
     * Test that an exception is raised if input document file does not exist
     *
     * @return void
     */
    public function testCommandMergeWithUnknownDocumentFile(): void
    {
        $this->expectException(InvoiceSuiteFileNotReadableException::class);
        $this->expectExceptionMessageMatches('/.*unknown\.xml is not readable.*/');

        $commandTester = $this->createCommandTester('invoicesuite:merge');

        $commandTester->execute([
            'document-file' => $this->getTestAssetFilePath('unknown.xml'),
            'pdf-file' => $this->getTestAssetFilePath('pdf_plain.pdf'),
            'output-file' => $this->getTempFilePath('output.pdf'),
        ]);
    }

    /**
     * Test that an exception is raised if input PDF file does not exist
     *
     * @return void
     */
    public function testCommandMergeWithUnknownPdfFile(): void
    {
        $this->expectException(InvoiceSuiteFileNotReadableException::class);
        $this->expectExceptionMessageMatches('/.*unknown\.pdf is not readable.*/');

        $commandTester = $this->createCommandTester('invoicesuite:merge');

        $commandTester->execute([
            'document-file' => $this->getTestAssetFilePath('00_case_comfort_simple.xml'),
            'pdf-file' => $this->getTestAssetFilePath('unknown.pdf'),
            'output-file' => $this->getTempFilePath('output.pdf'),
        ]);
    }

    /**
     * Test that an exception is raised if input document file has invalid mime type
     *
     * @return void
     */
    public function testCommandMergeWithInvalidDocuemntFileMimeType(): void
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessageMatches('/.*is not a XML or JSON file.*/');

        $commandTester = $this->createCommandTester('invoicesuite:merge');

        $commandTester->execute([
            'document-file' => $this->getTestAssetFilePath('99_dummy_attachment_1.dummy'),
            'pdf-file' => $this->getTestAssetFilePath('pdf_plain.pdf'),
            'output-file' => $this->getTempFilePath('output.pdf'),
        ]);
    }

    /**
     * Test that an exception is raised if input PDF file has invalid mime type
     *
     * @return void
     */
    public function testCommandMergeWithInvalidPdfFileMimeType(): void
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessageMatches('/.*is not a PDF file.*/');

        $commandTester = $this->createCommandTester('invoicesuite:merge');

        $commandTester->execute([
            'document-file' => $this->getTestAssetFilePath('00_case_comfort_simple.xml'),
            'pdf-file' => $this->getTestAssetFilePath('99_dummy_attachment_1.dummy'),
            'output-file' => $this->getTempFilePath('output.pdf'),
        ]);
    }
}
