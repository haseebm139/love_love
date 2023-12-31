<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\DiskResourceStatusAsyncReplicationStatus;

use UnexpectedValueException;

/**
 *
 * Protobuf type <code>google.cloud.compute.v1.DiskResourceStatusAsyncReplicationStatus.State</code>
 */
class State
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_STATE = 0;</code>
     */
    const UNDEFINED_STATE = 0;
    /**
     * Replication is active.
     *
     * Generated from protobuf enum <code>ACTIVE = 314733318;</code>
     */
    const ACTIVE = 314733318;
    /**
     * Secondary disk is created and is waiting for replication to start.
     *
     * Generated from protobuf enum <code>CREATED = 135924424;</code>
     */
    const CREATED = 135924424;
    /**
     * Replication is starting.
     *
     * Generated from protobuf enum <code>STARTING = 488820800;</code>
     */
    const STARTING = 488820800;
    /**
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 470755401;</code>
     */
    const STATE_UNSPECIFIED = 470755401;
    /**
     * Replication is stopped.
     *
     * Generated from protobuf enum <code>STOPPED = 444276141;</code>
     */
    const STOPPED = 444276141;
    /**
     * Replication is stopping.
     *
     * Generated from protobuf enum <code>STOPPING = 350791796;</code>
     */
    const STOPPING = 350791796;

    private static $valueToName = [
        self::UNDEFINED_STATE => 'UNDEFINED_STATE',
        self::ACTIVE => 'ACTIVE',
        self::CREATED => 'CREATED',
        self::STARTING => 'STARTING',
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::STOPPED => 'STOPPED',
        self::STOPPING => 'STOPPING',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


