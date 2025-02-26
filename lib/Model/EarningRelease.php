<?php
/**
 * EarningRelease
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
 * EarningRelease Class Doc Comment
 *
 * @category Class
 * @package  Finnhub
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EarningRelease implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EarningRelease';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'symbol' => 'string',
        'date' => '\DateTime',
        'hour' => 'string',
        'year' => 'int',
        'quarter' => 'int',
        'eps_estimate' => 'float',
        'eps_actual' => 'float',
        'revenue_estimate' => 'float',
        'revenue_actual' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'symbol' => null,
        'date' => 'date',
        'hour' => null,
        'year' => 'int64',
        'quarter' => 'int64',
        'eps_estimate' => 'float',
        'eps_actual' => 'float',
        'revenue_estimate' => 'float',
        'revenue_actual' => 'float'
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
        'symbol' => 'symbol',
        'date' => 'date',
        'hour' => 'hour',
        'year' => 'year',
        'quarter' => 'quarter',
        'eps_estimate' => 'epsEstimate',
        'eps_actual' => 'epsActual',
        'revenue_estimate' => 'revenueEstimate',
        'revenue_actual' => 'revenueActual'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'symbol' => 'setSymbol',
        'date' => 'setDate',
        'hour' => 'setHour',
        'year' => 'setYear',
        'quarter' => 'setQuarter',
        'eps_estimate' => 'setEpsEstimate',
        'eps_actual' => 'setEpsActual',
        'revenue_estimate' => 'setRevenueEstimate',
        'revenue_actual' => 'setRevenueActual'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'symbol' => 'getSymbol',
        'date' => 'getDate',
        'hour' => 'getHour',
        'year' => 'getYear',
        'quarter' => 'getQuarter',
        'eps_estimate' => 'getEpsEstimate',
        'eps_actual' => 'getEpsActual',
        'revenue_estimate' => 'getRevenueEstimate',
        'revenue_actual' => 'getRevenueActual'
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
        $this->container['symbol'] = $data['symbol'] ?? null;
        $this->container['date'] = $data['date'] ?? null;
        $this->container['hour'] = $data['hour'] ?? null;
        $this->container['year'] = $data['year'] ?? null;
        $this->container['quarter'] = $data['quarter'] ?? null;
        $this->container['eps_estimate'] = $data['eps_estimate'] ?? null;
        $this->container['eps_actual'] = $data['eps_actual'] ?? null;
        $this->container['revenue_estimate'] = $data['revenue_estimate'] ?? null;
        $this->container['revenue_actual'] = $data['revenue_actual'] ?? null;
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
     * Gets symbol
     *
     * @return string|null
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string|null $symbol Symbol.
     *
     * @return self
     */
    public function setSymbol($symbol)
    {
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date Date.
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets hour
     *
     * @return string|null
     */
    public function getHour()
    {
        return $this->container['hour'];
    }

    /**
     * Sets hour
     *
     * @param string|null $hour Indicates whether the earnings is announced before market open(<code>bmo</code>), after market close(<code>amc</code>), or during market hour(<code>dmh</code>).
     *
     * @return self
     */
    public function setHour($hour)
    {
        $this->container['hour'] = $hour;

        return $this;
    }

    /**
     * Gets year
     *
     * @return int|null
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param int|null $year Earnings year.
     *
     * @return self
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

        return $this;
    }

    /**
     * Gets quarter
     *
     * @return int|null
     */
    public function getQuarter()
    {
        return $this->container['quarter'];
    }

    /**
     * Sets quarter
     *
     * @param int|null $quarter Earnings quarter.
     *
     * @return self
     */
    public function setQuarter($quarter)
    {
        $this->container['quarter'] = $quarter;

        return $this;
    }

    /**
     * Gets eps_estimate
     *
     * @return float|null
     */
    public function getEpsEstimate()
    {
        return $this->container['eps_estimate'];
    }

    /**
     * Sets eps_estimate
     *
     * @param float|null $eps_estimate EPS estimate.
     *
     * @return self
     */
    public function setEpsEstimate($eps_estimate)
    {
        $this->container['eps_estimate'] = $eps_estimate;

        return $this;
    }

    /**
     * Gets eps_actual
     *
     * @return float|null
     */
    public function getEpsActual()
    {
        return $this->container['eps_actual'];
    }

    /**
     * Sets eps_actual
     *
     * @param float|null $eps_actual EPS actual.
     *
     * @return self
     */
    public function setEpsActual($eps_actual)
    {
        $this->container['eps_actual'] = $eps_actual;

        return $this;
    }

    /**
     * Gets revenue_estimate
     *
     * @return float|null
     */
    public function getRevenueEstimate()
    {
        return $this->container['revenue_estimate'];
    }

    /**
     * Sets revenue_estimate
     *
     * @param float|null $revenue_estimate Revenue estimate including Finnhub's proprietary estimates.
     *
     * @return self
     */
    public function setRevenueEstimate($revenue_estimate)
    {
        $this->container['revenue_estimate'] = $revenue_estimate;

        return $this;
    }

    /**
     * Gets revenue_actual
     *
     * @return float|null
     */
    public function getRevenueActual()
    {
        return $this->container['revenue_actual'];
    }

    /**
     * Sets revenue_actual
     *
     * @param float|null $revenue_actual Revenue actual.
     *
     * @return self
     */
    public function setRevenueActual($revenue_actual)
    {
        $this->container['revenue_actual'] = $revenue_actual;

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


