<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\NetworkConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration of network bandwidth tiers
 *
 * Generated from protobuf message <code>google.container.v1.NetworkConfig.ClusterNetworkPerformanceConfig</code>
 */
class ClusterNetworkPerformanceConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies the total network bandwidth tier for NodePools in the cluster.
     *
     * Generated from protobuf field <code>optional .google.container.v1.NetworkConfig.ClusterNetworkPerformanceConfig.Tier total_egress_bandwidth_tier = 1;</code>
     */
    private $total_egress_bandwidth_tier = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $total_egress_bandwidth_tier
     *           Specifies the total network bandwidth tier for NodePools in the cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies the total network bandwidth tier for NodePools in the cluster.
     *
     * Generated from protobuf field <code>optional .google.container.v1.NetworkConfig.ClusterNetworkPerformanceConfig.Tier total_egress_bandwidth_tier = 1;</code>
     * @return int
     */
    public function getTotalEgressBandwidthTier()
    {
        return isset($this->total_egress_bandwidth_tier) ? $this->total_egress_bandwidth_tier : 0;
    }

    public function hasTotalEgressBandwidthTier()
    {
        return isset($this->total_egress_bandwidth_tier);
    }

    public function clearTotalEgressBandwidthTier()
    {
        unset($this->total_egress_bandwidth_tier);
    }

    /**
     * Specifies the total network bandwidth tier for NodePools in the cluster.
     *
     * Generated from protobuf field <code>optional .google.container.v1.NetworkConfig.ClusterNetworkPerformanceConfig.Tier total_egress_bandwidth_tier = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalEgressBandwidthTier($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Container\V1\NetworkConfig\ClusterNetworkPerformanceConfig\Tier::class);
        $this->total_egress_bandwidth_tier = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ClusterNetworkPerformanceConfig::class, \Google\Cloud\Container\V1\NetworkConfig_ClusterNetworkPerformanceConfig::class);
