<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/jobs.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Dataproc job for running [Trino](https://trino.io/) queries.
 * **IMPORTANT**: The [Dataproc Trino Optional
 * Component](https://cloud.google.com/dataproc/docs/concepts/components/trino)
 * must be enabled when the cluster is created to submit a Trino job to the
 * cluster.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.TrinoJob</code>
 */
class TrinoJob extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Whether to continue executing queries if a query fails.
     * The default value is `false`. Setting to `true` can be useful when
     * executing independent parallel queries.
     *
     * Generated from protobuf field <code>bool continue_on_failure = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $continue_on_failure = false;
    /**
     * Optional. The format in which query output will be displayed. See the
     * Trino documentation for supported output formats
     *
     * Generated from protobuf field <code>string output_format = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $output_format = '';
    /**
     * Optional. Trino client tags to attach to this query
     *
     * Generated from protobuf field <code>repeated string client_tags = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $client_tags;
    /**
     * Optional. A mapping of property names to values. Used to set Trino
     * [session properties](https://trino.io/docs/current/sql/set-session.html)
     * Equivalent to using the --session flag in the Trino CLI
     *
     * Generated from protobuf field <code>map<string, string> properties = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $properties;
    /**
     * Optional. The runtime log config for job execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.LoggingConfig logging_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $logging_config = null;
    protected $queries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $query_file_uri
     *           The HCFS URI of the script that contains SQL queries.
     *     @type \Google\Cloud\Dataproc\V1\QueryList $query_list
     *           A list of queries.
     *     @type bool $continue_on_failure
     *           Optional. Whether to continue executing queries if a query fails.
     *           The default value is `false`. Setting to `true` can be useful when
     *           executing independent parallel queries.
     *     @type string $output_format
     *           Optional. The format in which query output will be displayed. See the
     *           Trino documentation for supported output formats
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $client_tags
     *           Optional. Trino client tags to attach to this query
     *     @type array|\Google\Protobuf\Internal\MapField $properties
     *           Optional. A mapping of property names to values. Used to set Trino
     *           [session properties](https://trino.io/docs/current/sql/set-session.html)
     *           Equivalent to using the --session flag in the Trino CLI
     *     @type \Google\Cloud\Dataproc\V1\LoggingConfig $logging_config
     *           Optional. The runtime log config for job execution.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Jobs::initOnce();
        parent::__construct($data);
    }

    /**
     * The HCFS URI of the script that contains SQL queries.
     *
     * Generated from protobuf field <code>string query_file_uri = 1;</code>
     * @return string
     */
    public function getQueryFileUri()
    {
        return $this->readOneof(1);
    }

    public function hasQueryFileUri()
    {
        return $this->hasOneof(1);
    }

    /**
     * The HCFS URI of the script that contains SQL queries.
     *
     * Generated from protobuf field <code>string query_file_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setQueryFileUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * A list of queries.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.QueryList query_list = 2;</code>
     * @return \Google\Cloud\Dataproc\V1\QueryList|null
     */
    public function getQueryList()
    {
        return $this->readOneof(2);
    }

    public function hasQueryList()
    {
        return $this->hasOneof(2);
    }

    /**
     * A list of queries.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.QueryList query_list = 2;</code>
     * @param \Google\Cloud\Dataproc\V1\QueryList $var
     * @return $this
     */
    public function setQueryList($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\QueryList::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Optional. Whether to continue executing queries if a query fails.
     * The default value is `false`. Setting to `true` can be useful when
     * executing independent parallel queries.
     *
     * Generated from protobuf field <code>bool continue_on_failure = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getContinueOnFailure()
    {
        return $this->continue_on_failure;
    }

    /**
     * Optional. Whether to continue executing queries if a query fails.
     * The default value is `false`. Setting to `true` can be useful when
     * executing independent parallel queries.
     *
     * Generated from protobuf field <code>bool continue_on_failure = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setContinueOnFailure($var)
    {
        GPBUtil::checkBool($var);
        $this->continue_on_failure = $var;

        return $this;
    }

    /**
     * Optional. The format in which query output will be displayed. See the
     * Trino documentation for supported output formats
     *
     * Generated from protobuf field <code>string output_format = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOutputFormat()
    {
        return $this->output_format;
    }

    /**
     * Optional. The format in which query output will be displayed. See the
     * Trino documentation for supported output formats
     *
     * Generated from protobuf field <code>string output_format = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setOutputFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_format = $var;

        return $this;
    }

    /**
     * Optional. Trino client tags to attach to this query
     *
     * Generated from protobuf field <code>repeated string client_tags = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClientTags()
    {
        return $this->client_tags;
    }

    /**
     * Optional. Trino client tags to attach to this query
     *
     * Generated from protobuf field <code>repeated string client_tags = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClientTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->client_tags = $arr;

        return $this;
    }

    /**
     * Optional. A mapping of property names to values. Used to set Trino
     * [session properties](https://trino.io/docs/current/sql/set-session.html)
     * Equivalent to using the --session flag in the Trino CLI
     *
     * Generated from protobuf field <code>map<string, string> properties = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Optional. A mapping of property names to values. Used to set Trino
     * [session properties](https://trino.io/docs/current/sql/set-session.html)
     * Equivalent to using the --session flag in the Trino CLI
     *
     * Generated from protobuf field <code>map<string, string> properties = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setProperties($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->properties = $arr;

        return $this;
    }

    /**
     * Optional. The runtime log config for job execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.LoggingConfig logging_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\LoggingConfig|null
     */
    public function getLoggingConfig()
    {
        return $this->logging_config;
    }

    public function hasLoggingConfig()
    {
        return isset($this->logging_config);
    }

    public function clearLoggingConfig()
    {
        unset($this->logging_config);
    }

    /**
     * Optional. The runtime log config for job execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.LoggingConfig logging_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\LoggingConfig $var
     * @return $this
     */
    public function setLoggingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\LoggingConfig::class);
        $this->logging_config = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getQueries()
    {
        return $this->whichOneof("queries");
    }

}

