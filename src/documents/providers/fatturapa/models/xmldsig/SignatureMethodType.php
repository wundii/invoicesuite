<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\fatturapa\models\xmldsig;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use JMS\Serializer\Annotation as JMS;

/**
 * @translation-german-untranslated
 */
class SignatureMethodType
{
    use HandlesObjectFlags;

    /**
     * @translation-german-untranslated
     *
     * @var null|int
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("int")
     * @JMS\Accessor(getter="getHMACOutputLength", setter="setHMACOutputLength")
     * @JMS\SerializedName("HMACOutputLength")
     * @JMS\XmlElement(cdata=false)
     */
    private ?int $hMACOutputLength = null;

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
     * @return null|int
     */
    public function getHMACOutputLength(): ?int
    {
        return $this->hMACOutputLength;
    }

    /**
     * @translation-german-untranslated
     *
     * @param  int    $hMACOutputLength
     * @return static
     */
    public function setHMACOutputLength(?int $hMACOutputLength = null): static
    {
        $this->hMACOutputLength = $hMACOutputLength;

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return static
     */
    public function unsetHMACOutputLength(): static
    {
        $this->hMACOutputLength = null;

        return $this;
    }

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
