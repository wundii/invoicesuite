<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\fatturapa\models;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\providers\fatturapa\models\Enum\EsigibilitaIVA;
use horstoeko\invoicesuite\documents\providers\fatturapa\models\Enum\Natura;
use horstoeko\invoicesuite\utils\InvoiceSuiteStringUtils;
use JMS\Serializer\Annotation as JMS;

final class DatiRiepilogo
{
    use HandlesObjectFlags;

    /**
     * @translation-german Steuersatz IVA
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("string")
     * @JMS\Accessor(getter="getAliquotaIVA", setter="setAliquotaIVA")
     * @JMS\SerializedName("AliquotaIVA")
     * @JMS\XmlElement(cdata=false)
     */
    private ?string $aliquotaIVA = null;

    /**
     * @translation-german-untranslated
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("enum<'horstoeko\invoicesuite\documents\providers\fatturapa\models\Enum\Natura','value'>")
     * @JMS\Accessor(getter="getNatura", setter="setNatura")
     * @JMS\SerializedName("Natura")
     * @JMS\XmlElement(cdata=false)
     */
    private ?Natura $natura = null;

    /**
     * @translation-german-untranslated
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("string")
     * @JMS\Accessor(getter="getSpeseAccessorie", setter="setSpeseAccessorie")
     * @JMS\SerializedName("SpeseAccessorie")
     * @JMS\XmlElement(cdata=false)
     */
    private ?string $speseAccessorie = null;

    /**
     * @translation-german-untranslated
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("string")
     * @JMS\Accessor(getter="getArrotondamento", setter="setArrotondamento")
     * @JMS\SerializedName("Arrotondamento")
     * @JMS\XmlElement(cdata=false)
     */
    private ?string $arrotondamento = null;

    /**
     * @translation-german Imponibile Betrag
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("string")
     * @JMS\Accessor(getter="getImponibileImporto", setter="setImponibileImporto")
     * @JMS\SerializedName("ImponibileImporto")
     * @JMS\XmlElement(cdata=false)
     */
    private ?string $imponibileImporto = null;

    /**
     * @translation-german Steuer
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("string")
     * @JMS\Accessor(getter="getImposta", setter="setImposta")
     * @JMS\SerializedName("Imposta")
     * @JMS\XmlElement(cdata=false)
     */
    private ?string $imposta = null;

    /**
     * @translation-german-untranslated
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("enum<'horstoeko\invoicesuite\documents\providers\fatturapa\models\Enum\EsigibilitaIVA','value'>")
     * @JMS\Accessor(getter="getEsigibilitaIVA", setter="setEsigibilitaIVA")
     * @JMS\SerializedName("EsigibilitaIVA")
     * @JMS\XmlElement(cdata=false)
     */
    private ?EsigibilitaIVA $esigibilitaIVA = null;

    /**
     * @translation-german Referenz Normativo
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("string")
     * @JMS\Accessor(getter="getRiferimentoNormativo", setter="setRiferimentoNormativo")
     * @JMS\SerializedName("RiferimentoNormativo")
     * @JMS\XmlElement(cdata=false)
     */
    private ?string $riferimentoNormativo = null;

    /**
     * @translation-german Steuersatz IVA
     *
     * @return null|string
     */
    public function getAliquotaIVA(): ?string
    {
        return $this->aliquotaIVA;
    }

    /**
     * @translation-german Steuersatz IVA
     *
     * @param  null|string $aliquotaIVA
     * @return static
     */
    public function setAliquotaIVA(?string $aliquotaIVA = null): static
    {
        $this->aliquotaIVA = InvoiceSuiteStringUtils::asNullWhenEmpty($aliquotaIVA);

        return $this;
    }

    /**
     * @translation-german Steuersatz IVA
     *
     * @return static
     */
    public function unsetAliquotaIVA(): static
    {
        $this->aliquotaIVA = null;

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return null|Natura
     */
    public function getNatura(): ?Natura
    {
        return $this->natura;
    }

    /**
     * @translation-german-untranslated
     *
     * @param  null|Natura $natura
     * @return static
     */
    public function setNatura(?Natura $natura = null): static
    {
        $this->natura = $natura;

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return static
     */
    public function unsetNatura(): static
    {
        $this->natura = null;

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return null|string
     */
    public function getSpeseAccessorie(): ?string
    {
        return $this->speseAccessorie;
    }

    /**
     * @translation-german-untranslated
     *
     * @param  null|string $speseAccessorie
     * @return static
     */
    public function setSpeseAccessorie(?string $speseAccessorie = null): static
    {
        $this->speseAccessorie = InvoiceSuiteStringUtils::asNullWhenEmpty($speseAccessorie);

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return static
     */
    public function unsetSpeseAccessorie(): static
    {
        $this->speseAccessorie = null;

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return null|string
     */
    public function getArrotondamento(): ?string
    {
        return $this->arrotondamento;
    }

    /**
     * @translation-german-untranslated
     *
     * @param  null|string $arrotondamento
     * @return static
     */
    public function setArrotondamento(?string $arrotondamento = null): static
    {
        $this->arrotondamento = InvoiceSuiteStringUtils::asNullWhenEmpty($arrotondamento);

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return static
     */
    public function unsetArrotondamento(): static
    {
        $this->arrotondamento = null;

        return $this;
    }

    /**
     * @translation-german Imponibile Betrag
     *
     * @return null|string
     */
    public function getImponibileImporto(): ?string
    {
        return $this->imponibileImporto;
    }

    /**
     * @translation-german Imponibile Betrag
     *
     * @param  null|string $imponibileImporto
     * @return static
     */
    public function setImponibileImporto(?string $imponibileImporto = null): static
    {
        $this->imponibileImporto = InvoiceSuiteStringUtils::asNullWhenEmpty($imponibileImporto);

        return $this;
    }

    /**
     * @translation-german Imponibile Betrag
     *
     * @return static
     */
    public function unsetImponibileImporto(): static
    {
        $this->imponibileImporto = null;

        return $this;
    }

    /**
     * @translation-german Steuer
     *
     * @return null|string
     */
    public function getImposta(): ?string
    {
        return $this->imposta;
    }

    /**
     * @translation-german Steuer
     *
     * @param  null|string $imposta
     * @return static
     */
    public function setImposta(?string $imposta = null): static
    {
        $this->imposta = InvoiceSuiteStringUtils::asNullWhenEmpty($imposta);

        return $this;
    }

    /**
     * @translation-german Steuer
     *
     * @return static
     */
    public function unsetImposta(): static
    {
        $this->imposta = null;

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return null|EsigibilitaIVA
     */
    public function getEsigibilitaIVA(): ?EsigibilitaIVA
    {
        return $this->esigibilitaIVA;
    }

    /**
     * @translation-german-untranslated
     *
     * @param  null|EsigibilitaIVA $esigibilitaIVA
     * @return static
     */
    public function setEsigibilitaIVA(?EsigibilitaIVA $esigibilitaIVA = null): static
    {
        $this->esigibilitaIVA = $esigibilitaIVA;

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return static
     */
    public function unsetEsigibilitaIVA(): static
    {
        $this->esigibilitaIVA = null;

        return $this;
    }

    /**
     * @translation-german Referenz Normativo
     *
     * @return null|string
     */
    public function getRiferimentoNormativo(): ?string
    {
        return $this->riferimentoNormativo;
    }

    /**
     * @translation-german Referenz Normativo
     *
     * @param  null|string $riferimentoNormativo
     * @return static
     */
    public function setRiferimentoNormativo(?string $riferimentoNormativo = null): static
    {
        $this->riferimentoNormativo = InvoiceSuiteStringUtils::asNullWhenEmpty($riferimentoNormativo);

        return $this;
    }

    /**
     * @translation-german Referenz Normativo
     *
     * @return static
     */
    public function unsetRiferimentoNormativo(): static
    {
        $this->riferimentoNormativo = null;

        return $this;
    }
}
