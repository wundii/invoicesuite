<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxextended\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\AmountType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\DateTimeType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\IDType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\TextType;

class TradePaymentTermsType
{
    use HandlesObjectFlags;

    /**
     * @var TextType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("Description")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getDescription", setter="setDescription")
     */
    private $description;

    /**
     * @var DateTimeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\DateTimeType")
     * @JMS\Expose
     * @JMS\SerializedName("DueDateDateTime")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getDueDateDateTime", setter="setDueDateDateTime")
     */
    private $dueDateDateTime;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("DirectDebitMandateID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getDirectDebitMandateID", setter="setDirectDebitMandateID")
     */
    private $directDebitMandateID;

    /**
     * @var AmountType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\AmountType")
     * @JMS\Expose
     * @JMS\SerializedName("PartialPaymentAmount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getPartialPaymentAmount", setter="setPartialPaymentAmount")
     */
    private $partialPaymentAmount;

    /**
     * @var TradePaymentPenaltyTermsType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\TradePaymentPenaltyTermsType")
     * @JMS\Expose
     * @JMS\SerializedName("ApplicableTradePaymentPenaltyTerms")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getApplicableTradePaymentPenaltyTerms", setter="setApplicableTradePaymentPenaltyTerms")
     */
    private $applicableTradePaymentPenaltyTerms;

    /**
     * @var TradePaymentDiscountTermsType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\TradePaymentDiscountTermsType")
     * @JMS\Expose
     * @JMS\SerializedName("ApplicableTradePaymentDiscountTerms")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getApplicableTradePaymentDiscountTerms", setter="setApplicableTradePaymentDiscountTerms")
     */
    private $applicableTradePaymentDiscountTerms;

    /**
     * @var TradePartyType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\TradePartyType")
     * @JMS\Expose
     * @JMS\SerializedName("PayeeTradeParty")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getPayeeTradeParty", setter="setPayeeTradeParty")
     */
    private $payeeTradeParty;

    /**
     * @return TextType|null
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
        $this->description = is_null($this->description) ? new TextType() : $this->description;

        return $this->description;
    }

    /**
     * @param TextType|null $description
     * @return self
     */
    public function setDescription(?TextType $description = null): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDescription(): self
    {
        $this->description = null;

        return $this;
    }

    /**
     * @return DateTimeType|null
     */
    public function getDueDateDateTime(): ?DateTimeType
    {
        return $this->dueDateDateTime;
    }

    /**
     * @return DateTimeType
     */
    public function getDueDateDateTimeWithCreate(): DateTimeType
    {
        $this->dueDateDateTime = is_null($this->dueDateDateTime) ? new DateTimeType() : $this->dueDateDateTime;

        return $this->dueDateDateTime;
    }

    /**
     * @param DateTimeType|null $dueDateDateTime
     * @return self
     */
    public function setDueDateDateTime(?DateTimeType $dueDateDateTime = null): self
    {
        $this->dueDateDateTime = $dueDateDateTime;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDueDateDateTime(): self
    {
        $this->dueDateDateTime = null;

        return $this;
    }

    /**
     * @return IDType|null
     */
    public function getDirectDebitMandateID(): ?IDType
    {
        return $this->directDebitMandateID;
    }

    /**
     * @return IDType
     */
    public function getDirectDebitMandateIDWithCreate(): IDType
    {
        $this->directDebitMandateID = is_null($this->directDebitMandateID) ? new IDType() : $this->directDebitMandateID;

        return $this->directDebitMandateID;
    }

    /**
     * @param IDType|null $directDebitMandateID
     * @return self
     */
    public function setDirectDebitMandateID(?IDType $directDebitMandateID = null): self
    {
        $this->directDebitMandateID = $directDebitMandateID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDirectDebitMandateID(): self
    {
        $this->directDebitMandateID = null;

        return $this;
    }

    /**
     * @return AmountType|null
     */
    public function getPartialPaymentAmount(): ?AmountType
    {
        return $this->partialPaymentAmount;
    }

    /**
     * @return AmountType
     */
    public function getPartialPaymentAmountWithCreate(): AmountType
    {
        $this->partialPaymentAmount = is_null($this->partialPaymentAmount) ? new AmountType() : $this->partialPaymentAmount;

        return $this->partialPaymentAmount;
    }

    /**
     * @param AmountType|null $partialPaymentAmount
     * @return self
     */
    public function setPartialPaymentAmount(?AmountType $partialPaymentAmount = null): self
    {
        $this->partialPaymentAmount = $partialPaymentAmount;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPartialPaymentAmount(): self
    {
        $this->partialPaymentAmount = null;

        return $this;
    }

    /**
     * @return TradePaymentPenaltyTermsType|null
     */
    public function getApplicableTradePaymentPenaltyTerms(): ?TradePaymentPenaltyTermsType
    {
        return $this->applicableTradePaymentPenaltyTerms;
    }

    /**
     * @return TradePaymentPenaltyTermsType
     */
    public function getApplicableTradePaymentPenaltyTermsWithCreate(): TradePaymentPenaltyTermsType
    {
        $this->applicableTradePaymentPenaltyTerms = is_null($this->applicableTradePaymentPenaltyTerms) ? new TradePaymentPenaltyTermsType() : $this->applicableTradePaymentPenaltyTerms;

        return $this->applicableTradePaymentPenaltyTerms;
    }

    /**
     * @param TradePaymentPenaltyTermsType|null $applicableTradePaymentPenaltyTerms
     * @return self
     */
    public function setApplicableTradePaymentPenaltyTerms(
        ?TradePaymentPenaltyTermsType $applicableTradePaymentPenaltyTerms = null,
    ): self {
        $this->applicableTradePaymentPenaltyTerms = $applicableTradePaymentPenaltyTerms;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetApplicableTradePaymentPenaltyTerms(): self
    {
        $this->applicableTradePaymentPenaltyTerms = null;

        return $this;
    }

    /**
     * @return TradePaymentDiscountTermsType|null
     */
    public function getApplicableTradePaymentDiscountTerms(): ?TradePaymentDiscountTermsType
    {
        return $this->applicableTradePaymentDiscountTerms;
    }

    /**
     * @return TradePaymentDiscountTermsType
     */
    public function getApplicableTradePaymentDiscountTermsWithCreate(): TradePaymentDiscountTermsType
    {
        $this->applicableTradePaymentDiscountTerms = is_null($this->applicableTradePaymentDiscountTerms) ? new TradePaymentDiscountTermsType() : $this->applicableTradePaymentDiscountTerms;

        return $this->applicableTradePaymentDiscountTerms;
    }

    /**
     * @param TradePaymentDiscountTermsType|null $applicableTradePaymentDiscountTerms
     * @return self
     */
    public function setApplicableTradePaymentDiscountTerms(
        ?TradePaymentDiscountTermsType $applicableTradePaymentDiscountTerms = null,
    ): self {
        $this->applicableTradePaymentDiscountTerms = $applicableTradePaymentDiscountTerms;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetApplicableTradePaymentDiscountTerms(): self
    {
        $this->applicableTradePaymentDiscountTerms = null;

        return $this;
    }

    /**
     * @return TradePartyType|null
     */
    public function getPayeeTradeParty(): ?TradePartyType
    {
        return $this->payeeTradeParty;
    }

    /**
     * @return TradePartyType
     */
    public function getPayeeTradePartyWithCreate(): TradePartyType
    {
        $this->payeeTradeParty = is_null($this->payeeTradeParty) ? new TradePartyType() : $this->payeeTradeParty;

        return $this->payeeTradeParty;
    }

    /**
     * @param TradePartyType|null $payeeTradeParty
     * @return self
     */
    public function setPayeeTradeParty(?TradePartyType $payeeTradeParty = null): self
    {
        $this->payeeTradeParty = $payeeTradeParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetPayeeTradeParty(): self
    {
        $this->payeeTradeParty = null;

        return $this;
    }
}
