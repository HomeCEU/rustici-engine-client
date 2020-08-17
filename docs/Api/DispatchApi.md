# Swagger\Client\DispatchApi

All URIs are relative to *http://localhost/api/v2/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDestinations**](DispatchApi.md#createDestinations) | **POST** /dispatch/destinations | Create one or more destinations
[**createDispatches**](DispatchApi.md#createDispatches) | **POST** /dispatch/dispatches | Create multiple dispatches
[**deleteDestination**](DispatchApi.md#deleteDestination) | **DELETE** /dispatch/destinations/{destinationId} | Delete the destination with id &#x60;destinationId&#x60;
[**deleteDestinationDispatches**](DispatchApi.md#deleteDestinationDispatches) | **DELETE** /dispatch/destinations/{destinationId}/dispatches | Delete all dispatches associated with this destination
[**deleteDispatch**](DispatchApi.md#deleteDispatch) | **DELETE** /dispatch/dispatches/{dispatchId} | Delete the dispatch with id &#x60;dispatchId&#x60;
[**enableRegistrationInstancing**](DispatchApi.md#enableRegistrationInstancing) | **POST** /dispatch/destinations/{destinationId}/dispatches/registrationInstancing | Enable or disable registration instancing
[**getDestination**](DispatchApi.md#getDestination) | **GET** /dispatch/destinations/{destinationId} | Get the destination with id &#x60;destinationId&#x60;
[**getDestinationDispatchRegistrationCount**](DispatchApi.md#getDestinationDispatchRegistrationCount) | **GET** /dispatch/destinations/{destinationId}/registrationCount | Get the registration count for all related dispatch registrations
[**getDestinationDispatchZip**](DispatchApi.md#getDestinationDispatchZip) | **GET** /dispatch/destinations/{destinationId}/dispatches/zip | Get a ZIP file containing all dispatch packages related to a destination.
[**getDestinationDispatches**](DispatchApi.md#getDestinationDispatches) | **GET** /dispatch/destinations/{destinationId}/dispatches | Get a list of related dispatches
[**getDestinations**](DispatchApi.md#getDestinations) | **GET** /dispatch/destinations | Get a list of destinations
[**getDispatch**](DispatchApi.md#getDispatch) | **GET** /dispatch/dispatches/{dispatchId} | Get the dispatch with id &#x60;dispatchId&#x60;
[**getDispatchEnabled**](DispatchApi.md#getDispatchEnabled) | **GET** /dispatch/dispatches/{dispatchId}/enabled | Returns boolean indicating if dispatch with id &#x60;dispatchId&#x60; is enabled
[**getDispatchRegistrationCount**](DispatchApi.md#getDispatchRegistrationCount) | **GET** /dispatch/dispatches/{dispatchId}/registrationCount | Get the registration count for this dispatch, and the date and time of the last count reset, if any.
[**getDispatchZip**](DispatchApi.md#getDispatchZip) | **GET** /dispatch/dispatches/{dispatchId}/zip | Get the ZIP dispatch package.
[**getDispatches**](DispatchApi.md#getDispatches) | **GET** /dispatch/dispatches | Get a list of dispatches
[**getLTIDispatch**](DispatchApi.md#getLTIDispatch) | **GET** /dispatch/dispatches/{dispatchId}/lti | Get the information necessary to launch this dispatch using the IMS LTI specification.
[**getLti13Dispatch**](DispatchApi.md#getLti13Dispatch) | **GET** /dispatch/dispatches/{dispatchId}/lti13 | Get the information necessary to import this dispatch as a resource link according to the IMS LTI 1.3 specification.
[**getLti13DispatchLaunch**](DispatchApi.md#getLti13DispatchLaunch) | **GET** /dispatch/dispatches/{dispatchId}/launches | Launch this dispatch using the IMS LTI 1.3 specification.
[**getLti13OidcLoginInitiation**](DispatchApi.md#getLti13OidcLoginInitiation) | **GET** /dispatch/destinations/{destinationId}/oidcLoginInitiation | Initiate an OIDC Login flow for the destination with id &#x60;destinationId&#x60;
[**getLti13ToolConfigurationSchema**](DispatchApi.md#getLti13ToolConfigurationSchema) | **GET** /dispatch/destinations/{destinationId}/lti13 | Get the information needed to configure a LTI 1.3 platform with the destination id &#x60;destinationId&#x60;
[**getToolJsonWebKeySet**](DispatchApi.md#getToolJsonWebKeySet) | **GET** /dispatch/destinations/{destinationId}/jwks | Get JSON Web Key Set
[**postDispatchLtiReporters**](DispatchApi.md#postDispatchLtiReporters) | **POST** /dispatch/ltiReporters | Set up a temporary LTI reporter; for use by products that use their own LTI entry points
[**postLti13AuthorizationResponse**](DispatchApi.md#postLti13AuthorizationResponse) | **POST** /dispatch/destinations/{destinationId}/launches | Process an LTI 1.3 OIDC Authorization Response for the destination with id &#x60;destinationId&#x60;
[**postLti13OidcLoginInitiation**](DispatchApi.md#postLti13OidcLoginInitiation) | **POST** /dispatch/destinations/{destinationId}/oidcLoginInitiation | Initiate an OIDC Login flow for the destination with id &#x60;destinationId&#x60;
[**postRotateToolKeys**](DispatchApi.md#postRotateToolKeys) | **POST** /dispatch/destinations/{destinationId}/rotateKeys | Rotate RSA Keys
[**resetDestinationDispatchRegistrationCount**](DispatchApi.md#resetDestinationDispatchRegistrationCount) | **DELETE** /dispatch/destinations/{destinationId}/registrationCount | Reset the registration count for related dispatches.
[**resetDispatchRegistrationCount**](DispatchApi.md#resetDispatchRegistrationCount) | **DELETE** /dispatch/dispatches/{dispatchId}/registrationCount | Reset the registration count for this dispatch.
[**setDestination**](DispatchApi.md#setDestination) | **PUT** /dispatch/destinations/{destinationId} | Update the destination with id &#x60;destinationId&#x60;
[**setDestinationDispatchEnabled**](DispatchApi.md#setDestinationDispatchEnabled) | **POST** /dispatch/destinations/{destinationId}/dispatches/enabled | Enable or disable all related dispatches
[**setDispatchEnabled**](DispatchApi.md#setDispatchEnabled) | **PUT** /dispatch/dispatches/{dispatchId}/enabled | Enable or disable the dispatch
[**updateDispatch**](DispatchApi.md#updateDispatch) | **PUT** /dispatch/dispatches/{dispatchId} | Update the dispatch with id &#x60;dispatchId&#x60;


# **createDestinations**
> createDestinations($engine_tenant_name, $destinations_list)

Create one or more destinations

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
$destinations_list = new \Swagger\Client\Model\DestinationListSchema(); // \Swagger\Client\Model\DestinationListSchema | 

try {
    $apiInstance->createDestinations($engine_tenant_name, $destinations_list);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->createDestinations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **destinations_list** | [**\Swagger\Client\Model\DestinationListSchema**](../Model/DestinationListSchema.md)|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDispatches**
> createDispatches($engine_tenant_name, $dispatch_list)

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
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$dispatch_list = new \Swagger\Client\Model\CreateDispatchListSchema(); // \Swagger\Client\Model\CreateDispatchListSchema | 

try {
    $apiInstance->createDispatches($engine_tenant_name, $dispatch_list);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->createDispatches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **dispatch_list** | [**\Swagger\Client\Model\CreateDispatchListSchema**](../Model/CreateDispatchListSchema.md)|  |

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

 - **Content-Type**: application/json
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

 - **Content-Type**: application/json
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableRegistrationInstancing**
> enableRegistrationInstancing($engine_tenant_name, $destination_id, $enabled)

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
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$destination_id = "destination_id_example"; // string | 
$enabled = new \Swagger\Client\Model\EnabledSchema(); // \Swagger\Client\Model\EnabledSchema | 

try {
    $apiInstance->enableRegistrationInstancing($engine_tenant_name, $destination_id, $enabled);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->enableRegistrationInstancing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **destination_id** | **string**|  |
 **enabled** | [**\Swagger\Client\Model\EnabledSchema**](../Model/EnabledSchema.md)|  |

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

 - **Content-Type**: application/json
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDestinationDispatchZip**
> \SplFileObject getDestinationDispatchZip($engine_tenant_name, $destination_id, $type)

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
$type = "\"SCORM12\""; // string | The type of dispatch package to export (SCORM12, SCORM2004-3RD or AICC)

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
 **type** | **string**| The type of dispatch package to export (SCORM12, SCORM2004-3RD or AICC) | [optional] [default to &quot;SCORM12&quot;]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
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
 **more** | **string**| Value for this parameter will be provided in the &#39;more&#39; property of lists, where needed. An opaque value, construction and parsing may change without notice. | [optional]
 **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **until** | **\DateTime**| Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]

### Return type

[**\Swagger\Client\Model\DispatchListSchema**](../Model/DispatchListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
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
 **more** | **string**| Value for this parameter will be provided in the &#39;more&#39; property of lists, where needed. An opaque value, construction and parsing may change without notice. | [optional]
 **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **until** | **\DateTime**| Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **course_id** | **string**| Limit the results to destinations that have dispatches of the specified course | [optional]

### Return type

[**\Swagger\Client\Model\DestinationListSchema**](../Model/DestinationListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
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

 - **Content-Type**: application/json
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

 - **Content-Type**: application/json
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDispatchZip**
> \SplFileObject getDispatchZip($engine_tenant_name, $dispatch_id, $type)

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
$type = "\"SCORM12\""; // string | The type of dispatch package to export (SCORM12, SCORM2004-3RD or AICC)

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
 **type** | **string**| The type of dispatch package to export (SCORM12, SCORM2004-3RD or AICC) | [optional] [default to &quot;SCORM12&quot;]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
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
 **more** | **string**| Value for this parameter will be provided in the &#39;more&#39; property of lists, where needed. An opaque value, construction and parsing may change without notice. | [optional]
 **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **until** | **\DateTime**| Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **course_id** | **string**| Limit the results to dispatches of the specified course | [optional]

### Return type

[**\Swagger\Client\Model\DispatchListSchema**](../Model/DispatchListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLti13Dispatch**
> \Swagger\Client\Model\DispatchLti13InfoSchema getLti13Dispatch($engine_tenant_name, $dispatch_id)

Get the information necessary to import this dispatch as a resource link according to the IMS LTI 1.3 specification.

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
    $result = $apiInstance->getLti13Dispatch($engine_tenant_name, $dispatch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->getLti13Dispatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **dispatch_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DispatchLti13InfoSchema**](../Model/DispatchLti13InfoSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLti13DispatchLaunch**
> getLti13DispatchLaunch($external_config, $dispatch_id, $learner_id, $learner_full_name, $redirect_on_exit_url, $lti_outcome_info)

Launch this dispatch using the IMS LTI 1.3 specification.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_config = "external_config_example"; // string | External configuration object
$dispatch_id = "dispatch_id_example"; // string | 
$learner_id = "learner_id_example"; // string | 
$learner_full_name = "learner_full_name_example"; // string | 
$redirect_on_exit_url = "redirect_on_exit_url_example"; // string | 
$lti_outcome_info = "lti_outcome_info_example"; // string | 

try {
    $apiInstance->getLti13DispatchLaunch($external_config, $dispatch_id, $learner_id, $learner_full_name, $redirect_on_exit_url, $lti_outcome_info);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->getLti13DispatchLaunch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_config** | **string**| External configuration object |
 **dispatch_id** | **string**|  |
 **learner_id** | **string**|  |
 **learner_full_name** | **string**|  | [optional]
 **redirect_on_exit_url** | **string**|  | [optional]
 **lti_outcome_info** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLti13OidcLoginInitiation**
> getLti13OidcLoginInitiation($external_config, $destination_id, $login_hint, $iss, $target_link_uri, $lti_message_hint, $lti_deployment_id, $client_id)

Initiate an OIDC Login flow for the destination with id `destinationId`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_config = "external_config_example"; // string | External configuration object
$destination_id = "destination_id_example"; // string | 
$login_hint = "login_hint_example"; // string | Tool-opaque login identifier
$iss = "iss_example"; // string | Issuer identifying the learning platform
$target_link_uri = "target_link_uri_example"; // string | Endpoint to be at the end of the OIDC authentication flow.
$lti_message_hint = "lti_message_hint_example"; // string | Tool-opaque login identifier
$lti_deployment_id = "lti_deployment_id_example"; // string | Deployment id that would be passed in the https://purl.imsglobal.org/spec/lti/claim/deployment_id claim in an OIDC Authorization Response
$client_id = "client_id_example"; // string | Client id that should be used to authorize the subsequent LTI message request.

try {
    $apiInstance->getLti13OidcLoginInitiation($external_config, $destination_id, $login_hint, $iss, $target_link_uri, $lti_message_hint, $lti_deployment_id, $client_id);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->getLti13OidcLoginInitiation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_config** | **string**| External configuration object |
 **destination_id** | **string**|  |
 **login_hint** | **string**| Tool-opaque login identifier |
 **iss** | **string**| Issuer identifying the learning platform |
 **target_link_uri** | **string**| Endpoint to be at the end of the OIDC authentication flow. |
 **lti_message_hint** | **string**| Tool-opaque login identifier | [optional]
 **lti_deployment_id** | **string**| Deployment id that would be passed in the https://purl.imsglobal.org/spec/lti/claim/deployment_id claim in an OIDC Authorization Response | [optional]
 **client_id** | **string**| Client id that should be used to authorize the subsequent LTI message request. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLti13ToolConfigurationSchema**
> \Swagger\Client\Model\Lti13ToolConfigurationSchema getLti13ToolConfigurationSchema($engine_tenant_name, $destination_id)

Get the information needed to configure a LTI 1.3 platform with the destination id `destinationId`

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
    $result = $apiInstance->getLti13ToolConfigurationSchema($engine_tenant_name, $destination_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->getLti13ToolConfigurationSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **destination_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\Lti13ToolConfigurationSchema**](../Model/Lti13ToolConfigurationSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getToolJsonWebKeySet**
> \Swagger\Client\Model\JsonWebKeySetSchema getToolJsonWebKeySet($external_config, $destination_id)

Get JSON Web Key Set

Returns a JSON Web Key Set for given destination

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_config = "external_config_example"; // string | External configuration object
$destination_id = "destination_id_example"; // string | 

try {
    $result = $apiInstance->getToolJsonWebKeySet($external_config, $destination_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->getToolJsonWebKeySet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_config** | **string**| External configuration object |
 **destination_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\JsonWebKeySetSchema**](../Model/JsonWebKeySetSchema.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDispatchLtiReporters**
> \Swagger\Client\Model\LtiReporterIdSchema postDispatchLtiReporters($engine_tenant_name, $lti_reporter_schema)

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
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$lti_reporter_schema = new \Swagger\Client\Model\LtiReporterSchema(); // \Swagger\Client\Model\LtiReporterSchema | 

try {
    $result = $apiInstance->postDispatchLtiReporters($engine_tenant_name, $lti_reporter_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->postDispatchLtiReporters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **lti_reporter_schema** | [**\Swagger\Client\Model\LtiReporterSchema**](../Model/LtiReporterSchema.md)|  |

### Return type

[**\Swagger\Client\Model\LtiReporterIdSchema**](../Model/LtiReporterIdSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postLti13AuthorizationResponse**
> postLti13AuthorizationResponse($external_config, $destination_id, $id_token, $state)

Process an LTI 1.3 OIDC Authorization Response for the destination with id `destinationId`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_config = "external_config_example"; // string | External configuration object
$destination_id = "destination_id_example"; // string | 
$id_token = "id_token_example"; // string | JWT with claims specified by LTI 1.3 spec
$state = "state_example"; // string | State information passed to platform from OIDC Authorization Request

try {
    $apiInstance->postLti13AuthorizationResponse($external_config, $destination_id, $id_token, $state);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->postLti13AuthorizationResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_config** | **string**| External configuration object |
 **destination_id** | **string**|  |
 **id_token** | **string**| JWT with claims specified by LTI 1.3 spec |
 **state** | **string**| State information passed to platform from OIDC Authorization Request |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postLti13OidcLoginInitiation**
> postLti13OidcLoginInitiation($external_config, $destination_id, $login_hint, $iss, $target_link_uri, $lti_message_hint, $lti_deployment_id, $client_id)

Initiate an OIDC Login flow for the destination with id `destinationId`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DispatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_config = "external_config_example"; // string | External configuration object
$destination_id = "destination_id_example"; // string | 
$login_hint = "login_hint_example"; // string | Tool-opaque login identifier
$iss = "iss_example"; // string | Issuer identifying the learning platform
$target_link_uri = "target_link_uri_example"; // string | Endpoint to be at the end of the OIDC authentication flow.
$lti_message_hint = "lti_message_hint_example"; // string | Tool-opaque login identifier
$lti_deployment_id = "lti_deployment_id_example"; // string | deployment id that would be passed in the https://purl.imsglobal.org/spec/lti/claim/deployment_id claim in an OIDC Authorization Response
$client_id = "client_id_example"; // string | Client id that should be used to authorize the subsequent LTI message request.

try {
    $apiInstance->postLti13OidcLoginInitiation($external_config, $destination_id, $login_hint, $iss, $target_link_uri, $lti_message_hint, $lti_deployment_id, $client_id);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->postLti13OidcLoginInitiation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_config** | **string**| External configuration object |
 **destination_id** | **string**|  |
 **login_hint** | **string**| Tool-opaque login identifier |
 **iss** | **string**| Issuer identifying the learning platform |
 **target_link_uri** | **string**| Endpoint to be at the end of the OIDC authentication flow. |
 **lti_message_hint** | **string**| Tool-opaque login identifier | [optional]
 **lti_deployment_id** | **string**| deployment id that would be passed in the https://purl.imsglobal.org/spec/lti/claim/deployment_id claim in an OIDC Authorization Response | [optional]
 **client_id** | **string**| Client id that should be used to authorize the subsequent LTI message request. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRotateToolKeys**
> postRotateToolKeys($engine_tenant_name, $destination_id, $rotate_keys)

Rotate RSA Keys

Rotates the destination's RSA Key Pair

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
$rotate_keys = new \Swagger\Client\Model\RotateKeysSchema(); // \Swagger\Client\Model\RotateKeysSchema | 

try {
    $apiInstance->postRotateToolKeys($engine_tenant_name, $destination_id, $rotate_keys);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->postRotateToolKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **destination_id** | **string**|  |
 **rotate_keys** | [**\Swagger\Client\Model\RotateKeysSchema**](../Model/RotateKeysSchema.md)|  |

### Return type

void (empty response body)

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

 - **Content-Type**: application/json
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setDestination**
> setDestination($engine_tenant_name, $destination_id, $destination)

Update the destination with id `destinationId`

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
$destination = new \Swagger\Client\Model\DestinationSchema(); // \Swagger\Client\Model\DestinationSchema | 

try {
    $apiInstance->setDestination($engine_tenant_name, $destination_id, $destination);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->setDestination: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **destination_id** | **string**|  |
 **destination** | [**\Swagger\Client\Model\DestinationSchema**](../Model/DestinationSchema.md)|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setDestinationDispatchEnabled**
> setDestinationDispatchEnabled($engine_tenant_name, $destination_id, $enabled)

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
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$destination_id = "destination_id_example"; // string | 
$enabled = new \Swagger\Client\Model\EnabledSchema(); // \Swagger\Client\Model\EnabledSchema | 

try {
    $apiInstance->setDestinationDispatchEnabled($engine_tenant_name, $destination_id, $enabled);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->setDestinationDispatchEnabled: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **destination_id** | **string**|  |
 **enabled** | [**\Swagger\Client\Model\EnabledSchema**](../Model/EnabledSchema.md)|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setDispatchEnabled**
> setDispatchEnabled($engine_tenant_name, $dispatch_id, $enabled)

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
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$dispatch_id = "dispatch_id_example"; // string | 
$enabled = new \Swagger\Client\Model\EnabledSchema(); // \Swagger\Client\Model\EnabledSchema | 

try {
    $apiInstance->setDispatchEnabled($engine_tenant_name, $dispatch_id, $enabled);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->setDispatchEnabled: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **dispatch_id** | **string**|  |
 **enabled** | [**\Swagger\Client\Model\EnabledSchema**](../Model/EnabledSchema.md)|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDispatch**
> updateDispatch($engine_tenant_name, $dispatch_id, $dispatch_properties)

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
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$dispatch_id = "dispatch_id_example"; // string | 
$dispatch_properties = new \Swagger\Client\Model\UpdateDispatchSchema(); // \Swagger\Client\Model\UpdateDispatchSchema | 

try {
    $apiInstance->updateDispatch($engine_tenant_name, $dispatch_id, $dispatch_properties);
} catch (Exception $e) {
    echo 'Exception when calling DispatchApi->updateDispatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **dispatch_id** | **string**|  |
 **dispatch_properties** | [**\Swagger\Client\Model\UpdateDispatchSchema**](../Model/UpdateDispatchSchema.md)|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

