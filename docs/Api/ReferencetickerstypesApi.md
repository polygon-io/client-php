# OpenAPI\Client\ReferencetickerstypesApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listTickerTypes()**](ReferencetickerstypesApi.md#listTickerTypes) | **GET** /v3/reference/tickers/types | Ticker Types |


## `listTickerTypes()`

```php
listTickerTypes($asset_class, $locale): \OpenAPI\Client\Model\ListTickerTypes200Response
```

Ticker Types

List all ticker types that Polygon.io has.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferencetickerstypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_class = stocks; // string | Filter by asset class.
$locale = us; // string | Filter by locale.

try {
    $result = $apiInstance->listTickerTypes($asset_class, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencetickerstypesApi->listTickerTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_class** | **string**| Filter by asset class. | [optional] |
| **locale** | **string**| Filter by locale. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListTickerTypes200Response**](../Model/ListTickerTypes200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
