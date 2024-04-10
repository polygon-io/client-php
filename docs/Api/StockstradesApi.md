# OpenAPI\Client\StockstradesApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**trades()**](StockstradesApi.md#trades) | **GET** /v3/trades/{stockTicker} | Trades |
| [**v2TicksStocksTradesTickerDateGet()**](StockstradesApi.md#v2TicksStocksTradesTickerDateGet) | **GET** /v2/ticks/stocks/trades/{ticker}/{date} | Trades |


## `trades()`

```php
trades($stock_ticker, $timestamp, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt, $order, $limit, $sort): \OpenAPI\Client\Model\Trades200Response
```

Trades

Get trades for a ticker symbol in a given time range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StockstradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stock_ticker = AAPL; // string | The ticker symbol to get trades for.
$timestamp = 'timestamp_example'; // string | Query by trade timestamp. Either a date with the format YYYY-MM-DD or a nanosecond timestamp.
$timestamp_gte = 'timestamp_gte_example'; // string | Range by timestamp.
$timestamp_gt = 'timestamp_gt_example'; // string | Range by timestamp.
$timestamp_lte = 'timestamp_lte_example'; // string | Range by timestamp.
$timestamp_lt = 'timestamp_lt_example'; // string | Range by timestamp.
$order = asc; // string | Order results based on the `sort` field.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 50000.
$sort = timestamp; // string | Sort field used for ordering.

try {
    $result = $apiInstance->trades($stock_ticker, $timestamp, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt, $order, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockstradesApi->trades: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stock_ticker** | **string**| The ticker symbol to get trades for. | |
| **timestamp** | **string**| Query by trade timestamp. Either a date with the format YYYY-MM-DD or a nanosecond timestamp. | [optional] |
| **timestamp_gte** | **string**| Range by timestamp. | [optional] |
| **timestamp_gt** | **string**| Range by timestamp. | [optional] |
| **timestamp_lte** | **string**| Range by timestamp. | [optional] |
| **timestamp_lt** | **string**| Range by timestamp. | [optional] |
| **order** | **string**| Order results based on the &#x60;sort&#x60; field. | [optional] [default to &#39;desc&#39;] |
| **limit** | **int**| Limit the number of results returned, default is 10 and max is 50000. | [optional] [default to 10] |
| **sort** | **string**| Sort field used for ordering. | [optional] [default to &#39;timestamp&#39;] |

### Return type

[**\OpenAPI\Client\Model\Trades200Response**](../Model/Trades200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2TicksStocksTradesTickerDateGet()`

```php
v2TicksStocksTradesTickerDateGet($ticker, $date, $timestamp, $timestamp_limit, $reverse, $limit): \OpenAPI\Client\Model\V2TicksStocksTradesTickerDateGet200Response
```

Trades

Get trades for a given ticker symbol on a specified date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StockstradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticker = AAPL; // string | The ticker symbol we want trades for.
$date = 2020-10-14; // \DateTime | The date/day of the trades to retrieve in the format YYYY-MM-DD.
$timestamp = 56; // int | The timestamp offset, used for pagination. This is the offset at which to start the results. Using the `timestamp` of the last result as the offset will give you the next page of results.
$timestamp_limit = 56; // int | The maximum timestamp allowed in the results.
$reverse = true; // bool | Reverse the order of the results.
$limit = 10; // int | Limit the size of the response, max 50000 and default 5000.

try {
    $result = $apiInstance->v2TicksStocksTradesTickerDateGet($ticker, $date, $timestamp, $timestamp_limit, $reverse, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockstradesApi->v2TicksStocksTradesTickerDateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticker** | **string**| The ticker symbol we want trades for. | |
| **date** | **\DateTime**| The date/day of the trades to retrieve in the format YYYY-MM-DD. | |
| **timestamp** | **int**| The timestamp offset, used for pagination. This is the offset at which to start the results. Using the &#x60;timestamp&#x60; of the last result as the offset will give you the next page of results. | [optional] |
| **timestamp_limit** | **int**| The maximum timestamp allowed in the results. | [optional] |
| **reverse** | **bool**| Reverse the order of the results. | [optional] |
| **limit** | **int**| Limit the size of the response, max 50000 and default 5000. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2TicksStocksTradesTickerDateGet200Response**](../Model/V2TicksStocksTradesTickerDateGet200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
