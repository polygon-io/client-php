# # ListTickers200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**count** | **int** | The total number of results for this request. | [optional]
**next_url** | **string** | If present, this value can be used to fetch the next page of data. | [optional]
**request_id** | **string** | A request id assigned by the server. | [optional]
**results** | [**\OpenAPI\Client\Model\ListTickers200ResponseResultsInner[]**](ListTickers200ResponseResultsInner.md) | An array of tickers that match your query.  Note: Although you can query by CUSIP, due to legal reasons we do not return the CUSIP in the response. | [optional]
**status** | **string** | The status of this request&#39;s response. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
