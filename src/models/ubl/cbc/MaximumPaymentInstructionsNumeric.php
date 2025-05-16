<?php

namespace horstoeko\invoicesuite\models\ubl\cbc;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\concerns\HandlesOptional;

/**
 * @JMS\XmlRoot(name="MaximumPaymentInstructionsNumeric", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
 */
class MaximumPaymentInstructionsNumeric extends MaximumPaymentInstructionsNumericType
{
    use HandlesOptional;
    use HandlesObjectFlags;
}
