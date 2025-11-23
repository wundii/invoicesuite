<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\AltitudeMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CoordinateSystemCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LatitudeDegreesMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LatitudeDirectionCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LatitudeMinutesMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LongitudeDegreesMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LongitudeDirectionCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LongitudeMinutesMeasure;

class LocationCoordinateType
{
    use HandlesObjectFlags;

    /**
     * @var CoordinateSystemCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CoordinateSystemCode")
     * @JMS\Expose
     * @JMS\SerializedName("CoordinateSystemCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCoordinateSystemCode", setter="setCoordinateSystemCode")
     */
    private $coordinateSystemCode;

    /**
     * @var LatitudeDegreesMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LatitudeDegreesMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("LatitudeDegreesMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLatitudeDegreesMeasure", setter="setLatitudeDegreesMeasure")
     */
    private $latitudeDegreesMeasure;

    /**
     * @var LatitudeMinutesMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LatitudeMinutesMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("LatitudeMinutesMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLatitudeMinutesMeasure", setter="setLatitudeMinutesMeasure")
     */
    private $latitudeMinutesMeasure;

    /**
     * @var LatitudeDirectionCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LatitudeDirectionCode")
     * @JMS\Expose
     * @JMS\SerializedName("LatitudeDirectionCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLatitudeDirectionCode", setter="setLatitudeDirectionCode")
     */
    private $latitudeDirectionCode;

    /**
     * @var LongitudeDegreesMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LongitudeDegreesMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("LongitudeDegreesMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLongitudeDegreesMeasure", setter="setLongitudeDegreesMeasure")
     */
    private $longitudeDegreesMeasure;

    /**
     * @var LongitudeMinutesMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LongitudeMinutesMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("LongitudeMinutesMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLongitudeMinutesMeasure", setter="setLongitudeMinutesMeasure")
     */
    private $longitudeMinutesMeasure;

    /**
     * @var LongitudeDirectionCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LongitudeDirectionCode")
     * @JMS\Expose
     * @JMS\SerializedName("LongitudeDirectionCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLongitudeDirectionCode", setter="setLongitudeDirectionCode")
     */
    private $longitudeDirectionCode;

    /**
     * @var AltitudeMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\AltitudeMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("AltitudeMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAltitudeMeasure", setter="setAltitudeMeasure")
     */
    private $altitudeMeasure;

    /**
     * @return CoordinateSystemCode|null
     */
    public function getCoordinateSystemCode(): ?CoordinateSystemCode
    {
        return $this->coordinateSystemCode;
    }

    /**
     * @return CoordinateSystemCode
     */
    public function getCoordinateSystemCodeWithCreate(): CoordinateSystemCode
    {
        $this->coordinateSystemCode = is_null($this->coordinateSystemCode) ? new CoordinateSystemCode() : $this->coordinateSystemCode;

        return $this->coordinateSystemCode;
    }

    /**
     * @param CoordinateSystemCode|null $coordinateSystemCode
     * @return self
     */
    public function setCoordinateSystemCode(?CoordinateSystemCode $coordinateSystemCode = null): self
    {
        $this->coordinateSystemCode = $coordinateSystemCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCoordinateSystemCode(): self
    {
        $this->coordinateSystemCode = null;

        return $this;
    }

    /**
     * @return LatitudeDegreesMeasure|null
     */
    public function getLatitudeDegreesMeasure(): ?LatitudeDegreesMeasure
    {
        return $this->latitudeDegreesMeasure;
    }

    /**
     * @return LatitudeDegreesMeasure
     */
    public function getLatitudeDegreesMeasureWithCreate(): LatitudeDegreesMeasure
    {
        $this->latitudeDegreesMeasure = is_null($this->latitudeDegreesMeasure) ? new LatitudeDegreesMeasure() : $this->latitudeDegreesMeasure;

        return $this->latitudeDegreesMeasure;
    }

    /**
     * @param LatitudeDegreesMeasure|null $latitudeDegreesMeasure
     * @return self
     */
    public function setLatitudeDegreesMeasure(?LatitudeDegreesMeasure $latitudeDegreesMeasure = null): self
    {
        $this->latitudeDegreesMeasure = $latitudeDegreesMeasure;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLatitudeDegreesMeasure(): self
    {
        $this->latitudeDegreesMeasure = null;

        return $this;
    }

    /**
     * @return LatitudeMinutesMeasure|null
     */
    public function getLatitudeMinutesMeasure(): ?LatitudeMinutesMeasure
    {
        return $this->latitudeMinutesMeasure;
    }

    /**
     * @return LatitudeMinutesMeasure
     */
    public function getLatitudeMinutesMeasureWithCreate(): LatitudeMinutesMeasure
    {
        $this->latitudeMinutesMeasure = is_null($this->latitudeMinutesMeasure) ? new LatitudeMinutesMeasure() : $this->latitudeMinutesMeasure;

        return $this->latitudeMinutesMeasure;
    }

    /**
     * @param LatitudeMinutesMeasure|null $latitudeMinutesMeasure
     * @return self
     */
    public function setLatitudeMinutesMeasure(?LatitudeMinutesMeasure $latitudeMinutesMeasure = null): self
    {
        $this->latitudeMinutesMeasure = $latitudeMinutesMeasure;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLatitudeMinutesMeasure(): self
    {
        $this->latitudeMinutesMeasure = null;

        return $this;
    }

    /**
     * @return LatitudeDirectionCode|null
     */
    public function getLatitudeDirectionCode(): ?LatitudeDirectionCode
    {
        return $this->latitudeDirectionCode;
    }

    /**
     * @return LatitudeDirectionCode
     */
    public function getLatitudeDirectionCodeWithCreate(): LatitudeDirectionCode
    {
        $this->latitudeDirectionCode = is_null($this->latitudeDirectionCode) ? new LatitudeDirectionCode() : $this->latitudeDirectionCode;

        return $this->latitudeDirectionCode;
    }

    /**
     * @param LatitudeDirectionCode|null $latitudeDirectionCode
     * @return self
     */
    public function setLatitudeDirectionCode(?LatitudeDirectionCode $latitudeDirectionCode = null): self
    {
        $this->latitudeDirectionCode = $latitudeDirectionCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLatitudeDirectionCode(): self
    {
        $this->latitudeDirectionCode = null;

        return $this;
    }

    /**
     * @return LongitudeDegreesMeasure|null
     */
    public function getLongitudeDegreesMeasure(): ?LongitudeDegreesMeasure
    {
        return $this->longitudeDegreesMeasure;
    }

    /**
     * @return LongitudeDegreesMeasure
     */
    public function getLongitudeDegreesMeasureWithCreate(): LongitudeDegreesMeasure
    {
        $this->longitudeDegreesMeasure = is_null($this->longitudeDegreesMeasure) ? new LongitudeDegreesMeasure() : $this->longitudeDegreesMeasure;

        return $this->longitudeDegreesMeasure;
    }

    /**
     * @param LongitudeDegreesMeasure|null $longitudeDegreesMeasure
     * @return self
     */
    public function setLongitudeDegreesMeasure(?LongitudeDegreesMeasure $longitudeDegreesMeasure = null): self
    {
        $this->longitudeDegreesMeasure = $longitudeDegreesMeasure;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLongitudeDegreesMeasure(): self
    {
        $this->longitudeDegreesMeasure = null;

        return $this;
    }

    /**
     * @return LongitudeMinutesMeasure|null
     */
    public function getLongitudeMinutesMeasure(): ?LongitudeMinutesMeasure
    {
        return $this->longitudeMinutesMeasure;
    }

    /**
     * @return LongitudeMinutesMeasure
     */
    public function getLongitudeMinutesMeasureWithCreate(): LongitudeMinutesMeasure
    {
        $this->longitudeMinutesMeasure = is_null($this->longitudeMinutesMeasure) ? new LongitudeMinutesMeasure() : $this->longitudeMinutesMeasure;

        return $this->longitudeMinutesMeasure;
    }

    /**
     * @param LongitudeMinutesMeasure|null $longitudeMinutesMeasure
     * @return self
     */
    public function setLongitudeMinutesMeasure(?LongitudeMinutesMeasure $longitudeMinutesMeasure = null): self
    {
        $this->longitudeMinutesMeasure = $longitudeMinutesMeasure;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLongitudeMinutesMeasure(): self
    {
        $this->longitudeMinutesMeasure = null;

        return $this;
    }

    /**
     * @return LongitudeDirectionCode|null
     */
    public function getLongitudeDirectionCode(): ?LongitudeDirectionCode
    {
        return $this->longitudeDirectionCode;
    }

    /**
     * @return LongitudeDirectionCode
     */
    public function getLongitudeDirectionCodeWithCreate(): LongitudeDirectionCode
    {
        $this->longitudeDirectionCode = is_null($this->longitudeDirectionCode) ? new LongitudeDirectionCode() : $this->longitudeDirectionCode;

        return $this->longitudeDirectionCode;
    }

    /**
     * @param LongitudeDirectionCode|null $longitudeDirectionCode
     * @return self
     */
    public function setLongitudeDirectionCode(?LongitudeDirectionCode $longitudeDirectionCode = null): self
    {
        $this->longitudeDirectionCode = $longitudeDirectionCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLongitudeDirectionCode(): self
    {
        $this->longitudeDirectionCode = null;

        return $this;
    }

    /**
     * @return AltitudeMeasure|null
     */
    public function getAltitudeMeasure(): ?AltitudeMeasure
    {
        return $this->altitudeMeasure;
    }

    /**
     * @return AltitudeMeasure
     */
    public function getAltitudeMeasureWithCreate(): AltitudeMeasure
    {
        $this->altitudeMeasure = is_null($this->altitudeMeasure) ? new AltitudeMeasure() : $this->altitudeMeasure;

        return $this->altitudeMeasure;
    }

    /**
     * @param AltitudeMeasure|null $altitudeMeasure
     * @return self
     */
    public function setAltitudeMeasure(?AltitudeMeasure $altitudeMeasure = null): self
    {
        $this->altitudeMeasure = $altitudeMeasure;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAltitudeMeasure(): self
    {
        $this->altitudeMeasure = null;

        return $this;
    }
}
