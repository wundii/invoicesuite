<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\ubl\cbc\AuctionURI;
use horstoeko\invoicesuite\models\ubl\cbc\ConditionsDescription;
use horstoeko\invoicesuite\models\ubl\cbc\Description;
use horstoeko\invoicesuite\models\ubl\cbc\ElectronicDeviceDescription;
use horstoeko\invoicesuite\models\ubl\cbc\JustificationDescription;
use horstoeko\invoicesuite\models\ubl\cbc\ProcessDescription;

class AuctionTermsType
{
    /**
     * @var bool
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("AuctionConstraintIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAuctionConstraintIndicator", setter="setAuctionConstraintIndicator")
     */
    private $auctionConstraintIndicator;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\JustificationDescription>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\JustificationDescription>")
     * @JMS\Expose
     * @JMS\SerializedName("JustificationDescription")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="JustificationDescription", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getJustificationDescription", setter="setJustificationDescription")
     */
    private $justificationDescription;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\Description>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\Description>")
     * @JMS\Expose
     * @JMS\SerializedName("Description")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Description", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getDescription", setter="setDescription")
     */
    private $description;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\ProcessDescription>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\ProcessDescription>")
     * @JMS\Expose
     * @JMS\SerializedName("ProcessDescription")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ProcessDescription", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getProcessDescription", setter="setProcessDescription")
     */
    private $processDescription;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\ConditionsDescription>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\ConditionsDescription>")
     * @JMS\Expose
     * @JMS\SerializedName("ConditionsDescription")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ConditionsDescription", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getConditionsDescription", setter="setConditionsDescription")
     */
    private $conditionsDescription;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cbc\ElectronicDeviceDescription>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cbc\ElectronicDeviceDescription>")
     * @JMS\Expose
     * @JMS\SerializedName("ElectronicDeviceDescription")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ElectronicDeviceDescription", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getElectronicDeviceDescription", setter="setElectronicDeviceDescription")
     */
    private $electronicDeviceDescription;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\AuctionURI
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\AuctionURI")
     * @JMS\Expose
     * @JMS\SerializedName("AuctionURI")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAuctionURI", setter="setAuctionURI")
     */
    private $auctionURI;

    /**
     * @return bool|null
     */
    public function getAuctionConstraintIndicator(): ?bool
    {
        return $this->auctionConstraintIndicator;
    }

    /**
     * @param bool $auctionConstraintIndicator
     * @return self
     */
    public function setAuctionConstraintIndicator(bool $auctionConstraintIndicator): self
    {
        $this->auctionConstraintIndicator = $auctionConstraintIndicator;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\JustificationDescription>|null
     */
    public function getJustificationDescription(): ?array
    {
        return $this->justificationDescription;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\JustificationDescription> $justificationDescription
     * @return self
     */
    public function setJustificationDescription(array $justificationDescription): self
    {
        $this->justificationDescription = $justificationDescription;

        return $this;
    }

    /**
     * @return self
     */
    public function clearJustificationDescription(): self
    {
        $this->justificationDescription = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\JustificationDescription $justificationDescription
     * @return self
     */
    public function addToJustificationDescription(JustificationDescription $justificationDescription): self
    {
        $this->justificationDescription[] = $justificationDescription;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\JustificationDescription
     */
    public function addToJustificationDescriptionWithCreate(): JustificationDescription
    {
        $this->addTojustificationDescription($justificationDescription = new JustificationDescription());

        return $justificationDescription;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\JustificationDescription $justificationDescription
     * @return self
     */
    public function addOnceToJustificationDescription(JustificationDescription $justificationDescription): self
    {
        $this->justificationDescription[0] = $justificationDescription;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\JustificationDescription
     */
    public function addOnceToJustificationDescriptionWithCreate(): JustificationDescription
    {
        if ($this->justificationDescription === []) {
            $this->addOnceTojustificationDescription(new JustificationDescription());
        }

        return $this->justificationDescription[0];
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\Description>|null
     */
    public function getDescription(): ?array
    {
        return $this->description;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\Description> $description
     * @return self
     */
    public function setDescription(array $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return self
     */
    public function clearDescription(): self
    {
        $this->description = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Description $description
     * @return self
     */
    public function addToDescription(Description $description): self
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Description
     */
    public function addToDescriptionWithCreate(): Description
    {
        $this->addTodescription($description = new Description());

        return $description;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\Description $description
     * @return self
     */
    public function addOnceToDescription(Description $description): self
    {
        $this->description[0] = $description;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\Description
     */
    public function addOnceToDescriptionWithCreate(): Description
    {
        if ($this->description === []) {
            $this->addOnceTodescription(new Description());
        }

        return $this->description[0];
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\ProcessDescription>|null
     */
    public function getProcessDescription(): ?array
    {
        return $this->processDescription;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\ProcessDescription> $processDescription
     * @return self
     */
    public function setProcessDescription(array $processDescription): self
    {
        $this->processDescription = $processDescription;

        return $this;
    }

    /**
     * @return self
     */
    public function clearProcessDescription(): self
    {
        $this->processDescription = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ProcessDescription $processDescription
     * @return self
     */
    public function addToProcessDescription(ProcessDescription $processDescription): self
    {
        $this->processDescription[] = $processDescription;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ProcessDescription
     */
    public function addToProcessDescriptionWithCreate(): ProcessDescription
    {
        $this->addToprocessDescription($processDescription = new ProcessDescription());

        return $processDescription;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ProcessDescription $processDescription
     * @return self
     */
    public function addOnceToProcessDescription(ProcessDescription $processDescription): self
    {
        $this->processDescription[0] = $processDescription;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ProcessDescription
     */
    public function addOnceToProcessDescriptionWithCreate(): ProcessDescription
    {
        if ($this->processDescription === []) {
            $this->addOnceToprocessDescription(new ProcessDescription());
        }

        return $this->processDescription[0];
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\ConditionsDescription>|null
     */
    public function getConditionsDescription(): ?array
    {
        return $this->conditionsDescription;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\ConditionsDescription> $conditionsDescription
     * @return self
     */
    public function setConditionsDescription(array $conditionsDescription): self
    {
        $this->conditionsDescription = $conditionsDescription;

        return $this;
    }

    /**
     * @return self
     */
    public function clearConditionsDescription(): self
    {
        $this->conditionsDescription = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ConditionsDescription $conditionsDescription
     * @return self
     */
    public function addToConditionsDescription(ConditionsDescription $conditionsDescription): self
    {
        $this->conditionsDescription[] = $conditionsDescription;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ConditionsDescription
     */
    public function addToConditionsDescriptionWithCreate(): ConditionsDescription
    {
        $this->addToconditionsDescription($conditionsDescription = new ConditionsDescription());

        return $conditionsDescription;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ConditionsDescription $conditionsDescription
     * @return self
     */
    public function addOnceToConditionsDescription(ConditionsDescription $conditionsDescription): self
    {
        $this->conditionsDescription[0] = $conditionsDescription;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ConditionsDescription
     */
    public function addOnceToConditionsDescriptionWithCreate(): ConditionsDescription
    {
        if ($this->conditionsDescription === []) {
            $this->addOnceToconditionsDescription(new ConditionsDescription());
        }

        return $this->conditionsDescription[0];
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cbc\ElectronicDeviceDescription>|null
     */
    public function getElectronicDeviceDescription(): ?array
    {
        return $this->electronicDeviceDescription;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cbc\ElectronicDeviceDescription> $electronicDeviceDescription
     * @return self
     */
    public function setElectronicDeviceDescription(array $electronicDeviceDescription): self
    {
        $this->electronicDeviceDescription = $electronicDeviceDescription;

        return $this;
    }

    /**
     * @return self
     */
    public function clearElectronicDeviceDescription(): self
    {
        $this->electronicDeviceDescription = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ElectronicDeviceDescription $electronicDeviceDescription
     * @return self
     */
    public function addToElectronicDeviceDescription(ElectronicDeviceDescription $electronicDeviceDescription): self
    {
        $this->electronicDeviceDescription[] = $electronicDeviceDescription;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ElectronicDeviceDescription
     */
    public function addToElectronicDeviceDescriptionWithCreate(): ElectronicDeviceDescription
    {
        $this->addToelectronicDeviceDescription($electronicDeviceDescription = new ElectronicDeviceDescription());

        return $electronicDeviceDescription;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ElectronicDeviceDescription $electronicDeviceDescription
     * @return self
     */
    public function addOnceToElectronicDeviceDescription(
        ElectronicDeviceDescription $electronicDeviceDescription,
    ): self {
        $this->electronicDeviceDescription[0] = $electronicDeviceDescription;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ElectronicDeviceDescription
     */
    public function addOnceToElectronicDeviceDescriptionWithCreate(): ElectronicDeviceDescription
    {
        if ($this->electronicDeviceDescription === []) {
            $this->addOnceToelectronicDeviceDescription(new ElectronicDeviceDescription());
        }

        return $this->electronicDeviceDescription[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\AuctionURI|null
     */
    public function getAuctionURI(): ?AuctionURI
    {
        return $this->auctionURI;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\AuctionURI
     */
    public function getAuctionURIWithCreate(): AuctionURI
    {
        $this->auctionURI = is_null($this->auctionURI) ? new AuctionURI() : $this->auctionURI;

        return $this->auctionURI;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\AuctionURI $auctionURI
     * @return self
     */
    public function setAuctionURI(AuctionURI $auctionURI): self
    {
        $this->auctionURI = $auctionURI;

        return $this;
    }
}
