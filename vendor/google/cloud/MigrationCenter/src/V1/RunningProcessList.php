<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List of running guest OS processes.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.RunningProcessList</code>
 */
class RunningProcessList extends \Google\Protobuf\Internal\Message
{
    /**
     * Running process entries.
     *
     * Generated from protobuf field <code>repeated .google.cloud.migrationcenter.v1.RunningProcess entries = 1;</code>
     */
    private $entries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\MigrationCenter\V1\RunningProcess>|\Google\Protobuf\Internal\RepeatedField $entries
     *           Running process entries.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Running process entries.
     *
     * Generated from protobuf field <code>repeated .google.cloud.migrationcenter.v1.RunningProcess entries = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * Running process entries.
     *
     * Generated from protobuf field <code>repeated .google.cloud.migrationcenter.v1.RunningProcess entries = 1;</code>
     * @param array<\Google\Cloud\MigrationCenter\V1\RunningProcess>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\MigrationCenter\V1\RunningProcess::class);
        $this->entries = $arr;

        return $this;
    }

}

