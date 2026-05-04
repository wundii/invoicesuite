<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\console;

use horstoeko\invoicesuite\utils\InvoiceSuitePathUtils;
use RuntimeException;
use Symfony\Component\Console\Command\Command;

final class InvoiceSuiteMakeProviderCommandTest extends InvoiceSuiteConsoleCommandTestCase
{
    /**
     * Test that the generator for a provider runs completelly
     *
     * @return void
     */
    public function testCommandMake(): void
    {
        $outputDirectory = InvoiceSuitePathUtils::combineAllPaths(sys_get_temp_dir(), 'EInvoice');
        $outputProviderClassFilename = InvoiceSuitePathUtils::combinePathWithFile($outputDirectory, 'MyTestProvider.php');
        $outputProviderReaderClassFilename = InvoiceSuitePathUtils::combinePathWithFile($outputDirectory, 'MyTestProviderReader.php');
        $outputProviderBuilderClassFilename = InvoiceSuitePathUtils::combinePathWithFile($outputDirectory, 'MyTestProviderBuilder.php');

        $this->registerFileForTestMethodTeardown($outputProviderClassFilename);
        $this->registerFileForTestMethodTeardown($outputProviderReaderClassFilename);
        $this->registerFileForTestMethodTeardown($outputProviderBuilderClassFilename);

        $commandTester = $this->createCommandTester('invoicesuite:providers:make');

        $exitCode = $commandTester->execute([
            'namespace' => 'App\EInvoice',
            'directory' => $outputDirectory,
            'provider-class' => 'MyTestProvider',
        ]);

        $this->assertSame(Command::SUCCESS, $exitCode);

        $commandOutput = $commandTester->getDisplay();

        $this->assertStringContainsString(sprintf('Created: %s', $outputProviderClassFilename), $commandOutput);
        $this->assertStringContainsString(sprintf('Created: %s', $outputProviderReaderClassFilename), $commandOutput);
        $this->assertStringContainsString(sprintf('Created: %s', $outputProviderBuilderClassFilename), $commandOutput);

        $this->assertFileExists($outputProviderClassFilename);
        $this->assertFileExists($outputProviderReaderClassFilename);
        $this->assertFileExists($outputProviderBuilderClassFilename);

        $outputProviderClassFileContents = file_get_contents($outputProviderClassFilename);
        $outputProviderReaderClassFileContents = file_get_contents($outputProviderReaderClassFilename);
        $outputProviderBuilderClassFileContents = file_get_contents($outputProviderBuilderClassFilename);

        $this->assertNotFalse($outputProviderClassFileContents);
        $this->assertNotFalse($outputProviderReaderClassFileContents);
        $this->assertNotFalse($outputProviderBuilderClassFileContents);

        $this->assertStringContainsString('class MyTestProvider extends InvoiceSuiteAbstractDocumentFormatProvider', $outputProviderClassFileContents);
        $this->assertStringContainsString('class MyTestProviderReader extends InvoiceSuiteAbstractDocumentFormatReader', $outputProviderReaderClassFileContents);
        $this->assertStringContainsString('class MyTestProviderBuilder extends InvoiceSuiteAbstractDocumentFormatBuilder', $outputProviderBuilderClassFileContents);
    }

    /**
     * Test that the generator for a provider stops with an exception because destinations files already exists
     *
     * @return void
     */
    public function testCommandMakeWithNoForce(): void
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessageMatches('/.*already exists. Use --force to overwrite.*/');

        $outputDirectory = InvoiceSuitePathUtils::combineAllPaths(sys_get_temp_dir(), 'EInvoice');
        $outputProviderClassFilename = InvoiceSuitePathUtils::combinePathWithFile($outputDirectory, 'MyTestProvider.php');
        $outputProviderReaderClassFilename = InvoiceSuitePathUtils::combinePathWithFile($outputDirectory, 'MyTestProviderReader.php');
        $outputProviderBuilderClassFilename = InvoiceSuitePathUtils::combinePathWithFile($outputDirectory, 'MyTestProviderBuilder.php');

        $this->registerFileForTestMethodTeardown($outputProviderClassFilename);
        $this->registerFileForTestMethodTeardown($outputProviderReaderClassFilename);
        $this->registerFileForTestMethodTeardown($outputProviderBuilderClassFilename);

        $commandTester = $this->createCommandTester('invoicesuite:providers:make');

        $exitCode = $commandTester->execute([
            'namespace' => 'App\EInvoice',
            'directory' => $outputDirectory,
            'provider-class' => 'MyTestProvider',
        ]);

        $this->assertSame(Command::SUCCESS, $exitCode);

        $commandTester = $this->createCommandTester('invoicesuite:providers:make');

        $exitCode = $commandTester->execute([
            'namespace' => 'App\EInvoice',
            'directory' => $outputDirectory,
            'provider-class' => 'MyTestProvider',
        ]);

        $this->assertSame(Command::SUCCESS, $exitCode);
    }

    /**
     * Test that the generator for a provider runs completelly because force option is present
     *
     * @return void
     */
    public function testCommandMakeWithForce(): void
    {
        $outputDirectory = InvoiceSuitePathUtils::combineAllPaths(sys_get_temp_dir(), 'EInvoice');
        $outputProviderClassFilename = InvoiceSuitePathUtils::combinePathWithFile($outputDirectory, 'MyTestProvider.php');
        $outputProviderReaderClassFilename = InvoiceSuitePathUtils::combinePathWithFile($outputDirectory, 'MyTestProviderReader.php');
        $outputProviderBuilderClassFilename = InvoiceSuitePathUtils::combinePathWithFile($outputDirectory, 'MyTestProviderBuilder.php');

        $this->registerFileForTestMethodTeardown($outputProviderClassFilename);
        $this->registerFileForTestMethodTeardown($outputProviderReaderClassFilename);
        $this->registerFileForTestMethodTeardown($outputProviderBuilderClassFilename);

        $commandTester = $this->createCommandTester('invoicesuite:providers:make');

        $exitCode = $commandTester->execute([
            'namespace' => 'App\EInvoice',
            'directory' => $outputDirectory,
            'provider-class' => 'MyTestProvider',
        ]);

        $this->assertSame(Command::SUCCESS, $exitCode);

        $commandTester = $this->createCommandTester('invoicesuite:providers:make');

        $exitCode = $commandTester->execute([
            'namespace' => 'App\EInvoice',
            'directory' => $outputDirectory,
            'provider-class' => 'MyTestProvider',
            '--force' => true,
        ]);

        $this->assertSame(Command::SUCCESS, $exitCode);
    }
}
