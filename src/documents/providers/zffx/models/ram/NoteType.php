<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\zffx\models\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\providers\zffx\models\udt\CodeType;
use horstoeko\invoicesuite\documents\providers\zffx\models\udt\TextType;
use JMS\Serializer\Annotation as JMS;

class NoteType
{
    use HandlesObjectFlags;

    /**
     * @var null|CodeType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\udt\CodeType")
     * @JMS\Expose
     * @JMS\SerializedName("ContentCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getContentCode", setter="setContentCode")
     */
    private $contentCode;

    /**
     * @var null|TextType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("Content")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getContent", setter="setContent")
     */
    private $content;

    /**
     * @var null|CodeType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\zffx\models\udt\CodeType")
     * @JMS\Expose
     * @JMS\SerializedName("SubjectCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getSubjectCode", setter="setSubjectCode")
     */
    private $subjectCode;

    /**
     * @return null|CodeType
     */
    public function getContentCode(): ?CodeType
    {
        return $this->contentCode;
    }

    /**
     * @return CodeType
     */
    public function getContentCodeWithCreate(): CodeType
    {
        $this->contentCode = is_null($this->contentCode) ? new CodeType() : $this->contentCode;

        return $this->contentCode;
    }

    /**
     * @param  null|CodeType $contentCode
     * @return static
     */
    public function setContentCode(?CodeType $contentCode = null): static
    {
        $this->contentCode = $contentCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetContentCode(): static
    {
        $this->contentCode = null;

        return $this;
    }

    /**
     * @return null|TextType
     */
    public function getContent(): ?TextType
    {
        return $this->content;
    }

    /**
     * @return TextType
     */
    public function getContentWithCreate(): TextType
    {
        $this->content = is_null($this->content) ? new TextType() : $this->content;

        return $this->content;
    }

    /**
     * @param  null|TextType $content
     * @return static
     */
    public function setContent(?TextType $content = null): static
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetContent(): static
    {
        $this->content = null;

        return $this;
    }

    /**
     * @return null|CodeType
     */
    public function getSubjectCode(): ?CodeType
    {
        return $this->subjectCode;
    }

    /**
     * @return CodeType
     */
    public function getSubjectCodeWithCreate(): CodeType
    {
        $this->subjectCode = is_null($this->subjectCode) ? new CodeType() : $this->subjectCode;

        return $this->subjectCode;
    }

    /**
     * @param  null|CodeType $subjectCode
     * @return static
     */
    public function setSubjectCode(?CodeType $subjectCode = null): static
    {
        $this->subjectCode = $subjectCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSubjectCode(): static
    {
        $this->subjectCode = null;

        return $this;
    }
}
