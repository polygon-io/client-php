# # ListTickers200ResponseResultsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Whether or not the asset is actively traded. False means the asset has been delisted. | [optional]
**cik** | **string** | The CIK number for this ticker. Find more information [here](https://en.wikipedia.org/wiki/Central_Index_Key). | [optional]
**composite_figi** | **string** | The composite OpenFIGI number for this ticker. Find more information [here](https://www.openfigi.com/about/figi) | [optional]
**currency_name** | **string** | The name of the currency that this asset is traded with. | [optional]
**delisted_utc** | **\DateTime** | The last date that the asset was traded. | [optional]
**last_updated_utc** | **\DateTime** | The information is accurate up to this time. | [optional]
**locale** | **string** | The locale of the asset. |
**market** | **string** | The market type of the asset. |
**name** | **string** | The name of the asset. For stocks/equities this will be the companies registered name. For crypto/fx this will be the name of the currency or coin pair. |
**primary_exchange** | **string** | The ISO code of the primary listing exchange for this asset. | [optional]
**share_class_figi** | **string** | The share Class OpenFIGI number for this ticker. Find more information [here](https://www.openfigi.com/about/figi) | [optional]
**ticker** | **string** | The exchange symbol that this item is traded under. |
**type** | **string** | The type of the asset. Find the types that we support via our [Ticker Types API](https://polygon.io/docs/stocks/get_v3_reference_tickers_types). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
