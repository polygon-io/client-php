# OpenAPI\Client\CryptoaggregatesApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cryptoMACD()**](CryptoaggregatesApi.md#cryptoMACD) | **GET** /v1/indicators/macd/{cryptoTicker} | Moving Average Convergence/Divergence (MACD) |
| [**v2AggsGroupedLocaleGlobalMarketCryptoDateGet()**](CryptoaggregatesApi.md#v2AggsGroupedLocaleGlobalMarketCryptoDateGet) | **GET** /v2/aggs/grouped/locale/global/market/crypto/{date} | Grouped Daily (Bars) |
| [**v2AggsTickerCryptoTickerPrevGet()**](CryptoaggregatesApi.md#v2AggsTickerCryptoTickerPrevGet) | **GET** /v2/aggs/ticker/{cryptoTicker}/prev | Previous Close |
| [**v2AggsTickerCryptoTickerRangeMultiplierTimespanFromToGet()**](CryptoaggregatesApi.md#v2AggsTickerCryptoTickerRangeMultiplierTimespanFromToGet) | **GET** /v2/aggs/ticker/{cryptoTicker}/range/{multiplier}/{timespan}/{from}/{to} | Aggregates (Bars) |


## `cryptoMACD()`

```php
cryptoMACD($crypto_ticker, $timestamp, $timespan, $short_window, $long_window, $signal_window, $series_type, $expand_underlying, $order, $limit, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt): \OpenAPI\Client\Model\CryptoMACD200Response
```

Moving Average Convergence/Divergence (MACD)

Get moving average convergence/divergence (MACD) data for a ticker symbol over a given time range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CryptoaggregatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crypto_ticker = X:BTCUSD; // string | The ticker symbol for which to get MACD data.
$timestamp = 'timestamp_example'; // string | Query by timestamp. Either a date with the format YYYY-MM-DD or a millisecond timestamp.
$timespan = day; // string | The size of the aggregate time window.
$short_window = 12; // int | The short window size used to calculate MACD data.
$long_window = 26; // int | The long window size used to calculate MACD data.
$signal_window = 9; // int | The window size used to calculate the MACD signal line.
$series_type = close; // string | The price in the aggregate which will be used to calculate MACD data. i.e. 'close' will result in using close prices to  calculate the MACD.
$expand_underlying = false; // bool | Whether or not to include the aggregates used to calculate this indicator in the response.
$order = desc; // string | The order in which to return the results, ordered by timestamp.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 5000
$timestamp_gte = 'timestamp_gte_example'; // string | Range by timestamp.
$timestamp_gt = 'timestamp_gt_example'; // string | Range by timestamp.
$timestamp_lte = 'timestamp_lte_example'; // string | Range by timestamp.
$timestamp_lt = 'timestamp_lt_example'; // string | Range by timestamp.

try {
    $result = $apiInstance->cryptoMACD($crypto_ticker, $timestamp, $timespan, $short_window, $long_window, $signal_window, $series_type, $expand_underlying, $order, $limit, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CryptoaggregatesApi->cryptoMACD: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **crypto_ticker** | **string**| The ticker symbol for which to get MACD data. | |
| **timestamp** | **string**| Query by timestamp. Either a date with the format YYYY-MM-DD or a millisecond timestamp. | [optional] |
| **timespan** | **string**| The size of the aggregate time window. | [optional] [default to &#39;day&#39;] |
| **short_window** | **int**| The short window size used to calculate MACD data. | [optional] [default to 12] |
| **long_window** | **int**| The long window size used to calculate MACD data. | [optional] [default to 26] |
| **signal_window** | **int**| The window size used to calculate the MACD signal line. | [optional] [default to 9] |
| **series_type** | **string**| The price in the aggregate which will be used to calculate MACD data. i.e. &#39;close&#39; will result in using close prices to  calculate the MACD. | [optional] [default to &#39;close&#39;] |
| **expand_underlying** | **bool**| Whether or not to include the aggregates used to calculate this indicator in the response. | [optional] [default to false] |
| **order** | **string**| The order in which to return the results, ordered by timestamp. | [optional] [default to &#39;desc&#39;] |
| **limit** | **int**| Limit the number of results returned, default is 10 and max is 5000 | [optional] [default to 10] |
| **timestamp_gte** | **string**| Range by timestamp. | [optional] |
| **timestamp_gt** | **string**| Range by timestamp. | [optional] |
| **timestamp_lte** | **string**| Range by timestamp. | [optional] |
| **timestamp_lt** | **string**| Range by timestamp. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CryptoMACD200Response**](../Model/CryptoMACD200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2AggsGroupedLocaleGlobalMarketCryptoDateGet()`

```php
v2AggsGroupedLocaleGlobalMarketCryptoDateGet($date, $adjusted): \OpenAPI\Client\Model\V2AggsGroupedLocaleGlobalMarketCryptoDateGet200Response
```

Grouped Daily (Bars)

Get the daily open, high, low, and close (OHLC) for the entire cryptocurrency markets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CryptoaggregatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = 2023-01-09; // string | The beginning date for the aggregate window.
$adjusted = true; // bool | Whether or not the results are adjusted for splits.  By default, results are adjusted. Set this to false to get results that are NOT adjusted for splits.

try {
    $result = $apiInstance->v2AggsGroupedLocaleGlobalMarketCryptoDateGet($date, $adjusted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CryptoaggregatesApi->v2AggsGroupedLocaleGlobalMarketCryptoDateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date** | **string**| The beginning date for the aggregate window. | |
| **adjusted** | **bool**| Whether or not the results are adjusted for splits.  By default, results are adjusted. Set this to false to get results that are NOT adjusted for splits. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2AggsGroupedLocaleGlobalMarketCryptoDateGet200Response**](../Model/V2AggsGroupedLocaleGlobalMarketCryptoDateGet200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2AggsTickerCryptoTickerPrevGet()`

```php
v2AggsTickerCryptoTickerPrevGet($crypto_ticker, $adjusted): \OpenAPI\Client\Model\V2AggsTickerCryptoTickerPrevGet200Response
```

Previous Close

Get the previous day's open, high, low, and close (OHLC) for the specified cryptocurrency pair.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CryptoaggregatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crypto_ticker = X:BTCUSD; // string | The ticker symbol of the currency pair.
$adjusted = true; // bool | Whether or not the results are adjusted for splits.  By default, results are adjusted. Set this to false to get results that are NOT adjusted for splits.

try {
    $result = $apiInstance->v2AggsTickerCryptoTickerPrevGet($crypto_ticker, $adjusted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CryptoaggregatesApi->v2AggsTickerCryptoTickerPrevGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **crypto_ticker** | **string**| The ticker symbol of the currency pair. | |
| **adjusted** | **bool**| Whether or not the results are adjusted for splits.  By default, results are adjusted. Set this to false to get results that are NOT adjusted for splits. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2AggsTickerCryptoTickerPrevGet200Response**](../Model/V2AggsTickerCryptoTickerPrevGet200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2AggsTickerCryptoTickerRangeMultiplierTimespanFromToGet()`

```php
v2AggsTickerCryptoTickerRangeMultiplierTimespanFromToGet($crypto_ticker, $multiplier, $timespan, $from, $to, $adjusted, $sort, $limit): \OpenAPI\Client\Model\V2AggsTickerCryptoTickerRangeMultiplierTimespanFromToGet200Response
```

Aggregates (Bars)

Get aggregate bars for a cryptocurrency pair over a given date range in custom time window sizes. <br /> <br /> For example, if timespan = ‘minute’ and multiplier = ‘5’ then 5-minute bars will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CryptoaggregatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crypto_ticker = X:BTCUSD; // string | The ticker symbol of the currency pair.
$multiplier = 1; // int | The size of the timespan multiplier.
$timespan = day; // string | The size of the time window.
$from = 2023-01-09; // string | The start of the aggregate time window. Either a date with the format YYYY-MM-DD or a millisecond timestamp.
$to = 2023-01-09; // string | The end of the aggregate time window. Either a date with the format YYYY-MM-DD or a millisecond timestamp.
$adjusted = true; // bool | Whether or not the results are adjusted for splits.  By default, results are adjusted. Set this to false to get results that are NOT adjusted for splits.
$sort = asc; // string | Sort the results by timestamp. `asc` will return results in ascending order (oldest at the top), `desc` will return results in descending order (newest at the top).
$limit = 120; // int | Limits the number of base aggregates queried to create the aggregate results. Max 50000 and Default 5000. Read more about how limit is used to calculate aggregate results in our article on <a href=\"https://polygon.io/blog/aggs-api-updates/\" target=\"_blank\" alt=\"Aggregate Data API Improvements\">Aggregate Data API Improvements</a>.

try {
    $result = $apiInstance->v2AggsTickerCryptoTickerRangeMultiplierTimespanFromToGet($crypto_ticker, $multiplier, $timespan, $from, $to, $adjusted, $sort, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CryptoaggregatesApi->v2AggsTickerCryptoTickerRangeMultiplierTimespanFromToGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **crypto_ticker** | **string**| The ticker symbol of the currency pair. | |
| **multiplier** | **int**| The size of the timespan multiplier. | |
| **timespan** | **string**| The size of the time window. | |
| **from** | **string**| The start of the aggregate time window. Either a date with the format YYYY-MM-DD or a millisecond timestamp. | |
| **to** | **string**| The end of the aggregate time window. Either a date with the format YYYY-MM-DD or a millisecond timestamp. | |
| **adjusted** | **bool**| Whether or not the results are adjusted for splits.  By default, results are adjusted. Set this to false to get results that are NOT adjusted for splits. | [optional] |
| **sort** | **string**| Sort the results by timestamp. &#x60;asc&#x60; will return results in ascending order (oldest at the top), &#x60;desc&#x60; will return results in descending order (newest at the top). | [optional] |
| **limit** | **int**| Limits the number of base aggregates queried to create the aggregate results. Max 50000 and Default 5000. Read more about how limit is used to calculate aggregate results in our article on &lt;a href&#x3D;\&quot;https://polygon.io/blog/aggs-api-updates/\&quot; target&#x3D;\&quot;_blank\&quot; alt&#x3D;\&quot;Aggregate Data API Improvements\&quot;&gt;Aggregate Data API Improvements&lt;/a&gt;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2AggsTickerCryptoTickerRangeMultiplierTimespanFromToGet200Response**](../Model/V2AggsTickerCryptoTickerRangeMultiplierTimespanFromToGet200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
