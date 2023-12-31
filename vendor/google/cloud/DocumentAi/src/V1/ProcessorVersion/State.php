<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/processor.proto

namespace Google\Cloud\DocumentAI\V1\ProcessorVersion;

use UnexpectedValueException;

/**
 * The possible states of the processor version.
 *
 * Protobuf type <code>google.cloud.documentai.v1.ProcessorVersion.State</code>
 */
class State
{
    /**
     * The processor version is in an unspecified state.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The processor version is deployed and can be used for processing.
     *
     * Generated from protobuf enum <code>DEPLOYED = 1;</code>
     */
    const DEPLOYED = 1;
    /**
     * The processor version is being deployed.
     *
     * Generated from protobuf enum <code>DEPLOYING = 2;</code>
     */
    const DEPLOYING = 2;
    /**
     * The processor version is not deployed and cannot be used for processing.
     *
     * Generated from protobuf enum <code>UNDEPLOYED = 3;</code>
     */
    const UNDEPLOYED = 3;
    /**
     * The processor version is being undeployed.
     *
     * Generated from protobuf enum <code>UNDEPLOYING = 4;</code>
     */
    const UNDEPLOYING = 4;
    /**
     * The processor version is being created.
     *
     * Generated from protobuf enum <code>CREATING = 5;</code>
     */
    const CREATING = 5;
    /**
     * The processor version is being deleted.
     *
     * Generated from protobuf enum <code>DELETING = 6;</code>
     */
    const DELETING = 6;
    /**
     * The processor version failed and is in an indeterminate state.
     *
     * Generated from protobuf enum <code>FAILED = 7;</code>
     */
    const FAILED = 7;
    /**
     * The processor version is being imported.
     *
     * Generated from protobuf enum <code>IMPORTING = 8;</code>
     */
    const IMPORTING = 8;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::DEPLOYED => 'DEPLOYED',
        self::DEPLOYING => 'DEPLOYING',
        self::UNDEPLOYED => 'UNDEPLOYED',
        self::UNDEPLOYING => 'UNDEPLOYING',
        self::CREATING => 'CREATING',
        self::DELETING => 'DELETING',
        self::FAILED => 'FAILED',
        self::IMPORTING => 'IMPORTING',
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
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


