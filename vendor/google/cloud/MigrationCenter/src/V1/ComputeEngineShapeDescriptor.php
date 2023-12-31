<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Compute Engine target shape descriptor.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.ComputeEngineShapeDescriptor</code>
 */
class ComputeEngineShapeDescriptor extends \Google\Protobuf\Internal\Message
{
    /**
     * Memory in mebibytes.
     *
     * Generated from protobuf field <code>int32 memory_mb = 1;</code>
     */
    protected $memory_mb = 0;
    /**
     * Number of physical cores.
     *
     * Generated from protobuf field <code>int32 physical_core_count = 2;</code>
     */
    protected $physical_core_count = 0;
    /**
     * Number of logical cores.
     *
     * Generated from protobuf field <code>int32 logical_core_count = 3;</code>
     */
    protected $logical_core_count = 0;
    /**
     * Compute Engine machine series.
     *
     * Generated from protobuf field <code>string series = 4;</code>
     */
    protected $series = '';
    /**
     * Compute Engine machine type.
     *
     * Generated from protobuf field <code>string machine_type = 5;</code>
     */
    protected $machine_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $memory_mb
     *           Memory in mebibytes.
     *     @type int $physical_core_count
     *           Number of physical cores.
     *     @type int $logical_core_count
     *           Number of logical cores.
     *     @type string $series
     *           Compute Engine machine series.
     *     @type string $machine_type
     *           Compute Engine machine type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Memory in mebibytes.
     *
     * Generated from protobuf field <code>int32 memory_mb = 1;</code>
     * @return int
     */
    public function getMemoryMb()
    {
        return $this->memory_mb;
    }

    /**
     * Memory in mebibytes.
     *
     * Generated from protobuf field <code>int32 memory_mb = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMemoryMb($var)
    {
        GPBUtil::checkInt32($var);
        $this->memory_mb = $var;

        return $this;
    }

    /**
     * Number of physical cores.
     *
     * Generated from protobuf field <code>int32 physical_core_count = 2;</code>
     * @return int
     */
    public function getPhysicalCoreCount()
    {
        return $this->physical_core_count;
    }

    /**
     * Number of physical cores.
     *
     * Generated from protobuf field <code>int32 physical_core_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPhysicalCoreCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->physical_core_count = $var;

        return $this;
    }

    /**
     * Number of logical cores.
     *
     * Generated from protobuf field <code>int32 logical_core_count = 3;</code>
     * @return int
     */
    public function getLogicalCoreCount()
    {
        return $this->logical_core_count;
    }

    /**
     * Number of logical cores.
     *
     * Generated from protobuf field <code>int32 logical_core_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLogicalCoreCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->logical_core_count = $var;

        return $this;
    }

    /**
     * Compute Engine machine series.
     *
     * Generated from protobuf field <code>string series = 4;</code>
     * @return string
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * Compute Engine machine series.
     *
     * Generated from protobuf field <code>string series = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSeries($var)
    {
        GPBUtil::checkString($var, True);
        $this->series = $var;

        return $this;
    }

    /**
     * Compute Engine machine type.
     *
     * Generated from protobuf field <code>string machine_type = 5;</code>
     * @return string
     */
    public function getMachineType()
    {
        return $this->machine_type;
    }

    /**
     * Compute Engine machine type.
     *
     * Generated from protobuf field <code>string machine_type = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setMachineType($var)
    {
        GPBUtil::checkString($var, True);
        $this->machine_type = $var;

        return $this;
    }

}

