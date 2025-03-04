# Swagger\Client\LivechatInquiriesApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1LivechatInquiriesGetOne**](LivechatInquiriesApi.md#getapiv1livechatinquiriesgetone) | **GET** /api/v1/livechat/inquiries.getOne | Get Inquiry by Room
[**getApiV1LivechatInquiriesList**](LivechatInquiriesApi.md#getapiv1livechatinquirieslist) | **GET** /api/v1/livechat/inquiries.list | Get Inquiries List
[**getApiV1LivechatInquiriesQueuedForUser**](LivechatInquiriesApi.md#getapiv1livechatinquiriesqueuedforuser) | **GET** /api/v1/livechat/inquiries.queuedForUser | List Queued User Inquiries
[**postApiV1LivechatInquiriesTake**](LivechatInquiriesApi.md#postapiv1livechatinquiriestake) | **POST** /api/v1/livechat/inquiries.take | Take Inquiry
[**putApiV1LivechatInquirySetSLA**](LivechatInquiriesApi.md#putapiv1livechatinquirysetsla) | **PUT** /api/v1/livechat/inquiry.setSLA | Set SLA Policy to Inquiry

# **getApiV1LivechatInquiriesGetOne**
> \Swagger\Client\Model\InlineResponse20063 getApiV1LivechatInquiriesGetOne($x_auth_token, $x_user_id, $room_id)

Get Inquiry by Room

Permission required: `view-l-room`  ### Changelog | Version      | Description | | ---------------- | ------------| |2.4.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatInquiriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$room_id = "room_id_example"; // string | The room ID.

try {
    $result = $apiInstance->getApiV1LivechatInquiriesGetOne($x_auth_token, $x_user_id, $room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatInquiriesApi->getApiV1LivechatInquiriesGetOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **room_id** | **string**| The room ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse20063**](../Model/InlineResponse20063.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatInquiriesList**
> \Swagger\Client\Model\InlineResponse20061 getApiV1LivechatInquiriesList($x_auth_token, $x_user_id, $department, $offset, $count, $sort)

Get Inquiries List

Lists all open Livechat inquiries. An incoming chat that has not yet been taken by the agent is called an inquiry. After it's been taken by the agent it is referred to as room. Permission required: `view-livechat-manager`  ### Changelog | Version      | Description |  | ---------------- | ------------| |1.2.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatInquiriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$department = "department_example"; // string | The department ID or name.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`

try {
    $result = $apiInstance->getApiV1LivechatInquiriesList($x_auth_token, $x_user_id, $department, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatInquiriesApi->getApiV1LivechatInquiriesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **department** | **string**| The department ID or name. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20061**](../Model/InlineResponse20061.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatInquiriesQueuedForUser**
> \Swagger\Client\Model\InlineResponse20062 getApiV1LivechatInquiriesQueuedForUser($x_user_id, $x_auth_token, $department, $offset, $count, $sort)

List Queued User Inquiries

Permission required: `view-l-room` The `livechat/inquiries.queued` endpoint has been removed from 7.0. Use this endpoint instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatInquiriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$department = "department_example"; // string | The department ID or name.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`

try {
    $result = $apiInstance->getApiV1LivechatInquiriesQueuedForUser($x_user_id, $x_auth_token, $department, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatInquiriesApi->getApiV1LivechatInquiriesQueuedForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **department** | **string**| The department ID or name. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20062**](../Model/InlineResponse20062.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatInquiriesTake**
> \Swagger\Client\Model\InlineResponse2003 postApiV1LivechatInquiriesTake($x_auth_token, $x_user_id, $body)

Take Inquiry

Join an open inquiry. Permission required: `view-l-room`  ### Changelog | Version      | Description |  | ---------------- | ------------| |1.2.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatInquiriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\LivechatInquiriesTakeBody(); // \Swagger\Client\Model\LivechatInquiriesTakeBody | If the `userId` is provided, the user must have the `view-l-room` permission.

try {
    $result = $apiInstance->postApiV1LivechatInquiriesTake($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatInquiriesApi->postApiV1LivechatInquiriesTake: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\LivechatInquiriesTakeBody**](../Model/LivechatInquiriesTakeBody.md)| If the &#x60;userId&#x60; is provided, the user must have the &#x60;view-l-room&#x60; permission. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putApiV1LivechatInquirySetSLA**
> \Swagger\Client\Model\InlineResponse2003 putApiV1LivechatInquirySetSLA($x_auth_token, $x_user_id, $body)

Set SLA Policy to Inquiry

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Set <a href=\"https://docs.rocket.chat/docs/sla-policies\" target=\"_blank\">SLA policy</a> to an inquiry. You can only set the policy for an inquiry that has not been taken by an agent.  At least one of the following permissions is required: * `view-l-room` * `manage-livechat-sla`  ### Changelog | Version | Description  | | ------- |--------------| | 5.0.0  | Added         |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatInquiriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\LivechatInquirySetSLABody(); // \Swagger\Client\Model\LivechatInquirySetSLABody | 

try {
    $result = $apiInstance->putApiV1LivechatInquirySetSLA($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatInquiriesApi->putApiV1LivechatInquirySetSLA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\LivechatInquirySetSLABody**](../Model/LivechatInquirySetSLABody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

