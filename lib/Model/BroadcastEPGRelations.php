<?php
/**
 * BroadcastEPGRelations
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
 * BroadcastEPGRelations Class Doc Comment
 *
 * @category    Class
 * @package     RadioManager
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BroadcastEPGRelations implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BroadcastEPGRelations';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'items' => '\RadioManager\Model\BroadcastRelationsItems',
        'blocks' => '\RadioManager\Model\BroadcastRelationsBlocks',
        'program' => '\RadioManager\Model\BlockRelationsProgram',
        'tags' => '\RadioManager\Model\BroadcastRelationsTags',
        'presenters' => '\RadioManager\Model\PresenterEPGResult[]',
        'model_type' => '\RadioManager\Model\BroadcastRelationsModelType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'items' => null,
        'blocks' => null,
        'program' => null,
        'tags' => null,
        'presenters' => null,
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
        'items' => 'items',
        'blocks' => 'blocks',
        'program' => 'program',
        'tags' => 'tags',
        'presenters' => 'presenters',
        'model_type' => 'model_type'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'items' => 'setItems',
        'blocks' => 'setBlocks',
        'program' => 'setProgram',
        'tags' => 'setTags',
        'presenters' => 'setPresenters',
        'model_type' => 'setModelType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'items' => 'getItems',
        'blocks' => 'getBlocks',
        'program' => 'getProgram',
        'tags' => 'getTags',
        'presenters' => 'getPresenters',
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
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['blocks'] = isset($data['blocks']) ? $data['blocks'] : null;
        $this->container['program'] = isset($data['program']) ? $data['program'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['presenters'] = isset($data['presenters']) ? $data['presenters'] : null;
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
     * Gets items
     * @return \RadioManager\Model\BroadcastRelationsItems
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     * @param \RadioManager\Model\BroadcastRelationsItems $items
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets blocks
     * @return \RadioManager\Model\BroadcastRelationsBlocks
     */
    public function getBlocks()
    {
        return $this->container['blocks'];
    }

    /**
     * Sets blocks
     * @param \RadioManager\Model\BroadcastRelationsBlocks $blocks
     * @return $this
     */
    public function setBlocks($blocks)
    {
        $this->container['blocks'] = $blocks;

        return $this;
    }

    /**
     * Gets program
     * @return \RadioManager\Model\BlockRelationsProgram
     */
    public function getProgram()
    {
        return $this->container['program'];
    }

    /**
     * Sets program
     * @param \RadioManager\Model\BlockRelationsProgram $program
     * @return $this
     */
    public function setProgram($program)
    {
        $this->container['program'] = $program;

        return $this;
    }

    /**
     * Gets tags
     * @return \RadioManager\Model\BroadcastRelationsTags
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param \RadioManager\Model\BroadcastRelationsTags $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets presenters
     * @return \RadioManager\Model\PresenterEPGResult[]
     */
    public function getPresenters()
    {
        return $this->container['presenters'];
    }

    /**
     * Sets presenters
     * @param \RadioManager\Model\PresenterEPGResult[] $presenters
     * @return $this
     */
    public function setPresenters($presenters)
    {
        $this->container['presenters'] = $presenters;

        return $this;
    }

    /**
     * Gets model_type
     * @return \RadioManager\Model\BroadcastRelationsModelType
     */
    public function getModelType()
    {
        return $this->container['model_type'];
    }

    /**
     * Sets model_type
     * @param \RadioManager\Model\BroadcastRelationsModelType $model_type
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


