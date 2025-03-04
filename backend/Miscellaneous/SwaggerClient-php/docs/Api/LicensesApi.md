# Swagger\Client\LicensesApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1LicensesInfo**](LicensesApi.md#getapiv1licensesinfo) | **GET** /api/v1/licenses.info | Get Licenses
[**getLicensesMaxActiveUsers**](LicensesApi.md#getlicensesmaxactiveusers) | **GET** /licenses.maxActiveUsers | Get Maximum Active User
[**postApiV1LicensesAdd**](LicensesApi.md#postapiv1licensesadd) | **POST** /api/v1/licenses.add | Add License

# **getApiV1LicensesInfo**
> \Swagger\Client\Model\InlineResponse2009 getApiV1LicensesInfo($x_auth_token, $x_user_id)

Get Licenses

Retrieves a list of all registered licenses and the details in the workspace.  Permission required: `view-privileged-setting`.  The `licenses.isEnterprise` and `licenses.get` endpoints have been removed from 7.0. Use this endpoint instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LicensesInfo($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->getApiV1LicensesInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLicensesMaxActiveUsers**
> \Swagger\Client\Model\InlineResponse20010 getLicensesMaxActiveUsers($x_auth_token, $x_user_id)

Get Maximum Active User

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieves a list of the maximum active users.  ### Changelog | Version      | Description | | ---------------- | ------------| |4.0.0         | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getLicensesMaxActiveUsers($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->getLicensesMaxActiveUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LicensesAdd**
> \Swagger\Client\Model\InlineResponse2001 postApiV1LicensesAdd($x_auth_token, $x_user_id, $body)

Add License

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  You may want to <a href=\"https://docs.rocket.chat/docs/rocketchat-air-gapped-deployment\" target=\"_blank\">deploy your workspace in an air-gapped environment</a>. Since the server has no internet to communicate with the cloud, we provide a license for your subscribed plan that you can apply manually to upgrade your workspace.  Permission required: `edit-privileged-setting`. ### Changelog | Version      | Description | | ---------------- | ------------| |3.10.0         | Added       |  A successful response only means the license provided follows the accepted format. Check your <a href=\"https://docs.rocket.chat/docs/reports\" target=\"_blank\">workspace log</a> or <a href=\"https://docs.rocket.chat/docs/workspace\" target=\"_blank\">administration info</a> to confirm if the license is valid and was applied to your workspace. Alternatively, you can check <b><a href=\"https://developer.rocket.chat/apidocs/get-licenses-1\" target=\"_blank\">Confirm Enterprise License</a></b> endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1LicensesAddBody(); // \Swagger\Client\Model\V1LicensesAddBody | 

try {
    $result = $apiInstance->postApiV1LicensesAdd($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->postApiV1LicensesAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1LicensesAddBody**](../Model/V1LicensesAddBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

