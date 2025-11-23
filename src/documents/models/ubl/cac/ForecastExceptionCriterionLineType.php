<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ComparisonDataSourceCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\DataSourceCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ForecastPurposeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ForecastTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TimeDeltaDaysQuantity;

class ForecastExceptionCriterionLineType
{
    use HandlesObjectFlags;

    /**
     * @var ForecastPurposeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ForecastPurposeCode")
     * @JMS\Expose
     * @JMS\SerializedName("ForecastPurposeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getForecastPurposeCode", setter="setForecastPurposeCode")
     */
    private $forecastPurposeCode;

    /**
     * @var ForecastTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ForecastTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("ForecastTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getForecastTypeCode", setter="setForecastTypeCode")
     */
    private $forecastTypeCode;

    /**
     * @var ComparisonDataSourceCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ComparisonDataSourceCode")
     * @JMS\Expose
     * @JMS\SerializedName("ComparisonDataSourceCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getComparisonDataSourceCode", setter="setComparisonDataSourceCode")
     */
    private $comparisonDataSourceCode;

    /**
     * @var DataSourceCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\DataSourceCode")
     * @JMS\Expose
     * @JMS\SerializedName("DataSourceCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDataSourceCode", setter="setDataSourceCode")
     */
    private $dataSourceCode;

    /**
     * @var TimeDeltaDaysQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TimeDeltaDaysQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("TimeDeltaDaysQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTimeDeltaDaysQuantity", setter="setTimeDeltaDaysQuantity")
     */
    private $timeDeltaDaysQuantity;

    /**
     * @return ForecastPurposeCode|null
     */
    public function getForecastPurposeCode(): ?ForecastPurposeCode
    {
        return $this->forecastPurposeCode;
    }

    /**
     * @return ForecastPurposeCode
     */
    public function getForecastPurposeCodeWithCreate(): ForecastPurposeCode
    {
        $this->forecastPurposeCode = is_null($this->forecastPurposeCode) ? new ForecastPurposeCode() : $this->forecastPurposeCode;

        return $this->forecastPurposeCode;
    }

    /**
     * @param ForecastPurposeCode|null $forecastPurposeCode
     * @return self
     */
    public function setForecastPurposeCode(?ForecastPurposeCode $forecastPurposeCode = null): self
    {
        $this->forecastPurposeCode = $forecastPurposeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetForecastPurposeCode(): self
    {
        $this->forecastPurposeCode = null;

        return $this;
    }

    /**
     * @return ForecastTypeCode|null
     */
    public function getForecastTypeCode(): ?ForecastTypeCode
    {
        return $this->forecastTypeCode;
    }

    /**
     * @return ForecastTypeCode
     */
    public function getForecastTypeCodeWithCreate(): ForecastTypeCode
    {
        $this->forecastTypeCode = is_null($this->forecastTypeCode) ? new ForecastTypeCode() : $this->forecastTypeCode;

        return $this->forecastTypeCode;
    }

    /**
     * @param ForecastTypeCode|null $forecastTypeCode
     * @return self
     */
    public function setForecastTypeCode(?ForecastTypeCode $forecastTypeCode = null): self
    {
        $this->forecastTypeCode = $forecastTypeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetForecastTypeCode(): self
    {
        $this->forecastTypeCode = null;

        return $this;
    }

    /**
     * @return ComparisonDataSourceCode|null
     */
    public function getComparisonDataSourceCode(): ?ComparisonDataSourceCode
    {
        return $this->comparisonDataSourceCode;
    }

    /**
     * @return ComparisonDataSourceCode
     */
    public function getComparisonDataSourceCodeWithCreate(): ComparisonDataSourceCode
    {
        $this->comparisonDataSourceCode = is_null($this->comparisonDataSourceCode) ? new ComparisonDataSourceCode() : $this->comparisonDataSourceCode;

        return $this->comparisonDataSourceCode;
    }

    /**
     * @param ComparisonDataSourceCode|null $comparisonDataSourceCode
     * @return self
     */
    public function setComparisonDataSourceCode(?ComparisonDataSourceCode $comparisonDataSourceCode = null): self
    {
        $this->comparisonDataSourceCode = $comparisonDataSourceCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetComparisonDataSourceCode(): self
    {
        $this->comparisonDataSourceCode = null;

        return $this;
    }

    /**
     * @return DataSourceCode|null
     */
    public function getDataSourceCode(): ?DataSourceCode
    {
        return $this->dataSourceCode;
    }

    /**
     * @return DataSourceCode
     */
    public function getDataSourceCodeWithCreate(): DataSourceCode
    {
        $this->dataSourceCode = is_null($this->dataSourceCode) ? new DataSourceCode() : $this->dataSourceCode;

        return $this->dataSourceCode;
    }

    /**
     * @param DataSourceCode|null $dataSourceCode
     * @return self
     */
    public function setDataSourceCode(?DataSourceCode $dataSourceCode = null): self
    {
        $this->dataSourceCode = $dataSourceCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDataSourceCode(): self
    {
        $this->dataSourceCode = null;

        return $this;
    }

    /**
     * @return TimeDeltaDaysQuantity|null
     */
    public function getTimeDeltaDaysQuantity(): ?TimeDeltaDaysQuantity
    {
        return $this->timeDeltaDaysQuantity;
    }

    /**
     * @return TimeDeltaDaysQuantity
     */
    public function getTimeDeltaDaysQuantityWithCreate(): TimeDeltaDaysQuantity
    {
        $this->timeDeltaDaysQuantity = is_null($this->timeDeltaDaysQuantity) ? new TimeDeltaDaysQuantity() : $this->timeDeltaDaysQuantity;

        return $this->timeDeltaDaysQuantity;
    }

    /**
     * @param TimeDeltaDaysQuantity|null $timeDeltaDaysQuantity
     * @return self
     */
    public function setTimeDeltaDaysQuantity(?TimeDeltaDaysQuantity $timeDeltaDaysQuantity = null): self
    {
        $this->timeDeltaDaysQuantity = $timeDeltaDaysQuantity;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetTimeDeltaDaysQuantity(): self
    {
        $this->timeDeltaDaysQuantity = null;

        return $this;
    }
}
