<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\models\ubl\cbc\FaceValueAmount;
use horstoeko\invoicesuite\models\ubl\cbc\ImmobilizationCertificateID;
use horstoeko\invoicesuite\models\ubl\cbc\MarketValueAmount;
use horstoeko\invoicesuite\models\ubl\cbc\SecurityID;
use horstoeko\invoicesuite\models\ubl\cbc\SharesNumberQuantity;

class ImmobilizedSecurityType
{
    use HandlesObjectFlags;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ImmobilizationCertificateID
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ImmobilizationCertificateID")
     * @JMS\Expose
     * @JMS\SerializedName("ImmobilizationCertificateID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getImmobilizationCertificateID", setter="setImmobilizationCertificateID")
     */
    private $immobilizationCertificateID;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\SecurityID
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\SecurityID")
     * @JMS\Expose
     * @JMS\SerializedName("SecurityID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSecurityID", setter="setSecurityID")
     */
    private $securityID;

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
     * @var \horstoeko\invoicesuite\models\ubl\cbc\FaceValueAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\FaceValueAmount")
     * @JMS\Expose
     * @JMS\SerializedName("FaceValueAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFaceValueAmount", setter="setFaceValueAmount")
     */
    private $faceValueAmount;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\MarketValueAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\MarketValueAmount")
     * @JMS\Expose
     * @JMS\SerializedName("MarketValueAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMarketValueAmount", setter="setMarketValueAmount")
     */
    private $marketValueAmount;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\SharesNumberQuantity
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\SharesNumberQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("SharesNumberQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSharesNumberQuantity", setter="setSharesNumberQuantity")
     */
    private $sharesNumberQuantity;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\IssuerParty
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\IssuerParty")
     * @JMS\Expose
     * @JMS\SerializedName("IssuerParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getIssuerParty", setter="setIssuerParty")
     */
    private $issuerParty;

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ImmobilizationCertificateID|null
     */
    public function getImmobilizationCertificateID(): ?ImmobilizationCertificateID
    {
        return $this->immobilizationCertificateID;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ImmobilizationCertificateID
     */
    public function getImmobilizationCertificateIDWithCreate(): ImmobilizationCertificateID
    {
        $this->immobilizationCertificateID = is_null($this->immobilizationCertificateID) ? new ImmobilizationCertificateID() : $this->immobilizationCertificateID;

        return $this->immobilizationCertificateID;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ImmobilizationCertificateID $immobilizationCertificateID
     * @return self
     */
    public function setImmobilizationCertificateID(ImmobilizationCertificateID $immobilizationCertificateID): self
    {
        $this->immobilizationCertificateID = $immobilizationCertificateID;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\SecurityID|null
     */
    public function getSecurityID(): ?SecurityID
    {
        return $this->securityID;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\SecurityID
     */
    public function getSecurityIDWithCreate(): SecurityID
    {
        $this->securityID = is_null($this->securityID) ? new SecurityID() : $this->securityID;

        return $this->securityID;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\SecurityID $securityID
     * @return self
     */
    public function setSecurityID(SecurityID $securityID): self
    {
        $this->securityID = $securityID;

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
     * @return \horstoeko\invoicesuite\models\ubl\cbc\FaceValueAmount|null
     */
    public function getFaceValueAmount(): ?FaceValueAmount
    {
        return $this->faceValueAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\FaceValueAmount
     */
    public function getFaceValueAmountWithCreate(): FaceValueAmount
    {
        $this->faceValueAmount = is_null($this->faceValueAmount) ? new FaceValueAmount() : $this->faceValueAmount;

        return $this->faceValueAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\FaceValueAmount $faceValueAmount
     * @return self
     */
    public function setFaceValueAmount(FaceValueAmount $faceValueAmount): self
    {
        $this->faceValueAmount = $faceValueAmount;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MarketValueAmount|null
     */
    public function getMarketValueAmount(): ?MarketValueAmount
    {
        return $this->marketValueAmount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\MarketValueAmount
     */
    public function getMarketValueAmountWithCreate(): MarketValueAmount
    {
        $this->marketValueAmount = is_null($this->marketValueAmount) ? new MarketValueAmount() : $this->marketValueAmount;

        return $this->marketValueAmount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\MarketValueAmount $marketValueAmount
     * @return self
     */
    public function setMarketValueAmount(MarketValueAmount $marketValueAmount): self
    {
        $this->marketValueAmount = $marketValueAmount;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\SharesNumberQuantity|null
     */
    public function getSharesNumberQuantity(): ?SharesNumberQuantity
    {
        return $this->sharesNumberQuantity;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\SharesNumberQuantity
     */
    public function getSharesNumberQuantityWithCreate(): SharesNumberQuantity
    {
        $this->sharesNumberQuantity = is_null($this->sharesNumberQuantity) ? new SharesNumberQuantity() : $this->sharesNumberQuantity;

        return $this->sharesNumberQuantity;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\SharesNumberQuantity $sharesNumberQuantity
     * @return self
     */
    public function setSharesNumberQuantity(SharesNumberQuantity $sharesNumberQuantity): self
    {
        $this->sharesNumberQuantity = $sharesNumberQuantity;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\IssuerParty|null
     */
    public function getIssuerParty(): ?IssuerParty
    {
        return $this->issuerParty;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\IssuerParty
     */
    public function getIssuerPartyWithCreate(): IssuerParty
    {
        $this->issuerParty = is_null($this->issuerParty) ? new IssuerParty() : $this->issuerParty;

        return $this->issuerParty;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\IssuerParty $issuerParty
     * @return self
     */
    public function setIssuerParty(IssuerParty $issuerParty): self
    {
        $this->issuerParty = $issuerParty;

        return $this;
    }
}
