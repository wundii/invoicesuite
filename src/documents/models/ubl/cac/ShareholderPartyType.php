<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PartecipationPercent;

class ShareholderPartyType
{
    use HandlesObjectFlags;

    /**
     * @var PartecipationPercent|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PartecipationPercent")
     * @JMS\Expose
     * @JMS\SerializedName("PartecipationPercent")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPartecipationPercent", setter="setPartecipationPercent")
     */
    private $partecipationPercent;

    /**
     * @var Party|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Party")
     * @JMS\Expose
     * @JMS\SerializedName("Party")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getParty", setter="setParty")
     */
    private $party;

    /**
     * @return PartecipationPercent|null
     */
    public function getPartecipationPercent(): ?PartecipationPercent
    {
        return $this->partecipationPercent;
    }

    /**
     * @return PartecipationPercent
     */
    public function getPartecipationPercentWithCreate(): PartecipationPercent
    {
        $this->partecipationPercent = is_null($this->partecipationPercent) ? new PartecipationPercent() : $this->partecipationPercent;

        return $this->partecipationPercent;
    }

    /**
     * @param PartecipationPercent|null $partecipationPercent
     * @return self
     */
    public function setPartecipationPercent(?PartecipationPercent $partecipationPercent = null): self
    {
        $this->partecipationPercent = $partecipationPercent;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPartecipationPercent(): self
    {
        $this->partecipationPercent = null;

        return $this;
    }

    /**
     * @return Party|null
     */
    public function getParty(): ?Party
    {
        return $this->party;
    }

    /**
     * @return Party
     */
    public function getPartyWithCreate(): Party
    {
        $this->party = is_null($this->party) ? new Party() : $this->party;

        return $this->party;
    }

    /**
     * @param Party|null $party
     * @return self
     */
    public function setParty(?Party $party = null): self
    {
        $this->party = $party;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetParty(): self
    {
        $this->party = null;

        return $this;
    }
}
