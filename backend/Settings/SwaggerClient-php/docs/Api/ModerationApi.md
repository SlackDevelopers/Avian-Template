# Swagger\Client\ModerationApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1ModerationReportInfo**](ModerationApi.md#getapiv1moderationreportinfo) | **GET** /api/v1/moderation.reportInfo | Get Report Information
[**getApiV1ModerationReports**](ModerationApi.md#getapiv1moderationreports) | **GET** /api/v1/moderation.reports | Get Reports of a Message
[**getApiV1ModerationReportsByUsers**](ModerationApi.md#getapiv1moderationreportsbyusers) | **GET** /api/v1/moderation.reportsByUsers | Get Reported Messages
[**getApiV1ModerationUserReportedMessages**](ModerationApi.md#getapiv1moderationuserreportedmessages) | **GET** /api/v1/moderation.user.reportedMessages | Get User&#x27;s Reported Messages
[**postApiV1ModerationDismissReports**](ModerationApi.md#postapiv1moderationdismissreports) | **POST** /api/v1/moderation.dismissReports | Dismiss Reports
[**postApiV1ModerationUserDeleteReportedMessages**](ModerationApi.md#postapiv1moderationuserdeletereportedmessages) | **POST** /api/v1/moderation.user.deleteReportedMessages | Delete Reported Messages of a User

# **getApiV1ModerationReportInfo**
> \Swagger\Client\Model\InlineResponse2002 getApiV1ModerationReportInfo($x_user_id, $x_auth_token, $report_id)

Get Report Information

Get more details of a single report.  Permission required: `view-moderation-console` ### Changelog | Version      | Description | | ---------------- | ------------| |6.2.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$report_id = "report_id_example"; // string | The ID of the report to fetch details for.

try {
    $result = $apiInstance->getApiV1ModerationReportInfo($x_user_id, $x_auth_token, $report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getApiV1ModerationReportInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **report_id** | **string**| The ID of the report to fetch details for. |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ModerationReports**
> \Swagger\Client\Model\InlineResponse20019 getApiV1ModerationReports($x_user_id, $x_auth_token, $msg_id, $offset, $count, $sort)

Get Reports of a Message

Retrieve all the reports of a single message. A message can have many reports. Permission required: `view-moderation-console` ### Changelog | Version      | Description | | ---------------- | ------------| |6.2.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$msg_id = "msg_id_example"; // string | The ID of the message to fetch reports for.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | How many items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}

try {
    $result = $apiInstance->getApiV1ModerationReports($x_user_id, $x_auth_token, $msg_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getApiV1ModerationReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **msg_id** | **string**| The ID of the message to fetch reports for. |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| How many items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ModerationReportsByUsers**
> \Swagger\Client\Model\InlineResponse20017 getApiV1ModerationReportsByUsers($x_user_id, $x_auth_token, $oldest, $latest, $offset, $count, $sort)

Get Reported Messages

Retrieves all the reported messages grouped by users. Permission required: `view-moderation-console` ### Changelog | Version      | Description | | ---------------- | ------------| |6.2.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$oldest = "oldest_example"; // string | It represents the oldest point in time for which you want to retrieve moderation reports.
$latest = "latest_example"; // string | It represents the oldest point in time for which you want to retrieve moderation reports.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | How many items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}

try {
    $result = $apiInstance->getApiV1ModerationReportsByUsers($x_user_id, $x_auth_token, $oldest, $latest, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getApiV1ModerationReportsByUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **oldest** | **string**| It represents the oldest point in time for which you want to retrieve moderation reports. | [optional]
 **latest** | **string**| It represents the oldest point in time for which you want to retrieve moderation reports. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| How many items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ModerationUserReportedMessages**
> \Swagger\Client\Model\InlineResponse20018 getApiV1ModerationUserReportedMessages($x_user_id, $x_auth_token, $user_id, $offset, $count, $sort)

Get User's Reported Messages

Retrieve all reported messages of a user. Permission required: `view-moderation-console` ### Changelog | Version      | Description | | ---------------- | ------------| |6.2.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$user_id = "user_id_example"; // string | The id of the user whose reported messages should be retrieved.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | How many items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}

try {
    $result = $apiInstance->getApiV1ModerationUserReportedMessages($x_user_id, $x_auth_token, $user_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getApiV1ModerationUserReportedMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **user_id** | **string**| The id of the user whose reported messages should be retrieved. |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| How many items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ModerationDismissReports**
> \Swagger\Client\Model\InlineResponse2002 postApiV1ModerationDismissReports($x_user_id, $x_auth_token, $body)

Dismiss Reports

You can dismiss all the reports of a particular user by the `userId`. You can also dismiss the report of a message by the `msgId`. Permission required: `manage-moderation-actions` ### Changelog | Version      | Description | | ---------------- | ------------| |6.2.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$body = new \Swagger\Client\Model\V1ModerationDismissReportsBody(); // \Swagger\Client\Model\V1ModerationDismissReportsBody | 

try {
    $result = $apiInstance->postApiV1ModerationDismissReports($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->postApiV1ModerationDismissReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **body** | [**\Swagger\Client\Model\V1ModerationDismissReportsBody**](../Model/V1ModerationDismissReportsBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ModerationUserDeleteReportedMessages**
> \Swagger\Client\Model\InlineResponse2002 postApiV1ModerationUserDeleteReportedMessages($x_user_id, $x_auth_token, $body)

Delete Reported Messages of a User

Delete all the reports of messages that belongs to user. Permission required: `manage-moderation-actions` ### Changelog | Version      | Description | | ---------------- | ------------| |6.2.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$body = new \Swagger\Client\Model\V1ModerationUserDeleteReportedMessagesBody(); // \Swagger\Client\Model\V1ModerationUserDeleteReportedMessagesBody | 

try {
    $result = $apiInstance->postApiV1ModerationUserDeleteReportedMessages($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->postApiV1ModerationUserDeleteReportedMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **body** | [**\Swagger\Client\Model\V1ModerationUserDeleteReportedMessagesBody**](../Model/V1ModerationUserDeleteReportedMessagesBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

