<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\ubl\cbc\Description;
use horstoeko\invoicesuite\models\ubl\cbc\ReferenceID;
use horstoeko\invoicesuite\models\ubl\cbc\ResponseCode;

class ResponseType
{
    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ReferenceID
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ReferenceID")
     * @JMS\Expose
     * @JMS\SerializedName("ReferenceID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getReferenceID", setter="setReferenceID")
     */
    private $referenceID;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ResponseCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ResponseCode")
     * @JMS\Expose
     * @JMS\SerializedName("ResponseCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getResponseCode", setter="setResponseCode")
     */
    private $responseCode;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\Description>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\Description>")
     * @JMS\Expose
     * @JMS\SerializedName("Description")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Description", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getDescription", setter="setDescription")
     */
    private $description;

    /**
     * @var \DateTimeInterface
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("EffectiveDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEffectiveDate", setter="setEffectiveDate")
     */
    private $effectiveDate;

    /**
     * @var \DateTimeInterface
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("EffectiveTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEffectiveTime", setter="setEffectiveTime")
     */
    private $effectiveTime;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\Status>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\Status>")
     * @JMS\Expose
     * @JMS\SerializedName("Status")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Status", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getStatus", setter="setStatus")
     */
    private $status;

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ReferenceID|null
     */
    public function getReferenceID(): ?ReferenceID
    {
        return $this->referenceID;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ReferenceID
     */
    public function getReferenceIDWithCreate(): ReferenceID
    {
        $this->referenceID = is_null($this->referenceID) ? new ReferenceID() : $this->referenceID;

        return $this->referenceID;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ReferenceID $referenceID
     * @return self
     */
    public function setReferenceID(ReferenceID $referenceID): self
    {
        $this->referenceID = $referenceID;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ResponseCode|null
     */
    public function getResponseCode(): ?ResponseCode
    {
        return $this->responseCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ResponseCode
     */
    public function getResponseCodeWithCreate(): ResponseCode
    {
        $this->responseCode = is_null($this->responseCode) ? new ResponseCode() : $this->responseCode;

        return $this->responseCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ResponseCode $responseCode
     * @return self
     */
    public function setResponseCode(ResponseCode $responseCode): self
    {
        $this->responseCode = $responseCode;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\Description>|null
     */
    public function getDescription(): ?array
    {
        return $this->description;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\Description> $description
     * @return self
     */
    public function setDescription(array $description): self
    {
        $this->description = $description;

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
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Description $description
     * @return self
     */
    public function addToDescription(Description $description): self
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Description
     */
    public function addToDescriptionWithCreate(): Description
    {
        $this->addTodescription($description = new Description());

        return $description;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Description $description
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
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Description
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
     * @return \DateTimeInterface|null
     */
    public function getEffectiveDate(): ?\DateTimeInterface
    {
        return $this->effectiveDate;
    }

    /**
     * @param \DateTimeInterface $effectiveDate
     * @return self
     */
    public function setEffectiveDate(\DateTimeInterface $effectiveDate): self
    {
        $this->effectiveDate = $effectiveDate;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getEffectiveTime(): ?\DateTimeInterface
    {
        return $this->effectiveTime;
    }

    /**
     * @param \DateTimeInterface $effectiveTime
     * @return self
     */
    public function setEffectiveTime(\DateTimeInterface $effectiveTime): self
    {
        $this->effectiveTime = $effectiveTime;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\Status>|null
     */
    public function getStatus(): ?array
    {
        return $this->status;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\Status> $status
     * @return self
     */
    public function setStatus(array $status): self
    {
        $this->status = $status;

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
     * @param \horstoeko\invoicesuite\models\ubl\cac\Status $status
     * @return self
     */
    public function addToStatus(Status $status): self
    {
        $this->status[] = $status;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Status
     */
    public function addToStatusWithCreate(): Status
    {
        $this->addTostatus($status = new Status());

        return $status;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\Status $status
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
     * @return \horstoeko\invoicesuite\models\ubl\cac\Status
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
