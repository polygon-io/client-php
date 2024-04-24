# # SnapshotSummary200ResponseResultsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**branding** | [**\OpenAPI\Client\Model\SnapshotSummary200ResponseResultsInnerBranding**](SnapshotSummary200ResponseResultsInnerBranding.md) |  |
**error** | **string** | The error while looking for this ticker. | [optional]
**last_updated** | **int** | The nanosecond timestamp of when this information was updated. |
**market_status** | **string** | The market status for the market that trades this ticker. |
**message** | **string** | The error message while looking for this ticker. | [optional]
**name** | **string** | Name of ticker, forex, or crypto asset. |
**options** | [**\OpenAPI\Client\Model\SnapshotSummary200ResponseResultsInnerOptions**](SnapshotSummary200ResponseResultsInnerOptions.md) |  |
**price** | **float** | The most up to date ticker price. |
**session** | [**\OpenAPI\Client\Model\SnapshotSummary200ResponseResultsInnerSession**](SnapshotSummary200ResponseResultsInnerSession.md) |  |
**ticker** | **string** | Ticker of asset queried. |
**type** | **string** | The market for this ticker of stock, crypto, fx, option. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
