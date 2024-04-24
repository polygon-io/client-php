# # IndicesSnapshot200ResponseResultsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | **string** | The error while looking for this ticker. | [optional]
**last_updated** | **int** | The nanosecond timestamp of when this information was updated. |
**market_status** | **string** | The market status for the market that trades this ticker. | [optional]
**message** | **string** | The error message while looking for this ticker. | [optional]
**name** | **string** | Name of Index. | [optional]
**session** | [**\OpenAPI\Client\Model\IndicesSnapshot200ResponseResultsInnerSession**](IndicesSnapshot200ResponseResultsInnerSession.md) |  | [optional]
**ticker** | **string** | Ticker of asset queried. |
**timeframe** | **string** | The time relevance of the data. |
**type** | **string** | The indices market. | [optional]
**value** | **float** | Value of Index. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
