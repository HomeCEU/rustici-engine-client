<?php
/**
 * ActivityResultSchema
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
 * Swagger Codegen version: 3.0.16
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
 * ActivityResultSchema Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActivityResultSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ActivityResultSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'title' => 'string',
'attempts' => 'int',
'activity_completion' => 'string',
'activity_success' => 'string',
'score' => '\Swagger\Client\Model\ScoreSchema',
'time_tracked' => 'string',
'completion_amount' => '\Swagger\Client\Model\CompletionAmountSchema',
'suspended' => 'bool',
'children' => '\Swagger\Client\Model\ActivityResultSchema[]',
'objectives' => '\Swagger\Client\Model\ObjectiveSchema[]',
'static_properties' => '\Swagger\Client\Model\StaticPropertiesSchema',
'runtime' => '\Swagger\Client\Model\RuntimeSchema'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'title' => null,
'attempts' => 'int32',
'activity_completion' => null,
'activity_success' => null,
'score' => null,
'time_tracked' => null,
'completion_amount' => null,
'suspended' => null,
'children' => null,
'objectives' => null,
'static_properties' => null,
'runtime' => null    ];

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
'title' => 'title',
'attempts' => 'attempts',
'activity_completion' => 'activityCompletion',
'activity_success' => 'activitySuccess',
'score' => 'score',
'time_tracked' => 'timeTracked',
'completion_amount' => 'completionAmount',
'suspended' => 'suspended',
'children' => 'children',
'objectives' => 'objectives',
'static_properties' => 'staticProperties',
'runtime' => 'runtime'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'title' => 'setTitle',
'attempts' => 'setAttempts',
'activity_completion' => 'setActivityCompletion',
'activity_success' => 'setActivitySuccess',
'score' => 'setScore',
'time_tracked' => 'setTimeTracked',
'completion_amount' => 'setCompletionAmount',
'suspended' => 'setSuspended',
'children' => 'setChildren',
'objectives' => 'setObjectives',
'static_properties' => 'setStaticProperties',
'runtime' => 'setRuntime'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'title' => 'getTitle',
'attempts' => 'getAttempts',
'activity_completion' => 'getActivityCompletion',
'activity_success' => 'getActivitySuccess',
'score' => 'getScore',
'time_tracked' => 'getTimeTracked',
'completion_amount' => 'getCompletionAmount',
'suspended' => 'getSuspended',
'children' => 'getChildren',
'objectives' => 'getObjectives',
'static_properties' => 'getStaticProperties',
'runtime' => 'getRuntime'    ];

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

    const ACTIVITY_COMPLETION_UNKNOWN = 'UNKNOWN';
const ACTIVITY_COMPLETION_COMPLETED = 'COMPLETED';
const ACTIVITY_COMPLETION_INCOMPLETE = 'INCOMPLETE';
const ACTIVITY_SUCCESS_UNKNOWN = 'UNKNOWN';
const ACTIVITY_SUCCESS_PASSED = 'PASSED';
const ACTIVITY_SUCCESS_FAILED = 'FAILED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActivityCompletionAllowableValues()
    {
        return [
            self::ACTIVITY_COMPLETION_UNKNOWN,
self::ACTIVITY_COMPLETION_COMPLETED,
self::ACTIVITY_COMPLETION_INCOMPLETE,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActivitySuccessAllowableValues()
    {
        return [
            self::ACTIVITY_SUCCESS_UNKNOWN,
self::ACTIVITY_SUCCESS_PASSED,
self::ACTIVITY_SUCCESS_FAILED,        ];
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['attempts'] = isset($data['attempts']) ? $data['attempts'] : null;
        $this->container['activity_completion'] = isset($data['activity_completion']) ? $data['activity_completion'] : null;
        $this->container['activity_success'] = isset($data['activity_success']) ? $data['activity_success'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['time_tracked'] = isset($data['time_tracked']) ? $data['time_tracked'] : null;
        $this->container['completion_amount'] = isset($data['completion_amount']) ? $data['completion_amount'] : null;
        $this->container['suspended'] = isset($data['suspended']) ? $data['suspended'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['objectives'] = isset($data['objectives']) ? $data['objectives'] : null;
        $this->container['static_properties'] = isset($data['static_properties']) ? $data['static_properties'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getActivityCompletionAllowableValues();
        if (!is_null($this->container['activity_completion']) && !in_array($this->container['activity_completion'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'activity_completion', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getActivitySuccessAllowableValues();
        if (!is_null($this->container['activity_success']) && !in_array($this->container['activity_success'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'activity_success', must be one of '%s'",
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets attempts
     *
     * @return int
     */
    public function getAttempts()
    {
        return $this->container['attempts'];
    }

    /**
     * Sets attempts
     *
     * @param int $attempts attempts
     *
     * @return $this
     */
    public function setAttempts($attempts)
    {
        $this->container['attempts'] = $attempts;

        return $this;
    }

    /**
     * Gets activity_completion
     *
     * @return string
     */
    public function getActivityCompletion()
    {
        return $this->container['activity_completion'];
    }

    /**
     * Sets activity_completion
     *
     * @param string $activity_completion activity_completion
     *
     * @return $this
     */
    public function setActivityCompletion($activity_completion)
    {
        $allowedValues = $this->getActivityCompletionAllowableValues();
        if (!is_null($activity_completion) && !in_array($activity_completion, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'activity_completion', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['activity_completion'] = $activity_completion;

        return $this;
    }

    /**
     * Gets activity_success
     *
     * @return string
     */
    public function getActivitySuccess()
    {
        return $this->container['activity_success'];
    }

    /**
     * Sets activity_success
     *
     * @param string $activity_success activity_success
     *
     * @return $this
     */
    public function setActivitySuccess($activity_success)
    {
        $allowedValues = $this->getActivitySuccessAllowableValues();
        if (!is_null($activity_success) && !in_array($activity_success, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'activity_success', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['activity_success'] = $activity_success;

        return $this;
    }

    /**
     * Gets score
     *
     * @return \Swagger\Client\Model\ScoreSchema
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param \Swagger\Client\Model\ScoreSchema $score score
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets time_tracked
     *
     * @return string
     */
    public function getTimeTracked()
    {
        return $this->container['time_tracked'];
    }

    /**
     * Sets time_tracked
     *
     * @param string $time_tracked time_tracked
     *
     * @return $this
     */
    public function setTimeTracked($time_tracked)
    {
        $this->container['time_tracked'] = $time_tracked;

        return $this;
    }

    /**
     * Gets completion_amount
     *
     * @return \Swagger\Client\Model\CompletionAmountSchema
     */
    public function getCompletionAmount()
    {
        return $this->container['completion_amount'];
    }

    /**
     * Sets completion_amount
     *
     * @param \Swagger\Client\Model\CompletionAmountSchema $completion_amount completion_amount
     *
     * @return $this
     */
    public function setCompletionAmount($completion_amount)
    {
        $this->container['completion_amount'] = $completion_amount;

        return $this;
    }

    /**
     * Gets suspended
     *
     * @return bool
     */
    public function getSuspended()
    {
        return $this->container['suspended'];
    }

    /**
     * Sets suspended
     *
     * @param bool $suspended suspended
     *
     * @return $this
     */
    public function setSuspended($suspended)
    {
        $this->container['suspended'] = $suspended;

        return $this;
    }

    /**
     * Gets children
     *
     * @return \Swagger\Client\Model\ActivityResultSchema[]
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \Swagger\Client\Model\ActivityResultSchema[] $children children
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets objectives
     *
     * @return \Swagger\Client\Model\ObjectiveSchema[]
     */
    public function getObjectives()
    {
        return $this->container['objectives'];
    }

    /**
     * Sets objectives
     *
     * @param \Swagger\Client\Model\ObjectiveSchema[] $objectives objectives
     *
     * @return $this
     */
    public function setObjectives($objectives)
    {
        $this->container['objectives'] = $objectives;

        return $this;
    }

    /**
     * Gets static_properties
     *
     * @return \Swagger\Client\Model\StaticPropertiesSchema
     */
    public function getStaticProperties()
    {
        return $this->container['static_properties'];
    }

    /**
     * Sets static_properties
     *
     * @param \Swagger\Client\Model\StaticPropertiesSchema $static_properties static_properties
     *
     * @return $this
     */
    public function setStaticProperties($static_properties)
    {
        $this->container['static_properties'] = $static_properties;

        return $this;
    }

    /**
     * Gets runtime
     *
     * @return \Swagger\Client\Model\RuntimeSchema
     */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
     * Sets runtime
     *
     * @param \Swagger\Client\Model\RuntimeSchema $runtime runtime
     *
     * @return $this
     */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;

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
