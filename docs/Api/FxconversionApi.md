# OpenAPI\Client\FxconversionApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**realTimeCurrencyConversion()**](FxconversionApi.md#realTimeCurrencyConversion) | **GET** /v1/conversion/{from}/{to} | Real-time Currency Conversion |


## `realTimeCurrencyConversion()`

```php
realTimeCurrencyConversion($from, $to, $amount, $precision): \OpenAPI\Client\Model\RealTimeCurrencyConversion200Response
```

Real-time Currency Conversion

Get currency conversions using the latest market conversion rates. Note than you can convert in both directions. For example USD to CAD or CAD to USD.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FxconversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = AUD; // string | The \"from\" symbol of the pair.
$to = USD; // string | The \"to\" symbol of the pair.
$amount = 100; // float | The amount to convert, with a decimal.
$precision = 2; // int | The decimal precision of the conversion. Defaults to 2 which is 2 decimal places accuracy.

try {
    $result = $apiInstance->realTimeCurrencyConversion($from, $to, $amount, $precision);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FxconversionApi->realTimeCurrencyConversion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **string**| The \&quot;from\&quot; symbol of the pair. | |
| **to** | **string**| The \&quot;to\&quot; symbol of the pair. | |
| **amount** | **float**| The amount to convert, with a decimal. | [optional] [default to 1] |
| **precision** | **int**| The decimal precision of the conversion. Defaults to 2 which is 2 decimal places accuracy. | [optional] [default to 2] |

### Return type

[**\OpenAPI\Client\Model\RealTimeCurrencyConversion200Response**](../Model/RealTimeCurrencyConversion200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
