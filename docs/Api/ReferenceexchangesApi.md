# OpenAPI\Client\ReferenceexchangesApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listExchanges()**](ReferenceexchangesApi.md#listExchanges) | **GET** /v3/reference/exchanges | Exchanges |


## `listExchanges()`

```php
listExchanges($asset_class, $locale): \OpenAPI\Client\Model\ListExchanges200Response
```

Exchanges

List all exchanges that Polygon.io knows about.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferenceexchangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_class = stocks; // string | Filter by asset class.
$locale = us; // string | Filter by locale.

try {
    $result = $apiInstance->listExchanges($asset_class, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceexchangesApi->listExchanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_class** | **string**| Filter by asset class. | [optional] |
| **locale** | **string**| Filter by locale. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListExchanges200Response**](../Model/ListExchanges200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
