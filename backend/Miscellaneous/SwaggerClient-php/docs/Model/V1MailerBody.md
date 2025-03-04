# V1MailerBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **string** | A valid email address to send mails from. | 
**subject** | **string** | The subject of the email. | 
**body** | **string** | The body of the email. You must use &#x60;[unsubscribe]&#x60; for the unsubscription link. You may use &#x60;[name]&#x60;, &#x60;[fname]&#x60;, &#x60;[lname]&#x60; for the user&#x27;s full name, first name or last name, respectively. You may use &#x60;[email]&#x60; for the user&#x27;s email. | [optional] 
**dryrun** | **string** | A boolean value. If true, will only send one email to the same address as in the &#x60;From&#x60; parameter. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

