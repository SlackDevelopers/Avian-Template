# Swagger\Client\DeviceManagementApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1SessionsInfo**](DeviceManagementApi.md#getapiv1sessionsinfo) | **GET** /api/v1/sessions/info | Get Current User Session Information
[**getApiV1SessionsInfoAdmin**](DeviceManagementApi.md#getapiv1sessionsinfoadmin) | **GET** /api/v1/sessions/info.admin | Get Session Information
[**getApiV1SessionsList**](DeviceManagementApi.md#getapiv1sessionslist) | **GET** /api/v1/sessions/list | Get Current User Sessions
[**getApiV1SessionsListAll**](DeviceManagementApi.md#getapiv1sessionslistall) | **GET** /api/v1/sessions/list.all | Get All User Sessions
[**postApiV1SessionsLogout**](DeviceManagementApi.md#postapiv1sessionslogout) | **POST** /api/v1/sessions/logout | Logout Session
[**postApiV1SessionsLogoutMe**](DeviceManagementApi.md#postapiv1sessionslogoutme) | **POST** /api/v1/sessions/logout.me | Logout Current User Session

# **getApiV1SessionsInfo**
> \Swagger\Client\Model\InlineResponse20022 getApiV1SessionsInfo($x_user_id, $x_auth_token, $session_id)

Get Current User Session Information

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieve session information for sessions owned by the authenticated user. This endpoint provides detailed information about the user's sessions on the workspace. It does not grant access to the session information of other users on the workspace.  ### Changelog | Version      | Description | | ---------------- | ------------| |5.0.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$session_id = "session_id_example"; // string | The session ID.

try {
    $result = $apiInstance->getApiV1SessionsInfo($x_user_id, $x_auth_token, $session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceManagementApi->getApiV1SessionsInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **session_id** | **string**| The session ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1SessionsInfoAdmin**
> \Swagger\Client\Model\InlineResponse20023 getApiV1SessionsInfoAdmin($x_user_id, $x_auth_token, $session_id, $x_2fa_code, $x_2fa_method)

Get Session Information

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieve session information for any session on the workspace, regardless of the session owner. This endpoint allows authorized users to access session details across the workspace and requires 2FA. Permission required: `view-device-management`  ### Changelog | Version      | Description | | ------------ | ------------| |5.0.0         | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$session_id = "session_id_example"; // string | The session ID.
$x_2fa_code = "x_2fa_code_example"; // string | The 2FA code from the authentication method. If the method is password, encrypt it as SHA256.
$x_2fa_method = "x_2fa_method_example"; // string | The desired method to get the 2FA code. It can be `email`, `totp`, or `password`.

try {
    $result = $apiInstance->getApiV1SessionsInfoAdmin($x_user_id, $x_auth_token, $session_id, $x_2fa_code, $x_2fa_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceManagementApi->getApiV1SessionsInfoAdmin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **session_id** | **string**| The session ID. |
 **x_2fa_code** | **string**| The 2FA code from the authentication method. If the method is password, encrypt it as SHA256. |
 **x_2fa_method** | **string**| The desired method to get the 2FA code. It can be &#x60;email&#x60;, &#x60;totp&#x60;, or &#x60;password&#x60;. |

### Return type

[**\Swagger\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1SessionsList**
> \Swagger\Client\Model\InlineResponse20020 getApiV1SessionsList($x_user_id, $x_auth_token, $filter, $offset, $count, $sort)

Get Current User Sessions

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieves all sessions of the authenticated user making the request.  ### Changelog | Version      | Description | | ---------------- | ------------| |5.0.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$filter = "filter_example"; // string | Filter sessions list using regex.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | How many items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}

try {
    $result = $apiInstance->getApiV1SessionsList($x_user_id, $x_auth_token, $filter, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceManagementApi->getApiV1SessionsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **filter** | **string**| Filter sessions list using regex. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| How many items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1SessionsListAll**
> \Swagger\Client\Model\InlineResponse20021 getApiV1SessionsListAll($x_user_id, $x_auth_token, $x_2fa_code, $x_2fa_method, $filter, $offset, $count, $sort)

Get All User Sessions

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieve the sessions of all users on the workspace. This endpoint requires 2FA. Permission required: `view-device-management`  ### Changelog | Version      | Description | | ------------ | ------------| |5.0.0         | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$x_2fa_code = "x_2fa_code_example"; // string | The 2FA code from the authentication method. If the method is password, encrypt it as SHA256.
$x_2fa_method = "x_2fa_method_example"; // string | The desired method to get the 2FA code. It can be `email`, `totp`, or `password`.
$filter = "filter_example"; // string | Filter sessions list using regex.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | How many items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}

try {
    $result = $apiInstance->getApiV1SessionsListAll($x_user_id, $x_auth_token, $x_2fa_code, $x_2fa_method, $filter, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceManagementApi->getApiV1SessionsListAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **x_2fa_code** | **string**| The 2FA code from the authentication method. If the method is password, encrypt it as SHA256. |
 **x_2fa_method** | **string**| The desired method to get the 2FA code. It can be &#x60;email&#x60;, &#x60;totp&#x60;, or &#x60;password&#x60;. |
 **filter** | **string**| Filter sessions list using regex. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| How many items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1SessionsLogout**
> \Swagger\Client\Model\InlineResponse20024 postApiV1SessionsLogout($x_user_id, $x_auth_token, $x_2fa_code, $x_2fa_method, $body)

Logout Session

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  This endpoint allows an authorized user to log out other user's session on the workspace and requires 2FA. It provides the capability to terminate sessions of other users, ensuring workspace security and management.  Permission required: `logout-device-management`  ### Changelog | Version      | Description | | ------------ | ------------| |5.0.0         | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$x_2fa_code = "x_2fa_code_example"; // string | The 2FA code from the authentication method. If the method is password, encrypt it as SHA256.
$x_2fa_method = "x_2fa_method_example"; // string | The desired method to get the 2FA code. It can be `email`, `totp`, or `password`.
$body = new \Swagger\Client\Model\SessionsLogoutBody(); // \Swagger\Client\Model\SessionsLogoutBody | 

try {
    $result = $apiInstance->postApiV1SessionsLogout($x_user_id, $x_auth_token, $x_2fa_code, $x_2fa_method, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceManagementApi->postApiV1SessionsLogout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **x_2fa_code** | **string**| The 2FA code from the authentication method. If the method is password, encrypt it as SHA256. |
 **x_2fa_method** | **string**| The desired method to get the 2FA code. It can be &#x60;email&#x60;, &#x60;totp&#x60;, or &#x60;password&#x60;. |
 **body** | [**\Swagger\Client\Model\SessionsLogoutBody**](../Model/SessionsLogoutBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1SessionsLogoutMe**
> \Swagger\Client\Model\InlineResponse20024 postApiV1SessionsLogoutMe($x_user_id, $x_auth_token, $body)

Logout Current User Session

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  This endpoint allows an authenticated user to log out of any of their sessions on the workspace. It is designed specifically for the user to terminate their sessions and cannot be used to log out sessions belonging to other users on the workspace.  ### Changelog | Version      | Description | | ---------------- | ------------| |5.0.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$body = new \Swagger\Client\Model\SessionsLogoutMeBody(); // \Swagger\Client\Model\SessionsLogoutMeBody | 

try {
    $result = $apiInstance->postApiV1SessionsLogoutMe($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceManagementApi->postApiV1SessionsLogoutMe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **body** | [**\Swagger\Client\Model\SessionsLogoutMeBody**](../Model/SessionsLogoutMeBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

