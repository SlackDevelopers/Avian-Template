# Swagger\Client\PushTokenApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteApiV1PushToken**](PushTokenApi.md#deleteapiv1pushtoken) | **DELETE** /api/v1/push.token | Delete Push Token
[**getApiV1PushGet**](PushTokenApi.md#getapiv1pushget) | **GET** /api/v1/push.get | Get Push Notification
[**postApiV1PushToken**](PushTokenApi.md#postapiv1pushtoken) | **POST** /api/v1/push.token | Create Push Token

# **deleteApiV1PushToken**
> \Swagger\Client\Model\InlineResponse2001 deleteApiV1PushToken($x_auth_token, $x_user_id, $body)

Delete Push Token

Removes push token from the workspace. ### Changelog | Version      | Description | | ---------------- | ------------| |0.60.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PushTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authorization token of the user.
$x_user_id = "x_user_id_example"; // string | The user ID of the user.
$body = new \Swagger\Client\Model\V1PushTokenBody1(); // \Swagger\Client\Model\V1PushTokenBody1 | 

try {
    $result = $apiInstance->deleteApiV1PushToken($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushTokenApi->deleteApiV1PushToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authorization token of the user. |
 **x_user_id** | **string**| The user ID of the user. |
 **body** | [**\Swagger\Client\Model\V1PushTokenBody1**](../Model/V1PushTokenBody1.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1PushGet**
> \Swagger\Client\Model\InlineResponse2002 getApiV1PushGet($x_auth_token, $x_user_id, $id)

Get Push Notification

Get push notification for a message. ### Changelog | Version      | Description | | ---------------- | ------------| |3.5.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PushTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authorization token of the user.
$x_user_id = "x_user_id_example"; // string | The user ID of the user.
$id = "id_example"; // string | The message ID.

try {
    $result = $apiInstance->getApiV1PushGet($x_auth_token, $x_user_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushTokenApi->getApiV1PushGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authorization token of the user. |
 **x_user_id** | **string**| The user ID of the user. |
 **id** | **string**| The message ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1PushToken**
> \Swagger\Client\Model\InlineResponse2003 postApiV1PushToken($x_auth_token, $x_user_id, $body)

Create Push Token

### Changelog | Version      | Description | | ---------------- | ------------| |0.60.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PushTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authorization token of the user.
$x_user_id = "x_user_id_example"; // string | The user ID of the user.
$body = new \Swagger\Client\Model\V1PushTokenBody(); // \Swagger\Client\Model\V1PushTokenBody | 

try {
    $result = $apiInstance->postApiV1PushToken($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushTokenApi->postApiV1PushToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authorization token of the user. |
 **x_user_id** | **string**| The user ID of the user. |
 **body** | [**\Swagger\Client\Model\V1PushTokenBody**](../Model/V1PushTokenBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

