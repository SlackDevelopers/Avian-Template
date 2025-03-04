# V1GroupsCreateBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the new private group. | 
**read_only** | **bool** | Set if the private channel is read-only or not. The default value is false. | [optional] 
**members** | **string[]** | The users to add to the private channel when it is created. | [optional] 
**exclude_self** | **bool** | If set to true, the user calling the endpoint is not added as a member of the private channel. The default value is false. | [optional] 
**custom_fields** | **object** | If you have defined custom fields for your workspace, you can provide them in this object parameter. | [optional] 
**extra_data** | **object** | Enter the following details for the object: - &#x60;broadcast&#x60;: Whether the group should be a broadcast group - &#x60;encrypted&#x60;: Whether the group should be encrypted.  - &#x60;teamId&#x60;: Enter the team ID for which you want to create a group. You will get an error if the team does not exist.  For more information, see &lt;a href&#x3D;\&quot;https://docs.rocket.chat/docs/channels\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Channels&lt;/a&gt;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

