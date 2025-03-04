# Swagger\Client\DefaultApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postApiApps**](DefaultApi.md#postapiapps) | **POST** /api/apps | Install Private Apps

# **postApiApps**
> \Swagger\Client\Model\InlineResponse2002 postApiApps($x_auth_token, $x_user_id, $url, $app, $permissions)

Install Private Apps

Install a <a href=\"https://docs.rocket.chat/docs/rocketchat-marketplace#private-apps\" target=\"_blank\">private app</a> via URL. <a href=\"https://docs.rocket.chat/docs/permissions\" target=\"_blank\">Permission</a> required: `manage-apps`  ### Changelog | Version      | Description | | ---------------- | ------------| |3.1.0     | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$url = "url_example"; // string | 
$app = "app_example"; // string | 
$permissions = array(new \Swagger\Client\Model\ApiappsPermissions()); // \Swagger\Client\Model\ApiappsPermissions[] | 

try {
    $result = $apiInstance->postApiApps($x_auth_token, $x_user_id, $url, $app, $permissions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postApiApps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **url** | **string**|  | [optional]
 **app** | **string****string**|  | [optional]
 **permissions** | [**\Swagger\Client\Model\ApiappsPermissions[]**](../Model/\Swagger\Client\Model\ApiappsPermissions.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

