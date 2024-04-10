# # V2SnapshotLocaleUsMarketsStocksTickersGet200ResponseAllOfTickersInnerLastTrade

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**c** | **int[]** | The trade conditions. |
**i** | **string** | The Trade ID which uniquely identifies a trade. These are unique per combination of ticker, exchange, and TRF. For example: A trade for AAPL executed on NYSE and a trade for AAPL executed on NASDAQ could potentially have the same Trade ID. |
**p** | **float** | The price of the trade. This is the actual dollar value per whole share of this trade. A trade of 100 shares with a price of $2.00 would be worth a total dollar value of $200.00. |
**s** | **int** | The size (volume) of the trade. |
**t** | **int** | The nanosecond accuracy SIP Unix Timestamp. This is the timestamp of when the SIP received this message from the exchange which produced it. |
**x** | **int** | The exchange ID. See &lt;a href&#x3D;\&quot;https://polygon.io/docs/stocks/get_v3_reference_exchanges\&quot; alt&#x3D;\&quot;Exchanges\&quot;&gt;Exchanges&lt;/a&gt; for Polygon.io&#39;s mapping of exchange IDs. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
