<?php

/**
 * This file is a part of horstoeko/invoicesuite.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\dto;

use horstoeko\invoicesuite\utils\InvoiceSuiteStringUtils;

/**
 * Class representing a DTO for a contact
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
class InvoiceSuiteContactDTO
{
    /**
     * Contact name
     */
    public ?string $personName = null;

    /**
     * Contact department name
     */
    public ?string $departmentName = null;

    /**
     * Contact phone number
     */
    public ?string $phoneNumber = null;

    /**
     * Contact fax number
     */
    public ?string $faxNumber = null;

    /**
     * Contact e-mail address
     */
    public ?string $emailAddress = null;

    /**
     * Constructor
     *
     * @param string|null $personName
     * @param string|null $departmentName
     * @param string|null $phoneNumber
     * @param string|null $faxNumber
     * @param string|null $emailAddress
     */
    public function __construct(
        ?string $personName = null,
        ?string $departmentName = null,
        ?string $phoneNumber = null,
        ?string $faxNumber = null,
        ?string $emailAddress = null
    ) {
        $this
            ->setPersonName($personName)
            ->setDepartmentName($departmentName)
            ->setPhoneNumber($phoneNumber)
            ->setFaxNumber($faxNumber)
            ->setEmailAddress($emailAddress);
    }

    /**
     * Get contact name
     *
     * @return string|null
     */
    public function getPersonName(): ?string
    {
        return $this->personName;
    }

    /**
     * Set contact name
     *
     * @param string|null $newPersonName
     * @return self
     */
    public function setPersonName(?string $newPersonName): self
    {
        $this->personName = $newPersonName;

        return $this;
    }

    /**
     * Check if contact name is set and not empty
     *
     * @return bool
     */
    public function hasPersonName(): bool
    {
        return !InvoiceSuiteStringUtils::stringIsNullOrEmpty($this->personName);
    }

    /**
     * Get department name
     *
     * @return string|null
     */
    public function getDepartmentName(): ?string
    {
        return $this->departmentName;
    }

    /**
     * Set department name
     *
     * @param string|null $newDepartmentName
     * @return self
     */
    public function setDepartmentName(?string $newDepartmentName): self
    {
        $this->departmentName = $newDepartmentName;

        return $this;
    }

    /**
     * Check if department name is set and not empty
     *
     * @return bool
     */
    public function hasDepartmentName(): bool
    {
        return !InvoiceSuiteStringUtils::stringIsNullOrEmpty($this->departmentName);
    }

    /**
     * Get phone number
     *
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * Set phone number
     *
     * @param string|null $newPhoneNumber
     * @return self
     */
    public function setPhoneNumber(?string $newPhoneNumber): self
    {
        $this->phoneNumber = $newPhoneNumber;

        return $this;
    }

    /**
     * Check if phone number is set and not empty
     *
     * @return bool
     */
    public function hasPhoneNumber(): bool
    {
        return !InvoiceSuiteStringUtils::stringIsNullOrEmpty($this->phoneNumber);
    }

    /**
     * Get fax number
     *
     * @return string|null
     */
    public function getFaxNumber(): ?string
    {
        return $this->faxNumber;
    }

    /**
     * Set fax number
     *
     * @param string|null $newFaxNumber
     * @return self
     */
    public function setFaxNumber(?string $newFaxNumber): self
    {
        $this->faxNumber = $newFaxNumber;

        return $this;
    }

    /**
     * Check if fax number is set and not empty
     *
     * @return bool
     */
    public function hasFaxNumber(): bool
    {
        return !InvoiceSuiteStringUtils::stringIsNullOrEmpty($this->faxNumber);
    }

    /**
     * Get email address
     *
     * @return string|null
     */
    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    /**
     * Set email address
     *
     * @param string|null $newEmailAddress
     * @return self
     */
    public function setEmailAddress(?string $newEmailAddress): self
    {
        $this->emailAddress = $newEmailAddress;

        return $this;
    }

    /**
     * Check if email address is set and not empty
     *
     * @return bool
     */
    public function hasEmailAddress(): bool
    {
        return !InvoiceSuiteStringUtils::stringIsNullOrEmpty($this->emailAddress);
    }
}
