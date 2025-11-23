<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ApplicationStatusCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CertificateType;
use horstoeko\invoicesuite\documents\models\ubl\cbc\OriginalJobID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PreviousJobID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ReferenceID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Remarks;

class CertificateOfOriginApplicationType
{
    use HandlesObjectFlags;

    /**
     * @var ReferenceID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ReferenceID")
     * @JMS\Expose
     * @JMS\SerializedName("ReferenceID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getReferenceID", setter="setReferenceID")
     */
    private $referenceID;

    /**
     * @var CertificateType|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CertificateType")
     * @JMS\Expose
     * @JMS\SerializedName("CertificateType")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCertificateType", setter="setCertificateType")
     */
    private $certificateType;

    /**
     * @var ApplicationStatusCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ApplicationStatusCode")
     * @JMS\Expose
     * @JMS\SerializedName("ApplicationStatusCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getApplicationStatusCode", setter="setApplicationStatusCode")
     */
    private $applicationStatusCode;

    /**
     * @var OriginalJobID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\OriginalJobID")
     * @JMS\Expose
     * @JMS\SerializedName("OriginalJobID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOriginalJobID", setter="setOriginalJobID")
     */
    private $originalJobID;

    /**
     * @var PreviousJobID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PreviousJobID")
     * @JMS\Expose
     * @JMS\SerializedName("PreviousJobID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPreviousJobID", setter="setPreviousJobID")
     */
    private $previousJobID;

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
     * @var Shipment|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Shipment")
     * @JMS\Expose
     * @JMS\SerializedName("Shipment")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getShipment", setter="setShipment")
     */
    private $shipment;

    /**
     * @var array<EndorserParty>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\EndorserParty>")
     * @JMS\Expose
     * @JMS\SerializedName("EndorserParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="EndorserParty", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getEndorserParty", setter="setEndorserParty")
     */
    private $endorserParty;

    /**
     * @var PreparationParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\PreparationParty")
     * @JMS\Expose
     * @JMS\SerializedName("PreparationParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPreparationParty", setter="setPreparationParty")
     */
    private $preparationParty;

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
     * @var ExporterParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ExporterParty")
     * @JMS\Expose
     * @JMS\SerializedName("ExporterParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getExporterParty", setter="setExporterParty")
     */
    private $exporterParty;

    /**
     * @var ImporterParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ImporterParty")
     * @JMS\Expose
     * @JMS\SerializedName("ImporterParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getImporterParty", setter="setImporterParty")
     */
    private $importerParty;

    /**
     * @var IssuingCountry|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\IssuingCountry")
     * @JMS\Expose
     * @JMS\SerializedName("IssuingCountry")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getIssuingCountry", setter="setIssuingCountry")
     */
    private $issuingCountry;

    /**
     * @var array<DocumentDistribution>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\DocumentDistribution>")
     * @JMS\Expose
     * @JMS\SerializedName("DocumentDistribution")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="DocumentDistribution", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getDocumentDistribution", setter="setDocumentDistribution")
     */
    private $documentDistribution;

    /**
     * @var array<SupportingDocumentReference>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\SupportingDocumentReference>")
     * @JMS\Expose
     * @JMS\SerializedName("SupportingDocumentReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SupportingDocumentReference", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSupportingDocumentReference", setter="setSupportingDocumentReference")
     */
    private $supportingDocumentReference;

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
     * @return ReferenceID|null
     */
    public function getReferenceID(): ?ReferenceID
    {
        return $this->referenceID;
    }

    /**
     * @return ReferenceID
     */
    public function getReferenceIDWithCreate(): ReferenceID
    {
        $this->referenceID = is_null($this->referenceID) ? new ReferenceID() : $this->referenceID;

        return $this->referenceID;
    }

    /**
     * @param ReferenceID|null $referenceID
     * @return self
     */
    public function setReferenceID(?ReferenceID $referenceID = null): self
    {
        $this->referenceID = $referenceID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetReferenceID(): self
    {
        $this->referenceID = null;

        return $this;
    }

    /**
     * @return CertificateType|null
     */
    public function getCertificateType(): ?CertificateType
    {
        return $this->certificateType;
    }

    /**
     * @return CertificateType
     */
    public function getCertificateTypeWithCreate(): CertificateType
    {
        $this->certificateType = is_null($this->certificateType) ? new CertificateType() : $this->certificateType;

        return $this->certificateType;
    }

    /**
     * @param CertificateType|null $certificateType
     * @return self
     */
    public function setCertificateType(?CertificateType $certificateType = null): self
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
     * @return ApplicationStatusCode|null
     */
    public function getApplicationStatusCode(): ?ApplicationStatusCode
    {
        return $this->applicationStatusCode;
    }

    /**
     * @return ApplicationStatusCode
     */
    public function getApplicationStatusCodeWithCreate(): ApplicationStatusCode
    {
        $this->applicationStatusCode = is_null($this->applicationStatusCode) ? new ApplicationStatusCode() : $this->applicationStatusCode;

        return $this->applicationStatusCode;
    }

    /**
     * @param ApplicationStatusCode|null $applicationStatusCode
     * @return self
     */
    public function setApplicationStatusCode(?ApplicationStatusCode $applicationStatusCode = null): self
    {
        $this->applicationStatusCode = $applicationStatusCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetApplicationStatusCode(): self
    {
        $this->applicationStatusCode = null;

        return $this;
    }

    /**
     * @return OriginalJobID|null
     */
    public function getOriginalJobID(): ?OriginalJobID
    {
        return $this->originalJobID;
    }

    /**
     * @return OriginalJobID
     */
    public function getOriginalJobIDWithCreate(): OriginalJobID
    {
        $this->originalJobID = is_null($this->originalJobID) ? new OriginalJobID() : $this->originalJobID;

        return $this->originalJobID;
    }

    /**
     * @param OriginalJobID|null $originalJobID
     * @return self
     */
    public function setOriginalJobID(?OriginalJobID $originalJobID = null): self
    {
        $this->originalJobID = $originalJobID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetOriginalJobID(): self
    {
        $this->originalJobID = null;

        return $this;
    }

    /**
     * @return PreviousJobID|null
     */
    public function getPreviousJobID(): ?PreviousJobID
    {
        return $this->previousJobID;
    }

    /**
     * @return PreviousJobID
     */
    public function getPreviousJobIDWithCreate(): PreviousJobID
    {
        $this->previousJobID = is_null($this->previousJobID) ? new PreviousJobID() : $this->previousJobID;

        return $this->previousJobID;
    }

    /**
     * @param PreviousJobID|null $previousJobID
     * @return self
     */
    public function setPreviousJobID(?PreviousJobID $previousJobID = null): self
    {
        $this->previousJobID = $previousJobID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPreviousJobID(): self
    {
        $this->previousJobID = null;

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
     * @return Shipment|null
     */
    public function getShipment(): ?Shipment
    {
        return $this->shipment;
    }

    /**
     * @return Shipment
     */
    public function getShipmentWithCreate(): Shipment
    {
        $this->shipment = is_null($this->shipment) ? new Shipment() : $this->shipment;

        return $this->shipment;
    }

    /**
     * @param Shipment|null $shipment
     * @return self
     */
    public function setShipment(?Shipment $shipment = null): self
    {
        $this->shipment = $shipment;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetShipment(): self
    {
        $this->shipment = null;

        return $this;
    }

    /**
     * @return array<EndorserParty>|null
     */
    public function getEndorserParty(): ?array
    {
        return $this->endorserParty;
    }

    /**
     * @param array<EndorserParty>|null $endorserParty
     * @return self
     */
    public function setEndorserParty(?array $endorserParty = null): self
    {
        $this->endorserParty = $endorserParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetEndorserParty(): self
    {
        $this->endorserParty = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearEndorserParty(): self
    {
        $this->endorserParty = [];

        return $this;
    }

    /**
     * @return EndorserParty|null
     */
    public function firstEndorserParty(): ?EndorserParty
    {
        $endorserParty = $this->endorserParty ?? [];
        $endorserParty = reset($endorserParty);

        if ($endorserParty === false) {
            return null;
        }

        return $endorserParty;
    }

    /**
     * @return EndorserParty|null
     */
    public function lastEndorserParty(): ?EndorserParty
    {
        $endorserParty = $this->endorserParty ?? [];
        $endorserParty = end($endorserParty);

        if ($endorserParty === false) {
            return null;
        }

        return $endorserParty;
    }

    /**
     * @param EndorserParty $endorserParty
     * @return self
     */
    public function addToEndorserParty(EndorserParty $endorserParty): self
    {
        $this->endorserParty[] = $endorserParty;

        return $this;
    }

    /**
     * @return EndorserParty
     */
    public function addToEndorserPartyWithCreate(): EndorserParty
    {
        $this->addToendorserParty($endorserParty = new EndorserParty());

        return $endorserParty;
    }

    /**
     * @param EndorserParty $endorserParty
     * @return self
     */
    public function addOnceToEndorserParty(EndorserParty $endorserParty): self
    {
        if (!is_array($this->endorserParty)) {
            $this->endorserParty = [];
        }

        $this->endorserParty[0] = $endorserParty;

        return $this;
    }

    /**
     * @return EndorserParty
     */
    public function addOnceToEndorserPartyWithCreate(): EndorserParty
    {
        if (!is_array($this->endorserParty)) {
            $this->endorserParty = [];
        }

        if ($this->endorserParty === []) {
            $this->addOnceToendorserParty(new EndorserParty());
        }

        return $this->endorserParty[0];
    }

    /**
     * @return PreparationParty|null
     */
    public function getPreparationParty(): ?PreparationParty
    {
        return $this->preparationParty;
    }

    /**
     * @return PreparationParty
     */
    public function getPreparationPartyWithCreate(): PreparationParty
    {
        $this->preparationParty = is_null($this->preparationParty) ? new PreparationParty() : $this->preparationParty;

        return $this->preparationParty;
    }

    /**
     * @param PreparationParty|null $preparationParty
     * @return self
     */
    public function setPreparationParty(?PreparationParty $preparationParty = null): self
    {
        $this->preparationParty = $preparationParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPreparationParty(): self
    {
        $this->preparationParty = null;

        return $this;
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
     * @return ExporterParty|null
     */
    public function getExporterParty(): ?ExporterParty
    {
        return $this->exporterParty;
    }

    /**
     * @return ExporterParty
     */
    public function getExporterPartyWithCreate(): ExporterParty
    {
        $this->exporterParty = is_null($this->exporterParty) ? new ExporterParty() : $this->exporterParty;

        return $this->exporterParty;
    }

    /**
     * @param ExporterParty|null $exporterParty
     * @return self
     */
    public function setExporterParty(?ExporterParty $exporterParty = null): self
    {
        $this->exporterParty = $exporterParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetExporterParty(): self
    {
        $this->exporterParty = null;

        return $this;
    }

    /**
     * @return ImporterParty|null
     */
    public function getImporterParty(): ?ImporterParty
    {
        return $this->importerParty;
    }

    /**
     * @return ImporterParty
     */
    public function getImporterPartyWithCreate(): ImporterParty
    {
        $this->importerParty = is_null($this->importerParty) ? new ImporterParty() : $this->importerParty;

        return $this->importerParty;
    }

    /**
     * @param ImporterParty|null $importerParty
     * @return self
     */
    public function setImporterParty(?ImporterParty $importerParty = null): self
    {
        $this->importerParty = $importerParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetImporterParty(): self
    {
        $this->importerParty = null;

        return $this;
    }

    /**
     * @return IssuingCountry|null
     */
    public function getIssuingCountry(): ?IssuingCountry
    {
        return $this->issuingCountry;
    }

    /**
     * @return IssuingCountry
     */
    public function getIssuingCountryWithCreate(): IssuingCountry
    {
        $this->issuingCountry = is_null($this->issuingCountry) ? new IssuingCountry() : $this->issuingCountry;

        return $this->issuingCountry;
    }

    /**
     * @param IssuingCountry|null $issuingCountry
     * @return self
     */
    public function setIssuingCountry(?IssuingCountry $issuingCountry = null): self
    {
        $this->issuingCountry = $issuingCountry;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetIssuingCountry(): self
    {
        $this->issuingCountry = null;

        return $this;
    }

    /**
     * @return array<DocumentDistribution>|null
     */
    public function getDocumentDistribution(): ?array
    {
        return $this->documentDistribution;
    }

    /**
     * @param array<DocumentDistribution>|null $documentDistribution
     * @return self
     */
    public function setDocumentDistribution(?array $documentDistribution = null): self
    {
        $this->documentDistribution = $documentDistribution;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDocumentDistribution(): self
    {
        $this->documentDistribution = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearDocumentDistribution(): self
    {
        $this->documentDistribution = [];

        return $this;
    }

    /**
     * @return DocumentDistribution|null
     */
    public function firstDocumentDistribution(): ?DocumentDistribution
    {
        $documentDistribution = $this->documentDistribution ?? [];
        $documentDistribution = reset($documentDistribution);

        if ($documentDistribution === false) {
            return null;
        }

        return $documentDistribution;
    }

    /**
     * @return DocumentDistribution|null
     */
    public function lastDocumentDistribution(): ?DocumentDistribution
    {
        $documentDistribution = $this->documentDistribution ?? [];
        $documentDistribution = end($documentDistribution);

        if ($documentDistribution === false) {
            return null;
        }

        return $documentDistribution;
    }

    /**
     * @param DocumentDistribution $documentDistribution
     * @return self
     */
    public function addToDocumentDistribution(DocumentDistribution $documentDistribution): self
    {
        $this->documentDistribution[] = $documentDistribution;

        return $this;
    }

    /**
     * @return DocumentDistribution
     */
    public function addToDocumentDistributionWithCreate(): DocumentDistribution
    {
        $this->addTodocumentDistribution($documentDistribution = new DocumentDistribution());

        return $documentDistribution;
    }

    /**
     * @param DocumentDistribution $documentDistribution
     * @return self
     */
    public function addOnceToDocumentDistribution(DocumentDistribution $documentDistribution): self
    {
        if (!is_array($this->documentDistribution)) {
            $this->documentDistribution = [];
        }

        $this->documentDistribution[0] = $documentDistribution;

        return $this;
    }

    /**
     * @return DocumentDistribution
     */
    public function addOnceToDocumentDistributionWithCreate(): DocumentDistribution
    {
        if (!is_array($this->documentDistribution)) {
            $this->documentDistribution = [];
        }

        if ($this->documentDistribution === []) {
            $this->addOnceTodocumentDistribution(new DocumentDistribution());
        }

        return $this->documentDistribution[0];
    }

    /**
     * @return array<SupportingDocumentReference>|null
     */
    public function getSupportingDocumentReference(): ?array
    {
        return $this->supportingDocumentReference;
    }

    /**
     * @param array<SupportingDocumentReference>|null $supportingDocumentReference
     * @return self
     */
    public function setSupportingDocumentReference(?array $supportingDocumentReference = null): self
    {
        $this->supportingDocumentReference = $supportingDocumentReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSupportingDocumentReference(): self
    {
        $this->supportingDocumentReference = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearSupportingDocumentReference(): self
    {
        $this->supportingDocumentReference = [];

        return $this;
    }

    /**
     * @return SupportingDocumentReference|null
     */
    public function firstSupportingDocumentReference(): ?SupportingDocumentReference
    {
        $supportingDocumentReference = $this->supportingDocumentReference ?? [];
        $supportingDocumentReference = reset($supportingDocumentReference);

        if ($supportingDocumentReference === false) {
            return null;
        }

        return $supportingDocumentReference;
    }

    /**
     * @return SupportingDocumentReference|null
     */
    public function lastSupportingDocumentReference(): ?SupportingDocumentReference
    {
        $supportingDocumentReference = $this->supportingDocumentReference ?? [];
        $supportingDocumentReference = end($supportingDocumentReference);

        if ($supportingDocumentReference === false) {
            return null;
        }

        return $supportingDocumentReference;
    }

    /**
     * @param SupportingDocumentReference $supportingDocumentReference
     * @return self
     */
    public function addToSupportingDocumentReference(SupportingDocumentReference $supportingDocumentReference): self
    {
        $this->supportingDocumentReference[] = $supportingDocumentReference;

        return $this;
    }

    /**
     * @return SupportingDocumentReference
     */
    public function addToSupportingDocumentReferenceWithCreate(): SupportingDocumentReference
    {
        $this->addTosupportingDocumentReference($supportingDocumentReference = new SupportingDocumentReference());

        return $supportingDocumentReference;
    }

    /**
     * @param SupportingDocumentReference $supportingDocumentReference
     * @return self
     */
    public function addOnceToSupportingDocumentReference(
        SupportingDocumentReference $supportingDocumentReference,
    ): self {
        if (!is_array($this->supportingDocumentReference)) {
            $this->supportingDocumentReference = [];
        }

        $this->supportingDocumentReference[0] = $supportingDocumentReference;

        return $this;
    }

    /**
     * @return SupportingDocumentReference
     */
    public function addOnceToSupportingDocumentReferenceWithCreate(): SupportingDocumentReference
    {
        if (!is_array($this->supportingDocumentReference)) {
            $this->supportingDocumentReference = [];
        }

        if ($this->supportingDocumentReference === []) {
            $this->addOnceTosupportingDocumentReference(new SupportingDocumentReference());
        }

        return $this->supportingDocumentReference[0];
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
