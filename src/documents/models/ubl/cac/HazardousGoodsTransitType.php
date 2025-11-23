<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\HazardousRegulationCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\InhalationToxicityZoneCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PackingCriteriaCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TransportAuthorizationCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TransportEmergencyCardCode;

class HazardousGoodsTransitType
{
    use HandlesObjectFlags;

    /**
     * @var TransportEmergencyCardCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TransportEmergencyCardCode")
     * @JMS\Expose
     * @JMS\SerializedName("TransportEmergencyCardCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTransportEmergencyCardCode", setter="setTransportEmergencyCardCode")
     */
    private $transportEmergencyCardCode;

    /**
     * @var PackingCriteriaCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PackingCriteriaCode")
     * @JMS\Expose
     * @JMS\SerializedName("PackingCriteriaCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPackingCriteriaCode", setter="setPackingCriteriaCode")
     */
    private $packingCriteriaCode;

    /**
     * @var HazardousRegulationCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\HazardousRegulationCode")
     * @JMS\Expose
     * @JMS\SerializedName("HazardousRegulationCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getHazardousRegulationCode", setter="setHazardousRegulationCode")
     */
    private $hazardousRegulationCode;

    /**
     * @var InhalationToxicityZoneCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\InhalationToxicityZoneCode")
     * @JMS\Expose
     * @JMS\SerializedName("InhalationToxicityZoneCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getInhalationToxicityZoneCode", setter="setInhalationToxicityZoneCode")
     */
    private $inhalationToxicityZoneCode;

    /**
     * @var TransportAuthorizationCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TransportAuthorizationCode")
     * @JMS\Expose
     * @JMS\SerializedName("TransportAuthorizationCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTransportAuthorizationCode", setter="setTransportAuthorizationCode")
     */
    private $transportAuthorizationCode;

    /**
     * @var MaximumTemperature|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\MaximumTemperature")
     * @JMS\Expose
     * @JMS\SerializedName("MaximumTemperature")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMaximumTemperature", setter="setMaximumTemperature")
     */
    private $maximumTemperature;

    /**
     * @var MinimumTemperature|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\MinimumTemperature")
     * @JMS\Expose
     * @JMS\SerializedName("MinimumTemperature")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMinimumTemperature", setter="setMinimumTemperature")
     */
    private $minimumTemperature;

    /**
     * @return TransportEmergencyCardCode|null
     */
    public function getTransportEmergencyCardCode(): ?TransportEmergencyCardCode
    {
        return $this->transportEmergencyCardCode;
    }

    /**
     * @return TransportEmergencyCardCode
     */
    public function getTransportEmergencyCardCodeWithCreate(): TransportEmergencyCardCode
    {
        $this->transportEmergencyCardCode = is_null($this->transportEmergencyCardCode) ? new TransportEmergencyCardCode() : $this->transportEmergencyCardCode;

        return $this->transportEmergencyCardCode;
    }

    /**
     * @param TransportEmergencyCardCode|null $transportEmergencyCardCode
     * @return self
     */
    public function setTransportEmergencyCardCode(
        ?TransportEmergencyCardCode $transportEmergencyCardCode = null,
    ): self {
        $this->transportEmergencyCardCode = $transportEmergencyCardCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTransportEmergencyCardCode(): self
    {
        $this->transportEmergencyCardCode = null;

        return $this;
    }

    /**
     * @return PackingCriteriaCode|null
     */
    public function getPackingCriteriaCode(): ?PackingCriteriaCode
    {
        return $this->packingCriteriaCode;
    }

    /**
     * @return PackingCriteriaCode
     */
    public function getPackingCriteriaCodeWithCreate(): PackingCriteriaCode
    {
        $this->packingCriteriaCode = is_null($this->packingCriteriaCode) ? new PackingCriteriaCode() : $this->packingCriteriaCode;

        return $this->packingCriteriaCode;
    }

    /**
     * @param PackingCriteriaCode|null $packingCriteriaCode
     * @return self
     */
    public function setPackingCriteriaCode(?PackingCriteriaCode $packingCriteriaCode = null): self
    {
        $this->packingCriteriaCode = $packingCriteriaCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPackingCriteriaCode(): self
    {
        $this->packingCriteriaCode = null;

        return $this;
    }

    /**
     * @return HazardousRegulationCode|null
     */
    public function getHazardousRegulationCode(): ?HazardousRegulationCode
    {
        return $this->hazardousRegulationCode;
    }

    /**
     * @return HazardousRegulationCode
     */
    public function getHazardousRegulationCodeWithCreate(): HazardousRegulationCode
    {
        $this->hazardousRegulationCode = is_null($this->hazardousRegulationCode) ? new HazardousRegulationCode() : $this->hazardousRegulationCode;

        return $this->hazardousRegulationCode;
    }

    /**
     * @param HazardousRegulationCode|null $hazardousRegulationCode
     * @return self
     */
    public function setHazardousRegulationCode(?HazardousRegulationCode $hazardousRegulationCode = null): self
    {
        $this->hazardousRegulationCode = $hazardousRegulationCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetHazardousRegulationCode(): self
    {
        $this->hazardousRegulationCode = null;

        return $this;
    }

    /**
     * @return InhalationToxicityZoneCode|null
     */
    public function getInhalationToxicityZoneCode(): ?InhalationToxicityZoneCode
    {
        return $this->inhalationToxicityZoneCode;
    }

    /**
     * @return InhalationToxicityZoneCode
     */
    public function getInhalationToxicityZoneCodeWithCreate(): InhalationToxicityZoneCode
    {
        $this->inhalationToxicityZoneCode = is_null($this->inhalationToxicityZoneCode) ? new InhalationToxicityZoneCode() : $this->inhalationToxicityZoneCode;

        return $this->inhalationToxicityZoneCode;
    }

    /**
     * @param InhalationToxicityZoneCode|null $inhalationToxicityZoneCode
     * @return self
     */
    public function setInhalationToxicityZoneCode(
        ?InhalationToxicityZoneCode $inhalationToxicityZoneCode = null,
    ): self {
        $this->inhalationToxicityZoneCode = $inhalationToxicityZoneCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetInhalationToxicityZoneCode(): self
    {
        $this->inhalationToxicityZoneCode = null;

        return $this;
    }

    /**
     * @return TransportAuthorizationCode|null
     */
    public function getTransportAuthorizationCode(): ?TransportAuthorizationCode
    {
        return $this->transportAuthorizationCode;
    }

    /**
     * @return TransportAuthorizationCode
     */
    public function getTransportAuthorizationCodeWithCreate(): TransportAuthorizationCode
    {
        $this->transportAuthorizationCode = is_null($this->transportAuthorizationCode) ? new TransportAuthorizationCode() : $this->transportAuthorizationCode;

        return $this->transportAuthorizationCode;
    }

    /**
     * @param TransportAuthorizationCode|null $transportAuthorizationCode
     * @return self
     */
    public function setTransportAuthorizationCode(
        ?TransportAuthorizationCode $transportAuthorizationCode = null,
    ): self {
        $this->transportAuthorizationCode = $transportAuthorizationCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTransportAuthorizationCode(): self
    {
        $this->transportAuthorizationCode = null;

        return $this;
    }

    /**
     * @return MaximumTemperature|null
     */
    public function getMaximumTemperature(): ?MaximumTemperature
    {
        return $this->maximumTemperature;
    }

    /**
     * @return MaximumTemperature
     */
    public function getMaximumTemperatureWithCreate(): MaximumTemperature
    {
        $this->maximumTemperature = is_null($this->maximumTemperature) ? new MaximumTemperature() : $this->maximumTemperature;

        return $this->maximumTemperature;
    }

    /**
     * @param MaximumTemperature|null $maximumTemperature
     * @return self
     */
    public function setMaximumTemperature(?MaximumTemperature $maximumTemperature = null): self
    {
        $this->maximumTemperature = $maximumTemperature;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMaximumTemperature(): self
    {
        $this->maximumTemperature = null;

        return $this;
    }

    /**
     * @return MinimumTemperature|null
     */
    public function getMinimumTemperature(): ?MinimumTemperature
    {
        return $this->minimumTemperature;
    }

    /**
     * @return MinimumTemperature
     */
    public function getMinimumTemperatureWithCreate(): MinimumTemperature
    {
        $this->minimumTemperature = is_null($this->minimumTemperature) ? new MinimumTemperature() : $this->minimumTemperature;

        return $this->minimumTemperature;
    }

    /**
     * @param MinimumTemperature|null $minimumTemperature
     * @return self
     */
    public function setMinimumTemperature(?MinimumTemperature $minimumTemperature = null): self
    {
        $this->minimumTemperature = $minimumTemperature;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMinimumTemperature(): self
    {
        $this->minimumTemperature = null;

        return $this;
    }
}
