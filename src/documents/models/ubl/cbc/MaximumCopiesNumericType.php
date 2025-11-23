<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cbc;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\udt\NumericType;

class MaximumCopiesNumericType extends NumericType
{
    use HandlesObjectFlags;
}
