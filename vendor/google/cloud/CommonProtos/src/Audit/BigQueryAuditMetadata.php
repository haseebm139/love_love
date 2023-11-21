<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/bigquery_audit_metadata.proto

namespace Google\Cloud\Audit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Audit log format for BigQuery cloud audit logs metadata.
 *
 * Generated from protobuf message <code>google.cloud.audit.BigQueryAuditMetadata</code>
 */
class BigQueryAuditMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * First party (Google) application specific metadata.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.FirstPartyAppMetadata first_party_app_metadata = 24;</code>
     */
    protected $first_party_app_metadata = null;
    protected $event;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\JobInsertion $job_insertion
     *           Job insertion event.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\JobChange $job_change
     *           Job state change event.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\JobDeletion $job_deletion
     *           Job deletion event.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\DatasetCreation $dataset_creation
     *           Dataset creation event.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\DatasetChange $dataset_change
     *           Dataset change event.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\DatasetDeletion $dataset_deletion
     *           Dataset deletion event.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\TableCreation $table_creation
     *           Table creation event.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\TableChange $table_change
     *           Table metadata change event.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\TableDeletion $table_deletion
     *           Table deletion event.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\TableDataRead $table_data_read
     *           Table data read event.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\TableDataChange $table_data_change
     *           Table data change event.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\ModelDeletion $model_deletion
     *           Model deletion event.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\ModelCreation $model_creation
     *           Model creation event.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\ModelMetadataChange $model_metadata_change
     *           Model metadata change event.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\ModelDataChange $model_data_change
     *           Model data change event.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\ModelDataRead $model_data_read
     *           Model data read event.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\RoutineCreation $routine_creation
     *           Routine creation event.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\RoutineChange $routine_change
     *           Routine change event.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\RoutineDeletion $routine_deletion
     *           Routine deletion event.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\RowAccessPolicyCreation $row_access_policy_creation
     *           Row access policy create event.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\RowAccessPolicyChange $row_access_policy_change
     *           Row access policy change event.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\RowAccessPolicyDeletion $row_access_policy_deletion
     *           Row access policy deletion event.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\UnlinkDataset $unlink_dataset
     *           Unlink linked dataset from its source dataset event
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\FirstPartyAppMetadata $first_party_app_metadata
     *           First party (Google) application specific metadata.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Audit\BigqueryAuditMetadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Job insertion event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.JobInsertion job_insertion = 1;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\JobInsertion|null
     */
    public function getJobInsertion()
    {
        return $this->readOneof(1);
    }

    public function hasJobInsertion()
    {
        return $this->hasOneof(1);
    }

    /**
     * Job insertion event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.JobInsertion job_insertion = 1;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\JobInsertion $var
     * @return $this
     */
    public function setJobInsertion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\JobInsertion::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Job state change event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.JobChange job_change = 2;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\JobChange|null
     */
    public function getJobChange()
    {
        return $this->readOneof(2);
    }

    public function hasJobChange()
    {
        return $this->hasOneof(2);
    }

    /**
     * Job state change event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.JobChange job_change = 2;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\JobChange $var
     * @return $this
     */
    public function setJobChange($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\JobChange::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Job deletion event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.JobDeletion job_deletion = 23;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\JobDeletion|null
     */
    public function getJobDeletion()
    {
        return $this->readOneof(23);
    }

    public function hasJobDeletion()
    {
        return $this->hasOneof(23);
    }

    /**
     * Job deletion event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.JobDeletion job_deletion = 23;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\JobDeletion $var
     * @return $this
     */
    public function setJobDeletion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\JobDeletion::class);
        $this->writeOneof(23, $var);

        return $this;
    }

    /**
     * Dataset creation event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.DatasetCreation dataset_creation = 3;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\DatasetCreation|null
     */
    public function getDatasetCreation()
    {
        return $this->readOneof(3);
    }

    public function hasDatasetCreation()
    {
        return $this->hasOneof(3);
    }

    /**
     * Dataset creation event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.DatasetCreation dataset_creation = 3;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\DatasetCreation $var
     * @return $this
     */
    public function setDatasetCreation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\DatasetCreation::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Dataset change event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.DatasetChange dataset_change = 4;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\DatasetChange|null
     */
    public function getDatasetChange()
    {
        return $this->readOneof(4);
    }

    public function hasDatasetChange()
    {
        return $this->hasOneof(4);
    }

    /**
     * Dataset change event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.DatasetChange dataset_change = 4;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\DatasetChange $var
     * @return $this
     */
    public function setDatasetChange($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\DatasetChange::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Dataset deletion event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.DatasetDeletion dataset_deletion = 5;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\DatasetDeletion|null
     */
    public function getDatasetDeletion()
    {
        return $this->readOneof(5);
    }

    public function hasDatasetDeletion()
    {
        return $this->hasOneof(5);
    }

    /**
     * Dataset deletion event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.DatasetDeletion dataset_deletion = 5;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\DatasetDeletion $var
     * @return $this
     */
    public function setDatasetDeletion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\DatasetDeletion::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Table creation event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.TableCreation table_creation = 6;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\TableCreation|null
     */
    public function getTableCreation()
    {
        return $this->readOneof(6);
    }

    public function hasTableCreation()
    {
        return $this->hasOneof(6);
    }

    /**
     * Table creation event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.TableCreation table_creation = 6;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\TableCreation $var
     * @return $this
     */
    public function setTableCreation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\TableCreation::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Table metadata change event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.TableChange table_change = 8;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\TableChange|null
     */
    public function getTableChange()
    {
        return $this->readOneof(8);
    }

    public function hasTableChange()
    {
        return $this->hasOneof(8);
    }

    /**
     * Table metadata change event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.TableChange table_change = 8;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\TableChange $var
     * @return $this
     */
    public function setTableChange($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\TableChange::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Table deletion event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.TableDeletion table_deletion = 9;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\TableDeletion|null
     */
    public function getTableDeletion()
    {
        return $this->readOneof(9);
    }

    public function hasTableDeletion()
    {
        return $this->hasOneof(9);
    }

    /**
     * Table deletion event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.TableDeletion table_deletion = 9;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\TableDeletion $var
     * @return $this
     */
    public function setTableDeletion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\TableDeletion::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Table data read event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.TableDataRead table_data_read = 10;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\TableDataRead|null
     */
    public function getTableDataRead()
    {
        return $this->readOneof(10);
    }

    public function hasTableDataRead()
    {
        return $this->hasOneof(10);
    }

    /**
     * Table data read event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.TableDataRead table_data_read = 10;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\TableDataRead $var
     * @return $this
     */
    public function setTableDataRead($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\TableDataRead::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Table data change event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.TableDataChange table_data_change = 11;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\TableDataChange|null
     */
    public function getTableDataChange()
    {
        return $this->readOneof(11);
    }

    public function hasTableDataChange()
    {
        return $this->hasOneof(11);
    }

    /**
     * Table data change event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.TableDataChange table_data_change = 11;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\TableDataChange $var
     * @return $this
     */
    public function setTableDataChange($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\TableDataChange::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Model deletion event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.ModelDeletion model_deletion = 12;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\ModelDeletion|null
     */
    public function getModelDeletion()
    {
        return $this->readOneof(12);
    }

    public function hasModelDeletion()
    {
        return $this->hasOneof(12);
    }

    /**
     * Model deletion event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.ModelDeletion model_deletion = 12;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\ModelDeletion $var
     * @return $this
     */
    public function setModelDeletion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\ModelDeletion::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Model creation event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.ModelCreation model_creation = 13;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\ModelCreation|null
     */
    public function getModelCreation()
    {
        return $this->readOneof(13);
    }

    public function hasModelCreation()
    {
        return $this->hasOneof(13);
    }

    /**
     * Model creation event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.ModelCreation model_creation = 13;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\ModelCreation $var
     * @return $this
     */
    public function setModelCreation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\ModelCreation::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Model metadata change event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.ModelMetadataChange model_metadata_change = 14;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\ModelMetadataChange|null
     */
    public function getModelMetadataChange()
    {
        return $this->readOneof(14);
    }

    public function hasModelMetadataChange()
    {
        return $this->hasOneof(14);
    }

    /**
     * Model metadata change event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.ModelMetadataChange model_metadata_change = 14;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\ModelMetadataChange $var
     * @return $this
     */
    public function setModelMetadataChange($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\ModelMetadataChange::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Model data change event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.ModelDataChange model_data_change = 15;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\ModelDataChange|null
     */
    public function getModelDataChange()
    {
        return $this->readOneof(15);
    }

    public function hasModelDataChange()
    {
        return $this->hasOneof(15);
    }

    /**
     * Model data change event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.ModelDataChange model_data_change = 15;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\ModelDataChange $var
     * @return $this
     */
    public function setModelDataChange($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\ModelDataChange::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Model data read event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.ModelDataRead model_data_read = 19;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\ModelDataRead|null
     */
    public function getModelDataRead()
    {
        return $this->readOneof(19);
    }

    public function hasModelDataRead()
    {
        return $this->hasOneof(19);
    }

    /**
     * Model data read event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.ModelDataRead model_data_read = 19;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\ModelDataRead $var
     * @return $this
     */
    public function setModelDataRead($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\ModelDataRead::class);
        $this->writeOneof(19, $var);

        return $this;
    }

    /**
     * Routine creation event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.RoutineCreation routine_creation = 16;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\RoutineCreation|null
     */
    public function getRoutineCreation()
    {
        return $this->readOneof(16);
    }

    public function hasRoutineCreation()
    {
        return $this->hasOneof(16);
    }

    /**
     * Routine creation event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.RoutineCreation routine_creation = 16;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\RoutineCreation $var
     * @return $this
     */
    public function setRoutineCreation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\RoutineCreation::class);
        $this->writeOneof(16, $var);

        return $this;
    }

    /**
     * Routine change event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.RoutineChange routine_change = 17;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\RoutineChange|null
     */
    public function getRoutineChange()
    {
        return $this->readOneof(17);
    }

    public function hasRoutineChange()
    {
        return $this->hasOneof(17);
    }

    /**
     * Routine change event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.RoutineChange routine_change = 17;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\RoutineChange $var
     * @return $this
     */
    public function setRoutineChange($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\RoutineChange::class);
        $this->writeOneof(17, $var);

        return $this;
    }

    /**
     * Routine deletion event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.RoutineDeletion routine_deletion = 18;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\RoutineDeletion|null
     */
    public function getRoutineDeletion()
    {
        return $this->readOneof(18);
    }

    public function hasRoutineDeletion()
    {
        return $this->hasOneof(18);
    }

    /**
     * Routine deletion event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.RoutineDeletion routine_deletion = 18;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\RoutineDeletion $var
     * @return $this
     */
    public function setRoutineDeletion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\RoutineDeletion::class);
        $this->writeOneof(18, $var);

        return $this;
    }

    /**
     * Row access policy create event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.RowAccessPolicyCreation row_access_policy_creation = 20;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\RowAccessPolicyCreation|null
     */
    public function getRowAccessPolicyCreation()
    {
        return $this->readOneof(20);
    }

    public function hasRowAccessPolicyCreation()
    {
        return $this->hasOneof(20);
    }

    /**
     * Row access policy create event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.RowAccessPolicyCreation row_access_policy_creation = 20;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\RowAccessPolicyCreation $var
     * @return $this
     */
    public function setRowAccessPolicyCreation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\RowAccessPolicyCreation::class);
        $this->writeOneof(20, $var);

        return $this;
    }

    /**
     * Row access policy change event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.RowAccessPolicyChange row_access_policy_change = 21;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\RowAccessPolicyChange|null
     */
    public function getRowAccessPolicyChange()
    {
        return $this->readOneof(21);
    }

    public function hasRowAccessPolicyChange()
    {
        return $this->hasOneof(21);
    }

    /**
     * Row access policy change event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.RowAccessPolicyChange row_access_policy_change = 21;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\RowAccessPolicyChange $var
     * @return $this
     */
    public function setRowAccessPolicyChange($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\RowAccessPolicyChange::class);
        $this->writeOneof(21, $var);

        return $this;
    }

    /**
     * Row access policy deletion event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.RowAccessPolicyDeletion row_access_policy_deletion = 22;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\RowAccessPolicyDeletion|null
     */
    public function getRowAccessPolicyDeletion()
    {
        return $this->readOneof(22);
    }

    public function hasRowAccessPolicyDeletion()
    {
        return $this->hasOneof(22);
    }

    /**
     * Row access policy deletion event.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.RowAccessPolicyDeletion row_access_policy_deletion = 22;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\RowAccessPolicyDeletion $var
     * @return $this
     */
    public function setRowAccessPolicyDeletion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\RowAccessPolicyDeletion::class);
        $this->writeOneof(22, $var);

        return $this;
    }

    /**
     * Unlink linked dataset from its source dataset event
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.UnlinkDataset unlink_dataset = 25;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\UnlinkDataset|null
     */
    public function getUnlinkDataset()
    {
        return $this->readOneof(25);
    }

    public function hasUnlinkDataset()
    {
        return $this->hasOneof(25);
    }

    /**
     * Unlink linked dataset from its source dataset event
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.UnlinkDataset unlink_dataset = 25;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\UnlinkDataset $var
     * @return $this
     */
    public function setUnlinkDataset($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\UnlinkDataset::class);
        $this->writeOneof(25, $var);

        return $this;
    }

    /**
     * First party (Google) application specific metadata.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.FirstPartyAppMetadata first_party_app_metadata = 24;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\FirstPartyAppMetadata|null
     */
    public function getFirstPartyAppMetadata()
    {
        return $this->first_party_app_metadata;
    }

    public function hasFirstPartyAppMetadata()
    {
        return isset($this->first_party_app_metadata);
    }

    public function clearFirstPartyAppMetadata()
    {
        unset($this->first_party_app_metadata);
    }

    /**
     * First party (Google) application specific metadata.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.FirstPartyAppMetadata first_party_app_metadata = 24;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\FirstPartyAppMetadata $var
     * @return $this
     */
    public function setFirstPartyAppMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\FirstPartyAppMetadata::class);
        $this->first_party_app_metadata = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getEvent()
    {
        return $this->whichOneof("event");
    }

}
