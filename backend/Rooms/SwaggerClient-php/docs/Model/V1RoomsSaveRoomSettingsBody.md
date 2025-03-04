# V1RoomsSaveRoomSettingsBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rid** | **string** | The room ID. | 
**room_name** | **string** | The name of the room. | [optional] 
**room_description** | **string** | The description of the room. | [optional] 
**room_avatar** | **string** | The base64 image. | [optional] 
**featured** | **bool** | Whether the room is featured or not. | [optional] 
**room_topic** | **string** | The topic of the room. | [optional] 
**room_announcement** | **string** | The announcement of the room. | [optional] 
**room_custom_fields** | **object** | An object of the custom fields of the room. | [optional] 
**room_type** | **string** | The type of the room. It could be &#x60;c&#x60; for public rooms or &#x60;p&#x60; for private rooms. | [optional] 
**read_only** | **bool** | Whether the room is read-only or not. | [optional] 
**react_when_read_only** | **bool** | Whether users can react when the room is read-only. | [optional] 
**system_messages** | **string[]** | The system messages that the room supports. | [optional] 
**default** | **bool** | Whether the room is the default room or not. | [optional] 
**join_code** | **string** | The join code of the room. | [optional] 
**streaming_options** | **object** | The streaming options of the room. | [optional] 
**retention_enabled** | **bool** | Whether retention is enabled for the room or not. | [optional] 
**retention_max_age** | **string** | The maximum age (in days) of messages to be retained in the room. | [optional] 
**retention_exclude_pinned** | **bool** | Whether to exclude pinned messages from retention or not. | [optional] 
**retention_files_only** | **bool** | Whether to retain only files in the room or not. | [optional] 
**retention_ignore_threads** | **bool** | Whether to ignore threads when retaining messages or not. | [optional] 
**retention_override_global** | **bool** | Whether to override the global retention settings for the room or not. | [optional] 
**encrypted** | **bool** | Whether the room is encrypted or not. | [optional] 
**favorite** | **object** | The favorite settings of the room. Whether the room is marked as favorite and whether it is set as the default room. | [optional] 
**sidepanel** | [**\Swagger\Client\Model\Apiv1roomsSaveRoomSettingsSidepanel**](Apiv1roomsSaveRoomSettingsSidepanel.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

