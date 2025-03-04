# Swagger\Client\LivechatTranscriptApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteApiV1LivechatTranscriptRid**](LivechatTranscriptApi.md#deleteapiv1livechattranscriptrid) | **DELETE** /api/v1/livechat/transcript/{rid} | Delete Livechat Transcript
[**postApiV1LivechatTranscript**](LivechatTranscriptApi.md#postapiv1livechattranscript) | **POST** /api/v1/livechat/transcript | Request Livechat Transcript
[**postApiV1LivechatTranscriptRid**](LivechatTranscriptApi.md#postapiv1livechattranscriptrid) | **POST** /api/v1/livechat/transcript/{rid} | Send Livechat Transcript
[**postApiViOmnichannelRidRequestTranscript**](LivechatTranscriptApi.md#postapiviomnichannelridrequesttranscript) | **POST** /api/vi/omnichannel/{rid}/request-transcript | Request PDF Transcript

# **deleteApiV1LivechatTranscriptRid**
> \Swagger\Client\Model\InlineResponse2003 deleteApiV1LivechatTranscriptRid($x_user_id, $x_auth_token, $rid)

Delete Livechat Transcript

This endpoint is used to cancel any transcript requests for an open room, meaning that the chat transcript won't be sent after the chat is closed. You can not Send Livechat Transcript twice at a time. You must delete the previous request with this endpoint before requesting again. Permission required: `send-omnichannel-chat-transcript`  ### Changelog | Version      | Description |  | ---------------- | ------------| |6.4.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatTranscriptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$rid = "rid_example"; // string | The room ID.

try {
    $result = $apiInstance->deleteApiV1LivechatTranscriptRid($x_user_id, $x_auth_token, $rid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatTranscriptApi->deleteApiV1LivechatTranscriptRid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **rid** | **string**| The room ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatTranscript**
> \Swagger\Client\Model\InlineResponse20045 postApiV1LivechatTranscript($body)

Request Livechat Transcript

The endpoint is used by visitors to request a transcript of their chat to be sent to their email once the conversation ends. The room must be closed before you can send a transcript.  You can also request transcripts for older conversations given that you know the older token and room ID.  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.70.0             | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatTranscriptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LivechatTranscriptBody(); // \Swagger\Client\Model\LivechatTranscriptBody | 

try {
    $result = $apiInstance->postApiV1LivechatTranscript($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatTranscriptApi->postApiV1LivechatTranscript: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LivechatTranscriptBody**](../Model/LivechatTranscriptBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatTranscriptRid**
> \Swagger\Client\Model\InlineResponse2003 postApiV1LivechatTranscriptRid($x_auth_token, $x_user_id, $rid, $body)

Send Livechat Transcript

This endpoint is used by agents and managers to schedule an email transcript to be sent once the chat is closed.  Permission required: `send-omnichannel-chat-transcript` The room must be opened.  ### Changelog | Version      | Description |  | ---------------- | ------------| |6.4.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatTranscriptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$rid = "rid_example"; // string | The room ID.
$body = new \Swagger\Client\Model\TranscriptRidBody(); // \Swagger\Client\Model\TranscriptRidBody | 

try {
    $result = $apiInstance->postApiV1LivechatTranscriptRid($x_auth_token, $x_user_id, $rid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatTranscriptApi->postApiV1LivechatTranscriptRid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **rid** | **string**| The room ID. |
 **body** | [**\Swagger\Client\Model\TranscriptRidBody**](../Model/TranscriptRidBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiViOmnichannelRidRequestTranscript**
> \Swagger\Client\Model\InlineResponse2003 postApiViOmnichannelRidRequestTranscript($rid, $x_auth_token, $x_user_id)

Request PDF Transcript

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  <a href=\"https://docs.rocket.chat/docs/omnichannel-conversations#conversation-transcript\" target=\"_blank\">Request a PDF transcript</a> for an Omnichannel conversation. The conversation must be closed before it can be exported. <br>  Permission required: `request-pdf-transcript`. Omnichannel <a href=\"https://docs.rocket.chat/docs/managers\" target=\"_blank\">managers</a> and <a href=\"https://docs.rocket.chat/docs/agents\" target=\"_blank\">agents</a> have this permission by default.  ### Changelog | Version      | Description | | ---------------- | ------------| |6.0.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatTranscriptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$rid = "rid_example"; // string | The room ID.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->postApiViOmnichannelRidRequestTranscript($rid, $x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatTranscriptApi->postApiViOmnichannelRidRequestTranscript: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rid** | **string**| The room ID. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

