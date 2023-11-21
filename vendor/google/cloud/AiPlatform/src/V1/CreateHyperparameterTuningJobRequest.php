<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/job_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [JobService.CreateHyperparameterTuningJob][google.cloud.aiplatform.v1.JobService.CreateHyperparameterTuningJob].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CreateHyperparameterTuningJobRequest</code>
 */
class CreateHyperparameterTuningJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Location to create the
     * HyperparameterTuningJob in. Format:
     * `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The HyperparameterTuningJob to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.HyperparameterTuningJob hyperparameter_tuning_job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $hyperparameter_tuning_job = null;

    /**
     * @param string                                              $parent                  Required. The resource name of the Location to create the
     *                                                                                     HyperparameterTuningJob in. Format:
     *                                                                                     `projects/{project}/locations/{location}`
     *                                                                                     Please see {@see JobServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\AIPlatform\V1\HyperparameterTuningJob $hyperparameterTuningJob Required. The HyperparameterTuningJob to create.
     *
     * @return \Google\Cloud\AIPlatform\V1\CreateHyperparameterTuningJobRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\AIPlatform\V1\HyperparameterTuningJob $hyperparameterTuningJob): self
    {
        return (new self())
            ->setParent($parent)
            ->setHyperparameterTuningJob($hyperparameterTuningJob);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the Location to create the
     *           HyperparameterTuningJob in. Format:
     *           `projects/{project}/locations/{location}`
     *     @type \Google\Cloud\AIPlatform\V1\HyperparameterTuningJob $hyperparameter_tuning_job
     *           Required. The HyperparameterTuningJob to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\JobService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Location to create the
     * HyperparameterTuningJob in. Format:
     * `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the Location to create the
     * HyperparameterTuningJob in. Format:
     * `projects/{project}/locations/{location}`
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
     * Required. The HyperparameterTuningJob to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.HyperparameterTuningJob hyperparameter_tuning_job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\HyperparameterTuningJob|null
     */
    public function getHyperparameterTuningJob()
    {
        return $this->hyperparameter_tuning_job;
    }

    public function hasHyperparameterTuningJob()
    {
        return isset($this->hyperparameter_tuning_job);
    }

    public function clearHyperparameterTuningJob()
    {
        unset($this->hyperparameter_tuning_job);
    }

    /**
     * Required. The HyperparameterTuningJob to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.HyperparameterTuningJob hyperparameter_tuning_job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\HyperparameterTuningJob $var
     * @return $this
     */
    public function setHyperparameterTuningJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\HyperparameterTuningJob::class);
        $this->hyperparameter_tuning_job = $var;

        return $this;
    }

}

