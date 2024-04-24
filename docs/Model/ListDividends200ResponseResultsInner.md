# # ListDividends200ResponseResultsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cash_amount** | **float** | The cash amount of the dividend per share owned. |
**currency** | **string** | The currency in which the dividend is paid. | [optional]
**declaration_date** | **string** | The date that the dividend was announced. | [optional]
**dividend_type** | **string** | The type of dividend. Dividends that have been paid and/or are expected to be paid on consistent schedules are denoted as CD. Special Cash dividends that have been paid that are infrequent or unusual, and/or can not be expected to occur in the future are denoted as SC. Long-Term and Short-Term capital gain distributions are denoted as LT and ST, respectively. |
**ex_dividend_date** | **string** | The date that the stock first trades without the dividend, determined by the exchange. |
**frequency** | **int** | The number of times per year the dividend is paid out.  Possible values are 0 (one-time), 1 (annually), 2 (bi-annually), 4 (quarterly), and 12 (monthly). |
**pay_date** | **string** | The date that the dividend is paid out. | [optional]
**record_date** | **string** | The date that the stock must be held to receive the dividend, set by the company. | [optional]
**ticker** | **string** | The ticker symbol of the dividend. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
