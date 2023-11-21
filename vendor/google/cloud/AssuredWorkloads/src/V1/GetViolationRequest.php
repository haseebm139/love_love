<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/assuredworkloads/v1/assuredworkloads.proto

namespace Google\Cloud\AssuredWorkloads\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for fetching a Workload Violation.
 *
 * Generated from protobuf message <code>google.cloud.assuredworkloads.v1.GetViolationRequest</code>
 */
class GetViolationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Violation to fetch (ie. Violation.name).
     * Format:
     * organizations/{organization}/locations/{location}/workloads/{workload}/violations/{violation}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. The resource name of the Violation to fetch (ie. Violation.name).
     *                     Format:
     *                     organizations/{organization}/locations/{location}/workloads/{workload}/violations/{violation}
     *                     Please see {@see AssuredWorkloadsServiceClient::violationName()} for help formatting this field.
     *
     * @return \Google\Cloud\AssuredWorkloads\V1\GetViolationRequest
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
     *           Required. The resource name of the Violation to fetch (ie. Violation.name).
     *           Format:
     *           organizations/{organization}/locations/{location}/workloads/{workload}/violations/{violation}
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Assuredworkloads\V1\Assuredworkloads::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Violation to fetch (ie. Violation.name).
     * Format:
     * organizations/{organization}/locations/{location}/workloads/{workload}/violations/{violation}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the Violation to fetch (ie. Violation.name).
     * Format:
     * organizations/{organization}/locations/{location}/workloads/{workload}/violations/{violation}
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

}
