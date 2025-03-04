# Swagger\Client\WebDAVApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1WebdavGetMyAccounts**](WebDAVApi.md#getapiv1webdavgetmyaccounts) | **GET** /api/v1/webdav.getMyAccounts | Get WebDAV Accounts
[**postApiV1WebdavRemoveWebdavAccount**](WebDAVApi.md#postapiv1webdavremovewebdavaccount) | **POST** /api/v1/webdav.removeWebdavAccount | Remove WebDAV Account

# **getApiV1WebdavGetMyAccounts**
> \Swagger\Client\Model\InlineResponse2006 getApiV1WebdavGetMyAccounts($x_auth_token, $x_user_id)

Get WebDAV Accounts

Retrieves the user's <a href=\"https://docs.rocket.chat/docs/webdav-integration\" target=\"_blank\">WebDAV</a> accounts.  ### Changelog | Version      | Description |  | ---------------- | ------------| |2.4.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebDAVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authorization token of the user.
$x_user_id = "x_user_id_example"; // string | The user ID of the user.

try {
    $result = $apiInstance->getApiV1WebdavGetMyAccounts($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebDAVApi->getApiV1WebdavGetMyAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authorization token of the user. |
 **x_user_id** | **string**| The user ID of the user. |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1WebdavRemoveWebdavAccount**
> \Swagger\Client\Model\InlineResponse2007 postApiV1WebdavRemoveWebdavAccount($x_auth_token, $x_user_id, $body)

Remove WebDAV Account

Remove a specific WebDAV account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebDAVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authorization token of the user.
$x_user_id = "x_user_id_example"; // string | The user ID of the user.
$body = new \Swagger\Client\Model\V1WebdavRemoveWebdavAccountBody(); // \Swagger\Client\Model\V1WebdavRemoveWebdavAccountBody | 

try {
    $result = $apiInstance->postApiV1WebdavRemoveWebdavAccount($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebDAVApi->postApiV1WebdavRemoveWebdavAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authorization token of the user. |
 **x_user_id** | **string**| The user ID of the user. |
 **body** | [**\Swagger\Client\Model\V1WebdavRemoveWebdavAccountBody**](../Model/V1WebdavRemoveWebdavAccountBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

