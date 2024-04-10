# # OptionsChain200ResponseResultsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**break_even_price** | **float** | The price of the underlying asset for the contract to break even. For a call, this value is (strike price + premium paid). For a put, this value is (strike price - premium paid). |
**day** | [**\OpenAPI\Client\Model\OptionsChain200ResponseResultsInnerDay**](OptionsChain200ResponseResultsInnerDay.md) |  |
**details** | [**\OpenAPI\Client\Model\OptionsChain200ResponseResultsInnerDetails**](OptionsChain200ResponseResultsInnerDetails.md) |  |
**fmv** | **float** | Fair market value is only available on Business plans. It&#39;s it our proprietary algorithm to generate a real-time, accurate, fair market value of a tradable security. For more information, &lt;a rel&#x3D;\&quot;nofollow\&quot; target&#x3D;\&quot;_blank\&quot; href&#x3D;\&quot;https://polygon.io/contact\&quot;&gt;contact us&lt;/a&gt;. | [optional]
**greeks** | [**\OpenAPI\Client\Model\Snapshots200ResponseResultsInnerGreeks**](Snapshots200ResponseResultsInnerGreeks.md) |  | [optional]
**implied_volatility** | **float** | The market&#39;s forecast for the volatility of the underlying asset, based on this option&#39;s current price. | [optional]
**last_quote** | [**\OpenAPI\Client\Model\OptionsChain200ResponseResultsInnerLastQuote**](OptionsChain200ResponseResultsInnerLastQuote.md) |  |
**last_trade** | [**\OpenAPI\Client\Model\OptionsChain200ResponseResultsInnerLastTrade**](OptionsChain200ResponseResultsInnerLastTrade.md) |  | [optional]
**open_interest** | **float** | The quantity of this contract held at the end of the last trading day. |
**underlying_asset** | [**\OpenAPI\Client\Model\Snapshots200ResponseResultsInnerUnderlyingAsset**](Snapshots200ResponseResultsInnerUnderlyingAsset.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
