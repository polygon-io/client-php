# # V1HistoricCryptoFromToDateGet200ResponseAllOfTicksInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**c** | **int[]** | A list of condition codes. |
**i** | **string** | The Trade ID which uniquely identifies a trade. These are unique per combination of ticker, exchange, and TRF. For example: A trade for AAPL executed on NYSE and a trade for AAPL executed on NASDAQ could potentially have the same Trade ID. |
**p** | **float** | The price of the trade. This is the actual dollar value per whole share of this trade. A trade of 100 shares with a price of $2.00 would be worth a total dollar value of $200.00. |
**s** | **float** | The size of a trade (also known as volume). |
**t** | **int** | The Unix Msec timestamp for the start of the aggregate window. |
**x** | **int** | The exchange that this crypto trade happened on.   See &lt;a href&#x3D;\&quot;https://polygon.io/docs/crypto/get_v3_reference_exchanges\&quot;&gt;Exchanges&lt;/a&gt; for a mapping of exchanges to IDs. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
