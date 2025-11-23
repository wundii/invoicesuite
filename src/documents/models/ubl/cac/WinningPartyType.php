<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Rank;

class WinningPartyType
{
    use HandlesObjectFlags;

    /**
     * @var Rank|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Rank")
     * @JMS\Expose
     * @JMS\SerializedName("Rank")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRank", setter="setRank")
     */
    private $rank;

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
     * @return Rank|null
     */
    public function getRank(): ?Rank
    {
        return $this->rank;
    }

    /**
     * @return Rank
     */
    public function getRankWithCreate(): Rank
    {
        $this->rank = is_null($this->rank) ? new Rank() : $this->rank;

        return $this->rank;
    }

    /**
     * @param Rank|null $rank
     * @return self
     */
    public function setRank(?Rank $rank = null): self
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetRank(): self
    {
        $this->rank = null;

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
