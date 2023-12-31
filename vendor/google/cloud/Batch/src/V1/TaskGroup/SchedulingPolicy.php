<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/batch/v1/job.proto

namespace Google\Cloud\Batch\V1\TaskGroup;

use UnexpectedValueException;

/**
 * How Tasks in the TaskGroup should be scheduled relative to each other.
 *
 * Protobuf type <code>google.cloud.batch.v1.TaskGroup.SchedulingPolicy</code>
 */
class SchedulingPolicy
{
    /**
     * Unspecified.
     *
     * Generated from protobuf enum <code>SCHEDULING_POLICY_UNSPECIFIED = 0;</code>
     */
    const SCHEDULING_POLICY_UNSPECIFIED = 0;
    /**
     * Run Tasks as soon as resources are available.
     * Tasks might be executed in parallel depending on parallelism and
     * task_count values.
     *
     * Generated from protobuf enum <code>AS_SOON_AS_POSSIBLE = 1;</code>
     */
    const AS_SOON_AS_POSSIBLE = 1;
    /**
     * Run Tasks sequentially with increased task index.
     *
     * Generated from protobuf enum <code>IN_ORDER = 2;</code>
     */
    const IN_ORDER = 2;

    private static $valueToName = [
        self::SCHEDULING_POLICY_UNSPECIFIED => 'SCHEDULING_POLICY_UNSPECIFIED',
        self::AS_SOON_AS_POSSIBLE => 'AS_SOON_AS_POSSIBLE',
        self::IN_ORDER => 'IN_ORDER',
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


