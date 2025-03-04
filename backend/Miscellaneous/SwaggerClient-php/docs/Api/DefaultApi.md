# Swagger\Client\DefaultApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1ShieldSvg**](DefaultApi.md#getapiv1shieldsvg) | **GET** /api/v1/shield.svg | Shield SVG
[**getApiV1Spotlight**](DefaultApi.md#getapiv1spotlight) | **GET** /api/v1/spotlight | Spotlight
[**getApiV1StdoutQueue**](DefaultApi.md#getapiv1stdoutqueue) | **GET** /api/v1/stdout.queue | Get stdout queue
[**postApiV1MethodCallMethod**](DefaultApi.md#postapiv1methodcallmethod) | **POST** /api/v1/method.call/{method} | Execute a Meteor method call

# **getApiV1ShieldSvg**
> object getApiV1ShieldSvg($channel, $name, $type, $icon)

Shield SVG

A simple method, requires no authentication, that returns the shield svg(badge) to add in your website. It must have `API_Enable_Shields` enabled.  ### Changelog | Version      | Description | | ---------------- | ------------| |0.55.0        | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel = "channel_example"; // string | Name of the channel
$name = "name_example"; // string | Name to show
$type = "type_example"; // string | Can either be `online`, `user`, `channel`
$icon = "icon_example"; // string | 

try {
    $result = $apiInstance->getApiV1ShieldSvg($channel, $name, $type, $icon);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getApiV1ShieldSvg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel** | **string**| Name of the channel |
 **name** | **string**| Name to show |
 **type** | **string**| Can either be &#x60;online&#x60;, &#x60;user&#x60;, &#x60;channel&#x60; | [optional]
 **icon** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1Spotlight**
> \Swagger\Client\Model\InlineResponse2007 getApiV1Spotlight($x_auth_token, $x_user_id, $query)

Spotlight

Searches for users or rooms that are visible to the user. It will only return rooms that user didn't join yet.  ### Changelog | Version      | Description | | ---------------- | ------------| |0.64.0       | Added support to '#' and '@' searches, for channels and users respectively.       | |0.61.0      | Added       |

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
$query = "query_example"; // string | The term to be searched. Supports '#' for channels and '@' for users

try {
    $result = $apiInstance->getApiV1Spotlight($x_auth_token, $x_user_id, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getApiV1Spotlight: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **query** | **string**| The term to be searched. Supports &#x27;#&#x27; for channels and &#x27;@&#x27; for users |

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1StdoutQueue**
> \Swagger\Client\Model\InlineResponse2008 getApiV1StdoutQueue($x_auth_token, $x_user_id)

Get stdout queue

Retrieves last 1000 lines of server logs  Permissions required: `view-logs`

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

try {
    $result = $apiInstance->getApiV1StdoutQueue($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getApiV1StdoutQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1MethodCallMethod**
> \Swagger\Client\Model\InlineResponse20017 postApiV1MethodCallMethod($x_auth_token, $x_user_id, $method, $body)

Execute a Meteor method call

Execute a [realtime API method](https://developer.rocket.chat/apidocs/realtime-method-calls).

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
$method = "method_example"; // string | The Metoer method
$body = new \Swagger\Client\Model\MethodCallMethodBody(); // \Swagger\Client\Model\MethodCallMethodBody | 

try {
    $result = $apiInstance->postApiV1MethodCallMethod($x_auth_token, $x_user_id, $method, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postApiV1MethodCallMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **method** | **string**| The Metoer method |
 **body** | [**\Swagger\Client\Model\MethodCallMethodBody**](../Model/MethodCallMethodBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

