<?php

namespace ChromeDevtoolsProtocol\Model\Tracing;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StartRequestBuilder
{
	private $categories;
	private $options;
	private $bufferUsageReportingInterval;
	private $transferMode;
	private $streamFormat;
	private $streamCompression;
	private $traceConfig;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): StartRequest
	{
		$instance = new StartRequest();
		$instance->categories = $this->categories;
		$instance->options = $this->options;
		$instance->bufferUsageReportingInterval = $this->bufferUsageReportingInterval;
		$instance->transferMode = $this->transferMode;
		$instance->streamFormat = $this->streamFormat;
		$instance->streamCompression = $this->streamCompression;
		$instance->traceConfig = $this->traceConfig;
		return $instance;
	}


	/**
	 * @param string|null $categories
	 *
	 * @return self
	 */
	public function setCategories($categories): self
	{
		$this->categories = $categories;
		return $this;
	}


	/**
	 * @param string|null $options
	 *
	 * @return self
	 */
	public function setOptions($options): self
	{
		$this->options = $options;
		return $this;
	}


	/**
	 * @param int|float|null $bufferUsageReportingInterval
	 *
	 * @return self
	 */
	public function setBufferUsageReportingInterval($bufferUsageReportingInterval): self
	{
		$this->bufferUsageReportingInterval = $bufferUsageReportingInterval;
		return $this;
	}


	/**
	 * @param string|null $transferMode
	 *
	 * @return self
	 */
	public function setTransferMode($transferMode): self
	{
		$this->transferMode = $transferMode;
		return $this;
	}


	/**
	 * @param string $streamFormat
	 *
	 * @return self
	 */
	public function setStreamFormat($streamFormat): self
	{
		$this->streamFormat = $streamFormat;
		return $this;
	}


	/**
	 * @param string $streamCompression
	 *
	 * @return self
	 */
	public function setStreamCompression($streamCompression): self
	{
		$this->streamCompression = $streamCompression;
		return $this;
	}


	/**
	 * @param TraceConfig|null $traceConfig
	 *
	 * @return self
	 */
	public function setTraceConfig($traceConfig): self
	{
		$this->traceConfig = $traceConfig;
		return $this;
	}
}
