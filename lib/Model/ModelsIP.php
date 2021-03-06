<?php
/**
 * ModelsIP
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
 * ModelsIP Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ModelsIP implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'models.IP';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'aol_settings' => 'string',
        'auto_warmup_enabled' => 'bool',
        'auto_warmup_stage' => 'int',
        'comcast_settings' => 'string',
        'created' => 'int',
        'default_settings' => 'string',
        'gmail_settings' => 'string',
        'gmx_settings' => 'string',
        'icloud_settings' => 'string',
        'id' => 'int',
        'mailru_settings' => 'string',
        'microsoft_settings' => 'string',
        'public_ip' => 'string',
        'qq_settings' => 'string',
        'reverse_dns_hostname' => 'string',
        'system_domain' => '\Swagger\Client\Model\ModelsSystemDomain',
        'type' => '\Swagger\Client\Model\ModelsIPType',
        'yahoo_settings' => 'string',
        'yandex_settings' => 'string',
        'zoho_settings' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'aol_settings' => null,
        'auto_warmup_enabled' => null,
        'auto_warmup_stage' => 'int64',
        'comcast_settings' => null,
        'created' => 'int64',
        'default_settings' => null,
        'gmail_settings' => null,
        'gmx_settings' => null,
        'icloud_settings' => null,
        'id' => 'int64',
        'mailru_settings' => null,
        'microsoft_settings' => null,
        'public_ip' => null,
        'qq_settings' => null,
        'reverse_dns_hostname' => null,
        'system_domain' => null,
        'type' => null,
        'yahoo_settings' => null,
        'yandex_settings' => null,
        'zoho_settings' => null
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
        'aol_settings' => 'aolSettings',
        'auto_warmup_enabled' => 'autoWarmupEnabled',
        'auto_warmup_stage' => 'autoWarmupStage',
        'comcast_settings' => 'comcastSettings',
        'created' => 'created',
        'default_settings' => 'defaultSettings',
        'gmail_settings' => 'gmailSettings',
        'gmx_settings' => 'gmxSettings',
        'icloud_settings' => 'icloudSettings',
        'id' => 'id',
        'mailru_settings' => 'mailruSettings',
        'microsoft_settings' => 'microsoftSettings',
        'public_ip' => 'publicIP',
        'qq_settings' => 'qqSettings',
        'reverse_dns_hostname' => 'reverseDNSHostname',
        'system_domain' => 'systemDomain',
        'type' => 'type',
        'yahoo_settings' => 'yahooSettings',
        'yandex_settings' => 'yandexSettings',
        'zoho_settings' => 'zohoSettings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aol_settings' => 'setAolSettings',
        'auto_warmup_enabled' => 'setAutoWarmupEnabled',
        'auto_warmup_stage' => 'setAutoWarmupStage',
        'comcast_settings' => 'setComcastSettings',
        'created' => 'setCreated',
        'default_settings' => 'setDefaultSettings',
        'gmail_settings' => 'setGmailSettings',
        'gmx_settings' => 'setGmxSettings',
        'icloud_settings' => 'setIcloudSettings',
        'id' => 'setId',
        'mailru_settings' => 'setMailruSettings',
        'microsoft_settings' => 'setMicrosoftSettings',
        'public_ip' => 'setPublicIp',
        'qq_settings' => 'setQqSettings',
        'reverse_dns_hostname' => 'setReverseDnsHostname',
        'system_domain' => 'setSystemDomain',
        'type' => 'setType',
        'yahoo_settings' => 'setYahooSettings',
        'yandex_settings' => 'setYandexSettings',
        'zoho_settings' => 'setZohoSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aol_settings' => 'getAolSettings',
        'auto_warmup_enabled' => 'getAutoWarmupEnabled',
        'auto_warmup_stage' => 'getAutoWarmupStage',
        'comcast_settings' => 'getComcastSettings',
        'created' => 'getCreated',
        'default_settings' => 'getDefaultSettings',
        'gmail_settings' => 'getGmailSettings',
        'gmx_settings' => 'getGmxSettings',
        'icloud_settings' => 'getIcloudSettings',
        'id' => 'getId',
        'mailru_settings' => 'getMailruSettings',
        'microsoft_settings' => 'getMicrosoftSettings',
        'public_ip' => 'getPublicIp',
        'qq_settings' => 'getQqSettings',
        'reverse_dns_hostname' => 'getReverseDnsHostname',
        'system_domain' => 'getSystemDomain',
        'type' => 'getType',
        'yahoo_settings' => 'getYahooSettings',
        'yandex_settings' => 'getYandexSettings',
        'zoho_settings' => 'getZohoSettings'
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
        $this->container['aol_settings'] = isset($data['aol_settings']) ? $data['aol_settings'] : null;
        $this->container['auto_warmup_enabled'] = isset($data['auto_warmup_enabled']) ? $data['auto_warmup_enabled'] : null;
        $this->container['auto_warmup_stage'] = isset($data['auto_warmup_stage']) ? $data['auto_warmup_stage'] : null;
        $this->container['comcast_settings'] = isset($data['comcast_settings']) ? $data['comcast_settings'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['default_settings'] = isset($data['default_settings']) ? $data['default_settings'] : null;
        $this->container['gmail_settings'] = isset($data['gmail_settings']) ? $data['gmail_settings'] : null;
        $this->container['gmx_settings'] = isset($data['gmx_settings']) ? $data['gmx_settings'] : null;
        $this->container['icloud_settings'] = isset($data['icloud_settings']) ? $data['icloud_settings'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['mailru_settings'] = isset($data['mailru_settings']) ? $data['mailru_settings'] : null;
        $this->container['microsoft_settings'] = isset($data['microsoft_settings']) ? $data['microsoft_settings'] : null;
        $this->container['public_ip'] = isset($data['public_ip']) ? $data['public_ip'] : null;
        $this->container['qq_settings'] = isset($data['qq_settings']) ? $data['qq_settings'] : null;
        $this->container['reverse_dns_hostname'] = isset($data['reverse_dns_hostname']) ? $data['reverse_dns_hostname'] : null;
        $this->container['system_domain'] = isset($data['system_domain']) ? $data['system_domain'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['yahoo_settings'] = isset($data['yahoo_settings']) ? $data['yahoo_settings'] : null;
        $this->container['yandex_settings'] = isset($data['yandex_settings']) ? $data['yandex_settings'] : null;
        $this->container['zoho_settings'] = isset($data['zoho_settings']) ? $data['zoho_settings'] : null;
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
     * Gets aol_settings
     *
     * @return string
     */
    public function getAolSettings()
    {
        return $this->container['aol_settings'];
    }

    /**
     * Sets aol_settings
     *
     * @param string $aol_settings aol_settings
     *
     * @return $this
     */
    public function setAolSettings($aol_settings)
    {
        $this->container['aol_settings'] = $aol_settings;

        return $this;
    }

    /**
     * Gets auto_warmup_enabled
     *
     * @return bool
     */
    public function getAutoWarmupEnabled()
    {
        return $this->container['auto_warmup_enabled'];
    }

    /**
     * Sets auto_warmup_enabled
     *
     * @param bool $auto_warmup_enabled auto_warmup_enabled
     *
     * @return $this
     */
    public function setAutoWarmupEnabled($auto_warmup_enabled)
    {
        $this->container['auto_warmup_enabled'] = $auto_warmup_enabled;

        return $this;
    }

    /**
     * Gets auto_warmup_stage
     *
     * @return int
     */
    public function getAutoWarmupStage()
    {
        return $this->container['auto_warmup_stage'];
    }

    /**
     * Sets auto_warmup_stage
     *
     * @param int $auto_warmup_stage auto_warmup_stage
     *
     * @return $this
     */
    public function setAutoWarmupStage($auto_warmup_stage)
    {
        $this->container['auto_warmup_stage'] = $auto_warmup_stage;

        return $this;
    }

    /**
     * Gets comcast_settings
     *
     * @return string
     */
    public function getComcastSettings()
    {
        return $this->container['comcast_settings'];
    }

    /**
     * Sets comcast_settings
     *
     * @param string $comcast_settings comcast_settings
     *
     * @return $this
     */
    public function setComcastSettings($comcast_settings)
    {
        $this->container['comcast_settings'] = $comcast_settings;

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
     * Gets default_settings
     *
     * @return string
     */
    public function getDefaultSettings()
    {
        return $this->container['default_settings'];
    }

    /**
     * Sets default_settings
     *
     * @param string $default_settings default_settings
     *
     * @return $this
     */
    public function setDefaultSettings($default_settings)
    {
        $this->container['default_settings'] = $default_settings;

        return $this;
    }

    /**
     * Gets gmail_settings
     *
     * @return string
     */
    public function getGmailSettings()
    {
        return $this->container['gmail_settings'];
    }

    /**
     * Sets gmail_settings
     *
     * @param string $gmail_settings gmail_settings
     *
     * @return $this
     */
    public function setGmailSettings($gmail_settings)
    {
        $this->container['gmail_settings'] = $gmail_settings;

        return $this;
    }

    /**
     * Gets gmx_settings
     *
     * @return string
     */
    public function getGmxSettings()
    {
        return $this->container['gmx_settings'];
    }

    /**
     * Sets gmx_settings
     *
     * @param string $gmx_settings gmx_settings
     *
     * @return $this
     */
    public function setGmxSettings($gmx_settings)
    {
        $this->container['gmx_settings'] = $gmx_settings;

        return $this;
    }

    /**
     * Gets icloud_settings
     *
     * @return string
     */
    public function getIcloudSettings()
    {
        return $this->container['icloud_settings'];
    }

    /**
     * Sets icloud_settings
     *
     * @param string $icloud_settings icloud_settings
     *
     * @return $this
     */
    public function setIcloudSettings($icloud_settings)
    {
        $this->container['icloud_settings'] = $icloud_settings;

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
     * Gets mailru_settings
     *
     * @return string
     */
    public function getMailruSettings()
    {
        return $this->container['mailru_settings'];
    }

    /**
     * Sets mailru_settings
     *
     * @param string $mailru_settings mailru_settings
     *
     * @return $this
     */
    public function setMailruSettings($mailru_settings)
    {
        $this->container['mailru_settings'] = $mailru_settings;

        return $this;
    }

    /**
     * Gets microsoft_settings
     *
     * @return string
     */
    public function getMicrosoftSettings()
    {
        return $this->container['microsoft_settings'];
    }

    /**
     * Sets microsoft_settings
     *
     * @param string $microsoft_settings microsoft_settings
     *
     * @return $this
     */
    public function setMicrosoftSettings($microsoft_settings)
    {
        $this->container['microsoft_settings'] = $microsoft_settings;

        return $this;
    }

    /**
     * Gets public_ip
     *
     * @return string
     */
    public function getPublicIp()
    {
        return $this->container['public_ip'];
    }

    /**
     * Sets public_ip
     *
     * @param string $public_ip public_ip
     *
     * @return $this
     */
    public function setPublicIp($public_ip)
    {
        $this->container['public_ip'] = $public_ip;

        return $this;
    }

    /**
     * Gets qq_settings
     *
     * @return string
     */
    public function getQqSettings()
    {
        return $this->container['qq_settings'];
    }

    /**
     * Sets qq_settings
     *
     * @param string $qq_settings qq_settings
     *
     * @return $this
     */
    public function setQqSettings($qq_settings)
    {
        $this->container['qq_settings'] = $qq_settings;

        return $this;
    }

    /**
     * Gets reverse_dns_hostname
     *
     * @return string
     */
    public function getReverseDnsHostname()
    {
        return $this->container['reverse_dns_hostname'];
    }

    /**
     * Sets reverse_dns_hostname
     *
     * @param string $reverse_dns_hostname reverse_dns_hostname
     *
     * @return $this
     */
    public function setReverseDnsHostname($reverse_dns_hostname)
    {
        $this->container['reverse_dns_hostname'] = $reverse_dns_hostname;

        return $this;
    }

    /**
     * Gets system_domain
     *
     * @return \Swagger\Client\Model\ModelsSystemDomain
     */
    public function getSystemDomain()
    {
        return $this->container['system_domain'];
    }

    /**
     * Sets system_domain
     *
     * @param \Swagger\Client\Model\ModelsSystemDomain $system_domain system_domain
     *
     * @return $this
     */
    public function setSystemDomain($system_domain)
    {
        $this->container['system_domain'] = $system_domain;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Swagger\Client\Model\ModelsIPType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Swagger\Client\Model\ModelsIPType $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets yahoo_settings
     *
     * @return string
     */
    public function getYahooSettings()
    {
        return $this->container['yahoo_settings'];
    }

    /**
     * Sets yahoo_settings
     *
     * @param string $yahoo_settings yahoo_settings
     *
     * @return $this
     */
    public function setYahooSettings($yahoo_settings)
    {
        $this->container['yahoo_settings'] = $yahoo_settings;

        return $this;
    }

    /**
     * Gets yandex_settings
     *
     * @return string
     */
    public function getYandexSettings()
    {
        return $this->container['yandex_settings'];
    }

    /**
     * Sets yandex_settings
     *
     * @param string $yandex_settings yandex_settings
     *
     * @return $this
     */
    public function setYandexSettings($yandex_settings)
    {
        $this->container['yandex_settings'] = $yandex_settings;

        return $this;
    }

    /**
     * Gets zoho_settings
     *
     * @return string
     */
    public function getZohoSettings()
    {
        return $this->container['zoho_settings'];
    }

    /**
     * Sets zoho_settings
     *
     * @param string $zoho_settings zoho_settings
     *
     * @return $this
     */
    public function setZohoSettings($zoho_settings)
    {
        $this->container['zoho_settings'] = $zoho_settings;

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


