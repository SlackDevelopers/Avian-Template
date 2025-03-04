# Swagger\Client\LivechatAudioVideoCallsApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1LivechatWebrtcCall**](LivechatAudioVideoCallsApi.md#getapiv1livechatwebrtccall) | **GET** /api/v1/livechat/webrtc.call | Start Call
[**putApiV1LivechatWebrtcCallCallId**](LivechatAudioVideoCallsApi.md#putapiv1livechatwebrtccallcallid) | **PUT** /api/v1/livechat/webrtc.call/{callId} | Update Call Status

# **getApiV1LivechatWebrtcCall**
> \Swagger\Client\Model\InlineResponse20042 getApiV1LivechatWebrtcCall($x_auth_token, $x_user_id, $rid)

Start Call

**Note**: WebRTC is no longer supported with Omnichannel Livechat audio/video calls. - To configure audio/video calls, see <a href=\"https://docs.rocket.chat/docs/omnichannel-videoaudio-call-configuration\" target=\"_blank\">Omnichannel Video/Audio Call Configuration</a>. - To configure voice channel, see <a href=\"https://docs.rocket.chat/docs/rocketchat-conference-call\" target=\"_blank\">Voice Channel</a>. <br> - To start a WebRTC audio/video call in a room requires the `view-l-room` <a href=\"https://docs.rocket.chat/docs/permissions\" target=\"_blank\">permission</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatAudioVideoCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$rid = "rid_example"; // string | The room ID.

try {
    $result = $apiInstance->getApiV1LivechatWebrtcCall($x_auth_token, $x_user_id, $rid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatAudioVideoCallsApi->getApiV1LivechatWebrtcCall: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **rid** | **string**| The room ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse20042**](../Model/InlineResponse20042.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putApiV1LivechatWebrtcCallCallId**
> \Swagger\Client\Model\InlineResponse20043 putApiV1LivechatWebrtcCallCallId($x_auth_token, $x_user_id, $call_id, $body)

Update Call Status

**Note**: WebRTC is no longer supported with Omnichannel Livechat audio/video calls. - To configure audio/video calls, see <a href=\"https://docs.rocket.chat/docs/omnichannel-videoaudio-call-configuration\" target=\"_blank\">Omnichannel Video/Audio Call Configuration</a>. - To configure voice channel, see <a href=\"https://docs.rocket.chat/docs/rocketchat-conference-call\" target=\"_blank\">Voice Channel</a>. <br> - To  Update the call status of an existing WebRTC audio/video call requires the `view-l-room` <a href=\"https://docs.rocket.chat/docs/permissions\" target=\"_blank\">permission</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatAudioVideoCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$call_id = "call_id_example"; // string | The call message _id.
$body = new \Swagger\Client\Model\WebrtcCallCallIdBody(); // \Swagger\Client\Model\WebrtcCallCallIdBody | 

try {
    $result = $apiInstance->putApiV1LivechatWebrtcCallCallId($x_auth_token, $x_user_id, $call_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatAudioVideoCallsApi->putApiV1LivechatWebrtcCallCallId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **call_id** | **string**| The call message _id. |
 **body** | [**\Swagger\Client\Model\WebrtcCallCallIdBody**](../Model/WebrtcCallCallIdBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20043**](../Model/InlineResponse20043.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

