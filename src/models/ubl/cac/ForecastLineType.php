<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\ubl\cbc\ForecastTypeCode;
use horstoeko\invoicesuite\models\ubl\cbc\ID;
use horstoeko\invoicesuite\models\ubl\cbc\Note;

class ForecastLineType
{
    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ID
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ID")
     * @JMS\Expose
     * @JMS\SerializedName("ID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getID", setter="setID")
     */
    private $iD;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\Note>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\Note>")
     * @JMS\Expose
     * @JMS\SerializedName("Note")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Note", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getNote", setter="setNote")
     */
    private $note;

    /**
     * @var bool
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("FrozenDocumentIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFrozenDocumentIndicator", setter="setFrozenDocumentIndicator")
     */
    private $frozenDocumentIndicator;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ForecastTypeCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ForecastTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("ForecastTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getForecastTypeCode", setter="setForecastTypeCode")
     */
    private $forecastTypeCode;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\ForecastPeriod
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\ForecastPeriod")
     * @JMS\Expose
     * @JMS\SerializedName("ForecastPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getForecastPeriod", setter="setForecastPeriod")
     */
    private $forecastPeriod;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\SalesItem
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\SalesItem")
     * @JMS\Expose
     * @JMS\SerializedName("SalesItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSalesItem", setter="setSalesItem")
     */
    private $salesItem;

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ID|null
     */
    public function getID(): ?ID
    {
        return $this->iD;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ID
     */
    public function getIDWithCreate(): ID
    {
        $this->iD = is_null($this->iD) ? new ID() : $this->iD;

        return $this->iD;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ID $iD
     * @return self
     */
    public function setID(ID $iD): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\Note>|null
     */
    public function getNote(): ?array
    {
        return $this->note;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\Note> $note
     * @return self
     */
    public function setNote(array $note): self
    {
        $this->note = $note;

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
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Note $note
     * @return self
     */
    public function addToNote(Note $note): self
    {
        $this->note[] = $note;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Note
     */
    public function addToNoteWithCreate(): Note
    {
        $this->addTonote($note = new Note());

        return $note;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Note $note
     * @return self
     */
    public function addOnceToNote(Note $note): self
    {
        $this->note[0] = $note;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Note
     */
    public function addOnceToNoteWithCreate(): Note
    {
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
     * @param bool $frozenDocumentIndicator
     * @return self
     */
    public function setFrozenDocumentIndicator(bool $frozenDocumentIndicator): self
    {
        $this->frozenDocumentIndicator = $frozenDocumentIndicator;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ForecastTypeCode|null
     */
    public function getForecastTypeCode(): ?ForecastTypeCode
    {
        return $this->forecastTypeCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ForecastTypeCode
     */
    public function getForecastTypeCodeWithCreate(): ForecastTypeCode
    {
        $this->forecastTypeCode = is_null($this->forecastTypeCode) ? new ForecastTypeCode() : $this->forecastTypeCode;

        return $this->forecastTypeCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ForecastTypeCode $forecastTypeCode
     * @return self
     */
    public function setForecastTypeCode(ForecastTypeCode $forecastTypeCode): self
    {
        $this->forecastTypeCode = $forecastTypeCode;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ForecastPeriod|null
     */
    public function getForecastPeriod(): ?ForecastPeriod
    {
        return $this->forecastPeriod;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ForecastPeriod
     */
    public function getForecastPeriodWithCreate(): ForecastPeriod
    {
        $this->forecastPeriod = is_null($this->forecastPeriod) ? new ForecastPeriod() : $this->forecastPeriod;

        return $this->forecastPeriod;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\ForecastPeriod $forecastPeriod
     * @return self
     */
    public function setForecastPeriod(ForecastPeriod $forecastPeriod): self
    {
        $this->forecastPeriod = $forecastPeriod;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\SalesItem|null
     */
    public function getSalesItem(): ?SalesItem
    {
        return $this->salesItem;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\SalesItem
     */
    public function getSalesItemWithCreate(): SalesItem
    {
        $this->salesItem = is_null($this->salesItem) ? new SalesItem() : $this->salesItem;

        return $this->salesItem;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\SalesItem $salesItem
     * @return self
     */
    public function setSalesItem(SalesItem $salesItem): self
    {
        $this->salesItem = $salesItem;

        return $this;
    }
}
