<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * CatalogQuery Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class CatalogQuery implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'sorted_attribute_query' => '\SquareConnect\Model\CatalogQuerySortedAttribute',
        'exact_query' => '\SquareConnect\Model\CatalogQueryExact',
        'prefix_query' => '\SquareConnect\Model\CatalogQueryPrefix',
        'range_query' => '\SquareConnect\Model\CatalogQueryRange',
        'text_query' => '\SquareConnect\Model\CatalogQueryText',
        'items_for_tax_query' => '\SquareConnect\Model\CatalogQueryItemsForTax',
        'items_for_modifier_list_query' => '\SquareConnect\Model\CatalogQueryItemsForModifierList'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'sorted_attribute_query' => 'sorted_attribute_query',
        'exact_query' => 'exact_query',
        'prefix_query' => 'prefix_query',
        'range_query' => 'range_query',
        'text_query' => 'text_query',
        'items_for_tax_query' => 'items_for_tax_query',
        'items_for_modifier_list_query' => 'items_for_modifier_list_query'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'sorted_attribute_query' => 'setSortedAttributeQuery',
        'exact_query' => 'setExactQuery',
        'prefix_query' => 'setPrefixQuery',
        'range_query' => 'setRangeQuery',
        'text_query' => 'setTextQuery',
        'items_for_tax_query' => 'setItemsForTaxQuery',
        'items_for_modifier_list_query' => 'setItemsForModifierListQuery'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'sorted_attribute_query' => 'getSortedAttributeQuery',
        'exact_query' => 'getExactQuery',
        'prefix_query' => 'getPrefixQuery',
        'range_query' => 'getRangeQuery',
        'text_query' => 'getTextQuery',
        'items_for_tax_query' => 'getItemsForTaxQuery',
        'items_for_modifier_list_query' => 'getItemsForModifierListQuery'
    );
  
    /**
      * $sorted_attribute_query A query that returns all objects, sorted by the given attribute.
      * @var \SquareConnect\Model\CatalogQuerySortedAttribute
      */
    protected $sorted_attribute_query;
    /**
      * $exact_query A query that returns only objects for which the given (string-valued) attribute has the given case-insensitive value.
      * @var \SquareConnect\Model\CatalogQueryExact
      */
    protected $exact_query;
    /**
      * $prefix_query A query that returns only objects for which the given (string-valued) attribute has the given case-insensitive prefix.
      * @var \SquareConnect\Model\CatalogQueryPrefix
      */
    protected $prefix_query;
    /**
      * $range_query A query that returns only objects for which the given (integer-valued) attribute lies in the given range.
      * @var \SquareConnect\Model\CatalogQueryRange
      */
    protected $range_query;
    /**
      * $text_query A query that returns only objects whose searchable attributes contain all of the given keywords as prefixes. For example, if a [CatalogItem](#type-catalogitem) contains attributes `{\"name\": \"t-shirt\"}` and `{\"description\": \"Small, Purple\"}`, it will be matched by the query `{\"keywords\": [\"shirt\", \"sma\", \"purp\"]}`.
      * @var \SquareConnect\Model\CatalogQueryText
      */
    protected $text_query;
    /**
      * $items_for_tax_query A query that returns all [CatalogItem](#type-catalogitem)s that have any of the given [CatalogTax](#type-catalogtax)es enabled.
      * @var \SquareConnect\Model\CatalogQueryItemsForTax
      */
    protected $items_for_tax_query;
    /**
      * $items_for_modifier_list_query A query that returns all [CatalogItem](#type-catalogitem)s that have any of the given [CatalogModifierList](#type-catalogmodifierlist)s enabled.
      * @var \SquareConnect\Model\CatalogQueryItemsForModifierList
      */
    protected $items_for_modifier_list_query;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["sorted_attribute_query"])) {
              $this->sorted_attribute_query = $data["sorted_attribute_query"];
            } else {
              $this->sorted_attribute_query = null;
            }
            if (isset($data["exact_query"])) {
              $this->exact_query = $data["exact_query"];
            } else {
              $this->exact_query = null;
            }
            if (isset($data["prefix_query"])) {
              $this->prefix_query = $data["prefix_query"];
            } else {
              $this->prefix_query = null;
            }
            if (isset($data["range_query"])) {
              $this->range_query = $data["range_query"];
            } else {
              $this->range_query = null;
            }
            if (isset($data["text_query"])) {
              $this->text_query = $data["text_query"];
            } else {
              $this->text_query = null;
            }
            if (isset($data["items_for_tax_query"])) {
              $this->items_for_tax_query = $data["items_for_tax_query"];
            } else {
              $this->items_for_tax_query = null;
            }
            if (isset($data["items_for_modifier_list_query"])) {
              $this->items_for_modifier_list_query = $data["items_for_modifier_list_query"];
            } else {
              $this->items_for_modifier_list_query = null;
            }
        }
    }
    /**
     * Gets sorted_attribute_query
     * @return \SquareConnect\Model\CatalogQuerySortedAttribute
     */
    public function getSortedAttributeQuery()
    {
        return $this->sorted_attribute_query;
    }
  
    /**
     * Sets sorted_attribute_query
     * @param \SquareConnect\Model\CatalogQuerySortedAttribute $sorted_attribute_query A query that returns all objects, sorted by the given attribute.
     * @return $this
     */
    public function setSortedAttributeQuery($sorted_attribute_query)
    {
        $this->sorted_attribute_query = $sorted_attribute_query;
        return $this;
    }
    /**
     * Gets exact_query
     * @return \SquareConnect\Model\CatalogQueryExact
     */
    public function getExactQuery()
    {
        return $this->exact_query;
    }
  
    /**
     * Sets exact_query
     * @param \SquareConnect\Model\CatalogQueryExact $exact_query A query that returns only objects for which the given (string-valued) attribute has the given case-insensitive value.
     * @return $this
     */
    public function setExactQuery($exact_query)
    {
        $this->exact_query = $exact_query;
        return $this;
    }
    /**
     * Gets prefix_query
     * @return \SquareConnect\Model\CatalogQueryPrefix
     */
    public function getPrefixQuery()
    {
        return $this->prefix_query;
    }
  
    /**
     * Sets prefix_query
     * @param \SquareConnect\Model\CatalogQueryPrefix $prefix_query A query that returns only objects for which the given (string-valued) attribute has the given case-insensitive prefix.
     * @return $this
     */
    public function setPrefixQuery($prefix_query)
    {
        $this->prefix_query = $prefix_query;
        return $this;
    }
    /**
     * Gets range_query
     * @return \SquareConnect\Model\CatalogQueryRange
     */
    public function getRangeQuery()
    {
        return $this->range_query;
    }
  
    /**
     * Sets range_query
     * @param \SquareConnect\Model\CatalogQueryRange $range_query A query that returns only objects for which the given (integer-valued) attribute lies in the given range.
     * @return $this
     */
    public function setRangeQuery($range_query)
    {
        $this->range_query = $range_query;
        return $this;
    }
    /**
     * Gets text_query
     * @return \SquareConnect\Model\CatalogQueryText
     */
    public function getTextQuery()
    {
        return $this->text_query;
    }
  
    /**
     * Sets text_query
     * @param \SquareConnect\Model\CatalogQueryText $text_query A query that returns only objects whose searchable attributes contain all of the given keywords as prefixes. For example, if a [CatalogItem](#type-catalogitem) contains attributes `{\"name\": \"t-shirt\"}` and `{\"description\": \"Small, Purple\"}`, it will be matched by the query `{\"keywords\": [\"shirt\", \"sma\", \"purp\"]}`.
     * @return $this
     */
    public function setTextQuery($text_query)
    {
        $this->text_query = $text_query;
        return $this;
    }
    /**
     * Gets items_for_tax_query
     * @return \SquareConnect\Model\CatalogQueryItemsForTax
     */
    public function getItemsForTaxQuery()
    {
        return $this->items_for_tax_query;
    }
  
    /**
     * Sets items_for_tax_query
     * @param \SquareConnect\Model\CatalogQueryItemsForTax $items_for_tax_query A query that returns all [CatalogItem](#type-catalogitem)s that have any of the given [CatalogTax](#type-catalogtax)es enabled.
     * @return $this
     */
    public function setItemsForTaxQuery($items_for_tax_query)
    {
        $this->items_for_tax_query = $items_for_tax_query;
        return $this;
    }
    /**
     * Gets items_for_modifier_list_query
     * @return \SquareConnect\Model\CatalogQueryItemsForModifierList
     */
    public function getItemsForModifierListQuery()
    {
        return $this->items_for_modifier_list_query;
    }
  
    /**
     * Sets items_for_modifier_list_query
     * @param \SquareConnect\Model\CatalogQueryItemsForModifierList $items_for_modifier_list_query A query that returns all [CatalogItem](#type-catalogitem)s that have any of the given [CatalogModifierList](#type-catalogmodifierlist)s enabled.
     * @return $this
     */
    public function setItemsForModifierListQuery($items_for_modifier_list_query)
    {
        $this->items_for_modifier_list_query = $items_for_modifier_list_query;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}