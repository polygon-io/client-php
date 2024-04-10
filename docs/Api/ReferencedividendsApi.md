# OpenAPI\Client\ReferencedividendsApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listDividends()**](ReferencedividendsApi.md#listDividends) | **GET** /v3/reference/dividends | Dividends v3 |


## `listDividends()`

```php
listDividends($ticker, $ex_dividend_date, $record_date, $declaration_date, $pay_date, $frequency, $cash_amount, $dividend_type, $ticker_gte, $ticker_gt, $ticker_lte, $ticker_lt, $ex_dividend_date_gte, $ex_dividend_date_gt, $ex_dividend_date_lte, $ex_dividend_date_lt, $record_date_gte, $record_date_gt, $record_date_lte, $record_date_lt, $declaration_date_gte, $declaration_date_gt, $declaration_date_lte, $declaration_date_lt, $pay_date_gte, $pay_date_gt, $pay_date_lte, $pay_date_lt, $cash_amount_gte, $cash_amount_gt, $cash_amount_lte, $cash_amount_lt, $order, $limit, $sort): \OpenAPI\Client\Model\ListDividends200Response
```

Dividends v3

Get a list of historical cash dividends, including the ticker symbol, declaration date, ex-dividend date, record date, pay date, frequency, and amount.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferencedividendsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticker = 'ticker_example'; // string | Return the dividends that contain this ticker.
$ex_dividend_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Query by ex-dividend date with the format YYYY-MM-DD.
$record_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Query by record date with the format YYYY-MM-DD.
$declaration_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Query by declaration date with the format YYYY-MM-DD.
$pay_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Query by pay date with the format YYYY-MM-DD.
$frequency = 56; // int | Query by the number of times per year the dividend is paid out.  Possible values are 0 (one-time), 1 (annually), 2 (bi-annually), 4 (quarterly), and 12 (monthly).
$cash_amount = 3.4; // float | Query by the cash amount of the dividend.
$dividend_type = 'dividend_type_example'; // string | Query by the type of dividend. Dividends that have been paid and/or are expected to be paid on consistent schedules are denoted as CD. Special Cash dividends that have been paid that are infrequent or unusual, and/or can not be expected to occur in the future are denoted as SC.
$ticker_gte = 'ticker_gte_example'; // string | Range by ticker.
$ticker_gt = 'ticker_gt_example'; // string | Range by ticker.
$ticker_lte = 'ticker_lte_example'; // string | Range by ticker.
$ticker_lt = 'ticker_lt_example'; // string | Range by ticker.
$ex_dividend_date_gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Range by ex_dividend_date.
$ex_dividend_date_gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Range by ex_dividend_date.
$ex_dividend_date_lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Range by ex_dividend_date.
$ex_dividend_date_lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Range by ex_dividend_date.
$record_date_gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Range by record_date.
$record_date_gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Range by record_date.
$record_date_lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Range by record_date.
$record_date_lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Range by record_date.
$declaration_date_gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Range by declaration_date.
$declaration_date_gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Range by declaration_date.
$declaration_date_lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Range by declaration_date.
$declaration_date_lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Range by declaration_date.
$pay_date_gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Range by pay_date.
$pay_date_gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Range by pay_date.
$pay_date_lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Range by pay_date.
$pay_date_lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Range by pay_date.
$cash_amount_gte = 3.4; // float | Range by cash_amount.
$cash_amount_gt = 3.4; // float | Range by cash_amount.
$cash_amount_lte = 3.4; // float | Range by cash_amount.
$cash_amount_lt = 3.4; // float | Range by cash_amount.
$order = asc; // string | Order results based on the `sort` field.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 1000.
$sort = ex_dividend_date; // string | Sort field used for ordering.

try {
    $result = $apiInstance->listDividends($ticker, $ex_dividend_date, $record_date, $declaration_date, $pay_date, $frequency, $cash_amount, $dividend_type, $ticker_gte, $ticker_gt, $ticker_lte, $ticker_lt, $ex_dividend_date_gte, $ex_dividend_date_gt, $ex_dividend_date_lte, $ex_dividend_date_lt, $record_date_gte, $record_date_gt, $record_date_lte, $record_date_lt, $declaration_date_gte, $declaration_date_gt, $declaration_date_lte, $declaration_date_lt, $pay_date_gte, $pay_date_gt, $pay_date_lte, $pay_date_lt, $cash_amount_gte, $cash_amount_gt, $cash_amount_lte, $cash_amount_lt, $order, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencedividendsApi->listDividends: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticker** | **string**| Return the dividends that contain this ticker. | [optional] |
| **ex_dividend_date** | **\DateTime**| Query by ex-dividend date with the format YYYY-MM-DD. | [optional] |
| **record_date** | **\DateTime**| Query by record date with the format YYYY-MM-DD. | [optional] |
| **declaration_date** | **\DateTime**| Query by declaration date with the format YYYY-MM-DD. | [optional] |
| **pay_date** | **\DateTime**| Query by pay date with the format YYYY-MM-DD. | [optional] |
| **frequency** | **int**| Query by the number of times per year the dividend is paid out.  Possible values are 0 (one-time), 1 (annually), 2 (bi-annually), 4 (quarterly), and 12 (monthly). | [optional] |
| **cash_amount** | **float**| Query by the cash amount of the dividend. | [optional] |
| **dividend_type** | **string**| Query by the type of dividend. Dividends that have been paid and/or are expected to be paid on consistent schedules are denoted as CD. Special Cash dividends that have been paid that are infrequent or unusual, and/or can not be expected to occur in the future are denoted as SC. | [optional] |
| **ticker_gte** | **string**| Range by ticker. | [optional] |
| **ticker_gt** | **string**| Range by ticker. | [optional] |
| **ticker_lte** | **string**| Range by ticker. | [optional] |
| **ticker_lt** | **string**| Range by ticker. | [optional] |
| **ex_dividend_date_gte** | **\DateTime**| Range by ex_dividend_date. | [optional] |
| **ex_dividend_date_gt** | **\DateTime**| Range by ex_dividend_date. | [optional] |
| **ex_dividend_date_lte** | **\DateTime**| Range by ex_dividend_date. | [optional] |
| **ex_dividend_date_lt** | **\DateTime**| Range by ex_dividend_date. | [optional] |
| **record_date_gte** | **\DateTime**| Range by record_date. | [optional] |
| **record_date_gt** | **\DateTime**| Range by record_date. | [optional] |
| **record_date_lte** | **\DateTime**| Range by record_date. | [optional] |
| **record_date_lt** | **\DateTime**| Range by record_date. | [optional] |
| **declaration_date_gte** | **\DateTime**| Range by declaration_date. | [optional] |
| **declaration_date_gt** | **\DateTime**| Range by declaration_date. | [optional] |
| **declaration_date_lte** | **\DateTime**| Range by declaration_date. | [optional] |
| **declaration_date_lt** | **\DateTime**| Range by declaration_date. | [optional] |
| **pay_date_gte** | **\DateTime**| Range by pay_date. | [optional] |
| **pay_date_gt** | **\DateTime**| Range by pay_date. | [optional] |
| **pay_date_lte** | **\DateTime**| Range by pay_date. | [optional] |
| **pay_date_lt** | **\DateTime**| Range by pay_date. | [optional] |
| **cash_amount_gte** | **float**| Range by cash_amount. | [optional] |
| **cash_amount_gt** | **float**| Range by cash_amount. | [optional] |
| **cash_amount_lte** | **float**| Range by cash_amount. | [optional] |
| **cash_amount_lt** | **float**| Range by cash_amount. | [optional] |
| **order** | **string**| Order results based on the &#x60;sort&#x60; field. | [optional] |
| **limit** | **int**| Limit the number of results returned, default is 10 and max is 1000. | [optional] [default to 10] |
| **sort** | **string**| Sort field used for ordering. | [optional] [default to &#39;ex_dividend_date&#39;] |

### Return type

[**\OpenAPI\Client\Model\ListDividends200Response**](../Model/ListDividends200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
