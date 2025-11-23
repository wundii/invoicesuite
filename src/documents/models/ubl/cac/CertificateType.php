<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CertificateType as CertificateType1;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CertificateTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Remarks;

class CertificateType
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
     * @var CertificateTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CertificateTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("CertificateTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCertificateTypeCode", setter="setCertificateTypeCode")
     */
    private $certificateTypeCode;

    /**
     * @var \horstoeko\invoicesuite\documents\models\ubl\cbc\CertificateType|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CertificateType")
     * @JMS\Expose
     * @JMS\SerializedName("CertificateType")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCertificateType", setter="setCertificateType")
     */
    private $certificateType;

    /**
     * @var array<Remarks>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Remarks>")
     * @JMS\Expose
     * @JMS\SerializedName("Remarks")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Remarks", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getRemarks", setter="setRemarks")
     */
    private $remarks;

    /**
     * @var IssuerParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\IssuerParty")
     * @JMS\Expose
     * @JMS\SerializedName("IssuerParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getIssuerParty", setter="setIssuerParty")
     */
    private $issuerParty;

    /**
     * @var array<DocumentReference>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\DocumentReference>")
     * @JMS\Expose
     * @JMS\SerializedName("DocumentReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="DocumentReference", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getDocumentReference", setter="setDocumentReference")
     */
    private $documentReference;

    /**
     * @var array<Signature>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\Signature>")
     * @JMS\Expose
     * @JMS\SerializedName("Signature")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Signature", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSignature", setter="setSignature")
     */
    private $signature;

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
     * @return CertificateTypeCode|null
     */
    public function getCertificateTypeCode(): ?CertificateTypeCode
    {
        return $this->certificateTypeCode;
    }

    /**
     * @return CertificateTypeCode
     */
    public function getCertificateTypeCodeWithCreate(): CertificateTypeCode
    {
        $this->certificateTypeCode = is_null($this->certificateTypeCode) ? new CertificateTypeCode() : $this->certificateTypeCode;

        return $this->certificateTypeCode;
    }

    /**
     * @param CertificateTypeCode|null $certificateTypeCode
     * @return self
     */
    public function setCertificateTypeCode(?CertificateTypeCode $certificateTypeCode = null): self
    {
        $this->certificateTypeCode = $certificateTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCertificateTypeCode(): self
    {
        $this->certificateTypeCode = null;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\documents\models\ubl\cbc\CertificateType|null
     */
    public function getCertificateType(): ?CertificateType1
    {
        return $this->certificateType;
    }

    /**
     * @return \horstoeko\invoicesuite\documents\models\ubl\cbc\CertificateType
     */
    public function getCertificateTypeWithCreate(): CertificateType1
    {
        $this->certificateType = is_null($this->certificateType) ? new CertificateType() : $this->certificateType;

        return $this->certificateType;
    }

    /**
     * @param \horstoeko\invoicesuite\documents\models\ubl\cbc\CertificateType|null $certificateType
     * @return self
     */
    public function setCertificateType(?CertificateType1 $certificateType = null): self
    {
        $this->certificateType = $certificateType;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCertificateType(): self
    {
        $this->certificateType = null;

        return $this;
    }

    /**
     * @return array<Remarks>|null
     */
    public function getRemarks(): ?array
    {
        return $this->remarks;
    }

    /**
     * @param array<Remarks>|null $remarks
     * @return self
     */
    public function setRemarks(?array $remarks = null): self
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetRemarks(): self
    {
        $this->remarks = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearRemarks(): self
    {
        $this->remarks = [];

        return $this;
    }

    /**
     * @return Remarks|null
     */
    public function firstRemarks(): ?Remarks
    {
        $remarks = $this->remarks ?? [];
        $remarks = reset($remarks);

        if ($remarks === false) {
            return null;
        }

        return $remarks;
    }

    /**
     * @return Remarks|null
     */
    public function lastRemarks(): ?Remarks
    {
        $remarks = $this->remarks ?? [];
        $remarks = end($remarks);

        if ($remarks === false) {
            return null;
        }

        return $remarks;
    }

    /**
     * @param Remarks $remarks
     * @return self
     */
    public function addToRemarks(Remarks $remarks): self
    {
        $this->remarks[] = $remarks;

        return $this;
    }

    /**
     * @return Remarks
     */
    public function addToRemarksWithCreate(): Remarks
    {
        $this->addToremarks($remarks = new Remarks());

        return $remarks;
    }

    /**
     * @param Remarks $remarks
     * @return self
     */
    public function addOnceToRemarks(Remarks $remarks): self
    {
        if (!is_array($this->remarks)) {
            $this->remarks = [];
        }

        $this->remarks[0] = $remarks;

        return $this;
    }

    /**
     * @return Remarks
     */
    public function addOnceToRemarksWithCreate(): Remarks
    {
        if (!is_array($this->remarks)) {
            $this->remarks = [];
        }

        if ($this->remarks === []) {
            $this->addOnceToremarks(new Remarks());
        }

        return $this->remarks[0];
    }

    /**
     * @return IssuerParty|null
     */
    public function getIssuerParty(): ?IssuerParty
    {
        return $this->issuerParty;
    }

    /**
     * @return IssuerParty
     */
    public function getIssuerPartyWithCreate(): IssuerParty
    {
        $this->issuerParty = is_null($this->issuerParty) ? new IssuerParty() : $this->issuerParty;

        return $this->issuerParty;
    }

    /**
     * @param IssuerParty|null $issuerParty
     * @return self
     */
    public function setIssuerParty(?IssuerParty $issuerParty = null): self
    {
        $this->issuerParty = $issuerParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetIssuerParty(): self
    {
        $this->issuerParty = null;

        return $this;
    }

    /**
     * @return array<DocumentReference>|null
     */
    public function getDocumentReference(): ?array
    {
        return $this->documentReference;
    }

    /**
     * @param array<DocumentReference>|null $documentReference
     * @return self
     */
    public function setDocumentReference(?array $documentReference = null): self
    {
        $this->documentReference = $documentReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDocumentReference(): self
    {
        $this->documentReference = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearDocumentReference(): self
    {
        $this->documentReference = [];

        return $this;
    }

    /**
     * @return DocumentReference|null
     */
    public function firstDocumentReference(): ?DocumentReference
    {
        $documentReference = $this->documentReference ?? [];
        $documentReference = reset($documentReference);

        if ($documentReference === false) {
            return null;
        }

        return $documentReference;
    }

    /**
     * @return DocumentReference|null
     */
    public function lastDocumentReference(): ?DocumentReference
    {
        $documentReference = $this->documentReference ?? [];
        $documentReference = end($documentReference);

        if ($documentReference === false) {
            return null;
        }

        return $documentReference;
    }

    /**
     * @param DocumentReference $documentReference
     * @return self
     */
    public function addToDocumentReference(DocumentReference $documentReference): self
    {
        $this->documentReference[] = $documentReference;

        return $this;
    }

    /**
     * @return DocumentReference
     */
    public function addToDocumentReferenceWithCreate(): DocumentReference
    {
        $this->addTodocumentReference($documentReference = new DocumentReference());

        return $documentReference;
    }

    /**
     * @param DocumentReference $documentReference
     * @return self
     */
    public function addOnceToDocumentReference(DocumentReference $documentReference): self
    {
        if (!is_array($this->documentReference)) {
            $this->documentReference = [];
        }

        $this->documentReference[0] = $documentReference;

        return $this;
    }

    /**
     * @return DocumentReference
     */
    public function addOnceToDocumentReferenceWithCreate(): DocumentReference
    {
        if (!is_array($this->documentReference)) {
            $this->documentReference = [];
        }

        if ($this->documentReference === []) {
            $this->addOnceTodocumentReference(new DocumentReference());
        }

        return $this->documentReference[0];
    }

    /**
     * @return array<Signature>|null
     */
    public function getSignature(): ?array
    {
        return $this->signature;
    }

    /**
     * @param array<Signature>|null $signature
     * @return self
     */
    public function setSignature(?array $signature = null): self
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSignature(): self
    {
        $this->signature = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearSignature(): self
    {
        $this->signature = [];

        return $this;
    }

    /**
     * @return Signature|null
     */
    public function firstSignature(): ?Signature
    {
        $signature = $this->signature ?? [];
        $signature = reset($signature);

        if ($signature === false) {
            return null;
        }

        return $signature;
    }

    /**
     * @return Signature|null
     */
    public function lastSignature(): ?Signature
    {
        $signature = $this->signature ?? [];
        $signature = end($signature);

        if ($signature === false) {
            return null;
        }

        return $signature;
    }

    /**
     * @param Signature $signature
     * @return self
     */
    public function addToSignature(Signature $signature): self
    {
        $this->signature[] = $signature;

        return $this;
    }

    /**
     * @return Signature
     */
    public function addToSignatureWithCreate(): Signature
    {
        $this->addTosignature($signature = new Signature());

        return $signature;
    }

    /**
     * @param Signature $signature
     * @return self
     */
    public function addOnceToSignature(Signature $signature): self
    {
        if (!is_array($this->signature)) {
            $this->signature = [];
        }

        $this->signature[0] = $signature;

        return $this;
    }

    /**
     * @return Signature
     */
    public function addOnceToSignatureWithCreate(): Signature
    {
        if (!is_array($this->signature)) {
            $this->signature = [];
        }

        if ($this->signature === []) {
            $this->addOnceTosignature(new Signature());
        }

        return $this->signature[0];
    }
}
