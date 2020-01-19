<?php
/**
 * AppManagementApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Rustici Engine API
 *
 * Rustici Engine API
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.16
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use Swagger\Client\Configuration;
use Swagger\Client\ApiException;
use Swagger\Client\ObjectSerializer;

/**
 * AppManagementApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AppManagementApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for createCredential
     *
     * Create credential.
     *
     */
    public function testCreateCredential()
    {
    }

    /**
     * Test case for createOrUpdateTenant
     *
     * Create or update tenant.
     *
     */
    public function testCreateOrUpdateTenant()
    {
    }

    /**
     * Test case for createToken
     *
     * Create token.
     *
     */
    public function testCreateToken()
    {
    }

    /**
     * Test case for deleteApplicationConfigurationSetting
     *
     * Clears the `settingId` value for this level.
     *
     */
    public function testDeleteApplicationConfigurationSetting()
    {
    }

    /**
     * Test case for deleteCredential
     *
     * Removes `credentialId` credentials.
     *
     */
    public function testDeleteCredential()
    {
    }

    /**
     * Test case for deleteTenant
     *
     * Delete a tenant. Warning: If tenant data is not deleted first, this will leave orphaned rows that can only be deleted manually. Does not remove any data, but does remove mapping between name and key used to store data. Consider deactivating instead..
     *
     */
    public function testDeleteTenant()
    {
    }

    /**
     * Test case for deleteTenantData
     *
     * Delete all of a tenant's data..
     *
     */
    public function testDeleteTenantData()
    {
    }

    /**
     * Test case for getApplicationConfiguration
     *
     * Returns all configuration settings for this level.
     *
     */
    public function testGetApplicationConfiguration()
    {
    }

    /**
     * Test case for getAuthenticatedCredential
     *
     * Get information about the credential used to authenticate this request..
     *
     */
    public function testGetAuthenticatedCredential()
    {
    }

    /**
     * Test case for getCredential
     *
     * Get information on `credentialId` credential.
     *
     */
    public function testGetCredential()
    {
    }

    /**
     * Test case for getCredentials
     *
     * List of credentials.
     *
     */
    public function testGetCredentials()
    {
    }

    /**
     * Test case for getPIIDeletionJob
     *
     * Check the status of a PII deletion job with the provided job id..
     *
     */
    public function testGetPIIDeletionJob()
    {
    }

    /**
     * Test case for getTenantList
     *
     * Get list of all tenants.
     *
     */
    public function testGetTenantList()
    {
    }

    /**
     * Test case for inspectToken
     *
     * Inspect token.
     *
     */
    public function testInspectToken()
    {
    }

    /**
     * Test case for postPIIDeletionJob
     *
     * Initiate a job to delete a user's Personal Identifying Information from the system..
     *
     */
    public function testPostPIIDeletionJob()
    {
    }

    /**
     * Test case for postUpdateEncryptedSetting
     *
     * Re-write settings, and statement pipe passwords using the current encryption settings. For password rotation..
     *
     */
    public function testPostUpdateEncryptedSetting()
    {
    }

    /**
     * Test case for resetCredentialSecret
     *
     * Reset credential secret.
     *
     */
    public function testResetCredentialSecret()
    {
    }

    /**
     * Test case for setApplicationConfiguration
     *
     * Set configuration settings for this level..
     *
     */
    public function testSetApplicationConfiguration()
    {
    }

    /**
     * Test case for updateCredential
     *
     * Update `credentialId` credentials.
     *
     */
    public function testUpdateCredential()
    {
    }
}
