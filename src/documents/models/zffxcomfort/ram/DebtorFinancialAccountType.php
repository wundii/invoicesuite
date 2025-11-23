<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxcomfort\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxcomfort\udt\IDType;

class DebtorFinancialAccountType
{
    use HandlesObjectFlags;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("IBANID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getIBANID", setter="setIBANID")
     */
    private $iBANID;

    /**
     * @return IDType|null
     */
    public function getIBANID(): ?IDType
    {
        return $this->iBANID;
    }

    /**
     * @return IDType
     */
    public function getIBANIDWithCreate(): IDType
    {
        $this->iBANID = is_null($this->iBANID) ? new IDType() : $this->iBANID;

        return $this->iBANID;
    }

    /**
     * @param IDType|null $iBANID
     * @return self
     */
    public function setIBANID(?IDType $iBANID = null): self
    {
        $this->iBANID = $iBANID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetIBANID(): self
    {
        $this->iBANID = null;

        return $this;
    }
}
