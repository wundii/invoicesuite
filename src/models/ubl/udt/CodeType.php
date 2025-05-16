<?php

namespace horstoeko\invoicesuite\models\ubl\udt;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\concerns\HandlesOptional;
use horstoeko\invoicesuite\models\ubl\cct\CodeType as CodeTypeBase;

class CodeType extends CodeTypeBase
{
    use HandlesOptional;
    use HandlesObjectFlags;
}
