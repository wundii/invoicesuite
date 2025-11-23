<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\DeliveredQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LatestMeterQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LatestMeterReadingMethod;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LatestMeterReadingMethodCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MeterReadingComments;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MeterReadingType as MeterReadingType1;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MeterReadingTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PreviousMeterQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PreviousMeterReadingMethod;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PreviousMeterReadingMethodCode;

class MeterReadingType
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
     * @var \horstoeko\invoicesuite\documents\models\ubl\cbc\MeterReadingType|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MeterReadingType")
     * @JMS\Expose
     * @JMS\SerializedName("MeterReadingType")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMeterReadingType", setter="setMeterReadingType")
     */
    private $meterReadingType;

    /**
     * @var MeterReadingTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MeterReadingTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("MeterReadingTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMeterReadingTypeCode", setter="setMeterReadingTypeCode")
     */
    private $meterReadingTypeCode;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("PreviousMeterReadingDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPreviousMeterReadingDate", setter="setPreviousMeterReadingDate")
     */
    private $previousMeterReadingDate;

    /**
     * @var PreviousMeterQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PreviousMeterQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("PreviousMeterQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPreviousMeterQuantity", setter="setPreviousMeterQuantity")
     */
    private $previousMeterQuantity;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("LatestMeterReadingDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLatestMeterReadingDate", setter="setLatestMeterReadingDate")
     */
    private $latestMeterReadingDate;

    /**
     * @var LatestMeterQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LatestMeterQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("LatestMeterQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLatestMeterQuantity", setter="setLatestMeterQuantity")
     */
    private $latestMeterQuantity;

    /**
     * @var PreviousMeterReadingMethod|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PreviousMeterReadingMethod")
     * @JMS\Expose
     * @JMS\SerializedName("PreviousMeterReadingMethod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPreviousMeterReadingMethod", setter="setPreviousMeterReadingMethod")
     */
    private $previousMeterReadingMethod;

    /**
     * @var PreviousMeterReadingMethodCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PreviousMeterReadingMethodCode")
     * @JMS\Expose
     * @JMS\SerializedName("PreviousMeterReadingMethodCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPreviousMeterReadingMethodCode", setter="setPreviousMeterReadingMethodCode")
     */
    private $previousMeterReadingMethodCode;

    /**
     * @var LatestMeterReadingMethod|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LatestMeterReadingMethod")
     * @JMS\Expose
     * @JMS\SerializedName("LatestMeterReadingMethod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLatestMeterReadingMethod", setter="setLatestMeterReadingMethod")
     */
    private $latestMeterReadingMethod;

    /**
     * @var LatestMeterReadingMethodCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LatestMeterReadingMethodCode")
     * @JMS\Expose
     * @JMS\SerializedName("LatestMeterReadingMethodCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLatestMeterReadingMethodCode", setter="setLatestMeterReadingMethodCode")
     */
    private $latestMeterReadingMethodCode;

    /**
     * @var array<MeterReadingComments>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\MeterReadingComments>")
     * @JMS\Expose
     * @JMS\SerializedName("MeterReadingComments")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="MeterReadingComments", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getMeterReadingComments", setter="setMeterReadingComments")
     */
    private $meterReadingComments;

    /**
     * @var DeliveredQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\DeliveredQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("DeliveredQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDeliveredQuantity", setter="setDeliveredQuantity")
     */
    private $deliveredQuantity;

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
     * @return \horstoeko\invoicesuite\documents\models\ubl\cbc\MeterReadingType|null
     */
    public function getMeterReadingType(): ?MeterReadingType1
    {
        return $this->meterReadingType;
    }

    /**
     * @return \horstoeko\invoicesuite\documents\models\ubl\cbc\MeterReadingType
     */
    public function getMeterReadingTypeWithCreate(): MeterReadingType1
    {
        $this->meterReadingType = is_null($this->meterReadingType) ? new MeterReadingType() : $this->meterReadingType;

        return $this->meterReadingType;
    }

    /**
     * @param \horstoeko\invoicesuite\documents\models\ubl\cbc\MeterReadingType|null $meterReadingType
     * @return self
     */
    public function setMeterReadingType(?MeterReadingType1 $meterReadingType = null): self
    {
        $this->meterReadingType = $meterReadingType;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMeterReadingType(): self
    {
        $this->meterReadingType = null;

        return $this;
    }

    /**
     * @return MeterReadingTypeCode|null
     */
    public function getMeterReadingTypeCode(): ?MeterReadingTypeCode
    {
        return $this->meterReadingTypeCode;
    }

    /**
     * @return MeterReadingTypeCode
     */
    public function getMeterReadingTypeCodeWithCreate(): MeterReadingTypeCode
    {
        $this->meterReadingTypeCode = is_null($this->meterReadingTypeCode) ? new MeterReadingTypeCode() : $this->meterReadingTypeCode;

        return $this->meterReadingTypeCode;
    }

    /**
     * @param MeterReadingTypeCode|null $meterReadingTypeCode
     * @return self
     */
    public function setMeterReadingTypeCode(?MeterReadingTypeCode $meterReadingTypeCode = null): self
    {
        $this->meterReadingTypeCode = $meterReadingTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMeterReadingTypeCode(): self
    {
        $this->meterReadingTypeCode = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getPreviousMeterReadingDate(): ?DateTimeInterface
    {
        return $this->previousMeterReadingDate;
    }

    /**
     * @param DateTimeInterface|null $previousMeterReadingDate
     * @return self
     */
    public function setPreviousMeterReadingDate(?DateTimeInterface $previousMeterReadingDate = null): self
    {
        $this->previousMeterReadingDate = $previousMeterReadingDate;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPreviousMeterReadingDate(): self
    {
        $this->previousMeterReadingDate = null;

        return $this;
    }

    /**
     * @return PreviousMeterQuantity|null
     */
    public function getPreviousMeterQuantity(): ?PreviousMeterQuantity
    {
        return $this->previousMeterQuantity;
    }

    /**
     * @return PreviousMeterQuantity
     */
    public function getPreviousMeterQuantityWithCreate(): PreviousMeterQuantity
    {
        $this->previousMeterQuantity = is_null($this->previousMeterQuantity) ? new PreviousMeterQuantity() : $this->previousMeterQuantity;

        return $this->previousMeterQuantity;
    }

    /**
     * @param PreviousMeterQuantity|null $previousMeterQuantity
     * @return self
     */
    public function setPreviousMeterQuantity(?PreviousMeterQuantity $previousMeterQuantity = null): self
    {
        $this->previousMeterQuantity = $previousMeterQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPreviousMeterQuantity(): self
    {
        $this->previousMeterQuantity = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getLatestMeterReadingDate(): ?DateTimeInterface
    {
        return $this->latestMeterReadingDate;
    }

    /**
     * @param DateTimeInterface|null $latestMeterReadingDate
     * @return self
     */
    public function setLatestMeterReadingDate(?DateTimeInterface $latestMeterReadingDate = null): self
    {
        $this->latestMeterReadingDate = $latestMeterReadingDate;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLatestMeterReadingDate(): self
    {
        $this->latestMeterReadingDate = null;

        return $this;
    }

    /**
     * @return LatestMeterQuantity|null
     */
    public function getLatestMeterQuantity(): ?LatestMeterQuantity
    {
        return $this->latestMeterQuantity;
    }

    /**
     * @return LatestMeterQuantity
     */
    public function getLatestMeterQuantityWithCreate(): LatestMeterQuantity
    {
        $this->latestMeterQuantity = is_null($this->latestMeterQuantity) ? new LatestMeterQuantity() : $this->latestMeterQuantity;

        return $this->latestMeterQuantity;
    }

    /**
     * @param LatestMeterQuantity|null $latestMeterQuantity
     * @return self
     */
    public function setLatestMeterQuantity(?LatestMeterQuantity $latestMeterQuantity = null): self
    {
        $this->latestMeterQuantity = $latestMeterQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLatestMeterQuantity(): self
    {
        $this->latestMeterQuantity = null;

        return $this;
    }

    /**
     * @return PreviousMeterReadingMethod|null
     */
    public function getPreviousMeterReadingMethod(): ?PreviousMeterReadingMethod
    {
        return $this->previousMeterReadingMethod;
    }

    /**
     * @return PreviousMeterReadingMethod
     */
    public function getPreviousMeterReadingMethodWithCreate(): PreviousMeterReadingMethod
    {
        $this->previousMeterReadingMethod = is_null($this->previousMeterReadingMethod) ? new PreviousMeterReadingMethod() : $this->previousMeterReadingMethod;

        return $this->previousMeterReadingMethod;
    }

    /**
     * @param PreviousMeterReadingMethod|null $previousMeterReadingMethod
     * @return self
     */
    public function setPreviousMeterReadingMethod(
        ?PreviousMeterReadingMethod $previousMeterReadingMethod = null,
    ): self {
        $this->previousMeterReadingMethod = $previousMeterReadingMethod;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPreviousMeterReadingMethod(): self
    {
        $this->previousMeterReadingMethod = null;

        return $this;
    }

    /**
     * @return PreviousMeterReadingMethodCode|null
     */
    public function getPreviousMeterReadingMethodCode(): ?PreviousMeterReadingMethodCode
    {
        return $this->previousMeterReadingMethodCode;
    }

    /**
     * @return PreviousMeterReadingMethodCode
     */
    public function getPreviousMeterReadingMethodCodeWithCreate(): PreviousMeterReadingMethodCode
    {
        $this->previousMeterReadingMethodCode = is_null($this->previousMeterReadingMethodCode) ? new PreviousMeterReadingMethodCode() : $this->previousMeterReadingMethodCode;

        return $this->previousMeterReadingMethodCode;
    }

    /**
     * @param PreviousMeterReadingMethodCode|null $previousMeterReadingMethodCode
     * @return self
     */
    public function setPreviousMeterReadingMethodCode(
        ?PreviousMeterReadingMethodCode $previousMeterReadingMethodCode = null,
    ): self {
        $this->previousMeterReadingMethodCode = $previousMeterReadingMethodCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPreviousMeterReadingMethodCode(): self
    {
        $this->previousMeterReadingMethodCode = null;

        return $this;
    }

    /**
     * @return LatestMeterReadingMethod|null
     */
    public function getLatestMeterReadingMethod(): ?LatestMeterReadingMethod
    {
        return $this->latestMeterReadingMethod;
    }

    /**
     * @return LatestMeterReadingMethod
     */
    public function getLatestMeterReadingMethodWithCreate(): LatestMeterReadingMethod
    {
        $this->latestMeterReadingMethod = is_null($this->latestMeterReadingMethod) ? new LatestMeterReadingMethod() : $this->latestMeterReadingMethod;

        return $this->latestMeterReadingMethod;
    }

    /**
     * @param LatestMeterReadingMethod|null $latestMeterReadingMethod
     * @return self
     */
    public function setLatestMeterReadingMethod(?LatestMeterReadingMethod $latestMeterReadingMethod = null): self
    {
        $this->latestMeterReadingMethod = $latestMeterReadingMethod;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLatestMeterReadingMethod(): self
    {
        $this->latestMeterReadingMethod = null;

        return $this;
    }

    /**
     * @return LatestMeterReadingMethodCode|null
     */
    public function getLatestMeterReadingMethodCode(): ?LatestMeterReadingMethodCode
    {
        return $this->latestMeterReadingMethodCode;
    }

    /**
     * @return LatestMeterReadingMethodCode
     */
    public function getLatestMeterReadingMethodCodeWithCreate(): LatestMeterReadingMethodCode
    {
        $this->latestMeterReadingMethodCode = is_null($this->latestMeterReadingMethodCode) ? new LatestMeterReadingMethodCode() : $this->latestMeterReadingMethodCode;

        return $this->latestMeterReadingMethodCode;
    }

    /**
     * @param LatestMeterReadingMethodCode|null $latestMeterReadingMethodCode
     * @return self
     */
    public function setLatestMeterReadingMethodCode(
        ?LatestMeterReadingMethodCode $latestMeterReadingMethodCode = null,
    ): self {
        $this->latestMeterReadingMethodCode = $latestMeterReadingMethodCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLatestMeterReadingMethodCode(): self
    {
        $this->latestMeterReadingMethodCode = null;

        return $this;
    }

    /**
     * @return array<MeterReadingComments>|null
     */
    public function getMeterReadingComments(): ?array
    {
        return $this->meterReadingComments;
    }

    /**
     * @param array<MeterReadingComments>|null $meterReadingComments
     * @return self
     */
    public function setMeterReadingComments(?array $meterReadingComments = null): self
    {
        $this->meterReadingComments = $meterReadingComments;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMeterReadingComments(): self
    {
        $this->meterReadingComments = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearMeterReadingComments(): self
    {
        $this->meterReadingComments = [];

        return $this;
    }

    /**
     * @return MeterReadingComments|null
     */
    public function firstMeterReadingComments(): ?MeterReadingComments
    {
        $meterReadingComments = $this->meterReadingComments ?? [];
        $meterReadingComments = reset($meterReadingComments);

        if ($meterReadingComments === false) {
            return null;
        }

        return $meterReadingComments;
    }

    /**
     * @return MeterReadingComments|null
     */
    public function lastMeterReadingComments(): ?MeterReadingComments
    {
        $meterReadingComments = $this->meterReadingComments ?? [];
        $meterReadingComments = end($meterReadingComments);

        if ($meterReadingComments === false) {
            return null;
        }

        return $meterReadingComments;
    }

    /**
     * @param MeterReadingComments $meterReadingComments
     * @return self
     */
    public function addToMeterReadingComments(MeterReadingComments $meterReadingComments): self
    {
        $this->meterReadingComments[] = $meterReadingComments;

        return $this;
    }

    /**
     * @return MeterReadingComments
     */
    public function addToMeterReadingCommentsWithCreate(): MeterReadingComments
    {
        $this->addTometerReadingComments($meterReadingComments = new MeterReadingComments());

        return $meterReadingComments;
    }

    /**
     * @param MeterReadingComments $meterReadingComments
     * @return self
     */
    public function addOnceToMeterReadingComments(MeterReadingComments $meterReadingComments): self
    {
        if (!is_array($this->meterReadingComments)) {
            $this->meterReadingComments = [];
        }

        $this->meterReadingComments[0] = $meterReadingComments;

        return $this;
    }

    /**
     * @return MeterReadingComments
     */
    public function addOnceToMeterReadingCommentsWithCreate(): MeterReadingComments
    {
        if (!is_array($this->meterReadingComments)) {
            $this->meterReadingComments = [];
        }

        if ($this->meterReadingComments === []) {
            $this->addOnceTometerReadingComments(new MeterReadingComments());
        }

        return $this->meterReadingComments[0];
    }

    /**
     * @return DeliveredQuantity|null
     */
    public function getDeliveredQuantity(): ?DeliveredQuantity
    {
        return $this->deliveredQuantity;
    }

    /**
     * @return DeliveredQuantity
     */
    public function getDeliveredQuantityWithCreate(): DeliveredQuantity
    {
        $this->deliveredQuantity = is_null($this->deliveredQuantity) ? new DeliveredQuantity() : $this->deliveredQuantity;

        return $this->deliveredQuantity;
    }

    /**
     * @param DeliveredQuantity|null $deliveredQuantity
     * @return self
     */
    public function setDeliveredQuantity(?DeliveredQuantity $deliveredQuantity = null): self
    {
        $this->deliveredQuantity = $deliveredQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDeliveredQuantity(): self
    {
        $this->deliveredQuantity = null;

        return $this;
    }
}
