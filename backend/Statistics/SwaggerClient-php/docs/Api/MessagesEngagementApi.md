# Swagger\Client\MessagesEngagementApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1EngagementDashboardMessagesMessagesSent**](MessagesEngagementApi.md#getapiv1engagementdashboardmessagesmessagessent) | **GET** /api/v1/engagement-dashboard/messages/messages-sent | Get Number of Sent Messages
[**getApiV1EngagementDashboardMessagesOrigin**](MessagesEngagementApi.md#getapiv1engagementdashboardmessagesorigin) | **GET** /api/v1/engagement-dashboard/messages/origin | Get Origin of Message Sent
[**getApiV1EngagementDashboardMessagesTopFivePopularChannels**](MessagesEngagementApi.md#getapiv1engagementdashboardmessagestopfivepopularchannels) | **GET** /api/v1/engagement-dashboard/messages/top-five-popular-channels | Get the Most Popular Channels

# **getApiV1EngagementDashboardMessagesMessagesSent**
> \Swagger\Client\Model\InlineResponse2007 getApiV1EngagementDashboardMessagesMessagesSent($x_auth_token, $x_user_id, $start, $end)

Get Number of Sent Messages

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieve the number of messages sent daily during a specific period.  Permission required: `view-engagement-dashboard`   ### Changelog | Version      | Description |  | ---------------- | ------------| |3.1.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MessagesEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The token of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The user ID of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.

try {
    $result = $apiInstance->getApiV1EngagementDashboardMessagesMessagesSent($x_auth_token, $x_user_id, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesEngagementApi->getApiV1EngagementDashboardMessagesMessagesSent: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1EngagementDashboardMessagesOrigin**
> \Swagger\Client\Model\InlineResponse2008 getApiV1EngagementDashboardMessagesOrigin($x_auth_token, $x_user_id, $start, $end)

Get Origin of Message Sent

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Get the origin of messages sent during a specific period. It highlights the number of messages sent in private channels, private chats, and public channels.  Permission required: `view-engagement-dashboard`   ### Changelog | Version      | Description |  | ---------------- | ------------| |3.1.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MessagesEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The token of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The user ID of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.

try {
    $result = $apiInstance->getApiV1EngagementDashboardMessagesOrigin($x_auth_token, $x_user_id, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesEngagementApi->getApiV1EngagementDashboardMessagesOrigin: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1EngagementDashboardMessagesTopFivePopularChannels**
> \Swagger\Client\Model\InlineResponse2009 getApiV1EngagementDashboardMessagesTopFivePopularChannels($x_auth_token, $x_user_id, $start, $end)

Get the Most Popular Channels

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieves the top 5 popular channels in your workspace by the number of messages sent. It highlights the number of messages sent in private channels, private chats, and public channels.   Permission required: `view-engagement-dashboard`   ### Changelog | Version      | Description |  | ---------------- | ------------| |3.1.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MessagesEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The token of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The user ID of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.

try {
    $result = $apiInstance->getApiV1EngagementDashboardMessagesTopFivePopularChannels($x_auth_token, $x_user_id, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesEngagementApi->getApiV1EngagementDashboardMessagesTopFivePopularChannels: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

