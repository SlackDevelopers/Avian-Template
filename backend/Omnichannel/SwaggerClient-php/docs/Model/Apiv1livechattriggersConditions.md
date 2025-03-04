# Apiv1livechattriggersConditions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The condition that should take place for the trigger to execute. The possible values are: * &#x60;time-on-site&#x60;: The amount of time a visitor is on the site. * &#x60;page-url&#x60;: The site URL that a visitor visits. * &#x60;chat-opened-by-visitor&#x60;: The chat is opened by the visitor. * &#x60;after-guest-registration&#x60;: The guest is registered to the chat. | [optional] 
**value** | [**OneOfapiv1livechattriggersConditionsValue**](OneOfapiv1livechattriggersConditionsValue.md) | Enter the value of the &#x60;page-url&#x60; (string) or the &#x60;time-on-site&#x60;, in seconds (number). Otherwise, you can enter &#x60;null&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

