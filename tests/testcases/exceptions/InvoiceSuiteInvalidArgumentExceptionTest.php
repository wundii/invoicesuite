<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\pdf;

use horstoeko\invoicesuite\tests\TestCase;
use horstoeko\invoicesuite\exceptions\InvoiceSuiteExceptionCodes;
use horstoeko\invoicesuite\exceptions\InvoiceSuiteInvalidArgumentException;

class InvoiceSuiteInvalidArgumentExceptionTest extends TestCase
{
    public function testException(): void
    {
        $this->expectException(InvoiceSuiteInvalidArgumentException::class);
        $this->expectExceptionMessage('The argument is invalid');
        $this->expectExceptionCode(InvoiceSuiteExceptionCodes::INVALID_ARGUMENT);

        throw new InvoiceSuiteInvalidArgumentException('The argument is invalid');
    }
}