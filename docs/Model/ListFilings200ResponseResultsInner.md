# # ListFilings200ResponseResultsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**acceptance_datetime** | **string** | The datetime when the filing was accepted by EDGAR in EST (format: YYYYMMDDHHMMSS) |
**accession_number** | **string** | Filing Accession Number |
**entities** | [**\OpenAPI\Client\Model\ListFilings200ResponseResultsInnerEntitiesInner[]**](ListFilings200ResponseResultsInnerEntitiesInner.md) | Entities related to the filing (e.g. the document filers). |
**files_count** | **int** | The number of files associated with the filing. |
**filing_date** | **string** | The date when the filing was filed in YYYYMMDD format. |
**id** | **string** | Unique identifier for the filing. |
**period_of_report_date** | **string** | The period of report for the filing in YYYYMMDD format. |
**source_url** | **string** | The source URL is a link back to the upstream source for this filing document. |
**type** | **string** | Filing Type |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
