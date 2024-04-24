# # ListOptionsContracts200ResponseResultsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_underlyings** | [**\OpenAPI\Client\Model\ListOptionsContracts200ResponseResultsInnerAdditionalUnderlyingsInner[]**](ListOptionsContracts200ResponseResultsInnerAdditionalUnderlyingsInner.md) | If an option contract has additional underlyings or deliverables associated with it, they will appear here. See &lt;a rel&#x3D;\&quot;noopener noreferrer nofollow\&quot; target&#x3D;\&quot;_blank\&quot; href&#x3D;\&quot;https://www.optionseducation.org/referencelibrary/faq/splits-mergers-spinoffs-bankruptcies\&quot;&gt;here&lt;/a&gt; for some examples of what might cause a contract to have additional underlyings. | [optional]
**cfi** | **string** | The 6 letter CFI code of the contract (defined in &lt;a rel&#x3D;\&quot;nofollow\&quot; target&#x3D;\&quot;_blank\&quot; href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_10962\&quot;&gt;ISO 10962&lt;/a&gt;) | [optional]
**contract_type** | **string** | The type of contract. Can be \&quot;put\&quot;, \&quot;call\&quot;, or in some rare cases, \&quot;other\&quot;. | [optional]
**correction** | **int** | The correction number for this option contract. | [optional]
**exercise_style** | **string** | The exercise style of this contract. See &lt;a rel&#x3D;\&quot;nofollow\&quot; target&#x3D;\&quot;_blank\&quot; href&#x3D;\&quot;https://en.wikipedia.org/wiki/Option_style\&quot;&gt;this link&lt;/a&gt; for more details on exercise styles. | [optional]
**expiration_date** | **string** | The contract&#39;s expiration date in YYYY-MM-DD format. | [optional]
**primary_exchange** | **string** | The MIC code of the primary exchange that this contract is listed on. | [optional]
**shares_per_contract** | **float** | The number of shares per contract for this contract. | [optional]
**strike_price** | **float** | The strike price of the option contract. | [optional]
**ticker** | **string** | The ticker for the option contract. | [optional]
**underlying_ticker** | **string** | The underlying ticker that the option contract relates to. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
