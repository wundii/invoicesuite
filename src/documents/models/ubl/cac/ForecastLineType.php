<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ForecastTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Note;

class ForecastLineType
{
    use HandlesObjectFlags;

    /**
     * @var ID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ID")
     * @JMS\Expose
     * @JMS\SerializedName("ID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getID", setter="setID")
     */
    private $iD;

    /**
     * @var array<Note>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Note>")
     * @JMS\Expose
     * @JMS\SerializedName("Note")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Note", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getNote", setter="setNote")
     */
    private $note;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("FrozenDocumentIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFrozenDocumentIndicator", setter="setFrozenDocumentIndicator")
     */
    private $frozenDocumentIndicator;

    /**
     * @var ForecastTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ForecastTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("ForecastTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getForecastTypeCode", setter="setForecastTypeCode")
     */
    private $forecastTypeCode;

    /**
     * @var ForecastPeriod|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ForecastPeriod")
     * @JMS\Expose
     * @JMS\SerializedName("ForecastPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getForecastPeriod", setter="setForecastPeriod")
     */
    private $forecastPeriod;

    /**
     * @var SalesItem|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\SalesItem")
     * @JMS\Expose
     * @JMS\SerializedName("SalesItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSalesItem", setter="setSalesItem")
     */
    private $salesItem;

    /**
     * @return ID|null
     */
    public function getID(): ?ID
    {
        return $this->iD;
    }

    /**
     * @return ID
     */
    public function getIDWithCreate(): ID
    {
        $this->iD = is_null($this->iD) ? new ID() : $this->iD;

        return $this->iD;
    }

    /**
     * @param ID|null $iD
     * @return self
     */
    public function setID(?ID $iD = null): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetID(): self
    {
        $this->iD = null;

        return $this;
    }

    /**
     * @return array<Note>|null
     */
    public function getNote(): ?array
    {
        return $this->note;
    }

    /**
     * @param array<Note>|null $note
     * @return self
     */
    public function setNote(?array $note = null): self
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetNote(): self
    {
        $this->note = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearNote(): self
    {
        $this->note = [];

        return $this;
    }

    /**
     * @return Note|null
     */
    public function firstNote(): ?Note
    {
        $note = $this->note ?? [];
        $note = reset($note);

        if ($note === false) {
            return null;
        }

        return $note;
    }

    /**
     * @return Note|null
     */
    public function lastNote(): ?Note
    {
        $note = $this->note ?? [];
        $note = end($note);

        if ($note === false) {
            return null;
        }

        return $note;
    }

    /**
     * @param Note $note
     * @return self
     */
    public function addToNote(Note $note): self
    {
        $this->note[] = $note;

        return $this;
    }

    /**
     * @return Note
     */
    public function addToNoteWithCreate(): Note
    {
        $this->addTonote($note = new Note());

        return $note;
    }

    /**
     * @param Note $note
     * @return self
     */
    public function addOnceToNote(Note $note): self
    {
        if (!is_array($this->note)) {
            $this->note = [];
        }

        $this->note[0] = $note;

        return $this;
    }

    /**
     * @return Note
     */
    public function addOnceToNoteWithCreate(): Note
    {
        if (!is_array($this->note)) {
            $this->note = [];
        }

        if ($this->note === []) {
            $this->addOnceTonote(new Note());
        }

        return $this->note[0];
    }

    /**
     * @return bool|null
     */
    public function getFrozenDocumentIndicator(): ?bool
    {
        return $this->frozenDocumentIndicator;
    }

    /**
     * @param bool|null $frozenDocumentIndicator
     * @return self
     */
    public function setFrozenDocumentIndicator(?bool $frozenDocumentIndicator = null): self
    {
        $this->frozenDocumentIndicator = $frozenDocumentIndicator;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetFrozenDocumentIndicator(): self
    {
        $this->frozenDocumentIndicator = null;

        return $this;
    }

    /**
     * @return ForecastTypeCode|null
     */
    public function getForecastTypeCode(): ?ForecastTypeCode
    {
        return $this->forecastTypeCode;
    }

    /**
     * @return ForecastTypeCode
     */
    public function getForecastTypeCodeWithCreate(): ForecastTypeCode
    {
        $this->forecastTypeCode = is_null($this->forecastTypeCode) ? new ForecastTypeCode() : $this->forecastTypeCode;

        return $this->forecastTypeCode;
    }

    /**
     * @param ForecastTypeCode|null $forecastTypeCode
     * @return self
     */
    public function setForecastTypeCode(?ForecastTypeCode $forecastTypeCode = null): self
    {
        $this->forecastTypeCode = $forecastTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetForecastTypeCode(): self
    {
        $this->forecastTypeCode = null;

        return $this;
    }

    /**
     * @return ForecastPeriod|null
     */
    public function getForecastPeriod(): ?ForecastPeriod
    {
        return $this->forecastPeriod;
    }

    /**
     * @return ForecastPeriod
     */
    public function getForecastPeriodWithCreate(): ForecastPeriod
    {
        $this->forecastPeriod = is_null($this->forecastPeriod) ? new ForecastPeriod() : $this->forecastPeriod;

        return $this->forecastPeriod;
    }

    /**
     * @param ForecastPeriod|null $forecastPeriod
     * @return self
     */
    public function setForecastPeriod(?ForecastPeriod $forecastPeriod = null): self
    {
        $this->forecastPeriod = $forecastPeriod;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetForecastPeriod(): self
    {
        $this->forecastPeriod = null;

        return $this;
    }

    /**
     * @return SalesItem|null
     */
    public function getSalesItem(): ?SalesItem
    {
        return $this->salesItem;
    }

    /**
     * @return SalesItem
     */
    public function getSalesItemWithCreate(): SalesItem
    {
        $this->salesItem = is_null($this->salesItem) ? new SalesItem() : $this->salesItem;

        return $this->salesItem;
    }

    /**
     * @param SalesItem|null $salesItem
     * @return self
     */
    public function setSalesItem(?SalesItem $salesItem = null): self
    {
        $this->salesItem = $salesItem;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSalesItem(): self
    {
        $this->salesItem = null;

        return $this;
    }
}
