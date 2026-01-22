<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\fatturapa\models\xmldsig;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use JMS\Serializer\Annotation as JMS;

/**
 * @translation-german-untranslated
 */
class CanonicalizationMethodType
{
    use HandlesObjectFlags;

    /**
     * @translation-german-untranslated
     *
     * @var null|string
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("string")
     * @JMS\Accessor(getter="getAlgorithm", setter="setAlgorithm")
     * @JMS\SerializedName("Algorithm")
     * @JMS\XmlAttribute
     */
    private ?string $algorithm = null;

    /**
     * @translation-german-untranslated
     *
     * @return null|string
     */
    public function getAlgorithm(): ?string
    {
        return $this->algorithm;
    }

    /**
     * @translation-german-untranslated
     *
     * @param  string $algorithm
     * @return static
     */
    public function setAlgorithm(?string $algorithm = null): static
    {
        $this->algorithm = $algorithm;

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return static
     */
    public function unsetAlgorithm(): static
    {
        $this->algorithm = null;

        return $this;
    }
}
