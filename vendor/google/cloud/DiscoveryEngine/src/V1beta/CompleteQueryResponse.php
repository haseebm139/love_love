<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/completion_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [CompletionService.CompleteQuery][google.cloud.discoveryengine.v1beta.CompletionService.CompleteQuery]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.CompleteQueryResponse</code>
 */
class CompleteQueryResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Results of the matched query suggestions. The result list is ordered and
     * the first result is a top suggestion.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.CompleteQueryResponse.QuerySuggestion query_suggestions = 1;</code>
     */
    private $query_suggestions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DiscoveryEngine\V1beta\CompleteQueryResponse\QuerySuggestion>|\Google\Protobuf\Internal\RepeatedField $query_suggestions
     *           Results of the matched query suggestions. The result list is ordered and
     *           the first result is a top suggestion.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\CompletionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Results of the matched query suggestions. The result list is ordered and
     * the first result is a top suggestion.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.CompleteQueryResponse.QuerySuggestion query_suggestions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQuerySuggestions()
    {
        return $this->query_suggestions;
    }

    /**
     * Results of the matched query suggestions. The result list is ordered and
     * the first result is a top suggestion.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.CompleteQueryResponse.QuerySuggestion query_suggestions = 1;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1beta\CompleteQueryResponse\QuerySuggestion>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQuerySuggestions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1beta\CompleteQueryResponse\QuerySuggestion::class);
        $this->query_suggestions = $arr;

        return $this;
    }

}

