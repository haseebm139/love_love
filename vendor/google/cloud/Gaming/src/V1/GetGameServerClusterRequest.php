<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1/game_server_clusters.proto

namespace Google\Cloud\Gaming\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for GameServerClustersService.GetGameServerCluster.
 *
 * Generated from protobuf message <code>google.cloud.gaming.v1.GetGameServerClusterRequest</code>
 */
class GetGameServerClusterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the game server cluster to retrieve, in the following form:
     * `projects/{project}/locations/{location}/realms/{realm-id}/gameServerClusters/{cluster}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Optional. View for the returned GameServerCluster objects. When `FULL` is
     * specified, the `cluster_state` field is also returned in the
     * GameServerCluster object, which includes the state of the referenced
     * Kubernetes cluster such as versions and provider info. The default/unset
     * value is GAME_SERVER_CLUSTER_VIEW_UNSPECIFIED, same as BASIC, which does
     * not return the `cluster_state` field.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.GameServerClusterView view = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $view = 0;

    /**
     * @param string $name Required. The name of the game server cluster to retrieve, in the following form:
     *                     `projects/{project}/locations/{location}/realms/{realm-id}/gameServerClusters/{cluster}`. Please see
     *                     {@see GameServerClustersServiceClient::gameServerClusterName()} for help formatting this field.
     *
     * @return \Google\Cloud\Gaming\V1\GetGameServerClusterRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the game server cluster to retrieve, in the following form:
     *           `projects/{project}/locations/{location}/realms/{realm-id}/gameServerClusters/{cluster}`.
     *     @type int $view
     *           Optional. View for the returned GameServerCluster objects. When `FULL` is
     *           specified, the `cluster_state` field is also returned in the
     *           GameServerCluster object, which includes the state of the referenced
     *           Kubernetes cluster such as versions and provider info. The default/unset
     *           value is GAME_SERVER_CLUSTER_VIEW_UNSPECIFIED, same as BASIC, which does
     *           not return the `cluster_state` field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gaming\V1\GameServerClusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the game server cluster to retrieve, in the following form:
     * `projects/{project}/locations/{location}/realms/{realm-id}/gameServerClusters/{cluster}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the game server cluster to retrieve, in the following form:
     * `projects/{project}/locations/{location}/realms/{realm-id}/gameServerClusters/{cluster}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Optional. View for the returned GameServerCluster objects. When `FULL` is
     * specified, the `cluster_state` field is also returned in the
     * GameServerCluster object, which includes the state of the referenced
     * Kubernetes cluster such as versions and provider info. The default/unset
     * value is GAME_SERVER_CLUSTER_VIEW_UNSPECIFIED, same as BASIC, which does
     * not return the `cluster_state` field.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.GameServerClusterView view = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Optional. View for the returned GameServerCluster objects. When `FULL` is
     * specified, the `cluster_state` field is also returned in the
     * GameServerCluster object, which includes the state of the referenced
     * Kubernetes cluster such as versions and provider info. The default/unset
     * value is GAME_SERVER_CLUSTER_VIEW_UNSPECIFIED, same as BASIC, which does
     * not return the `cluster_state` field.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.GameServerClusterView view = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Gaming\V1\GameServerClusterView::class);
        $this->view = $var;

        return $this;
    }

}

