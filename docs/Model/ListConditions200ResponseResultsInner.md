# # ListConditions200ResponseResultsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**abbreviation** | **string** | A commonly-used abbreviation for this condition. | [optional]
**asset_class** | **string** | An identifier for a group of similar financial instruments. |
**data_types** | **string[]** | Data types that this condition applies to. |
**description** | **string** | A short description of the semantics of this condition. | [optional]
**exchange** | **int** | If present, mapping this condition from a Polygon.io code to a SIP symbol depends on this attribute. In other words, data with this condition attached comes exclusively from the given exchange. | [optional]
**id** | **int** | An identifier used by Polygon.io for this condition. Unique per data type. |
**legacy** | **bool** | If true, this condition is from an old version of the SIPs&#39; specs and no longer is used. Other conditions may or may not reuse the same symbol as this one. | [optional]
**name** | **string** | The name of this condition. |
**sip_mapping** | [**\OpenAPI\Client\Model\ListConditions200ResponseResultsInnerSipMapping**](ListConditions200ResponseResultsInnerSipMapping.md) |  |
**type** | **string** | An identifier for a collection of related conditions. |
**update_rules** | [**\OpenAPI\Client\Model\ListConditions200ResponseResultsInnerUpdateRules**](ListConditions200ResponseResultsInnerUpdateRules.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
