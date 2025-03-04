# Swagger\Client\CloudApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postApiV1CloudManualRegister**](CloudApi.md#postapiv1cloudmanualregister) | **POST** /api/v1/cloud.manualRegister | Manual Cloud Register

# **postApiV1CloudManualRegister**
> \Swagger\Client\Model\InlineResponse2002 postApiV1CloudManualRegister($x_user_id, $x_auth_token, $body)

Manual Cloud Register

Manually register a workspace on <a href=\"https://docs.rocket.chat/docs/rocketchat-cloud\" target=\"_blank\">Rocket.Chat Cloud</a>. Permission required: `register-on-cloud`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$body = new \Swagger\Client\Model\V1CloudManualRegisterBody(); // \Swagger\Client\Model\V1CloudManualRegisterBody | 

try {
    $result = $apiInstance->postApiV1CloudManualRegister($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->postApiV1CloudManualRegister: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **body** | [**\Swagger\Client\Model\V1CloudManualRegisterBody**](../Model/V1CloudManualRegisterBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

