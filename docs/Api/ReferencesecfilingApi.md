# OpenAPI\Client\ReferencesecfilingApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getFiling()**](ReferencesecfilingApi.md#getFiling) | **GET** /v1/reference/sec/filings/{filing_id} | SEC Filing |


## `getFiling()`

```php
getFiling($filing_id): \OpenAPI\Client\Model\ListFilings200ResponseResultsInner
```

SEC Filing

Get filing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferencesecfilingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filing_id = 'filing_id_example'; // string | Select by filing id.

try {
    $result = $apiInstance->getFiling($filing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesecfilingApi->getFiling: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filing_id** | **string**| Select by filing id. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListFilings200ResponseResultsInner**](../Model/ListFilings200ResponseResultsInner.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
