<?php

namespace horstoeko\invoicesuite\models\ubl\cbc;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\concerns\HandlesOptional;
use horstoeko\invoicesuite\models\ubl\udt\MeasureType as MeasureTypeBase;

class MeasureType extends MeasureTypeBase
{
    use HandlesOptional;
    use HandlesObjectFlags;
}
