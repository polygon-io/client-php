<?php
/**
 * QuotesOptions200ResponseResultsInner
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
 * QuotesOptions200ResponseResultsInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class QuotesOptions200ResponseResultsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'QuotesOptions_200_response_results_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ask_exchange' => 'int',
        'ask_price' => 'float',
        'ask_size' => 'float',
        'bid_exchange' => 'int',
        'bid_price' => 'float',
        'bid_size' => 'float',
        'sequence_number' => 'int',
        'sip_timestamp' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ask_exchange' => null,
        'ask_price' => 'double',
        'ask_size' => 'double',
        'bid_exchange' => null,
        'bid_price' => 'double',
        'bid_size' => 'double',
        'sequence_number' => 'int64',
        'sip_timestamp' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ask_exchange' => false,
        'ask_price' => false,
        'ask_size' => false,
        'bid_exchange' => false,
        'bid_price' => false,
        'bid_size' => false,
        'sequence_number' => false,
        'sip_timestamp' => false
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
        'ask_exchange' => 'ask_exchange',
        'ask_price' => 'ask_price',
        'ask_size' => 'ask_size',
        'bid_exchange' => 'bid_exchange',
        'bid_price' => 'bid_price',
        'bid_size' => 'bid_size',
        'sequence_number' => 'sequence_number',
        'sip_timestamp' => 'sip_timestamp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ask_exchange' => 'setAskExchange',
        'ask_price' => 'setAskPrice',
        'ask_size' => 'setAskSize',
        'bid_exchange' => 'setBidExchange',
        'bid_price' => 'setBidPrice',
        'bid_size' => 'setBidSize',
        'sequence_number' => 'setSequenceNumber',
        'sip_timestamp' => 'setSipTimestamp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ask_exchange' => 'getAskExchange',
        'ask_price' => 'getAskPrice',
        'ask_size' => 'getAskSize',
        'bid_exchange' => 'getBidExchange',
        'bid_price' => 'getBidPrice',
        'bid_size' => 'getBidSize',
        'sequence_number' => 'getSequenceNumber',
        'sip_timestamp' => 'getSipTimestamp'
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
        $this->setIfExists('ask_exchange', $data ?? [], null);
        $this->setIfExists('ask_price', $data ?? [], null);
        $this->setIfExists('ask_size', $data ?? [], null);
        $this->setIfExists('bid_exchange', $data ?? [], null);
        $this->setIfExists('bid_price', $data ?? [], null);
        $this->setIfExists('bid_size', $data ?? [], null);
        $this->setIfExists('sequence_number', $data ?? [], null);
        $this->setIfExists('sip_timestamp', $data ?? [], null);
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

        if ($this->container['sequence_number'] === null) {
            $invalidProperties[] = "'sequence_number' can't be null";
        }
        if ($this->container['sip_timestamp'] === null) {
            $invalidProperties[] = "'sip_timestamp' can't be null";
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
     * Gets ask_exchange
     *
     * @return int|null
     */
    public function getAskExchange()
    {
        return $this->container['ask_exchange'];
    }

    /**
     * Sets ask_exchange
     *
     * @param int|null $ask_exchange The ask exchange ID
     *
     * @return self
     */
    public function setAskExchange($ask_exchange)
    {
        if (is_null($ask_exchange)) {
            throw new \InvalidArgumentException('non-nullable ask_exchange cannot be null');
        }
        $this->container['ask_exchange'] = $ask_exchange;

        return $this;
    }

    /**
     * Gets ask_price
     *
     * @return float|null
     */
    public function getAskPrice()
    {
        return $this->container['ask_price'];
    }

    /**
     * Sets ask_price
     *
     * @param float|null $ask_price The ask price.
     *
     * @return self
     */
    public function setAskPrice($ask_price)
    {
        if (is_null($ask_price)) {
            throw new \InvalidArgumentException('non-nullable ask_price cannot be null');
        }
        $this->container['ask_price'] = $ask_price;

        return $this;
    }

    /**
     * Gets ask_size
     *
     * @return float|null
     */
    public function getAskSize()
    {
        return $this->container['ask_size'];
    }

    /**
     * Sets ask_size
     *
     * @param float|null $ask_size The ask size. This represents the number of round lot orders at the given ask price. The normal round lot size is 100 shares. An ask size of 2 means there are 200 shares available to purchase at the given ask price.
     *
     * @return self
     */
    public function setAskSize($ask_size)
    {
        if (is_null($ask_size)) {
            throw new \InvalidArgumentException('non-nullable ask_size cannot be null');
        }
        $this->container['ask_size'] = $ask_size;

        return $this;
    }

    /**
     * Gets bid_exchange
     *
     * @return int|null
     */
    public function getBidExchange()
    {
        return $this->container['bid_exchange'];
    }

    /**
     * Sets bid_exchange
     *
     * @param int|null $bid_exchange The bid exchange ID
     *
     * @return self
     */
    public function setBidExchange($bid_exchange)
    {
        if (is_null($bid_exchange)) {
            throw new \InvalidArgumentException('non-nullable bid_exchange cannot be null');
        }
        $this->container['bid_exchange'] = $bid_exchange;

        return $this;
    }

    /**
     * Gets bid_price
     *
     * @return float|null
     */
    public function getBidPrice()
    {
        return $this->container['bid_price'];
    }

    /**
     * Sets bid_price
     *
     * @param float|null $bid_price The bid price.
     *
     * @return self
     */
    public function setBidPrice($bid_price)
    {
        if (is_null($bid_price)) {
            throw new \InvalidArgumentException('non-nullable bid_price cannot be null');
        }
        $this->container['bid_price'] = $bid_price;

        return $this;
    }

    /**
     * Gets bid_size
     *
     * @return float|null
     */
    public function getBidSize()
    {
        return $this->container['bid_size'];
    }

    /**
     * Sets bid_size
     *
     * @param float|null $bid_size The bid size. This represents the number of round lot orders at the given bid price. The normal round lot size is 100 shares. A bid size of 2 means there are 200 shares for purchase at the given bid price.
     *
     * @return self
     */
    public function setBidSize($bid_size)
    {
        if (is_null($bid_size)) {
            throw new \InvalidArgumentException('non-nullable bid_size cannot be null');
        }
        $this->container['bid_size'] = $bid_size;

        return $this;
    }

    /**
     * Gets sequence_number
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->container['sequence_number'];
    }

    /**
     * Sets sequence_number
     *
     * @param int $sequence_number The sequence number represents the sequence in which quote events happened. These are increasing and unique per ticker symbol, but will not always be sequential (e.g., 1, 2, 6, 9, 10, 11).
     *
     * @return self
     */
    public function setSequenceNumber($sequence_number)
    {
        if (is_null($sequence_number)) {
            throw new \InvalidArgumentException('non-nullable sequence_number cannot be null');
        }
        $this->container['sequence_number'] = $sequence_number;

        return $this;
    }

    /**
     * Gets sip_timestamp
     *
     * @return int
     */
    public function getSipTimestamp()
    {
        return $this->container['sip_timestamp'];
    }

    /**
     * Sets sip_timestamp
     *
     * @param int $sip_timestamp The nanosecond accuracy SIP Unix Timestamp. This is the timestamp of when the SIP received this quote from the exchange which produced it.
     *
     * @return self
     */
    public function setSipTimestamp($sip_timestamp)
    {
        if (is_null($sip_timestamp)) {
            throw new \InvalidArgumentException('non-nullable sip_timestamp cannot be null');
        }
        $this->container['sip_timestamp'] = $sip_timestamp;

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


