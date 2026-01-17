<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\fatturapa\models;

use DateTimeImmutable;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\utils\InvoiceSuiteStringUtils;
use JMS\Serializer\Annotation as JMS;

final class DatiDDT
{
    use HandlesObjectFlags;

    /**
     * @translation-german Nummer DDT
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("string")
     * @JMS\Accessor(getter="getNumeroDDT", setter="setNumeroDDT")
     * @JMS\SerializedName("NumeroDDT")
     * @JMS\XmlElement(cdata=false)
     */
    private ?string $numeroDDT = null;

    /**
     * @translation-german Datum DDT
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Accessor(getter="getDataDDT", setter="setDataDDT")
     * @JMS\SerializedName("DataDDT")
     * @JMS\XmlElement(cdata=false)
     */
    private ?DateTimeImmutable $dataDDT = null;

    /**
     * @translation-german Referenz Nummer Position
     *
     * @var null|array<int>
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("array<int>")
     * @JMS\Accessor(getter="getRiferimentoNumeroLinea", setter="setRiferimentoNumeroLinea")
     * @JMS\SerializedName("RiferimentoNumeroLinea")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(inline=true, entry="RiferimentoNumeroLinea")
     */
    private ?array $riferimentoNumeroLinea = null;

    /**
     * @translation-german Nummer DDT
     *
     * @return null|string
     */
    public function getNumeroDDT(): ?string
    {
        return $this->numeroDDT;
    }

    /**
     * @translation-german Nummer DDT
     *
     * @param  null|string $numeroDDT
     * @return static
     */
    public function setNumeroDDT(?string $numeroDDT = null): static
    {
        $this->numeroDDT = InvoiceSuiteStringUtils::asNullWhenEmpty($numeroDDT);

        return $this;
    }

    /**
     * @translation-german Nummer DDT
     *
     * @return static
     */
    public function unsetNumeroDDT(): static
    {
        $this->numeroDDT = null;

        return $this;
    }

    /**
     * @translation-german Datum DDT
     *
     * @return null|DateTimeImmutable
     */
    public function getDataDDT(): ?DateTimeImmutable
    {
        return $this->dataDDT;
    }

    /**
     * @translation-german Datum DDT
     *
     * @param  null|DateTimeImmutable $dataDDT
     * @return static
     */
    public function setDataDDT(?DateTimeImmutable $dataDDT = null): static
    {
        $this->dataDDT = $dataDDT;

        return $this;
    }

    /**
     * @translation-german Datum DDT
     *
     * @return static
     */
    public function unsetDataDDT(): static
    {
        $this->dataDDT = null;

        return $this;
    }

    /**
     * @translation-german Referenz Nummer Position
     *
     * @return null|array<int>
     */
    public function getRiferimentoNumeroLinea(): ?array
    {
        return $this->riferimentoNumeroLinea;
    }

    /**
     * @translation-german Referenz Nummer Position
     *
     * @param  null|array<int> $riferimentoNumeroLinea
     * @return static
     */
    public function setRiferimentoNumeroLinea(?array $riferimentoNumeroLinea = null): static
    {
        $this->riferimentoNumeroLinea = $riferimentoNumeroLinea;

        return $this;
    }

    /**
     * @translation-german Referenz Nummer Position
     *
     * @return static
     */
    public function unsetRiferimentoNumeroLinea(): static
    {
        $this->riferimentoNumeroLinea = null;

        return $this;
    }

    /**
     * @translation-german Referenz Nummer Position
     *
     * @return static
     */
    public function clearRiferimentoNumeroLinea(): static
    {
        $this->riferimentoNumeroLinea = [];

        return $this;
    }

    /**
     * @translation-german Referenz Nummer Position
     *
     * @param  int    $riferimentoNumeroLinea
     * @return static
     */
    public function addToRiferimentoNumeroLinea(int $riferimentoNumeroLinea): static
    {
        if (!is_array($this->riferimentoNumeroLinea)) {
            $this->riferimentoNumeroLinea = [];
        }

        $this->riferimentoNumeroLinea[] = $riferimentoNumeroLinea;

        return $this;
    }

    /**
     * @translation-german Referenz Nummer Position
     *
     * @param  int    $riferimentoNumeroLinea
     * @return static
     */
    public function addOnceToRiferimentoNumeroLinea(int $riferimentoNumeroLinea): static
    {
        if (!is_array($this->riferimentoNumeroLinea)) {
            $this->riferimentoNumeroLinea = [];
        }

        $this->riferimentoNumeroLinea[0] = $riferimentoNumeroLinea;

        return $this;
    }
}
