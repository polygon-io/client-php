# OpenAPI\Client\DefaultApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**snapshotSummary()**](DefaultApi.md#snapshotSummary) | **GET** /v1/summaries | Summaries |
| [**snapshots()**](DefaultApi.md#snapshots) | **GET** /v3/snapshot | Universal Snapshot |


## `snapshotSummary()`

```php
snapshotSummary($ticker_any_of): \OpenAPI\Client\Model\SnapshotSummary200Response
```

Summaries

Get everything needed to visualize the tick-by-tick movement of a list of tickers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticker_any_of = NCLH,O:SPY250321C00380000,C:EURUSD,X:BTCUSD; // string | Comma separated list of tickers. This API currently supports Stocks/Equities, Crypto, Options, and Forex. See <a rel=\"nofollow\" target=\"_blank\" href=\"https://polygon.io/docs/stocks/get_v3_reference_tickers\">the tickers endpoint</a> for more details on supported tickers. If no tickers are passed then no results will be returned.  Warning: The maximum number of characters allowed in a URL are subject to your technology stack.

try {
    $result = $apiInstance->snapshotSummary($ticker_any_of);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->snapshotSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticker_any_of** | **string**| Comma separated list of tickers. This API currently supports Stocks/Equities, Crypto, Options, and Forex. See &lt;a rel&#x3D;\&quot;nofollow\&quot; target&#x3D;\&quot;_blank\&quot; href&#x3D;\&quot;https://polygon.io/docs/stocks/get_v3_reference_tickers\&quot;&gt;the tickers endpoint&lt;/a&gt; for more details on supported tickers. If no tickers are passed then no results will be returned.  Warning: The maximum number of characters allowed in a URL are subject to your technology stack. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SnapshotSummary200Response**](../Model/SnapshotSummary200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `snapshots()`

```php
snapshots($ticker, $type, $ticker_gte, $ticker_gt, $ticker_lte, $ticker_lt, $ticker_any_of, $order, $limit, $sort): \OpenAPI\Client\Model\Snapshots200Response
```

Universal Snapshot

Get snapshots for assets of all types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticker = 'ticker_example'; // string
$type = 'type_example'; // string | Query by the type of asset.
$ticker_gte = 'ticker_gte_example'; // string | Range by ticker.
$ticker_gt = 'ticker_gt_example'; // string | Range by ticker.
$ticker_lte = 'ticker_lte_example'; // string | Range by ticker.
$ticker_lt = 'ticker_lt_example'; // string | Range by ticker.
$ticker_any_of = NCLH,O:SPY250321C00380000,C:EURUSD,X:BTCUSD,I:SPX; // string | Comma separated list of tickers, up to a maximum of 250. If no tickers are passed then all results will be returned in a paginated manner.  Warning: The maximum number of characters allowed in a URL are subject to your technology stack.
$order = asc; // string | Order results based on the `sort` field.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 250.
$sort = ticker; // string | Sort field used for ordering.

try {
    $result = $apiInstance->snapshots($ticker, $type, $ticker_gte, $ticker_gt, $ticker_lte, $ticker_lt, $ticker_any_of, $order, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->snapshots: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticker** | **string**|  | [optional] |
| **type** | **string**| Query by the type of asset. | [optional] |
| **ticker_gte** | **string**| Range by ticker. | [optional] |
| **ticker_gt** | **string**| Range by ticker. | [optional] |
| **ticker_lte** | **string**| Range by ticker. | [optional] |
| **ticker_lt** | **string**| Range by ticker. | [optional] |
| **ticker_any_of** | **string**| Comma separated list of tickers, up to a maximum of 250. If no tickers are passed then all results will be returned in a paginated manner.  Warning: The maximum number of characters allowed in a URL are subject to your technology stack. | [optional] |
| **order** | **string**| Order results based on the &#x60;sort&#x60; field. | [optional] |
| **limit** | **int**| Limit the number of results returned, default is 10 and max is 250. | [optional] [default to 10] |
| **sort** | **string**| Sort field used for ordering. | [optional] [default to &#39;ticker&#39;] |

### Return type

[**\OpenAPI\Client\Model\Snapshots200Response**](../Model/Snapshots200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
