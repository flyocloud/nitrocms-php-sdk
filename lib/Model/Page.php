<?php
/**
 * Page
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Flyo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Flyo Nitro Cms
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0-beta.117
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Flyo\Model;

use \ArrayAccess;
use \Flyo\ObjectSerializer;

/**
 * Page Class Doc Comment
 *
 * @category Class
 * @package  Flyo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Page implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'page';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'nitro_id' => 'int',
        'title' => 'string',
        'slug' => 'string',
        'page_page_id' => 'int',
        'depth' => 'int',
        'sort_index' => 'int',
        'is_online' => 'int',
        'is_home' => 'int',
        'created_at' => 'int',
        'updated_at' => 'int',
        'is_visible' => 'int',
        'meta_json' => 'int',
        'json' => '\Flyo\Model\Block[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'nitro_id' => null,
        'title' => null,
        'slug' => null,
        'page_page_id' => null,
        'depth' => null,
        'sort_index' => null,
        'is_online' => null,
        'is_home' => null,
        'created_at' => null,
        'updated_at' => null,
        'is_visible' => null,
        'meta_json' => null,
        'json' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'nitro_id' => false,
		'title' => false,
		'slug' => false,
		'page_page_id' => false,
		'depth' => false,
		'sort_index' => false,
		'is_online' => false,
		'is_home' => false,
		'created_at' => false,
		'updated_at' => false,
		'is_visible' => false,
		'meta_json' => false,
		'json' => false
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
        'id' => 'id',
        'nitro_id' => 'nitro_id',
        'title' => 'title',
        'slug' => 'slug',
        'page_page_id' => 'page_page_id',
        'depth' => 'depth',
        'sort_index' => 'sort_index',
        'is_online' => 'is_online',
        'is_home' => 'is_home',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'is_visible' => 'is_visible',
        'meta_json' => 'meta_json',
        'json' => 'json'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'nitro_id' => 'setNitroId',
        'title' => 'setTitle',
        'slug' => 'setSlug',
        'page_page_id' => 'setPagePageId',
        'depth' => 'setDepth',
        'sort_index' => 'setSortIndex',
        'is_online' => 'setIsOnline',
        'is_home' => 'setIsHome',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'is_visible' => 'setIsVisible',
        'meta_json' => 'setMetaJson',
        'json' => 'setJson'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'nitro_id' => 'getNitroId',
        'title' => 'getTitle',
        'slug' => 'getSlug',
        'page_page_id' => 'getPagePageId',
        'depth' => 'getDepth',
        'sort_index' => 'getSortIndex',
        'is_online' => 'getIsOnline',
        'is_home' => 'getIsHome',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'is_visible' => 'getIsVisible',
        'meta_json' => 'getMetaJson',
        'json' => 'getJson'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('nitro_id', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('slug', $data ?? [], null);
        $this->setIfExists('page_page_id', $data ?? [], null);
        $this->setIfExists('depth', $data ?? [], null);
        $this->setIfExists('sort_index', $data ?? [], null);
        $this->setIfExists('is_online', $data ?? [], null);
        $this->setIfExists('is_home', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('is_visible', $data ?? [], null);
        $this->setIfExists('meta_json', $data ?? [], null);
        $this->setIfExists('json', $data ?? [], null);
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets nitro_id
     *
     * @return int|null
     */
    public function getNitroId()
    {
        return $this->container['nitro_id'];
    }

    /**
     * Sets nitro_id
     *
     * @param int|null $nitro_id nitro_id
     *
     * @return self
     */
    public function setNitroId($nitro_id)
    {

        if (is_null($nitro_id)) {
            throw new \InvalidArgumentException('non-nullable nitro_id cannot be null');
        }

        $this->container['nitro_id'] = $nitro_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {

        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets slug
     *
     * @return string|null
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string|null $slug slug
     *
     * @return self
     */
    public function setSlug($slug)
    {

        if (is_null($slug)) {
            throw new \InvalidArgumentException('non-nullable slug cannot be null');
        }

        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets page_page_id
     *
     * @return int|null
     */
    public function getPagePageId()
    {
        return $this->container['page_page_id'];
    }

    /**
     * Sets page_page_id
     *
     * @param int|null $page_page_id page_page_id
     *
     * @return self
     */
    public function setPagePageId($page_page_id)
    {

        if (is_null($page_page_id)) {
            throw new \InvalidArgumentException('non-nullable page_page_id cannot be null');
        }

        $this->container['page_page_id'] = $page_page_id;

        return $this;
    }

    /**
     * Gets depth
     *
     * @return int|null
     */
    public function getDepth()
    {
        return $this->container['depth'];
    }

    /**
     * Sets depth
     *
     * @param int|null $depth depth
     *
     * @return self
     */
    public function setDepth($depth)
    {

        if (is_null($depth)) {
            throw new \InvalidArgumentException('non-nullable depth cannot be null');
        }

        $this->container['depth'] = $depth;

        return $this;
    }

    /**
     * Gets sort_index
     *
     * @return int|null
     */
    public function getSortIndex()
    {
        return $this->container['sort_index'];
    }

    /**
     * Sets sort_index
     *
     * @param int|null $sort_index sort_index
     *
     * @return self
     */
    public function setSortIndex($sort_index)
    {

        if (is_null($sort_index)) {
            throw new \InvalidArgumentException('non-nullable sort_index cannot be null');
        }

        $this->container['sort_index'] = $sort_index;

        return $this;
    }

    /**
     * Gets is_online
     *
     * @return int|null
     */
    public function getIsOnline()
    {
        return $this->container['is_online'];
    }

    /**
     * Sets is_online
     *
     * @param int|null $is_online is_online
     *
     * @return self
     */
    public function setIsOnline($is_online)
    {

        if (is_null($is_online)) {
            throw new \InvalidArgumentException('non-nullable is_online cannot be null');
        }

        $this->container['is_online'] = $is_online;

        return $this;
    }

    /**
     * Gets is_home
     *
     * @return int|null
     */
    public function getIsHome()
    {
        return $this->container['is_home'];
    }

    /**
     * Sets is_home
     *
     * @param int|null $is_home is_home
     *
     * @return self
     */
    public function setIsHome($is_home)
    {

        if (is_null($is_home)) {
            throw new \InvalidArgumentException('non-nullable is_home cannot be null');
        }

        $this->container['is_home'] = $is_home;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return int|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param int|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {

        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }

        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return int|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param int|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {

        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }

        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets is_visible
     *
     * @return int|null
     */
    public function getIsVisible()
    {
        return $this->container['is_visible'];
    }

    /**
     * Sets is_visible
     *
     * @param int|null $is_visible is_visible
     *
     * @return self
     */
    public function setIsVisible($is_visible)
    {

        if (is_null($is_visible)) {
            throw new \InvalidArgumentException('non-nullable is_visible cannot be null');
        }

        $this->container['is_visible'] = $is_visible;

        return $this;
    }

    /**
     * Gets meta_json
     *
     * @return int|null
     */
    public function getMetaJson()
    {
        return $this->container['meta_json'];
    }

    /**
     * Sets meta_json
     *
     * @param int|null $meta_json meta_json
     *
     * @return self
     */
    public function setMetaJson($meta_json)
    {

        if (is_null($meta_json)) {
            throw new \InvalidArgumentException('non-nullable meta_json cannot be null');
        }

        $this->container['meta_json'] = $meta_json;

        return $this;
    }

    /**
     * Gets json
     *
     * @return \Flyo\Model\Block[]|null
     */
    public function getJson()
    {
        return $this->container['json'];
    }

    /**
     * Sets json
     *
     * @param \Flyo\Model\Block[]|null $json json
     *
     * @return self
     */
    public function setJson($json)
    {

        if (is_null($json)) {
            throw new \InvalidArgumentException('non-nullable json cannot be null');
        }

        $this->container['json'] = $json;

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


