<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cbc;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\udt\IdentifierType;

class AccountIDType extends IdentifierType
{
    use HandlesObjectFlags;
}
