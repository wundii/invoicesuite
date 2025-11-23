<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxextended\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\CodeType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\TextType;

class ProductClassificationType
{
    use HandlesObjectFlags;

    /**
     * @var CodeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\CodeType")
     * @JMS\Expose
     * @JMS\SerializedName("ClassCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getClassCode", setter="setClassCode")
     */
    private $classCode;

    /**
     * @var TextType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("ClassName")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getClassName", setter="setClassName")
     */
    private $className;

    /**
     * @return CodeType|null
     */
    public function getClassCode(): ?CodeType
    {
        return $this->classCode;
    }

    /**
     * @return CodeType
     */
    public function getClassCodeWithCreate(): CodeType
    {
        $this->classCode = is_null($this->classCode) ? new CodeType() : $this->classCode;

        return $this->classCode;
    }

    /**
     * @param CodeType|null $classCode
     * @return self
     */
    public function setClassCode(?CodeType $classCode = null): self
    {
        $this->classCode = $classCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetClassCode(): self
    {
        $this->classCode = null;

        return $this;
    }

    /**
     * @return TextType|null
     */
    public function getClassName(): ?TextType
    {
        return $this->className;
    }

    /**
     * @return TextType
     */
    public function getClassNameWithCreate(): TextType
    {
        $this->className = is_null($this->className) ? new TextType() : $this->className;

        return $this->className;
    }

    /**
     * @param TextType|null $className
     * @return self
     */
    public function setClassName(?TextType $className = null): self
    {
        $this->className = $className;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetClassName(): self
    {
        $this->className = null;

        return $this;
    }
}
