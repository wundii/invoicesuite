<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\fatturapa\models;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\providers\fatturapa\models\Enum\BolloVirtuale;
use horstoeko\invoicesuite\utils\InvoiceSuiteStringUtils;
use JMS\Serializer\Annotation as JMS;

final class DatiBollo
{
    use HandlesObjectFlags;

    /**
     * @translation-german-untranslated
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\fatturapa\models\Enum\\BolloVirtuale")
     * @JMS\Accessor(getter="getBolloVirtuale", setter="setBolloVirtuale")
     * @JMS\SerializedName("BolloVirtuale")
     * @JMS\XmlElement(cdata=false)
     */
    private ?BolloVirtuale $bolloVirtuale = null;

    /**
     * @translation-german Betrag Bollo
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("string")
     * @JMS\Accessor(getter="getImportoBollo", setter="setImportoBollo")
     * @JMS\SerializedName("ImportoBollo")
     * @JMS\XmlElement(cdata=false)
     */
    private ?string $importoBollo = null;

    /**
     * @translation-german-untranslated
     *
     * @return null|BolloVirtuale
     */
    public function getBolloVirtuale(): ?BolloVirtuale
    {
        return $this->bolloVirtuale;
    }

    /**
     * @translation-german-untranslated
     *
     * @param  null|BolloVirtuale $bolloVirtuale
     * @return static
     */
    public function setBolloVirtuale(?BolloVirtuale $bolloVirtuale = null): static
    {
        $this->bolloVirtuale = $bolloVirtuale;

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return static
     */
    public function unsetBolloVirtuale(): static
    {
        $this->bolloVirtuale = null;

        return $this;
    }

    /**
     * @translation-german Betrag Bollo
     *
     * @return null|string
     */
    public function getImportoBollo(): ?string
    {
        return $this->importoBollo;
    }

    /**
     * @translation-german Betrag Bollo
     *
     * @param  null|string $importoBollo
     * @return static
     */
    public function setImportoBollo(?string $importoBollo = null): static
    {
        $this->importoBollo = InvoiceSuiteStringUtils::asNullWhenEmpty($importoBollo);

        return $this;
    }

    /**
     * @translation-german Betrag Bollo
     *
     * @return static
     */
    public function unsetImportoBollo(): static
    {
        $this->importoBollo = null;

        return $this;
    }
}
