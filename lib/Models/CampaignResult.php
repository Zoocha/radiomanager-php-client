<?php
/**
 * CampaignResult
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
 * CampaignResult Class Doc Comment
 *
 * @category    Class
 * @package     RadioManager
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampaignResult implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CampaignResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'updated_at' => '\DateTime',
        'created_at' => '\DateTime',
        'deleted_at' => '\DateTime',
        'item' => '\RadioManager\RadioManagerModels\Item[]',
        '_station_id' => 'int',
        'model_type_id' => 'int',
        'field_values' => 'null[]',
        'title' => 'string',
        'start' => '\DateTime',
        'stop' => '\DateTime',
        'recommended' => 'bool',
        'description' => 'string',
        'items' => '\RadioManager\RadioManagerModels\CampaignRelationsItems',
        'model_type' => '\RadioManager\RadioManagerModels\BroadcastRelationsModelType'
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
        'item' => null,
        '_station_id' => 'int64',
        'model_type_id' => 'int64',
        'field_values' => null,
        'title' => null,
        'start' => 'date-time',
        'stop' => 'date-time',
        'recommended' => null,
        'description' => null,
        'items' => null,
        'model_type' => null
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
        'item' => 'item',
        '_station_id' => '_station_id',
        'model_type_id' => 'model_type_id',
        'field_values' => 'field_values',
        'title' => 'title',
        'start' => 'start',
        'stop' => 'stop',
        'recommended' => 'recommended',
        'description' => 'description',
        'items' => 'items',
        'model_type' => 'model_type'
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
        'item' => 'setItem',
        '_station_id' => 'setStationId',
        'model_type_id' => 'setModelTypeId',
        'field_values' => 'setFieldValues',
        'title' => 'setTitle',
        'start' => 'setStart',
        'stop' => 'setStop',
        'recommended' => 'setRecommended',
        'description' => 'setDescription',
        'items' => 'setItems',
        'model_type' => 'setModelType'
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
        'item' => 'getItem',
        '_station_id' => 'getStationId',
        'model_type_id' => 'getModelTypeId',
        'field_values' => 'getFieldValues',
        'title' => 'getTitle',
        'start' => 'getStart',
        'stop' => 'getStop',
        'recommended' => 'getRecommended',
        'description' => 'getDescription',
        'items' => 'getItems',
        'model_type' => 'getModelType'
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
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['_station_id'] = isset($data['_station_id']) ? $data['_station_id'] : null;
        $this->container['model_type_id'] = isset($data['model_type_id']) ? $data['model_type_id'] : null;
        $this->container['field_values'] = isset($data['field_values']) ? $data['field_values'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['stop'] = isset($data['stop']) ? $data['stop'] : null;
        $this->container['recommended'] = isset($data['recommended']) ? $data['recommended'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['model_type'] = isset($data['model_type']) ? $data['model_type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalid_properties[] = "'updated_at' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalid_properties[] = "'created_at' can't be null";
        }
        if ($this->container['deleted_at'] === null) {
            $invalid_properties[] = "'deleted_at' can't be null";
        }
        if ($this->container['model_type_id'] === null) {
            $invalid_properties[] = "'model_type_id' can't be null";
        }
        if ($this->container['start'] === null) {
            $invalid_properties[] = "'start' can't be null";
        }
        if ($this->container['stop'] === null) {
            $invalid_properties[] = "'stop' can't be null";
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['updated_at'] === null) {
            return false;
        }
        if ($this->container['created_at'] === null) {
            return false;
        }
        if ($this->container['deleted_at'] === null) {
            return false;
        }
        if ($this->container['model_type_id'] === null) {
            return false;
        }
        if ($this->container['start'] === null) {
            return false;
        }
        if ($this->container['stop'] === null) {
            return false;
        }
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
     * Gets item
     * @return \RadioManager\RadioManagerModels\Item[]
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     * @param \RadioManager\RadioManagerModels\Item[] $item
     * @return $this
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

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
     * Gets model_type_id
     * @return int
     */
    public function getModelTypeId()
    {
        return $this->container['model_type_id'];
    }

    /**
     * Sets model_type_id
     * @param int $model_type_id
     * @return $this
     */
    public function setModelTypeId($model_type_id)
    {
        $this->container['model_type_id'] = $model_type_id;

        return $this;
    }

    /**
     * Gets field_values
     * @return null[]
     */
    public function getFieldValues()
    {
        return $this->container['field_values'];
    }

    /**
     * Sets field_values
     * @param null[] $field_values
     * @return $this
     */
    public function setFieldValues($field_values)
    {
        $this->container['field_values'] = $field_values;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets start
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     * @param \DateTime $start
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets stop
     * @return \DateTime
     */
    public function getStop()
    {
        return $this->container['stop'];
    }

    /**
     * Sets stop
     * @param \DateTime $stop
     * @return $this
     */
    public function setStop($stop)
    {
        $this->container['stop'] = $stop;

        return $this;
    }

    /**
     * Gets recommended
     * @return bool
     */
    public function getRecommended()
    {
        return $this->container['recommended'];
    }

    /**
     * Sets recommended
     * @param bool $recommended
     * @return $this
     */
    public function setRecommended($recommended)
    {
        $this->container['recommended'] = $recommended;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets items
     * @return \RadioManager\RadioManagerModels\CampaignRelationsItems
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     * @param \RadioManager\RadioManagerModels\CampaignRelationsItems $items
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets model_type
     * @return \RadioManager\RadioManagerModels\BroadcastRelationsModelType
     */
    public function getModelType()
    {
        return $this->container['model_type'];
    }

    /**
     * Sets model_type
     * @param \RadioManager\RadioManagerModels\BroadcastRelationsModelType $model_type
     * @return $this
     */
    public function setModelType($model_type)
    {
        $this->container['model_type'] = $model_type;

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


