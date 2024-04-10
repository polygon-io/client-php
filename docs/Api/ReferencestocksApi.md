# OpenAPI\Client\ReferencestocksApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listFinancials()**](ReferencestocksApi.md#listFinancials) | **GET** /vX/reference/financials | Stock Financials vX |
| [**listStockSplits()**](ReferencestocksApi.md#listStockSplits) | **GET** /v3/reference/splits | Stock Splits v3 |


## `listFinancials()`

```php
listFinancials($ticker, $cik, $company_name, $sic, $filing_date, $period_of_report_date, $timeframe, $include_sources, $company_name_search, $filing_date_gte, $filing_date_gt, $filing_date_lte, $filing_date_lt, $period_of_report_date_gte, $period_of_report_date_gt, $period_of_report_date_lte, $period_of_report_date_lt, $order, $limit, $sort): \OpenAPI\Client\Model\ListFinancials200Response
```

Stock Financials vX

Get historical financial data for a stock ticker. The financials data is extracted from XBRL from company SEC filings using the methodology outlined <a rel=\"noopener noreferrer nofollow\" target=\"_blank\" href=\"http://xbrl.squarespace.com/understanding-sec-xbrl-financi/\">here</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferencestocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticker = 'ticker_example'; // string | Query by company ticker.
$cik = 'cik_example'; // string | Query by central index key (<a rel=\"noopener noreferrer nofollow\" target=\"_blank\" href=\"https://www.sec.gov/edgar/searchedgar/cik.htm\">CIK</a>) Number
$company_name = 'company_name_example'; // string | Query by company name.
$sic = 'sic_example'; // string | Query by standard industrial classification (<a rel=\"noopener noreferrer nofollow\" target=\"_blank\" href=\"https://www.sec.gov/corpfin/division-of-corporation-finance-standard-industrial-classification-sic-code-list\">SIC</a>)
$filing_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Query by the date when the filing with financials data was filed in YYYY-MM-DD format.  Best used when querying over date ranges to find financials based on filings that happen in a time period.  Examples:  To get financials based on filings that have happened after January 1, 2009 use the query param filing_date.gte=2009-01-01  To get financials based on filings that happened in the year 2009 use the query params filing_date.gte=2009-01-01&filing_date.lt=2010-01-01
$period_of_report_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The period of report for the filing with financials data in YYYY-MM-DD format.
$timeframe = 'timeframe_example'; // string | Query by timeframe. Annual financials originate from 10-K filings, and quarterly financials originate from 10-Q filings. Note: Most companies do not file quarterly reports for Q4 and instead include those financials in their annual report, so some companies my not return quarterly financials for Q4
$include_sources = false; // bool | Whether or not to include the `xpath` and `formula` attributes for each financial data point. See the `xpath` and `formula` response attributes for more info. False by default.
$company_name_search = 'company_name_search_example'; // string | Search by company_name.
$filing_date_gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search by filing_date.
$filing_date_gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search by filing_date.
$filing_date_lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search by filing_date.
$filing_date_lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search by filing_date.
$period_of_report_date_gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search by period_of_report_date.
$period_of_report_date_gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search by period_of_report_date.
$period_of_report_date_lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search by period_of_report_date.
$period_of_report_date_lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search by period_of_report_date.
$order = asc; // string | Order results based on the `sort` field.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 100.
$sort = filing_date; // string | Sort field used for ordering.

try {
    $result = $apiInstance->listFinancials($ticker, $cik, $company_name, $sic, $filing_date, $period_of_report_date, $timeframe, $include_sources, $company_name_search, $filing_date_gte, $filing_date_gt, $filing_date_lte, $filing_date_lt, $period_of_report_date_gte, $period_of_report_date_gt, $period_of_report_date_lte, $period_of_report_date_lt, $order, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencestocksApi->listFinancials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticker** | **string**| Query by company ticker. | [optional] |
| **cik** | **string**| Query by central index key (&lt;a rel&#x3D;\&quot;noopener noreferrer nofollow\&quot; target&#x3D;\&quot;_blank\&quot; href&#x3D;\&quot;https://www.sec.gov/edgar/searchedgar/cik.htm\&quot;&gt;CIK&lt;/a&gt;) Number | [optional] |
| **company_name** | **string**| Query by company name. | [optional] |
| **sic** | **string**| Query by standard industrial classification (&lt;a rel&#x3D;\&quot;noopener noreferrer nofollow\&quot; target&#x3D;\&quot;_blank\&quot; href&#x3D;\&quot;https://www.sec.gov/corpfin/division-of-corporation-finance-standard-industrial-classification-sic-code-list\&quot;&gt;SIC&lt;/a&gt;) | [optional] |
| **filing_date** | **\DateTime**| Query by the date when the filing with financials data was filed in YYYY-MM-DD format.  Best used when querying over date ranges to find financials based on filings that happen in a time period.  Examples:  To get financials based on filings that have happened after January 1, 2009 use the query param filing_date.gte&#x3D;2009-01-01  To get financials based on filings that happened in the year 2009 use the query params filing_date.gte&#x3D;2009-01-01&amp;filing_date.lt&#x3D;2010-01-01 | [optional] |
| **period_of_report_date** | **\DateTime**| The period of report for the filing with financials data in YYYY-MM-DD format. | [optional] |
| **timeframe** | **string**| Query by timeframe. Annual financials originate from 10-K filings, and quarterly financials originate from 10-Q filings. Note: Most companies do not file quarterly reports for Q4 and instead include those financials in their annual report, so some companies my not return quarterly financials for Q4 | [optional] |
| **include_sources** | **bool**| Whether or not to include the &#x60;xpath&#x60; and &#x60;formula&#x60; attributes for each financial data point. See the &#x60;xpath&#x60; and &#x60;formula&#x60; response attributes for more info. False by default. | [optional] [default to false] |
| **company_name_search** | **string**| Search by company_name. | [optional] |
| **filing_date_gte** | **\DateTime**| Search by filing_date. | [optional] |
| **filing_date_gt** | **\DateTime**| Search by filing_date. | [optional] |
| **filing_date_lte** | **\DateTime**| Search by filing_date. | [optional] |
| **filing_date_lt** | **\DateTime**| Search by filing_date. | [optional] |
| **period_of_report_date_gte** | **\DateTime**| Search by period_of_report_date. | [optional] |
| **period_of_report_date_gt** | **\DateTime**| Search by period_of_report_date. | [optional] |
| **period_of_report_date_lte** | **\DateTime**| Search by period_of_report_date. | [optional] |
| **period_of_report_date_lt** | **\DateTime**| Search by period_of_report_date. | [optional] |
| **order** | **string**| Order results based on the &#x60;sort&#x60; field. | [optional] |
| **limit** | **int**| Limit the number of results returned, default is 10 and max is 100. | [optional] [default to 10] |
| **sort** | **string**| Sort field used for ordering. | [optional] [default to &#39;period_of_report_date&#39;] |

### Return type

[**\OpenAPI\Client\Model\ListFinancials200Response**](../Model/ListFinancials200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStockSplits()`

```php
listStockSplits($ticker, $execution_date, $reverse_split, $ticker_gte, $ticker_gt, $ticker_lte, $ticker_lt, $execution_date_gte, $execution_date_gt, $execution_date_lte, $execution_date_lt, $order, $limit, $sort): \OpenAPI\Client\Model\ListStockSplits200Response
```

Stock Splits v3

Get a list of historical stock splits, including the ticker symbol, the execution date, and the factors of the split ratio.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferencestocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticker = 'ticker_example'; // string | Return the stock splits that contain this ticker.
$execution_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Query by execution date with the format YYYY-MM-DD.
$reverse_split = True; // bool | Query for reverse stock splits. A split ratio where split_from is greater than split_to represents a reverse split. By default this filter is not used.
$ticker_gte = 'ticker_gte_example'; // string | Search by ticker.
$ticker_gt = 'ticker_gt_example'; // string | Search by ticker.
$ticker_lte = 'ticker_lte_example'; // string | Search by ticker.
$ticker_lt = 'ticker_lt_example'; // string | Search by ticker.
$execution_date_gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search by execution_date.
$execution_date_gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search by execution_date.
$execution_date_lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search by execution_date.
$execution_date_lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search by execution_date.
$order = asc; // string | Order results based on the `sort` field.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 1000.
$sort = execution_date; // string | Sort field used for ordering.

try {
    $result = $apiInstance->listStockSplits($ticker, $execution_date, $reverse_split, $ticker_gte, $ticker_gt, $ticker_lte, $ticker_lt, $execution_date_gte, $execution_date_gt, $execution_date_lte, $execution_date_lt, $order, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencestocksApi->listStockSplits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticker** | **string**| Return the stock splits that contain this ticker. | [optional] |
| **execution_date** | **\DateTime**| Query by execution date with the format YYYY-MM-DD. | [optional] |
| **reverse_split** | **bool**| Query for reverse stock splits. A split ratio where split_from is greater than split_to represents a reverse split. By default this filter is not used. | [optional] |
| **ticker_gte** | **string**| Search by ticker. | [optional] |
| **ticker_gt** | **string**| Search by ticker. | [optional] |
| **ticker_lte** | **string**| Search by ticker. | [optional] |
| **ticker_lt** | **string**| Search by ticker. | [optional] |
| **execution_date_gte** | **\DateTime**| Search by execution_date. | [optional] |
| **execution_date_gt** | **\DateTime**| Search by execution_date. | [optional] |
| **execution_date_lte** | **\DateTime**| Search by execution_date. | [optional] |
| **execution_date_lt** | **\DateTime**| Search by execution_date. | [optional] |
| **order** | **string**| Order results based on the &#x60;sort&#x60; field. | [optional] |
| **limit** | **int**| Limit the number of results returned, default is 10 and max is 1000. | [optional] [default to 10] |
| **sort** | **string**| Sort field used for ordering. | [optional] [default to &#39;execution_date&#39;] |

### Return type

[**\OpenAPI\Client\Model\ListStockSplits200Response**](../Model/ListStockSplits200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
