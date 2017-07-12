<?php
/**
 * ProgramDataInput
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
 * ProgramDataInput Class Doc Comment
 *
 * @category    Class
 * @package     RadioManager
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProgramDataInput implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProgramDataInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'model_type_id' => 'int',
        'field_values' => '\RadioManager\RadioManagerModels\ProgramFieldValues',
        'title' => 'string',
        'disabled' => 'bool',
        'genre_id' => 'int',
        'description' => 'string',
        'short_name' => 'string',
        'medium_name' => 'string',
        'website' => 'string',
        'email' => 'string',
        'recommended' => 'bool',
        'language' => 'string',
        'pty_code_id' => 'int',
        'tags' => 'int[]',
        'presenters' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'model_type_id' => 'int64',
        'field_values' => null,
        'title' => null,
        'disabled' => null,
        'genre_id' => 'int64',
        'description' => null,
        'short_name' => null,
        'medium_name' => null,
        'website' => null,
        'email' => null,
        'recommended' => null,
        'language' => null,
        'pty_code_id' => 'int64',
        'tags' => null,
        'presenters' => null
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
        'model_type_id' => 'model_type_id',
        'field_values' => 'field_values',
        'title' => 'title',
        'disabled' => 'disabled',
        'genre_id' => 'genre_id',
        'description' => 'description',
        'short_name' => 'short_name',
        'medium_name' => 'medium_name',
        'website' => 'website',
        'email' => 'email',
        'recommended' => 'recommended',
        'language' => 'language',
        'pty_code_id' => 'pty_code_id',
        'tags' => 'tags',
        'presenters' => 'presenters'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'model_type_id' => 'setModelTypeId',
        'field_values' => 'setFieldValues',
        'title' => 'setTitle',
        'disabled' => 'setDisabled',
        'genre_id' => 'setGenreId',
        'description' => 'setDescription',
        'short_name' => 'setShortName',
        'medium_name' => 'setMediumName',
        'website' => 'setWebsite',
        'email' => 'setEmail',
        'recommended' => 'setRecommended',
        'language' => 'setLanguage',
        'pty_code_id' => 'setPtyCodeId',
        'tags' => 'setTags',
        'presenters' => 'setPresenters'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'model_type_id' => 'getModelTypeId',
        'field_values' => 'getFieldValues',
        'title' => 'getTitle',
        'disabled' => 'getDisabled',
        'genre_id' => 'getGenreId',
        'description' => 'getDescription',
        'short_name' => 'getShortName',
        'medium_name' => 'getMediumName',
        'website' => 'getWebsite',
        'email' => 'getEmail',
        'recommended' => 'getRecommended',
        'language' => 'getLanguage',
        'pty_code_id' => 'getPtyCodeId',
        'tags' => 'getTags',
        'presenters' => 'getPresenters'
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
        $this->container['model_type_id'] = isset($data['model_type_id']) ? $data['model_type_id'] : null;
        $this->container['field_values'] = isset($data['field_values']) ? $data['field_values'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['genre_id'] = isset($data['genre_id']) ? $data['genre_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['short_name'] = isset($data['short_name']) ? $data['short_name'] : null;
        $this->container['medium_name'] = isset($data['medium_name']) ? $data['medium_name'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['recommended'] = isset($data['recommended']) ? $data['recommended'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['pty_code_id'] = isset($data['pty_code_id']) ? $data['pty_code_id'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['presenters'] = isset($data['presenters']) ? $data['presenters'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['model_type_id'] === null) {
            $invalid_properties[] = "'model_type_id' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalid_properties[] = "'title' can't be null";
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

        if ($this->container['model_type_id'] === null) {
            return false;
        }
        if ($this->container['title'] === null) {
            return false;
        }
        return true;
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
     * @return \RadioManager\RadioManagerModels\ProgramFieldValues
     */
    public function getFieldValues()
    {
        return $this->container['field_values'];
    }

    /**
     * Sets field_values
     * @param \RadioManager\RadioManagerModels\ProgramFieldValues $field_values
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
     * Gets disabled
     * @return bool
     */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
     * Sets disabled
     * @param bool $disabled
     * @return $this
     */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;

        return $this;
    }

    /**
     * Gets genre_id
     * @return int
     */
    public function getGenreId()
    {
        return $this->container['genre_id'];
    }

    /**
     * Sets genre_id
     * @param int $genre_id
     * @return $this
     */
    public function setGenreId($genre_id)
    {
        $this->container['genre_id'] = $genre_id;

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
     * Gets short_name
     * @return string
     */
    public function getShortName()
    {
        return $this->container['short_name'];
    }

    /**
     * Sets short_name
     * @param string $short_name
     * @return $this
     */
    public function setShortName($short_name)
    {
        $this->container['short_name'] = $short_name;

        return $this;
    }

    /**
     * Gets medium_name
     * @return string
     */
    public function getMediumName()
    {
        return $this->container['medium_name'];
    }

    /**
     * Sets medium_name
     * @param string $medium_name
     * @return $this
     */
    public function setMediumName($medium_name)
    {
        $this->container['medium_name'] = $medium_name;

        return $this;
    }

    /**
     * Gets website
     * @return string
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     * @param string $website
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
     * Gets language
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     * @param string $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets pty_code_id
     * @return int
     */
    public function getPtyCodeId()
    {
        return $this->container['pty_code_id'];
    }

    /**
     * Sets pty_code_id
     * @param int $pty_code_id
     * @return $this
     */
    public function setPtyCodeId($pty_code_id)
    {
        $this->container['pty_code_id'] = $pty_code_id;

        return $this;
    }

    /**
     * Gets tags
     * @return int[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param int[] $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets presenters
     * @return int[]
     */
    public function getPresenters()
    {
        return $this->container['presenters'];
    }

    /**
     * Sets presenters
     * @param int[] $presenters
     * @return $this
     */
    public function setPresenters($presenters)
    {
        $this->container['presenters'] = $presenters;

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


