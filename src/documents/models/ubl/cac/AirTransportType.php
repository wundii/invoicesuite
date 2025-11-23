<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\AircraftID;

class AirTransportType
{
    use HandlesObjectFlags;

    /**
     * @var AircraftID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\AircraftID")
     * @JMS\Expose
     * @JMS\SerializedName("AircraftID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAircraftID", setter="setAircraftID")
     */
    private $aircraftID;

    /**
     * @return AircraftID|null
     */
    public function getAircraftID(): ?AircraftID
    {
        return $this->aircraftID;
    }

    /**
     * @return AircraftID
     */
    public function getAircraftIDWithCreate(): AircraftID
    {
        $this->aircraftID = is_null($this->aircraftID) ? new AircraftID() : $this->aircraftID;

        return $this->aircraftID;
    }

    /**
     * @param AircraftID|null $aircraftID
     * @return self
     */
    public function setAircraftID(?AircraftID $aircraftID = null): self
    {
        $this->aircraftID = $aircraftID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAircraftID(): self
    {
        $this->aircraftID = null;

        return $this;
    }
}
