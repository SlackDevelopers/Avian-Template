# Swagger\Client\VoiceChannelEventsApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1VoipEvents**](VoiceChannelEventsApi.md#getapiv1voipevents) | **POST** /api/v1/voip/events | Send Call Center Events

# **getApiV1VoipEvents**
> getApiV1VoipEvents($x_auth_token, $x_user_id, $body)

Send Call Center Events

Send the VoIP client events. Permission required: `view-l-room` ### VoIP Client Events List of VoIP client Events available in enum format:   ```json   {\"VOIP-CALL-STARTED\" = \"voip-call-started\",    \"VOIP-CALL-ENDED\" = \"voip-call-ended\",    \"VOIP-CALL-DECLINED\" = \"voip-call-declined\",    \"VOIP-CALL-ON-HOLD\" = \"voip-call-on-hold\",    \"VOIP-CALL-UNHOLD\" = \"voip-call-unhold\",    \"VOIP-CALL-DURATION\" = \"voip-call-duration\" }   ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoiceChannelEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\VoipEventsBody(); // \Swagger\Client\Model\VoipEventsBody | 

try {
    $apiInstance->getApiV1VoipEvents($x_auth_token, $x_user_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling VoiceChannelEventsApi->getApiV1VoipEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\VoipEventsBody**](../Model/VoipEventsBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

