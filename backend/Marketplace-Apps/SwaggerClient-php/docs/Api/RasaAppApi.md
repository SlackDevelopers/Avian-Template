# Swagger\Client\RasaAppApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postApiAppsPublicAppIdIncoming**](RasaAppApi.md#postapiappspublicappidincoming) | **POST** /api/apps/public/{app-id}/incoming | Close Chat or Perform Handover

# **postApiAppsPublicAppIdIncoming**
> \Swagger\Client\Model\InlineResponse200 postApiAppsPublicAppIdIncoming($x_auth_token, $x_user_id, $app_id, $body)

Close Chat or Perform Handover

Close a chat session or perform handover. The appropriate endpoint URL including the `appId` for  closing chat or perfoming handover in your workspace is displayed under **App Info > Details > APIs > POST incoming** section of the Rasa app.  ### Changelog | Version      | Description | | ---------------- | ------------| |5.0.0     | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RasaAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$app_id = "app_id_example"; // string | The app id. Navigate to App Info > Details > APIs > POST incoming to get the complete URL for this endpoint.
$body = new \Swagger\Client\Model\AppidIncomingBody(); // \Swagger\Client\Model\AppidIncomingBody | 

try {
    $result = $apiInstance->postApiAppsPublicAppIdIncoming($x_auth_token, $x_user_id, $app_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RasaAppApi->postApiAppsPublicAppIdIncoming: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **app_id** | **string**| The app id. Navigate to App Info &gt; Details &gt; APIs &gt; POST incoming to get the complete URL for this endpoint. |
 **body** | [**\Swagger\Client\Model\AppidIncomingBody**](../Model/AppidIncomingBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

