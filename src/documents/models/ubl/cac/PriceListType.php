<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\StatusCode;

class PriceListType
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
     * @var StatusCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\StatusCode")
     * @JMS\Expose
     * @JMS\SerializedName("StatusCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getStatusCode", setter="setStatusCode")
     */
    private $statusCode;

    /**
     * @var array<ValidityPeriod>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ValidityPeriod>")
     * @JMS\Expose
     * @JMS\SerializedName("ValidityPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ValidityPeriod", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getValidityPeriod", setter="setValidityPeriod")
     */
    private $validityPeriod;

    /**
     * @var PreviousPriceList|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\PreviousPriceList")
     * @JMS\Expose
     * @JMS\SerializedName("PreviousPriceList")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPreviousPriceList", setter="setPreviousPriceList")
     */
    private $previousPriceList;

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
     * @return StatusCode|null
     */
    public function getStatusCode(): ?StatusCode
    {
        return $this->statusCode;
    }

    /**
     * @return StatusCode
     */
    public function getStatusCodeWithCreate(): StatusCode
    {
        $this->statusCode = is_null($this->statusCode) ? new StatusCode() : $this->statusCode;

        return $this->statusCode;
    }

    /**
     * @param StatusCode|null $statusCode
     * @return self
     */
    public function setStatusCode(?StatusCode $statusCode = null): self
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetStatusCode(): self
    {
        $this->statusCode = null;

        return $this;
    }

    /**
     * @return array<ValidityPeriod>|null
     */
    public function getValidityPeriod(): ?array
    {
        return $this->validityPeriod;
    }

    /**
     * @param array<ValidityPeriod>|null $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?array $validityPeriod = null): self
    {
        $this->validityPeriod = $validityPeriod;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetValidityPeriod(): self
    {
        $this->validityPeriod = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearValidityPeriod(): self
    {
        $this->validityPeriod = [];

        return $this;
    }

    /**
     * @return ValidityPeriod|null
     */
    public function firstValidityPeriod(): ?ValidityPeriod
    {
        $validityPeriod = $this->validityPeriod ?? [];
        $validityPeriod = reset($validityPeriod);

        if ($validityPeriod === false) {
            return null;
        }

        return $validityPeriod;
    }

    /**
     * @return ValidityPeriod|null
     */
    public function lastValidityPeriod(): ?ValidityPeriod
    {
        $validityPeriod = $this->validityPeriod ?? [];
        $validityPeriod = end($validityPeriod);

        if ($validityPeriod === false) {
            return null;
        }

        return $validityPeriod;
    }

    /**
     * @param ValidityPeriod $validityPeriod
     * @return self
     */
    public function addToValidityPeriod(ValidityPeriod $validityPeriod): self
    {
        $this->validityPeriod[] = $validityPeriod;

        return $this;
    }

    /**
     * @return ValidityPeriod
     */
    public function addToValidityPeriodWithCreate(): ValidityPeriod
    {
        $this->addTovalidityPeriod($validityPeriod = new ValidityPeriod());

        return $validityPeriod;
    }

    /**
     * @param ValidityPeriod $validityPeriod
     * @return self
     */
    public function addOnceToValidityPeriod(ValidityPeriod $validityPeriod): self
    {
        if (!is_array($this->validityPeriod)) {
            $this->validityPeriod = [];
        }

        $this->validityPeriod[0] = $validityPeriod;

        return $this;
    }

    /**
     * @return ValidityPeriod
     */
    public function addOnceToValidityPeriodWithCreate(): ValidityPeriod
    {
        if (!is_array($this->validityPeriod)) {
            $this->validityPeriod = [];
        }

        if ($this->validityPeriod === []) {
            $this->addOnceTovalidityPeriod(new ValidityPeriod());
        }

        return $this->validityPeriod[0];
    }

    /**
     * @return PreviousPriceList|null
     */
    public function getPreviousPriceList(): ?PreviousPriceList
    {
        return $this->previousPriceList;
    }

    /**
     * @return PreviousPriceList
     */
    public function getPreviousPriceListWithCreate(): PreviousPriceList
    {
        $this->previousPriceList = is_null($this->previousPriceList) ? new PreviousPriceList() : $this->previousPriceList;

        return $this->previousPriceList;
    }

    /**
     * @param PreviousPriceList|null $previousPriceList
     * @return self
     */
    public function setPreviousPriceList(?PreviousPriceList $previousPriceList = null): self
    {
        $this->previousPriceList = $previousPriceList;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPreviousPriceList(): self
    {
        $this->previousPriceList = null;

        return $this;
    }
}
