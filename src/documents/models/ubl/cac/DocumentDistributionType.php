<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumCopiesNumeric;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PrintQualifier;

class DocumentDistributionType
{
    use HandlesObjectFlags;

    /**
     * @var PrintQualifier|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PrintQualifier")
     * @JMS\Expose
     * @JMS\SerializedName("PrintQualifier")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPrintQualifier", setter="setPrintQualifier")
     */
    private $printQualifier;

    /**
     * @var MaximumCopiesNumeric|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumCopiesNumeric")
     * @JMS\Expose
     * @JMS\SerializedName("MaximumCopiesNumeric")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMaximumCopiesNumeric", setter="setMaximumCopiesNumeric")
     */
    private $maximumCopiesNumeric;

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
     * @return PrintQualifier|null
     */
    public function getPrintQualifier(): ?PrintQualifier
    {
        return $this->printQualifier;
    }

    /**
     * @return PrintQualifier
     */
    public function getPrintQualifierWithCreate(): PrintQualifier
    {
        $this->printQualifier = is_null($this->printQualifier) ? new PrintQualifier() : $this->printQualifier;

        return $this->printQualifier;
    }

    /**
     * @param PrintQualifier|null $printQualifier
     * @return self
     */
    public function setPrintQualifier(?PrintQualifier $printQualifier = null): self
    {
        $this->printQualifier = $printQualifier;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPrintQualifier(): self
    {
        $this->printQualifier = null;

        return $this;
    }

    /**
     * @return MaximumCopiesNumeric|null
     */
    public function getMaximumCopiesNumeric(): ?MaximumCopiesNumeric
    {
        return $this->maximumCopiesNumeric;
    }

    /**
     * @return MaximumCopiesNumeric
     */
    public function getMaximumCopiesNumericWithCreate(): MaximumCopiesNumeric
    {
        $this->maximumCopiesNumeric = is_null($this->maximumCopiesNumeric) ? new MaximumCopiesNumeric() : $this->maximumCopiesNumeric;

        return $this->maximumCopiesNumeric;
    }

    /**
     * @param MaximumCopiesNumeric|null $maximumCopiesNumeric
     * @return self
     */
    public function setMaximumCopiesNumeric(?MaximumCopiesNumeric $maximumCopiesNumeric = null): self
    {
        $this->maximumCopiesNumeric = $maximumCopiesNumeric;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMaximumCopiesNumeric(): self
    {
        $this->maximumCopiesNumeric = null;

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
