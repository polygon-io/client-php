# OpenAPI\Client\StocksopenCloseApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1OpenCloseIndicesTickerDateGet()**](StocksopenCloseApi.md#v1OpenCloseIndicesTickerDateGet) | **GET** /v1/open-close/{indicesTicker}/{date} | Daily Open/Close |
| [**v1OpenCloseStocksTickerDateGet()**](StocksopenCloseApi.md#v1OpenCloseStocksTickerDateGet) | **GET** /v1/open-close/{stocksTicker}/{date} | Daily Open/Close |


## `v1OpenCloseIndicesTickerDateGet()`

```php
v1OpenCloseIndicesTickerDateGet($indices_ticker, $date): \OpenAPI\Client\Model\V1OpenCloseIndicesTickerDateGet200Response
```

Daily Open/Close

Get the open, close and afterhours values of a index symbol on a certain date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StocksopenCloseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indices_ticker = I:NDX; // string | The ticker symbol of Index.
$date = 2023-03-10; // string | The date of the requested open/close in the format YYYY-MM-DD.

try {
    $result = $apiInstance->v1OpenCloseIndicesTickerDateGet($indices_ticker, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksopenCloseApi->v1OpenCloseIndicesTickerDateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indices_ticker** | **string**| The ticker symbol of Index. | |
| **date** | **string**| The date of the requested open/close in the format YYYY-MM-DD. | |

### Return type

[**\OpenAPI\Client\Model\V1OpenCloseIndicesTickerDateGet200Response**](../Model/V1OpenCloseIndicesTickerDateGet200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OpenCloseStocksTickerDateGet()`

```php
v1OpenCloseStocksTickerDateGet($stocks_ticker, $date, $adjusted): \OpenAPI\Client\Model\V1OpenCloseOptionsTickerDateGet200Response
```

Daily Open/Close

Get the open, close and afterhours prices of a stock symbol on a certain date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StocksopenCloseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stocks_ticker = AAPL; // string | Specify a case-sensitive ticker symbol. For example, AAPL represents Apple Inc.
$date = 2023-01-09; // \DateTime | The date of the requested open/close in the format YYYY-MM-DD.
$adjusted = true; // bool | Whether or not the results are adjusted for splits.  By default, results are adjusted. Set this to false to get results that are NOT adjusted for splits.

try {
    $result = $apiInstance->v1OpenCloseStocksTickerDateGet($stocks_ticker, $date, $adjusted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksopenCloseApi->v1OpenCloseStocksTickerDateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stocks_ticker** | **string**| Specify a case-sensitive ticker symbol. For example, AAPL represents Apple Inc. | |
| **date** | **\DateTime**| The date of the requested open/close in the format YYYY-MM-DD. | |
| **adjusted** | **bool**| Whether or not the results are adjusted for splits.  By default, results are adjusted. Set this to false to get results that are NOT adjusted for splits. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V1OpenCloseOptionsTickerDateGet200Response**](../Model/V1OpenCloseOptionsTickerDateGet200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
