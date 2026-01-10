<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\peppol\models\cbc;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\providers\peppol\models\udt\MeasureType as MeasureTypeBase;

class MeasureType extends MeasureTypeBase
{
    use HandlesObjectFlags;
}
