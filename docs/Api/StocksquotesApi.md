# OpenAPI\Client\StocksquotesApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**quotes()**](StocksquotesApi.md#quotes) | **GET** /v3/quotes/{stockTicker} | Quotes (NBBO) |
| [**v2TicksStocksNbboTickerDateGet()**](StocksquotesApi.md#v2TicksStocksNbboTickerDateGet) | **GET** /v2/ticks/stocks/nbbo/{ticker}/{date} | Quotes (NBBO) |


## `quotes()`

```php
quotes($stock_ticker, $timestamp, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt, $order, $limit, $sort): \OpenAPI\Client\Model\Quotes200Response
```

Quotes (NBBO)

Get NBBO quotes for a ticker symbol in a given time range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StocksquotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stock_ticker = AAPL; // string | The ticker symbol to get quotes for.
$timestamp = 'timestamp_example'; // string | Query by timestamp. Either a date with the format YYYY-MM-DD or a nanosecond timestamp.
$timestamp_gte = 'timestamp_gte_example'; // string | Range by timestamp.
$timestamp_gt = 'timestamp_gt_example'; // string | Range by timestamp.
$timestamp_lte = 'timestamp_lte_example'; // string | Range by timestamp.
$timestamp_lt = 'timestamp_lt_example'; // string | Range by timestamp.
$order = asc; // string | Order results based on the `sort` field.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 50000.
$sort = timestamp; // string | Sort field used for ordering.

try {
    $result = $apiInstance->quotes($stock_ticker, $timestamp, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt, $order, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksquotesApi->quotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stock_ticker** | **string**| The ticker symbol to get quotes for. | |
| **timestamp** | **string**| Query by timestamp. Either a date with the format YYYY-MM-DD or a nanosecond timestamp. | [optional] |
| **timestamp_gte** | **string**| Range by timestamp. | [optional] |
| **timestamp_gt** | **string**| Range by timestamp. | [optional] |
| **timestamp_lte** | **string**| Range by timestamp. | [optional] |
| **timestamp_lt** | **string**| Range by timestamp. | [optional] |
| **order** | **string**| Order results based on the &#x60;sort&#x60; field. | [optional] [default to &#39;desc&#39;] |
| **limit** | **int**| Limit the number of results returned, default is 10 and max is 50000. | [optional] [default to 10] |
| **sort** | **string**| Sort field used for ordering. | [optional] [default to &#39;timestamp&#39;] |

### Return type

[**\OpenAPI\Client\Model\Quotes200Response**](../Model/Quotes200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2TicksStocksNbboTickerDateGet()`

```php
v2TicksStocksNbboTickerDateGet($ticker, $date, $timestamp, $timestamp_limit, $reverse, $limit): \OpenAPI\Client\Model\V2TicksStocksNbboTickerDateGet200Response
```

Quotes (NBBO)

Get NBBO quotes for a given ticker symbol on a specified date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StocksquotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticker = AAPL; // string | The ticker symbol we want quotes for.
$date = 2020-10-14; // \DateTime | The date/day of the quotes to retrieve in the format YYYY-MM-DD.
$timestamp = 56; // int | The timestamp offset, used for pagination. This is the offset at which to start the results. Using the `timestamp` of the last result as the offset will give you the next page of results.
$timestamp_limit = 56; // int | The maximum timestamp allowed in the results.
$reverse = true; // bool | Reverse the order of the results.
$limit = 10; // int | Limit the size of the response, max 50000 and default 5000.

try {
    $result = $apiInstance->v2TicksStocksNbboTickerDateGet($ticker, $date, $timestamp, $timestamp_limit, $reverse, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksquotesApi->v2TicksStocksNbboTickerDateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticker** | **string**| The ticker symbol we want quotes for. | |
| **date** | **\DateTime**| The date/day of the quotes to retrieve in the format YYYY-MM-DD. | |
| **timestamp** | **int**| The timestamp offset, used for pagination. This is the offset at which to start the results. Using the &#x60;timestamp&#x60; of the last result as the offset will give you the next page of results. | [optional] |
| **timestamp_limit** | **int**| The maximum timestamp allowed in the results. | [optional] |
| **reverse** | **bool**| Reverse the order of the results. | [optional] |
| **limit** | **int**| Limit the size of the response, max 50000 and default 5000. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2TicksStocksNbboTickerDateGet200Response**](../Model/V2TicksStocksNbboTickerDateGet200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
