# Swagger\Client\GroupsApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1GroupsCounters**](GroupsApi.md#getapiv1groupscounters) | **GET** /api/v1/groups.counters | Get Group Counters
[**getApiV1GroupsFiles**](GroupsApi.md#getapiv1groupsfiles) | **GET** /api/v1/groups.files | Get Group Files
[**getApiV1GroupsGetIntegrations**](GroupsApi.md#getapiv1groupsgetintegrations) | **GET** /api/v1/groups.getIntegrations | Get Group Integrations
[**getApiV1GroupsHistory**](GroupsApi.md#getapiv1groupshistory) | **GET** /api/v1/groups.history | Get Group History
[**getApiV1GroupsInfo**](GroupsApi.md#getapiv1groupsinfo) | **GET** /api/v1/groups.info | Get Group Information
[**getApiV1GroupsList**](GroupsApi.md#getapiv1groupslist) | **GET** /api/v1/groups.list | Get Groups
[**getApiV1GroupsListAll**](GroupsApi.md#getapiv1groupslistall) | **GET** /api/v1/groups.listAll | Get List of User Groups
[**getApiV1GroupsMembers**](GroupsApi.md#getapiv1groupsmembers) | **GET** /api/v1/groups.members | List Group Members
[**getApiV1GroupsMessages**](GroupsApi.md#getapiv1groupsmessages) | **GET** /api/v1/groups.messages | Get Group Messages
[**getApiV1GroupsModerators**](GroupsApi.md#getapiv1groupsmoderators) | **GET** /api/v1/groups.moderators | Get Group Moderators
[**getApiV1GroupsOnline**](GroupsApi.md#getapiv1groupsonline) | **GET** /api/v1/groups.online | Get Group Online Users
[**getApiV1GroupsRoles**](GroupsApi.md#getapiv1groupsroles) | **GET** /api/v1/groups.roles | List Group Roles
[**postApiV1GroupsAddAll**](GroupsApi.md#postapiv1groupsaddall) | **POST** /api/v1/groups.addAll | Add All Users to Group
[**postApiV1GroupsAddLeader**](GroupsApi.md#postapiv1groupsaddleader) | **POST** /api/v1/groups.addLeader | Add Group Leader
[**postApiV1GroupsAddModerator**](GroupsApi.md#postapiv1groupsaddmoderator) | **POST** /api/v1/groups.addModerator | Add Group Moderator
[**postApiV1GroupsAddOwner**](GroupsApi.md#postapiv1groupsaddowner) | **POST** /api/v1/groups.addOwner | Add Group Owner
[**postApiV1GroupsArchive**](GroupsApi.md#postapiv1groupsarchive) | **POST** /api/v1/groups.archive | Archive a Group
[**postApiV1GroupsClose**](GroupsApi.md#postapiv1groupsclose) | **POST** /api/v1/groups.close | Close Group
[**postApiV1GroupsConvertToTeam**](GroupsApi.md#postapiv1groupsconverttoteam) | **POST** /api/v1/groups.convertToTeam | Convert a Group to Team
[**postApiV1GroupsCreate**](GroupsApi.md#postapiv1groupscreate) | **POST** /api/v1/groups.create | Create Group
[**postApiV1GroupsDelete**](GroupsApi.md#postapiv1groupsdelete) | **POST** /api/v1/groups.delete | Delete Group
[**postApiV1GroupsInvite**](GroupsApi.md#postapiv1groupsinvite) | **POST** /api/v1/groups.invite | Invite Users to Group
[**postApiV1GroupsKick**](GroupsApi.md#postapiv1groupskick) | **POST** /api/v1/groups.kick | Remove User from Group
[**postApiV1GroupsOpen**](GroupsApi.md#postapiv1groupsopen) | **POST** /api/v1/groups.open | Add Group to List
[**postApiV1GroupsRemoveLeader**](GroupsApi.md#postapiv1groupsremoveleader) | **POST** /api/v1/groups.removeLeader | Remove Group Leader
[**postApiV1GroupsRemoveModerator**](GroupsApi.md#postapiv1groupsremovemoderator) | **POST** /api/v1/groups.removeModerator | Remove Group Moderator
[**postApiV1GroupsRemoveOwner**](GroupsApi.md#postapiv1groupsremoveowner) | **POST** /api/v1/groups.removeOwner | Remove Group Owner
[**postApiV1GroupsRename**](GroupsApi.md#postapiv1groupsrename) | **POST** /api/v1/groups.rename | Rename Group
[**postApiV1GroupsSetAnnouncement**](GroupsApi.md#postapiv1groupssetannouncement) | **POST** /api/v1/groups.setAnnouncement | Set Group Announcement
[**postApiV1GroupsSetCustomFields**](GroupsApi.md#postapiv1groupssetcustomfields) | **POST** /api/v1/groups.setCustomFields | Set Group Custom Fields
[**postApiV1GroupsSetDescription**](GroupsApi.md#postapiv1groupssetdescription) | **POST** /api/v1/groups.setDescription | Set Group Description
[**postApiV1GroupsSetEncrypted**](GroupsApi.md#postapiv1groupssetencrypted) | **POST** /api/v1/groups.setEncrypted | Set Group as Encrypted
[**postApiV1GroupsSetPurpose**](GroupsApi.md#postapiv1groupssetpurpose) | **POST** /api/v1/groups.setPurpose | Set Group Purpose
[**postApiV1GroupsSetReadOnly**](GroupsApi.md#postapiv1groupssetreadonly) | **POST** /api/v1/groups.setReadOnly | Set Group as Read Only
[**postApiV1GroupsSetTopic**](GroupsApi.md#postapiv1groupssettopic) | **POST** /api/v1/groups.setTopic | Set Group Topic
[**postApiV1GroupsSetType**](GroupsApi.md#postapiv1groupssettype) | **POST** /api/v1/groups.setType | Set Group Type
[**postApiV1GroupsUnarchive**](GroupsApi.md#postapiv1groupsunarchive) | **POST** /api/v1/groups.unarchive | Unarchive Group
[**postGroupsLeave**](GroupsApi.md#postgroupsleave) | **POST** /api/v1/groups.leave | Leave Group

# **getApiV1GroupsCounters**
> \Swagger\Client\Model\InlineResponse2004 getApiV1GroupsCounters($x_auth_token, $x_user_id, $room_id, $room_name, $user_id)

Get Group Counters

Get the private channel information for the authenticated user.   Permission required: `view-room-administration`  ### Changelog | Version | Description | | ------- | ----------- | | 0.65.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | The room ID. It is required if the `roomName` is not provided.
$room_name = "room_name_example"; // string | The room name.  It is required if the `roomId` is not provided.
$user_id = "user_id_example"; // string | Counters for provided user ID (you need to have the `view-room-administration` permission for calling user). This parameter is optional

try {
    $result = $apiInstance->getApiV1GroupsCounters($x_auth_token, $x_user_id, $room_id, $room_name, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getApiV1GroupsCounters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **room_id** | **string**| The room ID. It is required if the &#x60;roomName&#x60; is not provided. | [optional]
 **room_name** | **string**| The room name.  It is required if the &#x60;roomId&#x60; is not provided. | [optional]
 **user_id** | **string**| Counters for provided user ID (you need to have the &#x60;view-room-administration&#x60; permission for calling user). This parameter is optional | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1GroupsFiles**
> \Swagger\Client\Model\InlineResponse20064 getApiV1GroupsFiles($x_auth_token, $x_user_id, $room_name, $room_id, $offset, $count, $sort, $query, $fields)

Get Group Files

Get all media files shared in a private channel.    ### Changelog | Version | Description | | ------- | ----------- | | 0.64.0  | Change userId to user object in response       | | 0.59.0  | Added                                          |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_name = "room_name_example"; // string | The room name.  It is required if the `roomId` is not provided.
$room_id = "room_id_example"; // string | The room ID. It is required if the `roomName` is not provided.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$query = new \Swagger\Client\Model\null(); //  | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": `query={ \"name\": { \"$regex\": \"g\" } }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$fields = "fields_example"; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: `fields={ \"username\": 1 }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.

try {
    $result = $apiInstance->getApiV1GroupsFiles($x_auth_token, $x_user_id, $room_name, $room_id, $offset, $count, $sort, $query, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getApiV1GroupsFiles: ', $e->getMessage(), PHP_EOL;
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
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]
 **query** | [****](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: &#x60;query&#x3D;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: &#x60;fields&#x3D;{ \&quot;username\&quot;: 1 }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20064**](../Model/InlineResponse20064.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1GroupsGetIntegrations**
> \Swagger\Client\Model\InlineResponse20050 getApiV1GroupsGetIntegrations($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort, $query, $fields)

Get Group Integrations

Retrieves the integrations that the group/channel has. At least one of the following integration permissions is required: * `manage-incoming-integrations` * `manage-own-incoming-integrations` * `manage-outgoing-integrations` * `manage-own-outgoing-integrations`  It will return the integrations based on the user's permission.  ### Changelog | Version | Description | | ------- | ----------- | | 1.1.0  | Separate permissions in incoming and outgoing. | | 0.49.0 | Added                                          |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | Enter the private channel's ID. Alternatively, you can enter the room name using the `roomName` query parameter. You can find the IDs by using any of the following endpoints: * <a href='https://developer.rocket.chat/apidocs/get-list-of-user-groups' target='_blank'>Get List of User Groups</a>: This endpoint returns all private channels in the workspace, if you have the required permissions to view them. * <a href='https://developer.rocket.chat/apidocs/get-groups' target='_blank'>Get Groups</a>: This endpoint returns the private channels that you are a member of.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$query = new \Swagger\Client\Model\null(); //  | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": `query={ \"name\": { \"$regex\": \"g\" } }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$fields = "fields_example"; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: `fields={ \"username\": 1 }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.

try {
    $result = $apiInstance->getApiV1GroupsGetIntegrations($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort, $query, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getApiV1GroupsGetIntegrations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **room_id** | **string**| Enter the private channel&#x27;s ID. Alternatively, you can enter the room name using the &#x60;roomName&#x60; query parameter. You can find the IDs by using any of the following endpoints: * &lt;a href&#x3D;&#x27;https://developer.rocket.chat/apidocs/get-list-of-user-groups&#x27; target&#x3D;&#x27;_blank&#x27;&gt;Get List of User Groups&lt;/a&gt;: This endpoint returns all private channels in the workspace, if you have the required permissions to view them. * &lt;a href&#x3D;&#x27;https://developer.rocket.chat/apidocs/get-groups&#x27; target&#x3D;&#x27;_blank&#x27;&gt;Get Groups&lt;/a&gt;: This endpoint returns the private channels that you are a member of. |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]
 **query** | [****](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: &#x60;query&#x3D;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: &#x60;fields&#x3D;{ \&quot;username\&quot;: 1 }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20050**](../Model/InlineResponse20050.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1GroupsHistory**
> \Swagger\Client\Model\InlineResponse20053 getApiV1GroupsHistory($x_auth_token, $x_user_id, $room_id, $latest, $oldest, $inclusive, $unreads, $offset, $count)

Get Group History

Retrieves the messages from a private channel you belong to.  ### Changelog | Version | Description             | | ------- | ----------------------- | | 0.75.0  | Added `offset` property | | 0.48.0  | Added                   |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | The room id.
$latest = "latest_example"; // string | The end of time range of messages to retrieve. The default value is the current date and time.
$oldest = "oldest_example"; // string | The start of the time range of messages to retrieve
$inclusive = true; // bool | Whether messages which land on latest and oldest should be included. The default value is false.
$unreads = true; // bool | Whether the amount of unreads should be included. The default value is false.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.

try {
    $result = $apiInstance->getApiV1GroupsHistory($x_auth_token, $x_user_id, $room_id, $latest, $oldest, $inclusive, $unreads, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getApiV1GroupsHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **room_id** | **string**| The room id. |
 **latest** | **string**| The end of time range of messages to retrieve. The default value is the current date and time. | [optional]
 **oldest** | **string**| The start of the time range of messages to retrieve | [optional]
 **inclusive** | **bool**| Whether messages which land on latest and oldest should be included. The default value is false. | [optional]
 **unreads** | **bool**| Whether the amount of unreads should be included. The default value is false. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20053**](../Model/InlineResponse20053.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1GroupsInfo**
> \Swagger\Client\Model\InlineResponse20054 getApiV1GroupsInfo($x_user_id, $x_auth_token, $room_id, $room_name)

Get Group Information

Retrieves the information about a private channel you belong to.  ### Changelog | Version | Description | | ------- | ----------- | | 0.48.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$room_id = "room_id_example"; // string | The room ID. It is required if the `roomName` is not provided.
$room_name = "room_name_example"; // string | The room name.  It is required if the `roomId` is not provided.

try {
    $result = $apiInstance->getApiV1GroupsInfo($x_user_id, $x_auth_token, $room_id, $room_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getApiV1GroupsInfo: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\Swagger\Client\Model\InlineResponse20054**](../Model/InlineResponse20054.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1GroupsList**
> \Swagger\Client\Model\InlineResponse20058 getApiV1GroupsList($x_auth_token, $x_user_id, $offset, $count, $sort)

Get Groups

Lists all the private groups/channels the user has joined.  ### Changelog | Version | Description                                  | | ------- | -------------------------------------------- | | 0.67.0  | Removed `query` parameter support.           | | 0.62.0  | Add `query` parameter support.               | | 0.49.0  | Count and offset query parameters supported. | | 0.33.0  | Added                                        |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}

try {
    $result = $apiInstance->getApiV1GroupsList($x_auth_token, $x_user_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getApiV1GroupsList: ', $e->getMessage(), PHP_EOL;
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
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20058**](../Model/InlineResponse20058.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1GroupsListAll**
> \Swagger\Client\Model\InlineResponse20057 getApiV1GroupsListAll($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields)

Get List of User Groups

Lists all the private groups/channels of the workspace.  Permission required: `view-room-administration`  ### Changelog | Version | Description                    | | ------- | ------------------------------ | | 0.62.0  | Add 'query' parameter support. | | 0.59.0  | Added                          |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$query = new \Swagger\Client\Model\null(); //  | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": `query={ \"name\": { \"$regex\": \"g\" } }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$fields = "fields_example"; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: `fields={ \"username\": 1 }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.

try {
    $result = $apiInstance->getApiV1GroupsListAll($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getApiV1GroupsListAll: ', $e->getMessage(), PHP_EOL;
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
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]
 **query** | [****](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: &#x60;query&#x3D;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: &#x60;fields&#x3D;{ \&quot;username\&quot;: 1 }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20057**](../Model/InlineResponse20057.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1GroupsMembers**
> \Swagger\Client\Model\InlineResponse20059 getApiV1GroupsMembers($x_auth_token, $x_user_id, $room_id, $room_name, $sort, $count, $offset, $status, $filter)

List Group Members

Lists the members of a private group.   Permission required if the room is broadcast.: `view-broadcast-member-list`  ### Changelog | Version | Description | | ------- | ----------- | | 0.59.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | The room ID. It is required if the `roomName` is not provided.
$room_name = "room_name_example"; // string | The room name.  It is required if the `roomId` is not provided.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$count = 56; // int | The number of items to return.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$status = array("status_example"); // string[] | The user's status (search filter).
$filter = "filter_example"; // string | Extra search filters to be applied to the fields defined in the `Accounts_SearchFields` setting.

try {
    $result = $apiInstance->getApiV1GroupsMembers($x_auth_token, $x_user_id, $room_id, $room_name, $sort, $count, $offset, $status, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getApiV1GroupsMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **room_id** | **string**| The room ID. It is required if the &#x60;roomName&#x60; is not provided. | [optional]
 **room_name** | **string**| The room name.  It is required if the &#x60;roomId&#x60; is not provided. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **status** | [**string[]**](../Model/string.md)| The user&#x27;s status (search filter). | [optional]
 **filter** | **string**| Extra search filters to be applied to the fields defined in the &#x60;Accounts_SearchFields&#x60; setting. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20059**](../Model/InlineResponse20059.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1GroupsMessages**
> \Swagger\Client\Model\InlineResponse20060 getApiV1GroupsMessages($x_auth_token, $x_user_id, $room_id, $room_name, $fields, $sort, $offset, $count, $mention_ids, $starred_ids, $pinned)

Get Group Messages

Lists all the messages in a private channel.   ### Changelog | Version | Description | | ------- | ----------- | | 7.0.0  | Added `mentionIds`, `starredIds`, `pinned` query parameters.| | 0.59.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | The room ID. It is required if the `roomName` is not provided.
$room_name = "room_name_example"; // string | The room name.  It is required if the `roomId` is not provided.
$fields = "fields_example"; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: `fields={ \"username\": 1 }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$mention_ids = "mention_ids_example"; // string | Filter the messages where a user has been mentioned by the userId. For a set of userIds, use an array (`[\"838ndhd79w\", \"dud0wu900\"]`).
$starred_ids = "starred_ids_example"; // string | Filter the messages a user have starred by userId. For a set of userIds, use an array (`[\"838ndhd79w\", \"dud0wu900\"]`).
$pinned = true; // bool | Filter pinned messages.

try {
    $result = $apiInstance->getApiV1GroupsMessages($x_auth_token, $x_user_id, $room_id, $room_name, $fields, $sort, $offset, $count, $mention_ids, $starred_ids, $pinned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getApiV1GroupsMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **room_id** | **string**| The room ID. It is required if the &#x60;roomName&#x60; is not provided. | [optional]
 **room_name** | **string**| The room name.  It is required if the &#x60;roomId&#x60; is not provided. | [optional]
 **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: &#x60;fields&#x3D;{ \&quot;username\&quot;: 1 }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **mention_ids** | **string**| Filter the messages where a user has been mentioned by the userId. For a set of userIds, use an array (&#x60;[\&quot;838ndhd79w\&quot;, \&quot;dud0wu900\&quot;]&#x60;). | [optional]
 **starred_ids** | **string**| Filter the messages a user have starred by userId. For a set of userIds, use an array (&#x60;[\&quot;838ndhd79w\&quot;, \&quot;dud0wu900\&quot;]&#x60;). | [optional]
 **pinned** | **bool**| Filter pinned messages. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20060**](../Model/InlineResponse20060.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1GroupsModerators**
> \Swagger\Client\Model\InlineResponse20061 getApiV1GroupsModerators($x_auth_token, $x_user_id, $room_id, $room_name)

Get Group Moderators

Lists the moderators of a private channel.  ### Changelog | Version | Description | | ------- | ----------- | | 0.70.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | The room ID. It is required if the `roomName` is not provided.
$room_name = "room_name_example"; // string | The room name.  It is required if the `roomId` is not provided.

try {
    $result = $apiInstance->getApiV1GroupsModerators($x_auth_token, $x_user_id, $room_id, $room_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getApiV1GroupsModerators: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **room_id** | **string**| The room ID. It is required if the &#x60;roomName&#x60; is not provided. | [optional]
 **room_name** | **string**| The room name.  It is required if the &#x60;roomId&#x60; is not provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20061**](../Model/InlineResponse20061.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1GroupsOnline**
> \Swagger\Client\Model\InlineResponse20013 getApiV1GroupsOnline($x_auth_token, $x_user_id, $_id)

Get Group Online Users

Lists all online users of a particular group (private channel). You will not be able to view the users if you are not a member of this private channel, unless you have admin permissions.  ### Changelog | Version | Description | | ------- | ----------- | | 0.52.0  | Added       | |7.0.0   | Replaced `query` parameter with `_id` parameter       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$_id = "_id_example"; // string | Enter the group's ID. You can find list of groups IDs using any of the following endpoints: * <a href='https://developer.rocket.chat/apidocs/get-list-of-user-groups' target='_blank'>Get List of User Groups</a>: This endpoint returns all private channels in the workspace, if you have the required permissions to view them. * <a href='https://developer.rocket.chat/apidocs/get-groups' target='_blank'>Get Groups</a>: This endpoint returns the private channels that you are a member of.

try {
    $result = $apiInstance->getApiV1GroupsOnline($x_auth_token, $x_user_id, $_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getApiV1GroupsOnline: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **_id** | **string**| Enter the group&#x27;s ID. You can find list of groups IDs using any of the following endpoints: * &lt;a href&#x3D;&#x27;https://developer.rocket.chat/apidocs/get-list-of-user-groups&#x27; target&#x3D;&#x27;_blank&#x27;&gt;Get List of User Groups&lt;/a&gt;: This endpoint returns all private channels in the workspace, if you have the required permissions to view them. * &lt;a href&#x3D;&#x27;https://developer.rocket.chat/apidocs/get-groups&#x27; target&#x3D;&#x27;_blank&#x27;&gt;Get Groups&lt;/a&gt;: This endpoint returns the private channels that you are a member of. |

### Return type

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1GroupsRoles**
> \Swagger\Client\Model\InlineResponse20066 getApiV1GroupsRoles($x_auth_token, $x_user_id, $room_id)

List Group Roles

List all the roles of users in the private channel.  ### Changelog | Version | Description | | ------- | ----------- | | 0.65.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | Enter the private channel ID. Alternatively, you can use the `roomName` parameter and enter the private channel's name.

try {
    $result = $apiInstance->getApiV1GroupsRoles($x_auth_token, $x_user_id, $room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getApiV1GroupsRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **room_id** | **string**| Enter the private channel ID. Alternatively, you can use the &#x60;roomName&#x60; parameter and enter the private channel&#x27;s name. |

### Return type

[**\Swagger\Client\Model\InlineResponse20066**](../Model/InlineResponse20066.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsAddAll**
> \Swagger\Client\Model\InlineResponse20051 postApiV1GroupsAddAll($x_auth_token, $x_user_id, $body)

Add All Users to Group

Add all workspace users to the private channel. You can do this if you are a member of the private channel or have admin permissions.  ### Changelog | Version | Description | | ------- | ----------- | | 0.55.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsAddAllBody(); // \Swagger\Client\Model\V1GroupsAddAllBody | 

try {
    $result = $apiInstance->postApiV1GroupsAddAll($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsAddAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsAddAllBody**](../Model/V1GroupsAddAllBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20051**](../Model/InlineResponse20051.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsAddLeader**
> \Swagger\Client\Model\InlineResponse2002 postApiV1GroupsAddLeader($x_auth_token, $x_user_id, $body)

Add Group Leader

Assign the `leader` role to a user in a private channel. Learn more about roles from the <a href='https://docs.rocket.chat/docs/roles-in-rocketchat' target='_blank'>Roles in Rocket.Chat</a> document.  Permission required:  `set-leader`   ### Changelog | Version | Description | | ------- | ----------- | | 0.58.0  | Added.      |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsAddLeaderBody(); // \Swagger\Client\Model\V1GroupsAddLeaderBody | 

try {
    $result = $apiInstance->postApiV1GroupsAddLeader($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsAddLeader: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsAddLeaderBody**](../Model/V1GroupsAddLeaderBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsAddModerator**
> \Swagger\Client\Model\InlineResponse2002 postApiV1GroupsAddModerator($x_auth_token, $x_user_id, $body)

Add Group Moderator

Assign the `moderator` role to a user in a private channel. Learn more about roles from the <a href='https://docs.rocket.chat/docs/roles-in-rocketchat' target='_blank'>Roles in Rocket.Chat</a> document.  Permission required: `set-moderator`  ### Changelog | Version | Description | | ------- | ----------- | | 0.49.4  | Added.      |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsAddModeratorBody(); // \Swagger\Client\Model\V1GroupsAddModeratorBody | 

try {
    $result = $apiInstance->postApiV1GroupsAddModerator($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsAddModerator: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsAddModeratorBody**](../Model/V1GroupsAddModeratorBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsAddOwner**
> \Swagger\Client\Model\InlineResponse2002 postApiV1GroupsAddOwner($x_auth_token, $x_user_id, $body)

Add Group Owner

Assign `owner` role for a user in the current private channel. Learn more about roles from the <a href='https://docs.rocket.chat/docs/roles-in-rocketchat' target='_blank'>Roles in Rocket.Chat</a> document.  ### Changelog | Version | Description | | ------- | ----------- | | 0.49.4  | Added.      |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsAddOwnerBody(); // \Swagger\Client\Model\V1GroupsAddOwnerBody | 

try {
    $result = $apiInstance->postApiV1GroupsAddOwner($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsAddOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsAddOwnerBody**](../Model/V1GroupsAddOwnerBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsArchive**
> \Swagger\Client\Model\InlineResponse2002 postApiV1GroupsArchive($x_auth_token, $x_user_id, $body)

Archive a Group

Archive a private channel. You need the `archive-room` permission.  ### Changelog | Version | Description | | ------- | ----------- | | 0.48.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsArchiveBody(); // \Swagger\Client\Model\V1GroupsArchiveBody | 

try {
    $result = $apiInstance->postApiV1GroupsArchive($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsArchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsArchiveBody**](../Model/V1GroupsArchiveBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsClose**
> \Swagger\Client\Model\InlineResponse2002 postApiV1GroupsClose($x_auth_token, $x_user_id, $body)

Close Group

Hides the private channel from the list of channels in the workspace sidebar, only if you're part of the group. You can still search for hidden channels using the workspace **Directory**.  ### Changelog | Version | Description | | ------- | ----------- | | 0.48.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsCloseBody(); // \Swagger\Client\Model\V1GroupsCloseBody | 

try {
    $result = $apiInstance->postApiV1GroupsClose($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsClose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsCloseBody**](../Model/V1GroupsCloseBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsConvertToTeam**
> \Swagger\Client\Model\InlineResponse20025 postApiV1GroupsConvertToTeam($x_auth_token, $x_user_id, $body)

Convert a Group to Team

Convert a private channel to a team. Permissions required: `create-team`, `edit-room`  ### Changelog | Version | Description | | ------- | ----------- | | 3.13.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsConvertToTeamBody(); // \Swagger\Client\Model\V1GroupsConvertToTeamBody | 

try {
    $result = $apiInstance->postApiV1GroupsConvertToTeam($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsConvertToTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsConvertToTeamBody**](../Model/V1GroupsConvertToTeamBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsCreate**
> \Swagger\Client\Model\InlineResponse20052 postApiV1GroupsCreate($x_auth_token, $x_user_id, $body)

Create Group

Create a new private channel, optionally including specified users. Refer to the <a href='https://docs.rocket.chat/docs/channels' target='_blank'>Channels</a> documents for information on the available room options.  The following permissions are required: * `create-p`: This permission is required to create a private channel. * `create-team-group`: This permission is required if you want to create a private channel from an existing team.  ### Changelog | Version | Description               | | ------- | ------------------------- | | 6.4.1   | Added `excludeSelf` param | | 0.35.0  | Added                     |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsCreateBody(); // \Swagger\Client\Model\V1GroupsCreateBody | 

try {
    $result = $apiInstance->postApiV1GroupsCreate($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsCreateBody**](../Model/V1GroupsCreateBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20052**](../Model/InlineResponse20052.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsDelete**
> \Swagger\Client\Model\InlineResponse2002 postApiV1GroupsDelete($x_auth_token, $x_user_id, $body)

Delete Group

Delete a private room.  The following permissions are required:  * `delete-p`: To delete a private channel. * `delete-team-group`: To delete a private channel that is part of a team.  ### Changelog | Version | Description              | | ------- | ------------------------ | | 0.71.0  | Removed `group` property | | 0.49.0  | Added                    |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsDeleteBody(); // \Swagger\Client\Model\V1GroupsDeleteBody | 

try {
    $result = $apiInstance->postApiV1GroupsDelete($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsDeleteBody**](../Model/V1GroupsDeleteBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsInvite**
> \Swagger\Client\Model\InlineResponse20055 postApiV1GroupsInvite($x_auth_token, $x_user_id, $body)

Invite Users to Group

Invite one user or bulk users to a private channel. Any of the following permissions are required: * `add-user-to-joined-room`: This permission is required if you want to add users to the channel that you have joined. * `add-user-to-any-p-room`: This permission is required to add users to any private channel.  ### Changelog | Version | Description | | ------- | ----------- | | 0.48.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsInviteBody(); // \Swagger\Client\Model\V1GroupsInviteBody | 

try {
    $result = $apiInstance->postApiV1GroupsInvite($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsInvite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsInviteBody**](../Model/V1GroupsInviteBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20055**](../Model/InlineResponse20055.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsKick**
> \Swagger\Client\Model\InlineResponse20056 postApiV1GroupsKick($x_auth_token, $x_user_id, $body)

Remove User from Group

Remove a user from the private group/channel. Permission required: `kick-user-from-any-p-room`  ### Changelog | Version | Description | | ------- | ----------- | | 0.48.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsKickBody(); // \Swagger\Client\Model\V1GroupsKickBody | 

try {
    $result = $apiInstance->postApiV1GroupsKick($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsKick: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsKickBody**](../Model/V1GroupsKickBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20056**](../Model/InlineResponse20056.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsOpen**
> \Swagger\Client\Model\InlineResponse2002 postApiV1GroupsOpen($x_auth_token, $x_user_id, $body)

Add Group to List

Use this endpoint to add the private group/channel back to the list of rooms in the workspace sidebar, if you have used the <a href='https://developer.rocket.chat/apidocs/close-group' target='_blank'>groups.close</a> endpoint to remove the channel from the sidebar.  ### Changelog | Version | Description | | ------- | ----------- | | 0.48.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsOpenBody(); // \Swagger\Client\Model\V1GroupsOpenBody | 

try {
    $result = $apiInstance->postApiV1GroupsOpen($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsOpenBody**](../Model/V1GroupsOpenBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsRemoveLeader**
> \Swagger\Client\Model\InlineResponse2002 postApiV1GroupsRemoveLeader($x_auth_token, $x_user_id, $body)

Remove Group Leader

Remove the `leader` role from a user in a private channel.   Permission required: `set-leader`   ### Changelog  | Version | Description | | ------- | ----------- | | 0.58.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsRemoveLeaderBody(); // \Swagger\Client\Model\V1GroupsRemoveLeaderBody | 

try {
    $result = $apiInstance->postApiV1GroupsRemoveLeader($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsRemoveLeader: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsRemoveLeaderBody**](../Model/V1GroupsRemoveLeaderBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsRemoveModerator**
> \Swagger\Client\Model\InlineResponse2002 postApiV1GroupsRemoveModerator($x_auth_token, $x_user_id, $body)

Remove Group Moderator

Remove the `moderator` role from a user in a private channel.   Permission required: `set-moderator`  ### Changelog  | Version | Description | | ------- | ----------- | | 0.49.4  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsRemoveModeratorBody(); // \Swagger\Client\Model\V1GroupsRemoveModeratorBody | 

try {
    $result = $apiInstance->postApiV1GroupsRemoveModerator($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsRemoveModerator: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsRemoveModeratorBody**](../Model/V1GroupsRemoveModeratorBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsRemoveOwner**
> \Swagger\Client\Model\InlineResponse2002 postApiV1GroupsRemoveOwner($x_auth_token, $x_user_id, $body)

Remove Group Owner

Remove the `owner` role from a user in a private channel.   Permission required: `set-owner`   ### Changelog  | Version | Description | | ------- | ----------- | | 0.49.4  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsRemoveOwnerBody(); // \Swagger\Client\Model\V1GroupsRemoveOwnerBody | 

try {
    $result = $apiInstance->postApiV1GroupsRemoveOwner($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsRemoveOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsRemoveOwnerBody**](../Model/V1GroupsRemoveOwnerBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsRename**
> \Swagger\Client\Model\InlineResponse20056 postApiV1GroupsRename($x_auth_token, $x_user_id, $body)

Rename Group

Rename a private channel. Permission required: `edit-room`  ### Changelog | Version | Description | | ------- | ----------- | | 0.48.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsRenameBody(); // \Swagger\Client\Model\V1GroupsRenameBody | 

try {
    $result = $apiInstance->postApiV1GroupsRename($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsRename: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsRenameBody**](../Model/V1GroupsRenameBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20056**](../Model/InlineResponse20056.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsSetAnnouncement**
> \Swagger\Client\Model\InlineResponse20015 postApiV1GroupsSetAnnouncement($x_auth_token, $x_user_id, $body)

Set Group Announcement

Set the private channel announcement. Permission required: `edit-room`  ### Changelog | Version | Description | | ------- | ----------- | | 0.70.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsSetAnnouncementBody(); // \Swagger\Client\Model\V1GroupsSetAnnouncementBody | 

try {
    $result = $apiInstance->postApiV1GroupsSetAnnouncement($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsSetAnnouncement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsSetAnnouncementBody**](../Model/V1GroupsSetAnnouncementBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsSetCustomFields**
> \Swagger\Client\Model\InlineResponse20062 postApiV1GroupsSetCustomFields($x_auth_token, $x_user_id, $body)

Set Group Custom Fields

Sets the <a href='https://docs.rocket.chat/docs/custom-fields' target='_blank'>custom fields</a> for the private channel. Permission required: `edit-room`  ### Changelog | Version | Description | | ------- | ----------- | | 0.62.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsSetCustomFieldsBody(); // \Swagger\Client\Model\V1GroupsSetCustomFieldsBody | 

try {
    $result = $apiInstance->postApiV1GroupsSetCustomFields($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsSetCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsSetCustomFieldsBody**](../Model/V1GroupsSetCustomFieldsBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20062**](../Model/InlineResponse20062.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsSetDescription**
> \Swagger\Client\Model\InlineResponse20018 postApiV1GroupsSetDescription($x_auth_token, $x_user_id, $body)

Set Group Description

Set the description for the private channel. Permission required: `edit-room`  ### Changelog | Version | Description | | ------- | ----------- | | 0.48.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsSetDescriptionBody(); // \Swagger\Client\Model\V1GroupsSetDescriptionBody | 

try {
    $result = $apiInstance->postApiV1GroupsSetDescription($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsSetDescription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsSetDescriptionBody**](../Model/V1GroupsSetDescriptionBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsSetEncrypted**
> \Swagger\Client\Model\InlineResponse20065 postApiV1GroupsSetEncrypted($x_auth_token, $x_user_id, $body)

Set Group as Encrypted

Set a private channel as encrypted. Learn about <a href='https://docs.rocket.chat/v1/docs/end-to-end-encryption-user-guide' target='_blank'>end-to-end encryption here</a>. Permission required: `edit-room`  ### Changelog | Version | Description | | ------- | ----------- | | 3.13.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsSetEncryptedBody(); // \Swagger\Client\Model\V1GroupsSetEncryptedBody | 

try {
    $result = $apiInstance->postApiV1GroupsSetEncrypted($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsSetEncrypted: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsSetEncryptedBody**](../Model/V1GroupsSetEncryptedBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20065**](../Model/InlineResponse20065.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsSetPurpose**
> \Swagger\Client\Model\InlineResponse20020 postApiV1GroupsSetPurpose($x_auth_token, $x_user_id, $body)

Set Group Purpose

(Obsolete) Sets the description for the group/channel (the same as `groups.setDescription`).  ### Changelog | Version | Description | | ------- | ----------- | | 0.48.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsSetPurposeBody(); // \Swagger\Client\Model\V1GroupsSetPurposeBody | 

try {
    $result = $apiInstance->postApiV1GroupsSetPurpose($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsSetPurpose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsSetPurposeBody**](../Model/V1GroupsSetPurposeBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsSetReadOnly**
> \Swagger\Client\Model\InlineResponse20063 postApiV1GroupsSetReadOnly($x_auth_token, $x_user_id, $body)

Set Group as Read Only

Set private channel as <a href='https://docs.rocket.chat/docs/channels#read-only-channels' target='_blank'>read-only</a>or not. Permission required: `edit-room`  ### Changelog | Version | Description | | ------- | ----------- | | 0.49.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsSetReadOnlyBody(); // \Swagger\Client\Model\V1GroupsSetReadOnlyBody | 

try {
    $result = $apiInstance->postApiV1GroupsSetReadOnly($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsSetReadOnly: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsSetReadOnlyBody**](../Model/V1GroupsSetReadOnlyBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20063**](../Model/InlineResponse20063.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsSetTopic**
> \Swagger\Client\Model\InlineResponse20022 postApiV1GroupsSetTopic($x_auth_token, $x_user_id, $body)

Set Group Topic

Sets the topic for the private channel. Permission required: `edit-room`  ### Changelog | Version | Description | | ------- | ----------- | | 0.48.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsSetTopicBody(); // \Swagger\Client\Model\V1GroupsSetTopicBody | 

try {
    $result = $apiInstance->postApiV1GroupsSetTopic($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsSetTopic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsSetTopicBody**](../Model/V1GroupsSetTopicBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsSetType**
> \Swagger\Client\Model\InlineResponse20063 postApiV1GroupsSetType($x_auth_token, $x_user_id, $body)

Set Group Type

Set the room type. The group type can be either `c` (public) or `p` (private). Any of the following permissions are required: * `create-c`: This permission is required if you are changing a private channel to a public channel. * `create-p`: This permission is required if you are changing a public channel to a private room. * `create-team-channel`: This permission is required if you are changing a team's private channel to a public channel. * `create-team-group`: This permission is required if you are changing a team's public channel to a private room.  ### Changelog | Version | Description | | ------- | ----------- | | 0.49.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsSetTypeBody(); // \Swagger\Client\Model\V1GroupsSetTypeBody | 

try {
    $result = $apiInstance->postApiV1GroupsSetType($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsSetType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsSetTypeBody**](../Model/V1GroupsSetTypeBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20063**](../Model/InlineResponse20063.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1GroupsUnarchive**
> \Swagger\Client\Model\InlineResponse2002 postApiV1GroupsUnarchive($x_auth_token, $x_user_id, $body)

Unarchive Group

Unarchive a private channel. Permission required: `unarchive-room`  ### Changelog | Version | Description | | ------- | ----------- | | 0.48.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsUnarchiveBody(); // \Swagger\Client\Model\V1GroupsUnarchiveBody | 

try {
    $result = $apiInstance->postApiV1GroupsUnarchive($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsUnarchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsUnarchiveBody**](../Model/V1GroupsUnarchiveBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGroupsLeave**
> \Swagger\Client\Model\InlineResponse20056 postGroupsLeave($x_auth_token, $x_user_id, $body)

Leave Group

Leave a private channel. The group owner must set another owner before leaving the group. Permission required: `leave-p`  ### Changelog | Version | Description | | ------- | ----------- | | 0.48.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1GroupsLeaveBody(); // \Swagger\Client\Model\V1GroupsLeaveBody | 

try {
    $result = $apiInstance->postGroupsLeave($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postGroupsLeave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1GroupsLeaveBody**](../Model/V1GroupsLeaveBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20056**](../Model/InlineResponse20056.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

