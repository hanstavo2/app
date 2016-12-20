<?php
/**
 * ThreadResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * discussion
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.1-SNAPSHOT
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Discussion\Models;

use \ArrayAccess;

/**
 * ThreadResponse Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ThreadResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ThreadResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'string',
        'site_id' => 'string',
        'first_post_id' => 'string',
        'created_by' => '\Swagger\Client\Discussion\Models\UserInfo',
        'last_edited_by' => '\Swagger\Client\Discussion\Models\UserInfo',
        'creation_date' => '\Swagger\Client\Discussion\Models\LocalDateTime',
        'modification_date' => '\Swagger\Client\Discussion\Models\LocalDateTime',
        'upvote_count' => 'int',
        'view_count' => 'int',
        'post_count' => 'int',
        'trending_score' => 'double',
        'forum_id' => 'string',
        'forum_name' => 'string',
        'title' => 'string',
        'raw_content' => 'string',
        'rendered_content' => 'string',
        'last_post_id' => 'string',
        'latest_revision_id' => 'string',
        'requester_id' => 'string',
        'user_block_details' => 'string',
        'page' => 'int',
        '_links' => 'map[string,\Swagger\Client\Discussion\Models\NewHalLink]',
        'is_editable' => 'bool',
        'is_locked' => 'bool',
        'is_reported' => 'bool',
        'is_followed' => 'bool',
        'is_requester_blocked' => 'bool',
        '_embedded' => '\Swagger\Client\Discussion\Models\ThreadEmbedded',
        'is_held' => 'bool',
        'is_deleted' => 'bool',
        'is_viewable' => 'bool'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'id' => 'id',
        'site_id' => 'siteId',
        'first_post_id' => 'firstPostId',
        'created_by' => 'createdBy',
        'last_edited_by' => 'lastEditedBy',
        'creation_date' => 'creationDate',
        'modification_date' => 'modificationDate',
        'upvote_count' => 'upvoteCount',
        'view_count' => 'viewCount',
        'post_count' => 'postCount',
        'trending_score' => 'trendingScore',
        'forum_id' => 'forumId',
        'forum_name' => 'forumName',
        'title' => 'title',
        'raw_content' => 'rawContent',
        'rendered_content' => 'renderedContent',
        'last_post_id' => 'lastPostId',
        'latest_revision_id' => 'latestRevisionId',
        'requester_id' => 'requesterId',
        'user_block_details' => 'userBlockDetails',
        'page' => 'page',
        '_links' => '_links',
        'is_editable' => 'isEditable',
        'is_locked' => 'isLocked',
        'is_reported' => 'isReported',
        'is_followed' => 'isFollowed',
        'is_requester_blocked' => 'isRequesterBlocked',
        '_embedded' => '_embedded',
        'is_held' => 'isHeld',
        'is_deleted' => 'isDeleted',
        'is_viewable' => 'isViewable'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'id' => 'setId',
        'site_id' => 'setSiteId',
        'first_post_id' => 'setFirstPostId',
        'created_by' => 'setCreatedBy',
        'last_edited_by' => 'setLastEditedBy',
        'creation_date' => 'setCreationDate',
        'modification_date' => 'setModificationDate',
        'upvote_count' => 'setUpvoteCount',
        'view_count' => 'setViewCount',
        'post_count' => 'setPostCount',
        'trending_score' => 'setTrendingScore',
        'forum_id' => 'setForumId',
        'forum_name' => 'setForumName',
        'title' => 'setTitle',
        'raw_content' => 'setRawContent',
        'rendered_content' => 'setRenderedContent',
        'last_post_id' => 'setLastPostId',
        'latest_revision_id' => 'setLatestRevisionId',
        'requester_id' => 'setRequesterId',
        'user_block_details' => 'setUserBlockDetails',
        'page' => 'setPage',
        '_links' => 'setLinks',
        'is_editable' => 'setIsEditable',
        'is_locked' => 'setIsLocked',
        'is_reported' => 'setIsReported',
        'is_followed' => 'setIsFollowed',
        'is_requester_blocked' => 'setIsRequesterBlocked',
        '_embedded' => 'setEmbedded',
        'is_held' => 'setIsHeld',
        'is_deleted' => 'setIsDeleted',
        'is_viewable' => 'setIsViewable'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'id' => 'getId',
        'site_id' => 'getSiteId',
        'first_post_id' => 'getFirstPostId',
        'created_by' => 'getCreatedBy',
        'last_edited_by' => 'getLastEditedBy',
        'creation_date' => 'getCreationDate',
        'modification_date' => 'getModificationDate',
        'upvote_count' => 'getUpvoteCount',
        'view_count' => 'getViewCount',
        'post_count' => 'getPostCount',
        'trending_score' => 'getTrendingScore',
        'forum_id' => 'getForumId',
        'forum_name' => 'getForumName',
        'title' => 'getTitle',
        'raw_content' => 'getRawContent',
        'rendered_content' => 'getRenderedContent',
        'last_post_id' => 'getLastPostId',
        'latest_revision_id' => 'getLatestRevisionId',
        'requester_id' => 'getRequesterId',
        'user_block_details' => 'getUserBlockDetails',
        'page' => 'getPage',
        '_links' => 'getLinks',
        'is_editable' => 'getIsEditable',
        'is_locked' => 'getIsLocked',
        'is_reported' => 'getIsReported',
        'is_followed' => 'getIsFollowed',
        'is_requester_blocked' => 'getIsRequesterBlocked',
        '_embedded' => 'getEmbedded',
        'is_held' => 'getIsHeld',
        'is_deleted' => 'getIsDeleted',
        'is_viewable' => 'getIsViewable'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['site_id'] = isset($data['site_id']) ? $data['site_id'] : null;
        $this->container['first_post_id'] = isset($data['first_post_id']) ? $data['first_post_id'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['last_edited_by'] = isset($data['last_edited_by']) ? $data['last_edited_by'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['modification_date'] = isset($data['modification_date']) ? $data['modification_date'] : null;
        $this->container['upvote_count'] = isset($data['upvote_count']) ? $data['upvote_count'] : null;
        $this->container['view_count'] = isset($data['view_count']) ? $data['view_count'] : null;
        $this->container['post_count'] = isset($data['post_count']) ? $data['post_count'] : null;
        $this->container['trending_score'] = isset($data['trending_score']) ? $data['trending_score'] : null;
        $this->container['forum_id'] = isset($data['forum_id']) ? $data['forum_id'] : null;
        $this->container['forum_name'] = isset($data['forum_name']) ? $data['forum_name'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['raw_content'] = isset($data['raw_content']) ? $data['raw_content'] : null;
        $this->container['rendered_content'] = isset($data['rendered_content']) ? $data['rendered_content'] : null;
        $this->container['last_post_id'] = isset($data['last_post_id']) ? $data['last_post_id'] : null;
        $this->container['latest_revision_id'] = isset($data['latest_revision_id']) ? $data['latest_revision_id'] : null;
        $this->container['requester_id'] = isset($data['requester_id']) ? $data['requester_id'] : null;
        $this->container['user_block_details'] = isset($data['user_block_details']) ? $data['user_block_details'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['_links'] = isset($data['_links']) ? $data['_links'] : null;
        $this->container['is_editable'] = isset($data['is_editable']) ? $data['is_editable'] : false;
        $this->container['is_locked'] = isset($data['is_locked']) ? $data['is_locked'] : false;
        $this->container['is_reported'] = isset($data['is_reported']) ? $data['is_reported'] : false;
        $this->container['is_followed'] = isset($data['is_followed']) ? $data['is_followed'] : false;
        $this->container['is_requester_blocked'] = isset($data['is_requester_blocked']) ? $data['is_requester_blocked'] : false;
        $this->container['_embedded'] = isset($data['_embedded']) ? $data['_embedded'] : null;
        $this->container['is_held'] = isset($data['is_held']) ? $data['is_held'] : false;
        $this->container['is_deleted'] = isset($data['is_deleted']) ? $data['is_deleted'] : false;
        $this->container['is_viewable'] = isset($data['is_viewable']) ? $data['is_viewable'] : false;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets site_id
     * @return string
     */
    public function getSiteId()
    {
        return $this->container['site_id'];
    }

    /**
     * Sets site_id
     * @param string $site_id
     * @return $this
     */
    public function setSiteId($site_id)
    {
        $this->container['site_id'] = $site_id;

        return $this;
    }

    /**
     * Gets first_post_id
     * @return string
     */
    public function getFirstPostId()
    {
        return $this->container['first_post_id'];
    }

    /**
     * Sets first_post_id
     * @param string $first_post_id
     * @return $this
     */
    public function setFirstPostId($first_post_id)
    {
        $this->container['first_post_id'] = $first_post_id;

        return $this;
    }

    /**
     * Gets created_by
     * @return \Swagger\Client\Discussion\Models\UserInfo
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     * @param \Swagger\Client\Discussion\Models\UserInfo $created_by
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets last_edited_by
     * @return \Swagger\Client\Discussion\Models\UserInfo
     */
    public function getLastEditedBy()
    {
        return $this->container['last_edited_by'];
    }

    /**
     * Sets last_edited_by
     * @param \Swagger\Client\Discussion\Models\UserInfo $last_edited_by
     * @return $this
     */
    public function setLastEditedBy($last_edited_by)
    {
        $this->container['last_edited_by'] = $last_edited_by;

        return $this;
    }

    /**
     * Gets creation_date
     * @return \Swagger\Client\Discussion\Models\LocalDateTime
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     * @param \Swagger\Client\Discussion\Models\LocalDateTime $creation_date
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets modification_date
     * @return \Swagger\Client\Discussion\Models\LocalDateTime
     */
    public function getModificationDate()
    {
        return $this->container['modification_date'];
    }

    /**
     * Sets modification_date
     * @param \Swagger\Client\Discussion\Models\LocalDateTime $modification_date
     * @return $this
     */
    public function setModificationDate($modification_date)
    {
        $this->container['modification_date'] = $modification_date;

        return $this;
    }

    /**
     * Gets upvote_count
     * @return int
     */
    public function getUpvoteCount()
    {
        return $this->container['upvote_count'];
    }

    /**
     * Sets upvote_count
     * @param int $upvote_count
     * @return $this
     */
    public function setUpvoteCount($upvote_count)
    {
        $this->container['upvote_count'] = $upvote_count;

        return $this;
    }

    /**
     * Gets view_count
     * @return int
     */
    public function getViewCount()
    {
        return $this->container['view_count'];
    }

    /**
     * Sets view_count
     * @param int $view_count
     * @return $this
     */
    public function setViewCount($view_count)
    {
        $this->container['view_count'] = $view_count;

        return $this;
    }

    /**
     * Gets post_count
     * @return int
     */
    public function getPostCount()
    {
        return $this->container['post_count'];
    }

    /**
     * Sets post_count
     * @param int $post_count
     * @return $this
     */
    public function setPostCount($post_count)
    {
        $this->container['post_count'] = $post_count;

        return $this;
    }

    /**
     * Gets trending_score
     * @return double
     */
    public function getTrendingScore()
    {
        return $this->container['trending_score'];
    }

    /**
     * Sets trending_score
     * @param double $trending_score
     * @return $this
     */
    public function setTrendingScore($trending_score)
    {
        $this->container['trending_score'] = $trending_score;

        return $this;
    }

    /**
     * Gets forum_id
     * @return string
     */
    public function getForumId()
    {
        return $this->container['forum_id'];
    }

    /**
     * Sets forum_id
     * @param string $forum_id
     * @return $this
     */
    public function setForumId($forum_id)
    {
        $this->container['forum_id'] = $forum_id;

        return $this;
    }

    /**
     * Gets forum_name
     * @return string
     */
    public function getForumName()
    {
        return $this->container['forum_name'];
    }

    /**
     * Sets forum_name
     * @param string $forum_name
     * @return $this
     */
    public function setForumName($forum_name)
    {
        $this->container['forum_name'] = $forum_name;

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
     * Gets raw_content
     * @return string
     */
    public function getRawContent()
    {
        return $this->container['raw_content'];
    }

    /**
     * Sets raw_content
     * @param string $raw_content
     * @return $this
     */
    public function setRawContent($raw_content)
    {
        $this->container['raw_content'] = $raw_content;

        return $this;
    }

    /**
     * Gets rendered_content
     * @return string
     */
    public function getRenderedContent()
    {
        return $this->container['rendered_content'];
    }

    /**
     * Sets rendered_content
     * @param string $rendered_content
     * @return $this
     */
    public function setRenderedContent($rendered_content)
    {
        $this->container['rendered_content'] = $rendered_content;

        return $this;
    }

    /**
     * Gets last_post_id
     * @return string
     */
    public function getLastPostId()
    {
        return $this->container['last_post_id'];
    }

    /**
     * Sets last_post_id
     * @param string $last_post_id
     * @return $this
     */
    public function setLastPostId($last_post_id)
    {
        $this->container['last_post_id'] = $last_post_id;

        return $this;
    }

    /**
     * Gets latest_revision_id
     * @return string
     */
    public function getLatestRevisionId()
    {
        return $this->container['latest_revision_id'];
    }

    /**
     * Sets latest_revision_id
     * @param string $latest_revision_id
     * @return $this
     */
    public function setLatestRevisionId($latest_revision_id)
    {
        $this->container['latest_revision_id'] = $latest_revision_id;

        return $this;
    }

    /**
     * Gets requester_id
     * @return string
     */
    public function getRequesterId()
    {
        return $this->container['requester_id'];
    }

    /**
     * Sets requester_id
     * @param string $requester_id
     * @return $this
     */
    public function setRequesterId($requester_id)
    {
        $this->container['requester_id'] = $requester_id;

        return $this;
    }

    /**
     * Gets user_block_details
     * @return string
     */
    public function getUserBlockDetails()
    {
        return $this->container['user_block_details'];
    }

    /**
     * Sets user_block_details
     * @param string $user_block_details
     * @return $this
     */
    public function setUserBlockDetails($user_block_details)
    {
        $this->container['user_block_details'] = $user_block_details;

        return $this;
    }

    /**
     * Gets page
     * @return int
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     * @param int $page
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets _links
     * @return map[string,\Swagger\Client\Discussion\Models\NewHalLink]
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     * @param map[string,\Swagger\Client\Discussion\Models\NewHalLink] $_links
     * @return $this
     */
    public function setLinks($_links)
    {
        $this->container['_links'] = $_links;

        return $this;
    }

    /**
     * Gets is_editable
     * @return bool
     */
    public function getIsEditable()
    {
        return $this->container['is_editable'];
    }

    /**
     * Sets is_editable
     * @param bool $is_editable
     * @return $this
     */
    public function setIsEditable($is_editable)
    {
        $this->container['is_editable'] = $is_editable;

        return $this;
    }

    /**
     * Gets is_locked
     * @return bool
     */
    public function getIsLocked()
    {
        return $this->container['is_locked'];
    }

    /**
     * Sets is_locked
     * @param bool $is_locked
     * @return $this
     */
    public function setIsLocked($is_locked)
    {
        $this->container['is_locked'] = $is_locked;

        return $this;
    }

    /**
     * Gets is_reported
     * @return bool
     */
    public function getIsReported()
    {
        return $this->container['is_reported'];
    }

    /**
     * Sets is_reported
     * @param bool $is_reported
     * @return $this
     */
    public function setIsReported($is_reported)
    {
        $this->container['is_reported'] = $is_reported;

        return $this;
    }

    /**
     * Gets is_followed
     * @return bool
     */
    public function getIsFollowed()
    {
        return $this->container['is_followed'];
    }

    /**
     * Sets is_followed
     * @param bool $is_followed
     * @return $this
     */
    public function setIsFollowed($is_followed)
    {
        $this->container['is_followed'] = $is_followed;

        return $this;
    }

    /**
     * Gets is_requester_blocked
     * @return bool
     */
    public function getIsRequesterBlocked()
    {
        return $this->container['is_requester_blocked'];
    }

    /**
     * Sets is_requester_blocked
     * @param bool $is_requester_blocked
     * @return $this
     */
    public function setIsRequesterBlocked($is_requester_blocked)
    {
        $this->container['is_requester_blocked'] = $is_requester_blocked;

        return $this;
    }

    /**
     * Gets _embedded
     * @return \Swagger\Client\Discussion\Models\ThreadEmbedded
     */
    public function getEmbedded()
    {
        return $this->container['_embedded'];
    }

    /**
     * Sets _embedded
     * @param \Swagger\Client\Discussion\Models\ThreadEmbedded $_embedded
     * @return $this
     */
    public function setEmbedded($_embedded)
    {
        $this->container['_embedded'] = $_embedded;

        return $this;
    }

    /**
     * Gets is_held
     * @return bool
     */
    public function getIsHeld()
    {
        return $this->container['is_held'];
    }

    /**
     * Sets is_held
     * @param bool $is_held
     * @return $this
     */
    public function setIsHeld($is_held)
    {
        $this->container['is_held'] = $is_held;

        return $this;
    }

    /**
     * Gets is_deleted
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->container['is_deleted'];
    }

    /**
     * Sets is_deleted
     * @param bool $is_deleted
     * @return $this
     */
    public function setIsDeleted($is_deleted)
    {
        $this->container['is_deleted'] = $is_deleted;

        return $this;
    }

    /**
     * Gets is_viewable
     * @return bool
     */
    public function getIsViewable()
    {
        return $this->container['is_viewable'];
    }

    /**
     * Sets is_viewable
     * @param bool $is_viewable
     * @return $this
     */
    public function setIsViewable($is_viewable)
    {
        $this->container['is_viewable'] = $is_viewable;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


