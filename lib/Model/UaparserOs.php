<?php
/**
 * UaparserOs
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
 * UaparserOs Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UaparserOs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'uaparser.Os';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'family' => 'string',
        'major' => 'string',
        'minor' => 'string',
        'patch' => 'string',
        'patch_minor' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'family' => null,
        'major' => null,
        'minor' => null,
        'patch' => null,
        'patch_minor' => null
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
        'family' => 'Family',
        'major' => 'Major',
        'minor' => 'Minor',
        'patch' => 'Patch',
        'patch_minor' => 'PatchMinor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'family' => 'setFamily',
        'major' => 'setMajor',
        'minor' => 'setMinor',
        'patch' => 'setPatch',
        'patch_minor' => 'setPatchMinor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'family' => 'getFamily',
        'major' => 'getMajor',
        'minor' => 'getMinor',
        'patch' => 'getPatch',
        'patch_minor' => 'getPatchMinor'
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
        $this->container['family'] = isset($data['family']) ? $data['family'] : null;
        $this->container['major'] = isset($data['major']) ? $data['major'] : null;
        $this->container['minor'] = isset($data['minor']) ? $data['minor'] : null;
        $this->container['patch'] = isset($data['patch']) ? $data['patch'] : null;
        $this->container['patch_minor'] = isset($data['patch_minor']) ? $data['patch_minor'] : null;
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
     * Gets family
     *
     * @return string
     */
    public function getFamily()
    {
        return $this->container['family'];
    }

    /**
     * Sets family
     *
     * @param string $family family
     *
     * @return $this
     */
    public function setFamily($family)
    {
        $this->container['family'] = $family;

        return $this;
    }

    /**
     * Gets major
     *
     * @return string
     */
    public function getMajor()
    {
        return $this->container['major'];
    }

    /**
     * Sets major
     *
     * @param string $major major
     *
     * @return $this
     */
    public function setMajor($major)
    {
        $this->container['major'] = $major;

        return $this;
    }

    /**
     * Gets minor
     *
     * @return string
     */
    public function getMinor()
    {
        return $this->container['minor'];
    }

    /**
     * Sets minor
     *
     * @param string $minor minor
     *
     * @return $this
     */
    public function setMinor($minor)
    {
        $this->container['minor'] = $minor;

        return $this;
    }

    /**
     * Gets patch
     *
     * @return string
     */
    public function getPatch()
    {
        return $this->container['patch'];
    }

    /**
     * Sets patch
     *
     * @param string $patch patch
     *
     * @return $this
     */
    public function setPatch($patch)
    {
        $this->container['patch'] = $patch;

        return $this;
    }

    /**
     * Gets patch_minor
     *
     * @return string
     */
    public function getPatchMinor()
    {
        return $this->container['patch_minor'];
    }

    /**
     * Sets patch_minor
     *
     * @param string $patch_minor patch_minor
     *
     * @return $this
     */
    public function setPatchMinor($patch_minor)
    {
        $this->container['patch_minor'] = $patch_minor;

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


