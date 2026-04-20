<?php

declare(strict_types=1);

/**
 * This file is a part of horstoeko/invoicesuite.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\console\commands;

use horstoeko\invoicesuite\utils\InvoiceSuiteStringUtils;
use RuntimeException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Exception\InvalidArgumentException as ConsoleInvalidArgumentException;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Base class for InvoiceSuite console commands.
 *
 * @category InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @see      https://github.com/horstoeko/invoicesuite
 */
abstract class InvoiceSuiteAbstractCommand extends Command
{
    /**
     * Input Interface
     *
     * @var InputInterface
     */
    protected $input;

    /**
     * Output Interface
     *
     * @var OutputInterface
     */
    protected $output;

    /**
     * Execute command
     *
     * @param  InputInterface  $input
     * @param  OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->input = $input;
        $this->output = $output;

        return $this->handle();
    }

    /**
     * Handle command
     *
     * @return int
     */
    abstract protected function handle(): int;

    /**
     * Writes a message to the output and adds a newline at the end.
     *
     * @param  array<int, string>|string $messages
     * @param  int                       $options
     * @return static
     */
    protected function outputLineLF(iterable|string $messages, int $options = 0): static
    {
        $this->output->writeln($messages, $options);

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param  array<int,string>             $headers
     * @param  array<int,array<int, string>> $rows
     * @return static
     */
    protected function outputTable(array $headers = [], array $rows = []): static
    {
        $table = (new Table($this->output))->setStyle('box');

        if ([] !== $headers) {
            $table->setHeaders($headers);
        }

        if ([] != $rows) {
            $table->addRows($rows);
        }

        $table->render();

        return $this;
    }

    /**
     * Get a string argument.
     *
     * @param  string $name
     * @param  string $default
     * @return string
     *
     * @throws ConsoleInvalidArgumentException
     * @throws RuntimeException
     */
    protected function getStringArgument(string $name, string $default = ''): string
    {
        $value = $this->input->getArgument($name);

        if (is_string($value)) {
            return $value;
        }

        if (null === $value) {
            return $default;
        }

        throw new RuntimeException(sprintf('Argument "%s" must be a string.', $name));
    }

    /**
     * Get a string option.
     *
     * @param  string $name
     * @param  string $default
     * @return string
     *
     * @throws ConsoleInvalidArgumentException
     * @throws RuntimeException
     */
    protected function getStringOption(string $name, string $default = ''): string
    {
        $value = $this->input->getOption($name);

        if (is_string($value)) {
            return $value;
        }

        if (null === $value) {
            return $default;
        }

        throw new RuntimeException(sprintf('Option "%s" must be a string.', $name));
    }

    /**
     * Get a boolean option.
     *
     * @param  string $name
     * @param  bool   $default
     * @return bool
     *
     * @throws ConsoleInvalidArgumentException
     * @throws RuntimeException
     */
    protected function getBoolOption(string $name, bool $default = false): bool
    {
        return filter_var($this->input->getOption($name), FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) ?? $default;
    }

    /**
     * Get an integer option.
     *
     * @param  string $name
     * @param  int    $default
     * @return int
     *
     * @throws ConsoleInvalidArgumentException
     * @throws RuntimeException
     */
    protected function getIntOption(string $name, int $default = 0): int
    {
        return filter_var($this->input->getOption($name), FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE) ?? $default;
    }

    /**
     * Ensure that a directory exists.
     *
     * @param  string $directory
     * @return string
     *
     * @throws RuntimeException
     */
    protected function ensureDirectoryExists(string $directory): string
    {
        if (InvoiceSuiteStringUtils::stringIsNullOrEmpty($directory)) {
            throw new RuntimeException('The directory name must not be empty.');
        }

        if (!is_dir($directory) && !mkdir($directory, 0777, true) && !is_dir($directory)) {
            throw new RuntimeException(sprintf('Unable to create directory "%s".', $directory));
        }

        return $directory;
    }
}
