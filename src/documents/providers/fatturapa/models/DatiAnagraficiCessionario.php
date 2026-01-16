<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\fatturapa\models;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\utils\InvoiceSuiteStringUtils;
use JMS\Serializer\Annotation as JMS;

final class DatiAnagraficiCessionario
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
     * @translation-german Code Fiscale
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("string")
     * @JMS\Accessor(getter="getCodiceFiscale", setter="setCodiceFiscale")
     * @JMS\SerializedName("CodiceFiscale")
     * @JMS\XmlElement(cdata=false)
     */
    private ?string $codiceFiscale = null;

    /**
     * @translation-german-untranslated
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\fatturapa\models\Anagrafica")
     * @JMS\Accessor(getter="getAnagrafica", setter="setAnagrafica")
     * @JMS\SerializedName("Anagrafica")
     * @JMS\XmlElement(cdata=false)
     */
    private ?Anagrafica $anagrafica = null;

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
        $this->idFiscaleIVA = is_null($this->idFiscaleIVA) ? new IdFiscale() : $this->idFiscaleIVA;

        return $this->idFiscaleIVA;
    }

    /**
     * @translation-german-untranslated
     *
     * @param  null|IdFiscale $idFiscaleIVA
     * @return static
     */
    public function setIdFiscaleIVA(?IdFiscale $idFiscaleIVA = null): static
    {
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
     * @translation-german Code Fiscale
     *
     * @return null|string
     */
    public function getCodiceFiscale(): ?string
    {
        return $this->codiceFiscale;
    }

    /**
     * @translation-german Code Fiscale
     *
     * @param  null|string $codiceFiscale
     * @return static
     */
    public function setCodiceFiscale(?string $codiceFiscale = null): static
    {
        $this->codiceFiscale = InvoiceSuiteStringUtils::asNullWhenEmpty($codiceFiscale);

        return $this;
    }

    /**
     * @translation-german Code Fiscale
     *
     * @return static
     */
    public function unsetCodiceFiscale(): static
    {
        $this->codiceFiscale = null;

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return null|Anagrafica
     */
    public function getAnagrafica(): ?Anagrafica
    {
        return $this->anagrafica;
    }

    /**
     * @translation-german-untranslated
     *
     * @return Anagrafica
     */
    public function getAnagraficaWithCreate(): Anagrafica
    {
        $this->anagrafica = is_null($this->anagrafica) ? new Anagrafica() : $this->anagrafica;

        return $this->anagrafica;
    }

    /**
     * @translation-german-untranslated
     *
     * @param  null|Anagrafica $anagrafica
     * @return static
     */
    public function setAnagrafica(?Anagrafica $anagrafica = null): static
    {
        $this->anagrafica = $anagrafica;

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return static
     */
    public function unsetAnagrafica(): static
    {
        $this->anagrafica = null;

        return $this;
    }
}
