# OpenAPI\Client\ReferencetickersgetApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEvents()**](ReferencetickersgetApi.md#getEvents) | **GET** /vX/reference/tickers/{id}/events | Ticker Events |
| [**getTicker()**](ReferencetickersgetApi.md#getTicker) | **GET** /v3/reference/tickers/{ticker} | Ticker Details v3 |


## `getEvents()`

```php
getEvents($id, $types): \OpenAPI\Client\Model\GetEvents200Response
```

Ticker Events

Get a timeline of events for the entity associated with the given ticker, CUSIP, or Composite FIGI.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferencetickersgetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = META; // string | Identifier of an asset. This can currently be a Ticker, CUSIP, or Composite FIGI. When given a ticker, we return events for the entity currently represented by that ticker. To find events for entities previously associated with a ticker, find the relevant identifier using the  [Ticker Details Endpoint](https://polygon.io/docs/stocks/get_v3_reference_tickers__ticker)
$types = 'types_example'; // string | A comma-separated list of the types of event to include. Currently ticker_change is the only supported event_type. Leave blank to return all supported event_types.

try {
    $result = $apiInstance->getEvents($id, $types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencetickersgetApi->getEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of an asset. This can currently be a Ticker, CUSIP, or Composite FIGI. When given a ticker, we return events for the entity currently represented by that ticker. To find events for entities previously associated with a ticker, find the relevant identifier using the  [Ticker Details Endpoint](https://polygon.io/docs/stocks/get_v3_reference_tickers__ticker) | |
| **types** | **string**| A comma-separated list of the types of event to include. Currently ticker_change is the only supported event_type. Leave blank to return all supported event_types. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetEvents200Response**](../Model/GetEvents200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTicker()`

```php
getTicker($ticker, $date): \OpenAPI\Client\Model\GetTicker200Response
```

Ticker Details v3

Get a single ticker supported by Polygon.io. This response will have detailed information about the ticker and the company behind it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferencetickersgetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticker = AAPL; // string | The ticker symbol of the asset.
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Specify a point in time to get information about the ticker available on that date. When retrieving information from SEC filings, we compare this date with the period of report date on the SEC filing.  For example, consider an SEC filing submitted by AAPL on 2019-07-31, with a period of report date ending on 2019-06-29. That means that the filing was submitted on 2019-07-31, but the filing was created based on information from 2019-06-29. If you were to query for AAPL details on 2019-06-29, the ticker details would include information from the SEC filing.  Defaults to the most recent available date.

try {
    $result = $apiInstance->getTicker($ticker, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencetickersgetApi->getTicker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticker** | **string**| The ticker symbol of the asset. | |
| **date** | **\DateTime**| Specify a point in time to get information about the ticker available on that date. When retrieving information from SEC filings, we compare this date with the period of report date on the SEC filing.  For example, consider an SEC filing submitted by AAPL on 2019-07-31, with a period of report date ending on 2019-06-29. That means that the filing was submitted on 2019-07-31, but the filing was created based on information from 2019-06-29. If you were to query for AAPL details on 2019-06-29, the ticker details would include information from the SEC filing.  Defaults to the most recent available date. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetTicker200Response**](../Model/GetTicker200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
