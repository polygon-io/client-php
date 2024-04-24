# OpenAPI\Client\CrpytoaggregatesApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cryptoEMA()**](CrpytoaggregatesApi.md#cryptoEMA) | **GET** /v1/indicators/ema/{cryptoTicker} | Exponential Moving Average (EMA) |
| [**cryptoRSI()**](CrpytoaggregatesApi.md#cryptoRSI) | **GET** /v1/indicators/rsi/{cryptoTicker} | Relative Strength Index (RSI) |
| [**cryptoSMA()**](CrpytoaggregatesApi.md#cryptoSMA) | **GET** /v1/indicators/sma/{cryptoTicker} | Simple Moving Average (SMA) |


## `cryptoEMA()`

```php
cryptoEMA($crypto_ticker, $timestamp, $timespan, $window, $series_type, $expand_underlying, $order, $limit, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt): \OpenAPI\Client\Model\CryptoEMA200Response
```

Exponential Moving Average (EMA)

Get the exponential moving average (EMA) for a ticker symbol over a given time range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CrpytoaggregatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crypto_ticker = X:BTCUSD; // string | The ticker symbol for which to get exponential moving average (EMA) data.
$timestamp = 'timestamp_example'; // string | Query by timestamp. Either a date with the format YYYY-MM-DD or a millisecond timestamp.
$timespan = day; // string | The size of the aggregate time window.
$window = 50; // int | The window size used to calculate the exponential moving average (EMA). i.e. a window size of 10 with daily aggregates would result in a 10 day moving average.
$series_type = close; // string | The price in the aggregate which will be used to calculate the exponential moving average. i.e. 'close' will result in using close prices to  calculate the exponential moving average (EMA).
$expand_underlying = false; // bool | Whether or not to include the aggregates used to calculate this indicator in the response.
$order = desc; // string | The order in which to return the results, ordered by timestamp.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 5000
$timestamp_gte = 'timestamp_gte_example'; // string | Range by timestamp.
$timestamp_gt = 'timestamp_gt_example'; // string | Range by timestamp.
$timestamp_lte = 'timestamp_lte_example'; // string | Range by timestamp.
$timestamp_lt = 'timestamp_lt_example'; // string | Range by timestamp.

try {
    $result = $apiInstance->cryptoEMA($crypto_ticker, $timestamp, $timespan, $window, $series_type, $expand_underlying, $order, $limit, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrpytoaggregatesApi->cryptoEMA: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **crypto_ticker** | **string**| The ticker symbol for which to get exponential moving average (EMA) data. | |
| **timestamp** | **string**| Query by timestamp. Either a date with the format YYYY-MM-DD or a millisecond timestamp. | [optional] |
| **timespan** | **string**| The size of the aggregate time window. | [optional] [default to &#39;day&#39;] |
| **window** | **int**| The window size used to calculate the exponential moving average (EMA). i.e. a window size of 10 with daily aggregates would result in a 10 day moving average. | [optional] [default to 50] |
| **series_type** | **string**| The price in the aggregate which will be used to calculate the exponential moving average. i.e. &#39;close&#39; will result in using close prices to  calculate the exponential moving average (EMA). | [optional] [default to &#39;close&#39;] |
| **expand_underlying** | **bool**| Whether or not to include the aggregates used to calculate this indicator in the response. | [optional] [default to false] |
| **order** | **string**| The order in which to return the results, ordered by timestamp. | [optional] [default to &#39;desc&#39;] |
| **limit** | **int**| Limit the number of results returned, default is 10 and max is 5000 | [optional] [default to 10] |
| **timestamp_gte** | **string**| Range by timestamp. | [optional] |
| **timestamp_gt** | **string**| Range by timestamp. | [optional] |
| **timestamp_lte** | **string**| Range by timestamp. | [optional] |
| **timestamp_lt** | **string**| Range by timestamp. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CryptoEMA200Response**](../Model/CryptoEMA200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cryptoRSI()`

```php
cryptoRSI($crypto_ticker, $timestamp, $timespan, $window, $series_type, $expand_underlying, $order, $limit, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt): \OpenAPI\Client\Model\CryptoRSI200Response
```

Relative Strength Index (RSI)

Get the relative strength index (RSI) for a ticker symbol over a given time range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CrpytoaggregatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crypto_ticker = X:BTCUSD; // string | The ticker symbol for which to get relative strength index (RSI) data.
$timestamp = 'timestamp_example'; // string | Query by timestamp. Either a date with the format YYYY-MM-DD or a millisecond timestamp.
$timespan = day; // string | The size of the aggregate time window.
$window = 14; // int | The window size used to calculate the relative strength index (RSI). i.e. a window size of 10 with daily aggregates would result in a 10 day moving average.
$series_type = close; // string | The price in the aggregate which will be used to calculate the relative strength index. i.e. 'close' will result in using close prices to  calculate the relative strength index (RSI).
$expand_underlying = false; // bool | Whether or not to include the aggregates used to calculate this indicator in the response.
$order = desc; // string | The order in which to return the results, ordered by timestamp.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 5000
$timestamp_gte = 'timestamp_gte_example'; // string | Range by timestamp.
$timestamp_gt = 'timestamp_gt_example'; // string | Range by timestamp.
$timestamp_lte = 'timestamp_lte_example'; // string | Range by timestamp.
$timestamp_lt = 'timestamp_lt_example'; // string | Range by timestamp.

try {
    $result = $apiInstance->cryptoRSI($crypto_ticker, $timestamp, $timespan, $window, $series_type, $expand_underlying, $order, $limit, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrpytoaggregatesApi->cryptoRSI: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **crypto_ticker** | **string**| The ticker symbol for which to get relative strength index (RSI) data. | |
| **timestamp** | **string**| Query by timestamp. Either a date with the format YYYY-MM-DD or a millisecond timestamp. | [optional] |
| **timespan** | **string**| The size of the aggregate time window. | [optional] [default to &#39;day&#39;] |
| **window** | **int**| The window size used to calculate the relative strength index (RSI). i.e. a window size of 10 with daily aggregates would result in a 10 day moving average. | [optional] [default to 14] |
| **series_type** | **string**| The price in the aggregate which will be used to calculate the relative strength index. i.e. &#39;close&#39; will result in using close prices to  calculate the relative strength index (RSI). | [optional] [default to &#39;close&#39;] |
| **expand_underlying** | **bool**| Whether or not to include the aggregates used to calculate this indicator in the response. | [optional] [default to false] |
| **order** | **string**| The order in which to return the results, ordered by timestamp. | [optional] [default to &#39;desc&#39;] |
| **limit** | **int**| Limit the number of results returned, default is 10 and max is 5000 | [optional] [default to 10] |
| **timestamp_gte** | **string**| Range by timestamp. | [optional] |
| **timestamp_gt** | **string**| Range by timestamp. | [optional] |
| **timestamp_lte** | **string**| Range by timestamp. | [optional] |
| **timestamp_lt** | **string**| Range by timestamp. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CryptoRSI200Response**](../Model/CryptoRSI200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cryptoSMA()`

```php
cryptoSMA($crypto_ticker, $timestamp, $timespan, $window, $series_type, $expand_underlying, $order, $limit, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt): \OpenAPI\Client\Model\CryptoSMA200Response
```

Simple Moving Average (SMA)

Get the simple moving average (SMA) for a ticker symbol over a given time range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CrpytoaggregatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crypto_ticker = X:BTCUSD; // string | The ticker symbol for which to get simple moving average (SMA) data.
$timestamp = 'timestamp_example'; // string | Query by timestamp. Either a date with the format YYYY-MM-DD or a millisecond timestamp.
$timespan = day; // string | The size of the aggregate time window.
$window = 50; // int | The window size used to calculate the simple moving average (SMA). i.e. a window size of 10 with daily aggregates would result in a 10 day moving average.
$series_type = close; // string | The price in the aggregate which will be used to calculate the simple moving average. i.e. 'close' will result in using close prices to  calculate the simple moving average (SMA).
$expand_underlying = false; // bool | Whether or not to include the aggregates used to calculate this indicator in the response.
$order = desc; // string | The order in which to return the results, ordered by timestamp.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 5000
$timestamp_gte = 'timestamp_gte_example'; // string | Range by timestamp.
$timestamp_gt = 'timestamp_gt_example'; // string | Range by timestamp.
$timestamp_lte = 'timestamp_lte_example'; // string | Range by timestamp.
$timestamp_lt = 'timestamp_lt_example'; // string | Range by timestamp.

try {
    $result = $apiInstance->cryptoSMA($crypto_ticker, $timestamp, $timespan, $window, $series_type, $expand_underlying, $order, $limit, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrpytoaggregatesApi->cryptoSMA: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **crypto_ticker** | **string**| The ticker symbol for which to get simple moving average (SMA) data. | |
| **timestamp** | **string**| Query by timestamp. Either a date with the format YYYY-MM-DD or a millisecond timestamp. | [optional] |
| **timespan** | **string**| The size of the aggregate time window. | [optional] [default to &#39;day&#39;] |
| **window** | **int**| The window size used to calculate the simple moving average (SMA). i.e. a window size of 10 with daily aggregates would result in a 10 day moving average. | [optional] [default to 50] |
| **series_type** | **string**| The price in the aggregate which will be used to calculate the simple moving average. i.e. &#39;close&#39; will result in using close prices to  calculate the simple moving average (SMA). | [optional] [default to &#39;close&#39;] |
| **expand_underlying** | **bool**| Whether or not to include the aggregates used to calculate this indicator in the response. | [optional] [default to false] |
| **order** | **string**| The order in which to return the results, ordered by timestamp. | [optional] [default to &#39;desc&#39;] |
| **limit** | **int**| Limit the number of results returned, default is 10 and max is 5000 | [optional] [default to 10] |
| **timestamp_gte** | **string**| Range by timestamp. | [optional] |
| **timestamp_gt** | **string**| Range by timestamp. | [optional] |
| **timestamp_lte** | **string**| Range by timestamp. | [optional] |
| **timestamp_lt** | **string**| Range by timestamp. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CryptoSMA200Response**](../Model/CryptoSMA200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
