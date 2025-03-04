# Swagger\Client\SubscriptionsApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1SubscriptionsGet**](SubscriptionsApi.md#getapiv1subscriptionsget) | **GET** /api/v1/subscriptions.get | Get All Subscriptions
[**getApiV1SubscriptionsGetOne**](SubscriptionsApi.md#getapiv1subscriptionsgetone) | **GET** /api/v1/subscriptions.getOne | Get Subscription Room
[**postApiV1SubscriptionsRead**](SubscriptionsApi.md#postapiv1subscriptionsread) | **POST** /api/v1/subscriptions.read | Mark Channel as Read
[**postApiV1SubscriptionsUnread**](SubscriptionsApi.md#postapiv1subscriptionsunread) | **POST** /api/v1/subscriptions.unread | Mark Channel as Unread

# **getApiV1SubscriptionsGet**
> \Swagger\Client\Model\InlineResponse20011 getApiV1SubscriptionsGet($x_auth_token, $x_user_id, $updated_since)

Get All Subscriptions

Note that the unread counter value depends on your settings in the **Administration** > <a href='https://docs.rocket.chat/docs/general' target='_blank'>**General**</a> section.  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.60.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The token of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The user ID of the authenticated user.
$updated_since = "updated_since_example"; // string | Date and time from which to fetch changes. Format: ISO 8601 datetime. Optional seconds, optional milliseconds, optional timezone, always with colon time separators.

try {
    $result = $apiInstance->getApiV1SubscriptionsGet($x_auth_token, $x_user_id, $updated_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getApiV1SubscriptionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The token of the authenticated user. |
 **x_user_id** | **string**| The user ID of the authenticated user. |
 **updated_since** | **string**| Date and time from which to fetch changes. Format: ISO 8601 datetime. Optional seconds, optional milliseconds, optional timezone, always with colon time separators. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1SubscriptionsGetOne**
> \Swagger\Client\Model\InlineResponse20012 getApiV1SubscriptionsGetOne($x_auth_token, $x_user_id, $room_id)

Get Subscription Room

Note that the unread counter value depends on your settings at the **Administration** > <a href='https://docs.rocket.chat/docs/general' target='_blank'>**General**</a> section.  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.63.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The token of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The user ID of the authenticated user.
$room_id = "room_id_example"; // string | The room ID.

try {
    $result = $apiInstance->getApiV1SubscriptionsGetOne($x_auth_token, $x_user_id, $room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getApiV1SubscriptionsGetOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The token of the authenticated user. |
 **x_user_id** | **string**| The user ID of the authenticated user. |
 **room_id** | **string**| The room ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1SubscriptionsRead**
> \Swagger\Client\Model\InlineResponse20013 postApiV1SubscriptionsRead($x_auth_token, $x_user_id, $body)

Mark Channel as Read

### Changelog | Version      | Description | | ---------------- | ------------| |3.11.0            | `roomId` can be used as argument instead of `rid`.       | |0.61.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The token of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The user ID of the authenticated user.
$body = new \Swagger\Client\Model\V1SubscriptionsReadBody(); // \Swagger\Client\Model\V1SubscriptionsReadBody | 

try {
    $result = $apiInstance->postApiV1SubscriptionsRead($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->postApiV1SubscriptionsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The token of the authenticated user. |
 **x_user_id** | **string**| The user ID of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1SubscriptionsReadBody**](../Model/V1SubscriptionsReadBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1SubscriptionsUnread**
> \Swagger\Client\Model\InlineResponse20013 postApiV1SubscriptionsUnread($x_auth_token, $x_user_id, $body)

Mark Channel as Unread

Mark messages as unread by room ID or from a message.  ### Changelog | Version      | Description | | ---------------- | ------------| |0.65.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The token of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The user ID of the authenticated user.
$body = new \Swagger\Client\Model\V1SubscriptionsUnreadBody(); // \Swagger\Client\Model\V1SubscriptionsUnreadBody | 

try {
    $result = $apiInstance->postApiV1SubscriptionsUnread($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->postApiV1SubscriptionsUnread: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The token of the authenticated user. |
 **x_user_id** | **string**| The user ID of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1SubscriptionsUnreadBody**](../Model/V1SubscriptionsUnreadBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

