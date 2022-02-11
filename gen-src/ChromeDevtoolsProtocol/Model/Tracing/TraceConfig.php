<?php

namespace ChromeDevtoolsProtocol\Model\Tracing;

/**
 * Named type Tracing.TraceConfig.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TraceConfig implements \JsonSerializable
{
	/**
	 * Controls how the trace buffer stores data.
	 *
	 * @var string|null
	 */
	public $recordMode;

	/**
	 * Turns on JavaScript stack sampling.
	 *
	 * @var bool|null
	 */
	public $enableSampling;

	/**
	 * Turns on system tracing.
	 *
	 * @var bool|null
	 */
	public $enableSystrace;

	/**
	 * Turns on argument filter.
	 *
	 * @var bool|null
	 */
	public $enableArgumentFilter;

	/**
	 * Included category filters.
	 *
	 * @var string[]|null
	 */
	public $includedCategories;

	/**
	 * Excluded category filters.
	 *
	 * @var string[]|null
	 */
	public $excludedCategories;

	/**
	 * Configuration to synthesize the delays in tracing.
	 *
	 * @var string[]|null
	 */
	public $syntheticDelays;

	/**
	 * Configuration for memory dump triggers. Used only when "memory-infra" category is enabled.
	 *
	 * @var MemoryDumpConfig|null
	 */
	public $memoryDumpConfig;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->recordMode)) {
			$instance->recordMode = (string)$data->recordMode;
		}
		if (isset($data->enableSampling)) {
			$instance->enableSampling = (bool)$data->enableSampling;
		}
		if (isset($data->enableSystrace)) {
			$instance->enableSystrace = (bool)$data->enableSystrace;
		}
		if (isset($data->enableArgumentFilter)) {
			$instance->enableArgumentFilter = (bool)$data->enableArgumentFilter;
		}
		if (isset($data->includedCategories)) {
			$instance->includedCategories = [];
			foreach ($data->includedCategories as $item) {
				$instance->includedCategories[] = (string)$item;
			}
		}
		if (isset($data->excludedCategories)) {
			$instance->excludedCategories = [];
			foreach ($data->excludedCategories as $item) {
				$instance->excludedCategories[] = (string)$item;
			}
		}
		if (isset($data->syntheticDelays)) {
			$instance->syntheticDelays = [];
			foreach ($data->syntheticDelays as $item) {
				$instance->syntheticDelays[] = (string)$item;
			}
		}
		if (isset($data->memoryDumpConfig)) {
			$instance->memoryDumpConfig = MemoryDumpConfig::fromJson($data->memoryDumpConfig);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->recordMode !== null) {
			$data->recordMode = $this->recordMode;
		}
		if ($this->enableSampling !== null) {
			$data->enableSampling = $this->enableSampling;
		}
		if ($this->enableSystrace !== null) {
			$data->enableSystrace = $this->enableSystrace;
		}
		if ($this->enableArgumentFilter !== null) {
			$data->enableArgumentFilter = $this->enableArgumentFilter;
		}
		if ($this->includedCategories !== null) {
			$data->includedCategories = [];
			foreach ($this->includedCategories as $item) {
				$data->includedCategories[] = $item;
			}
		}
		if ($this->excludedCategories !== null) {
			$data->excludedCategories = [];
			foreach ($this->excludedCategories as $item) {
				$data->excludedCategories[] = $item;
			}
		}
		if ($this->syntheticDelays !== null) {
			$data->syntheticDelays = [];
			foreach ($this->syntheticDelays as $item) {
				$data->syntheticDelays[] = $item;
			}
		}
		if ($this->memoryDumpConfig !== null) {
			$data->memoryDumpConfig = $this->memoryDumpConfig->jsonSerialize();
		}
		return $data;
	}
}
