<?php
/**
 * ModelsBackOffTrigger
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
 * ModelsBackOffTrigger Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ModelsBackOffTrigger implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'models.BackOffTrigger';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'deferral_percentage' => 'int',
        'duration_in_minutes' => 'int',
        'hard_bounce_percentage' => 'int',
        'minimum_attempts' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'deferral_percentage' => 'int64',
        'duration_in_minutes' => 'int64',
        'hard_bounce_percentage' => 'int64',
        'minimum_attempts' => 'int64'
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
        'deferral_percentage' => 'deferralPercentage',
        'duration_in_minutes' => 'durationInMinutes',
        'hard_bounce_percentage' => 'hardBouncePercentage',
        'minimum_attempts' => 'minimumAttempts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deferral_percentage' => 'setDeferralPercentage',
        'duration_in_minutes' => 'setDurationInMinutes',
        'hard_bounce_percentage' => 'setHardBouncePercentage',
        'minimum_attempts' => 'setMinimumAttempts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deferral_percentage' => 'getDeferralPercentage',
        'duration_in_minutes' => 'getDurationInMinutes',
        'hard_bounce_percentage' => 'getHardBouncePercentage',
        'minimum_attempts' => 'getMinimumAttempts'
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
        $this->container['deferral_percentage'] = isset($data['deferral_percentage']) ? $data['deferral_percentage'] : null;
        $this->container['duration_in_minutes'] = isset($data['duration_in_minutes']) ? $data['duration_in_minutes'] : null;
        $this->container['hard_bounce_percentage'] = isset($data['hard_bounce_percentage']) ? $data['hard_bounce_percentage'] : null;
        $this->container['minimum_attempts'] = isset($data['minimum_attempts']) ? $data['minimum_attempts'] : null;
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
     * Gets deferral_percentage
     *
     * @return int
     */
    public function getDeferralPercentage()
    {
        return $this->container['deferral_percentage'];
    }

    /**
     * Sets deferral_percentage
     *
     * @param int $deferral_percentage deferral_percentage
     *
     * @return $this
     */
    public function setDeferralPercentage($deferral_percentage)
    {
        $this->container['deferral_percentage'] = $deferral_percentage;

        return $this;
    }

    /**
     * Gets duration_in_minutes
     *
     * @return int
     */
    public function getDurationInMinutes()
    {
        return $this->container['duration_in_minutes'];
    }

    /**
     * Sets duration_in_minutes
     *
     * @param int $duration_in_minutes duration_in_minutes
     *
     * @return $this
     */
    public function setDurationInMinutes($duration_in_minutes)
    {
        $this->container['duration_in_minutes'] = $duration_in_minutes;

        return $this;
    }

    /**
     * Gets hard_bounce_percentage
     *
     * @return int
     */
    public function getHardBouncePercentage()
    {
        return $this->container['hard_bounce_percentage'];
    }

    /**
     * Sets hard_bounce_percentage
     *
     * @param int $hard_bounce_percentage hard_bounce_percentage
     *
     * @return $this
     */
    public function setHardBouncePercentage($hard_bounce_percentage)
    {
        $this->container['hard_bounce_percentage'] = $hard_bounce_percentage;

        return $this;
    }

    /**
     * Gets minimum_attempts
     *
     * @return int
     */
    public function getMinimumAttempts()
    {
        return $this->container['minimum_attempts'];
    }

    /**
     * Sets minimum_attempts
     *
     * @param int $minimum_attempts minimum_attempts
     *
     * @return $this
     */
    public function setMinimumAttempts($minimum_attempts)
    {
        $this->container['minimum_attempts'] = $minimum_attempts;

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


