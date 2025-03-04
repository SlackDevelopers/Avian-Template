# Apiv1usersUpdateData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the user. | [optional] 
**email** | **string** | The email ID of the user. | [optional] 
**password** | **string** | The password for the user. | [optional] 
**username** | **string** | The username for the user. | [optional] 
**active** | **bool** | Whether the user is active, which determines if they can login or not. | [optional] [default to true]
**roles** | **string[]** | The roles the user has been assigned. | [optional] 
**require_password_change** | **bool** | Whether the user should be required to change their password when they login. | [optional] [default to false]
**send_welcome_email** | **bool** | Whether the user should get a welcome email. | [optional] [default to false]
**verified** | **bool** | Whether the user&#x27;s email address should be verified. | [optional] [default to true]
**custom_fields** | **object** | Any custom fields the user should have on their account. To save custom fields, you must first define the custom fields in the admin panel (Administration &gt; Settings &gt; Accounts &gt; Registration &gt; Custom Fields). For details on how to configure this field, see [Custom Fields](https://docs.rocket.chat/use-rocket.chat/workspace-administration/settings/accounts/custom-fields). For information on how to view the custom fields, see the [Get Users List](https://developer.rocket.chat/reference/api/rest-api/endpoints/user-management/users-endpoints/get-users-list) endpoint. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

