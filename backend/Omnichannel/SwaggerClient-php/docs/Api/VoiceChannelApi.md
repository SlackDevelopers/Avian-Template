# Swagger\Client\VoiceChannelApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1ConnectorExtensionGetRegistrationInfoByUserId**](VoiceChannelApi.md#getapiv1connectorextensiongetregistrationinfobyuserid) | **GET** /api/v1/connector.extension.getRegistrationInfoByUserId | Get Voice Channel Registration Information
[**getApiV1VoipQueuesGetSummary**](VoiceChannelApi.md#getapiv1voipqueuesgetsummary) | **GET** /api/v1/voip/queues.getSummary | Get Voice Channel Queue Summary

# **getApiV1ConnectorExtensionGetRegistrationInfoByUserId**
> \Swagger\Client\Model\InlineResponse20097 getApiV1ConnectorExtensionGetRegistrationInfoByUserId($x_auth_token, $x_user_id, $id)

Get Voice Channel Registration Information

Retrieves the user registration Information for the user ID. Permission required: `view-agent-extension-association`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$id = "id_example"; // string | The user ID whose registration is being retrieved.

try {
    $result = $apiInstance->getApiV1ConnectorExtensionGetRegistrationInfoByUserId($x_auth_token, $x_user_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceChannelApi->getApiV1ConnectorExtensionGetRegistrationInfoByUserId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **id** | **string**| The user ID whose registration is being retrieved. |

### Return type

[**\Swagger\Client\Model\InlineResponse20097**](../Model/InlineResponse20097.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1VoipQueuesGetSummary**
> \Swagger\Client\Model\InlineResponse20098 getApiV1VoipQueuesGetSummary($x_auth_token, $x_user_id)

Get Voice Channel Queue Summary

Permission required: `inbound-voip-calls`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1VoipQueuesGetSummary($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceChannelApi->getApiV1VoipQueuesGetSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |

### Return type

[**\Swagger\Client\Model\InlineResponse20098**](../Model/InlineResponse20098.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

