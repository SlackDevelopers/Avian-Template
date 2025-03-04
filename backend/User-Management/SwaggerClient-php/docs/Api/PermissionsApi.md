# Swagger\Client\PermissionsApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPermissionsListAll**](PermissionsApi.md#getpermissionslistall) | **GET** /api/v1/permissions.listAll | List All Permissions
[**postApiV1PermissionsUpdate**](PermissionsApi.md#postapiv1permissionsupdate) | **POST** /api/v1/permissions.update | Update Permissions

# **getPermissionsListAll**
> \Swagger\Client\Model\InlineResponse200 getPermissionsListAll($x_user_id, $x_auth_token, $updated_since)

List All Permissions

Returns the list of <a href='https://docs.rocket.chat/docs/permissions' target='_blank'>permissions</a> from the workspace.  ### Changelog | Version      | Description | | ---------------- | ------------| |0.73.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$updated_since = "updated_since_example"; // string | Date as ISO string. If you include this parameter, the `update` and `remove` fields in the response will contain only those permissions updated and removed since this date and time.

try {
    $result = $apiInstance->getPermissionsListAll($x_user_id, $x_auth_token, $updated_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->getPermissionsListAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The authenticated user ID. |
 **x_auth_token** | **string**| The authenticated user token. |
 **updated_since** | **string**| Date as ISO string. If you include this parameter, the &#x60;update&#x60; and &#x60;remove&#x60; fields in the response will contain only those permissions updated and removed since this date and time. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1PermissionsUpdate**
> \Swagger\Client\Model\InlineResponse2001 postApiV1PermissionsUpdate($x_user_id, $x_auth_token, $body)

Update Permissions

Update the <a href='https://docs.rocket.chat/docs/permissions' target='_blank'>permissions</a> on the workspace. Permission required: `access-permissions` ### Changelog | Version      | Description | | ---------------- | ------------| |0.66.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$body = new \Swagger\Client\Model\V1PermissionsUpdateBody(); // \Swagger\Client\Model\V1PermissionsUpdateBody | 

try {
    $result = $apiInstance->postApiV1PermissionsUpdate($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->postApiV1PermissionsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The authenticated user ID. |
 **x_auth_token** | **string**| The authenticated user token. |
 **body** | [**\Swagger\Client\Model\V1PermissionsUpdateBody**](../Model/V1PermissionsUpdateBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

