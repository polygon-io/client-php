# OpenAPI\Client\StockssnapshotApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v2SnapshotLocaleUsMarketsStocksDirectionGet()**](StockssnapshotApi.md#v2SnapshotLocaleUsMarketsStocksDirectionGet) | **GET** /v2/snapshot/locale/us/markets/stocks/{direction} | Gainers/Losers |
| [**v2SnapshotLocaleUsMarketsStocksTickersGet()**](StockssnapshotApi.md#v2SnapshotLocaleUsMarketsStocksTickersGet) | **GET** /v2/snapshot/locale/us/markets/stocks/tickers | All Tickers |
| [**v2SnapshotLocaleUsMarketsStocksTickersStocksTickerGet()**](StockssnapshotApi.md#v2SnapshotLocaleUsMarketsStocksTickersStocksTickerGet) | **GET** /v2/snapshot/locale/us/markets/stocks/tickers/{stocksTicker} | Ticker |


## `v2SnapshotLocaleUsMarketsStocksDirectionGet()`

```php
v2SnapshotLocaleUsMarketsStocksDirectionGet($direction, $include_otc): \OpenAPI\Client\Model\V2SnapshotLocaleUsMarketsStocksDirectionGet200Response
```

Gainers/Losers

Get the most up-to-date market data for the current top 20 gainers or losers of the day in the stocks/equities markets. <br /> <br /> Top gainers are those tickers whose price has increased by the highest percentage since the previous day's close. Top losers are those tickers whose price has decreased by the highest percentage since the previous day's close. <br /> <br /> Note: Snapshot data is cleared at 3:30am EST and gets populated as data is received from the exchanges.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StockssnapshotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$direction = gainers; // string | The direction of the snapshot results to return.
$include_otc = True; // bool | Include OTC securities in the response. Default is false (don't include OTC securities).

try {
    $result = $apiInstance->v2SnapshotLocaleUsMarketsStocksDirectionGet($direction, $include_otc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockssnapshotApi->v2SnapshotLocaleUsMarketsStocksDirectionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **direction** | **string**| The direction of the snapshot results to return. | |
| **include_otc** | **bool**| Include OTC securities in the response. Default is false (don&#39;t include OTC securities). | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2SnapshotLocaleUsMarketsStocksDirectionGet200Response**](../Model/V2SnapshotLocaleUsMarketsStocksDirectionGet200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2SnapshotLocaleUsMarketsStocksTickersGet()`

```php
v2SnapshotLocaleUsMarketsStocksTickersGet($tickers, $include_otc): \OpenAPI\Client\Model\V2SnapshotLocaleUsMarketsStocksTickersGet200Response
```

All Tickers

Get the most up-to-date market data for all traded stock symbols. <br /> <br /> Note: Snapshot data is cleared at 3:30am EST and gets populated as data is received from the exchanges. This can happen as early as 4am EST.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StockssnapshotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tickers = array('tickers_example'); // string[] | A case-sensitive comma separated list of tickers to get snapshots for. For example, AAPL,TSLA,GOOG. Empty string defaults to querying all tickers.
$include_otc = True; // bool | Include OTC securities in the response. Default is false (don't include OTC securities).

try {
    $result = $apiInstance->v2SnapshotLocaleUsMarketsStocksTickersGet($tickers, $include_otc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockssnapshotApi->v2SnapshotLocaleUsMarketsStocksTickersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tickers** | [**string[]**](../Model/string.md)| A case-sensitive comma separated list of tickers to get snapshots for. For example, AAPL,TSLA,GOOG. Empty string defaults to querying all tickers. | [optional] |
| **include_otc** | **bool**| Include OTC securities in the response. Default is false (don&#39;t include OTC securities). | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2SnapshotLocaleUsMarketsStocksTickersGet200Response**](../Model/V2SnapshotLocaleUsMarketsStocksTickersGet200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2SnapshotLocaleUsMarketsStocksTickersStocksTickerGet()`

```php
v2SnapshotLocaleUsMarketsStocksTickersStocksTickerGet($stocks_ticker): \OpenAPI\Client\Model\V2SnapshotLocaleUsMarketsStocksTickersStocksTickerGet200Response
```

Ticker

Get the most up-to-date market data for a single traded stock ticker. <br /> <br /> Note: Snapshot data is cleared at 3:30am EST and gets populated as data is received from the exchanges. This can happen as early as 4am EST.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StockssnapshotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stocks_ticker = AAPL; // string | Specify a case-sensitive ticker symbol. For example, AAPL represents Apple Inc.

try {
    $result = $apiInstance->v2SnapshotLocaleUsMarketsStocksTickersStocksTickerGet($stocks_ticker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockssnapshotApi->v2SnapshotLocaleUsMarketsStocksTickersStocksTickerGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stocks_ticker** | **string**| Specify a case-sensitive ticker symbol. For example, AAPL represents Apple Inc. | |

### Return type

[**\OpenAPI\Client\Model\V2SnapshotLocaleUsMarketsStocksTickersStocksTickerGet200Response**](../Model/V2SnapshotLocaleUsMarketsStocksTickersStocksTickerGet200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
