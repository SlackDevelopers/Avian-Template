# Swagger\Client\ChatApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1ChatGetDeletedMessages**](ChatApi.md#getapiv1chatgetdeletedmessages) | **GET** /api/v1/chat.getDeletedMessages | Get Deleted Messages
[**getApiV1ChatGetDiscussions**](ChatApi.md#getapiv1chatgetdiscussions) | **GET** /api/v1/chat.getDiscussions | Get Discussions of A Room
[**getApiV1ChatGetMentionedMessages**](ChatApi.md#getapiv1chatgetmentionedmessages) | **GET** /api/v1/chat.getMentionedMessages | Get Mentioned Messages
[**getApiV1ChatGetMessage**](ChatApi.md#getapiv1chatgetmessage) | **GET** /api/v1/chat.getMessage | Get Message
[**getApiV1ChatGetMessageReadReceipts**](ChatApi.md#getapiv1chatgetmessagereadreceipts) | **GET** /api/v1/chat.getMessageReadReceipts | Get Message Read Receipts
[**getApiV1ChatGetPinnedMessages**](ChatApi.md#getapiv1chatgetpinnedmessages) | **GET** /api/v1/chat.getPinnedMessages | Get Pinned Messages
[**getApiV1ChatGetSnippetedMessageById**](ChatApi.md#getapiv1chatgetsnippetedmessagebyid) | **GET** /api/v1/chat.getSnippetedMessageById | Get Snippeted Message By Id
[**getApiV1ChatGetSnippetedMessages**](ChatApi.md#getapiv1chatgetsnippetedmessages) | **GET** /api/v1/chat.getSnippetedMessages | Get Snippeted Messages
[**getApiV1ChatGetStarredMessages**](ChatApi.md#getapiv1chatgetstarredmessages) | **GET** /api/v1/chat.getStarredMessages | Get Starred Messages
[**getApiV1ChatGetThreadMessages**](ChatApi.md#getapiv1chatgetthreadmessages) | **GET** /api/v1/chat.getThreadMessages | Get Thread Messages
[**getApiV1ChatIgnoreUser**](ChatApi.md#getapiv1chatignoreuser) | **GET** /api/v1/chat.ignoreUser | Ignore User
[**getApiV1ChatSearch**](ChatApi.md#getapiv1chatsearch) | **GET** /api/v1/chat.search | Search Message
[**getApiV1ChatSyncMessages**](ChatApi.md#getapiv1chatsyncmessages) | **GET** /api/v1/chat.syncMessages | Sync Messages
[**getApiV1ChatSyncThreadMessages**](ChatApi.md#getapiv1chatsyncthreadmessages) | **GET** /api/v1/chat.syncThreadMessages | Sync Thread Messages
[**getApiV1ChatSyncThreadsList**](ChatApi.md#getapiv1chatsyncthreadslist) | **GET** /api/v1/chat.syncThreadsList | Sync Thread List
[**getChatGetThreadsList**](ChatApi.md#getchatgetthreadslist) | **GET** /chat.getThreadsList | List Threads
[**postApiV1ChatDelete**](ChatApi.md#postapiv1chatdelete) | **POST** /api/v1/chat.delete | Delete Chat Message
[**postApiV1ChatFollowMessage**](ChatApi.md#postapiv1chatfollowmessage) | **POST** /api/v1/chat.followMessage | Follow Message
[**postApiV1ChatPinMessage**](ChatApi.md#postapiv1chatpinmessage) | **POST** /api/v1/chat.pinMessage | Pin Message
[**postApiV1ChatPostMessage**](ChatApi.md#postapiv1chatpostmessage) | **POST** /api/v1/chat.postMessage | Post Message
[**postApiV1ChatReact**](ChatApi.md#postapiv1chatreact) | **POST** /api/v1/chat.react | React to Message
[**postApiV1ChatReportMessage**](ChatApi.md#postapiv1chatreportmessage) | **POST** /api/v1/chat.reportMessage | Report Message
[**postApiV1ChatSendMessage**](ChatApi.md#postapiv1chatsendmessage) | **POST** /api/v1/chat.sendMessage | Send Message
[**postApiV1ChatStarMessage**](ChatApi.md#postapiv1chatstarmessage) | **POST** /api/v1/chat.starMessage | Star Message
[**postApiV1ChatUnPinMessage**](ChatApi.md#postapiv1chatunpinmessage) | **POST** /api/v1/chat.unPinMessage | Unpin a message
[**postApiV1ChatUnStarMessage**](ChatApi.md#postapiv1chatunstarmessage) | **POST** /api/v1/chat.unStarMessage | Unstar Message
[**postApiV1ChatUnfollowMessage**](ChatApi.md#postapiv1chatunfollowmessage) | **POST** /api/v1/chat.unfollowMessage | Unfollow Message
[**postApiV1ChatUpdate**](ChatApi.md#postapiv1chatupdate) | **POST** /api/v1/chat.update | Update Message

# **getApiV1ChatGetDeletedMessages**
> \Swagger\Client\Model\InlineResponse2005 getApiV1ChatGetDeletedMessages($x_auth_token, $x_user_id, $since, $room_id)

Get Deleted Messages

Get deleted messages from a specific date.  ### Changelog | Version      | Description |  | ---------------- | ------------| | 0.73.0           | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$since = "since_example"; // string | A valid ISO date format from which you want to search the deleted messages.
$room_id = "room_id_example"; // string | The room ID.

try {
    $result = $apiInstance->getApiV1ChatGetDeletedMessages($x_auth_token, $x_user_id, $since, $room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatGetDeletedMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **since** | **string**| A valid ISO date format from which you want to search the deleted messages. |
 **room_id** | **string**| The room ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChatGetDiscussions**
> \Swagger\Client\Model\InlineResponse2006 getApiV1ChatGetDiscussions($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort)

Get Discussions of A Room

Gets the <a href='https://docs.rocket.chat/docs/discussions' target='_blank'>discussions</a> in a room.   ### Changelog | Version      | Description |  | ---------------- | ------------| | 2.4.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
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

try {
    $result = $apiInstance->getApiV1ChatGetDiscussions($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatGetDiscussions: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChatGetMentionedMessages**
> \Swagger\Client\Model\InlineResponse2007 getApiV1ChatGetMentionedMessages($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort)

Get Mentioned Messages

Get the messages in which you are mentioned (users are mentioned with the `@` symbol).   ### Changelog | Version      | Description |  | ------------ | ------------| | 2.2.0        | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
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

try {
    $result = $apiInstance->getApiV1ChatGetMentionedMessages($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatGetMentionedMessages: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChatGetMessage**
> \Swagger\Client\Model\InlineResponse2003 getApiV1ChatGetMessage($x_auth_token, $x_user_id, $msg_id)

Get Message

Get a single chat message. You must have permission to access the room where the message resides.  ### Changelog | Version      | Description |  | ------------ | ------------| | 0.47.0       | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$msg_id = "msg_id_example"; // string | The message ID.

try {
    $result = $apiInstance->getApiV1ChatGetMessage($x_auth_token, $x_user_id, $msg_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatGetMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **msg_id** | **string**| The message ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChatGetMessageReadReceipts**
> \Swagger\Client\Model\InlineResponse2008 getApiV1ChatGetMessageReadReceipts($x_auth_token, $x_user_id, $message_id, $offset, $count)

Get Message Read Receipts

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Get the <a href='https://docs.rocket.chat/docs/message-actions#read-receipts' target='_blank'>read receipts</a> of messages.  ### Changelog | Version      | Description | | ---------------- | ------------| | 0.63.0          | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$message_id = "message_id_example"; // string | The message id
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.

try {
    $result = $apiInstance->getApiV1ChatGetMessageReadReceipts($x_auth_token, $x_user_id, $message_id, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatGetMessageReadReceipts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **message_id** | **string**| The message id |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChatGetPinnedMessages**
> \Swagger\Client\Model\InlineResponse2009 getApiV1ChatGetPinnedMessages($x_auth_token, $x_user_id, $room_id, $offset, $count)

Get Pinned Messages

Get the <a href='https://docs.rocket.chat/docs/message-actions#pin-messages' target='_blank'>pinned messages</a> of a room.   ### Changelog | Version      | Description |  | ---------------- | ------------| | 2.0.0           | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | The room ID.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.

try {
    $result = $apiInstance->getApiV1ChatGetPinnedMessages($x_auth_token, $x_user_id, $room_id, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatGetPinnedMessages: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChatGetSnippetedMessageById**
> \Swagger\Client\Model\InlineResponse20011 getApiV1ChatGetSnippetedMessageById($x_auth_token, $x_user_id, $message_id)

Get Snippeted Message By Id

Retrieve snippeted message by Id. ### Changelog | Version      | Description | | ---------------- | ------------| | 2.3.0           | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$message_id = "message_id_example"; // string | The message id

try {
    $result = $apiInstance->getApiV1ChatGetSnippetedMessageById($x_auth_token, $x_user_id, $message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatGetSnippetedMessageById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **message_id** | **string**| The message id |

### Return type

[**\Swagger\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChatGetSnippetedMessages**
> \Swagger\Client\Model\InlineResponse20010 getApiV1ChatGetSnippetedMessages($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort)

Get Snippeted Messages

Retrieve snippeted messages.   ### Changelog | Version      | Description | | ---------------- | ------------| |2.3.0          | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
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

try {
    $result = $apiInstance->getApiV1ChatGetSnippetedMessages($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatGetSnippetedMessages: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChatGetStarredMessages**
> \Swagger\Client\Model\InlineResponse20012 getApiV1ChatGetStarredMessages($x_user_id, $x_auth_token, $room_id, $offset, $count, $sort)

Get Starred Messages

Get the <a href='https://docs.rocket.chat/docs/message-actions#star-messages' target='_blank'>starred messages</a> of the authenticated user in a room.   ### Changelog | Version      | Description |  | ------------ | ------------| | 2.2.0        | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$room_id = "room_id_example"; // string | The room ID.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{ \"value\": -1, \"_id\": 1 }`

try {
    $result = $apiInstance->getApiV1ChatGetStarredMessages($x_user_id, $x_auth_token, $room_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatGetStarredMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **room_id** | **string**| The room ID. |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, &#x60;{ \&quot;value\&quot;: -1, \&quot;_id\&quot;: 1 }&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChatGetThreadMessages**
> \Swagger\Client\Model\InlineResponse20013 getApiV1ChatGetThreadMessages($x_auth_token, $x_user_id, $tmid, $offset, $count, $sort, $query, $fields)

Get Thread Messages

Get <a href='https://docs.rocket.chat/docs/threads' target='_blank'>thread</a> messages.   ### Changelog | Version      | Description |  | ------------ | ------------| | 1.2.0        | Remove `tlm` field which is not supported | | 1.1.0        | Update example results - original message in thread is not returned | | 1.0.0        | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$tmid = "tmid_example"; // string | The thread message ID.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{ \"value\": -1, \"_id\": 1 }`
$query = new \Swagger\Client\Model\null(); //  | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query=`{ \"name\": { \"$regex\": \"g\" }}`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$fields = "fields_example"; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields=`{ \"username\": 1 }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.

try {
    $result = $apiInstance->getApiV1ChatGetThreadMessages($x_auth_token, $x_user_id, $tmid, $offset, $count, $sort, $query, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatGetThreadMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **tmid** | **string**| The thread message ID. |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, &#x60;{ \&quot;value\&quot;: -1, \&quot;_id\&quot;: 1 }&#x60; | [optional]
 **query** | [****](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;&#x60;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; }}&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;&#x60;{ \&quot;username\&quot;: 1 }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChatIgnoreUser**
> \Swagger\Client\Model\InlineResponse2001 getApiV1ChatIgnoreUser($x_auth_token, $x_user_id, $rid, $user_id, $ignore)

Ignore User

Ignore or unignore a user in chat.   ### Changelog | Version      | Description |  | ------------ | ------------| | 0.64.0       | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$rid = "rid_example"; // string | The room ID.
$user_id = "user_id_example"; // string | The user ID.
$ignore = true; // bool | If the user is to be ignored or not, default is true.

try {
    $result = $apiInstance->getApiV1ChatIgnoreUser($x_auth_token, $x_user_id, $rid, $user_id, $ignore);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatIgnoreUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **rid** | **string**| The room ID. |
 **user_id** | **string**| The user ID. |
 **ignore** | **bool**| If the user is to be ignored or not, default is true. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChatSearch**
> \Swagger\Client\Model\InlineResponse20016 getApiV1ChatSearch($x_auth_token, $x_user_id, $room_id, $search_text, $count)

Search Message

Search for messages by room ID and text message.   ### Changelog | Version      | Description |  | -------------| ------------| | 0.67.0       | Changed limit query parameter to count| | 0.60.0       | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | The room ID.
$search_text = "search_text_example"; // string | The text to search for in messages.
$count = 56; // int | The number of items to return.

try {
    $result = $apiInstance->getApiV1ChatSearch($x_auth_token, $x_user_id, $room_id, $search_text, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **room_id** | **string**| The room ID. |
 **search_text** | **string**| The text to search for in messages. |
 **count** | **int**| The number of items to return. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChatSyncMessages**
> \Swagger\Client\Model\InlineResponse20020 getApiV1ChatSyncMessages($x_auth_token, $x_user_id, $room_id, $last_update, $offset, $count, $sort, $next, $previous, $type)

Sync Messages

### Changelog | Version      | Description |  | ------------ | ------------| | 1.0.0        | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | The room ID.
$last_update = "last_update_example"; // string | The date as an ISO string. You cannot use this parameter if you are using the `next` or `previous` parameter.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{ \"value\": -1, \"_id\": 1 }`
$next = 1.2; // float | This indicates whether the query should retrieve items from a **later** point in time. The value must be the number of milliseconds, as it follows [Date getTime()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date/getTime). Note that you can use either `next` or `previous` at the same time.
$previous = 1.2; // float | This indicates whether the query should retrieve items from an **earlier** point in time. The value must be the number of milliseconds, as it follows [Date getTime()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date/getTime).
$type = "type_example"; // string | You must specify whether you want to retrieve `DELETED` (for deleted messages) or `UPDATED` (for updated messages, which is the default use case). This parameter is **required** if you are using the `next` or `previous` parameter.

try {
    $result = $apiInstance->getApiV1ChatSyncMessages($x_auth_token, $x_user_id, $room_id, $last_update, $offset, $count, $sort, $next, $previous, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatSyncMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **room_id** | **string**| The room ID. |
 **last_update** | **string**| The date as an ISO string. You cannot use this parameter if you are using the &#x60;next&#x60; or &#x60;previous&#x60; parameter. |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, &#x60;{ \&quot;value\&quot;: -1, \&quot;_id\&quot;: 1 }&#x60; | [optional]
 **next** | **float**| This indicates whether the query should retrieve items from a **later** point in time. The value must be the number of milliseconds, as it follows [Date getTime()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date/getTime). Note that you can use either &#x60;next&#x60; or &#x60;previous&#x60; at the same time. | [optional]
 **previous** | **float**| This indicates whether the query should retrieve items from an **earlier** point in time. The value must be the number of milliseconds, as it follows [Date getTime()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date/getTime). | [optional]
 **type** | **string**| You must specify whether you want to retrieve &#x60;DELETED&#x60; (for deleted messages) or &#x60;UPDATED&#x60; (for updated messages, which is the default use case). This parameter is **required** if you are using the &#x60;next&#x60; or &#x60;previous&#x60; parameter. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChatSyncThreadMessages**
> \Swagger\Client\Model\InlineResponse20019 getApiV1ChatSyncThreadMessages($x_auth_token, $x_user_id, $updated_since, $tmid, $offset, $count, $sort)

Sync Thread Messages

### Changelog | Version      | Description |  | ------------ | ------------| | 1.0.0        | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$updated_since = "updated_since_example"; // string | Date as an ISO string. When you provide the `updatedSince` query parameter, the `update` and `remove` parameters in the response will contain only those updated and removed since this date and time.
$tmid = "tmid_example"; // string | Thread's message ID.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{ \"value\": -1, \"_id\": 1 }`

try {
    $result = $apiInstance->getApiV1ChatSyncThreadMessages($x_auth_token, $x_user_id, $updated_since, $tmid, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatSyncThreadMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **updated_since** | **string**| Date as an ISO string. When you provide the &#x60;updatedSince&#x60; query parameter, the &#x60;update&#x60; and &#x60;remove&#x60; parameters in the response will contain only those updated and removed since this date and time. |
 **tmid** | **string**| Thread&#x27;s message ID. |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, &#x60;{ \&quot;value\&quot;: -1, \&quot;_id\&quot;: 1 }&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ChatSyncThreadsList**
> \Swagger\Client\Model\InlineResponse20018 getApiV1ChatSyncThreadsList($x_auth_token, $x_user_id, $room_id, $room_name, $offset, $count, $sort, $updated_since)

Sync Thread List

### Changelog | Version      | Description |  | ------------ | ------------| | 1.0.0        | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | The room ID. It is required if the `roomName` is not provided.
$room_name = "room_name_example"; // string | The room name.  It is required if the `roomId` is not provided.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{ \"value\": -1, \"_id\": 1 }`
$updated_since = "updated_since_example"; // string | Date as an ISO string. When you provide the `updatedSince` query parameter, then the `update` and `remove` parameters in the response will contain only those updated and removed since this date and time.

try {
    $result = $apiInstance->getApiV1ChatSyncThreadsList($x_auth_token, $x_user_id, $room_id, $room_name, $offset, $count, $sort, $updated_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatSyncThreadsList: ', $e->getMessage(), PHP_EOL;
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
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, &#x60;{ \&quot;value\&quot;: -1, \&quot;_id\&quot;: 1 }&#x60; | [optional]
 **updated_since** | **string**| Date as an ISO string. When you provide the &#x60;updatedSince&#x60; query parameter, then the &#x60;update&#x60; and &#x60;remove&#x60; parameters in the response will contain only those updated and removed since this date and time. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChatGetThreadsList**
> \Swagger\Client\Model\InlineResponse2004 getChatGetThreadsList($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields, $rid)

List Threads

Get the <a href='https://docs.rocket.chat/docs/threads' target='_blank'>thread</a> conversations in a room.  ### Changelog | Version      | Description |  | ---------------- | ------------| |1.0.0             | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
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
$rid = "rid_example"; // string | The room ID.

try {
    $result = $apiInstance->getChatGetThreadsList($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields, $rid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getChatGetThreadsList: ', $e->getMessage(), PHP_EOL;
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
 **rid** | **string**| The room ID. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChatDelete**
> \Swagger\Client\Model\InlineResponse200 postApiV1ChatDelete($x_auth_token, $x_user_id, $body)

Delete Chat Message

Delete a chat message.  ### Changelog | Version      | Description |  | ---------------- | ------------| | 0.48.0           | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChatDeleteBody(); // \Swagger\Client\Model\V1ChatDeleteBody | 

try {
    $result = $apiInstance->postApiV1ChatDelete($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->postApiV1ChatDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChatDeleteBody**](../Model/V1ChatDeleteBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChatFollowMessage**
> \Swagger\Client\Model\InlineResponse2001 postApiV1ChatFollowMessage($x_auth_token, $x_user_id, $body)

Follow Message

Follow a message to receive notifications.  ### Changelog | Version      | Description |  | ---------------- | ------------| | 1.0.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChatFollowMessageBody(); // \Swagger\Client\Model\V1ChatFollowMessageBody | 

try {
    $result = $apiInstance->postApiV1ChatFollowMessage($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->postApiV1ChatFollowMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChatFollowMessageBody**](../Model/V1ChatFollowMessageBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChatPinMessage**
> \Swagger\Client\Model\InlineResponse20014 postApiV1ChatPinMessage($x_auth_token, $x_user_id, $body)

Pin Message

<a href='https://docs.rocket.chat/docs/message-actions#pin-messages' target='_blank'>Pin</a> a chat message to the channel.  ### Changelog | Version      | Description |  | ------------ | ------------| | 0.59.0       | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChatPinMessageBody(); // \Swagger\Client\Model\V1ChatPinMessageBody | 

try {
    $result = $apiInstance->postApiV1ChatPinMessage($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->postApiV1ChatPinMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChatPinMessageBody**](../Model/V1ChatPinMessageBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChatPostMessage**
> \Swagger\Client\Model\InlineResponse20015 postApiV1ChatPostMessage($x_auth_token, $x_user_id, $body)

Post Message

Send messages to channels. **Note**: You only can send alias and avatar properties if your user has the bot role. We implement this rule to avoid users to impersonate other users.  ### Change Log | Version | Description | | ------- |---------------------------------------------------------------------------- | | 6.8.0   | Allow custom fields in messages                                              |  | 2.4.1   | Document existing method to post reply/threaded messages                     | | 2.4.0   | Added validation on user's identity                                          | | 0.49.0  | The `channel` can now be a room's id.                                        | | 0.48.0  | Information about the sent message is now returned.                          | | 0.17.0  | Messages aren't always processed as from BOT and urls are parsed by default. | | 0.14.0  | Internally using `processWebhookMessage` which enabled more features.        | | 0.13.0  | Added                                                                        |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChatPostMessageBody(); // \Swagger\Client\Model\V1ChatPostMessageBody | 

try {
    $result = $apiInstance->postApiV1ChatPostMessage($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->postApiV1ChatPostMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChatPostMessageBody**](../Model/V1ChatPostMessageBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChatReact**
> \Swagger\Client\Model\InlineResponse2001 postApiV1ChatReact($x_auth_token, $x_user_id, $body)

React to Message

React or unreact to a chat message.  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.64.0            | Added parameter \"shouldReact\" to make endpoint work like a setter| |0.63.0            | Emoji has to exist                                               | |0.62.2            |Added                                                             |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChatReactBody(); // \Swagger\Client\Model\V1ChatReactBody | The emoji doesn't have to contain `:`. However, the emoji must exist.

try {
    $result = $apiInstance->postApiV1ChatReact($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->postApiV1ChatReact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChatReactBody**](../Model/V1ChatReactBody.md)| The emoji doesn&#x27;t have to contain &#x60;:&#x60;. However, the emoji must exist. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChatReportMessage**
> \Swagger\Client\Model\InlineResponse2001 postApiV1ChatReportMessage($x_user_id, $x_auth_token, $body)

Report Message

<a href='https://docs.rocket.chat/docs/message-actions#report-a-message-or-user' target='_blank'>Report</a> a specific message.  ### Changelog | Version      | Description |  | ---------------- | ------------| | 0.64.0           | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChatReportMessageBody(); // \Swagger\Client\Model\V1ChatReportMessageBody | 

try {
    $result = $apiInstance->postApiV1ChatReportMessage($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->postApiV1ChatReportMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChatReportMessageBody**](../Model/V1ChatReportMessageBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChatSendMessage**
> \Swagger\Client\Model\InlineResponse20017 postApiV1ChatSendMessage($x_auth_token, $x_user_id, $body)

Send Message

The difference between `chat.postMessage` and `chat.sendMessage` is that `chat.sendMessage` allows for passing a value for `_id` and the other one doesn't. Also, `chat.sendMessage` only sends it to one channel whereas the other one allows for sending to more than one channel at a time.<br />  **Note**: You can only send alias and avatar properties if your user has the `message-impersonate permission`. We implemented this rule to avoid users impersonating other users. By default, only the bot role has this permission, but that can be changed in **Administration** -> **Permissions** -> **message-impersonate**.  ### Change Log | Version | Description                         | | ------- | ----------------------------------- | | 6.8.0   | Allow custom fields in messages     |       | 6.4.0   | Add `previewUrls` param             | | 2.4.0   | Added validation on user's identity | | 0.60.0  | Added                               |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChatSendMessageBody(); // \Swagger\Client\Model\V1ChatSendMessageBody | **Some important things to note about the `previewUrls` parameter include:** * If the `previewUrls` array is empty, no URL will be previewed. * If the `previewUrls` parameter isn't sent, all URLs (up to a maximum of five external URLs) will be previewed. * If the message contains attachments or quotes, no URL is previewed. * Internal URLs are not considered in the `previewUrls` array. * A maximum of five external URLs is previewed  per message. If there are more than 5 external URLs, no URL is previewed. > URLs that include the same text as the <a href='https://docs.rocket.chat/use-rocket.chat/workspace-administration/settings/general#general-settings' target='_blank'>**Site URL**</a> are referred to as Internal URLs.

try {
    $result = $apiInstance->postApiV1ChatSendMessage($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->postApiV1ChatSendMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChatSendMessageBody**](../Model/V1ChatSendMessageBody.md)| **Some important things to note about the &#x60;previewUrls&#x60; parameter include:** * If the &#x60;previewUrls&#x60; array is empty, no URL will be previewed. * If the &#x60;previewUrls&#x60; parameter isn&#x27;t sent, all URLs (up to a maximum of five external URLs) will be previewed. * If the message contains attachments or quotes, no URL is previewed. * Internal URLs are not considered in the &#x60;previewUrls&#x60; array. * A maximum of five external URLs is previewed  per message. If there are more than 5 external URLs, no URL is previewed. &gt; URLs that include the same text as the &lt;a href&#x3D;&#x27;https://docs.rocket.chat/use-rocket.chat/workspace-administration/settings/general#general-settings&#x27; target&#x3D;&#x27;_blank&#x27;&gt;**Site URL**&lt;/a&gt; are referred to as Internal URLs. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChatStarMessage**
> \Swagger\Client\Model\InlineResponse2001 postApiV1ChatStarMessage($x_auth_token, $x_user_id, $body)

Star Message

<a href='https://docs.rocket.chat/docs/message-actions#star-messages' target='_blank'>Star</a> a message.  ### Changelog | Version      | Description |  | ------------ | ------------| | 0.59.0       | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChatStarMessageBody(); // \Swagger\Client\Model\V1ChatStarMessageBody | 

try {
    $result = $apiInstance->postApiV1ChatStarMessage($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->postApiV1ChatStarMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChatStarMessageBody**](../Model/V1ChatStarMessageBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChatUnPinMessage**
> \Swagger\Client\Model\InlineResponse2001 postApiV1ChatUnPinMessage($x_auth_token, $x_user_id, $body)

Unpin a message

Remove a pinned message from the channel.  ### Changelog | Version      | Description |  | -------------| ------------| | 0.59.0       | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChatUnPinMessageBody(); // \Swagger\Client\Model\V1ChatUnPinMessageBody | 

try {
    $result = $apiInstance->postApiV1ChatUnPinMessage($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->postApiV1ChatUnPinMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChatUnPinMessageBody**](../Model/V1ChatUnPinMessageBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChatUnStarMessage**
> \Swagger\Client\Model\InlineResponse2001 postApiV1ChatUnStarMessage($x_auth_token, $x_user_id, $body)

Unstar Message

Unstar a message.  ### Changelog | Version      | Description |  | ---------------- | ------------| | 0.59.0           | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChatUnStarMessageBody(); // \Swagger\Client\Model\V1ChatUnStarMessageBody | 

try {
    $result = $apiInstance->postApiV1ChatUnStarMessage($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->postApiV1ChatUnStarMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChatUnStarMessageBody**](../Model/V1ChatUnStarMessageBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChatUnfollowMessage**
> \Swagger\Client\Model\InlineResponse2001 postApiV1ChatUnfollowMessage($x_auth_token, $x_user_id, $body)

Unfollow Message

Unfollow a message.  ### Changelog | Version      | Description |  | ---------------- | ------------| | 1.0.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChatUnfollowMessageBody(); // \Swagger\Client\Model\V1ChatUnfollowMessageBody | 

try {
    $result = $apiInstance->postApiV1ChatUnfollowMessage($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->postApiV1ChatUnfollowMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChatUnfollowMessageBody**](../Model/V1ChatUnfollowMessageBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ChatUpdate**
> \Swagger\Client\Model\InlineResponse2002 postApiV1ChatUpdate($x_auth_token, $x_user_id, $body)

Update Message

Update a specific message.  ### Changelog | Version      | Description |  | ---------------- | ------------| | 6.12.0           | Fixed `customFields` not updating if `text` was unchanged | | 6.4.0            | Add previewUrls param       |         | 0.49.0           | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1ChatUpdateBody(); // \Swagger\Client\Model\V1ChatUpdateBody | 

try {
    $result = $apiInstance->postApiV1ChatUpdate($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->postApiV1ChatUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1ChatUpdateBody**](../Model/V1ChatUpdateBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

