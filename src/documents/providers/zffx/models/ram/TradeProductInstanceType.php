<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\zffx\models\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\providers\zffx\models\udt\IDType;
use JMS\Serializer\Annotation as JMS;

class TradeProductInstanceType
{
    use HandlesObjectFlags;

    /**
     * @var null|IDType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("BatchID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBatchID", setter="setBatchID")
     */
    private $batchID;

    /**
     * @var null|IDType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("SupplierAssignedSerialID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getSupplierAssignedSerialID", setter="setSupplierAssignedSerialID")
     */
    private $supplierAssignedSerialID;

    /**
     * @return null|IDType
     */
    public function getBatchID(): ?IDType
    {
        return $this->batchID;
    }

    /**
     * @return IDType
     */
    public function getBatchIDWithCreate(): IDType
    {
        $this->batchID ??= new IDType();

        return $this->batchID;
    }

    /**
     * @param  null|IDType $batchID
     * @return static
     */
    public function setBatchID(
        ?IDType $batchID = null
    ): static {
        $this->batchID = $batchID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBatchID(): static
    {
        $this->batchID = null;

        return $this;
    }

    /**
     * @return null|IDType
     */
    public function getSupplierAssignedSerialID(): ?IDType
    {
        return $this->supplierAssignedSerialID;
    }

    /**
     * @return IDType
     */
    public function getSupplierAssignedSerialIDWithCreate(): IDType
    {
        $this->supplierAssignedSerialID ??= new IDType();

        return $this->supplierAssignedSerialID;
    }

    /**
     * @param  null|IDType $supplierAssignedSerialID
     * @return static
     */
    public function setSupplierAssignedSerialID(
        ?IDType $supplierAssignedSerialID = null
    ): static {
        $this->supplierAssignedSerialID = $supplierAssignedSerialID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSupplierAssignedSerialID(): static
    {
        $this->supplierAssignedSerialID = null;

        return $this;
    }
}
