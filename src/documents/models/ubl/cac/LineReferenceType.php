<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LineID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LineStatusCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\UUID;

class LineReferenceType
{
    use HandlesObjectFlags;

    /**
     * @var LineID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LineID")
     * @JMS\Expose
     * @JMS\SerializedName("LineID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLineID", setter="setLineID")
     */
    private $lineID;

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
     * @var LineStatusCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LineStatusCode")
     * @JMS\Expose
     * @JMS\SerializedName("LineStatusCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLineStatusCode", setter="setLineStatusCode")
     */
    private $lineStatusCode;

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
     * @return LineID|null
     */
    public function getLineID(): ?LineID
    {
        return $this->lineID;
    }

    /**
     * @return LineID
     */
    public function getLineIDWithCreate(): LineID
    {
        $this->lineID = is_null($this->lineID) ? new LineID() : $this->lineID;

        return $this->lineID;
    }

    /**
     * @param LineID|null $lineID
     * @return self
     */
    public function setLineID(?LineID $lineID = null): self
    {
        $this->lineID = $lineID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLineID(): self
    {
        $this->lineID = null;

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
     * @return LineStatusCode|null
     */
    public function getLineStatusCode(): ?LineStatusCode
    {
        return $this->lineStatusCode;
    }

    /**
     * @return LineStatusCode
     */
    public function getLineStatusCodeWithCreate(): LineStatusCode
    {
        $this->lineStatusCode = is_null($this->lineStatusCode) ? new LineStatusCode() : $this->lineStatusCode;

        return $this->lineStatusCode;
    }

    /**
     * @param LineStatusCode|null $lineStatusCode
     * @return self
     */
    public function setLineStatusCode(?LineStatusCode $lineStatusCode = null): self
    {
        $this->lineStatusCode = $lineStatusCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLineStatusCode(): self
    {
        $this->lineStatusCode = null;

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
