<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\NodePool;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PlacementPolicy defines the placement policy used by the node pool.
 *
 * Generated from protobuf message <code>google.container.v1.NodePool.PlacementPolicy</code>
 */
class PlacementPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * The type of placement.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.PlacementPolicy.Type type = 1;</code>
     */
    private $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           The type of placement.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * The type of placement.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.PlacementPolicy.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of placement.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.PlacementPolicy.Type type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Container\V1\NodePool\PlacementPolicy\Type::class);
        $this->type = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PlacementPolicy::class, \Google\Cloud\Container\V1\NodePool_PlacementPolicy::class);

