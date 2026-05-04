<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\peppol\models\cac;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\providers\peppol\models\cbc\AllowanceTotalAmount;
use horstoeko\invoicesuite\documents\providers\peppol\models\cbc\ChargeTotalAmount;
use horstoeko\invoicesuite\documents\providers\peppol\models\cbc\LineExtensionAmount;
use horstoeko\invoicesuite\documents\providers\peppol\models\cbc\PayableAlternativeAmount;
use horstoeko\invoicesuite\documents\providers\peppol\models\cbc\PayableAmount;
use horstoeko\invoicesuite\documents\providers\peppol\models\cbc\PayableRoundingAmount;
use horstoeko\invoicesuite\documents\providers\peppol\models\cbc\PrepaidAmount;
use horstoeko\invoicesuite\documents\providers\peppol\models\cbc\TaxExclusiveAmount;
use horstoeko\invoicesuite\documents\providers\peppol\models\cbc\TaxInclusiveAmount;
use JMS\Serializer\Annotation as JMS;

class MonetaryTotalType
{
    use HandlesObjectFlags;

    /**
     * @var null|LineExtensionAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\peppol\models\cbc\LineExtensionAmount")
     * @JMS\Expose
     * @JMS\SerializedName("LineExtensionAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLineExtensionAmount", setter="setLineExtensionAmount")
     */
    private $lineExtensionAmount;

    /**
     * @var null|TaxExclusiveAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\peppol\models\cbc\TaxExclusiveAmount")
     * @JMS\Expose
     * @JMS\SerializedName("TaxExclusiveAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTaxExclusiveAmount", setter="setTaxExclusiveAmount")
     */
    private $taxExclusiveAmount;

    /**
     * @var null|TaxInclusiveAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\peppol\models\cbc\TaxInclusiveAmount")
     * @JMS\Expose
     * @JMS\SerializedName("TaxInclusiveAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTaxInclusiveAmount", setter="setTaxInclusiveAmount")
     */
    private $taxInclusiveAmount;

    /**
     * @var null|AllowanceTotalAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\peppol\models\cbc\AllowanceTotalAmount")
     * @JMS\Expose
     * @JMS\SerializedName("AllowanceTotalAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAllowanceTotalAmount", setter="setAllowanceTotalAmount")
     */
    private $allowanceTotalAmount;

    /**
     * @var null|ChargeTotalAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\peppol\models\cbc\ChargeTotalAmount")
     * @JMS\Expose
     * @JMS\SerializedName("ChargeTotalAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getChargeTotalAmount", setter="setChargeTotalAmount")
     */
    private $chargeTotalAmount;

    /**
     * @var null|PrepaidAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\peppol\models\cbc\PrepaidAmount")
     * @JMS\Expose
     * @JMS\SerializedName("PrepaidAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPrepaidAmount", setter="setPrepaidAmount")
     */
    private $prepaidAmount;

    /**
     * @var null|PayableRoundingAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\peppol\models\cbc\PayableRoundingAmount")
     * @JMS\Expose
     * @JMS\SerializedName("PayableRoundingAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPayableRoundingAmount", setter="setPayableRoundingAmount")
     */
    private $payableRoundingAmount;

    /**
     * @var null|PayableAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\peppol\models\cbc\PayableAmount")
     * @JMS\Expose
     * @JMS\SerializedName("PayableAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPayableAmount", setter="setPayableAmount")
     */
    private $payableAmount;

    /**
     * @var null|PayableAlternativeAmount
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\providers\peppol\models\cbc\PayableAlternativeAmount")
     * @JMS\Expose
     * @JMS\SerializedName("PayableAlternativeAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPayableAlternativeAmount", setter="setPayableAlternativeAmount")
     */
    private $payableAlternativeAmount;

    /**
     * @return null|LineExtensionAmount
     */
    public function getLineExtensionAmount(): ?LineExtensionAmount
    {
        return $this->lineExtensionAmount;
    }

    /**
     * @return LineExtensionAmount
     */
    public function getLineExtensionAmountWithCreate(): LineExtensionAmount
    {
        $this->lineExtensionAmount ??= new LineExtensionAmount();

        return $this->lineExtensionAmount;
    }

    /**
     * @param  null|LineExtensionAmount $lineExtensionAmount
     * @return static
     */
    public function setLineExtensionAmount(
        ?LineExtensionAmount $lineExtensionAmount = null
    ): static {
        $this->lineExtensionAmount = $lineExtensionAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLineExtensionAmount(): static
    {
        $this->lineExtensionAmount = null;

        return $this;
    }

    /**
     * @return null|TaxExclusiveAmount
     */
    public function getTaxExclusiveAmount(): ?TaxExclusiveAmount
    {
        return $this->taxExclusiveAmount;
    }

    /**
     * @return TaxExclusiveAmount
     */
    public function getTaxExclusiveAmountWithCreate(): TaxExclusiveAmount
    {
        $this->taxExclusiveAmount ??= new TaxExclusiveAmount();

        return $this->taxExclusiveAmount;
    }

    /**
     * @param  null|TaxExclusiveAmount $taxExclusiveAmount
     * @return static
     */
    public function setTaxExclusiveAmount(
        ?TaxExclusiveAmount $taxExclusiveAmount = null
    ): static {
        $this->taxExclusiveAmount = $taxExclusiveAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTaxExclusiveAmount(): static
    {
        $this->taxExclusiveAmount = null;

        return $this;
    }

    /**
     * @return null|TaxInclusiveAmount
     */
    public function getTaxInclusiveAmount(): ?TaxInclusiveAmount
    {
        return $this->taxInclusiveAmount;
    }

    /**
     * @return TaxInclusiveAmount
     */
    public function getTaxInclusiveAmountWithCreate(): TaxInclusiveAmount
    {
        $this->taxInclusiveAmount ??= new TaxInclusiveAmount();

        return $this->taxInclusiveAmount;
    }

    /**
     * @param  null|TaxInclusiveAmount $taxInclusiveAmount
     * @return static
     */
    public function setTaxInclusiveAmount(
        ?TaxInclusiveAmount $taxInclusiveAmount = null
    ): static {
        $this->taxInclusiveAmount = $taxInclusiveAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTaxInclusiveAmount(): static
    {
        $this->taxInclusiveAmount = null;

        return $this;
    }

    /**
     * @return null|AllowanceTotalAmount
     */
    public function getAllowanceTotalAmount(): ?AllowanceTotalAmount
    {
        return $this->allowanceTotalAmount;
    }

    /**
     * @return AllowanceTotalAmount
     */
    public function getAllowanceTotalAmountWithCreate(): AllowanceTotalAmount
    {
        $this->allowanceTotalAmount ??= new AllowanceTotalAmount();

        return $this->allowanceTotalAmount;
    }

    /**
     * @param  null|AllowanceTotalAmount $allowanceTotalAmount
     * @return static
     */
    public function setAllowanceTotalAmount(
        ?AllowanceTotalAmount $allowanceTotalAmount = null
    ): static {
        $this->allowanceTotalAmount = $allowanceTotalAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAllowanceTotalAmount(): static
    {
        $this->allowanceTotalAmount = null;

        return $this;
    }

    /**
     * @return null|ChargeTotalAmount
     */
    public function getChargeTotalAmount(): ?ChargeTotalAmount
    {
        return $this->chargeTotalAmount;
    }

    /**
     * @return ChargeTotalAmount
     */
    public function getChargeTotalAmountWithCreate(): ChargeTotalAmount
    {
        $this->chargeTotalAmount ??= new ChargeTotalAmount();

        return $this->chargeTotalAmount;
    }

    /**
     * @param  null|ChargeTotalAmount $chargeTotalAmount
     * @return static
     */
    public function setChargeTotalAmount(
        ?ChargeTotalAmount $chargeTotalAmount = null
    ): static {
        $this->chargeTotalAmount = $chargeTotalAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetChargeTotalAmount(): static
    {
        $this->chargeTotalAmount = null;

        return $this;
    }

    /**
     * @return null|PrepaidAmount
     */
    public function getPrepaidAmount(): ?PrepaidAmount
    {
        return $this->prepaidAmount;
    }

    /**
     * @return PrepaidAmount
     */
    public function getPrepaidAmountWithCreate(): PrepaidAmount
    {
        $this->prepaidAmount ??= new PrepaidAmount();

        return $this->prepaidAmount;
    }

    /**
     * @param  null|PrepaidAmount $prepaidAmount
     * @return static
     */
    public function setPrepaidAmount(
        ?PrepaidAmount $prepaidAmount = null
    ): static {
        $this->prepaidAmount = $prepaidAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPrepaidAmount(): static
    {
        $this->prepaidAmount = null;

        return $this;
    }

    /**
     * @return null|PayableRoundingAmount
     */
    public function getPayableRoundingAmount(): ?PayableRoundingAmount
    {
        return $this->payableRoundingAmount;
    }

    /**
     * @return PayableRoundingAmount
     */
    public function getPayableRoundingAmountWithCreate(): PayableRoundingAmount
    {
        $this->payableRoundingAmount ??= new PayableRoundingAmount();

        return $this->payableRoundingAmount;
    }

    /**
     * @param  null|PayableRoundingAmount $payableRoundingAmount
     * @return static
     */
    public function setPayableRoundingAmount(
        ?PayableRoundingAmount $payableRoundingAmount = null
    ): static {
        $this->payableRoundingAmount = $payableRoundingAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPayableRoundingAmount(): static
    {
        $this->payableRoundingAmount = null;

        return $this;
    }

    /**
     * @return null|PayableAmount
     */
    public function getPayableAmount(): ?PayableAmount
    {
        return $this->payableAmount;
    }

    /**
     * @return PayableAmount
     */
    public function getPayableAmountWithCreate(): PayableAmount
    {
        $this->payableAmount ??= new PayableAmount();

        return $this->payableAmount;
    }

    /**
     * @param  null|PayableAmount $payableAmount
     * @return static
     */
    public function setPayableAmount(
        ?PayableAmount $payableAmount = null
    ): static {
        $this->payableAmount = $payableAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPayableAmount(): static
    {
        $this->payableAmount = null;

        return $this;
    }

    /**
     * @return null|PayableAlternativeAmount
     */
    public function getPayableAlternativeAmount(): ?PayableAlternativeAmount
    {
        return $this->payableAlternativeAmount;
    }

    /**
     * @return PayableAlternativeAmount
     */
    public function getPayableAlternativeAmountWithCreate(): PayableAlternativeAmount
    {
        $this->payableAlternativeAmount ??= new PayableAlternativeAmount();

        return $this->payableAlternativeAmount;
    }

    /**
     * @param  null|PayableAlternativeAmount $payableAlternativeAmount
     * @return static
     */
    public function setPayableAlternativeAmount(
        ?PayableAlternativeAmount $payableAlternativeAmount = null
    ): static {
        $this->payableAlternativeAmount = $payableAlternativeAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPayableAlternativeAmount(): static
    {
        $this->payableAlternativeAmount = null;

        return $this;
    }
}
