# Swagger\Client\LivechatContactsApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1ContactSearch**](LivechatContactsApi.md#getapiv1contactsearch) | **GET** /api/v1/omnichannel/contact.search | Search Contacts
[**getApiV1OmnichannelContactsChannels**](LivechatContactsApi.md#getapiv1omnichannelcontactschannels) | **GET** /api/v1/omnichannel/contacts.channels | Get channels grouped by contact name
[**getApiV1OmnichannelContactsCheckExistence**](LivechatContactsApi.md#getapiv1omnichannelcontactscheckexistence) | **GET** /api/v1/omnichannel/contacts.checkExistence | Check Contacts Existence
[**getApiV1OmnichannelContactsGet**](LivechatContactsApi.md#getapiv1omnichannelcontactsget) | **GET** /api/v1/omnichannel/contacts.get | Get Omnichannel Contact
[**getApiV1OmnichannelContactsHistory**](LivechatContactsApi.md#getapiv1omnichannelcontactshistory) | **GET** /api/v1/omnichannel/contacts.history | Get Contact History
[**getApiV1OmnichannelContactsSearch**](LivechatContactsApi.md#getapiv1omnichannelcontactssearch) | **GET** /api/v1/omnichannel/contacts.search | Search Omnichannel Contacts
[**postApiV1OmnichannelContact**](LivechatContactsApi.md#postapiv1omnichannelcontact) | **POST** /api/v1/omnichannel/contact | Register or Update Omnichannel Contact
[**postApiV1OmnichannelContacts**](LivechatContactsApi.md#postapiv1omnichannelcontacts) | **POST** /api/v1/omnichannel/contacts | Register Omnichannel Contacts
[**postApiV1OmnichannelContactsUpdate**](LivechatContactsApi.md#postapiv1omnichannelcontactsupdate) | **POST** /api/v1/omnichannel/contacts.update | Update Omnichannel Contact

# **getApiV1ContactSearch**
> \Swagger\Client\Model\InlineResponse2008 getApiV1ContactSearch($x_auth_token, $x_user_id, $email, $phone, $custom)

Search Contacts

> **Note:** This endpoint will be replaced. Refer to the [new API documentation](https://developer.rocket.chat/apidocs/search-omnichannel-contacts) for updated usage and features.  Find contacts by name, email, phone number, or any custom field values stored in the database. Permission required: `view-l-room`. * Encode values having characters like @,+, /and * to avoid breaking the endpoint. * To find contacts using custom fields, use the custom query parameter. The custom query parameter must be encoded by <a href=\"https://developer.mozilla.org/en-US/docs/Web/API/URLSearchParams\" target=\"_blank\">URLSearchParams</a>. For example, to search contacts with premium subscription, the request is as follows: ``` curl --location --globoff 'http://localhost:3000/api/v1/omnichannel/contact.search?custom={%20%22Subscription%22%3A%20%22premium%22%20}' \\ --header 'X-Auth-Token: b5BKhblglC5OU0AfB_Tl9dKmOb0zXUvWK-nhNT_aE8V' \\ --header 'X-User-Id: CkCPNcvsvCDfmWLqC'         ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$email = "email_example"; // string | The contact's email address.
$phone = "phone_example"; // string | The contact's phone number.
$custom = "custom_example"; // string | The defined custom fields.

try {
    $result = $apiInstance->getApiV1ContactSearch($x_auth_token, $x_user_id, $email, $phone, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatContactsApi->getApiV1ContactSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **email** | **string**| The contact&#x27;s email address. | [optional]
 **phone** | **string**| The contact&#x27;s phone number. | [optional]
 **custom** | **string**| The defined custom fields. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1OmnichannelContactsChannels**
> \Swagger\Client\Model\InlineResponse20013 getApiV1OmnichannelContactsChannels($x_auth_token, $x_user_id, $contact_id)

Get channels grouped by contact name

Get channels grouped by contact name. Permission required: `view-livechat-contact`.  ### Changelog | Version      | Description |  | ---------------- | ------------| |6.1.0             | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$contact_id = "contact_id_example"; // string | The contact's ID.

try {
    $result = $apiInstance->getApiV1OmnichannelContactsChannels($x_auth_token, $x_user_id, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatContactsApi->getApiV1OmnichannelContactsChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **contact_id** | **string**| The contact&#x27;s ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1OmnichannelContactsCheckExistence**
> \Swagger\Client\Model\InlineResponse20014 getApiV1OmnichannelContactsCheckExistence($x_auth_token, $x_user_id, $contact_id, $email, $phone)

Check Contacts Existence

This identifies whether a contact is already registered using a given query parameter such as `email` or `phone` or `contactId`. **Note**: You must provide only one of the parameters in the request.  **Required permission**: `view-livechat-contact`.   ### Changelog | Version      | Description |  | ---------------- | ------------| |7.2.0             | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$contact_id = "contact_id_example"; // string | The contact's unique ID.
$email = "email_example"; // string | The omnichannel contact's email address.
$phone = "phone_example"; // string | Phone number of the omnichannel contact.

try {
    $result = $apiInstance->getApiV1OmnichannelContactsCheckExistence($x_auth_token, $x_user_id, $contact_id, $email, $phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatContactsApi->getApiV1OmnichannelContactsCheckExistence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **contact_id** | **string**| The contact&#x27;s unique ID. | [optional]
 **email** | **string**| The omnichannel contact&#x27;s email address. | [optional]
 **phone** | **string**| Phone number of the omnichannel contact. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1OmnichannelContactsGet**
> \Swagger\Client\Model\InlineResponse20011 getApiV1OmnichannelContactsGet($x_auth_token, $x_user_id, $contact_id, $visitor)

Get Omnichannel Contact

Retrieve a single omnichannel contact by providing **either** a `contactId` or a `visitor` object.   - Use `contactId` to fetch the contact directly by its unique ID.   - Use the `visitor` object to fetch the contact by its visitor association.    **Note:** You must provide only one of these parameters in the request.   Required permission: `view-livechat-contact`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$contact_id = "contact_id_example"; // string | The contact's unique ID. Provide this parameter if fetching the contact directly by its ID.
$visitor = new \Swagger\Client\Model\Visitor(); // \Swagger\Client\Model\Visitor | Visitor association for the contact. Provide this object as JSON with the required fields: - `visitorId` (string): The ID of the visitor. - `source.type` (string): The type of the source (e.g., \"web\").

try {
    $result = $apiInstance->getApiV1OmnichannelContactsGet($x_auth_token, $x_user_id, $contact_id, $visitor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatContactsApi->getApiV1OmnichannelContactsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **contact_id** | **string**| The contact&#x27;s unique ID. Provide this parameter if fetching the contact directly by its ID. | [optional]
 **visitor** | [**\Swagger\Client\Model\Visitor**](../Model/.md)| Visitor association for the contact. Provide this object as JSON with the required fields: - &#x60;visitorId&#x60; (string): The ID of the visitor. - &#x60;source.type&#x60; (string): The type of the source (e.g., \&quot;web\&quot;). | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1OmnichannelContactsHistory**
> \Swagger\Client\Model\InlineResponse2003 getApiV1OmnichannelContactsHistory($x_auth_token, $x_user_id, $contact_id, $source, $offset, $count, $sort)

Get Contact History

Get contact's history. Permission required: `view-livechat-contact-history`.  ### Changelog | Version      | Description |  | ---------------- | ------------| |6.1.0             | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$contact_id = "contact_id_example"; // string | The contact's ID.
$source = "source_example"; // string | The source of the contact's interaction with your organization.
$offset = 1.2; // float | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 1.2; // float | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending.

try {
    $result = $apiInstance->getApiV1OmnichannelContactsHistory($x_auth_token, $x_user_id, $contact_id, $source, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatContactsApi->getApiV1OmnichannelContactsHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **contact_id** | **string**| The contact&#x27;s ID. |
 **source** | **string**| The source of the contact&#x27;s interaction with your organization. | [optional]
 **offset** | **float**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **float**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1OmnichannelContactsSearch**
> \Swagger\Client\Model\InlineResponse20012 getApiV1OmnichannelContactsSearch($x_auth_token, $x_user_id, $search_text, $unknown, $count, $offset, $sort)

Search Omnichannel Contacts

Retrieve a list of omnichannel contacts based on search criteria like name, email or phone number. Permission required: `view-livechat-contact`.  **Note**: Ensure to URL-encode special characters such as `@`, `+`, `/`, and `*` in query parameters to prevent issues with the endpoint. For example, encode email addresses as `mail%40example.com` instead of `mail@example.com`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$search_text = "search_text_example"; // string | Text to search for in contact details.
$unknown = true; // bool | Filter by contact's unknown status.
$count = 1.2; // float | Number of results to return per search.
$offset = 1.2; // float | Number of results to skip for pagination.
$sort = "sort_example"; // string | JSON string defining the sort order of results.

try {
    $result = $apiInstance->getApiV1OmnichannelContactsSearch($x_auth_token, $x_user_id, $search_text, $unknown, $count, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatContactsApi->getApiV1OmnichannelContactsSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **search_text** | **string**| Text to search for in contact details. | [optional]
 **unknown** | **bool**| Filter by contact&#x27;s unknown status. | [optional]
 **count** | **float**| Number of results to return per search. | [optional]
 **offset** | **float**| Number of results to skip for pagination. | [optional]
 **sort** | **string**| JSON string defining the sort order of results. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1OmnichannelContact**
> \Swagger\Client\Model\InlineResponse2007 postApiV1OmnichannelContact($x_auth_token, $x_user_id, $body)

Register or Update Omnichannel Contact

> **Note:** This endpoint will be replaced. Refer to the new API documentations for [registering](https://developer.rocket.chat/apidocs/register-omnichannel-contacts) and [updating](https://developer.rocket.chat/apidocs/update-omnichannel-contact) contact for updated usage and features.  Register a guest user as a new omnichannel contact. Permission required: `view-l-room`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\OmnichannelContactBody(); // \Swagger\Client\Model\OmnichannelContactBody | 

try {
    $result = $apiInstance->postApiV1OmnichannelContact($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatContactsApi->postApiV1OmnichannelContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\OmnichannelContactBody**](../Model/OmnichannelContactBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1OmnichannelContacts**
> \Swagger\Client\Model\InlineResponse2009 postApiV1OmnichannelContacts($x_auth_token, $x_user_id, $body)

Register Omnichannel Contacts

Register a new omnichannel contact. Permission required: `create-livechat-contact`  ### Changelog | Version      | Description |  | ---------------- | ------------| |6.1.0             | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\OmnichannelContactsBody(); // \Swagger\Client\Model\OmnichannelContactsBody | 

try {
    $result = $apiInstance->postApiV1OmnichannelContacts($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatContactsApi->postApiV1OmnichannelContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\OmnichannelContactsBody**](../Model/OmnichannelContactsBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1OmnichannelContactsUpdate**
> \Swagger\Client\Model\InlineResponse20010 postApiV1OmnichannelContactsUpdate($x_auth_token, $x_user_id, $body)

Update Omnichannel Contact

Update omnichannel contact. Permission required: `update-livechat-contact`.  ### Changelog | Version      | Description |  | ---------------- | ------------| |6.1.0             | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\OmnichannelContactsUpdateBody(); // \Swagger\Client\Model\OmnichannelContactsUpdateBody | 

try {
    $result = $apiInstance->postApiV1OmnichannelContactsUpdate($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatContactsApi->postApiV1OmnichannelContactsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\OmnichannelContactsUpdateBody**](../Model/OmnichannelContactsUpdateBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

