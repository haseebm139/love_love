<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/publishing/v1/publisher.proto

namespace Google\Cloud\Eventarc\Publishing\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for the PublishChannelConnectionEvents method.
 *
 * Generated from protobuf message <code>google.cloud.eventarc.publishing.v1.PublishChannelConnectionEventsRequest</code>
 */
class PublishChannelConnectionEventsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The channel_connection that the events are published from. For example:
     * `projects/{partner_project_id}/locations/{location}/channelConnections/{channel_connection_id}`.
     *
     * Generated from protobuf field <code>string channel_connection = 1;</code>
     */
    private $channel_connection = '';
    /**
     * The CloudEvents v1.0 events to publish. No other types are allowed.
     * If this field is set, then the `text_events` fields must not be set.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any events = 2;</code>
     */
    private $events;
    /**
     * The text representation of events to publish.
     * CloudEvent v1.0 in JSON format is the only allowed type. Refer to
     * https://github.com/cloudevents/spec/blob/v1.0.2/cloudevents/formats/json-format.md
     * for specification.
     * If this field is set, then the `events` fields must not be set.
     *
     * Generated from protobuf field <code>repeated string text_events = 3;</code>
     */
    private $text_events;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $channel_connection
     *           The channel_connection that the events are published from. For example:
     *           `projects/{partner_project_id}/locations/{location}/channelConnections/{channel_connection_id}`.
     *     @type array<\Google\Protobuf\Any>|\Google\Protobuf\Internal\RepeatedField $events
     *           The CloudEvents v1.0 events to publish. No other types are allowed.
     *           If this field is set, then the `text_events` fields must not be set.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $text_events
     *           The text representation of events to publish.
     *           CloudEvent v1.0 in JSON format is the only allowed type. Refer to
     *           https://github.com/cloudevents/spec/blob/v1.0.2/cloudevents/formats/json-format.md
     *           for specification.
     *           If this field is set, then the `events` fields must not be set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Eventarc\Publishing\V1\Publisher::initOnce();
        parent::__construct($data);
    }

    /**
     * The channel_connection that the events are published from. For example:
     * `projects/{partner_project_id}/locations/{location}/channelConnections/{channel_connection_id}`.
     *
     * Generated from protobuf field <code>string channel_connection = 1;</code>
     * @return string
     */
    public function getChannelConnection()
    {
        return $this->channel_connection;
    }

    /**
     * The channel_connection that the events are published from. For example:
     * `projects/{partner_project_id}/locations/{location}/channelConnections/{channel_connection_id}`.
     *
     * Generated from protobuf field <code>string channel_connection = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setChannelConnection($var)
    {
        GPBUtil::checkString($var, True);
        $this->channel_connection = $var;

        return $this;
    }

    /**
     * The CloudEvents v1.0 events to publish. No other types are allowed.
     * If this field is set, then the `text_events` fields must not be set.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any events = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * The CloudEvents v1.0 events to publish. No other types are allowed.
     * If this field is set, then the `text_events` fields must not be set.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any events = 2;</code>
     * @param array<\Google\Protobuf\Any>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Any::class);
        $this->events = $arr;

        return $this;
    }

    /**
     * The text representation of events to publish.
     * CloudEvent v1.0 in JSON format is the only allowed type. Refer to
     * https://github.com/cloudevents/spec/blob/v1.0.2/cloudevents/formats/json-format.md
     * for specification.
     * If this field is set, then the `events` fields must not be set.
     *
     * Generated from protobuf field <code>repeated string text_events = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTextEvents()
    {
        return $this->text_events;
    }

    /**
     * The text representation of events to publish.
     * CloudEvent v1.0 in JSON format is the only allowed type. Refer to
     * https://github.com/cloudevents/spec/blob/v1.0.2/cloudevents/formats/json-format.md
     * for specification.
     * If this field is set, then the `events` fields must not be set.
     *
     * Generated from protobuf field <code>repeated string text_events = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTextEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->text_events = $arr;

        return $this;
    }

}

