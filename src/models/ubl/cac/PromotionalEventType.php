<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\ubl\cbc\PromotionalEventTypeCode;

class PromotionalEventType
{
    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\PromotionalEventTypeCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\PromotionalEventTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("PromotionalEventTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPromotionalEventTypeCode", setter="setPromotionalEventTypeCode")
     */
    private $promotionalEventTypeCode;

    /**
     * @var \DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("SubmissionDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSubmissionDate", setter="setSubmissionDate")
     */
    private $submissionDate;

    /**
     * @var \DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("FirstShipmentAvailibilityDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFirstShipmentAvailibilityDate", setter="setFirstShipmentAvailibilityDate")
     */
    private $firstShipmentAvailibilityDate;

    /**
     * @var \DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("LatestProposalAcceptanceDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLatestProposalAcceptanceDate", setter="setLatestProposalAcceptanceDate")
     */
    private $latestProposalAcceptanceDate;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\PromotionalSpecification>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\PromotionalSpecification>")
     * @JMS\Expose
     * @JMS\SerializedName("PromotionalSpecification")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="PromotionalSpecification", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getPromotionalSpecification", setter="setPromotionalSpecification")
     */
    private $promotionalSpecification;

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\PromotionalEventTypeCode|null
     */
    public function getPromotionalEventTypeCode(): ?PromotionalEventTypeCode
    {
        return $this->promotionalEventTypeCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\PromotionalEventTypeCode
     */
    public function getPromotionalEventTypeCodeWithCreate(): PromotionalEventTypeCode
    {
        $this->promotionalEventTypeCode = is_null($this->promotionalEventTypeCode) ? new PromotionalEventTypeCode() : $this->promotionalEventTypeCode;

        return $this->promotionalEventTypeCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\PromotionalEventTypeCode $promotionalEventTypeCode
     * @return self
     */
    public function setPromotionalEventTypeCode(PromotionalEventTypeCode $promotionalEventTypeCode): self
    {
        $this->promotionalEventTypeCode = $promotionalEventTypeCode;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getSubmissionDate(): ?\DateTime
    {
        return $this->submissionDate;
    }

    /**
     * @param \DateTime $submissionDate
     * @return self
     */
    public function setSubmissionDate(\DateTime $submissionDate): self
    {
        $this->submissionDate = $submissionDate;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getFirstShipmentAvailibilityDate(): ?\DateTime
    {
        return $this->firstShipmentAvailibilityDate;
    }

    /**
     * @param \DateTime $firstShipmentAvailibilityDate
     * @return self
     */
    public function setFirstShipmentAvailibilityDate(\DateTime $firstShipmentAvailibilityDate): self
    {
        $this->firstShipmentAvailibilityDate = $firstShipmentAvailibilityDate;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getLatestProposalAcceptanceDate(): ?\DateTime
    {
        return $this->latestProposalAcceptanceDate;
    }

    /**
     * @param \DateTime $latestProposalAcceptanceDate
     * @return self
     */
    public function setLatestProposalAcceptanceDate(\DateTime $latestProposalAcceptanceDate): self
    {
        $this->latestProposalAcceptanceDate = $latestProposalAcceptanceDate;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\PromotionalSpecification>|null
     */
    public function getPromotionalSpecification(): ?array
    {
        return $this->promotionalSpecification;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\PromotionalSpecification> $promotionalSpecification
     * @return self
     */
    public function setPromotionalSpecification(array $promotionalSpecification): self
    {
        $this->promotionalSpecification = $promotionalSpecification;

        return $this;
    }

    /**
     * @return self
     */
    public function clearPromotionalSpecification(): self
    {
        $this->promotionalSpecification = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\PromotionalSpecification $promotionalSpecification
     * @return self
     */
    public function addToPromotionalSpecification(PromotionalSpecification $promotionalSpecification): self
    {
        $this->promotionalSpecification[] = $promotionalSpecification;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\PromotionalSpecification
     */
    public function addToPromotionalSpecificationWithCreate(): PromotionalSpecification
    {
        $this->addTopromotionalSpecification($promotionalSpecification = new PromotionalSpecification());

        return $promotionalSpecification;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\PromotionalSpecification $promotionalSpecification
     * @return self
     */
    public function addOnceToPromotionalSpecification(PromotionalSpecification $promotionalSpecification): self
    {
        $this->promotionalSpecification[0] = $promotionalSpecification;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\PromotionalSpecification
     */
    public function addOnceToPromotionalSpecificationWithCreate(): PromotionalSpecification
    {
        if ($this->promotionalSpecification === []) {
            $this->addOnceTopromotionalSpecification(new PromotionalSpecification());
        }

        return $this->promotionalSpecification[0];
    }
}
