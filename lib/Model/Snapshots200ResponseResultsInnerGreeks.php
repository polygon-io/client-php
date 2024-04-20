<?php
/**
 * Snapshots200ResponseResultsInnerGreeks
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
 * Snapshots200ResponseResultsInnerGreeks Class Doc Comment
 *
 * @category Class
 * @description The greeks for this contract. There are certain circumstances where greeks will not be returned, such as options contracts that are deep in the money. See this &lt;a href&#x3D;\&quot;https://polygon.io/blog/greeks-and-implied-volatility/#testing\&quot; alt&#x3D;\&quot;link\&quot;&gt;article&lt;/a&gt; for more information.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Snapshots200ResponseResultsInnerGreeks implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Snapshots_200_response_results_inner_greeks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'delta' => 'float',
        'gamma' => 'float',
        'theta' => 'float',
        'vega' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'delta' => 'double',
        'gamma' => 'double',
        'theta' => 'double',
        'vega' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'delta' => false,
        'gamma' => false,
        'theta' => false,
        'vega' => false
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
        'delta' => 'delta',
        'gamma' => 'gamma',
        'theta' => 'theta',
        'vega' => 'vega'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'delta' => 'setDelta',
        'gamma' => 'setGamma',
        'theta' => 'setTheta',
        'vega' => 'setVega'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delta' => 'getDelta',
        'gamma' => 'getGamma',
        'theta' => 'getTheta',
        'vega' => 'getVega'
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
        $this->setIfExists('delta', $data ?? [], null);
        $this->setIfExists('gamma', $data ?? [], null);
        $this->setIfExists('theta', $data ?? [], null);
        $this->setIfExists('vega', $data ?? [], null);
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

        if ($this->container['delta'] === null) {
            $invalidProperties[] = "'delta' can't be null";
        }
        if ($this->container['gamma'] === null) {
            $invalidProperties[] = "'gamma' can't be null";
        }
        if ($this->container['theta'] === null) {
            $invalidProperties[] = "'theta' can't be null";
        }
        if ($this->container['vega'] === null) {
            $invalidProperties[] = "'vega' can't be null";
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
     * Gets delta
     *
     * @return float
     */
    public function getDelta()
    {
        return $this->container['delta'];
    }

    /**
     * Sets delta
     *
     * @param float $delta The change in the option's price per $0.01 increment in the price of the underlying asset.
     *
     * @return self
     */
    public function setDelta($delta)
    {
        if (is_null($delta)) {
            throw new \InvalidArgumentException('non-nullable delta cannot be null');
        }
        $this->container['delta'] = $delta;

        return $this;
    }

    /**
     * Gets gamma
     *
     * @return float
     */
    public function getGamma()
    {
        return $this->container['gamma'];
    }

    /**
     * Sets gamma
     *
     * @param float $gamma The change in delta per $0.01 change in the price of the underlying asset.
     *
     * @return self
     */
    public function setGamma($gamma)
    {
        if (is_null($gamma)) {
            throw new \InvalidArgumentException('non-nullable gamma cannot be null');
        }
        $this->container['gamma'] = $gamma;

        return $this;
    }

    /**
     * Gets theta
     *
     * @return float
     */
    public function getTheta()
    {
        return $this->container['theta'];
    }

    /**
     * Sets theta
     *
     * @param float $theta The change in the option's price per day.
     *
     * @return self
     */
    public function setTheta($theta)
    {
        if (is_null($theta)) {
            throw new \InvalidArgumentException('non-nullable theta cannot be null');
        }
        $this->container['theta'] = $theta;

        return $this;
    }

    /**
     * Gets vega
     *
     * @return float
     */
    public function getVega()
    {
        return $this->container['vega'];
    }

    /**
     * Sets vega
     *
     * @param float $vega The change in the option's price per 1% increment in volatility.
     *
     * @return self
     */
    public function setVega($vega)
    {
        if (is_null($vega)) {
            throw new \InvalidArgumentException('non-nullable vega cannot be null');
        }
        $this->container['vega'] = $vega;

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

