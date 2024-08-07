<?php
/**
 * Company
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
 * Company Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Company implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Company';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active' => 'bool',
        'bloomberg' => 'string',
        'ceo' => 'string',
        'cik' => 'string',
        'country' => 'string',
        'description' => 'string',
        'employees' => 'int',
        'exchange' => 'string',
        'exchange_symbol' => 'string',
        'figi' => 'string',
        'hq_address' => 'string',
        'hq_country' => 'string',
        'hq_state' => 'string',
        'industry' => 'string',
        'lei' => 'string',
        'listdate' => '\DateTime',
        'logo' => 'string',
        'marketcap' => 'int',
        'name' => 'string',
        'phone' => 'string',
        'sector' => 'string',
        'sic' => 'int',
        'similar' => 'string[]',
        'symbol' => 'string',
        'tags' => 'string[]',
        'type' => 'string',
        'updated' => '\DateTime',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'active' => null,
        'bloomberg' => null,
        'ceo' => null,
        'cik' => null,
        'country' => null,
        'description' => null,
        'employees' => null,
        'exchange' => null,
        'exchange_symbol' => null,
        'figi' => null,
        'hq_address' => null,
        'hq_country' => null,
        'hq_state' => null,
        'industry' => null,
        'lei' => null,
        'listdate' => 'date',
        'logo' => null,
        'marketcap' => null,
        'name' => null,
        'phone' => null,
        'sector' => null,
        'sic' => null,
        'similar' => null,
        'symbol' => null,
        'tags' => null,
        'type' => null,
        'updated' => 'date',
        'url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'active' => false,
        'bloomberg' => false,
        'ceo' => false,
        'cik' => false,
        'country' => false,
        'description' => false,
        'employees' => false,
        'exchange' => false,
        'exchange_symbol' => false,
        'figi' => false,
        'hq_address' => false,
        'hq_country' => false,
        'hq_state' => false,
        'industry' => false,
        'lei' => false,
        'listdate' => false,
        'logo' => false,
        'marketcap' => false,
        'name' => false,
        'phone' => false,
        'sector' => false,
        'sic' => false,
        'similar' => false,
        'symbol' => false,
        'tags' => false,
        'type' => false,
        'updated' => false,
        'url' => false
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
        'active' => 'active',
        'bloomberg' => 'bloomberg',
        'ceo' => 'ceo',
        'cik' => 'cik',
        'country' => 'country',
        'description' => 'description',
        'employees' => 'employees',
        'exchange' => 'exchange',
        'exchange_symbol' => 'exchangeSymbol',
        'figi' => 'figi',
        'hq_address' => 'hq_address',
        'hq_country' => 'hq_country',
        'hq_state' => 'hq_state',
        'industry' => 'industry',
        'lei' => 'lei',
        'listdate' => 'listdate',
        'logo' => 'logo',
        'marketcap' => 'marketcap',
        'name' => 'name',
        'phone' => 'phone',
        'sector' => 'sector',
        'sic' => 'sic',
        'similar' => 'similar',
        'symbol' => 'symbol',
        'tags' => 'tags',
        'type' => 'type',
        'updated' => 'updated',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'bloomberg' => 'setBloomberg',
        'ceo' => 'setCeo',
        'cik' => 'setCik',
        'country' => 'setCountry',
        'description' => 'setDescription',
        'employees' => 'setEmployees',
        'exchange' => 'setExchange',
        'exchange_symbol' => 'setExchangeSymbol',
        'figi' => 'setFigi',
        'hq_address' => 'setHqAddress',
        'hq_country' => 'setHqCountry',
        'hq_state' => 'setHqState',
        'industry' => 'setIndustry',
        'lei' => 'setLei',
        'listdate' => 'setListdate',
        'logo' => 'setLogo',
        'marketcap' => 'setMarketcap',
        'name' => 'setName',
        'phone' => 'setPhone',
        'sector' => 'setSector',
        'sic' => 'setSic',
        'similar' => 'setSimilar',
        'symbol' => 'setSymbol',
        'tags' => 'setTags',
        'type' => 'setType',
        'updated' => 'setUpdated',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'bloomberg' => 'getBloomberg',
        'ceo' => 'getCeo',
        'cik' => 'getCik',
        'country' => 'getCountry',
        'description' => 'getDescription',
        'employees' => 'getEmployees',
        'exchange' => 'getExchange',
        'exchange_symbol' => 'getExchangeSymbol',
        'figi' => 'getFigi',
        'hq_address' => 'getHqAddress',
        'hq_country' => 'getHqCountry',
        'hq_state' => 'getHqState',
        'industry' => 'getIndustry',
        'lei' => 'getLei',
        'listdate' => 'getListdate',
        'logo' => 'getLogo',
        'marketcap' => 'getMarketcap',
        'name' => 'getName',
        'phone' => 'getPhone',
        'sector' => 'getSector',
        'sic' => 'getSic',
        'similar' => 'getSimilar',
        'symbol' => 'getSymbol',
        'tags' => 'getTags',
        'type' => 'getType',
        'updated' => 'getUpdated',
        'url' => 'getUrl'
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
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('bloomberg', $data ?? [], null);
        $this->setIfExists('ceo', $data ?? [], null);
        $this->setIfExists('cik', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('employees', $data ?? [], null);
        $this->setIfExists('exchange', $data ?? [], null);
        $this->setIfExists('exchange_symbol', $data ?? [], null);
        $this->setIfExists('figi', $data ?? [], null);
        $this->setIfExists('hq_address', $data ?? [], null);
        $this->setIfExists('hq_country', $data ?? [], null);
        $this->setIfExists('hq_state', $data ?? [], null);
        $this->setIfExists('industry', $data ?? [], null);
        $this->setIfExists('lei', $data ?? [], null);
        $this->setIfExists('listdate', $data ?? [], null);
        $this->setIfExists('logo', $data ?? [], null);
        $this->setIfExists('marketcap', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('sector', $data ?? [], null);
        $this->setIfExists('sic', $data ?? [], null);
        $this->setIfExists('similar', $data ?? [], null);
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('updated', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
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
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active Indicates if the security is actively listed.  If false, this means the company is no longer listed and cannot be traded.
     *
     * @return self
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets bloomberg
     *
     * @return string|null
     */
    public function getBloomberg()
    {
        return $this->container['bloomberg'];
    }

    /**
     * Sets bloomberg
     *
     * @param string|null $bloomberg The Bloomberg guid for the symbol.
     *
     * @return self
     */
    public function setBloomberg($bloomberg)
    {
        if (is_null($bloomberg)) {
            throw new \InvalidArgumentException('non-nullable bloomberg cannot be null');
        }
        $this->container['bloomberg'] = $bloomberg;

        return $this;
    }

    /**
     * Gets ceo
     *
     * @return string|null
     */
    public function getCeo()
    {
        return $this->container['ceo'];
    }

    /**
     * Sets ceo
     *
     * @param string|null $ceo The name of the company's current CEO.
     *
     * @return self
     */
    public function setCeo($ceo)
    {
        if (is_null($ceo)) {
            throw new \InvalidArgumentException('non-nullable ceo cannot be null');
        }
        $this->container['ceo'] = $ceo;

        return $this;
    }

    /**
     * Gets cik
     *
     * @return string|null
     */
    public function getCik()
    {
        return $this->container['cik'];
    }

    /**
     * Sets cik
     *
     * @param string|null $cik The official CIK guid used for SEC database/filings.
     *
     * @return self
     */
    public function setCik($cik)
    {
        if (is_null($cik)) {
            throw new \InvalidArgumentException('non-nullable cik cannot be null');
        }
        $this->container['cik'] = $cik;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country The country in which the company is registered.
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

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
     * @param string|null $description A description of the company and what they do/offer.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets employees
     *
     * @return int|null
     */
    public function getEmployees()
    {
        return $this->container['employees'];
    }

    /**
     * Sets employees
     *
     * @param int|null $employees The approximate number of employees for the company.
     *
     * @return self
     */
    public function setEmployees($employees)
    {
        if (is_null($employees)) {
            throw new \InvalidArgumentException('non-nullable employees cannot be null');
        }
        $this->container['employees'] = $employees;

        return $this;
    }

    /**
     * Gets exchange
     *
     * @return string|null
     */
    public function getExchange()
    {
        return $this->container['exchange'];
    }

    /**
     * Sets exchange
     *
     * @param string|null $exchange The symbol's primary exchange.
     *
     * @return self
     */
    public function setExchange($exchange)
    {
        if (is_null($exchange)) {
            throw new \InvalidArgumentException('non-nullable exchange cannot be null');
        }
        $this->container['exchange'] = $exchange;

        return $this;
    }

    /**
     * Gets exchange_symbol
     *
     * @return string|null
     */
    public function getExchangeSymbol()
    {
        return $this->container['exchange_symbol'];
    }

    /**
     * Sets exchange_symbol
     *
     * @param string|null $exchange_symbol The exchange code (id) of the symbol's primary exchange.
     *
     * @return self
     */
    public function setExchangeSymbol($exchange_symbol)
    {
        if (is_null($exchange_symbol)) {
            throw new \InvalidArgumentException('non-nullable exchange_symbol cannot be null');
        }
        $this->container['exchange_symbol'] = $exchange_symbol;

        return $this;
    }

    /**
     * Gets figi
     *
     * @return string|null
     */
    public function getFigi()
    {
        return $this->container['figi'];
    }

    /**
     * Sets figi
     *
     * @param string|null $figi The OpenFigi project guid for the symbol. (<a rel=\"nofollow\" target=\"_blank\" href=\"https://openfigi.com/\">https://openfigi.com/</a>)
     *
     * @return self
     */
    public function setFigi($figi)
    {
        if (is_null($figi)) {
            throw new \InvalidArgumentException('non-nullable figi cannot be null');
        }
        $this->container['figi'] = $figi;

        return $this;
    }

    /**
     * Gets hq_address
     *
     * @return string|null
     */
    public function getHqAddress()
    {
        return $this->container['hq_address'];
    }

    /**
     * Sets hq_address
     *
     * @param string|null $hq_address The street address for the company's headquarters.
     *
     * @return self
     */
    public function setHqAddress($hq_address)
    {
        if (is_null($hq_address)) {
            throw new \InvalidArgumentException('non-nullable hq_address cannot be null');
        }
        $this->container['hq_address'] = $hq_address;

        return $this;
    }

    /**
     * Gets hq_country
     *
     * @return string|null
     */
    public function getHqCountry()
    {
        return $this->container['hq_country'];
    }

    /**
     * Sets hq_country
     *
     * @param string|null $hq_country The country in which the company's headquarters is located.
     *
     * @return self
     */
    public function setHqCountry($hq_country)
    {
        if (is_null($hq_country)) {
            throw new \InvalidArgumentException('non-nullable hq_country cannot be null');
        }
        $this->container['hq_country'] = $hq_country;

        return $this;
    }

    /**
     * Gets hq_state
     *
     * @return string|null
     */
    public function getHqState()
    {
        return $this->container['hq_state'];
    }

    /**
     * Sets hq_state
     *
     * @param string|null $hq_state The state in which the company's headquarters is located.
     *
     * @return self
     */
    public function setHqState($hq_state)
    {
        if (is_null($hq_state)) {
            throw new \InvalidArgumentException('non-nullable hq_state cannot be null');
        }
        $this->container['hq_state'] = $hq_state;

        return $this;
    }

    /**
     * Gets industry
     *
     * @return string|null
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     *
     * @param string|null $industry The industry in which the company operates.
     *
     * @return self
     */
    public function setIndustry($industry)
    {
        if (is_null($industry)) {
            throw new \InvalidArgumentException('non-nullable industry cannot be null');
        }
        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets lei
     *
     * @return string|null
     */
    public function getLei()
    {
        return $this->container['lei'];
    }

    /**
     * Sets lei
     *
     * @param string|null $lei The Legal Entity Identifier (LEI) guid for the symbol. (<a rel=\"nofollow\" target=\"_blank\" href=\"https://en.wikipedia.org/wiki/Legal_Entity_Identifier\">https://en.wikipedia.org/wiki/Legal_Entity_Identifier</a>)
     *
     * @return self
     */
    public function setLei($lei)
    {
        if (is_null($lei)) {
            throw new \InvalidArgumentException('non-nullable lei cannot be null');
        }
        $this->container['lei'] = $lei;

        return $this;
    }

    /**
     * Gets listdate
     *
     * @return \DateTime|null
     */
    public function getListdate()
    {
        return $this->container['listdate'];
    }

    /**
     * Sets listdate
     *
     * @param \DateTime|null $listdate The date that the symbol was listed on the exchange.
     *
     * @return self
     */
    public function setListdate($listdate)
    {
        if (is_null($listdate)) {
            throw new \InvalidArgumentException('non-nullable listdate cannot be null');
        }
        $this->container['listdate'] = $listdate;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string|null $logo The URL of the entity's logo.
     *
     * @return self
     */
    public function setLogo($logo)
    {
        if (is_null($logo)) {
            throw new \InvalidArgumentException('non-nullable logo cannot be null');
        }
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets marketcap
     *
     * @return int|null
     */
    public function getMarketcap()
    {
        return $this->container['marketcap'];
    }

    /**
     * Sets marketcap
     *
     * @param int|null $marketcap The current market cap for the company.
     *
     * @return self
     */
    public function setMarketcap($marketcap)
    {
        if (is_null($marketcap)) {
            throw new \InvalidArgumentException('non-nullable marketcap cannot be null');
        }
        $this->container['marketcap'] = $marketcap;

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
     * @param string|null $name The name of the company/entity.
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
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone The phone number for the company. This is usually a corporate contact number.
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets sector
     *
     * @return string|null
     */
    public function getSector()
    {
        return $this->container['sector'];
    }

    /**
     * Sets sector
     *
     * @param string|null $sector The sector of the indsutry in which the symbol operates.
     *
     * @return self
     */
    public function setSector($sector)
    {
        if (is_null($sector)) {
            throw new \InvalidArgumentException('non-nullable sector cannot be null');
        }
        $this->container['sector'] = $sector;

        return $this;
    }

    /**
     * Gets sic
     *
     * @return int|null
     */
    public function getSic()
    {
        return $this->container['sic'];
    }

    /**
     * Sets sic
     *
     * @param int|null $sic Standard Industrial Classification (SIC) id for the symbol. (<a rel=\"nofollow\" target=\"_blank\" href=\"https://en.wikipedia.org/wiki/Standard_Industrial_Classification\">https://en.wikipedia.org/wiki/Legal_Entity_Identifier</a>)
     *
     * @return self
     */
    public function setSic($sic)
    {
        if (is_null($sic)) {
            throw new \InvalidArgumentException('non-nullable sic cannot be null');
        }
        $this->container['sic'] = $sic;

        return $this;
    }

    /**
     * Gets similar
     *
     * @return string[]|null
     */
    public function getSimilar()
    {
        return $this->container['similar'];
    }

    /**
     * Sets similar
     *
     * @param string[]|null $similar A list of ticker symbols for similar companies.
     *
     * @return self
     */
    public function setSimilar($similar)
    {
        if (is_null($similar)) {
            throw new \InvalidArgumentException('non-nullable similar cannot be null');
        }
        $this->container['similar'] = $similar;

        return $this;
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
     * @param string|null $symbol The exchange symbol that this item is traded under.
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
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

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
     * @param string|null $type The type or class of the security.  (<a alt=\"Full List of Ticker Types\" href=\"https://polygon.io/docs/stocks/get_v3_reference_tickers_types\">Full List of Ticker Types</a>)
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return \DateTime|null
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param \DateTime|null $updated The last time this company record was updated.
     *
     * @return self
     */
    public function setUpdated($updated)
    {
        if (is_null($updated)) {
            throw new \InvalidArgumentException('non-nullable updated cannot be null');
        }
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url The URL of the company's website
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

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


