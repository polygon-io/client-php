# OpenAPI\Client\StockslastquoteApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**lastQuote()**](StockslastquoteApi.md#lastQuote) | **GET** /v2/last/nbbo/{stocksTicker} | Last Quote |


## `lastQuote()`

```php
lastQuote($stocks_ticker): \OpenAPI\Client\Model\LastQuote200Response
```

Last Quote

Get the most recent NBBO (Quote) tick for a given stock.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StockslastquoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stocks_ticker = AAPL; // string | The ticker symbol of the stock/equity.

try {
    $result = $apiInstance->lastQuote($stocks_ticker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockslastquoteApi->lastQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stocks_ticker** | **string**| The ticker symbol of the stock/equity. | |

### Return type

[**\OpenAPI\Client\Model\LastQuote200Response**](../Model/LastQuote200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
