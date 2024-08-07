<?php
/**
 * V1OpenCloseCryptoFromToDateGet200Response
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
 * V1OpenCloseCryptoFromToDateGet200Response Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V1OpenCloseCryptoFromToDateGet200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_v1_open_close_crypto__from___to___date__get_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'close' => 'float',
        'closing_trades' => '\OpenAPI\Client\Model\V1HistoricCryptoFromToDateGet200ResponseAllOfTicksInner[]',
        'day' => '\DateTime',
        'is_utc' => 'bool',
        'open' => 'float',
        'open_trades' => '\OpenAPI\Client\Model\V1HistoricCryptoFromToDateGet200ResponseAllOfTicksInner[]',
        'symbol' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'close' => 'double',
        'closing_trades' => null,
        'day' => 'date',
        'is_utc' => null,
        'open' => 'double',
        'open_trades' => null,
        'symbol' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'close' => false,
        'closing_trades' => false,
        'day' => false,
        'is_utc' => false,
        'open' => false,
        'open_trades' => false,
        'symbol' => false
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
        'close' => 'close',
        'closing_trades' => 'closingTrades',
        'day' => 'day',
        'is_utc' => 'isUTC',
        'open' => 'open',
        'open_trades' => 'openTrades',
        'symbol' => 'symbol'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'close' => 'setClose',
        'closing_trades' => 'setClosingTrades',
        'day' => 'setDay',
        'is_utc' => 'setIsUtc',
        'open' => 'setOpen',
        'open_trades' => 'setOpenTrades',
        'symbol' => 'setSymbol'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'close' => 'getClose',
        'closing_trades' => 'getClosingTrades',
        'day' => 'getDay',
        'is_utc' => 'getIsUtc',
        'open' => 'getOpen',
        'open_trades' => 'getOpenTrades',
        'symbol' => 'getSymbol'
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
        $this->setIfExists('close', $data ?? [], null);
        $this->setIfExists('closing_trades', $data ?? [], null);
        $this->setIfExists('day', $data ?? [], null);
        $this->setIfExists('is_utc', $data ?? [], null);
        $this->setIfExists('open', $data ?? [], null);
        $this->setIfExists('open_trades', $data ?? [], null);
        $this->setIfExists('symbol', $data ?? [], null);
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
        if ($this->container['closing_trades'] === null) {
            $invalidProperties[] = "'closing_trades' can't be null";
        }
        if ($this->container['day'] === null) {
            $invalidProperties[] = "'day' can't be null";
        }
        if ($this->container['is_utc'] === null) {
            $invalidProperties[] = "'is_utc' can't be null";
        }
        if ($this->container['open'] === null) {
            $invalidProperties[] = "'open' can't be null";
        }
        if ($this->container['open_trades'] === null) {
            $invalidProperties[] = "'open_trades' can't be null";
        }
        if ($this->container['symbol'] === null) {
            $invalidProperties[] = "'symbol' can't be null";
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
     * Gets closing_trades
     *
     * @return \OpenAPI\Client\Model\V1HistoricCryptoFromToDateGet200ResponseAllOfTicksInner[]
     */
    public function getClosingTrades()
    {
        return $this->container['closing_trades'];
    }

    /**
     * Sets closing_trades
     *
     * @param \OpenAPI\Client\Model\V1HistoricCryptoFromToDateGet200ResponseAllOfTicksInner[] $closing_trades closing_trades
     *
     * @return self
     */
    public function setClosingTrades($closing_trades)
    {
        if (is_null($closing_trades)) {
            throw new \InvalidArgumentException('non-nullable closing_trades cannot be null');
        }
        $this->container['closing_trades'] = $closing_trades;

        return $this;
    }

    /**
     * Gets day
     *
     * @return \DateTime
     */
    public function getDay()
    {
        return $this->container['day'];
    }

    /**
     * Sets day
     *
     * @param \DateTime $day The date requested.
     *
     * @return self
     */
    public function setDay($day)
    {
        if (is_null($day)) {
            throw new \InvalidArgumentException('non-nullable day cannot be null');
        }
        $this->container['day'] = $day;

        return $this;
    }

    /**
     * Gets is_utc
     *
     * @return bool
     */
    public function getIsUtc()
    {
        return $this->container['is_utc'];
    }

    /**
     * Sets is_utc
     *
     * @param bool $is_utc Whether or not the timestamps are in UTC timezone.
     *
     * @return self
     */
    public function setIsUtc($is_utc)
    {
        if (is_null($is_utc)) {
            throw new \InvalidArgumentException('non-nullable is_utc cannot be null');
        }
        $this->container['is_utc'] = $is_utc;

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
     * Gets open_trades
     *
     * @return \OpenAPI\Client\Model\V1HistoricCryptoFromToDateGet200ResponseAllOfTicksInner[]
     */
    public function getOpenTrades()
    {
        return $this->container['open_trades'];
    }

    /**
     * Sets open_trades
     *
     * @param \OpenAPI\Client\Model\V1HistoricCryptoFromToDateGet200ResponseAllOfTicksInner[] $open_trades open_trades
     *
     * @return self
     */
    public function setOpenTrades($open_trades)
    {
        if (is_null($open_trades)) {
            throw new \InvalidArgumentException('non-nullable open_trades cannot be null');
        }
        $this->container['open_trades'] = $open_trades;

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
     * @param string $symbol The symbol pair that was evaluated from the request.
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


