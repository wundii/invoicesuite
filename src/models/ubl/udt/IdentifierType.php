<?php

namespace horstoeko\invoicesuite\models\ubl\udt;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\concerns\HandlesOptional;
use horstoeko\invoicesuite\models\ubl\cct\IdentifierType as IdentifierTypeBase;

class IdentifierType extends IdentifierTypeBase
{
    use HandlesOptional;
    use HandlesObjectFlags;
}
