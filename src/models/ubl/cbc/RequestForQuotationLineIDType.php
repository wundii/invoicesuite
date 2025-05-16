<?php

namespace horstoeko\invoicesuite\models\ubl\cbc;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\concerns\HandlesOptional;
use horstoeko\invoicesuite\models\ubl\udt\IdentifierType;

class RequestForQuotationLineIDType extends IdentifierType
{
    use HandlesOptional;
    use HandlesObjectFlags;
}
