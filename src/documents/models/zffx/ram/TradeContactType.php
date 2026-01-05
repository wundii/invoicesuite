<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffx\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffx\udt\CodeType;
use horstoeko\invoicesuite\documents\models\zffx\udt\TextType;
use JMS\Serializer\Annotation as JMS;

class TradeContactType
{
    use HandlesObjectFlags;

    /**
     * @var null|TextType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("PersonName")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getPersonName", setter="setPersonName")
     */
    private $personName;

    /**
     * @var null|TextType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("DepartmentName")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getDepartmentName", setter="setDepartmentName")
     */
    private $departmentName;

    /**
     * @var null|CodeType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\udt\CodeType")
     * @JMS\Expose
     * @JMS\SerializedName("TypeCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getTypeCode", setter="setTypeCode")
     */
    private $typeCode;

    /**
     * @var null|UniversalCommunicationType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\ram\UniversalCommunicationType")
     * @JMS\Expose
     * @JMS\SerializedName("TelephoneUniversalCommunication")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getTelephoneUniversalCommunication", setter="setTelephoneUniversalCommunication")
     */
    private $telephoneUniversalCommunication;

    /**
     * @var null|UniversalCommunicationType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\ram\UniversalCommunicationType")
     * @JMS\Expose
     * @JMS\SerializedName("FaxUniversalCommunication")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getFaxUniversalCommunication", setter="setFaxUniversalCommunication")
     */
    private $faxUniversalCommunication;

    /**
     * @var null|UniversalCommunicationType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffx\ram\UniversalCommunicationType")
     * @JMS\Expose
     * @JMS\SerializedName("EmailURIUniversalCommunication")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getEmailURIUniversalCommunication", setter="setEmailURIUniversalCommunication")
     */
    private $emailURIUniversalCommunication;

    /**
     * @return null|TextType
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
     * @param  null|TextType $personName
     * @return static
     */
    public function setPersonName(?TextType $personName = null): static
    {
        $this->personName = $personName;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPersonName(): static
    {
        $this->personName = null;

        return $this;
    }

    /**
     * @return null|TextType
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
     * @param  null|TextType $departmentName
     * @return static
     */
    public function setDepartmentName(?TextType $departmentName = null): static
    {
        $this->departmentName = $departmentName;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDepartmentName(): static
    {
        $this->departmentName = null;

        return $this;
    }

    /**
     * @return null|CodeType
     */
    public function getTypeCode(): ?CodeType
    {
        return $this->typeCode;
    }

    /**
     * @return CodeType
     */
    public function getTypeCodeWithCreate(): CodeType
    {
        $this->typeCode = is_null($this->typeCode) ? new CodeType() : $this->typeCode;

        return $this->typeCode;
    }

    /**
     * @param  null|CodeType $typeCode
     * @return static
     */
    public function setTypeCode(?CodeType $typeCode = null): static
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTypeCode(): static
    {
        $this->typeCode = null;

        return $this;
    }

    /**
     * @return null|UniversalCommunicationType
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
     * @param  null|UniversalCommunicationType $telephoneUniversalCommunication
     * @return static
     */
    public function setTelephoneUniversalCommunication(
        ?UniversalCommunicationType $telephoneUniversalCommunication = null,
    ): static {
        $this->telephoneUniversalCommunication = $telephoneUniversalCommunication;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTelephoneUniversalCommunication(): static
    {
        $this->telephoneUniversalCommunication = null;

        return $this;
    }

    /**
     * @return null|UniversalCommunicationType
     */
    public function getFaxUniversalCommunication(): ?UniversalCommunicationType
    {
        return $this->faxUniversalCommunication;
    }

    /**
     * @return UniversalCommunicationType
     */
    public function getFaxUniversalCommunicationWithCreate(): UniversalCommunicationType
    {
        $this->faxUniversalCommunication = is_null($this->faxUniversalCommunication) ? new UniversalCommunicationType() : $this->faxUniversalCommunication;

        return $this->faxUniversalCommunication;
    }

    /**
     * @param  null|UniversalCommunicationType $faxUniversalCommunication
     * @return static
     */
    public function setFaxUniversalCommunication(?UniversalCommunicationType $faxUniversalCommunication = null): static
    {
        $this->faxUniversalCommunication = $faxUniversalCommunication;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetFaxUniversalCommunication(): static
    {
        $this->faxUniversalCommunication = null;

        return $this;
    }

    /**
     * @return null|UniversalCommunicationType
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
     * @param  null|UniversalCommunicationType $emailURIUniversalCommunication
     * @return static
     */
    public function setEmailURIUniversalCommunication(
        ?UniversalCommunicationType $emailURIUniversalCommunication = null,
    ): static {
        $this->emailURIUniversalCommunication = $emailURIUniversalCommunication;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetEmailURIUniversalCommunication(): static
    {
        $this->emailURIUniversalCommunication = null;

        return $this;
    }
}
