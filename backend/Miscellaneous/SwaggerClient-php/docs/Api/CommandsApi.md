# Swagger\Client\CommandsApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1CommandsGet**](CommandsApi.md#getapiv1commandsget) | **GET** /api/v1/commands.get | Get Slash Commands
[**getApiV1CommandsList**](CommandsApi.md#getapiv1commandslist) | **GET** /api/v1/commands.list | List Slash Commands
[**getApiV1CommandsPreview**](CommandsApi.md#getapiv1commandspreview) | **GET** /api/v1/commands.preview | Get Command&#x27;s Preview Data
[**postApiV1CommandsPreview**](CommandsApi.md#postapiv1commandspreview) | **POST** /api/v1/commands.preview | Execute command&#x27;s preview item
[**postApiV1CommandsRun**](CommandsApi.md#postapiv1commandsrun) | **POST** /api/v1/commands.run | Execute a Slash Command

# **getApiV1CommandsGet**
> \Swagger\Client\Model\InlineResponse20012 getApiV1CommandsGet($x_auth_token, $x_user_id, $command)

Get Slash Commands

Get specification of the slash command. ### Changelog | Version      | Description | | ---------------- | ------------| |0.60.2       | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CommandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$command = "command_example"; // string | The name of the command.

try {
    $result = $apiInstance->getApiV1CommandsGet($x_auth_token, $x_user_id, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandsApi->getApiV1CommandsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **command** | **string**| The name of the command. |

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1CommandsList**
> \Swagger\Client\Model\InlineResponse20013 getApiV1CommandsList($x_auth_token, $x_user_id)

List Slash Commands

Lists all available slash commands. ### Changelog | Version      | Description | | ---------------- | ------------| |0.60.2      | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CommandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1CommandsList($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandsApi->getApiV1CommandsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |

### Return type

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1CommandsPreview**
> object getApiV1CommandsPreview($x_auth_token, $x_user_id, $command, $room_id, $params)

Get Command's Preview Data

Fetches the command's preview data or executes the preview item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CommandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$command = "command_example"; // string | The name of the command to be executed.
$room_id = "room_id_example"; // string | The ID of the room.
$params = "params_example"; // string | Parameters of the command if required. It is `undefined` by default.

try {
    $result = $apiInstance->getApiV1CommandsPreview($x_auth_token, $x_user_id, $command, $room_id, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandsApi->getApiV1CommandsPreview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **command** | **string**| The name of the command to be executed. |
 **room_id** | **string**| The ID of the room. |
 **params** | **string**| Parameters of the command if required. It is &#x60;undefined&#x60; by default. | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1CommandsPreview**
> object postApiV1CommandsPreview($x_auth_token, $x_user_id, $body)

Execute command's preview item

### Changelog | Version      | Description | | ---------------- | ------------| |3.0.0      | Added `tmid` and `triggerId` fields       | |0.65.0      | Added|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CommandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1CommandsPreviewBody(); // \Swagger\Client\Model\V1CommandsPreviewBody | 

try {
    $result = $apiInstance->postApiV1CommandsPreview($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandsApi->postApiV1CommandsPreview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1CommandsPreviewBody**](../Model/V1CommandsPreviewBody.md)|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1CommandsRun**
> \Swagger\Client\Model\InlineResponse2001 postApiV1CommandsRun($x_auth_token, $x_user_id, $body)

Execute a Slash Command

Execute a slash command in the specified room. ### Changelog | Version      | Description | | ---------------- | ------------| |3.0.0      | Added `triggerId` property       | |2.0.0      | Added `tmid` property      | |0.60.2      | Added        |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CommandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1CommandsRunBody(); // \Swagger\Client\Model\V1CommandsRunBody | 

try {
    $result = $apiInstance->postApiV1CommandsRun($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandsApi->postApiV1CommandsRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1CommandsRunBody**](../Model/V1CommandsRunBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

