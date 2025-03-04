# V1UsersCreateBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The display name of the user. | 
**email** | **string** | The email address for the user. | 
**password** | **string** | The password for the user. | 
**username** | **string** | The username for the user. | 
**active** | **bool** | Set the users&#x27; active status.  If the user is deactivated, they can not login. By default, the user is active. | [optional] [default to true]
**nickname** | **string** | The nickname for the user. | [optional] 
**bio** | **string** | The bio for the user. | [optional] 
**join_default_channels** | **bool** | Select whether users should automatically join default channels once they are created. By default, it is set to &#x60;true&#x60;. | [optional] [default to true]
**status_text** | **string** | The status text of the user. | [optional] 
**roles** | **string[]** | The roles to be assigned to this user. If it is not specified, the &#x60;user&#x60; role is assigned by default. **Note:** * For default roles, the role name and ID are the same. For custom roles, the name and ID are different.  * If you are setting a custom role for a user, make sure to enter the custom role ID, and not the role name. Refer to [Roles](https://docs.rocket.chat/use-rocket.chat/workspace-administration/permissions#roles) for more information. | [optional] 
**require_password_change** | **bool** | Should the user be required to change their password when they login? It is set to &#x60;false&#x60; by default | [optional] [default to false]
**set_random_password** | **bool** | Should the user be assigned a random password once they are created? It is set to &#x60;false&#x60; by defualt. | [optional] [default to false]
**send_welcome_email** | **bool** | Should the user get a welcome email? It is set to &#x60;true&#x60; by default. | [optional] [default to false]
**verified** | **bool** | Should the user&#x27;s email address be verified when created? It is set to &#x60;false&#x60; by default. | [optional] [default to false]
**custom_fields** | **object** | A valid JSON object of key-value pairs consisting of additional fields to be added during user registration. By default, the value is &#x60;undefined&#x60;. To save custom fields, you must first define them in the [workspace admin settings](https://docs.rocket.chat/use-rocket.chat/workspace-administration/settings/accounts/custom-fields). For information on how to view the custom fields, see the [Get Users List](https://developer.rocket.chat/reference/api/rest-api/endpoints/user-management/users-endpoints/get-users-list) endpoint. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

