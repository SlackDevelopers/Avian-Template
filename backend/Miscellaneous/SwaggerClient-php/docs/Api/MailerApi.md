# Swagger\Client\MailerApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postApiV1Mailer**](MailerApi.md#postapiv1mailer) | **POST** /api/v1/mailer | Send Mailer Endpoint
[**postApiV1MailerUnsubscribe**](MailerApi.md#postapiv1mailerunsubscribe) | **POST** /api/v1/mailer.unsubscribe | Mailer Unsubscribe Endpoint

# **postApiV1Mailer**
> \Swagger\Client\Model\InlineResponse2001 postApiV1Mailer($x_auth_token, $x_user_id, $body)

Send Mailer Endpoint

Send emails to users from your workspace.  | Version      | Description | | ---------------- | ------------| |5.4.0      | Added      |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MailerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1MailerBody(); // \Swagger\Client\Model\V1MailerBody | 

try {
    $result = $apiInstance->postApiV1Mailer($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailerApi->postApiV1Mailer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1MailerBody**](../Model/V1MailerBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1MailerUnsubscribe**
> \Swagger\Client\Model\InlineResponse2001 postApiV1MailerUnsubscribe($x_auth_token, $x_user_id, $body)

Mailer Unsubscribe Endpoint

Send emails to users from your workspace.  ### Changelog | Version      | Description | | ------------ | ------------| |5.4.0         | Added      |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MailerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1MailerUnsubscribeBody(); // \Swagger\Client\Model\V1MailerUnsubscribeBody | 

try {
    $result = $apiInstance->postApiV1MailerUnsubscribe($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailerApi->postApiV1MailerUnsubscribe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1MailerUnsubscribeBody**](../Model/V1MailerUnsubscribeBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

