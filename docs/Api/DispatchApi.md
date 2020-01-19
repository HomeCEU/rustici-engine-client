# Swagger\Client\DispatchApi

All URIs are relative to */api/v2/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDestinations**](DispatchApi.md#createdestinations) | **POST** /dispatch/destinations | Create multiple destinations
[**createDispatches**](DispatchApi.md#createdispatches) | **POST** /dispatch/dispatches | Create multiple dispatches
[**deleteDestination**](DispatchApi.md#deletedestination) | **DELETE** /dispatch/destinations/{destinationId} | Delete the destination with id &#x60;destinationId&#x60;
[**deleteDestinationDispatches**](DispatchApi.md#deletedestinationdispatches) | **DELETE** /dispatch/destinations/{destinationId}/dispatches | Delete all dispatches associated with this destination
[**deleteDispatch**](DispatchApi.md#deletedispatch) | **DELETE** /dispatch/dispatches/{dispatchId} | Delete the dispatch with id &#x60;dispatchId&#x60;
[**enableRegistrationInstancing**](DispatchApi.md#enableregistrationinstancing) | **POST** /dispatch/destinations/{destinationId}/dispatches/registrationInstancing | Enable or disable registration instancing
[**getDestination**](DispatchApi.md#getdestination) | **GET** /dispatch/destinations/{destinationId} | Get the destination with id &#x60;destinationId&#x60;
[**getDestinationDispatchRegistrationCount**](DispatchApi.md#getdestinationdispatchregistrationcount) | **GET** /dispatch/destinations/{destinationId}/registrationCount | Get the registration count for all related dispatch registrations
[**getDestinationDispatchZip**](DispatchApi.md#getdestinationdispatchzip) | **GET** /dispatch/destinations/{destinationId}/dispatches/zip | Get a ZIP file containing all dispatch packages related to a destination.
[**getDestinationDispatches**](DispatchApi.md#getdestinationdispatches) | **GET** /dispatch/destinations/{destinationId}/dispatches | Get a list of related dispatches
[**getDestinations**](DispatchApi.md#getdestinations) | **GET** /dispatch/destinations | Get a list of destinations
[**getDispatch**](DispatchApi.md#getdispatch) | **GET** /dispatch/dispatches/{dispatchId} | Get the dispatch with id &#x60;dispatchId&#x60;
[**getDispatchEnabled**](DispatchApi.md#getdispatchenabled) | **GET** /dispatch/dispatches/{dispatchId}/enabled | Returns boolean indicating if dispatch with id &#x60;dispatchId&#x60; is enabled
[**getDispatchRegistrationCount**](DispatchApi.md#getdispatchregistrationcount) | **GET** /dispatch/dispatches/{dispatchId}/registrationCount | Get the registration count for this dispatch, and the date and time of the last count reset, if any.
[**getDispatchZip**](DispatchApi.md#getdispatchzip) | **GET** /dispatch/dispatches/{dispatchId}/zip | Get the ZIP dispatch package.
[**getDispatches**](DispatchApi.md#getdispatches) | **GET** /dispatch/dispatches | Get a list of dispatches
[**getLTIDispatch**](DispatchApi.md#getltidispatch) | **GET** /dispatch/dispatches/{dispatchId}/lti | Get the information necessary to launch this dispatch using the IMS LTI specification.
[**postDispatchLtiReporters**](DispatchApi.md#postdispatchltireporters) | **POST** /dispatch/ltiReporters | Set up a temporary LTI reporter; for use by products that use their own LTI entry points
[**resetDestinationDispatchRegistrationCount**](DispatchApi.md#resetdestinationdispatchregistrationcount) | **DELETE** /dispatch/destinations/{destinationId}/registrationCount | Reset the registration count for related dispatches.
[**resetDispatchRegistrationCount**](DispatchApi.md#resetdispatchregistrationcount) | **DELETE** /dispatch/dispatches/{dispatchId}/registrationCount | Reset the registration count for this dispatch.
[**setDestination**](DispatchApi.md#setdestination) | **PUT** /dispatch/destinations/{destinationId} | Create or update the destination with id &#x60;destinationId&#x60;
[**setDestinationDispatchEnabled**](DispatchApi.md#setdestinationdispatchenabled) | **POST** /dispatch/destinations/{destinationId}/dispatches/enabled | Enable or disable all related dispatches
[**setDispatchEnabled**](DispatchApi.md#setdispatchenabled) | **PUT** /dispatch/dispatches/{dispatchId}/enabled | Enable or disable the dispatch
[**updateDispatch**](DispatchApi.md#updatedispatch) | **PUT** /dispatch/dispatches/{dispatchId} | Update the dispatch with id &#x60;dispatchId&#x60;

# **createDestinations**
> createDestinations($body, $engine_tenant_name)

Create multiple destinations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DestinationListSchema(); // \Swagger\Client\Model\DestinationListSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request

try {
    $apiInstance->createDestinations($body, $engine_tenant_name);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->createDestinations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DestinationListSchema**](../Model/DestinationListSchema.md)|  |
 **engine_tenant_name** | **string**| tenant for this request |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDispatches**
> createDispatches($body, $engine_tenant_name)

Create multiple dispatches

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateDispatchListSchema(); // \Swagger\Client\Model\CreateDispatchListSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request

try {
    $apiInstance->createDispatches($body, $engine_tenant_name);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->createDispatches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateDispatchListSchema**](../Model/CreateDispatchListSchema.md)|  |
 **engine_tenant_name** | **string**| tenant for this request |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDestination**
> deleteDestination($engine_tenant_name, $destination_id)

Delete the destination with id `destinationId`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$destination_id = "destination_id_example"; // string | 

try {
    $apiInstance->deleteDestination($engine_tenant_name, $destination_id);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->deleteDestination: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **destination_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDestinationDispatches**
> deleteDestinationDispatches($engine_tenant_name, $destination_id)

Delete all dispatches associated with this destination

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$destination_id = "destination_id_example"; // string | 

try {
    $apiInstance->deleteDestinationDispatches($engine_tenant_name, $destination_id);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->deleteDestinationDispatches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **destination_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDispatch**
> deleteDispatch($engine_tenant_name, $dispatch_id)

Delete the dispatch with id `dispatchId`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$dispatch_id = "dispatch_id_example"; // string | 

try {
    $apiInstance->deleteDispatch($engine_tenant_name, $dispatch_id);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->deleteDispatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **dispatch_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableRegistrationInstancing**
> enableRegistrationInstancing($body, $engine_tenant_name, $destination_id)

Enable or disable registration instancing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EnabledSchema(); // \Swagger\Client\Model\EnabledSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$destination_id = "destination_id_example"; // string | 

try {
    $apiInstance->enableRegistrationInstancing($body, $engine_tenant_name, $destination_id);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->enableRegistrationInstancing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnabledSchema**](../Model/EnabledSchema.md)|  |
 **engine_tenant_name** | **string**| tenant for this request |
 **destination_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDestination**
> \Swagger\Client\Model\DestinationSchema getDestination($engine_tenant_name, $destination_id)

Get the destination with id `destinationId`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$destination_id = "destination_id_example"; // string | 

try {
    $result = $apiInstance->getDestination($engine_tenant_name, $destination_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->getDestination: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **destination_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DestinationSchema**](../Model/DestinationSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDestinationDispatchRegistrationCount**
> \Swagger\Client\Model\IntegerResultSchema getDestinationDispatchRegistrationCount($engine_tenant_name, $destination_id)

Get the registration count for all related dispatch registrations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$destination_id = "destination_id_example"; // string | 

try {
    $result = $apiInstance->getDestinationDispatchRegistrationCount($engine_tenant_name, $destination_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->getDestinationDispatchRegistrationCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **destination_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\IntegerResultSchema**](../Model/IntegerResultSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDestinationDispatchZip**
> string getDestinationDispatchZip($engine_tenant_name, $destination_id, $type)

Get a ZIP file containing all dispatch packages related to a destination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$destination_id = "destination_id_example"; // string | 
$type = "type_example"; // string | The type of dispatch package to export (SCORM12, SCORM2004-3RD or AICC)

try {
    $result = $apiInstance->getDestinationDispatchZip($engine_tenant_name, $destination_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->getDestinationDispatchZip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **destination_id** | **string**|  |
 **type** | **string**| The type of dispatch package to export (SCORM12, SCORM2004-3RD or AICC) | [optional]

### Return type

**string**

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/zip

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDestinationDispatches**
> \Swagger\Client\Model\DispatchListSchema getDestinationDispatches($engine_tenant_name, $destination_id, $more, $since, $until)

Get a list of related dispatches

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$destination_id = "destination_id_example"; // string | 
$more = "more_example"; // string | Value for this parameter will be provided in the 'more' property of lists, where needed. An opaque value, construction and parsing may change without notice.
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.

try {
    $result = $apiInstance->getDestinationDispatches($engine_tenant_name, $destination_id, $more, $since, $until);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->getDestinationDispatches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **destination_id** | **string**|  |
 **more** | **string**| Value for this parameter will be provided in the &#x27;more&#x27; property of lists, where needed. An opaque value, construction and parsing may change without notice. | [optional]
 **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **until** | **\DateTime**| Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]

### Return type

[**\Swagger\Client\Model\DispatchListSchema**](../Model/DispatchListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDestinations**
> \Swagger\Client\Model\DestinationListSchema getDestinations($engine_tenant_name, $more, $since, $until, $course_id)

Get a list of destinations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$more = "more_example"; // string | Value for this parameter will be provided in the 'more' property of lists, where needed. An opaque value, construction and parsing may change without notice.
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$course_id = "course_id_example"; // string | Limit the results to destinations that have dispatches of the specified course

try {
    $result = $apiInstance->getDestinations($engine_tenant_name, $more, $since, $until, $course_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->getDestinations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **more** | **string**| Value for this parameter will be provided in the &#x27;more&#x27; property of lists, where needed. An opaque value, construction and parsing may change without notice. | [optional]
 **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **until** | **\DateTime**| Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **course_id** | **string**| Limit the results to destinations that have dispatches of the specified course | [optional]

### Return type

[**\Swagger\Client\Model\DestinationListSchema**](../Model/DestinationListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDispatch**
> \Swagger\Client\Model\DispatchSchema getDispatch($engine_tenant_name, $dispatch_id)

Get the dispatch with id `dispatchId`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$dispatch_id = "dispatch_id_example"; // string | 

try {
    $result = $apiInstance->getDispatch($engine_tenant_name, $dispatch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->getDispatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **dispatch_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DispatchSchema**](../Model/DispatchSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDispatchEnabled**
> \Swagger\Client\Model\EnabledSchema getDispatchEnabled($engine_tenant_name, $dispatch_id)

Returns boolean indicating if dispatch with id `dispatchId` is enabled

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$dispatch_id = "dispatch_id_example"; // string | 

try {
    $result = $apiInstance->getDispatchEnabled($engine_tenant_name, $dispatch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->getDispatchEnabled: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **dispatch_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\EnabledSchema**](../Model/EnabledSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDispatchRegistrationCount**
> \Swagger\Client\Model\DispatchRegistrationCountSchema getDispatchRegistrationCount($engine_tenant_name, $dispatch_id)

Get the registration count for this dispatch, and the date and time of the last count reset, if any.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$dispatch_id = "dispatch_id_example"; // string | 

try {
    $result = $apiInstance->getDispatchRegistrationCount($engine_tenant_name, $dispatch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->getDispatchRegistrationCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **dispatch_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DispatchRegistrationCountSchema**](../Model/DispatchRegistrationCountSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDispatchZip**
> string getDispatchZip($engine_tenant_name, $dispatch_id, $type)

Get the ZIP dispatch package.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$dispatch_id = "dispatch_id_example"; // string | 
$type = "type_example"; // string | The type of dispatch package to export (SCORM12, SCORM2004-3RD or AICC)

try {
    $result = $apiInstance->getDispatchZip($engine_tenant_name, $dispatch_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->getDispatchZip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **dispatch_id** | **string**|  |
 **type** | **string**| The type of dispatch package to export (SCORM12, SCORM2004-3RD or AICC) | [optional]

### Return type

**string**

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/zip

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDispatches**
> \Swagger\Client\Model\DispatchListSchema getDispatches($engine_tenant_name, $more, $since, $until, $course_id)

Get a list of dispatches

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$more = "more_example"; // string | Value for this parameter will be provided in the 'more' property of lists, where needed. An opaque value, construction and parsing may change without notice.
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$course_id = "course_id_example"; // string | Limit the results to dispatches of the specified course

try {
    $result = $apiInstance->getDispatches($engine_tenant_name, $more, $since, $until, $course_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->getDispatches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **more** | **string**| Value for this parameter will be provided in the &#x27;more&#x27; property of lists, where needed. An opaque value, construction and parsing may change without notice. | [optional]
 **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **until** | **\DateTime**| Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **course_id** | **string**| Limit the results to dispatches of the specified course | [optional]

### Return type

[**\Swagger\Client\Model\DispatchListSchema**](../Model/DispatchListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLTIDispatch**
> \Swagger\Client\Model\DispatchLtiInfoSchema getLTIDispatch($engine_tenant_name, $dispatch_id)

Get the information necessary to launch this dispatch using the IMS LTI specification.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$dispatch_id = "dispatch_id_example"; // string | 

try {
    $result = $apiInstance->getLTIDispatch($engine_tenant_name, $dispatch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->getLTIDispatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **dispatch_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DispatchLtiInfoSchema**](../Model/DispatchLtiInfoSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDispatchLtiReporters**
> \Swagger\Client\Model\LtiReporterIdSchema postDispatchLtiReporters($body, $engine_tenant_name)

Set up a temporary LTI reporter; for use by products that use their own LTI entry points

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\LtiReporterSchema(); // \Swagger\Client\Model\LtiReporterSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request

try {
    $result = $apiInstance->postDispatchLtiReporters($body, $engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->postDispatchLtiReporters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LtiReporterSchema**](../Model/LtiReporterSchema.md)|  |
 **engine_tenant_name** | **string**| tenant for this request |

### Return type

[**\Swagger\Client\Model\LtiReporterIdSchema**](../Model/LtiReporterIdSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetDestinationDispatchRegistrationCount**
> resetDestinationDispatchRegistrationCount($engine_tenant_name, $destination_id)

Reset the registration count for related dispatches.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$destination_id = "destination_id_example"; // string | 

try {
    $apiInstance->resetDestinationDispatchRegistrationCount($engine_tenant_name, $destination_id);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->resetDestinationDispatchRegistrationCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **destination_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetDispatchRegistrationCount**
> resetDispatchRegistrationCount($engine_tenant_name, $dispatch_id)

Reset the registration count for this dispatch.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$dispatch_id = "dispatch_id_example"; // string | 

try {
    $apiInstance->resetDispatchRegistrationCount($engine_tenant_name, $dispatch_id);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->resetDispatchRegistrationCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **dispatch_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setDestination**
> setDestination($body, $engine_tenant_name, $destination_id)

Create or update the destination with id `destinationId`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DestinationSchema(); // \Swagger\Client\Model\DestinationSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$destination_id = "destination_id_example"; // string | 

try {
    $apiInstance->setDestination($body, $engine_tenant_name, $destination_id);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->setDestination: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DestinationSchema**](../Model/DestinationSchema.md)|  |
 **engine_tenant_name** | **string**| tenant for this request |
 **destination_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setDestinationDispatchEnabled**
> setDestinationDispatchEnabled($body, $engine_tenant_name, $destination_id)

Enable or disable all related dispatches

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EnabledSchema(); // \Swagger\Client\Model\EnabledSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$destination_id = "destination_id_example"; // string | 

try {
    $apiInstance->setDestinationDispatchEnabled($body, $engine_tenant_name, $destination_id);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->setDestinationDispatchEnabled: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnabledSchema**](../Model/EnabledSchema.md)|  |
 **engine_tenant_name** | **string**| tenant for this request |
 **destination_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setDispatchEnabled**
> setDispatchEnabled($body, $engine_tenant_name, $dispatch_id)

Enable or disable the dispatch

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EnabledSchema(); // \Swagger\Client\Model\EnabledSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$dispatch_id = "dispatch_id_example"; // string | 

try {
    $apiInstance->setDispatchEnabled($body, $engine_tenant_name, $dispatch_id);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->setDispatchEnabled: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnabledSchema**](../Model/EnabledSchema.md)|  |
 **engine_tenant_name** | **string**| tenant for this request |
 **dispatch_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDispatch**
> updateDispatch($body, $engine_tenant_name, $dispatch_id)

Update the dispatch with id `dispatchId`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateDispatchSchema(); // \Swagger\Client\Model\UpdateDispatchSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$dispatch_id = "dispatch_id_example"; // string | 

try {
    $apiInstance->updateDispatch($body, $engine_tenant_name, $dispatch_id);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->updateDispatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateDispatchSchema**](../Model/UpdateDispatchSchema.md)|  |
 **engine_tenant_name** | **string**| tenant for this request |
 **dispatch_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

