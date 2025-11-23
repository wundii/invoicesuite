<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ReferenceID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ResponseCode;

class ResponseType
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
     * @var ResponseCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ResponseCode")
     * @JMS\Expose
     * @JMS\SerializedName("ResponseCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getResponseCode", setter="setResponseCode")
     */
    private $responseCode;

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
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("EffectiveDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEffectiveDate", setter="setEffectiveDate")
     */
    private $effectiveDate;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("EffectiveTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEffectiveTime", setter="setEffectiveTime")
     */
    private $effectiveTime;

    /**
     * @var array<Status>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\Status>")
     * @JMS\Expose
     * @JMS\SerializedName("Status")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Status", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getStatus", setter="setStatus")
     */
    private $status;

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
     * @return ResponseCode|null
     */
    public function getResponseCode(): ?ResponseCode
    {
        return $this->responseCode;
    }

    /**
     * @return ResponseCode
     */
    public function getResponseCodeWithCreate(): ResponseCode
    {
        $this->responseCode = is_null($this->responseCode) ? new ResponseCode() : $this->responseCode;

        return $this->responseCode;
    }

    /**
     * @param ResponseCode|null $responseCode
     * @return self
     */
    public function setResponseCode(?ResponseCode $responseCode = null): self
    {
        $this->responseCode = $responseCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetResponseCode(): self
    {
        $this->responseCode = null;

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
     * @return DateTimeInterface|null
     */
    public function getEffectiveDate(): ?DateTimeInterface
    {
        return $this->effectiveDate;
    }

    /**
     * @param DateTimeInterface|null $effectiveDate
     * @return self
     */
    public function setEffectiveDate(?DateTimeInterface $effectiveDate = null): self
    {
        $this->effectiveDate = $effectiveDate;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetEffectiveDate(): self
    {
        $this->effectiveDate = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getEffectiveTime(): ?DateTimeInterface
    {
        return $this->effectiveTime;
    }

    /**
     * @param DateTimeInterface|null $effectiveTime
     * @return self
     */
    public function setEffectiveTime(?DateTimeInterface $effectiveTime = null): self
    {
        $this->effectiveTime = $effectiveTime;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetEffectiveTime(): self
    {
        $this->effectiveTime = null;

        return $this;
    }

    /**
     * @return array<Status>|null
     */
    public function getStatus(): ?array
    {
        return $this->status;
    }

    /**
     * @param array<Status>|null $status
     * @return self
     */
    public function setStatus(?array $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetStatus(): self
    {
        $this->status = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearStatus(): self
    {
        $this->status = [];

        return $this;
    }

    /**
     * @return Status|null
     */
    public function firstStatus(): ?Status
    {
        $status = $this->status ?? [];
        $status = reset($status);

        if ($status === false) {
            return null;
        }

        return $status;
    }

    /**
     * @return Status|null
     */
    public function lastStatus(): ?Status
    {
        $status = $this->status ?? [];
        $status = end($status);

        if ($status === false) {
            return null;
        }

        return $status;
    }

    /**
     * @param Status $status
     * @return self
     */
    public function addToStatus(Status $status): self
    {
        $this->status[] = $status;

        return $this;
    }

    /**
     * @return Status
     */
    public function addToStatusWithCreate(): Status
    {
        $this->addTostatus($status = new Status());

        return $status;
    }

    /**
     * @param Status $status
     * @return self
     */
    public function addOnceToStatus(Status $status): self
    {
        if (!is_array($this->status)) {
            $this->status = [];
        }

        $this->status[0] = $status;

        return $this;
    }

    /**
     * @return Status
     */
    public function addOnceToStatusWithCreate(): Status
    {
        if (!is_array($this->status)) {
            $this->status = [];
        }

        if ($this->status === []) {
            $this->addOnceTostatus(new Status());
        }

        return $this->status[0];
    }
}
