<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cbc;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;

/**
 * @JMS\XmlRoot(name="SharesNumberQuantity", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
 */
class SharesNumberQuantity extends SharesNumberQuantityType
{
    use HandlesObjectFlags;
}
