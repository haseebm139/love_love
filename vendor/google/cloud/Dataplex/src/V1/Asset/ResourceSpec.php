<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/resources.proto

namespace Google\Cloud\Dataplex\V1\Asset;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Identifies the cloud resource that is referenced by this asset.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Asset.ResourceSpec</code>
 */
class ResourceSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. Relative name of the cloud resource that contains the data
     * that is being managed within a lake. For example:
     *   `projects/{project_number}/buckets/{bucket_id}`
     *   `projects/{project_number}/datasets/{dataset_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $name = '';
    /**
     * Required. Immutable. Type of resource.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Asset.ResourceSpec.Type type = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $type = 0;
    /**
     * Optional. Determines how read permissions are handled for each asset and
     * their associated tables. Only available to storage buckets assets.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Asset.ResourceSpec.AccessMode read_access_mode = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $read_access_mode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Immutable. Relative name of the cloud resource that contains the data
     *           that is being managed within a lake. For example:
     *             `projects/{project_number}/buckets/{bucket_id}`
     *             `projects/{project_number}/datasets/{dataset_id}`
     *     @type int $type
     *           Required. Immutable. Type of resource.
     *     @type int $read_access_mode
     *           Optional. Determines how read permissions are handled for each asset and
     *           their associated tables. Only available to storage buckets assets.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. Relative name of the cloud resource that contains the data
     * that is being managed within a lake. For example:
     *   `projects/{project_number}/buckets/{bucket_id}`
     *   `projects/{project_number}/datasets/{dataset_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. Relative name of the cloud resource that contains the data
     * that is being managed within a lake. For example:
     *   `projects/{project_number}/buckets/{bucket_id}`
     *   `projects/{project_number}/datasets/{dataset_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. Immutable. Type of resource.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Asset.ResourceSpec.Type type = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. Immutable. Type of resource.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Asset.ResourceSpec.Type type = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\Asset\ResourceSpec\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Optional. Determines how read permissions are handled for each asset and
     * their associated tables. Only available to storage buckets assets.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Asset.ResourceSpec.AccessMode read_access_mode = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getReadAccessMode()
    {
        return $this->read_access_mode;
    }

    /**
     * Optional. Determines how read permissions are handled for each asset and
     * their associated tables. Only available to storage buckets assets.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Asset.ResourceSpec.AccessMode read_access_mode = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setReadAccessMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\Asset\ResourceSpec\AccessMode::class);
        $this->read_access_mode = $var;

        return $this;
    }

}


