# # Snapshots200ResponseResultsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**break_even_price** | **float** | The price of the underlying asset for the contract to break even. For a call, this value is (strike price + premium paid). For a put, this value is (strike price - premium paid). | [optional]
**details** | [**\OpenAPI\Client\Model\Snapshots200ResponseResultsInnerDetails**](Snapshots200ResponseResultsInnerDetails.md) |  | [optional]
**error** | **string** | The error while looking for this ticker. | [optional]
**fmv** | **float** | Fair market value is only available on Business plans. It&#39;s it our proprietary algorithm to generate a real-time, accurate, fair market value of a tradable security. For more information, &lt;a rel&#x3D;\&quot;nofollow\&quot; target&#x3D;\&quot;_blank\&quot; href&#x3D;\&quot;https://polygon.io/contact\&quot;&gt;contact us&lt;/a&gt;. | [optional]
**greeks** | [**\OpenAPI\Client\Model\Snapshots200ResponseResultsInnerGreeks**](Snapshots200ResponseResultsInnerGreeks.md) |  | [optional]
**implied_volatility** | **float** | The market&#39;s forecast for the volatility of the underlying asset, based on this option&#39;s current price. | [optional]
**last_quote** | [**\OpenAPI\Client\Model\Snapshots200ResponseResultsInnerLastQuote**](Snapshots200ResponseResultsInnerLastQuote.md) |  | [optional]
**last_trade** | [**\OpenAPI\Client\Model\Snapshots200ResponseResultsInnerLastTrade**](Snapshots200ResponseResultsInnerLastTrade.md) |  | [optional]
**market_status** | **string** | The market status for the market that trades this ticker. Possible values for stocks, options, crypto, and forex snapshots are open, closed, early_trading, or late_trading. Possible values for indices snapshots are regular_trading, closed, early_trading, and late_trading. | [optional]
**message** | **string** | The error message while looking for this ticker. | [optional]
**name** | **string** | The name of this contract. | [optional]
**open_interest** | **float** | The quantity of this contract held at the end of the last trading day. | [optional]
**session** | [**\OpenAPI\Client\Model\SnapshotSummary200ResponseResultsInnerSession**](SnapshotSummary200ResponseResultsInnerSession.md) |  | [optional]
**ticker** | **string** | The ticker symbol for the asset. |
**type** | **string** | The asset class for this ticker. | [optional]
**underlying_asset** | [**\OpenAPI\Client\Model\Snapshots200ResponseResultsInnerUnderlyingAsset**](Snapshots200ResponseResultsInnerUnderlyingAsset.md) |  | [optional]
**value** | **float** | Value of Index. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
