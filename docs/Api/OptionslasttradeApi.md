# OpenAPI\Client\OptionslasttradeApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**lastTradeOptions()**](OptionslasttradeApi.md#lastTradeOptions) | **GET** /v2/last/trade/{optionsTicker} | Last Trade |


## `lastTradeOptions()`

```php
lastTradeOptions($options_ticker): \OpenAPI\Client\Model\LastTradeOptions200Response
```

Last Trade

Get the most recent trade for a given options contract.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OptionslasttradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$options_ticker = O:TSLA210903C00700000; // string | The ticker symbol of the options contract.

try {
    $result = $apiInstance->lastTradeOptions($options_ticker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionslasttradeApi->lastTradeOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **options_ticker** | **string**| The ticker symbol of the options contract. | |

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
