<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/data.proto

namespace Google\Cloud\Bigtable\V2\RowFilter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A RowFilter which sends each row to each of several component
 * RowFilters and interleaves the results.
 *
 * Generated from protobuf message <code>google.bigtable.v2.RowFilter.Interleave</code>
 */
class Interleave extends \Google\Protobuf\Internal\Message
{
    /**
     * The elements of "filters" all process a copy of the input row, and the
     * results are pooled, sorted, and combined into a single output row.
     * If multiple cells are produced with the same column and timestamp,
     * they will all appear in the output row in an unspecified mutual order.
     * Consider the following example, with three filters:
     *                                  input row
     *                                      |
     *            -----------------------------------------------------
     *            |                         |                         |
     *           f(0)                      f(1)                      f(2)
     *            |                         |                         |
     *     1: foo,bar,10,x             foo,bar,10,z              far,bar,7,a
     *     2: foo,blah,11,z            far,blah,5,x              far,blah,5,x
     *            |                         |                         |
     *            -----------------------------------------------------
     *                                      |
     *     1:                      foo,bar,10,z   // could have switched with #2
     *     2:                      foo,bar,10,x   // could have switched with #1
     *     3:                      foo,blah,11,z
     *     4:                      far,bar,7,a
     *     5:                      far,blah,5,x   // identical to #6
     *     6:                      far,blah,5,x   // identical to #5
     * All interleaved filters are executed atomically.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v2.RowFilter filters = 1;</code>
     */
    private $filters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Bigtable\V2\RowFilter>|\Google\Protobuf\Internal\RepeatedField $filters
     *           The elements of "filters" all process a copy of the input row, and the
     *           results are pooled, sorted, and combined into a single output row.
     *           If multiple cells are produced with the same column and timestamp,
     *           they will all appear in the output row in an unspecified mutual order.
     *           Consider the following example, with three filters:
     *                                            input row
     *                                                |
     *                      -----------------------------------------------------
     *                      |                         |                         |
     *                     f(0)                      f(1)                      f(2)
     *                      |                         |                         |
     *               1: foo,bar,10,x             foo,bar,10,z              far,bar,7,a
     *               2: foo,blah,11,z            far,blah,5,x              far,blah,5,x
     *                      |                         |                         |
     *                      -----------------------------------------------------
     *                                                |
     *               1:                      foo,bar,10,z   // could have switched with #2
     *               2:                      foo,bar,10,x   // could have switched with #1
     *               3:                      foo,blah,11,z
     *               4:                      far,bar,7,a
     *               5:                      far,blah,5,x   // identical to #6
     *               6:                      far,blah,5,x   // identical to #5
     *           All interleaved filters are executed atomically.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V2\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * The elements of "filters" all process a copy of the input row, and the
     * results are pooled, sorted, and combined into a single output row.
     * If multiple cells are produced with the same column and timestamp,
     * they will all appear in the output row in an unspecified mutual order.
     * Consider the following example, with three filters:
     *                                  input row
     *                                      |
     *            -----------------------------------------------------
     *            |                         |                         |
     *           f(0)                      f(1)                      f(2)
     *            |                         |                         |
     *     1: foo,bar,10,x             foo,bar,10,z              far,bar,7,a
     *     2: foo,blah,11,z            far,blah,5,x              far,blah,5,x
     *            |                         |                         |
     *            -----------------------------------------------------
     *                                      |
     *     1:                      foo,bar,10,z   // could have switched with #2
     *     2:                      foo,bar,10,x   // could have switched with #1
     *     3:                      foo,blah,11,z
     *     4:                      far,bar,7,a
     *     5:                      far,blah,5,x   // identical to #6
     *     6:                      far,blah,5,x   // identical to #5
     * All interleaved filters are executed atomically.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v2.RowFilter filters = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * The elements of "filters" all process a copy of the input row, and the
     * results are pooled, sorted, and combined into a single output row.
     * If multiple cells are produced with the same column and timestamp,
     * they will all appear in the output row in an unspecified mutual order.
     * Consider the following example, with three filters:
     *                                  input row
     *                                      |
     *            -----------------------------------------------------
     *            |                         |                         |
     *           f(0)                      f(1)                      f(2)
     *            |                         |                         |
     *     1: foo,bar,10,x             foo,bar,10,z              far,bar,7,a
     *     2: foo,blah,11,z            far,blah,5,x              far,blah,5,x
     *            |                         |                         |
     *            -----------------------------------------------------
     *                                      |
     *     1:                      foo,bar,10,z   // could have switched with #2
     *     2:                      foo,bar,10,x   // could have switched with #1
     *     3:                      foo,blah,11,z
     *     4:                      far,bar,7,a
     *     5:                      far,blah,5,x   // identical to #6
     *     6:                      far,blah,5,x   // identical to #5
     * All interleaved filters are executed atomically.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v2.RowFilter filters = 1;</code>
     * @param array<\Google\Cloud\Bigtable\V2\RowFilter>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFilters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Bigtable\V2\RowFilter::class);
        $this->filters = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Interleave::class, \Google\Cloud\Bigtable\V2\RowFilter_Interleave::class);

