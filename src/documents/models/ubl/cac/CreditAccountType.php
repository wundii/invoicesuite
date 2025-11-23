<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\AccountID;

class CreditAccountType
{
    use HandlesObjectFlags;

    /**
     * @var AccountID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\AccountID")
     * @JMS\Expose
     * @JMS\SerializedName("AccountID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAccountID", setter="setAccountID")
     */
    private $accountID;

    /**
     * @return AccountID|null
     */
    public function getAccountID(): ?AccountID
    {
        return $this->accountID;
    }

    /**
     * @return AccountID
     */
    public function getAccountIDWithCreate(): AccountID
    {
        $this->accountID = is_null($this->accountID) ? new AccountID() : $this->accountID;

        return $this->accountID;
    }

    /**
     * @param AccountID|null $accountID
     * @return self
     */
    public function setAccountID(?AccountID $accountID = null): self
    {
        $this->accountID = $accountID;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetAccountID(): self
    {
        $this->accountID = null;

        return $this;
    }
}
