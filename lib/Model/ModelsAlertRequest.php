<?php
/**
 * ModelsAlertRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SendPost API
 *
 * SendPost API to send transactional emails reliably
 *
 * OpenAPI spec version: 1.0.0
 * Contact: hello@sendx.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.16
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
 * ModelsAlertRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ModelsAlertRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'models.AlertRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active' => 'bool',
        'emails' => 'object',
        'entity_type' => 'string',
        'entity_value' => 'int',
        'label' => '\Swagger\Client\Model\ModelsAlertLabel',
        'member' => 'int',
        'name' => 'string',
        'notification_type' => '\Swagger\Client\Model\ModelsNotificationType',
        'parameter' => 'int',
        'provider' => 'string',
        'slack_url' => 'string',
        'threshold' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'active' => null,
        'emails' => null,
        'entity_type' => null,
        'entity_value' => 'int64',
        'label' => null,
        'member' => 'int64',
        'name' => null,
        'notification_type' => null,
        'parameter' => 'int64',
        'provider' => null,
        'slack_url' => null,
        'threshold' => null
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
        'active' => 'active',
        'emails' => 'emails',
        'entity_type' => 'entityType',
        'entity_value' => 'entityValue',
        'label' => 'label',
        'member' => 'member',
        'name' => 'name',
        'notification_type' => 'notificationType',
        'parameter' => 'parameter',
        'provider' => 'provider',
        'slack_url' => 'slackUrl',
        'threshold' => 'threshold'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'emails' => 'setEmails',
        'entity_type' => 'setEntityType',
        'entity_value' => 'setEntityValue',
        'label' => 'setLabel',
        'member' => 'setMember',
        'name' => 'setName',
        'notification_type' => 'setNotificationType',
        'parameter' => 'setParameter',
        'provider' => 'setProvider',
        'slack_url' => 'setSlackUrl',
        'threshold' => 'setThreshold'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'emails' => 'getEmails',
        'entity_type' => 'getEntityType',
        'entity_value' => 'getEntityValue',
        'label' => 'getLabel',
        'member' => 'getMember',
        'name' => 'getName',
        'notification_type' => 'getNotificationType',
        'parameter' => 'getParameter',
        'provider' => 'getProvider',
        'slack_url' => 'getSlackUrl',
        'threshold' => 'getThreshold'
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
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['entity_type'] = isset($data['entity_type']) ? $data['entity_type'] : null;
        $this->container['entity_value'] = isset($data['entity_value']) ? $data['entity_value'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['member'] = isset($data['member']) ? $data['member'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['notification_type'] = isset($data['notification_type']) ? $data['notification_type'] : null;
        $this->container['parameter'] = isset($data['parameter']) ? $data['parameter'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['slack_url'] = isset($data['slack_url']) ? $data['slack_url'] : null;
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : null;
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
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return object
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param object $emails emails
     *
     * @return $this
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets entity_type
     *
     * @return string
     */
    public function getEntityType()
    {
        return $this->container['entity_type'];
    }

    /**
     * Sets entity_type
     *
     * @param string $entity_type entity_type
     *
     * @return $this
     */
    public function setEntityType($entity_type)
    {
        $this->container['entity_type'] = $entity_type;

        return $this;
    }

    /**
     * Gets entity_value
     *
     * @return int
     */
    public function getEntityValue()
    {
        return $this->container['entity_value'];
    }

    /**
     * Sets entity_value
     *
     * @param int $entity_value entity_value
     *
     * @return $this
     */
    public function setEntityValue($entity_value)
    {
        $this->container['entity_value'] = $entity_value;

        return $this;
    }

    /**
     * Gets label
     *
     * @return \Swagger\Client\Model\ModelsAlertLabel
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param \Swagger\Client\Model\ModelsAlertLabel $label label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets member
     *
     * @return int
     */
    public function getMember()
    {
        return $this->container['member'];
    }

    /**
     * Sets member
     *
     * @param int $member member
     *
     * @return $this
     */
    public function setMember($member)
    {
        $this->container['member'] = $member;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets notification_type
     *
     * @return \Swagger\Client\Model\ModelsNotificationType
     */
    public function getNotificationType()
    {
        return $this->container['notification_type'];
    }

    /**
     * Sets notification_type
     *
     * @param \Swagger\Client\Model\ModelsNotificationType $notification_type notification_type
     *
     * @return $this
     */
    public function setNotificationType($notification_type)
    {
        $this->container['notification_type'] = $notification_type;

        return $this;
    }

    /**
     * Gets parameter
     *
     * @return int
     */
    public function getParameter()
    {
        return $this->container['parameter'];
    }

    /**
     * Sets parameter
     *
     * @param int $parameter parameter
     *
     * @return $this
     */
    public function setParameter($parameter)
    {
        $this->container['parameter'] = $parameter;

        return $this;
    }

    /**
     * Gets provider
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param string $provider provider
     *
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets slack_url
     *
     * @return string
     */
    public function getSlackUrl()
    {
        return $this->container['slack_url'];
    }

    /**
     * Sets slack_url
     *
     * @param string $slack_url slack_url
     *
     * @return $this
     */
    public function setSlackUrl($slack_url)
    {
        $this->container['slack_url'] = $slack_url;

        return $this;
    }

    /**
     * Gets threshold
     *
     * @return string
     */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
     * Sets threshold
     *
     * @param string $threshold threshold
     *
     * @return $this
     */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;

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


