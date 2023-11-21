<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1beta1/membership.proto

namespace Google\Cloud\GkeHub\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ResourceOptions represent options for Kubernetes resource generation.
 *
 * Generated from protobuf message <code>google.cloud.gkehub.v1beta1.ResourceOptions</code>
 */
class ResourceOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The Connect agent version to use for connect_resources. Defaults
     * to the latest GKE Connect version. The version must be a currently
     * supported version, obsolete versions will be rejected.
     *
     * Generated from protobuf field <code>string connect_version = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $connect_version = '';
    /**
     * Optional. Use `apiextensions/v1beta1` instead of `apiextensions/v1` for
     * CustomResourceDefinition resources.
     * This option should be set for clusters with Kubernetes apiserver versions
     * <1.16.
     *
     * Generated from protobuf field <code>bool v1beta1_crd = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $v1beta1_crd = false;
    /**
     * Optional. Major version of the Kubernetes cluster. This is only used to
     * determine which version to use for the CustomResourceDefinition resources,
     * `apiextensions/v1beta1` or`apiextensions/v1`.
     *
     * Generated from protobuf field <code>string k8s_version = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $k8s_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $connect_version
     *           Optional. The Connect agent version to use for connect_resources. Defaults
     *           to the latest GKE Connect version. The version must be a currently
     *           supported version, obsolete versions will be rejected.
     *     @type bool $v1beta1_crd
     *           Optional. Use `apiextensions/v1beta1` instead of `apiextensions/v1` for
     *           CustomResourceDefinition resources.
     *           This option should be set for clusters with Kubernetes apiserver versions
     *           <1.16.
     *     @type string $k8s_version
     *           Optional. Major version of the Kubernetes cluster. This is only used to
     *           determine which version to use for the CustomResourceDefinition resources,
     *           `apiextensions/v1beta1` or`apiextensions/v1`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1Beta1\Membership::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The Connect agent version to use for connect_resources. Defaults
     * to the latest GKE Connect version. The version must be a currently
     * supported version, obsolete versions will be rejected.
     *
     * Generated from protobuf field <code>string connect_version = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getConnectVersion()
    {
        return $this->connect_version;
    }

    /**
     * Optional. The Connect agent version to use for connect_resources. Defaults
     * to the latest GKE Connect version. The version must be a currently
     * supported version, obsolete versions will be rejected.
     *
     * Generated from protobuf field <code>string connect_version = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setConnectVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->connect_version = $var;

        return $this;
    }

    /**
     * Optional. Use `apiextensions/v1beta1` instead of `apiextensions/v1` for
     * CustomResourceDefinition resources.
     * This option should be set for clusters with Kubernetes apiserver versions
     * <1.16.
     *
     * Generated from protobuf field <code>bool v1beta1_crd = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getV1Beta1Crd()
    {
        return $this->v1beta1_crd;
    }

    /**
     * Optional. Use `apiextensions/v1beta1` instead of `apiextensions/v1` for
     * CustomResourceDefinition resources.
     * This option should be set for clusters with Kubernetes apiserver versions
     * <1.16.
     *
     * Generated from protobuf field <code>bool v1beta1_crd = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setV1Beta1Crd($var)
    {
        GPBUtil::checkBool($var);
        $this->v1beta1_crd = $var;

        return $this;
    }

    /**
     * Optional. Major version of the Kubernetes cluster. This is only used to
     * determine which version to use for the CustomResourceDefinition resources,
     * `apiextensions/v1beta1` or`apiextensions/v1`.
     *
     * Generated from protobuf field <code>string k8s_version = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getK8SVersion()
    {
        return $this->k8s_version;
    }

    /**
     * Optional. Major version of the Kubernetes cluster. This is only used to
     * determine which version to use for the CustomResourceDefinition resources,
     * `apiextensions/v1beta1` or`apiextensions/v1`.
     *
     * Generated from protobuf field <code>string k8s_version = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setK8SVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->k8s_version = $var;

        return $this;
    }

}

