<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1\IamPolicyAnalysisQuery;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies roles and/or permissions to analyze, to determine both the
 * identities possessing them and the resources they control. If multiple
 * values are specified, results will include roles or permissions matching
 * any of them. The total number of roles and permissions should be equal or
 * less than 10.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.IamPolicyAnalysisQuery.AccessSelector</code>
 */
class AccessSelector extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The roles to appear in result.
     *
     * Generated from protobuf field <code>repeated string roles = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $roles;
    /**
     * Optional. The permissions to appear in result.
     *
     * Generated from protobuf field <code>repeated string permissions = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $permissions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $roles
     *           Optional. The roles to appear in result.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $permissions
     *           Optional. The permissions to appear in result.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The roles to appear in result.
     *
     * Generated from protobuf field <code>repeated string roles = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Optional. The roles to appear in result.
     *
     * Generated from protobuf field <code>repeated string roles = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRoles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->roles = $arr;

        return $this;
    }

    /**
     * Optional. The permissions to appear in result.
     *
     * Generated from protobuf field <code>repeated string permissions = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Optional. The permissions to appear in result.
     *
     * Generated from protobuf field <code>repeated string permissions = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPermissions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->permissions = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccessSelector::class, \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery_AccessSelector::class);

