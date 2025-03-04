# Swagger\Client\CustomUserStatusApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1CustomUserStatusList**](CustomUserStatusApi.md#getapiv1customuserstatuslist) | **GET** /api/v1/custom-user-status.list | List Custom User Status
[**postApiV1CustomUserStatusCreate**](CustomUserStatusApi.md#postapiv1customuserstatuscreate) | **POST** /api/v1/custom-user-status.create | Create Custom Status
[**postApiV1CustomUserStatusDelete**](CustomUserStatusApi.md#postapiv1customuserstatusdelete) | **POST** /api/v1/custom-user-status.delete | Delete Custom User Status
[**postApiV1CustomUserStatusUpdate**](CustomUserStatusApi.md#postapiv1customuserstatusupdate) | **POST** /api/v1/custom-user-status.update | Update Custom Status

# **getApiV1CustomUserStatusList**
> \Swagger\Client\Model\InlineResponse2004 getApiV1CustomUserStatusList($x_auth_token, $x_user_id, $name, $_id)

List Custom User Status

Lists all available custom user's status.  ### Changelog | Version      | Description |  | ---------------- | ------------| |7.0.0           | Added `name` and `_id` query parameters for filtering.      | |2.4.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomUserStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$name = "name_example"; // string | Filter list by the name of the custom status.
$_id = "_id_example"; // string | Filter list by the _id of the custom status.

try {
    $result = $apiInstance->getApiV1CustomUserStatusList($x_auth_token, $x_user_id, $name, $_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomUserStatusApi->getApiV1CustomUserStatusList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **name** | **string**| Filter list by the name of the custom status. | [optional]
 **_id** | **string**| Filter list by the _id of the custom status. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1CustomUserStatusCreate**
> \Swagger\Client\Model\InlineResponse2005 postApiV1CustomUserStatusCreate($x_auth_token, $x_user_id, $body)

Create Custom Status

Create a custom user status.   ### Changelog | Version      | Description |  | ---------------- | ------------| |2.4.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomUserStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1CustomuserstatusCreateBody(); // \Swagger\Client\Model\V1CustomuserstatusCreateBody | 

try {
    $result = $apiInstance->postApiV1CustomUserStatusCreate($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomUserStatusApi->postApiV1CustomUserStatusCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1CustomuserstatusCreateBody**](../Model/V1CustomuserstatusCreateBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1CustomUserStatusDelete**
> \Swagger\Client\Model\InlineResponse2001 postApiV1CustomUserStatusDelete($x_auth_token, $x_user_id, $body)

Delete Custom User Status

Delete a custom user status.  ### Changelog | Version      | Description |  | ---------------- | ------------| |2.4.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomUserStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1CustomuserstatusDeleteBody(); // \Swagger\Client\Model\V1CustomuserstatusDeleteBody | 

try {
    $result = $apiInstance->postApiV1CustomUserStatusDelete($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomUserStatusApi->postApiV1CustomUserStatusDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1CustomuserstatusDeleteBody**](../Model/V1CustomuserstatusDeleteBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1CustomUserStatusUpdate**
> \Swagger\Client\Model\InlineResponse2005 postApiV1CustomUserStatusUpdate($x_auth_token, $x_user_id, $body)

Update Custom Status

Update a custom status.   ### Changelog | Version      | Description |  | ---------------- | ------------| |2.4.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomUserStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1CustomuserstatusUpdateBody(); // \Swagger\Client\Model\V1CustomuserstatusUpdateBody | 

try {
    $result = $apiInstance->postApiV1CustomUserStatusUpdate($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomUserStatusApi->postApiV1CustomUserStatusUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1CustomuserstatusUpdateBody**](../Model/V1CustomuserstatusUpdateBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

