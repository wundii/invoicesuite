<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\zffx\models\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\providers\zffx\models\udt\CodeType;
use horstoeko\invoicesuite\documents\providers\zffx\models\udt\MeasureType;
use horstoeko\invoicesuite\documents\providers\zffx\models\udt\TextType;
use JMS\Serializer\Annotation as JMS;

class ProductCharacteristicType
{
    use HandlesObjectFlags;

    /**
     * @var null|CodeType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\udt\CodeType")
     * @JMS\Expose
     * @JMS\SerializedName("TypeCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getTypeCode", setter="setTypeCode")
     */
    private $typeCode;

    /**
     * @var null|TextType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("Description")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getDescription", setter="setDescription")
     */
    private $description;

    /**
     * @var null|MeasureType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\udt\MeasureType")
     * @JMS\Expose
     * @JMS\SerializedName("ValueMeasure")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getValueMeasure", setter="setValueMeasure")
     */
    private $valueMeasure;

    /**
     * @var null|TextType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("Value")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getValue", setter="setValue")
     */
    private $value;

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
        $this->typeCode ??= new CodeType();

        return $this->typeCode;
    }

    /**
     * @param  null|CodeType $typeCode
     * @return static
     */
    public function setTypeCode(
        ?CodeType $typeCode = null
    ): static {
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
     * @return null|TextType
     */
    public function getDescription(): ?TextType
    {
        return $this->description;
    }

    /**
     * @return TextType
     */
    public function getDescriptionWithCreate(): TextType
    {
        $this->description ??= new TextType();

        return $this->description;
    }

    /**
     * @param  null|TextType $description
     * @return static
     */
    public function setDescription(
        ?TextType $description = null
    ): static {
        $this->description = $description;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDescription(): static
    {
        $this->description = null;

        return $this;
    }

    /**
     * @return null|MeasureType
     */
    public function getValueMeasure(): ?MeasureType
    {
        return $this->valueMeasure;
    }

    /**
     * @return MeasureType
     */
    public function getValueMeasureWithCreate(): MeasureType
    {
        $this->valueMeasure ??= new MeasureType();

        return $this->valueMeasure;
    }

    /**
     * @param  null|MeasureType $valueMeasure
     * @return static
     */
    public function setValueMeasure(
        ?MeasureType $valueMeasure = null
    ): static {
        $this->valueMeasure = $valueMeasure;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetValueMeasure(): static
    {
        $this->valueMeasure = null;

        return $this;
    }

    /**
     * @return null|TextType
     */
    public function getValue(): ?TextType
    {
        return $this->value;
    }

    /**
     * @return TextType
     */
    public function getValueWithCreate(): TextType
    {
        $this->value ??= new TextType();

        return $this->value;
    }

    /**
     * @param  null|TextType $value
     * @return static
     */
    public function setValue(
        ?TextType $value = null
    ): static {
        $this->value = $value;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetValue(): static
    {
        $this->value = null;

        return $this;
    }
}
