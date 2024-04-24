# # TradesCrypto200ResponseResultsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**conditions** | **int[]** | A list of condition codes. | [optional]
**exchange** | **int** | The exchange ID. See &lt;a href&#x3D;\&quot;https://polygon.io/docs/crypto/get_v3_reference_exchanges\&quot; alt&#x3D;\&quot;Exchanges\&quot;&gt;Exchanges&lt;/a&gt; for Polygon.io&#39;s mapping of exchange IDs. |
**id** | **string** | The Trade ID which uniquely identifies a trade on the exchange that the trade happened on. |
**participant_timestamp** | **int** | The nanosecond Exchange Unix Timestamp. This is the timestamp of when the trade was generated at the exchange. | [optional]
**price** | **float** | The price of the trade in the base currency of the crypto pair. |
**size** | **float** | The size of a trade (also known as volume). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
