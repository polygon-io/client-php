# OpenAPI\Client\IndicesaggregatesApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**indicesEMA()**](IndicesaggregatesApi.md#indicesEMA) | **GET** /v1/indicators/ema/{indicesTicker} | Exponential Moving Average (EMA) |
| [**indicesMACD()**](IndicesaggregatesApi.md#indicesMACD) | **GET** /v1/indicators/macd/{indicesTicker} | Moving Average Convergence/Divergence (MACD) |
| [**indicesRSI()**](IndicesaggregatesApi.md#indicesRSI) | **GET** /v1/indicators/rsi/{indicesTicker} | Relative Strength Index (RSI) |
| [**indicesSMA()**](IndicesaggregatesApi.md#indicesSMA) | **GET** /v1/indicators/sma/{indicesTicker} | Simple Moving Average (SMA) |
| [**v2AggsTickerIndicesTickerPrevGet()**](IndicesaggregatesApi.md#v2AggsTickerIndicesTickerPrevGet) | **GET** /v2/aggs/ticker/{indicesTicker}/prev | Previous Close |
| [**v2AggsTickerIndicesTickerRangeMultiplierTimespanFromToGet()**](IndicesaggregatesApi.md#v2AggsTickerIndicesTickerRangeMultiplierTimespanFromToGet) | **GET** /v2/aggs/ticker/{indicesTicker}/range/{multiplier}/{timespan}/{from}/{to} | Aggregates (Bars) |


## `indicesEMA()`

```php
indicesEMA($indices_ticker, $timestamp, $timespan, $adjusted, $window, $series_type, $expand_underlying, $order, $limit, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt): \OpenAPI\Client\Model\CryptoEMA200Response
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


$apiInstance = new OpenAPI\Client\Api\IndicesaggregatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indices_ticker = I:NDX; // string | The ticker symbol for which to get exponential moving average (EMA) data.
$timestamp = 'timestamp_example'; // string | Query by timestamp. Either a date with the format YYYY-MM-DD or a millisecond timestamp.
$timespan = day; // string | The size of the aggregate time window.
$adjusted = true; // bool | Whether or not the aggregates used to calculate the exponential moving average are adjusted for splits. By default, aggregates are adjusted. Set this to false to get results that are NOT adjusted for splits.
$window = 50; // int | The window size used to calculate the exponential moving average (EMA). i.e. a window size of 10 with daily aggregates would result in a 10 day moving average.
$series_type = close; // string | The value in the aggregate which will be used to calculate the exponential moving average. i.e. 'close' will result in using close values to  calculate the exponential moving average (EMA).
$expand_underlying = false; // bool | Whether or not to include the aggregates used to calculate this indicator in the response.
$order = desc; // string | The order in which to return the results, ordered by timestamp.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 5000
$timestamp_gte = 'timestamp_gte_example'; // string | Range by timestamp.
$timestamp_gt = 'timestamp_gt_example'; // string | Range by timestamp.
$timestamp_lte = 'timestamp_lte_example'; // string | Range by timestamp.
$timestamp_lt = 'timestamp_lt_example'; // string | Range by timestamp.

try {
    $result = $apiInstance->indicesEMA($indices_ticker, $timestamp, $timespan, $adjusted, $window, $series_type, $expand_underlying, $order, $limit, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndicesaggregatesApi->indicesEMA: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indices_ticker** | **string**| The ticker symbol for which to get exponential moving average (EMA) data. | |
| **timestamp** | **string**| Query by timestamp. Either a date with the format YYYY-MM-DD or a millisecond timestamp. | [optional] |
| **timespan** | **string**| The size of the aggregate time window. | [optional] [default to &#39;day&#39;] |
| **adjusted** | **bool**| Whether or not the aggregates used to calculate the exponential moving average are adjusted for splits. By default, aggregates are adjusted. Set this to false to get results that are NOT adjusted for splits. | [optional] [default to true] |
| **window** | **int**| The window size used to calculate the exponential moving average (EMA). i.e. a window size of 10 with daily aggregates would result in a 10 day moving average. | [optional] [default to 50] |
| **series_type** | **string**| The value in the aggregate which will be used to calculate the exponential moving average. i.e. &#39;close&#39; will result in using close values to  calculate the exponential moving average (EMA). | [optional] [default to &#39;close&#39;] |
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indicesMACD()`

```php
indicesMACD($indices_ticker, $timestamp, $timespan, $adjusted, $short_window, $long_window, $signal_window, $series_type, $expand_underlying, $order, $limit, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt): \OpenAPI\Client\Model\CryptoMACD200Response
```

Moving Average Convergence/Divergence (MACD)

Get moving average convergence/divergence (MACD) for a ticker symbol over a given time range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IndicesaggregatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indices_ticker = I:NDX; // string | The ticker symbol for which to get MACD data.
$timestamp = 'timestamp_example'; // string | Query by timestamp. Either a date with the format YYYY-MM-DD or a millisecond timestamp.
$timespan = day; // string | The size of the aggregate time window.
$adjusted = true; // bool | Whether or not the aggregates used to calculate the MACD are adjusted for splits. By default, aggregates are adjusted. Set this to false to get results that are NOT adjusted for splits.
$short_window = 12; // int | The short window size used to calculate MACD data.
$long_window = 26; // int | The long window size used to calculate MACD data.
$signal_window = 9; // int | The window size used to calculate the MACD signal line.
$series_type = close; // string | The value in the aggregate which will be used to calculate the MACD. i.e. 'close' will result in using close values to  calculate the MACD.
$expand_underlying = false; // bool | Whether or not to include the aggregates used to calculate this indicator in the response.
$order = desc; // string | The order in which to return the results, ordered by timestamp.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 5000
$timestamp_gte = 'timestamp_gte_example'; // string | Range by timestamp.
$timestamp_gt = 'timestamp_gt_example'; // string | Range by timestamp.
$timestamp_lte = 'timestamp_lte_example'; // string | Range by timestamp.
$timestamp_lt = 'timestamp_lt_example'; // string | Range by timestamp.

try {
    $result = $apiInstance->indicesMACD($indices_ticker, $timestamp, $timespan, $adjusted, $short_window, $long_window, $signal_window, $series_type, $expand_underlying, $order, $limit, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndicesaggregatesApi->indicesMACD: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indices_ticker** | **string**| The ticker symbol for which to get MACD data. | |
| **timestamp** | **string**| Query by timestamp. Either a date with the format YYYY-MM-DD or a millisecond timestamp. | [optional] |
| **timespan** | **string**| The size of the aggregate time window. | [optional] [default to &#39;day&#39;] |
| **adjusted** | **bool**| Whether or not the aggregates used to calculate the MACD are adjusted for splits. By default, aggregates are adjusted. Set this to false to get results that are NOT adjusted for splits. | [optional] [default to true] |
| **short_window** | **int**| The short window size used to calculate MACD data. | [optional] [default to 12] |
| **long_window** | **int**| The long window size used to calculate MACD data. | [optional] [default to 26] |
| **signal_window** | **int**| The window size used to calculate the MACD signal line. | [optional] [default to 9] |
| **series_type** | **string**| The value in the aggregate which will be used to calculate the MACD. i.e. &#39;close&#39; will result in using close values to  calculate the MACD. | [optional] [default to &#39;close&#39;] |
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indicesRSI()`

```php
indicesRSI($indices_ticker, $timestamp, $timespan, $adjusted, $window, $series_type, $expand_underlying, $order, $limit, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt): \OpenAPI\Client\Model\CryptoRSI200Response
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


$apiInstance = new OpenAPI\Client\Api\IndicesaggregatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indices_ticker = I:NDX; // string | The ticker symbol for which to get relative strength index (RSI) data.
$timestamp = 'timestamp_example'; // string | Query by timestamp. Either a date with the format YYYY-MM-DD or a millisecond timestamp.
$timespan = day; // string | The size of the aggregate time window.
$adjusted = true; // bool | Whether or not the aggregates used to calculate the relative strength index are adjusted for splits. By default, aggregates are adjusted. Set this to false to get results that are NOT adjusted for splits.
$window = 14; // int | The window size used to calculate the relative strength index (RSI).
$series_type = close; // string | The value in the aggregate which will be used to calculate the relative strength index. i.e. 'close' will result in using close values to  calculate the relative strength index (RSI).
$expand_underlying = false; // bool | Whether or not to include the aggregates used to calculate this indicator in the response.
$order = desc; // string | The order in which to return the results, ordered by timestamp.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 5000
$timestamp_gte = 'timestamp_gte_example'; // string | Range by timestamp.
$timestamp_gt = 'timestamp_gt_example'; // string | Range by timestamp.
$timestamp_lte = 'timestamp_lte_example'; // string | Range by timestamp.
$timestamp_lt = 'timestamp_lt_example'; // string | Range by timestamp.

try {
    $result = $apiInstance->indicesRSI($indices_ticker, $timestamp, $timespan, $adjusted, $window, $series_type, $expand_underlying, $order, $limit, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndicesaggregatesApi->indicesRSI: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indices_ticker** | **string**| The ticker symbol for which to get relative strength index (RSI) data. | |
| **timestamp** | **string**| Query by timestamp. Either a date with the format YYYY-MM-DD or a millisecond timestamp. | [optional] |
| **timespan** | **string**| The size of the aggregate time window. | [optional] [default to &#39;day&#39;] |
| **adjusted** | **bool**| Whether or not the aggregates used to calculate the relative strength index are adjusted for splits. By default, aggregates are adjusted. Set this to false to get results that are NOT adjusted for splits. | [optional] [default to true] |
| **window** | **int**| The window size used to calculate the relative strength index (RSI). | [optional] [default to 14] |
| **series_type** | **string**| The value in the aggregate which will be used to calculate the relative strength index. i.e. &#39;close&#39; will result in using close values to  calculate the relative strength index (RSI). | [optional] [default to &#39;close&#39;] |
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indicesSMA()`

```php
indicesSMA($indices_ticker, $timestamp, $timespan, $adjusted, $window, $series_type, $expand_underlying, $order, $limit, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt): \OpenAPI\Client\Model\CryptoSMA200Response
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


$apiInstance = new OpenAPI\Client\Api\IndicesaggregatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indices_ticker = I:NDX; // string | The ticker symbol for which to get simple moving average (SMA) data.
$timestamp = 'timestamp_example'; // string | Query by timestamp. Either a date with the format YYYY-MM-DD or a millisecond timestamp.
$timespan = day; // string | The size of the aggregate time window.
$adjusted = true; // bool | Whether or not the aggregates used to calculate the simple moving average are adjusted for splits. By default, aggregates are adjusted. Set this to false to get results that are NOT adjusted for splits.
$window = 50; // int | The window size used to calculate the simple moving average (SMA). i.e. a window size of 10 with daily aggregates would result in a 10 day moving average.
$series_type = close; // string | The value in the aggregate which will be used to calculate the simple moving average. i.e. 'close' will result in using close values to  calculate the simple moving average (SMA).
$expand_underlying = false; // bool | Whether or not to include the aggregates used to calculate this indicator in the response.
$order = desc; // string | The order in which to return the results, ordered by timestamp.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 5000
$timestamp_gte = 'timestamp_gte_example'; // string | Range by timestamp.
$timestamp_gt = 'timestamp_gt_example'; // string | Range by timestamp.
$timestamp_lte = 'timestamp_lte_example'; // string | Range by timestamp.
$timestamp_lt = 'timestamp_lt_example'; // string | Range by timestamp.

try {
    $result = $apiInstance->indicesSMA($indices_ticker, $timestamp, $timespan, $adjusted, $window, $series_type, $expand_underlying, $order, $limit, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndicesaggregatesApi->indicesSMA: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indices_ticker** | **string**| The ticker symbol for which to get simple moving average (SMA) data. | |
| **timestamp** | **string**| Query by timestamp. Either a date with the format YYYY-MM-DD or a millisecond timestamp. | [optional] |
| **timespan** | **string**| The size of the aggregate time window. | [optional] [default to &#39;day&#39;] |
| **adjusted** | **bool**| Whether or not the aggregates used to calculate the simple moving average are adjusted for splits. By default, aggregates are adjusted. Set this to false to get results that are NOT adjusted for splits. | [optional] [default to true] |
| **window** | **int**| The window size used to calculate the simple moving average (SMA). i.e. a window size of 10 with daily aggregates would result in a 10 day moving average. | [optional] [default to 50] |
| **series_type** | **string**| The value in the aggregate which will be used to calculate the simple moving average. i.e. &#39;close&#39; will result in using close values to  calculate the simple moving average (SMA). | [optional] [default to &#39;close&#39;] |
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2AggsTickerIndicesTickerPrevGet()`

```php
v2AggsTickerIndicesTickerPrevGet($indices_ticker): \OpenAPI\Client\Model\V2AggsTickerIndicesTickerPrevGet200Response
```

Previous Close

Get the previous day's open, high, low, and close (OHLC) for the specified index.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IndicesaggregatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indices_ticker = I:NDX; // string | The ticker symbol of Index.

try {
    $result = $apiInstance->v2AggsTickerIndicesTickerPrevGet($indices_ticker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndicesaggregatesApi->v2AggsTickerIndicesTickerPrevGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indices_ticker** | **string**| The ticker symbol of Index. | |

### Return type

[**\OpenAPI\Client\Model\V2AggsTickerIndicesTickerPrevGet200Response**](../Model/V2AggsTickerIndicesTickerPrevGet200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2AggsTickerIndicesTickerRangeMultiplierTimespanFromToGet()`

```php
v2AggsTickerIndicesTickerRangeMultiplierTimespanFromToGet($indices_ticker, $multiplier, $timespan, $from, $to, $sort, $limit): \OpenAPI\Client\Model\V2AggsTickerIndicesTickerPrevGet200Response
```

Aggregates (Bars)

Get aggregate bars for an index over a given date range in custom time window sizes. <br /> <br /> For example, if timespan = ‘minute’ and multiplier = ‘5’ then 5-minute bars will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IndicesaggregatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indices_ticker = I:NDX; // string | The ticker symbol of Index.
$multiplier = 1; // int | The size of the timespan multiplier.
$timespan = day; // string | The size of the time window.
$from = 2023-03-10; // string | The start of the aggregate time window. Either a date with the format YYYY-MM-DD or a millisecond timestamp.
$to = 2023-03-10; // string | The end of the aggregate time window. Either a date with the format YYYY-MM-DD or a millisecond timestamp.
$sort = asc; // string | Sort the results by timestamp. `asc` will return results in ascending order (oldest at the top), `desc` will return results in descending order (newest at the top).
$limit = 120; // int | Limits the number of base aggregates queried to create the aggregate results. Max 50000 and Default 5000. Read more about how limit is used to calculate aggregate results in our article on <a href=\"https://polygon.io/blog/aggs-api-updates/\" target=\"_blank\" alt=\"Aggregate Data API Improvements\">Aggregate Data API Improvements</a>.

try {
    $result = $apiInstance->v2AggsTickerIndicesTickerRangeMultiplierTimespanFromToGet($indices_ticker, $multiplier, $timespan, $from, $to, $sort, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndicesaggregatesApi->v2AggsTickerIndicesTickerRangeMultiplierTimespanFromToGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indices_ticker** | **string**| The ticker symbol of Index. | |
| **multiplier** | **int**| The size of the timespan multiplier. | |
| **timespan** | **string**| The size of the time window. | |
| **from** | **string**| The start of the aggregate time window. Either a date with the format YYYY-MM-DD or a millisecond timestamp. | |
| **to** | **string**| The end of the aggregate time window. Either a date with the format YYYY-MM-DD or a millisecond timestamp. | |
| **sort** | **string**| Sort the results by timestamp. &#x60;asc&#x60; will return results in ascending order (oldest at the top), &#x60;desc&#x60; will return results in descending order (newest at the top). | [optional] |
| **limit** | **int**| Limits the number of base aggregates queried to create the aggregate results. Max 50000 and Default 5000. Read more about how limit is used to calculate aggregate results in our article on &lt;a href&#x3D;\&quot;https://polygon.io/blog/aggs-api-updates/\&quot; target&#x3D;\&quot;_blank\&quot; alt&#x3D;\&quot;Aggregate Data API Improvements\&quot;&gt;Aggregate Data API Improvements&lt;/a&gt;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2AggsTickerIndicesTickerPrevGet200Response**](../Model/V2AggsTickerIndicesTickerPrevGet200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
