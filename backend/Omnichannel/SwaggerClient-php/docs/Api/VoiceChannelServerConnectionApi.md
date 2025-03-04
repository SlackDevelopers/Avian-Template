# Swagger\Client\VoiceChannelServerConnectionApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1VoipCallServerCheckConnection**](VoiceChannelServerConnectionApi.md#getapiv1voipcallservercheckconnection) | **GET** /api/v1/voip/callServer/checkConnection | Check Call Server Connection
[**getApiV1VoipManagementServerCheckConnection**](VoiceChannelServerConnectionApi.md#getapiv1voipmanagementservercheckconnection) | **GET** /api/v1/voip/managementServer/checkConnection | Check Management Server Connection

# **getApiV1VoipCallServerCheckConnection**
> \Swagger\Client\Model\InlineResponse200101 getApiV1VoipCallServerCheckConnection($x_auth_token, $x_user_id, $websocket_url, $host, $port, $path)

Check Call Server Connection

Check the SIP call server connection status. Permission required: `manage-voip-contact-center-settings`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoiceChannelServerConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$websocket_url = "websocket_url_example"; // string | The websocket URL.
$host = "host_example"; // string | The hostname of the call server.
$port = "port_example"; // string | The port number of the websocket.
$path = "path_example"; // string | The path of the websocket.

try {
    $result = $apiInstance->getApiV1VoipCallServerCheckConnection($x_auth_token, $x_user_id, $websocket_url, $host, $port, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceChannelServerConnectionApi->getApiV1VoipCallServerCheckConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **websocket_url** | **string**| The websocket URL. |
 **host** | **string**| The hostname of the call server. |
 **port** | **string**| The port number of the websocket. |
 **path** | **string**| The path of the websocket. |

### Return type

[**\Swagger\Client\Model\InlineResponse200101**](../Model/InlineResponse200101.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1VoipManagementServerCheckConnection**
> \Swagger\Client\Model\InlineResponse200101 getApiV1VoipManagementServerCheckConnection($x_auth_token, $x_user_id, $host, $port, $username, $password)

Check Management Server Connection

Check the VoIP management server connection status. Permission required: `manage-voip-contact-center-settings`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoiceChannelServerConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$host = "host_example"; // string | The hostname of the management server.
$port = "port_example"; // string | The port number of the management server.
$username = "username_example"; // string | The user name of the administrator user.
$password = "password_example"; // string | The password of the administrator user.

try {
    $result = $apiInstance->getApiV1VoipManagementServerCheckConnection($x_auth_token, $x_user_id, $host, $port, $username, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceChannelServerConnectionApi->getApiV1VoipManagementServerCheckConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **host** | **string**| The hostname of the management server. |
 **port** | **string**| The port number of the management server. |
 **username** | **string**| The user name of the administrator user. |
 **password** | **string**| The password of the administrator user. |

### Return type

[**\Swagger\Client\Model\InlineResponse200101**](../Model/InlineResponse200101.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

