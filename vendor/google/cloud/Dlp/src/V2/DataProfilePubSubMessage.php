<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Pub/Sub topic message for a DataProfileAction.PubSubNotification event.
 * To receive a message of protocol buffer schema type, convert the message data
 * to an object of this proto class.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DataProfilePubSubMessage</code>
 */
class DataProfilePubSubMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * If `DetailLevel` is `TABLE_PROFILE` this will be fully populated.
     * Otherwise, if `DetailLevel` is `RESOURCE_NAME`, then only `name` and
     * `full_resource` will be populated.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TableDataProfile profile = 1;</code>
     */
    private $profile = null;
    /**
     * The event that caused the Pub/Sub message to be sent.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileAction.EventType event = 2;</code>
     */
    private $event = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\TableDataProfile $profile
     *           If `DetailLevel` is `TABLE_PROFILE` this will be fully populated.
     *           Otherwise, if `DetailLevel` is `RESOURCE_NAME`, then only `name` and
     *           `full_resource` will be populated.
     *     @type int $event
     *           The event that caused the Pub/Sub message to be sent.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * If `DetailLevel` is `TABLE_PROFILE` this will be fully populated.
     * Otherwise, if `DetailLevel` is `RESOURCE_NAME`, then only `name` and
     * `full_resource` will be populated.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TableDataProfile profile = 1;</code>
     * @return \Google\Cloud\Dlp\V2\TableDataProfile|null
     */
    public function getProfile()
    {
        return $this->profile;
    }

    public function hasProfile()
    {
        return isset($this->profile);
    }

    public function clearProfile()
    {
        unset($this->profile);
    }

    /**
     * If `DetailLevel` is `TABLE_PROFILE` this will be fully populated.
     * Otherwise, if `DetailLevel` is `RESOURCE_NAME`, then only `name` and
     * `full_resource` will be populated.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TableDataProfile profile = 1;</code>
     * @param \Google\Cloud\Dlp\V2\TableDataProfile $var
     * @return $this
     */
    public function setProfile($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\TableDataProfile::class);
        $this->profile = $var;

        return $this;
    }

    /**
     * The event that caused the Pub/Sub message to be sent.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileAction.EventType event = 2;</code>
     * @return int
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * The event that caused the Pub/Sub message to be sent.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileAction.EventType event = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEvent($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\DataProfileAction\EventType::class);
        $this->event = $var;

        return $this;
    }

}

