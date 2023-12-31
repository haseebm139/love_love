<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A resource that contains a URI to which a data file can be uploaded.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.UploadFileInfo</code>
 */
class UploadFileInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Upload URI for the file.
     *
     * Generated from protobuf field <code>string signed_uri = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $signed_uri = '';
    /**
     * Output only. The headers that were used to sign the URI.
     *
     * Generated from protobuf field <code>map<string, string> headers = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $headers;
    /**
     * Output only. Expiration time of the upload URI.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp uri_expiration_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uri_expiration_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $signed_uri
     *           Output only. Upload URI for the file.
     *     @type array|\Google\Protobuf\Internal\MapField $headers
     *           Output only. The headers that were used to sign the URI.
     *     @type \Google\Protobuf\Timestamp $uri_expiration_time
     *           Output only. Expiration time of the upload URI.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Upload URI for the file.
     *
     * Generated from protobuf field <code>string signed_uri = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getSignedUri()
    {
        return $this->signed_uri;
    }

    /**
     * Output only. Upload URI for the file.
     *
     * Generated from protobuf field <code>string signed_uri = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setSignedUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->signed_uri = $var;

        return $this;
    }

    /**
     * Output only. The headers that were used to sign the URI.
     *
     * Generated from protobuf field <code>map<string, string> headers = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Output only. The headers that were used to sign the URI.
     *
     * Generated from protobuf field <code>map<string, string> headers = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setHeaders($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->headers = $arr;

        return $this;
    }

    /**
     * Output only. Expiration time of the upload URI.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp uri_expiration_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUriExpirationTime()
    {
        return $this->uri_expiration_time;
    }

    public function hasUriExpirationTime()
    {
        return isset($this->uri_expiration_time);
    }

    public function clearUriExpirationTime()
    {
        unset($this->uri_expiration_time);
    }

    /**
     * Output only. Expiration time of the upload URI.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp uri_expiration_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUriExpirationTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->uri_expiration_time = $var;

        return $this;
    }

}

