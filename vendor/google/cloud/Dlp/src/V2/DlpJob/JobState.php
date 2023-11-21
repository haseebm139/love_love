<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\DlpJob;

use UnexpectedValueException;

/**
 * Possible states of a job. New items may be added.
 *
 * Protobuf type <code>google.privacy.dlp.v2.DlpJob.JobState</code>
 */
class JobState
{
    /**
     * Unused.
     *
     * Generated from protobuf enum <code>JOB_STATE_UNSPECIFIED = 0;</code>
     */
    const JOB_STATE_UNSPECIFIED = 0;
    /**
     * The job has not yet started.
     *
     * Generated from protobuf enum <code>PENDING = 1;</code>
     */
    const PENDING = 1;
    /**
     * The job is currently running. Once a job has finished it will transition
     * to FAILED or DONE.
     *
     * Generated from protobuf enum <code>RUNNING = 2;</code>
     */
    const RUNNING = 2;
    /**
     * The job is no longer running.
     *
     * Generated from protobuf enum <code>DONE = 3;</code>
     */
    const DONE = 3;
    /**
     * The job was canceled before it could be completed.
     *
     * Generated from protobuf enum <code>CANCELED = 4;</code>
     */
    const CANCELED = 4;
    /**
     * The job had an error and did not complete.
     *
     * Generated from protobuf enum <code>FAILED = 5;</code>
     */
    const FAILED = 5;
    /**
     * The job is currently accepting findings via hybridInspect.
     * A hybrid job in ACTIVE state may continue to have findings added to it
     * through the calling of hybridInspect. After the job has finished no more
     * calls to hybridInspect may be made. ACTIVE jobs can transition to DONE.
     *
     * Generated from protobuf enum <code>ACTIVE = 6;</code>
     */
    const ACTIVE = 6;

    private static $valueToName = [
        self::JOB_STATE_UNSPECIFIED => 'JOB_STATE_UNSPECIFIED',
        self::PENDING => 'PENDING',
        self::RUNNING => 'RUNNING',
        self::DONE => 'DONE',
        self::CANCELED => 'CANCELED',
        self::FAILED => 'FAILED',
        self::ACTIVE => 'ACTIVE',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(JobState::class, \Google\Cloud\Dlp\V2\DlpJob_JobState::class);
