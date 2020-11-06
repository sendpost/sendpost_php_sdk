<?php
/**
 * ModelsSystemDomain
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
 * ModelsSystemDomain Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ModelsSystemDomain implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'models.SystemDomain';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => 'int',
        'dkim' => '\Swagger\Client\Model\ModelsSystemDNSRecord',
        'dkim_config' => 'string',
        'dkim_verified' => 'bool',
        'id' => 'int',
        'mailbox_verified' => 'bool',
        'name' => 'string',
        'spf' => '\Swagger\Client\Model\ModelsSystemDNSRecord',
        'spf_verified' => 'bool',
        'track' => '\Swagger\Client\Model\ModelsSystemDNSRecord',
        'track_verified' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created' => 'int64',
        'dkim' => null,
        'dkim_config' => null,
        'dkim_verified' => null,
        'id' => 'int64',
        'mailbox_verified' => null,
        'name' => null,
        'spf' => null,
        'spf_verified' => null,
        'track' => null,
        'track_verified' => null
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
        'created' => 'created',
        'dkim' => 'dkim',
        'dkim_config' => 'dkimConfig',
        'dkim_verified' => 'dkimVerified',
        'id' => 'id',
        'mailbox_verified' => 'mailboxVerified',
        'name' => 'name',
        'spf' => 'spf',
        'spf_verified' => 'spfVerified',
        'track' => 'track',
        'track_verified' => 'trackVerified'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'dkim' => 'setDkim',
        'dkim_config' => 'setDkimConfig',
        'dkim_verified' => 'setDkimVerified',
        'id' => 'setId',
        'mailbox_verified' => 'setMailboxVerified',
        'name' => 'setName',
        'spf' => 'setSpf',
        'spf_verified' => 'setSpfVerified',
        'track' => 'setTrack',
        'track_verified' => 'setTrackVerified'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'dkim' => 'getDkim',
        'dkim_config' => 'getDkimConfig',
        'dkim_verified' => 'getDkimVerified',
        'id' => 'getId',
        'mailbox_verified' => 'getMailboxVerified',
        'name' => 'getName',
        'spf' => 'getSpf',
        'spf_verified' => 'getSpfVerified',
        'track' => 'getTrack',
        'track_verified' => 'getTrackVerified'
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
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['dkim'] = isset($data['dkim']) ? $data['dkim'] : null;
        $this->container['dkim_config'] = isset($data['dkim_config']) ? $data['dkim_config'] : null;
        $this->container['dkim_verified'] = isset($data['dkim_verified']) ? $data['dkim_verified'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['mailbox_verified'] = isset($data['mailbox_verified']) ? $data['mailbox_verified'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['spf'] = isset($data['spf']) ? $data['spf'] : null;
        $this->container['spf_verified'] = isset($data['spf_verified']) ? $data['spf_verified'] : null;
        $this->container['track'] = isset($data['track']) ? $data['track'] : null;
        $this->container['track_verified'] = isset($data['track_verified']) ? $data['track_verified'] : null;
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
     * Gets dkim
     *
     * @return \Swagger\Client\Model\ModelsSystemDNSRecord
     */
    public function getDkim()
    {
        return $this->container['dkim'];
    }

    /**
     * Sets dkim
     *
     * @param \Swagger\Client\Model\ModelsSystemDNSRecord $dkim dkim
     *
     * @return $this
     */
    public function setDkim($dkim)
    {
        $this->container['dkim'] = $dkim;

        return $this;
    }

    /**
     * Gets dkim_config
     *
     * @return string
     */
    public function getDkimConfig()
    {
        return $this->container['dkim_config'];
    }

    /**
     * Sets dkim_config
     *
     * @param string $dkim_config dkim_config
     *
     * @return $this
     */
    public function setDkimConfig($dkim_config)
    {
        $this->container['dkim_config'] = $dkim_config;

        return $this;
    }

    /**
     * Gets dkim_verified
     *
     * @return bool
     */
    public function getDkimVerified()
    {
        return $this->container['dkim_verified'];
    }

    /**
     * Sets dkim_verified
     *
     * @param bool $dkim_verified dkim_verified
     *
     * @return $this
     */
    public function setDkimVerified($dkim_verified)
    {
        $this->container['dkim_verified'] = $dkim_verified;

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
     * Gets mailbox_verified
     *
     * @return bool
     */
    public function getMailboxVerified()
    {
        return $this->container['mailbox_verified'];
    }

    /**
     * Sets mailbox_verified
     *
     * @param bool $mailbox_verified mailbox_verified
     *
     * @return $this
     */
    public function setMailboxVerified($mailbox_verified)
    {
        $this->container['mailbox_verified'] = $mailbox_verified;

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
     * Gets spf
     *
     * @return \Swagger\Client\Model\ModelsSystemDNSRecord
     */
    public function getSpf()
    {
        return $this->container['spf'];
    }

    /**
     * Sets spf
     *
     * @param \Swagger\Client\Model\ModelsSystemDNSRecord $spf spf
     *
     * @return $this
     */
    public function setSpf($spf)
    {
        $this->container['spf'] = $spf;

        return $this;
    }

    /**
     * Gets spf_verified
     *
     * @return bool
     */
    public function getSpfVerified()
    {
        return $this->container['spf_verified'];
    }

    /**
     * Sets spf_verified
     *
     * @param bool $spf_verified spf_verified
     *
     * @return $this
     */
    public function setSpfVerified($spf_verified)
    {
        $this->container['spf_verified'] = $spf_verified;

        return $this;
    }

    /**
     * Gets track
     *
     * @return \Swagger\Client\Model\ModelsSystemDNSRecord
     */
    public function getTrack()
    {
        return $this->container['track'];
    }

    /**
     * Sets track
     *
     * @param \Swagger\Client\Model\ModelsSystemDNSRecord $track track
     *
     * @return $this
     */
    public function setTrack($track)
    {
        $this->container['track'] = $track;

        return $this;
    }

    /**
     * Gets track_verified
     *
     * @return bool
     */
    public function getTrackVerified()
    {
        return $this->container['track_verified'];
    }

    /**
     * Sets track_verified
     *
     * @param bool $track_verified track_verified
     *
     * @return $this
     */
    public function setTrackVerified($track_verified)
    {
        $this->container['track_verified'] = $track_verified;

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


