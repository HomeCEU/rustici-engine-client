# SwaggerClient-php
Rustici Engine API

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setUsername('YOUR_USERNAME')
    ->setPassword('YOUR_PASSWORD');
// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AboutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | optional tenant for this request

try {
    $result = $apiInstance->getAbout($engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AboutApi->getAbout: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://localhost/api/v2/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AboutApi* | [**getAbout**](docs/Api/AboutApi.md#getabout) | **GET** /about | Get back the version and platform of the running instance of Engine
*AboutApi* | [**getUserCount**](docs/Api/AboutApi.md#getusercount) | **GET** /about/userCount | Gets the number of users for the specified tenant or across all tenants when none is specified
*AppManagementApi* | [**createCredential**](docs/Api/AppManagementApi.md#createcredential) | **POST** /appManagement/credentials | Create credential
*AppManagementApi* | [**createOrUpdateTenant**](docs/Api/AppManagementApi.md#createorupdatetenant) | **PUT** /appManagement/tenants/{tenantName} | Create or update tenant
*AppManagementApi* | [**createToken**](docs/Api/AppManagementApi.md#createtoken) | **POST** /appManagement/token | Create token
*AppManagementApi* | [**deleteApplicationConfigurationSetting**](docs/Api/AppManagementApi.md#deleteapplicationconfigurationsetting) | **DELETE** /appManagement/configuration/{settingId} | Clears the &#x60;settingId&#x60; value for this level
*AppManagementApi* | [**deleteCredential**](docs/Api/AppManagementApi.md#deletecredential) | **DELETE** /appManagement/credentials/{credentialId} | Removes &#x60;credentialId&#x60; credentials
*AppManagementApi* | [**deleteTenant**](docs/Api/AppManagementApi.md#deletetenant) | **DELETE** /appManagement/tenants/{tenantName} | Delete a tenant. Warning: If tenant data is not deleted first, this will leave orphaned rows that can only be deleted manually. Does not remove any data, but does remove mapping between name and key used to store data. Consider deactivating instead.
*AppManagementApi* | [**deleteTenantData**](docs/Api/AppManagementApi.md#deletetenantdata) | **DELETE** /appManagement/tenants/{tenantName}/data | Delete all of a tenant&#39;s data.
*AppManagementApi* | [**getApplicationConfiguration**](docs/Api/AppManagementApi.md#getapplicationconfiguration) | **GET** /appManagement/configuration | Returns all configuration settings for this level
*AppManagementApi* | [**getAuthenticatedCredential**](docs/Api/AppManagementApi.md#getauthenticatedcredential) | **GET** /appManagement/authenticatedCredential | Get information about the credential used to authenticate this request.
*AppManagementApi* | [**getCredential**](docs/Api/AppManagementApi.md#getcredential) | **GET** /appManagement/credentials/{credentialId} | Get information on &#x60;credentialId&#x60; credential
*AppManagementApi* | [**getCredentials**](docs/Api/AppManagementApi.md#getcredentials) | **GET** /appManagement/credentials | List of credentials
*AppManagementApi* | [**getPIIDeletionJob**](docs/Api/AppManagementApi.md#getpiideletionjob) | **GET** /appManagement/PII/deletionJob/{jobId} | Check the status of a PII deletion job with the provided job id.
*AppManagementApi* | [**getTenantList**](docs/Api/AppManagementApi.md#gettenantlist) | **GET** /appManagement/tenants | Get list of all tenants
*AppManagementApi* | [**inspectToken**](docs/Api/AppManagementApi.md#inspecttoken) | **GET** /appManagement/token | Inspect token
*AppManagementApi* | [**postPIIDeletionJob**](docs/Api/AppManagementApi.md#postpiideletionjob) | **POST** /appManagement/PII/deletionJob | Initiate a job to delete a user&#39;s Personal Identifying Information from the system.
*AppManagementApi* | [**postUpdateEncryptedSetting**](docs/Api/AppManagementApi.md#postupdateencryptedsetting) | **POST** /appManagement/configuration/updateEncryptedSettings | Re-write settings, and statement pipe passwords using the current encryption settings. For password rotation.
*AppManagementApi* | [**resetCredentialSecret**](docs/Api/AppManagementApi.md#resetcredentialsecret) | **POST** /appManagement/credentials/{credentialId}/resetSecret | Reset credential secret
*AppManagementApi* | [**setApplicationConfiguration**](docs/Api/AppManagementApi.md#setapplicationconfiguration) | **POST** /appManagement/configuration | Set configuration settings for this level.
*AppManagementApi* | [**updateCredential**](docs/Api/AppManagementApi.md#updatecredential) | **PUT** /appManagement/credentials/{credentialId} | Update &#x60;credentialId&#x60; credentials
*ContentConnectorsApi* | [**createConnector**](docs/Api/ContentConnectorsApi.md#createconnector) | **POST** /contentConnectors | Create a connector
*ContentConnectorsApi* | [**getConnectorContentList**](docs/Api/ContentConnectorsApi.md#getconnectorcontentlist) | **GET** /contentConnectors/availableContent | Get list of available content
*ContentConnectorsApi* | [**getConnectorsList**](docs/Api/ContentConnectorsApi.md#getconnectorslist) | **GET** /contentConnectors | Get content connectors
*ContentConnectorsApi* | [**getRefreshJobStatus**](docs/Api/ContentConnectorsApi.md#getrefreshjobstatus) | **GET** /contentConnectors/availableContent/refreshJobs/{refreshJobId} | Check the status of a refresh job.
*ContentConnectorsApi* | [**refreshConnectorContentListJob**](docs/Api/ContentConnectorsApi.md#refreshconnectorcontentlistjob) | **POST** /contentConnectors/availableContent/refreshJobs | Start a job to refresh the list of available content
*ContentConnectorsApi* | [**searchRemoteConnectorContent**](docs/Api/ContentConnectorsApi.md#searchremoteconnectorcontent) | **POST** /contentConnectors/remoteSearch | search remote content
*ContentConnectorsApi* | [**updateConnector**](docs/Api/ContentConnectorsApi.md#updateconnector) | **PUT** /contentConnectors/{connectorId} | Update a connector
*CourseApi* | [**buildCoursePreviewLaunchLink**](docs/Api/CourseApi.md#buildcoursepreviewlaunchlink) | **POST** /courses/{courseId}/preview | Returns the link to use to preview this course
*CourseApi* | [**buildCoursePreviewLaunchLinkWithVersion**](docs/Api/CourseApi.md#buildcoursepreviewlaunchlinkwithversion) | **POST** /courses/{courseId}/versions/{versionId}/preview | Returns the link to use to preview this course
*CourseApi* | [**createFetchAndImportCourseJob**](docs/Api/CourseApi.md#createfetchandimportcoursejob) | **POST** /courses/importJobs | Start a job to fetch and import a course.
*CourseApi* | [**createUploadAndImportCourseJob**](docs/Api/CourseApi.md#createuploadandimportcoursejob) | **POST** /courses/importJobs/upload | Upload a course and start an import job for it.
*CourseApi* | [**deleteCourse**](docs/Api/CourseApi.md#deletecourse) | **DELETE** /courses/{courseId} | Delete &#x60;courseId&#x60;
*CourseApi* | [**deleteCourseConfigurationSetting**](docs/Api/CourseApi.md#deletecourseconfigurationsetting) | **DELETE** /courses/{courseId}/configuration/{settingId} | Clears the &#x60;settingId&#x60; value for this course
*CourseApi* | [**deleteCourseVersion**](docs/Api/CourseApi.md#deletecourseversion) | **DELETE** /courses/{courseId}/versions/{versionId} | Delete version &#x60;versionId&#x60; of &#x60;courseId&#x60;
*CourseApi* | [**deleteCourseVersionConfigurationSetting**](docs/Api/CourseApi.md#deletecourseversionconfigurationsetting) | **DELETE** /courses/{courseId}/versions/{versionId}/configuration/{settingId} | Clears the &#x60;settingId&#x60; value for this course and version.
*CourseApi* | [**deleteCourseZip**](docs/Api/CourseApi.md#deletecoursezip) | **DELETE** /courses/{courseId}/zip | Deletes the exported zip for the latest version of the specified course
*CourseApi* | [**deleteVersionedCourseZip**](docs/Api/CourseApi.md#deleteversionedcoursezip) | **DELETE** /courses/{courseId}/versions/{versionId}/zip | Deletes the exported zip for the specified course version
*CourseApi* | [**getCourse**](docs/Api/CourseApi.md#getcourse) | **GET** /courses/{courseId} | Get information about &#x60;courseId&#x60;
*CourseApi* | [**getCourseConfiguration**](docs/Api/CourseApi.md#getcourseconfiguration) | **GET** /courses/{courseId}/configuration | Returns all configuration settings for this course
*CourseApi* | [**getCourseStatements**](docs/Api/CourseApi.md#getcoursestatements) | **GET** /courses/{courseId}/xAPIStatements | Get xAPI statements for &#x60;courseId&#x60;
*CourseApi* | [**getCourseVersionConfiguration**](docs/Api/CourseApi.md#getcourseversionconfiguration) | **GET** /courses/{courseId}/versions/{versionId}/configuration | Returns all configuration settings for this course and version.
*CourseApi* | [**getCourseVersionInfo**](docs/Api/CourseApi.md#getcourseversioninfo) | **GET** /courses/{courseId}/versions/{versionId} | Get version &#x60;versionId&#x60; of &#x60;courseId&#x60;
*CourseApi* | [**getCourseVersionStatements**](docs/Api/CourseApi.md#getcourseversionstatements) | **GET** /courses/{courseId}/versions/{versionId}/xAPIStatements | Get xAPI statements for version &#x60;versionId&#x60; of &#x60;courseId&#x60;
*CourseApi* | [**getCourseVersions**](docs/Api/CourseApi.md#getcourseversions) | **GET** /courses/{courseId}/versions | Get all versions of &#x60;courseId&#x60;
*CourseApi* | [**getCourseZip**](docs/Api/CourseApi.md#getcoursezip) | **GET** /courses/{courseId}/zip | Get the zip package for the latest course version
*CourseApi* | [**getCourses**](docs/Api/CourseApi.md#getcourses) | **GET** /courses | Get a list of all courses for the specified tenant
*CourseApi* | [**getImportJobStatus**](docs/Api/CourseApi.md#getimportjobstatus) | **GET** /courses/importJobs/{importJobId} | Check the status of an import job.
*CourseApi* | [**getVersionedCourseZip**](docs/Api/CourseApi.md#getversionedcoursezip) | **GET** /courses/{courseId}/versions/{versionId}/zip | Get the zip package for the specified course version
*CourseApi* | [**importCourseAssetFile**](docs/Api/CourseApi.md#importcourseassetfile) | **POST** /courses/{courseId}/asset | Import an asset file for this course.
*CourseApi* | [**importCourseVersionAssetFile**](docs/Api/CourseApi.md#importcourseversionassetfile) | **POST** /courses/{courseId}/versions/{versionId}/asset | Import an asset file for this course version.
*CourseApi* | [**importCourseWithoutUpload**](docs/Api/CourseApi.md#importcoursewithoutupload) | **POST** /courses | Create a course
*CourseApi* | [**setCourseConfiguration**](docs/Api/CourseApi.md#setcourseconfiguration) | **POST** /courses/{courseId}/configuration | Set configuration settings for this course.
*CourseApi* | [**setCourseTitle**](docs/Api/CourseApi.md#setcoursetitle) | **PUT** /courses/{courseId}/title | Sets the course title for &#x60;courseId&#x60;
*CourseApi* | [**setCourseVersionConfiguration**](docs/Api/CourseApi.md#setcourseversionconfiguration) | **POST** /courses/{courseId}/versions/{versionId}/configuration | Set configuration settings for this course and version.
*CourseApi* | [**uploadAndImportCourse**](docs/Api/CourseApi.md#uploadandimportcourse) | **POST** /courses/upload | Upload a course to import
*CourseApi* | [**uploadCourseAssetFile**](docs/Api/CourseApi.md#uploadcourseassetfile) | **POST** /courses/{courseId}/asset/upload | Upload an asset file for this course.
*CourseApi* | [**uploadCourseVersionAssetFile**](docs/Api/CourseApi.md#uploadcourseversionassetfile) | **POST** /courses/{courseId}/versions/{versionId}/asset/upload | Upload an asset file for this course version.
*DispatchApi* | [**createDestinations**](docs/Api/DispatchApi.md#createdestinations) | **POST** /dispatch/destinations | Create one or more destinations
*DispatchApi* | [**createDispatches**](docs/Api/DispatchApi.md#createdispatches) | **POST** /dispatch/dispatches | Create multiple dispatches
*DispatchApi* | [**deleteDestination**](docs/Api/DispatchApi.md#deletedestination) | **DELETE** /dispatch/destinations/{destinationId} | Delete the destination with id &#x60;destinationId&#x60;
*DispatchApi* | [**deleteDestinationDispatches**](docs/Api/DispatchApi.md#deletedestinationdispatches) | **DELETE** /dispatch/destinations/{destinationId}/dispatches | Delete all dispatches associated with this destination
*DispatchApi* | [**deleteDispatch**](docs/Api/DispatchApi.md#deletedispatch) | **DELETE** /dispatch/dispatches/{dispatchId} | Delete the dispatch with id &#x60;dispatchId&#x60;
*DispatchApi* | [**enableRegistrationInstancing**](docs/Api/DispatchApi.md#enableregistrationinstancing) | **POST** /dispatch/destinations/{destinationId}/dispatches/registrationInstancing | Enable or disable registration instancing
*DispatchApi* | [**getDestination**](docs/Api/DispatchApi.md#getdestination) | **GET** /dispatch/destinations/{destinationId} | Get the destination with id &#x60;destinationId&#x60;
*DispatchApi* | [**getDestinationDispatchRegistrationCount**](docs/Api/DispatchApi.md#getdestinationdispatchregistrationcount) | **GET** /dispatch/destinations/{destinationId}/registrationCount | Get the registration count for all related dispatch registrations
*DispatchApi* | [**getDestinationDispatchZip**](docs/Api/DispatchApi.md#getdestinationdispatchzip) | **GET** /dispatch/destinations/{destinationId}/dispatches/zip | Get a ZIP file containing all dispatch packages related to a destination.
*DispatchApi* | [**getDestinationDispatches**](docs/Api/DispatchApi.md#getdestinationdispatches) | **GET** /dispatch/destinations/{destinationId}/dispatches | Get a list of related dispatches
*DispatchApi* | [**getDestinations**](docs/Api/DispatchApi.md#getdestinations) | **GET** /dispatch/destinations | Get a list of destinations
*DispatchApi* | [**getDispatch**](docs/Api/DispatchApi.md#getdispatch) | **GET** /dispatch/dispatches/{dispatchId} | Get the dispatch with id &#x60;dispatchId&#x60;
*DispatchApi* | [**getDispatchEnabled**](docs/Api/DispatchApi.md#getdispatchenabled) | **GET** /dispatch/dispatches/{dispatchId}/enabled | Returns boolean indicating if dispatch with id &#x60;dispatchId&#x60; is enabled
*DispatchApi* | [**getDispatchRegistrationCount**](docs/Api/DispatchApi.md#getdispatchregistrationcount) | **GET** /dispatch/dispatches/{dispatchId}/registrationCount | Get the registration count for this dispatch, and the date and time of the last count reset, if any.
*DispatchApi* | [**getDispatchZip**](docs/Api/DispatchApi.md#getdispatchzip) | **GET** /dispatch/dispatches/{dispatchId}/zip | Get the ZIP dispatch package.
*DispatchApi* | [**getDispatches**](docs/Api/DispatchApi.md#getdispatches) | **GET** /dispatch/dispatches | Get a list of dispatches
*DispatchApi* | [**getLTIDispatch**](docs/Api/DispatchApi.md#getltidispatch) | **GET** /dispatch/dispatches/{dispatchId}/lti | Get the information necessary to launch this dispatch using the IMS LTI specification.
*DispatchApi* | [**getLti13Dispatch**](docs/Api/DispatchApi.md#getlti13dispatch) | **GET** /dispatch/dispatches/{dispatchId}/lti13 | Get the information necessary to import this dispatch as a resource link according to the IMS LTI 1.3 specification.
*DispatchApi* | [**getLti13DispatchLaunch**](docs/Api/DispatchApi.md#getlti13dispatchlaunch) | **GET** /dispatch/dispatches/{dispatchId}/launches | Launch this dispatch using the IMS LTI 1.3 specification.
*DispatchApi* | [**getLti13OidcLoginInitiation**](docs/Api/DispatchApi.md#getlti13oidclogininitiation) | **GET** /dispatch/destinations/{destinationId}/oidcLoginInitiation | Initiate an OIDC Login flow for the destination with id &#x60;destinationId&#x60;
*DispatchApi* | [**getLti13ToolConfigurationSchema**](docs/Api/DispatchApi.md#getlti13toolconfigurationschema) | **GET** /dispatch/destinations/{destinationId}/lti13 | Get the information needed to configure a LTI 1.3 platform with the destination id &#x60;destinationId&#x60;
*DispatchApi* | [**getToolJsonWebKeySet**](docs/Api/DispatchApi.md#gettooljsonwebkeyset) | **GET** /dispatch/destinations/{destinationId}/jwks | Get JSON Web Key Set
*DispatchApi* | [**postDispatchLtiReporters**](docs/Api/DispatchApi.md#postdispatchltireporters) | **POST** /dispatch/ltiReporters | Set up a temporary LTI reporter; for use by products that use their own LTI entry points
*DispatchApi* | [**postLti13AuthorizationResponse**](docs/Api/DispatchApi.md#postlti13authorizationresponse) | **POST** /dispatch/destinations/{destinationId}/launches | Process an LTI 1.3 OIDC Authorization Response for the destination with id &#x60;destinationId&#x60;
*DispatchApi* | [**postLti13OidcLoginInitiation**](docs/Api/DispatchApi.md#postlti13oidclogininitiation) | **POST** /dispatch/destinations/{destinationId}/oidcLoginInitiation | Initiate an OIDC Login flow for the destination with id &#x60;destinationId&#x60;
*DispatchApi* | [**postRotateToolKeys**](docs/Api/DispatchApi.md#postrotatetoolkeys) | **POST** /dispatch/destinations/{destinationId}/rotateKeys | Rotate RSA Keys
*DispatchApi* | [**resetDestinationDispatchRegistrationCount**](docs/Api/DispatchApi.md#resetdestinationdispatchregistrationcount) | **DELETE** /dispatch/destinations/{destinationId}/registrationCount | Reset the registration count for related dispatches.
*DispatchApi* | [**resetDispatchRegistrationCount**](docs/Api/DispatchApi.md#resetdispatchregistrationcount) | **DELETE** /dispatch/dispatches/{dispatchId}/registrationCount | Reset the registration count for this dispatch.
*DispatchApi* | [**setDestination**](docs/Api/DispatchApi.md#setdestination) | **PUT** /dispatch/destinations/{destinationId} | Update the destination with id &#x60;destinationId&#x60;
*DispatchApi* | [**setDestinationDispatchEnabled**](docs/Api/DispatchApi.md#setdestinationdispatchenabled) | **POST** /dispatch/destinations/{destinationId}/dispatches/enabled | Enable or disable all related dispatches
*DispatchApi* | [**setDispatchEnabled**](docs/Api/DispatchApi.md#setdispatchenabled) | **PUT** /dispatch/dispatches/{dispatchId}/enabled | Enable or disable the dispatch
*DispatchApi* | [**updateDispatch**](docs/Api/DispatchApi.md#updatedispatch) | **PUT** /dispatch/dispatches/{dispatchId} | Update the dispatch with id &#x60;dispatchId&#x60;
*PingApi* | [**ping**](docs/Api/PingApi.md#ping) | **GET** /ping | Get back a message indicating that the API is working.
*PlayerApi* | [**buildPlayerConfiguration**](docs/Api/PlayerApi.md#buildplayerconfiguration) | **POST** /player/configuration | Returns player configuration
*PlayerApi* | [**deletePlayerZip**](docs/Api/PlayerApi.md#deleteplayerzip) | **DELETE** /player/zip | Deletes the current exported player zip
*PlayerApi* | [**getPlayerZip**](docs/Api/PlayerApi.md#getplayerzip) | **GET** /player/zip | Gets the customized player files for this system
*PlayerApi* | [**postPlayerResults**](docs/Api/PlayerApi.md#postplayerresults) | **POST** /player/results | Endpoint for player to send results
*RegistrationApi* | [**buildRegistrationLaunchLink**](docs/Api/RegistrationApi.md#buildregistrationlaunchlink) | **POST** /registrations/{registrationId}/launchLink | Returns the link to use to launch this registration
*RegistrationApi* | [**createNewRegistrationInstance**](docs/Api/RegistrationApi.md#createnewregistrationinstance) | **POST** /registrations/{registrationId}/instances | Create a new instance for this registration specified by the registration ID
*RegistrationApi* | [**createRegistration**](docs/Api/RegistrationApi.md#createregistration) | **POST** /registrations | Create a registration.
*RegistrationApi* | [**createRegistrationWithLaunchLink**](docs/Api/RegistrationApi.md#createregistrationwithlaunchlink) | **POST** /registrations/withLaunchLink | Creates a registration and returns the link to use to launch it
*RegistrationApi* | [**deleteRegistration**](docs/Api/RegistrationApi.md#deleteregistration) | **DELETE** /registrations/{registrationId} | Delete &#x60;registrationId&#x60;
*RegistrationApi* | [**deleteRegistrationConfigurationSetting**](docs/Api/RegistrationApi.md#deleteregistrationconfigurationsetting) | **DELETE** /registrations/{registrationId}/configuration/{settingId} | Clears the &#x60;settingId&#x60; value for this registration
*RegistrationApi* | [**deleteRegistrationGlobalData**](docs/Api/RegistrationApi.md#deleteregistrationglobaldata) | **DELETE** /registrations/{registrationId}/globalData | delete global data associated with &#x60;registrationId&#x60;
*RegistrationApi* | [**deleteRegistrationInstance**](docs/Api/RegistrationApi.md#deleteregistrationinstance) | **DELETE** /registrations/{registrationId}/instances/{instanceId} | Delete instance &#x60;instanceId&#x60; of &#x60;registrationId&#x60;
*RegistrationApi* | [**deleteRegistrationInstanceConfigurationSetting**](docs/Api/RegistrationApi.md#deleteregistrationinstanceconfigurationsetting) | **DELETE** /registrations/{registrationId}/instances/{instanceId}/configuration/{settingId} | Clears the &#x60;settingId&#x60; value for this registration instance
*RegistrationApi* | [**deleteRegistrationProgress**](docs/Api/RegistrationApi.md#deleteregistrationprogress) | **DELETE** /registrations/{registrationId}/progress | delete registration progress (clear registration)
*RegistrationApi* | [**getRegistration**](docs/Api/RegistrationApi.md#getregistration) | **HEAD** /registrations/{registrationId} | Does this registration exist?
*RegistrationApi* | [**getRegistrationConfiguration**](docs/Api/RegistrationApi.md#getregistrationconfiguration) | **GET** /registrations/{registrationId}/configuration | Returns all configuration settings for this registration
*RegistrationApi* | [**getRegistrationInstanceConfiguration**](docs/Api/RegistrationApi.md#getregistrationinstanceconfiguration) | **GET** /registrations/{registrationId}/instances/{instanceId}/configuration | Returns all configuration settings for this registration instance
*RegistrationApi* | [**getRegistrationInstanceLaunchHistory**](docs/Api/RegistrationApi.md#getregistrationinstancelaunchhistory) | **GET** /registrations/{registrationId}/instances/{instanceId}/launchHistory | Returns history of this registration&#39;s launches
*RegistrationApi* | [**getRegistrationInstanceProgress**](docs/Api/RegistrationApi.md#getregistrationinstanceprogress) | **GET** /registrations/{registrationId}/instances/{instanceId} | Get registration progress for instance &#x60;instanceId&#x60; of &#x60;registrationId&#x60;
*RegistrationApi* | [**getRegistrationInstanceStatements**](docs/Api/RegistrationApi.md#getregistrationinstancestatements) | **GET** /registrations/{registrationId}/instances/{instanceId}/xAPIStatements | Get xAPI statements for instance &#x60;instanceId&#x60; of &#x60;registrationId&#x60;
*RegistrationApi* | [**getRegistrationInstances**](docs/Api/RegistrationApi.md#getregistrationinstances) | **GET** /registrations/{registrationId}/instances | Get all the instances of this the registration specified by the registration ID
*RegistrationApi* | [**getRegistrationLaunchHistory**](docs/Api/RegistrationApi.md#getregistrationlaunchhistory) | **GET** /registrations/{registrationId}/launchHistory | Returns history of this registration&#39;s launches
*RegistrationApi* | [**getRegistrationProgress**](docs/Api/RegistrationApi.md#getregistrationprogress) | **GET** /registrations/{registrationId} | Get registration progress for &#x60;registrationId&#x60;
*RegistrationApi* | [**getRegistrationStatements**](docs/Api/RegistrationApi.md#getregistrationstatements) | **GET** /registrations/{registrationId}/xAPIStatements | Get xAPI statements for &#x60;registrationId&#x60;
*RegistrationApi* | [**getRegistrations**](docs/Api/RegistrationApi.md#getregistrations) | **GET** /registrations | Gets a list of registrations including a summary of the status of each registration.
*RegistrationApi* | [**ltiBasicOutcomes**](docs/Api/RegistrationApi.md#ltibasicoutcomes) | **POST** /registrations/ltiBasicOutcomes | Endpoint for LTI basic outcomes
*RegistrationApi* | [**setRegistrationConfiguration**](docs/Api/RegistrationApi.md#setregistrationconfiguration) | **POST** /registrations/{registrationId}/configuration | Set configuration settings for this registration.
*RegistrationApi* | [**setRegistrationInstanceConfiguration**](docs/Api/RegistrationApi.md#setregistrationinstanceconfiguration) | **POST** /registrations/{registrationId}/instances/{instanceId}/configuration | Set configuration settings for this registration instance.
*XapiApi* | [**createStatementPipe**](docs/Api/XapiApi.md#createstatementpipe) | **POST** /xapi/statementPipes | Create an xAPI statement pipe.
*XapiApi* | [**createXapiCredential**](docs/Api/XapiApi.md#createxapicredential) | **POST** /xapi/credentials | Create an xAPI credential
*XapiApi* | [**deleteStatementPipe**](docs/Api/XapiApi.md#deletestatementpipe) | **DELETE** /xapi/statementPipes/{statementPipeId} | Deletes the xAPI statement pipe specified with the id &#x60;statementPipeId&#x60;
*XapiApi* | [**deleteXapiCredential**](docs/Api/XapiApi.md#deletexapicredential) | **DELETE** /xapi/credentials/{xapiCredentialId} | Deletes the xAPI credential specified with the id &#x60;xapiCredentialId&#x60;
*XapiApi* | [**getStatementPipe**](docs/Api/XapiApi.md#getstatementpipe) | **GET** /xapi/statementPipes/{statementPipeId} | Retrieves xAPI statement pipe specified by id &#x60;statementPipeId.&#x60;
*XapiApi* | [**getStatementPipes**](docs/Api/XapiApi.md#getstatementpipes) | **GET** /xapi/statementPipes | Get a list of all xAPI statement pipes
*XapiApi* | [**getXapiCredential**](docs/Api/XapiApi.md#getxapicredential) | **GET** /xapi/credentials/{xapiCredentialId} | Retrieves the xAPI credential specified by id &#x60;xapiCredentialId&#x60;
*XapiApi* | [**getXapiCredentials**](docs/Api/XapiApi.md#getxapicredentials) | **GET** /xapi/credentials | Get a list of all xAPI credentials
*XapiApi* | [**setStatementPipe**](docs/Api/XapiApi.md#setstatementpipe) | **PUT** /xapi/statementPipes/{statementPipeId} | Either edits an existing xAPI statement pipe or creates a new one, specified by id &#x60;statementPipeId&#x60;
*XapiApi* | [**setXapiCredential**](docs/Api/XapiApi.md#setxapicredential) | **PUT** /xapi/credentials/{xapiCredentialId} | Either edits an existing xAPI credential or creates a new one, specified by id &#x60;xapiCredentialId&#x60;


## Documentation For Models

 - [AboutPlayerSchema](docs/Model/AboutPlayerSchema.md)
 - [AboutSchema](docs/Model/AboutSchema.md)
 - [ActivityResultSchema](docs/Model/ActivityResultSchema.md)
 - [AssetFileSchema](docs/Model/AssetFileSchema.md)
 - [CommentSchema](docs/Model/CommentSchema.md)
 - [CompletionAmountSchema](docs/Model/CompletionAmountSchema.md)
 - [ConnectorContentItemSchema](docs/Model/ConnectorContentItemSchema.md)
 - [ConnectorContentListEntrySchema](docs/Model/ConnectorContentListEntrySchema.md)
 - [ConnectorContentListSchema](docs/Model/ConnectorContentListSchema.md)
 - [ConnectorContentSearchContextSchema](docs/Model/ConnectorContentSearchContextSchema.md)
 - [ConnectorContentSearchSchema](docs/Model/ConnectorContentSearchSchema.md)
 - [ConnectorListSchema](docs/Model/ConnectorListSchema.md)
 - [ConnectorSchema](docs/Model/ConnectorSchema.md)
 - [ConnectorTypeSchema](docs/Model/ConnectorTypeSchema.md)
 - [CourseActivitySchema](docs/Model/CourseActivitySchema.md)
 - [CourseConnectorSchema](docs/Model/CourseConnectorSchema.md)
 - [CourseListNonPagedSchema](docs/Model/CourseListNonPagedSchema.md)
 - [CourseListSchema](docs/Model/CourseListSchema.md)
 - [CourseReferenceSchema](docs/Model/CourseReferenceSchema.md)
 - [CourseSchema](docs/Model/CourseSchema.md)
 - [CreateConnectorSchema](docs/Model/CreateConnectorSchema.md)
 - [CreateDispatchIdSchema](docs/Model/CreateDispatchIdSchema.md)
 - [CreateDispatchListSchema](docs/Model/CreateDispatchListSchema.md)
 - [CreateDispatchSchema](docs/Model/CreateDispatchSchema.md)
 - [CreateRegistrationSchema](docs/Model/CreateRegistrationSchema.md)
 - [CreateRegistrationWithLaunchLinkSchema](docs/Model/CreateRegistrationWithLaunchLinkSchema.md)
 - [CredentialCreatedSchema](docs/Model/CredentialCreatedSchema.md)
 - [CredentialListSchema](docs/Model/CredentialListSchema.md)
 - [CredentialRequestSchema](docs/Model/CredentialRequestSchema.md)
 - [CredentialSchema](docs/Model/CredentialSchema.md)
 - [DestinationIdSchema](docs/Model/DestinationIdSchema.md)
 - [DestinationListSchema](docs/Model/DestinationListSchema.md)
 - [DestinationSchema](docs/Model/DestinationSchema.md)
 - [DispatchIdListSchema](docs/Model/DispatchIdListSchema.md)
 - [DispatchIdSchema](docs/Model/DispatchIdSchema.md)
 - [DispatchListSchema](docs/Model/DispatchListSchema.md)
 - [DispatchLti13InfoSchema](docs/Model/DispatchLti13InfoSchema.md)
 - [DispatchLtiInfoSchema](docs/Model/DispatchLtiInfoSchema.md)
 - [DispatchRegistrationCountSchema](docs/Model/DispatchRegistrationCountSchema.md)
 - [DispatchSchema](docs/Model/DispatchSchema.md)
 - [EnabledSchema](docs/Model/EnabledSchema.md)
 - [IdListSchema](docs/Model/IdListSchema.md)
 - [ImportAdHocReferenceRequestSchema](docs/Model/ImportAdHocReferenceRequestSchema.md)
 - [ImportAssetRequestSchema](docs/Model/ImportAssetRequestSchema.md)
 - [ImportConnectorRequestSchema](docs/Model/ImportConnectorRequestSchema.md)
 - [ImportFetchRequestSchema](docs/Model/ImportFetchRequestSchema.md)
 - [ImportJobResultSchema](docs/Model/ImportJobResultSchema.md)
 - [ImportLti11LinkReferenceRequestSchema](docs/Model/ImportLti11LinkReferenceRequestSchema.md)
 - [ImportLti13LinkReferenceRequestSchema](docs/Model/ImportLti13LinkReferenceRequestSchema.md)
 - [ImportMediaFileReferenceRequestSchema](docs/Model/ImportMediaFileReferenceRequestSchema.md)
 - [ImportReferenceRequestSchema](docs/Model/ImportReferenceRequestSchema.md)
 - [ImportRequestSchema](docs/Model/ImportRequestSchema.md)
 - [ImportResultSchema](docs/Model/ImportResultSchema.md)
 - [IntegerResultSchema](docs/Model/IntegerResultSchema.md)
 - [ItemValuePairSchema](docs/Model/ItemValuePairSchema.md)
 - [JsonWebKeySetSchema](docs/Model/JsonWebKeySetSchema.md)
 - [JsonWebKeySetSchemaKeys](docs/Model/JsonWebKeySetSchemaKeys.md)
 - [LaunchHistoryListSchema](docs/Model/LaunchHistoryListSchema.md)
 - [LaunchHistorySchema](docs/Model/LaunchHistorySchema.md)
 - [LaunchLinkRequestSchema](docs/Model/LaunchLinkRequestSchema.md)
 - [LaunchLinkSchema](docs/Model/LaunchLinkSchema.md)
 - [LaunchPageResponseSchema](docs/Model/LaunchPageResponseSchema.md)
 - [LearnerPreferenceSchema](docs/Model/LearnerPreferenceSchema.md)
 - [LearnerSchema](docs/Model/LearnerSchema.md)
 - [LinkSchema](docs/Model/LinkSchema.md)
 - [Lti13PlatformConfigurationSchema](docs/Model/Lti13PlatformConfigurationSchema.md)
 - [Lti13ToolConfigurationSchema](docs/Model/Lti13ToolConfigurationSchema.md)
 - [LtiLinkMetadataSchema](docs/Model/LtiLinkMetadataSchema.md)
 - [LtiLinkMetadataSchemaContext](docs/Model/LtiLinkMetadataSchemaContext.md)
 - [LtiReporterIdSchema](docs/Model/LtiReporterIdSchema.md)
 - [LtiReporterSchema](docs/Model/LtiReporterSchema.md)
 - [MediaFileMetadataSchema](docs/Model/MediaFileMetadataSchema.md)
 - [MessageSchema](docs/Model/MessageSchema.md)
 - [MetadataSchema](docs/Model/MetadataSchema.md)
 - [OAuthCredentialsSchema](docs/Model/OAuthCredentialsSchema.md)
 - [ObjectiveSchema](docs/Model/ObjectiveSchema.md)
 - [PIIDeletionRequestResultSchema](docs/Model/PIIDeletionRequestResultSchema.md)
 - [PIIDeletionRequestSchema](docs/Model/PIIDeletionRequestSchema.md)
 - [PIIDeletionResultSchema](docs/Model/PIIDeletionResultSchema.md)
 - [PermissionsSchema](docs/Model/PermissionsSchema.md)
 - [PingSchema](docs/Model/PingSchema.md)
 - [PlayerConfigurationResultsSchema](docs/Model/PlayerConfigurationResultsSchema.md)
 - [PlayerConfigurationSchema](docs/Model/PlayerConfigurationSchema.md)
 - [PlayerInfoSchema](docs/Model/PlayerInfoSchema.md)
 - [PlayerResultsSchema](docs/Model/PlayerResultsSchema.md)
 - [PluginInformationSchema](docs/Model/PluginInformationSchema.md)
 - [PluginVersionSchema](docs/Model/PluginVersionSchema.md)
 - [PostBackSchema](docs/Model/PostBackSchema.md)
 - [RefreshConnectorResultListSchema](docs/Model/RefreshConnectorResultListSchema.md)
 - [RefreshConnectorResultSchema](docs/Model/RefreshConnectorResultSchema.md)
 - [RegistrationInstancingSchema](docs/Model/RegistrationInstancingSchema.md)
 - [RegistrationListSchema](docs/Model/RegistrationListSchema.md)
 - [RegistrationSchema](docs/Model/RegistrationSchema.md)
 - [ResponseErrorSchema](docs/Model/ResponseErrorSchema.md)
 - [RotateKeysSchema](docs/Model/RotateKeysSchema.md)
 - [RuntimeInteractionSchema](docs/Model/RuntimeInteractionSchema.md)
 - [RuntimeObjectiveSchema](docs/Model/RuntimeObjectiveSchema.md)
 - [RuntimeSchema](docs/Model/RuntimeSchema.md)
 - [ScoreSchema](docs/Model/ScoreSchema.md)
 - [SettingItem](docs/Model/SettingItem.md)
 - [SettingListSchema](docs/Model/SettingListSchema.md)
 - [SettingMetadata](docs/Model/SettingMetadata.md)
 - [SettingValidValue](docs/Model/SettingValidValue.md)
 - [SettingsIndividualSchema](docs/Model/SettingsIndividualSchema.md)
 - [SettingsPostSchema](docs/Model/SettingsPostSchema.md)
 - [SharedDataEntrySchema](docs/Model/SharedDataEntrySchema.md)
 - [StaticPropertiesSchema](docs/Model/StaticPropertiesSchema.md)
 - [StringResultSchema](docs/Model/StringResultSchema.md)
 - [TenantListSchema](docs/Model/TenantListSchema.md)
 - [TenantProperties](docs/Model/TenantProperties.md)
 - [TenantSchema](docs/Model/TenantSchema.md)
 - [TitleSchema](docs/Model/TitleSchema.md)
 - [TokenInfoSchema](docs/Model/TokenInfoSchema.md)
 - [TokenRequestSchema](docs/Model/TokenRequestSchema.md)
 - [UpdateConnectorSchema](docs/Model/UpdateConnectorSchema.md)
 - [UpdateDispatchSchema](docs/Model/UpdateDispatchSchema.md)
 - [UserCountDetailSchema](docs/Model/UserCountDetailSchema.md)
 - [UserCountSummarySchema](docs/Model/UserCountSummarySchema.md)
 - [XapiAccount](docs/Model/XapiAccount.md)
 - [XapiActivity](docs/Model/XapiActivity.md)
 - [XapiActivityDefinition](docs/Model/XapiActivityDefinition.md)
 - [XapiAgentGroup](docs/Model/XapiAgentGroup.md)
 - [XapiAttachment](docs/Model/XapiAttachment.md)
 - [XapiContext](docs/Model/XapiContext.md)
 - [XapiContextActivity](docs/Model/XapiContextActivity.md)
 - [XapiCredentialAuthTypeSchema](docs/Model/XapiCredentialAuthTypeSchema.md)
 - [XapiCredentialPermissionsLevelSchema](docs/Model/XapiCredentialPermissionsLevelSchema.md)
 - [XapiCredentialPostSchema](docs/Model/XapiCredentialPostSchema.md)
 - [XapiCredentialPutSchema](docs/Model/XapiCredentialPutSchema.md)
 - [XapiCredentialSchema](docs/Model/XapiCredentialSchema.md)
 - [XapiCredentialsListSchema](docs/Model/XapiCredentialsListSchema.md)
 - [XapiEndpointSchema](docs/Model/XapiEndpointSchema.md)
 - [XapiInteractionComponent](docs/Model/XapiInteractionComponent.md)
 - [XapiResult](docs/Model/XapiResult.md)
 - [XapiScore](docs/Model/XapiScore.md)
 - [XapiSelfSourcedPipeSchema](docs/Model/XapiSelfSourcedPipeSchema.md)
 - [XapiStatement](docs/Model/XapiStatement.md)
 - [XapiStatementPipeListSchema](docs/Model/XapiStatementPipeListSchema.md)
 - [XapiStatementPipePostSchema](docs/Model/XapiStatementPipePostSchema.md)
 - [XapiStatementPipePutSchema](docs/Model/XapiStatementPipePutSchema.md)
 - [XapiStatementPipeSchema](docs/Model/XapiStatementPipeSchema.md)
 - [XapiStatementReference](docs/Model/XapiStatementReference.md)
 - [XapiStatementResult](docs/Model/XapiStatementResult.md)
 - [XapiVerb](docs/Model/XapiVerb.md)


## Documentation For Authorization


## basic

- **Type**: HTTP basic authentication

## oauth

- **Type**: OAuth
- **Flow**: implicit
- **Authorization URL**: /authorize
- **Scopes**: 
 - **read**: Grants read access
 - **write**: Grants write access
 - **delete**: Grants deletion access
 - **admin**: Grants read, write, and account management access
 - **admin:read**: Grants read-only admin access
 - **admin:createTenant**: Grants tenant creation access
 - **admin:deleteData**: Grants ability to delete an entire tenants data or do PII deletion
 - **admin:writeConfiguration**: Grants write administrative configuration settings
 - **admin:writeCredential**: Grants ability to create a credential
 - **admin:connector**: Grants access to administer content connectors
 - **read:connectorContent**: Grants access to read content connector list of available content
 - **read:course**: Grants read access to course resources
 - **write:course**: Grants write access to course resources
 - **delete:course**: Grants deletion access to course resources
 - **read:dispatch**: Grants read access to dispatch resources
 - **write:dispatch**: Grants write access to dispatch resources
 - **delete:dispatch**: Grants deletion access to dispatch resources
 - **read:ping**: Grants read access to the ping resource
 - **read:about**: Grants read access to about resource
 - **read:registration**: Grants read access to registration resources
 - **write:registration**: Grants write access to registration resources
 - **delete:registration**: Grants deletion access to registration resources
 - **read:xapicredential**: Grants read access to xapi credential resources
 - **write:xapicredential**: Grants write access to xapi credential resources
 - **delete:xapicredential**: Grants deletion access to xapi credential resources
 - **read:xapipipe**: Grants read access to xapi pipe resources
 - **write:xapipipe**: Grants write access to xapi pipe resources
 - **delete:xapipipe**: Grants deletion access to xapi pipe resources
 - **configure:server**: Includes server administrator settings when managing configuration
 - **request:secrets**: Grants read access to encrypted configuration settings
 - **write:player**: Grants write access to the player resources
 - **read:player**: Grants read access to the player resources
 - **read:contentVault**: Grants read access to the content vault resources


## Author




