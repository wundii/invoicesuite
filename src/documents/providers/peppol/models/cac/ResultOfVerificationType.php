<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\peppol\models\cac;

use DateTimeInterface;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\providers\peppol\models\cbc\ValidateProcess;
use horstoeko\invoicesuite\documents\providers\peppol\models\cbc\ValidateTool;
use horstoeko\invoicesuite\documents\providers\peppol\models\cbc\ValidateToolVersion;
use horstoeko\invoicesuite\documents\providers\peppol\models\cbc\ValidationResultCode;
use horstoeko\invoicesuite\documents\providers\peppol\models\cbc\ValidatorID;
use JMS\Serializer\Annotation as JMS;

class ResultOfVerificationType
{
    use HandlesObjectFlags;

    /**
     * @var null|ValidatorID
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\peppol\models\cbc\ValidatorID")
     * @JMS\Expose
     * @JMS\SerializedName("ValidatorID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getValidatorID", setter="setValidatorID")
     */
    private $validatorID;

    /**
     * @var null|ValidationResultCode
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\peppol\models\cbc\ValidationResultCode")
     * @JMS\Expose
     * @JMS\SerializedName("ValidationResultCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getValidationResultCode", setter="setValidationResultCode")
     */
    private $validationResultCode;

    /**
     * @var null|DateTimeInterface
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("ValidationDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getValidationDate", setter="setValidationDate")
     */
    private $validationDate;

    /**
     * @var null|DateTimeInterface
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("ValidationTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getValidationTime", setter="setValidationTime")
     */
    private $validationTime;

    /**
     * @var null|ValidateProcess
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\peppol\models\cbc\ValidateProcess")
     * @JMS\Expose
     * @JMS\SerializedName("ValidateProcess")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getValidateProcess", setter="setValidateProcess")
     */
    private $validateProcess;

    /**
     * @var null|ValidateTool
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\peppol\models\cbc\ValidateTool")
     * @JMS\Expose
     * @JMS\SerializedName("ValidateTool")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getValidateTool", setter="setValidateTool")
     */
    private $validateTool;

    /**
     * @var null|ValidateToolVersion
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\peppol\models\cbc\ValidateToolVersion")
     * @JMS\Expose
     * @JMS\SerializedName("ValidateToolVersion")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getValidateToolVersion", setter="setValidateToolVersion")
     */
    private $validateToolVersion;

    /**
     * @var null|SignatoryParty
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\peppol\models\cac\SignatoryParty")
     * @JMS\Expose
     * @JMS\SerializedName("SignatoryParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSignatoryParty", setter="setSignatoryParty")
     */
    private $signatoryParty;

    /**
     * @return null|ValidatorID
     */
    public function getValidatorID(): ?ValidatorID
    {
        return $this->validatorID;
    }

    /**
     * @return ValidatorID
     */
    public function getValidatorIDWithCreate(): ValidatorID
    {
        $this->validatorID ??= new ValidatorID();

        return $this->validatorID;
    }

    /**
     * @param  null|ValidatorID $validatorID
     * @return static
     */
    public function setValidatorID(
        ?ValidatorID $validatorID = null
    ): static {
        $this->validatorID = $validatorID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetValidatorID(): static
    {
        $this->validatorID = null;

        return $this;
    }

    /**
     * @return null|ValidationResultCode
     */
    public function getValidationResultCode(): ?ValidationResultCode
    {
        return $this->validationResultCode;
    }

    /**
     * @return ValidationResultCode
     */
    public function getValidationResultCodeWithCreate(): ValidationResultCode
    {
        $this->validationResultCode ??= new ValidationResultCode();

        return $this->validationResultCode;
    }

    /**
     * @param  null|ValidationResultCode $validationResultCode
     * @return static
     */
    public function setValidationResultCode(
        ?ValidationResultCode $validationResultCode = null
    ): static {
        $this->validationResultCode = $validationResultCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetValidationResultCode(): static
    {
        $this->validationResultCode = null;

        return $this;
    }

    /**
     * @return null|DateTimeInterface
     */
    public function getValidationDate(): ?DateTimeInterface
    {
        return $this->validationDate;
    }

    /**
     * @param  null|DateTimeInterface $validationDate
     * @return static
     */
    public function setValidationDate(
        ?DateTimeInterface $validationDate = null
    ): static {
        $this->validationDate = $validationDate;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetValidationDate(): static
    {
        $this->validationDate = null;

        return $this;
    }

    /**
     * @return null|DateTimeInterface
     */
    public function getValidationTime(): ?DateTimeInterface
    {
        return $this->validationTime;
    }

    /**
     * @param  null|DateTimeInterface $validationTime
     * @return static
     */
    public function setValidationTime(
        ?DateTimeInterface $validationTime = null
    ): static {
        $this->validationTime = $validationTime;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetValidationTime(): static
    {
        $this->validationTime = null;

        return $this;
    }

    /**
     * @return null|ValidateProcess
     */
    public function getValidateProcess(): ?ValidateProcess
    {
        return $this->validateProcess;
    }

    /**
     * @return ValidateProcess
     */
    public function getValidateProcessWithCreate(): ValidateProcess
    {
        $this->validateProcess ??= new ValidateProcess();

        return $this->validateProcess;
    }

    /**
     * @param  null|ValidateProcess $validateProcess
     * @return static
     */
    public function setValidateProcess(
        ?ValidateProcess $validateProcess = null
    ): static {
        $this->validateProcess = $validateProcess;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetValidateProcess(): static
    {
        $this->validateProcess = null;

        return $this;
    }

    /**
     * @return null|ValidateTool
     */
    public function getValidateTool(): ?ValidateTool
    {
        return $this->validateTool;
    }

    /**
     * @return ValidateTool
     */
    public function getValidateToolWithCreate(): ValidateTool
    {
        $this->validateTool ??= new ValidateTool();

        return $this->validateTool;
    }

    /**
     * @param  null|ValidateTool $validateTool
     * @return static
     */
    public function setValidateTool(
        ?ValidateTool $validateTool = null
    ): static {
        $this->validateTool = $validateTool;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetValidateTool(): static
    {
        $this->validateTool = null;

        return $this;
    }

    /**
     * @return null|ValidateToolVersion
     */
    public function getValidateToolVersion(): ?ValidateToolVersion
    {
        return $this->validateToolVersion;
    }

    /**
     * @return ValidateToolVersion
     */
    public function getValidateToolVersionWithCreate(): ValidateToolVersion
    {
        $this->validateToolVersion ??= new ValidateToolVersion();

        return $this->validateToolVersion;
    }

    /**
     * @param  null|ValidateToolVersion $validateToolVersion
     * @return static
     */
    public function setValidateToolVersion(
        ?ValidateToolVersion $validateToolVersion = null
    ): static {
        $this->validateToolVersion = $validateToolVersion;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetValidateToolVersion(): static
    {
        $this->validateToolVersion = null;

        return $this;
    }

    /**
     * @return null|SignatoryParty
     */
    public function getSignatoryParty(): ?SignatoryParty
    {
        return $this->signatoryParty;
    }

    /**
     * @return SignatoryParty
     */
    public function getSignatoryPartyWithCreate(): SignatoryParty
    {
        $this->signatoryParty ??= new SignatoryParty();

        return $this->signatoryParty;
    }

    /**
     * @param  null|SignatoryParty $signatoryParty
     * @return static
     */
    public function setSignatoryParty(
        ?SignatoryParty $signatoryParty = null
    ): static {
        $this->signatoryParty = $signatoryParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSignatoryParty(): static
    {
        $this->signatoryParty = null;

        return $this;
    }
}
