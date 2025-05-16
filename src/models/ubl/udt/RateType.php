<?php

namespace horstoeko\invoicesuite\models\ubl\udt;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\concerns\HandlesOptional;
use horstoeko\invoicesuite\models\ubl\cct\NumericType;

class RateType extends NumericType
{
    use HandlesOptional;
    use HandlesObjectFlags;
}
