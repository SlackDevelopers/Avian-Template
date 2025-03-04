# V1IntegrationsUpdateBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of integration. The possible values are:  * &#x60;webhook-outgoing&#x60;  * &#x60;webhook-incoming&#x60; | 
**name** | **string** | The name of the integration. | 
**enabled** | **bool** | Whether this integration should be enabled or not. | 
**username** | **string** | The username to post this the messages as. | 
**script_enabled** | **bool** | Whether the script should be enabled. | 
**channel** | **string** | The channel, group, or @username. The values can also be &#x60;all_public_channels&#x60;, &#x60;all_private_groups&#x60;, or &#x60;all_direct_messages&#x60;. Comma separated for more than one. | 
**integration_id** | **string** | The integration ID. | 
**urls** | **string[]** | The urls to call whenever this integration is triggered. | [optional] 
**event** | **string** | This field is required only for outgoing integrations.   The type of event can be any of these: &#x60;sendMessage&#x60;, &#x60;fileUploaded&#x60;, &#x60;roomArchived&#x60;, &#x60;roomCreated&#x60;, &#x60;roomJoined&#x60;, &#x60;roomLeft&#x60;, &#x60;userCreated&#x60;. | [optional] 
**trigger_words** | **string** | Specific words, separated by commas, which should trigger this integration. | [optional] 
**alias** | **string** | The alias which should be applied to messages when this integration is processed. | [optional] 
**avatar** | **string** | The logo to apply to the messages that this integration sends. | [optional] 
**emoji** | **string** | The emoji which should be displayed as the avatar for messages from this integration. | [optional] 
**token** | **string** | If your integration requires a special token from the server (API key), use this parameter. | [optional] 
**script** | **string** | Script triggered when this integration is triggered. | [optional] 
**target_channel** | **string** | The channel where messages will be sent to. | [optional] 
**target_url** | **string** | The target url to set. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

