# Swagger\Client\EmailInboxApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteApiV1EmailInboxId**](EmailInboxApi.md#deleteapiv1emailinboxid) | **DELETE** /api/v1/email-inbox/{_id} | Delete Email Inbox by ID
[**getApiV1EmailInboxId**](EmailInboxApi.md#getapiv1emailinboxid) | **GET** /api/v1/email-inbox/{_id} | Email Inbox by ID
[**getApiV1EmailInboxList**](EmailInboxApi.md#getapiv1emailinboxlist) | **GET** /api/v1/email-inbox.list | List Email Inbox
[**getApiV1EmailInboxSearch**](EmailInboxApi.md#getapiv1emailinboxsearch) | **GET** /api/v1/email-inbox.search | Search Email Inbox
[**getApiV1EmailInboxSendTestId**](EmailInboxApi.md#getapiv1emailinboxsendtestid) | **GET** /api/v1/email-inbox.send-test/{_id} | Send test email to email inbox
[**postApiV1EmailInbox**](EmailInboxApi.md#postapiv1emailinbox) | **POST** /api/v1/email-inbox | Set Email Inbox

# **deleteApiV1EmailInboxId**
> \Swagger\Client\Model\InlineResponse2004 deleteApiV1EmailInboxId($x_auth_token, $x_user_id, $_id)

Delete Email Inbox by ID

Deletes email inbox using ID.  Permissions required: `manage-email-inbox` ### Changelog | Version      | Description | | ---------------- | ------------| |3.11.0-rc.0         | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailInboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$_id = "_id_example"; // string | Email inbox ID

try {
    $result = $apiInstance->deleteApiV1EmailInboxId($x_auth_token, $x_user_id, $_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailInboxApi->deleteApiV1EmailInboxId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **_id** | **string**| Email inbox ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1EmailInboxId**
> \Swagger\Client\Model\InlineResponse2005 getApiV1EmailInboxId($x_auth_token, $x_user_id, $_id)

Email Inbox by ID

Gets email inbox by ID.  Permissions required: `manage-email-inbox` ### Changelog | Version      | Description | | ---------------- | ------------| |5.3.0       | Not Found Error Added       | |3.11.0-rc.0         | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailInboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$_id = "_id_example"; // string | Email inbox ID

try {
    $result = $apiInstance->getApiV1EmailInboxId($x_auth_token, $x_user_id, $_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailInboxApi->getApiV1EmailInboxId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **_id** | **string**| Email inbox ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1EmailInboxList**
> \Swagger\Client\Model\InlineResponse2003 getApiV1EmailInboxList($x_auth_token, $x_user_id, $offset, $sort, $count, $query, $fields)

List Email Inbox

Gets email inbox list.  Permissions required:- `manage-email-inbox`  ### Changelog | Version      | Description | | ---------------- | ------------| |3.11.0-rc.0         | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailInboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$count = 56; // int | The number of items to return.
$query = new \Swagger\Client\Model\null(); //  | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query=`{ \"name\": { \"$regex\": \"g\" } }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$fields = "fields_example"; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: `fields={ \"username\": 1 }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.

try {
    $result = $apiInstance->getApiV1EmailInboxList($x_auth_token, $x_user_id, $offset, $sort, $count, $query, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailInboxApi->getApiV1EmailInboxList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **query** | [****](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;&#x60;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: &#x60;fields&#x3D;{ \&quot;username\&quot;: 1 }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1EmailInboxSearch**
> \Swagger\Client\Model\InlineResponse2006 getApiV1EmailInboxSearch($x_auth_token, $x_user_id, $email)

Search Email Inbox

Searches email inbox by email address.  Permissions required: `manage-email-inbox`  ### Changelog | Version      | Description | | ---------------- | ------------| |3.11.0-rc.0         | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailInboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$email = "email_example"; // string | Email inbox address

try {
    $result = $apiInstance->getApiV1EmailInboxSearch($x_auth_token, $x_user_id, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailInboxApi->getApiV1EmailInboxSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **email** | **string**| Email inbox address |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1EmailInboxSendTestId**
> \Swagger\Client\Model\InlineResponse2004 getApiV1EmailInboxSendTestId($x_auth_token, $x_user_id, $_id)

Send test email to email inbox

Send a test email to the inbox. Permissions required: `manage-email-inbox`  ### Changelog | Version      | Description | | ---------------- | ------------| |3.11.0-rc.0         | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailInboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$_id = "_id_example"; // string | Email inbox id

try {
    $result = $apiInstance->getApiV1EmailInboxSendTestId($x_auth_token, $x_user_id, $_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailInboxApi->getApiV1EmailInboxSendTestId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **_id** | **string**| Email inbox id |

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1EmailInbox**
> \Swagger\Client\Model\InlineResponse2004 postApiV1EmailInbox($x_auth_token, $x_user_id, $body)

Set Email Inbox

Sets the email inbox for your server.  Permissions required:- `manage-email-inbox` ### Changelog | Version      | Description | | ---------------- | ------------| |3.11.0-rc.0         | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailInboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1EmailinboxBody(); // \Swagger\Client\Model\V1EmailinboxBody | 

try {
    $result = $apiInstance->postApiV1EmailInbox($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailInboxApi->postApiV1EmailInbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1EmailinboxBody**](../Model/V1EmailinboxBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

