<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CustomerReference;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\OrderTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SalesOrderID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\UUID;

class OrderReferenceType
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
     * @var SalesOrderID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\SalesOrderID")
     * @JMS\Expose
     * @JMS\SerializedName("SalesOrderID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSalesOrderID", setter="setSalesOrderID")
     */
    private $salesOrderID;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("CopyIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCopyIndicator", setter="setCopyIndicator")
     */
    private $copyIndicator;

    /**
     * @var UUID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\UUID")
     * @JMS\Expose
     * @JMS\SerializedName("UUID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getUUID", setter="setUUID")
     */
    private $uUID;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("IssueDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getIssueDate", setter="setIssueDate")
     */
    private $issueDate;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("IssueTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getIssueTime", setter="setIssueTime")
     */
    private $issueTime;

    /**
     * @var CustomerReference|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CustomerReference")
     * @JMS\Expose
     * @JMS\SerializedName("CustomerReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCustomerReference", setter="setCustomerReference")
     */
    private $customerReference;

    /**
     * @var OrderTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\OrderTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("OrderTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOrderTypeCode", setter="setOrderTypeCode")
     */
    private $orderTypeCode;

    /**
     * @var DocumentReference|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\DocumentReference")
     * @JMS\Expose
     * @JMS\SerializedName("DocumentReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDocumentReference", setter="setDocumentReference")
     */
    private $documentReference;

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
     * @return SalesOrderID|null
     */
    public function getSalesOrderID(): ?SalesOrderID
    {
        return $this->salesOrderID;
    }

    /**
     * @return SalesOrderID
     */
    public function getSalesOrderIDWithCreate(): SalesOrderID
    {
        $this->salesOrderID = is_null($this->salesOrderID) ? new SalesOrderID() : $this->salesOrderID;

        return $this->salesOrderID;
    }

    /**
     * @param SalesOrderID|null $salesOrderID
     * @return self
     */
    public function setSalesOrderID(?SalesOrderID $salesOrderID = null): self
    {
        $this->salesOrderID = $salesOrderID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSalesOrderID(): self
    {
        $this->salesOrderID = null;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCopyIndicator(): ?bool
    {
        return $this->copyIndicator;
    }

    /**
     * @param bool|null $copyIndicator
     * @return self
     */
    public function setCopyIndicator(?bool $copyIndicator = null): self
    {
        $this->copyIndicator = $copyIndicator;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCopyIndicator(): self
    {
        $this->copyIndicator = null;

        return $this;
    }

    /**
     * @return UUID|null
     */
    public function getUUID(): ?UUID
    {
        return $this->uUID;
    }

    /**
     * @return UUID
     */
    public function getUUIDWithCreate(): UUID
    {
        $this->uUID = is_null($this->uUID) ? new UUID() : $this->uUID;

        return $this->uUID;
    }

    /**
     * @param UUID|null $uUID
     * @return self
     */
    public function setUUID(?UUID $uUID = null): self
    {
        $this->uUID = $uUID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetUUID(): self
    {
        $this->uUID = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getIssueDate(): ?DateTimeInterface
    {
        return $this->issueDate;
    }

    /**
     * @param DateTimeInterface|null $issueDate
     * @return self
     */
    public function setIssueDate(?DateTimeInterface $issueDate = null): self
    {
        $this->issueDate = $issueDate;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetIssueDate(): self
    {
        $this->issueDate = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getIssueTime(): ?DateTimeInterface
    {
        return $this->issueTime;
    }

    /**
     * @param DateTimeInterface|null $issueTime
     * @return self
     */
    public function setIssueTime(?DateTimeInterface $issueTime = null): self
    {
        $this->issueTime = $issueTime;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetIssueTime(): self
    {
        $this->issueTime = null;

        return $this;
    }

    /**
     * @return CustomerReference|null
     */
    public function getCustomerReference(): ?CustomerReference
    {
        return $this->customerReference;
    }

    /**
     * @return CustomerReference
     */
    public function getCustomerReferenceWithCreate(): CustomerReference
    {
        $this->customerReference = is_null($this->customerReference) ? new CustomerReference() : $this->customerReference;

        return $this->customerReference;
    }

    /**
     * @param CustomerReference|null $customerReference
     * @return self
     */
    public function setCustomerReference(?CustomerReference $customerReference = null): self
    {
        $this->customerReference = $customerReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCustomerReference(): self
    {
        $this->customerReference = null;

        return $this;
    }

    /**
     * @return OrderTypeCode|null
     */
    public function getOrderTypeCode(): ?OrderTypeCode
    {
        return $this->orderTypeCode;
    }

    /**
     * @return OrderTypeCode
     */
    public function getOrderTypeCodeWithCreate(): OrderTypeCode
    {
        $this->orderTypeCode = is_null($this->orderTypeCode) ? new OrderTypeCode() : $this->orderTypeCode;

        return $this->orderTypeCode;
    }

    /**
     * @param OrderTypeCode|null $orderTypeCode
     * @return self
     */
    public function setOrderTypeCode(?OrderTypeCode $orderTypeCode = null): self
    {
        $this->orderTypeCode = $orderTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetOrderTypeCode(): self
    {
        $this->orderTypeCode = null;

        return $this;
    }

    /**
     * @return DocumentReference|null
     */
    public function getDocumentReference(): ?DocumentReference
    {
        return $this->documentReference;
    }

    /**
     * @return DocumentReference
     */
    public function getDocumentReferenceWithCreate(): DocumentReference
    {
        $this->documentReference = is_null($this->documentReference) ? new DocumentReference() : $this->documentReference;

        return $this->documentReference;
    }

    /**
     * @param DocumentReference|null $documentReference
     * @return self
     */
    public function setDocumentReference(?DocumentReference $documentReference = null): self
    {
        $this->documentReference = $documentReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDocumentReference(): self
    {
        $this->documentReference = null;

        return $this;
    }
}
