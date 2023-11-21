<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/patch_deployments.proto

namespace Google\Cloud\OsConfig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for updating a patch deployment.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.UpdatePatchDeploymentRequest</code>
 */
class UpdatePatchDeploymentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The patch deployment to Update.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchDeployment patch_deployment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $patch_deployment = null;
    /**
     * Optional. Field mask that controls which fields of the patch deployment
     * should be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $update_mask = null;

    /**
     * @param \Google\Cloud\OsConfig\V1\PatchDeployment $patchDeployment Required. The patch deployment to Update.
     * @param \Google\Protobuf\FieldMask                $updateMask      Optional. Field mask that controls which fields of the patch deployment
     *                                                                   should be updated.
     *
     * @return \Google\Cloud\OsConfig\V1\UpdatePatchDeploymentRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\OsConfig\V1\PatchDeployment $patchDeployment, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setPatchDeployment($patchDeployment)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\OsConfig\V1\PatchDeployment $patch_deployment
     *           Required. The patch deployment to Update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. Field mask that controls which fields of the patch deployment
     *           should be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\PatchDeployments::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The patch deployment to Update.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchDeployment patch_deployment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\OsConfig\V1\PatchDeployment|null
     */
    public function getPatchDeployment()
    {
        return $this->patch_deployment;
    }

    public function hasPatchDeployment()
    {
        return isset($this->patch_deployment);
    }

    public function clearPatchDeployment()
    {
        unset($this->patch_deployment);
    }

    /**
     * Required. The patch deployment to Update.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchDeployment patch_deployment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\OsConfig\V1\PatchDeployment $var
     * @return $this
     */
    public function setPatchDeployment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\PatchDeployment::class);
        $this->patch_deployment = $var;

        return $this;
    }

    /**
     * Optional. Field mask that controls which fields of the patch deployment
     * should be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Optional. Field mask that controls which fields of the patch deployment
     * should be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}
