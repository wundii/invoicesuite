<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\ubl\cbc\CapabilityTypeCode;
use horstoeko\invoicesuite\models\ubl\cbc\Description;
use horstoeko\invoicesuite\models\ubl\cbc\ValueAmount;
use horstoeko\invoicesuite\models\ubl\cbc\ValueQuantity;

class CapabilityType
{
    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\CapabilityTypeCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\CapabilityTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("CapabilityTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCapabilityTypeCode", setter="setCapabilityTypeCode")
     */
    private $capabilityTypeCode;

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
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ValueAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ValueAmount")
     * @JMS\Expose
     * @JMS\SerializedName("ValueAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getValueAmount", setter="setValueAmount")
     */
    private $valueAmount;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ValueQuantity
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ValueQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("ValueQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getValueQuantity", setter="setValueQuantity")
     */
    private $valueQuantity;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\EvidenceSupplied>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\EvidenceSupplied>")
     * @JMS\Expose
     * @JMS\SerializedName("EvidenceSupplied")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="EvidenceSupplied", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getEvidenceSupplied", setter="setEvidenceSupplied")
     */
    private $evidenceSupplied;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\ValidityPeriod
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\ValidityPeriod")
     * @JMS\Expose
     * @JMS\SerializedName("ValidityPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getValidityPeriod", setter="setValidityPeriod")
     */
    private $validityPeriod;

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\CapabilityTypeCode|null
     */
    public function getCapabilityTypeCode(): ?CapabilityTypeCode
    {
        return $this->capabilityTypeCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\CapabilityTypeCode
     */
    public function getCapabilityTypeCodeWithCreate(): CapabilityTypeCode
    {
        $this->capabilityTypeCode = is_null($this->capabilityTypeCode) ? new CapabilityTypeCode() : $this->capabilityTypeCode;

        return $this->capabilityTypeCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\CapabilityTypeCode $capabilityTypeCode
     * @return self
     */
    public function setCapabilityTypeCode(CapabilityTypeCode $capabilityTypeCode): self
    {
        $this->capabilityTypeCode = $capabilityTypeCode;

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
        $this->description[0] = $description;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Description
     */
    public function addOnceToDescriptionWithCreate(): Description
    {
        if ($this->description === []) {
            $this->addOnceTodescription(new Description());
        }

        return $this->description[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ValueAmount|null
     */
    public function getValueAmount(): ?ValueAmount
    {
        return $this->valueAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ValueAmount
     */
    public function getValueAmountWithCreate(): ValueAmount
    {
        $this->valueAmount = is_null($this->valueAmount) ? new ValueAmount() : $this->valueAmount;

        return $this->valueAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ValueAmount $valueAmount
     * @return self
     */
    public function setValueAmount(ValueAmount $valueAmount): self
    {
        $this->valueAmount = $valueAmount;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ValueQuantity|null
     */
    public function getValueQuantity(): ?ValueQuantity
    {
        return $this->valueQuantity;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ValueQuantity
     */
    public function getValueQuantityWithCreate(): ValueQuantity
    {
        $this->valueQuantity = is_null($this->valueQuantity) ? new ValueQuantity() : $this->valueQuantity;

        return $this->valueQuantity;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ValueQuantity $valueQuantity
     * @return self
     */
    public function setValueQuantity(ValueQuantity $valueQuantity): self
    {
        $this->valueQuantity = $valueQuantity;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\EvidenceSupplied>|null
     */
    public function getEvidenceSupplied(): ?array
    {
        return $this->evidenceSupplied;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\EvidenceSupplied> $evidenceSupplied
     * @return self
     */
    public function setEvidenceSupplied(array $evidenceSupplied): self
    {
        $this->evidenceSupplied = $evidenceSupplied;

        return $this;
    }

    /**
     * @return self
     */
    public function clearEvidenceSupplied(): self
    {
        $this->evidenceSupplied = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\EvidenceSupplied $evidenceSupplied
     * @return self
     */
    public function addToEvidenceSupplied(EvidenceSupplied $evidenceSupplied): self
    {
        $this->evidenceSupplied[] = $evidenceSupplied;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\EvidenceSupplied
     */
    public function addToEvidenceSuppliedWithCreate(): EvidenceSupplied
    {
        $this->addToevidenceSupplied($evidenceSupplied = new EvidenceSupplied());

        return $evidenceSupplied;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\EvidenceSupplied $evidenceSupplied
     * @return self
     */
    public function addOnceToEvidenceSupplied(EvidenceSupplied $evidenceSupplied): self
    {
        $this->evidenceSupplied[0] = $evidenceSupplied;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\EvidenceSupplied
     */
    public function addOnceToEvidenceSuppliedWithCreate(): EvidenceSupplied
    {
        if ($this->evidenceSupplied === []) {
            $this->addOnceToevidenceSupplied(new EvidenceSupplied());
        }

        return $this->evidenceSupplied[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ValidityPeriod|null
     */
    public function getValidityPeriod(): ?ValidityPeriod
    {
        return $this->validityPeriod;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\ValidityPeriod
     */
    public function getValidityPeriodWithCreate(): ValidityPeriod
    {
        $this->validityPeriod = is_null($this->validityPeriod) ? new ValidityPeriod() : $this->validityPeriod;

        return $this->validityPeriod;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\ValidityPeriod $validityPeriod
     * @return self
     */
    public function setValidityPeriod(ValidityPeriod $validityPeriod): self
    {
        $this->validityPeriod = $validityPeriod;

        return $this;
    }
}
