# OpenAPI\Client\IndicessnapshotApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**indicesSnapshot()**](IndicessnapshotApi.md#indicesSnapshot) | **GET** /v3/snapshot/indices | Indices Snapshot |


## `indicesSnapshot()`

```php
indicesSnapshot($ticker_any_of, $ticker, $ticker_gte, $ticker_gt, $ticker_lte, $ticker_lt, $order, $limit, $sort): \OpenAPI\Client\Model\IndicesSnapshot200Response
```

Indices Snapshot

Get a Snapshot of indices data for said tickers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IndicessnapshotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticker_any_of = I:DJI; // string | Comma separated list of tickers, up to a maximum of 250. If no tickers are passed then all results will be returned in a paginated manner.  Warning: The maximum number of characters allowed in a URL are subject to your technology stack.
$ticker = 'ticker_example'; // string | Search a range of tickers lexicographically.
$ticker_gte = 'ticker_gte_example'; // string | Range by ticker.
$ticker_gt = 'ticker_gt_example'; // string | Range by ticker.
$ticker_lte = 'ticker_lte_example'; // string | Range by ticker.
$ticker_lt = 'ticker_lt_example'; // string | Range by ticker.
$order = asc; // string | Order results based on the `sort` field.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 250.
$sort = ticker; // string | Sort field used for ordering.

try {
    $result = $apiInstance->indicesSnapshot($ticker_any_of, $ticker, $ticker_gte, $ticker_gt, $ticker_lte, $ticker_lt, $order, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndicessnapshotApi->indicesSnapshot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticker_any_of** | **string**| Comma separated list of tickers, up to a maximum of 250. If no tickers are passed then all results will be returned in a paginated manner.  Warning: The maximum number of characters allowed in a URL are subject to your technology stack. | [optional] |
| **ticker** | **string**| Search a range of tickers lexicographically. | [optional] |
| **ticker_gte** | **string**| Range by ticker. | [optional] |
| **ticker_gt** | **string**| Range by ticker. | [optional] |
| **ticker_lte** | **string**| Range by ticker. | [optional] |
| **ticker_lt** | **string**| Range by ticker. | [optional] |
| **order** | **string**| Order results based on the &#x60;sort&#x60; field. | [optional] |
| **limit** | **int**| Limit the number of results returned, default is 10 and max is 250. | [optional] [default to 10] |
| **sort** | **string**| Sort field used for ordering. | [optional] [default to &#39;ticker&#39;] |

### Return type

[**\OpenAPI\Client\Model\IndicesSnapshot200Response**](../Model/IndicesSnapshot200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
