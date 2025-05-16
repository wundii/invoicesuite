<?php

namespace horstoeko\invoicesuite\models\ubl\cbc;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\concerns\HandlesOptional;
use horstoeko\invoicesuite\models\ubl\udt\QuantityType;

class MaximumVariantQuantityType extends QuantityType
{
    use HandlesOptional;
    use HandlesObjectFlags;
}
