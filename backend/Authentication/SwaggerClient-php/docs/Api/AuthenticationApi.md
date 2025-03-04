# Swagger\Client\AuthenticationApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1Me**](AuthenticationApi.md#getapiv1me) | **GET** /api/v1/me | Get Profile Information
[**postApiV1Login**](AuthenticationApi.md#postapiv1login) | **POST** /api/v1/login | Login with Username and Password
[**postApiV1LoginFacebook**](AuthenticationApi.md#postapiv1loginfacebook) | **POST** /api/v1/login - with Facebook | Login with Facebook
[**postApiV1LoginGoogle**](AuthenticationApi.md#postapiv1logingoogle) | **POST** /api/v1/login - with Google | Login with Google
[**postApiV1LoginTwitter**](AuthenticationApi.md#postapiv1logintwitter) | **POST** /api/v1/login - with Twitter | Login with Twitter
[**postApiV1Logout**](AuthenticationApi.md#postapiv1logout) | **POST** /api/v1/logout | Logout

# **getApiV1Me**
> \Swagger\Client\Model\InlineResponse2003 getApiV1Me($x_user_id, $x_auth_token)

Get Profile Information

Quick information about the authenticated user. ### Changelog  | Version      | Description |   | ---------------- | ------------|  |1.0.0            | Added `avatarUrl` property to response       |  |0.68.0            | Added `customFields` property.      |  |0.48.0            | Added      |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID of the user.
$x_auth_token = "x_auth_token_example"; // string | The authorization token of the user.

try {
    $result = $apiInstance->getApiV1Me($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getApiV1Me: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID of the user. |
 **x_auth_token** | **string**| The authorization token of the user. |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1Login**
> \Swagger\Client\Model\InlineResponse200 postApiV1Login($body)

Login with Username and Password

-  Although none of the body parameters are required, it's mandatory to include  either the `user` AND `password`  or only the `resume` parameter.  - To authenticate a request, you need to pass the `userId` and `authToken` values from this JSON response object as headers in the request. The `authToken` is passed as `X-Auth-Token` header, while the `userId` as `X-User-Id` header.  -  If LDAP authentication is enabled, you must maintain the login in the same way as you normally do. Similarly, if 2FA is enabled for an LDAP user, everything stays the same.    ### Changelog | Version      | Description |   | ---------------- | ------------|  |1.0.0            | Added `avatarUrl` property to response       |  |0.64.0            | Added `me` property.      |  |0.60.0            | Added      |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\V1LoginBody(); // \Swagger\Client\Model\V1LoginBody | 

try {
    $result = $apiInstance->postApiV1Login($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->postApiV1Login: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\V1LoginBody**](../Model/V1LoginBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LoginFacebook**
> \Swagger\Client\Model\InlineResponse200 postApiV1LoginFacebook($body)

Login with Facebook

### Changelog | Version      | Description |   | ---------------- | ------------|  |1.0.0            | Added `avatarUrl` property to response       |  |0.64.0            | Added `me` property.      |  |0.63.0            | Added      |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\V1LoginWithFacebookBody(); // \Swagger\Client\Model\V1LoginWithFacebookBody | 

try {
    $result = $apiInstance->postApiV1LoginFacebook($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->postApiV1LoginFacebook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\V1LoginWithFacebookBody**](../Model/V1LoginWithFacebookBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LoginGoogle**
> \Swagger\Client\Model\InlineResponse2001 postApiV1LoginGoogle($body)

Login with Google

### Changelog | Version      | Description |   | ---------------- | ------------|  |1.0.0            | Added `avatarUrl` property to response       |  |0.64.0            | Added `me` property.      |  |0.60.0            | Added      |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\V1LoginWithGoogleBody(); // \Swagger\Client\Model\V1LoginWithGoogleBody | 

try {
    $result = $apiInstance->postApiV1LoginGoogle($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->postApiV1LoginGoogle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\V1LoginWithGoogleBody**](../Model/V1LoginWithGoogleBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LoginTwitter**
> \Swagger\Client\Model\InlineResponse200 postApiV1LoginTwitter($body)

Login with Twitter

### Changelog | Version      | Description |   | ---------------- | ------------|  |1.0.0            | Added `avatarUrl` property to response       |  |0.64.0            | Added `me` property.      |  |0.63.0            | Added      |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\V1LoginWithTwitterBody(); // \Swagger\Client\Model\V1LoginWithTwitterBody | 

try {
    $result = $apiInstance->postApiV1LoginTwitter($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->postApiV1LoginTwitter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\V1LoginWithTwitterBody**](../Model/V1LoginWithTwitterBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1Logout**
> \Swagger\Client\Model\InlineResponse2002 postApiV1Logout($x_auth_token, $x_user_id)

Logout

Invalidate your REST API authentication token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authorization token of the user
$x_user_id = "x_user_id_example"; // string | The user id of the user

try {
    $result = $apiInstance->postApiV1Logout($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->postApiV1Logout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authorization token of the user |
 **x_user_id** | **string**| The user id of the user |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

