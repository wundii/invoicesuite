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
class InvoiceSuiteProductCharacteristicDTO
{
    /**
     * THe name of the attribute or characteristic ("Colour")
     *
     * @var string|null
     */
    protected ?string $description = null;

    /**
     * THe value of the attribute or characteristic ("Red")
     *
     * @var string|null
     */
    protected ?string $value = null;

    /**
     * THe type (Code) of product characteristic
     *
     * @var string|null
     */
    protected ?string $type = null;

    /**
     * THe value of the product property (numerical measured variable)
     *
     * @var InvoiceSuiteMeasurecDTO|null
     */
    protected ?InvoiceSuiteMeasurecDTO $valueMeasure = null;

    /**
     * Constructor
     *
     * @param string|null $description THe name of the attribute or characteristic ("Colour")
     * @param string|null $value THe value of the attribute or characteristic ("Red")
     * @param string|null $type THe type (Code) of product characteristic
     * @param InvoiceSuiteMeasurecDTO|null $valueMeasure THe value of the product property (numerical measured variable)
     */
    public function __construct(
        ?string $description = null,
        ?string $value = null,
        ?string $type = null,
        ?InvoiceSuiteMeasurecDTO $valueMeasure = null,
    ) {
        $this->setDescription($description);
        $this->setValue($value);
        $this->setType($type);
        $this->setValueMeasure($valueMeasure);
    }

    /**
     * Returns tHe name of the attribute or characteristic ("Colour")
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets tHe name of the attribute or characteristic ("Colour")
     *
     * @param string|null $description THe name of the attribute or characteristic ("Colour")
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Returns tHe value of the attribute or characteristic ("Red")
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Sets tHe value of the attribute or characteristic ("Red")
     *
     * @param string|null $value THe value of the attribute or characteristic ("Red")
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Returns tHe type (Code) of product characteristic
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets tHe type (Code) of product characteristic
     *
     * @param string|null $type THe type (Code) of product characteristic
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Returns tHe value of the product property (numerical measured variable)
     *
     * @return InvoiceSuiteMeasurecDTO|null
     */
    public function getValueMeasure(): ?InvoiceSuiteMeasurecDTO
    {
        return $this->valueMeasure;
    }

    /**
     * Sets tHe value of the product property (numerical measured variable)
     *
     * @param InvoiceSuiteMeasurecDTO|null $valueMeasure THe value of the product property (numerical measured variable)
     * @return self
     */
    public function setValueMeasure(?InvoiceSuiteMeasurecDTO $valueMeasure): self
    {
        $this->valueMeasure = $valueMeasure;

        return $this;
    }
}
