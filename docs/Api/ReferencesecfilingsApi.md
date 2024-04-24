# OpenAPI\Client\ReferencesecfilingsApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listFilings()**](ReferencesecfilingsApi.md#listFilings) | **GET** /v1/reference/sec/filings | SEC Filings |


## `listFilings()`

```php
listFilings($type, $filing_date, $period_of_report_date, $has_xbrl, $entities_company_data_name, $entities_company_data_cik, $entities_company_data_ticker, $entities_company_data_sic, $filing_date_gte, $filing_date_gt, $filing_date_lte, $filing_date_lt, $period_of_report_date_gte, $period_of_report_date_gt, $period_of_report_date_lte, $period_of_report_date_lt, $entities_company_data_name_search, $order, $limit, $sort): \OpenAPI\Client\Model\ListFilings200Response
```

SEC Filings

List filings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferencesecfilingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | Query by filing type.
$filing_date = 20210101; // string | Query by filing date.
$period_of_report_date = 20210101; // string | Query by period of report.
$has_xbrl = True; // bool | If true, query only for filings with an XBRL instance file. If false, query for filings without an XBRL instance file. If this parameter is not provided, query for filings with or without XBRL instance files.
$entities_company_data_name = Facebook Inc; // string | Query by entity company name.
$entities_company_data_cik = 'entities_company_data_cik_example'; // string | Query by entity company CIK.
$entities_company_data_ticker = 'entities_company_data_ticker_example'; // string | Query by entity company ticker.
$entities_company_data_sic = 'entities_company_data_sic_example'; // string | Query by entity company SIC.
$filing_date_gte = 20210101; // string | Search by filing_date.
$filing_date_gt = 20210101; // string | Search by filing_date.
$filing_date_lte = 20210101; // string | Search by filing_date.
$filing_date_lt = 20210101; // string | Search by filing_date.
$period_of_report_date_gte = 20210101; // string | Search by period_of_report_date.
$period_of_report_date_gt = 20210101; // string | Search by period_of_report_date.
$period_of_report_date_lte = 20210101; // string | Search by period_of_report_date.
$period_of_report_date_lt = 20210101; // string | Search by period_of_report_date.
$entities_company_data_name_search = 'entities_company_data_name_search_example'; // string | Search by entities.company_data.name.
$order = asc; // string | Order results based on the `sort` field.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 1000.
$sort = filing_date; // string | Sort field used for ordering.

try {
    $result = $apiInstance->listFilings($type, $filing_date, $period_of_report_date, $has_xbrl, $entities_company_data_name, $entities_company_data_cik, $entities_company_data_ticker, $entities_company_data_sic, $filing_date_gte, $filing_date_gt, $filing_date_lte, $filing_date_lt, $period_of_report_date_gte, $period_of_report_date_gt, $period_of_report_date_lte, $period_of_report_date_lt, $entities_company_data_name_search, $order, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesecfilingsApi->listFilings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Query by filing type. | [optional] |
| **filing_date** | **string**| Query by filing date. | [optional] |
| **period_of_report_date** | **string**| Query by period of report. | [optional] |
| **has_xbrl** | **bool**| If true, query only for filings with an XBRL instance file. If false, query for filings without an XBRL instance file. If this parameter is not provided, query for filings with or without XBRL instance files. | [optional] |
| **entities_company_data_name** | **string**| Query by entity company name. | [optional] |
| **entities_company_data_cik** | **string**| Query by entity company CIK. | [optional] |
| **entities_company_data_ticker** | **string**| Query by entity company ticker. | [optional] |
| **entities_company_data_sic** | **string**| Query by entity company SIC. | [optional] |
| **filing_date_gte** | **string**| Search by filing_date. | [optional] |
| **filing_date_gt** | **string**| Search by filing_date. | [optional] |
| **filing_date_lte** | **string**| Search by filing_date. | [optional] |
| **filing_date_lt** | **string**| Search by filing_date. | [optional] |
| **period_of_report_date_gte** | **string**| Search by period_of_report_date. | [optional] |
| **period_of_report_date_gt** | **string**| Search by period_of_report_date. | [optional] |
| **period_of_report_date_lte** | **string**| Search by period_of_report_date. | [optional] |
| **period_of_report_date_lt** | **string**| Search by period_of_report_date. | [optional] |
| **entities_company_data_name_search** | **string**| Search by entities.company_data.name. | [optional] |
| **order** | **string**| Order results based on the &#x60;sort&#x60; field. | [optional] |
| **limit** | **int**| Limit the number of results returned, default is 10 and max is 1000. | [optional] [default to 10] |
| **sort** | **string**| Sort field used for ordering. | [optional] [default to &#39;filing_date&#39;] |

### Return type

[**\OpenAPI\Client\Model\ListFilings200Response**](../Model/ListFilings200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
