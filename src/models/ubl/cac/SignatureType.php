<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\models\ubl\cbc\CanonicalizationMethod;
use horstoeko\invoicesuite\models\ubl\cbc\ID;
use horstoeko\invoicesuite\models\ubl\cbc\Note;
use horstoeko\invoicesuite\models\ubl\cbc\SignatureMethod;
use horstoeko\invoicesuite\models\ubl\cbc\ValidatorID;

class SignatureType
{
    use HandlesObjectFlags;

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
     * @var \DateTimeInterface
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("ValidationDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getValidationDate", setter="setValidationDate")
     */
    private $validationDate;

    /**
     * @var \DateTimeInterface
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("ValidationTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getValidationTime", setter="setValidationTime")
     */
    private $validationTime;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ValidatorID
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ValidatorID")
     * @JMS\Expose
     * @JMS\SerializedName("ValidatorID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getValidatorID", setter="setValidatorID")
     */
    private $validatorID;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\CanonicalizationMethod
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\CanonicalizationMethod")
     * @JMS\Expose
     * @JMS\SerializedName("CanonicalizationMethod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCanonicalizationMethod", setter="setCanonicalizationMethod")
     */
    private $canonicalizationMethod;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\SignatureMethod
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\SignatureMethod")
     * @JMS\Expose
     * @JMS\SerializedName("SignatureMethod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSignatureMethod", setter="setSignatureMethod")
     */
    private $signatureMethod;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\SignatoryParty
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\SignatoryParty")
     * @JMS\Expose
     * @JMS\SerializedName("SignatoryParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSignatoryParty", setter="setSignatoryParty")
     */
    private $signatoryParty;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\DigitalSignatureAttachment
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\DigitalSignatureAttachment")
     * @JMS\Expose
     * @JMS\SerializedName("DigitalSignatureAttachment")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDigitalSignatureAttachment", setter="setDigitalSignatureAttachment")
     */
    private $digitalSignatureAttachment;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\OriginalDocumentReference
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\OriginalDocumentReference")
     * @JMS\Expose
     * @JMS\SerializedName("OriginalDocumentReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOriginalDocumentReference", setter="setOriginalDocumentReference")
     */
    private $originalDocumentReference;

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
        if (!is_array($this->note)) {
            $this->note = [];
        }

        $this->note[0] = $note;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Note
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
     * @return \DateTimeInterface|null
     */
    public function getValidationDate(): ?\DateTimeInterface
    {
        return $this->validationDate;
    }

    /**
     * @param \DateTimeInterface $validationDate
     * @return self
     */
    public function setValidationDate(\DateTimeInterface $validationDate): self
    {
        $this->validationDate = $validationDate;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getValidationTime(): ?\DateTimeInterface
    {
        return $this->validationTime;
    }

    /**
     * @param \DateTimeInterface $validationTime
     * @return self
     */
    public function setValidationTime(\DateTimeInterface $validationTime): self
    {
        $this->validationTime = $validationTime;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ValidatorID|null
     */
    public function getValidatorID(): ?ValidatorID
    {
        return $this->validatorID;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ValidatorID
     */
    public function getValidatorIDWithCreate(): ValidatorID
    {
        $this->validatorID = is_null($this->validatorID) ? new ValidatorID() : $this->validatorID;

        return $this->validatorID;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ValidatorID $validatorID
     * @return self
     */
    public function setValidatorID(ValidatorID $validatorID): self
    {
        $this->validatorID = $validatorID;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\CanonicalizationMethod|null
     */
    public function getCanonicalizationMethod(): ?CanonicalizationMethod
    {
        return $this->canonicalizationMethod;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\CanonicalizationMethod
     */
    public function getCanonicalizationMethodWithCreate(): CanonicalizationMethod
    {
        $this->canonicalizationMethod = is_null($this->canonicalizationMethod) ? new CanonicalizationMethod() : $this->canonicalizationMethod;

        return $this->canonicalizationMethod;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\CanonicalizationMethod $canonicalizationMethod
     * @return self
     */
    public function setCanonicalizationMethod(CanonicalizationMethod $canonicalizationMethod): self
    {
        $this->canonicalizationMethod = $canonicalizationMethod;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\SignatureMethod|null
     */
    public function getSignatureMethod(): ?SignatureMethod
    {
        return $this->signatureMethod;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\SignatureMethod
     */
    public function getSignatureMethodWithCreate(): SignatureMethod
    {
        $this->signatureMethod = is_null($this->signatureMethod) ? new SignatureMethod() : $this->signatureMethod;

        return $this->signatureMethod;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\SignatureMethod $signatureMethod
     * @return self
     */
    public function setSignatureMethod(SignatureMethod $signatureMethod): self
    {
        $this->signatureMethod = $signatureMethod;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\SignatoryParty|null
     */
    public function getSignatoryParty(): ?SignatoryParty
    {
        return $this->signatoryParty;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\SignatoryParty
     */
    public function getSignatoryPartyWithCreate(): SignatoryParty
    {
        $this->signatoryParty = is_null($this->signatoryParty) ? new SignatoryParty() : $this->signatoryParty;

        return $this->signatoryParty;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\SignatoryParty $signatoryParty
     * @return self
     */
    public function setSignatoryParty(SignatoryParty $signatoryParty): self
    {
        $this->signatoryParty = $signatoryParty;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\DigitalSignatureAttachment|null
     */
    public function getDigitalSignatureAttachment(): ?DigitalSignatureAttachment
    {
        return $this->digitalSignatureAttachment;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\DigitalSignatureAttachment
     */
    public function getDigitalSignatureAttachmentWithCreate(): DigitalSignatureAttachment
    {
        $this->digitalSignatureAttachment = is_null($this->digitalSignatureAttachment) ? new DigitalSignatureAttachment() : $this->digitalSignatureAttachment;

        return $this->digitalSignatureAttachment;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\DigitalSignatureAttachment $digitalSignatureAttachment
     * @return self
     */
    public function setDigitalSignatureAttachment(DigitalSignatureAttachment $digitalSignatureAttachment): self
    {
        $this->digitalSignatureAttachment = $digitalSignatureAttachment;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\OriginalDocumentReference|null
     */
    public function getOriginalDocumentReference(): ?OriginalDocumentReference
    {
        return $this->originalDocumentReference;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\OriginalDocumentReference
     */
    public function getOriginalDocumentReferenceWithCreate(): OriginalDocumentReference
    {
        $this->originalDocumentReference = is_null($this->originalDocumentReference) ? new OriginalDocumentReference() : $this->originalDocumentReference;

        return $this->originalDocumentReference;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\OriginalDocumentReference $originalDocumentReference
     * @return self
     */
    public function setOriginalDocumentReference(OriginalDocumentReference $originalDocumentReference): self
    {
        $this->originalDocumentReference = $originalDocumentReference;

        return $this;
    }
}
