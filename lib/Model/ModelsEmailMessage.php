<?php
/**
 * ModelsEmailMessage
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
 * ModelsEmailMessage Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ModelsEmailMessage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'models.EmailMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amp_body' => 'string',
        'from' => '\Swagger\Client\Model\ModelsFrom',
        'groups' => 'object',
        'headers' => 'object',
        'html_body' => 'string',
        'ippool' => 'string',
        'pre_text' => 'string',
        'reply_to' => '\Swagger\Client\Model\ModelsReplyTo',
        'subject' => 'string',
        'text_body' => 'string',
        'to' => '\Swagger\Client\Model\ModelsTo[]',
        'track_clicks' => 'bool',
        'track_opens' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amp_body' => null,
        'from' => null,
        'groups' => null,
        'headers' => null,
        'html_body' => null,
        'ippool' => null,
        'pre_text' => null,
        'reply_to' => null,
        'subject' => null,
        'text_body' => null,
        'to' => null,
        'track_clicks' => null,
        'track_opens' => null
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
        'amp_body' => 'ampBody',
        'from' => 'from',
        'groups' => 'groups',
        'headers' => 'headers',
        'html_body' => 'htmlBody',
        'ippool' => 'ippool',
        'pre_text' => 'preText',
        'reply_to' => 'replyTo',
        'subject' => 'subject',
        'text_body' => 'textBody',
        'to' => 'to',
        'track_clicks' => 'trackClicks',
        'track_opens' => 'trackOpens'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amp_body' => 'setAmpBody',
        'from' => 'setFrom',
        'groups' => 'setGroups',
        'headers' => 'setHeaders',
        'html_body' => 'setHtmlBody',
        'ippool' => 'setIppool',
        'pre_text' => 'setPreText',
        'reply_to' => 'setReplyTo',
        'subject' => 'setSubject',
        'text_body' => 'setTextBody',
        'to' => 'setTo',
        'track_clicks' => 'setTrackClicks',
        'track_opens' => 'setTrackOpens'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amp_body' => 'getAmpBody',
        'from' => 'getFrom',
        'groups' => 'getGroups',
        'headers' => 'getHeaders',
        'html_body' => 'getHtmlBody',
        'ippool' => 'getIppool',
        'pre_text' => 'getPreText',
        'reply_to' => 'getReplyTo',
        'subject' => 'getSubject',
        'text_body' => 'getTextBody',
        'to' => 'getTo',
        'track_clicks' => 'getTrackClicks',
        'track_opens' => 'getTrackOpens'
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
        $this->container['amp_body'] = isset($data['amp_body']) ? $data['amp_body'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['headers'] = isset($data['headers']) ? $data['headers'] : null;
        $this->container['html_body'] = isset($data['html_body']) ? $data['html_body'] : null;
        $this->container['ippool'] = isset($data['ippool']) ? $data['ippool'] : null;
        $this->container['pre_text'] = isset($data['pre_text']) ? $data['pre_text'] : null;
        $this->container['reply_to'] = isset($data['reply_to']) ? $data['reply_to'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['text_body'] = isset($data['text_body']) ? $data['text_body'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['track_clicks'] = isset($data['track_clicks']) ? $data['track_clicks'] : null;
        $this->container['track_opens'] = isset($data['track_opens']) ? $data['track_opens'] : null;
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
     * Gets amp_body
     *
     * @return string
     */
    public function getAmpBody()
    {
        return $this->container['amp_body'];
    }

    /**
     * Sets amp_body
     *
     * @param string $amp_body amp_body
     *
     * @return $this
     */
    public function setAmpBody($amp_body)
    {
        $this->container['amp_body'] = $amp_body;

        return $this;
    }

    /**
     * Gets from
     *
     * @return \Swagger\Client\Model\ModelsFrom
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param \Swagger\Client\Model\ModelsFrom $from from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return object
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param object $groups groups
     *
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets headers
     *
     * @return object
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param object $headers headers
     *
     * @return $this
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }

    /**
     * Gets html_body
     *
     * @return string
     */
    public function getHtmlBody()
    {
        return $this->container['html_body'];
    }

    /**
     * Sets html_body
     *
     * @param string $html_body html_body
     *
     * @return $this
     */
    public function setHtmlBody($html_body)
    {
        $this->container['html_body'] = $html_body;

        return $this;
    }

    /**
     * Gets ippool
     *
     * @return string
     */
    public function getIppool()
    {
        return $this->container['ippool'];
    }

    /**
     * Sets ippool
     *
     * @param string $ippool ippool
     *
     * @return $this
     */
    public function setIppool($ippool)
    {
        $this->container['ippool'] = $ippool;

        return $this;
    }

    /**
     * Gets pre_text
     *
     * @return string
     */
    public function getPreText()
    {
        return $this->container['pre_text'];
    }

    /**
     * Sets pre_text
     *
     * @param string $pre_text pre_text
     *
     * @return $this
     */
    public function setPreText($pre_text)
    {
        $this->container['pre_text'] = $pre_text;

        return $this;
    }

    /**
     * Gets reply_to
     *
     * @return \Swagger\Client\Model\ModelsReplyTo
     */
    public function getReplyTo()
    {
        return $this->container['reply_to'];
    }

    /**
     * Sets reply_to
     *
     * @param \Swagger\Client\Model\ModelsReplyTo $reply_to reply_to
     *
     * @return $this
     */
    public function setReplyTo($reply_to)
    {
        $this->container['reply_to'] = $reply_to;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets text_body
     *
     * @return string
     */
    public function getTextBody()
    {
        return $this->container['text_body'];
    }

    /**
     * Sets text_body
     *
     * @param string $text_body text_body
     *
     * @return $this
     */
    public function setTextBody($text_body)
    {
        $this->container['text_body'] = $text_body;

        return $this;
    }

    /**
     * Gets to
     *
     * @return \Swagger\Client\Model\ModelsTo[]
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param \Swagger\Client\Model\ModelsTo[] $to to
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets track_clicks
     *
     * @return bool
     */
    public function getTrackClicks()
    {
        return $this->container['track_clicks'];
    }

    /**
     * Sets track_clicks
     *
     * @param bool $track_clicks track_clicks
     *
     * @return $this
     */
    public function setTrackClicks($track_clicks)
    {
        $this->container['track_clicks'] = $track_clicks;

        return $this;
    }

    /**
     * Gets track_opens
     *
     * @return bool
     */
    public function getTrackOpens()
    {
        return $this->container['track_opens'];
    }

    /**
     * Sets track_opens
     *
     * @param bool $track_opens track_opens
     *
     * @return $this
     */
    public function setTrackOpens($track_opens)
    {
        $this->container['track_opens'] = $track_opens;

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


