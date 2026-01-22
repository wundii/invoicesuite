<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\fatturapa\models\xmldsig;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use JMS\Serializer\Annotation as JMS;

/**
 * @translation-german-untranslated
 */
class KeyValueType
{
    use HandlesObjectFlags;

    /**
     * @translation-german-untranslated
     *
     * @var null|DSAKeyValueType
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\fatturapa\models\xmldsig\DSAKeyValueType")
     * @JMS\Accessor(getter="getDSAKeyValue", setter="setDSAKeyValue")
     * @JMS\SerializedName("DSAKeyValue")
     * @JMS\XmlElement(cdata=false)
     */
    private ?DSAKeyValueType $dSAKeyValue = null;

    /**
     * @translation-german-untranslated
     *
     * @var null|RSAKeyValueType
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\fatturapa\models\xmldsig\RSAKeyValueType")
     * @JMS\Accessor(getter="getRSAKeyValue", setter="setRSAKeyValue")
     * @JMS\SerializedName("RSAKeyValue")
     * @JMS\XmlElement(cdata=false)
     */
    private ?RSAKeyValueType $rSAKeyValue = null;

    /**
     * @translation-german-untranslated
     *
     * @return null|DSAKeyValueType
     */
    public function getDSAKeyValue(): ?DSAKeyValueType
    {
        return $this->dSAKeyValue;
    }

    /**
     * @translation-german-untranslated
     *
     * @return DSAKeyValueType
     */
    public function getDSAKeyValueWithCreate(): DSAKeyValueType
    {
        $this->dSAKeyValue = is_null($this->dSAKeyValue) ? new DSAKeyValueType() : $this->dSAKeyValue;

        return $this->dSAKeyValue;
    }

    /**
     * @translation-german-untranslated
     *
     * @param  DSAKeyValueType $dSAKeyValue
     * @return static
     */
    public function setDSAKeyValue(?DSAKeyValueType $dSAKeyValue = null): static
    {
        $this->dSAKeyValue = $dSAKeyValue;

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return static
     */
    public function unsetDSAKeyValue(): static
    {
        $this->dSAKeyValue = null;

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return null|RSAKeyValueType
     */
    public function getRSAKeyValue(): ?RSAKeyValueType
    {
        return $this->rSAKeyValue;
    }

    /**
     * @translation-german-untranslated
     *
     * @return RSAKeyValueType
     */
    public function getRSAKeyValueWithCreate(): RSAKeyValueType
    {
        $this->rSAKeyValue = is_null($this->rSAKeyValue) ? new RSAKeyValueType() : $this->rSAKeyValue;

        return $this->rSAKeyValue;
    }

    /**
     * @translation-german-untranslated
     *
     * @param  RSAKeyValueType $rSAKeyValue
     * @return static
     */
    public function setRSAKeyValue(?RSAKeyValueType $rSAKeyValue = null): static
    {
        $this->rSAKeyValue = $rSAKeyValue;

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return static
     */
    public function unsetRSAKeyValue(): static
    {
        $this->rSAKeyValue = null;

        return $this;
    }
}
