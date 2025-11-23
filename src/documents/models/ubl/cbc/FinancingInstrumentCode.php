<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cbc;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;

/**
 * @JMS\XmlRoot(name="FinancingInstrumentCode", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
 */
class FinancingInstrumentCode extends FinancingInstrumentCodeType
{
    use HandlesObjectFlags;
}
