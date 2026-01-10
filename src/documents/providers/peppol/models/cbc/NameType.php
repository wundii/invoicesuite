<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\peppol\models\cbc;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\providers\peppol\models\udt\NameType as NameTypeBase;

class NameType extends NameTypeBase
{
    use HandlesObjectFlags;
}
