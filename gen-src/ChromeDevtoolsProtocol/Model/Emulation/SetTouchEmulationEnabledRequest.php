<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setTouchEmulationEnabled command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetTouchEmulationEnabledRequest implements \JsonSerializable
{
	/**
	 * Whether the touch event emulation should be enabled.
	 *
	 * @var bool
	 */
	public $enabled;

	/**
	 * Maximum touch points supported. Defaults to one.
	 *
	 * @var int|null
	 */
	public $maxTouchPoints;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->enabled)) {
			$instance->enabled = (bool)$data->enabled;
		}
		if (isset($data->maxTouchPoints)) {
			$instance->maxTouchPoints = (int)$data->maxTouchPoints;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->enabled !== null) {
			$data->enabled = $this->enabled;
		}
		if ($this->maxTouchPoints !== null) {
			$data->maxTouchPoints = $this->maxTouchPoints;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetTouchEmulationEnabledRequestBuilder
	 */
	public static function builder(): SetTouchEmulationEnabledRequestBuilder
	{
		return new SetTouchEmulationEnabledRequestBuilder();
	}
}
