<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1\DailyResourceUsageAggregation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Statistical aggregation of disk usage.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.DailyResourceUsageAggregation.Disk</code>
 */
class Disk extends \Google\Protobuf\Internal\Message
{
    /**
     * Disk I/O operations per second.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.DailyResourceUsageAggregation.Stats iops = 1;</code>
     */
    protected $iops = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\MigrationCenter\V1\DailyResourceUsageAggregation\Stats $iops
     *           Disk I/O operations per second.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Disk I/O operations per second.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.DailyResourceUsageAggregation.Stats iops = 1;</code>
     * @return \Google\Cloud\MigrationCenter\V1\DailyResourceUsageAggregation\Stats|null
     */
    public function getIops()
    {
        return $this->iops;
    }

    public function hasIops()
    {
        return isset($this->iops);
    }

    public function clearIops()
    {
        unset($this->iops);
    }

    /**
     * Disk I/O operations per second.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.DailyResourceUsageAggregation.Stats iops = 1;</code>
     * @param \Google\Cloud\MigrationCenter\V1\DailyResourceUsageAggregation\Stats $var
     * @return $this
     */
    public function setIops($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\DailyResourceUsageAggregation\Stats::class);
        $this->iops = $var;

        return $this;
    }

}


