# V1RolesAddUserToRoleBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**role_name** | **string** | The role name. Alternatively, use the &#x60;roleId&#x60; parameter. Note:    * For default roles, the role name and ID are the same. For custom roles, the name and ID are different.    * If you are setting a custom role for a user, make sure to enter the custom role ID and not the role name.   * The &#x60;roleName&#x60; parameter will be removed from 7.0.0. Use the &#x60;roleId&#x60; parameter instead.   Refer to [Roles](https://docs.rocket.chat/setup-and-configure/roles-in-rocket.chat) for more information. | 
**username** | **string** | The user name. | 
**room_id** | **string** | The ID of the room where the user should be assigned a role, if it is a room role. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

