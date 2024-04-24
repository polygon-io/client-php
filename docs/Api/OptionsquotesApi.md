# OpenAPI\Client\OptionsquotesApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**quotesOptions()**](OptionsquotesApi.md#quotesOptions) | **GET** /v3/quotes/{optionsTicker} | Quotes |


## `quotesOptions()`

```php
quotesOptions($options_ticker, $timestamp, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt, $order, $limit, $sort): \OpenAPI\Client\Model\QuotesOptions200Response
```

Quotes

Get quotes for an options ticker symbol in a given time range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OptionsquotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$options_ticker = O:SPY241220P00720000; // string | The ticker symbol to get quotes for.
$timestamp = 'timestamp_example'; // string | Query by timestamp. Either a date with the format YYYY-MM-DD or a nanosecond timestamp.
$timestamp_gte = 'timestamp_gte_example'; // string | Range by timestamp.
$timestamp_gt = 'timestamp_gt_example'; // string | Range by timestamp.
$timestamp_lte = 'timestamp_lte_example'; // string | Range by timestamp.
$timestamp_lt = 'timestamp_lt_example'; // string | Range by timestamp.
$order = asc; // string | Order results based on the `sort` field.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 50000.
$sort = timestamp; // string | Sort field used for ordering.

try {
    $result = $apiInstance->quotesOptions($options_ticker, $timestamp, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt, $order, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsquotesApi->quotesOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **options_ticker** | **string**| The ticker symbol to get quotes for. | |
| **timestamp** | **string**| Query by timestamp. Either a date with the format YYYY-MM-DD or a nanosecond timestamp. | [optional] |
| **timestamp_gte** | **string**| Range by timestamp. | [optional] |
| **timestamp_gt** | **string**| Range by timestamp. | [optional] |
| **timestamp_lte** | **string**| Range by timestamp. | [optional] |
| **timestamp_lt** | **string**| Range by timestamp. | [optional] |
| **order** | **string**| Order results based on the &#x60;sort&#x60; field. | [optional] [default to &#39;desc&#39;] |
| **limit** | **int**| Limit the number of results returned, default is 10 and max is 50000. | [optional] [default to 10] |
| **sort** | **string**| Sort field used for ordering. | [optional] [default to &#39;timestamp&#39;] |

### Return type

[**\OpenAPI\Client\Model\QuotesOptions200Response**](../Model/QuotesOptions200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
