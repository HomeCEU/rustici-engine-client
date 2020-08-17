<?php
/**
 * LtiLinkMetadataSchemaContext
 *
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
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * LtiLinkMetadataSchemaContext Class Doc Comment
 *
 * @category Class
 * @description Schema that defines the context (group of related content, such as a course) the link being imported belongs to
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LtiLinkMetadataSchemaContext implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LtiLinkMetadataSchema_context';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'context_id' => 'string',
        'context_title' => 'string',
        'context_label' => 'string',
        'context_type' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'context_id' => null,
        'context_title' => null,
        'context_label' => null,
        'context_type' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'context_id' => 'contextId',
        'context_title' => 'contextTitle',
        'context_label' => 'contextLabel',
        'context_type' => 'contextType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'context_id' => 'setContextId',
        'context_title' => 'setContextTitle',
        'context_label' => 'setContextLabel',
        'context_type' => 'setContextType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'context_id' => 'getContextId',
        'context_title' => 'getContextTitle',
        'context_label' => 'getContextLabel',
        'context_type' => 'getContextType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['context_id'] = isset($data['context_id']) ? $data['context_id'] : null;
        $this->container['context_title'] = isset($data['context_title']) ? $data['context_title'] : null;
        $this->container['context_label'] = isset($data['context_label']) ? $data['context_label'] : null;
        $this->container['context_type'] = isset($data['context_type']) ? $data['context_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets context_id
     *
     * @return string
     */
    public function getContextId()
    {
        return $this->container['context_id'];
    }

    /**
     * Sets context_id
     *
     * @param string $context_id Unique, opaque identifier for the context. For LTI 1.3, this identifier must not exceed 255 ASCII characters and must be provided if any other context claims are also provided.
     *
     * @return $this
     */
    public function setContextId($context_id)
    {
        $this->container['context_id'] = $context_id;

        return $this;
    }

    /**
     * Gets context_title
     *
     * @return string
     */
    public function getContextTitle()
    {
        return $this->container['context_title'];
    }

    /**
     * Sets context_title
     *
     * @param string $context_title Title for the context
     *
     * @return $this
     */
    public function setContextTitle($context_title)
    {
        $this->container['context_title'] = $context_title;

        return $this;
    }

    /**
     * Gets context_label
     *
     * @return string
     */
    public function getContextLabel()
    {
        return $this->container['context_label'];
    }

    /**
     * Sets context_label
     *
     * @param string $context_label Short identifier for the context, such as a course code
     *
     * @return $this
     */
    public function setContextLabel($context_label)
    {
        $this->container['context_label'] = $context_label;

        return $this;
    }

    /**
     * Gets context_type
     *
     * @return string[]
     */
    public function getContextType()
    {
        return $this->container['context_type'];
    }

    /**
     * Sets context_type
     *
     * @param string[] $context_type The type of context the referenced link belongs to. Per LTI specifications, if this parameter is present the array must include at least one known context type for that LTI version. It may include other context types but by best practice they should be fully-qualified URNs (for LTI 1.1) or fully-qualified URIs (for LTI 1.3). Valid context type values for LTI 1.1 are: urn:lti:context-type:ims/lis/CourseOffering, CourseOffering, urn:lti:context-type:ims/lis/CourseSection, CourseSection, urn:lti:context-type:ims/lis/CourseTemplate, CourseTemplate, urn:lti:context-type:ims/lis/Group, Group. Valid context type values for LTI 1.3 are http://purl.imsglobal.org/vocab/lis/v2/course#CourseOffering, http://purl.imsglobal.org/vocab/lis/v2/course#CourseSection, http://purl.imsglobal.org/vocab/lis/v2/course#CourseTemplate, http://purl.imsglobal.org/vocab/lis/v2/course#Group.
     *
     * @return $this
     */
    public function setContextType($context_type)
    {
        $this->container['context_type'] = $context_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

