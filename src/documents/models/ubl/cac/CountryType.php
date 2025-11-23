<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\IdentificationCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Name;

class CountryType
{
    use HandlesObjectFlags;

    /**
     * @var IdentificationCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\IdentificationCode")
     * @JMS\Expose
     * @JMS\SerializedName("IdentificationCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getIdentificationCode", setter="setIdentificationCode")
     */
    private $identificationCode;

    /**
     * @var Name|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Name")
     * @JMS\Expose
     * @JMS\SerializedName("Name")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getName", setter="setName")
     */
    private $name;

    /**
     * @return IdentificationCode|null
     */
    public function getIdentificationCode(): ?IdentificationCode
    {
        return $this->identificationCode;
    }

    /**
     * @return IdentificationCode
     */
    public function getIdentificationCodeWithCreate(): IdentificationCode
    {
        $this->identificationCode = is_null($this->identificationCode) ? new IdentificationCode() : $this->identificationCode;

        return $this->identificationCode;
    }

    /**
     * @param IdentificationCode|null $identificationCode
     * @return self
     */
    public function setIdentificationCode(?IdentificationCode $identificationCode = null): self
    {
        $this->identificationCode = $identificationCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetIdentificationCode(): self
    {
        $this->identificationCode = null;

        return $this;
    }

    /**
     * @return Name|null
     */
    public function getName(): ?Name
    {
        return $this->name;
    }

    /**
     * @return Name
     */
    public function getNameWithCreate(): Name
    {
        $this->name = is_null($this->name) ? new Name() : $this->name;

        return $this->name;
    }

    /**
     * @param Name|null $name
     * @return self
     */
    public function setName(?Name $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetName(): self
    {
        $this->name = null;

        return $this;
    }
}
