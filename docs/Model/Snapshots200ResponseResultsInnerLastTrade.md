# # Snapshots200ResponseResultsInnerLastTrade

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**conditions** | **int[]** | A list of condition codes. | [optional]
**exchange** | **int** | The exchange ID. See &lt;a href&#x3D;\&quot;https://polygon.io/docs/stocks/get_v3_reference_exchanges\&quot; alt&#x3D;\&quot;Exchanges\&quot;&gt;Exchanges&lt;/a&gt; for Polygon.io&#39;s mapping of exchange IDs. | [optional]
**id** | **string** | The Trade ID which uniquely identifies a trade. These are unique per combination of ticker, exchange, and TRF. For example: A trade for AAPL executed on NYSE and a trade for AAPL executed on NASDAQ could potentially have the same Trade ID. | [optional]
**last_updated** | **int** | The nanosecond timestamp of when this information was updated. |
**participant_timestamp** | **int** | The nanosecond Exchange Unix Timestamp. This is the timestamp of when the trade was generated at the exchange. |
**price** | **float** | The price of the trade. This is the actual dollar value per whole share of this trade. A trade of 100 shares with a price of $2.00 would be worth a total dollar value of $200.00. |
**sip_timestamp** | **int** | The nanosecond accuracy SIP Unix Timestamp. This is the timestamp of when the SIP received this trade from the exchange which produced it. | [optional]
**size** | **int** | The size of a trade (also known as volume). |
**timeframe** | **string** | The time relevance of the data. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
