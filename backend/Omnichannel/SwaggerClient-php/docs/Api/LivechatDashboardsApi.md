# Swagger\Client\LivechatDashboardsApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1LivechatAnalyticsDashboardsAgentsProductivityTotalizers**](LivechatDashboardsApi.md#getapiv1livechatanalyticsdashboardsagentsproductivitytotalizers) | **GET** /api/v1/livechat/analytics/dashboards/agents-productivity-totalizers | Get Agent Service Time Metrics
[**getApiV1LivechatAnalyticsDashboardsChartsAgentsStatus**](LivechatDashboardsApi.md#getapiv1livechatanalyticsdashboardschartsagentsstatus) | **GET** /api/v1/livechat/analytics/dashboards/charts/agents-status | Get Status of Agents
[**getApiV1LivechatAnalyticsDashboardsChartsChats**](LivechatDashboardsApi.md#getapiv1livechatanalyticsdashboardschartschats) | **GET** /api/v1/livechat/analytics/dashboards/charts/chats | Get Chats Status
[**getApiV1LivechatAnalyticsDashboardsChartsChatsPerAgent**](LivechatDashboardsApi.md#getapiv1livechatanalyticsdashboardschartschatsperagent) | **GET** /api/v1/livechat/analytics/dashboards/charts/chats-per-agent | Get Chat Status of Agents
[**getApiV1LivechatAnalyticsDashboardsChartsChatsPerDepartment**](LivechatDashboardsApi.md#getapiv1livechatanalyticsdashboardschartschatsperdepartment) | **GET** /api/v1/livechat/analytics/dashboards/charts/chats-per-department | Get Chats Status for Departments
[**getApiV1LivechatAnalyticsDashboardsChartsTimings**](LivechatDashboardsApi.md#getapiv1livechatanalyticsdashboardschartstimings) | **GET** /api/v1/livechat/analytics/dashboards/charts/timings | Get Chat Times
[**getApiV1LivechatAnalyticsDashboardsChatsTotalizers**](LivechatDashboardsApi.md#getapiv1livechatanalyticsdashboardschatstotalizers) | **GET** /api/v1/livechat/analytics/dashboards/chats-totalizers | Get Chat Metrics
[**getApiV1LivechatAnalyticsDashboardsConversationTotalizers**](LivechatDashboardsApi.md#getapiv1livechatanalyticsdashboardsconversationtotalizers) | **GET** /api/v1/livechat/analytics/dashboards/conversation-totalizers | Get Conversation Metrics
[**getApiV1LivechatAnalyticsDashboardsProductivityTotalizers**](LivechatDashboardsApi.md#getapiv1livechatanalyticsdashboardsproductivitytotalizers) | **GET** /api/v1/livechat/analytics/dashboards/productivity-totalizers | Get Chat Metrics by Time

# **getApiV1LivechatAnalyticsDashboardsAgentsProductivityTotalizers**
> \Swagger\Client\Model\InlineResponse20055 getApiV1LivechatAnalyticsDashboardsAgentsProductivityTotalizers($x_auth_token, $x_user_id, $start, $end, $department_id)

Get Agent Service Time Metrics

Permission required: `view-livechat-manager`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.
$department_id = "department_id_example"; // string | The department ID.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDashboardsAgentsProductivityTotalizers($x_auth_token, $x_user_id, $start, $end, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDashboardsApi->getApiV1LivechatAnalyticsDashboardsAgentsProductivityTotalizers: ', $e->getMessage(), PHP_EOL;
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
 **department_id** | **string**| The department ID. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20055**](../Model/InlineResponse20055.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatAnalyticsDashboardsChartsAgentsStatus**
> \Swagger\Client\Model\InlineResponse20058 getApiV1LivechatAnalyticsDashboardsChartsAgentsStatus($x_auth_token, $x_user_id, $department_id)

Get Status of Agents

Retrieves the number of agents for each status. Permission required: `view-livechat-manager`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$department_id = "department_id_example"; // string | The department ID.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDashboardsChartsAgentsStatus($x_auth_token, $x_user_id, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDashboardsApi->getApiV1LivechatAnalyticsDashboardsChartsAgentsStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **department_id** | **string**| The department ID. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20058**](../Model/InlineResponse20058.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatAnalyticsDashboardsChartsChats**
> \Swagger\Client\Model\InlineResponse20056 getApiV1LivechatAnalyticsDashboardsChartsChats($x_auth_token, $x_user_id, $start, $end, $department_id)

Get Chats Status

Retrieves the status of chats for a specific time duration.  Permission required: `view-livechat-manager`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.
$department_id = "department_id_example"; // string | The department ID.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDashboardsChartsChats($x_auth_token, $x_user_id, $start, $end, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDashboardsApi->getApiV1LivechatAnalyticsDashboardsChartsChats: ', $e->getMessage(), PHP_EOL;
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
 **department_id** | **string**| The department ID. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20056**](../Model/InlineResponse20056.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatAnalyticsDashboardsChartsChatsPerAgent**
> \Swagger\Client\Model\InlineResponse20057 getApiV1LivechatAnalyticsDashboardsChartsChatsPerAgent($x_auth_token, $x_user_id, $start, $end, $department_id)

Get Chat Status of Agents

Retrieves the status of chats per agent for a specific time duration. Permission required: `view-livechat-manager`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.
$department_id = "department_id_example"; // string | The department ID.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDashboardsChartsChatsPerAgent($x_auth_token, $x_user_id, $start, $end, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDashboardsApi->getApiV1LivechatAnalyticsDashboardsChartsChatsPerAgent: ', $e->getMessage(), PHP_EOL;
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
 **department_id** | **string**| The department ID. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20057**](../Model/InlineResponse20057.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatAnalyticsDashboardsChartsChatsPerDepartment**
> \Swagger\Client\Model\InlineResponse20059 getApiV1LivechatAnalyticsDashboardsChartsChatsPerDepartment($x_auth_token, $x_user_id, $start, $end, $department_id)

Get Chats Status for Departments

Retrieves the status of chats for each department. Permission required: `view-livechat-manager`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.
$department_id = "department_id_example"; // string | The department ID.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDashboardsChartsChatsPerDepartment($x_auth_token, $x_user_id, $start, $end, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDashboardsApi->getApiV1LivechatAnalyticsDashboardsChartsChatsPerDepartment: ', $e->getMessage(), PHP_EOL;
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
 **department_id** | **string**| The department ID. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20059**](../Model/InlineResponse20059.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatAnalyticsDashboardsChartsTimings**
> \Swagger\Client\Model\InlineResponse20060 getApiV1LivechatAnalyticsDashboardsChartsTimings($x_auth_token, $x_user_id, $start, $end, $department_id)

Get Chat Times

Permission required: `view-livechat-manager`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.
$department_id = "department_id_example"; // string | The department ID.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDashboardsChartsTimings($x_auth_token, $x_user_id, $start, $end, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDashboardsApi->getApiV1LivechatAnalyticsDashboardsChartsTimings: ', $e->getMessage(), PHP_EOL;
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
 **department_id** | **string**| The department ID. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20060**](../Model/InlineResponse20060.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatAnalyticsDashboardsChatsTotalizers**
> object getApiV1LivechatAnalyticsDashboardsChatsTotalizers($x_auth_token, $x_user_id, $start, $end, $department_id)

Get Chat Metrics

Retrieves information about the chats. Permission required: `view-livechat-manager`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.
$department_id = "department_id_example"; // string | The department ID.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDashboardsChatsTotalizers($x_auth_token, $x_user_id, $start, $end, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDashboardsApi->getApiV1LivechatAnalyticsDashboardsChatsTotalizers: ', $e->getMessage(), PHP_EOL;
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
 **department_id** | **string**| The department ID. | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatAnalyticsDashboardsConversationTotalizers**
> \Swagger\Client\Model\InlineResponse20054 getApiV1LivechatAnalyticsDashboardsConversationTotalizers($x_auth_token, $x_user_id, $start, $end, $department_id)

Get Conversation Metrics

Retrieves metrics about all conversations. Permission required: `view-livechat-manager`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.
$department_id = "department_id_example"; // string | The department ID.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDashboardsConversationTotalizers($x_auth_token, $x_user_id, $start, $end, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDashboardsApi->getApiV1LivechatAnalyticsDashboardsConversationTotalizers: ', $e->getMessage(), PHP_EOL;
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
 **department_id** | **string**| The department ID. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20054**](../Model/InlineResponse20054.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatAnalyticsDashboardsProductivityTotalizers**
> \Swagger\Client\Model\InlineResponse20055 getApiV1LivechatAnalyticsDashboardsProductivityTotalizers($x_auth_token, $x_user_id, $start, $end, $department_id)

Get Chat Metrics by Time

Retrieves the average time for Livechat conversations. Permission required: `view-livechat-manager`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.
$department_id = "department_id_example"; // string | The department ID.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDashboardsProductivityTotalizers($x_auth_token, $x_user_id, $start, $end, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDashboardsApi->getApiV1LivechatAnalyticsDashboardsProductivityTotalizers: ', $e->getMessage(), PHP_EOL;
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
 **department_id** | **string**| The department ID. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20055**](../Model/InlineResponse20055.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

