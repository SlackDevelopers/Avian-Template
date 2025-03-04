# Swagger\Client\ChannelsApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1ChannelsAnonymousread**](ChannelsApi.md#getapiv1channelsanonymousread) | **GET** /api/v1/channels.anonymousread | Read Channel Messages Anonymously
[**getApiV1ChannelsCounters**](ChannelsApi.md#getapiv1channelscounters) | **GET** /api/v1/channels.counters | Get Channel Counters
[**getApiV1ChannelsFiles**](ChannelsApi.md#getapiv1channelsfiles) | **GET** /api/v1/channels.files | Get Channel Files
[**getApiV1ChannelsGetAllUserMentionsByChannel**](ChannelsApi.md#getapiv1channelsgetallusermentionsbychannel) | **GET** /api/v1/channels.getAllUserMentionsByChannel | Get User Mentions in a Channel
[**getApiV1ChannelsGetIntegrations**](ChannelsApi.md#getapiv1channelsgetintegrations) | **GET** /api/v1/channels.getIntegrations | Get Channel Integrations
[**getApiV1ChannelsHistory**](ChannelsApi.md#getapiv1channelshistory) | **GET** /api/v1/channels.history | Get Channel History
[**getApiV1ChannelsInfo**](ChannelsApi.md#getapiv1channelsinfo) | **GET** /api/v1/channels.info | Get Channel Information
[**getApiV1ChannelsList**](ChannelsApi.md#getapiv1channelslist) | **GET** /api/v1/channels.list | Get Channel List
[**getApiV1ChannelsListJoined**](ChannelsApi.md#getapiv1channelslistjoined) | **GET** /api/v1/channels.list.joined | Get List of Joined Channels
[**getApiV1ChannelsMembers**](ChannelsApi.md#getapiv1channelsmembers) | **GET** /api/v1/channels.members | Get Members of a Channel
[**getApiV1ChannelsMessages**](ChannelsApi.md#getapiv1channelsmessages) | **GET** /api/v1/channels.messages | Get Channel Messages
[**getApiV1ChannelsModerators**](ChannelsApi.md#getapiv1channelsmoderators) | **GET** /api/v1/channels.moderators | Get Channel Moderators
[**getApiV1ChannelsOnline**](ChannelsApi.md#getapiv1channelsonline) | **GET** /api/v1/channels.online | List Online Users in a Channel
[**getApiV1ChannelsRoles**](ChannelsApi.md#getapiv1channelsroles) | **GET** /api/v1/channels.roles | Get Channel Roles
[**posApiV1ChannelsRename**](ChannelsApi.md#posapiv1channelsrename) | **POST** /api/v1/channels.rename | Rename a Channel
[**postApiV1ChannelsAddAll**](ChannelsApi.md#postapiv1channelsaddall) | **POST** /api/v1/channels.addAll | Add all Users to a Channel
[**postApiV1ChannelsAddLeader**](ChannelsApi.md#postapiv1channelsaddleader) | **POST** /api/v1/channels.addLeader | Add Channel Leader
[**postApiV1ChannelsAddModerator**](ChannelsApi.md#postapiv1channelsaddmoderator) | **POST** /api/v1/channels.addModerator | Add Channel Moderator
[**postApiV1ChannelsAddOwner**](ChannelsApi.md#postapiv1channelsaddowner) | **POST** /api/v1/channels.addOwner | Add Channel Owner
[**postApiV1ChannelsArchive**](ChannelsApi.md#postapiv1channelsarchive) | **POST** /api/v1/channels.archive | Archive Channel
[**postApiV1ChannelsClose**](ChannelsApi.md#postapiv1channelsclose) | **POST** /api/v1/channels.close | Close Channel
[**postApiV1ChannelsConvertToTeam**](ChannelsApi.md#postapiv1channelsconverttoteam) | **POST** /api/v1/channels.convertToTeam | Convert Channel to Team
[**postApiV1ChannelsCreate**](ChannelsApi.md#postapiv1channelscreate) | **POST** /api/v1/channels.create | Create Channel
[**postApiV1ChannelsDelete**](ChannelsApi.md#postapiv1channelsdelete) | **POST** /api/v1/channels.delete | Delete Channel
[**postApiV1ChannelsInvite**](ChannelsApi.md#postapiv1channelsinvite) | **POST** /api/v1/channels.invite | Add Users to Channel
[**postApiV1ChannelsJoin**](ChannelsApi.md#postapiv1channelsjoin) | **POST** /api/v1/channels.join | Join a Channel
[**postApiV1ChannelsKick**](ChannelsApi.md#postapiv1channelskick) | **POST** /api/v1/channels.kick | Remove User from Channel
[**postApiV1ChannelsLeave**](ChannelsApi.md#postapiv1channelsleave) | **POST** /api/v1/channels.leave | Leave  Channel
[**postApiV1ChannelsOpen**](ChannelsApi.md#postapiv1channelsopen) | **POST** /api/v1/channels.open | Add Channel to User List
[**postApiV1ChannelsRemoveLeader**](ChannelsApi.md#postapiv1channelsremoveleader) | **POST** /api/v1/channels.removeLeader | Remove Channel  Leader
[**postApiV1ChannelsRemoveModerator**](ChannelsApi.md#postapiv1channelsremovemoderator) | **POST** /api/v1/channels.removeModerator | Remove Channel Moderator
[**postApiV1ChannelsRemoveOwner**](ChannelsApi.md#postapiv1channelsremoveowner) | **POST** /api/v1/channels.removeOwner | Remove Channel Owner
[**postApiV1ChannelsSetAnnouncement**](ChannelsApi.md#postapiv1channelssetannouncement) | **POST** /api/v1/channels.setAnnouncement | Set Channel Announcement
[**postApiV1ChannelsSetCustomFields**](ChannelsApi.md#postapiv1channelssetcustomfields) | **POST** /api/v1/channels.setCustomFields | Set Channel Custom Fields
[**postApiV1ChannelsSetDefault**](ChannelsApi.md#postapiv1channelssetdefault) | **POST** /api/v1/channels.setDefault | Set Default Channel
[**postApiV1ChannelsSetDescription**](ChannelsApi.md#postapiv1channelssetdescription) | **POST** /api/v1/channels.setDescription | Set Channel Description
[**postApiV1ChannelsSetJoinCode**](ChannelsApi.md#postapiv1channelssetjoincode) | **POST** /api/v1/channels.setJoinCode | Set Channel Join Code
[**postApiV1ChannelsSetPurpose**](ChannelsApi.md#postapiv1channelssetpurpose) | **POST** /api/v1/channels.setPurpose | Set Channel Purpose
[**postApiV1ChannelsSetReadOnly**](ChannelsApi.md#postapiv1channelssetreadonly) | **POST** /api/v1/channels.setReadOnly | Set Channel ReadOnly
[**postApiV1ChannelsSetTopic**](ChannelsApi.md#postapiv1channelssettopic) | **POST** /api/v1/channels.setTopic | Set Channel Topic
[**postApiV1ChannelsSetType**](ChannelsApi.md#postapiv1channelssettype) | **POST** /api/v1/channels.setType | Set Channel Type
[**postApiV1ChannelsUnarchive**](ChannelsApi.md#postapiv1channelsunarchive) | **POST** /api/v1/channels.unarchive | Unarchive a Channel

# **getApiV1ChannelsAnonymousread**
> \Swagger\Client\Model\InlineResponse2003 getApiV1ChannelsAnonymousread($room_id, $room_name, $offset, $count, $sort, $query, $fields)

Read Channel Messages Anonymously

Fetch the messages in a public channel to an anonymous user. You must enable `Accounts_AllowAnonymousRead` <a href=\"https://docs.rocket.chat/docs/accounts\" target=\"_blank\">setting</a> in the workspace.  ### Changelog | Version | Description               | | ------- | ------------------------- | | 1.2.0   | Added                     |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = "room_id_example"; // string | The room ID. It is required if the `roomName` is not provided.
$room_name = "room_name_example"; // string | The room name.  It is required if the `roomId` is not provided.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$query = new \Swagger\Client\Model\null(); //  | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": `query={ \"name\": { \"$regex\": \"g\" } }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$fields = "fields_example"; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: `fields={ \"username\": 1 }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.

try {
    $result = $apiInstance->getApiV1ChannelsAnonymousread($room_id, $room_name, $offset, $count, $sort, $query, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsAnonymousread: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **string**| The room ID. It is required if the &#x60;roomName&#x60; is not provided. | [optional]
 **room_name** | **string**| The room name.  It is required if the &#x60;roomId&#x60; is not provided. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]
 **query** | [****](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: &#x60;query&#x3D;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: &#x60;fields&#x3D;{ \&quot;username\&quot;: 1 }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChannelsCounters**
> \Swagger\Client\Model\InlineResponse2004 getApiV1ChannelsCounters($x_auth_token, $x_user_id, $room_id, $room_name, $user_id)

Get Channel Counters

Gets channel counter for the authenticated user.  Permission required: `view-room-administration` ### Changelog | Version | Description               | | ------- | ------------------------- | | 0.65.0  | Added                     |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | The room ID. It is required if the `roomName` is not provided.
$room_name = "room_name_example"; // string | The room name.  It is required if the `roomId` is not provided.
$user_id = "user_id_example"; // string | The user ID.

try {
    $result = $apiInstance->getApiV1ChannelsCounters($x_auth_token, $x_user_id, $room_id, $room_name, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsCounters: ', $e->getMessage(), PHP_EOL;
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
 **user_id** | **string**| The user ID. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChannelsFiles**
> \Swagger\Client\Model\InlineResponse2005 getApiV1ChannelsFiles($x_user_id, $x_auth_token, $room_id, $room_name, $fields, $query, $sort, $count, $offset)

Get Channel Files

Retrieves all the media files from a channel.  ### Changelog | Version | Description               | | ------- | ------------------------- | | 0.64.0 | Change userId to user object in response                    | | 0.59.0  | Added                  |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$room_id = "room_id_example"; // string | The room ID. It is required if the `roomName` is not provided.
$room_name = "room_name_example"; // string | The room name.  It is required if the `roomId` is not provided.
$fields = "fields_example"; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: `fields={ \"username\": 1 }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$query = new \Swagger\Client\Model\null(); //  | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": `query={ \"name\": { \"$regex\": \"g\" } }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$count = 56; // int | The number of items to return.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.

try {
    $result = $apiInstance->getApiV1ChannelsFiles($x_user_id, $x_auth_token, $room_id, $room_name, $fields, $query, $sort, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsFiles: ', $e->getMessage(), PHP_EOL;
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
 **query** | [****](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: &#x60;query&#x3D;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChannelsGetAllUserMentionsByChannel**
> \Swagger\Client\Model\InlineResponse20023 getApiV1ChannelsGetAllUserMentionsByChannel($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort)

Get User Mentions in a Channel

Get all the mentions of the authenticated user in a channel.  ### Changelog | Version | Description| | ------- | -----------| |0.63.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | The room id.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}

try {
    $result = $apiInstance->getApiV1ChannelsGetAllUserMentionsByChannel($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsGetAllUserMentionsByChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **room_id** | **string**| The room id. |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChannelsGetIntegrations**
> \Swagger\Client\Model\InlineResponse20024 getApiV1ChannelsGetIntegrations($x_auth_token, $x_user_id, $room_id, $offset, $sort, $fields, $query, $count)

Get Channel Integrations

Retrieves the integrations that the channel has. The endpoint requires at least one of the following integration permissions:  - `manage-incoming-integrations` - `manage-own-incoming-integrations` - `manage-outgoing-integrations` - `manage-own-outgoing-integrations`.   It will return the integrations based on the user's permission.   ### Changelog | Version | Description                                     | | ------- | -------------------------------------------------- | | 1.1.0   | Separate permissions in `incoming` and `outgoing`. | | 0.49.0  | Added                                              |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | The room id.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$fields = "fields_example"; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: `fields={ \"username\": 1 }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$query = new \Swagger\Client\Model\null(); //  | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": `query={ \"name\": { \"$regex\": \"g\" } }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$count = 56; // int | The number of items to return.

try {
    $result = $apiInstance->getApiV1ChannelsGetIntegrations($x_auth_token, $x_user_id, $room_id, $offset, $sort, $fields, $query, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsGetIntegrations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **room_id** | **string**| The room id. |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]
 **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: &#x60;fields&#x3D;{ \&quot;username\&quot;: 1 }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **query** | [****](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: &#x60;query&#x3D;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **count** | **int**| The number of items to return. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChannelsHistory**
> \Swagger\Client\Model\InlineResponse2005 getApiV1ChannelsHistory($x_auth_token, $x_user_id, $room_id, $room_name, $sort, $count, $offset, $latest, $oldest, $inclusive, $show_thread_messages, $unreads)

Get Channel History

Retrieves the history of a channel. You must be a member of the channel or have the `preview-c-room` permission.  ### Changelog | Version | Description               | | ------- | ------------------------- | | 0.75.0 | Added offset property      | | 0.47.0  | Added                     |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
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
$latest = "latest_example"; // string | The end of time range of messages to retrieve. The default value is the current date and time.
$oldest = "oldest_example"; // string | The start of the time range of messages to retrieve
$inclusive = true; // bool | Whether messages which land on the latest and oldest dates should be included. The default value is false.
$show_thread_messages = true; // bool | Whether thread messages should be included in the response
$unreads = true; // bool | Whether the number of unread messages should be included. The default value is false.

try {
    $result = $apiInstance->getApiV1ChannelsHistory($x_auth_token, $x_user_id, $room_id, $room_name, $sort, $count, $offset, $latest, $oldest, $inclusive, $show_thread_messages, $unreads);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsHistory: ', $e->getMessage(), PHP_EOL;
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
 **latest** | **string**| The end of time range of messages to retrieve. The default value is the current date and time. | [optional]
 **oldest** | **string**| The start of the time range of messages to retrieve | [optional]
 **inclusive** | **bool**| Whether messages which land on the latest and oldest dates should be included. The default value is false. | [optional]
 **show_thread_messages** | **bool**| Whether thread messages should be included in the response | [optional]
 **unreads** | **bool**| Whether the number of unread messages should be included. The default value is false. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChannelsInfo**
> \Swagger\Client\Model\InlineResponse2001 getApiV1ChannelsInfo($x_auth_token, $x_user_id, $room_id, $room_name)

Get Channel Information

Retrieves the information about the channel. This does not include archived channels. You must be a member of the channel.  ### Changelog | Version | Description               | | ------- | ------------------------- | | 0.48.0  | Added                  |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | The room ID. It is required if the `roomName` is not provided.
$room_name = "room_name_example"; // string | The room name.  It is required if the `roomId` is not provided.

try {
    $result = $apiInstance->getApiV1ChannelsInfo($x_auth_token, $x_user_id, $room_id, $room_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsInfo: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChannelsList**
> \Swagger\Client\Model\InlineResponse2009 getApiV1ChannelsList($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields)

Get Channel List

Lists all the channels on the workspace. Any of the following permissions are required: * `view-c-room` * `view-joined-room`  ### Changelog | Version | Description                                  | | ------- | -------------------------------------------- | | 0.49.0  | Count and offset query parameters supported. | | 0.48.0  | Added                                        |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
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
    $result = $apiInstance->getApiV1ChannelsList($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChannelsListJoined**
> \Swagger\Client\Model\InlineResponse2008 getApiV1ChannelsListJoined($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields)

Get List of Joined Channels

Lists all the channels the authenticated user has joined.  ### Changelog | Version | Description                                  | | ------- | -------------------------------------------- | | 0.62.0  | Add `query` parameter support.               | | 0.49.0  | Count and offset query parameters supported. | | 0.48.0  | Added                                        |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
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
    $result = $apiInstance->getApiV1ChannelsListJoined($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsListJoined: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChannelsMembers**
> \Swagger\Client\Model\InlineResponse20010 getApiV1ChannelsMembers($x_auth_token, $x_user_id, $room_id, $room_name, $status, $filter, $sort, $count, $offset)

Get Members of a Channel

Lists all channel users. The list of elements a user can use to sort the list is limited. The current sortable element is: `username`.  If the channel is a broadcast channel, you need the `view-broadcast-member-list` permission.  ### Changelog | Version | Description                                  | | ------- | -------------------------------------------- | | 0.59.0  | Added                                        |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | The room ID. It is required if the `roomName` is not provided.
$room_name = "room_name_example"; // string | The room name.  It is required if the `roomId` is not provided.
$status = array("status_example"); // string[] | The user's status (search filter).
$filter = "filter_example"; // string | Extra search filters to be applied to the fields defined in the `Accounts_SearchFields`setting.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$count = 56; // int | The number of items to return.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.

try {
    $result = $apiInstance->getApiV1ChannelsMembers($x_auth_token, $x_user_id, $room_id, $room_name, $status, $filter, $sort, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsMembers: ', $e->getMessage(), PHP_EOL;
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
 **status** | [**string[]**](../Model/string.md)| The user&#x27;s status (search filter). | [optional]
 **filter** | **string**| Extra search filters to be applied to the fields defined in the &#x60;Accounts_SearchFields&#x60;setting. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChannelsMessages**
> \Swagger\Client\Model\InlineResponse20011 getApiV1ChannelsMessages($x_auth_token, $x_user_id, $room_id, $count, $sort, $offset, $mention_ids, $starred_ids, $pinned)

Get Channel Messages

Lists all the channel's messages. Permissions required: `view-c-room`, `view-joined-room`  ### Changelog  | Version | Description                                  | | ------- | -------------------------------------------- | | 7.0.0  | Added `mentionIds`, `starredIds`, `pinned` query parameters.|         | 0.59.0  | Added                                        |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | The room id.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$mention_ids = "mention_ids_example"; // string | Filter the messages where a user has been mentioned by the userId. For a set of userIds, use an array (`[\"838ndhd79w\", \"dud0wu900\"]`).
$starred_ids = "starred_ids_example"; // string | Filter the messages a user have starred by userId. For a set of userIds, use an array (`[\"838ndhd79w\", \"dud0wu900\"]`).
$pinned = true; // bool | Filter pinned messages.

try {
    $result = $apiInstance->getApiV1ChannelsMessages($x_auth_token, $x_user_id, $room_id, $count, $sort, $offset, $mention_ids, $starred_ids, $pinned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **room_id** | **string**| The room id. |
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **mention_ids** | **string**| Filter the messages where a user has been mentioned by the userId. For a set of userIds, use an array (&#x60;[\&quot;838ndhd79w\&quot;, \&quot;dud0wu900\&quot;]&#x60;). | [optional]
 **starred_ids** | **string**| Filter the messages a user have starred by userId. For a set of userIds, use an array (&#x60;[\&quot;838ndhd79w\&quot;, \&quot;dud0wu900\&quot;]&#x60;). | [optional]
 **pinned** | **bool**| Filter pinned messages. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChannelsModerators**
> \Swagger\Client\Model\InlineResponse20012 getApiV1ChannelsModerators($x_auth_token, $x_user_id, $room_id, $room_name)

Get Channel Moderators

List all the moderators in a channel.  ### Changelog | Version | Description | | ------- | ----------- | | 0.70.0 | Added        |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | The room ID. It is required if the `roomName` is not provided.
$room_name = "room_name_example"; // string | The room name.  It is required if the `roomId` is not provided.

try {
    $result = $apiInstance->getApiV1ChannelsModerators($x_auth_token, $x_user_id, $room_id, $room_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsModerators: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChannelsOnline**
> \Swagger\Client\Model\InlineResponse20013 getApiV1ChannelsOnline($x_auth_token, $x_user_id, $_id)

List Online Users in a Channel

List all online users in a particular channel.  ### Changelog | Version | Description | | ------- | ----------- | |0.52.0   | Added       | |7.0.0   | Replaced `query` parameter with `_id` parameter       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$_id = "_id_example"; // string | The channel's id.

try {
    $result = $apiInstance->getApiV1ChannelsOnline($x_auth_token, $x_user_id, $_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsOnline: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **_id** | **string**| The channel&#x27;s id. |

### Return type

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChannelsRoles**
> \Swagger\Client\Model\InlineResponse20014 getApiV1ChannelsRoles($room_id, $room_name)

Get Channel Roles

Lists all user's roles in the channel.  ### Changelog  | Version | Description | | ------- | ----------- | |0.65.0  | Added        |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = "room_id_example"; // string | The room ID. It is required if the `roomName` is not provided.
$room_name = "room_name_example"; // string | The room name.  It is required if the `roomId` is not provided.

try {
    $result = $apiInstance->getApiV1ChannelsRoles($room_id, $room_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **string**| The room ID. It is required if the &#x60;roomName&#x60; is not provided. | [optional]
 **room_name** | **string**| The room name.  It is required if the &#x60;roomId&#x60; is not provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **posApiV1ChannelsRename**
> \Swagger\Client\Model\InlineResponse2007 posApiV1ChannelsRename($x_auth_token, $x_user_id, $body)

Rename a Channel

Change the name of a channel. Permission required: `edit-room`  ### Changelog | Version | Description | | ------- | ----------- | |0.48.0  | Added        |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsRenameBody(); // \Swagger\Client\Model\V1ChannelsRenameBody | 

try {
    $result = $apiInstance->posApiV1ChannelsRename($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->posApiV1ChannelsRename: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsRenameBody**](../Model/V1ChannelsRenameBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsAddAll**
> \Swagger\Client\Model\InlineResponse2001 postApiV1ChannelsAddAll($x_auth_token, $x_user_id, $body)

Add all Users to a Channel

Adds all users in the workspace to a public room. Permission required: `add-all-to-room`. The maximum number of users you can add at once depends on your workspace's REST API settings. To access this setting, go to **Administration** > **Settings** > **General** > **REST API** > **User Limit for Adding All Users to Channel**.  ### Changelog | Version | Description               | | ------- | ------------------------- | |0.55.0   | Added `activeUsersOnly` param | |0.48.0   | Renamed to `channels.addAll` from `channel.addAll`|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsAddAllBody(); // \Swagger\Client\Model\V1ChannelsAddAllBody | 

try {
    $result = $apiInstance->postApiV1ChannelsAddAll($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsAddAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsAddAllBody**](../Model/V1ChannelsAddAllBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsAddLeader**
> \Swagger\Client\Model\InlineResponse2002 postApiV1ChannelsAddLeader($x_auth_token, $x_user_id, $body)

Add Channel Leader

Assign the role of `leader` to a channel member. See <a href='https://docs.rocket.chat/docs/room-roles' target='_blank'>Room Roles</a> for details about the roles.  Permission required: `set-leader` ### Changelog | Version | Description               | | ------- | ------------------------- | | 0.75.0   | Added                    |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsAddLeaderBody(); // \Swagger\Client\Model\V1ChannelsAddLeaderBody | 

try {
    $result = $apiInstance->postApiV1ChannelsAddLeader($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsAddLeader: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsAddLeaderBody**](../Model/V1ChannelsAddLeaderBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsAddModerator**
> \Swagger\Client\Model\InlineResponse2002 postApiV1ChannelsAddModerator($x_auth_token, $x_user_id, $body)

Add Channel Moderator

Assign the `moderator` role to a channel member. See <a href='https://docs.rocket.chat/docs/room-roles' target='_blank'>Room Roles</a> for details about the roles.  Permission required: `set-moderator`  ### Changelog | Version | Description               | | ------- | ------------------------- | | 0.49.4  | Added                     |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsAddModeratorBody(); // \Swagger\Client\Model\V1ChannelsAddModeratorBody | 

try {
    $result = $apiInstance->postApiV1ChannelsAddModerator($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsAddModerator: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsAddModeratorBody**](../Model/V1ChannelsAddModeratorBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsAddOwner**
> \Swagger\Client\Model\InlineResponse2002 postApiV1ChannelsAddOwner($x_auth_token, $x_user_id, $body)

Add Channel Owner

Assign the `owner` role to a channel member. See <a href='https://docs.rocket.chat/docs/room-roles' target='_blank'>Room Roles</a> for details about the roles.  Permission required:  `set-owner` ### Changelog | Version | Description               | | ------- | ------------------------- | | 0.49.4   | Added                    |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsAddOwnerBody(); // \Swagger\Client\Model\V1ChannelsAddOwnerBody | 

try {
    $result = $apiInstance->postApiV1ChannelsAddOwner($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsAddOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsAddOwnerBody**](../Model/V1ChannelsAddOwnerBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsArchive**
> \Swagger\Client\Model\InlineResponse2002 postApiV1ChannelsArchive($x_auth_token, $x_user_id, $body)

Archive Channel

Archive a channel. Permission required: `archive-room` ### Changelog | Version | Description               | | ------- | ------------------------- | | 0.48.0  | Added                    |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsArchiveBody(); // \Swagger\Client\Model\V1ChannelsArchiveBody | 

try {
    $result = $apiInstance->postApiV1ChannelsArchive($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsArchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsArchiveBody**](../Model/V1ChannelsArchiveBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsClose**
> \Swagger\Client\Model\InlineResponse2002 postApiV1ChannelsClose($x_auth_token, $x_user_id, $body)

Close Channel

Remove a channel from the user's list of channels in the workspace sidebar. You can access it again from the **Directory**. ### Changelog | Version | Description               | | ------- | ------------------------- | | 0.48.0  | Added                     |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsCloseBody(); // \Swagger\Client\Model\V1ChannelsCloseBody | 

try {
    $result = $apiInstance->postApiV1ChannelsClose($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsClose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsCloseBody**](../Model/V1ChannelsCloseBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsConvertToTeam**
> \Swagger\Client\Model\InlineResponse20025 postApiV1ChannelsConvertToTeam($x_auth_token, $x_user_id, $body)

Convert Channel to Team

Convert a channel to a team. Permissions required: `create-team`, `edit-room`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsConvertToTeamBody(); // \Swagger\Client\Model\V1ChannelsConvertToTeamBody | 

try {
    $result = $apiInstance->postApiV1ChannelsConvertToTeam($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsConvertToTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsConvertToTeamBody**](../Model/V1ChannelsConvertToTeamBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsCreate**
> \Swagger\Client\Model\InlineResponse200 postApiV1ChannelsCreate($x_auth_token, $x_user_id, $body)

Create Channel

Create a public channel. Optionally, include specified users. The channel creator is included as a member by default. Permission required: `create-c`. Channel naming has restraints following the regex filter `[0-9a-zA-Z-_.]+` by default. See <a href=\"https://docs.rocket.chat/docs/general#utf8\" target=\"_blank\">UTF8 Settings</a> to modify regex filter for channel names. Channel names must not allow for any whitespaces.  ### Changelog  | Version | Description               | | ------- | ------------------------- | | 6.4.1   | Added `excludeSelf` param | | 0.13.0  | Added                     |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsCreateBody(); // \Swagger\Client\Model\V1ChannelsCreateBody | 

try {
    $result = $apiInstance->postApiV1ChannelsCreate($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsCreateBody**](../Model/V1ChannelsCreateBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsDelete**
> \Swagger\Client\Model\InlineResponse2002 postApiV1ChannelsDelete($x_auth_token, $x_user_id, $body)

Delete Channel

Delete a channel. Any of the permssions are required: * `delete-c`: Delete a public channel. * `delete-team-channel`: Delete a channel part of a team. You also need the `delete-c` permission.  ### Changelog  | Version | Description               | | ------- | ------------------------- | | 0.71.0  | Removed `channel` property| | 0.49.0  | Added                     |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsDeleteBody(); // \Swagger\Client\Model\V1ChannelsDeleteBody | 

try {
    $result = $apiInstance->postApiV1ChannelsDelete($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsDeleteBody**](../Model/V1ChannelsDeleteBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsInvite**
> \Swagger\Client\Model\InlineResponse2006 postApiV1ChannelsInvite($x_auth_token, $x_user_id, $body)

Add Users to Channel

Add a user or bulk users to a channel.  For a user to invite other users, they must match at least one of the following premises: - The user is part of a room of any type and has the `add-user-to-joined-room` permission. - The user is part of a public room `(t: 'c')` and has the `add-user-to-any-c-room` permission. - The user is part of a private room `(t: 'p')` and has the `add-user-to-any-p-room` permission.  ### Changelog  | Version | Description               | | ------- | ------------------------- | | 0.48.0  | Added                  |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsInviteBody(); // \Swagger\Client\Model\V1ChannelsInviteBody | 

try {
    $result = $apiInstance->postApiV1ChannelsInvite($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsInvite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsInviteBody**](../Model/V1ChannelsInviteBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsJoin**
> \Swagger\Client\Model\InlineResponse2001 postApiV1ChannelsJoin($x_auth_token, $x_user_id, $body)

Join a Channel

Join a public channel.  ### Changelog | Version | Description               | | ------- | ------------------------- | | 0.49.0  | Added                  |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsJoinBody(); // \Swagger\Client\Model\V1ChannelsJoinBody | 

try {
    $result = $apiInstance->postApiV1ChannelsJoin($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsJoin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsJoinBody**](../Model/V1ChannelsJoinBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsKick**
> \Swagger\Client\Model\InlineResponse2001 postApiV1ChannelsKick($body)

Remove User from Channel

Remove a user from the channel.  Permissions required: * `remove-user`: To remove a user from any room. * `kick-user-from-any-c-room`: To remove a user from a public channel. You also need the `remove-user` permission.  ### Changelog | Version | Description               | | ------- | ------------------------- | | 0.48.0  | Added                     |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\V1ChannelsKickBody(); // \Swagger\Client\Model\V1ChannelsKickBody | 

try {
    $result = $apiInstance->postApiV1ChannelsKick($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsKick: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\V1ChannelsKickBody**](../Model/V1ChannelsKickBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsLeave**
> \Swagger\Client\Model\InlineResponse2007 postApiV1ChannelsLeave($x_auth_token, $x_user_id, $body)

Leave  Channel

Leave a public channel. Permission required: `leave-c` ### Changelog | Version | Description               | | ------- | ------------------------- | | 0.48.0  | Added                  |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsLeaveBody(); // \Swagger\Client\Model\V1ChannelsLeaveBody | 

try {
    $result = $apiInstance->postApiV1ChannelsLeave($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsLeave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsLeaveBody**](../Model/V1ChannelsLeaveBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsOpen**
> \Swagger\Client\Model\InlineResponse2002 postApiV1ChannelsOpen($x_auth_token, $x_user_id, $body)

Add Channel to User List

Add a channel back to the user's list of channels in the workspace's sidebar. ### Changelog  | Version | Description | | ------- | ----------- | |0.48.0   | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsOpenBody(); // \Swagger\Client\Model\V1ChannelsOpenBody | 

try {
    $result = $apiInstance->postApiV1ChannelsOpen($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsOpenBody**](../Model/V1ChannelsOpenBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsRemoveLeader**
> \Swagger\Client\Model\InlineResponse2002 postApiV1ChannelsRemoveLeader($x_auth_token, $x_user_id, $body)

Remove Channel  Leader

Remove the `leader` role from a user in a channel.   Permission required: `set-leader` .  ### Changelog  | Version | Description | | ------- | ----------- | |0.75.0  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsRemoveLeaderBody(); // \Swagger\Client\Model\V1ChannelsRemoveLeaderBody | 

try {
    $result = $apiInstance->postApiV1ChannelsRemoveLeader($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsRemoveLeader: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsRemoveLeaderBody**](../Model/V1ChannelsRemoveLeaderBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsRemoveModerator**
> \Swagger\Client\Model\InlineResponse2002 postApiV1ChannelsRemoveModerator($x_auth_token, $x_user_id, $body)

Remove Channel Moderator

Remove the `moderator` role from a user in a channel.  Permission required: `set-moderator`.  ### Changelog  | Version | Description | | ------- | ----------- | |0.49.4  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsRemoveModeratorBody(); // \Swagger\Client\Model\V1ChannelsRemoveModeratorBody | 

try {
    $result = $apiInstance->postApiV1ChannelsRemoveModerator($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsRemoveModerator: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsRemoveModeratorBody**](../Model/V1ChannelsRemoveModeratorBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsRemoveOwner**
> \Swagger\Client\Model\InlineResponse2002 postApiV1ChannelsRemoveOwner($x_auth_token, $x_user_id, $body)

Remove Channel Owner

Remove the `owner` role from a user in a channel.   Permission required:`set-owner`.  ### Changelog  | Version | Description | | ------- | ----------- | |0.49.4  | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsRemoveOwnerBody(); // \Swagger\Client\Model\V1ChannelsRemoveOwnerBody | 

try {
    $result = $apiInstance->postApiV1ChannelsRemoveOwner($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsRemoveOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsRemoveOwnerBody**](../Model/V1ChannelsRemoveOwnerBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsSetAnnouncement**
> \Swagger\Client\Model\InlineResponse20015 postApiV1ChannelsSetAnnouncement($x_user_id, $x_auth_token, $body)

Set Channel Announcement

Set an announcement for the channel. Permission required: `edit-room` ### Changelog  | Version | Description | | ------- | ----------- | |0.63.0  | Added        |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsSetAnnouncementBody(); // \Swagger\Client\Model\V1ChannelsSetAnnouncementBody | 

try {
    $result = $apiInstance->postApiV1ChannelsSetAnnouncement($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsSetAnnouncement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsSetAnnouncementBody**](../Model/V1ChannelsSetAnnouncementBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsSetCustomFields**
> \Swagger\Client\Model\InlineResponse20016 postApiV1ChannelsSetCustomFields($x_user_id, $x_auth_token, $body)

Set Channel Custom Fields

Sets the custom fields for a channel. Permission required: `edit-room`.  See the <a href='https://docs.rocket.chat/docs/custom-fields' target='_blank'>Configure Custom Fields for Users</a> document for configuration information.  ### Changelog | Version | Description | | ------- | ----------- | |0.62.0  | Added        |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsSetCustomFieldsBody(); // \Swagger\Client\Model\V1ChannelsSetCustomFieldsBody | 

try {
    $result = $apiInstance->postApiV1ChannelsSetCustomFields($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsSetCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsSetCustomFieldsBody**](../Model/V1ChannelsSetCustomFieldsBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsSetDefault**
> \Swagger\Client\Model\InlineResponse20017 postApiV1ChannelsSetDefault($x_auth_token, $x_user_id, $body)

Set Default Channel

Set whether the channel is a default channel or not. All new users will automatically join this channel. Permission required: `edit-room`  ### Changelog | Version | Description | | ------- | ----------- | |0.66.0  | Added        |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsSetDefaultBody(); // \Swagger\Client\Model\V1ChannelsSetDefaultBody | 

try {
    $result = $apiInstance->postApiV1ChannelsSetDefault($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsSetDefault: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsSetDefaultBody**](../Model/V1ChannelsSetDefaultBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsSetDescription**
> \Swagger\Client\Model\InlineResponse20018 postApiV1ChannelsSetDescription($x_auth_token, $x_user_id, $body)

Set Channel Description

Set the description for a channel. Permission required: `edit-room`.  ### Changelog | Version | Description | | ------- | ----------- | |0.48.4  | Added        |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsSetDescriptionBody(); // \Swagger\Client\Model\V1ChannelsSetDescriptionBody | 

try {
    $result = $apiInstance->postApiV1ChannelsSetDescription($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsSetDescription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsSetDescriptionBody**](../Model/V1ChannelsSetDescriptionBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsSetJoinCode**
> \Swagger\Client\Model\InlineResponse20019 postApiV1ChannelsSetJoinCode($x_auth_token, $x_user_id, $body)

Set Channel Join Code

Set the code required to join the channel. If it is set, users must use the join code to successfully join the channel. Permission required: `edit-room`  ### Changelog | Version | Description | | ------- | ----------- | |0.49.0  | Added        |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsSetJoinCodeBody(); // \Swagger\Client\Model\V1ChannelsSetJoinCodeBody | 

try {
    $result = $apiInstance->postApiV1ChannelsSetJoinCode($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsSetJoinCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsSetJoinCodeBody**](../Model/V1ChannelsSetJoinCodeBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsSetPurpose**
> \Swagger\Client\Model\InlineResponse20020 postApiV1ChannelsSetPurpose($x_auth_token, $x_user_id, $body)

Set Channel Purpose

Set the purpose or description of the channel. It is the same as Set Channel Description. Permission required: `edit-room`  ### Changelog | Version | Description | | ------- | ----------- | |0.48.0  | Added        |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsSetPurposeBody(); // \Swagger\Client\Model\V1ChannelsSetPurposeBody | 

try {
    $result = $apiInstance->postApiV1ChannelsSetPurpose($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsSetPurpose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsSetPurposeBody**](../Model/V1ChannelsSetPurposeBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsSetReadOnly**
> \Swagger\Client\Model\InlineResponse20021 postApiV1ChannelsSetReadOnly($x_auth_token, $x_user_id, $body)

Set Channel ReadOnly

Set a channel to be read-only or not. Permission required: `edit-room`  ### Changelog | Version | Description | | ------- | ----------- | |0.49.0  | Added        |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsSetReadOnlyBody(); // \Swagger\Client\Model\V1ChannelsSetReadOnlyBody | 

try {
    $result = $apiInstance->postApiV1ChannelsSetReadOnly($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsSetReadOnly: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsSetReadOnlyBody**](../Model/V1ChannelsSetReadOnlyBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsSetTopic**
> \Swagger\Client\Model\InlineResponse20022 postApiV1ChannelsSetTopic($x_auth_token, $x_user_id, $body)

Set Channel Topic

Set the topic for a channel. Permission required: `edit-room`.  ### Changelog | Version | Description | | ------- | ----------- | |0.13.0  | Added        |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsSetTopicBody(); // \Swagger\Client\Model\V1ChannelsSetTopicBody | 

try {
    $result = $apiInstance->postApiV1ChannelsSetTopic($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsSetTopic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsSetTopicBody**](../Model/V1ChannelsSetTopicBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsSetType**
> \Swagger\Client\Model\InlineResponse20021 postApiV1ChannelsSetType($x_auth_token, $x_user_id, $body)

Set Channel Type

Set the channel type. The channel type can be either `c` (public) or `p` (private). The following permissions are required: * `create-c`: To change a private group to a public channel. * `create-p`: To change a public channel to a private room.  ### Changelog | Version | Description | | ------- | ----------- | |0.49.0  | Added        |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsSetTypeBody(); // \Swagger\Client\Model\V1ChannelsSetTypeBody | 

try {
    $result = $apiInstance->postApiV1ChannelsSetType($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsSetType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsSetTypeBody**](../Model/V1ChannelsSetTypeBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChannelsUnarchive**
> \Swagger\Client\Model\InlineResponse2002 postApiV1ChannelsUnarchive($x_auth_token, $x_user_id, $body)

Unarchive a Channel

Unarchive a channel. Permission required: `unarchive-room`  ### Changelog | Version | Description | | ------- | ----------- | |0.48.0   | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChannelsUnarchiveBody(); // \Swagger\Client\Model\V1ChannelsUnarchiveBody | 

try {
    $result = $apiInstance->postApiV1ChannelsUnarchive($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsUnarchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChannelsUnarchiveBody**](../Model/V1ChannelsUnarchiveBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

