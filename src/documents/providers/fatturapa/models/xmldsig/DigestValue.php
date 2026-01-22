<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\fatturapa\models\xmldsig;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use JMS\Serializer\Annotation as JMS;

/**
 * @translation-german-untranslated
 *
 * @JMS\XmlRoot("DigestValue")
 * @JMS\XmlNamespace(uri="http://www.w3.org/2000/09/xmldsig#", prefix="ds")
 */
class DigestValue extends DigestValueType
{
    use HandlesObjectFlags;
}
