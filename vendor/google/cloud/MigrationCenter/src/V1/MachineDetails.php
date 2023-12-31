<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details of a machine.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.MachineDetails</code>
 */
class MachineDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Machine unique identifier.
     *
     * Generated from protobuf field <code>string uuid = 1;</code>
     */
    protected $uuid = '';
    /**
     * Machine name.
     *
     * Generated from protobuf field <code>string machine_name = 2;</code>
     */
    protected $machine_name = '';
    /**
     * Machine creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     */
    protected $create_time = null;
    /**
     * Number of CPU cores in the machine. Must be non-negative.
     *
     * Generated from protobuf field <code>int32 core_count = 4;</code>
     */
    protected $core_count = 0;
    /**
     * The amount of memory in the machine. Must be non-negative.
     *
     * Generated from protobuf field <code>int32 memory_mb = 5;</code>
     */
    protected $memory_mb = 0;
    /**
     * Power state of the machine.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.MachineDetails.PowerState power_state = 6;</code>
     */
    protected $power_state = 0;
    /**
     * Architecture details (vendor, CPU architecture).
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.MachineArchitectureDetails architecture = 7;</code>
     */
    protected $architecture = null;
    /**
     * Guest OS information.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.GuestOsDetails guest_os = 8;</code>
     */
    protected $guest_os = null;
    /**
     * Network details.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.MachineNetworkDetails network = 9;</code>
     */
    protected $network = null;
    /**
     * Disk details.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.MachineDiskDetails disks = 10;</code>
     */
    protected $disks = null;
    /**
     * Platform specific information.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.PlatformDetails platform = 11;</code>
     */
    protected $platform = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uuid
     *           Machine unique identifier.
     *     @type string $machine_name
     *           Machine name.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Machine creation time.
     *     @type int $core_count
     *           Number of CPU cores in the machine. Must be non-negative.
     *     @type int $memory_mb
     *           The amount of memory in the machine. Must be non-negative.
     *     @type int $power_state
     *           Power state of the machine.
     *     @type \Google\Cloud\MigrationCenter\V1\MachineArchitectureDetails $architecture
     *           Architecture details (vendor, CPU architecture).
     *     @type \Google\Cloud\MigrationCenter\V1\GuestOsDetails $guest_os
     *           Guest OS information.
     *     @type \Google\Cloud\MigrationCenter\V1\MachineNetworkDetails $network
     *           Network details.
     *     @type \Google\Cloud\MigrationCenter\V1\MachineDiskDetails $disks
     *           Disk details.
     *     @type \Google\Cloud\MigrationCenter\V1\PlatformDetails $platform
     *           Platform specific information.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Machine unique identifier.
     *
     * Generated from protobuf field <code>string uuid = 1;</code>
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Machine unique identifier.
     *
     * Generated from protobuf field <code>string uuid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUuid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uuid = $var;

        return $this;
    }

    /**
     * Machine name.
     *
     * Generated from protobuf field <code>string machine_name = 2;</code>
     * @return string
     */
    public function getMachineName()
    {
        return $this->machine_name;
    }

    /**
     * Machine name.
     *
     * Generated from protobuf field <code>string machine_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMachineName($var)
    {
        GPBUtil::checkString($var, True);
        $this->machine_name = $var;

        return $this;
    }

    /**
     * Machine creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Machine creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Number of CPU cores in the machine. Must be non-negative.
     *
     * Generated from protobuf field <code>int32 core_count = 4;</code>
     * @return int
     */
    public function getCoreCount()
    {
        return $this->core_count;
    }

    /**
     * Number of CPU cores in the machine. Must be non-negative.
     *
     * Generated from protobuf field <code>int32 core_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCoreCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->core_count = $var;

        return $this;
    }

    /**
     * The amount of memory in the machine. Must be non-negative.
     *
     * Generated from protobuf field <code>int32 memory_mb = 5;</code>
     * @return int
     */
    public function getMemoryMb()
    {
        return $this->memory_mb;
    }

    /**
     * The amount of memory in the machine. Must be non-negative.
     *
     * Generated from protobuf field <code>int32 memory_mb = 5;</code>
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
     * Power state of the machine.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.MachineDetails.PowerState power_state = 6;</code>
     * @return int
     */
    public function getPowerState()
    {
        return $this->power_state;
    }

    /**
     * Power state of the machine.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.MachineDetails.PowerState power_state = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setPowerState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\MigrationCenter\V1\MachineDetails\PowerState::class);
        $this->power_state = $var;

        return $this;
    }

    /**
     * Architecture details (vendor, CPU architecture).
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.MachineArchitectureDetails architecture = 7;</code>
     * @return \Google\Cloud\MigrationCenter\V1\MachineArchitectureDetails|null
     */
    public function getArchitecture()
    {
        return $this->architecture;
    }

    public function hasArchitecture()
    {
        return isset($this->architecture);
    }

    public function clearArchitecture()
    {
        unset($this->architecture);
    }

    /**
     * Architecture details (vendor, CPU architecture).
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.MachineArchitectureDetails architecture = 7;</code>
     * @param \Google\Cloud\MigrationCenter\V1\MachineArchitectureDetails $var
     * @return $this
     */
    public function setArchitecture($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\MachineArchitectureDetails::class);
        $this->architecture = $var;

        return $this;
    }

    /**
     * Guest OS information.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.GuestOsDetails guest_os = 8;</code>
     * @return \Google\Cloud\MigrationCenter\V1\GuestOsDetails|null
     */
    public function getGuestOs()
    {
        return $this->guest_os;
    }

    public function hasGuestOs()
    {
        return isset($this->guest_os);
    }

    public function clearGuestOs()
    {
        unset($this->guest_os);
    }

    /**
     * Guest OS information.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.GuestOsDetails guest_os = 8;</code>
     * @param \Google\Cloud\MigrationCenter\V1\GuestOsDetails $var
     * @return $this
     */
    public function setGuestOs($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\GuestOsDetails::class);
        $this->guest_os = $var;

        return $this;
    }

    /**
     * Network details.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.MachineNetworkDetails network = 9;</code>
     * @return \Google\Cloud\MigrationCenter\V1\MachineNetworkDetails|null
     */
    public function getNetwork()
    {
        return $this->network;
    }

    public function hasNetwork()
    {
        return isset($this->network);
    }

    public function clearNetwork()
    {
        unset($this->network);
    }

    /**
     * Network details.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.MachineNetworkDetails network = 9;</code>
     * @param \Google\Cloud\MigrationCenter\V1\MachineNetworkDetails $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\MachineNetworkDetails::class);
        $this->network = $var;

        return $this;
    }

    /**
     * Disk details.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.MachineDiskDetails disks = 10;</code>
     * @return \Google\Cloud\MigrationCenter\V1\MachineDiskDetails|null
     */
    public function getDisks()
    {
        return $this->disks;
    }

    public function hasDisks()
    {
        return isset($this->disks);
    }

    public function clearDisks()
    {
        unset($this->disks);
    }

    /**
     * Disk details.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.MachineDiskDetails disks = 10;</code>
     * @param \Google\Cloud\MigrationCenter\V1\MachineDiskDetails $var
     * @return $this
     */
    public function setDisks($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\MachineDiskDetails::class);
        $this->disks = $var;

        return $this;
    }

    /**
     * Platform specific information.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.PlatformDetails platform = 11;</code>
     * @return \Google\Cloud\MigrationCenter\V1\PlatformDetails|null
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    public function hasPlatform()
    {
        return isset($this->platform);
    }

    public function clearPlatform()
    {
        unset($this->platform);
    }

    /**
     * Platform specific information.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.PlatformDetails platform = 11;</code>
     * @param \Google\Cloud\MigrationCenter\V1\PlatformDetails $var
     * @return $this
     */
    public function setPlatform($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\PlatformDetails::class);
        $this->platform = $var;

        return $this;
    }

}

