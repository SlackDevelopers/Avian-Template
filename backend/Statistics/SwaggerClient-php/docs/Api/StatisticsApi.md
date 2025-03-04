# Swagger\Client\StatisticsApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1Statistics**](StatisticsApi.md#getapiv1statistics) | **GET** /api/v1/statistics | Get Last Statistics
[**getApiV1StatisticsList**](StatisticsApi.md#getapiv1statisticslist) | **GET** /api/v1/statistics.list | Get Statistics List

# **getApiV1Statistics**
> \Swagger\Client\Model\InlineResponse2001 getApiV1Statistics($x_auth_token, $x_user_id, $refresh)

Get Last Statistics

Statistics about the Rocket.Chat workspace.   Permission required: `view-statistics`   ### Changelog | Version      | Description |  | ---------------- | ------------| |0.51.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The token of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The user ID of the authenticated user.
$refresh = true; // bool | Refresh the statistics.

try {
    $result = $apiInstance->getApiV1Statistics($x_auth_token, $x_user_id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->getApiV1Statistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The token of the authenticated user. |
 **x_user_id** | **string**| The user ID of the authenticated user. |
 **refresh** | **bool**| Refresh the statistics. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1StatisticsList**
> \Swagger\Client\Model\InlineResponse200 getApiV1StatisticsList($x_auth_token, $x_user_id, $count, $offset, $sort, $fields, $query)

Get Statistics List

Get statistics about the Rocket.Chat workspace.   Permission required: `view-statistics`   ### Changelog | Version      | Description |  | ---------------- | ------------| |0.51.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The token of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The user ID of the authenticated user.
$count = 56; // int | The number of items to return.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return `count` items, skipping the first `offset` items.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{\"value\": -1, \"_id\": 1}`
$fields = new \Swagger\Client\Model\null(); //  | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields=`{ \"username\": 1 }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$query = new \Swagger\Client\Model\null(); //  | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query=`{ \"name\": { \"$regex\": \"g\" } }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.

try {
    $result = $apiInstance->getApiV1StatisticsList($x_auth_token, $x_user_id, $count, $offset, $sort, $fields, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->getApiV1StatisticsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The token of the authenticated user. |
 **x_user_id** | **string**| The user ID of the authenticated user. |
 **count** | **int**| The number of items to return. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return &#x60;count&#x60; items, skipping the first &#x60;offset&#x60; items. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional]
 **fields** | [****](../Model/.md)| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;&#x60;{ \&quot;username\&quot;: 1 }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **query** | [****](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;&#x60;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

