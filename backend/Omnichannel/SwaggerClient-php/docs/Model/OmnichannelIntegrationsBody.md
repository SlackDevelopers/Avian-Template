# OmnichannelIntegrationsBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**livechat_webhook_url** | **string** | The destination webhook URL where the data will be sent. | [optional] 
**livechat_secret_token** | **string** | A secret token that can be used to verify the webhook. | [optional] 
**livechat_http_timeout** | **int** | The request timeout value | [optional] 
**livechat_webhook_on_start** | **bool** | When set to true, data is sent to the configured webhook URL each time a new chat starts. | [optional] 
**livechat_webhook_on_close** | **bool** | When set to true, data is sent to the configured webhook URL each time a chat is closed. | [optional] 
**livechat_webhook_on_chat_taken** | **bool** | When set to true, data is sent to the configured webhook URL each time a chat is taken. | [optional] 
**livechat_webhook_on_chat_queued** | **bool** | When set to true, data is sent to the configured webhook URL each time a chat is queued. | [optional] 
**livechat_webhook_on_forward** | **bool** | When set to true, data is sent to the configured webhook URL each time a chat is forwarded. | [optional] 
**livechat_webhook_on_offline_msg** | **bool** | When set to true, data is sent to the configured webhook URL each time offline messages are sent. | [optional] 
**livechat_webhook_on_visitor_message** | **bool** | When set to true, data is sent to the configured webhook URL each time a visitor sends a message. | [optional] 
**livechat_webhook_on_agent_message** | **bool** | When set to true, data is sent to the configured webhook URL each time an agent sends a message. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

