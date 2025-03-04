# Swagger\Client\AssetsApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postApiV1AssetsSetAsset**](AssetsApi.md#postapiv1assetssetasset) | **POST** /api/v1/assets.setAsset | Set Asset
[**postApiV1AssetsUnsetAsset**](AssetsApi.md#postapiv1assetsunsetasset) | **POST** /api/v1/assets.unsetAsset | Unset Asset

# **postApiV1AssetsSetAsset**
> \Swagger\Client\Model\InlineResponse2001 postApiV1AssetsSetAsset($x_auth_token, $x_user_id, $body)

Set Asset

Set an <a href=\"https://docs.rocket.chat/docs/assets\" target=\"_blank\"> asset</a> by name. Permissions required: `manage-assets`.   ### Changelog | Version      | Description |  | ---------------- | ------------| |0.69.0           | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1AssetsSetAssetBody(); // \Swagger\Client\Model\V1AssetsSetAssetBody | 

try {
    $result = $apiInstance->postApiV1AssetsSetAsset($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->postApiV1AssetsSetAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1AssetsSetAssetBody**](../Model/V1AssetsSetAssetBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1AssetsSetAsset**
> \Swagger\Client\Model\InlineResponse2001 postApiV1AssetsSetAsset($x_auth_token, $x_user_id, $asset, $asset_name, $refresh_all_clients)

Set Asset

Set an <a href=\"https://docs.rocket.chat/docs/assets\" target=\"_blank\"> asset</a> by name. Permissions required: `manage-assets`.   ### Changelog | Version      | Description |  | ---------------- | ------------| |0.69.0           | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$asset = "asset_example"; // string | 
$asset_name = "asset_name_example"; // string | 
$refresh_all_clients = "refresh_all_clients_example"; // string | 

try {
    $result = $apiInstance->postApiV1AssetsSetAsset($x_auth_token, $x_user_id, $asset, $asset_name, $refresh_all_clients);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->postApiV1AssetsSetAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **asset** | **string**|  | [optional]
 **asset_name** | **string**|  | [optional]
 **refresh_all_clients** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1AssetsUnsetAsset**
> \Swagger\Client\Model\InlineResponse2001 postApiV1AssetsUnsetAsset($x_auth_token, $x_user_id, $body)

Unset Asset

Unset an asset by name. Permissions required: `manage-assets` .  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.69.0           | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1AssetsUnsetAssetBody(); // \Swagger\Client\Model\V1AssetsUnsetAssetBody | 

try {
    $result = $apiInstance->postApiV1AssetsUnsetAsset($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->postApiV1AssetsUnsetAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1AssetsUnsetAssetBody**](../Model/V1AssetsUnsetAssetBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

