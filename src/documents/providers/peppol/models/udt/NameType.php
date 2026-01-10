<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\peppol\models\udt;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\providers\peppol\models\cct\TextType;

class NameType extends TextType
{
    use HandlesObjectFlags;
}
