# Swagger\Client\IMApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1ImCounters**](IMApi.md#getapiv1imcounters) | **GET** /api/v1/im.counters | Get DM Counters
[**getApiV1ImFiles**](IMApi.md#getapiv1imfiles) | **GET** /api/v1/im.files | Get DM Files
[**getApiV1ImHistory**](IMApi.md#getapiv1imhistory) | **GET** /api/v1/im.history | DM History
[**getApiV1ImList**](IMApi.md#getapiv1imlist) | **GET** /api/v1/im.list | List DMs
[**getApiV1ImListEveryone**](IMApi.md#getapiv1imlisteveryone) | **GET** /api/v1/im.list.everyone | List All DMs
[**getApiV1ImMembers**](IMApi.md#getapiv1immembers) | **GET** /api/v1/im.members | List DM Members
[**getApiV1ImMessages**](IMApi.md#getapiv1immessages) | **GET** /api/v1/im.messages | List DM Messages
[**getApiV1ImMessagesOthers**](IMApi.md#getapiv1immessagesothers) | **GET** /api/v1/im.messages.others | Message Others
[**postApiV1ImClose**](IMApi.md#postapiv1imclose) | **POST** /api/v1/im.close | Close DM
[**postApiV1ImCreate**](IMApi.md#postapiv1imcreate) | **POST** /api/v1/im.create | Create DM
[**postApiV1ImDelete**](IMApi.md#postapiv1imdelete) | **POST** /api/v1/im.delete | Delete DM
[**postApiV1ImOpen**](IMApi.md#postapiv1imopen) | **POST** /api/v1/im.open | Open DM
[**postApiV1ImSetTopic**](IMApi.md#postapiv1imsettopic) | **POST** /api/v1/im.setTopic | Set DM Topic

# **getApiV1ImCounters**
> \Swagger\Client\Model\InlineResponse20021 getApiV1ImCounters($x_auth_token, $x_user_id, $room_id, $user_id)

Get DM Counters

Gets counters and information of direct messages. Permission required: `view-room-administration`.  ### Changelog | Version      | Description |  | ---------------- | ------------| | 0.65.0           | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | The DM room ID
$user_id = "user_id_example"; // string | The user ID to provide counters for.

try {
    $result = $apiInstance->getApiV1ImCounters($x_auth_token, $x_user_id, $room_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->getApiV1ImCounters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **room_id** | **string**| The DM room ID |
 **user_id** | **string**| The user ID to provide counters for. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ImFiles**
> \Swagger\Client\Model\InlineResponse20023 getApiV1ImFiles($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields, $room_id, $username)

Get DM Files

Get all files in a DM.   ### Changelog | Version      | Description |  | ---------------- | ------------| |0.64.0            | Change `userId` to `user` object in response| |0.59.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{ \"value\": -1, \"_id\": 1 }`
$query = new \Swagger\Client\Model\null(); //  | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query=`{ \"name\": { \"$regex\": \"g\" }}`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$fields = "fields_example"; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields=`{ \"username\": 1 }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$room_id = "room_id_example"; // string | The roomId of the DM. It is required if `username` is not provided.
$username = "username_example"; // string | The username of the user in the DM. It is required if `roomId` is not provided.

try {
    $result = $apiInstance->getApiV1ImFiles($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields, $room_id, $username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->getApiV1ImFiles: ', $e->getMessage(), PHP_EOL;
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
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, &#x60;{ \&quot;value\&quot;: -1, \&quot;_id\&quot;: 1 }&#x60; | [optional]
 **query** | [****](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;&#x60;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; }}&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;&#x60;{ \&quot;username\&quot;: 1 }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **room_id** | **string**| The roomId of the DM. It is required if &#x60;username&#x60; is not provided. | [optional]
 **username** | **string**| The username of the user in the DM. It is required if &#x60;roomId&#x60; is not provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ImHistory**
> \Swagger\Client\Model\InlineResponse20024 getApiV1ImHistory($x_auth_token, $x_user_id, $room_id, $offset, $count, $latest, $oldest, $inclusive, $unreads)

DM History

Retrieves the message history from a direct message. ### Change Log | Version | Description             | | ------- | ----------------------- | | 0.75.0  | Added `offset` property | | 0.48.0  | Added                   |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | The room ID.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$latest = "latest_example"; // string | The end of time range of messages to retrieve.
$oldest = "oldest_example"; // string | The start of the time range of messages to retrieve.
$inclusive = "inclusive_example"; // string | Whether messages which land on the `latest` and `oldest` dates should be included.
$unreads = true; // bool | Whether the number of unread messages should be included.

try {
    $result = $apiInstance->getApiV1ImHistory($x_auth_token, $x_user_id, $room_id, $offset, $count, $latest, $oldest, $inclusive, $unreads);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->getApiV1ImHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **room_id** | **string**| The room ID. |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **latest** | **string**| The end of time range of messages to retrieve. | [optional]
 **oldest** | **string**| The start of the time range of messages to retrieve. | [optional]
 **inclusive** | **string**| Whether messages which land on the &#x60;latest&#x60; and &#x60;oldest&#x60; dates should be included. | [optional]
 **unreads** | **bool**| Whether the number of unread messages should be included. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ImList**
> \Swagger\Client\Model\InlineResponse20026 getApiV1ImList($x_auth_token, $x_user_id, $offset, $count, $sort)

List DMs

List all the DMs of the authenticated user.   ### Change Log  | Version | Description                                  | | ------- | -------------------------------------------- | | 0.67.0  | Remove `query` parameter support.            | | 0.62.0  | Add `query` parameter support.               | | 0.49.0  | Count and offset query parameters supported. | | 0.48.0  | Added                                        |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{ \"value\": -1, \"_id\": 1 }`

try {
    $result = $apiInstance->getApiV1ImList($x_auth_token, $x_user_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->getApiV1ImList: ', $e->getMessage(), PHP_EOL;
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
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, &#x60;{ \&quot;value\&quot;: -1, \&quot;_id\&quot;: 1 }&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ImListEveryone**
> \Swagger\Client\Model\InlineResponse20025 getApiV1ImListEveryone($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields)

List All DMs

List all DMs in the workspace.    Permission required:`view-room-administration`.  ### Changelog | Version      | Description |  | ------------ | ------------| |0.49.0        | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{ \"value\": -1, \"_id\": 1 }`
$query = new \Swagger\Client\Model\null(); //  | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query=`{ \"name\": { \"$regex\": \"g\" }}`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$fields = "fields_example"; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields=`{ \"username\": 1 }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.

try {
    $result = $apiInstance->getApiV1ImListEveryone($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->getApiV1ImListEveryone: ', $e->getMessage(), PHP_EOL;
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
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, &#x60;{ \&quot;value\&quot;: -1, \&quot;_id\&quot;: 1 }&#x60; | [optional]
 **query** | [****](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;&#x60;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; }}&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;&#x60;{ \&quot;username\&quot;: 1 }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ImMembers**
> \Swagger\Client\Model\InlineResponse20027 getApiV1ImMembers($x_auth_token, $x_user_id, $offset, $count, $sort, $room_id, $username)

List DM Members

List all the members of a DM.   ### Changelog | Version      | Description |  | ---------------- | ------------| |0.59.0             | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{ \"value\": -1, \"_id\": 1 }`
$room_id = "room_id_example"; // string | The room ID of the DM. It is required if `username` is not provided.
$username = "username_example"; // string | The username of the user in the DM. It is required if `roomId` is not provided.

try {
    $result = $apiInstance->getApiV1ImMembers($x_auth_token, $x_user_id, $offset, $count, $sort, $room_id, $username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->getApiV1ImMembers: ', $e->getMessage(), PHP_EOL;
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
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, &#x60;{ \&quot;value\&quot;: -1, \&quot;_id\&quot;: 1 }&#x60; | [optional]
 **room_id** | **string**| The room ID of the DM. It is required if &#x60;username&#x60; is not provided. | [optional]
 **username** | **string**| The username of the user in the DM. It is required if &#x60;roomId&#x60; is not provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ImMessages**
> \Swagger\Client\Model\InlineResponse20028 getApiV1ImMessages($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort, $fields, $username, $mention_ids, $starred_ids, $pinned)

List DM Messages

List all the messages in a DM.   ### Changelog | Version      | Description |  | ---------------- | ------------| | 7.0.0  | Added `mentionIds`, `starredIds`, `pinned` query parameters.|          |0.59.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | The room ID of the DM. It is required if `username` is not provided.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{ \"value\": -1, \"_id\": 1 }`
$fields = "fields_example"; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields=`{ \"username\": 1 }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$username = "username_example"; // string | The username of the user in the DM. It is required if `roomId` is not provided.
$mention_ids = "mention_ids_example"; // string | Filter the messages where a user has been mentioned by the userId. For a set of userIds, use an array (`[\"838ndhd79w\", \"dud0wu900\"]`).
$starred_ids = "starred_ids_example"; // string | Filter the messages a user have starred by userId. For a set of userIds, use an array (`[\"838ndhd79w\", \"dud0wu900\"]`).
$pinned = true; // bool | Filter pinned messages.

try {
    $result = $apiInstance->getApiV1ImMessages($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort, $fields, $username, $mention_ids, $starred_ids, $pinned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->getApiV1ImMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **room_id** | **string**| The room ID of the DM. It is required if &#x60;username&#x60; is not provided. |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, &#x60;{ \&quot;value\&quot;: -1, \&quot;_id\&quot;: 1 }&#x60; | [optional]
 **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;&#x60;{ \&quot;username\&quot;: 1 }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **username** | **string**| The username of the user in the DM. It is required if &#x60;roomId&#x60; is not provided. | [optional]
 **mention_ids** | **string**| Filter the messages where a user has been mentioned by the userId. For a set of userIds, use an array (&#x60;[\&quot;838ndhd79w\&quot;, \&quot;dud0wu900\&quot;]&#x60;). | [optional]
 **starred_ids** | **string**| Filter the messages a user have starred by userId. For a set of userIds, use an array (&#x60;[\&quot;838ndhd79w\&quot;, \&quot;dud0wu900\&quot;]&#x60;). | [optional]
 **pinned** | **bool**| Filter pinned messages. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ImMessagesOthers**
> \Swagger\Client\Model\InlineResponse20024 getApiV1ImMessagesOthers($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort, $query, $fields)

Message Others

Retrieves the messages from any direct message in the server.  For this method to work, navigate to  **Administration > Workspace > Settings > General > REST API > Enable Direct Message History Endpoint** and enable it.   Permission required: `view-room-administration`. ### Change Log | Version | Description             | | ------- | ----------------------- | | 0.50.0  | Added                   |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | The room ID.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{ \"value\": -1, \"_id\": 1 }`
$query = new \Swagger\Client\Model\null(); //  | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query=`{ \"name\": { \"$regex\": \"g\" }}`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$fields = "fields_example"; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields=`{ \"username\": 1 }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.

try {
    $result = $apiInstance->getApiV1ImMessagesOthers($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort, $query, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->getApiV1ImMessagesOthers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **room_id** | **string**| The room ID. |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, &#x60;{ \&quot;value\&quot;: -1, \&quot;_id\&quot;: 1 }&#x60; | [optional]
 **query** | [****](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;&#x60;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; }}&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;&#x60;{ \&quot;username\&quot;: 1 }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ImClose**
> \Swagger\Client\Model\InlineResponse2001 postApiV1ImClose($x_auth_token, $x_user_id, $body)

Close DM

Removes the direct message from the user's list of direct messages.  ### Changelog | Version      | Description |  | ------------ | ------------| | 0.48.0       | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ImCloseBody(); // \Swagger\Client\Model\V1ImCloseBody | 

try {
    $result = $apiInstance->postApiV1ImClose($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->postApiV1ImClose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ImCloseBody**](../Model/V1ImCloseBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ImCreate**
> \Swagger\Client\Model\InlineResponse20022 postApiV1ImCreate($x_auth_token, $x_user_id, $body)

Create DM

Create a direct message session with another user or more than one user.  #### Change Log | Version | Description              | | ------- | ------------------------ | | 0.59.0  | Added                    | | 3.1.0   | Added usernames fields   | | 3.18.0  | Added excludeSelf option |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ImCreateBody(); // \Swagger\Client\Model\V1ImCreateBody | 

try {
    $result = $apiInstance->postApiV1ImCreate($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->postApiV1ImCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ImCreateBody**](../Model/V1ImCreateBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ImDelete**
> \Swagger\Client\Model\InlineResponse2001 postApiV1ImDelete($x_auth_token, $x_user_id, $body)

Delete DM

Delete a DM. Permission required: `view-room-administration`.  ### Changelog | Version      | Description |  | ------------ | ------------| |3.18.0        | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ImDeleteBody(); // \Swagger\Client\Model\V1ImDeleteBody | 

try {
    $result = $apiInstance->postApiV1ImDelete($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->postApiV1ImDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ImDeleteBody**](../Model/V1ImDeleteBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ImOpen**
> \Swagger\Client\Model\InlineResponse2001 postApiV1ImOpen($x_auth_token, $x_user_id, $body)

Open DM

Adds a DM back to the user's list of direct messages.  ### Changelog | Version      | Description |  | ---------------- | ------------| | 0.48.0           | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ImOpenBody(); // \Swagger\Client\Model\V1ImOpenBody | 

try {
    $result = $apiInstance->postApiV1ImOpen($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->postApiV1ImOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ImOpenBody**](../Model/V1ImOpenBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ImSetTopic**
> \Swagger\Client\Model\InlineResponse20029 postApiV1ImSetTopic($x_auth_token, $x_user_id, $body)

Set DM Topic

Set the topic of a DM.  ### Changelog | Version      | Description |  | ---------------- | ------------| | 0.48.0           | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ImSetTopicBody(); // \Swagger\Client\Model\V1ImSetTopicBody | 

try {
    $result = $apiInstance->postApiV1ImSetTopic($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->postApiV1ImSetTopic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ImSetTopicBody**](../Model/V1ImSetTopicBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

