<?php
/**
 * Snapshots200ResponseResultsInner
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
 * Snapshots200ResponseResultsInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Snapshots200ResponseResultsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Snapshots_200_response_results_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'break_even_price' => 'float',
        'details' => '\OpenAPI\Client\Model\Snapshots200ResponseResultsInnerDetails',
        'error' => 'string',
        'fmv' => 'float',
        'greeks' => '\OpenAPI\Client\Model\Snapshots200ResponseResultsInnerGreeks',
        'implied_volatility' => 'float',
        'last_quote' => '\OpenAPI\Client\Model\Snapshots200ResponseResultsInnerLastQuote',
        'last_trade' => '\OpenAPI\Client\Model\Snapshots200ResponseResultsInnerLastTrade',
        'market_status' => 'string',
        'message' => 'string',
        'name' => 'string',
        'open_interest' => 'float',
        'session' => '\OpenAPI\Client\Model\SnapshotSummary200ResponseResultsInnerSession',
        'ticker' => 'string',
        'type' => 'string',
        'underlying_asset' => '\OpenAPI\Client\Model\Snapshots200ResponseResultsInnerUnderlyingAsset',
        'value' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'break_even_price' => 'double',
        'details' => null,
        'error' => null,
        'fmv' => null,
        'greeks' => null,
        'implied_volatility' => 'double',
        'last_quote' => null,
        'last_trade' => null,
        'market_status' => null,
        'message' => null,
        'name' => null,
        'open_interest' => 'double',
        'session' => null,
        'ticker' => null,
        'type' => null,
        'underlying_asset' => null,
        'value' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'break_even_price' => false,
        'details' => false,
        'error' => false,
        'fmv' => false,
        'greeks' => false,
        'implied_volatility' => false,
        'last_quote' => false,
        'last_trade' => false,
        'market_status' => false,
        'message' => false,
        'name' => false,
        'open_interest' => false,
        'session' => false,
        'ticker' => false,
        'type' => false,
        'underlying_asset' => false,
        'value' => false
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
        'break_even_price' => 'break_even_price',
        'details' => 'details',
        'error' => 'error',
        'fmv' => 'fmv',
        'greeks' => 'greeks',
        'implied_volatility' => 'implied_volatility',
        'last_quote' => 'last_quote',
        'last_trade' => 'last_trade',
        'market_status' => 'market_status',
        'message' => 'message',
        'name' => 'name',
        'open_interest' => 'open_interest',
        'session' => 'session',
        'ticker' => 'ticker',
        'type' => 'type',
        'underlying_asset' => 'underlying_asset',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'break_even_price' => 'setBreakEvenPrice',
        'details' => 'setDetails',
        'error' => 'setError',
        'fmv' => 'setFmv',
        'greeks' => 'setGreeks',
        'implied_volatility' => 'setImpliedVolatility',
        'last_quote' => 'setLastQuote',
        'last_trade' => 'setLastTrade',
        'market_status' => 'setMarketStatus',
        'message' => 'setMessage',
        'name' => 'setName',
        'open_interest' => 'setOpenInterest',
        'session' => 'setSession',
        'ticker' => 'setTicker',
        'type' => 'setType',
        'underlying_asset' => 'setUnderlyingAsset',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'break_even_price' => 'getBreakEvenPrice',
        'details' => 'getDetails',
        'error' => 'getError',
        'fmv' => 'getFmv',
        'greeks' => 'getGreeks',
        'implied_volatility' => 'getImpliedVolatility',
        'last_quote' => 'getLastQuote',
        'last_trade' => 'getLastTrade',
        'market_status' => 'getMarketStatus',
        'message' => 'getMessage',
        'name' => 'getName',
        'open_interest' => 'getOpenInterest',
        'session' => 'getSession',
        'ticker' => 'getTicker',
        'type' => 'getType',
        'underlying_asset' => 'getUnderlyingAsset',
        'value' => 'getValue'
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

    public const TYPE_STOCKS = 'stocks';
    public const TYPE_OPTIONS = 'options';
    public const TYPE_FX = 'fx';
    public const TYPE_CRYPTO = 'crypto';
    public const TYPE_INDICES = 'indices';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_STOCKS,
            self::TYPE_OPTIONS,
            self::TYPE_FX,
            self::TYPE_CRYPTO,
            self::TYPE_INDICES,
        ];
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
        $this->setIfExists('break_even_price', $data ?? [], null);
        $this->setIfExists('details', $data ?? [], null);
        $this->setIfExists('error', $data ?? [], null);
        $this->setIfExists('fmv', $data ?? [], null);
        $this->setIfExists('greeks', $data ?? [], null);
        $this->setIfExists('implied_volatility', $data ?? [], null);
        $this->setIfExists('last_quote', $data ?? [], null);
        $this->setIfExists('last_trade', $data ?? [], null);
        $this->setIfExists('market_status', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('open_interest', $data ?? [], null);
        $this->setIfExists('session', $data ?? [], null);
        $this->setIfExists('ticker', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('underlying_asset', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
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

        if ($this->container['ticker'] === null) {
            $invalidProperties[] = "'ticker' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
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
     * Gets break_even_price
     *
     * @return float|null
     */
    public function getBreakEvenPrice()
    {
        return $this->container['break_even_price'];
    }

    /**
     * Sets break_even_price
     *
     * @param float|null $break_even_price The price of the underlying asset for the contract to break even. For a call, this value is (strike price + premium paid). For a put, this value is (strike price - premium paid).
     *
     * @return self
     */
    public function setBreakEvenPrice($break_even_price)
    {
        if (is_null($break_even_price)) {
            throw new \InvalidArgumentException('non-nullable break_even_price cannot be null');
        }
        $this->container['break_even_price'] = $break_even_price;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \OpenAPI\Client\Model\Snapshots200ResponseResultsInnerDetails|null
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \OpenAPI\Client\Model\Snapshots200ResponseResultsInnerDetails|null $details details
     *
     * @return self
     */
    public function setDetails($details)
    {
        if (is_null($details)) {
            throw new \InvalidArgumentException('non-nullable details cannot be null');
        }
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets error
     *
     * @return string|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param string|null $error The error while looking for this ticker.
     *
     * @return self
     */
    public function setError($error)
    {
        if (is_null($error)) {
            throw new \InvalidArgumentException('non-nullable error cannot be null');
        }
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets fmv
     *
     * @return float|null
     */
    public function getFmv()
    {
        return $this->container['fmv'];
    }

    /**
     * Sets fmv
     *
     * @param float|null $fmv Fair market value is only available on Business plans. It's it our proprietary algorithm to generate a real-time, accurate, fair market value of a tradable security. For more information, <a rel=\"nofollow\" target=\"_blank\" href=\"https://polygon.io/contact\">contact us</a>.
     *
     * @return self
     */
    public function setFmv($fmv)
    {
        if (is_null($fmv)) {
            throw new \InvalidArgumentException('non-nullable fmv cannot be null');
        }
        $this->container['fmv'] = $fmv;

        return $this;
    }

    /**
     * Gets greeks
     *
     * @return \OpenAPI\Client\Model\Snapshots200ResponseResultsInnerGreeks|null
     */
    public function getGreeks()
    {
        return $this->container['greeks'];
    }

    /**
     * Sets greeks
     *
     * @param \OpenAPI\Client\Model\Snapshots200ResponseResultsInnerGreeks|null $greeks greeks
     *
     * @return self
     */
    public function setGreeks($greeks)
    {
        if (is_null($greeks)) {
            throw new \InvalidArgumentException('non-nullable greeks cannot be null');
        }
        $this->container['greeks'] = $greeks;

        return $this;
    }

    /**
     * Gets implied_volatility
     *
     * @return float|null
     */
    public function getImpliedVolatility()
    {
        return $this->container['implied_volatility'];
    }

    /**
     * Sets implied_volatility
     *
     * @param float|null $implied_volatility The market's forecast for the volatility of the underlying asset, based on this option's current price.
     *
     * @return self
     */
    public function setImpliedVolatility($implied_volatility)
    {
        if (is_null($implied_volatility)) {
            throw new \InvalidArgumentException('non-nullable implied_volatility cannot be null');
        }
        $this->container['implied_volatility'] = $implied_volatility;

        return $this;
    }

    /**
     * Gets last_quote
     *
     * @return \OpenAPI\Client\Model\Snapshots200ResponseResultsInnerLastQuote|null
     */
    public function getLastQuote()
    {
        return $this->container['last_quote'];
    }

    /**
     * Sets last_quote
     *
     * @param \OpenAPI\Client\Model\Snapshots200ResponseResultsInnerLastQuote|null $last_quote last_quote
     *
     * @return self
     */
    public function setLastQuote($last_quote)
    {
        if (is_null($last_quote)) {
            throw new \InvalidArgumentException('non-nullable last_quote cannot be null');
        }
        $this->container['last_quote'] = $last_quote;

        return $this;
    }

    /**
     * Gets last_trade
     *
     * @return \OpenAPI\Client\Model\Snapshots200ResponseResultsInnerLastTrade|null
     */
    public function getLastTrade()
    {
        return $this->container['last_trade'];
    }

    /**
     * Sets last_trade
     *
     * @param \OpenAPI\Client\Model\Snapshots200ResponseResultsInnerLastTrade|null $last_trade last_trade
     *
     * @return self
     */
    public function setLastTrade($last_trade)
    {
        if (is_null($last_trade)) {
            throw new \InvalidArgumentException('non-nullable last_trade cannot be null');
        }
        $this->container['last_trade'] = $last_trade;

        return $this;
    }

    /**
     * Gets market_status
     *
     * @return string|null
     */
    public function getMarketStatus()
    {
        return $this->container['market_status'];
    }

    /**
     * Sets market_status
     *
     * @param string|null $market_status The market status for the market that trades this ticker. Possible values for stocks, options, crypto, and forex snapshots are open, closed, early_trading, or late_trading. Possible values for indices snapshots are regular_trading, closed, early_trading, and late_trading.
     *
     * @return self
     */
    public function setMarketStatus($market_status)
    {
        if (is_null($market_status)) {
            throw new \InvalidArgumentException('non-nullable market_status cannot be null');
        }
        $this->container['market_status'] = $market_status;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message The error message while looking for this ticker.
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        $this->container['message'] = $message;

        return $this;
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
     * @param string|null $name The name of this contract.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets open_interest
     *
     * @return float|null
     */
    public function getOpenInterest()
    {
        return $this->container['open_interest'];
    }

    /**
     * Sets open_interest
     *
     * @param float|null $open_interest The quantity of this contract held at the end of the last trading day.
     *
     * @return self
     */
    public function setOpenInterest($open_interest)
    {
        if (is_null($open_interest)) {
            throw new \InvalidArgumentException('non-nullable open_interest cannot be null');
        }
        $this->container['open_interest'] = $open_interest;

        return $this;
    }

    /**
     * Gets session
     *
     * @return \OpenAPI\Client\Model\SnapshotSummary200ResponseResultsInnerSession|null
     */
    public function getSession()
    {
        return $this->container['session'];
    }

    /**
     * Sets session
     *
     * @param \OpenAPI\Client\Model\SnapshotSummary200ResponseResultsInnerSession|null $session session
     *
     * @return self
     */
    public function setSession($session)
    {
        if (is_null($session)) {
            throw new \InvalidArgumentException('non-nullable session cannot be null');
        }
        $this->container['session'] = $session;

        return $this;
    }

    /**
     * Gets ticker
     *
     * @return string
     */
    public function getTicker()
    {
        return $this->container['ticker'];
    }

    /**
     * Sets ticker
     *
     * @param string $ticker The ticker symbol for the asset.
     *
     * @return self
     */
    public function setTicker($ticker)
    {
        if (is_null($ticker)) {
            throw new \InvalidArgumentException('non-nullable ticker cannot be null');
        }
        $this->container['ticker'] = $ticker;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The asset class for this ticker.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets underlying_asset
     *
     * @return \OpenAPI\Client\Model\Snapshots200ResponseResultsInnerUnderlyingAsset|null
     */
    public function getUnderlyingAsset()
    {
        return $this->container['underlying_asset'];
    }

    /**
     * Sets underlying_asset
     *
     * @param \OpenAPI\Client\Model\Snapshots200ResponseResultsInnerUnderlyingAsset|null $underlying_asset underlying_asset
     *
     * @return self
     */
    public function setUnderlyingAsset($underlying_asset)
    {
        if (is_null($underlying_asset)) {
            throw new \InvalidArgumentException('non-nullable underlying_asset cannot be null');
        }
        $this->container['underlying_asset'] = $underlying_asset;

        return $this;
    }

    /**
     * Gets value
     *
     * @return float|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float|null $value Value of Index.
     *
     * @return self
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }
        $this->container['value'] = $value;

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


