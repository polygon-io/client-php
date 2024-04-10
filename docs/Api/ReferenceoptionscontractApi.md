# OpenAPI\Client\ReferenceoptionscontractApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOptionsContract()**](ReferenceoptionscontractApi.md#getOptionsContract) | **GET** /v3/reference/options/contracts/{options_ticker} | Options Contract |


## `getOptionsContract()`

```php
getOptionsContract($options_ticker, $as_of): \OpenAPI\Client\Model\GetOptionsContract200Response
```

Options Contract

Get an options contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferenceoptionscontractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$options_ticker = O:EVRI240119C00002500; // string | Query for a contract by options ticker. You can learn more about the structure of options tickers [here](https://polygon.io/blog/how-to-read-a-stock-options-ticker/).
$as_of = 'as_of_example'; // string | Specify a point in time for the contract as of this date with format YYYY-MM-DD. Defaults to today's date.

try {
    $result = $apiInstance->getOptionsContract($options_ticker, $as_of);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceoptionscontractApi->getOptionsContract: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **options_ticker** | **string**| Query for a contract by options ticker. You can learn more about the structure of options tickers [here](https://polygon.io/blog/how-to-read-a-stock-options-ticker/). | |
| **as_of** | **string**| Specify a point in time for the contract as of this date with format YYYY-MM-DD. Defaults to today&#39;s date. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetOptionsContract200Response**](../Model/GetOptionsContract200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
