# Swagger\Client\LivechatRoomsApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteApiV1LivechatRoomRidPriority**](LivechatRoomsApi.md#deleteapiv1livechatroomridpriority) | **DELETE** /api/v1/livechat/room/{rid}/priority | Remove Livechat Room Priority
[**getApiV1LivechatRoom**](LivechatRoomsApi.md#getapiv1livechatroom) | **GET** /api/v1/livechat/room | Get or Create Livechat Rooms
[**getApiV1LivechatRoomJoin**](LivechatRoomsApi.md#getapiv1livechatroomjoin) | **GET** /api/v1/livechat/room.join | Join Livechat Room
[**getApiV1LivechatRooms**](LivechatRoomsApi.md#getapiv1livechatrooms) | **GET** /api/v1/livechat/rooms | Get List of Livechat Rooms
[**getApiV1LivechatTransferHistoryRid**](LivechatRoomsApi.md#getapiv1livechattransferhistoryrid) | **GET** /api/v1/livechat/transfer.history/{rid} | Get Department Transfer History
[**postApiV1LivechatRoomClose**](LivechatRoomsApi.md#postapiv1livechatroomclose) | **POST** /api/v1/livechat/room.close | Close Livechat Room by Visitor
[**postApiV1LivechatRoomCloseByUser**](LivechatRoomsApi.md#postapiv1livechatroomclosebyuser) | **POST** /api/v1/livechat/room.closeByUser | Close Livechat Room
[**postApiV1LivechatRoomForward**](LivechatRoomsApi.md#postapiv1livechatroomforward) | **POST** /api/v1/livechat/room.forward | Forward Livechat Room
[**postApiV1LivechatRoomOnHold**](LivechatRoomsApi.md#postapiv1livechatroomonhold) | **POST** /api/v1/livechat/room.onHold | Put Livechat Room on Hold
[**postApiV1LivechatRoomRidPriority**](LivechatRoomsApi.md#postapiv1livechatroomridpriority) | **POST** /api/v1/livechat/room/{rid}/priority | Set Livechat Room Priority
[**postApiV1LivechatRoomSaveInfo**](LivechatRoomsApi.md#postapiv1livechatroomsaveinfo) | **POST** /api/v1/livechat/room.saveInfo | Update Livechat Room
[**postApiV1LivechatRoomSurvey**](LivechatRoomsApi.md#postapiv1livechatroomsurvey) | **POST** /api/v1/livechat/room.survey | Survey Livechat Room
[**postApiV1LivechatRoomTransfer**](LivechatRoomsApi.md#postapiv1livechatroomtransfer) | **POST** /api/v1/livechat/room.transfer | Transfer Livechat Room
[**postApiV1LivechatUpload**](LivechatRoomsApi.md#postapiv1livechatupload) | **POST** /api/v1/livechat/upload/{rid} | Upload Files to Room

# **deleteApiV1LivechatRoomRidPriority**
> \Swagger\Client\Model\InlineResponse2003 deleteApiV1LivechatRoomRidPriority($x_auth_token, $x_user_id, $rid)

Remove Livechat Room Priority

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Remove the priority set to a Livechat room.<br>  Permission required: `view-l-room`  ### Changelog | Version | Description  | | ------- |--------------| | 6.0.0  | Added         |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$rid = "rid_example"; // string | The room ID.

try {
    $result = $apiInstance->deleteApiV1LivechatRoomRidPriority($x_auth_token, $x_user_id, $rid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->deleteApiV1LivechatRoomRidPriority: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **rid** | **string**| The room ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatRoom**
> \Swagger\Client\Model\InlineResponse20019 getApiV1LivechatRoom($token, $rid, $agent_id)

Get or Create Livechat Rooms

Get the data of an existing room of a visitor. If a room doesn't exist for the visitor, a new room is created.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | The visitor token.
$rid = "rid_example"; // string | The room ID.
$agent_id = "agent_id_example"; // string | The agent ID.

try {
    $result = $apiInstance->getApiV1LivechatRoom($token, $rid, $agent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->getApiV1LivechatRoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| The visitor token. |
 **rid** | **string**| The room ID. | [optional]
 **agent_id** | **string**| The agent ID. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatRoomJoin**
> \Swagger\Client\Model\InlineResponse2003 getApiV1LivechatRoomJoin($x_auth_token, $x_user_id, $room_id)

Join Livechat Room

Call this endpoint to join a Livechat room. Permission required: `view-l-room`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | The room ID that you want to join.

try {
    $result = $apiInstance->getApiV1LivechatRoomJoin($x_auth_token, $x_user_id, $room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->getApiV1LivechatRoomJoin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **room_id** | **string**| The room ID that you want to join. |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatRooms**
> \Swagger\Client\Model\InlineResponse20018 getApiV1LivechatRooms($x_auth_token, $x_user_id, $agents, $department_id, $open, $created_at, $closed_at, $tags, $custom_fields, $room_name, $onhold, $queued, $units, $offset, $count, $sort, $fields)

Get List of Livechat Rooms

Retrieves a list of Livechat rooms. You can use the available query parameters to filter the response. At least one of the following permissions is required: * `view-livechat-rooms` * `view-l-room`  ### Changelog | Version      | Description |  | ---------------- | ------------| |7.0.0             | Remove support of filtering by agent's username | |2.4.0             | Added support to the parameter `roomName`| |2.0.0             | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$agents = array("agents_example"); // string[] | A list of agent IDs.
$department_id = "department_id_example"; // string | The department ID. You can also enter multiple IDs as an array of string values.
$open = true; // bool | If it should filter by open/closed rooms.
$created_at = "created_at_example"; // string | An object representing when the room was created (can also be filtered only with `start` or `end`).
$closed_at = "closed_at_example"; // string | An object representing when the room was closed (can also be filtered only with `start` or `end`).
$tags = "tags_example"; // string | A list of tags.
$custom_fields = "custom_fields_example"; // string | An object with custom fields to be filtered (previously created and populated at custom fields endpoints)
$room_name = "room_name_example"; // string | The room's name.
$onhold = true; // bool | Whether you want to include livechat rooms that are on hold or not.
$queued = "queued_example"; // string | Whether you want to include queued rooms or not.
$units = array("units_example"); // string[] | Enter the unit IDs you want to include as an array of string values.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`
$fields = new \Swagger\Client\Model\null(); //  | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields = `{\"username\": 1}`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.

try {
    $result = $apiInstance->getApiV1LivechatRooms($x_auth_token, $x_user_id, $agents, $department_id, $open, $created_at, $closed_at, $tags, $custom_fields, $room_name, $onhold, $queued, $units, $offset, $count, $sort, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->getApiV1LivechatRooms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **agents** | [**string[]**](../Model/string.md)| A list of agent IDs. | [optional]
 **department_id** | **string**| The department ID. You can also enter multiple IDs as an array of string values. | [optional]
 **open** | **bool**| If it should filter by open/closed rooms. | [optional]
 **created_at** | **string**| An object representing when the room was created (can also be filtered only with &#x60;start&#x60; or &#x60;end&#x60;). | [optional]
 **closed_at** | **string**| An object representing when the room was closed (can also be filtered only with &#x60;start&#x60; or &#x60;end&#x60;). | [optional]
 **tags** | **string**| A list of tags. | [optional]
 **custom_fields** | **string**| An object with custom fields to be filtered (previously created and populated at custom fields endpoints) | [optional]
 **room_name** | **string**| The room&#x27;s name. | [optional]
 **onhold** | **bool**| Whether you want to include livechat rooms that are on hold or not. | [optional]
 **queued** | **string**| Whether you want to include queued rooms or not. | [optional]
 **units** | [**string[]**](../Model/string.md)| Enter the unit IDs you want to include as an array of string values. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional]
 **fields** | [****](../Model/.md)| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields &#x3D; &#x60;{\&quot;username\&quot;: 1}&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatTransferHistoryRid**
> \Swagger\Client\Model\InlineResponse20022 getApiV1LivechatTransferHistoryRid($rid, $x_auth_token, $x_user_id, $count, $offset, $sort)

Get Department Transfer History

Retrieve the conversation transfer history from one department to another. Permission required: `view-livechat-rooms`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$rid = "rid_example"; // string | The room ID
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$count = 56; // int | The number of items to return.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`

try {
    $result = $apiInstance->getApiV1LivechatTransferHistoryRid($rid, $x_auth_token, $x_user_id, $count, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->getApiV1LivechatTransferHistoryRid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rid** | **string**| The room ID |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **count** | **int**| The number of items to return. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatRoomClose**
> \Swagger\Client\Model\InlineResponse20020 postApiV1LivechatRoomClose($body)

Close Livechat Room by Visitor

If you are a visitor, use this endpoint to close the livechat room.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LivechatRoomCloseBody(); // \Swagger\Client\Model\LivechatRoomCloseBody | 

try {
    $result = $apiInstance->postApiV1LivechatRoomClose($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->postApiV1LivechatRoomClose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LivechatRoomCloseBody**](../Model/LivechatRoomCloseBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatRoomCloseByUser**
> \Swagger\Client\Model\InlineResponse2003 postApiV1LivechatRoomCloseByUser($x_auth_token, $x_user_id, $body)

Close Livechat Room

If you are an Omnichannel user (agent, manager), use this endpoint to close the livechat room.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\LivechatRoomCloseByUserBody(); // \Swagger\Client\Model\LivechatRoomCloseByUserBody | 

try {
    $result = $apiInstance->postApiV1LivechatRoomCloseByUser($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->postApiV1LivechatRoomCloseByUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\LivechatRoomCloseByUserBody**](../Model/LivechatRoomCloseByUserBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatRoomForward**
> \Swagger\Client\Model\InlineResponse2003 postApiV1LivechatRoomForward($x_auth_token, $x_user_id, $body)

Forward Livechat Room

The chatbot agent forwards the chat to a human agent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\LivechatRoomForwardBody(); // \Swagger\Client\Model\LivechatRoomForwardBody | 

try {
    $result = $apiInstance->postApiV1LivechatRoomForward($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->postApiV1LivechatRoomForward: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\LivechatRoomForwardBody**](../Model/LivechatRoomForwardBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatRoomOnHold**
> \Swagger\Client\Model\InlineResponse2003 postApiV1LivechatRoomOnHold($x_user_id, $x_auth_token, $body)

Put Livechat Room on Hold

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Put an active Livechat conversation on hold.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$body = new \Swagger\Client\Model\LivechatRoomOnHoldBody(); // \Swagger\Client\Model\LivechatRoomOnHoldBody | 

try {
    $result = $apiInstance->postApiV1LivechatRoomOnHold($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->postApiV1LivechatRoomOnHold: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\LivechatRoomOnHoldBody**](../Model/LivechatRoomOnHoldBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatRoomRidPriority**
> \Swagger\Client\Model\InlineResponse2003 postApiV1LivechatRoomRidPriority($x_auth_token, $x_user_id, $rid, $body)

Set Livechat Room Priority

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Set the priority of a Livechat room.<br>  Permission required: `view-l-room`  ### Changelog | Version | Description  | | ------- |--------------| | 6.0.0  | Added         |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$rid = "rid_example"; // string | The room ID.
$body = new \Swagger\Client\Model\RidPriorityBody(); // \Swagger\Client\Model\RidPriorityBody | 

try {
    $result = $apiInstance->postApiV1LivechatRoomRidPriority($x_auth_token, $x_user_id, $rid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->postApiV1LivechatRoomRidPriority: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **rid** | **string**| The room ID. |
 **body** | [**\Swagger\Client\Model\RidPriorityBody**](../Model/RidPriorityBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatRoomSaveInfo**
> \Swagger\Client\Model\InlineResponse2003 postApiV1LivechatRoomSaveInfo($x_auth_token, $x_user_id, $body)

Update Livechat Room

Edit a Livechat room. Update the topic, tags, and other details of a Livechat room.  Permission required: `view-l-room`  ### Changelog | Version      | Description | | ---------------- | ------------| |5.3.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\LivechatRoomSaveInfoBody(); // \Swagger\Client\Model\LivechatRoomSaveInfoBody | 

try {
    $result = $apiInstance->postApiV1LivechatRoomSaveInfo($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->postApiV1LivechatRoomSaveInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\LivechatRoomSaveInfoBody**](../Model/LivechatRoomSaveInfoBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatRoomSurvey**
> \Swagger\Client\Model\InlineResponse20023 postApiV1LivechatRoomSurvey($body)

Survey Livechat Room

Provide feedback on a Livechat room.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LivechatRoomSurveyBody(); // \Swagger\Client\Model\LivechatRoomSurveyBody | 

try {
    $result = $apiInstance->postApiV1LivechatRoomSurvey($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->postApiV1LivechatRoomSurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LivechatRoomSurveyBody**](../Model/LivechatRoomSurveyBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatRoomTransfer**
> \Swagger\Client\Model\InlineResponse20021 postApiV1LivechatRoomTransfer($body)

Transfer Livechat Room

> This endpoint has been deprecated in the 7.0.0 <a href=\"https://github.com/RocketChat/Rocket.Chat/releases\" target=\"_blank\">release</a>. Use the <a href=\"https://developer.rocket.chat/apidocs/forward-livechat-room\" target=\"_blank\">Forward Livechat Room</a> endpoint instead.  Transfer an omnichannel conversation to another department.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LivechatRoomTransferBody(); // \Swagger\Client\Model\LivechatRoomTransferBody | 

try {
    $result = $apiInstance->postApiV1LivechatRoomTransfer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->postApiV1LivechatRoomTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LivechatRoomTransferBody**](../Model/LivechatRoomTransferBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatUpload**
> \Swagger\Client\Model\InlineResponse20024 postApiV1LivechatUpload($x_visitor_token, $rid, $file, $description)

Upload Files to Room

Upload files to a Livechat room.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_visitor_token = "x_visitor_token_example"; // string | The visitor token
$rid = "rid_example"; // string | The room ID.
$file = "file_example"; // string | 
$description = "description_example"; // string | 

try {
    $result = $apiInstance->postApiV1LivechatUpload($x_visitor_token, $rid, $file, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->postApiV1LivechatUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_visitor_token** | **string**| The visitor token |
 **rid** | **string**| The room ID. |
 **file** | **string**|  | [optional]
 **description** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

