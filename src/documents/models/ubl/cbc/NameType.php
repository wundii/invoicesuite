<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cbc;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\udt\NameType as NameTypeBase;

class NameType extends NameTypeBase
{
    use HandlesObjectFlags;
}
