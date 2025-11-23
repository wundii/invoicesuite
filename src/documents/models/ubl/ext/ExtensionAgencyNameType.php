<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\ext;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\udt\TextType;

class ExtensionAgencyNameType extends TextType
{
    use HandlesObjectFlags;
}
