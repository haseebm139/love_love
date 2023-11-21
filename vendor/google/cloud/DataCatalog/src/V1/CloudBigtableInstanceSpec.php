<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specification that applies to Instance
 * entries that are part of `CLOUD_BIGTABLE` system.
 * (user_specified_type)
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.CloudBigtableInstanceSpec</code>
 */
class CloudBigtableInstanceSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of clusters for the Instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.CloudBigtableInstanceSpec.CloudBigtableClusterSpec cloud_bigtable_cluster_specs = 1;</code>
     */
    private $cloud_bigtable_cluster_specs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DataCatalog\V1\CloudBigtableInstanceSpec\CloudBigtableClusterSpec>|\Google\Protobuf\Internal\RepeatedField $cloud_bigtable_cluster_specs
     *           The list of clusters for the Instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of clusters for the Instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.CloudBigtableInstanceSpec.CloudBigtableClusterSpec cloud_bigtable_cluster_specs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCloudBigtableClusterSpecs()
    {
        return $this->cloud_bigtable_cluster_specs;
    }

    /**
     * The list of clusters for the Instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.CloudBigtableInstanceSpec.CloudBigtableClusterSpec cloud_bigtable_cluster_specs = 1;</code>
     * @param array<\Google\Cloud\DataCatalog\V1\CloudBigtableInstanceSpec\CloudBigtableClusterSpec>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCloudBigtableClusterSpecs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataCatalog\V1\CloudBigtableInstanceSpec\CloudBigtableClusterSpec::class);
        $this->cloud_bigtable_cluster_specs = $arr;

        return $this;
    }

}

