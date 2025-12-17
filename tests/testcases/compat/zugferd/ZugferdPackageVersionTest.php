<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\compat\zugferd;

use horstoeko\invoicesuite\tests\TestCase;
use horstoeko\zugferd\ZugferdPackageVersion;

class ZugferdPackageVersionTest extends TestCase
{
    public function testVersion(): void
    {
        $this->assertSame('dev-master', ZugferdPackageVersion::getInstalledVersion());
    }
}
