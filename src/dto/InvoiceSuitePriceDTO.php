<?php

namespace horstoeko\invoicesuite\dto;

/**
 * Class representing a DTO for...
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
class InvoiceSuitePriceDTO
{
    /**
     * The price value
     *
     * @var float|null
     */
    protected ?float $amount = null;

    /**
     * The number of item units for which the price applies
     *
     * @var InvoiceSuiteQuantityDTO|null
     */
    protected ?InvoiceSuiteQuantityDTO $priceQuantity = null;

    /**
     * Constructor
     *
     * @param float|null $amount The price value
     * @param InvoiceSuiteQuantityDTO|null $priceQuantity The number of item units for which the price applies
     */
    public function __construct(?float $amount = null, ?InvoiceSuiteQuantityDTO $priceQuantity = null)
    {
        $this->setAmount($amount);
        $this->setPriceQuantity($priceQuantity);
    }

    /**
     * Returns the price value
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * Sets the price value
     *
     * @param float|null $amount The price value
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Returns the number of item units for which the price applies
     *
     * @return InvoiceSuiteQuantityDTO|null
     */
    public function getPriceQuantity(): ?InvoiceSuiteQuantityDTO
    {
        return $this->priceQuantity;
    }

    /**
     * Sets the number of item units for which the price applies
     *
     * @param InvoiceSuiteQuantityDTO|null $priceQuantity The number of item units for which the price applies
     * @return self
     */
    public function setPriceQuantity(?InvoiceSuiteQuantityDTO $priceQuantity): self
    {
        $this->priceQuantity = $priceQuantity;

        return $this;
    }
}
