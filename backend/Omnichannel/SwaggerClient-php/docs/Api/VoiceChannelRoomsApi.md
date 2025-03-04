# Swagger\Client\VoiceChannelRoomsApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1VoipRoom**](VoiceChannelRoomsApi.md#getapiv1voiproom) | **GET** /api/v1/voip/room | Create or Get Call Center Room
[**getApiV1VoipRooms**](VoiceChannelRoomsApi.md#getapiv1voiprooms) | **GET** /api/v1/voip/rooms | Get List of Call Center Rooms
[**postApiV1VoipRoomClose**](VoiceChannelRoomsApi.md#postapiv1voiproomclose) | **POST** /api/v1/voip/room.close | Close Call Center Room

# **getApiV1VoipRoom**
> \Swagger\Client\Model\InlineResponse20019 getApiV1VoipRoom($x_auth_token, $x_user_id, $token, $agent_id, $rid, $direction)

Create or Get Call Center Room

Creates a VoIP room if the room ID is not passed; otherwise, it gets an existing room based on the room ID and token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoiceChannelRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$token = "token_example"; // string | The visitor token.
$agent_id = "agent_id_example"; // string | The agent ID.
$rid = "rid_example"; // string | The room ID. If the room ID is not provided, a new room is created. If the room ID is provided, the room's details are returned, if the room exists.
$direction = "direction_example"; // string | The direction of the call, inbound or outbound.

try {
    $result = $apiInstance->getApiV1VoipRoom($x_auth_token, $x_user_id, $token, $agent_id, $rid, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceChannelRoomsApi->getApiV1VoipRoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **token** | **string**| The visitor token. |
 **agent_id** | **string**| The agent ID. |
 **rid** | **string**| The room ID. If the room ID is not provided, a new room is created. If the room ID is provided, the room&#x27;s details are returned, if the room exists. | [optional]
 **direction** | **string**| The direction of the call, inbound or outbound. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1VoipRooms**
> \Swagger\Client\Model\InlineResponse200102 getApiV1VoipRooms($x_auth_token, $x_user_id, $agents, $open, $created_at, $closed_at, $tags, $queue, $visitor_id, $direction, $room_name, $offset, $count, $sort, $fields)

Get List of Call Center Rooms

Permissions required:   - For an admin: `view-livechat-rooms`   - For an agent: `view-l-room`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoiceChannelRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$agents = "agents_example"; // string | List of agent information.
$open = "open_example"; // string | The status of the room. The value can be true or false.
$created_at = "created_at_example"; // string | The date and time when the room was created.
$closed_at = "closed_at_example"; // string | The date and time when the room was closed.
$tags = "tags_example"; // string | List of tag information.
$queue = "queue_example"; // string | The ID assigned to the call (opaque ID).
$visitor_id = "visitor_id_example"; // string | The visitor ID.
$direction = "direction_example"; // string | The direction of the call.
$room_name = "room_name_example"; // string | The name of the room.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`
$fields = new \Swagger\Client\Model\null(); //  | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields = `{\"username\": 1}`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.

try {
    $result = $apiInstance->getApiV1VoipRooms($x_auth_token, $x_user_id, $agents, $open, $created_at, $closed_at, $tags, $queue, $visitor_id, $direction, $room_name, $offset, $count, $sort, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceChannelRoomsApi->getApiV1VoipRooms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **agents** | **string**| List of agent information. | [optional]
 **open** | **string**| The status of the room. The value can be true or false. | [optional]
 **created_at** | **string**| The date and time when the room was created. | [optional]
 **closed_at** | **string**| The date and time when the room was closed. | [optional]
 **tags** | **string**| List of tag information. | [optional]
 **queue** | **string**| The ID assigned to the call (opaque ID). | [optional]
 **visitor_id** | **string**| The visitor ID. | [optional]
 **direction** | **string**| The direction of the call. | [optional]
 **room_name** | **string**| The name of the room. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional]
 **fields** | [****](../Model/.md)| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields &#x3D; &#x60;{\&quot;username\&quot;: 1}&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200102**](../Model/InlineResponse200102.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1VoipRoomClose**
> \Swagger\Client\Model\InlineResponse200103 postApiV1VoipRoomClose($x_auth_token, $x_user_id, $body)

Close Call Center Room

Permission required: `inbound-voip-calls`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoiceChannelRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\VoipRoomCloseBody(); // \Swagger\Client\Model\VoipRoomCloseBody | 

try {
    $result = $apiInstance->postApiV1VoipRoomClose($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceChannelRoomsApi->postApiV1VoipRoomClose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\VoipRoomCloseBody**](../Model/VoipRoomCloseBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200103**](../Model/InlineResponse200103.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

