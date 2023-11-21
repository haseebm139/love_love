<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/repository.proto

namespace Google\Cloud\ArtifactRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to create a new repository.
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1.CreateRepositoryRequest</code>
 */
class CreateRepositoryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the parent resource where the repository will be created.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * The repository id to use for this repository.
     *
     * Generated from protobuf field <code>string repository_id = 2;</code>
     */
    private $repository_id = '';
    /**
     * The repository to be created.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.Repository repository = 3;</code>
     */
    private $repository = null;

    /**
     * @param string                                       $parent       Required. The name of the parent resource where the repository will be created. Please see
     *                                                                   {@see ArtifactRegistryClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\ArtifactRegistry\V1\Repository $repository   The repository to be created.
     * @param string                                       $repositoryId The repository id to use for this repository.
     *
     * @return \Google\Cloud\ArtifactRegistry\V1\CreateRepositoryRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\ArtifactRegistry\V1\Repository $repository, string $repositoryId): self
    {
        return (new self())
            ->setParent($parent)
            ->setRepository($repository)
            ->setRepositoryId($repositoryId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the parent resource where the repository will be created.
     *     @type string $repository_id
     *           The repository id to use for this repository.
     *     @type \Google\Cloud\ArtifactRegistry\V1\Repository $repository
     *           The repository to be created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1\Repository::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the parent resource where the repository will be created.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the parent resource where the repository will be created.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The repository id to use for this repository.
     *
     * Generated from protobuf field <code>string repository_id = 2;</code>
     * @return string
     */
    public function getRepositoryId()
    {
        return $this->repository_id;
    }

    /**
     * The repository id to use for this repository.
     *
     * Generated from protobuf field <code>string repository_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRepositoryId($var)
    {
        GPBUtil::checkString($var, True);
        $this->repository_id = $var;

        return $this;
    }

    /**
     * The repository to be created.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.Repository repository = 3;</code>
     * @return \Google\Cloud\ArtifactRegistry\V1\Repository|null
     */
    public function getRepository()
    {
        return $this->repository;
    }

    public function hasRepository()
    {
        return isset($this->repository);
    }

    public function clearRepository()
    {
        unset($this->repository);
    }

    /**
     * The repository to be created.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.Repository repository = 3;</code>
     * @param \Google\Cloud\ArtifactRegistry\V1\Repository $var
     * @return $this
     */
    public function setRepository($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ArtifactRegistry\V1\Repository::class);
        $this->repository = $var;

        return $this;
    }

}

