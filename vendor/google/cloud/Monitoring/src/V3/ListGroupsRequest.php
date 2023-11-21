<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/group_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `ListGroup` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.ListGroupsRequest</code>
 */
class ListGroupsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The [project](https://cloud.google.com/monitoring/api/v3#project_name)
     * whose groups are to be listed. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     *
     * Generated from protobuf field <code>string name = 7 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * A positive number that is the maximum number of results to return.
     *
     * Generated from protobuf field <code>int32 page_size = 5;</code>
     */
    private $page_size = 0;
    /**
     * If this field is not empty then it must contain the `next_page_token` value
     * returned by a previous call to this method.  Using this field causes the
     * method to return additional results from the previous method call.
     *
     * Generated from protobuf field <code>string page_token = 6;</code>
     */
    private $page_token = '';
    protected $filter;

    /**
     * @param string $name Required. The [project](https://cloud.google.com/monitoring/api/v3#project_name)
     *                     whose groups are to be listed. The format is:
     *
     *                     projects/[PROJECT_ID_OR_NUMBER]
     *
     * @return \Google\Cloud\Monitoring\V3\ListGroupsRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The [project](https://cloud.google.com/monitoring/api/v3#project_name)
     *           whose groups are to be listed. The format is:
     *               projects/[PROJECT_ID_OR_NUMBER]
     *     @type string $children_of_group
     *           A group name. The format is:
     *               projects/[PROJECT_ID_OR_NUMBER]/groups/[GROUP_ID]
     *           Returns groups whose `parent_name` field contains the group
     *           name.  If no groups have this parent, the results are empty.
     *     @type string $ancestors_of_group
     *           A group name. The format is:
     *               projects/[PROJECT_ID_OR_NUMBER]/groups/[GROUP_ID]
     *           Returns groups that are ancestors of the specified group.
     *           The groups are returned in order, starting with the immediate parent and
     *           ending with the most distant ancestor.  If the specified group has no
     *           immediate parent, the results are empty.
     *     @type string $descendants_of_group
     *           A group name. The format is:
     *               projects/[PROJECT_ID_OR_NUMBER]/groups/[GROUP_ID]
     *           Returns the descendants of the specified group.  This is a superset of
     *           the results returned by the `children_of_group` filter, and includes
     *           children-of-children, and so forth.
     *     @type int $page_size
     *           A positive number that is the maximum number of results to return.
     *     @type string $page_token
     *           If this field is not empty then it must contain the `next_page_token` value
     *           returned by a previous call to this method.  Using this field causes the
     *           method to return additional results from the previous method call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\GroupService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The [project](https://cloud.google.com/monitoring/api/v3#project_name)
     * whose groups are to be listed. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     *
     * Generated from protobuf field <code>string name = 7 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The [project](https://cloud.google.com/monitoring/api/v3#project_name)
     * whose groups are to be listed. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     *
     * Generated from protobuf field <code>string name = 7 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * A group name. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/groups/[GROUP_ID]
     * Returns groups whose `parent_name` field contains the group
     * name.  If no groups have this parent, the results are empty.
     *
     * Generated from protobuf field <code>string children_of_group = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getChildrenOfGroup()
    {
        return $this->readOneof(2);
    }

    public function hasChildrenOfGroup()
    {
        return $this->hasOneof(2);
    }

    /**
     * A group name. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/groups/[GROUP_ID]
     * Returns groups whose `parent_name` field contains the group
     * name.  If no groups have this parent, the results are empty.
     *
     * Generated from protobuf field <code>string children_of_group = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setChildrenOfGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A group name. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/groups/[GROUP_ID]
     * Returns groups that are ancestors of the specified group.
     * The groups are returned in order, starting with the immediate parent and
     * ending with the most distant ancestor.  If the specified group has no
     * immediate parent, the results are empty.
     *
     * Generated from protobuf field <code>string ancestors_of_group = 3 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAncestorsOfGroup()
    {
        return $this->readOneof(3);
    }

    public function hasAncestorsOfGroup()
    {
        return $this->hasOneof(3);
    }

    /**
     * A group name. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/groups/[GROUP_ID]
     * Returns groups that are ancestors of the specified group.
     * The groups are returned in order, starting with the immediate parent and
     * ending with the most distant ancestor.  If the specified group has no
     * immediate parent, the results are empty.
     *
     * Generated from protobuf field <code>string ancestors_of_group = 3 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAncestorsOfGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * A group name. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/groups/[GROUP_ID]
     * Returns the descendants of the specified group.  This is a superset of
     * the results returned by the `children_of_group` filter, and includes
     * children-of-children, and so forth.
     *
     * Generated from protobuf field <code>string descendants_of_group = 4 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDescendantsOfGroup()
    {
        return $this->readOneof(4);
    }

    public function hasDescendantsOfGroup()
    {
        return $this->hasOneof(4);
    }

    /**
     * A group name. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/groups/[GROUP_ID]
     * Returns the descendants of the specified group.  This is a superset of
     * the results returned by the `children_of_group` filter, and includes
     * children-of-children, and so forth.
     *
     * Generated from protobuf field <code>string descendants_of_group = 4 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDescendantsOfGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * A positive number that is the maximum number of results to return.
     *
     * Generated from protobuf field <code>int32 page_size = 5;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * A positive number that is the maximum number of results to return.
     *
     * Generated from protobuf field <code>int32 page_size = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * If this field is not empty then it must contain the `next_page_token` value
     * returned by a previous call to this method.  Using this field causes the
     * method to return additional results from the previous method call.
     *
     * Generated from protobuf field <code>string page_token = 6;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * If this field is not empty then it must contain the `next_page_token` value
     * returned by a previous call to this method.  Using this field causes the
     * method to return additional results from the previous method call.
     *
     * Generated from protobuf field <code>string page_token = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getFilter()
    {
        return $this->whichOneof("filter");
    }

}

