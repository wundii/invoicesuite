<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Content;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;

class ClauseType
{
    use HandlesObjectFlags;

    /**
     * @var ID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ID")
     * @JMS\Expose
     * @JMS\SerializedName("ID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getID", setter="setID")
     */
    private $iD;

    /**
     * @var array<Content>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Content>")
     * @JMS\Expose
     * @JMS\SerializedName("Content")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Content", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getContent", setter="setContent")
     */
    private $content;

    /**
     * @return ID|null
     */
    public function getID(): ?ID
    {
        return $this->iD;
    }

    /**
     * @return ID
     */
    public function getIDWithCreate(): ID
    {
        $this->iD = is_null($this->iD) ? new ID() : $this->iD;

        return $this->iD;
    }

    /**
     * @param ID|null $iD
     * @return self
     */
    public function setID(?ID $iD = null): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetID(): self
    {
        $this->iD = null;

        return $this;
    }

    /**
     * @return array<Content>|null
     */
    public function getContent(): ?array
    {
        return $this->content;
    }

    /**
     * @param array<Content>|null $content
     * @return self
     */
    public function setContent(?array $content = null): self
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
     * @return self
     */
    public function clearContent(): self
    {
        $this->content = [];

        return $this;
    }

    /**
     * @return Content|null
     */
    public function firstContent(): ?Content
    {
        $content = $this->content ?? [];
        $content = reset($content);

        if ($content === false) {
            return null;
        }

        return $content;
    }

    /**
     * @return Content|null
     */
    public function lastContent(): ?Content
    {
        $content = $this->content ?? [];
        $content = end($content);

        if ($content === false) {
            return null;
        }

        return $content;
    }

    /**
     * @param Content $content
     * @return self
     */
    public function addToContent(Content $content): self
    {
        $this->content[] = $content;

        return $this;
    }

    /**
     * @return Content
     */
    public function addToContentWithCreate(): Content
    {
        $this->addTocontent($content = new Content());

        return $content;
    }

    /**
     * @param Content $content
     * @return self
     */
    public function addOnceToContent(Content $content): self
    {
        if (!is_array($this->content)) {
            $this->content = [];
        }

        $this->content[0] = $content;

        return $this;
    }

    /**
     * @return Content
     */
    public function addOnceToContentWithCreate(): Content
    {
        if (!is_array($this->content)) {
            $this->content = [];
        }

        if ($this->content === []) {
            $this->addOnceTocontent(new Content());
        }

        return $this->content[0];
    }
}
