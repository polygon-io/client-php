# OpenAPI\Client\ReferenceoptionscontractslistApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listOptionsContracts()**](ReferenceoptionscontractslistApi.md#listOptionsContracts) | **GET** /v3/reference/options/contracts | Options Contracts |


## `listOptionsContracts()`

```php
listOptionsContracts($ticker, $underlying_ticker, $contract_type, $expiration_date, $as_of, $strike_price, $expired, $underlying_ticker_gte, $underlying_ticker_gt, $underlying_ticker_lte, $underlying_ticker_lt, $expiration_date_gte, $expiration_date_gt, $expiration_date_lte, $expiration_date_lt, $strike_price_gte, $strike_price_gt, $strike_price_lte, $strike_price_lt, $order, $limit, $sort): \OpenAPI\Client\Model\ListOptionsContracts200Response
```

Options Contracts

Query for historical options contracts. This provides both active and expired options contracts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferenceoptionscontractslistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticker = 'ticker_example'; // string | This parameter has been deprecated. To search by specific options ticker, use the Options Contract endpoint [here](https://polygon.io/docs/options/get_v3_reference_options_contracts__options_ticker).
$underlying_ticker = 'underlying_ticker_example'; // string | Query for contracts relating to an underlying stock ticker.
$contract_type = 'contract_type_example'; // string | Query by the type of contract.
$expiration_date = 'expiration_date_example'; // string | Query by contract expiration with date format YYYY-MM-DD.
$as_of = 'as_of_example'; // string | Specify a point in time for contracts as of this date with format YYYY-MM-DD. Defaults to today's date.
$strike_price = 3.4; // float | Query by strike price of a contract.
$expired = True; // bool | Query for expired contracts. Default is false.
$underlying_ticker_gte = 'underlying_ticker_gte_example'; // string | Range by underlying_ticker.
$underlying_ticker_gt = 'underlying_ticker_gt_example'; // string | Range by underlying_ticker.
$underlying_ticker_lte = 'underlying_ticker_lte_example'; // string | Range by underlying_ticker.
$underlying_ticker_lt = 'underlying_ticker_lt_example'; // string | Range by underlying_ticker.
$expiration_date_gte = 'expiration_date_gte_example'; // string | Range by expiration_date.
$expiration_date_gt = 'expiration_date_gt_example'; // string | Range by expiration_date.
$expiration_date_lte = 'expiration_date_lte_example'; // string | Range by expiration_date.
$expiration_date_lt = 'expiration_date_lt_example'; // string | Range by expiration_date.
$strike_price_gte = 3.4; // float | Range by strike_price.
$strike_price_gt = 3.4; // float | Range by strike_price.
$strike_price_lte = 3.4; // float | Range by strike_price.
$strike_price_lt = 3.4; // float | Range by strike_price.
$order = asc; // string | Order results based on the `sort` field.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 1000.
$sort = ticker; // string | Sort field used for ordering.

try {
    $result = $apiInstance->listOptionsContracts($ticker, $underlying_ticker, $contract_type, $expiration_date, $as_of, $strike_price, $expired, $underlying_ticker_gte, $underlying_ticker_gt, $underlying_ticker_lte, $underlying_ticker_lt, $expiration_date_gte, $expiration_date_gt, $expiration_date_lte, $expiration_date_lt, $strike_price_gte, $strike_price_gt, $strike_price_lte, $strike_price_lt, $order, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceoptionscontractslistApi->listOptionsContracts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticker** | **string**| This parameter has been deprecated. To search by specific options ticker, use the Options Contract endpoint [here](https://polygon.io/docs/options/get_v3_reference_options_contracts__options_ticker). | [optional] |
| **underlying_ticker** | **string**| Query for contracts relating to an underlying stock ticker. | [optional] |
| **contract_type** | **string**| Query by the type of contract. | [optional] |
| **expiration_date** | **string**| Query by contract expiration with date format YYYY-MM-DD. | [optional] |
| **as_of** | **string**| Specify a point in time for contracts as of this date with format YYYY-MM-DD. Defaults to today&#39;s date. | [optional] |
| **strike_price** | **float**| Query by strike price of a contract. | [optional] |
| **expired** | **bool**| Query for expired contracts. Default is false. | [optional] |
| **underlying_ticker_gte** | **string**| Range by underlying_ticker. | [optional] |
| **underlying_ticker_gt** | **string**| Range by underlying_ticker. | [optional] |
| **underlying_ticker_lte** | **string**| Range by underlying_ticker. | [optional] |
| **underlying_ticker_lt** | **string**| Range by underlying_ticker. | [optional] |
| **expiration_date_gte** | **string**| Range by expiration_date. | [optional] |
| **expiration_date_gt** | **string**| Range by expiration_date. | [optional] |
| **expiration_date_lte** | **string**| Range by expiration_date. | [optional] |
| **expiration_date_lt** | **string**| Range by expiration_date. | [optional] |
| **strike_price_gte** | **float**| Range by strike_price. | [optional] |
| **strike_price_gt** | **float**| Range by strike_price. | [optional] |
| **strike_price_lte** | **float**| Range by strike_price. | [optional] |
| **strike_price_lt** | **float**| Range by strike_price. | [optional] |
| **order** | **string**| Order results based on the &#x60;sort&#x60; field. | [optional] |
| **limit** | **int**| Limit the number of results returned, default is 10 and max is 1000. | [optional] [default to 10] |
| **sort** | **string**| Sort field used for ordering. | [optional] [default to &#39;ticker&#39;] |

### Return type

[**\OpenAPI\Client\Model\ListOptionsContracts200Response**](../Model/ListOptionsContracts200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
