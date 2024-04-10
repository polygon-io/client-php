# OpenAPI\Client\ReferenceconditionsApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listConditions()**](ReferenceconditionsApi.md#listConditions) | **GET** /v3/reference/conditions | Conditions |


## `listConditions()`

```php
listConditions($asset_class, $data_type, $id, $sip, $order, $limit, $sort): \OpenAPI\Client\Model\ListConditions200Response
```

Conditions

List all conditions that Polygon.io uses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferenceconditionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_class = stocks; // string | Filter for conditions within a given asset class.
$data_type = trade; // string | Filter by data type.
$id = 1; // int | Filter for conditions with a given ID.
$sip = CTA; // string | Filter by SIP. If the condition contains a mapping for that SIP, the condition will be returned.
$order = asc; // string | Order results based on the `sort` field.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 1000.
$sort = asset_class; // string | Sort field used for ordering.

try {
    $result = $apiInstance->listConditions($asset_class, $data_type, $id, $sip, $order, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceconditionsApi->listConditions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_class** | **string**| Filter for conditions within a given asset class. | [optional] |
| **data_type** | **string**| Filter by data type. | [optional] |
| **id** | **int**| Filter for conditions with a given ID. | [optional] |
| **sip** | **string**| Filter by SIP. If the condition contains a mapping for that SIP, the condition will be returned. | [optional] |
| **order** | **string**| Order results based on the &#x60;sort&#x60; field. | [optional] |
| **limit** | **int**| Limit the number of results returned, default is 10 and max is 1000. | [optional] [default to 10] |
| **sort** | **string**| Sort field used for ordering. | [optional] [default to &#39;asset_class&#39;] |

### Return type

[**\OpenAPI\Client\Model\ListConditions200Response**](../Model/ListConditions200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
