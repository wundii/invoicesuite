<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\peppol\models\cbc;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\providers\peppol\models\udt\QuantityType;

class ShortQuantityType extends QuantityType
{
    use HandlesObjectFlags;
}
