<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/fulfillment.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2;

class Fulfillment
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
,google/cloud/dialogflow/v2/fulfillment.protogoogle.cloud.dialogflow.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.proto"�
Fulfillment
name (	B�A
display_name (	B�AX
generic_web_service (29.google.cloud.dialogflow.v2.Fulfillment.GenericWebServiceH 
enabled (B�AF
features (2/.google.cloud.dialogflow.v2.Fulfillment.FeatureB�A�
GenericWebService
uri (	B�A
username (	B�A
password (	B�Ak
request_headers (2M.google.cloud.dialogflow.v2.Fulfillment.GenericWebService.RequestHeadersEntryB�A 
is_cloud_function (B�A5
RequestHeadersEntry
key (	
value (	:8z
FeatureB
type (24.google.cloud.dialogflow.v2.Fulfillment.Feature.Type"+
Type
TYPE_UNSPECIFIED 
	SMALLTALK:��A�
%dialogflow.googleapis.com/Fulfillment$projects/{project}/agent/fulfillment9projects/{project}/locations/{location}/agent/fulfillmentB
fulfillment"T
GetFulfillmentRequest;
name (	B-�A�A\'
%dialogflow.googleapis.com/Fulfillment"�
UpdateFulfillmentRequestA
fulfillment (2\'.google.cloud.dialogflow.v2.FulfillmentB�A4
update_mask (2.google.protobuf.FieldMaskB�A2�
Fulfillments�
GetFulfillment1.google.cloud.dialogflow.v2.GetFulfillmentRequest\'.google.cloud.dialogflow.v2.Fulfillment"m���`\'/v2/{name=projects/*/agent/fulfillment}Z53/v2/{name=projects/*/locations/*/agent/fulfillment}�Aname�
UpdateFulfillment4.google.cloud.dialogflow.v2.UpdateFulfillmentRequest\'.google.cloud.dialogflow.v2.Fulfillment"�����23/v2/{fulfillment.name=projects/*/agent/fulfillment}:fulfillmentZN2?/v2/{fulfillment.name=projects/*/locations/*/agent/fulfillment}:fulfillment�Afulfillment,update_maskx�Adialogflow.googleapis.com�AYhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/dialogflowB�
com.google.cloud.dialogflow.v2BFulfillmentProtoPZ>cloud.google.com/go/dialogflow/apiv2/dialogflowpb;dialogflowpb��DF�Google.Cloud.Dialogflow.V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

