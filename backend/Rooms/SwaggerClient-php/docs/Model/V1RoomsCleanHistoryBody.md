# V1RoomsCleanHistoryBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**room_id** | **string** | The room ID. | 
**latest** | **string** | The end of time range of messages. | 
**oldest** | **string** | The start of the time range of messages. | 
**inclusive** | **bool** | Whether messages which land on the latest and oldest dates should be included. By default, the value is false. | [optional] 
**exclude_pinned** | **bool** | Whether pinned messages should be deleted. By default, the value is false. | [optional] 
**files_only** | **bool** | Whether to only delete files and keep messages intact. By default, the value is false. | [optional] 
**users** | **string[]** | Specific set of users whose content to delete. By default, the value is [], that is, everyone. | [optional] 
**limit** | **int** | The amount of messages to prune. By default, the value is 0 (all). | [optional] 
**ignore_discussion** | **bool** | Determines if messages from discussions should be pruned. By default, the value is true. | [optional] 
**ignore_threads** | **bool** | Determines if messages from threads should be pruned. By default, the value is true. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

