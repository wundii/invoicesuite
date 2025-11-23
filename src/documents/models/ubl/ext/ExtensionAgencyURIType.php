<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\ext;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\udt\IdentifierType;

class ExtensionAgencyURIType extends IdentifierType
{
    use HandlesObjectFlags;
}
