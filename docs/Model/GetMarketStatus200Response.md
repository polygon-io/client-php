# # GetMarketStatus200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**after_hours** | **bool** | Whether or not the market is in post-market hours. | [optional]
**currencies** | [**\OpenAPI\Client\Model\GetMarketStatus200ResponseCurrencies**](GetMarketStatus200ResponseCurrencies.md) |  | [optional]
**early_hours** | **bool** | Whether or not the market is in pre-market hours. | [optional]
**exchanges** | [**\OpenAPI\Client\Model\GetMarketStatus200ResponseExchanges**](GetMarketStatus200ResponseExchanges.md) |  | [optional]
**indices_groups** | [**\OpenAPI\Client\Model\GetMarketStatus200ResponseIndicesGroups**](GetMarketStatus200ResponseIndicesGroups.md) |  | [optional]
**market** | **string** | The status of the market as a whole. | [optional]
**server_time** | **string** | The current time of the server, returned as a date-time in RFC3339 format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
