<?php

namespace horstoeko\invoicesuite\models\ubl\cbc;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\concerns\HandlesOptional;
use horstoeko\invoicesuite\models\ubl\udt\AmountType;

class RequiredFeeAmountType extends AmountType
{
    use HandlesOptional;
    use HandlesObjectFlags;
}
