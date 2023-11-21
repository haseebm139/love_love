<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\UsableSubnetwork;

use UnexpectedValueException;

/**
 * The purpose of the resource. This field can be either PRIVATE, REGIONAL_MANAGED_PROXY, PRIVATE_SERVICE_CONNECT, or INTERNAL_HTTPS_LOAD_BALANCER. PRIVATE is the default purpose for user-created subnets or subnets that are automatically created in auto mode networks. A subnet with purpose set to REGIONAL_MANAGED_PROXY is a user-created subnetwork that is reserved for regional Envoy-based load balancers. A subnet with purpose set to PRIVATE_SERVICE_CONNECT is used to publish services using Private Service Connect. A subnet with purpose set to INTERNAL_HTTPS_LOAD_BALANCER is a proxy-only subnet that can be used only by regional internal HTTP(S) load balancers. Note that REGIONAL_MANAGED_PROXY is the preferred setting for all regional Envoy load balancers. If unspecified, the subnet purpose defaults to PRIVATE. The enableFlowLogs field isn't supported if the subnet purpose field is set to REGIONAL_MANAGED_PROXY.
 *
 * Protobuf type <code>google.cloud.compute.v1.UsableSubnetwork.Purpose</code>
 */
class Purpose
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_PURPOSE = 0;</code>
     */
    const UNDEFINED_PURPOSE = 0;
    /**
     * Subnet reserved for Internal HTTP(S) Load Balancing.
     *
     * Generated from protobuf enum <code>INTERNAL_HTTPS_LOAD_BALANCER = 248748889;</code>
     */
    const INTERNAL_HTTPS_LOAD_BALANCER = 248748889;
    /**
     * Regular user created or automatically created subnet.
     *
     * Generated from protobuf enum <code>PRIVATE = 403485027;</code>
     */
    const PBPRIVATE = 403485027;
    /**
     * Regular user created or automatically created subnet.
     *
     * Generated from protobuf enum <code>PRIVATE_RFC_1918 = 254902107;</code>
     */
    const PRIVATE_RFC_1918 = 254902107;
    /**
     * Subnetworks created for Private Service Connect in the producer network.
     *
     * Generated from protobuf enum <code>PRIVATE_SERVICE_CONNECT = 48134724;</code>
     */
    const PRIVATE_SERVICE_CONNECT = 48134724;
    /**
     * Subnetwork used for Regional Internal/External HTTP(S) Load Balancing.
     *
     * Generated from protobuf enum <code>REGIONAL_MANAGED_PROXY = 153049966;</code>
     */
    const REGIONAL_MANAGED_PROXY = 153049966;

    private static $valueToName = [
        self::UNDEFINED_PURPOSE => 'UNDEFINED_PURPOSE',
        self::INTERNAL_HTTPS_LOAD_BALANCER => 'INTERNAL_HTTPS_LOAD_BALANCER',
        self::PBPRIVATE => 'PRIVATE',
        self::PRIVATE_RFC_1918 => 'PRIVATE_RFC_1918',
        self::PRIVATE_SERVICE_CONNECT => 'PRIVATE_SERVICE_CONNECT',
        self::REGIONAL_MANAGED_PROXY => 'REGIONAL_MANAGED_PROXY',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}


