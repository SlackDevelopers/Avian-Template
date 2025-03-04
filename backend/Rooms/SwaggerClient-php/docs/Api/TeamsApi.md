# Swagger\Client\TeamsApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1TeamsAutocomplete**](TeamsApi.md#getapiv1teamsautocomplete) | **GET** /api/v1/teams.autocomplete | Autocomplete Team
[**getApiV1TeamsInfo**](TeamsApi.md#getapiv1teamsinfo) | **GET** /api/v1/teams.info | Get Team Info
[**getApiV1TeamsList**](TeamsApi.md#getapiv1teamslist) | **GET** /api/v1/teams.list | Get List of Teams
[**getApiV1TeamsListAll**](TeamsApi.md#getapiv1teamslistall) | **GET** /api/v1/teams.listAll | Get List of All Teams
[**getApiV1TeamsListChildren**](TeamsApi.md#getapiv1teamslistchildren) | **GET** /api/v1/teams.listChildren | List Rooms and Discussions of a Team
[**getApiV1TeamsListRooms**](TeamsApi.md#getapiv1teamslistrooms) | **GET** /api/v1/teams.listRooms | List Rooms of a Team
[**getApiV1TeamsListRoomsOfUser**](TeamsApi.md#getapiv1teamslistroomsofuser) | **GET** /api/v1/teams.listRoomsOfUser | List User Rooms of a Team
[**getApiV1TeamsMembers**](TeamsApi.md#getapiv1teamsmembers) | **GET** /api/v1/teams.members | List Team Members
[**postApiV1TeamsAddMembers**](TeamsApi.md#postapiv1teamsaddmembers) | **POST** /api/v1/teams.addMembers | Add Members to the Team
[**postApiV1TeamsAddRooms**](TeamsApi.md#postapiv1teamsaddrooms) | **POST** /api/v1/teams.addRooms | Add Rooms to a Team
[**postApiV1TeamsConvertToChannel**](TeamsApi.md#postapiv1teamsconverttochannel) | **POST** /api/v1/teams.convertToChannel | Convert Team to Channel
[**postApiV1TeamsCreate**](TeamsApi.md#postapiv1teamscreate) | **POST** /api/v1/teams.create | Create a New Team
[**postApiV1TeamsDelete**](TeamsApi.md#postapiv1teamsdelete) | **POST** /api/v1/teams.delete | Delete a Team
[**postApiV1TeamsLeave**](TeamsApi.md#postapiv1teamsleave) | **POST** /api/v1/teams.leave | Leave a Team
[**postApiV1TeamsRemoveMember**](TeamsApi.md#postapiv1teamsremovemember) | **POST** /api/v1/teams.removeMember | Remove Member from Team
[**postApiV1TeamsRemoveRoom**](TeamsApi.md#postapiv1teamsremoveroom) | **POST** /api/v1/teams.removeRoom | Remove Room from the Team
[**postApiV1TeamsUpdate**](TeamsApi.md#postapiv1teamsupdate) | **POST** /api/v1/teams.update | Update a Team
[**postApiV1TeamsUpdateMembers**](TeamsApi.md#postapiv1teamsupdatemembers) | **POST** /api/v1/teams.updateMember | Update Team Member Info
[**postApiV1TeamsUpdateRoom**](TeamsApi.md#postapiv1teamsupdateroom) | **POST** /api/v1/teams.updateRoom | Update Room in a Team

# **getApiV1TeamsAutocomplete**
> \Swagger\Client\Model\InlineResponse20043 getApiV1TeamsAutocomplete($x_auth_token, $x_user_id, $name)

Autocomplete Team

List the teams whose names match a given pattern.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$name = "name_example"; // string | The pattern (search filter for team names).

try {
    $result = $apiInstance->getApiV1TeamsAutocomplete($x_auth_token, $x_user_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getApiV1TeamsAutocomplete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **name** | **string**| The pattern (search filter for team names). |

### Return type

[**\Swagger\Client\Model\InlineResponse20043**](../Model/InlineResponse20043.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1TeamsInfo**
> \Swagger\Client\Model\InlineResponse20041 getApiV1TeamsInfo($x_auth_token, $x_user_id, $team_id, $team_name)

Get Team Info

Gets a team's information. If the team is not public, the request sender must be a member of the team, or must have the `view-all-teams` permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$team_id = "team_id_example"; // string | The team id.  It is required if the `teamName` is not provided.
$team_name = "team_name_example"; // string | The team name.  It is required if the `teamId` is not provided.

try {
    $result = $apiInstance->getApiV1TeamsInfo($x_auth_token, $x_user_id, $team_id, $team_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getApiV1TeamsInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **team_id** | **string**| The team id.  It is required if the &#x60;teamName&#x60; is not provided. | [optional]
 **team_name** | **string**| The team name.  It is required if the &#x60;teamId&#x60; is not provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20041**](../Model/InlineResponse20041.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1TeamsList**
> \Swagger\Client\Model\InlineResponse20040 getApiV1TeamsList($x_auth_token, $x_user_id, $sort, $offset, $count, $query)

Get List of Teams

Lists the public and private teams the request sender is part of.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$query = new \Swagger\Client\Model\null(); //  | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": `query={ \"name\": { \"$regex\": \"g\" } }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.

try {
    $result = $apiInstance->getApiV1TeamsList($x_auth_token, $x_user_id, $sort, $offset, $count, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getApiV1TeamsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **query** | [****](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: &#x60;query&#x3D;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20040**](../Model/InlineResponse20040.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1TeamsListAll**
> \Swagger\Client\Model\InlineResponse20040 getApiV1TeamsListAll($x_auth_token, $x_user_id, $offset, $count)

Get List of All Teams

Lists all the teams and their information.  Permission required: `view-all-teams`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.

try {
    $result = $apiInstance->getApiV1TeamsListAll($x_auth_token, $x_user_id, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getApiV1TeamsListAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20040**](../Model/InlineResponse20040.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1TeamsListChildren**
> \Swagger\Client\Model\InlineResponse20049 getApiV1TeamsListChildren($x_user_id, $x_auth_token, $team_name, $team_id, $offset, $count, $sort, $filter, $type, $room_id)

List Rooms and Discussions of a Team

Lists a particular team's public rooms, discussions, and the rooms (public/private) a user is part of from the team's main room. Currently, this endpoint returns the discussions from the parent team rooms only; discussions from sub-channels are not returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$team_name = "team_name_example"; // string | The team name.  It is required if the `teamId` is not provided.
$team_id = "team_id_example"; // string | The team id.  It is required if the `teamName` is not provided.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$filter = "filter_example"; // string | Filter the results using the text you want to find.
$type = "type_example"; // string | You can choose the type of rooms you want in the response. Enter the value as `channels` or `discussions`. If you don't enter any value, both types are returned.
$room_id = "room_id_example"; // string | The room ID. This parameter is required if you have not provided the `teamId` or the `teamName`.

try {
    $result = $apiInstance->getApiV1TeamsListChildren($x_user_id, $x_auth_token, $team_name, $team_id, $offset, $count, $sort, $filter, $type, $room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getApiV1TeamsListChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **team_name** | **string**| The team name.  It is required if the &#x60;teamId&#x60; is not provided. | [optional]
 **team_id** | **string**| The team id.  It is required if the &#x60;teamName&#x60; is not provided. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]
 **filter** | **string**| Filter the results using the text you want to find. | [optional]
 **type** | **string**| You can choose the type of rooms you want in the response. Enter the value as &#x60;channels&#x60; or &#x60;discussions&#x60;. If you don&#x27;t enter any value, both types are returned. | [optional]
 **room_id** | **string**| The room ID. This parameter is required if you have not provided the &#x60;teamId&#x60; or the &#x60;teamName&#x60;. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20049**](../Model/InlineResponse20049.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1TeamsListRooms**
> \Swagger\Client\Model\InlineResponse20047 getApiV1TeamsListRooms($x_auth_token, $x_user_id, $team_id, $team_name, $type, $count, $offset)

List Rooms of a Team

List all rooms in a team. Permissions required: `view-all-teams`, `view-all-team-channels`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$team_id = "team_id_example"; // string | The team id.  It is required if the `teamName` is not provided.
$team_name = "team_name_example"; // string | The team name.  It is required if the `teamId` is not provided.
$type = "type_example"; // string | The room's type (search filter).
$count = 56; // int | The number of items to return.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.

try {
    $result = $apiInstance->getApiV1TeamsListRooms($x_auth_token, $x_user_id, $team_id, $team_name, $type, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getApiV1TeamsListRooms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **team_id** | **string**| The team id.  It is required if the &#x60;teamName&#x60; is not provided. | [optional]
 **team_name** | **string**| The team name.  It is required if the &#x60;teamId&#x60; is not provided. | [optional]
 **type** | **string**| The room&#x27;s type (search filter). | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1TeamsListRoomsOfUser**
> \Swagger\Client\Model\InlineResponse20048 getApiV1TeamsListRoomsOfUser($x_user_id, $x_auth_token, $user_id, $team_name, $team_id, $offset, $count)

List User Rooms of a Team

Lists only the team's rooms that a particular user has joined.  Permissions required: `view-all-teams`, `view-all-team-channels`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$user_id = "user_id_example"; // string | The user ID.
$team_name = "team_name_example"; // string | The team name.  It is required if the `teamId` is not provided.
$team_id = "team_id_example"; // string | The team id.  It is required if the `teamName` is not provided.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.

try {
    $result = $apiInstance->getApiV1TeamsListRoomsOfUser($x_user_id, $x_auth_token, $user_id, $team_name, $team_id, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getApiV1TeamsListRoomsOfUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **user_id** | **string**| The user ID. |
 **team_name** | **string**| The team name.  It is required if the &#x60;teamId&#x60; is not provided. | [optional]
 **team_id** | **string**| The team id.  It is required if the &#x60;teamName&#x60; is not provided. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20048**](../Model/InlineResponse20048.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1TeamsMembers**
> \Swagger\Client\Model\InlineResponse20042 getApiV1TeamsMembers($x_auth_token, $x_user_id, $team_name, $team_id, $name, $username, $status)

List Team Members

List all members of a team. Permission required: `view-all-teams`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$team_name = "team_name_example"; // string | The team name.  It is required if the `teamId` is not provided.
$team_id = "team_id_example"; // string | The team id.  It is required if the `teamName` is not provided.
$name = "name_example"; // string | Search filter for the user's name
$username = "username_example"; // string | Search filter for the user's username
$status = array("status_example"); // string[] | Search filter for the user's status

try {
    $result = $apiInstance->getApiV1TeamsMembers($x_auth_token, $x_user_id, $team_name, $team_id, $name, $username, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getApiV1TeamsMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **team_name** | **string**| The team name.  It is required if the &#x60;teamId&#x60; is not provided. | [optional]
 **team_id** | **string**| The team id.  It is required if the &#x60;teamName&#x60; is not provided. | [optional]
 **name** | **string**| Search filter for the user&#x27;s name | [optional]
 **username** | **string**| Search filter for the user&#x27;s username | [optional]
 **status** | [**string[]**](../Model/string.md)| Search filter for the user&#x27;s status | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20042**](../Model/InlineResponse20042.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1TeamsAddMembers**
> \Swagger\Client\Model\InlineResponse2002 postApiV1TeamsAddMembers($x_auth_token, $x_user_id, $body)

Add Members to the Team

Add members to a team.  Permissions required: `add-team-member` or `edit-team-member`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1TeamsAddMembersBody(); // \Swagger\Client\Model\V1TeamsAddMembersBody | 

try {
    $result = $apiInstance->postApiV1TeamsAddMembers($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->postApiV1TeamsAddMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1TeamsAddMembersBody**](../Model/V1TeamsAddMembersBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1TeamsAddRooms**
> \Swagger\Client\Model\InlineResponse20044 postApiV1TeamsAddRooms($x_auth_token, $x_user_id, $body)

Add Rooms to a Team

Add existing rooms to a team.  Permission required: `move-room-to-team`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1TeamsAddRoomsBody(); // \Swagger\Client\Model\V1TeamsAddRoomsBody | 

try {
    $result = $apiInstance->postApiV1TeamsAddRooms($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->postApiV1TeamsAddRooms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1TeamsAddRoomsBody**](../Model/V1TeamsAddRoomsBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20044**](../Model/InlineResponse20044.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1TeamsConvertToChannel**
> \Swagger\Client\Model\InlineResponse2002 postApiV1TeamsConvertToChannel($x_auth_token, $x_user_id, $body)

Convert Team to Channel

Convert a team to a channel. Permission required: `convert-team`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1TeamsConvertToChannelBody(); // \Swagger\Client\Model\V1TeamsConvertToChannelBody | 

try {
    $result = $apiInstance->postApiV1TeamsConvertToChannel($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->postApiV1TeamsConvertToChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1TeamsConvertToChannelBody**](../Model/V1TeamsConvertToChannelBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1TeamsCreate**
> \Swagger\Client\Model\InlineResponse20025 postApiV1TeamsCreate($x_auth_token, $x_user_id, $body)

Create a New Team

Create a new public or private team in the workspace.   Permission required: `create-team`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1TeamsCreateBody(); // \Swagger\Client\Model\V1TeamsCreateBody | 

try {
    $result = $apiInstance->postApiV1TeamsCreate($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->postApiV1TeamsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1TeamsCreateBody**](../Model/V1TeamsCreateBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1TeamsDelete**
> \Swagger\Client\Model\InlineResponse2002 postApiV1TeamsDelete($x_auth_token, $x_user_id, $body)

Delete a Team

Removes a team.   Permission required: `delete-team`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1TeamsDeleteBody(); // \Swagger\Client\Model\V1TeamsDeleteBody | 

try {
    $result = $apiInstance->postApiV1TeamsDelete($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->postApiV1TeamsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1TeamsDeleteBody**](../Model/V1TeamsDeleteBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1TeamsLeave**
> \Swagger\Client\Model\InlineResponse2002 postApiV1TeamsLeave($x_auth_token, $x_user_id, $body)

Leave a Team

Leave a team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1TeamsLeaveBody(); // \Swagger\Client\Model\V1TeamsLeaveBody | 

try {
    $result = $apiInstance->postApiV1TeamsLeave($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->postApiV1TeamsLeave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1TeamsLeaveBody**](../Model/V1TeamsLeaveBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1TeamsRemoveMember**
> \Swagger\Client\Model\InlineResponse2002 postApiV1TeamsRemoveMember($x_auth_token, $x_user_id, $body)

Remove Member from Team

Removes a member from a team.   Permission required: `edit-team-member`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1TeamsRemoveMemberBody(); // \Swagger\Client\Model\V1TeamsRemoveMemberBody | 

try {
    $result = $apiInstance->postApiV1TeamsRemoveMember($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->postApiV1TeamsRemoveMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1TeamsRemoveMemberBody**](../Model/V1TeamsRemoveMemberBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1TeamsRemoveRoom**
> \Swagger\Client\Model\InlineResponse20045 postApiV1TeamsRemoveRoom($x_user_id, $x_auth_token, $body)

Remove Room from the Team

Removes a room from a team.   Permissions required: `remove-team-channel`, `view-all-team-channels`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$body = new \Swagger\Client\Model\V1TeamsRemoveRoomBody(); // \Swagger\Client\Model\V1TeamsRemoveRoomBody | 

try {
    $result = $apiInstance->postApiV1TeamsRemoveRoom($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->postApiV1TeamsRemoveRoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1TeamsRemoveRoomBody**](../Model/V1TeamsRemoveRoomBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1TeamsUpdate**
> \Swagger\Client\Model\InlineResponse2002 postApiV1TeamsUpdate($x_auth_token, $x_user_id, $body)

Update a Team

Updates an existing team (name and type).   Permission required: `edit-team`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1TeamsUpdateBody(); // \Swagger\Client\Model\V1TeamsUpdateBody | 

try {
    $result = $apiInstance->postApiV1TeamsUpdate($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->postApiV1TeamsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1TeamsUpdateBody**](../Model/V1TeamsUpdateBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1TeamsUpdateMembers**
> \Swagger\Client\Model\InlineResponse2002 postApiV1TeamsUpdateMembers($x_auth_token, $x_user_id, $body)

Update Team Member Info

Updates a team member's roles.   Permission required: `edit-team-member`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1TeamsUpdateMemberBody(); // \Swagger\Client\Model\V1TeamsUpdateMemberBody | 

try {
    $result = $apiInstance->postApiV1TeamsUpdateMembers($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->postApiV1TeamsUpdateMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1TeamsUpdateMemberBody**](../Model/V1TeamsUpdateMemberBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1TeamsUpdateRoom**
> \Swagger\Client\Model\InlineResponse20046 postApiV1TeamsUpdateRoom($x_auth_token, $x_user_id, $body)

Update Room in a Team

Updates a room from a team.   Permissions required: `edit-team-channel`, `view-all-team-channels`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1TeamsUpdateRoomBody(); // \Swagger\Client\Model\V1TeamsUpdateRoomBody | 

try {
    $result = $apiInstance->postApiV1TeamsUpdateRoom($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->postApiV1TeamsUpdateRoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1TeamsUpdateRoomBody**](../Model/V1TeamsUpdateRoomBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20046**](../Model/InlineResponse20046.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

