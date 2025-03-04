# Swagger\Client\LivechatDepartmentsApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteApiV1LivechatDepartmentId**](LivechatDepartmentsApi.md#deleteapiv1livechatdepartmentid) | **DELETE** /api/v1/livechat/department/{_id} | Remove Department
[**getApiV1LivechatAnalyticsDepartmentsAmountOfChats**](LivechatDepartmentsApi.md#getapiv1livechatanalyticsdepartmentsamountofchats) | **GET** /api/v1/livechat/analytics/departments/amount-of-chats | Get Number of Chats
[**getApiV1LivechatAnalyticsDepartmentsAverageChatDurationTime**](LivechatDepartmentsApi.md#getapiv1livechatanalyticsdepartmentsaveragechatdurationtime) | **GET** /api/v1/livechat/analytics/departments/average-chat-duration-time | Get Average Chat Duration
[**getApiV1LivechatAnalyticsDepartmentsAverageServiceTime**](LivechatDepartmentsApi.md#getapiv1livechatanalyticsdepartmentsaverageservicetime) | **GET** /api/v1/livechat/analytics/departments/average-service-time | Get Average Service Time
[**getApiV1LivechatAnalyticsDepartmentsAverageWaitingTime**](LivechatDepartmentsApi.md#getapiv1livechatanalyticsdepartmentsaveragewaitingtime) | **GET** /api/v1/livechat/analytics/departments/average-waiting-time | Get Average Waiting Time
[**getApiV1LivechatAnalyticsDepartmentsPercentageAbandonedChats**](LivechatDepartmentsApi.md#getapiv1livechatanalyticsdepartmentspercentageabandonedchats) | **GET** /api/v1/livechat/analytics/departments/percentage-abandoned-chats | Get Percentage of Abandoned Chats
[**getApiV1LivechatAnalyticsDepartmentsTotalAbandonedChats**](LivechatDepartmentsApi.md#getapiv1livechatanalyticsdepartmentstotalabandonedchats) | **GET** /api/v1/livechat/analytics/departments/total-abandoned-chats | Get Total Abandoned Chats
[**getApiV1LivechatAnalyticsDepartmentsTotalServiceTime**](LivechatDepartmentsApi.md#getapiv1livechatanalyticsdepartmentstotalservicetime) | **GET** /api/v1/livechat/analytics/departments/total-service-time | Get Total Service Time
[**getApiV1LivechatAnalyticsDepartmentsTotalTransferredChats**](LivechatDepartmentsApi.md#getapiv1livechatanalyticsdepartmentstotaltransferredchats) | **GET** /api/v1/livechat/analytics/departments/total-transferred-chats | Get Total Transferred Chats
[**getApiV1LivechatDepartment**](LivechatDepartmentsApi.md#getapiv1livechatdepartment) | **GET** /api/v1/livechat/department | Get List of Departments
[**getApiV1LivechatDepartmentAutocomplete**](LivechatDepartmentsApi.md#getapiv1livechatdepartmentautocomplete) | **GET** /api/v1/livechat/department.autocomplete | Autocomplete Department
[**getApiV1LivechatDepartmentId**](LivechatDepartmentsApi.md#getapiv1livechatdepartmentid) | **GET** /api/v1/livechat/department/{_id} | Get Department Information
[**getApiV1LivechatDepartmentIdAgents**](LivechatDepartmentsApi.md#getapiv1livechatdepartmentidagents) | **GET** /api/v1/livechat/department/{_id}/agents | Get Agents of Department
[**getApiV1LivechatDepartmentListByIds**](LivechatDepartmentsApi.md#getapiv1livechatdepartmentlistbyids) | **GET** /api/v1/livechat/department.listByIds | Get Departments by ID
[**getApiV1LivechatDepartmentsAvailableByUnitUnitId**](LivechatDepartmentsApi.md#getapiv1livechatdepartmentsavailablebyunitunitid) | **GET** /api/v1/livechat/departments.available-by-unit/{unitId} | Get Available Departments by Unit ID
[**getApiV1LivechatDepartmentsByUnitUnitId**](LivechatDepartmentsApi.md#getapiv1livechatdepartmentsbyunitunitid) | **GET** /api/v1/livechat/departments.by-unit/{unitid} | Get Departments by Unit ID
[**postApiV1LivechatDepartment**](LivechatDepartmentsApi.md#postapiv1livechatdepartment) | **POST** /api/v1/livechat/department | Register New Department
[**postApiV1LivechatDepartmentIdAgents**](LivechatDepartmentsApi.md#postapiv1livechatdepartmentidagents) | **POST** /api/v1/livechat/department/{_id}/agents | Update Agents of Department
[**putApiV1LivechatDepartmentId**](LivechatDepartmentsApi.md#putapiv1livechatdepartmentid) | **PUT** /api/v1/livechat/department/{_id} | Update Department

# **deleteApiV1LivechatDepartmentId**
> \Swagger\Client\Model\InlineResponse2003 deleteApiV1LivechatDepartmentId($x_auth_token, $x_user_id, $_id)

Remove Department

At least one of the following permissions is required: * `manage-livechat-departments` * `remove-livechat-department`  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.42.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$_id = "_id_example"; // string | The department ID.

try {
    $result = $apiInstance->deleteApiV1LivechatDepartmentId($x_auth_token, $x_user_id, $_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->deleteApiV1LivechatDepartmentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **_id** | **string**| The department ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatAnalyticsDepartmentsAmountOfChats**
> \Swagger\Client\Model\InlineResponse20030 getApiV1LivechatAnalyticsDepartmentsAmountOfChats($x_auth_token, $x_user_id, $start, $end, $offset, $count, $answered, $department_id)

Get Number of Chats

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Gives the number of chat rooms by department. Permission required: `view-livechat-manager`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$answered = true; // bool | Whether the chats are answered or not.
$department_id = "department_id_example"; // string | Enter the department ID for which you want the number of chats.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDepartmentsAmountOfChats($x_auth_token, $x_user_id, $start, $end, $offset, $count, $answered, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatAnalyticsDepartmentsAmountOfChats: ', $e->getMessage(), PHP_EOL;
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
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **answered** | **bool**| Whether the chats are answered or not. | [optional]
 **department_id** | **string**| Enter the department ID for which you want the number of chats. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatAnalyticsDepartmentsAverageChatDurationTime**
> \Swagger\Client\Model\InlineResponse20032 getApiV1LivechatAnalyticsDepartmentsAverageChatDurationTime($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id)

Get Average Chat Duration

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Returns the average chat duration of each department. Permission required: `view-livechat-manager`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$department_id = "department_id_example"; // string | Enter the department ID for which you want the average chat duration.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDepartmentsAverageChatDurationTime($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatAnalyticsDepartmentsAverageChatDurationTime: ', $e->getMessage(), PHP_EOL;
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
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **department_id** | **string**| Enter the department ID for which you want the average chat duration. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatAnalyticsDepartmentsAverageServiceTime**
> \Swagger\Client\Model\InlineResponse20031 getApiV1LivechatAnalyticsDepartmentsAverageServiceTime($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id)

Get Average Service Time

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Returns average service time (in seconds) for chats by department. Permission required: `view-livechat-manager`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$department_id = "department_id_example"; // string | Enter the department ID for which you want the average service time.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDepartmentsAverageServiceTime($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatAnalyticsDepartmentsAverageServiceTime: ', $e->getMessage(), PHP_EOL;
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
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **department_id** | **string**| Enter the department ID for which you want the average service time. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatAnalyticsDepartmentsAverageWaitingTime**
> \Swagger\Client\Model\InlineResponse20033 getApiV1LivechatAnalyticsDepartmentsAverageWaitingTime($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id)

Get Average Waiting Time

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Gives the average visitor waiting time (in seconds) by department. Permission required: `view-livechat-manager`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$department_id = "department_id_example"; // string | Enter the department ID for which you want the average waiting time.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDepartmentsAverageWaitingTime($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatAnalyticsDepartmentsAverageWaitingTime: ', $e->getMessage(), PHP_EOL;
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
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **department_id** | **string**| Enter the department ID for which you want the average waiting time. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatAnalyticsDepartmentsPercentageAbandonedChats**
> \Swagger\Client\Model\InlineResponse20035 getApiV1LivechatAnalyticsDepartmentsPercentageAbandonedChats($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id)

Get Percentage of Abandoned Chats

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Gives the percentage of abandoned chats per department. Permission required: `view-livechat-manager`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$department_id = "department_id_example"; // string | Enter the department ID for which you want the percentage of abandoned chats.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDepartmentsPercentageAbandonedChats($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatAnalyticsDepartmentsPercentageAbandonedChats: ', $e->getMessage(), PHP_EOL;
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
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **department_id** | **string**| Enter the department ID for which you want the percentage of abandoned chats. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatAnalyticsDepartmentsTotalAbandonedChats**
> \Swagger\Client\Model\InlineResponse20034 getApiV1LivechatAnalyticsDepartmentsTotalAbandonedChats($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id)

Get Total Abandoned Chats

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Gives the total number of abandoned chats (rooms) by department. Permission required: `view-livechat-manager`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$department_id = "department_id_example"; // string | Enter the department ID for which you want the total abandoned chats.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDepartmentsTotalAbandonedChats($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatAnalyticsDepartmentsTotalAbandonedChats: ', $e->getMessage(), PHP_EOL;
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
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **department_id** | **string**| Enter the department ID for which you want the total abandoned chats. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatAnalyticsDepartmentsTotalServiceTime**
> \Swagger\Client\Model\InlineResponse206 getApiV1LivechatAnalyticsDepartmentsTotalServiceTime($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id)

Get Total Service Time

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Gives the total service time (in seconds) by department. Permission required: `view-livechat-manager`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$department_id = "department_id_example"; // string | Enter the department ID for which you want the total service time.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDepartmentsTotalServiceTime($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatAnalyticsDepartmentsTotalServiceTime: ', $e->getMessage(), PHP_EOL;
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
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **department_id** | **string**| Enter the department ID for which you want the total service time. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse206**](../Model/InlineResponse206.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatAnalyticsDepartmentsTotalTransferredChats**
> \Swagger\Client\Model\InlineResponse2061 getApiV1LivechatAnalyticsDepartmentsTotalTransferredChats($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id)

Get Total Transferred Chats

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Gives the total number of transferred chats by department. Permission required: `view-livechat-manager`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$department_id = "department_id_example"; // string | Enter the department ID for which you want the total transferred chats.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDepartmentsTotalTransferredChats($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatAnalyticsDepartmentsTotalTransferredChats: ', $e->getMessage(), PHP_EOL;
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
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **department_id** | **string**| Enter the department ID for which you want the total transferred chats. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2061**](../Model/InlineResponse2061.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatDepartment**
> \Swagger\Client\Model\InlineResponse20025 getApiV1LivechatDepartment($x_auth_token, $x_user_id, $text, $enabled, $show_archived, $only_my_departments, $exclude_department_id, $offset, $count, $sort)

Get List of Departments

Get a list of the departments. At least one of the following permissions is required: * `view-livechat-departments` * `view-l-room`  ### Changelog | Version      | Description |  | ---------------- | ------------| |2.2.0             | Added support to pagination    | |0.42.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$text = "text_example"; // string | Filter the result with any text.
$enabled = true; // bool | Filter the result to only show enabled departments. The value can be boolean true or false.
$show_archived = true; // bool | You can include the archived departments in the result. The value can be boolean true or false.
$only_my_departments = true; // bool | This parameter is for users with managers or admin roles. It only displays the departments that you are an agent of.
$exclude_department_id = "exclude_department_id_example"; // string | The department ID that you want to exclude from the result.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`

try {
    $result = $apiInstance->getApiV1LivechatDepartment($x_auth_token, $x_user_id, $text, $enabled, $show_archived, $only_my_departments, $exclude_department_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatDepartment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **text** | **string**| Filter the result with any text. | [optional]
 **enabled** | **bool**| Filter the result to only show enabled departments. The value can be boolean true or false. | [optional]
 **show_archived** | **bool**| You can include the archived departments in the result. The value can be boolean true or false. | [optional]
 **only_my_departments** | **bool**| This parameter is for users with managers or admin roles. It only displays the departments that you are an agent of. | [optional]
 **exclude_department_id** | **string**| The department ID that you want to exclude from the result. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatDepartmentAutocomplete**
> object getApiV1LivechatDepartmentAutocomplete($x_auth_token, $x_user_id, $selector, $only_my_departments, $show_archived)

Autocomplete Department

Autocomplete the department name.  At least one of the following permissions is required:   * `view-livechat-departments`   * `view-l-room`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$selector = "selector_example"; // string | Enter the exceptions or the conditions that you want to search for.
$only_my_departments = true; // bool | Only displays the departments that you are assigned to. The value can be boolean `true` or `false`
$show_archived = true; // bool | The result includes archived departments. The value can be Boolean `true` or `false`.

try {
    $result = $apiInstance->getApiV1LivechatDepartmentAutocomplete($x_auth_token, $x_user_id, $selector, $only_my_departments, $show_archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatDepartmentAutocomplete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **selector** | **string**| Enter the exceptions or the conditions that you want to search for. |
 **only_my_departments** | **bool**| Only displays the departments that you are assigned to. The value can be boolean &#x60;true&#x60; or &#x60;false&#x60; | [optional]
 **show_archived** | **bool**| The result includes archived departments. The value can be Boolean &#x60;true&#x60; or &#x60;false&#x60;. | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatDepartmentId**
> \Swagger\Client\Model\InlineResponse20027 getApiV1LivechatDepartmentId($x_auth_token, $x_user_id, $_id, $include_agents)

Get Department Information

Get information about a specific department using the department ID. At least one of the following permissions is required: * `view-livechat-departments` * `view-l-room`  ### Changelog | Version      | Description |  | ---------------- | ------------| |2.2.0             | Added `includeAgents` query parameter| |0.42.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$_id = "_id_example"; // string | The department ID.
$include_agents = true; // bool | If agents should be included in the result. By default, the value is true and the list of agents is returned. The agents field will only be returned if the user has the `view-livechat-departments` permission.

try {
    $result = $apiInstance->getApiV1LivechatDepartmentId($x_auth_token, $x_user_id, $_id, $include_agents);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatDepartmentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **_id** | **string**| The department ID. |
 **include_agents** | **bool**| If agents should be included in the result. By default, the value is true and the list of agents is returned. The agents field will only be returned if the user has the &#x60;view-livechat-departments&#x60; permission. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatDepartmentIdAgents**
> \Swagger\Client\Model\InlineResponse20028 getApiV1LivechatDepartmentIdAgents($x_auth_token, $x_user_id, $_id, $offset, $count, $sort)

Get Agents of Department

Get the agents of a specific department. At least one of the following permissions is required:   * `view-livechat-departments`   * `view-l-room`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$_id = "_id_example"; // string | The department ID.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`

try {
    $result = $apiInstance->getApiV1LivechatDepartmentIdAgents($x_auth_token, $x_user_id, $_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatDepartmentIdAgents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **_id** | **string**| The department ID. |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatDepartmentListByIds**
> \Swagger\Client\Model\InlineResponse20029 getApiV1LivechatDepartmentListByIds($x_auth_token, $x_user_id, $ids)

Get Departments by ID

Get a list of departments by department IDs. At least one of the following permissions is required:   * `view-livechat-departments`   * `view-l-room`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$ids = "ids_example"; // string | The department ID.

try {
    $result = $apiInstance->getApiV1LivechatDepartmentListByIds($x_auth_token, $x_user_id, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatDepartmentListByIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **ids** | **string**| The department ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatDepartmentsAvailableByUnitUnitId**
> \Swagger\Client\Model\InlineResponse20036 getApiV1LivechatDepartmentsAvailableByUnitUnitId($x_auth_token, $x_user_id, $unit_id)

Get Available Departments by Unit ID

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>   Gives departments that have not been associated to another unit yet. This endpoint has been renamed to <a href=\"https://developer.rocket.chat/apidocs/get-departments-by-unit-id-1\" target=\"_blank\">Get Available Departments by Unit Id</a> from Rocket.Chat 5.0.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$unit_id = "unit_id_example"; // string | The unit ID.

try {
    $result = $apiInstance->getApiV1LivechatDepartmentsAvailableByUnitUnitId($x_auth_token, $x_user_id, $unit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatDepartmentsAvailableByUnitUnitId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **unit_id** | **string**| The unit ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatDepartmentsByUnitUnitId**
> \Swagger\Client\Model\InlineResponse20037 getApiV1LivechatDepartmentsByUnitUnitId($x_auth_token, $x_user_id, $start, $end, $unitid)

Get Departments by Unit ID

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  <p>Gives departments included in a specific unit ID. This endpoint has been renamed to <a href=\"https://developer.rocket.chat/apidocs/get-departments-by-unit-id-1\" target=\"_blank\">Get Departments by Unit ID</a> as from Rocket.Chat 5.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.
$unitid = "unitid_example"; // string | The unit ID.

try {
    $result = $apiInstance->getApiV1LivechatDepartmentsByUnitUnitId($x_auth_token, $x_user_id, $start, $end, $unitid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatDepartmentsByUnitUnitId: ', $e->getMessage(), PHP_EOL;
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
 **unitid** | **string**| The unit ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatDepartment**
> \Swagger\Client\Model\InlineResponse20026 postApiV1LivechatDepartment($x_auth_token, $x_user_id, $body)

Register New Department

Permission required: `manage-livechat-departments`  ### Changelog | Version      | Description |  | ---------------- | ------------| |1.0.0           | New fields for department updated       |0.42.0          | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\LivechatDepartmentBody(); // \Swagger\Client\Model\LivechatDepartmentBody | 

try {
    $result = $apiInstance->postApiV1LivechatDepartment($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->postApiV1LivechatDepartment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\LivechatDepartmentBody**](../Model/LivechatDepartmentBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatDepartmentIdAgents**
> \Swagger\Client\Model\InlineResponse2003 postApiV1LivechatDepartmentIdAgents($x_auth_token, $x_user_id, $_id, $body)

Update Agents of Department

Update the agents of a specific department. At least one of the following permissions is required:   * `add-livechat-department-agents`   * `manage-livechat-departments`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$_id = "_id_example"; // string | The department ID.
$body = new \Swagger\Client\Model\IdAgentsBody(); // \Swagger\Client\Model\IdAgentsBody | 

try {
    $result = $apiInstance->postApiV1LivechatDepartmentIdAgents($x_auth_token, $x_user_id, $_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->postApiV1LivechatDepartmentIdAgents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **_id** | **string**| The department ID. |
 **body** | [**\Swagger\Client\Model\IdAgentsBody**](../Model/IdAgentsBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putApiV1LivechatDepartmentId**
> \Swagger\Client\Model\InlineResponse20027 putApiV1LivechatDepartmentId($x_auth_token, $x_user_id, $_id, $body)

Update Department

Update the details of a specific department. Permissions required: * `manage-livechat-departments` * To add agents: `add-livechat-department-agents`  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.42.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$_id = "_id_example"; // string | The department ID.
$body = new \Swagger\Client\Model\DepartmentIdBody(); // \Swagger\Client\Model\DepartmentIdBody | 

try {
    $result = $apiInstance->putApiV1LivechatDepartmentId($x_auth_token, $x_user_id, $_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->putApiV1LivechatDepartmentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **_id** | **string**| The department ID. |
 **body** | [**\Swagger\Client\Model\DepartmentIdBody**](../Model/DepartmentIdBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

