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
class InvoiceSuiteProductDTO
{
    /**
     * The ID of the product (product id, Order-X interoperable)
     *
     * @var string|null
     */
    protected ?string $id = null;

    /**
     * The name of the product (product name)
     *
     * @var string|null
     */
    protected ?string $name = null;

    /**
     * The product description of the product
     *
     * @var string|null
     */
    protected ?string $description = null;

    /**
     * The identifier assigned to the product by the seller
     *
     * @var string|null
     */
    protected ?string $sellerId = null;

    /**
     * THe identifier assigned to the product by the buyer
     *
     * @var string|null
     */
    protected ?string $buyerId = null;

    /**
     * The product global id
     *
     * @var InvoiceSuiteIdDTO|null
     */
    protected ?InvoiceSuiteIdDTO $globalId = null;

    /**
     * The id assigned by the industry
     *
     * @var string|null
     */
    protected ?string $industryId = null;

    /**
     * The unique model identifier of the product
     *
     * @var string|null
     */
    protected ?string $modelId = null;

    /**
     * The batch (lot) identifier of the product
     *
     * @var string|null
     */
    protected ?string $batchId = null;

    /**
     * THe brand name of the product
     *
     * @var string|null
     */
    protected ?string $brandName = null;

    /**
     * THe model name of the product
     *
     * @var string|null
     */
    protected ?string $modelName = null;

    /**
     * THe code indicating the country the goods came from
     *
     * @var string|null
     */
    protected ?string $originTradeCountry = null;

    /**
     * Constructor
     *
     * @param string|null $id The ID of the product (product id, Order-X interoperable)
     * @param string|null $name The name of the product (product name)
     * @param string|null $description The product description of the product
     * @param string|null $sellerId The identifier assigned to the product by the seller
     * @param string|null $buyerId THe identifier assigned to the product by the buyer
     * @param InvoiceSuiteIdDTO|null $globalId The product global id
     * @param string|null $industryId The id assigned by the industry
     * @param string|null $modelId The unique model identifier of the product
     * @param string|null $batchId The batch (lot) identifier of the product
     * @param string|null $brandName THe brand name of the product
     * @param string|null $modelName THe model name of the product
     * @param string|null $originTradeCountry THe code indicating the country the goods came from
     */
    public function __construct(
        ?string $id = null,
        ?string $name = null,
        ?string $description = null,
        ?string $sellerId = null,
        ?string $buyerId = null,
        ?InvoiceSuiteIdDTO $globalId = null,
        ?string $industryId = null,
        ?string $modelId = null,
        ?string $batchId = null,
        ?string $brandName = null,
        ?string $modelName = null,
        ?string $originTradeCountry = null,
    ) {
        $this->setId($id);
        $this->setName($name);
        $this->setDescription($description);
        $this->setSellerId($sellerId);
        $this->setBuyerId($buyerId);
        $this->setGlobalId($globalId);
        $this->setIndustryId($industryId);
        $this->setModelId($modelId);
        $this->setBatchId($batchId);
        $this->setBrandName($brandName);
        $this->setModelName($modelName);
        $this->setOriginTradeCountry($originTradeCountry);
    }

    /**
     * Returns the ID of the product (product id, Order-X interoperable)
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets the ID of the product (product id, Order-X interoperable)
     *
     * @param string|null $id The ID of the product (product id, Order-X interoperable)
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Returns the name of the product (product name)
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets the name of the product (product name)
     *
     * @param string|null $name The name of the product (product name)
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Returns the product description of the product
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets the product description of the product
     *
     * @param string|null $description The product description of the product
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Returns the identifier assigned to the product by the seller
     *
     * @return string|null
     */
    public function getSellerId(): ?string
    {
        return $this->sellerId;
    }

    /**
     * Sets the identifier assigned to the product by the seller
     *
     * @param string|null $sellerId The identifier assigned to the product by the seller
     * @return self
     */
    public function setSellerId(?string $sellerId): self
    {
        $this->sellerId = $sellerId;

        return $this;
    }

    /**
     * Returns tHe identifier assigned to the product by the buyer
     *
     * @return string|null
     */
    public function getBuyerId(): ?string
    {
        return $this->buyerId;
    }

    /**
     * Sets tHe identifier assigned to the product by the buyer
     *
     * @param string|null $buyerId THe identifier assigned to the product by the buyer
     * @return self
     */
    public function setBuyerId(?string $buyerId): self
    {
        $this->buyerId = $buyerId;

        return $this;
    }

    /**
     * Returns the product global id
     *
     * @return InvoiceSuiteIdDTO|null
     */
    public function getGlobalId(): ?InvoiceSuiteIdDTO
    {
        return $this->globalId;
    }

    /**
     * Sets the product global id
     *
     * @param InvoiceSuiteIdDTO|null $globalId The product global id
     * @return self
     */
    public function setGlobalId(?InvoiceSuiteIdDTO $globalId): self
    {
        $this->globalId = $globalId;

        return $this;
    }

    /**
     * Returns the id assigned by the industry
     *
     * @return string|null
     */
    public function getIndustryId(): ?string
    {
        return $this->industryId;
    }

    /**
     * Sets the id assigned by the industry
     *
     * @param string|null $industryId The id assigned by the industry
     * @return self
     */
    public function setIndustryId(?string $industryId): self
    {
        $this->industryId = $industryId;

        return $this;
    }

    /**
     * Returns the unique model identifier of the product
     *
     * @return string|null
     */
    public function getModelId(): ?string
    {
        return $this->modelId;
    }

    /**
     * Sets the unique model identifier of the product
     *
     * @param string|null $modelId The unique model identifier of the product
     * @return self
     */
    public function setModelId(?string $modelId): self
    {
        $this->modelId = $modelId;

        return $this;
    }

    /**
     * Returns the batch (lot) identifier of the product
     *
     * @return string|null
     */
    public function getBatchId(): ?string
    {
        return $this->batchId;
    }

    /**
     * Sets the batch (lot) identifier of the product
     *
     * @param string|null $batchId The batch (lot) identifier of the product
     * @return self
     */
    public function setBatchId(?string $batchId): self
    {
        $this->batchId = $batchId;

        return $this;
    }

    /**
     * Returns tHe brand name of the product
     *
     * @return string|null
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    /**
     * Sets tHe brand name of the product
     *
     * @param string|null $brandName THe brand name of the product
     * @return self
     */
    public function setBrandName(?string $brandName): self
    {
        $this->brandName = $brandName;

        return $this;
    }

    /**
     * Returns tHe model name of the product
     *
     * @return string|null
     */
    public function getModelName(): ?string
    {
        return $this->modelName;
    }

    /**
     * Sets tHe model name of the product
     *
     * @param string|null $modelName THe model name of the product
     * @return self
     */
    public function setModelName(?string $modelName): self
    {
        $this->modelName = $modelName;

        return $this;
    }

    /**
     * Returns tHe code indicating the country the goods came from
     *
     * @return string|null
     */
    public function getOriginTradeCountry(): ?string
    {
        return $this->originTradeCountry;
    }

    /**
     * Sets tHe code indicating the country the goods came from
     *
     * @param string|null $originTradeCountry THe code indicating the country the goods came from
     * @return self
     */
    public function setOriginTradeCountry(?string $originTradeCountry): self
    {
        $this->originTradeCountry = $originTradeCountry;

        return $this;
    }
}
