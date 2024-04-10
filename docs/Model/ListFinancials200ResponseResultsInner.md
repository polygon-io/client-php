# # ListFinancials200ResponseResultsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**acceptance_datetime** | **mixed** | The datetime (EST timezone) the filing was accepted by EDGAR in YYYYMMDDHHMMSS format. | [optional]
**cik** | **string** | The CIK number for the company. |
**company_name** | **string** | The company name. |
**end_date** | **string** | The end date of the period that these financials cover in YYYYMMDD format. | [optional]
**filing_date** | **mixed** | The date that the SEC filing which these financials were derived from was made available. Note that this is not necessarily the date when this information became public, as some companies may publish a press release before filing with the SEC. | [optional]
**financials** | [**\OpenAPI\Client\Model\ListFinancials200ResponseResultsInnerFinancials**](ListFinancials200ResponseResultsInnerFinancials.md) |  |
**fiscal_period** | **string** | Fiscal period of the report according to the company (Q1, Q2, Q3, Q4, or FY). |
**fiscal_year** | **string** | Fiscal year of the report according to the company. | [optional]
**source_filing_file_url** | **mixed** | The URL of the specific XBRL instance document within the SEC filing that these financials were derived from. | [optional]
**source_filing_url** | **string** | The URL of the SEC filing that these financials were derived from. | [optional]
**start_date** | **string** | The start date of the period that these financials cover in YYYYMMDD format. | [optional]
**tickers** | **string[]** | The list of ticker symbols for the company. | [optional]
**timeframe** | **string** | The timeframe of the report (quarterly, annual or ttm). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
