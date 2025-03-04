# Swagger\Client\VoiceChannelQueueMembershipApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1VoipQueuesGetMembershipSubscription**](VoiceChannelQueueMembershipApi.md#getapiv1voipqueuesgetmembershipsubscription) | **GET** /api/v1/voip/queues.getMembershipSubscription | Get Call Center Queue Membership Subscription Information
[**getApiV1VoipQueuesGetQueuedCallsForThisExtension**](VoiceChannelQueueMembershipApi.md#getapiv1voipqueuesgetqueuedcallsforthisextension) | **GET** /api/v1/voip/queues.getQueuedCallsForThisExtension | Get Call Center Queue Membership Information

# **getApiV1VoipQueuesGetMembershipSubscription**
> \Swagger\Client\Model\InlineResponse200100 getApiV1VoipQueuesGetMembershipSubscription($x_auth_token, $x_user_id, $extension)

Get Call Center Queue Membership Subscription Information

Permission required: `inbound-voip-calls`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoiceChannelQueueMembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$extension = "extension_example"; // string | The phone extension for VoIP.

try {
    $result = $apiInstance->getApiV1VoipQueuesGetMembershipSubscription($x_auth_token, $x_user_id, $extension);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceChannelQueueMembershipApi->getApiV1VoipQueuesGetMembershipSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **extension** | **string**| The phone extension for VoIP. |

### Return type

[**\Swagger\Client\Model\InlineResponse200100**](../Model/InlineResponse200100.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1VoipQueuesGetQueuedCallsForThisExtension**
> \Swagger\Client\Model\InlineResponse20099 getApiV1VoipQueuesGetQueuedCallsForThisExtension($x_auth_token, $x_user_id, $extension)

Get Call Center Queue Membership Information

Permission required: `inbound-voip-calls`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoiceChannelQueueMembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$extension = "extension_example"; // string | The phone extension for VoIP.

try {
    $result = $apiInstance->getApiV1VoipQueuesGetQueuedCallsForThisExtension($x_auth_token, $x_user_id, $extension);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceChannelQueueMembershipApi->getApiV1VoipQueuesGetQueuedCallsForThisExtension: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **extension** | **string**| The phone extension for VoIP. |

### Return type

[**\Swagger\Client\Model\InlineResponse20099**](../Model/InlineResponse20099.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

