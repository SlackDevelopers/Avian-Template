# LivechatTriggersBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** | If you want to update a trigger, enter the trigger ID. | [optional] 
**name** | **string** | Enter a name for the trigger. | 
**description** | **string** | Enter a description for the trigger. | 
**enabled** | **bool** | Whether the trigger is enabled for use or not. | [default to true]
**run_once** | **bool** | Whether the trigger will be run only once for each visitor. | [default to false]
**conditions** | [**\Swagger\Client\Model\Apiv1livechattriggersConditions[]**](Apiv1livechattriggersConditions.md) | Enter the conditions for the trigger to execute. | 
**actions** | [**\Swagger\Client\Model\Apiv1livechattriggersActions[]**](Apiv1livechattriggersActions.md) | The actions that take place once the trigger is executed. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

