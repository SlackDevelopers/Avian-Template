# Swagger\Client\RoomsApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1AuditRoomsMembers**](RoomsApi.md#getapiv1auditroomsmembers) | **GET** /api/v1/audit/rooms.members | Audit and Get Room Members
[**getApiV1RoomsAdminRooms**](RoomsApi.md#getapiv1roomsadminrooms) | **GET** /api/v1/rooms.adminRooms | Get All Room Admins
[**getApiV1RoomsAdminRoomsGetRoom**](RoomsApi.md#getapiv1roomsadminroomsgetroom) | **GET** /api/v1/rooms.adminRooms.getRoom | Get Admin of Room
[**getApiV1RoomsAutocompleteAdminRooms**](RoomsApi.md#getapiv1roomsautocompleteadminrooms) | **GET** /api/v1/rooms.autocomplete.adminRooms | Admin Autocomplete Room Name for Private and Public Rooms
[**getApiV1RoomsAutocompleteAvailableForTeams**](RoomsApi.md#getapiv1roomsautocompleteavailableforteams) | **GET** /api/v1/rooms.autocomplete.availableForTeams | Autocomplete Room Name for Team
[**getApiV1RoomsAutocompleteChannelAndPrivate**](RoomsApi.md#getapiv1roomsautocompletechannelandprivate) | **GET** /api/v1/rooms.autocomplete.channelAndPrivate | Autocomplete Room Name for Private and Public Rooms
[**getApiV1RoomsCleanHistory**](RoomsApi.md#getapiv1roomscleanhistory) | **POST** /api/v1/rooms.cleanHistory | Clear Room History
[**getApiV1RoomsDelete**](RoomsApi.md#getapiv1roomsdelete) | **POST** /api/v1/rooms.delete | Delete Room
[**getApiV1RoomsGet**](RoomsApi.md#getapiv1roomsget) | **GET** /api/v1/rooms.get | Get Rooms
[**getApiV1RoomsGetDiscussions**](RoomsApi.md#getapiv1roomsgetdiscussions) | **GET** /api/v1/rooms.getDiscussions | Get Room Discussions
[**getApiV1RoomsImages**](RoomsApi.md#getapiv1roomsimages) | **GET** /api/v1/rooms.images | Get Room Images
[**getApiV1RoomsInfo**](RoomsApi.md#getapiv1roomsinfo) | **GET** /api/v1/rooms.info | Get Room Information
[**getApiV1RoomsMembersOrderedByRole**](RoomsApi.md#getapiv1roomsmembersorderedbyrole) | **GET** /api/v1/rooms.membersOrderedByRole | Get Room Members Ordered by Role
[**getApiV1RoomsNameExists**](RoomsApi.md#getapiv1roomsnameexists) | **GET** /api/v1/rooms.nameExists | Check if Room Name Exists
[**getApiV1RoomsUploadRid**](RoomsApi.md#getapiv1roomsuploadrid) | **POST** /api/v1/rooms.upload/{rid} | Upload File to a Room
[**postApiV1RoomsAutocompleteChannelAndPrivate**](RoomsApi.md#postapiv1roomsautocompletechannelandprivate) | **POST** /api/v1/rooms.changeArchivationState | Change Room Archive State
[**postApiV1RoomsCreateDiscussion**](RoomsApi.md#postapiv1roomscreatediscussion) | **POST** /api/v1/rooms.createDiscussion | Create Discussion
[**postApiV1RoomsExport**](RoomsApi.md#postapiv1roomsexport) | **POST** /api/v1/rooms.export | Export Room
[**postApiV1RoomsFavorite**](RoomsApi.md#postapiv1roomsfavorite) | **POST** /api/v1/rooms.favorite | Favorite/Unfavourite a Room
[**postApiV1RoomsHide**](RoomsApi.md#postapiv1roomshide) | **POST** /api/v1/rooms.hide | Hide Room
[**postApiV1RoomsLeave**](RoomsApi.md#postapiv1roomsleave) | **POST** /api/v1/rooms.leave | Leave Room
[**postApiV1RoomsMedia**](RoomsApi.md#postapiv1roomsmedia) | **POST** /api/v1/rooms.media/{rid} | Upload Media Files to a Room
[**postApiV1RoomsMuteUser**](RoomsApi.md#postapiv1roomsmuteuser) | **POST** /api/v1/rooms.muteUser | Mute User in Room
[**postApiV1RoomsSaveNotification**](RoomsApi.md#postapiv1roomssavenotification) | **POST** /api/v1/rooms.saveNotification | Set Room Notifications
[**postApiV1RoomsSaveRoomSettings**](RoomsApi.md#postapiv1roomssaveroomsettings) | **POST** /api/v1/rooms.saveRoomSettings | Save Room Settings
[**postApiV1RoomsUnmuteUser**](RoomsApi.md#postapiv1roomsunmuteuser) | **POST** /api/v1/rooms.unmuteUser | Unmute User in Room

# **getApiV1AuditRoomsMembers**
> \Swagger\Client\Model\InlineResponse20038 getApiV1AuditRoomsMembers($x_auth_token, $x_user_id, $room_id, $filter, $count, $offset, $sort)

Audit and Get Room Members

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/Enterprise%20tag.svg\" alt=\"Enterprise\" style=\"display: block; margin: auto\"></div>  Audit any public or private room and view the room members. You don't need to be a member of the room.  Permission required: `view-members-list-all-rooms`  ### Changelog | Version | Description | | ------- | ----------- | | 6.12.0   | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | Enter the room ID that you want to audit.
$filter = "filter_example"; // string | Filter the results using the text that you want to view.
$count = 56; // int | The number of items to return.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}

try {
    $result = $apiInstance->getApiV1AuditRoomsMembers($x_auth_token, $x_user_id, $room_id, $filter, $count, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1AuditRoomsMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **room_id** | **string**| Enter the room ID that you want to audit. |
 **filter** | **string**| Filter the results using the text that you want to view. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20038**](../Model/InlineResponse20038.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1RoomsAdminRooms**
> \Swagger\Client\Model\InlineResponse20026 getApiV1RoomsAdminRooms($x_auth_token, $x_user_id, $types, $filter, $count, $sort, $offset)

Get All Room Admins

Retrieves all rooms and admin information.  Permission required: `view-room-administration`  ### Changelog | Version | Description  | | ------- |--------------| | 2.4.0  | Added         |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$types = array("types_example"); // string[] | The room types. The possible room types are:  - `d`: Direct messages  - `c`: Public channel  - `p`: Private channel  - `discussions`: Team or channel discussions  - `teams`: Workspace teams  - `l`: Livechat  - `v`: Omnichannel VoIP rooms
$filter = "filter_example"; // string | The rooms name
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.

try {
    $result = $apiInstance->getApiV1RoomsAdminRooms($x_auth_token, $x_user_id, $types, $filter, $count, $sort, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsAdminRooms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **types** | [**string[]**](../Model/string.md)| The room types. The possible room types are:  - &#x60;d&#x60;: Direct messages  - &#x60;c&#x60;: Public channel  - &#x60;p&#x60;: Private channel  - &#x60;discussions&#x60;: Team or channel discussions  - &#x60;teams&#x60;: Workspace teams  - &#x60;l&#x60;: Livechat  - &#x60;v&#x60;: Omnichannel VoIP rooms | [optional]
 **filter** | **string**| The rooms name | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1RoomsAdminRoomsGetRoom**
> \Swagger\Client\Model\InlineResponse20033 getApiV1RoomsAdminRoomsGetRoom($x_auth_token, $x_user_id, $rid)

Get Admin of Room

Retrieves the admin of a room.  Permission required: `view-room-administration`  ### Changelog | Version | Description     | | ------- | --------------- | | 2.4.0   | Added           |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$rid = "rid_example"; // string | The room ID.

try {
    $result = $apiInstance->getApiV1RoomsAdminRoomsGetRoom($x_auth_token, $x_user_id, $rid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsAdminRoomsGetRoom: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1RoomsAutocompleteAdminRooms**
> \Swagger\Client\Model\InlineResponse20032 getApiV1RoomsAutocompleteAdminRooms($x_auth_token, $x_user_id, $selector)

Admin Autocomplete Room Name for Private and Public Rooms

List public and private rooms whose names match a given string, excluding <a href=\"https://docs.rocket.chat/docs/direct-messages\" target=\"_blank\">DMs</a>, and <a href=\"https://docs.rocket.chat/docs/omnichannel\" target=\"_blank\">omnichannel rooms</a>. This endpoint is valuable when performing search operations. Only workspace administrators can use it. Any one of the following permissions are required: * `view-room-administration` * `can-audit`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$selector = "selector_example"; // string | The term to be completed. It applies to room name and display name.

try {
    $result = $apiInstance->getApiV1RoomsAutocompleteAdminRooms($x_auth_token, $x_user_id, $selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsAutocompleteAdminRooms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **selector** | **string**| The term to be completed. It applies to room name and display name. |

### Return type

[**\Swagger\Client\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1RoomsAutocompleteAvailableForTeams**
> \Swagger\Client\Model\InlineResponse20032 getApiV1RoomsAutocompleteAvailableForTeams($x_auth_token, $x_user_id, $name)

Autocomplete Room Name for Team

Autocompletes room name available for conversion to team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$name = "name_example"; // string | The name of the room

try {
    $result = $apiInstance->getApiV1RoomsAutocompleteAvailableForTeams($x_auth_token, $x_user_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsAutocompleteAvailableForTeams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **name** | **string**| The name of the room |

### Return type

[**\Swagger\Client\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1RoomsAutocompleteChannelAndPrivate**
> \Swagger\Client\Model\InlineResponse20032 getApiV1RoomsAutocompleteChannelAndPrivate($x_auth_token, $x_user_id, $selector)

Autocomplete Room Name for Private and Public Rooms

List the public and private rooms whose names match a given string, excluding <a href=\"https://docs.rocket.chat/docs/discussions\" target=\"_blank\">discussions</a>, <a href=\"https://docs.rocket.chat/docs/direct-messages\" target=\"_blank\">DMs</a>, and <a href=\"https://docs.rocket.chat/docs/omnichannel\" target=\"_blank\">omnichannel rooms</a>. The endpoint is valuable when performing search operations. It returns only rooms that the user belongs to.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$selector = "selector_example"; // string | The term to be completed. It only applies to room name.

try {
    $result = $apiInstance->getApiV1RoomsAutocompleteChannelAndPrivate($x_auth_token, $x_user_id, $selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsAutocompleteChannelAndPrivate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **selector** | **string**| The term to be completed. It only applies to room name. |

### Return type

[**\Swagger\Client\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1RoomsCleanHistory**
> \Swagger\Client\Model\InlineResponse2002 getApiV1RoomsCleanHistory($x_auth_token, $x_user_id, $body)

Clear Room History

Cleans up a room by removing messages from the provided time range. For details, see the <a href='https://docs.rocket.chat/docs/room-actions#prune-messages-from-a-room' target='_blank'>Prune messages from a room</a> section.  Permission required: `clean-channel-history`  ### Changelog | Version | Description            | | ------- | ---------------------- | | 0.64.0  | Added                  | | 0.67.0  | Added fields `limit`, `excludePinned`, `filesOnly` and `users` |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1RoomsCleanHistoryBody(); // \Swagger\Client\Model\V1RoomsCleanHistoryBody | 

try {
    $result = $apiInstance->getApiV1RoomsCleanHistory($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsCleanHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1RoomsCleanHistoryBody**](../Model/V1RoomsCleanHistoryBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1RoomsDelete**
> \Swagger\Client\Model\InlineResponse2002 getApiV1RoomsDelete($x_auth_token, $x_user_id, $body)

Delete Room

Delete a room from the workspace. The following permissions are required: * `delete-c`: To delete a public room. * `delete-d`: To delete direct messages. * `delete-p`: To delete private rooms. * `delete-team`: To delete a team. * `delete-team-channel`: To delete a channel within a team, also requires the `delete-c` permission. * `delete-team-group`: To delete a private channel within a team, also requires the `delete-p` permission.  ### Changelog | Version | Description   | | ------- | --------------| | 5.4.0   | Added         |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1RoomsDeleteBody(); // \Swagger\Client\Model\V1RoomsDeleteBody | 

try {
    $result = $apiInstance->getApiV1RoomsDelete($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1RoomsDeleteBody**](../Model/V1RoomsDeleteBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1RoomsGet**
> \Swagger\Client\Model\InlineResponse20029 getApiV1RoomsGet($x_auth_token, $x_user_id, $updated_since)

Get Rooms

Get all opened rooms (all joined public & private channels and all DMs) of the authenticated user.  ### Changelog | Version | Description   | | ------- | --------------| | 0.72.0  | Added         |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$updated_since = "updated_since_example"; // string | A date as an ISO string. When you provide the `updatedSince` query parameter, then the update and remove in the response will contain only those updated and removed since the specified date and time.

try {
    $result = $apiInstance->getApiV1RoomsGet($x_auth_token, $x_user_id, $updated_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **updated_since** | **string**| A date as an ISO string. When you provide the &#x60;updatedSince&#x60; query parameter, then the update and remove in the response will contain only those updated and removed since the specified date and time. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1RoomsGetDiscussions**
> \Swagger\Client\Model\InlineResponse20028 getApiV1RoomsGetDiscussions($x_auth_token, $x_user_id, $room_name, $room_id, $query, $count, $fields, $offset, $sort)

Get Room Discussions

Get all <a href='https://docs.rocket.chat/docs/discussions' target='_blank'>discussions</a> of a room.   ### Changelog | Version | Description   | | ------- | --------------| | 1.0.0   | Added         |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_name = "room_name_example"; // string | The room name.  It is required if the `roomId` is not provided.
$room_id = "room_id_example"; // string | The room ID. It is required if the `roomName` is not provided.
$query = new \Swagger\Client\Model\null(); //  | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": `query={ \"name\": { \"$regex\": \"g\" } }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$count = 56; // int | The number of items to return.
$fields = "fields_example"; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: `fields={ \"username\": 1 }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}

try {
    $result = $apiInstance->getApiV1RoomsGetDiscussions($x_auth_token, $x_user_id, $room_name, $room_id, $query, $count, $fields, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsGetDiscussions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **room_name** | **string**| The room name.  It is required if the &#x60;roomId&#x60; is not provided. | [optional]
 **room_id** | **string**| The room ID. It is required if the &#x60;roomName&#x60; is not provided. | [optional]
 **query** | [****](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: &#x60;query&#x3D;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: &#x60;fields&#x3D;{ \&quot;username\&quot;: 1 }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1RoomsImages**
> \Swagger\Client\Model\InlineResponse20037 getApiV1RoomsImages($x_auth_token, $x_user_id, $room_id, $starting_from_id, $offset, $count)

Get Room Images

Retrieves the images of a room that you are a member of.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | The room ID.
$starting_from_id = "starting_from_id_example"; // string | Filter images using the file ID.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.

try {
    $result = $apiInstance->getApiV1RoomsImages($x_auth_token, $x_user_id, $room_id, $starting_from_id, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **room_id** | **string**| The room ID. |
 **starting_from_id** | **string**| Filter images using the file ID. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1RoomsInfo**
> \Swagger\Client\Model\InlineResponse20027 getApiV1RoomsInfo($x_user_id, $x_auth_token, $room_id, $room_name, $fields)

Get Room Information

Retrieves the information about the room.  ### Changelog | Version | Description | | ------- | ----------- | |0.72.0   | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$room_id = "room_id_example"; // string | The room ID. It is required if the `roomName` is not provided.
$room_name = "room_name_example"; // string | The room name.  It is required if the `roomId` is not provided.
$fields = "fields_example"; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: `fields={ \"username\": 1 }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.

try {
    $result = $apiInstance->getApiV1RoomsInfo($x_user_id, $x_auth_token, $room_id, $room_name, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **room_id** | **string**| The room ID. It is required if the &#x60;roomName&#x60; is not provided. | [optional]
 **room_name** | **string**| The room name.  It is required if the &#x60;roomId&#x60; is not provided. | [optional]
 **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: &#x60;fields&#x3D;{ \&quot;username\&quot;: 1 }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1RoomsMembersOrderedByRole**
> \Swagger\Client\Model\InlineResponse20039 getApiV1RoomsMembersOrderedByRole($x_auth_token, $x_user_id, $room_id, $room_name, $filter, $offset, $count, $sort, $status)

Get Room Members Ordered by Role

Get room members ordered by their roles. This endpoint sorts the members according to their role in the room in the order `Owners` > `Moderators` > all other members. This can be reversed using the query paramter `sort={\"rolePriority\":-1}`. You need not be a member of the room.  If the room is a broadcast room, you need the `view-broadcast-member-list` permission to view the room members.  ### Changelog | Version | Description | | ------- | ----------- | | 7.3.0   | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | Enter the room ID.
$room_name = "room_name_example"; // string | Instead of using the room ID, you can enter the room name.
$filter = "filter_example"; // string | Filter the results by using the text that you want to view.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$status = array("status_example"); // string[] | Enter the user status for which you want the results. For example, `online`, `away`, `offline`.

try {
    $result = $apiInstance->getApiV1RoomsMembersOrderedByRole($x_auth_token, $x_user_id, $room_id, $room_name, $filter, $offset, $count, $sort, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsMembersOrderedByRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **room_id** | **string**| Enter the room ID. |
 **room_name** | **string**| Instead of using the room ID, you can enter the room name. | [optional]
 **filter** | **string**| Filter the results by using the text that you want to view. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]
 **status** | [**string[]**](../Model/string.md)| Enter the user status for which you want the results. For example, &#x60;online&#x60;, &#x60;away&#x60;, &#x60;offline&#x60;. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1RoomsNameExists**
> \Swagger\Client\Model\InlineResponse20035 getApiV1RoomsNameExists($x_auth_token, $x_user_id, $room_name)

Check if Room Name Exists

Check if the room name exists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_name = "room_name_example"; // string | Enter the room name that you want to check.

try {
    $result = $apiInstance->getApiV1RoomsNameExists($x_auth_token, $x_user_id, $room_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsNameExists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **room_name** | **string**| Enter the room name that you want to check. |

### Return type

[**\Swagger\Client\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1RoomsUploadRid**
> \Swagger\Client\Model\InlineResponse20030 getApiV1RoomsUploadRid($x_auth_token, $x_user_id, $rid, $file, $msg, $description, $tmid, $custom_fields)

Upload File to a Room

> This endpoint has been deprecated and is scheduled for removal in the 8.0.0 <a href=\"https://github.com/RocketChat/Rocket.Chat/releases\" target=\"_blank\">release</a>. Use the `rooms.media` endpoint instead.  Post a message with the attached file to a dedicated room. ### Changelog | Version | Description                          | | ------- | ------------------------------------ | | 6.8.0   | Allow custom fields in messages      |  | 1.0.0   | Return Message object on file upload | | 0.62.0  | Added                                |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$rid = "rid_example"; // string | The room ID to which you want to upload the file.
$file = "file_example"; // string | 
$msg = "msg_example"; // string | 
$description = "description_example"; // string | 
$tmid = "tmid_example"; // string | 
$custom_fields = new \stdClass; // object | 

try {
    $result = $apiInstance->getApiV1RoomsUploadRid($x_auth_token, $x_user_id, $rid, $file, $msg, $description, $tmid, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsUploadRid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **rid** | **string**| The room ID to which you want to upload the file. |
 **file** | **string****string**|  | [optional]
 **msg** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **tmid** | **string**|  | [optional]
 **custom_fields** | [**object**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1RoomsAutocompleteChannelAndPrivate**
> \Swagger\Client\Model\InlineResponse2002 postApiV1RoomsAutocompleteChannelAndPrivate($x_auth_token, $x_user_id, $body)

Change Room Archive State

Archive or unarchive a room. Permissions required: * `archive-room`: To archive a room. * `unarchive-room`: To unarchive a room.  ### Changelog | Version | Description      | | ------- | ---------------- | | 3.3.0  | Added             |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1RoomsChangeArchivationStateBody(); // \Swagger\Client\Model\V1RoomsChangeArchivationStateBody | 

try {
    $result = $apiInstance->postApiV1RoomsAutocompleteChannelAndPrivate($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->postApiV1RoomsAutocompleteChannelAndPrivate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1RoomsChangeArchivationStateBody**](../Model/V1RoomsChangeArchivationStateBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1RoomsCreateDiscussion**
> \Swagger\Client\Model\InlineResponse20036 postApiV1RoomsCreateDiscussion($x_auth_token, $x_user_id, $body)

Create Discussion

Creates a new discussion for the room. It requires at least one of the following permissions: `start-discussion` OR `start-discussion-other-user`, AND must be with the following setting enabled: `Discussion_enabled`.  ### Changelog | Version | Description | | ------- | ----------- | | 1.0.0   | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1RoomsCreateDiscussionBody(); // \Swagger\Client\Model\V1RoomsCreateDiscussionBody | 

try {
    $result = $apiInstance->postApiV1RoomsCreateDiscussion($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->postApiV1RoomsCreateDiscussion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1RoomsCreateDiscussionBody**](../Model/V1RoomsCreateDiscussionBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1RoomsExport**
> \Swagger\Client\Model\InlineResponse2002 postApiV1RoomsExport($x_auth_token, $x_user_id, $body)

Export Room

Export room messages to a file or email. When exporting to a file, the ZIP file is stored in the `/tmp` directory on the Rocket.Chat server, and its details are recorded in the `rocketchat_user_data_files` collection in MongoDB.  Permission required: `mail-messages`  ### Changelog  | Version | Description                          | | ------- | ------------------------------------ | | 3.8.0   | Added                                |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1RoomsExportBody(); // \Swagger\Client\Model\V1RoomsExportBody | 

try {
    $result = $apiInstance->postApiV1RoomsExport($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->postApiV1RoomsExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1RoomsExportBody**](../Model/V1RoomsExportBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1RoomsFavorite**
> \Swagger\Client\Model\InlineResponse2002 postApiV1RoomsFavorite($x_auth_token, $x_user_id, $body)

Favorite/Unfavourite a Room

Mark/Unmark a room as favourite.  ### Changelog | Version | Description   | | ------- | --------------| | 0.64.0   | Added        |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1RoomsFavoriteBody(); // \Swagger\Client\Model\V1RoomsFavoriteBody | 

try {
    $result = $apiInstance->postApiV1RoomsFavorite($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->postApiV1RoomsFavorite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1RoomsFavoriteBody**](../Model/V1RoomsFavoriteBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1RoomsHide**
> \Swagger\Client\Model\InlineResponse20068 postApiV1RoomsHide($x_auth_token, $x_user_id, $body)

Hide Room

Hide rooms without restrictions based on type. You can only hide a room if you have access to it.  ### Changelog  | Version | Description                          | | ------- | ------------------------------------ | | 7.4.0   | Added                                |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1RoomsHideBody(); // \Swagger\Client\Model\V1RoomsHideBody | 

try {
    $result = $apiInstance->postApiV1RoomsHide($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->postApiV1RoomsHide: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1RoomsHideBody**](../Model/V1RoomsHideBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20068**](../Model/InlineResponse20068.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1RoomsLeave**
> \Swagger\Client\Model\InlineResponse2002 postApiV1RoomsLeave($x_auth_token, $x_user_id, $body)

Leave Room

Leave a room. The following permissions are required: * `leave-c`: To leave a public room. * `leave-p`: To leave private room.  ### Changelog | Version | Description   | | ------- | --------------| | 0.72.0  | Added         |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1RoomsLeaveBody(); // \Swagger\Client\Model\V1RoomsLeaveBody | 

try {
    $result = $apiInstance->postApiV1RoomsLeave($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->postApiV1RoomsLeave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1RoomsLeaveBody**](../Model/V1RoomsLeaveBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1RoomsMedia**
> \Swagger\Client\Model\InlineResponse20031 postApiV1RoomsMedia($x_auth_token, $x_user_id, $rid, $file, $msg)

Upload Media Files to a Room

Upload media files to a room.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$rid = "rid_example"; // string | The id of the room.
$file = "file_example"; // string | 
$msg = "msg_example"; // string | 

try {
    $result = $apiInstance->postApiV1RoomsMedia($x_auth_token, $x_user_id, $rid, $file, $msg);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->postApiV1RoomsMedia: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **rid** | **string**| The id of the room. |
 **file** | **string****string**|  | [optional]
 **msg** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1RoomsMuteUser**
> \Swagger\Client\Model\InlineResponse2002 postApiV1RoomsMuteUser($x_auth_token, $x_user_id, $body)

Mute User in Room

Mute a particular user in a room. Permission required: `mute-user`. The room becomes read-only for the muted user. They can still view messages but cannot send any until unmuted.  ### Changelog  | Version | Description                          | | ------- | ------------------------------------ | | 6.8.0   | Added                                |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1RoomsMuteUserBody(); // \Swagger\Client\Model\V1RoomsMuteUserBody | 

try {
    $result = $apiInstance->postApiV1RoomsMuteUser($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->postApiV1RoomsMuteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1RoomsMuteUserBody**](../Model/V1RoomsMuteUserBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1RoomsSaveNotification**
> \Swagger\Client\Model\InlineResponse2002 postApiV1RoomsSaveNotification($x_auth_token, $x_user_id, $body)

Set Room Notifications

Set the <a href='https://docs.rocket.chat/docs/room-actions#manage-room-notifications' target='_blank'>notification settings</a> of a specific room.  ### Changelog | Version | Description | | ------- | ----------- | |0.63.0  | Added        |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1RoomsSaveNotificationBody(); // \Swagger\Client\Model\V1RoomsSaveNotificationBody | 

try {
    $result = $apiInstance->postApiV1RoomsSaveNotification($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->postApiV1RoomsSaveNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1RoomsSaveNotificationBody**](../Model/V1RoomsSaveNotificationBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1RoomsSaveRoomSettings**
> \Swagger\Client\Model\InlineResponse20034 postApiV1RoomsSaveRoomSettings($x_auth_token, $x_user_id, $body)

Save Room Settings

Permission required: `edit-room`  ### Changelog | Version | Description | | ------- | ------------| | 3.13.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1RoomsSaveRoomSettingsBody(); // \Swagger\Client\Model\V1RoomsSaveRoomSettingsBody | 

try {
    $result = $apiInstance->postApiV1RoomsSaveRoomSettings($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->postApiV1RoomsSaveRoomSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1RoomsSaveRoomSettingsBody**](../Model/V1RoomsSaveRoomSettingsBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1RoomsUnmuteUser**
> \Swagger\Client\Model\InlineResponse2002 postApiV1RoomsUnmuteUser($x_auth_token, $x_user_id, $body)

Unmute User in Room

Unmute a particular user in a room. Permission required: `mute-user`  ### Changelog  | Version | Description                          | | ------- | ------------------------------------ | | 6.8.0   | Added                                |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1RoomsUnmuteUserBody(); // \Swagger\Client\Model\V1RoomsUnmuteUserBody | 

try {
    $result = $apiInstance->postApiV1RoomsUnmuteUser($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->postApiV1RoomsUnmuteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1RoomsUnmuteUserBody**](../Model/V1RoomsUnmuteUserBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

