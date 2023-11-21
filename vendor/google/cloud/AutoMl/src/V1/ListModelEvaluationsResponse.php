<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/service.proto

namespace Google\Cloud\AutoMl\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [AutoMl.ListModelEvaluations][google.cloud.automl.v1.AutoMl.ListModelEvaluations].
 *
 * Generated from protobuf message <code>google.cloud.automl.v1.ListModelEvaluationsResponse</code>
 */
class ListModelEvaluationsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of model evaluations in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1.ModelEvaluation model_evaluation = 1;</code>
     */
    private $model_evaluation;
    /**
     * A token to retrieve next page of results.
     * Pass to the [ListModelEvaluationsRequest.page_token][google.cloud.automl.v1.ListModelEvaluationsRequest.page_token] field of a new
     * [AutoMl.ListModelEvaluations][google.cloud.automl.v1.AutoMl.ListModelEvaluations] request to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AutoMl\V1\ModelEvaluation>|\Google\Protobuf\Internal\RepeatedField $model_evaluation
     *           List of model evaluations in the requested page.
     *     @type string $next_page_token
     *           A token to retrieve next page of results.
     *           Pass to the [ListModelEvaluationsRequest.page_token][google.cloud.automl.v1.ListModelEvaluationsRequest.page_token] field of a new
     *           [AutoMl.ListModelEvaluations][google.cloud.automl.v1.AutoMl.ListModelEvaluations] request to obtain that page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * List of model evaluations in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1.ModelEvaluation model_evaluation = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getModelEvaluation()
    {
        return $this->model_evaluation;
    }

    /**
     * List of model evaluations in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1.ModelEvaluation model_evaluation = 1;</code>
     * @param array<\Google\Cloud\AutoMl\V1\ModelEvaluation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setModelEvaluation($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AutoMl\V1\ModelEvaluation::class);
        $this->model_evaluation = $arr;

        return $this;
    }

    /**
     * A token to retrieve next page of results.
     * Pass to the [ListModelEvaluationsRequest.page_token][google.cloud.automl.v1.ListModelEvaluationsRequest.page_token] field of a new
     * [AutoMl.ListModelEvaluations][google.cloud.automl.v1.AutoMl.ListModelEvaluations] request to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve next page of results.
     * Pass to the [ListModelEvaluationsRequest.page_token][google.cloud.automl.v1.ListModelEvaluationsRequest.page_token] field of a new
     * [AutoMl.ListModelEvaluations][google.cloud.automl.v1.AutoMl.ListModelEvaluations] request to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

