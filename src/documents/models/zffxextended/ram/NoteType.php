<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxextended\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\CodeType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\TextType;

class NoteType
{
    use HandlesObjectFlags;

    /**
     * @var CodeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\CodeType")
     * @JMS\Expose
     * @JMS\SerializedName("ContentCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getContentCode", setter="setContentCode")
     */
    private $contentCode;

    /**
     * @var TextType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("Content")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getContent", setter="setContent")
     */
    private $content;

    /**
     * @var CodeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\CodeType")
     * @JMS\Expose
     * @JMS\SerializedName("SubjectCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getSubjectCode", setter="setSubjectCode")
     */
    private $subjectCode;

    /**
     * @return CodeType|null
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
     * @param CodeType|null $contentCode
     * @return self
     */
    public function setContentCode(?CodeType $contentCode = null): self
    {
        $this->contentCode = $contentCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetContentCode(): self
    {
        $this->contentCode = null;

        return $this;
    }

    /**
     * @return TextType|null
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
     * @param TextType|null $content
     * @return self
     */
    public function setContent(?TextType $content = null): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetContent(): self
    {
        $this->content = null;

        return $this;
    }

    /**
     * @return CodeType|null
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
     * @param CodeType|null $subjectCode
     * @return self
     */
    public function setSubjectCode(?CodeType $subjectCode = null): self
    {
        $this->subjectCode = $subjectCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetSubjectCode(): self
    {
        $this->subjectCode = null;

        return $this;
    }
}
