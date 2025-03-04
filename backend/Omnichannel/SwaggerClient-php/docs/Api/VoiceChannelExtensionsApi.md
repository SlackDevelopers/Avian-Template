# Swagger\Client\VoiceChannelExtensionsApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1OmnichannelExtension**](VoiceChannelExtensionsApi.md#getapiv1omnichannelextension) | **GET** /api/v1/omnichannel/extension | Get Call Center Extension
[**getApiV1OmnichannelExtensions**](VoiceChannelExtensionsApi.md#getapiv1omnichannelextensions) | **GET** /api/v1/omnichannel/extensions | Get List of Call Center Extensions

# **getApiV1OmnichannelExtension**
> \Swagger\Client\Model\InlineResponse200114 getApiV1OmnichannelExtension($x_auth_token, $x_user_id, $user_id, $type)

Get Call Center Extension

Permission required: `manage-agent-extension-association`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoiceChannelExtensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$user_id = "user_id_example"; // string | The value of the user ID. Alternatively, you can enter the `username` parameter.
$type = "type_example"; // string | The type of extension. The values can be: `free`, `allocated`, and  `available`

try {
    $result = $apiInstance->getApiV1OmnichannelExtension($x_auth_token, $x_user_id, $user_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceChannelExtensionsApi->getApiV1OmnichannelExtension: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **user_id** | **string**| The value of the user ID. Alternatively, you can enter the &#x60;username&#x60; parameter. |
 **type** | **string**| The type of extension. The values can be: &#x60;free&#x60;, &#x60;allocated&#x60;, and  &#x60;available&#x60; |

### Return type

[**\Swagger\Client\Model\InlineResponse200114**](../Model/InlineResponse200114.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1OmnichannelExtensions**
> \Swagger\Client\Model\InlineResponse2003 getApiV1OmnichannelExtensions($x_auth_token, $x_user_id, $status, $agent_id, $queues, $extension, $offset, $count)

Get List of Call Center Extensions

Permission required: `manage-agent-extension-association`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoiceChannelExtensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$status = "status_example"; // string | The status of the extension.
$agent_id = "agent_id_example"; // string | The agent ID.
$queues = "queues_example"; // string | The queues associated with the extension.
$extension = "extension_example"; // string | Extension number.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.

try {
    $result = $apiInstance->getApiV1OmnichannelExtensions($x_auth_token, $x_user_id, $status, $agent_id, $queues, $extension, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceChannelExtensionsApi->getApiV1OmnichannelExtensions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **status** | **string**| The status of the extension. | [optional]
 **agent_id** | **string**| The agent ID. | [optional]
 **queues** | **string**| The queues associated with the extension. | [optional]
 **extension** | **string**| Extension number. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

