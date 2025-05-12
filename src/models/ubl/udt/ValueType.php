<?php

namespace horstoeko\invoicesuite\models\ubl\udt;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\models\ubl\cct\NumericType;

class ValueType extends NumericType
{
    use HandlesObjectFlags;
}
