<?php

/**
 * This file is a part of horstoeko/invoicesuite.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\dto;

use DateTimeInterface;

/**
 * Class representing a DTO for...
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
class InvoiceSuiteDateRangeDTO
{
    /**
     * Start of the period
     *
     * @var DateTimeInterface|null
     */
    protected ?DateTimeInterface $startDate = null;

    /**
     * End of the period
     *
     * @var DateTimeInterface|null
     */
    protected ?DateTimeInterface $endDate = null;

    /**
     * Further information of the period
     *
     * @var string|null
     */
    protected ?string $description = null;

    /**
     * Constructor
     *
     * @param DateTimeInterface|null $startDate Start of the period
     * @param DateTimeInterface|null $endDate End of the period
     * @param string|null $description Further information of the period
     */
    public function __construct(
        ?DateTimeInterface $startDate = null,
        ?DateTimeInterface $endDate = null,
        ?string $description = null,
    ) {
        $this->setStartDate($startDate);
        $this->setEndDate($endDate);
        $this->setDescription($description);
    }

    /**
     * Returns start of the period
     *
     * @return DateTimeInterface|null
     */
    public function getStartDate(): ?DateTimeInterface
    {
        return $this->startDate;
    }

    /**
     * Sets start of the period
     *
     * @param DateTimeInterface|null $startDate Start of the period
     * @return self
     */
    public function setStartDate(?DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Returns end of the period
     *
     * @return DateTimeInterface|null
     */
    public function getEndDate(): ?DateTimeInterface
    {
        return $this->endDate;
    }

    /**
     * Sets end of the period
     *
     * @param DateTimeInterface|null $endDate End of the period
     * @return self
     */
    public function setEndDate(?DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Returns further information of the period
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets further information of the period
     *
     * @param string|null $description Further information of the period
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
