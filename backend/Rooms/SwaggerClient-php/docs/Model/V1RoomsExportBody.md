# V1RoomsExportBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rid** | **string** | The room ID. | 
**type** | **string** | How you want the room to be exported. The type of export selected determines the remaining required parameters. It can be either &#x60;email&#x60; or &#x60;file&#x60;. | 
**date_from** | **string** | Start date to begin fetching. Use &#x60;dateFrom&#x60; if  the type is &#x60;file&#x60;. By default, it selects the oldest possible date. | [optional] 
**date_to** | **string** | End date for fetching. By default it selects the current date. Use &#x60;dateTo&#x60; if  the &#x60;type&#x60; is  &#x60;file&#x60;. | [optional] 
**format** | **string** | The file type to export as. It can either be &#x60;html&#x60; or &#x60;json&#x60;. Use &#x60;format&#x60; if  the &#x60;type&#x60; is  &#x60;file&#x60;. | [optional] 
**to_users** | **string[]** | An array of users that should recieve the export. ecieve the export. It is required if &#x60;type&#x60; is &#x60;email&#x60;. | [optional] 
**to_emails** | **string[]** | An array of any additional emails that should recieve the export. It is required if &#x60;type&#x60; is &#x60;email&#x60;. | [optional] 
**messages** | **string[]** | An array of  messageId for  the messages that should be exported. It is required if &#x60;type&#x60; is &#x60;email&#x60;. | [optional] 
**subject** | **string** | The subject of the email. It is required if &#x60;type&#x60; is &#x60;email&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

