# Swagger\Client\LivechatVisitorsApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteApiV1LivechatVisitorToken**](LivechatVisitorsApi.md#deleteapiv1livechatvisitortoken) | **DELETE** /api/v1/livechat/visitor/{token} | Delete Visitor
[**getApiV1LivechatVisitorInfo**](LivechatVisitorsApi.md#getapiv1livechatvisitorinfo) | **GET** /api/v1/livechat/visitors.info | Get Visitor Information by ID
[**getApiV1LivechatVisitorToken**](LivechatVisitorsApi.md#getapiv1livechatvisitortoken) | **GET** /api/v1/livechat/visitor/{token} | Get Visitor Information
[**getApiV1LivechatVisitorTokenRoom**](LivechatVisitorsApi.md#getapiv1livechatvisitortokenroom) | **GET** /api/v1/livechat/visitor/{token}/room | Get Open Conversation of a Visitor
[**getApiV1LivechatVisitorsAutocomplete**](LivechatVisitorsApi.md#getapiv1livechatvisitorsautocomplete) | **GET** /api/v1/livechat/visitors.autocomplete | Autocomplete Visitors
[**getApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId**](LivechatVisitorsApi.md#getapiv1livechatvisitorschathistoryroomroomidvisitorvisitorid) | **GET** /api/v1/livechat/visitors.chatHistory/room/{roomId}/visitor/{visitorId} | Get Livechat Visitor Chat History
[**getApiV1LivechatVisitorsPagesVisitedRoomId**](LivechatVisitorsApi.md#getapiv1livechatvisitorspagesvisitedroomid) | **GET** /api/v1/livechat/visitors.pagesVisited/{roomId} | Get Pages Visited by Livechat Visitor
[**getApiV1LivechatVisitorsSearch**](LivechatVisitorsApi.md#getapiv1livechatvisitorssearch) | **GET** /api/v1/livechat/visitors.search | Search Visitors by Term
[**getApiV1LivechatVisitorsSearchChatsRoomRoomIdVisitorVisitorId**](LivechatVisitorsApi.md#getapiv1livechatvisitorssearchchatsroomroomidvisitorvisitorid) | **GET** /api/v1/livechat/visitors.searchChats/room/{roomId}/visitor/{visitorId} | Search Visitor Chat
[**postApiV1LivechatVisitor**](LivechatVisitorsApi.md#postapiv1livechatvisitor) | **POST** /api/v1/livechat/visitor | Register Livechat Visitor
[**postApiV1LivechatVisitorsStatus**](LivechatVisitorsApi.md#postapiv1livechatvisitorsstatus) | **POST** /api/v1/livechat/visitors.status | Set Visitor&#x27;s Status

# **deleteApiV1LivechatVisitorToken**
> \Swagger\Client\Model\InlineResponse200106 deleteApiV1LivechatVisitorToken($token)

Delete Visitor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatVisitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | The visitor token.

try {
    $result = $apiInstance->deleteApiV1LivechatVisitorToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatVisitorsApi->deleteApiV1LivechatVisitorToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| The visitor token. |

### Return type

[**\Swagger\Client\Model\InlineResponse200106**](../Model/InlineResponse200106.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatVisitorInfo**
> \Swagger\Client\Model\InlineResponse200104 getApiV1LivechatVisitorInfo($visitor_id, $x_auth_token, $x_user_id)

Get Visitor Information by ID

Get the information of a specific visitor.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatVisitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$visitor_id = "visitor_id_example"; // string | The visitor ID.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LivechatVisitorInfo($visitor_id, $x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatVisitorsApi->getApiV1LivechatVisitorInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **visitor_id** | **string**| The visitor ID. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |

### Return type

[**\Swagger\Client\Model\InlineResponse200104**](../Model/InlineResponse200104.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatVisitorToken**
> \Swagger\Client\Model\InlineResponse200105 getApiV1LivechatVisitorToken($token)

Get Visitor Information

Get the details of a specific visitor.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatVisitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | The visitor token.

try {
    $result = $apiInstance->getApiV1LivechatVisitorToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatVisitorsApi->getApiV1LivechatVisitorToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| The visitor token. |

### Return type

[**\Swagger\Client\Model\InlineResponse200105**](../Model/InlineResponse200105.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatVisitorTokenRoom**
> \Swagger\Client\Model\InlineResponse200107 getApiV1LivechatVisitorTokenRoom($token, $x_auth_token, $x_user_id)

Get Open Conversation of a Visitor

Retrieve open conversations associated with a particular visitor.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatVisitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | The visitor token.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LivechatVisitorTokenRoom($token, $x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatVisitorsApi->getApiV1LivechatVisitorTokenRoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| The visitor token. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |

### Return type

[**\Swagger\Client\Model\InlineResponse200107**](../Model/InlineResponse200107.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatVisitorsAutocomplete**
> \Swagger\Client\Model\InlineResponse200112 getApiV1LivechatVisitorsAutocomplete($x_auth_token, $x_user_id, $selector)

Autocomplete Visitors

Autocomplete a visitor's name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatVisitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$selector = new \Swagger\Client\Model\null(); //  | Enter the exceptions or the conditions that you want to search for. For example, { \"exceptions\" : [], \"conditions\" : {\"username\": \"guest-5\"}}

try {
    $result = $apiInstance->getApiV1LivechatVisitorsAutocomplete($x_auth_token, $x_user_id, $selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatVisitorsApi->getApiV1LivechatVisitorsAutocomplete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **selector** | [****](../Model/.md)| Enter the exceptions or the conditions that you want to search for. For example, { \&quot;exceptions\&quot; : [], \&quot;conditions\&quot; : {\&quot;username\&quot;: \&quot;guest-5\&quot;}} |

### Return type

[**\Swagger\Client\Model\InlineResponse200112**](../Model/InlineResponse200112.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId**
> \Swagger\Client\Model\InlineResponse200110 getApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId($room_id, $visitor_id, $x_auth_token, $x_user_id, $offset, $count, $sort)

Get Livechat Visitor Chat History

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatVisitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = "room_id_example"; // string | The room ID.
$visitor_id = "visitor_id_example"; // string | The visitor ID.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`

try {
    $result = $apiInstance->getApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId($room_id, $visitor_id, $x_auth_token, $x_user_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatVisitorsApi->getApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **string**| The room ID. |
 **visitor_id** | **string**| The visitor ID. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200110**](../Model/InlineResponse200110.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatVisitorsPagesVisitedRoomId**
> \Swagger\Client\Model\InlineResponse200109 getApiV1LivechatVisitorsPagesVisitedRoomId($room_id, $x_auth_token, $x_user_id)

Get Pages Visited by Livechat Visitor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatVisitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = "room_id_example"; // string | The room ID.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LivechatVisitorsPagesVisitedRoomId($room_id, $x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatVisitorsApi->getApiV1LivechatVisitorsPagesVisitedRoomId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **string**| The room ID. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |

### Return type

[**\Swagger\Client\Model\InlineResponse200109**](../Model/InlineResponse200109.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatVisitorsSearch**
> \Swagger\Client\Model\InlineResponse200108 getApiV1LivechatVisitorsSearch($x_auth_token, $x_user_id, $term, $offset, $count, $sort)

Search Visitors by Term

Search Livechat visitors using a specific term.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatVisitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$term = "term_example"; // string | The visitor's name, username, email, or phone.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`

try {
    $result = $apiInstance->getApiV1LivechatVisitorsSearch($x_auth_token, $x_user_id, $term, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatVisitorsApi->getApiV1LivechatVisitorsSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **term** | **string**| The visitor&#x27;s name, username, email, or phone. |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200108**](../Model/InlineResponse200108.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatVisitorsSearchChatsRoomRoomIdVisitorVisitorId**
> \Swagger\Client\Model\InlineResponse200111 getApiV1LivechatVisitorsSearchChatsRoomRoomIdVisitorVisitorId($room_id, $visitor_id, $x_auth_token, $x_user_id)

Search Visitor Chat

Get the Livechat information of a visitor. This endpoint returns only those chats that are served and closed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatVisitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = "room_id_example"; // string | The room ID.
$visitor_id = "visitor_id_example"; // string | The visitor ID.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LivechatVisitorsSearchChatsRoomRoomIdVisitorVisitorId($room_id, $visitor_id, $x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatVisitorsApi->getApiV1LivechatVisitorsSearchChatsRoomRoomIdVisitorVisitorId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **string**| The room ID. |
 **visitor_id** | **string**| The visitor ID. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |

### Return type

[**\Swagger\Client\Model\InlineResponse200111**](../Model/InlineResponse200111.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatVisitor**
> \Swagger\Client\Model\InlineResponse200104 postApiV1LivechatVisitor($body)

Register Livechat Visitor

Register a visitor's information before creating a new Omnichannel room. You can set basic information such as name, phone, custom fields, and the initial department.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatVisitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LivechatVisitorBody(); // \Swagger\Client\Model\LivechatVisitorBody | 

try {
    $result = $apiInstance->postApiV1LivechatVisitor($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatVisitorsApi->postApiV1LivechatVisitor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LivechatVisitorBody**](../Model/LivechatVisitorBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200104**](../Model/InlineResponse200104.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatVisitorsStatus**
> \Swagger\Client\Model\InlineResponse200113 postApiV1LivechatVisitorsStatus($body)

Set Visitor's Status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatVisitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LivechatVisitorsStatusBody(); // \Swagger\Client\Model\LivechatVisitorsStatusBody | 

try {
    $result = $apiInstance->postApiV1LivechatVisitorsStatus($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatVisitorsApi->postApiV1LivechatVisitorsStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LivechatVisitorsStatusBody**](../Model/LivechatVisitorsStatusBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200113**](../Model/InlineResponse200113.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

