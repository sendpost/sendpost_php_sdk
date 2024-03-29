<?php
/**
 * RSuppression
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  sendpost
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SendPost API
 *
 * Email API and SMTP relay to not just send and measure email sending, but also alert and optimise. We provide you with tools, expertise and support needed to reliably deliver emails to your customers inboxes on time, every time.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: hello@sendpost.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace sendpost\model;

use \ArrayAccess;
use \sendpost\ObjectSerializer;

/**
 * RSuppression Class Doc Comment
 *
 * @category Class
 * @package  sendpost
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RSuppression implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RSuppression';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hard_bounce' => '\sendpost\model\SuppressionEmail[]',
        'manual' => '\sendpost\model\SuppressionEmail[]',
        'spam_complaint' => '\sendpost\model\SuppressionEmail[]',
        'unsubscribe' => '\sendpost\model\SuppressionEmail[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'hard_bounce' => null,
        'manual' => null,
        'spam_complaint' => null,
        'unsubscribe' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'hard_bounce' => false,
		'manual' => false,
		'spam_complaint' => false,
		'unsubscribe' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'hard_bounce' => 'hardBounce',
        'manual' => 'manual',
        'spam_complaint' => 'spamComplaint',
        'unsubscribe' => 'unsubscribe'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hard_bounce' => 'setHardBounce',
        'manual' => 'setManual',
        'spam_complaint' => 'setSpamComplaint',
        'unsubscribe' => 'setUnsubscribe'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hard_bounce' => 'getHardBounce',
        'manual' => 'getManual',
        'spam_complaint' => 'getSpamComplaint',
        'unsubscribe' => 'getUnsubscribe'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('hard_bounce', $data ?? [], null);
        $this->setIfExists('manual', $data ?? [], null);
        $this->setIfExists('spam_complaint', $data ?? [], null);
        $this->setIfExists('unsubscribe', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets hard_bounce
     *
     * @return \sendpost\model\SuppressionEmail[]|null
     */
    public function getHardBounce()
    {
        return $this->container['hard_bounce'];
    }

    /**
     * Sets hard_bounce
     *
     * @param \sendpost\model\SuppressionEmail[]|null $hard_bounce hard_bounce
     *
     * @return self
     */
    public function setHardBounce($hard_bounce)
    {
        if (is_null($hard_bounce)) {
            throw new \InvalidArgumentException('non-nullable hard_bounce cannot be null');
        }
        $this->container['hard_bounce'] = $hard_bounce;

        return $this;
    }

    /**
     * Gets manual
     *
     * @return \sendpost\model\SuppressionEmail[]|null
     */
    public function getManual()
    {
        return $this->container['manual'];
    }

    /**
     * Sets manual
     *
     * @param \sendpost\model\SuppressionEmail[]|null $manual manual
     *
     * @return self
     */
    public function setManual($manual)
    {
        if (is_null($manual)) {
            throw new \InvalidArgumentException('non-nullable manual cannot be null');
        }
        $this->container['manual'] = $manual;

        return $this;
    }

    /**
     * Gets spam_complaint
     *
     * @return \sendpost\model\SuppressionEmail[]|null
     */
    public function getSpamComplaint()
    {
        return $this->container['spam_complaint'];
    }

    /**
     * Sets spam_complaint
     *
     * @param \sendpost\model\SuppressionEmail[]|null $spam_complaint spam_complaint
     *
     * @return self
     */
    public function setSpamComplaint($spam_complaint)
    {
        if (is_null($spam_complaint)) {
            throw new \InvalidArgumentException('non-nullable spam_complaint cannot be null');
        }
        $this->container['spam_complaint'] = $spam_complaint;

        return $this;
    }

    /**
     * Gets unsubscribe
     *
     * @return \sendpost\model\SuppressionEmail[]|null
     */
    public function getUnsubscribe()
    {
        return $this->container['unsubscribe'];
    }

    /**
     * Sets unsubscribe
     *
     * @param \sendpost\model\SuppressionEmail[]|null $unsubscribe unsubscribe
     *
     * @return self
     */
    public function setUnsubscribe($unsubscribe)
    {
        if (is_null($unsubscribe)) {
            throw new \InvalidArgumentException('non-nullable unsubscribe cannot be null');
        }
        $this->container['unsubscribe'] = $unsubscribe;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


