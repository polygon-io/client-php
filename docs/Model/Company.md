# # Company

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Indicates if the security is actively listed.  If false, this means the company is no longer listed and cannot be traded. | [optional]
**bloomberg** | **string** | The Bloomberg guid for the symbol. | [optional]
**ceo** | **string** | The name of the company&#39;s current CEO. | [optional]
**cik** | **string** | The official CIK guid used for SEC database/filings. | [optional]
**country** | **string** | The country in which the company is registered. | [optional]
**description** | **string** | A description of the company and what they do/offer. | [optional]
**employees** | **int** | The approximate number of employees for the company. | [optional]
**exchange** | **string** | The symbol&#39;s primary exchange. | [optional]
**exchange_symbol** | **string** | The exchange code (id) of the symbol&#39;s primary exchange. | [optional]
**figi** | **string** | The OpenFigi project guid for the symbol. (&lt;a rel&#x3D;\&quot;nofollow\&quot; target&#x3D;\&quot;_blank\&quot; href&#x3D;\&quot;https://openfigi.com/\&quot;&gt;https://openfigi.com/&lt;/a&gt;) | [optional]
**hq_address** | **string** | The street address for the company&#39;s headquarters. | [optional]
**hq_country** | **string** | The country in which the company&#39;s headquarters is located. | [optional]
**hq_state** | **string** | The state in which the company&#39;s headquarters is located. | [optional]
**industry** | **string** | The industry in which the company operates. | [optional]
**lei** | **string** | The Legal Entity Identifier (LEI) guid for the symbol. (&lt;a rel&#x3D;\&quot;nofollow\&quot; target&#x3D;\&quot;_blank\&quot; href&#x3D;\&quot;https://en.wikipedia.org/wiki/Legal_Entity_Identifier\&quot;&gt;https://en.wikipedia.org/wiki/Legal_Entity_Identifier&lt;/a&gt;) | [optional]
**listdate** | **\DateTime** | The date that the symbol was listed on the exchange. | [optional]
**logo** | **string** | The URL of the entity&#39;s logo. | [optional]
**marketcap** | **int** | The current market cap for the company. | [optional]
**name** | **string** | The name of the company/entity. | [optional]
**phone** | **string** | The phone number for the company. This is usually a corporate contact number. | [optional]
**sector** | **string** | The sector of the indsutry in which the symbol operates. | [optional]
**sic** | **int** | Standard Industrial Classification (SIC) id for the symbol. (&lt;a rel&#x3D;\&quot;nofollow\&quot; target&#x3D;\&quot;_blank\&quot; href&#x3D;\&quot;https://en.wikipedia.org/wiki/Standard_Industrial_Classification\&quot;&gt;https://en.wikipedia.org/wiki/Legal_Entity_Identifier&lt;/a&gt;) | [optional]
**similar** | **string[]** | A list of ticker symbols for similar companies. | [optional]
**symbol** | **string** | The exchange symbol that this item is traded under. | [optional]
**tags** | **string[]** |  | [optional]
**type** | **string** | The type or class of the security.  (&lt;a alt&#x3D;\&quot;Full List of Ticker Types\&quot; href&#x3D;\&quot;https://polygon.io/docs/stocks/get_v3_reference_tickers_types\&quot;&gt;Full List of Ticker Types&lt;/a&gt;) | [optional]
**updated** | **\DateTime** | The last time this company record was updated. | [optional]
**url** | **string** | The URL of the company&#39;s website | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
