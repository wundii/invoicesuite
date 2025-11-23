<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\RoleCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\RoleDescription;

class EconomicOperatorRoleType
{
    use HandlesObjectFlags;

    /**
     * @var RoleCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\RoleCode")
     * @JMS\Expose
     * @JMS\SerializedName("RoleCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRoleCode", setter="setRoleCode")
     */
    private $roleCode;

    /**
     * @var array<RoleDescription>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\RoleDescription>")
     * @JMS\Expose
     * @JMS\SerializedName("RoleDescription")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="RoleDescription", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getRoleDescription", setter="setRoleDescription")
     */
    private $roleDescription;

    /**
     * @return RoleCode|null
     */
    public function getRoleCode(): ?RoleCode
    {
        return $this->roleCode;
    }

    /**
     * @return RoleCode
     */
    public function getRoleCodeWithCreate(): RoleCode
    {
        $this->roleCode = is_null($this->roleCode) ? new RoleCode() : $this->roleCode;

        return $this->roleCode;
    }

    /**
     * @param RoleCode|null $roleCode
     * @return self
     */
    public function setRoleCode(?RoleCode $roleCode = null): self
    {
        $this->roleCode = $roleCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetRoleCode(): self
    {
        $this->roleCode = null;

        return $this;
    }

    /**
     * @return array<RoleDescription>|null
     */
    public function getRoleDescription(): ?array
    {
        return $this->roleDescription;
    }

    /**
     * @param array<RoleDescription>|null $roleDescription
     * @return self
     */
    public function setRoleDescription(?array $roleDescription = null): self
    {
        $this->roleDescription = $roleDescription;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetRoleDescription(): self
    {
        $this->roleDescription = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearRoleDescription(): self
    {
        $this->roleDescription = [];

        return $this;
    }

    /**
     * @return RoleDescription|null
     */
    public function firstRoleDescription(): ?RoleDescription
    {
        $roleDescription = $this->roleDescription ?? [];
        $roleDescription = reset($roleDescription);

        if ($roleDescription === false) {
            return null;
        }

        return $roleDescription;
    }

    /**
     * @return RoleDescription|null
     */
    public function lastRoleDescription(): ?RoleDescription
    {
        $roleDescription = $this->roleDescription ?? [];
        $roleDescription = end($roleDescription);

        if ($roleDescription === false) {
            return null;
        }

        return $roleDescription;
    }

    /**
     * @param RoleDescription $roleDescription
     * @return self
     */
    public function addToRoleDescription(RoleDescription $roleDescription): self
    {
        $this->roleDescription[] = $roleDescription;

        return $this;
    }

    /**
     * @return RoleDescription
     */
    public function addToRoleDescriptionWithCreate(): RoleDescription
    {
        $this->addToroleDescription($roleDescription = new RoleDescription());

        return $roleDescription;
    }

    /**
     * @param RoleDescription $roleDescription
     * @return self
     */
    public function addOnceToRoleDescription(RoleDescription $roleDescription): self
    {
        if (!is_array($this->roleDescription)) {
            $this->roleDescription = [];
        }

        $this->roleDescription[0] = $roleDescription;

        return $this;
    }

    /**
     * @return RoleDescription
     */
    public function addOnceToRoleDescriptionWithCreate(): RoleDescription
    {
        if (!is_array($this->roleDescription)) {
            $this->roleDescription = [];
        }

        if ($this->roleDescription === []) {
            $this->addOnceToroleDescription(new RoleDescription());
        }

        return $this->roleDescription[0];
    }
}
