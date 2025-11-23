<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxbasic\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxbasic\udt\IDType;

class DocumentLineDocumentType
{
    use HandlesObjectFlags;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("LineID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getLineID", setter="setLineID")
     */
    private $lineID;

    /**
     * @var NoteType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\ram\NoteType")
     * @JMS\Expose
     * @JMS\SerializedName("IncludedNote")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getIncludedNote", setter="setIncludedNote")
     */
    private $includedNote;

    /**
     * @return IDType|null
     */
    public function getLineID(): ?IDType
    {
        return $this->lineID;
    }

    /**
     * @return IDType
     */
    public function getLineIDWithCreate(): IDType
    {
        $this->lineID = is_null($this->lineID) ? new IDType() : $this->lineID;

        return $this->lineID;
    }

    /**
     * @param IDType|null $lineID
     * @return self
     */
    public function setLineID(?IDType $lineID = null): self
    {
        $this->lineID = $lineID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLineID(): self
    {
        $this->lineID = null;

        return $this;
    }

    /**
     * @return NoteType|null
     */
    public function getIncludedNote(): ?NoteType
    {
        return $this->includedNote;
    }

    /**
     * @return NoteType
     */
    public function getIncludedNoteWithCreate(): NoteType
    {
        $this->includedNote = is_null($this->includedNote) ? new NoteType() : $this->includedNote;

        return $this->includedNote;
    }

    /**
     * @param NoteType|null $includedNote
     * @return self
     */
    public function setIncludedNote(?NoteType $includedNote = null): self
    {
        $this->includedNote = $includedNote;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetIncludedNote(): self
    {
        $this->includedNote = null;

        return $this;
    }
}
