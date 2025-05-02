<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\ubl\cbc\ID;
use horstoeko\invoicesuite\models\ubl\cbc\InstructionID;
use horstoeko\invoicesuite\models\ubl\cbc\PaidAmount;

class PaymentType
{
    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ID
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ID")
     * @JMS\Expose
     * @JMS\SerializedName("ID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getID", setter="setID")
     */
    private $iD;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\PaidAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\PaidAmount")
     * @JMS\Expose
     * @JMS\SerializedName("PaidAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPaidAmount", setter="setPaidAmount")
     */
    private $paidAmount;

    /**
     * @var \DateTimeInterface
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("ReceivedDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getReceivedDate", setter="setReceivedDate")
     */
    private $receivedDate;

    /**
     * @var \DateTimeInterface
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("PaidDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPaidDate", setter="setPaidDate")
     */
    private $paidDate;

    /**
     * @var \DateTimeInterface
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("PaidTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPaidTime", setter="setPaidTime")
     */
    private $paidTime;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\InstructionID
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\InstructionID")
     * @JMS\Expose
     * @JMS\SerializedName("InstructionID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getInstructionID", setter="setInstructionID")
     */
    private $instructionID;

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ID|null
     */
    public function getID(): ?ID
    {
        return $this->iD;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ID
     */
    public function getIDWithCreate(): ID
    {
        $this->iD = is_null($this->iD) ? new ID() : $this->iD;

        return $this->iD;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ID $iD
     * @return self
     */
    public function setID(ID $iD): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\PaidAmount|null
     */
    public function getPaidAmount(): ?PaidAmount
    {
        return $this->paidAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\PaidAmount
     */
    public function getPaidAmountWithCreate(): PaidAmount
    {
        $this->paidAmount = is_null($this->paidAmount) ? new PaidAmount() : $this->paidAmount;

        return $this->paidAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\PaidAmount $paidAmount
     * @return self
     */
    public function setPaidAmount(PaidAmount $paidAmount): self
    {
        $this->paidAmount = $paidAmount;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getReceivedDate(): ?\DateTimeInterface
    {
        return $this->receivedDate;
    }

    /**
     * @param \DateTimeInterface $receivedDate
     * @return self
     */
    public function setReceivedDate(\DateTimeInterface $receivedDate): self
    {
        $this->receivedDate = $receivedDate;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getPaidDate(): ?\DateTimeInterface
    {
        return $this->paidDate;
    }

    /**
     * @param \DateTimeInterface $paidDate
     * @return self
     */
    public function setPaidDate(\DateTimeInterface $paidDate): self
    {
        $this->paidDate = $paidDate;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getPaidTime(): ?\DateTimeInterface
    {
        return $this->paidTime;
    }

    /**
     * @param \DateTimeInterface $paidTime
     * @return self
     */
    public function setPaidTime(\DateTimeInterface $paidTime): self
    {
        $this->paidTime = $paidTime;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\InstructionID|null
     */
    public function getInstructionID(): ?InstructionID
    {
        return $this->instructionID;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\InstructionID
     */
    public function getInstructionIDWithCreate(): InstructionID
    {
        $this->instructionID = is_null($this->instructionID) ? new InstructionID() : $this->instructionID;

        return $this->instructionID;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\InstructionID $instructionID
     * @return self
     */
    public function setInstructionID(InstructionID $instructionID): self
    {
        $this->instructionID = $instructionID;

        return $this;
    }
}
