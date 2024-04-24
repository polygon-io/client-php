# OpenAPI\Client\ReferencesecfilingfilesApi

All URIs are relative to https://api.polygon.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listFilingFiles()**](ReferencesecfilingfilesApi.md#listFilingFiles) | **GET** /v1/reference/sec/filings/{filing_id}/files | SEC Filing Files |


## `listFilingFiles()`

```php
listFilingFiles($filing_id, $sequence, $filename, $sequence_gte, $sequence_gt, $sequence_lte, $sequence_lt, $filename_gte, $filename_gt, $filename_lte, $filename_lt, $order, $limit, $sort): \OpenAPI\Client\Model\ListFilingFiles200Response
```

SEC Filing Files

List filing files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReferencesecfilingfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filing_id = 'filing_id_example'; // string | Select by filing id.
$sequence = 56; // int | Query by file sequence number.
$filename = 'filename_example'; // string | Query by file name.
$sequence_gte = 56; // int | Search by sequence.
$sequence_gt = 56; // int | Search by sequence.
$sequence_lte = 56; // int | Search by sequence.
$sequence_lt = 56; // int | Search by sequence.
$filename_gte = 'filename_gte_example'; // string | Search by filename.
$filename_gt = 'filename_gt_example'; // string | Search by filename.
$filename_lte = 'filename_lte_example'; // string | Search by filename.
$filename_lt = 'filename_lt_example'; // string | Search by filename.
$order = asc; // string | Order results based on the `sort` field.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 1000.
$sort = sequence; // string | Sort field used for ordering.

try {
    $result = $apiInstance->listFilingFiles($filing_id, $sequence, $filename, $sequence_gte, $sequence_gt, $sequence_lte, $sequence_lt, $filename_gte, $filename_gt, $filename_lte, $filename_lt, $order, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesecfilingfilesApi->listFilingFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filing_id** | **string**| Select by filing id. | [optional] |
| **sequence** | **int**| Query by file sequence number. | [optional] |
| **filename** | **string**| Query by file name. | [optional] |
| **sequence_gte** | **int**| Search by sequence. | [optional] |
| **sequence_gt** | **int**| Search by sequence. | [optional] |
| **sequence_lte** | **int**| Search by sequence. | [optional] |
| **sequence_lt** | **int**| Search by sequence. | [optional] |
| **filename_gte** | **string**| Search by filename. | [optional] |
| **filename_gt** | **string**| Search by filename. | [optional] |
| **filename_lte** | **string**| Search by filename. | [optional] |
| **filename_lt** | **string**| Search by filename. | [optional] |
| **order** | **string**| Order results based on the &#x60;sort&#x60; field. | [optional] |
| **limit** | **int**| Limit the number of results returned, default is 10 and max is 1000. | [optional] [default to 10] |
| **sort** | **string**| Sort field used for ordering. | [optional] [default to &#39;sequence&#39;] |

### Return type

[**\OpenAPI\Client\Model\ListFilingFiles200Response**](../Model/ListFilingFiles200Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
