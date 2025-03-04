# Swagger\Client\ReportsApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1LivechatAnalyticsDashboardsConversationsByAgent**](ReportsApi.md#getapiv1livechatanalyticsdashboardsconversationsbyagent) | **GET** /api/v1/livechat/analytics/dashboards/conversations-by-agent | Get Conversation by Agents
[**getApiV1LivechatAnalyticsDashboardsConversationsByDepartment**](ReportsApi.md#getapiv1livechatanalyticsdashboardsconversationsbydepartment) | **GET** /api/v1/livechat/analytics/dashboards/conversations-by-department | Get Conversations by Departments
[**getApiV1LivechatAnalyticsDashboardsConversationsByStatus**](ReportsApi.md#getapiv1livechatanalyticsdashboardsconversationsbystatus) | **GET** /api/v1/livechat/analytics/dashboards/conversations-by-status | Get Conversations by Status
[**getApiV1LivechatAnalyticsDashboardsConversationsByTags**](ReportsApi.md#getapiv1livechatanalyticsdashboardsconversationsbytags) | **GET** /api/v1/livechat/analytics/dashboards/conversations-by-tags | Get Conversations by Tags

# **getApiV1LivechatAnalyticsDashboardsConversationsByAgent**
> \Swagger\Client\Model\InlineResponse20092 getApiV1LivechatAnalyticsDashboardsConversationsByAgent($x_user_id, $x_auth_token, $start, $end)

Get Conversation by Agents

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  View the metrics of omnichannel conversations in your workspace during a selected time range based on the agents in your workspace. <br>  Permission required: `view-livechat-reports`  ### Changelog | Version      | Description | | ------------ | ------------| |6.4.0         | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDashboardsConversationsByAgent($x_user_id, $x_auth_token, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getApiV1LivechatAnalyticsDashboardsConversationsByAgent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **start** | **string**| The start date. |
 **end** | **string**| The end date. |

### Return type

[**\Swagger\Client\Model\InlineResponse20092**](../Model/InlineResponse20092.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatAnalyticsDashboardsConversationsByDepartment**
> \Swagger\Client\Model\InlineResponse20092 getApiV1LivechatAnalyticsDashboardsConversationsByDepartment($x_auth_token, $x_user_id, $start, $end, $sort)

Get Conversations by Departments

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>   View the metrics of omnichannel conversations in your workspace during a selected time range based on their departments. <br>  Permission required: `view-livechat-reports`  ### Changelog | Version      | Description |  | -----------  | ------------| |6.4.0         | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDashboardsConversationsByDepartment($x_auth_token, $x_user_id, $start, $end, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getApiV1LivechatAnalyticsDashboardsConversationsByDepartment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **start** | **string**| The start date. |
 **end** | **string**| The end date. |
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20092**](../Model/InlineResponse20092.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatAnalyticsDashboardsConversationsByStatus**
> \Swagger\Client\Model\InlineResponse20091 getApiV1LivechatAnalyticsDashboardsConversationsByStatus($x_auth_token, $x_user_id, $start, $end)

Get Conversations by Status

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  View the metrics of omnichannel conversations in your workspace during a selected time range based on their status: **Open**, **Queued**, **On Hold**, or **Closed**.<br>  Permission required: `view-livechat-reports`  ### Changelog | Version      | Description |  | -----------  | ------------| |6.4.0         | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDashboardsConversationsByStatus($x_auth_token, $x_user_id, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getApiV1LivechatAnalyticsDashboardsConversationsByStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **start** | **string**| The start date. |
 **end** | **string**| The end date. |

### Return type

[**\Swagger\Client\Model\InlineResponse20091**](../Model/InlineResponse20091.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatAnalyticsDashboardsConversationsByTags**
> \Swagger\Client\Model\InlineResponse20092 getApiV1LivechatAnalyticsDashboardsConversationsByTags($x_auth_token, $x_user_id, $start, $end)

Get Conversations by Tags

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  View the metrics of omnichannel conversations in your workspace during a selected time range based on their tags. <br>  Permission required: `view-livechat-reports`  ### Changelog | Version      | Description | | ------------ | ------------| |6.4.0         | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDashboardsConversationsByTags($x_auth_token, $x_user_id, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getApiV1LivechatAnalyticsDashboardsConversationsByTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **start** | **string**| The start date. |
 **end** | **string**| The end date. |

### Return type

[**\Swagger\Client\Model\InlineResponse20092**](../Model/InlineResponse20092.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

