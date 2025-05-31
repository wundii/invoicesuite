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
class InvoiceSuitePartyDTO
{
    /**
     * Party names
     *
     * @var array<string>
     */
    protected array $name = [];

    /**
     * Party IDs
     *
     * @var array<InvoiceSuiteIdDTO>
     */
    protected array $id = [];

    /**
     * Party global IDs
     *
     * @var array<InvoiceSuiteIdDTO>
     */
    protected array $globalId = [];

    /**
     * Party tax registrations
     *
     * @var array<InvoiceSuiteIdDTO>
     */
    protected array $taxRegistration = [];

    /**
     * Party addresses
     *
     * @var array<InvoiceSuiteAddressDTO>
     */
    protected array $address = [];

    /**
     * Party legal organisations
     *
     * @var array<InvoiceSuiteOrganisationDTO>
     */
    protected array $legalOrganisation = [];

    /**
     * Party contacts
     *
     * @var array<InvoiceSuiteContactDTO>
     */
    protected array $contact = [];

    /**
     * Party electronic communications
     *
     * @var array<InvoiceSuiteCommunicationDTO>
     */
    protected array $communication = [];

    /**
     * Constructor
     *
     * @param array<string> $name Party names
     * @param array<InvoiceSuiteIdDTO> $id Party IDs
     * @param array<InvoiceSuiteIdDTO> $globalId Party global IDs
     * @param array<InvoiceSuiteIdDTO> $taxRegistration Party tax registrations
     * @param array<InvoiceSuiteAddressDTO> $address Party addresses
     * @param array<InvoiceSuiteOrganisationDTO> $legalOrganisation Party legal organisations
     * @param array<InvoiceSuiteContactDTO> $contact Party contacts
     * @param array<InvoiceSuiteCommunicationDTO> $communication Party electronic communications
     */
    public function __construct(
        array $name = [],
        array $id = [],
        array $globalId = [],
        array $taxRegistration = [],
        array $address = [],
        array $legalOrganisation = [],
        array $contact = [],
        array $communication = [],
    ) {
        $this->setName($name);
        $this->setId($id);
        $this->setGlobalId($globalId);
        $this->setTaxRegistration($taxRegistration);
        $this->setAddress($address);
        $this->setLegalOrganisation($legalOrganisation);
        $this->setContact($contact);
        $this->setCommunication($communication);
    }

    /**
     * Returns party names
     *
     * @return array<string>
     */
    public function getName(): array
    {
        return $this->name;
    }

    /**
     * Sets party names
     *
     * @param array<string> $name Party names
     * @return self
     */
    public function setName(array $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Add single Party names
     *
     * @param string $name Party names
     * @return self
     */
    public function addName(string $name): self
    {
        $this->name[] = $name;

        return $this;
    }

    /**
     * Get first Party names
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function firstName(callable $callback, ?callable $callbackElse = null): self
    {
        if (($name = reset($this->name)) !== false) {
            $callback($name);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Get next Party names
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function nextName(callable $callback, ?callable $callbackElse = null): self
    {
        if (($name = next($this->name)) !== false) {
            $callback($name);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Get previous Party names
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function previousName(callable $callback, ?callable $callbackElse = null): self
    {
        if (($name = prev($this->name)) !== false) {
            $callback($name);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Get last Party names
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function lastName(callable $callback, ?callable $callbackElse = null): self
    {
        if (($name = end($this->name)) !== false) {
            $callback($name);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Loop over Party names and execute callback
     *
     * @param callable $callback Callback to execute for each item
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @param int|null $limit Maximum number of loops
     * @return self
     */
    public function forEachName(callable $callback, ?callable $callbackElse = null, ?int $limit = null): self
    {
        $count = 0;

        foreach ($this->name as $name) {
            if ($limit !== null && $count >= $limit) {
                break;
            }

            $count++;

            $callback($name);
        }

        if ($count === 0 && !is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Returns party IDs
     *
     * @return array<InvoiceSuiteIdDTO>
     */
    public function getId(): array
    {
        return $this->id;
    }

    /**
     * Sets party IDs
     *
     * @param array<InvoiceSuiteIdDTO> $id Party IDs
     * @return self
     */
    public function setId(array $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Add single Party IDs
     *
     * @param horstoeko\invoicesuite\dto\InvoiceSuiteIdDTO $id Party IDs
     * @return self
     */
    public function addId(InvoiceSuiteIdDTO $id): self
    {
        $this->id[] = $id;

        return $this;
    }

    /**
     * Get first Party IDs
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function firstId(callable $callback, ?callable $callbackElse = null): self
    {
        if (($id = reset($this->id)) !== false) {
            $callback($id);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Get next Party IDs
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function nextId(callable $callback, ?callable $callbackElse = null): self
    {
        if (($id = next($this->id)) !== false) {
            $callback($id);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Get previous Party IDs
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function previousId(callable $callback, ?callable $callbackElse = null): self
    {
        if (($id = prev($this->id)) !== false) {
            $callback($id);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Get last Party IDs
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function lastId(callable $callback, ?callable $callbackElse = null): self
    {
        if (($id = end($this->id)) !== false) {
            $callback($id);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Loop over Party IDs and execute callback
     *
     * @param callable $callback Callback to execute for each item
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @param int|null $limit Maximum number of loops
     * @return self
     */
    public function forEachId(callable $callback, ?callable $callbackElse = null, ?int $limit = null): self
    {
        $count = 0;

        foreach ($this->id as $id) {
            if ($limit !== null && $count >= $limit) {
                break;
            }

            $count++;

            $callback($id);
        }

        if ($count === 0 && !is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Returns party global IDs
     *
     * @return array<InvoiceSuiteIdDTO>
     */
    public function getGlobalId(): array
    {
        return $this->globalId;
    }

    /**
     * Sets party global IDs
     *
     * @param array<InvoiceSuiteIdDTO> $globalId Party global IDs
     * @return self
     */
    public function setGlobalId(array $globalId): self
    {
        $this->globalId = $globalId;

        return $this;
    }

    /**
     * Add single Party global IDs
     *
     * @param horstoeko\invoicesuite\dto\InvoiceSuiteIdDTO $globalId Party global IDs
     * @return self
     */
    public function addGlobalId(InvoiceSuiteIdDTO $globalId): self
    {
        $this->globalId[] = $globalId;

        return $this;
    }

    /**
     * Get first Party global IDs
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function firstGlobalId(callable $callback, ?callable $callbackElse = null): self
    {
        if (($globalId = reset($this->globalId)) !== false) {
            $callback($globalId);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Get next Party global IDs
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function nextGlobalId(callable $callback, ?callable $callbackElse = null): self
    {
        if (($globalId = next($this->globalId)) !== false) {
            $callback($globalId);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Get previous Party global IDs
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function previousGlobalId(callable $callback, ?callable $callbackElse = null): self
    {
        if (($globalId = prev($this->globalId)) !== false) {
            $callback($globalId);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Get last Party global IDs
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function lastGlobalId(callable $callback, ?callable $callbackElse = null): self
    {
        if (($globalId = end($this->globalId)) !== false) {
            $callback($globalId);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Loop over Party global IDs and execute callback
     *
     * @param callable $callback Callback to execute for each item
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @param int|null $limit Maximum number of loops
     * @return self
     */
    public function forEachGlobalId(callable $callback, ?callable $callbackElse = null, ?int $limit = null): self
    {
        $count = 0;

        foreach ($this->globalId as $globalId) {
            if ($limit !== null && $count >= $limit) {
                break;
            }

            $count++;

            $callback($globalId);
        }

        if ($count === 0 && !is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Returns party tax registrations
     *
     * @return array<InvoiceSuiteIdDTO>
     */
    public function getTaxRegistration(): array
    {
        return $this->taxRegistration;
    }

    /**
     * Sets party tax registrations
     *
     * @param array<InvoiceSuiteIdDTO> $taxRegistration Party tax registrations
     * @return self
     */
    public function setTaxRegistration(array $taxRegistration): self
    {
        $this->taxRegistration = $taxRegistration;

        return $this;
    }

    /**
     * Add single Party tax registrations
     *
     * @param horstoeko\invoicesuite\dto\InvoiceSuiteIdDTO $taxRegistration Party tax registrations
     * @return self
     */
    public function addTaxRegistration(InvoiceSuiteIdDTO $taxRegistration): self
    {
        $this->taxRegistration[] = $taxRegistration;

        return $this;
    }

    /**
     * Get first Party tax registrations
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function firstTaxRegistration(callable $callback, ?callable $callbackElse = null): self
    {
        if (($taxRegistration = reset($this->taxRegistration)) !== false) {
            $callback($taxRegistration);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Get next Party tax registrations
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function nextTaxRegistration(callable $callback, ?callable $callbackElse = null): self
    {
        if (($taxRegistration = next($this->taxRegistration)) !== false) {
            $callback($taxRegistration);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Get previous Party tax registrations
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function previousTaxRegistration(callable $callback, ?callable $callbackElse = null): self
    {
        if (($taxRegistration = prev($this->taxRegistration)) !== false) {
            $callback($taxRegistration);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Get last Party tax registrations
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function lastTaxRegistration(callable $callback, ?callable $callbackElse = null): self
    {
        if (($taxRegistration = end($this->taxRegistration)) !== false) {
            $callback($taxRegistration);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Loop over Party tax registrations and execute callback
     *
     * @param callable $callback Callback to execute for each item
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @param int|null $limit Maximum number of loops
     * @return self
     */
    public function forEachTaxRegistration(
        callable $callback,
        ?callable $callbackElse = null,
        ?int $limit = null,
    ): self {
        $count = 0;

        foreach ($this->taxRegistration as $taxRegistration) {
            if ($limit !== null && $count >= $limit) {
                break;
            }

            $count++;

            $callback($taxRegistration);
        }

        if ($count === 0 && !is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Returns party addresses
     *
     * @return array<InvoiceSuiteAddressDTO>
     */
    public function getAddress(): array
    {
        return $this->address;
    }

    /**
     * Sets party addresses
     *
     * @param array<InvoiceSuiteAddressDTO> $address Party addresses
     * @return self
     */
    public function setAddress(array $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Add single Party addresses
     *
     * @param horstoeko\invoicesuite\dto\InvoiceSuiteAddressDTO $address Party addresses
     * @return self
     */
    public function addAddress(InvoiceSuiteAddressDTO $address): self
    {
        $this->address[] = $address;

        return $this;
    }

    /**
     * Get first Party addresses
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function firstAddress(callable $callback, ?callable $callbackElse = null): self
    {
        if (($address = reset($this->address)) !== false) {
            $callback($address);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Get next Party addresses
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function nextAddress(callable $callback, ?callable $callbackElse = null): self
    {
        if (($address = next($this->address)) !== false) {
            $callback($address);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Get previous Party addresses
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function previousAddress(callable $callback, ?callable $callbackElse = null): self
    {
        if (($address = prev($this->address)) !== false) {
            $callback($address);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Get last Party addresses
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function lastAddress(callable $callback, ?callable $callbackElse = null): self
    {
        if (($address = end($this->address)) !== false) {
            $callback($address);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Loop over Party addresses and execute callback
     *
     * @param callable $callback Callback to execute for each item
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @param int|null $limit Maximum number of loops
     * @return self
     */
    public function forEachAddress(callable $callback, ?callable $callbackElse = null, ?int $limit = null): self
    {
        $count = 0;

        foreach ($this->address as $address) {
            if ($limit !== null && $count >= $limit) {
                break;
            }

            $count++;

            $callback($address);
        }

        if ($count === 0 && !is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Returns party legal organisations
     *
     * @return array<InvoiceSuiteOrganisationDTO>
     */
    public function getLegalOrganisation(): array
    {
        return $this->legalOrganisation;
    }

    /**
     * Sets party legal organisations
     *
     * @param array<InvoiceSuiteOrganisationDTO> $legalOrganisation Party legal organisations
     * @return self
     */
    public function setLegalOrganisation(array $legalOrganisation): self
    {
        $this->legalOrganisation = $legalOrganisation;

        return $this;
    }

    /**
     * Add single Party legal organisations
     *
     * @param horstoeko\invoicesuite\dto\InvoiceSuiteOrganisationDTO $legalOrganisation Party legal organisations
     * @return self
     */
    public function addLegalOrganisation(InvoiceSuiteOrganisationDTO $legalOrganisation): self
    {
        $this->legalOrganisation[] = $legalOrganisation;

        return $this;
    }

    /**
     * Get first Party legal organisations
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function firstLegalOrganisation(callable $callback, ?callable $callbackElse = null): self
    {
        if (($legalOrganisation = reset($this->legalOrganisation)) !== false) {
            $callback($legalOrganisation);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Get next Party legal organisations
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function nextLegalOrganisation(callable $callback, ?callable $callbackElse = null): self
    {
        if (($legalOrganisation = next($this->legalOrganisation)) !== false) {
            $callback($legalOrganisation);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Get previous Party legal organisations
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function previousLegalOrganisation(callable $callback, ?callable $callbackElse = null): self
    {
        if (($legalOrganisation = prev($this->legalOrganisation)) !== false) {
            $callback($legalOrganisation);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Get last Party legal organisations
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function lastLegalOrganisation(callable $callback, ?callable $callbackElse = null): self
    {
        if (($legalOrganisation = end($this->legalOrganisation)) !== false) {
            $callback($legalOrganisation);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Loop over Party legal organisations and execute callback
     *
     * @param callable $callback Callback to execute for each item
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @param int|null $limit Maximum number of loops
     * @return self
     */
    public function forEachLegalOrganisation(
        callable $callback,
        ?callable $callbackElse = null,
        ?int $limit = null,
    ): self {
        $count = 0;

        foreach ($this->legalOrganisation as $legalOrganisation) {
            if ($limit !== null && $count >= $limit) {
                break;
            }

            $count++;

            $callback($legalOrganisation);
        }

        if ($count === 0 && !is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Returns party contacts
     *
     * @return array<InvoiceSuiteContactDTO>
     */
    public function getContact(): array
    {
        return $this->contact;
    }

    /**
     * Sets party contacts
     *
     * @param array<InvoiceSuiteContactDTO> $contact Party contacts
     * @return self
     */
    public function setContact(array $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Add single Party contacts
     *
     * @param horstoeko\invoicesuite\dto\InvoiceSuiteContactDTO $contact Party contacts
     * @return self
     */
    public function addContact(InvoiceSuiteContactDTO $contact): self
    {
        $this->contact[] = $contact;

        return $this;
    }

    /**
     * Get first Party contacts
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function firstContact(callable $callback, ?callable $callbackElse = null): self
    {
        if (($contact = reset($this->contact)) !== false) {
            $callback($contact);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Get next Party contacts
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function nextContact(callable $callback, ?callable $callbackElse = null): self
    {
        if (($contact = next($this->contact)) !== false) {
            $callback($contact);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Get previous Party contacts
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function previousContact(callable $callback, ?callable $callbackElse = null): self
    {
        if (($contact = prev($this->contact)) !== false) {
            $callback($contact);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Get last Party contacts
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function lastContact(callable $callback, ?callable $callbackElse = null): self
    {
        if (($contact = end($this->contact)) !== false) {
            $callback($contact);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Loop over Party contacts and execute callback
     *
     * @param callable $callback Callback to execute for each item
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @param int|null $limit Maximum number of loops
     * @return self
     */
    public function forEachContact(callable $callback, ?callable $callbackElse = null, ?int $limit = null): self
    {
        $count = 0;

        foreach ($this->contact as $contact) {
            if ($limit !== null && $count >= $limit) {
                break;
            }

            $count++;

            $callback($contact);
        }

        if ($count === 0 && !is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Returns party electronic communications
     *
     * @return array<InvoiceSuiteCommunicationDTO>
     */
    public function getCommunication(): array
    {
        return $this->communication;
    }

    /**
     * Sets party electronic communications
     *
     * @param array<InvoiceSuiteCommunicationDTO> $communication Party electronic communications
     * @return self
     */
    public function setCommunication(array $communication): self
    {
        $this->communication = $communication;

        return $this;
    }

    /**
     * Add single Party electronic communications
     *
     * @param horstoeko\invoicesuite\dto\InvoiceSuiteCommunicationDTO $communication Party electronic communications
     * @return self
     */
    public function addCommunication(InvoiceSuiteCommunicationDTO $communication): self
    {
        $this->communication[] = $communication;

        return $this;
    }

    /**
     * Get first Party electronic communications
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function firstCommunication(callable $callback, ?callable $callbackElse = null): self
    {
        if (($communication = reset($this->communication)) !== false) {
            $callback($communication);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Get next Party electronic communications
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function nextCommunication(callable $callback, ?callable $callbackElse = null): self
    {
        if (($communication = next($this->communication)) !== false) {
            $callback($communication);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Get previous Party electronic communications
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function previousCommunication(callable $callback, ?callable $callbackElse = null): self
    {
        if (($communication = prev($this->communication)) !== false) {
            $callback($communication);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Get last Party electronic communications
     *
     * @param callable $callback Callback to execute if an item was found
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @return self
     */
    public function lastCommunication(callable $callback, ?callable $callbackElse = null): self
    {
        if (($communication = end($this->communication)) !== false) {
            $callback($communication);
        } else {
            if (!is_null($callbackElse)) {
                $callbackElse();
            }
        }

        return $this;
    }

    /**
     * Loop over Party electronic communications and execute callback
     *
     * @param callable $callback Callback to execute for each item
     * @param callable|null $callbackElse Callback to execute if no item was found
     * @param int|null $limit Maximum number of loops
     * @return self
     */
    public function forEachCommunication(callable $callback, ?callable $callbackElse = null, ?int $limit = null): self
    {
        $count = 0;

        foreach ($this->communication as $communication) {
            if ($limit !== null && $count >= $limit) {
                break;
            }

            $count++;

            $callback($communication);
        }

        if ($count === 0 && !is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }
}
