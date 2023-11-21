<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/metric_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `ListTimeSeries` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.ListTimeSeriesRequest</code>
 */
class ListTimeSeriesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The [project](https://cloud.google.com/monitoring/api/v3#project_name),
     * organization or folder on which to execute the request. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     *     organizations/[ORGANIZATION_ID]
     *     folders/[FOLDER_ID]
     *
     * Generated from protobuf field <code>string name = 10 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. A [monitoring filter](https://cloud.google.com/monitoring/api/v3/filters)
     * that specifies which time series should be returned.  The filter must
     * specify a single metric type, and can additionally specify metric labels
     * and other information. For example:
     *     metric.type = "compute.googleapis.com/instance/cpu/usage_time" AND
     *         metric.labels.instance_name = "my-instance-name"
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $filter = '';
    /**
     * Required. The time interval for which results should be returned. Only time series
     * that contain data points in the specified interval are included
     * in the response.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TimeInterval interval = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $interval = null;
    /**
     * Specifies the alignment of data points in individual time series as
     * well as how to combine the retrieved time series across specified labels.
     * By default (if no `aggregation` is explicitly specified), the raw time
     * series data is returned.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Aggregation aggregation = 5;</code>
     */
    private $aggregation = null;
    /**
     * Apply a second aggregation after `aggregation` is applied. May only be
     * specified if `aggregation` is specified.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Aggregation secondary_aggregation = 11;</code>
     */
    private $secondary_aggregation = null;
    /**
     * Unsupported: must be left blank. The points in each time series are
     * currently returned in reverse time order (most recent to oldest).
     *
     * Generated from protobuf field <code>string order_by = 6;</code>
     */
    private $order_by = '';
    /**
     * Required. Specifies which information is returned about the time series.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.ListTimeSeriesRequest.TimeSeriesView view = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $view = 0;
    /**
     * A positive number that is the maximum number of results to return. If
     * `page_size` is empty or more than 100,000 results, the effective
     * `page_size` is 100,000 results. If `view` is set to `FULL`, this is the
     * maximum number of `Points` returned. If `view` is set to `HEADERS`, this is
     * the maximum number of `TimeSeries` returned.
     *
     * Generated from protobuf field <code>int32 page_size = 8;</code>
     */
    private $page_size = 0;
    /**
     * If this field is not empty then it must contain the `nextPageToken` value
     * returned by a previous call to this method.  Using this field causes the
     * method to return additional results from the previous method call.
     *
     * Generated from protobuf field <code>string page_token = 9;</code>
     */
    private $page_token = '';

    /**
     * @param string                                   $name     Required. The [project](https://cloud.google.com/monitoring/api/v3#project_name),
     *                                                           organization or folder on which to execute the request. The format is:
     *
     *                                                           projects/[PROJECT_ID_OR_NUMBER]
     *                                                           organizations/[ORGANIZATION_ID]
     *                                                           folders/[FOLDER_ID]
     *                                                           Please see {@see MetricServiceClient::workspaceName()} for help formatting this field.
     * @param string                                   $filter   Required. A [monitoring filter](https://cloud.google.com/monitoring/api/v3/filters)
     *                                                           that specifies which time series should be returned.  The filter must
     *                                                           specify a single metric type, and can additionally specify metric labels
     *                                                           and other information. For example:
     *
     *                                                           metric.type = "compute.googleapis.com/instance/cpu/usage_time" AND
     *                                                           metric.labels.instance_name = "my-instance-name"
     * @param \Google\Cloud\Monitoring\V3\TimeInterval $interval Required. The time interval for which results should be returned. Only time series
     *                                                           that contain data points in the specified interval are included
     *                                                           in the response.
     * @param int                                      $view     Required. Specifies which information is returned about the time series.
     *                                                           For allowed values, use constants defined on {@see \Google\Cloud\Monitoring\V3\ListTimeSeriesRequest\TimeSeriesView}
     *
     * @return \Google\Cloud\Monitoring\V3\ListTimeSeriesRequest
     *
     * @experimental
     */
    public static function build(string $name, string $filter, \Google\Cloud\Monitoring\V3\TimeInterval $interval, int $view): self
    {
        return (new self())
            ->setName($name)
            ->setFilter($filter)
            ->setInterval($interval)
            ->setView($view);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The [project](https://cloud.google.com/monitoring/api/v3#project_name),
     *           organization or folder on which to execute the request. The format is:
     *               projects/[PROJECT_ID_OR_NUMBER]
     *               organizations/[ORGANIZATION_ID]
     *               folders/[FOLDER_ID]
     *     @type string $filter
     *           Required. A [monitoring filter](https://cloud.google.com/monitoring/api/v3/filters)
     *           that specifies which time series should be returned.  The filter must
     *           specify a single metric type, and can additionally specify metric labels
     *           and other information. For example:
     *               metric.type = "compute.googleapis.com/instance/cpu/usage_time" AND
     *                   metric.labels.instance_name = "my-instance-name"
     *     @type \Google\Cloud\Monitoring\V3\TimeInterval $interval
     *           Required. The time interval for which results should be returned. Only time series
     *           that contain data points in the specified interval are included
     *           in the response.
     *     @type \Google\Cloud\Monitoring\V3\Aggregation $aggregation
     *           Specifies the alignment of data points in individual time series as
     *           well as how to combine the retrieved time series across specified labels.
     *           By default (if no `aggregation` is explicitly specified), the raw time
     *           series data is returned.
     *     @type \Google\Cloud\Monitoring\V3\Aggregation $secondary_aggregation
     *           Apply a second aggregation after `aggregation` is applied. May only be
     *           specified if `aggregation` is specified.
     *     @type string $order_by
     *           Unsupported: must be left blank. The points in each time series are
     *           currently returned in reverse time order (most recent to oldest).
     *     @type int $view
     *           Required. Specifies which information is returned about the time series.
     *     @type int $page_size
     *           A positive number that is the maximum number of results to return. If
     *           `page_size` is empty or more than 100,000 results, the effective
     *           `page_size` is 100,000 results. If `view` is set to `FULL`, this is the
     *           maximum number of `Points` returned. If `view` is set to `HEADERS`, this is
     *           the maximum number of `TimeSeries` returned.
     *     @type string $page_token
     *           If this field is not empty then it must contain the `nextPageToken` value
     *           returned by a previous call to this method.  Using this field causes the
     *           method to return additional results from the previous method call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\MetricService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The [project](https://cloud.google.com/monitoring/api/v3#project_name),
     * organization or folder on which to execute the request. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     *     organizations/[ORGANIZATION_ID]
     *     folders/[FOLDER_ID]
     *
     * Generated from protobuf field <code>string name = 10 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The [project](https://cloud.google.com/monitoring/api/v3#project_name),
     * organization or folder on which to execute the request. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     *     organizations/[ORGANIZATION_ID]
     *     folders/[FOLDER_ID]
     *
     * Generated from protobuf field <code>string name = 10 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. A [monitoring filter](https://cloud.google.com/monitoring/api/v3/filters)
     * that specifies which time series should be returned.  The filter must
     * specify a single metric type, and can additionally specify metric labels
     * and other information. For example:
     *     metric.type = "compute.googleapis.com/instance/cpu/usage_time" AND
     *         metric.labels.instance_name = "my-instance-name"
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Required. A [monitoring filter](https://cloud.google.com/monitoring/api/v3/filters)
     * that specifies which time series should be returned.  The filter must
     * specify a single metric type, and can additionally specify metric labels
     * and other information. For example:
     *     metric.type = "compute.googleapis.com/instance/cpu/usage_time" AND
     *         metric.labels.instance_name = "my-instance-name"
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Required. The time interval for which results should be returned. Only time series
     * that contain data points in the specified interval are included
     * in the response.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TimeInterval interval = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Monitoring\V3\TimeInterval|null
     */
    public function getInterval()
    {
        return $this->interval;
    }

    public function hasInterval()
    {
        return isset($this->interval);
    }

    public function clearInterval()
    {
        unset($this->interval);
    }

    /**
     * Required. The time interval for which results should be returned. Only time series
     * that contain data points in the specified interval are included
     * in the response.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TimeInterval interval = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Monitoring\V3\TimeInterval $var
     * @return $this
     */
    public function setInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\TimeInterval::class);
        $this->interval = $var;

        return $this;
    }

    /**
     * Specifies the alignment of data points in individual time series as
     * well as how to combine the retrieved time series across specified labels.
     * By default (if no `aggregation` is explicitly specified), the raw time
     * series data is returned.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Aggregation aggregation = 5;</code>
     * @return \Google\Cloud\Monitoring\V3\Aggregation|null
     */
    public function getAggregation()
    {
        return $this->aggregation;
    }

    public function hasAggregation()
    {
        return isset($this->aggregation);
    }

    public function clearAggregation()
    {
        unset($this->aggregation);
    }

    /**
     * Specifies the alignment of data points in individual time series as
     * well as how to combine the retrieved time series across specified labels.
     * By default (if no `aggregation` is explicitly specified), the raw time
     * series data is returned.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Aggregation aggregation = 5;</code>
     * @param \Google\Cloud\Monitoring\V3\Aggregation $var
     * @return $this
     */
    public function setAggregation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\Aggregation::class);
        $this->aggregation = $var;

        return $this;
    }

    /**
     * Apply a second aggregation after `aggregation` is applied. May only be
     * specified if `aggregation` is specified.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Aggregation secondary_aggregation = 11;</code>
     * @return \Google\Cloud\Monitoring\V3\Aggregation|null
     */
    public function getSecondaryAggregation()
    {
        return $this->secondary_aggregation;
    }

    public function hasSecondaryAggregation()
    {
        return isset($this->secondary_aggregation);
    }

    public function clearSecondaryAggregation()
    {
        unset($this->secondary_aggregation);
    }

    /**
     * Apply a second aggregation after `aggregation` is applied. May only be
     * specified if `aggregation` is specified.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Aggregation secondary_aggregation = 11;</code>
     * @param \Google\Cloud\Monitoring\V3\Aggregation $var
     * @return $this
     */
    public function setSecondaryAggregation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\Aggregation::class);
        $this->secondary_aggregation = $var;

        return $this;
    }

    /**
     * Unsupported: must be left blank. The points in each time series are
     * currently returned in reverse time order (most recent to oldest).
     *
     * Generated from protobuf field <code>string order_by = 6;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Unsupported: must be left blank. The points in each time series are
     * currently returned in reverse time order (most recent to oldest).
     *
     * Generated from protobuf field <code>string order_by = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

    /**
     * Required. Specifies which information is returned about the time series.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.ListTimeSeriesRequest.TimeSeriesView view = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Required. Specifies which information is returned about the time series.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.ListTimeSeriesRequest.TimeSeriesView view = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Monitoring\V3\ListTimeSeriesRequest\TimeSeriesView::class);
        $this->view = $var;

        return $this;
    }

    /**
     * A positive number that is the maximum number of results to return. If
     * `page_size` is empty or more than 100,000 results, the effective
     * `page_size` is 100,000 results. If `view` is set to `FULL`, this is the
     * maximum number of `Points` returned. If `view` is set to `HEADERS`, this is
     * the maximum number of `TimeSeries` returned.
     *
     * Generated from protobuf field <code>int32 page_size = 8;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * A positive number that is the maximum number of results to return. If
     * `page_size` is empty or more than 100,000 results, the effective
     * `page_size` is 100,000 results. If `view` is set to `FULL`, this is the
     * maximum number of `Points` returned. If `view` is set to `HEADERS`, this is
     * the maximum number of `TimeSeries` returned.
     *
     * Generated from protobuf field <code>int32 page_size = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * If this field is not empty then it must contain the `nextPageToken` value
     * returned by a previous call to this method.  Using this field causes the
     * method to return additional results from the previous method call.
     *
     * Generated from protobuf field <code>string page_token = 9;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * If this field is not empty then it must contain the `nextPageToken` value
     * returned by a previous call to this method.  Using this field causes the
     * method to return additional results from the previous method call.
     *
     * Generated from protobuf field <code>string page_token = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

