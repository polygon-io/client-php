# OpenAPI\Client\CryptotradesApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**tradesCrypto()**](CryptotradesApi.md#tradesCrypto) | **GET** /v3/trades/{cryptoTicker} | Trades |
| [**v1HistoricCryptoFromToDateGet()**](CryptotradesApi.md#v1HistoricCryptoFromToDateGet) | **GET** /v1/historic/crypto/{from}/{to}/{date} | Historic Crypto Trades |


## `tradesCrypto()`

```php
tradesCrypto($crypto_ticker, $timestamp, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt, $order, $limit, $sort): \OpenAPI\Client\Model\TradesCrypto200Response
```

Trades

Get trades for a crypto ticker symbol in a given time range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CryptotradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crypto_ticker = X:BTC-USD; // string | The ticker symbol to get trades for.
$timestamp = 'timestamp_example'; // string | Query by trade timestamp. Either a date with the format YYYY-MM-DD or a nanosecond timestamp.
$timestamp_gte = 'timestamp_gte_example'; // string | Range by timestamp.
$timestamp_gt = 'timestamp_gt_example'; // string | Range by timestamp.
$timestamp_lte = 'timestamp_lte_example'; // string | Range by timestamp.
$timestamp_lt = 'timestamp_lt_example'; // string | Range by timestamp.
$order = asc; // string | Order results based on the `sort` field.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 50000.
$sort = timestamp; // string | Sort field used for ordering.

try {
    $result = $apiInstance->tradesCrypto($crypto_ticker, $timestamp, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt, $order, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CryptotradesApi->tradesCrypto: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **crypto_ticker** | **string**| The ticker symbol to get trades for. | |
| **timestamp** | **string**| Query by trade timestamp. Either a date with the format YYYY-MM-DD or a nanosecond timestamp. | [optional] |
| **timestamp_gte** | **string**| Range by timestamp. | [optional] |
| **timestamp_gt** | **string**| Range by timestamp. | [optional] |
| **timestamp_lte** | **string**| Range by timestamp. | [optional] |
| **timestamp_lt** | **string**| Range by timestamp. | [optional] |
| **order** | **string**| Order results based on the &#x60;sort&#x60; field. | [optional] [default to &#39;desc&#39;] |
| **limit** | **int**| Limit the number of results returned, default is 10 and max is 50000. | [optional] [default to 10] |
| **sort** | **string**| Sort field used for ordering. | [optional] [default to &#39;timestamp&#39;] |

### Return type

[**\OpenAPI\Client\Model\TradesCrypto200Response**](../Model/TradesCrypto200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1HistoricCryptoFromToDateGet()`

```php
v1HistoricCryptoFromToDateGet($from, $to, $date, $offset, $limit): \OpenAPI\Client\Model\V1HistoricCryptoFromToDateGet200Response
```

Historic Crypto Trades

Get historic trade ticks for a cryptocurrency pair.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CryptotradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = BTC; // string | The \"from\" symbol of the crypto pair.
$to = USD; // string | The \"to\" symbol of the crypto pair.
$date = 2020-10-14; // \DateTime | The date/day of the historic ticks to retrieve.
$offset = 56; // int | The timestamp offset, used for pagination. This is the offset at which to start the results. Using the `timestamp` of the last result as the offset will give you the next page of results.
$limit = 100; // int | Limit the size of the response, max 10000.

try {
    $result = $apiInstance->v1HistoricCryptoFromToDateGet($from, $to, $date, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CryptotradesApi->v1HistoricCryptoFromToDateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **string**| The \&quot;from\&quot; symbol of the crypto pair. | |
| **to** | **string**| The \&quot;to\&quot; symbol of the crypto pair. | |
| **date** | **\DateTime**| The date/day of the historic ticks to retrieve. | |
| **offset** | **int**| The timestamp offset, used for pagination. This is the offset at which to start the results. Using the &#x60;timestamp&#x60; of the last result as the offset will give you the next page of results. | [optional] |
| **limit** | **int**| Limit the size of the response, max 10000. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V1HistoricCryptoFromToDateGet200Response**](../Model/V1HistoricCryptoFromToDateGet200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
