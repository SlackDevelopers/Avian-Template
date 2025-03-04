# Swagger\Client\PasswordPolicyApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPwGetPolicy**](PasswordPolicyApi.md#getpwgetpolicy) | **GET** /api/v1/pw.getPolicy | Get Password Policy

# **getPwGetPolicy**
> object getPwGetPolicy($x_user_id, $x_auth_token)

Get Password Policy

Get the current [password policy](https://docs.rocket.chat/v1/docs/accounts#password-policy) for users in your workspace. The `pw.getPolicyReset` endpoint has been removed from 7.0. Use this endpoint instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PasswordPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.

try {
    $result = $apiInstance->getPwGetPolicy($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PasswordPolicyApi->getPwGetPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

