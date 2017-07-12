<?php
/**
 * ItemOutputOnly
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

namespace RadioManager\RadioManagerModels;

use \ArrayAccess;

/**
 * ItemOutputOnly Class Doc Comment
 *
 * @category    Class
 * @package     RadioManager
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ItemOutputOnly implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ItemOutputOnly';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'updated_at' => '\DateTime',
        'created_at' => '\DateTime',
        'deleted_at' => '\DateTime',
        'data_modified' => 'int',
        'order' => 'int',
        'templateblock_id' => 'int',
        'templateitem_id' => 'int',
        '_station_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'updated_at' => 'date-time',
        'created_at' => 'date-time',
        'deleted_at' => 'date-time',
        'data_modified' => 'int64',
        'order' => 'int64',
        'templateblock_id' => 'int64',
        'templateitem_id' => 'int64',
        '_station_id' => 'int64'
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
        'id' => 'id',
        'updated_at' => 'updated_at',
        'created_at' => 'created_at',
        'deleted_at' => 'deleted_at',
        'data_modified' => 'data_modified',
        'order' => 'order',
        'templateblock_id' => 'templateblock_id',
        'templateitem_id' => 'templateitem_id',
        '_station_id' => '_station_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'updated_at' => 'setUpdatedAt',
        'created_at' => 'setCreatedAt',
        'deleted_at' => 'setDeletedAt',
        'data_modified' => 'setDataModified',
        'order' => 'setOrder',
        'templateblock_id' => 'setTemplateblockId',
        'templateitem_id' => 'setTemplateitemId',
        '_station_id' => 'setStationId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'updated_at' => 'getUpdatedAt',
        'created_at' => 'getCreatedAt',
        'deleted_at' => 'getDeletedAt',
        'data_modified' => 'getDataModified',
        'order' => 'getOrder',
        'templateblock_id' => 'getTemplateblockId',
        'templateitem_id' => 'getTemplateitemId',
        '_station_id' => 'getStationId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['deleted_at'] = isset($data['deleted_at']) ? $data['deleted_at'] : null;
        $this->container['data_modified'] = isset($data['data_modified']) ? $data['data_modified'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['templateblock_id'] = isset($data['templateblock_id']) ? $data['templateblock_id'] : null;
        $this->container['templateitem_id'] = isset($data['templateitem_id']) ? $data['templateitem_id'] : null;
        $this->container['_station_id'] = isset($data['_station_id']) ? $data['_station_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets updated_at
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param \DateTime $updated_at
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets created_at
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param \DateTime $created_at
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets deleted_at
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     * @param \DateTime $deleted_at
     * @return $this
     */
    public function setDeletedAt($deleted_at)
    {
        $this->container['deleted_at'] = $deleted_at;

        return $this;
    }

    /**
     * Gets data_modified
     * @return int
     */
    public function getDataModified()
    {
        return $this->container['data_modified'];
    }

    /**
     * Sets data_modified
     * @param int $data_modified
     * @return $this
     */
    public function setDataModified($data_modified)
    {
        $this->container['data_modified'] = $data_modified;

        return $this;
    }

    /**
     * Gets order
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     * @param int $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets templateblock_id
     * @return int
     */
    public function getTemplateblockId()
    {
        return $this->container['templateblock_id'];
    }

    /**
     * Sets templateblock_id
     * @param int $templateblock_id
     * @return $this
     */
    public function setTemplateblockId($templateblock_id)
    {
        $this->container['templateblock_id'] = $templateblock_id;

        return $this;
    }

    /**
     * Gets templateitem_id
     * @return int
     */
    public function getTemplateitemId()
    {
        return $this->container['templateitem_id'];
    }

    /**
     * Sets templateitem_id
     * @param int $templateitem_id
     * @return $this
     */
    public function setTemplateitemId($templateitem_id)
    {
        $this->container['templateitem_id'] = $templateitem_id;

        return $this;
    }

    /**
     * Gets _station_id
     * @return int
     */
    public function getStationId()
    {
        return $this->container['_station_id'];
    }

    /**
     * Sets _station_id
     * @param int $_station_id
     * @return $this
     */
    public function setStationId($_station_id)
    {
        $this->container['_station_id'] = $_station_id;

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


