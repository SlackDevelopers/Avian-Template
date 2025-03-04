# Swagger\Client\ChannelsEngagementApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1EngagementDashboardChannelsList**](ChannelsEngagementApi.md#getapiv1engagementdashboardchannelslist) | **GET** /api/v1/engagement-dashboard/channels/list | Get Channels Engagement

# **getApiV1EngagementDashboardChannelsList**
> \Swagger\Client\Model\InlineResponse20010 getApiV1EngagementDashboardChannelsList($x_auth_token, $x_user_id, $start, $end, $count, $offset, $hide_rooms_with_no_activity)

Get Channels Engagement

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieve all channels and the number of messages in each channel within a specific period.  Permission required: `view-engagement-dashboard`   ### Changelog | Version      | Description |  | ---------------- | ------------| |3.1.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The token of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The user ID of the authenticated user.
$start = "start_example"; // string | The start date.
$end = "end_example"; // string | The end date.
$count = 56; // int | The number of items to return.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return `count` items, skipping the first `offset` items.
$hide_rooms_with_no_activity = true; // bool | Enable this option to remove rooms without any activity from the response. This parameter has been deprecated and is scheduled for removal in the 7.0.0 <a href=\"https://github.com/RocketChat/Rocket.Chat/releases\" target=\"_blank\">release</a>. After the removal, this endpoint will automatically omit such inactive rooms from the response.

try {
    $result = $apiInstance->getApiV1EngagementDashboardChannelsList($x_auth_token, $x_user_id, $start, $end, $count, $offset, $hide_rooms_with_no_activity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsEngagementApi->getApiV1EngagementDashboardChannelsList: ', $e->getMessage(), PHP_EOL;
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
 **count** | **int**| The number of items to return. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return &#x60;count&#x60; items, skipping the first &#x60;offset&#x60; items. | [optional]
 **hide_rooms_with_no_activity** | **bool**| Enable this option to remove rooms without any activity from the response. This parameter has been deprecated and is scheduled for removal in the 7.0.0 &lt;a href&#x3D;\&quot;https://github.com/RocketChat/Rocket.Chat/releases\&quot; target&#x3D;\&quot;_blank\&quot;&gt;release&lt;/a&gt;. After the removal, this endpoint will automatically omit such inactive rooms from the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

