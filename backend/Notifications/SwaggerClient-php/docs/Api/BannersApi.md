# Swagger\Client\BannersApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1Banners**](BannersApi.md#getapiv1banners) | **GET** /api/v1/banners | Get Banners
[**getApiV1BannersGetNew**](BannersApi.md#getapiv1bannersgetnew) | **GET** /api/v1/banners.getNew | Get a banner
[**getApiV1BannersId**](BannersApi.md#getapiv1bannersid) | **GET** /api/v1/banners/{id} | Get Banner by ID
[**postApiV1BannersDismiss**](BannersApi.md#postapiv1bannersdismiss) | **POST** /api/v1/banners.dismiss | Dismiss a Banner

# **getApiV1Banners**
> \Swagger\Client\Model\InlineResponse200 getApiV1Banners($x_auth_token, $x_user_id, $platform)

Get Banners

Gets the banners to be shown to the authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BannersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authorization token of the user.
$x_user_id = "x_user_id_example"; // string | The user ID of the user.
$platform = "platform_example"; // string | The platform rendering the banner

try {
    $result = $apiInstance->getApiV1Banners($x_auth_token, $x_user_id, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BannersApi->getApiV1Banners: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authorization token of the user. |
 **x_user_id** | **string**| The user ID of the user. |
 **platform** | **string**| The platform rendering the banner |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1BannersGetNew**
> \Swagger\Client\Model\InlineResponse200 getApiV1BannersGetNew($x_auth_token, $x_user_id, $platform, $bid)

Get a banner

> This endpoint has been deprecated and is scheduled for removal in the 8.0.0 <a href=\"https://github.com/RocketChat/Rocket.Chat/releases\" target=\"_blank\">release</a>. Use [`banners`](https://developer.rocket.chat/apidocs/get-banners) or [`banners/:id`](https://developer.rocket.chat/apidocs/get-banner-by-id) instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BannersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authorization token of the user.
$x_user_id = "x_user_id_example"; // string | The user ID of the user.
$platform = "platform_example"; // string | The platform rendering the banner.
$bid = "bid_example"; // string | The banner ID

try {
    $result = $apiInstance->getApiV1BannersGetNew($x_auth_token, $x_user_id, $platform, $bid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BannersApi->getApiV1BannersGetNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authorization token of the user. |
 **x_user_id** | **string**| The user ID of the user. |
 **platform** | **string**| The platform rendering the banner. |
 **bid** | **string**| The banner ID |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1BannersId**
> \Swagger\Client\Model\InlineResponse200 getApiV1BannersId($id, $x_auth_token, $x_user_id, $platform)

Get Banner by ID

Gets the banner to be shown to the authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BannersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The banner ID.
$x_auth_token = "x_auth_token_example"; // string | The authorization token of the user.
$x_user_id = "x_user_id_example"; // string | The user ID of the user.
$platform = "platform_example"; // string | The platform rendering the banner.

try {
    $result = $apiInstance->getApiV1BannersId($id, $x_auth_token, $x_user_id, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BannersApi->getApiV1BannersId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The banner ID. |
 **x_auth_token** | **string**| The authorization token of the user. |
 **x_user_id** | **string**| The user ID of the user. |
 **platform** | **string**| The platform rendering the banner. |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1BannersDismiss**
> \Swagger\Client\Model\InlineResponse2001 postApiV1BannersDismiss($x_auth_token, $x_user_id, $body)

Dismiss a Banner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BannersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authorization token of the user.
$x_user_id = "x_user_id_example"; // string | The user ID of the user.
$body = new \Swagger\Client\Model\V1BannersDismissBody(); // \Swagger\Client\Model\V1BannersDismissBody | 

try {
    $result = $apiInstance->postApiV1BannersDismiss($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BannersApi->postApiV1BannersDismiss: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authorization token of the user. |
 **x_user_id** | **string**| The user ID of the user. |
 **body** | [**\Swagger\Client\Model\V1BannersDismissBody**](../Model/V1BannersDismissBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

