# OpenAPI\Client\FxlastquoteApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**lastQuoteCurrencies()**](FxlastquoteApi.md#lastQuoteCurrencies) | **GET** /v1/last_quote/currencies/{from}/{to} | Last Quote for a Currency Pair |


## `lastQuoteCurrencies()`

```php
lastQuoteCurrencies($from, $to): \OpenAPI\Client\Model\LastQuoteCurrencies200Response
```

Last Quote for a Currency Pair

Get the last quote tick for a forex currency pair.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FxlastquoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = AUD; // string | The \"from\" symbol of the pair.
$to = USD; // string | The \"to\" symbol of the pair.

try {
    $result = $apiInstance->lastQuoteCurrencies($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FxlastquoteApi->lastQuoteCurrencies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **string**| The \&quot;from\&quot; symbol of the pair. | |
| **to** | **string**| The \&quot;to\&quot; symbol of the pair. | |

### Return type

[**\OpenAPI\Client\Model\LastQuoteCurrencies200Response**](../Model/LastQuoteCurrencies200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
