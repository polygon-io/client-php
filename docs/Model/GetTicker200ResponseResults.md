# # GetTicker200ResponseResults

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Whether or not the asset is actively traded. False means the asset has been delisted. |
**address** | [**\OpenAPI\Client\Model\GetTicker200ResponseResultsAddress**](GetTicker200ResponseResultsAddress.md) |  | [optional]
**branding** | [**\OpenAPI\Client\Model\GetTicker200ResponseResultsBranding**](GetTicker200ResponseResultsBranding.md) |  | [optional]
**cik** | **string** | The CIK number for this ticker. Find more information [here](https://en.wikipedia.org/wiki/Central_Index_Key). | [optional]
**composite_figi** | **string** | The composite OpenFIGI number for this ticker. Find more information [here](https://www.openfigi.com/about/figi) | [optional]
**currency_name** | **string** | The name of the currency that this asset is traded with. |
**delisted_utc** | **\DateTime** | The last date that the asset was traded. | [optional]
**description** | **string** | A description of the company and what they do/offer. | [optional]
**homepage_url** | **string** | The URL of the company&#39;s website homepage. | [optional]
**list_date** | **string** | The date that the symbol was first publicly listed in the format YYYY-MM-DD. | [optional]
**locale** | **string** | The locale of the asset. |
**market** | **string** | The market type of the asset. |
**market_cap** | **float** | The most recent close price of the ticker multiplied by weighted outstanding shares. | [optional]
**name** | **string** | The name of the asset. For stocks/equities this will be the companies registered name. For crypto/fx this will be the name of the currency or coin pair. |
**phone_number** | **string** | The phone number for the company behind this ticker. | [optional]
**primary_exchange** | **string** | The ISO code of the primary listing exchange for this asset. | [optional]
**round_lot** | **float** | Round lot size of this security. | [optional]
**share_class_figi** | **string** | The share Class OpenFIGI number for this ticker. Find more information [here](https://www.openfigi.com/about/figi) | [optional]
**share_class_shares_outstanding** | **float** | The recorded number of outstanding shares for this particular share class. | [optional]
**sic_code** | **string** | The standard industrial classification code for this ticker.  For a list of SIC Codes, see the SEC&#39;s &lt;a rel&#x3D;\&quot;nofollow\&quot; target&#x3D;\&quot;_blank\&quot; href&#x3D;\&quot;https://www.sec.gov/info/edgar/siccodes.htm\&quot;&gt;SIC Code List&lt;/a&gt;. | [optional]
**sic_description** | **string** | A description of this ticker&#39;s SIC code. | [optional]
**ticker** | **string** | The exchange symbol that this item is traded under. |
**ticker_root** | **string** | The root of a specified ticker. For example, the root of BRK.A is BRK. | [optional]
**ticker_suffix** | **string** | The suffix of a specified ticker. For example, the suffix of BRK.A is A. | [optional]
**total_employees** | **float** | The approximate number of employees for the company. | [optional]
**type** | **string** | The type of the asset. Find the types that we support via our [Ticker Types API](https://polygon.io/docs/stocks/get_v3_reference_tickers_types). | [optional]
**weighted_shares_outstanding** | **float** | The shares outstanding calculated assuming all shares of other share classes are converted to this share class. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
