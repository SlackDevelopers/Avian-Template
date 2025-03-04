# Swagger\Client\BulkUserImportApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1ImportStatus**](BulkUserImportApi.md#getapiv1importstatus) | **GET** /api/v1/import.status | Get Import Operation Status
[**postApiV1ImportAddUsers**](BulkUserImportApi.md#postapiv1importaddusers) | **POST** /api/v1/import.addUsers | Add Users
[**postApiV1ImportClear**](BulkUserImportApi.md#postapiv1importclear) | **POST** /api/v1/import.clear | Abort Import Operation
[**postApiV1ImportNew**](BulkUserImportApi.md#postapiv1importnew) | **POST** /api/v1/import.new | Create New Import Operation
[**postApiV1ImportRun**](BulkUserImportApi.md#postapiv1importrun) | **POST** /api/v1/import.run | Run Import Operation

# **getApiV1ImportStatus**
> \Swagger\Client\Model\InlineResponse20013 getApiV1ImportStatus($x_user_id, $x_auth_token)

Get Import Operation Status

Get the status of the current import operation.Permission required: `run-import` ### Changelog | Version      | Description | | ---------------- | ------------| |6.3.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BulkUserImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.

try {
    $result = $apiInstance->getApiV1ImportStatus($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkUserImportApi->getApiV1ImportStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |

### Return type

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ImportAddUsers**
> \Swagger\Client\Model\InlineResponse2002 postApiV1ImportAddUsers($x_user_id, $x_auth_token, $body)

Add Users

Adds user data to the import staging area. It requires the current import operation status to be either `new` or `ready`. If successful, it changes the operation state to `ready`. Permission required: `run-import` ### Changelog | Version      | Description | | ---------------- | ------------| |6.3.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BulkUserImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$body = new \Swagger\Client\Model\V1ImportAddUsersBody(); // \Swagger\Client\Model\V1ImportAddUsersBody | Note:   1. A minimum of one email address and one import ID is required. If any user is missing those, the endpoint will fail and no user will be added to the operation.   2. Emails and usernames will not be validated, but they must be unique or the user creation will fail.   3. If roles are added, they must be valid Rocket.Chat roles, or the endpoint will fail and no user will be added to the operation.   4. The default roles will be added to all users automatically.   5. If no password is added, a temporary random password will be generated automatically.   6. Users flagged as `deleted` will be created as `Deactivated` on Rocket.Chat.   7. Avatar URLs will not be fetched automatically. The workspace administrator needs to use the **Download Pending Avatars** button in **Administration** > **Workspace** > **Import** on the workspace after the import is completed.   8. Import IDs will not be used as IDs by Rocket.Chat, but you can query users by their import ID with the  <a href=\"https://developer.rocket.chat/apidocs/get-users-info\" target=\"_blank\">users.info</a>.

try {
    $result = $apiInstance->postApiV1ImportAddUsers($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkUserImportApi->postApiV1ImportAddUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **body** | [**\Swagger\Client\Model\V1ImportAddUsersBody**](../Model/V1ImportAddUsersBody.md)| Note:   1. A minimum of one email address and one import ID is required. If any user is missing those, the endpoint will fail and no user will be added to the operation.   2. Emails and usernames will not be validated, but they must be unique or the user creation will fail.   3. If roles are added, they must be valid Rocket.Chat roles, or the endpoint will fail and no user will be added to the operation.   4. The default roles will be added to all users automatically.   5. If no password is added, a temporary random password will be generated automatically.   6. Users flagged as &#x60;deleted&#x60; will be created as &#x60;Deactivated&#x60; on Rocket.Chat.   7. Avatar URLs will not be fetched automatically. The workspace administrator needs to use the **Download Pending Avatars** button in **Administration** &gt; **Workspace** &gt; **Import** on the workspace after the import is completed.   8. Import IDs will not be used as IDs by Rocket.Chat, but you can query users by their import ID with the  &lt;a href&#x3D;\&quot;https://developer.rocket.chat/apidocs/get-users-info\&quot; target&#x3D;\&quot;_blank\&quot;&gt;users.info&lt;/a&gt;. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ImportClear**
> \Swagger\Client\Model\InlineResponse2002 postApiV1ImportClear($x_user_id, $x_auth_token)

Abort Import Operation

Abort any import operation currently in progress. Clear any remaining data that may have been left by any previous operation. Permission required: `run-import` ### Changelog | Version      | Description | | ---------------- | ------------| |6.3.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BulkUserImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.

try {
    $result = $apiInstance->postApiV1ImportClear($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkUserImportApi->postApiV1ImportClear: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ImportNew**
> \Swagger\Client\Model\InlineResponse20012 postApiV1ImportNew($x_user_id, $x_auth_token)

Create New Import Operation

Creates a new import operation; if an operation was already running, it will be aborted. Any data from previous imports will be cleared automatically. Permission required: `run-import` ### Changelog | Version      | Description | | ---------------- | ------------| |6.3.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BulkUserImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.

try {
    $result = $apiInstance->postApiV1ImportNew($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkUserImportApi->postApiV1ImportNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ImportRun**
> \Swagger\Client\Model\InlineResponse2002 postApiV1ImportRun($x_user_id, $x_auth_token)

Run Import Operation

Process the data from the current import operation, creating the users on Rocket.Chat. It requires the current import operation state to be `ready` and it changes the operation state to `importing`. It will return success if the conditions to start the process are met, without waiting for the import to finish. Permission required: `run-import`  1. If a user can not be imported successfully it'll be flagged but the operation will not stop. 2. If a user's email or username is already in use, it will not be created. 3. Only the users that were imported successfully will be removed from the staging area.  ### Changelog | Version      | Description | | ---------------- | ------------| |6.3.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BulkUserImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.

try {
    $result = $apiInstance->postApiV1ImportRun($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkUserImportApi->postApiV1ImportRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

