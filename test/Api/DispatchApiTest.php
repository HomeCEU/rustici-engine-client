<?php
/**
 * DispatchApiTest
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
 * Swagger Codegen version: 2.4.15
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * DispatchApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DispatchApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for createDestinations
     *
     * Create one or more destinations.
     *
     */
    public function testCreateDestinations()
    {
    }

    /**
     * Test case for createDispatches
     *
     * Create multiple dispatches.
     *
     */
    public function testCreateDispatches()
    {
    }

    /**
     * Test case for deleteDestination
     *
     * Delete the destination with id `destinationId`.
     *
     */
    public function testDeleteDestination()
    {
    }

    /**
     * Test case for deleteDestinationDispatches
     *
     * Delete all dispatches associated with this destination.
     *
     */
    public function testDeleteDestinationDispatches()
    {
    }

    /**
     * Test case for deleteDispatch
     *
     * Delete the dispatch with id `dispatchId`.
     *
     */
    public function testDeleteDispatch()
    {
    }

    /**
     * Test case for enableRegistrationInstancing
     *
     * Enable or disable registration instancing.
     *
     */
    public function testEnableRegistrationInstancing()
    {
    }

    /**
     * Test case for getDestination
     *
     * Get the destination with id `destinationId`.
     *
     */
    public function testGetDestination()
    {
    }

    /**
     * Test case for getDestinationDispatchRegistrationCount
     *
     * Get the registration count for all related dispatch registrations.
     *
     */
    public function testGetDestinationDispatchRegistrationCount()
    {
    }

    /**
     * Test case for getDestinationDispatchZip
     *
     * Get a ZIP file containing all dispatch packages related to a destination..
     *
     */
    public function testGetDestinationDispatchZip()
    {
    }

    /**
     * Test case for getDestinationDispatches
     *
     * Get a list of related dispatches.
     *
     */
    public function testGetDestinationDispatches()
    {
    }

    /**
     * Test case for getDestinations
     *
     * Get a list of destinations.
     *
     */
    public function testGetDestinations()
    {
    }

    /**
     * Test case for getDispatch
     *
     * Get the dispatch with id `dispatchId`.
     *
     */
    public function testGetDispatch()
    {
    }

    /**
     * Test case for getDispatchEnabled
     *
     * Returns boolean indicating if dispatch with id `dispatchId` is enabled.
     *
     */
    public function testGetDispatchEnabled()
    {
    }

    /**
     * Test case for getDispatchRegistrationCount
     *
     * Get the registration count for this dispatch, and the date and time of the last count reset, if any..
     *
     */
    public function testGetDispatchRegistrationCount()
    {
    }

    /**
     * Test case for getDispatchZip
     *
     * Get the ZIP dispatch package..
     *
     */
    public function testGetDispatchZip()
    {
    }

    /**
     * Test case for getDispatches
     *
     * Get a list of dispatches.
     *
     */
    public function testGetDispatches()
    {
    }

    /**
     * Test case for getLTIDispatch
     *
     * Get the information necessary to launch this dispatch using the IMS LTI specification..
     *
     */
    public function testGetLTIDispatch()
    {
    }

    /**
     * Test case for getLti13Dispatch
     *
     * Get the information necessary to import this dispatch as a resource link according to the IMS LTI 1.3 specification..
     *
     */
    public function testGetLti13Dispatch()
    {
    }

    /**
     * Test case for getLti13DispatchLaunch
     *
     * Launch this dispatch using the IMS LTI 1.3 specification..
     *
     */
    public function testGetLti13DispatchLaunch()
    {
    }

    /**
     * Test case for getLti13OidcLoginInitiation
     *
     * Initiate an OIDC Login flow for the destination with id `destinationId`.
     *
     */
    public function testGetLti13OidcLoginInitiation()
    {
    }

    /**
     * Test case for getLti13ToolConfigurationSchema
     *
     * Get the information needed to configure a LTI 1.3 platform with the destination id `destinationId`.
     *
     */
    public function testGetLti13ToolConfigurationSchema()
    {
    }

    /**
     * Test case for getToolJsonWebKeySet
     *
     * Get JSON Web Key Set.
     *
     */
    public function testGetToolJsonWebKeySet()
    {
    }

    /**
     * Test case for postDispatchLtiReporters
     *
     * Set up a temporary LTI reporter; for use by products that use their own LTI entry points.
     *
     */
    public function testPostDispatchLtiReporters()
    {
    }

    /**
     * Test case for postLti13AuthorizationResponse
     *
     * Process an LTI 1.3 OIDC Authorization Response for the destination with id `destinationId`.
     *
     */
    public function testPostLti13AuthorizationResponse()
    {
    }

    /**
     * Test case for postLti13OidcLoginInitiation
     *
     * Initiate an OIDC Login flow for the destination with id `destinationId`.
     *
     */
    public function testPostLti13OidcLoginInitiation()
    {
    }

    /**
     * Test case for postRotateToolKeys
     *
     * Rotate RSA Keys.
     *
     */
    public function testPostRotateToolKeys()
    {
    }

    /**
     * Test case for resetDestinationDispatchRegistrationCount
     *
     * Reset the registration count for related dispatches..
     *
     */
    public function testResetDestinationDispatchRegistrationCount()
    {
    }

    /**
     * Test case for resetDispatchRegistrationCount
     *
     * Reset the registration count for this dispatch..
     *
     */
    public function testResetDispatchRegistrationCount()
    {
    }

    /**
     * Test case for setDestination
     *
     * Update the destination with id `destinationId`.
     *
     */
    public function testSetDestination()
    {
    }

    /**
     * Test case for setDestinationDispatchEnabled
     *
     * Enable or disable all related dispatches.
     *
     */
    public function testSetDestinationDispatchEnabled()
    {
    }

    /**
     * Test case for setDispatchEnabled
     *
     * Enable or disable the dispatch.
     *
     */
    public function testSetDispatchEnabled()
    {
    }

    /**
     * Test case for updateDispatch
     *
     * Update the dispatch with id `dispatchId`.
     *
     */
    public function testUpdateDispatch()
    {
    }
}
