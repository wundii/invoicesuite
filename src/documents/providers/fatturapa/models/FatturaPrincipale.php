<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\fatturapa\models;

use DateTimeImmutable;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\utils\InvoiceSuiteStringUtils;
use JMS\Serializer\Annotation as JMS;

final class FatturaPrincipale
{
    use HandlesObjectFlags;

    /**
     * @translation-german Nummer Fattura Principale
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("string")
     * @JMS\Accessor(getter="getNumeroFatturaPrincipale", setter="setNumeroFatturaPrincipale")
     * @JMS\SerializedName("NumeroFatturaPrincipale")
     * @JMS\XmlElement(cdata=false)
     */
    private ?string $numeroFatturaPrincipale = null;

    /**
     * @translation-german Datum Fattura Principale
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Accessor(getter="getDataFatturaPrincipale", setter="setDataFatturaPrincipale")
     * @JMS\SerializedName("DataFatturaPrincipale")
     * @JMS\XmlElement(cdata=false)
     */
    private ?DateTimeImmutable $dataFatturaPrincipale = null;

    /**
     * @translation-german Nummer Fattura Principale
     *
     * @return null|string
     */
    public function getNumeroFatturaPrincipale(): ?string
    {
        return $this->numeroFatturaPrincipale;
    }

    /**
     * @translation-german Nummer Fattura Principale
     *
     * @param  null|string $numeroFatturaPrincipale
     * @return static
     */
    public function setNumeroFatturaPrincipale(?string $numeroFatturaPrincipale = null): static
    {
        $this->numeroFatturaPrincipale = InvoiceSuiteStringUtils::asNullWhenEmpty($numeroFatturaPrincipale);

        return $this;
    }

    /**
     * @translation-german Nummer Fattura Principale
     *
     * @return static
     */
    public function unsetNumeroFatturaPrincipale(): static
    {
        $this->numeroFatturaPrincipale = null;

        return $this;
    }

    /**
     * @translation-german Datum Fattura Principale
     *
     * @return null|DateTimeImmutable
     */
    public function getDataFatturaPrincipale(): ?DateTimeImmutable
    {
        return $this->dataFatturaPrincipale;
    }

    /**
     * @translation-german Datum Fattura Principale
     *
     * @param  null|DateTimeImmutable $dataFatturaPrincipale
     * @return static
     */
    public function setDataFatturaPrincipale(?DateTimeImmutable $dataFatturaPrincipale = null): static
    {
        $this->dataFatturaPrincipale = $dataFatturaPrincipale;

        return $this;
    }

    /**
     * @translation-german Datum Fattura Principale
     *
     * @return static
     */
    public function unsetDataFatturaPrincipale(): static
    {
        $this->dataFatturaPrincipale = null;

        return $this;
    }
}
