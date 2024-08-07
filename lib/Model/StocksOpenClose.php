<?php
/**
 * StocksOpenClose
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Polygon API
 *
 * The future of fintech.
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * StocksOpenClose Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StocksOpenClose implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StocksOpenClose';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'after_hours' => 'float',
        'close' => 'float',
        'from' => '\DateTime',
        'high' => 'float',
        'low' => 'float',
        'open' => 'float',
        'otc' => 'bool',
        'pre_market' => 'int',
        'status' => 'string',
        'symbol' => 'string',
        'volume' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'after_hours' => 'double',
        'close' => 'double',
        'from' => 'date',
        'high' => 'double',
        'low' => 'double',
        'open' => 'double',
        'otc' => null,
        'pre_market' => null,
        'status' => null,
        'symbol' => null,
        'volume' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'after_hours' => false,
        'close' => false,
        'from' => false,
        'high' => false,
        'low' => false,
        'open' => false,
        'otc' => false,
        'pre_market' => false,
        'status' => false,
        'symbol' => false,
        'volume' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'after_hours' => 'afterHours',
        'close' => 'close',
        'from' => 'from',
        'high' => 'high',
        'low' => 'low',
        'open' => 'open',
        'otc' => 'otc',
        'pre_market' => 'preMarket',
        'status' => 'status',
        'symbol' => 'symbol',
        'volume' => 'volume'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'after_hours' => 'setAfterHours',
        'close' => 'setClose',
        'from' => 'setFrom',
        'high' => 'setHigh',
        'low' => 'setLow',
        'open' => 'setOpen',
        'otc' => 'setOtc',
        'pre_market' => 'setPreMarket',
        'status' => 'setStatus',
        'symbol' => 'setSymbol',
        'volume' => 'setVolume'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'after_hours' => 'getAfterHours',
        'close' => 'getClose',
        'from' => 'getFrom',
        'high' => 'getHigh',
        'low' => 'getLow',
        'open' => 'getOpen',
        'otc' => 'getOtc',
        'pre_market' => 'getPreMarket',
        'status' => 'getStatus',
        'symbol' => 'getSymbol',
        'volume' => 'getVolume'
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
        $this->setIfExists('after_hours', $data ?? [], null);
        $this->setIfExists('close', $data ?? [], null);
        $this->setIfExists('from', $data ?? [], null);
        $this->setIfExists('high', $data ?? [], null);
        $this->setIfExists('low', $data ?? [], null);
        $this->setIfExists('open', $data ?? [], null);
        $this->setIfExists('otc', $data ?? [], null);
        $this->setIfExists('pre_market', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('volume', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['close'] === null) {
            $invalidProperties[] = "'close' can't be null";
        }
        if ($this->container['from'] === null) {
            $invalidProperties[] = "'from' can't be null";
        }
        if ($this->container['high'] === null) {
            $invalidProperties[] = "'high' can't be null";
        }
        if ($this->container['low'] === null) {
            $invalidProperties[] = "'low' can't be null";
        }
        if ($this->container['open'] === null) {
            $invalidProperties[] = "'open' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['symbol'] === null) {
            $invalidProperties[] = "'symbol' can't be null";
        }
        if ($this->container['volume'] === null) {
            $invalidProperties[] = "'volume' can't be null";
        }
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
     * Gets after_hours
     *
     * @return float|null
     */
    public function getAfterHours()
    {
        return $this->container['after_hours'];
    }

    /**
     * Sets after_hours
     *
     * @param float|null $after_hours The close price of the ticker symbol in after hours trading.
     *
     * @return self
     */
    public function setAfterHours($after_hours)
    {
        if (is_null($after_hours)) {
            throw new \InvalidArgumentException('non-nullable after_hours cannot be null');
        }
        $this->container['after_hours'] = $after_hours;

        return $this;
    }

    /**
     * Gets close
     *
     * @return float
     */
    public function getClose()
    {
        return $this->container['close'];
    }

    /**
     * Sets close
     *
     * @param float $close The close price for the symbol in the given time period.
     *
     * @return self
     */
    public function setClose($close)
    {
        if (is_null($close)) {
            throw new \InvalidArgumentException('non-nullable close cannot be null');
        }
        $this->container['close'] = $close;

        return $this;
    }

    /**
     * Gets from
     *
     * @return \DateTime
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param \DateTime $from The requested date.
     *
     * @return self
     */
    public function setFrom($from)
    {
        if (is_null($from)) {
            throw new \InvalidArgumentException('non-nullable from cannot be null');
        }
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets high
     *
     * @return float
     */
    public function getHigh()
    {
        return $this->container['high'];
    }

    /**
     * Sets high
     *
     * @param float $high The highest price for the symbol in the given time period.
     *
     * @return self
     */
    public function setHigh($high)
    {
        if (is_null($high)) {
            throw new \InvalidArgumentException('non-nullable high cannot be null');
        }
        $this->container['high'] = $high;

        return $this;
    }

    /**
     * Gets low
     *
     * @return float
     */
    public function getLow()
    {
        return $this->container['low'];
    }

    /**
     * Sets low
     *
     * @param float $low The lowest price for the symbol in the given time period.
     *
     * @return self
     */
    public function setLow($low)
    {
        if (is_null($low)) {
            throw new \InvalidArgumentException('non-nullable low cannot be null');
        }
        $this->container['low'] = $low;

        return $this;
    }

    /**
     * Gets open
     *
     * @return float
     */
    public function getOpen()
    {
        return $this->container['open'];
    }

    /**
     * Sets open
     *
     * @param float $open The open price for the symbol in the given time period.
     *
     * @return self
     */
    public function setOpen($open)
    {
        if (is_null($open)) {
            throw new \InvalidArgumentException('non-nullable open cannot be null');
        }
        $this->container['open'] = $open;

        return $this;
    }

    /**
     * Gets otc
     *
     * @return bool|null
     */
    public function getOtc()
    {
        return $this->container['otc'];
    }

    /**
     * Sets otc
     *
     * @param bool|null $otc Whether or not this aggregate is for an OTC ticker. This field will be left off if false.
     *
     * @return self
     */
    public function setOtc($otc)
    {
        if (is_null($otc)) {
            throw new \InvalidArgumentException('non-nullable otc cannot be null');
        }
        $this->container['otc'] = $otc;

        return $this;
    }

    /**
     * Gets pre_market
     *
     * @return int|null
     */
    public function getPreMarket()
    {
        return $this->container['pre_market'];
    }

    /**
     * Sets pre_market
     *
     * @param int|null $pre_market The open price of the ticker symbol in pre-market trading.
     *
     * @return self
     */
    public function setPreMarket($pre_market)
    {
        if (is_null($pre_market)) {
            throw new \InvalidArgumentException('non-nullable pre_market cannot be null');
        }
        $this->container['pre_market'] = $pre_market;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status of this request's response.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets symbol
     *
     * @return string
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string $symbol The exchange symbol that this item is traded under.
     *
     * @return self
     */
    public function setSymbol($symbol)
    {
        if (is_null($symbol)) {
            throw new \InvalidArgumentException('non-nullable symbol cannot be null');
        }
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets volume
     *
     * @return float
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     *
     * @param float $volume The trading volume of the symbol in the given time period.
     *
     * @return self
     */
    public function setVolume($volume)
    {
        if (is_null($volume)) {
            throw new \InvalidArgumentException('non-nullable volume cannot be null');
        }
        $this->container['volume'] = $volume;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


