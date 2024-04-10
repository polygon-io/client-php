# OpenAPI\Client\CryptoopenCloseApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1OpenCloseCryptoFromToDateGet()**](CryptoopenCloseApi.md#v1OpenCloseCryptoFromToDateGet) | **GET** /v1/open-close/crypto/{from}/{to}/{date} | Daily Open/Close |


## `v1OpenCloseCryptoFromToDateGet()`

```php
v1OpenCloseCryptoFromToDateGet($from, $to, $date, $adjusted): \OpenAPI\Client\Model\V1OpenCloseCryptoFromToDateGet200Response
```

Daily Open/Close

Get the open, close prices of a cryptocurrency symbol on a certain day.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CryptoopenCloseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = BTC; // string | The \"from\" symbol of the pair.
$to = USD; // string | The \"to\" symbol of the pair.
$date = 2023-01-09; // \DateTime | The date of the requested open/close in the format YYYY-MM-DD.
$adjusted = true; // bool | Whether or not the results are adjusted for splits.  By default, results are adjusted. Set this to false to get results that are NOT adjusted for splits.

try {
    $result = $apiInstance->v1OpenCloseCryptoFromToDateGet($from, $to, $date, $adjusted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CryptoopenCloseApi->v1OpenCloseCryptoFromToDateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **string**| The \&quot;from\&quot; symbol of the pair. | |
| **to** | **string**| The \&quot;to\&quot; symbol of the pair. | |
| **date** | **\DateTime**| The date of the requested open/close in the format YYYY-MM-DD. | |
| **adjusted** | **bool**| Whether or not the results are adjusted for splits.  By default, results are adjusted. Set this to false to get results that are NOT adjusted for splits. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V1OpenCloseCryptoFromToDateGet200Response**](../Model/V1OpenCloseCryptoFromToDateGet200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
