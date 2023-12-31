<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1\ReportSummary;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A set of findings that applies to assets destined for Compute Engine.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.ReportSummary.ComputeEngineFinding</code>
 */
class ComputeEngineFinding extends \Google\Protobuf\Internal\Message
{
    /**
     * Set of regions in which the assets were allocated.
     *
     * Generated from protobuf field <code>repeated string allocated_regions = 1;</code>
     */
    private $allocated_regions;
    /**
     * Count of assets which were allocated.
     *
     * Generated from protobuf field <code>int64 allocated_asset_count = 2;</code>
     */
    protected $allocated_asset_count = 0;
    /**
     * Distribution of assets based on the Machine Series.
     *
     * Generated from protobuf field <code>repeated .google.cloud.migrationcenter.v1.ReportSummary.MachineSeriesAllocation machine_series_allocations = 3;</code>
     */
    private $machine_series_allocations;
    /**
     * Set of disk types allocated to assets.
     *
     * Generated from protobuf field <code>repeated .google.cloud.migrationcenter.v1.PersistentDiskType allocated_disk_types = 4;</code>
     */
    private $allocated_disk_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $allocated_regions
     *           Set of regions in which the assets were allocated.
     *     @type int|string $allocated_asset_count
     *           Count of assets which were allocated.
     *     @type array<\Google\Cloud\MigrationCenter\V1\ReportSummary\MachineSeriesAllocation>|\Google\Protobuf\Internal\RepeatedField $machine_series_allocations
     *           Distribution of assets based on the Machine Series.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $allocated_disk_types
     *           Set of disk types allocated to assets.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Set of regions in which the assets were allocated.
     *
     * Generated from protobuf field <code>repeated string allocated_regions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllocatedRegions()
    {
        return $this->allocated_regions;
    }

    /**
     * Set of regions in which the assets were allocated.
     *
     * Generated from protobuf field <code>repeated string allocated_regions = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllocatedRegions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allocated_regions = $arr;

        return $this;
    }

    /**
     * Count of assets which were allocated.
     *
     * Generated from protobuf field <code>int64 allocated_asset_count = 2;</code>
     * @return int|string
     */
    public function getAllocatedAssetCount()
    {
        return $this->allocated_asset_count;
    }

    /**
     * Count of assets which were allocated.
     *
     * Generated from protobuf field <code>int64 allocated_asset_count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAllocatedAssetCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->allocated_asset_count = $var;

        return $this;
    }

    /**
     * Distribution of assets based on the Machine Series.
     *
     * Generated from protobuf field <code>repeated .google.cloud.migrationcenter.v1.ReportSummary.MachineSeriesAllocation machine_series_allocations = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMachineSeriesAllocations()
    {
        return $this->machine_series_allocations;
    }

    /**
     * Distribution of assets based on the Machine Series.
     *
     * Generated from protobuf field <code>repeated .google.cloud.migrationcenter.v1.ReportSummary.MachineSeriesAllocation machine_series_allocations = 3;</code>
     * @param array<\Google\Cloud\MigrationCenter\V1\ReportSummary\MachineSeriesAllocation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMachineSeriesAllocations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\MigrationCenter\V1\ReportSummary\MachineSeriesAllocation::class);
        $this->machine_series_allocations = $arr;

        return $this;
    }

    /**
     * Set of disk types allocated to assets.
     *
     * Generated from protobuf field <code>repeated .google.cloud.migrationcenter.v1.PersistentDiskType allocated_disk_types = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllocatedDiskTypes()
    {
        return $this->allocated_disk_types;
    }

    /**
     * Set of disk types allocated to assets.
     *
     * Generated from protobuf field <code>repeated .google.cloud.migrationcenter.v1.PersistentDiskType allocated_disk_types = 4;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllocatedDiskTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\MigrationCenter\V1\PersistentDiskType::class);
        $this->allocated_disk_types = $arr;

        return $this;
    }

}


