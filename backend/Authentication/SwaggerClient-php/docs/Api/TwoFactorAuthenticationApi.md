# Swagger\Client\TwoFactorAuthenticationApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postApiV1Users2faDisableEmail**](TwoFactorAuthenticationApi.md#postapiv1users2fadisableemail) | **POST** /api/v1/users.2fa.disableEmail | Disable 2FA via Email
[**postApiV1Users2faEnableEmail**](TwoFactorAuthenticationApi.md#postapiv1users2faenableemail) | **POST** /api/v1/users.2fa.enableEmail | Enable 2FA via Email
[**postApiV1Users2faSendEmailCode**](TwoFactorAuthenticationApi.md#postapiv1users2fasendemailcode) | **POST** /api/v1/users.2fa.sendEmailCode | Send 2FA Email Code

# **postApiV1Users2faDisableEmail**
> \Swagger\Client\Model\InlineResponse2004 postApiV1Users2faDisableEmail($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method)

Disable 2FA via Email

Disable two-factor authentication via email. The 2FA code is required.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TwoFactorAuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$x_2fa_code = "x_2fa_code_example"; // string | The 2FA code.
$x_2fa_method = "x_2fa_method_example"; // string | The 2FA method. It can be `email`, `totp`, or `password`.

try {
    $result = $apiInstance->postApiV1Users2faDisableEmail($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TwoFactorAuthenticationApi->postApiV1Users2faDisableEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **x_2fa_code** | **string**| The 2FA code. |
 **x_2fa_method** | **string**| The 2FA method. It can be &#x60;email&#x60;, &#x60;totp&#x60;, or &#x60;password&#x60;. |

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1Users2faEnableEmail**
> \Swagger\Client\Model\InlineResponse2004 postApiV1Users2faEnableEmail($x_auth_token, $x_user_id)

Enable 2FA via Email

Enable email two-factor authentication for your account. This endpoint only works if the user has at least one verified email.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TwoFactorAuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->postApiV1Users2faEnableEmail($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TwoFactorAuthenticationApi->postApiV1Users2faEnableEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1Users2faSendEmailCode**
> \Swagger\Client\Model\InlineResponse2004 postApiV1Users2faSendEmailCode($body, $x_auth_token, $x_user_id)

Send 2FA Email Code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TwoFactorAuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\V1Users2faSendEmailCodeBody(); // \Swagger\Client\Model\V1Users2faSendEmailCodeBody | 
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->postApiV1Users2faSendEmailCode($body, $x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TwoFactorAuthenticationApi->postApiV1Users2faSendEmailCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\V1Users2faSendEmailCodeBody**](../Model/V1Users2faSendEmailCodeBody.md)|  | [optional]
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | [optional]
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

