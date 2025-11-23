<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\OpenTenderID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TenderEnvelopeID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TenderEnvelopeTypeCode;

class TenderPreparationType
{
    use HandlesObjectFlags;

    /**
     * @var TenderEnvelopeID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TenderEnvelopeID")
     * @JMS\Expose
     * @JMS\SerializedName("TenderEnvelopeID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTenderEnvelopeID", setter="setTenderEnvelopeID")
     */
    private $tenderEnvelopeID;

    /**
     * @var TenderEnvelopeTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TenderEnvelopeTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("TenderEnvelopeTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTenderEnvelopeTypeCode", setter="setTenderEnvelopeTypeCode")
     */
    private $tenderEnvelopeTypeCode;

    /**
     * @var array<Description>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Description>")
     * @JMS\Expose
     * @JMS\SerializedName("Description")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Description", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getDescription", setter="setDescription")
     */
    private $description;

    /**
     * @var OpenTenderID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\OpenTenderID")
     * @JMS\Expose
     * @JMS\SerializedName("OpenTenderID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOpenTenderID", setter="setOpenTenderID")
     */
    private $openTenderID;

    /**
     * @var array<ProcurementProjectLot>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ProcurementProjectLot>")
     * @JMS\Expose
     * @JMS\SerializedName("ProcurementProjectLot")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ProcurementProjectLot", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getProcurementProjectLot", setter="setProcurementProjectLot")
     */
    private $procurementProjectLot;

    /**
     * @var array<DocumentTenderRequirement>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\DocumentTenderRequirement>")
     * @JMS\Expose
     * @JMS\SerializedName("DocumentTenderRequirement")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="DocumentTenderRequirement", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getDocumentTenderRequirement", setter="setDocumentTenderRequirement")
     */
    private $documentTenderRequirement;

    /**
     * @return TenderEnvelopeID|null
     */
    public function getTenderEnvelopeID(): ?TenderEnvelopeID
    {
        return $this->tenderEnvelopeID;
    }

    /**
     * @return TenderEnvelopeID
     */
    public function getTenderEnvelopeIDWithCreate(): TenderEnvelopeID
    {
        $this->tenderEnvelopeID = is_null($this->tenderEnvelopeID) ? new TenderEnvelopeID() : $this->tenderEnvelopeID;

        return $this->tenderEnvelopeID;
    }

    /**
     * @param TenderEnvelopeID|null $tenderEnvelopeID
     * @return self
     */
    public function setTenderEnvelopeID(?TenderEnvelopeID $tenderEnvelopeID = null): self
    {
        $this->tenderEnvelopeID = $tenderEnvelopeID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTenderEnvelopeID(): self
    {
        $this->tenderEnvelopeID = null;

        return $this;
    }

    /**
     * @return TenderEnvelopeTypeCode|null
     */
    public function getTenderEnvelopeTypeCode(): ?TenderEnvelopeTypeCode
    {
        return $this->tenderEnvelopeTypeCode;
    }

    /**
     * @return TenderEnvelopeTypeCode
     */
    public function getTenderEnvelopeTypeCodeWithCreate(): TenderEnvelopeTypeCode
    {
        $this->tenderEnvelopeTypeCode = is_null($this->tenderEnvelopeTypeCode) ? new TenderEnvelopeTypeCode() : $this->tenderEnvelopeTypeCode;

        return $this->tenderEnvelopeTypeCode;
    }

    /**
     * @param TenderEnvelopeTypeCode|null $tenderEnvelopeTypeCode
     * @return self
     */
    public function setTenderEnvelopeTypeCode(?TenderEnvelopeTypeCode $tenderEnvelopeTypeCode = null): self
    {
        $this->tenderEnvelopeTypeCode = $tenderEnvelopeTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTenderEnvelopeTypeCode(): self
    {
        $this->tenderEnvelopeTypeCode = null;

        return $this;
    }

    /**
     * @return array<Description>|null
     */
    public function getDescription(): ?array
    {
        return $this->description;
    }

    /**
     * @param array<Description>|null $description
     * @return self
     */
    public function setDescription(?array $description = null): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDescription(): self
    {
        $this->description = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearDescription(): self
    {
        $this->description = [];

        return $this;
    }

    /**
     * @return Description|null
     */
    public function firstDescription(): ?Description
    {
        $description = $this->description ?? [];
        $description = reset($description);

        if ($description === false) {
            return null;
        }

        return $description;
    }

    /**
     * @return Description|null
     */
    public function lastDescription(): ?Description
    {
        $description = $this->description ?? [];
        $description = end($description);

        if ($description === false) {
            return null;
        }

        return $description;
    }

    /**
     * @param Description $description
     * @return self
     */
    public function addToDescription(Description $description): self
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * @return Description
     */
    public function addToDescriptionWithCreate(): Description
    {
        $this->addTodescription($description = new Description());

        return $description;
    }

    /**
     * @param Description $description
     * @return self
     */
    public function addOnceToDescription(Description $description): self
    {
        if (!is_array($this->description)) {
            $this->description = [];
        }

        $this->description[0] = $description;

        return $this;
    }

    /**
     * @return Description
     */
    public function addOnceToDescriptionWithCreate(): Description
    {
        if (!is_array($this->description)) {
            $this->description = [];
        }

        if ($this->description === []) {
            $this->addOnceTodescription(new Description());
        }

        return $this->description[0];
    }

    /**
     * @return OpenTenderID|null
     */
    public function getOpenTenderID(): ?OpenTenderID
    {
        return $this->openTenderID;
    }

    /**
     * @return OpenTenderID
     */
    public function getOpenTenderIDWithCreate(): OpenTenderID
    {
        $this->openTenderID = is_null($this->openTenderID) ? new OpenTenderID() : $this->openTenderID;

        return $this->openTenderID;
    }

    /**
     * @param OpenTenderID|null $openTenderID
     * @return self
     */
    public function setOpenTenderID(?OpenTenderID $openTenderID = null): self
    {
        $this->openTenderID = $openTenderID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetOpenTenderID(): self
    {
        $this->openTenderID = null;

        return $this;
    }

    /**
     * @return array<ProcurementProjectLot>|null
     */
    public function getProcurementProjectLot(): ?array
    {
        return $this->procurementProjectLot;
    }

    /**
     * @param array<ProcurementProjectLot>|null $procurementProjectLot
     * @return self
     */
    public function setProcurementProjectLot(?array $procurementProjectLot = null): self
    {
        $this->procurementProjectLot = $procurementProjectLot;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetProcurementProjectLot(): self
    {
        $this->procurementProjectLot = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearProcurementProjectLot(): self
    {
        $this->procurementProjectLot = [];

        return $this;
    }

    /**
     * @return ProcurementProjectLot|null
     */
    public function firstProcurementProjectLot(): ?ProcurementProjectLot
    {
        $procurementProjectLot = $this->procurementProjectLot ?? [];
        $procurementProjectLot = reset($procurementProjectLot);

        if ($procurementProjectLot === false) {
            return null;
        }

        return $procurementProjectLot;
    }

    /**
     * @return ProcurementProjectLot|null
     */
    public function lastProcurementProjectLot(): ?ProcurementProjectLot
    {
        $procurementProjectLot = $this->procurementProjectLot ?? [];
        $procurementProjectLot = end($procurementProjectLot);

        if ($procurementProjectLot === false) {
            return null;
        }

        return $procurementProjectLot;
    }

    /**
     * @param ProcurementProjectLot $procurementProjectLot
     * @return self
     */
    public function addToProcurementProjectLot(ProcurementProjectLot $procurementProjectLot): self
    {
        $this->procurementProjectLot[] = $procurementProjectLot;

        return $this;
    }

    /**
     * @return ProcurementProjectLot
     */
    public function addToProcurementProjectLotWithCreate(): ProcurementProjectLot
    {
        $this->addToprocurementProjectLot($procurementProjectLot = new ProcurementProjectLot());

        return $procurementProjectLot;
    }

    /**
     * @param ProcurementProjectLot $procurementProjectLot
     * @return self
     */
    public function addOnceToProcurementProjectLot(ProcurementProjectLot $procurementProjectLot): self
    {
        if (!is_array($this->procurementProjectLot)) {
            $this->procurementProjectLot = [];
        }

        $this->procurementProjectLot[0] = $procurementProjectLot;

        return $this;
    }

    /**
     * @return ProcurementProjectLot
     */
    public function addOnceToProcurementProjectLotWithCreate(): ProcurementProjectLot
    {
        if (!is_array($this->procurementProjectLot)) {
            $this->procurementProjectLot = [];
        }

        if ($this->procurementProjectLot === []) {
            $this->addOnceToprocurementProjectLot(new ProcurementProjectLot());
        }

        return $this->procurementProjectLot[0];
    }

    /**
     * @return array<DocumentTenderRequirement>|null
     */
    public function getDocumentTenderRequirement(): ?array
    {
        return $this->documentTenderRequirement;
    }

    /**
     * @param array<DocumentTenderRequirement>|null $documentTenderRequirement
     * @return self
     */
    public function setDocumentTenderRequirement(?array $documentTenderRequirement = null): self
    {
        $this->documentTenderRequirement = $documentTenderRequirement;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDocumentTenderRequirement(): self
    {
        $this->documentTenderRequirement = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearDocumentTenderRequirement(): self
    {
        $this->documentTenderRequirement = [];

        return $this;
    }

    /**
     * @return DocumentTenderRequirement|null
     */
    public function firstDocumentTenderRequirement(): ?DocumentTenderRequirement
    {
        $documentTenderRequirement = $this->documentTenderRequirement ?? [];
        $documentTenderRequirement = reset($documentTenderRequirement);

        if ($documentTenderRequirement === false) {
            return null;
        }

        return $documentTenderRequirement;
    }

    /**
     * @return DocumentTenderRequirement|null
     */
    public function lastDocumentTenderRequirement(): ?DocumentTenderRequirement
    {
        $documentTenderRequirement = $this->documentTenderRequirement ?? [];
        $documentTenderRequirement = end($documentTenderRequirement);

        if ($documentTenderRequirement === false) {
            return null;
        }

        return $documentTenderRequirement;
    }

    /**
     * @param DocumentTenderRequirement $documentTenderRequirement
     * @return self
     */
    public function addToDocumentTenderRequirement(DocumentTenderRequirement $documentTenderRequirement): self
    {
        $this->documentTenderRequirement[] = $documentTenderRequirement;

        return $this;
    }

    /**
     * @return DocumentTenderRequirement
     */
    public function addToDocumentTenderRequirementWithCreate(): DocumentTenderRequirement
    {
        $this->addTodocumentTenderRequirement($documentTenderRequirement = new DocumentTenderRequirement());

        return $documentTenderRequirement;
    }

    /**
     * @param DocumentTenderRequirement $documentTenderRequirement
     * @return self
     */
    public function addOnceToDocumentTenderRequirement(DocumentTenderRequirement $documentTenderRequirement): self
    {
        if (!is_array($this->documentTenderRequirement)) {
            $this->documentTenderRequirement = [];
        }

        $this->documentTenderRequirement[0] = $documentTenderRequirement;

        return $this;
    }

    /**
     * @return DocumentTenderRequirement
     */
    public function addOnceToDocumentTenderRequirementWithCreate(): DocumentTenderRequirement
    {
        if (!is_array($this->documentTenderRequirement)) {
            $this->documentTenderRequirement = [];
        }

        if ($this->documentTenderRequirement === []) {
            $this->addOnceTodocumentTenderRequirement(new DocumentTenderRequirement());
        }

        return $this->documentTenderRequirement[0];
    }
}
