# Swagger\Client\E2EApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1E2eFetchMyKeys**](E2EApi.md#getapiv1e2efetchmykeys) | **GET** /api/v1/e2e.fetchMyKeys | Get E2E Keys
[**getApiV1E2eGetUsersOfRoomWithoutKey**](E2EApi.md#getapiv1e2egetusersofroomwithoutkey) | **GET** /api/v1/e2e.getUsersOfRoomWithoutKey | Get Users of Room Without E2E key
[**postApiV1E2eSetRoomKeyID**](E2EApi.md#postapiv1e2esetroomkeyid) | **POST** /api/v1/e2e.setRoomKeyID | Set Room E2E Key
[**postApiV1E2eSetUserPublicAndPrivateKeys**](E2EApi.md#postapiv1e2esetuserpublicandprivatekeys) | **POST** /api/v1/e2e.setUserPublicAndPrivateKeys | Set User Key
[**postApiV1E2eUpdateGroupKey**](E2EApi.md#postapiv1e2eupdategroupkey) | **POST** /api/v1/e2e.updateGroupKey | Update User E2E Key in Room

# **getApiV1E2eFetchMyKeys**
> \Swagger\Client\Model\InlineResponse2005 getApiV1E2eFetchMyKeys($x_user_id, $x_auth_token)

Get E2E Keys

Retrieves E2E keys of logged in user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\E2EApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.

try {
    $result = $apiInstance->getApiV1E2eFetchMyKeys($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling E2EApi->getApiV1E2eFetchMyKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1E2eGetUsersOfRoomWithoutKey**
> \Swagger\Client\Model\InlineResponse2006 getApiV1E2eGetUsersOfRoomWithoutKey($x_user_id, $x_auth_token, $rid)

Get Users of Room Without E2E key

Retrieves user IDs Of room without E2E key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\E2EApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$rid = "rid_example"; // string | The room ID.

try {
    $result = $apiInstance->getApiV1E2eGetUsersOfRoomWithoutKey($x_user_id, $x_auth_token, $rid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling E2EApi->getApiV1E2eGetUsersOfRoomWithoutKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **rid** | **string**| The room ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1E2eSetRoomKeyID**
> \Swagger\Client\Model\InlineResponse2002 postApiV1E2eSetRoomKeyID($x_user_id, $x_auth_token, $body)

Set Room E2E Key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\E2EApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$body = new \Swagger\Client\Model\V1E2eSetRoomKeyIDBody(); // \Swagger\Client\Model\V1E2eSetRoomKeyIDBody | 

try {
    $result = $apiInstance->postApiV1E2eSetRoomKeyID($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling E2EApi->postApiV1E2eSetRoomKeyID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **body** | [**\Swagger\Client\Model\V1E2eSetRoomKeyIDBody**](../Model/V1E2eSetRoomKeyIDBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1E2eSetUserPublicAndPrivateKeys**
> \Swagger\Client\Model\InlineResponse2002 postApiV1E2eSetUserPublicAndPrivateKeys($x_user_id, $x_auth_token, $body)

Set User Key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\E2EApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$body = new \Swagger\Client\Model\V1E2eSetUserPublicAndPrivateKeysBody(); // \Swagger\Client\Model\V1E2eSetUserPublicAndPrivateKeysBody | 

try {
    $result = $apiInstance->postApiV1E2eSetUserPublicAndPrivateKeys($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling E2EApi->postApiV1E2eSetUserPublicAndPrivateKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **body** | [**\Swagger\Client\Model\V1E2eSetUserPublicAndPrivateKeysBody**](../Model/V1E2eSetUserPublicAndPrivateKeysBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1E2eUpdateGroupKey**
> \Swagger\Client\Model\InlineResponse2002 postApiV1E2eUpdateGroupKey($x_user_id, $x_auth_token, $body)

Update User E2E Key in Room

> This endpoint has been deprecated and is scheduled for removal in the 8.0.0 <a href=\"https://github.com/RocketChat/Rocket.Chat/releases\" target=\"_blank\">release</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\E2EApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$body = new \Swagger\Client\Model\V1E2eUpdateGroupKeyBody(); // \Swagger\Client\Model\V1E2eUpdateGroupKeyBody | 

try {
    $result = $apiInstance->postApiV1E2eUpdateGroupKey($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling E2EApi->postApiV1E2eUpdateGroupKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **body** | [**\Swagger\Client\Model\V1E2eUpdateGroupKeyBody**](../Model/V1E2eUpdateGroupKeyBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

