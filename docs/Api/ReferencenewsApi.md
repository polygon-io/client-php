# OpenAPI\Client\ReferencenewsApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listNews()**](ReferencenewsApi.md#listNews) | **GET** /v2/reference/news | Ticker News |


## `listNews()`

```php
listNews($ticker, $published_utc, $ticker_gte, $ticker_gt, $ticker_lte, $ticker_lt, $published_utc_gte, $published_utc_gt, $published_utc_lte, $published_utc_lt, $order, $limit, $sort): \OpenAPI\Client\Model\ListNews200Response
```

Ticker News

Get the most recent news articles relating to a stock ticker symbol, including a summary of the article and a link to the original source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferencenewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticker = 'ticker_example'; // string | Return results that contain this ticker.
$published_utc = new \OpenAPI\Client\Model\ListNewsPublishedUtcParameter(); // ListNewsPublishedUtcParameter | Return results published on, before, or after this date.
$ticker_gte = 'ticker_gte_example'; // string | Search by ticker.
$ticker_gt = 'ticker_gt_example'; // string | Search by ticker.
$ticker_lte = 'ticker_lte_example'; // string | Search by ticker.
$ticker_lt = 'ticker_lt_example'; // string | Search by ticker.
$published_utc_gte = new \OpenAPI\Client\Model\ListNewsPublishedUtcParameter(); // ListNewsPublishedUtcParameter | Search by published_utc.
$published_utc_gt = new \OpenAPI\Client\Model\ListNewsPublishedUtcParameter(); // ListNewsPublishedUtcParameter | Search by published_utc.
$published_utc_lte = new \OpenAPI\Client\Model\ListNewsPublishedUtcParameter(); // ListNewsPublishedUtcParameter | Search by published_utc.
$published_utc_lt = new \OpenAPI\Client\Model\ListNewsPublishedUtcParameter(); // ListNewsPublishedUtcParameter | Search by published_utc.
$order = asc; // string | Order results based on the `sort` field.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 1000.
$sort = published_utc; // string | Sort field used for ordering.

try {
    $result = $apiInstance->listNews($ticker, $published_utc, $ticker_gte, $ticker_gt, $ticker_lte, $ticker_lt, $published_utc_gte, $published_utc_gt, $published_utc_lte, $published_utc_lt, $order, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencenewsApi->listNews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticker** | **string**| Return results that contain this ticker. | [optional] |
| **published_utc** | [**ListNewsPublishedUtcParameter**](../Model/.md)| Return results published on, before, or after this date. | [optional] |
| **ticker_gte** | **string**| Search by ticker. | [optional] |
| **ticker_gt** | **string**| Search by ticker. | [optional] |
| **ticker_lte** | **string**| Search by ticker. | [optional] |
| **ticker_lt** | **string**| Search by ticker. | [optional] |
| **published_utc_gte** | [**ListNewsPublishedUtcParameter**](../Model/.md)| Search by published_utc. | [optional] |
| **published_utc_gt** | [**ListNewsPublishedUtcParameter**](../Model/.md)| Search by published_utc. | [optional] |
| **published_utc_lte** | [**ListNewsPublishedUtcParameter**](../Model/.md)| Search by published_utc. | [optional] |
| **published_utc_lt** | [**ListNewsPublishedUtcParameter**](../Model/.md)| Search by published_utc. | [optional] |
| **order** | **string**| Order results based on the &#x60;sort&#x60; field. | [optional] |
| **limit** | **int**| Limit the number of results returned, default is 10 and max is 1000. | [optional] [default to 10] |
| **sort** | **string**| Sort field used for ordering. | [optional] [default to &#39;published_utc&#39;] |

### Return type

[**\OpenAPI\Client\Model\ListNews200Response**](../Model/ListNews200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
