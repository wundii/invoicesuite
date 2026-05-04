<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\fatturapa\models;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\utils\InvoiceSuiteStringUtils;
use JMS\Serializer\Annotation as JMS;

final class RappresentanteFiscaleCessionario
{
    use HandlesObjectFlags;

    /**
     * @translation-german-untranslated
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\fatturapa\models\IdFiscale")
     * @JMS\Accessor(getter="getIdFiscaleIVA", setter="setIdFiscaleIVA")
     * @JMS\SerializedName("IdFiscaleIVA")
     * @JMS\XmlElement(cdata=false)
     */
    private ?IdFiscale $idFiscaleIVA = null;

    /**
     * @translation-german Bezeichnung
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("string")
     * @JMS\Accessor(getter="getDenominazione", setter="setDenominazione")
     * @JMS\SerializedName("Denominazione")
     * @JMS\XmlElement(cdata=false)
     */
    private ?string $denominazione = null;

    /**
     * @translation-german Name
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("string")
     * @JMS\Accessor(getter="getNome", setter="setNome")
     * @JMS\SerializedName("Nome")
     * @JMS\XmlElement(cdata=false)
     */
    private ?string $nome = null;

    /**
     * @translation-german Nachname
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("string")
     * @JMS\Accessor(getter="getCognome", setter="setCognome")
     * @JMS\SerializedName("Cognome")
     * @JMS\XmlElement(cdata=false)
     */
    private ?string $cognome = null;

    /**
     * @translation-german-untranslated
     *
     * @return null|IdFiscale
     */
    public function getIdFiscaleIVA(): ?IdFiscale
    {
        return $this->idFiscaleIVA;
    }

    /**
     * @translation-german-untranslated
     *
     * @return IdFiscale
     */
    public function getIdFiscaleIVAWithCreate(): IdFiscale
    {
        $this->idFiscaleIVA ??= new IdFiscale();

        return $this->idFiscaleIVA;
    }

    /**
     * @translation-german-untranslated
     *
     * @param  null|IdFiscale $idFiscaleIVA
     * @return static
     */
    public function setIdFiscaleIVA(
        ?IdFiscale $idFiscaleIVA = null
    ): static {
        $this->idFiscaleIVA = $idFiscaleIVA;

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return static
     */
    public function unsetIdFiscaleIVA(): static
    {
        $this->idFiscaleIVA = null;

        return $this;
    }

    /**
     * @translation-german Bezeichnung
     *
     * @return null|string
     */
    public function getDenominazione(): ?string
    {
        return $this->denominazione;
    }

    /**
     * @translation-german Bezeichnung
     *
     * @param  null|string $denominazione
     * @return static
     */
    public function setDenominazione(
        ?string $denominazione = null
    ): static {
        $this->denominazione = InvoiceSuiteStringUtils::asNullWhenEmpty($denominazione);

        return $this;
    }

    /**
     * @translation-german Bezeichnung
     *
     * @return static
     */
    public function unsetDenominazione(): static
    {
        $this->denominazione = null;

        return $this;
    }

    /**
     * @translation-german Name
     *
     * @return null|string
     */
    public function getNome(): ?string
    {
        return $this->nome;
    }

    /**
     * @translation-german Name
     *
     * @param  null|string $nome
     * @return static
     */
    public function setNome(
        ?string $nome = null
    ): static {
        $this->nome = InvoiceSuiteStringUtils::asNullWhenEmpty($nome);

        return $this;
    }

    /**
     * @translation-german Name
     *
     * @return static
     */
    public function unsetNome(): static
    {
        $this->nome = null;

        return $this;
    }

    /**
     * @translation-german Nachname
     *
     * @return null|string
     */
    public function getCognome(): ?string
    {
        return $this->cognome;
    }

    /**
     * @translation-german Nachname
     *
     * @param  null|string $cognome
     * @return static
     */
    public function setCognome(
        ?string $cognome = null
    ): static {
        $this->cognome = InvoiceSuiteStringUtils::asNullWhenEmpty($cognome);

        return $this;
    }

    /**
     * @translation-german Nachname
     *
     * @return static
     */
    public function unsetCognome(): static
    {
        $this->cognome = null;

        return $this;
    }
}
