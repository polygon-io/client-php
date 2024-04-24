# OpenAPI\Client\ReferencetickerslistApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listTickers()**](ReferencetickerslistApi.md#listTickers) | **GET** /v3/reference/tickers | Tickers |


## `listTickers()`

```php
listTickers($ticker, $type, $market, $exchange, $cusip, $cik, $date, $search, $active, $ticker_gte, $ticker_gt, $ticker_lte, $ticker_lt, $order, $limit, $sort): \OpenAPI\Client\Model\ListTickers200Response
```

Tickers

Query all ticker symbols which are supported by Polygon.io. This API currently includes Stocks/Equities, Indices, Forex, and Crypto.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferencetickerslistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticker = 'ticker_example'; // string | Specify a ticker symbol. Defaults to empty string which queries all tickers.
$type = 'type_example'; // string | Specify the type of the tickers. Find the types that we support via our [Ticker Types API](https://polygon.io/docs/stocks/get_v3_reference_tickers_types). Defaults to empty string which queries all types.
$market = 'market_example'; // string | Filter by market type. By default all markets are included.
$exchange = 'exchange_example'; // string | Specify the primary exchange of the asset in the ISO code format. Find more information about the ISO codes [at the ISO org website](https://www.iso20022.org/market-identifier-codes). Defaults to empty string which queries all exchanges.
$cusip = 'cusip_example'; // string | Specify the CUSIP code of the asset you want to search for. Find more information about CUSIP codes [at their website](https://www.cusip.com/identifiers.html#/CUSIP). Defaults to empty string which queries all CUSIPs.  Note: Although you can query by CUSIP, due to legal reasons we do not return the CUSIP in the response.
$cik = 'cik_example'; // string | Specify the CIK of the asset you want to search for. Find more information about CIK codes [at their website](https://www.sec.gov/edgar/searchedgar/cik.htm). Defaults to empty string which queries all CIKs.
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Specify a point in time to retrieve tickers available on that date. Defaults to the most recent available date.
$search = 'search_example'; // string | Search for terms within the ticker and/or company name.
$active = true; // bool | Specify if the tickers returned should be actively traded on the queried date. Default is true.
$ticker_gte = 'ticker_gte_example'; // string | Range by ticker.
$ticker_gt = 'ticker_gt_example'; // string | Range by ticker.
$ticker_lte = 'ticker_lte_example'; // string | Range by ticker.
$ticker_lt = 'ticker_lt_example'; // string | Range by ticker.
$order = asc; // string | Order results based on the `sort` field.
$limit = 100; // int | Limit the number of results returned, default is 100 and max is 1000.
$sort = ticker; // string | Sort field used for ordering.

try {
    $result = $apiInstance->listTickers($ticker, $type, $market, $exchange, $cusip, $cik, $date, $search, $active, $ticker_gte, $ticker_gt, $ticker_lte, $ticker_lt, $order, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencetickerslistApi->listTickers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticker** | **string**| Specify a ticker symbol. Defaults to empty string which queries all tickers. | [optional] |
| **type** | **string**| Specify the type of the tickers. Find the types that we support via our [Ticker Types API](https://polygon.io/docs/stocks/get_v3_reference_tickers_types). Defaults to empty string which queries all types. | [optional] |
| **market** | **string**| Filter by market type. By default all markets are included. | [optional] |
| **exchange** | **string**| Specify the primary exchange of the asset in the ISO code format. Find more information about the ISO codes [at the ISO org website](https://www.iso20022.org/market-identifier-codes). Defaults to empty string which queries all exchanges. | [optional] |
| **cusip** | **string**| Specify the CUSIP code of the asset you want to search for. Find more information about CUSIP codes [at their website](https://www.cusip.com/identifiers.html#/CUSIP). Defaults to empty string which queries all CUSIPs.  Note: Although you can query by CUSIP, due to legal reasons we do not return the CUSIP in the response. | [optional] |
| **cik** | **string**| Specify the CIK of the asset you want to search for. Find more information about CIK codes [at their website](https://www.sec.gov/edgar/searchedgar/cik.htm). Defaults to empty string which queries all CIKs. | [optional] |
| **date** | **\DateTime**| Specify a point in time to retrieve tickers available on that date. Defaults to the most recent available date. | [optional] |
| **search** | **string**| Search for terms within the ticker and/or company name. | [optional] |
| **active** | **bool**| Specify if the tickers returned should be actively traded on the queried date. Default is true. | [optional] |
| **ticker_gte** | **string**| Range by ticker. | [optional] |
| **ticker_gt** | **string**| Range by ticker. | [optional] |
| **ticker_lte** | **string**| Range by ticker. | [optional] |
| **ticker_lt** | **string**| Range by ticker. | [optional] |
| **order** | **string**| Order results based on the &#x60;sort&#x60; field. | [optional] |
| **limit** | **int**| Limit the number of results returned, default is 100 and max is 1000. | [optional] [default to 100] |
| **sort** | **string**| Sort field used for ordering. | [optional] [default to &#39;ticker&#39;] |

### Return type

[**\OpenAPI\Client\Model\ListTickers200Response**](../Model/ListTickers200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
