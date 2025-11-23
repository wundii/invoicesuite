<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ActivityType;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ActivityTypeCode;

class ContractingActivityType
{
    use HandlesObjectFlags;

    /**
     * @var ActivityTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ActivityTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("ActivityTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getActivityTypeCode", setter="setActivityTypeCode")
     */
    private $activityTypeCode;

    /**
     * @var ActivityType|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ActivityType")
     * @JMS\Expose
     * @JMS\SerializedName("ActivityType")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getActivityType", setter="setActivityType")
     */
    private $activityType;

    /**
     * @return ActivityTypeCode|null
     */
    public function getActivityTypeCode(): ?ActivityTypeCode
    {
        return $this->activityTypeCode;
    }

    /**
     * @return ActivityTypeCode
     */
    public function getActivityTypeCodeWithCreate(): ActivityTypeCode
    {
        $this->activityTypeCode = is_null($this->activityTypeCode) ? new ActivityTypeCode() : $this->activityTypeCode;

        return $this->activityTypeCode;
    }

    /**
     * @param ActivityTypeCode|null $activityTypeCode
     * @return self
     */
    public function setActivityTypeCode(?ActivityTypeCode $activityTypeCode = null): self
    {
        $this->activityTypeCode = $activityTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetActivityTypeCode(): self
    {
        $this->activityTypeCode = null;

        return $this;
    }

    /**
     * @return ActivityType|null
     */
    public function getActivityType(): ?ActivityType
    {
        return $this->activityType;
    }

    /**
     * @return ActivityType
     */
    public function getActivityTypeWithCreate(): ActivityType
    {
        $this->activityType = is_null($this->activityType) ? new ActivityType() : $this->activityType;

        return $this->activityType;
    }

    /**
     * @param ActivityType|null $activityType
     * @return self
     */
    public function setActivityType(?ActivityType $activityType = null): self
    {
        $this->activityType = $activityType;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetActivityType(): self
    {
        $this->activityType = null;

        return $this;
    }
}
