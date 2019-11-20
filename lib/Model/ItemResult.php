<?php
/**
 * ItemResult
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
 * ItemResult Class Doc Comment
 *
 * @category Class
 * @package  RadioManager
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
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
        '_external_station_id' => 'int',
        'model_type_id' => 'int',
        'block_id' => 'int',
        'external_id' => 'string',
        'field_values' => 'object',
        'title' => 'string',
        'duration' => 'int',
        'start' => '\DateTime',
        'status' => 'string',
        'import' => 'int',
        'campaign_id' => 'int',
        'recommended' => 'bool',
        'station_draft_id' => 'int',
        'program_draft_id' => 'int',
        'user_draft_id' => 'int',
        'static_start' => 'bool',
        'details' => 'string',
        'block' => '\RadioManager\Model\ItemRelationsBlock',
        'broadcast' => '\RadioManager\Model\BlockRelationsBroadcast',
        'program' => '\RadioManager\Model\ItemRelationsProgram',
        'contacts' => '\RadioManager\Model\ItemRelationsContacts',
        'tags' => '\RadioManager\Model\ItemRelationsTags',
        'campaign' => '\RadioManager\Model\ItemRelationsCampaign',
        'model_type' => '\RadioManager\Model\BroadcastRelationsModelType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
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
        '_external_station_id' => 'int64',
        'model_type_id' => 'int64',
        'block_id' => 'int64',
        'external_id' => null,
        'field_values' => null,
        'title' => null,
        'duration' => 'int64',
        'start' => 'date-time',
        'status' => null,
        'import' => 'int64',
        'campaign_id' => 'int64',
        'recommended' => null,
        'station_draft_id' => 'int64',
        'program_draft_id' => 'int64',
        'user_draft_id' => 'int64',
        'static_start' => null,
        'details' => null,
        'block' => null,
        'broadcast' => null,
        'program' => null,
        'contacts' => null,
        'tags' => null,
        'campaign' => null,
        'model_type' => null
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
        'updated_at' => 'updated_at',
        'created_at' => 'created_at',
        'deleted_at' => 'deleted_at',
        'data_modified' => 'data_modified',
        'order' => 'order',
        'templateblock_id' => 'templateblock_id',
        'templateitem_id' => 'templateitem_id',
        '_external_station_id' => '_external_station_id',
        'model_type_id' => 'model_type_id',
        'block_id' => 'block_id',
        'external_id' => 'external_id',
        'field_values' => 'field_values',
        'title' => 'title',
        'duration' => 'duration',
        'start' => 'start',
        'status' => 'status',
        'import' => 'import',
        'campaign_id' => 'campaign_id',
        'recommended' => 'recommended',
        'station_draft_id' => 'station_draft_id',
        'program_draft_id' => 'program_draft_id',
        'user_draft_id' => 'user_draft_id',
        'static_start' => 'static_start',
        'details' => 'details',
        'block' => 'block',
        'broadcast' => 'broadcast',
        'program' => 'program',
        'contacts' => 'contacts',
        'tags' => 'tags',
        'campaign' => 'campaign',
        'model_type' => 'model_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
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
        '_external_station_id' => 'setExternalStationId',
        'model_type_id' => 'setModelTypeId',
        'block_id' => 'setBlockId',
        'external_id' => 'setExternalId',
        'field_values' => 'setFieldValues',
        'title' => 'setTitle',
        'duration' => 'setDuration',
        'start' => 'setStart',
        'status' => 'setStatus',
        'import' => 'setImport',
        'campaign_id' => 'setCampaignId',
        'recommended' => 'setRecommended',
        'station_draft_id' => 'setStationDraftId',
        'program_draft_id' => 'setProgramDraftId',
        'user_draft_id' => 'setUserDraftId',
        'static_start' => 'setStaticStart',
        'details' => 'setDetails',
        'block' => 'setBlock',
        'broadcast' => 'setBroadcast',
        'program' => 'setProgram',
        'contacts' => 'setContacts',
        'tags' => 'setTags',
        'campaign' => 'setCampaign',
        'model_type' => 'setModelType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
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
        '_external_station_id' => 'getExternalStationId',
        'model_type_id' => 'getModelTypeId',
        'block_id' => 'getBlockId',
        'external_id' => 'getExternalId',
        'field_values' => 'getFieldValues',
        'title' => 'getTitle',
        'duration' => 'getDuration',
        'start' => 'getStart',
        'status' => 'getStatus',
        'import' => 'getImport',
        'campaign_id' => 'getCampaignId',
        'recommended' => 'getRecommended',
        'station_draft_id' => 'getStationDraftId',
        'program_draft_id' => 'getProgramDraftId',
        'user_draft_id' => 'getUserDraftId',
        'static_start' => 'getStaticStart',
        'details' => 'getDetails',
        'block' => 'getBlock',
        'broadcast' => 'getBroadcast',
        'program' => 'getProgram',
        'contacts' => 'getContacts',
        'tags' => 'getTags',
        'campaign' => 'getCampaign',
        'model_type' => 'getModelType'
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

    const STATUS_SCHEDULED = 'scheduled';
    const STATUS_PLAYING = 'playing';
    const STATUS_PLAYED = 'played';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SCHEDULED,
            self::STATUS_PLAYING,
            self::STATUS_PLAYED,
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
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['deleted_at'] = isset($data['deleted_at']) ? $data['deleted_at'] : null;
        $this->container['data_modified'] = isset($data['data_modified']) ? $data['data_modified'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['templateblock_id'] = isset($data['templateblock_id']) ? $data['templateblock_id'] : null;
        $this->container['templateitem_id'] = isset($data['templateitem_id']) ? $data['templateitem_id'] : null;
        $this->container['_external_station_id'] = isset($data['_external_station_id']) ? $data['_external_station_id'] : null;
        $this->container['model_type_id'] = isset($data['model_type_id']) ? $data['model_type_id'] : null;
        $this->container['block_id'] = isset($data['block_id']) ? $data['block_id'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['field_values'] = isset($data['field_values']) ? $data['field_values'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['import'] = isset($data['import']) ? $data['import'] : null;
        $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
        $this->container['recommended'] = isset($data['recommended']) ? $data['recommended'] : null;
        $this->container['station_draft_id'] = isset($data['station_draft_id']) ? $data['station_draft_id'] : null;
        $this->container['program_draft_id'] = isset($data['program_draft_id']) ? $data['program_draft_id'] : null;
        $this->container['user_draft_id'] = isset($data['user_draft_id']) ? $data['user_draft_id'] : null;
        $this->container['static_start'] = isset($data['static_start']) ? $data['static_start'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['block'] = isset($data['block']) ? $data['block'] : null;
        $this->container['broadcast'] = isset($data['broadcast']) ? $data['broadcast'] : null;
        $this->container['program'] = isset($data['program']) ? $data['program'] : null;
        $this->container['contacts'] = isset($data['contacts']) ? $data['contacts'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['campaign'] = isset($data['campaign']) ? $data['campaign'] : null;
        $this->container['model_type'] = isset($data['model_type']) ? $data['model_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['model_type_id'] === null) {
            $invalidProperties[] = "'model_type_id' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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

        if ($this->container['model_type_id'] === null) {
            return false;
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
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
     * Gets data_modified
     *
     * @return int
     */
    public function getDataModified()
    {
        return $this->container['data_modified'];
    }

    /**
     * Sets data_modified
     *
     * @param int $data_modified data_modified
     *
     * @return $this
     */
    public function setDataModified($data_modified)
    {
        $this->container['data_modified'] = $data_modified;

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
     * Gets templateblock_id
     *
     * @return int
     */
    public function getTemplateblockId()
    {
        return $this->container['templateblock_id'];
    }

    /**
     * Sets templateblock_id
     *
     * @param int $templateblock_id templateblock_id
     *
     * @return $this
     */
    public function setTemplateblockId($templateblock_id)
    {
        $this->container['templateblock_id'] = $templateblock_id;

        return $this;
    }

    /**
     * Gets templateitem_id
     *
     * @return int
     */
    public function getTemplateitemId()
    {
        return $this->container['templateitem_id'];
    }

    /**
     * Sets templateitem_id
     *
     * @param int $templateitem_id templateitem_id
     *
     * @return $this
     */
    public function setTemplateitemId($templateitem_id)
    {
        $this->container['templateitem_id'] = $templateitem_id;

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
     * Gets model_type_id
     *
     * @return int
     */
    public function getModelTypeId()
    {
        return $this->container['model_type_id'];
    }

    /**
     * Sets model_type_id
     *
     * @param int $model_type_id model_type_id
     *
     * @return $this
     */
    public function setModelTypeId($model_type_id)
    {
        $this->container['model_type_id'] = $model_type_id;

        return $this;
    }

    /**
     * Gets block_id
     *
     * @return int
     */
    public function getBlockId()
    {
        return $this->container['block_id'];
    }

    /**
     * Sets block_id
     *
     * @param int $block_id block_id
     *
     * @return $this
     */
    public function setBlockId($block_id)
    {
        $this->container['block_id'] = $block_id;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id external_id
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets field_values
     *
     * @return object
     */
    public function getFieldValues()
    {
        return $this->container['field_values'];
    }

    /**
     * Sets field_values
     *
     * @param object $field_values field_values
     *
     * @return $this
     */
    public function setFieldValues($field_values)
    {
        $this->container['field_values'] = $field_values;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime $start start
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets import
     *
     * @return int
     */
    public function getImport()
    {
        return $this->container['import'];
    }

    /**
     * Sets import
     *
     * @param int $import import
     *
     * @return $this
     */
    public function setImport($import)
    {
        $this->container['import'] = $import;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param int $campaign_id campaign_id
     *
     * @return $this
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets recommended
     *
     * @return bool
     */
    public function getRecommended()
    {
        return $this->container['recommended'];
    }

    /**
     * Sets recommended
     *
     * @param bool $recommended recommended
     *
     * @return $this
     */
    public function setRecommended($recommended)
    {
        $this->container['recommended'] = $recommended;

        return $this;
    }

    /**
     * Gets station_draft_id
     *
     * @return int
     */
    public function getStationDraftId()
    {
        return $this->container['station_draft_id'];
    }

    /**
     * Sets station_draft_id
     *
     * @param int $station_draft_id station_draft_id
     *
     * @return $this
     */
    public function setStationDraftId($station_draft_id)
    {
        $this->container['station_draft_id'] = $station_draft_id;

        return $this;
    }

    /**
     * Gets program_draft_id
     *
     * @return int
     */
    public function getProgramDraftId()
    {
        return $this->container['program_draft_id'];
    }

    /**
     * Sets program_draft_id
     *
     * @param int $program_draft_id program_draft_id
     *
     * @return $this
     */
    public function setProgramDraftId($program_draft_id)
    {
        $this->container['program_draft_id'] = $program_draft_id;

        return $this;
    }

    /**
     * Gets user_draft_id
     *
     * @return int
     */
    public function getUserDraftId()
    {
        return $this->container['user_draft_id'];
    }

    /**
     * Sets user_draft_id
     *
     * @param int $user_draft_id user_draft_id
     *
     * @return $this
     */
    public function setUserDraftId($user_draft_id)
    {
        $this->container['user_draft_id'] = $user_draft_id;

        return $this;
    }

    /**
     * Gets static_start
     *
     * @return bool
     */
    public function getStaticStart()
    {
        return $this->container['static_start'];
    }

    /**
     * Sets static_start
     *
     * @param bool $static_start static_start
     *
     * @return $this
     */
    public function setStaticStart($static_start)
    {
        $this->container['static_start'] = $static_start;

        return $this;
    }

    /**
     * Gets details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param string $details details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets block
     *
     * @return \RadioManager\Model\ItemRelationsBlock
     */
    public function getBlock()
    {
        return $this->container['block'];
    }

    /**
     * Sets block
     *
     * @param \RadioManager\Model\ItemRelationsBlock $block block
     *
     * @return $this
     */
    public function setBlock($block)
    {
        $this->container['block'] = $block;

        return $this;
    }

    /**
     * Gets broadcast
     *
     * @return \RadioManager\Model\BlockRelationsBroadcast
     */
    public function getBroadcast()
    {
        return $this->container['broadcast'];
    }

    /**
     * Sets broadcast
     *
     * @param \RadioManager\Model\BlockRelationsBroadcast $broadcast broadcast
     *
     * @return $this
     */
    public function setBroadcast($broadcast)
    {
        $this->container['broadcast'] = $broadcast;

        return $this;
    }

    /**
     * Gets program
     *
     * @return \RadioManager\Model\ItemRelationsProgram
     */
    public function getProgram()
    {
        return $this->container['program'];
    }

    /**
     * Sets program
     *
     * @param \RadioManager\Model\ItemRelationsProgram $program program
     *
     * @return $this
     */
    public function setProgram($program)
    {
        $this->container['program'] = $program;

        return $this;
    }

    /**
     * Gets contacts
     *
     * @return \RadioManager\Model\ItemRelationsContacts
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     *
     * @param \RadioManager\Model\ItemRelationsContacts $contacts contacts
     *
     * @return $this
     */
    public function setContacts($contacts)
    {
        $this->container['contacts'] = $contacts;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \RadioManager\Model\ItemRelationsTags
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \RadioManager\Model\ItemRelationsTags $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets campaign
     *
     * @return \RadioManager\Model\ItemRelationsCampaign
     */
    public function getCampaign()
    {
        return $this->container['campaign'];
    }

    /**
     * Sets campaign
     *
     * @param \RadioManager\Model\ItemRelationsCampaign $campaign campaign
     *
     * @return $this
     */
    public function setCampaign($campaign)
    {
        $this->container['campaign'] = $campaign;

        return $this;
    }

    /**
     * Gets model_type
     *
     * @return \RadioManager\Model\BroadcastRelationsModelType
     */
    public function getModelType()
    {
        return $this->container['model_type'];
    }

    /**
     * Sets model_type
     *
     * @param \RadioManager\Model\BroadcastRelationsModelType $model_type model_type
     *
     * @return $this
     */
    public function setModelType($model_type)
    {
        $this->container['model_type'] = $model_type;

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


