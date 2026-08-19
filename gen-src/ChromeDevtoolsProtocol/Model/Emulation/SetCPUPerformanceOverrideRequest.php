<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setCPUPerformanceOverride command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetCPUPerformanceOverrideRequest implements \JsonSerializable
{
	/**
	 * Override value. Omitting the parameter disables the override.
	 *
	 * @var string|null
	 */
	public $performanceTier;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->performanceTier)) {
			$instance->performanceTier = (string)$data->performanceTier;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->performanceTier !== null) {
			$data->performanceTier = $this->performanceTier;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetCPUPerformanceOverrideRequestBuilder
	 */
	public static function builder(): SetCPUPerformanceOverrideRequestBuilder
	{
		return new SetCPUPerformanceOverrideRequestBuilder();
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
