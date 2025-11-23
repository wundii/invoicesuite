<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CanonicalizationMethod;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Note;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SignatureMethod;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ValidatorID;

class SignatureType
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
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("ValidationDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getValidationDate", setter="setValidationDate")
     */
    private $validationDate;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("ValidationTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getValidationTime", setter="setValidationTime")
     */
    private $validationTime;

    /**
     * @var ValidatorID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ValidatorID")
     * @JMS\Expose
     * @JMS\SerializedName("ValidatorID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getValidatorID", setter="setValidatorID")
     */
    private $validatorID;

    /**
     * @var CanonicalizationMethod|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CanonicalizationMethod")
     * @JMS\Expose
     * @JMS\SerializedName("CanonicalizationMethod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCanonicalizationMethod", setter="setCanonicalizationMethod")
     */
    private $canonicalizationMethod;

    /**
     * @var SignatureMethod|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\SignatureMethod")
     * @JMS\Expose
     * @JMS\SerializedName("SignatureMethod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSignatureMethod", setter="setSignatureMethod")
     */
    private $signatureMethod;

    /**
     * @var SignatoryParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\SignatoryParty")
     * @JMS\Expose
     * @JMS\SerializedName("SignatoryParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSignatoryParty", setter="setSignatoryParty")
     */
    private $signatoryParty;

    /**
     * @var DigitalSignatureAttachment|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\DigitalSignatureAttachment")
     * @JMS\Expose
     * @JMS\SerializedName("DigitalSignatureAttachment")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDigitalSignatureAttachment", setter="setDigitalSignatureAttachment")
     */
    private $digitalSignatureAttachment;

    /**
     * @var OriginalDocumentReference|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\OriginalDocumentReference")
     * @JMS\Expose
     * @JMS\SerializedName("OriginalDocumentReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOriginalDocumentReference", setter="setOriginalDocumentReference")
     */
    private $originalDocumentReference;

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
     * @return DateTimeInterface|null
     */
    public function getValidationDate(): ?DateTimeInterface
    {
        return $this->validationDate;
    }

    /**
     * @param DateTimeInterface|null $validationDate
     * @return self
     */
    public function setValidationDate(?DateTimeInterface $validationDate = null): self
    {
        $this->validationDate = $validationDate;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetValidationDate(): self
    {
        $this->validationDate = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getValidationTime(): ?DateTimeInterface
    {
        return $this->validationTime;
    }

    /**
     * @param DateTimeInterface|null $validationTime
     * @return self
     */
    public function setValidationTime(?DateTimeInterface $validationTime = null): self
    {
        $this->validationTime = $validationTime;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetValidationTime(): self
    {
        $this->validationTime = null;

        return $this;
    }

    /**
     * @return ValidatorID|null
     */
    public function getValidatorID(): ?ValidatorID
    {
        return $this->validatorID;
    }

    /**
     * @return ValidatorID
     */
    public function getValidatorIDWithCreate(): ValidatorID
    {
        $this->validatorID = is_null($this->validatorID) ? new ValidatorID() : $this->validatorID;

        return $this->validatorID;
    }

    /**
     * @param ValidatorID|null $validatorID
     * @return self
     */
    public function setValidatorID(?ValidatorID $validatorID = null): self
    {
        $this->validatorID = $validatorID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetValidatorID(): self
    {
        $this->validatorID = null;

        return $this;
    }

    /**
     * @return CanonicalizationMethod|null
     */
    public function getCanonicalizationMethod(): ?CanonicalizationMethod
    {
        return $this->canonicalizationMethod;
    }

    /**
     * @return CanonicalizationMethod
     */
    public function getCanonicalizationMethodWithCreate(): CanonicalizationMethod
    {
        $this->canonicalizationMethod = is_null($this->canonicalizationMethod) ? new CanonicalizationMethod() : $this->canonicalizationMethod;

        return $this->canonicalizationMethod;
    }

    /**
     * @param CanonicalizationMethod|null $canonicalizationMethod
     * @return self
     */
    public function setCanonicalizationMethod(?CanonicalizationMethod $canonicalizationMethod = null): self
    {
        $this->canonicalizationMethod = $canonicalizationMethod;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCanonicalizationMethod(): self
    {
        $this->canonicalizationMethod = null;

        return $this;
    }

    /**
     * @return SignatureMethod|null
     */
    public function getSignatureMethod(): ?SignatureMethod
    {
        return $this->signatureMethod;
    }

    /**
     * @return SignatureMethod
     */
    public function getSignatureMethodWithCreate(): SignatureMethod
    {
        $this->signatureMethod = is_null($this->signatureMethod) ? new SignatureMethod() : $this->signatureMethod;

        return $this->signatureMethod;
    }

    /**
     * @param SignatureMethod|null $signatureMethod
     * @return self
     */
    public function setSignatureMethod(?SignatureMethod $signatureMethod = null): self
    {
        $this->signatureMethod = $signatureMethod;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSignatureMethod(): self
    {
        $this->signatureMethod = null;

        return $this;
    }

    /**
     * @return SignatoryParty|null
     */
    public function getSignatoryParty(): ?SignatoryParty
    {
        return $this->signatoryParty;
    }

    /**
     * @return SignatoryParty
     */
    public function getSignatoryPartyWithCreate(): SignatoryParty
    {
        $this->signatoryParty = is_null($this->signatoryParty) ? new SignatoryParty() : $this->signatoryParty;

        return $this->signatoryParty;
    }

    /**
     * @param SignatoryParty|null $signatoryParty
     * @return self
     */
    public function setSignatoryParty(?SignatoryParty $signatoryParty = null): self
    {
        $this->signatoryParty = $signatoryParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSignatoryParty(): self
    {
        $this->signatoryParty = null;

        return $this;
    }

    /**
     * @return DigitalSignatureAttachment|null
     */
    public function getDigitalSignatureAttachment(): ?DigitalSignatureAttachment
    {
        return $this->digitalSignatureAttachment;
    }

    /**
     * @return DigitalSignatureAttachment
     */
    public function getDigitalSignatureAttachmentWithCreate(): DigitalSignatureAttachment
    {
        $this->digitalSignatureAttachment = is_null($this->digitalSignatureAttachment) ? new DigitalSignatureAttachment() : $this->digitalSignatureAttachment;

        return $this->digitalSignatureAttachment;
    }

    /**
     * @param DigitalSignatureAttachment|null $digitalSignatureAttachment
     * @return self
     */
    public function setDigitalSignatureAttachment(
        ?DigitalSignatureAttachment $digitalSignatureAttachment = null,
    ): self {
        $this->digitalSignatureAttachment = $digitalSignatureAttachment;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDigitalSignatureAttachment(): self
    {
        $this->digitalSignatureAttachment = null;

        return $this;
    }

    /**
     * @return OriginalDocumentReference|null
     */
    public function getOriginalDocumentReference(): ?OriginalDocumentReference
    {
        return $this->originalDocumentReference;
    }

    /**
     * @return OriginalDocumentReference
     */
    public function getOriginalDocumentReferenceWithCreate(): OriginalDocumentReference
    {
        $this->originalDocumentReference = is_null($this->originalDocumentReference) ? new OriginalDocumentReference() : $this->originalDocumentReference;

        return $this->originalDocumentReference;
    }

    /**
     * @param OriginalDocumentReference|null $originalDocumentReference
     * @return self
     */
    public function setOriginalDocumentReference(?OriginalDocumentReference $originalDocumentReference = null): self
    {
        $this->originalDocumentReference = $originalDocumentReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetOriginalDocumentReference(): self
    {
        $this->originalDocumentReference = null;

        return $this;
    }
}
