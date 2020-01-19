<?php
/**
 * XapiStatement
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
 * XapiStatement Class Doc Comment
 *
 * @category Class
 * @description https://github.com/adlnet/xAPI-Spec/blob/1.0.2/xAPI.md#41-statement-properties
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class XapiStatement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'XapiStatement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'actor' => '\Swagger\Client\Model\XapiAgentGroup',
'verb' => '\Swagger\Client\Model\XapiVerb',
'object_activity' => '\Swagger\Client\Model\XapiActivity',
'object_agent_group' => '\Swagger\Client\Model\XapiAgentGroup',
'object_statement_reference' => '\Swagger\Client\Model\XapiStatementReference',
'object_sub_statement' => '\Swagger\Client\Model\XapiStatement',
'result' => '\Swagger\Client\Model\XapiResult',
'context' => '\Swagger\Client\Model\XapiContext',
'timestamp' => '\DateTime',
'stored' => '\DateTime',
'authority' => '\Swagger\Client\Model\XapiAgentGroup',
'attachments' => '\Swagger\Client\Model\XapiAttachment[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'actor' => null,
'verb' => null,
'object_activity' => null,
'object_agent_group' => null,
'object_statement_reference' => null,
'object_sub_statement' => null,
'result' => null,
'context' => null,
'timestamp' => 'date-time',
'stored' => 'date-time',
'authority' => null,
'attachments' => null    ];

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
'actor' => 'actor',
'verb' => 'verb',
'object_activity' => 'objectActivity',
'object_agent_group' => 'objectAgentGroup',
'object_statement_reference' => 'objectStatementReference',
'object_sub_statement' => 'objectSubStatement',
'result' => 'result',
'context' => 'context',
'timestamp' => 'timestamp',
'stored' => 'stored',
'authority' => 'authority',
'attachments' => 'attachments'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'actor' => 'setActor',
'verb' => 'setVerb',
'object_activity' => 'setObjectActivity',
'object_agent_group' => 'setObjectAgentGroup',
'object_statement_reference' => 'setObjectStatementReference',
'object_sub_statement' => 'setObjectSubStatement',
'result' => 'setResult',
'context' => 'setContext',
'timestamp' => 'setTimestamp',
'stored' => 'setStored',
'authority' => 'setAuthority',
'attachments' => 'setAttachments'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'actor' => 'getActor',
'verb' => 'getVerb',
'object_activity' => 'getObjectActivity',
'object_agent_group' => 'getObjectAgentGroup',
'object_statement_reference' => 'getObjectStatementReference',
'object_sub_statement' => 'getObjectSubStatement',
'result' => 'getResult',
'context' => 'getContext',
'timestamp' => 'getTimestamp',
'stored' => 'getStored',
'authority' => 'getAuthority',
'attachments' => 'getAttachments'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['actor'] = isset($data['actor']) ? $data['actor'] : null;
        $this->container['verb'] = isset($data['verb']) ? $data['verb'] : null;
        $this->container['object_activity'] = isset($data['object_activity']) ? $data['object_activity'] : null;
        $this->container['object_agent_group'] = isset($data['object_agent_group']) ? $data['object_agent_group'] : null;
        $this->container['object_statement_reference'] = isset($data['object_statement_reference']) ? $data['object_statement_reference'] : null;
        $this->container['object_sub_statement'] = isset($data['object_sub_statement']) ? $data['object_sub_statement'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['stored'] = isset($data['stored']) ? $data['stored'] : null;
        $this->container['authority'] = isset($data['authority']) ? $data['authority'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
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
     * Gets actor
     *
     * @return \Swagger\Client\Model\XapiAgentGroup
     */
    public function getActor()
    {
        return $this->container['actor'];
    }

    /**
     * Sets actor
     *
     * @param \Swagger\Client\Model\XapiAgentGroup $actor actor
     *
     * @return $this
     */
    public function setActor($actor)
    {
        $this->container['actor'] = $actor;

        return $this;
    }

    /**
     * Gets verb
     *
     * @return \Swagger\Client\Model\XapiVerb
     */
    public function getVerb()
    {
        return $this->container['verb'];
    }

    /**
     * Sets verb
     *
     * @param \Swagger\Client\Model\XapiVerb $verb verb
     *
     * @return $this
     */
    public function setVerb($verb)
    {
        $this->container['verb'] = $verb;

        return $this;
    }

    /**
     * Gets object_activity
     *
     * @return \Swagger\Client\Model\XapiActivity
     */
    public function getObjectActivity()
    {
        return $this->container['object_activity'];
    }

    /**
     * Sets object_activity
     *
     * @param \Swagger\Client\Model\XapiActivity $object_activity object_activity
     *
     * @return $this
     */
    public function setObjectActivity($object_activity)
    {
        $this->container['object_activity'] = $object_activity;

        return $this;
    }

    /**
     * Gets object_agent_group
     *
     * @return \Swagger\Client\Model\XapiAgentGroup
     */
    public function getObjectAgentGroup()
    {
        return $this->container['object_agent_group'];
    }

    /**
     * Sets object_agent_group
     *
     * @param \Swagger\Client\Model\XapiAgentGroup $object_agent_group object_agent_group
     *
     * @return $this
     */
    public function setObjectAgentGroup($object_agent_group)
    {
        $this->container['object_agent_group'] = $object_agent_group;

        return $this;
    }

    /**
     * Gets object_statement_reference
     *
     * @return \Swagger\Client\Model\XapiStatementReference
     */
    public function getObjectStatementReference()
    {
        return $this->container['object_statement_reference'];
    }

    /**
     * Sets object_statement_reference
     *
     * @param \Swagger\Client\Model\XapiStatementReference $object_statement_reference object_statement_reference
     *
     * @return $this
     */
    public function setObjectStatementReference($object_statement_reference)
    {
        $this->container['object_statement_reference'] = $object_statement_reference;

        return $this;
    }

    /**
     * Gets object_sub_statement
     *
     * @return \Swagger\Client\Model\XapiStatement
     */
    public function getObjectSubStatement()
    {
        return $this->container['object_sub_statement'];
    }

    /**
     * Sets object_sub_statement
     *
     * @param \Swagger\Client\Model\XapiStatement $object_sub_statement object_sub_statement
     *
     * @return $this
     */
    public function setObjectSubStatement($object_sub_statement)
    {
        $this->container['object_sub_statement'] = $object_sub_statement;

        return $this;
    }

    /**
     * Gets result
     *
     * @return \Swagger\Client\Model\XapiResult
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param \Swagger\Client\Model\XapiResult $result result
     *
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets context
     *
     * @return \Swagger\Client\Model\XapiContext
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param \Swagger\Client\Model\XapiContext $context context
     *
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime $timestamp timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets stored
     *
     * @return \DateTime
     */
    public function getStored()
    {
        return $this->container['stored'];
    }

    /**
     * Sets stored
     *
     * @param \DateTime $stored stored
     *
     * @return $this
     */
    public function setStored($stored)
    {
        $this->container['stored'] = $stored;

        return $this;
    }

    /**
     * Gets authority
     *
     * @return \Swagger\Client\Model\XapiAgentGroup
     */
    public function getAuthority()
    {
        return $this->container['authority'];
    }

    /**
     * Sets authority
     *
     * @param \Swagger\Client\Model\XapiAgentGroup $authority authority
     *
     * @return $this
     */
    public function setAuthority($authority)
    {
        $this->container['authority'] = $authority;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \Swagger\Client\Model\XapiAttachment[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Swagger\Client\Model\XapiAttachment[] $attachments attachments
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

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
