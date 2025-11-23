<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ReliabilityPercent;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Remarks;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SequenceNumeric;

class TransportScheduleType
{
    use HandlesObjectFlags;

    /**
     * @var SequenceNumeric|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\SequenceNumeric")
     * @JMS\Expose
     * @JMS\SerializedName("SequenceNumeric")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSequenceNumeric", setter="setSequenceNumeric")
     */
    private $sequenceNumeric;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("ReferenceDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getReferenceDate", setter="setReferenceDate")
     */
    private $referenceDate;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("ReferenceTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getReferenceTime", setter="setReferenceTime")
     */
    private $referenceTime;

    /**
     * @var ReliabilityPercent|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ReliabilityPercent")
     * @JMS\Expose
     * @JMS\SerializedName("ReliabilityPercent")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getReliabilityPercent", setter="setReliabilityPercent")
     */
    private $reliabilityPercent;

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
     * @var StatusLocation|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\StatusLocation")
     * @JMS\Expose
     * @JMS\SerializedName("StatusLocation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getStatusLocation", setter="setStatusLocation")
     */
    private $statusLocation;

    /**
     * @var ActualArrivalTransportEvent|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ActualArrivalTransportEvent")
     * @JMS\Expose
     * @JMS\SerializedName("ActualArrivalTransportEvent")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getActualArrivalTransportEvent", setter="setActualArrivalTransportEvent")
     */
    private $actualArrivalTransportEvent;

    /**
     * @var ActualDepartureTransportEvent|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ActualDepartureTransportEvent")
     * @JMS\Expose
     * @JMS\SerializedName("ActualDepartureTransportEvent")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getActualDepartureTransportEvent", setter="setActualDepartureTransportEvent")
     */
    private $actualDepartureTransportEvent;

    /**
     * @var EstimatedDepartureTransportEvent|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\EstimatedDepartureTransportEvent")
     * @JMS\Expose
     * @JMS\SerializedName("EstimatedDepartureTransportEvent")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEstimatedDepartureTransportEvent", setter="setEstimatedDepartureTransportEvent")
     */
    private $estimatedDepartureTransportEvent;

    /**
     * @var EstimatedArrivalTransportEvent|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\EstimatedArrivalTransportEvent")
     * @JMS\Expose
     * @JMS\SerializedName("EstimatedArrivalTransportEvent")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEstimatedArrivalTransportEvent", setter="setEstimatedArrivalTransportEvent")
     */
    private $estimatedArrivalTransportEvent;

    /**
     * @var PlannedDepartureTransportEvent|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\PlannedDepartureTransportEvent")
     * @JMS\Expose
     * @JMS\SerializedName("PlannedDepartureTransportEvent")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPlannedDepartureTransportEvent", setter="setPlannedDepartureTransportEvent")
     */
    private $plannedDepartureTransportEvent;

    /**
     * @var PlannedArrivalTransportEvent|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\PlannedArrivalTransportEvent")
     * @JMS\Expose
     * @JMS\SerializedName("PlannedArrivalTransportEvent")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPlannedArrivalTransportEvent", setter="setPlannedArrivalTransportEvent")
     */
    private $plannedArrivalTransportEvent;

    /**
     * @return SequenceNumeric|null
     */
    public function getSequenceNumeric(): ?SequenceNumeric
    {
        return $this->sequenceNumeric;
    }

    /**
     * @return SequenceNumeric
     */
    public function getSequenceNumericWithCreate(): SequenceNumeric
    {
        $this->sequenceNumeric = is_null($this->sequenceNumeric) ? new SequenceNumeric() : $this->sequenceNumeric;

        return $this->sequenceNumeric;
    }

    /**
     * @param SequenceNumeric|null $sequenceNumeric
     * @return self
     */
    public function setSequenceNumeric(?SequenceNumeric $sequenceNumeric = null): self
    {
        $this->sequenceNumeric = $sequenceNumeric;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSequenceNumeric(): self
    {
        $this->sequenceNumeric = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getReferenceDate(): ?DateTimeInterface
    {
        return $this->referenceDate;
    }

    /**
     * @param DateTimeInterface|null $referenceDate
     * @return self
     */
    public function setReferenceDate(?DateTimeInterface $referenceDate = null): self
    {
        $this->referenceDate = $referenceDate;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetReferenceDate(): self
    {
        $this->referenceDate = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getReferenceTime(): ?DateTimeInterface
    {
        return $this->referenceTime;
    }

    /**
     * @param DateTimeInterface|null $referenceTime
     * @return self
     */
    public function setReferenceTime(?DateTimeInterface $referenceTime = null): self
    {
        $this->referenceTime = $referenceTime;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetReferenceTime(): self
    {
        $this->referenceTime = null;

        return $this;
    }

    /**
     * @return ReliabilityPercent|null
     */
    public function getReliabilityPercent(): ?ReliabilityPercent
    {
        return $this->reliabilityPercent;
    }

    /**
     * @return ReliabilityPercent
     */
    public function getReliabilityPercentWithCreate(): ReliabilityPercent
    {
        $this->reliabilityPercent = is_null($this->reliabilityPercent) ? new ReliabilityPercent() : $this->reliabilityPercent;

        return $this->reliabilityPercent;
    }

    /**
     * @param ReliabilityPercent|null $reliabilityPercent
     * @return self
     */
    public function setReliabilityPercent(?ReliabilityPercent $reliabilityPercent = null): self
    {
        $this->reliabilityPercent = $reliabilityPercent;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetReliabilityPercent(): self
    {
        $this->reliabilityPercent = null;

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
     * @return StatusLocation|null
     */
    public function getStatusLocation(): ?StatusLocation
    {
        return $this->statusLocation;
    }

    /**
     * @return StatusLocation
     */
    public function getStatusLocationWithCreate(): StatusLocation
    {
        $this->statusLocation = is_null($this->statusLocation) ? new StatusLocation() : $this->statusLocation;

        return $this->statusLocation;
    }

    /**
     * @param StatusLocation|null $statusLocation
     * @return self
     */
    public function setStatusLocation(?StatusLocation $statusLocation = null): self
    {
        $this->statusLocation = $statusLocation;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetStatusLocation(): self
    {
        $this->statusLocation = null;

        return $this;
    }

    /**
     * @return ActualArrivalTransportEvent|null
     */
    public function getActualArrivalTransportEvent(): ?ActualArrivalTransportEvent
    {
        return $this->actualArrivalTransportEvent;
    }

    /**
     * @return ActualArrivalTransportEvent
     */
    public function getActualArrivalTransportEventWithCreate(): ActualArrivalTransportEvent
    {
        $this->actualArrivalTransportEvent = is_null($this->actualArrivalTransportEvent) ? new ActualArrivalTransportEvent() : $this->actualArrivalTransportEvent;

        return $this->actualArrivalTransportEvent;
    }

    /**
     * @param ActualArrivalTransportEvent|null $actualArrivalTransportEvent
     * @return self
     */
    public function setActualArrivalTransportEvent(
        ?ActualArrivalTransportEvent $actualArrivalTransportEvent = null,
    ): self {
        $this->actualArrivalTransportEvent = $actualArrivalTransportEvent;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetActualArrivalTransportEvent(): self
    {
        $this->actualArrivalTransportEvent = null;

        return $this;
    }

    /**
     * @return ActualDepartureTransportEvent|null
     */
    public function getActualDepartureTransportEvent(): ?ActualDepartureTransportEvent
    {
        return $this->actualDepartureTransportEvent;
    }

    /**
     * @return ActualDepartureTransportEvent
     */
    public function getActualDepartureTransportEventWithCreate(): ActualDepartureTransportEvent
    {
        $this->actualDepartureTransportEvent = is_null($this->actualDepartureTransportEvent) ? new ActualDepartureTransportEvent() : $this->actualDepartureTransportEvent;

        return $this->actualDepartureTransportEvent;
    }

    /**
     * @param ActualDepartureTransportEvent|null $actualDepartureTransportEvent
     * @return self
     */
    public function setActualDepartureTransportEvent(
        ?ActualDepartureTransportEvent $actualDepartureTransportEvent = null,
    ): self {
        $this->actualDepartureTransportEvent = $actualDepartureTransportEvent;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetActualDepartureTransportEvent(): self
    {
        $this->actualDepartureTransportEvent = null;

        return $this;
    }

    /**
     * @return EstimatedDepartureTransportEvent|null
     */
    public function getEstimatedDepartureTransportEvent(): ?EstimatedDepartureTransportEvent
    {
        return $this->estimatedDepartureTransportEvent;
    }

    /**
     * @return EstimatedDepartureTransportEvent
     */
    public function getEstimatedDepartureTransportEventWithCreate(): EstimatedDepartureTransportEvent
    {
        $this->estimatedDepartureTransportEvent = is_null($this->estimatedDepartureTransportEvent) ? new EstimatedDepartureTransportEvent() : $this->estimatedDepartureTransportEvent;

        return $this->estimatedDepartureTransportEvent;
    }

    /**
     * @param EstimatedDepartureTransportEvent|null $estimatedDepartureTransportEvent
     * @return self
     */
    public function setEstimatedDepartureTransportEvent(
        ?EstimatedDepartureTransportEvent $estimatedDepartureTransportEvent = null,
    ): self {
        $this->estimatedDepartureTransportEvent = $estimatedDepartureTransportEvent;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetEstimatedDepartureTransportEvent(): self
    {
        $this->estimatedDepartureTransportEvent = null;

        return $this;
    }

    /**
     * @return EstimatedArrivalTransportEvent|null
     */
    public function getEstimatedArrivalTransportEvent(): ?EstimatedArrivalTransportEvent
    {
        return $this->estimatedArrivalTransportEvent;
    }

    /**
     * @return EstimatedArrivalTransportEvent
     */
    public function getEstimatedArrivalTransportEventWithCreate(): EstimatedArrivalTransportEvent
    {
        $this->estimatedArrivalTransportEvent = is_null($this->estimatedArrivalTransportEvent) ? new EstimatedArrivalTransportEvent() : $this->estimatedArrivalTransportEvent;

        return $this->estimatedArrivalTransportEvent;
    }

    /**
     * @param EstimatedArrivalTransportEvent|null $estimatedArrivalTransportEvent
     * @return self
     */
    public function setEstimatedArrivalTransportEvent(
        ?EstimatedArrivalTransportEvent $estimatedArrivalTransportEvent = null,
    ): self {
        $this->estimatedArrivalTransportEvent = $estimatedArrivalTransportEvent;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetEstimatedArrivalTransportEvent(): self
    {
        $this->estimatedArrivalTransportEvent = null;

        return $this;
    }

    /**
     * @return PlannedDepartureTransportEvent|null
     */
    public function getPlannedDepartureTransportEvent(): ?PlannedDepartureTransportEvent
    {
        return $this->plannedDepartureTransportEvent;
    }

    /**
     * @return PlannedDepartureTransportEvent
     */
    public function getPlannedDepartureTransportEventWithCreate(): PlannedDepartureTransportEvent
    {
        $this->plannedDepartureTransportEvent = is_null($this->plannedDepartureTransportEvent) ? new PlannedDepartureTransportEvent() : $this->plannedDepartureTransportEvent;

        return $this->plannedDepartureTransportEvent;
    }

    /**
     * @param PlannedDepartureTransportEvent|null $plannedDepartureTransportEvent
     * @return self
     */
    public function setPlannedDepartureTransportEvent(
        ?PlannedDepartureTransportEvent $plannedDepartureTransportEvent = null,
    ): self {
        $this->plannedDepartureTransportEvent = $plannedDepartureTransportEvent;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPlannedDepartureTransportEvent(): self
    {
        $this->plannedDepartureTransportEvent = null;

        return $this;
    }

    /**
     * @return PlannedArrivalTransportEvent|null
     */
    public function getPlannedArrivalTransportEvent(): ?PlannedArrivalTransportEvent
    {
        return $this->plannedArrivalTransportEvent;
    }

    /**
     * @return PlannedArrivalTransportEvent
     */
    public function getPlannedArrivalTransportEventWithCreate(): PlannedArrivalTransportEvent
    {
        $this->plannedArrivalTransportEvent = is_null($this->plannedArrivalTransportEvent) ? new PlannedArrivalTransportEvent() : $this->plannedArrivalTransportEvent;

        return $this->plannedArrivalTransportEvent;
    }

    /**
     * @param PlannedArrivalTransportEvent|null $plannedArrivalTransportEvent
     * @return self
     */
    public function setPlannedArrivalTransportEvent(
        ?PlannedArrivalTransportEvent $plannedArrivalTransportEvent = null,
    ): self {
        $this->plannedArrivalTransportEvent = $plannedArrivalTransportEvent;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPlannedArrivalTransportEvent(): self
    {
        $this->plannedArrivalTransportEvent = null;

        return $this;
    }
}
