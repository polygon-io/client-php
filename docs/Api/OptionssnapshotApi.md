# OpenAPI\Client\OptionssnapshotApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**optionContract()**](OptionssnapshotApi.md#optionContract) | **GET** /v3/snapshot/options/{underlyingAsset}/{optionContract} | Option Contract |
| [**optionsChain()**](OptionssnapshotApi.md#optionsChain) | **GET** /v3/snapshot/options/{underlyingAsset} | Options Chain |


## `optionContract()`

```php
optionContract($underlying_asset, $option_contract): \OpenAPI\Client\Model\OptionContract200Response
```

Option Contract

Get the snapshot of an option contract for a stock equity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OptionssnapshotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$underlying_asset = EVRI; // string | The underlying ticker symbol of the option contract.
$option_contract = O:EVRI240119C00002500; // string | The option contract identifier.

try {
    $result = $apiInstance->optionContract($underlying_asset, $option_contract);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionssnapshotApi->optionContract: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **underlying_asset** | **string**| The underlying ticker symbol of the option contract. | |
| **option_contract** | **string**| The option contract identifier. | |

### Return type

[**\OpenAPI\Client\Model\OptionContract200Response**](../Model/OptionContract200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `optionsChain()`

```php
optionsChain($underlying_asset, $strike_price, $expiration_date, $contract_type, $strike_price_gte, $strike_price_gt, $strike_price_lte, $strike_price_lt, $expiration_date_gte, $expiration_date_gt, $expiration_date_lte, $expiration_date_lt, $order, $limit, $sort): \OpenAPI\Client\Model\OptionsChain200Response
```

Options Chain

Get the snapshot of all options contracts for an underlying ticker.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OptionssnapshotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$underlying_asset = EVRI; // string | The underlying ticker symbol of the option contract.
$strike_price = 3.4; // float | Query by strike price of a contract.
$expiration_date = 'expiration_date_example'; // string | Query by contract expiration with date format YYYY-MM-DD.
$contract_type = 'contract_type_example'; // string | Query by the type of contract.
$strike_price_gte = 3.4; // float | Range by strike_price.
$strike_price_gt = 3.4; // float | Range by strike_price.
$strike_price_lte = 3.4; // float | Range by strike_price.
$strike_price_lt = 3.4; // float | Range by strike_price.
$expiration_date_gte = 'expiration_date_gte_example'; // string | Range by expiration_date.
$expiration_date_gt = 'expiration_date_gt_example'; // string | Range by expiration_date.
$expiration_date_lte = 'expiration_date_lte_example'; // string | Range by expiration_date.
$expiration_date_lt = 'expiration_date_lt_example'; // string | Range by expiration_date.
$order = asc; // string | Order results based on the `sort` field.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 250.
$sort = ticker; // string | Sort field used for ordering.

try {
    $result = $apiInstance->optionsChain($underlying_asset, $strike_price, $expiration_date, $contract_type, $strike_price_gte, $strike_price_gt, $strike_price_lte, $strike_price_lt, $expiration_date_gte, $expiration_date_gt, $expiration_date_lte, $expiration_date_lt, $order, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionssnapshotApi->optionsChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **underlying_asset** | **string**| The underlying ticker symbol of the option contract. | |
| **strike_price** | **float**| Query by strike price of a contract. | [optional] |
| **expiration_date** | **string**| Query by contract expiration with date format YYYY-MM-DD. | [optional] |
| **contract_type** | **string**| Query by the type of contract. | [optional] |
| **strike_price_gte** | **float**| Range by strike_price. | [optional] |
| **strike_price_gt** | **float**| Range by strike_price. | [optional] |
| **strike_price_lte** | **float**| Range by strike_price. | [optional] |
| **strike_price_lt** | **float**| Range by strike_price. | [optional] |
| **expiration_date_gte** | **string**| Range by expiration_date. | [optional] |
| **expiration_date_gt** | **string**| Range by expiration_date. | [optional] |
| **expiration_date_lte** | **string**| Range by expiration_date. | [optional] |
| **expiration_date_lt** | **string**| Range by expiration_date. | [optional] |
| **order** | **string**| Order results based on the &#x60;sort&#x60; field. | [optional] |
| **limit** | **int**| Limit the number of results returned, default is 10 and max is 250. | [optional] [default to 10] |
| **sort** | **string**| Sort field used for ordering. | [optional] [default to &#39;ticker&#39;] |

### Return type

[**\OpenAPI\Client\Model\OptionsChain200Response**](../Model/OptionsChain200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
