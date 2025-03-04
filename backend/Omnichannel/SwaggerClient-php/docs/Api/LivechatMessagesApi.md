# Swagger\Client\LivechatMessagesApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteApiV1LivechatMessageId**](LivechatMessagesApi.md#deleteapiv1livechatmessageid) | **DELETE** /api/v1/livechat/message/{_id} | Delete Livechat Message
[**getApiV1LivechatMessageId**](LivechatMessagesApi.md#getapiv1livechatmessageid) | **GET** /api/v1/livechat/message/{_id} | Get a Livechat Message
[**getApiV1LivechatMessagesHistoryRid**](LivechatMessagesApi.md#getapiv1livechatmessageshistoryrid) | **GET** /api/v1/livechat/messages.history/{rid} | Get Livechat Message History
[**postApiV1LivechatMessage**](LivechatMessagesApi.md#postapiv1livechatmessage) | **POST** /api/v1/livechat/message | Send New Livechat Message
[**postApiV1LivechatMessages**](LivechatMessagesApi.md#postapiv1livechatmessages) | **POST** /api/v1/livechat/messages | Send Array of Messages
[**postApiV1LivechatOfflineMessage**](LivechatMessagesApi.md#postapiv1livechatofflinemessage) | **POST** /api/v1/livechat/offline.message | Send Offline Livechat Message
[**putApiV1LivechatMessageId**](LivechatMessagesApi.md#putapiv1livechatmessageid) | **PUT** /api/v1/livechat/message/{_id} | Update Livechat Message

# **deleteApiV1LivechatMessageId**
> \Swagger\Client\Model\InlineResponse200122 deleteApiV1LivechatMessageId($_id, $body)

Delete Livechat Message

Remove a specific livechat message.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$_id = "_id_example"; // string | The message ID that you want to update.
$body = new \Swagger\Client\Model\MessageIdBody1(); // \Swagger\Client\Model\MessageIdBody1 | 

try {
    $result = $apiInstance->deleteApiV1LivechatMessageId($_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatMessagesApi->deleteApiV1LivechatMessageId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_id** | **string**| The message ID that you want to update. |
 **body** | [**\Swagger\Client\Model\MessageIdBody1**](../Model/MessageIdBody1.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200122**](../Model/InlineResponse200122.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatMessageId**
> \Swagger\Client\Model\InlineResponse200120 getApiV1LivechatMessageId($_id, $token, $rid)

Get a Livechat Message

Retrieve specific livechat message information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$_id = "_id_example"; // string | The message ID that you want to update.
$token = "token_example"; // string | The visitor token.
$rid = "rid_example"; // string | The room ID.

try {
    $result = $apiInstance->getApiV1LivechatMessageId($_id, $token, $rid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatMessagesApi->getApiV1LivechatMessageId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_id** | **string**| The message ID that you want to update. |
 **token** | **string**| The visitor token. |
 **rid** | **string**| The room ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse200120**](../Model/InlineResponse200120.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatMessagesHistoryRid**
> \Swagger\Client\Model\InlineResponse200123 getApiV1LivechatMessagesHistoryRid($rid, $token, $ls, $end, $limit)

Get Livechat Message History

Get the entire message history of a conversation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$rid = "rid_example"; // string | The room ID.
$token = "token_example"; // string | The visitor token.
$ls = new \Swagger\Client\Model\null(); //  | The timestamp to start loading the messages.
$end = new \Swagger\Client\Model\null(); //  | 
$limit = 1.2; // float | The number of messages to load.

try {
    $result = $apiInstance->getApiV1LivechatMessagesHistoryRid($rid, $token, $ls, $end, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatMessagesApi->getApiV1LivechatMessagesHistoryRid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rid** | **string**| The room ID. |
 **token** | **string**| The visitor token. |
 **ls** | [****](../Model/.md)| The timestamp to start loading the messages. | [optional]
 **end** | [****](../Model/.md)|  | [optional]
 **limit** | **float**| The number of messages to load. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200123**](../Model/InlineResponse200123.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatMessage**
> \Swagger\Client\Model\InlineResponse200118 postApiV1LivechatMessage($body)

Send New Livechat Message

Send a new message in a Livechat room.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LivechatMessageBody(); // \Swagger\Client\Model\LivechatMessageBody | 

try {
    $result = $apiInstance->postApiV1LivechatMessage($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatMessagesApi->postApiV1LivechatMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LivechatMessageBody**](../Model/LivechatMessageBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200118**](../Model/InlineResponse200118.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatMessages**
> \Swagger\Client\Model\InlineResponse200119 postApiV1LivechatMessages($x_auth_token, $x_user_id, $body)

Send Array of Messages

Send an array of messsages in a Livechat room.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\LivechatMessagesBody(); // \Swagger\Client\Model\LivechatMessagesBody | 

try {
    $result = $apiInstance->postApiV1LivechatMessages($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatMessagesApi->postApiV1LivechatMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\LivechatMessagesBody**](../Model/LivechatMessagesBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200119**](../Model/InlineResponse200119.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatOfflineMessage**
> \Swagger\Client\Model\InlineResponse20045 postApiV1LivechatOfflineMessage($body)

Send Offline Livechat Message

Send the offline message when no agent is available to attend the omnichannel conversation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LivechatOfflineMessageBody(); // \Swagger\Client\Model\LivechatOfflineMessageBody | 

try {
    $result = $apiInstance->postApiV1LivechatOfflineMessage($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatMessagesApi->postApiV1LivechatOfflineMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LivechatOfflineMessageBody**](../Model/LivechatOfflineMessageBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putApiV1LivechatMessageId**
> \Swagger\Client\Model\InlineResponse200121 putApiV1LivechatMessageId($_id, $body)

Update Livechat Message

Update a specific livechat message.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$_id = "_id_example"; // string | The message ID that you want to update.
$body = new \Swagger\Client\Model\MessageIdBody(); // \Swagger\Client\Model\MessageIdBody | 

try {
    $result = $apiInstance->putApiV1LivechatMessageId($_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatMessagesApi->putApiV1LivechatMessageId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_id** | **string**| The message ID that you want to update. |
 **body** | [**\Swagger\Client\Model\MessageIdBody**](../Model/MessageIdBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200121**](../Model/InlineResponse200121.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

