# Swagger\Client\VideoConferenceApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postApiV1VideoConferenceJitsiUpdateTimeout**](VideoConferenceApi.md#postapiv1videoconferencejitsiupdatetimeout) | **POST** /api/v1/video-conference/jitsi.update-timeout | Update Jitsi Timeout

# **postApiV1VideoConferenceJitsiUpdateTimeout**
> \Swagger\Client\Model\InlineResponse20011 postApiV1VideoConferenceJitsiUpdateTimeout($x_user_id, $x_auth_token, $body)

Update Jitsi Timeout

### Changelog | Version      | Description | | ---------------- | ------------| |0.74.0        | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VideoConferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$body = new \Swagger\Client\Model\VideoconferenceJitsiUpdatetimeoutBody(); // \Swagger\Client\Model\VideoconferenceJitsiUpdatetimeoutBody | 

try {
    $result = $apiInstance->postApiV1VideoConferenceJitsiUpdateTimeout($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoConferenceApi->postApiV1VideoConferenceJitsiUpdateTimeout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\VideoconferenceJitsiUpdatetimeoutBody**](../Model/VideoconferenceJitsiUpdatetimeoutBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

