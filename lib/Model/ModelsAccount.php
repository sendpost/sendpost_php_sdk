<?php
/**
 * ModelsAccount
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
 * Swagger Codegen version: 2.4.17
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
 * ModelsAccount Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ModelsAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'models.Account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'api_key' => 'string',
        'created' => 'int',
        'current_email_service_provider' => 'string',
        'id' => 'int',
        'industry' => 'string',
        'lock_threshold' => 'int',
        'locked' => 'bool',
        'name' => 'string',
        'onboard_q_answered' => 'bool',
        'sending_volume_per_month' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'api_key' => null,
        'created' => 'int64',
        'current_email_service_provider' => null,
        'id' => 'int64',
        'industry' => null,
        'lock_threshold' => 'int64',
        'locked' => null,
        'name' => null,
        'onboard_q_answered' => null,
        'sending_volume_per_month' => null,
        'url' => null
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
        'api_key' => 'apiKey',
        'created' => 'created',
        'current_email_service_provider' => 'currentEmailServiceProvider',
        'id' => 'id',
        'industry' => 'industry',
        'lock_threshold' => 'lock_threshold',
        'locked' => 'locked',
        'name' => 'name',
        'onboard_q_answered' => 'onboardQAnswered',
        'sending_volume_per_month' => 'sendingVolumePerMonth',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_key' => 'setApiKey',
        'created' => 'setCreated',
        'current_email_service_provider' => 'setCurrentEmailServiceProvider',
        'id' => 'setId',
        'industry' => 'setIndustry',
        'lock_threshold' => 'setLockThreshold',
        'locked' => 'setLocked',
        'name' => 'setName',
        'onboard_q_answered' => 'setOnboardQAnswered',
        'sending_volume_per_month' => 'setSendingVolumePerMonth',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_key' => 'getApiKey',
        'created' => 'getCreated',
        'current_email_service_provider' => 'getCurrentEmailServiceProvider',
        'id' => 'getId',
        'industry' => 'getIndustry',
        'lock_threshold' => 'getLockThreshold',
        'locked' => 'getLocked',
        'name' => 'getName',
        'onboard_q_answered' => 'getOnboardQAnswered',
        'sending_volume_per_month' => 'getSendingVolumePerMonth',
        'url' => 'getUrl'
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
        $this->container['api_key'] = isset($data['api_key']) ? $data['api_key'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['current_email_service_provider'] = isset($data['current_email_service_provider']) ? $data['current_email_service_provider'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['industry'] = isset($data['industry']) ? $data['industry'] : null;
        $this->container['lock_threshold'] = isset($data['lock_threshold']) ? $data['lock_threshold'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['onboard_q_answered'] = isset($data['onboard_q_answered']) ? $data['onboard_q_answered'] : null;
        $this->container['sending_volume_per_month'] = isset($data['sending_volume_per_month']) ? $data['sending_volume_per_month'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
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
     * Gets api_key
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets api_key
     *
     * @param string $api_key api_key
     *
     * @return $this
     */
    public function setApiKey($api_key)
    {
        $this->container['api_key'] = $api_key;

        return $this;
    }

    /**
     * Gets created
     *
     * @return int
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param int $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets current_email_service_provider
     *
     * @return string
     */
    public function getCurrentEmailServiceProvider()
    {
        return $this->container['current_email_service_provider'];
    }

    /**
     * Sets current_email_service_provider
     *
     * @param string $current_email_service_provider current_email_service_provider
     *
     * @return $this
     */
    public function setCurrentEmailServiceProvider($current_email_service_provider)
    {
        $this->container['current_email_service_provider'] = $current_email_service_provider;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets industry
     *
     * @return string
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     *
     * @param string $industry industry
     *
     * @return $this
     */
    public function setIndustry($industry)
    {
        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets lock_threshold
     *
     * @return int
     */
    public function getLockThreshold()
    {
        return $this->container['lock_threshold'];
    }

    /**
     * Sets lock_threshold
     *
     * @param int $lock_threshold lock_threshold
     *
     * @return $this
     */
    public function setLockThreshold($lock_threshold)
    {
        $this->container['lock_threshold'] = $lock_threshold;

        return $this;
    }

    /**
     * Gets locked
     *
     * @return bool
     */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     *
     * @param bool $locked locked
     *
     * @return $this
     */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;

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
     * Gets onboard_q_answered
     *
     * @return bool
     */
    public function getOnboardQAnswered()
    {
        return $this->container['onboard_q_answered'];
    }

    /**
     * Sets onboard_q_answered
     *
     * @param bool $onboard_q_answered onboard_q_answered
     *
     * @return $this
     */
    public function setOnboardQAnswered($onboard_q_answered)
    {
        $this->container['onboard_q_answered'] = $onboard_q_answered;

        return $this;
    }

    /**
     * Gets sending_volume_per_month
     *
     * @return string
     */
    public function getSendingVolumePerMonth()
    {
        return $this->container['sending_volume_per_month'];
    }

    /**
     * Sets sending_volume_per_month
     *
     * @param string $sending_volume_per_month sending_volume_per_month
     *
     * @return $this
     */
    public function setSendingVolumePerMonth($sending_volume_per_month)
    {
        $this->container['sending_volume_per_month'] = $sending_volume_per_month;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


