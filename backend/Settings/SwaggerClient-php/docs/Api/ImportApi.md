# Swagger\Client\ImportApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1GetCurrentImportOperation**](ImportApi.md#getapiv1getcurrentimportoperation) | **GET** /api/v1/getCurrentImportOperation | Get Current Import Operations
[**getApiV1GetImportFileData**](ImportApi.md#getapiv1getimportfiledata) | **GET** /api/v1/getImportFileData | Get Import File Data
[**getApiV1GetImportProgress**](ImportApi.md#getapiv1getimportprogress) | **GET** /api/v1/getImportProgress | Get Import Progress
[**getApiV1GetLatestImportOperations**](ImportApi.md#getapiv1getlatestimportoperations) | **GET** /api/v1/getLatestImportOperations | Get Latest Import Operations
[**postApiV1DownloadPendingAvatars**](ImportApi.md#postapiv1downloadpendingavatars) | **POST** /api/v1/downloadPendingAvatars | Download Pending Avatars
[**postApiV1DownloadPendingFiles**](ImportApi.md#postapiv1downloadpendingfiles) | **POST** /api/v1/downloadPendingFiles | Download Pending Files
[**postApiV1DownloadPublicImportFile**](ImportApi.md#postapiv1downloadpublicimportfile) | **POST** /api/v1/downloadPublicImportFile | Download Public Import File
[**postApiV1StartImport**](ImportApi.md#postapiv1startimport) | **POST** /api/v1/startImport | Start Import
[**postApiV1UploadImportFile**](ImportApi.md#postapiv1uploadimportfile) | **POST** /api/v1/uploadImportFile | Upload Import File

# **getApiV1GetCurrentImportOperation**
> \Swagger\Client\Model\InlineResponse20011 getApiV1GetCurrentImportOperation($x_user_id, $x_auth_token)

Get Current Import Operations

Get the current import operation. Permission required: `run-import` ### Changelog | Version      | Description | | ---------------- | ------------| |3.0.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.

try {
    $result = $apiInstance->getApiV1GetCurrentImportOperation($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->getApiV1GetCurrentImportOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |

### Return type

[**\Swagger\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1GetImportFileData**
> \Swagger\Client\Model\InlineResponse2007 getApiV1GetImportFileData($x_user_id, $x_auth_token)

Get Import File Data

Get the import file data.  Permission required: `run-import` ### Changelog | Version      | Description | | ---------------- | ------------| |3.0.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.

try {
    $result = $apiInstance->getApiV1GetImportFileData($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->getApiV1GetImportFileData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1GetImportProgress**
> \Swagger\Client\Model\InlineResponse2008 getApiV1GetImportProgress($x_user_id, $x_auth_token)

Get Import Progress

Get the progress of the import. Permission required: `run-import` ### Changelog | Version      | Description | | ---------------- | ------------| |3.0.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.

try {
    $result = $apiInstance->getApiV1GetImportProgress($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->getApiV1GetImportProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1GetLatestImportOperations**
> \Swagger\Client\Model\InlineResponse2009[] getApiV1GetLatestImportOperations($x_user_id, $x_auth_token)

Get Latest Import Operations

Get latests import operations. Permission required: `view-import-operations` ### Changelog | Version      | Description | | ---------------- | ------------| |3.0.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.

try {
    $result = $apiInstance->getApiV1GetLatestImportOperations($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->getApiV1GetLatestImportOperations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |

### Return type

[**\Swagger\Client\Model\InlineResponse2009[]**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1DownloadPendingAvatars**
> \Swagger\Client\Model\InlineResponse20010 postApiV1DownloadPendingAvatars($x_user_id, $x_auth_token)

Download Pending Avatars

Download pending avatars from the import. Permission required: `run-import` ### Changelog | Version      | Description | | ---------------- | ------------| |3.0.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.

try {
    $result = $apiInstance->postApiV1DownloadPendingAvatars($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->postApiV1DownloadPendingAvatars: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1DownloadPendingFiles**
> \Swagger\Client\Model\InlineResponse20010 postApiV1DownloadPendingFiles($x_user_id, $x_auth_token)

Download Pending Files

Dowbload pending files. Permission required: `run-import` ### Changelog | Version      | Description | | ---------------- | ------------| |3.0.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.

try {
    $result = $apiInstance->postApiV1DownloadPendingFiles($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->postApiV1DownloadPendingFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1DownloadPublicImportFile**
> \Swagger\Client\Model\InlineResponse2002 postApiV1DownloadPublicImportFile($x_user_id, $x_auth_token, $body)

Download Public Import File

Download the public import file. Permission required: `run-import`  ### Changelog | Version      | Description | | ---------------- | ------------| |3.0.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$body = new \Swagger\Client\Model\V1DownloadPublicImportFileBody(); // \Swagger\Client\Model\V1DownloadPublicImportFileBody | 

try {
    $result = $apiInstance->postApiV1DownloadPublicImportFile($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->postApiV1DownloadPublicImportFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **body** | [**\Swagger\Client\Model\V1DownloadPublicImportFileBody**](../Model/V1DownloadPublicImportFileBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1StartImport**
> \Swagger\Client\Model\InlineResponse2002 postApiV1StartImport($x_user_id, $x_auth_token, $body)

Start Import

Triggers the process of importing users, rooms and messages to the workspace. Permission required: `run-import`  ### Changelog | Version      | Description | | ---------------- | ------------| |7.0.0            | Remove required extra data from `users` and `channels` parameters. Use only record ID of the users or channels.   | |3.0.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$body = new \Swagger\Client\Model\V1StartImportBody(); // \Swagger\Client\Model\V1StartImportBody | 

try {
    $result = $apiInstance->postApiV1StartImport($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->postApiV1StartImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **body** | [**\Swagger\Client\Model\V1StartImportBody**](../Model/V1StartImportBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1UploadImportFile**
> \Swagger\Client\Model\InlineResponse2002 postApiV1UploadImportFile($x_user_id, $x_auth_token, $body)

Upload Import File

This endpoint takes in the binary content of the imported file, along with additional information about its content, and stores it in a buffer. Permission required: `run-import`.  ### Changelog | Version      | Description | | ---------------- | ------------| |3.0.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$body = new \Swagger\Client\Model\V1UploadImportFileBody(); // \Swagger\Client\Model\V1UploadImportFileBody | 

try {
    $result = $apiInstance->postApiV1UploadImportFile($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->postApiV1UploadImportFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **body** | [**\Swagger\Client\Model\V1UploadImportFileBody**](../Model/V1UploadImportFileBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

