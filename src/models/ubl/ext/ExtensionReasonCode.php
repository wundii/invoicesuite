<?php

namespace horstoeko\invoicesuite\models\ubl\ext;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\concerns\HandlesOptional;

/**
 * @JMS\XmlRoot(name="ExtensionReasonCode", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2")
 */
class ExtensionReasonCode extends ExtensionReasonCodeType
{
    use HandlesOptional;
    use HandlesObjectFlags;
}
