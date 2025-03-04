# Swagger\Client\LivechatStatisticsApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1LivechatAnalyticsAgentOverview**](LivechatStatisticsApi.md#getapiv1livechatanalyticsagentoverview) | **GET** /api/v1/livechat/analytics/agent-overview | Get Agent Analytics Overview
[**getApiV1LivechatAnalyticsOverview**](LivechatStatisticsApi.md#getapiv1livechatanalyticsoverview) | **GET** /api/v1/livechat/analytics/overview | Get Analytics Overview

# **getApiV1LivechatAnalyticsAgentOverview**
> \Swagger\Client\Model\InlineResponse20015 getApiV1LivechatAnalyticsAgentOverview($x_auth_token, $x_user_id, $name, $from, $to, $department_id)

Get Agent Analytics Overview

Get the analytics overview for the agents in your workspace. Permission required: `view-livechat-manager`  ### Changelog | Version      | Description |  | ---------------- | ------------| |6.4.0             | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatStatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$name = "name_example"; // string | The data that you want to get. The available options are:   * `Total_conversations` * `Avg_chat_duration` * `Total_messages` * `Avg_first_response_time` * `Best_first_response_time` * `Avg_response_time` * `Avg_reaction_time`
$from = "from_example"; // string | The start date
$to = "to_example"; // string | The end date
$department_id = "department_id_example"; // string | The department ID to return results for.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsAgentOverview($x_auth_token, $x_user_id, $name, $from, $to, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatStatisticsApi->getApiV1LivechatAnalyticsAgentOverview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **name** | **string**| The data that you want to get. The available options are:   * &#x60;Total_conversations&#x60; * &#x60;Avg_chat_duration&#x60; * &#x60;Total_messages&#x60; * &#x60;Avg_first_response_time&#x60; * &#x60;Best_first_response_time&#x60; * &#x60;Avg_response_time&#x60; * &#x60;Avg_reaction_time&#x60; |
 **from** | **string**| The start date |
 **to** | **string**| The end date |
 **department_id** | **string**| The department ID to return results for. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatAnalyticsOverview**
> \Swagger\Client\Model\InlineResponse20016[] getApiV1LivechatAnalyticsOverview($x_auth_token, $x_user_id, $name, $from, $to, $department_id)

Get Analytics Overview

Get the overview of omnichannel analytics in your workspace. Permission required: `view-livechat-manager`  ### Changelog | Version      | Description |  | ---------------- | ------------| |6.4.0             | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatStatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$name = "name_example"; // string | The data that you want to get. The available options are: `Productivity`, `Conversations`
$from = "from_example"; // string | The start date
$to = "to_example"; // string | The end date
$department_id = "department_id_example"; // string | The department ID to return results for.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsOverview($x_auth_token, $x_user_id, $name, $from, $to, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatStatisticsApi->getApiV1LivechatAnalyticsOverview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **name** | **string**| The data that you want to get. The available options are: &#x60;Productivity&#x60;, &#x60;Conversations&#x60; |
 **from** | **string**| The start date |
 **to** | **string**| The end date |
 **department_id** | **string**| The department ID to return results for. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20016[]**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

