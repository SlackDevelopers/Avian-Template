# Apiv1livechattriggersParams

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender** | **string** | The sender of the trigger action. The possible values are:  * &#x60;queue&#x60;: Impersonate the next available agent in the queue.  * &#x60;custom&#x60;: Use a specific agent or bot. | [optional] 
**name** | **string** | Enter the name of the agent or bot that you want to use, if the &#x60;sender&#x60; is &#x60;custom&#x60;. | [optional] 
**msg** | **string** | Enter a message for the visitor, if the action &#x60;name&#x60; is &#x60;send-message&#x60;. | [optional] 
**service_url** | **string** | Enter the external service URL you want to use, if the action &#x60;name&#x60; is &#x60;use-external-service&#x60;. | [optional] 
**service_timeout** | **float** | Enter the service timeout value, in seconds, if the action &#x60;name&#x60; is &#x60;use-external-service&#x60;. | [optional] 
**service_fallback_message** | **string** | Enter a message when the service is not accessible, if the action &#x60;name&#x60; is &#x60;use-external-service&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

