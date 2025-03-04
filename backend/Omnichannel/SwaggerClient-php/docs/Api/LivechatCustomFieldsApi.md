# Swagger\Client\LivechatCustomFieldsApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1LivechatCustomFields**](LivechatCustomFieldsApi.md#getapiv1livechatcustomfields) | **GET** /api/v1/livechat/custom-fields | Get Livechat Custom Fields
[**getApiV1LivechatCustomFieldsId**](LivechatCustomFieldsApi.md#getapiv1livechatcustomfieldsid) | **GET** /api/v1/livechat/custom-fields/{_id} | Get Custom Field Information
[**postApiV1LivechatCustomField**](LivechatCustomFieldsApi.md#postapiv1livechatcustomfield) | **POST** /api/v1/livechat/custom.field | Send Custom Field Value
[**postApiV1LivechatCustomFields**](LivechatCustomFieldsApi.md#postapiv1livechatcustomfields) | **POST** /api/v1/livechat/custom.fields | Send Array of Custom Field Values

# **getApiV1LivechatCustomFields**
> \Swagger\Client\Model\InlineResponse20040 getApiV1LivechatCustomFields($x_auth_token, $x_user_id, $offset, $count, $sort, $text)

Get Livechat Custom Fields

Get a list of the Livechat custom fields. Permission required: `view-l-room`  ### Changelog | Version      | Description |  | ---------------- | ------------| |2.2.0             | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatCustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`
$text = "text_example"; // string | Enter the text to filter the search result.

try {
    $result = $apiInstance->getApiV1LivechatCustomFields($x_auth_token, $x_user_id, $offset, $count, $sort, $text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatCustomFieldsApi->getApiV1LivechatCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional]
 **text** | **string**| Enter the text to filter the search result. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20040**](../Model/InlineResponse20040.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatCustomFieldsId**
> \Swagger\Client\Model\InlineResponse20041 getApiV1LivechatCustomFieldsId($x_auth_token, $x_user_id, $_id)

Get Custom Field Information

Get details about a specific custom field. Permission required: `view-l-room`  ### Changelog | Version      | Description |  | ---------------- | ------------| |2.4.0             | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatCustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$_id = "_id_example"; // string | The custom field ID.

try {
    $result = $apiInstance->getApiV1LivechatCustomFieldsId($x_auth_token, $x_user_id, $_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatCustomFieldsApi->getApiV1LivechatCustomFieldsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **_id** | **string**| The custom field ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse20041**](../Model/InlineResponse20041.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatCustomField**
> \Swagger\Client\Model\InlineResponse20038 postApiV1LivechatCustomField($body)

Send Custom Field Value

Send the value for a custom field.  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.70.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatCustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LivechatCustomFieldBody(); // \Swagger\Client\Model\LivechatCustomFieldBody | 

try {
    $result = $apiInstance->postApiV1LivechatCustomField($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatCustomFieldsApi->postApiV1LivechatCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LivechatCustomFieldBody**](../Model/LivechatCustomFieldBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20038**](../Model/InlineResponse20038.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatCustomFields**
> \Swagger\Client\Model\InlineResponse20039 postApiV1LivechatCustomFields($body)

Send Array of Custom Field Values

Send an array of values for different custom fields.  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.70.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatCustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LivechatCustomFieldsBody(); // \Swagger\Client\Model\LivechatCustomFieldsBody | 

try {
    $result = $apiInstance->postApiV1LivechatCustomFields($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatCustomFieldsApi->postApiV1LivechatCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LivechatCustomFieldsBody**](../Model/LivechatCustomFieldsBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

