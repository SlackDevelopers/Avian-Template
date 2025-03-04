# V1UsersSetActiveStatusBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active_status** | **bool** | The value of the active status. | [default to true]
**user_id** | **string** | The user ID whose status value is to be changed. | 
**confirm_relinquish** | **bool** | Allows the user to be deactivated even if it is the last owner of a room. If &#x60;activeStatus&#x3D;false&#x60; &amp; &#x60;confirmRelinquish&#x3D;true&#x60; and the user is the last remaining owner of a room, the oldest member of that room will be chosen as the new owner. | [optional] [default to false]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

