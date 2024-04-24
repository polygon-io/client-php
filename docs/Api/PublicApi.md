# OpenAPI\Client\PublicApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listTickerTaxonomyClassifications()**](PublicApi.md#listTickerTaxonomyClassifications) | **GET** /vX/reference/tickers/taxonomies | Ticker Taxonomies |


## `listTickerTaxonomyClassifications()`

```php
listTickerTaxonomyClassifications($ticker, $category, $tag, $ticker_gte, $ticker_gt, $ticker_lte, $ticker_lt, $ticker_any_of, $order, $limit, $sort): \OpenAPI\Client\Model\ListTickerTaxonomyClassifications200Response
```

Ticker Taxonomies

Retrieve taxonomy classifications for one or more tickers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticker = 'ticker_example'; // string
$category = 'category_example'; // string | Filter by taxonomy category.
$tag = 'tag_example'; // string | Filter by taxonomy tag. Each category has a set of associated tags.
$ticker_gte = 'ticker_gte_example'; // string | Range by ticker.
$ticker_gt = 'ticker_gt_example'; // string | Range by ticker.
$ticker_lte = 'ticker_lte_example'; // string | Range by ticker.
$ticker_lt = 'ticker_lt_example'; // string | Range by ticker.
$ticker_any_of = NCLH,O:SPY250321C00380000,C:EURUSD,X:BTCUSD,I:SPX; // string | Comma separated list of tickers, up to a maximum of 250. If no tickers are passed then all results will be returned in a paginated manner.  Warning: The maximum number of characters allowed in a URL are subject to your technology stack.
$order = asc; // string | Order results based on the `sort` field.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 250.
$sort = ticker; // string | Sort field used for ordering.

try {
    $result = $apiInstance->listTickerTaxonomyClassifications($ticker, $category, $tag, $ticker_gte, $ticker_gt, $ticker_lte, $ticker_lt, $ticker_any_of, $order, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->listTickerTaxonomyClassifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticker** | **string**|  | [optional] |
| **category** | **string**| Filter by taxonomy category. | [optional] |
| **tag** | **string**| Filter by taxonomy tag. Each category has a set of associated tags. | [optional] |
| **ticker_gte** | **string**| Range by ticker. | [optional] |
| **ticker_gt** | **string**| Range by ticker. | [optional] |
| **ticker_lte** | **string**| Range by ticker. | [optional] |
| **ticker_lt** | **string**| Range by ticker. | [optional] |
| **ticker_any_of** | **string**| Comma separated list of tickers, up to a maximum of 250. If no tickers are passed then all results will be returned in a paginated manner.  Warning: The maximum number of characters allowed in a URL are subject to your technology stack. | [optional] |
| **order** | **string**| Order results based on the &#x60;sort&#x60; field. | [optional] |
| **limit** | **int**| Limit the number of results returned, default is 10 and max is 250. | [optional] [default to 10] |
| **sort** | **string**| Sort field used for ordering. | [optional] [default to &#39;ticker&#39;] |

### Return type

[**\OpenAPI\Client\Model\ListTickerTaxonomyClassifications200Response**](../Model/ListTickerTaxonomyClassifications200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
