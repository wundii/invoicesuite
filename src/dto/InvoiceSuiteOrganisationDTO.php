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
 * Class representing a DTO for a party organisation identification
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
class InvoiceSuiteOrganisationDTO extends InvoiceSuiteIdDTO
{
    /**
     * Name of the organisation
     */
    public ?string $name = null;

    /**
     * Constructor
     *
     * @param string|null $id
     * @param string|null $idType
     * @param string|null $name
     */
    public function __construct(
        ?string $id = null,
        ?string $idType = null,
        ?string $name = null
    ) {
        parent::__construct($id, $idType);
        $this->setName($name);
    }

    /**
     * Get the organisation name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set the organisation name
     *
     * @param string|null $newName
     * @return self
     */
    public function setName(?string $newName): self
    {
        $this->name = $newName;
        return $this;
    }

    /**
     * Check if organisation name is set and not empty
     *
     * @return bool
     */
    public function hasName(): bool
    {
        return !InvoiceSuiteStringUtils::stringIsNullOrEmpty($this->name);
    }
}
