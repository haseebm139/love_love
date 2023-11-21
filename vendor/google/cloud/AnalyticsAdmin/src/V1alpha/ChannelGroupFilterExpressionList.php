<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/channel_group.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of Channel Group filter expressions.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.ChannelGroupFilterExpressionList</code>
 */
class ChannelGroupFilterExpressionList extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of Channel Group filter expressions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.ChannelGroupFilterExpression filter_expressions = 1;</code>
     */
    private $filter_expressions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Analytics\Admin\V1alpha\ChannelGroupFilterExpression>|\Google\Protobuf\Internal\RepeatedField $filter_expressions
     *           A list of Channel Group filter expressions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\ChannelGroup::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of Channel Group filter expressions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.ChannelGroupFilterExpression filter_expressions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFilterExpressions()
    {
        return $this->filter_expressions;
    }

    /**
     * A list of Channel Group filter expressions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.ChannelGroupFilterExpression filter_expressions = 1;</code>
     * @param array<\Google\Analytics\Admin\V1alpha\ChannelGroupFilterExpression>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFilterExpressions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Admin\V1alpha\ChannelGroupFilterExpression::class);
        $this->filter_expressions = $arr;

        return $this;
    }

}
