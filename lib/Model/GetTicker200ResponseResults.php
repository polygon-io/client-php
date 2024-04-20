<?php
/**
 * GetTicker200ResponseResults
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
 * GetTicker200ResponseResults Class Doc Comment
 *
 * @category Class
 * @description Ticker with details.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetTicker200ResponseResults implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetTicker_200_response_results';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active' => 'bool',
        'address' => '\OpenAPI\Client\Model\GetTicker200ResponseResultsAddress',
        'branding' => '\OpenAPI\Client\Model\GetTicker200ResponseResultsBranding',
        'cik' => 'string',
        'composite_figi' => 'string',
        'currency_name' => 'string',
        'delisted_utc' => '\DateTime',
        'description' => 'string',
        'homepage_url' => 'string',
        'list_date' => 'string',
        'locale' => 'string',
        'market' => 'string',
        'market_cap' => 'float',
        'name' => 'string',
        'phone_number' => 'string',
        'primary_exchange' => 'string',
        'round_lot' => 'float',
        'share_class_figi' => 'string',
        'share_class_shares_outstanding' => 'float',
        'sic_code' => 'string',
        'sic_description' => 'string',
        'ticker' => 'string',
        'ticker_root' => 'string',
        'ticker_suffix' => 'string',
        'total_employees' => 'float',
        'type' => 'string',
        'weighted_shares_outstanding' => 'float'
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
        'address' => null,
        'branding' => null,
        'cik' => null,
        'composite_figi' => null,
        'currency_name' => null,
        'delisted_utc' => 'date-time',
        'description' => null,
        'homepage_url' => null,
        'list_date' => null,
        'locale' => null,
        'market' => null,
        'market_cap' => 'double',
        'name' => null,
        'phone_number' => null,
        'primary_exchange' => null,
        'round_lot' => 'double',
        'share_class_figi' => null,
        'share_class_shares_outstanding' => 'double',
        'sic_code' => null,
        'sic_description' => null,
        'ticker' => null,
        'ticker_root' => null,
        'ticker_suffix' => null,
        'total_employees' => null,
        'type' => null,
        'weighted_shares_outstanding' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'active' => false,
        'address' => false,
        'branding' => false,
        'cik' => false,
        'composite_figi' => false,
        'currency_name' => false,
        'delisted_utc' => false,
        'description' => false,
        'homepage_url' => false,
        'list_date' => false,
        'locale' => false,
        'market' => false,
        'market_cap' => false,
        'name' => false,
        'phone_number' => false,
        'primary_exchange' => false,
        'round_lot' => false,
        'share_class_figi' => false,
        'share_class_shares_outstanding' => false,
        'sic_code' => false,
        'sic_description' => false,
        'ticker' => false,
        'ticker_root' => false,
        'ticker_suffix' => false,
        'total_employees' => false,
        'type' => false,
        'weighted_shares_outstanding' => false
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
        'address' => 'address',
        'branding' => 'branding',
        'cik' => 'cik',
        'composite_figi' => 'composite_figi',
        'currency_name' => 'currency_name',
        'delisted_utc' => 'delisted_utc',
        'description' => 'description',
        'homepage_url' => 'homepage_url',
        'list_date' => 'list_date',
        'locale' => 'locale',
        'market' => 'market',
        'market_cap' => 'market_cap',
        'name' => 'name',
        'phone_number' => 'phone_number',
        'primary_exchange' => 'primary_exchange',
        'round_lot' => 'round_lot',
        'share_class_figi' => 'share_class_figi',
        'share_class_shares_outstanding' => 'share_class_shares_outstanding',
        'sic_code' => 'sic_code',
        'sic_description' => 'sic_description',
        'ticker' => 'ticker',
        'ticker_root' => 'ticker_root',
        'ticker_suffix' => 'ticker_suffix',
        'total_employees' => 'total_employees',
        'type' => 'type',
        'weighted_shares_outstanding' => 'weighted_shares_outstanding'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'address' => 'setAddress',
        'branding' => 'setBranding',
        'cik' => 'setCik',
        'composite_figi' => 'setCompositeFigi',
        'currency_name' => 'setCurrencyName',
        'delisted_utc' => 'setDelistedUtc',
        'description' => 'setDescription',
        'homepage_url' => 'setHomepageUrl',
        'list_date' => 'setListDate',
        'locale' => 'setLocale',
        'market' => 'setMarket',
        'market_cap' => 'setMarketCap',
        'name' => 'setName',
        'phone_number' => 'setPhoneNumber',
        'primary_exchange' => 'setPrimaryExchange',
        'round_lot' => 'setRoundLot',
        'share_class_figi' => 'setShareClassFigi',
        'share_class_shares_outstanding' => 'setShareClassSharesOutstanding',
        'sic_code' => 'setSicCode',
        'sic_description' => 'setSicDescription',
        'ticker' => 'setTicker',
        'ticker_root' => 'setTickerRoot',
        'ticker_suffix' => 'setTickerSuffix',
        'total_employees' => 'setTotalEmployees',
        'type' => 'setType',
        'weighted_shares_outstanding' => 'setWeightedSharesOutstanding'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'address' => 'getAddress',
        'branding' => 'getBranding',
        'cik' => 'getCik',
        'composite_figi' => 'getCompositeFigi',
        'currency_name' => 'getCurrencyName',
        'delisted_utc' => 'getDelistedUtc',
        'description' => 'getDescription',
        'homepage_url' => 'getHomepageUrl',
        'list_date' => 'getListDate',
        'locale' => 'getLocale',
        'market' => 'getMarket',
        'market_cap' => 'getMarketCap',
        'name' => 'getName',
        'phone_number' => 'getPhoneNumber',
        'primary_exchange' => 'getPrimaryExchange',
        'round_lot' => 'getRoundLot',
        'share_class_figi' => 'getShareClassFigi',
        'share_class_shares_outstanding' => 'getShareClassSharesOutstanding',
        'sic_code' => 'getSicCode',
        'sic_description' => 'getSicDescription',
        'ticker' => 'getTicker',
        'ticker_root' => 'getTickerRoot',
        'ticker_suffix' => 'getTickerSuffix',
        'total_employees' => 'getTotalEmployees',
        'type' => 'getType',
        'weighted_shares_outstanding' => 'getWeightedSharesOutstanding'
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

    public const LOCALE_US = 'us';
    public const LOCALE__GLOBAL = 'global';
    public const MARKET_STOCKS = 'stocks';
    public const MARKET_CRYPTO = 'crypto';
    public const MARKET_FX = 'fx';
    public const MARKET_OTC = 'otc';
    public const MARKET_INDICES = 'indices';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLocaleAllowableValues()
    {
        return [
            self::LOCALE_US,
            self::LOCALE__GLOBAL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMarketAllowableValues()
    {
        return [
            self::MARKET_STOCKS,
            self::MARKET_CRYPTO,
            self::MARKET_FX,
            self::MARKET_OTC,
            self::MARKET_INDICES,
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
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('branding', $data ?? [], null);
        $this->setIfExists('cik', $data ?? [], null);
        $this->setIfExists('composite_figi', $data ?? [], null);
        $this->setIfExists('currency_name', $data ?? [], null);
        $this->setIfExists('delisted_utc', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('homepage_url', $data ?? [], null);
        $this->setIfExists('list_date', $data ?? [], null);
        $this->setIfExists('locale', $data ?? [], null);
        $this->setIfExists('market', $data ?? [], null);
        $this->setIfExists('market_cap', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('primary_exchange', $data ?? [], null);
        $this->setIfExists('round_lot', $data ?? [], null);
        $this->setIfExists('share_class_figi', $data ?? [], null);
        $this->setIfExists('share_class_shares_outstanding', $data ?? [], null);
        $this->setIfExists('sic_code', $data ?? [], null);
        $this->setIfExists('sic_description', $data ?? [], null);
        $this->setIfExists('ticker', $data ?? [], null);
        $this->setIfExists('ticker_root', $data ?? [], null);
        $this->setIfExists('ticker_suffix', $data ?? [], null);
        $this->setIfExists('total_employees', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('weighted_shares_outstanding', $data ?? [], null);
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

        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
        }
        if ($this->container['currency_name'] === null) {
            $invalidProperties[] = "'currency_name' can't be null";
        }
        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
        }
        $allowedValues = $this->getLocaleAllowableValues();
        if (!is_null($this->container['locale']) && !in_array($this->container['locale'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'locale', must be one of '%s'",
                $this->container['locale'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['market'] === null) {
            $invalidProperties[] = "'market' can't be null";
        }
        $allowedValues = $this->getMarketAllowableValues();
        if (!is_null($this->container['market']) && !in_array($this->container['market'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'market', must be one of '%s'",
                $this->container['market'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['ticker'] === null) {
            $invalidProperties[] = "'ticker' can't be null";
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
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active Whether or not the asset is actively traded. False means the asset has been delisted.
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
     * Gets address
     *
     * @return \OpenAPI\Client\Model\GetTicker200ResponseResultsAddress|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \OpenAPI\Client\Model\GetTicker200ResponseResultsAddress|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets branding
     *
     * @return \OpenAPI\Client\Model\GetTicker200ResponseResultsBranding|null
     */
    public function getBranding()
    {
        return $this->container['branding'];
    }

    /**
     * Sets branding
     *
     * @param \OpenAPI\Client\Model\GetTicker200ResponseResultsBranding|null $branding branding
     *
     * @return self
     */
    public function setBranding($branding)
    {
        if (is_null($branding)) {
            throw new \InvalidArgumentException('non-nullable branding cannot be null');
        }
        $this->container['branding'] = $branding;

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
     * @param string|null $cik The CIK number for this ticker. Find more information [here](https://en.wikipedia.org/wiki/Central_Index_Key).
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
     * Gets composite_figi
     *
     * @return string|null
     */
    public function getCompositeFigi()
    {
        return $this->container['composite_figi'];
    }

    /**
     * Sets composite_figi
     *
     * @param string|null $composite_figi The composite OpenFIGI number for this ticker. Find more information [here](https://www.openfigi.com/about/figi)
     *
     * @return self
     */
    public function setCompositeFigi($composite_figi)
    {
        if (is_null($composite_figi)) {
            throw new \InvalidArgumentException('non-nullable composite_figi cannot be null');
        }
        $this->container['composite_figi'] = $composite_figi;

        return $this;
    }

    /**
     * Gets currency_name
     *
     * @return string
     */
    public function getCurrencyName()
    {
        return $this->container['currency_name'];
    }

    /**
     * Sets currency_name
     *
     * @param string $currency_name The name of the currency that this asset is traded with.
     *
     * @return self
     */
    public function setCurrencyName($currency_name)
    {
        if (is_null($currency_name)) {
            throw new \InvalidArgumentException('non-nullable currency_name cannot be null');
        }
        $this->container['currency_name'] = $currency_name;

        return $this;
    }

    /**
     * Gets delisted_utc
     *
     * @return \DateTime|null
     */
    public function getDelistedUtc()
    {
        return $this->container['delisted_utc'];
    }

    /**
     * Sets delisted_utc
     *
     * @param \DateTime|null $delisted_utc The last date that the asset was traded.
     *
     * @return self
     */
    public function setDelistedUtc($delisted_utc)
    {
        if (is_null($delisted_utc)) {
            throw new \InvalidArgumentException('non-nullable delisted_utc cannot be null');
        }
        $this->container['delisted_utc'] = $delisted_utc;

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
     * Gets homepage_url
     *
     * @return string|null
     */
    public function getHomepageUrl()
    {
        return $this->container['homepage_url'];
    }

    /**
     * Sets homepage_url
     *
     * @param string|null $homepage_url The URL of the company's website homepage.
     *
     * @return self
     */
    public function setHomepageUrl($homepage_url)
    {
        if (is_null($homepage_url)) {
            throw new \InvalidArgumentException('non-nullable homepage_url cannot be null');
        }
        $this->container['homepage_url'] = $homepage_url;

        return $this;
    }

    /**
     * Gets list_date
     *
     * @return string|null
     */
    public function getListDate()
    {
        return $this->container['list_date'];
    }

    /**
     * Sets list_date
     *
     * @param string|null $list_date The date that the symbol was first publicly listed in the format YYYY-MM-DD.
     *
     * @return self
     */
    public function setListDate($list_date)
    {
        if (is_null($list_date)) {
            throw new \InvalidArgumentException('non-nullable list_date cannot be null');
        }
        $this->container['list_date'] = $list_date;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale The locale of the asset.
     *
     * @return self
     */
    public function setLocale($locale)
    {
        if (is_null($locale)) {
            throw new \InvalidArgumentException('non-nullable locale cannot be null');
        }
        $allowedValues = $this->getLocaleAllowableValues();
        if (!in_array($locale, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'locale', must be one of '%s'",
                    $locale,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets market
     *
     * @return string
     */
    public function getMarket()
    {
        return $this->container['market'];
    }

    /**
     * Sets market
     *
     * @param string $market The market type of the asset.
     *
     * @return self
     */
    public function setMarket($market)
    {
        if (is_null($market)) {
            throw new \InvalidArgumentException('non-nullable market cannot be null');
        }
        $allowedValues = $this->getMarketAllowableValues();
        if (!in_array($market, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'market', must be one of '%s'",
                    $market,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['market'] = $market;

        return $this;
    }

    /**
     * Gets market_cap
     *
     * @return float|null
     */
    public function getMarketCap()
    {
        return $this->container['market_cap'];
    }

    /**
     * Sets market_cap
     *
     * @param float|null $market_cap The most recent close price of the ticker multiplied by weighted outstanding shares.
     *
     * @return self
     */
    public function setMarketCap($market_cap)
    {
        if (is_null($market_cap)) {
            throw new \InvalidArgumentException('non-nullable market_cap cannot be null');
        }
        $this->container['market_cap'] = $market_cap;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the asset. For stocks/equities this will be the companies registered name. For crypto/fx this will be the name of the currency or coin pair.
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
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number The phone number for the company behind this ticker.
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (is_null($phone_number)) {
            throw new \InvalidArgumentException('non-nullable phone_number cannot be null');
        }
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets primary_exchange
     *
     * @return string|null
     */
    public function getPrimaryExchange()
    {
        return $this->container['primary_exchange'];
    }

    /**
     * Sets primary_exchange
     *
     * @param string|null $primary_exchange The ISO code of the primary listing exchange for this asset.
     *
     * @return self
     */
    public function setPrimaryExchange($primary_exchange)
    {
        if (is_null($primary_exchange)) {
            throw new \InvalidArgumentException('non-nullable primary_exchange cannot be null');
        }
        $this->container['primary_exchange'] = $primary_exchange;

        return $this;
    }

    /**
     * Gets round_lot
     *
     * @return float|null
     */
    public function getRoundLot()
    {
        return $this->container['round_lot'];
    }

    /**
     * Sets round_lot
     *
     * @param float|null $round_lot Round lot size of this security.
     *
     * @return self
     */
    public function setRoundLot($round_lot)
    {
        if (is_null($round_lot)) {
            throw new \InvalidArgumentException('non-nullable round_lot cannot be null');
        }
        $this->container['round_lot'] = $round_lot;

        return $this;
    }

    /**
     * Gets share_class_figi
     *
     * @return string|null
     */
    public function getShareClassFigi()
    {
        return $this->container['share_class_figi'];
    }

    /**
     * Sets share_class_figi
     *
     * @param string|null $share_class_figi The share Class OpenFIGI number for this ticker. Find more information [here](https://www.openfigi.com/about/figi)
     *
     * @return self
     */
    public function setShareClassFigi($share_class_figi)
    {
        if (is_null($share_class_figi)) {
            throw new \InvalidArgumentException('non-nullable share_class_figi cannot be null');
        }
        $this->container['share_class_figi'] = $share_class_figi;

        return $this;
    }

    /**
     * Gets share_class_shares_outstanding
     *
     * @return float|null
     */
    public function getShareClassSharesOutstanding()
    {
        return $this->container['share_class_shares_outstanding'];
    }

    /**
     * Sets share_class_shares_outstanding
     *
     * @param float|null $share_class_shares_outstanding The recorded number of outstanding shares for this particular share class.
     *
     * @return self
     */
    public function setShareClassSharesOutstanding($share_class_shares_outstanding)
    {
        if (is_null($share_class_shares_outstanding)) {
            throw new \InvalidArgumentException('non-nullable share_class_shares_outstanding cannot be null');
        }
        $this->container['share_class_shares_outstanding'] = $share_class_shares_outstanding;

        return $this;
    }

    /**
     * Gets sic_code
     *
     * @return string|null
     */
    public function getSicCode()
    {
        return $this->container['sic_code'];
    }

    /**
     * Sets sic_code
     *
     * @param string|null $sic_code The standard industrial classification code for this ticker.  For a list of SIC Codes, see the SEC's <a rel=\"nofollow\" target=\"_blank\" href=\"https://www.sec.gov/info/edgar/siccodes.htm\">SIC Code List</a>.
     *
     * @return self
     */
    public function setSicCode($sic_code)
    {
        if (is_null($sic_code)) {
            throw new \InvalidArgumentException('non-nullable sic_code cannot be null');
        }
        $this->container['sic_code'] = $sic_code;

        return $this;
    }

    /**
     * Gets sic_description
     *
     * @return string|null
     */
    public function getSicDescription()
    {
        return $this->container['sic_description'];
    }

    /**
     * Sets sic_description
     *
     * @param string|null $sic_description A description of this ticker's SIC code.
     *
     * @return self
     */
    public function setSicDescription($sic_description)
    {
        if (is_null($sic_description)) {
            throw new \InvalidArgumentException('non-nullable sic_description cannot be null');
        }
        $this->container['sic_description'] = $sic_description;

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
     * @param string $ticker The exchange symbol that this item is traded under.
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
     * Gets ticker_root
     *
     * @return string|null
     */
    public function getTickerRoot()
    {
        return $this->container['ticker_root'];
    }

    /**
     * Sets ticker_root
     *
     * @param string|null $ticker_root The root of a specified ticker. For example, the root of BRK.A is BRK.
     *
     * @return self
     */
    public function setTickerRoot($ticker_root)
    {
        if (is_null($ticker_root)) {
            throw new \InvalidArgumentException('non-nullable ticker_root cannot be null');
        }
        $this->container['ticker_root'] = $ticker_root;

        return $this;
    }

    /**
     * Gets ticker_suffix
     *
     * @return string|null
     */
    public function getTickerSuffix()
    {
        return $this->container['ticker_suffix'];
    }

    /**
     * Sets ticker_suffix
     *
     * @param string|null $ticker_suffix The suffix of a specified ticker. For example, the suffix of BRK.A is A.
     *
     * @return self
     */
    public function setTickerSuffix($ticker_suffix)
    {
        if (is_null($ticker_suffix)) {
            throw new \InvalidArgumentException('non-nullable ticker_suffix cannot be null');
        }
        $this->container['ticker_suffix'] = $ticker_suffix;

        return $this;
    }

    /**
     * Gets total_employees
     *
     * @return float|null
     */
    public function getTotalEmployees()
    {
        return $this->container['total_employees'];
    }

    /**
     * Sets total_employees
     *
     * @param float|null $total_employees The approximate number of employees for the company.
     *
     * @return self
     */
    public function setTotalEmployees($total_employees)
    {
        if (is_null($total_employees)) {
            throw new \InvalidArgumentException('non-nullable total_employees cannot be null');
        }
        $this->container['total_employees'] = $total_employees;

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
     * @param string|null $type The type of the asset. Find the types that we support via our [Ticker Types API](https://polygon.io/docs/stocks/get_v3_reference_tickers_types).
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
     * Gets weighted_shares_outstanding
     *
     * @return float|null
     */
    public function getWeightedSharesOutstanding()
    {
        return $this->container['weighted_shares_outstanding'];
    }

    /**
     * Sets weighted_shares_outstanding
     *
     * @param float|null $weighted_shares_outstanding The shares outstanding calculated assuming all shares of other share classes are converted to this share class.
     *
     * @return self
     */
    public function setWeightedSharesOutstanding($weighted_shares_outstanding)
    {
        if (is_null($weighted_shares_outstanding)) {
            throw new \InvalidArgumentException('non-nullable weighted_shares_outstanding cannot be null');
        }
        $this->container['weighted_shares_outstanding'] = $weighted_shares_outstanding;

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

