<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace Google\Cloud\Dlp\V2\CustomInfoType\DetectionRule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for specifying an adjustment to the likelihood of a finding as
 * part of a detection rule.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.CustomInfoType.DetectionRule.LikelihoodAdjustment</code>
 */
class LikelihoodAdjustment extends \Google\Protobuf\Internal\Message
{
    protected $adjustment;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $fixed_likelihood
     *           Set the likelihood of a finding to a fixed value.
     *     @type int $relative_likelihood
     *           Increase or decrease the likelihood by the specified number of
     *           levels. For example, if a finding would be `POSSIBLE` without the
     *           detection rule and `relative_likelihood` is 1, then it is upgraded to
     *           `LIKELY`, while a value of -1 would downgrade it to `UNLIKELY`.
     *           Likelihood may never drop below `VERY_UNLIKELY` or exceed
     *           `VERY_LIKELY`, so applying an adjustment of 1 followed by an
     *           adjustment of -1 when base likelihood is `VERY_LIKELY` will result in
     *           a final likelihood of `LIKELY`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * Set the likelihood of a finding to a fixed value.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Likelihood fixed_likelihood = 1;</code>
     * @return int
     */
    public function getFixedLikelihood()
    {
        return $this->readOneof(1);
    }

    public function hasFixedLikelihood()
    {
        return $this->hasOneof(1);
    }

    /**
     * Set the likelihood of a finding to a fixed value.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Likelihood fixed_likelihood = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setFixedLikelihood($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\Likelihood::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Increase or decrease the likelihood by the specified number of
     * levels. For example, if a finding would be `POSSIBLE` without the
     * detection rule and `relative_likelihood` is 1, then it is upgraded to
     * `LIKELY`, while a value of -1 would downgrade it to `UNLIKELY`.
     * Likelihood may never drop below `VERY_UNLIKELY` or exceed
     * `VERY_LIKELY`, so applying an adjustment of 1 followed by an
     * adjustment of -1 when base likelihood is `VERY_LIKELY` will result in
     * a final likelihood of `LIKELY`.
     *
     * Generated from protobuf field <code>int32 relative_likelihood = 2;</code>
     * @return int
     */
    public function getRelativeLikelihood()
    {
        return $this->readOneof(2);
    }

    public function hasRelativeLikelihood()
    {
        return $this->hasOneof(2);
    }

    /**
     * Increase or decrease the likelihood by the specified number of
     * levels. For example, if a finding would be `POSSIBLE` without the
     * detection rule and `relative_likelihood` is 1, then it is upgraded to
     * `LIKELY`, while a value of -1 would downgrade it to `UNLIKELY`.
     * Likelihood may never drop below `VERY_UNLIKELY` or exceed
     * `VERY_LIKELY`, so applying an adjustment of 1 followed by an
     * adjustment of -1 when base likelihood is `VERY_LIKELY` will result in
     * a final likelihood of `LIKELY`.
     *
     * Generated from protobuf field <code>int32 relative_likelihood = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRelativeLikelihood($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAdjustment()
    {
        return $this->whichOneof("adjustment");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LikelihoodAdjustment::class, \Google\Cloud\Dlp\V2\CustomInfoType_DetectionRule_LikelihoodAdjustment::class);

