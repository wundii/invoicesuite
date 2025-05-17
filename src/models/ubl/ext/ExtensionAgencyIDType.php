<?php

namespace horstoeko\invoicesuite\models\ubl\ext;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\models\ubl\udt\IdentifierType;

class ExtensionAgencyIDType extends IdentifierType
{
    use HandlesObjectFlags;
}
