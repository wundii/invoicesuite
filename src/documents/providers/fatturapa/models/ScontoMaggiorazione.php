<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\fatturapa\models;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\providers\fatturapa\models\Enum\TipoScontoMaggiorazione;
use horstoeko\invoicesuite\utils\InvoiceSuiteStringUtils;
use JMS\Serializer\Annotation as JMS;

final class ScontoMaggiorazione
{
    use HandlesObjectFlags;

    /**
     * @translation-german-untranslated
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("enum<'horstoeko\invoicesuite\documents\providers\fatturapa\models\Enum\TipoScontoMaggiorazione','value'>")
     * @JMS\Accessor(getter="getTipo", setter="setTipo")
     * @JMS\SerializedName("Tipo")
     * @JMS\XmlElement(cdata=false)
     */
    private ?TipoScontoMaggiorazione $tipo = null;

    /**
     * @translation-german-untranslated
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("string")
     * @JMS\Accessor(getter="getPercentuale", setter="setPercentuale")
     * @JMS\SerializedName("Percentuale")
     * @JMS\XmlElement(cdata=false)
     */
    private ?string $percentuale = null;

    /**
     * @translation-german Betrag
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("string")
     * @JMS\Accessor(getter="getImporto", setter="setImporto")
     * @JMS\SerializedName("Importo")
     * @JMS\XmlElement(cdata=false)
     */
    private ?string $importo = null;

    /**
     * @translation-german-untranslated
     *
     * @return null|TipoScontoMaggiorazione
     */
    public function getTipo(): ?TipoScontoMaggiorazione
    {
        return $this->tipo;
    }

    /**
     * @translation-german-untranslated
     *
     * @param  null|TipoScontoMaggiorazione $tipo
     * @return static
     */
    public function setTipo(?TipoScontoMaggiorazione $tipo = null): static
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return static
     */
    public function unsetTipo(): static
    {
        $this->tipo = null;

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return null|string
     */
    public function getPercentuale(): ?string
    {
        return $this->percentuale;
    }

    /**
     * @translation-german-untranslated
     *
     * @param  null|string $percentuale
     * @return static
     */
    public function setPercentuale(?string $percentuale = null): static
    {
        $this->percentuale = InvoiceSuiteStringUtils::asNullWhenEmpty($percentuale);

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return static
     */
    public function unsetPercentuale(): static
    {
        $this->percentuale = null;

        return $this;
    }

    /**
     * @translation-german Betrag
     *
     * @return null|string
     */
    public function getImporto(): ?string
    {
        return $this->importo;
    }

    /**
     * @translation-german Betrag
     *
     * @param  null|string $importo
     * @return static
     */
    public function setImporto(?string $importo = null): static
    {
        $this->importo = InvoiceSuiteStringUtils::asNullWhenEmpty($importo);

        return $this;
    }

    /**
     * @translation-german Betrag
     *
     * @return static
     */
    public function unsetImporto(): static
    {
        $this->importo = null;

        return $this;
    }
}
