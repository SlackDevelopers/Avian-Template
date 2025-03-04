# Swagger\Client\UsersEngagementApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1EngagementDashboardUsersActiveUsers**](UsersEngagementApi.md#getapiv1engagementdashboardusersactiveusers) | **GET** /api/v1/engagement-dashboard/users/active-users | Get Active Users
[**getApiV1EngagementDashboardUsersChatBusierHourlyData**](UsersEngagementApi.md#getapiv1engagementdashboarduserschatbusierhourlydata) | **GET** /api/v1/engagement-dashboard/users/chat-busier/hourly-data | Get Hourly Data When Chat is Busier
[**getApiV1EngagementDashboardUsersChatBusierWeeklyData**](UsersEngagementApi.md#getapiv1engagementdashboarduserschatbusierweeklydata) | **GET** /api/v1/engagement-dashboard/users/chat-busier/weekly-data | Get Weekly Data When Chat is Busier
[**getApiV1EngagementDashboardUsersNewUsers**](UsersEngagementApi.md#getapiv1engagementdashboardusersnewusers) | **GET** /api/v1/engagement-dashboard/users/new-users | Get New Users
[**getApiV1EngagementDashboardUsersUsersByTimeOfTheDayInAWeek**](UsersEngagementApi.md#getapiv1engagementdashboardusersusersbytimeofthedayinaweek) | **GET** /api/v1/engagement-dashboard/users/users-by-time-of-the-day-in-a-week | Get User By Time of the Day

# **getApiV1EngagementDashboardUsersActiveUsers**
> \Swagger\Client\Model\InlineResponse2003 getApiV1EngagementDashboardUsersActiveUsers($x_user_id, $x_auth_token, $start, $end)

Get Active Users

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieve the metrics of active users in the workspace during a specific period.  Permission required: `view-engagement-dashboard`   ### Changelog | Version      | Description |  | ---------------- | ------------| |3.1.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID of the authenticated user.
$x_auth_token = "x_auth_token_example"; // string | The token of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.

try {
    $result = $apiInstance->getApiV1EngagementDashboardUsersActiveUsers($x_user_id, $x_auth_token, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersEngagementApi->getApiV1EngagementDashboardUsersActiveUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID of the authenticated user. |
 **x_auth_token** | **string**| The token of the authenticated user. |
 **start** | **string**| The start date. |
 **end** | **string**| The end date. |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1EngagementDashboardUsersChatBusierHourlyData**
> \Swagger\Client\Model\InlineResponse2005 getApiV1EngagementDashboardUsersChatBusierHourlyData($x_auth_token, $x_user_id, $start)

Get Hourly Data When Chat is Busier

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieve hourly data when chat is busier.  Permission required: `view-engagement-dashboard`   ### Changelog | Version      | Description |  | ---------------- | ------------| |3.1.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The token of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The user ID of the authenticated user.
$start = "start_example"; // string | The start date.

try {
    $result = $apiInstance->getApiV1EngagementDashboardUsersChatBusierHourlyData($x_auth_token, $x_user_id, $start);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersEngagementApi->getApiV1EngagementDashboardUsersChatBusierHourlyData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The token of the authenticated user. |
 **x_user_id** | **string**| The user ID of the authenticated user. |
 **start** | **string**| The start date. |

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1EngagementDashboardUsersChatBusierWeeklyData**
> \Swagger\Client\Model\InlineResponse2006 getApiV1EngagementDashboardUsersChatBusierWeeklyData($x_auth_token, $x_user_id, $start)

Get Weekly Data When Chat is Busier

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieves weekly data when chat is busier.   Permission required: `view-engagement-dashboard`   ### Changelog | Version      | Description |  | ---------------- | ------------| |3.1.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The token of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The user ID of the authenticated user.
$start = "start_example"; // string | The start date.

try {
    $result = $apiInstance->getApiV1EngagementDashboardUsersChatBusierWeeklyData($x_auth_token, $x_user_id, $start);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersEngagementApi->getApiV1EngagementDashboardUsersChatBusierWeeklyData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The token of the authenticated user. |
 **x_user_id** | **string**| The user ID of the authenticated user. |
 **start** | **string**| The start date. |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1EngagementDashboardUsersNewUsers**
> \Swagger\Client\Model\InlineResponse2002 getApiV1EngagementDashboardUsersNewUsers($x_auth_token, $x_user_id, $start, $end)

Get New Users

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieve the metrics of newly registered users during a specific period.  Permission required: `view-engagement-dashboard`  ### Changelog | Version      | Description |  | ---------------- | ------------| |3.1.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The token of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The user ID of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.

try {
    $result = $apiInstance->getApiV1EngagementDashboardUsersNewUsers($x_auth_token, $x_user_id, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersEngagementApi->getApiV1EngagementDashboardUsersNewUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The token of the authenticated user. |
 **x_user_id** | **string**| The user ID of the authenticated user. |
 **start** | **string**| The start date. |
 **end** | **string**| The end date. |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1EngagementDashboardUsersUsersByTimeOfTheDayInAWeek**
> \Swagger\Client\Model\InlineResponse2004 getApiV1EngagementDashboardUsersUsersByTimeOfTheDayInAWeek($x_auth_token, $x_user_id, $start, $end)

Get User By Time of the Day

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieve users by hours at a particular time of the day in a week.  Permission required: `view-engagement-dashboard`    ### Changelog | Version      | Description |  | ---------------- | ------------| |3.1.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The token of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The user ID of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.

try {
    $result = $apiInstance->getApiV1EngagementDashboardUsersUsersByTimeOfTheDayInAWeek($x_auth_token, $x_user_id, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersEngagementApi->getApiV1EngagementDashboardUsersUsersByTimeOfTheDayInAWeek: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The token of the authenticated user. |
 **x_user_id** | **string**| The user ID of the authenticated user. |
 **start** | **string**| The start date. |
 **end** | **string**| The end date. |

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

