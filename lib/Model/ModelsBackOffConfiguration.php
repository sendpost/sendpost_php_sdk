<?php
/**
 * ModelsBackOffConfiguration
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
 * ModelsBackOffConfiguration Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ModelsBackOffConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'models.BackOffConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'concurrent_connections' => 'int',
        'concurrent_connections_type' => '\Swagger\Client\Model\ModelsBackOffDecreaseType',
        'send_per_day' => 'int',
        'send_per_day_type' => '\Swagger\Client\Model\ModelsBackOffDecreaseType',
        'send_per_hour' => 'int',
        'send_per_hour_type' => '\Swagger\Client\Model\ModelsBackOffDecreaseType',
        'send_per_minute' => 'int',
        'send_per_minute_type' => '\Swagger\Client\Model\ModelsBackOffDecreaseType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'concurrent_connections' => 'int64',
        'concurrent_connections_type' => null,
        'send_per_day' => 'int64',
        'send_per_day_type' => null,
        'send_per_hour' => 'int64',
        'send_per_hour_type' => null,
        'send_per_minute' => 'int64',
        'send_per_minute_type' => null
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
        'concurrent_connections' => 'concurrentConnections',
        'concurrent_connections_type' => 'concurrentConnectionsType',
        'send_per_day' => 'sendPerDay',
        'send_per_day_type' => 'sendPerDayType',
        'send_per_hour' => 'sendPerHour',
        'send_per_hour_type' => 'sendPerHourType',
        'send_per_minute' => 'sendPerMinute',
        'send_per_minute_type' => 'sendPerMinuteType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'concurrent_connections' => 'setConcurrentConnections',
        'concurrent_connections_type' => 'setConcurrentConnectionsType',
        'send_per_day' => 'setSendPerDay',
        'send_per_day_type' => 'setSendPerDayType',
        'send_per_hour' => 'setSendPerHour',
        'send_per_hour_type' => 'setSendPerHourType',
        'send_per_minute' => 'setSendPerMinute',
        'send_per_minute_type' => 'setSendPerMinuteType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'concurrent_connections' => 'getConcurrentConnections',
        'concurrent_connections_type' => 'getConcurrentConnectionsType',
        'send_per_day' => 'getSendPerDay',
        'send_per_day_type' => 'getSendPerDayType',
        'send_per_hour' => 'getSendPerHour',
        'send_per_hour_type' => 'getSendPerHourType',
        'send_per_minute' => 'getSendPerMinute',
        'send_per_minute_type' => 'getSendPerMinuteType'
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
        $this->container['concurrent_connections'] = isset($data['concurrent_connections']) ? $data['concurrent_connections'] : null;
        $this->container['concurrent_connections_type'] = isset($data['concurrent_connections_type']) ? $data['concurrent_connections_type'] : null;
        $this->container['send_per_day'] = isset($data['send_per_day']) ? $data['send_per_day'] : null;
        $this->container['send_per_day_type'] = isset($data['send_per_day_type']) ? $data['send_per_day_type'] : null;
        $this->container['send_per_hour'] = isset($data['send_per_hour']) ? $data['send_per_hour'] : null;
        $this->container['send_per_hour_type'] = isset($data['send_per_hour_type']) ? $data['send_per_hour_type'] : null;
        $this->container['send_per_minute'] = isset($data['send_per_minute']) ? $data['send_per_minute'] : null;
        $this->container['send_per_minute_type'] = isset($data['send_per_minute_type']) ? $data['send_per_minute_type'] : null;
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
     * Gets concurrent_connections
     *
     * @return int
     */
    public function getConcurrentConnections()
    {
        return $this->container['concurrent_connections'];
    }

    /**
     * Sets concurrent_connections
     *
     * @param int $concurrent_connections concurrent_connections
     *
     * @return $this
     */
    public function setConcurrentConnections($concurrent_connections)
    {
        $this->container['concurrent_connections'] = $concurrent_connections;

        return $this;
    }

    /**
     * Gets concurrent_connections_type
     *
     * @return \Swagger\Client\Model\ModelsBackOffDecreaseType
     */
    public function getConcurrentConnectionsType()
    {
        return $this->container['concurrent_connections_type'];
    }

    /**
     * Sets concurrent_connections_type
     *
     * @param \Swagger\Client\Model\ModelsBackOffDecreaseType $concurrent_connections_type concurrent_connections_type
     *
     * @return $this
     */
    public function setConcurrentConnectionsType($concurrent_connections_type)
    {
        $this->container['concurrent_connections_type'] = $concurrent_connections_type;

        return $this;
    }

    /**
     * Gets send_per_day
     *
     * @return int
     */
    public function getSendPerDay()
    {
        return $this->container['send_per_day'];
    }

    /**
     * Sets send_per_day
     *
     * @param int $send_per_day send_per_day
     *
     * @return $this
     */
    public function setSendPerDay($send_per_day)
    {
        $this->container['send_per_day'] = $send_per_day;

        return $this;
    }

    /**
     * Gets send_per_day_type
     *
     * @return \Swagger\Client\Model\ModelsBackOffDecreaseType
     */
    public function getSendPerDayType()
    {
        return $this->container['send_per_day_type'];
    }

    /**
     * Sets send_per_day_type
     *
     * @param \Swagger\Client\Model\ModelsBackOffDecreaseType $send_per_day_type send_per_day_type
     *
     * @return $this
     */
    public function setSendPerDayType($send_per_day_type)
    {
        $this->container['send_per_day_type'] = $send_per_day_type;

        return $this;
    }

    /**
     * Gets send_per_hour
     *
     * @return int
     */
    public function getSendPerHour()
    {
        return $this->container['send_per_hour'];
    }

    /**
     * Sets send_per_hour
     *
     * @param int $send_per_hour send_per_hour
     *
     * @return $this
     */
    public function setSendPerHour($send_per_hour)
    {
        $this->container['send_per_hour'] = $send_per_hour;

        return $this;
    }

    /**
     * Gets send_per_hour_type
     *
     * @return \Swagger\Client\Model\ModelsBackOffDecreaseType
     */
    public function getSendPerHourType()
    {
        return $this->container['send_per_hour_type'];
    }

    /**
     * Sets send_per_hour_type
     *
     * @param \Swagger\Client\Model\ModelsBackOffDecreaseType $send_per_hour_type send_per_hour_type
     *
     * @return $this
     */
    public function setSendPerHourType($send_per_hour_type)
    {
        $this->container['send_per_hour_type'] = $send_per_hour_type;

        return $this;
    }

    /**
     * Gets send_per_minute
     *
     * @return int
     */
    public function getSendPerMinute()
    {
        return $this->container['send_per_minute'];
    }

    /**
     * Sets send_per_minute
     *
     * @param int $send_per_minute send_per_minute
     *
     * @return $this
     */
    public function setSendPerMinute($send_per_minute)
    {
        $this->container['send_per_minute'] = $send_per_minute;

        return $this;
    }

    /**
     * Gets send_per_minute_type
     *
     * @return \Swagger\Client\Model\ModelsBackOffDecreaseType
     */
    public function getSendPerMinuteType()
    {
        return $this->container['send_per_minute_type'];
    }

    /**
     * Sets send_per_minute_type
     *
     * @param \Swagger\Client\Model\ModelsBackOffDecreaseType $send_per_minute_type send_per_minute_type
     *
     * @return $this
     */
    public function setSendPerMinuteType($send_per_minute_type)
    {
        $this->container['send_per_minute_type'] = $send_per_minute_type;

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


