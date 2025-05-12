<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\models\ubl\cbc\Login;
use horstoeko\invoicesuite\models\ubl\cbc\Password;
use horstoeko\invoicesuite\models\ubl\cbc\URI;

class WebSiteAccessType
{
    use HandlesObjectFlags;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\URI
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\URI")
     * @JMS\Expose
     * @JMS\SerializedName("URI")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getURI", setter="setURI")
     */
    private $uRI;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\Password
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\Password")
     * @JMS\Expose
     * @JMS\SerializedName("Password")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPassword", setter="setPassword")
     */
    private $password;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\Login
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\Login")
     * @JMS\Expose
     * @JMS\SerializedName("Login")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLogin", setter="setLogin")
     */
    private $login;

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\URI|null
     */
    public function getURI(): ?URI
    {
        return $this->uRI;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\URI
     */
    public function getURIWithCreate(): URI
    {
        $this->uRI = is_null($this->uRI) ? new URI() : $this->uRI;

        return $this->uRI;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\URI $uRI
     * @return self
     */
    public function setURI(URI $uRI): self
    {
        $this->uRI = $uRI;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Password|null
     */
    public function getPassword(): ?Password
    {
        return $this->password;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Password
     */
    public function getPasswordWithCreate(): Password
    {
        $this->password = is_null($this->password) ? new Password() : $this->password;

        return $this->password;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Password $password
     * @return self
     */
    public function setPassword(Password $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Login|null
     */
    public function getLogin(): ?Login
    {
        return $this->login;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Login
     */
    public function getLoginWithCreate(): Login
    {
        $this->login = is_null($this->login) ? new Login() : $this->login;

        return $this->login;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Login $login
     * @return self
     */
    public function setLogin(Login $login): self
    {
        $this->login = $login;

        return $this;
    }
}
