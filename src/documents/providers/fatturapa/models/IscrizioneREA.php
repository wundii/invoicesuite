<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\fatturapa\models;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\providers\fatturapa\models\Enum\SocioUnico;
use horstoeko\invoicesuite\documents\providers\fatturapa\models\Enum\StatoLiquidazione;
use horstoeko\invoicesuite\utils\InvoiceSuiteStringUtils;
use JMS\Serializer\Annotation as JMS;

final class IscrizioneREA
{
    use HandlesObjectFlags;

    /**
     * @translation-german-untranslated
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("string")
     * @JMS\Accessor(getter="getUfficio", setter="setUfficio")
     * @JMS\SerializedName("Ufficio")
     * @JMS\XmlElement(cdata=false)
     */
    private ?string $ufficio = null;

    /**
     * @translation-german Nummer REA
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("string")
     * @JMS\Accessor(getter="getNumeroREA", setter="setNumeroREA")
     * @JMS\SerializedName("NumeroREA")
     * @JMS\XmlElement(cdata=false)
     */
    private ?string $numeroREA = null;

    /**
     * @translation-german-untranslated
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("string")
     * @JMS\Accessor(getter="getCapitaleSociale", setter="setCapitaleSociale")
     * @JMS\SerializedName("CapitaleSociale")
     * @JMS\XmlElement(cdata=false)
     */
    private ?string $capitaleSociale = null;

    /**
     * @translation-german-untranslated
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\fatturapa\models\Enum\SocioUnico")
     * @JMS\Accessor(getter="getSocioUnico", setter="setSocioUnico")
     * @JMS\SerializedName("SocioUnico")
     * @JMS\XmlElement(cdata=false)
     */
    private ?SocioUnico $socioUnico = null;

    /**
     * @translation-german-untranslated
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("enum<'horstoeko\invoicesuite\documents\providers\fatturapa\models\Enum\StatoLiquidazione','value'>")
     * @JMS\Accessor(getter="getStatoLiquidazione", setter="setStatoLiquidazione")
     * @JMS\SerializedName("StatoLiquidazione")
     * @JMS\XmlElement(cdata=false)
     */
    private ?StatoLiquidazione $statoLiquidazione = null;

    /**
     * @translation-german-untranslated
     *
     * @return null|string
     */
    public function getUfficio(): ?string
    {
        return $this->ufficio;
    }

    /**
     * @translation-german-untranslated
     *
     * @param  null|string $ufficio
     * @return static
     */
    public function setUfficio(?string $ufficio = null): static
    {
        $this->ufficio = InvoiceSuiteStringUtils::asNullWhenEmpty($ufficio);

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return static
     */
    public function unsetUfficio(): static
    {
        $this->ufficio = null;

        return $this;
    }

    /**
     * @translation-german Nummer REA
     *
     * @return null|string
     */
    public function getNumeroREA(): ?string
    {
        return $this->numeroREA;
    }

    /**
     * @translation-german Nummer REA
     *
     * @param  null|string $numeroREA
     * @return static
     */
    public function setNumeroREA(?string $numeroREA = null): static
    {
        $this->numeroREA = InvoiceSuiteStringUtils::asNullWhenEmpty($numeroREA);

        return $this;
    }

    /**
     * @translation-german Nummer REA
     *
     * @return static
     */
    public function unsetNumeroREA(): static
    {
        $this->numeroREA = null;

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return null|string
     */
    public function getCapitaleSociale(): ?string
    {
        return $this->capitaleSociale;
    }

    /**
     * @translation-german-untranslated
     *
     * @param  null|string $capitaleSociale
     * @return static
     */
    public function setCapitaleSociale(?string $capitaleSociale = null): static
    {
        $this->capitaleSociale = InvoiceSuiteStringUtils::asNullWhenEmpty($capitaleSociale);

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return static
     */
    public function unsetCapitaleSociale(): static
    {
        $this->capitaleSociale = null;

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return null|SocioUnico
     */
    public function getSocioUnico(): ?SocioUnico
    {
        return $this->socioUnico;
    }

    /**
     * @translation-german-untranslated
     *
     * @param  null|SocioUnico $socioUnico
     * @return static
     */
    public function setSocioUnico(?SocioUnico $socioUnico = null): static
    {
        $this->socioUnico = $socioUnico;

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return static
     */
    public function unsetSocioUnico(): static
    {
        $this->socioUnico = null;

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return null|StatoLiquidazione
     */
    public function getStatoLiquidazione(): ?StatoLiquidazione
    {
        return $this->statoLiquidazione;
    }

    /**
     * @translation-german-untranslated
     *
     * @param  null|StatoLiquidazione $statoLiquidazione
     * @return static
     */
    public function setStatoLiquidazione(?StatoLiquidazione $statoLiquidazione = null): static
    {
        $this->statoLiquidazione = $statoLiquidazione;

        return $this;
    }

    /**
     * @translation-german-untranslated
     *
     * @return static
     */
    public function unsetStatoLiquidazione(): static
    {
        $this->statoLiquidazione = null;

        return $this;
    }
}
