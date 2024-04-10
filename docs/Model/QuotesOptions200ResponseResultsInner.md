# # QuotesOptions200ResponseResultsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ask_exchange** | **int** | The ask exchange ID | [optional]
**ask_price** | **float** | The ask price. | [optional]
**ask_size** | **float** | The ask size. This represents the number of round lot orders at the given ask price. The normal round lot size is 100 shares. An ask size of 2 means there are 200 shares available to purchase at the given ask price. | [optional]
**bid_exchange** | **int** | The bid exchange ID | [optional]
**bid_price** | **float** | The bid price. | [optional]
**bid_size** | **float** | The bid size. This represents the number of round lot orders at the given bid price. The normal round lot size is 100 shares. A bid size of 2 means there are 200 shares for purchase at the given bid price. | [optional]
**sequence_number** | **int** | The sequence number represents the sequence in which quote events happened. These are increasing and unique per ticker symbol, but will not always be sequential (e.g., 1, 2, 6, 9, 10, 11). |
**sip_timestamp** | **int** | The nanosecond accuracy SIP Unix Timestamp. This is the timestamp of when the SIP received this quote from the exchange which produced it. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
