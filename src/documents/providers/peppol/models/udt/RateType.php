<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\peppol\models\udt;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\providers\peppol\models\cct\NumericType;

class RateType extends NumericType
{
    use HandlesObjectFlags;
}
