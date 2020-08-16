<?php
/**
 * SettingItem
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
 * SettingItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SettingItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'settingItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'effective_value' => 'string',
        'effective_value_source' => 'string',
        'explicit_value' => 'string',
        'metadata' => '\Swagger\Client\Model\SettingMetadata'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'effective_value' => null,
        'effective_value_source' => null,
        'explicit_value' => null,
        'metadata' => null
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
        'id' => 'id',
        'effective_value' => 'effectiveValue',
        'effective_value_source' => 'effectiveValueSource',
        'explicit_value' => 'explicitValue',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'effective_value' => 'setEffectiveValue',
        'effective_value_source' => 'setEffectiveValueSource',
        'explicit_value' => 'setExplicitValue',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'effective_value' => 'getEffectiveValue',
        'effective_value_source' => 'getEffectiveValueSource',
        'explicit_value' => 'getExplicitValue',
        'metadata' => 'getMetadata'
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

    const EFFECTIVE_VALUE_SOURCE__DEFAULT = 'default';
    const EFFECTIVE_VALUE_SOURCE_FALLBACK = 'fallback';
    const EFFECTIVE_VALUE_SOURCE_BASE = 'base';
    const EFFECTIVE_VALUE_SOURCE_SYSTEM = 'system';
    const EFFECTIVE_VALUE_SOURCE_LEARNING_STANDARD = 'learningStandard';
    const EFFECTIVE_VALUE_SOURCE_TENANT = 'tenant';
    const EFFECTIVE_VALUE_SOURCE_LEARNING_STANDARD_FOR_TENANT = 'learningStandardForTenant';
    const EFFECTIVE_VALUE_SOURCE_DISPATCH_DESTINATION = 'dispatchDestination';
    const EFFECTIVE_VALUE_SOURCE_COURSE = 'course';
    const EFFECTIVE_VALUE_SOURCE_DISPATCH_DESTINATION_FOR_COURSE = 'dispatchDestinationForCourse';
    const EFFECTIVE_VALUE_SOURCE_REGISTRATION = 'registration';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEffectiveValueSourceAllowableValues()
    {
        return [
            self::EFFECTIVE_VALUE_SOURCE__DEFAULT,
            self::EFFECTIVE_VALUE_SOURCE_FALLBACK,
            self::EFFECTIVE_VALUE_SOURCE_BASE,
            self::EFFECTIVE_VALUE_SOURCE_SYSTEM,
            self::EFFECTIVE_VALUE_SOURCE_LEARNING_STANDARD,
            self::EFFECTIVE_VALUE_SOURCE_TENANT,
            self::EFFECTIVE_VALUE_SOURCE_LEARNING_STANDARD_FOR_TENANT,
            self::EFFECTIVE_VALUE_SOURCE_DISPATCH_DESTINATION,
            self::EFFECTIVE_VALUE_SOURCE_COURSE,
            self::EFFECTIVE_VALUE_SOURCE_DISPATCH_DESTINATION_FOR_COURSE,
            self::EFFECTIVE_VALUE_SOURCE_REGISTRATION,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['effective_value'] = isset($data['effective_value']) ? $data['effective_value'] : null;
        $this->container['effective_value_source'] = isset($data['effective_value_source']) ? $data['effective_value_source'] : null;
        $this->container['explicit_value'] = isset($data['explicit_value']) ? $data['explicit_value'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEffectiveValueSourceAllowableValues();
        if (!is_null($this->container['effective_value_source']) && !in_array($this->container['effective_value_source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'effective_value_source', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets effective_value
     *
     * @return string
     */
    public function getEffectiveValue()
    {
        return $this->container['effective_value'];
    }

    /**
     * Sets effective_value
     *
     * @param string $effective_value The value of this setting that would be used if read at this level, including defaults, fallback, and values set at less specific levels.
     *
     * @return $this
     */
    public function setEffectiveValue($effective_value)
    {
        $this->container['effective_value'] = $effective_value;

        return $this;
    }

    /**
     * Gets effective_value_source
     *
     * @return string
     */
    public function getEffectiveValueSource()
    {
        return $this->container['effective_value_source'];
    }

    /**
     * Sets effective_value_source
     *
     * @param string $effective_value_source The source of this effective value, default, fallback, or the level the value was set at.
     *
     * @return $this
     */
    public function setEffectiveValueSource($effective_value_source)
    {
        $allowedValues = $this->getEffectiveValueSourceAllowableValues();
        if (!is_null($effective_value_source) && !in_array($effective_value_source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'effective_value_source', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['effective_value_source'] = $effective_value_source;

        return $this;
    }

    /**
     * Gets explicit_value
     *
     * @return string
     */
    public function getExplicitValue()
    {
        return $this->container['explicit_value'];
    }

    /**
     * Sets explicit_value
     *
     * @param string $explicit_value The value of this setting that is explicitly set at this level. If not present, the setting is not specified at this level.
     *
     * @return $this
     */
    public function setExplicitValue($explicit_value)
    {
        $this->container['explicit_value'] = $explicit_value;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \Swagger\Client\Model\SettingMetadata
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \Swagger\Client\Model\SettingMetadata $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

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


