<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setPressureDataOverride command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPressureDataOverrideRequest implements \JsonSerializable
{
	/** @var string */
	public $source;

	/** @var string */
	public $state;

	/** @var int|float|null */
	public $ownContributionEstimate;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->source)) {
			$instance->source = (string)$data->source;
		}
		if (isset($data->state)) {
			$instance->state = (string)$data->state;
		}
		if (isset($data->ownContributionEstimate)) {
			$instance->ownContributionEstimate = $data->ownContributionEstimate;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->source !== null) {
			$data->source = $this->source;
		}
		if ($this->state !== null) {
			$data->state = $this->state;
		}
		if ($this->ownContributionEstimate !== null) {
			$data->ownContributionEstimate = $this->ownContributionEstimate;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetPressureDataOverrideRequestBuilder
	 */
	public static function builder(): SetPressureDataOverrideRequestBuilder
	{
		return new SetPressureDataOverrideRequestBuilder();
	}
}
