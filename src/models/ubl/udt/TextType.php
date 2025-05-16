<?php

namespace horstoeko\invoicesuite\models\ubl\udt;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\concerns\HandlesOptional;
use horstoeko\invoicesuite\models\ubl\cct\TextType as TextTypeBase;

class TextType extends TextTypeBase
{
    use HandlesOptional;
    use HandlesObjectFlags;
}
