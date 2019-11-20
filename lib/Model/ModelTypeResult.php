<?php
/**
 * ModelTypeResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  RadioManager
 * @author   Swagger Codegen team
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
 * Swagger Codegen version: 2.3.0
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RadioManager\Model;

use \ArrayAccess;
use \RadioManager\ObjectSerializer;

/**
 * ModelTypeResult Class Doc Comment
 *
 * @category Class
 * @package  RadioManager
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ModelTypeResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ModelTypeResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'model' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'options' => '\RadioManager\Model\ModelTypeOptions',
        'order' => 'int',
        'deleted_at' => '\DateTime',
        'campaigns' => '\RadioManager\Model\ModelTypeRelationsCampaigns',
        'broadcasts' => '\RadioManager\Model\ModelTypeRelationsBroadcasts',
        'programs' => '\RadioManager\Model\ModelTypeRelationsPrograms',
        'contacts' => '\RadioManager\Model\ModelTypeRelationsContacts',
        'presenters' => '\RadioManager\Model\ModelTypeRelationsPresenters',
        'items' => '\RadioManager\Model\ModelTypeRelationsItems',
        '_external_station_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'name' => null,
        'model' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'options' => null,
        'order' => 'int64',
        'deleted_at' => 'date-time',
        'campaigns' => null,
        'broadcasts' => null,
        'programs' => null,
        'contacts' => null,
        'presenters' => null,
        'items' => null,
        '_external_station_id' => 'int64'
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
        'id' => 'id',
        'name' => 'name',
        'model' => 'model',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'options' => 'options',
        'order' => 'order',
        'deleted_at' => 'deleted_at',
        'campaigns' => 'campaigns',
        'broadcasts' => 'broadcasts',
        'programs' => 'programs',
        'contacts' => 'contacts',
        'presenters' => 'presenters',
        'items' => 'items',
        '_external_station_id' => '_external_station_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'model' => 'setModel',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'options' => 'setOptions',
        'order' => 'setOrder',
        'deleted_at' => 'setDeletedAt',
        'campaigns' => 'setCampaigns',
        'broadcasts' => 'setBroadcasts',
        'programs' => 'setPrograms',
        'contacts' => 'setContacts',
        'presenters' => 'setPresenters',
        'items' => 'setItems',
        '_external_station_id' => 'setExternalStationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'model' => 'getModel',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'options' => 'getOptions',
        'order' => 'getOrder',
        'deleted_at' => 'getDeletedAt',
        'campaigns' => 'getCampaigns',
        'broadcasts' => 'getBroadcasts',
        'programs' => 'getPrograms',
        'contacts' => 'getContacts',
        'presenters' => 'getPresenters',
        'items' => 'getItems',
        '_external_station_id' => 'getExternalStationId'
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

    const MODEL_BROADCAST = 'broadcast';
    const MODEL_PROGRAM = 'program';
    const MODEL_ITEM = 'item';
    const MODEL_CAMPAIGN = 'campaign';
    const MODEL_PRESENTER = 'presenter';
    const MODEL_CONTACT = 'contact';
    const MODEL_EXTERNAL = 'external';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModelAllowableValues()
    {
        return [
            self::MODEL_BROADCAST,
            self::MODEL_PROGRAM,
            self::MODEL_ITEM,
            self::MODEL_CAMPAIGN,
            self::MODEL_PRESENTER,
            self::MODEL_CONTACT,
            self::MODEL_EXTERNAL,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['deleted_at'] = isset($data['deleted_at']) ? $data['deleted_at'] : null;
        $this->container['campaigns'] = isset($data['campaigns']) ? $data['campaigns'] : null;
        $this->container['broadcasts'] = isset($data['broadcasts']) ? $data['broadcasts'] : null;
        $this->container['programs'] = isset($data['programs']) ? $data['programs'] : null;
        $this->container['contacts'] = isset($data['contacts']) ? $data['contacts'] : null;
        $this->container['presenters'] = isset($data['presenters']) ? $data['presenters'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['_external_station_id'] = isset($data['_external_station_id']) ? $data['_external_station_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        $allowedValues = $this->getModelAllowableValues();
        if (!in_array($this->container['model'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'model', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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

        if ($this->container['id'] === null) {
            return false;
        }
        $allowedValues = $this->getModelAllowableValues();
        if (!in_array($this->container['model'], $allowedValues)) {
            return false;
        }
        return true;
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
     * Gets model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string $model model
     *
     * @return $this
     */
    public function setModel($model)
    {
        $allowedValues = $this->getModelAllowableValues();
        if (!is_null($model) && !in_array($model, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'model', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \RadioManager\Model\ModelTypeOptions
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \RadioManager\Model\ModelTypeOptions $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int $order order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param \DateTime $deleted_at deleted_at
     *
     * @return $this
     */
    public function setDeletedAt($deleted_at)
    {
        $this->container['deleted_at'] = $deleted_at;

        return $this;
    }

    /**
     * Gets campaigns
     *
     * @return \RadioManager\Model\ModelTypeRelationsCampaigns
     */
    public function getCampaigns()
    {
        return $this->container['campaigns'];
    }

    /**
     * Sets campaigns
     *
     * @param \RadioManager\Model\ModelTypeRelationsCampaigns $campaigns campaigns
     *
     * @return $this
     */
    public function setCampaigns($campaigns)
    {
        $this->container['campaigns'] = $campaigns;

        return $this;
    }

    /**
     * Gets broadcasts
     *
     * @return \RadioManager\Model\ModelTypeRelationsBroadcasts
     */
    public function getBroadcasts()
    {
        return $this->container['broadcasts'];
    }

    /**
     * Sets broadcasts
     *
     * @param \RadioManager\Model\ModelTypeRelationsBroadcasts $broadcasts broadcasts
     *
     * @return $this
     */
    public function setBroadcasts($broadcasts)
    {
        $this->container['broadcasts'] = $broadcasts;

        return $this;
    }

    /**
     * Gets programs
     *
     * @return \RadioManager\Model\ModelTypeRelationsPrograms
     */
    public function getPrograms()
    {
        return $this->container['programs'];
    }

    /**
     * Sets programs
     *
     * @param \RadioManager\Model\ModelTypeRelationsPrograms $programs programs
     *
     * @return $this
     */
    public function setPrograms($programs)
    {
        $this->container['programs'] = $programs;

        return $this;
    }

    /**
     * Gets contacts
     *
     * @return \RadioManager\Model\ModelTypeRelationsContacts
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     *
     * @param \RadioManager\Model\ModelTypeRelationsContacts $contacts contacts
     *
     * @return $this
     */
    public function setContacts($contacts)
    {
        $this->container['contacts'] = $contacts;

        return $this;
    }

    /**
     * Gets presenters
     *
     * @return \RadioManager\Model\ModelTypeRelationsPresenters
     */
    public function getPresenters()
    {
        return $this->container['presenters'];
    }

    /**
     * Sets presenters
     *
     * @param \RadioManager\Model\ModelTypeRelationsPresenters $presenters presenters
     *
     * @return $this
     */
    public function setPresenters($presenters)
    {
        $this->container['presenters'] = $presenters;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \RadioManager\Model\ModelTypeRelationsItems
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \RadioManager\Model\ModelTypeRelationsItems $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets _external_station_id
     *
     * @return int
     */
    public function getExternalStationId()
    {
        return $this->container['_external_station_id'];
    }

    /**
     * Sets _external_station_id
     *
     * @param int $_external_station_id _external_station_id
     *
     * @return $this
     */
    public function setExternalStationId($_external_station_id)
    {
        $this->container['_external_station_id'] = $_external_station_id;

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


