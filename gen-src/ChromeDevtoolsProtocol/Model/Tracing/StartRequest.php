<?php

namespace ChromeDevtoolsProtocol\Model\Tracing;

/**
 * Request for Tracing.start command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StartRequest implements \JsonSerializable
{
	/**
	 * Category/tag filter
	 *
	 * @var string|null
	 */
	public $categories;

	/**
	 * Tracing options
	 *
	 * @var string|null
	 */
	public $options;

	/**
	 * If set, the agent will issue bufferUsage events at this interval, specified in milliseconds
	 *
	 * @var int|float|null
	 */
	public $bufferUsageReportingInterval;

	/**
	 * Whether to report trace events as series of dataCollected events or to save trace to a stream (defaults to `ReportEvents`).
	 *
	 * @var string|null
	 */
	public $transferMode;

	/**
	 * Trace data format to use. This only applies when using `ReturnAsStream` transfer mode (defaults to `json`).
	 *
	 * @var string
	 */
	public $streamFormat;

	/**
	 * Compression format to use. This only applies when using `ReturnAsStream` transfer mode (defaults to `none`)
	 *
	 * @var string
	 */
	public $streamCompression;

	/** @var TraceConfig|null */
	public $traceConfig;

	/**
	 * Base64-encoded serialized perfetto.protos.TraceConfig protobuf message When specified, the parameters `categories`, `options`, `traceConfig` are ignored. (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string|null
	 */
	public $perfettoConfig;

	/**
	 * Backend type (defaults to `auto`)
	 *
	 * @var string
	 */
	public $tracingBackend;

	/**
	 * Maximum width and height (in pixels) of each captured screenshot. Only used when the `disabled-by-default-devtools.screenshot` category is enabled. Defaults to 500. The combined memory footprint of screenshots (`screenshotMaxSize` * `screenshotMaxSize` * 4 * `screenshotMaxCount`) is clamped to the existing per-session budget.
	 *
	 * @var int|null
	 */
	public $screenshotMaxSize;

	/**
	 * Maximum number of screenshots captured during a single tracing session. Only used when the `disabled-by-default-devtools.screenshot` category is enabled. Defaults to 450. Clamped together with `screenshotMaxSize` to stay within the per-session screenshot memory budget.
	 *
	 * @var int|null
	 */
	public $screenshotMaxCount;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->categories)) {
			$instance->categories = (string)$data->categories;
		}
		if (isset($data->options)) {
			$instance->options = (string)$data->options;
		}
		if (isset($data->bufferUsageReportingInterval)) {
			$instance->bufferUsageReportingInterval = $data->bufferUsageReportingInterval;
		}
		if (isset($data->transferMode)) {
			$instance->transferMode = (string)$data->transferMode;
		}
		if (isset($data->streamFormat)) {
			$instance->streamFormat = (string)$data->streamFormat;
		}
		if (isset($data->streamCompression)) {
			$instance->streamCompression = (string)$data->streamCompression;
		}
		if (isset($data->traceConfig)) {
			$instance->traceConfig = TraceConfig::fromJson($data->traceConfig);
		}
		if (isset($data->perfettoConfig)) {
			$instance->perfettoConfig = (string)$data->perfettoConfig;
		}
		if (isset($data->tracingBackend)) {
			$instance->tracingBackend = (string)$data->tracingBackend;
		}
		if (isset($data->screenshotMaxSize)) {
			$instance->screenshotMaxSize = (int)$data->screenshotMaxSize;
		}
		if (isset($data->screenshotMaxCount)) {
			$instance->screenshotMaxCount = (int)$data->screenshotMaxCount;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->categories !== null) {
			$data->categories = $this->categories;
		}
		if ($this->options !== null) {
			$data->options = $this->options;
		}
		if ($this->bufferUsageReportingInterval !== null) {
			$data->bufferUsageReportingInterval = $this->bufferUsageReportingInterval;
		}
		if ($this->transferMode !== null) {
			$data->transferMode = $this->transferMode;
		}
		if ($this->streamFormat !== null) {
			$data->streamFormat = $this->streamFormat;
		}
		if ($this->streamCompression !== null) {
			$data->streamCompression = $this->streamCompression;
		}
		if ($this->traceConfig !== null) {
			$data->traceConfig = $this->traceConfig->jsonSerialize();
		}
		if ($this->perfettoConfig !== null) {
			$data->perfettoConfig = $this->perfettoConfig;
		}
		if ($this->tracingBackend !== null) {
			$data->tracingBackend = $this->tracingBackend;
		}
		if ($this->screenshotMaxSize !== null) {
			$data->screenshotMaxSize = $this->screenshotMaxSize;
		}
		if ($this->screenshotMaxCount !== null) {
			$data->screenshotMaxCount = $this->screenshotMaxCount;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return StartRequestBuilder
	 */
	public static function builder(): StartRequestBuilder
	{
		return new StartRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
