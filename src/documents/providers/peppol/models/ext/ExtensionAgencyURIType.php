<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\peppol\models\ext;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\providers\peppol\models\udt\IdentifierType;

class ExtensionAgencyURIType extends IdentifierType
{
    use HandlesObjectFlags;
}
