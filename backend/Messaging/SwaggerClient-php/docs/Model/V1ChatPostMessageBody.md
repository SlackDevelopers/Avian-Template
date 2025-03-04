# V1ChatPostMessageBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**alias** | **string** | This will cause the message&#x27;s name to appear as the given alias, but your username will still be displayed. | [optional] 
**avatar** | **string** | If provided, the avatar will be displayed as the provided image URL. | [optional] 
**channel** | **string** |  | [optional] 
**emoji** | **string** | If provided, the avatar will be displayed as an emoji. | [optional] 
**room_id** | **string** | The room ID where the message is to be sent. You can use channel name or username. The channel name must have the &#x60;#&#x60; prefix. &#x60;@&#x60; refers to username. | 
**text** | **string** | The message text to send, it is optional because of attachments. | [optional] 
**attachments** | [**\Swagger\Client\Model\Apiv1chatPostMessageAttachments[]**](Apiv1chatPostMessageAttachments.md) |  | [optional] 
**tmid** | **string** | The message ID of the original message to reply to or to create a thread on. | [optional] 
**tmshow** | **bool** | Defaults to true when the &#x60;tmid&#x60; parameter is specified. Message will also be shown in the room if the value is true. | [optional] 
**custom_fields** | **object** | You can add custom fields for messages. For example, set priorities for messages.  You must enable this option and define the validation in the workspace settings. See the &lt;a href&#x3D;\&quot;https://docs.rocket.chat/docs/message\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Message&lt;/a&gt; settings for further information. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

