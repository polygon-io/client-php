# OpenAPI\Client\FxtradesApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1HistoricForexFromToDateGet()**](FxtradesApi.md#v1HistoricForexFromToDateGet) | **GET** /v1/historic/forex/{from}/{to}/{date} | Historic Forex Ticks |


## `v1HistoricForexFromToDateGet()`

```php
v1HistoricForexFromToDateGet($from, $to, $date, $offset, $limit): \OpenAPI\Client\Model\V1HistoricForexFromToDateGet200Response
```

Historic Forex Ticks

Get historic ticks for a forex currency pair.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FxtradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = AUD; // string | The \"from\" symbol of the currency pair.  Example: For **USD/JPY** the `from` would be **USD**.
$to = USD; // string | The \"to\" symbol of the currency pair.  Example: For **USD/JPY** the `to` would be **JPY**.
$date = 2020-10-14; // \DateTime | The date/day of the historic ticks to retrieve.
$offset = 56; // int | The timestamp offset, used for pagination. This is the offset at which to start the results. Using the `timestamp` of the last result as the offset will give you the next page of results.
$limit = 100; // int | Limit the size of the response, max 10000.

try {
    $result = $apiInstance->v1HistoricForexFromToDateGet($from, $to, $date, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FxtradesApi->v1HistoricForexFromToDateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **string**| The \&quot;from\&quot; symbol of the currency pair.  Example: For **USD/JPY** the &#x60;from&#x60; would be **USD**. | |
| **to** | **string**| The \&quot;to\&quot; symbol of the currency pair.  Example: For **USD/JPY** the &#x60;to&#x60; would be **JPY**. | |
| **date** | **\DateTime**| The date/day of the historic ticks to retrieve. | |
| **offset** | **int**| The timestamp offset, used for pagination. This is the offset at which to start the results. Using the &#x60;timestamp&#x60; of the last result as the offset will give you the next page of results. | [optional] |
| **limit** | **int**| Limit the size of the response, max 10000. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V1HistoricForexFromToDateGet200Response**](../Model/V1HistoricForexFromToDateGet200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
