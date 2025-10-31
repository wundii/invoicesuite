<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\pdf;

use horstoeko\invoicesuite\tests\TestCase;
use horstoeko\invoicesuite\exceptions\InvoiceSuiteExceptionCodes;
use horstoeko\invoicesuite\exceptions\InvoiceSuiteUnknownContentException;

class InvoiceSuiteUnknownContentTest extends TestCase
{
    public function testException(): void
    {
        $this->expectException(InvoiceSuiteUnknownContentException::class);
        $this->expectExceptionMessage('Unknown content');
        $this->expectExceptionCode(InvoiceSuiteExceptionCodes::UNKNOWN_CONTENT);

        throw new InvoiceSuiteUnknownContentException();
    }
}