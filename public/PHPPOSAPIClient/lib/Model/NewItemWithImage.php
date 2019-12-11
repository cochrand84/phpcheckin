<?php
/**
 * NewItemWithImage
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PHP Point Of Sale API
 *
 * PHP Point Of Sale API  You can find out more about PHP POS at [https://phppointofsale.com](https://phppointofsale.com)
 *
 * The version of the OpenAPI document: 1.0
 * Contact: support@phppointofsale.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * NewItemWithImage Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NewItemWithImage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NewItemWithImage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'item' => '\OpenAPI\Client\Model\NewItem',
        'images' => '\SplFileObject[]',
        'titles' => 'string[]',
        'alt_texts' => 'string[]',
        'variation_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'item' => null,
        'images' => 'binary',
        'titles' => null,
        'alt_texts' => null,
        'variation_ids' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'item' => 'item',
        'images' => 'images[]',
        'titles' => 'titles[]',
        'alt_texts' => 'alt_texts[]',
        'variation_ids' => 'variation_ids[]'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item' => 'setItem',
        'images' => 'setImages',
        'titles' => 'setTitles',
        'alt_texts' => 'setAltTexts',
        'variation_ids' => 'setVariationIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item' => 'getItem',
        'images' => 'getImages',
        'titles' => 'getTitles',
        'alt_texts' => 'getAltTexts',
        'variation_ids' => 'getVariationIds'
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
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['titles'] = isset($data['titles']) ? $data['titles'] : null;
        $this->container['alt_texts'] = isset($data['alt_texts']) ? $data['alt_texts'] : null;
        $this->container['variation_ids'] = isset($data['variation_ids']) ? $data['variation_ids'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['item'] === null) {
            $invalidProperties[] = "'item' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets item
     *
     * @return \OpenAPI\Client\Model\NewItem
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param \OpenAPI\Client\Model\NewItem $item item
     *
     * @return $this
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \SplFileObject[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \SplFileObject[]|null $images images
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets titles
     *
     * @return string[]|null
     */
    public function getTitles()
    {
        return $this->container['titles'];
    }

    /**
     * Sets titles
     *
     * @param string[]|null $titles titles
     *
     * @return $this
     */
    public function setTitles($titles)
    {
        $this->container['titles'] = $titles;

        return $this;
    }

    /**
     * Gets alt_texts
     *
     * @return string[]|null
     */
    public function getAltTexts()
    {
        return $this->container['alt_texts'];
    }

    /**
     * Sets alt_texts
     *
     * @param string[]|null $alt_texts alt_texts
     *
     * @return $this
     */
    public function setAltTexts($alt_texts)
    {
        $this->container['alt_texts'] = $alt_texts;

        return $this;
    }

    /**
     * Gets variation_ids
     *
     * @return string[]|null
     */
    public function getVariationIds()
    {
        return $this->container['variation_ids'];
    }

    /**
     * Sets variation_ids
     *
     * @param string[]|null $variation_ids variation_ids
     *
     * @return $this
     */
    public function setVariationIds($variation_ids)
    {
        $this->container['variation_ids'] = $variation_ids;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


