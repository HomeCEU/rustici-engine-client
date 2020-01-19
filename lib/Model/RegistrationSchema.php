<?php
/**
 * RegistrationSchema
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
 * RegistrationSchema Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RegistrationSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RegistrationSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'instance' => 'int',
'xapi_registration_id' => 'string',
'dispatch_id' => 'string',
'updated' => '\DateTime',
'registration_completion' => 'string',
'registration_success' => 'string',
'score' => '\Swagger\Client\Model\ScoreSchema',
'total_seconds_tracked' => 'double',
'first_access_date' => '\DateTime',
'last_access_date' => '\DateTime',
'completed_date' => '\DateTime',
'created_date' => '\DateTime',
'course' => '\Swagger\Client\Model\CourseReferenceSchema',
'learner' => '\Swagger\Client\Model\LearnerSchema',
'global_objectives' => '\Swagger\Client\Model\ObjectiveSchema[]',
'activity_details' => '\Swagger\Client\Model\ActivityResultSchema',
'shared_data' => '\Swagger\Client\Model\SharedDataEntrySchema[]',
'suspended_activity_id' => 'string',
'registration_completion_amount' => 'double'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'instance' => 'int32',
'xapi_registration_id' => null,
'dispatch_id' => null,
'updated' => 'date-time',
'registration_completion' => null,
'registration_success' => null,
'score' => null,
'total_seconds_tracked' => 'double',
'first_access_date' => 'date-time',
'last_access_date' => 'date-time',
'completed_date' => 'date-time',
'created_date' => 'date-time',
'course' => null,
'learner' => null,
'global_objectives' => null,
'activity_details' => null,
'shared_data' => null,
'suspended_activity_id' => null,
'registration_completion_amount' => 'double'    ];

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
'instance' => 'instance',
'xapi_registration_id' => 'xapiRegistrationId',
'dispatch_id' => 'dispatchId',
'updated' => 'updated',
'registration_completion' => 'registrationCompletion',
'registration_success' => 'registrationSuccess',
'score' => 'score',
'total_seconds_tracked' => 'totalSecondsTracked',
'first_access_date' => 'firstAccessDate',
'last_access_date' => 'lastAccessDate',
'completed_date' => 'completedDate',
'created_date' => 'createdDate',
'course' => 'course',
'learner' => 'learner',
'global_objectives' => 'globalObjectives',
'activity_details' => 'activityDetails',
'shared_data' => 'sharedData',
'suspended_activity_id' => 'suspendedActivityId',
'registration_completion_amount' => 'registrationCompletionAmount'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'instance' => 'setInstance',
'xapi_registration_id' => 'setXapiRegistrationId',
'dispatch_id' => 'setDispatchId',
'updated' => 'setUpdated',
'registration_completion' => 'setRegistrationCompletion',
'registration_success' => 'setRegistrationSuccess',
'score' => 'setScore',
'total_seconds_tracked' => 'setTotalSecondsTracked',
'first_access_date' => 'setFirstAccessDate',
'last_access_date' => 'setLastAccessDate',
'completed_date' => 'setCompletedDate',
'created_date' => 'setCreatedDate',
'course' => 'setCourse',
'learner' => 'setLearner',
'global_objectives' => 'setGlobalObjectives',
'activity_details' => 'setActivityDetails',
'shared_data' => 'setSharedData',
'suspended_activity_id' => 'setSuspendedActivityId',
'registration_completion_amount' => 'setRegistrationCompletionAmount'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'instance' => 'getInstance',
'xapi_registration_id' => 'getXapiRegistrationId',
'dispatch_id' => 'getDispatchId',
'updated' => 'getUpdated',
'registration_completion' => 'getRegistrationCompletion',
'registration_success' => 'getRegistrationSuccess',
'score' => 'getScore',
'total_seconds_tracked' => 'getTotalSecondsTracked',
'first_access_date' => 'getFirstAccessDate',
'last_access_date' => 'getLastAccessDate',
'completed_date' => 'getCompletedDate',
'created_date' => 'getCreatedDate',
'course' => 'getCourse',
'learner' => 'getLearner',
'global_objectives' => 'getGlobalObjectives',
'activity_details' => 'getActivityDetails',
'shared_data' => 'getSharedData',
'suspended_activity_id' => 'getSuspendedActivityId',
'registration_completion_amount' => 'getRegistrationCompletionAmount'    ];

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

    const REGISTRATION_COMPLETION_UNKNOWN = 'UNKNOWN';
const REGISTRATION_COMPLETION_COMPLETED = 'COMPLETED';
const REGISTRATION_COMPLETION_INCOMPLETE = 'INCOMPLETE';
const REGISTRATION_SUCCESS_UNKNOWN = 'UNKNOWN';
const REGISTRATION_SUCCESS_PASSED = 'PASSED';
const REGISTRATION_SUCCESS_FAILED = 'FAILED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRegistrationCompletionAllowableValues()
    {
        return [
            self::REGISTRATION_COMPLETION_UNKNOWN,
self::REGISTRATION_COMPLETION_COMPLETED,
self::REGISTRATION_COMPLETION_INCOMPLETE,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRegistrationSuccessAllowableValues()
    {
        return [
            self::REGISTRATION_SUCCESS_UNKNOWN,
self::REGISTRATION_SUCCESS_PASSED,
self::REGISTRATION_SUCCESS_FAILED,        ];
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
        $this->container['instance'] = isset($data['instance']) ? $data['instance'] : null;
        $this->container['xapi_registration_id'] = isset($data['xapi_registration_id']) ? $data['xapi_registration_id'] : null;
        $this->container['dispatch_id'] = isset($data['dispatch_id']) ? $data['dispatch_id'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['registration_completion'] = isset($data['registration_completion']) ? $data['registration_completion'] : 'UNKNOWN';
        $this->container['registration_success'] = isset($data['registration_success']) ? $data['registration_success'] : 'UNKNOWN';
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['total_seconds_tracked'] = isset($data['total_seconds_tracked']) ? $data['total_seconds_tracked'] : null;
        $this->container['first_access_date'] = isset($data['first_access_date']) ? $data['first_access_date'] : null;
        $this->container['last_access_date'] = isset($data['last_access_date']) ? $data['last_access_date'] : null;
        $this->container['completed_date'] = isset($data['completed_date']) ? $data['completed_date'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['course'] = isset($data['course']) ? $data['course'] : null;
        $this->container['learner'] = isset($data['learner']) ? $data['learner'] : null;
        $this->container['global_objectives'] = isset($data['global_objectives']) ? $data['global_objectives'] : null;
        $this->container['activity_details'] = isset($data['activity_details']) ? $data['activity_details'] : null;
        $this->container['shared_data'] = isset($data['shared_data']) ? $data['shared_data'] : null;
        $this->container['suspended_activity_id'] = isset($data['suspended_activity_id']) ? $data['suspended_activity_id'] : null;
        $this->container['registration_completion_amount'] = isset($data['registration_completion_amount']) ? $data['registration_completion_amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRegistrationCompletionAllowableValues();
        if (!is_null($this->container['registration_completion']) && !in_array($this->container['registration_completion'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'registration_completion', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRegistrationSuccessAllowableValues();
        if (!is_null($this->container['registration_success']) && !in_array($this->container['registration_success'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'registration_success', must be one of '%s'",
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
     * Gets instance
     *
     * @return int
     */
    public function getInstance()
    {
        return $this->container['instance'];
    }

    /**
     * Sets instance
     *
     * @param int $instance instance
     *
     * @return $this
     */
    public function setInstance($instance)
    {
        $this->container['instance'] = $instance;

        return $this;
    }

    /**
     * Gets xapi_registration_id
     *
     * @return string
     */
    public function getXapiRegistrationId()
    {
        return $this->container['xapi_registration_id'];
    }

    /**
     * Sets xapi_registration_id
     *
     * @param string $xapi_registration_id xAPI registration id associated with this registration
     *
     * @return $this
     */
    public function setXapiRegistrationId($xapi_registration_id)
    {
        $this->container['xapi_registration_id'] = $xapi_registration_id;

        return $this;
    }

    /**
     * Gets dispatch_id
     *
     * @return string
     */
    public function getDispatchId()
    {
        return $this->container['dispatch_id'];
    }

    /**
     * Sets dispatch_id
     *
     * @param string $dispatch_id Dispatch ID for this registration, if applicable
     *
     * @return $this
     */
    public function setDispatchId($dispatch_id)
    {
        $this->container['dispatch_id'] = $dispatch_id;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param \DateTime $updated updated
     *
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets registration_completion
     *
     * @return string
     */
    public function getRegistrationCompletion()
    {
        return $this->container['registration_completion'];
    }

    /**
     * Sets registration_completion
     *
     * @param string $registration_completion registration_completion
     *
     * @return $this
     */
    public function setRegistrationCompletion($registration_completion)
    {
        $allowedValues = $this->getRegistrationCompletionAllowableValues();
        if (!is_null($registration_completion) && !in_array($registration_completion, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'registration_completion', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['registration_completion'] = $registration_completion;

        return $this;
    }

    /**
     * Gets registration_success
     *
     * @return string
     */
    public function getRegistrationSuccess()
    {
        return $this->container['registration_success'];
    }

    /**
     * Sets registration_success
     *
     * @param string $registration_success registration_success
     *
     * @return $this
     */
    public function setRegistrationSuccess($registration_success)
    {
        $allowedValues = $this->getRegistrationSuccessAllowableValues();
        if (!is_null($registration_success) && !in_array($registration_success, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'registration_success', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['registration_success'] = $registration_success;

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
     * Gets total_seconds_tracked
     *
     * @return double
     */
    public function getTotalSecondsTracked()
    {
        return $this->container['total_seconds_tracked'];
    }

    /**
     * Sets total_seconds_tracked
     *
     * @param double $total_seconds_tracked total_seconds_tracked
     *
     * @return $this
     */
    public function setTotalSecondsTracked($total_seconds_tracked)
    {
        $this->container['total_seconds_tracked'] = $total_seconds_tracked;

        return $this;
    }

    /**
     * Gets first_access_date
     *
     * @return \DateTime
     */
    public function getFirstAccessDate()
    {
        return $this->container['first_access_date'];
    }

    /**
     * Sets first_access_date
     *
     * @param \DateTime $first_access_date first_access_date
     *
     * @return $this
     */
    public function setFirstAccessDate($first_access_date)
    {
        $this->container['first_access_date'] = $first_access_date;

        return $this;
    }

    /**
     * Gets last_access_date
     *
     * @return \DateTime
     */
    public function getLastAccessDate()
    {
        return $this->container['last_access_date'];
    }

    /**
     * Sets last_access_date
     *
     * @param \DateTime $last_access_date last_access_date
     *
     * @return $this
     */
    public function setLastAccessDate($last_access_date)
    {
        $this->container['last_access_date'] = $last_access_date;

        return $this;
    }

    /**
     * Gets completed_date
     *
     * @return \DateTime
     */
    public function getCompletedDate()
    {
        return $this->container['completed_date'];
    }

    /**
     * Sets completed_date
     *
     * @param \DateTime $completed_date completed_date
     *
     * @return $this
     */
    public function setCompletedDate($completed_date)
    {
        $this->container['completed_date'] = $completed_date;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param \DateTime $created_date created_date
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets course
     *
     * @return \Swagger\Client\Model\CourseReferenceSchema
     */
    public function getCourse()
    {
        return $this->container['course'];
    }

    /**
     * Sets course
     *
     * @param \Swagger\Client\Model\CourseReferenceSchema $course course
     *
     * @return $this
     */
    public function setCourse($course)
    {
        $this->container['course'] = $course;

        return $this;
    }

    /**
     * Gets learner
     *
     * @return \Swagger\Client\Model\LearnerSchema
     */
    public function getLearner()
    {
        return $this->container['learner'];
    }

    /**
     * Sets learner
     *
     * @param \Swagger\Client\Model\LearnerSchema $learner learner
     *
     * @return $this
     */
    public function setLearner($learner)
    {
        $this->container['learner'] = $learner;

        return $this;
    }

    /**
     * Gets global_objectives
     *
     * @return \Swagger\Client\Model\ObjectiveSchema[]
     */
    public function getGlobalObjectives()
    {
        return $this->container['global_objectives'];
    }

    /**
     * Sets global_objectives
     *
     * @param \Swagger\Client\Model\ObjectiveSchema[] $global_objectives global_objectives
     *
     * @return $this
     */
    public function setGlobalObjectives($global_objectives)
    {
        $this->container['global_objectives'] = $global_objectives;

        return $this;
    }

    /**
     * Gets activity_details
     *
     * @return \Swagger\Client\Model\ActivityResultSchema
     */
    public function getActivityDetails()
    {
        return $this->container['activity_details'];
    }

    /**
     * Sets activity_details
     *
     * @param \Swagger\Client\Model\ActivityResultSchema $activity_details activity_details
     *
     * @return $this
     */
    public function setActivityDetails($activity_details)
    {
        $this->container['activity_details'] = $activity_details;

        return $this;
    }

    /**
     * Gets shared_data
     *
     * @return \Swagger\Client\Model\SharedDataEntrySchema[]
     */
    public function getSharedData()
    {
        return $this->container['shared_data'];
    }

    /**
     * Sets shared_data
     *
     * @param \Swagger\Client\Model\SharedDataEntrySchema[] $shared_data shared_data
     *
     * @return $this
     */
    public function setSharedData($shared_data)
    {
        $this->container['shared_data'] = $shared_data;

        return $this;
    }

    /**
     * Gets suspended_activity_id
     *
     * @return string
     */
    public function getSuspendedActivityId()
    {
        return $this->container['suspended_activity_id'];
    }

    /**
     * Sets suspended_activity_id
     *
     * @param string $suspended_activity_id suspended_activity_id
     *
     * @return $this
     */
    public function setSuspendedActivityId($suspended_activity_id)
    {
        $this->container['suspended_activity_id'] = $suspended_activity_id;

        return $this;
    }

    /**
     * Gets registration_completion_amount
     *
     * @return double
     */
    public function getRegistrationCompletionAmount()
    {
        return $this->container['registration_completion_amount'];
    }

    /**
     * Sets registration_completion_amount
     *
     * @param double $registration_completion_amount A decimal value between 0 and 1 representing the percentage of this course that the learner has completed so far, if known. Note: for learning standards other than SCORM 2004 4th Edition, this value is based on the percentage of activities completed/passed. This means that single-activity courses in those standards will always return either 0 or 1.
     *
     * @return $this
     */
    public function setRegistrationCompletionAmount($registration_completion_amount)
    {
        $this->container['registration_completion_amount'] = $registration_completion_amount;

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