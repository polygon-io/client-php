# # StocksV2NBBO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**t** | **string** | The exchange symbol that this item is traded under. |
**f** | **int** | The nanosecond accuracy TRF(Trade Reporting Facility) Unix Timestamp. This is the timestamp of when the trade reporting facility received this message. |
**q** | **int** | The sequence number represents the sequence in which message events happened. These are increasing and unique per ticker symbol, but will not always be sequential (e.g., 1, 2, 6, 9, 10, 11). |
**t** | **int** | The nanosecond accuracy SIP Unix Timestamp. This is the timestamp of when the SIP received this message from the exchange which produced it. |
**y** | **int** | The nanosecond accuracy Participant/Exchange Unix Timestamp. This is the timestamp of when the quote was actually generated at the exchange. |
**p** | **float** | The ask price. |
**s** | **int** | The ask size. This represents the number of round lot orders at the given ask price. The normal round lot size is 100 shares. An ask size of 2 means there are 200 shares available to purchase at the given ask price. |
**x** | [**\OpenAPI\Client\Model\StocksV2NBBOAllOfX**](StocksV2NBBOAllOfX.md) |  |
**c** | **int[]** | A list of condition codes. |
**i** | **int[]** | The indicators. For more information, see our glossary of [Conditions and Indicators](https://polygon.io/glossary/us/stocks/conditions-indicators). |
**p** | **float** | The bid price. |
**s** | **int** | The bid size. This represents the number of round lot orders at the given bid price. The normal round lot size is 100 shares. A bid size of 2 means there are 200 shares for purchase at the given bid price. |
**x** | [**\OpenAPI\Client\Model\StocksV2NBBOAllOfX**](StocksV2NBBOAllOfX.md) |  |
**z** | **int** | There are 3 tapes which define which exchange the ticker is listed on. These are integers in our objects which represent the letter of the alphabet. Eg: 1 &#x3D; A, 2 &#x3D; B, 3 &#x3D; C. * Tape A is NYSE listed securities * Tape B is NYSE ARCA / NYSE American * Tape C is NASDAQ |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
