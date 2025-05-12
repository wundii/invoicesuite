<?php

namespace horstoeko\invoicesuite\models\ubl\cbc;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\models\ubl\udt\TextType;

class ProcessDescriptionType extends TextType
{
    use HandlesObjectFlags;
}
