<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/confidentialcomputing/v1/service.proto

namespace Google\Cloud\ConfidentialComputing\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A response once an attestation has been successfully verified, containing a
 * signed OIDC token.
 *
 * Generated from protobuf message <code>google.cloud.confidentialcomputing.v1.VerifyAttestationResponse</code>
 */
class VerifyAttestationResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Same as claims_token, but as a string.
     *
     * Generated from protobuf field <code>string oidc_claims_token = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $oidc_claims_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $oidc_claims_token
     *           Output only. Same as claims_token, but as a string.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Confidentialcomputing\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Same as claims_token, but as a string.
     *
     * Generated from protobuf field <code>string oidc_claims_token = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getOidcClaimsToken()
    {
        return $this->oidc_claims_token;
    }

    /**
     * Output only. Same as claims_token, but as a string.
     *
     * Generated from protobuf field <code>string oidc_claims_token = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setOidcClaimsToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->oidc_claims_token = $var;

        return $this;
    }

}

