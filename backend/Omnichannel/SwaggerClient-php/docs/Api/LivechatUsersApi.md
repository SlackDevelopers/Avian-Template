# Swagger\Client\LivechatUsersApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteApiV1LivechatUsersTypeId**](LivechatUsersApi.md#deleteapiv1livechatuserstypeid) | **DELETE** /api/v1/livechat/users/{type}/{_id} | Remove Agent or Manager
[**getApiV1LivechatUsersType**](LivechatUsersApi.md#getapiv1livechatuserstype) | **GET** /api/v1/livechat/users/{type} | Get List of Agents or Managers
[**getApiV1LivechatUsersTypeId**](LivechatUsersApi.md#getapiv1livechatuserstypeid) | **GET** /api/v1/livechat/users/{type}/{_id} | Get Agent or Manager Information
[**postApiV1LivechatUsersType**](LivechatUsersApi.md#postapiv1livechatuserstype) | **POST** /api/v1/livechat/users/{type} | Register New Agent or Manager

# **deleteApiV1LivechatUsersTypeId**
> \Swagger\Client\Model\InlineResponse2003 deleteApiV1LivechatUsersTypeId($x_auth_token, $x_user_id, $type, $_id)

Remove Agent or Manager

Remove a user as an agent or a manager. Permission required: `view-livechat-manager`  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.42.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$type = "type_example"; // string | The type of user. The value can either be `agent` or `manager`.
$_id = "_id_example"; // string | The user ID.

try {
    $result = $apiInstance->deleteApiV1LivechatUsersTypeId($x_auth_token, $x_user_id, $type, $_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUsersApi->deleteApiV1LivechatUsersTypeId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **type** | **string**| The type of user. The value can either be &#x60;agent&#x60; or &#x60;manager&#x60;. |
 **_id** | **string**| The user ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatUsersType**
> \Swagger\Client\Model\InlineResponse200 getApiV1LivechatUsersType($x_auth_token, $x_user_id, $type, $offset, $count, $sort, $text)

Get List of Agents or Managers

* If the `type` is `manager`, permission required: `view-livechat-manager`. * If the `type` is `agent`, permission required: at least one of `transfer-livechat-guest` or `edit-omnichannel-contact`.  ### Changelog | Version      | Description | | ---------------- | ------------| |2.2.0             | Added support to pagination       | |0.42.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$type = "type_example"; // string | The type of user that you want to register. The value can either be `agent` or `manager`.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`
$text = "text_example"; // string | Enter the text you want to filter the search result with.

try {
    $result = $apiInstance->getApiV1LivechatUsersType($x_auth_token, $x_user_id, $type, $offset, $count, $sort, $text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUsersApi->getApiV1LivechatUsersType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **type** | **string**| The type of user that you want to register. The value can either be &#x60;agent&#x60; or &#x60;manager&#x60;. |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional]
 **text** | **string**| Enter the text you want to filter the search result with. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatUsersTypeId**
> \Swagger\Client\Model\InlineResponse2002 getApiV1LivechatUsersTypeId($x_auth_token, $x_user_id, $type, $_id)

Get Agent or Manager Information

Get information about a particular agent or a manager. Permission required: `view-livechat-manager`  ### Changelog | Version      | Description | | ---------------- | ------------| |0.42.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$type = "type_example"; // string | The type of user. The value can either be `agent` or `manager`.
$_id = "_id_example"; // string | The user ID.

try {
    $result = $apiInstance->getApiV1LivechatUsersTypeId($x_auth_token, $x_user_id, $type, $_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUsersApi->getApiV1LivechatUsersTypeId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **type** | **string**| The type of user. The value can either be &#x60;agent&#x60; or &#x60;manager&#x60;. |
 **_id** | **string**| The user ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatUsersType**
> \Swagger\Client\Model\InlineResponse2001 postApiV1LivechatUsersType($x_auth_token, $x_user_id, $type, $body)

Register New Agent or Manager

Register a new <a href='https://docs.rocket.chat/use-rocket.chat/omnichannel/agents' target='_blank'>agent</a> or <a href='https://docs.rocket.chat/use-rocket.chat/omnichannel/managers' target='_blank'>manager</a>. Permission required: `view-livechat-manager`  ### Changelog | Version      | Description | | ------------ | ------------| |0.42.0        | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$type = "type_example"; // string | The type of user that you want to register. The value can either be `agent` or `manager`.
$body = new \Swagger\Client\Model\UsersTypeBody(); // \Swagger\Client\Model\UsersTypeBody | 

try {
    $result = $apiInstance->postApiV1LivechatUsersType($x_auth_token, $x_user_id, $type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUsersApi->postApiV1LivechatUsersType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **type** | **string**| The type of user that you want to register. The value can either be &#x60;agent&#x60; or &#x60;manager&#x60;. |
 **body** | [**\Swagger\Client\Model\UsersTypeBody**](../Model/UsersTypeBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

