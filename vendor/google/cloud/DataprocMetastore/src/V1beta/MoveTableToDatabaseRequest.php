<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1beta/metastore.proto

namespace Google\Cloud\Metastore\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [DataprocMetastore.MoveTableToDatabase][google.cloud.metastore.v1beta.DataprocMetastore.MoveTableToDatabase].
 *
 * Generated from protobuf message <code>google.cloud.metastore.v1beta.MoveTableToDatabaseRequest</code>
 */
class MoveTableToDatabaseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The relative resource name of the metastore service to mutate
     * metadata, in the following format:
     * `projects/{project_id}/locations/{location_id}/services/{service_id}`.
     *
     * Generated from protobuf field <code>string service = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $service = '';
    /**
     * Required. The name of the table to be moved.
     *
     * Generated from protobuf field <code>string table_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $table_name = '';
    /**
     * Required. The name of the database where the table resides.
     *
     * Generated from protobuf field <code>string db_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $db_name = '';
    /**
     * Required. The name of the database where the table should be moved.
     *
     * Generated from protobuf field <code>string destination_db_name = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $destination_db_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service
     *           Required. The relative resource name of the metastore service to mutate
     *           metadata, in the following format:
     *           `projects/{project_id}/locations/{location_id}/services/{service_id}`.
     *     @type string $table_name
     *           Required. The name of the table to be moved.
     *     @type string $db_name
     *           Required. The name of the database where the table resides.
     *     @type string $destination_db_name
     *           Required. The name of the database where the table should be moved.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Metastore\V1Beta\Metastore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The relative resource name of the metastore service to mutate
     * metadata, in the following format:
     * `projects/{project_id}/locations/{location_id}/services/{service_id}`.
     *
     * Generated from protobuf field <code>string service = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Required. The relative resource name of the metastore service to mutate
     * metadata, in the following format:
     * `projects/{project_id}/locations/{location_id}/services/{service_id}`.
     *
     * Generated from protobuf field <code>string service = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

    /**
     * Required. The name of the table to be moved.
     *
     * Generated from protobuf field <code>string table_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTableName()
    {
        return $this->table_name;
    }

    /**
     * Required. The name of the table to be moved.
     *
     * Generated from protobuf field <code>string table_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTableName($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_name = $var;

        return $this;
    }

    /**
     * Required. The name of the database where the table resides.
     *
     * Generated from protobuf field <code>string db_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDbName()
    {
        return $this->db_name;
    }

    /**
     * Required. The name of the database where the table resides.
     *
     * Generated from protobuf field <code>string db_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDbName($var)
    {
        GPBUtil::checkString($var, True);
        $this->db_name = $var;

        return $this;
    }

    /**
     * Required. The name of the database where the table should be moved.
     *
     * Generated from protobuf field <code>string destination_db_name = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDestinationDbName()
    {
        return $this->destination_db_name;
    }

    /**
     * Required. The name of the database where the table should be moved.
     *
     * Generated from protobuf field <code>string destination_db_name = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationDbName($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination_db_name = $var;

        return $this;
    }

}

