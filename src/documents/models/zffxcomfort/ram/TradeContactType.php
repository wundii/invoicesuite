<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxcomfort\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxcomfort\udt\TextType;

class TradeContactType
{
    use HandlesObjectFlags;

    /**
     * @var TextType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("PersonName")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getPersonName", setter="setPersonName")
     */
    private $personName;

    /**
     * @var TextType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("DepartmentName")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getDepartmentName", setter="setDepartmentName")
     */
    private $departmentName;

    /**
     * @var UniversalCommunicationType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\ram\UniversalCommunicationType")
     * @JMS\Expose
     * @JMS\SerializedName("TelephoneUniversalCommunication")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getTelephoneUniversalCommunication", setter="setTelephoneUniversalCommunication")
     */
    private $telephoneUniversalCommunication;

    /**
     * @var UniversalCommunicationType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\ram\UniversalCommunicationType")
     * @JMS\Expose
     * @JMS\SerializedName("EmailURIUniversalCommunication")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getEmailURIUniversalCommunication", setter="setEmailURIUniversalCommunication")
     */
    private $emailURIUniversalCommunication;

    /**
     * @return TextType|null
     */
    public function getPersonName(): ?TextType
    {
        return $this->personName;
    }

    /**
     * @return TextType
     */
    public function getPersonNameWithCreate(): TextType
    {
        $this->personName = is_null($this->personName) ? new TextType() : $this->personName;

        return $this->personName;
    }

    /**
     * @param TextType|null $personName
     * @return self
     */
    public function setPersonName(?TextType $personName = null): self
    {
        $this->personName = $personName;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPersonName(): self
    {
        $this->personName = null;

        return $this;
    }

    /**
     * @return TextType|null
     */
    public function getDepartmentName(): ?TextType
    {
        return $this->departmentName;
    }

    /**
     * @return TextType
     */
    public function getDepartmentNameWithCreate(): TextType
    {
        $this->departmentName = is_null($this->departmentName) ? new TextType() : $this->departmentName;

        return $this->departmentName;
    }

    /**
     * @param TextType|null $departmentName
     * @return self
     */
    public function setDepartmentName(?TextType $departmentName = null): self
    {
        $this->departmentName = $departmentName;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDepartmentName(): self
    {
        $this->departmentName = null;

        return $this;
    }

    /**
     * @return UniversalCommunicationType|null
     */
    public function getTelephoneUniversalCommunication(): ?UniversalCommunicationType
    {
        return $this->telephoneUniversalCommunication;
    }

    /**
     * @return UniversalCommunicationType
     */
    public function getTelephoneUniversalCommunicationWithCreate(): UniversalCommunicationType
    {
        $this->telephoneUniversalCommunication = is_null($this->telephoneUniversalCommunication) ? new UniversalCommunicationType() : $this->telephoneUniversalCommunication;

        return $this->telephoneUniversalCommunication;
    }

    /**
     * @param UniversalCommunicationType|null $telephoneUniversalCommunication
     * @return self
     */
    public function setTelephoneUniversalCommunication(
        ?UniversalCommunicationType $telephoneUniversalCommunication = null,
    ): self {
        $this->telephoneUniversalCommunication = $telephoneUniversalCommunication;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTelephoneUniversalCommunication(): self
    {
        $this->telephoneUniversalCommunication = null;

        return $this;
    }

    /**
     * @return UniversalCommunicationType|null
     */
    public function getEmailURIUniversalCommunication(): ?UniversalCommunicationType
    {
        return $this->emailURIUniversalCommunication;
    }

    /**
     * @return UniversalCommunicationType
     */
    public function getEmailURIUniversalCommunicationWithCreate(): UniversalCommunicationType
    {
        $this->emailURIUniversalCommunication = is_null($this->emailURIUniversalCommunication) ? new UniversalCommunicationType() : $this->emailURIUniversalCommunication;

        return $this->emailURIUniversalCommunication;
    }

    /**
     * @param UniversalCommunicationType|null $emailURIUniversalCommunication
     * @return self
     */
    public function setEmailURIUniversalCommunication(
        ?UniversalCommunicationType $emailURIUniversalCommunication = null,
    ): self {
        $this->emailURIUniversalCommunication = $emailURIUniversalCommunication;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetEmailURIUniversalCommunication(): self
    {
        $this->emailURIUniversalCommunication = null;

        return $this;
    }
}
