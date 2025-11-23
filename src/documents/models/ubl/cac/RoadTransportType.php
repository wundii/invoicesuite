<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LicensePlateID;

class RoadTransportType
{
    use HandlesObjectFlags;

    /**
     * @var LicensePlateID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LicensePlateID")
     * @JMS\Expose
     * @JMS\SerializedName("LicensePlateID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLicensePlateID", setter="setLicensePlateID")
     */
    private $licensePlateID;

    /**
     * @return LicensePlateID|null
     */
    public function getLicensePlateID(): ?LicensePlateID
    {
        return $this->licensePlateID;
    }

    /**
     * @return LicensePlateID
     */
    public function getLicensePlateIDWithCreate(): LicensePlateID
    {
        $this->licensePlateID = is_null($this->licensePlateID) ? new LicensePlateID() : $this->licensePlateID;

        return $this->licensePlateID;
    }

    /**
     * @param LicensePlateID|null $licensePlateID
     * @return self
     */
    public function setLicensePlateID(?LicensePlateID $licensePlateID = null): self
    {
        $this->licensePlateID = $licensePlateID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLicensePlateID(): self
    {
        $this->licensePlateID = null;

        return $this;
    }
}
