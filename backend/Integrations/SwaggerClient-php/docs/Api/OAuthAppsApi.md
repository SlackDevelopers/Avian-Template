# Swagger\Client\OAuthAppsApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1OauthAppsGet**](OAuthAppsApi.md#getapiv1oauthappsget) | **GET** /api/v1/oauth-apps.get | Get OAuth App
[**getApiV1OauthAppsList**](OAuthAppsApi.md#getapiv1oauthappslist) | **GET** /api/v1/oauth-apps.list | Get List of OAuth Apps
[**postApiV1OauthAppsCreate**](OAuthAppsApi.md#postapiv1oauthappscreate) | **POST** /api/v1/oauth-apps.create | Create OAuth App
[**postApiV1OauthAppsDelete**](OAuthAppsApi.md#postapiv1oauthappsdelete) | **POST** /api/v1/oauth-apps.delete | Delete OAuth App
[**postApiV1OauthAppsUpdate**](OAuthAppsApi.md#postapiv1oauthappsupdate) | **POST** /api/v1/oauth-apps.update | Update OAuth App

# **getApiV1OauthAppsGet**
> \Swagger\Client\Model\InlineResponse20011 getApiV1OauthAppsGet($x_auth_token, $x_user_id, $app_id, $client_id, $_id)

Get OAuth App

Retrieves an OAuth app by ID or client ID.  Permission required: `manage-oauth-apps`. The endpoint can be accessed even without this permission, but sensitive information (such as client secrets) will be filtered out.  ### Changelog | Version      | Description | | ---------------- | ------------| |2.4.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OAuthAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authorization token of the user.
$x_user_id = "x_user_id_example"; // string | The user ID of the user.
$app_id = "app_id_example"; // string | The app ID.  This value is required if `clientId` is not used.  The parameter will stop being accepted from 7.0.0 (use the `clientId` or `_id` parameters instead).
$client_id = "client_id_example"; // string | The client ID. This value is required if `appId` is not used.
$_id = "_id_example"; // string | The app ID. This value is required if `clientId` is not used.

try {
    $result = $apiInstance->getApiV1OauthAppsGet($x_auth_token, $x_user_id, $app_id, $client_id, $_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthAppsApi->getApiV1OauthAppsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authorization token of the user. |
 **x_user_id** | **string**| The user ID of the user. |
 **app_id** | **string**| The app ID.  This value is required if &#x60;clientId&#x60; is not used.  The parameter will stop being accepted from 7.0.0 (use the &#x60;clientId&#x60; or &#x60;_id&#x60; parameters instead). | [optional]
 **client_id** | **string**| The client ID. This value is required if &#x60;appId&#x60; is not used. | [optional]
 **_id** | **string**| The app ID. This value is required if &#x60;clientId&#x60; is not used. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1OauthAppsList**
> \Swagger\Client\Model\InlineResponse20010 getApiV1OauthAppsList($x_auth_token, $x_user_id)

Get List of OAuth Apps

Permission required: `manage-oauth-apps` ### Changelog | Version      | Description | | ---------------- | ------------| |2.4.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OAuthAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authorization token of the user.
$x_user_id = "x_user_id_example"; // string | The user ID of the user.

try {
    $result = $apiInstance->getApiV1OauthAppsList($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthAppsApi->getApiV1OauthAppsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authorization token of the user. |
 **x_user_id** | **string**| The user ID of the user. |

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1OauthAppsCreate**
> \Swagger\Client\Model\InlineResponse2008 postApiV1OauthAppsCreate($x_auth_token, $x_user_id, $body)

Create OAuth App

Permission required: `manage-oauth-apps`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OAuthAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authorization token of the user.
$x_user_id = "x_user_id_example"; // string | The user ID of the user.
$body = new \Swagger\Client\Model\V1OauthappsCreateBody(); // \Swagger\Client\Model\V1OauthappsCreateBody | 

try {
    $result = $apiInstance->postApiV1OauthAppsCreate($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthAppsApi->postApiV1OauthAppsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authorization token of the user. |
 **x_user_id** | **string**| The user ID of the user. |
 **body** | [**\Swagger\Client\Model\V1OauthappsCreateBody**](../Model/V1OauthappsCreateBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1OauthAppsDelete**
> \Swagger\Client\Model\InlineResponse2007 postApiV1OauthAppsDelete($x_auth_token, $x_user_id, $body)

Delete OAuth App

Permission required: `manage-oauth-apps`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OAuthAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authorization token of the user.
$x_user_id = "x_user_id_example"; // string | The user ID of the user.
$body = new \Swagger\Client\Model\V1OauthappsDeleteBody(); // \Swagger\Client\Model\V1OauthappsDeleteBody | 

try {
    $result = $apiInstance->postApiV1OauthAppsDelete($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthAppsApi->postApiV1OauthAppsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authorization token of the user. |
 **x_user_id** | **string**| The user ID of the user. |
 **body** | [**\Swagger\Client\Model\V1OauthappsDeleteBody**](../Model/V1OauthappsDeleteBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1OauthAppsUpdate**
> \Swagger\Client\Model\InlineResponse2009 postApiV1OauthAppsUpdate($x_auth_token, $x_user_id, $body)

Update OAuth App

Permission required: `manage-oauth-apps`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OAuthAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authorization token of the user.
$x_user_id = "x_user_id_example"; // string | The user ID of the user.
$body = new \Swagger\Client\Model\V1OauthappsUpdateBody(); // \Swagger\Client\Model\V1OauthappsUpdateBody | 

try {
    $result = $apiInstance->postApiV1OauthAppsUpdate($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthAppsApi->postApiV1OauthAppsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authorization token of the user. |
 **x_user_id** | **string**| The user ID of the user. |
 **body** | [**\Swagger\Client\Model\V1OauthappsUpdateBody**](../Model/V1OauthappsUpdateBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

