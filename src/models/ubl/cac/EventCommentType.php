<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\ubl\cbc\Comment;

class EventCommentType
{
    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\Comment
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\Comment")
     * @JMS\Expose
     * @JMS\SerializedName("Comment")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getComment", setter="setComment")
     */
    private $comment;

    /**
     * @var \DateTimeInterface
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("IssueDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getIssueDate", setter="setIssueDate")
     */
    private $issueDate;

    /**
     * @var \DateTimeInterface
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("IssueTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getIssueTime", setter="setIssueTime")
     */
    private $issueTime;

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Comment|null
     */
    public function getComment(): ?Comment
    {
        return $this->comment;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Comment
     */
    public function getCommentWithCreate(): Comment
    {
        $this->comment = is_null($this->comment) ? new Comment() : $this->comment;

        return $this->comment;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Comment $comment
     * @return self
     */
    public function setComment(Comment $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getIssueDate(): ?\DateTimeInterface
    {
        return $this->issueDate;
    }

    /**
     * @param \DateTimeInterface $issueDate
     * @return self
     */
    public function setIssueDate(\DateTimeInterface $issueDate): self
    {
        $this->issueDate = $issueDate;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getIssueTime(): ?\DateTimeInterface
    {
        return $this->issueTime;
    }

    /**
     * @param \DateTimeInterface $issueTime
     * @return self
     */
    public function setIssueTime(\DateTimeInterface $issueTime): self
    {
        $this->issueTime = $issueTime;

        return $this;
    }
}
