<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/access.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1;

class Access
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
+google/cloud/securitycenter/v1/access.protogoogle.cloud.securitycenter.v1"�
Access
principal_email (	
	caller_ip (	B

user_agent_family (	

user_agent (	
service_name (	
method_name (	
principal_subject (	 
service_account_key_name (	e
service_account_delegation_info	 (2<.google.cloud.securitycenter.v1.ServiceAccountDelegationInfo
	user_name (	"R
ServiceAccountDelegationInfo
principal_email (	
principal_subject (	""
Geolocation
region_code (	B�
"com.google.cloud.securitycenter.v1BAccessProtoPZJcloud.google.com/go/securitycenter/apiv1/securitycenterpb;securitycenterpb�Google.Cloud.SecurityCenter.V1�Google\\Cloud\\SecurityCenter\\V1�!Google::Cloud::SecurityCenter::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}
