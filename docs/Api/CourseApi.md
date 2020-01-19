# Swagger\Client\CourseApi

All URIs are relative to */api/v2/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**buildCoursePreviewLaunchLink**](CourseApi.md#buildcoursepreviewlaunchlink) | **POST** /courses/{courseId}/preview | Returns the link to use to preview this course
[**buildCoursePreviewLaunchLinkWithVersion**](CourseApi.md#buildcoursepreviewlaunchlinkwithversion) | **POST** /courses/{courseId}/versions/{versionId}/preview | Returns the link to use to preview this course
[**createFetchAndImportCourseJob**](CourseApi.md#createfetchandimportcoursejob) | **POST** /courses/importJobs | Start a job to fetch and import a course.
[**createUploadAndImportCourseJob**](CourseApi.md#createuploadandimportcoursejob) | **POST** /courses/importJobs/upload | Upload a course and start an import job for it.
[**deleteCourse**](CourseApi.md#deletecourse) | **DELETE** /courses/{courseId} | Delete &#x60;courseId&#x60;
[**deleteCourseConfigurationSetting**](CourseApi.md#deletecourseconfigurationsetting) | **DELETE** /courses/{courseId}/configuration/{settingId} | Clears the &#x60;settingId&#x60; value for this course
[**deleteCourseVersion**](CourseApi.md#deletecourseversion) | **DELETE** /courses/{courseId}/versions/{versionId} | Delete version &#x60;versionId&#x60; of &#x60;courseId&#x60;
[**deleteCourseVersionConfigurationSetting**](CourseApi.md#deletecourseversionconfigurationsetting) | **DELETE** /courses/{courseId}/versions/{versionId}/configuration/{settingId} | Clears the &#x60;settingId&#x60; value for this course and version.
[**getCourse**](CourseApi.md#getcourse) | **GET** /courses/{courseId} | Get information about &#x60;courseId&#x60;
[**getCourseConfiguration**](CourseApi.md#getcourseconfiguration) | **GET** /courses/{courseId}/configuration | Returns all configuration settings for this course
[**getCourseStatements**](CourseApi.md#getcoursestatements) | **GET** /courses/{courseId}/xAPIStatements | Get xAPI statements for &#x60;courseId&#x60;
[**getCourseVersionConfiguration**](CourseApi.md#getcourseversionconfiguration) | **GET** /courses/{courseId}/versions/{versionId}/configuration | Returns all configuration settings for this course and version.
[**getCourseVersionInfo**](CourseApi.md#getcourseversioninfo) | **GET** /courses/{courseId}/versions/{versionId} | Get version &#x60;versionId&#x60; of &#x60;courseId&#x60;
[**getCourseVersionStatements**](CourseApi.md#getcourseversionstatements) | **GET** /courses/{courseId}/versions/{versionId}/xAPIStatements | Get xAPI statements for version &#x60;versionId&#x60; of &#x60;courseId&#x60;
[**getCourseVersions**](CourseApi.md#getcourseversions) | **GET** /courses/{courseId}/versions | Get all versions of &#x60;courseId&#x60;
[**getCourses**](CourseApi.md#getcourses) | **GET** /courses | Get a list of all courses for the specified tenant
[**getImportJobStatus**](CourseApi.md#getimportjobstatus) | **GET** /courses/importJobs/{importJobId} | Check the status of an import job.
[**importCourseWithoutUpload**](CourseApi.md#importcoursewithoutupload) | **POST** /courses | Create a course
[**setCourseConfiguration**](CourseApi.md#setcourseconfiguration) | **POST** /courses/{courseId}/configuration | Set configuration settings for this course.
[**setCourseTitle**](CourseApi.md#setcoursetitle) | **PUT** /courses/{courseId}/title | Sets the course title for &#x60;courseId&#x60;
[**setCourseVersionConfiguration**](CourseApi.md#setcourseversionconfiguration) | **POST** /courses/{courseId}/versions/{versionId}/configuration | Set configuration settings for this course and version.
[**uploadAndImportCourse**](CourseApi.md#uploadandimportcourse) | **POST** /courses/upload | Upload a course to import

# **buildCoursePreviewLaunchLink**
> \Swagger\Client\Model\LaunchLinkSchema buildCoursePreviewLaunchLink($body, $engine_tenant_name, $course_id)

Returns the link to use to preview this course

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

$apiInstance = new Swagger\Client\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\LaunchLinkRequestSchema(); // \Swagger\Client\Model\LaunchLinkRequestSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 

try {
    $result = $apiInstance->buildCoursePreviewLaunchLink($body, $engine_tenant_name, $course_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->buildCoursePreviewLaunchLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LaunchLinkRequestSchema**](../Model/LaunchLinkRequestSchema.md)|  |
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\LaunchLinkSchema**](../Model/LaunchLinkSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buildCoursePreviewLaunchLinkWithVersion**
> \Swagger\Client\Model\LaunchLinkSchema buildCoursePreviewLaunchLinkWithVersion($body, $engine_tenant_name, $course_id, $version_id)

Returns the link to use to preview this course

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

$apiInstance = new Swagger\Client\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\LaunchLinkRequestSchema(); // \Swagger\Client\Model\LaunchLinkRequestSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | the course version

try {
    $result = $apiInstance->buildCoursePreviewLaunchLinkWithVersion($body, $engine_tenant_name, $course_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->buildCoursePreviewLaunchLinkWithVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LaunchLinkRequestSchema**](../Model/LaunchLinkRequestSchema.md)|  |
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **version_id** | **int**| the course version |

### Return type

[**\Swagger\Client\Model\LaunchLinkSchema**](../Model/LaunchLinkSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createFetchAndImportCourseJob**
> \Swagger\Client\Model\StringResultSchema createFetchAndImportCourseJob($body, $engine_tenant_name, $course_id, $may_create_new_version)

Start a job to fetch and import a course.

An import job will be started to fetch and import the referenced file, and the import job ID will be returned. If the import is successful, the imported course will be registered using the courseId provided.

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

$apiInstance = new Swagger\Client\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ImportFetchRequestSchema(); // \Swagger\Client\Model\ImportFetchRequestSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | A unique identifier your application will use to identify the course after import. Your application is responsible both for generating this unique ID and for keeping track of the ID for later use.
$may_create_new_version = true; // bool | Is it OK to create a new version of this course? If this is set to false and the course already exists, the upload will fail. If true and the course already exists then a new version will be created. No effect if the course doesn't already exist.

try {
    $result = $apiInstance->createFetchAndImportCourseJob($body, $engine_tenant_name, $course_id, $may_create_new_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->createFetchAndImportCourseJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ImportFetchRequestSchema**](../Model/ImportFetchRequestSchema.md)|  |
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**| A unique identifier your application will use to identify the course after import. Your application is responsible both for generating this unique ID and for keeping track of the ID for later use. |
 **may_create_new_version** | **bool**| Is it OK to create a new version of this course? If this is set to false and the course already exists, the upload will fail. If true and the course already exists then a new version will be created. No effect if the course doesn&#x27;t already exist. | [optional]

### Return type

[**\Swagger\Client\Model\StringResultSchema**](../Model/StringResultSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createUploadAndImportCourseJob**
> \Swagger\Client\Model\StringResultSchema createUploadAndImportCourseJob($engine_tenant_name, $course_id, $file, $uploaded_content_type, $may_create_new_version)

Upload a course and start an import job for it.

An import job will be started to import the posted file, and the import job ID will be returned. If the import is successful, the imported course will be registered using the courseId provided.

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

$apiInstance = new Swagger\Client\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | A unique identifier your application will use to identify the course after import. Your application is responsible both for generating this unique ID and for keeping track of the ID for later use.
$file = "file_example"; // string | 
$uploaded_content_type = "uploaded_content_type_example"; // string | The MIME type identifier for the content to be uploaded
$may_create_new_version = true; // bool | Is it OK to create a new version of this course? If this is set to false and the course already exists, the upload will fail. If true and the course already exists then a new version will be created. No effect if the course doesn't already exist.

try {
    $result = $apiInstance->createUploadAndImportCourseJob($engine_tenant_name, $course_id, $file, $uploaded_content_type, $may_create_new_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->createUploadAndImportCourseJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**| A unique identifier your application will use to identify the course after import. Your application is responsible both for generating this unique ID and for keeping track of the ID for later use. |
 **file** | **string****string**|  | [optional]
 **uploaded_content_type** | **string**| The MIME type identifier for the content to be uploaded | [optional]
 **may_create_new_version** | **bool**| Is it OK to create a new version of this course? If this is set to false and the course already exists, the upload will fail. If true and the course already exists then a new version will be created. No effect if the course doesn&#x27;t already exist. | [optional]

### Return type

[**\Swagger\Client\Model\StringResultSchema**](../Model/StringResultSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCourse**
> deleteCourse($engine_tenant_name, $course_id)

Delete `courseId`

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

$apiInstance = new Swagger\Client\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 

try {
    $apiInstance->deleteCourse($engine_tenant_name, $course_id);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->deleteCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCourseConfigurationSetting**
> deleteCourseConfigurationSetting($engine_tenant_name, $course_id, $setting_id)

Clears the `settingId` value for this course

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

$apiInstance = new Swagger\Client\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 

try {
    $apiInstance->deleteCourseConfigurationSetting($engine_tenant_name, $course_id, $setting_id);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->deleteCourseConfigurationSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **setting_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCourseVersion**
> deleteCourseVersion($engine_tenant_name, $course_id, $version_id)

Delete version `versionId` of `courseId`

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

$apiInstance = new Swagger\Client\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | the course version

try {
    $apiInstance->deleteCourseVersion($engine_tenant_name, $course_id, $version_id);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->deleteCourseVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **version_id** | **int**| the course version |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCourseVersionConfigurationSetting**
> deleteCourseVersionConfigurationSetting($engine_tenant_name, $course_id, $version_id, $setting_id)

Clears the `settingId` value for this course and version.

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

$apiInstance = new Swagger\Client\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | the course version
$setting_id = "setting_id_example"; // string | 

try {
    $apiInstance->deleteCourseVersionConfigurationSetting($engine_tenant_name, $course_id, $version_id, $setting_id);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->deleteCourseVersionConfigurationSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **version_id** | **int**| the course version |
 **setting_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourse**
> \Swagger\Client\Model\CourseSchema getCourse($engine_tenant_name, $course_id, $include_registration_count, $include_course_metadata)

Get information about `courseId`

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

$apiInstance = new Swagger\Client\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$include_registration_count = true; // bool | Include the registration count in the results
$include_course_metadata = true; // bool | Include course metadata in the results

try {
    $result = $apiInstance->getCourse($engine_tenant_name, $course_id, $include_registration_count, $include_course_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **include_registration_count** | **bool**| Include the registration count in the results | [optional]
 **include_course_metadata** | **bool**| Include course metadata in the results | [optional]

### Return type

[**\Swagger\Client\Model\CourseSchema**](../Model/CourseSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseConfiguration**
> \Swagger\Client\Model\SettingListSchema getCourseConfiguration($engine_tenant_name, $course_id, $include_metadata, $include_hidden_settings, $include_secret_settings, $process_replacement_tokens)

Returns all configuration settings for this course

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

$apiInstance = new Swagger\Client\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$include_metadata = true; // bool | 
$include_hidden_settings = true; // bool | Should settings that are declared to be hidden be included. Note: such settings generally do not need to be modified, and may be confusing.
$include_secret_settings = true; // bool | Should settings that are stored encrypted (type 'secretString') be included. Note: if included, the decrypted value will be returned.
$process_replacement_tokens = true; // bool | Whether to process replacement tokens (false returns the raw value of each setting, without tokens or environment variable replacements)

try {
    $result = $apiInstance->getCourseConfiguration($engine_tenant_name, $course_id, $include_metadata, $include_hidden_settings, $include_secret_settings, $process_replacement_tokens);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourseConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **include_metadata** | **bool**|  | [optional]
 **include_hidden_settings** | **bool**| Should settings that are declared to be hidden be included. Note: such settings generally do not need to be modified, and may be confusing. | [optional]
 **include_secret_settings** | **bool**| Should settings that are stored encrypted (type &#x27;secretString&#x27;) be included. Note: if included, the decrypted value will be returned. | [optional]
 **process_replacement_tokens** | **bool**| Whether to process replacement tokens (false returns the raw value of each setting, without tokens or environment variable replacements) | [optional]

### Return type

[**\Swagger\Client\Model\SettingListSchema**](../Model/SettingListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseStatements**
> \Swagger\Client\Model\XapiStatementResult getCourseStatements($engine_tenant_name, $course_id, $learner_id, $since, $until, $more)

Get xAPI statements for `courseId`

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

$apiInstance = new Swagger\Client\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$learner_id = "learner_id_example"; // string | Only entries for the specified learner id will be included.
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$more = "more_example"; // string | Value for this parameter will be provided in the 'more' property of lists, where needed. An opaque value, construction and parsing may change without notice.

try {
    $result = $apiInstance->getCourseStatements($engine_tenant_name, $course_id, $learner_id, $since, $until, $more);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourseStatements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **learner_id** | **string**| Only entries for the specified learner id will be included. | [optional]
 **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **until** | **\DateTime**| Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **more** | **string**| Value for this parameter will be provided in the &#x27;more&#x27; property of lists, where needed. An opaque value, construction and parsing may change without notice. | [optional]

### Return type

[**\Swagger\Client\Model\XapiStatementResult**](../Model/XapiStatementResult.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseVersionConfiguration**
> \Swagger\Client\Model\SettingListSchema getCourseVersionConfiguration($engine_tenant_name, $course_id, $version_id, $include_metadata, $include_hidden_settings, $include_secret_settings, $process_replacement_tokens)

Returns all configuration settings for this course and version.

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

$apiInstance = new Swagger\Client\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | the course version
$include_metadata = true; // bool | 
$include_hidden_settings = true; // bool | Should settings that are declared to be hidden be included. Note: such settings generally do not need to be modified, and may be confusing.
$include_secret_settings = true; // bool | Should settings that are stored encrypted (type 'secretString') be included. Note: if included, the decrypted value will be returned.
$process_replacement_tokens = true; // bool | Whether to process replacement tokens (false returns the raw value of each setting, without tokens or environment variable replacements)

try {
    $result = $apiInstance->getCourseVersionConfiguration($engine_tenant_name, $course_id, $version_id, $include_metadata, $include_hidden_settings, $include_secret_settings, $process_replacement_tokens);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourseVersionConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **version_id** | **int**| the course version |
 **include_metadata** | **bool**|  | [optional]
 **include_hidden_settings** | **bool**| Should settings that are declared to be hidden be included. Note: such settings generally do not need to be modified, and may be confusing. | [optional]
 **include_secret_settings** | **bool**| Should settings that are stored encrypted (type &#x27;secretString&#x27;) be included. Note: if included, the decrypted value will be returned. | [optional]
 **process_replacement_tokens** | **bool**| Whether to process replacement tokens (false returns the raw value of each setting, without tokens or environment variable replacements) | [optional]

### Return type

[**\Swagger\Client\Model\SettingListSchema**](../Model/SettingListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseVersionInfo**
> \Swagger\Client\Model\CourseSchema getCourseVersionInfo($engine_tenant_name, $course_id, $version_id, $include_registration_count, $include_course_metadata)

Get version `versionId` of `courseId`

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

$apiInstance = new Swagger\Client\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | the course version
$include_registration_count = true; // bool | Include the registration count in the results
$include_course_metadata = true; // bool | Include course metadata in the results

try {
    $result = $apiInstance->getCourseVersionInfo($engine_tenant_name, $course_id, $version_id, $include_registration_count, $include_course_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourseVersionInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **version_id** | **int**| the course version |
 **include_registration_count** | **bool**| Include the registration count in the results | [optional]
 **include_course_metadata** | **bool**| Include course metadata in the results | [optional]

### Return type

[**\Swagger\Client\Model\CourseSchema**](../Model/CourseSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseVersionStatements**
> \Swagger\Client\Model\XapiStatementResult getCourseVersionStatements($engine_tenant_name, $course_id, $version_id, $learner_id, $since, $until, $more)

Get xAPI statements for version `versionId` of `courseId`

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

$apiInstance = new Swagger\Client\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | the course version
$learner_id = "learner_id_example"; // string | Only entries for the specified learner id will be included.
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$more = "more_example"; // string | Value for this parameter will be provided in the 'more' property of lists, where needed. An opaque value, construction and parsing may change without notice.

try {
    $result = $apiInstance->getCourseVersionStatements($engine_tenant_name, $course_id, $version_id, $learner_id, $since, $until, $more);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourseVersionStatements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **version_id** | **int**| the course version |
 **learner_id** | **string**| Only entries for the specified learner id will be included. | [optional]
 **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **until** | **\DateTime**| Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **more** | **string**| Value for this parameter will be provided in the &#x27;more&#x27; property of lists, where needed. An opaque value, construction and parsing may change without notice. | [optional]

### Return type

[**\Swagger\Client\Model\XapiStatementResult**](../Model/XapiStatementResult.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseVersions**
> \Swagger\Client\Model\CourseListNonPagedSchema getCourseVersions($engine_tenant_name, $course_id, $since, $until, $include_registration_count, $include_course_metadata)

Get all versions of `courseId`

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

$apiInstance = new Swagger\Client\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$include_registration_count = true; // bool | Include the registration count in the results
$include_course_metadata = true; // bool | Include course metadata in the results

try {
    $result = $apiInstance->getCourseVersions($engine_tenant_name, $course_id, $since, $until, $include_registration_count, $include_course_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourseVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **until** | **\DateTime**| Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **include_registration_count** | **bool**| Include the registration count in the results | [optional]
 **include_course_metadata** | **bool**| Include course metadata in the results | [optional]

### Return type

[**\Swagger\Client\Model\CourseListNonPagedSchema**](../Model/CourseListNonPagedSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourses**
> \Swagger\Client\Model\CourseListSchema getCourses($engine_tenant_name, $more, $since, $until, $include_registration_count, $include_course_metadata)

Get a list of all courses for the specified tenant

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

$apiInstance = new Swagger\Client\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$more = "more_example"; // string | Value for this parameter will be provided in the 'more' property of lists, where needed. An opaque value, construction and parsing may change without notice.
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$include_registration_count = true; // bool | Include the registration count in the results
$include_course_metadata = true; // bool | Include course metadata in the results

try {
    $result = $apiInstance->getCourses($engine_tenant_name, $more, $since, $until, $include_registration_count, $include_course_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourses: ', $e->getMessage(), PHP_EOL;
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
 **include_registration_count** | **bool**| Include the registration count in the results | [optional]
 **include_course_metadata** | **bool**| Include course metadata in the results | [optional]

### Return type

[**\Swagger\Client\Model\CourseListSchema**](../Model/CourseListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImportJobStatus**
> \Swagger\Client\Model\ImportJobResultSchema getImportJobStatus($engine_tenant_name, $import_job_id)

Check the status of an import job.

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

$apiInstance = new Swagger\Client\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$import_job_id = "import_job_id_example"; // string | Id received when the import job was submitted to the importJobs resource.

try {
    $result = $apiInstance->getImportJobStatus($engine_tenant_name, $import_job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getImportJobStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **import_job_id** | **string**| Id received when the import job was submitted to the importJobs resource. |

### Return type

[**\Swagger\Client\Model\ImportJobResultSchema**](../Model/ImportJobResultSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importCourseWithoutUpload**
> \Swagger\Client\Model\ImportResultSchema importCourseWithoutUpload($body, $engine_tenant_name, $course_id, $may_create_new_version, $dry_run)

Create a course

Import the specified course and return the results of the import. For large imports, it may be necessary to use importJobs instead to avoid timeouts.

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

$apiInstance = new Swagger\Client\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ImportRequestSchema(); // \Swagger\Client\Model\ImportRequestSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | A unique identifier your application will use to identify the course after import. Your application is responsible both for generating this unique ID and for keeping track of the ID for later use.
$may_create_new_version = true; // bool | Is it OK to create a new version of this course? If this is set to false and the course already exists, the upload will fail. If true and the course already exists then a new version will be created. No effect if the course doesn't already exist.
$dry_run = true; // bool | Validate the course can be imported (mainly by validating the manifest), but don't actually import it.

try {
    $result = $apiInstance->importCourseWithoutUpload($body, $engine_tenant_name, $course_id, $may_create_new_version, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->importCourseWithoutUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ImportRequestSchema**](../Model/ImportRequestSchema.md)|  |
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**| A unique identifier your application will use to identify the course after import. Your application is responsible both for generating this unique ID and for keeping track of the ID for later use. |
 **may_create_new_version** | **bool**| Is it OK to create a new version of this course? If this is set to false and the course already exists, the upload will fail. If true and the course already exists then a new version will be created. No effect if the course doesn&#x27;t already exist. | [optional]
 **dry_run** | **bool**| Validate the course can be imported (mainly by validating the manifest), but don&#x27;t actually import it. | [optional]

### Return type

[**\Swagger\Client\Model\ImportResultSchema**](../Model/ImportResultSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCourseConfiguration**
> setCourseConfiguration($body, $engine_tenant_name, $course_id)

Set configuration settings for this course.

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

$apiInstance = new Swagger\Client\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SettingsPostSchema(); // \Swagger\Client\Model\SettingsPostSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 

try {
    $apiInstance->setCourseConfiguration($body, $engine_tenant_name, $course_id);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->setCourseConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SettingsPostSchema**](../Model/SettingsPostSchema.md)|  |
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCourseTitle**
> setCourseTitle($body, $engine_tenant_name, $course_id)

Sets the course title for `courseId`

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

$apiInstance = new Swagger\Client\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TitleSchema(); // \Swagger\Client\Model\TitleSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 

try {
    $apiInstance->setCourseTitle($body, $engine_tenant_name, $course_id);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->setCourseTitle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TitleSchema**](../Model/TitleSchema.md)|  |
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCourseVersionConfiguration**
> setCourseVersionConfiguration($body, $engine_tenant_name, $course_id, $version_id)

Set configuration settings for this course and version.

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

$apiInstance = new Swagger\Client\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SettingsPostSchema(); // \Swagger\Client\Model\SettingsPostSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | the course version

try {
    $apiInstance->setCourseVersionConfiguration($body, $engine_tenant_name, $course_id, $version_id);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->setCourseVersionConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SettingsPostSchema**](../Model/SettingsPostSchema.md)|  |
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **version_id** | **int**| the course version |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadAndImportCourse**
> \Swagger\Client\Model\ImportResultSchema uploadAndImportCourse($engine_tenant_name, $course_id, $file, $uploaded_content_type, $may_create_new_version, $dry_run)

Upload a course to import

Upload and import the specified course and return the results of the import. For large imports, it may be necessary to use importJobs instead to avoid timeouts.

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

$apiInstance = new Swagger\Client\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | A unique identifier your application will use to identify the course after import. Your application is responsible both for generating this unique ID and for keeping track of the ID for later use.
$file = "file_example"; // string | 
$uploaded_content_type = "uploaded_content_type_example"; // string | The MIME type identifier for the content to be uploaded
$may_create_new_version = true; // bool | Is it OK to create a new version of this course? If this is set to false and the course already exists, the upload will fail. If true and the course already exists then a new version will be created. No effect if the course doesn't already exist.
$dry_run = true; // bool | Validate the course can be imported (mainly by validating the manifest), but don't actually import it.

try {
    $result = $apiInstance->uploadAndImportCourse($engine_tenant_name, $course_id, $file, $uploaded_content_type, $may_create_new_version, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->uploadAndImportCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**| A unique identifier your application will use to identify the course after import. Your application is responsible both for generating this unique ID and for keeping track of the ID for later use. |
 **file** | **string****string**|  | [optional]
 **uploaded_content_type** | **string**| The MIME type identifier for the content to be uploaded | [optional]
 **may_create_new_version** | **bool**| Is it OK to create a new version of this course? If this is set to false and the course already exists, the upload will fail. If true and the course already exists then a new version will be created. No effect if the course doesn&#x27;t already exist. | [optional]
 **dry_run** | **bool**| Validate the course can be imported (mainly by validating the manifest), but don&#x27;t actually import it. | [optional]

### Return type

[**\Swagger\Client\Model\ImportResultSchema**](../Model/ImportResultSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

