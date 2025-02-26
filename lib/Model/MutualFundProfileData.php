<?php
/**
 * MutualFundProfileData
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Finnhub
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Finnhub API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Finnhub\Model;

use \ArrayAccess;
use \Finnhub\ObjectSerializer;

/**
 * MutualFundProfileData Class Doc Comment
 *
 * @category Class
 * @package  Finnhub
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MutualFundProfileData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MutualFundProfileData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'category' => 'string',
        'investment_segment' => 'string',
        'total_nav' => 'float',
        'expense_ratio' => 'float',
        'benchmark' => 'string',
        'inception_date' => '\DateTime',
        'description' => 'string',
        'fund_family' => 'string',
        'manager' => 'string',
        'status' => 'string',
        'beta' => 'float',
        'deferred_load' => 'float',
        'fee12b1' => 'float',
        'front_load' => 'float',
        'ira_min_investment' => 'float',
        'isin' => 'string',
        'cusip' => 'string',
        'max_redemption_fee' => 'float',
        'standard_min_investment' => 'float',
        'turnover' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'category' => null,
        'investment_segment' => null,
        'total_nav' => 'float',
        'expense_ratio' => 'float',
        'benchmark' => null,
        'inception_date' => 'date',
        'description' => null,
        'fund_family' => null,
        'manager' => null,
        'status' => null,
        'beta' => 'float',
        'deferred_load' => 'float',
        'fee12b1' => 'float',
        'front_load' => 'float',
        'ira_min_investment' => 'float',
        'isin' => null,
        'cusip' => null,
        'max_redemption_fee' => 'float',
        'standard_min_investment' => 'float',
        'turnover' => 'float'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'category' => 'category',
        'investment_segment' => 'investmentSegment',
        'total_nav' => 'totalNav',
        'expense_ratio' => 'expenseRatio',
        'benchmark' => 'benchmark',
        'inception_date' => 'inceptionDate',
        'description' => 'description',
        'fund_family' => 'fundFamily',
        'manager' => 'manager',
        'status' => 'status',
        'beta' => 'beta',
        'deferred_load' => 'deferredLoad',
        'fee12b1' => 'fee12b1',
        'front_load' => 'frontLoad',
        'ira_min_investment' => 'iraMinInvestment',
        'isin' => 'isin',
        'cusip' => 'cusip',
        'max_redemption_fee' => 'maxRedemptionFee',
        'standard_min_investment' => 'standardMinInvestment',
        'turnover' => 'turnover'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'category' => 'setCategory',
        'investment_segment' => 'setInvestmentSegment',
        'total_nav' => 'setTotalNav',
        'expense_ratio' => 'setExpenseRatio',
        'benchmark' => 'setBenchmark',
        'inception_date' => 'setInceptionDate',
        'description' => 'setDescription',
        'fund_family' => 'setFundFamily',
        'manager' => 'setManager',
        'status' => 'setStatus',
        'beta' => 'setBeta',
        'deferred_load' => 'setDeferredLoad',
        'fee12b1' => 'setFee12b1',
        'front_load' => 'setFrontLoad',
        'ira_min_investment' => 'setIraMinInvestment',
        'isin' => 'setIsin',
        'cusip' => 'setCusip',
        'max_redemption_fee' => 'setMaxRedemptionFee',
        'standard_min_investment' => 'setStandardMinInvestment',
        'turnover' => 'setTurnover'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'category' => 'getCategory',
        'investment_segment' => 'getInvestmentSegment',
        'total_nav' => 'getTotalNav',
        'expense_ratio' => 'getExpenseRatio',
        'benchmark' => 'getBenchmark',
        'inception_date' => 'getInceptionDate',
        'description' => 'getDescription',
        'fund_family' => 'getFundFamily',
        'manager' => 'getManager',
        'status' => 'getStatus',
        'beta' => 'getBeta',
        'deferred_load' => 'getDeferredLoad',
        'fee12b1' => 'getFee12b1',
        'front_load' => 'getFrontLoad',
        'ira_min_investment' => 'getIraMinInvestment',
        'isin' => 'getIsin',
        'cusip' => 'getCusip',
        'max_redemption_fee' => 'getMaxRedemptionFee',
        'standard_min_investment' => 'getStandardMinInvestment',
        'turnover' => 'getTurnover'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = $data['name'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['investment_segment'] = $data['investment_segment'] ?? null;
        $this->container['total_nav'] = $data['total_nav'] ?? null;
        $this->container['expense_ratio'] = $data['expense_ratio'] ?? null;
        $this->container['benchmark'] = $data['benchmark'] ?? null;
        $this->container['inception_date'] = $data['inception_date'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['fund_family'] = $data['fund_family'] ?? null;
        $this->container['manager'] = $data['manager'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['beta'] = $data['beta'] ?? null;
        $this->container['deferred_load'] = $data['deferred_load'] ?? null;
        $this->container['fee12b1'] = $data['fee12b1'] ?? null;
        $this->container['front_load'] = $data['front_load'] ?? null;
        $this->container['ira_min_investment'] = $data['ira_min_investment'] ?? null;
        $this->container['isin'] = $data['isin'] ?? null;
        $this->container['cusip'] = $data['cusip'] ?? null;
        $this->container['max_redemption_fee'] = $data['max_redemption_fee'] ?? null;
        $this->container['standard_min_investment'] = $data['standard_min_investment'] ?? null;
        $this->container['turnover'] = $data['turnover'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category Fund's category.
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets investment_segment
     *
     * @return string|null
     */
    public function getInvestmentSegment()
    {
        return $this->container['investment_segment'];
    }

    /**
     * Sets investment_segment
     *
     * @param string|null $investment_segment Investment Segment.
     *
     * @return self
     */
    public function setInvestmentSegment($investment_segment)
    {
        $this->container['investment_segment'] = $investment_segment;

        return $this;
    }

    /**
     * Gets total_nav
     *
     * @return float|null
     */
    public function getTotalNav()
    {
        return $this->container['total_nav'];
    }

    /**
     * Sets total_nav
     *
     * @param float|null $total_nav NAV.
     *
     * @return self
     */
    public function setTotalNav($total_nav)
    {
        $this->container['total_nav'] = $total_nav;

        return $this;
    }

    /**
     * Gets expense_ratio
     *
     * @return float|null
     */
    public function getExpenseRatio()
    {
        return $this->container['expense_ratio'];
    }

    /**
     * Sets expense_ratio
     *
     * @param float|null $expense_ratio Expense ratio.
     *
     * @return self
     */
    public function setExpenseRatio($expense_ratio)
    {
        $this->container['expense_ratio'] = $expense_ratio;

        return $this;
    }

    /**
     * Gets benchmark
     *
     * @return string|null
     */
    public function getBenchmark()
    {
        return $this->container['benchmark'];
    }

    /**
     * Sets benchmark
     *
     * @param string|null $benchmark Index benchmark.
     *
     * @return self
     */
    public function setBenchmark($benchmark)
    {
        $this->container['benchmark'] = $benchmark;

        return $this;
    }

    /**
     * Gets inception_date
     *
     * @return \DateTime|null
     */
    public function getInceptionDate()
    {
        return $this->container['inception_date'];
    }

    /**
     * Sets inception_date
     *
     * @param \DateTime|null $inception_date Inception date.
     *
     * @return self
     */
    public function setInceptionDate($inception_date)
    {
        $this->container['inception_date'] = $inception_date;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Fund's description.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets fund_family
     *
     * @return string|null
     */
    public function getFundFamily()
    {
        return $this->container['fund_family'];
    }

    /**
     * Sets fund_family
     *
     * @param string|null $fund_family Fund Family.
     *
     * @return self
     */
    public function setFundFamily($fund_family)
    {
        $this->container['fund_family'] = $fund_family;

        return $this;
    }

    /**
     * Gets manager
     *
     * @return string|null
     */
    public function getManager()
    {
        return $this->container['manager'];
    }

    /**
     * Sets manager
     *
     * @param string|null $manager Fund's managers.
     *
     * @return self
     */
    public function setManager($manager)
    {
        $this->container['manager'] = $manager;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Status.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets beta
     *
     * @return float|null
     */
    public function getBeta()
    {
        return $this->container['beta'];
    }

    /**
     * Sets beta
     *
     * @param float|null $beta Beta.
     *
     * @return self
     */
    public function setBeta($beta)
    {
        $this->container['beta'] = $beta;

        return $this;
    }

    /**
     * Gets deferred_load
     *
     * @return float|null
     */
    public function getDeferredLoad()
    {
        return $this->container['deferred_load'];
    }

    /**
     * Sets deferred_load
     *
     * @param float|null $deferred_load Deferred load.
     *
     * @return self
     */
    public function setDeferredLoad($deferred_load)
    {
        $this->container['deferred_load'] = $deferred_load;

        return $this;
    }

    /**
     * Gets fee12b1
     *
     * @return float|null
     */
    public function getFee12b1()
    {
        return $this->container['fee12b1'];
    }

    /**
     * Sets fee12b1
     *
     * @param float|null $fee12b1 12B-1 fee.
     *
     * @return self
     */
    public function setFee12b1($fee12b1)
    {
        $this->container['fee12b1'] = $fee12b1;

        return $this;
    }

    /**
     * Gets front_load
     *
     * @return float|null
     */
    public function getFrontLoad()
    {
        return $this->container['front_load'];
    }

    /**
     * Sets front_load
     *
     * @param float|null $front_load Front Load.
     *
     * @return self
     */
    public function setFrontLoad($front_load)
    {
        $this->container['front_load'] = $front_load;

        return $this;
    }

    /**
     * Gets ira_min_investment
     *
     * @return float|null
     */
    public function getIraMinInvestment()
    {
        return $this->container['ira_min_investment'];
    }

    /**
     * Sets ira_min_investment
     *
     * @param float|null $ira_min_investment IRA minimum investment.
     *
     * @return self
     */
    public function setIraMinInvestment($ira_min_investment)
    {
        $this->container['ira_min_investment'] = $ira_min_investment;

        return $this;
    }

    /**
     * Gets isin
     *
     * @return string|null
     */
    public function getIsin()
    {
        return $this->container['isin'];
    }

    /**
     * Sets isin
     *
     * @param string|null $isin ISIN.
     *
     * @return self
     */
    public function setIsin($isin)
    {
        $this->container['isin'] = $isin;

        return $this;
    }

    /**
     * Gets cusip
     *
     * @return string|null
     */
    public function getCusip()
    {
        return $this->container['cusip'];
    }

    /**
     * Sets cusip
     *
     * @param string|null $cusip CUSIP.
     *
     * @return self
     */
    public function setCusip($cusip)
    {
        $this->container['cusip'] = $cusip;

        return $this;
    }

    /**
     * Gets max_redemption_fee
     *
     * @return float|null
     */
    public function getMaxRedemptionFee()
    {
        return $this->container['max_redemption_fee'];
    }

    /**
     * Sets max_redemption_fee
     *
     * @param float|null $max_redemption_fee Max redemption fee.
     *
     * @return self
     */
    public function setMaxRedemptionFee($max_redemption_fee)
    {
        $this->container['max_redemption_fee'] = $max_redemption_fee;

        return $this;
    }

    /**
     * Gets standard_min_investment
     *
     * @return float|null
     */
    public function getStandardMinInvestment()
    {
        return $this->container['standard_min_investment'];
    }

    /**
     * Sets standard_min_investment
     *
     * @param float|null $standard_min_investment Minimum investment for standard accounts.
     *
     * @return self
     */
    public function setStandardMinInvestment($standard_min_investment)
    {
        $this->container['standard_min_investment'] = $standard_min_investment;

        return $this;
    }

    /**
     * Gets turnover
     *
     * @return float|null
     */
    public function getTurnover()
    {
        return $this->container['turnover'];
    }

    /**
     * Sets turnover
     *
     * @param float|null $turnover Turnover.
     *
     * @return self
     */
    public function setTurnover($turnover)
    {
        $this->container['turnover'] = $turnover;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


