# # Snapshots200ResponseResultsInnerLastQuote

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ask** | **float** | The ask price. |
**ask_exchange** | **int** | The ask side exchange ID. See &lt;a href&#x3D;\&quot;https://polygon.io/docs/options/get_v3_reference_exchanges\&quot; alt&#x3D;\&quot;Exchanges\&quot;&gt;Exchanges&lt;/a&gt; for Polygon.io&#39;s mapping of exchange IDs. | [optional]
**ask_size** | **float** | The ask size. This represents the number of round lot orders at the given ask price. The normal round lot size is 100 shares. An ask size of 2 means there are 200 shares available to purchase at the given ask price. | [optional]
**bid** | **float** | The bid price. |
**bid_exchange** | **int** | The bid side exchange ID. See &lt;a href&#x3D;\&quot;https://polygon.io/docs/options/get_v3_reference_exchanges\&quot; alt&#x3D;\&quot;Exchanges\&quot;&gt;Exchanges&lt;/a&gt; for Polygon.io&#39;s mapping of exchange IDs. | [optional]
**bid_size** | **float** | The bid size. This represents the number of round lot orders at the given bid price. The normal round lot size is 100 shares. A bid size of 2 means there are 200 shares for purchase at the given bid price. | [optional]
**last_updated** | **int** | The nanosecond timestamp of when this information was updated. |
**midpoint** | **float** | The average of the bid and ask price. | [optional]
**timeframe** | **string** | The time relevance of the data. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
