<?php
/**
 * ExternalMessageQueueData
 *
 * PHP version 5
 *
 * @category Class
 * @package  RadioManager
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * RadioManager
 *
 * RadioManager
 *
 * OpenAPI spec version: 2.0
 * Contact: support@pluxbox.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RadioManager\Model;

use \ArrayAccess;

/**
 * ExternalMessageQueueData Class Doc Comment
 *
 * @category    Class
 * @package     RadioManager
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ExternalMessageQueueData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ExternalMessageQueueData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'message' => 'string',
        'message_id' => 'int',
        'message_date' => '\DateTime',
        'sender_name' => 'string',
        'sender_id' => 'int',
        'avatar_url' => 'string',
        'model_type_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'message' => null,
        'message_id' => 'in64',
        'message_date' => 'date-time',
        'sender_name' => null,
        'sender_id' => 'in64',
        'avatar_url' => 'url',
        'model_type_id' => 'in64'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'message' => 'message',
        'message_id' => 'message_id',
        'message_date' => 'message_date',
        'sender_name' => 'sender_name',
        'sender_id' => 'sender_id',
        'avatar_url' => 'avatar_url',
        'model_type_id' => 'model_type_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'message' => 'setMessage',
        'message_id' => 'setMessageId',
        'message_date' => 'setMessageDate',
        'sender_name' => 'setSenderName',
        'sender_id' => 'setSenderId',
        'avatar_url' => 'setAvatarUrl',
        'model_type_id' => 'setModelTypeId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'message' => 'getMessage',
        'message_id' => 'getMessageId',
        'message_date' => 'getMessageDate',
        'sender_name' => 'getSenderName',
        'sender_id' => 'getSenderId',
        'avatar_url' => 'getAvatarUrl',
        'model_type_id' => 'getModelTypeId'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['message'] = isset($data['message']) ? $data['message'] : '';
        $this->container['message_id'] = isset($data['message_id']) ? $data['message_id'] : null;
        $this->container['message_date'] = isset($data['message_date']) ? $data['message_date'] : null;
        $this->container['sender_name'] = isset($data['sender_name']) ? $data['sender_name'] : '';
        $this->container['sender_id'] = isset($data['sender_id']) ? $data['sender_id'] : null;
        $this->container['avatar_url'] = isset($data['avatar_url']) ? $data['avatar_url'] : null;
        $this->container['model_type_id'] = isset($data['model_type_id']) ? $data['model_type_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['message']) && (strlen($this->container['message']) > 600)) {
            $invalid_properties[] = "invalid value for 'message', the character length must be smaller than or equal to 600.";
        }

        if (!is_null($this->container['message_id']) && ($this->container['message_id'] < 0)) {
            $invalid_properties[] = "invalid value for 'message_id', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['sender_name']) && (strlen($this->container['sender_name']) > 60)) {
            $invalid_properties[] = "invalid value for 'sender_name', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['sender_id']) && ($this->container['sender_id'] < 0)) {
            $invalid_properties[] = "invalid value for 'sender_id', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['model_type_id']) && ($this->container['model_type_id'] < 0)) {
            $invalid_properties[] = "invalid value for 'model_type_id', must be bigger than or equal to 0.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (strlen($this->container['message']) > 600) {
            return false;
        }
        if ($this->container['message_id'] < 0) {
            return false;
        }
        if (strlen($this->container['sender_name']) > 60) {
            return false;
        }
        if ($this->container['sender_id'] < 0) {
            return false;
        }
        if ($this->container['model_type_id'] < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message Message **(Required)**
     * @return $this
     */
    public function setMessage($message)
    {
        if (!is_null($message) && (strlen($message) > 600)) {
            throw new \InvalidArgumentException('invalid length for $message when calling ExternalMessageQueueData., must be smaller than or equal to 600.');
        }

        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets message_id
     * @return int
     */
    public function getMessageId()
    {
        return $this->container['message_id'];
    }

    /**
     * Sets message_id
     * @param int $message_id ID of Message **(Required)**
     * @return $this
     */
    public function setMessageId($message_id)
    {

        if (!is_null($message_id) && ($message_id < 0)) {
            throw new \InvalidArgumentException('invalid value for $message_id when calling ExternalMessageQueueData., must be bigger than or equal to 0.');
        }

        $this->container['message_id'] = $message_id;

        return $this;
    }

    /**
     * Gets message_date
     * @return \DateTime
     */
    public function getMessageDate()
    {
        return $this->container['message_date'];
    }

    /**
     * Sets message_date
     * @param \DateTime $message_date Message Date *(Optional)*
     * @return $this
     */
    public function setMessageDate($message_date)
    {
        $this->container['message_date'] = $message_date;

        return $this;
    }

    /**
     * Gets sender_name
     * @return string
     */
    public function getSenderName()
    {
        return $this->container['sender_name'];
    }

    /**
     * Sets sender_name
     * @param string $sender_name Sender **(Required)**
     * @return $this
     */
    public function setSenderName($sender_name)
    {
        if (!is_null($sender_name) && (strlen($sender_name) > 60)) {
            throw new \InvalidArgumentException('invalid length for $sender_name when calling ExternalMessageQueueData., must be smaller than or equal to 60.');
        }

        $this->container['sender_name'] = $sender_name;

        return $this;
    }

    /**
     * Gets sender_id
     * @return int
     */
    public function getSenderId()
    {
        return $this->container['sender_id'];
    }

    /**
     * Sets sender_id
     * @param int $sender_id ID of Sender *(Optional)*
     * @return $this
     */
    public function setSenderId($sender_id)
    {

        if (!is_null($sender_id) && ($sender_id < 0)) {
            throw new \InvalidArgumentException('invalid value for $sender_id when calling ExternalMessageQueueData., must be bigger than or equal to 0.');
        }

        $this->container['sender_id'] = $sender_id;

        return $this;
    }

    /**
     * Gets avatar_url
     * @return string
     */
    public function getAvatarUrl()
    {
        return $this->container['avatar_url'];
    }

    /**
     * Sets avatar_url
     * @param string $avatar_url URL of Avatar *(Optional)*
     * @return $this
     */
    public function setAvatarUrl($avatar_url)
    {
        $this->container['avatar_url'] = $avatar_url;

        return $this;
    }

    /**
     * Gets model_type_id
     * @return int
     */
    public function getModelTypeId()
    {
        return $this->container['model_type_id'];
    }

    /**
     * Sets model_type_id
     * @param int $model_type_id Assigned Model Type ID **(Required)**
     * @return $this
     */
    public function setModelTypeId($model_type_id)
    {

        if (!is_null($model_type_id) && ($model_type_id < 0)) {
            throw new \InvalidArgumentException('invalid value for $model_type_id when calling ExternalMessageQueueData., must be bigger than or equal to 0.');
        }

        $this->container['model_type_id'] = $model_type_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\RadioManager\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\RadioManager\ObjectSerializer::sanitizeForSerialization($this));
    }
}


