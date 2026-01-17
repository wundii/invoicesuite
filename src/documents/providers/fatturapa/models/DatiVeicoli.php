<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\fatturapa\models;

use DateTimeImmutable;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\utils\InvoiceSuiteStringUtils;
use JMS\Serializer\Annotation as JMS;

final class DatiVeicoli
{
    use HandlesObjectFlags;

    /**
     * @translation-german Datum
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Accessor(getter="getData", setter="setData")
     * @JMS\SerializedName("Data")
     * @JMS\XmlElement(cdata=false)
     */
    private ?DateTimeImmutable $data = null;

    /**
     * @translation-german Gesamt Percorso
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("string")
     * @JMS\Accessor(getter="getTotalePercorso", setter="setTotalePercorso")
     * @JMS\SerializedName("TotalePercorso")
     * @JMS\XmlElement(cdata=false)
     */
    private ?string $totalePercorso = null;

    /**
     * @translation-german Datum
     *
     * @return null|DateTimeImmutable
     */
    public function getData(): ?DateTimeImmutable
    {
        return $this->data;
    }

    /**
     * @translation-german Datum
     *
     * @param  null|DateTimeImmutable $data
     * @return static
     */
    public function setData(?DateTimeImmutable $data = null): static
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @translation-german Datum
     *
     * @return static
     */
    public function unsetData(): static
    {
        $this->data = null;

        return $this;
    }

    /**
     * @translation-german Gesamt Percorso
     *
     * @return null|string
     */
    public function getTotalePercorso(): ?string
    {
        return $this->totalePercorso;
    }

    /**
     * @translation-german Gesamt Percorso
     *
     * @param  null|string $totalePercorso
     * @return static
     */
    public function setTotalePercorso(?string $totalePercorso = null): static
    {
        $this->totalePercorso = InvoiceSuiteStringUtils::asNullWhenEmpty($totalePercorso);

        return $this;
    }

    /**
     * @translation-german Gesamt Percorso
     *
     * @return static
     */
    public function unsetTotalePercorso(): static
    {
        $this->totalePercorso = null;

        return $this;
    }
}
