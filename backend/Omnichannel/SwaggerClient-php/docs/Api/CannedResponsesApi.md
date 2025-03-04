# Swagger\Client\CannedResponsesApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1CannedResponses**](CannedResponsesApi.md#getapiv1cannedresponses) | **GET** /api/v1/canned-responses | List All Canned Responses
[**getApiV1CannedResponsesGet**](CannedResponsesApi.md#getapiv1cannedresponsesget) | **GET** /api/v1/canned-responses.get | Get User Canned Responses
[**getApiV1CannedResponsesId**](CannedResponsesApi.md#getapiv1cannedresponsesid) | **GET** /api/v1/canned-responses/{_id} | Get a Canned Response
[**postApiV1CannedResponses**](CannedResponsesApi.md#postapiv1cannedresponses) | **POST** /api/v1/canned-responses | Create or Update or Delete a Canned Response

# **getApiV1CannedResponses**
> \Swagger\Client\Model\InlineResponse200115 getApiV1CannedResponses($x_auth_token, $x_user_id, $shortcut, $text, $scope, $tags, $department_id, $offset, $count, $sort, $fields, $created_by)

List All Canned Responses

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Get a list of all canned responses in the workspace.  Permissions required: - `view-canned-responses` - `view-all-canned-responses`  ### Changelog | Version      | Description |  | ---------------- | ------------| |1.0.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CannedResponsesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$shortcut = "shortcut_example"; // string | The shortcut to trigger the message snippet.
$text = "text_example"; // string | The message snippet.
$scope = "scope_example"; // string | The scope of the canned response. It can either be `global`, `user`, or `department`.
$tags = "tags_example"; // string | The tags for your canned response.
$department_id = "department_id_example"; // string | The department ID where the canned response belongs to. It is required if the `scope` is `department`.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`
$fields = new \Swagger\Client\Model\null(); //  | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields = `{\"username\": 1}`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$created_by = "created_by_example"; // string | The user ID who created the canned response.

try {
    $result = $apiInstance->getApiV1CannedResponses($x_auth_token, $x_user_id, $shortcut, $text, $scope, $tags, $department_id, $offset, $count, $sort, $fields, $created_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CannedResponsesApi->getApiV1CannedResponses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **shortcut** | **string**| The shortcut to trigger the message snippet. | [optional]
 **text** | **string**| The message snippet. | [optional]
 **scope** | **string**| The scope of the canned response. It can either be &#x60;global&#x60;, &#x60;user&#x60;, or &#x60;department&#x60;. | [optional]
 **tags** | **string**| The tags for your canned response. | [optional]
 **department_id** | **string**| The department ID where the canned response belongs to. It is required if the &#x60;scope&#x60; is &#x60;department&#x60;. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional]
 **fields** | [****](../Model/.md)| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields &#x3D; &#x60;{\&quot;username\&quot;: 1}&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **created_by** | **string**| The user ID who created the canned response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200115**](../Model/InlineResponse200115.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1CannedResponsesGet**
> \Swagger\Client\Model\InlineResponse200116 getApiV1CannedResponsesGet($x_auth_token, $x_user_id)

Get User Canned Responses

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Get a list of all canned responses in the workspace that belong to the current user scope. <br>  Permission required: `view-canned-responses`  ### Changelog | Version      | Description | | ------------ | ------------| |1.0.0         | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CannedResponsesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1CannedResponsesGet($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CannedResponsesApi->getApiV1CannedResponsesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |

### Return type

[**\Swagger\Client\Model\InlineResponse200116**](../Model/InlineResponse200116.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1CannedResponsesId**
> \Swagger\Client\Model\InlineResponse200117 getApiV1CannedResponsesId($_id, $x_auth_token, $x_user_id)

Get a Canned Response

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Get a specific canned response. <br>  Permission required: `view-canned-responses`  ### Changelog | Version      | Description | | ---------------- | ------------| |1.0.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CannedResponsesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$_id = "_id_example"; // string | The canned response's ID.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1CannedResponsesId($_id, $x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CannedResponsesApi->getApiV1CannedResponsesId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_id** | **string**| The canned response&#x27;s ID. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |

### Return type

[**\Swagger\Client\Model\InlineResponse200117**](../Model/InlineResponse200117.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1CannedResponses**
> \Swagger\Client\Model\InlineResponse2003 postApiV1CannedResponses($x_auth_token, $x_user_id, $body)

Create or Update or Delete a Canned Response

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  To create and update <a href='https://docs.rocket.chat/docs/canned-responses' target='_blank'>canned responses</a>, the following permissions are required: * `save-canned-responses` * `save-all-canned-responses`  To delete a canned response, the following permission is required: * `remove-canned-responses`  ### Changelog | Version      | Description | | ------------ | ------------| |1.0.0         | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CannedResponsesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1CannedresponsesBody(); // \Swagger\Client\Model\V1CannedresponsesBody | Note:   * To update a canned response, the `_id` parameter is required along with the other required parameters. This parameter is not used to create a canned response.   * To delete a canned response, enter the `_id` of the canned response that you want to delete. No other parameter is required.

try {
    $result = $apiInstance->postApiV1CannedResponses($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CannedResponsesApi->postApiV1CannedResponses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1CannedresponsesBody**](../Model/V1CannedresponsesBody.md)| Note:   * To update a canned response, the &#x60;_id&#x60; parameter is required along with the other required parameters. This parameter is not used to create a canned response.   * To delete a canned response, enter the &#x60;_id&#x60; of the canned response that you want to delete. No other parameter is required. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

