<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\udt;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cct\CodeType as CodeTypeBase;

class CodeType extends CodeTypeBase
{
    use HandlesObjectFlags;
}
