# OpenAPI\Client\StockslasttradeApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**lastTrade()**](StockslasttradeApi.md#lastTrade) | **GET** /v2/last/trade/{stocksTicker} | Last Trade |


## `lastTrade()`

```php
lastTrade($stocks_ticker): \OpenAPI\Client\Model\LastTradeOptions200Response
```

Last Trade

Get the most recent trade for a given stock.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StockslasttradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stocks_ticker = AAPL; // string | The ticker symbol of the stock/equity.

try {
    $result = $apiInstance->lastTrade($stocks_ticker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockslasttradeApi->lastTrade: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stocks_ticker** | **string**| The ticker symbol of the stock/equity. | |

### Return type

[**\OpenAPI\Client\Model\LastTradeOptions200Response**](../Model/LastTradeOptions200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
