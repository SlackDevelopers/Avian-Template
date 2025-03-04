# V1IntegrationsCreateBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of integration to create. The possible values are:  * &#x60;webhook-incoming&#x60;  * &#x60;webhook-outgoing&#x60; | 
**username** | **string** | The username to post this the messages as. | 
**channel** | **string** | The channel, group, or @username. The value can also be &#x60;all_public_channels&#x60;, &#x60;all_private_groups&#x60;, or &#x60;all_direct_messages&#x60;. Comma separated for more than one. | 
**script_enabled** | **bool** | Whether the script should be enabled. | 
**script** | **string** | The script that is triggered when this integration is triggered. | [optional] 
**name** | **string** | The name of the integration. | 
**enabled** | **bool** | Whether this integration should be enabled or not. | 
**alias** | **string** | The alias which should be applied to messages when this integration is processed. | [optional] 
**avatar** | **string** | The logo to apply to the messages that this integration sends. For example, http://res.guggy.com/logo_128.png | [optional] 
**emoji** | **string** | The emoji which should be displayed as the avatar for messages from this integration. | [optional] 
**event** | **string** | **Required for outgoing integrations.**  The type of event can be any of the following:  * &#x60;sendMessage&#x60; * &#x60;fileUploaded&#x60; * &#x60;roomArchived&#x60; * &#x60;roomCreated&#x60; * &#x60;roomJoined&#x60; * &#x60;roomLeft&#x60; * &#x60;userCreated&#x60; | 
**urls** | **string[]** | **Required for outgoing integrations.**  The urls to call whenever this integration is triggered. | 
**trigger_words** | **string** | This is an outgoing integration parameter. Specific words, separated by commas, that should trigger this integration. | [optional] 
**token** | **string** | This is an outgoing integration parameter. If your integration requires a special token from the server (API key), use this parameter. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

