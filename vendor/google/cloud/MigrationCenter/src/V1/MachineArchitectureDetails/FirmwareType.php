<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1\MachineArchitectureDetails;

use UnexpectedValueException;

/**
 * Firmware type.
 *
 * Protobuf type <code>google.cloud.migrationcenter.v1.MachineArchitectureDetails.FirmwareType</code>
 */
class FirmwareType
{
    /**
     * Unspecified or unknown.
     *
     * Generated from protobuf enum <code>FIRMWARE_TYPE_UNSPECIFIED = 0;</code>
     */
    const FIRMWARE_TYPE_UNSPECIFIED = 0;
    /**
     * BIOS firmware.
     *
     * Generated from protobuf enum <code>BIOS = 1;</code>
     */
    const BIOS = 1;
    /**
     * EFI firmware.
     *
     * Generated from protobuf enum <code>EFI = 2;</code>
     */
    const EFI = 2;

    private static $valueToName = [
        self::FIRMWARE_TYPE_UNSPECIFIED => 'FIRMWARE_TYPE_UNSPECIFIED',
        self::BIOS => 'BIOS',
        self::EFI => 'EFI',
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


