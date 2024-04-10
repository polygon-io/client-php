# OpenAPI\Client\FxsnapshotApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v2SnapshotLocaleGlobalMarketsForexDirectionGet()**](FxsnapshotApi.md#v2SnapshotLocaleGlobalMarketsForexDirectionGet) | **GET** /v2/snapshot/locale/global/markets/forex/{direction} | Gainers/Losers |
| [**v2SnapshotLocaleGlobalMarketsForexTickersGet()**](FxsnapshotApi.md#v2SnapshotLocaleGlobalMarketsForexTickersGet) | **GET** /v2/snapshot/locale/global/markets/forex/tickers | All Tickers |
| [**v2SnapshotLocaleGlobalMarketsForexTickersTickerGet()**](FxsnapshotApi.md#v2SnapshotLocaleGlobalMarketsForexTickersTickerGet) | **GET** /v2/snapshot/locale/global/markets/forex/tickers/{ticker} | Ticker |


## `v2SnapshotLocaleGlobalMarketsForexDirectionGet()`

```php
v2SnapshotLocaleGlobalMarketsForexDirectionGet($direction): \OpenAPI\Client\Model\V2SnapshotLocaleGlobalMarketsForexTickersGet200Response
```

Gainers/Losers

Get the current top 20 gainers or losers of the day in forex markets. <br /> <br /> Top gainers are those tickers whose price has increased by the highest percentage since the previous day's close. Top losers are those tickers whose price has decreased by the highest percentage since the previous day's close. <br /> <br /> Note: Snapshot data is cleared at 12am EST and gets populated as data is received from the exchanges.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FxsnapshotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$direction = gainers; // string | The direction of the snapshot results to return.

try {
    $result = $apiInstance->v2SnapshotLocaleGlobalMarketsForexDirectionGet($direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FxsnapshotApi->v2SnapshotLocaleGlobalMarketsForexDirectionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **direction** | **string**| The direction of the snapshot results to return. | |

### Return type

[**\OpenAPI\Client\Model\V2SnapshotLocaleGlobalMarketsForexTickersGet200Response**](../Model/V2SnapshotLocaleGlobalMarketsForexTickersGet200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2SnapshotLocaleGlobalMarketsForexTickersGet()`

```php
v2SnapshotLocaleGlobalMarketsForexTickersGet($tickers): \OpenAPI\Client\Model\V2SnapshotLocaleGlobalMarketsForexTickersGet200Response
```

All Tickers

Get the current minute, day, and previous day’s aggregate, as well as the last trade and quote for all traded forex symbols. <br /> <br /> Note: Snapshot data is cleared at 12am EST and gets populated as data is received from the exchanges. This can happen as early as 4am EST.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FxsnapshotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tickers = array('tickers_example'); // string[] | A case-sensitive comma separated list of tickers to get snapshots for. For example, AAPL,TSLA,GOOG. Empty string defaults to querying all tickers.

try {
    $result = $apiInstance->v2SnapshotLocaleGlobalMarketsForexTickersGet($tickers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FxsnapshotApi->v2SnapshotLocaleGlobalMarketsForexTickersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tickers** | [**string[]**](../Model/string.md)| A case-sensitive comma separated list of tickers to get snapshots for. For example, AAPL,TSLA,GOOG. Empty string defaults to querying all tickers. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2SnapshotLocaleGlobalMarketsForexTickersGet200Response**](../Model/V2SnapshotLocaleGlobalMarketsForexTickersGet200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2SnapshotLocaleGlobalMarketsForexTickersTickerGet()`

```php
v2SnapshotLocaleGlobalMarketsForexTickersTickerGet($ticker): \OpenAPI\Client\Model\V2SnapshotLocaleGlobalMarketsForexTickersTickerGet200Response
```

Ticker

Get the current minute, day, and previous day’s aggregate, as well as the last trade and quote for a single traded currency symbol. <br /> <br /> Note: Snapshot data is cleared at 12am EST and gets populated as data is received from the exchanges.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FxsnapshotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticker = C:EURUSD; // string | The forex ticker.

try {
    $result = $apiInstance->v2SnapshotLocaleGlobalMarketsForexTickersTickerGet($ticker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FxsnapshotApi->v2SnapshotLocaleGlobalMarketsForexTickersTickerGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticker** | **string**| The forex ticker. | |

### Return type

[**\OpenAPI\Client\Model\V2SnapshotLocaleGlobalMarketsForexTickersTickerGet200Response**](../Model/V2SnapshotLocaleGlobalMarketsForexTickersTickerGet200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
