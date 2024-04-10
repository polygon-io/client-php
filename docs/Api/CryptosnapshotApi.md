# OpenAPI\Client\CryptosnapshotApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v2SnapshotLocaleGlobalMarketsCryptoDirectionGet()**](CryptosnapshotApi.md#v2SnapshotLocaleGlobalMarketsCryptoDirectionGet) | **GET** /v2/snapshot/locale/global/markets/crypto/{direction} | Gainers/Losers |
| [**v2SnapshotLocaleGlobalMarketsCryptoTickersGet()**](CryptosnapshotApi.md#v2SnapshotLocaleGlobalMarketsCryptoTickersGet) | **GET** /v2/snapshot/locale/global/markets/crypto/tickers | All Tickers |
| [**v2SnapshotLocaleGlobalMarketsCryptoTickersTickerBookGet()**](CryptosnapshotApi.md#v2SnapshotLocaleGlobalMarketsCryptoTickersTickerBookGet) | **GET** /v2/snapshot/locale/global/markets/crypto/tickers/{ticker}/book | Ticker Full Book (L2) |
| [**v2SnapshotLocaleGlobalMarketsCryptoTickersTickerGet()**](CryptosnapshotApi.md#v2SnapshotLocaleGlobalMarketsCryptoTickersTickerGet) | **GET** /v2/snapshot/locale/global/markets/crypto/tickers/{ticker} | Ticker |


## `v2SnapshotLocaleGlobalMarketsCryptoDirectionGet()`

```php
v2SnapshotLocaleGlobalMarketsCryptoDirectionGet($direction): \OpenAPI\Client\Model\V2SnapshotLocaleGlobalMarketsCryptoDirectionGet200Response
```

Gainers/Losers

Get the current top 20 gainers or losers of the day in cryptocurrency markets. <br /> <br /> Top gainers are those tickers whose price has increased by the highest percentage since the previous day's close. Top losers are those tickers whose price has decreased by the highest percentage since the previous day's close. <br /> <br /> Note: Snapshot data is cleared at 12am EST and gets populated as data is received from the exchanges.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CryptosnapshotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$direction = gainers; // string | The direction of the snapshot results to return.

try {
    $result = $apiInstance->v2SnapshotLocaleGlobalMarketsCryptoDirectionGet($direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CryptosnapshotApi->v2SnapshotLocaleGlobalMarketsCryptoDirectionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **direction** | **string**| The direction of the snapshot results to return. | |

### Return type

[**\OpenAPI\Client\Model\V2SnapshotLocaleGlobalMarketsCryptoDirectionGet200Response**](../Model/V2SnapshotLocaleGlobalMarketsCryptoDirectionGet200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2SnapshotLocaleGlobalMarketsCryptoTickersGet()`

```php
v2SnapshotLocaleGlobalMarketsCryptoTickersGet($tickers): \OpenAPI\Client\Model\V2SnapshotLocaleGlobalMarketsCryptoTickersGet200Response
```

All Tickers

Get the current minute, day, and previous day’s aggregate, as well as the last trade and quote for all traded cryptocurrency symbols. <br /> <br /> Note: Snapshot data is cleared at 12am EST and gets populated as data is received from the exchanges. This can happen as early as 4am EST.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CryptosnapshotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tickers = array('tickers_example'); // string[] | A case-sensitive comma separated list of tickers to get snapshots for. For example, AAPL,TSLA,GOOG. Empty string defaults to querying all tickers.

try {
    $result = $apiInstance->v2SnapshotLocaleGlobalMarketsCryptoTickersGet($tickers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CryptosnapshotApi->v2SnapshotLocaleGlobalMarketsCryptoTickersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tickers** | [**string[]**](../Model/string.md)| A case-sensitive comma separated list of tickers to get snapshots for. For example, AAPL,TSLA,GOOG. Empty string defaults to querying all tickers. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2SnapshotLocaleGlobalMarketsCryptoTickersGet200Response**](../Model/V2SnapshotLocaleGlobalMarketsCryptoTickersGet200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2SnapshotLocaleGlobalMarketsCryptoTickersTickerBookGet()`

```php
v2SnapshotLocaleGlobalMarketsCryptoTickersTickerBookGet($ticker): \OpenAPI\Client\Model\V2SnapshotLocaleGlobalMarketsCryptoTickersTickerBookGet200Response
```

Ticker Full Book (L2)

Get the current level 2 book of a single ticker. This is the combined book from all of the exchanges. <br /> <br /> Note: Snapshot data is cleared at 12am EST and gets populated as data is received from the exchanges.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CryptosnapshotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticker = X:BTCUSD; // string | The cryptocurrency ticker.

try {
    $result = $apiInstance->v2SnapshotLocaleGlobalMarketsCryptoTickersTickerBookGet($ticker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CryptosnapshotApi->v2SnapshotLocaleGlobalMarketsCryptoTickersTickerBookGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticker** | **string**| The cryptocurrency ticker. | |

### Return type

[**\OpenAPI\Client\Model\V2SnapshotLocaleGlobalMarketsCryptoTickersTickerBookGet200Response**](../Model/V2SnapshotLocaleGlobalMarketsCryptoTickersTickerBookGet200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2SnapshotLocaleGlobalMarketsCryptoTickersTickerGet()`

```php
v2SnapshotLocaleGlobalMarketsCryptoTickersTickerGet($ticker): \OpenAPI\Client\Model\V2SnapshotLocaleGlobalMarketsCryptoTickersTickerGet200Response
```

Ticker

Get the current minute, day, and previous day’s aggregate, as well as the last trade and quote for a single traded cryptocurrency symbol. <br /> <br /> Note: Snapshot data is cleared at 12am EST and gets populated as data is received from the exchanges.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CryptosnapshotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticker = X:BTCUSD; // string | Ticker of the snapshot

try {
    $result = $apiInstance->v2SnapshotLocaleGlobalMarketsCryptoTickersTickerGet($ticker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CryptosnapshotApi->v2SnapshotLocaleGlobalMarketsCryptoTickersTickerGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticker** | **string**| Ticker of the snapshot | |

### Return type

[**\OpenAPI\Client\Model\V2SnapshotLocaleGlobalMarketsCryptoTickersTickerGet200Response**](../Model/V2SnapshotLocaleGlobalMarketsCryptoTickersTickerGet200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
