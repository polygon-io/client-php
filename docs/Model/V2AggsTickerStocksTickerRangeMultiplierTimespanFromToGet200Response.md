# # V2AggsTickerStocksTickerRangeMultiplierTimespanFromToGet200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ticker** | **string** | The exchange symbol that this item is traded under. |
**adjusted** | **bool** | Whether or not this response was adjusted for splits. |
**query_count** | **int** | The number of aggregates (minute or day) used to generate the response. |
**request_id** | **string** | A request id assigned by the server. |
**results_count** | **int** | The total number of results for this request. |
**status** | **string** | The status of this request&#39;s response. |
**results** | [**\OpenAPI\Client\Model\V2AggsTickerStocksTickerRangeMultiplierTimespanFromToGet200ResponseAllOfResultsInner[]**](V2AggsTickerStocksTickerRangeMultiplierTimespanFromToGet200ResponseAllOfResultsInner.md) |  | [optional]
**next_url** | **string** | If present, this value can be used to fetch the next page of data. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
