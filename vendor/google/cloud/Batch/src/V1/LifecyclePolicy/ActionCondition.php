<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/batch/v1/task.proto

namespace Google\Cloud\Batch\V1\LifecyclePolicy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Conditions for actions to deal with task failures.
 *
 * Generated from protobuf message <code>google.cloud.batch.v1.LifecyclePolicy.ActionCondition</code>
 */
class ActionCondition extends \Google\Protobuf\Internal\Message
{
    /**
     * Exit codes of a task execution.
     * If there are more than 1 exit codes,
     * when task executes with any of the exit code in the list,
     * the condition is met and the action will be executed.
     *
     * Generated from protobuf field <code>repeated int32 exit_codes = 1;</code>
     */
    private $exit_codes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $exit_codes
     *           Exit codes of a task execution.
     *           If there are more than 1 exit codes,
     *           when task executes with any of the exit code in the list,
     *           the condition is met and the action will be executed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Batch\V1\Task::initOnce();
        parent::__construct($data);
    }

    /**
     * Exit codes of a task execution.
     * If there are more than 1 exit codes,
     * when task executes with any of the exit code in the list,
     * the condition is met and the action will be executed.
     *
     * Generated from protobuf field <code>repeated int32 exit_codes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExitCodes()
    {
        return $this->exit_codes;
    }

    /**
     * Exit codes of a task execution.
     * If there are more than 1 exit codes,
     * when task executes with any of the exit code in the list,
     * the condition is met and the action will be executed.
     *
     * Generated from protobuf field <code>repeated int32 exit_codes = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExitCodes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->exit_codes = $arr;

        return $this;
    }

}

